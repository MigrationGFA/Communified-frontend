<?php
namespace App\Controllers;
use App\Models\CalendarModel;
use PHPMailer\PHPMailer\PHPMailer;

class CalendarController extends BaseController
{
    protected $calendarModel;
    protected $gfa_model;
    
    public function __construct() { 
        $this->calendarModel = new CalendarModel();
        $this->gfa_model = model('App\Models\GfaModel');
        helper('translate');
    }

  
    public function index()
    {
        $email  = session()->get('email');
        // echo $email;
        $account_type = session()->get('account_type');
        
        if(!$email || !$account_type){ return redirect()->to(base_url('gfa/login')); }
        
        $data['email'] =  $email;
        
        // if($account_type == 'investor' OR $account_type == 'corperate' || $account_type == 'accelerator'){
        //     $data['guests'] = $this->gfa_model->getAllUserDetails();
        //     $data['events'] = $this->calendarModel->getAllEvents($email);
        //     return view('calendar', $data);
        // }
        // elseif($account_type == 'mentorship'){
        //     $data['guests'] = $this->gfa_model->getAllUserDetails();
        //     $data['events'] = $this->calendarModel->getAllEvents($email);
        //     return view('calendar', $data);
        // }
        // elseif($account_type == 'startup' || $account_type == 'individual'){
            $data['guests'] = $this->gfa_model->getAllUserDetails();
            $data['events'] = $this->calendarModel->getAllStartupEvents($email);
            return view('calendar', $data);
        // }
    }

    public function create()
    {
    	$email  = session()->get('email');
    
        $eventTitle = $this->request->getPost("eventTitle");
        $startDate =   $this->request->getPost("startDate");
        $endDate = $this->request->getPost("endDate");
        $eventURL = $this->request->getPost("eventURL");
        $location = $this->request->getPost("location");
        $host = $this->request->getPost("host");
        $guests = $this->request->getPost("guests");
        $eventLabel = $this->request->getPost("eventLabel");
        $eventDescription = $this->request->getPost("eventDescription");


        $result = $this->calendarModel->insertEvent([
            "eventTitle" => $eventTitle,
            "startDate" => $startDate,
            "endDate" => $endDate,
            "eventURL" => $eventURL,
            "location" => $location,
            "host" => $host,
            "guests" => $guests,
            "eventLabel" => $eventLabel,
            "eventDescription" => $eventDescription
        ]);

        if ($result) {
        	$ref_id = bin2hex(random_bytes(32));
            $subject = "Événement à venir!";
            // $subject = "Upcoming Event: You're a Guest in a Scheduled Event";
            $message = "Vous avez été invité à un évènement. Merci de consulter votre agenda pour les informations détaillées. 
";
            $email_notifiers = json_decode($guests, true);
            
            foreach($email_notifiers as $email_notifier) {
                $this->gfa_model->allNotification($email_notifier, $subject, $ref_id);
    	        $this->gfa_model->allNotificationBox($subject,$message, $email, $email_notifier,$ref_id);
                $this->sendMail($email_notifier, $message, $subject);
            }
            return $this->response->setJSON(['success' => true, 'data' => $result]);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Error creating event']);
        }
    }
    
    public function update()
    {
		$email  = session()->get('email');
        $id = $this->request->getPost('id');

        $eventTitle = $this->request->getPost('eventTitle');
        $startDate =  $this->request->getPost('startDate');
        $endDate = $this->request->getPost('endDate');
        $eventURL = $this->request->getPost('eventURL');
        $location = $this->request->getPost('location');
        $guests = $this->request->getPost('guests');
        $eventLabel = $this->request->getPost('eventLabel');
        $eventDescription = $this->request->getPost('eventDescription');

        $data = [$eventTitle, $startDate, $endDate, $eventURL, $location, $guests, $eventLabel, $eventDescription];
        
        $result = $this->calendarModel->updateEvent($id, $data);

        if ($result) {
        	$ref_id = bin2hex(random_bytes(32));
            $subject = "Événement à venir mis à jour !";
            // $subject = "Upcoming Event: You're a Guest in a Scheduled Event";
            $message = "Consultez votre calendrier pour les détails.";
            $email_notifiers = json_decode($guests, true);
            
            foreach($email_notifiers as $email_notifier) {
                $this->gfa_model->allNotification($email_notifier, $subject, $ref_id);
    	        $this->gfa_model->allNotificationBox($subject,$message, $email, $email_notifier,$ref_id);
                $this->sendMail($email_notifier, $message, $subject);
            }
            return $this->response->setJSON(['success' => true, 'message' => $result]);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Failed to update event.']);
        }        
    }

    public function delete()
    {
        $email = session()->get('email');
        $eventId = $this->request->getPost('eventId');

        // Fetch the event details
        $res = $this->calendarModel->getSingleEvent($eventId);

        if (!$res) {
            return $this->response->setJSON(['success' => false, 'message' => 'Event not found']);
        }

        $guests = json_decode($res['guests'], true); // Decode guests JSON data

        // Delete the event
        $result = $this->calendarModel->deleteEvent($eventId);

        if ($result) {
            $ref_id = bin2hex(random_bytes(32));
            $subject = "Événement à venir supprimé !";
            $message = "Consultez votre calendrier pour les détails.";

            // Notify all guests
            foreach ($guests as $email_notifier) {
                $this->gfa_model->allNotification($email_notifier, $subject, $ref_id);
                $this->gfa_model->allNotificationBox($subject, $message, $email, $email_notifier, $ref_id);
                $this->sendMail($email_notifier, $message, $subject);
            }

            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Error deleting event']);
        }
    }

    public function sendMail($recipient_email, $message,$subject)
    {
        $mail = new PHPMailer;
        $mail->isSMTP(); 
        $mail->Host = "mail.smtp2go.com";
        $mail->SMTPAuth = true;                    
        $mail->Username = "cipme.ci";
        $mail->Password ="R4Qz93FHdRIL2FvN"; 
        $mail->SMTPSecure = 'ssl';                 
        $mail->Port =465;                          
        $mail->From ="info@cipme.ci";
        $mail->FromName ="CIPME";
        //$mail->addReplyTo('info@trixpmedia.com');
        $mail->addAddress($recipient_email);
        //$mail->addBCC('bcc@example.com');

        // Set character encoding and HTML format
		$mail->CharSet = 'UTF-8';
        
        $mail->isHTML(true);  // Set email format to HTML
        
        $bodyContent = $message;
        
        
        $mail->Subject =$subject;
        $mail->Body    = $message;
        
        if(!$mail->send()) {
           // echo '1';
            return '1';
        } else {
           return '2';
        }
    }

    
}
