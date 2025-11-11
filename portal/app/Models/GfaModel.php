<?php

namespace App\Models;

use CodeIgniter\Model;

class GfaModel extends Model
{

    protected $table = 'payment';

    public function __construct()
    {
        parent::__construct();
        $this->db = db_connect();
    }

    public function getDay($day)
    {
        $dowMap = array('SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT');

        return $dowMap[$day];
    }
    
    public function insertPageViewEvent($data)
    {       
        $query = $this->db->table('page_view_events')->insert($data);
        
        if ($query)
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
    }

    function creditPointScore($email){
    if(!empty($this->getStartUpDetailsExt($email)[0]['Country_Incorporate'])){
                
            $point_1 = 3;
            $credit_1 = 1;
            }else{
                $point_1 = 0;
                $credit_1 = 0;
            }
            if(!empty($this->getStartUpDetails($email)[0]['CountryHQ'])){
                
            $point_2 = 5;
            $credit_2 = 1;
            }else{
                $point_2 = 0; 
                $credit_2 = 0;
            }
            if(!empty($this->getStartUpDetails($email)[0]['PrimaryBusinessIndustry'])){
            $point_3 = 5;
            $credit_3 = 2;
            }else{
                $credit_3 = 0;
                $point_3= 0;
            }
            if(!empty($this->getStartUpDetails($email)[0]['LinkedIn'])){
            $point_4 = 1; 
            $credit_4 = 1;
            }else{
                $credit_4 = 0;
                $point_4= 0;
            }
            
            if(!empty($this->getStartUpDetails($email)[0]['Startup_Company_Name'])){
            $point_5 = 5; 
            $credit_5 = 2;
            }else{
                $point_5= 0;
                $credit_5 = 0;
            }
            
            
            if(!empty($this->getStartUpDetails($email)[0]['Address'])){
            $point_6 = 3; 
            $credit_6 = 1;
            }else{
                $point_6= 0;
                $credit_6 = 0;
            }
            
            if(!empty($this->getStartUpDetails($email)[0]['NoOfEmployees'])){
            $point_7 = 1; 
            $credit_7 = 1;
            }else{
                $point_7= 0;
                $credit_7 = 0;
            }
            
            if(!empty($this->getStartUpDetails($email)[0]['OperatingRegions'])){
            $point_8 = 5; 
            $credit_8 = 1;
            }else{
                $point_8= 0;
                $credit_8 = 0;
            }
            
            if(!empty($this->getStartUpDetails($email)[0]['Next_Funding_Round_Target_Sought'])){
            $point_9 = 5; 
            $credit_9 = 1;
            }else{
                $point_9= 0;
                $credit_9 = 0;
            }
            
            
            
            if(!empty($this->getStartUpDetails($email)[0]['Date_Founded'])){
            $point_10 = 1; 
            $credit_10 = 1;
            }else{
                $point_10= 0;
                $credit_10 = 0;
            }
            
            if(!empty($this->getStartUpDetails($email)[0]['Revenue'])){
            $point_11 = 3; 
            $credit_11 = 1;
            }else{
                $point_11= 0;
                $credit_11 = 0;
            }
            
            if(!empty($this->getStartUpDetails($email)[0]['Investment_History'])){
            $point_12 = 5; 
            $credit_12 = 1;
            }else{
                $point_12= 0;
                $credit_12 = 0;
            }
            
                if(!empty($this->getLogoUploaded($email)[0]['Photo_name'])){
            $point_13 = 1; 
            $credit_13 = 1;
            }else{
                $point_13= 1;
                $credit_13 = 0;
            }
            
            if(!empty($this->getStartUpDetails($email)[0]['Website'])){
            $point_14 = 1; 
            $credit_14 = 1;
            }else{
                $point_14= 0;
                $credit_14 = 0;
            }
            
            if(!empty($this->getStartUpDetails($email)[0]['CurrentInvestmentStage'])){
            $point_15 = 5; 
            $credit_15 = 1;
            }else{
                $point_15= 0;
                $credit_15 = 0;
            }
            
            if(!empty($this->getStartUpDetails($email)[0]['Startup_Implementation_Stage'])){
            $point_16 = 5; 
            $credit_16 = 1;
            }else{
                $point_16= 0;
                $credit_16 = 0;
            }
            
            if(!empty($this->getStartUpDetailsExt($email)[0]['Monthly_Revenue'])){
            $point_17 = 3; 
            $credit_17 = 1;
            }else{
                $point_17= 0;
                $credit_17 = 0;
            }
            if(!empty($this->getStartUpDetailsExt($email)[0]['Amount_Raise'])){
            $point_18 = 3; 
            $credit_18 = 1;
            }else{
                $point_18= 0;
                $credit_18 = 0;
            }
            if(!empty($this->getStartUpDetailsExt($email)[0]['Minimum_Growth'])){
            $point_19 = 3; 
            $credit_19 = 1;
            }else{
                $point_19= 0;
                $credit_19 = 0;
            }
            if(!empty($this->getStartUpDetailsExt($email)[0]['Valuation'])){
            $point_20 = 3; 
            $credit_20 = 1;
            }else{
                $point_20= 0;
                $credit_20 = 0;
            }
            if(!empty($this->getStartUpDetailsExt($email)[0]['Product'])){
            $point_21 = 3; 
            $credit_21 = 1;
            }else{
                $point_21= 0;
                $credit_21 = 0;
            }
            if(!empty($this->getStartUpDetailsExt($email)[0]['Social_Impact'])){
            $point_22 = 3; 
            $credit_22 = 1;
            }else{
                $point_22= 0;
                $credit_22 = 0;
            }
            if(!empty($this->getStartUpDetailsExt($email)[0]['Serial_Entrepreneur'])){
            $point_23 = 3; 
            $credit_23 = 1;
            }else{
                $point_23= 0;
                $credit_23 = 0;
            }
            if(!empty($this->getStartUpDetailsExt($email)[0]['Scaling'])){
            $point_24 = 3; 
            $credit_24 = 1;
            }else{
                $point_24= 0;
                $credit_24 = 0;
            }
            if(!empty($this->getStartUpDetailsExt($email)[0]['Startup_Core'])){
            $point_25 = 3; 
            $credit_25 = 1;
            }else{
                $point_25= 0;
                $credit_25 = 0;
            }
            if(!empty($this->getStartUpDetailsExt($email)[0]['Funding_Type'])){
            $point_26 = 3; 
            $credit_26 = 1;
            }else{
                $point_26= 0;
                $credit_26 = 0;
            }
            if(!empty($this->getStartUpDetailsExt($email)[0]['Startup_Level'])){
            $point_27 = 3; 
            $credit_27 = 1;
            }else{
                $point_27= 0;
                $credit_27 = 0;
            }
            if(!empty($this->getStartUpDetailsExt($email)[0]['Startup_Accelerator'])){
            $point_28 = 3; 
            $credit_28 = 1;
            }else{
                $point_28= 0;
                $credit_28 = 0;
            }
            if(!empty($this->getStartUpDetailsExt($email)[0]['Startup_Partner'])){
            $point_29 = 3; 
            $credit_29 = 1;
            }else{
                $point_29= 0;
                $credit_29 = 0;
            }
            if(!empty($this->getStartUpDetailsExt($email)[0]['Startup_Percent'])){
            $point_30 = 3; 
            $credit_30 = 1;
            }else{
                $point_30= 0;
                $credit_30 = 0;
            }
            if(!empty($this->getStartUpDetailsExt($email)[0]['Startup_Phone'])){
            $point_31 = 1; 
            $credit_31 = 1;
            }else{
                $point_31= 0;
                $credit_31 = 0;
            }
            if(!empty($this->getStartUpDetailsExt($email)[0]['Startup_Model'])){
            $point_32 = 3; 
            $credit_32 = 1;
            }else{
                $point_32= 0;
                $credit_32 = 0;
            }
        
    
        
        
        //$data['point']= ceil((($point_1 + $point_2 + $point_3 + $point_4 + $point_5+ $point_6 + $point_7 + $point_8 + $point_9 + $point_10 + $point_11 + $point_12 + $point_13)/415)*100) ;
       $pointScore= $point_1 + $point_2 + $point_3 + $point_4 + $point_5+ $point_6 + $point_7 + $point_8 + $point_9 + $point_10 + $point_11 + $point_12 + $point_13 
        + $point_14 + $point_15 + $point_16 + $point_17 + $point_18 + $point_19 + $point_20 + $point_21 + $point_22 + $point_23 + $point_24 + $point_25 + $point_26 +
        $point_27 + $point_28 + $point_29 + $point_30 + $point_31 + $point_32;
       
    return $pointScore;
}
#=======================Resources================================
public function checkEmail($email)
{           
        $builder = $this->db->table('login');
        $builder->orderBy('id', 'desc');
        $builder->where('email', $email);
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return $query->getResultArray();
        } else {
            return 0;
        }
    
            
}
public function insertProfileSub($data)
{       
    $query = $this->db->table('unleash_register')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}
public function insertUnleahSub($data)
{       
    $query = $this->db->table('unleash_sub')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}
public function insertClickedDownlaodResource($data)
{       
    $query = $this->db->table('downloaded_resources')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}
public function insertCommentsResource($data)
{       
    $query = $this->db->table('comments_resource')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}
public function getUnleashifiedSub($ref, $status){
    
        $builder = $this->db->table('unleash_sub');
        $builder->where('ref', $ref);
        $builder->where('status', $status);
        $builder->orderBy('id', 'asc');
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
    
}
public function getUnleashifiedProfile($email){
    
        $builder = $this->db->table('unleash_register');
        $builder->where('email', $email);
        $builder->orderBy('id', 'asc');
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
    
}
public function getCommentsResource($id){
    
        $builder = $this->db->table('comments_resource');
        $builder->where('resource_id', $id);
        $builder->orderBy('id', 'asc');
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
    
}
public function getFileType($target_file){

     	$tmp = explode(".",$target_file);
	switch ($tmp[count($tmp)-1]) {
  case "pdf": $ctype="application/pdf"; break;
  case "exe": $ctype="application/octet-stream"; break;
  case "zip": $ctype="application/zip"; break;
  case "docx":
  case "doc": $ctype="application/vnd.openxmlformats-officedocument.wordprocessingml.document"; break;
  case "csv":
  case "xls":
  case "xlsx": $ctype="application/vnd.ms-excel"; break;
  case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
  case "gif": $ctype="image/gif"; break;
  case "png": $ctype="image/png"; break;
  case "jpeg":
  case "jpg": $ctype="image/jpg"; break;
  case "tif":
  case "tiff": $ctype="image/tiff"; break;
  case "psd": $ctype="image/psd"; break;
  case "bmp": $ctype="image/bmp"; break;
  case "ico": $ctype="image/vnd.microsoft.icon"; break;
  default: $ctype="application/force-download";
}

header("Content-Transfer-Encoding: BINARY");
		header('Content-Description: File Transfer');
     	header("Content-length: ".filesize($target_file));
		header("Content-type: $ctype");
    	 header("Content-disposition: attachment; filename=\"".basename($target_file)."\"");
     	readfile($target_file);	
}
public function getResouceById($id){
    
        $builder = $this->db->table('resource');
        $builder->where('id', $id);
        $builder->orderBy('id', 'desc');
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
    
}

public function getResouceCategoryId($id){
    
        $builder = $this->db->table('resource_category');
        $builder->where('id', $id);
        $builder->orderBy('id', 'desc');
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
    
}

public function getResouceByCategoryId($categoryId){
    
        $builder = $this->db->table('resource');
        $builder->where('category_id', $categoryId);
        $builder->orderBy('id', 'desc');
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
    
}


#========================End Resouce================================




// ================== Beginning of Tickets ==========================

public function getTicketMaxId()
{
    $query = $this->db->table('support_tickets')->selectMax('id')->get();
    $row = $query->getRow();
    
    return $row->id;
}

public function getGuestTicketEmail($ticket_id)
{           
        $builder = $this->db->table('support_tickets');
        $builder->where('ticket_id', $ticket_id);
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getTicketRole($ticket_id)
{           
        $builder = $this->db->table('support_tickets_msg');
        $builder->where('ticket_id', $ticket_id);
		$builder->orderBy('date_updated', "desc");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray()[0]['role'];
        }
        else
        {
            return 0;
        }
            
}

public function getAllUserTickets($created_by)
{           
    $query = $this->db->query("CALL GetAllUserTickets(?)", [$created_by]);
    
    return $query->getResultArray();
    
}

public function getAllTickets()
{           
    $query = $this->db->query("CALL GetAllUniqueTickets()");
    
    return $query->getResultArray();
    
}

public function getOneTicket($id)
{           
    $query = $this->db->query("CALL GetOneTicket(?)", [$id]);
    
    return $query->getResultArray();
    
}
public function getViewTickets($t_id)
{           
    $query = $this->db->query("CALL GetViewTickets(?)", [$t_id]);
    
    return $query->getResultArray();
    
}
public function getTicketLastUpdate($ticket_id)
{           
    $query = $this->db->query("CALL GetTicketLastUpdate(?)", [$ticket_id]);
    
    return $query->getResultArray()[0]['date_updated'];
            
}

public function updateTicketStatus($columnName, $value, $id)
{
    $this->db->table('support_tickets')
        ->set($columnName, $value)
        ->where('ticket_id', $id)
        ->update();

    return $this->db->affectedRows();
}

public function insertCustomerQuote($data)
{       
    $query = $this->db->table('get_quote')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}


public function insertConsultationRequest($data)
{       
    $query = $this->db->table('unleashified_consultations')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}


public function insertCustomerContact($data)
{       
    $query = $this->db->table('unleash_contact')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function insertNewsletter($data)
{       
    $query = $this->db->table('unleash_newsletter')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}


public function insertSTicket($data)
{       
    $query = $this->db->table('support_tickets')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function insertSMTicket($data)
{       
    $query = $this->db->table('support_tickets_msg')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}


// ================== End of Tickets ==========================




#============================SME====================================

public function countAllSME()
{			
    $query = $this->db->table('login')
    ->whereIn('account_type', ['startup','individual'])
    ->get();

    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
                
}

public function countAllUsersIndividuals()
{			
    $builder = $this->db->table('login');

    $builder->where('account_type', 'individual')
            ->orWhere('account_type', null);
			//->get();
 	$query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
			
}

#======================Procedure==================================
public function GetUserDashboard($email){

    $query = $this->db->query("CALL GetUserDashboard(?)", [$email]);
   
   return $query->getResultArray(); 
}

public function getTotalPerksBySubType($sub_type){

    $query = $this->db->query("CALL getTotalPerksBySubType(?)", [$sub_type]);
   
   return $query->getResultArray(); 
}
public function countAllConnByEmail($email){

    $query = $this->db->query("CALL countAllConnByEmail(?)", [$email]);
   
   return $query->getResultArray(); 
}
public function GetCounts(){

    $query = $this->db->query("CALL GetCounts()");
   
   return $query->getResultArray(); 
}
public function getStartupCount(){

    $query = $this->db->query("CALL getStartupCount()");
   
   return $query->getResultArray(); 
}

#======================End of SME=================================
#==================Notication and Inbox Model==================
public function getStartUpDetailsCompose()
{           
        $builder = $this->db->table('startups_inv');
        $builder->orderBy('STUP_ID', "desc");  
        $builder->limit(10); 
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray(); 
        }
        else
        {
            return 0;
        }
            
}
public function getAllRegisteredName($account_type,$email){
    if($account_type == 'startup' || $account_type == 'individual' || $account_type == 'accelerator'){
        return $this->getStartUpDetails($email)[0]['Startup_Company_Name'];
        }

        
    elseif($account_type == 'investor'){
       return $this->getInvestorDetails($email)[0]['Contact_Name']; 
    }
    
    elseif($account_type == 'mentorship'){
    return $this->getMentorDetails($email)[0]['Company'];   
    }else{
        
        return "Admin";
    }
   
//getCorperateDetails($email)
}

public function updateCSR($data, $id)
{
    $this->db->table('csr')
             ->where('csr_id', $id)
             ->update($data);

    return $this->db->affectedRows();
}

public function updatedConnection($data, $id)
{
    $this->db->table('all_connections')
             ->where('id', $id)
             ->update($data);

    return $this->db->affectedRows();
}
public function updatedClickedNotify($data, $ref_id)
{
    $this->db->table('notify')
             ->where('ref_id', $ref_id)
             ->update($data);

    return $this->db->affectedRows();
}

public function getNotificationBoxRef($ref_id){
    
        $builder = $this->db->table('notify_inbox');
        $builder->where('ref_id', $ref_id);
        $builder->orderBy('id', 'desc');
        //$builder->limit('id', 'desc');
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
    
}


public function getNotificationSummary($email) {

    $query = $this->db->query("CALL getNotificationSummary(?)", [$email]);
   
   return $query->getResultArray(); 
   
   }

public function getContactNameByEmail($email) {

    $query = $this->db->query("CALL getContactNameByEmail(?)", [$email]);
   
   return $query->getResultArray(); 
   
   }


public function getNotificationBoxSave($sender,$status) {

    $query = $this->db->query("CALL getNotificationBoxSave(?,?)", [$sender,$status]);
   
   return $query->getResultArray(); 
   
   }



public function getNotificationBox($recipient,$status) {

    $query = $this->db->query("CALL getNotificationBox(?,?)", [$recipient,$status]);
   
   return $query->getResultArray(); 
   
   }


public function getCurrentNotification($email){
    
        $builder = $this->db->table('notify');
        $builder->where('email', $email);
        $builder->where('status', 'new');
        $builder->orderBy('id', 'desc');
        $builder->limit(1);
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
    
}
public function getNotification($email){
    
        $builder = $this->db->table('notify');
        $builder->where('email', $email);
        $builder->where('status', 'new');
        $builder->limit(5);
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
    
}
public function allNotificationBoxReply($subject,$message, $sender, $recipient,$ref_id,$reply_ref_id){
        
	   
	    $time_submit = date("Y-m-d H:i:s",time());
	    $notify_data = array(
	        
	        'sender'=>$sender,
	        'recipient'=>$recipient,
	        'subject'=>$subject,
	        'content' =>$message,
	        'status' => 'inbox',
	        'extra_staus' =>'',
	        'ref_id' =>$ref_id,
	        'reply_id' =>$reply_ref_id,
	        'time_submit' => $time_submit,
	        
	        
	        ); 
	        if($recipient == "favicon.png"){ echo ''; }else{
	        $this->insertNotifyInbox($notify_data);
	        }
}
public function allNotificationSave($subject,$message, $sender, $recipient,$ref_id){ 
        
       
        $time_submit = date("Y-m-d H:i:s",time());
        $notify_data = array(
            
            'sender'=>$sender,
            'recipient'=>$recipient,
            'reply_id' =>'',
            'subject'=>$subject,
            'content' =>$message,
            'status' => 'save',
            'extra_staus' =>'',
            'ref_id' =>$ref_id,
            'time_submit' => $time_submit,
            
            
            ); 
            if($recipient == "favicon.png"){ echo ''; }else{
            $this->insertNotifyInbox($notify_data);
            }
}
public function allNotificationBox($subject,$message, $sender, $recipient,$ref_id){ 
        
	   
	    $time_submit = date("Y-m-d H:i:s",time());
	    $notify_data = array(
	        
	        'sender'=>$sender,
	        'recipient'=>$recipient,
	        'reply_id' =>'',
	        'subject'=>$subject,
	        'content' =>$message,
	        'status' => 'inbox',
	        'extra_staus' =>'',
	        'ref_id' =>$ref_id,
	        'time_submit' => $time_submit,
	        
	        
	        ); 
	        if($recipient == "favicon.png"){ echo ''; }else{
	        $this->insertNotifyInbox($notify_data);
	        }
}
public function allNotification($email_notifier, $subject, $ref_id){
        
	    
	    $time_submit = date("Y-m-d H:i:s",time());
	    $notify_data = array(
	        
	        'email'=>$email_notifier,
	        'subject'=>$subject,
	        'ref_id' =>$ref_id,
	        'status' =>'new',
	        'time_submit' => $time_submit
	        
	        ); 
	        if($email_notifier == "favicon.png"){ echo ''; }else{
	        $this->insertNotify($notify_data);
	        }
}
public function insertNotifyInbox($data)
{       
    $query = $this->db->table('notify_inbox')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}
public function insertNotify($data)
{       
    $query = $this->db->table('notify')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function getNotifySentByYou($email) {

    $query = $this->db->query("CALL getNotifySentByYou(?)", [$email]);
   
   return $query->getResultArray(); 
   
   }

public function getNotifySentByYouD($email){
    
   $builder = $this->db->table('notify_inbox');
   $builder->where('sender',$email);
   $builder->whereNotIn('status', ['save', 'delete']); 
   $builder->orderBy('time_submit', 'desc'); 
   $query = $builder->get(); 
   if($query->getNumRows() > 0 )
   {
       return $query->getResultArray();
   }
   else
   {
       return 0;
   }
}
public function countNotifySavedByYou($email){
    
   $builder = $this->db->table('notify_inbox');
   $builder->where('sender',$email);
   $builder->where('status',"save");
   $builder->orderBy('time_submit', 'desc'); 
   $query = $builder->get(); 
   if($query->getNumRows() > 0 )
   {
       return $query->getNumRows();
   }
   else
   {
       return 0;
   }
}

public function countNotifySentByYou($email){
    
   $builder = $this->db->table('notify_inbox');
   $builder->where('sender',$email);
   $builder->whereNotIn('status', ['save', 'delete']);  
   $query = $builder->get(); 
   if($query->getNumRows() > 0 )
   {
       return $query->getNumRows();
   }
   else
   {
       return 0;
   }
}
public function countNotifyAllByEmail($email)
{
    $builder = $this->db->table('notify_inbox');
    $builder->where('recipient', $email)
            ->orWhere('sender', $email);
    $query = $builder->get(); 

    return $query->getNumRows();
}


public function countNotifyInboxByEmail($email,$status){
    
    $builder = $this->db->table('notify_inbox');
   $builder->where('recipient',$email);
   $builder->where('status',$status);
   $query = $builder->get(); 
   if($query->getNumRows() > 0 )
   {
       return $query->getNumRows();
   }
   else
   {
       return 0;
   }
}

public function countNotifyByEmail($email,$status){
    
    $builder = $this->db->table('notify');
   $builder->where('email',$email);
   $builder->where('status',$status);
   $query = $builder->get(); 
   if($query->getNumRows() > 0 )
   {
       return $query->getNumRows();
   }
   else
   {
       return 0;
   }
}

#==================End Notication and Inbox Model=====================

#-------------------------End Course Analytics--------------------------------------------
#-------------------------Next and Previous Records----------------------

public function countQuizBySection($section_id){
    
    $builder = $this->db->table('quiz_title');
   $builder->where('section_id',$section_id);
   $query = $builder->get(); 
   if($query->getNumRows() > 0 )
   {
       return $query->getNumRows();
   }
   else
   {
       return 0;
   }
}
public function countLessonBySection($section_id){
    
    $builder = $this->db->table('lesson');
   $builder->where('section_id',$section_id);
   $query = $builder->get(); 
   if($query->getNumRows() > 0 )
   {
       return $query->getNumRows();
   }
   else
   {
       return 0;
   }
}
public function countLesson($course_id){
    
    $builder = $this->db->table('lesson');
   $builder->where('course_id',$course_id);
   $query = $builder->get(); 
   if($query->getNumRows() > 0 )
   {
       return $query->getNumRows();
   }
   else
   {
       return 0;
   }
}
public function countQuizQuestions($ref_id){
    
    $builder = $this->db->table('quiz_questions');
   $builder->where('ref_id',$ref_id);
   $query = $builder->get(); 
   if($query->getNumRows() > 0 )
   {
       return $query->getNumRows();
   }
   else
   {
       return 0;
   }
}
public function countTaskQuestions($ref_id){
    
    $builder = $this->db->table('task_questions');
   $builder->where('ref_id',$ref_id);
   $query = $builder->get(); 
   if($query->getNumRows() > 0 )
   {
       return $query->getNumRows();
   }
   else
   {
       return 0;
   }
}
public function countTaskAttempted($ref_id,$email){
    
    $builder = $this->db->table('task_attempted');
   $builder->where('ref_id',$ref_id);
   $builder->where('email',$email);
   $query = $builder->get(); 
   if($query->getNumRows() > 0 )
   {
       return $query->getNumRows();
   }
   else
   {
       return 0;
   }
}
public function countQuizAttempted($ref_id,$email){
    
    $builder = $this->db->table('quiz_attempted');
   $builder->where('ref_id',$ref_id);
   $builder->where('email',$email);
   $query = $builder->get(); 
   if($query->getNumRows() > 0 )
   {
       return $query->getNumRows();
   }
   else
   {
       return 0;
   }
}
public function insertTaskAttempted($data)
{       
    $query = $this->db->table('task_attempted')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function insertQuizAttempted($data)
{       
    $query = $this->db->table('quiz_attempted')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function countQuizQuestion($ref_id){
    
    $builder = $this->db->table('quiz_questions');
   $builder->where('ref_id',$ref_id);
   $query = $builder->get(); 
   if($query->getNumRows() > 0 )
   {
       return $query->getNumRows();
   }
   else
   {
       return 0;
   }
}

public function updatePerksData($data, $ref_id)
{
    
    $this->db->table('perks_data')
             ->where('ref_id', $ref_id)
             ->update($data);

    return $this->db->affectedRows();
}

public function updatePerksRedeem($data, $id)
{
    
    $this->db->table('perks_redeem')
             ->where('id', $id)
             ->update($data);

    return $this->db->affectedRows();
}

public function updatePostData($data, $ref_id)
{
    
    $this->db->table('post_data')
             ->where('ref_id', $ref_id)
             ->update($data);

    return $this->db->affectedRows();
}

public function updatePerks($data, $id)
{
    
    $this->db->table('perks')
             ->where('id', $id)
             ->update($data);

    return $this->db->affectedRows();
}

public function updateEvent($data, $id)
{

        $this->db->table('event')
             ->where('event_id', $id)
             ->update($data);

    return $this->db->affectedRows();
}

public function updateStory($data, $id)
{
    
        $this->db->table('story')
             ->where('story_id', $id)
             ->update($data);

    return $this->db->affectedRows();
}


public function updateTaskQues($data, $id)
{
    $this->db->table('task_questions')
             ->where('qid', $id)
             ->update($data);

    return $this->db->affectedRows();
}


public function updateQuizQues($data, $id)
{
    $this->db->table('quiz_questions')
             ->where('qid', $id)
             ->update($data);

    return $this->db->affectedRows();
}

public function updateTaskTitle($data, $id)
{
    $this->db->table('task_title')
             ->where('id', $id)
             ->update($data);

    return $this->db->affectedRows();
}


public function updateQuizTitle($data, $id)
{
    $this->db->table('quiz_title')
             ->where('id', $id)
             ->update($data);

    return $this->db->affectedRows();
}

public function getTaskEdit($id)
{           
        $builder = $this->db->table('task_title');
        $builder->where('id', $id);
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}
public function getQuizEdit($id)
{           
        $builder = $this->db->table('quiz_title');
        $builder->where('id', $id);
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getAllTask()
{           
        $builder = $this->db->table('task_title');
        $builder->orderBy('id', "desc");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getAllQuiz()
{           
        $builder = $this->db->table('quiz_title');
        $builder->orderBy('id', "desc");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function insertComments($data)
{       
    $query = $this->db->table('comments')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function insertTaskQues($data)
{       
    $query = $this->db->table('task_questions')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function insertQuizQues($data)
{       
    $query = $this->db->table('quiz_questions')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function insertTaskTitle($data)
{       
    $query = $this->db->table('task_title')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function insertQuizTitle($data)
{       
    $query = $this->db->table('quiz_title')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function getQuizByLessonId($lesson_id){
    
        $builder = $this->db->table('quiz_title');
       $builder->where('lesson_id',$lesson_id);
       $query = $builder->get(); 
       if($query->getNumRows() > 0 )
       {
           return $query->getResultArray();
       }
       else
       {
           return 0;
       }
}

public function countAllComments(){
    
        $builder = $this->db->table('comments');
       $builder->where('email !=','');
		
       $query = $builder->get(); 
       if($query->getNumRows() > 0 )
       {
           return $query->getNumRows();
       }
       else
       {
           return 0;
       }
}


public function getAllComments(){
    
        $builder = $this->db->table('comments');
       $builder->where('email !=','');
		$builder->orderBy('id', 'desc');
       $builder->limit(5000);
       $query = $builder->get(); 
       if($query->getNumRows() > 0 )
       {
           return $query->getResultArray();
       }
       else
       {
           return 0;
       }
}


public function getComments($lesson_id){
    
        $builder = $this->db->table('comments');
       $builder->where('lesson_id',$lesson_id);
		$builder->limit(15);
       $query = $builder->get(); 
       if($query->getNumRows() > 0 )
       {
           return $query->getResultArray();
       }
       else
       {
           return 0;
       }
}
public function getQuizBySectionId($section_id){
    
        $builder = $this->db->table('quiz_title');
       $builder->where('section_id',$section_id);
       $query = $builder->get(); 
       if($query->getNumRows() > 0 )
       {
           return $query->getResultArray();
       }
       else
       {
           return 0;
       }
}
public function getTaskQuestion($ref_id){
    
        $builder = $this->db->table('task_questions');
       $builder->where('ref_id',$ref_id);
       $query = $builder->get(); 
       if($query->getNumRows() > 0 )
       {
           return $query->getResultArray();
       }
       else
       {
           return 0;
       }
}
public function getQuizQuestion($ref_id){
    
        $builder = $this->db->table('quiz_questions');
       $builder->where('ref_id',$ref_id);
       $query = $builder->get(); 
       if($query->getNumRows() > 0 )
       {
           return $query->getResultArray();
       }
       else
       {
           return 0;
       }
}
public function getTaskTitle($ref_id){
    
    $builder = $this->db->table('task_title');
       $builder->where('ref_id',$ref_id);
       $query = $builder->get(); 
       if($query->getNumRows() > 0 )
       {
           return $query->getResultArray();
       }
       else
       {
           return 0;
       }
}
public function getQuizTitle($ref_id){
    
    $builder = $this->db->table('quiz_title');
       $builder->where('ref_id',$ref_id);
       $query = $builder->get(); 
       if($query->getNumRows() > 0 )
       {
           return $query->getResultArray();
       }
       else
       {
           return 0;
       }
}



public function getRecFgnAlatSkills($main_cat, $coursetitleArray)
{           

	 if (empty($coursetitleArray)) {
        return []; // Return an empty array immediately if $coursetitleArray is empty
    }

    $builder = $this->db->table('courses');
    $builder->where('learningpath', $main_cat); 
    $builder->whereIn('coursetitle', $coursetitleArray);
    $builder->orderBy('id', 'asc');
    $query = $builder->get(); 

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return []; // Return an empty array for consistency
    }
}

public function getFgnAlatSkills($main_cat, $coursetitle)
{           
        $builder = $this->db->table('courses');
        $builder->where('learningpath', $main_cat); 
		$builder->where('coursetitle', $coursetitle);
        $builder->orderBy('id', "asc");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getLessonCourseById($id, $course_id){
    
     $builder = $this->db->table('lesson');
        $builder->where('id',$id);
        $builder->where('course_id',$course_id);
        $builder->orderBy('id', "desc");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
}

public function getPreviousLessonById($id, $course_id)
{
    $builder = $this->db->table('lesson');
    $builder->where('id <', $id); // Retrieve records with id less than the provided id
    $builder->where('course_id',$course_id);
    $builder->orderBy('id', 'desc'); // Order by id in descending order to get the previous record
    $builder->limit(1); // Limit to only one record
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getRowArray(); // Assuming you want to return a single row
    } else {
        return null; // Return null when there is no previous record
    }
}

public function getNextLessonById($id,$course_id)
{
    $builder = $this->db->table('lesson');
    $builder->where('id >', $id); // Retrieve records with id greater than the provided id
    $builder->where('course_id',$course_id);
    $builder->orderBy('id', 'asc'); // Order by id in ascending order to get the next record
    $builder->limit(1); // Limit to only one record
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getRowArray(); // Assuming you want to return a single row
    } else {
        return null; // Return null when there is no next record
    }
}

#-------------------------End of Next and Previous Record-----------------------
public function getLessonBySectionId($section_id){
    
     $builder = $this->db->table('lesson');
        $builder->where('section_id',$section_id);
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
}
public function getSectionByCourseIdNotActive($course_id)
{
    $builder = $this->db->table('course_section');
    $builder->where('course_id', $course_id);
    
    // Omit the first record
    $builder->limit(1000000, 1); // A large number to effectively skip the first record
    
    $query = $builder->get(); 

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return []; // Return an empty array instead of 0 when there are no results
    }
}
public function getSectionByCourseIdActive($course_id)
{
    $builder = $this->db->table('course_section');
    $builder->where('course_id', $course_id);
    
    
    
    $query = $builder->get(); 

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return []; // Return an empty array instead of 0 when there are no results
    }
}

public function getTotalDurationofLessonByCourse($course_id)
{           
    $builder = $this->db->table('lesson');
    $builder->selectSum('duration_value'); // Sum the 'duration' column
    $builder->where('course_id', $course_id);
    $query = $builder->get(); 

    if ($query->getNumRows() > 0) {
        return $query->getRow()->duration_value; // Assuming you want to return the sum of duration
    } else {
        return 0;
    }
}

public function getTotalDurationofLessonBySection($section_id)
{           
    $builder = $this->db->table('lesson');
    $builder->selectSum('duration_value'); // Sum the 'duration' column
    $builder->where('section_id', $section_id);
    $query = $builder->get(); 

    if ($query->getNumRows() > 0) {
        return $query->getRow()->duration_value; // Assuming you want to return the sum of duration
    } else {
        return 0;
    }
}
public function getTotalLessonBySection($section_id) 
{           
    $builder = $this->db->table('lesson');
    $builder->where('section_id', $section_id);
    $query = $builder->get(); 

    if ($query->getNumRows() > 0) {
        return $query->getNumRows(); 
    } else {
        return 0;
    }
}
public function getTotalLessonByCourse($course_id) 
{           
    $builder = $this->db->table('lesson');
    $builder->where('course_id', $course_id);
    $query = $builder->get(); 

    if ($query->getNumRows() > 0) {
        return $query->getNumRows(); 
    } else {
        return 0;
    }
}

public function deleteCourse($id)
{
    // Delete from the 'courses' table
    $builderCourses = $this->db->table('courses');  
    $builderCourses->where('id', $id);
    $builderCourses->delete();
// // Delete from the 'course_data' table
//     $builderCourseData = $this->db->table('course_data');
//     $builderCourseData->where('ref_id', $ref_id); // Assuming there is a foreign key relationship between 'courses' and 'course_data'
//     $builderCourseData->delete();
    
}

public function deleteLesson($id)
{
    $builder = $this->db->table('lesson');
    $builder->where('id', $id);
  
    $builder->delete();
}

public function deleteTask($id)
{
    $ref_id = $this->getTaskEdit($id)[0]['ref_id'];
    $builder_ref = $this->db->table('task_questions');
    $builder_ref->where('ref_id', $ref_id);
  
    $builder_ref->delete();
    $builder = $this->db->table('task_title');
    $builder->where('id', $id);
  
    $builder->delete();
    //Delete Questions by ref id


}

public function deleteQuiz($id)
{
    $ref_id = $this->getQuizEdit($id)[0]['ref_id'];
    $builder_ref = $this->db->table('quiz_questions');
    $builder_ref->where('ref_id', $ref_id);
  
    $builder_ref->delete();
    $builder = $this->db->table('quiz_title');
    $builder->where('id', $id);
  
    $builder->delete();
    //Delete Questions by ref id


}
public function deleteCourseSection($id)
{
    $builder = $this->db->table('course_section');
    $builder->where('id', $id);
  
    $builder->delete();
}
public function deleteCourseCategory($id)
{
    $builder = $this->db->table('course_category');
    $builder->where('id', $id);
  
    $builder->delete();
}

public function updateDataExt($data, $ref_id)
{
    $this->db->table('course_data')
             ->where('ref_id', $ref_id)
             ->update($data);

    return $this->db->affectedRows();
}

public function updateLesson($data, $id)
{
    $this->db->table('lesson')
             ->where('id', $id)
             ->update($data);

    return $this->db->affectedRows();
}


public function updateCourseSection($data, $id)
{
    $this->db->table('course_section')
             ->where('id', $id)
             ->update($data);

    return $this->db->affectedRows();
}

public function updateCourse($data, $id)
{
    $this->db->table('courses')
             ->where('id', $id)
             ->update($data);

    return $this->db->affectedRows();
}

public function updateCourseCategory($data, $id)
{
    $this->db->table('course_category')
             ->where('id', $id)
             ->update($data);

    return $this->db->affectedRows();
}

public function insertCourseSection($data)
{       
    $query = $this->db->table('course_section')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function insertCourse($data)
{       
    $query = $this->db->table('courses')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function insertCourseCategory($data)
{       
    $query = $this->db->table('course_category')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function insertDataExt($data)
{       
    $query = $this->db->table('course_data')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function insertLesson($data)
{       
    $query = $this->db->table('lesson')->insert($data); 
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function getCourseDataByRef($ref_id){
    
     $builder = $this->db->table('course_data');
        $builder->where('ref_id',$ref_id);
        $builder->orderBy('id', "desc");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
}
public function getLessonById($id){
    
     $builder = $this->db->table('lesson');
        $builder->where('id',$id);
        $builder->orderBy('id', "desc");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
}
public function getCourseById($id){
    
     $builder = $this->db->table('courses');
        $builder->where('id',$id);
        $builder->orderBy('id', "desc");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
}
public function getSectionByCourseId($course_id){
    
     $builder = $this->db->table('course_section');
        $builder->where('course_id',$course_id);
        $builder->orderBy('id', "desc");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
}

public function getCourseSection($id){
        $builder = $this->db->table('course_section');
         $builder->where('id', $id);
        $builder->orderBy('id', "desc");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }  
    
}

public function getCourseCategory($id){
        $builder = $this->db->table('course_category');
         $builder->where('id', $id);
        $builder->orderBy('id', "desc");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }  
    
}
public function getAllCourseSection()
{           
        $builder = $this->db->table('course_section');
        $builder->orderBy('id', "desc");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}
public function getAllCourseCategory()
{           
        $builder = $this->db->table('course_category');
        $builder->orderBy('id', "desc");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getAllLesson()
{           
        $builder = $this->db->table('lesson');
        $builder->orderBy('id', "desc");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getAllCourses()
{           
        $builder = $this->db->table('courses');
        $builder->orderBy('id', "desc");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getEmailByCourse($course)
{           
        $builder = $this->db->table('user_ext_info');
        $builder->where('profile_extra', $course);
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return $query->getResultArray();
        } else {
            return 0;
        }
    
            
}

public function timeAgo($timestamp) {
    $currentTimestamp = time();
    $difference = $currentTimestamp - $timestamp;
    $seconds = $difference;
    $minutes = round($difference / 60);
    $hours = round($difference / 3600);
    $days = round($difference / 86400);
    $weeks = round($difference / 604800);
    $months = round($difference / 2628000);
    $years = round($difference / 31536000);

    if ($seconds <= 60) {
        return "Just now";
    } elseif ($minutes == 1) {
        return "1 minute ago";
    } elseif ($minutes > 1 && $minutes < 60) {
        return "$minutes minutes ago";
    } elseif ($hours == 1) {
        return "1 hour ago";
    } elseif ($hours > 1 && $hours < 24) {
        return "$hours hours ago";
    } elseif ($days == 1) {
        return "1 day ago";
    } elseif ($days > 1 && $days < 7) {
        return "$days days ago";
    } elseif ($weeks == 1) {
        return "1 week ago";
    } elseif ($weeks > 1 && $weeks < 4.33) {
        return "$weeks weeks ago";
    } elseif ($months == 1) {
        return "1 month ago";
    } elseif ($months > 1 && $months < 12) {
        return "$months months ago";
    } elseif ($years == 1) {
        return "1 year ago";
    } else {
        return "$years years ago";
    }
}


public function getTotalNoOfCourses()
{

$builder = $this->db->table('courses');
$query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getNumRows();
    } else {
        return 0;
    }

}

public function getCoursesByMainCategoryNextDayNot($main_cat)
{
    // Get the current date
    $currentDate = date('Y-m-d');

    // Get the date of the next day
    $nextDate = date('Y-m-d', strtotime($currentDate . ' + 1 day'));

    // Build the query
    $builder = $this->db->table('courses');
    $builder->where('learningpath', $main_cat);
    $builder->where("start_date >= '$nextDate'"); // Assuming 'date_column' is the column with the date
    $builder->orderBy('start_date', 'asc');
    $builder->limit(1); // Limit to 1 record
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getCoursesByMainCategoryPrevious($main_cat)
{
    // Get the current date
    $currentDate = date('Y-m-d');
    //$builder->where('DATE(start_date)=', $currentDate);
    // Build the query
    $builder = $this->db->table('courses');
    $builder->where('learningpath', $main_cat);
    $builder->where("DATE(start_date) <", $currentDate);
    $builder->where("DATE(start_date) !=" , $currentDate); // Exclude today's records
    $builder->orderBy('start_date', 'asc'); // Order by start date in ascending order
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getCoursesByMainCategoryUpcoming($main_cat)
{
    // Get the current date
    $currentDate = date('Y-m-d');
    //$builder->where('DATE(start_date)=', $currentDate);
    // Build the query
    $builder = $this->db->table('courses');
    $builder->where('learningpath', $main_cat);
    $builder->where("DATE(start_date) >", $currentDate);
    $builder->where("DATE(start_date) !=" , $currentDate); // Exclude today's records
    $builder->orderBy('start_date', 'asc'); // Order by start date in ascending order
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getCoursesByMainCategoryNextDay($main_cat)
{
    // Get the current date
    $currentDate = date('Y-m-d');

    // Get the date of the next day
    $nextDate = date('Y-m-d', strtotime($currentDate . ' + 1 day'));

    // Build the query
    $builder = $this->db->table('courses');
    $builder->where('learningpath', $main_cat);
    $builder->where("start_date >= '$nextDate'"); // Assuming 'date_column' is the column with the date
    $builder->orderBy('start_date', 'asc');
    $builder->limit(1); // Limit to 1 record
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getCoursesByMainCategoryToday($main_cat)
{
        $currentDate = date('Y-m-d');
        $builder = $this->db->table('courses');
        $builder->where('learningpath', $main_cat); 
        $builder->where('DATE(start_date)=', $currentDate);
        $builder->orderBy('start_date', "asc");
        $builder->limit(1);
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
}


public function getCoursesByMainCategory($main_cat)
{           
        $builder = $this->db->table('courses');
        $builder->where('learningpath', $main_cat); 
        $builder->orderBy('id', "asc");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}
//=====================End Course Management===========================

    public function getPayment($data)
    {
        $this->db->table($this->table)->insert($data);

        return $this->db->affectedRows() > 0 ? $this->db->affectedRows() : 0;
    }

    public function insertPromoSub($data)
    {
        $this->db->table('promo_reg')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }
public function insertPerkRedeem($data)
    {
        $this->db->table('perks_redeem')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }

function insertPerksCategory($data)
{
        $this->db->table('perks_category')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertPostData($data)
{
        $this->db->table('post_data')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertPerks($data)
{
        $this->db->table('perks')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertPerksData($data)
{
        $this->db->table('perks_data')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertConnection($data)
{
        $this->db->table('all_connections')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertEventAttend($data)
{
        $this->db->table('event_attend')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertInvestorFiles($data)
{
        $this->db->table('investor_file')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertJobApp($data)
{
        $this->db->table('candidate')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertInviteLps($data)
{
        $this->db->table('syndicate')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertStartupInvite($data)
{
        $this->db->table('startupinvite')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}

function insertResume($data)
{
        $this->db->table('postcv')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}

function insertStartupByCorperate($data)
{
        $this->db->table('pms_ref_link')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}

function insertInviteProfile($data)
{
        $this->db->table('invite')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}


function insertReport($data)
{
        $this->db->table('dcdt_report')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}

function insertCSR($data)
{
        $this->db->table('csr')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}

public function getCsrByTitle($title)
{
    $builder = $this->db->table('csr');
    $builder->orderBy('csr_id', 'desc');
    $builder->where('title', $title);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getCsrById($email, $id)
{
    $builder = $this->db->table('csr');
    $builder->where('csr_id', $id);
    $builder->where('email', $email);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


function insertEvent($data)
{
        $this->db->table('event')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}

function insertStory($data)
{
        $this->db->table('story')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}

public function insertMicrosoftPanel($data)
{       
        $this->db->table('microsoft_co_panel')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}


public function insertLogin($data)
{       
        $this->db->table('login')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}


public function insertJob($data)
{       
        $this->db->table('jobpost')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}

function insertCredit($data)
{
        $this->db->table('Credit_Redeem')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}

function insertSubPackage($data)
{       
        $remsana_data = [
            "email" => $data['email']
        ];

        if($data['payment_status'] == 'paid'){
            $this->gfa->enrollRemsanaCourse($remsana_data);
        }
        
        $this->db->table('package_sub')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertMentorProfile($data)
{       
        $this->db->table('mentor_info')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertInvestorProfile($data)
{       
        $this->db->table('investor')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertInvConOnbStatus($data)
{       
        $this->db->table('investor_connect_onb')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertStartupProfileExt($data)
{       
        $this->db->table('startups_inv_ext')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertCorperateProfile($data)
{       
        $this->db->table('cooperate_info')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
public function insertAppReg($data)
{       
        $this->db->table('app_register')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
public function insertAppLog($data)
{       
        $this->db->table('app_log')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertStartupProfile($data)
{       
        $this->db->table('startups_inv')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertCSRApply($data)
{       
        $this->db->table('csr_apply')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertWpEvent($data)
{       
        $this->db->table('wp_event')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertPeronalInfo($data)
{       
        $this->db->table('pg_personal_info')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}

function insertProfileFile($data)
{       
        $this->db->table('files')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
public function insertProfilePhoto($data)
{       
    $query = $this->db->table('profile_photo')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}
function insertProfile($data)
{       
        $this->db->table('personal_info')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertBusiness($data)
{       
        $this->db->table('business_info')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertFund($data)
{       
        $this->db->table('fund_info')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertFile($data)
{       
        $this->db->table('file_upload')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}

function insertSubmit($data)
{       
        $this->db->table('application')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertContactInfo($data)
{       
        $this->db->table('pg_contact_info')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertMailInfo($data)
{       
        $this->db->table('pg_mailling_address')->insert($data);
        
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}

function insertGuardianInfo($data)
{       
        $this->db->table('pg_guardian')->insert($data);
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertEdu($data)
{       
        $this->db->table('pg_edu')->insert($data);
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}



function insertPry($data)
{       
        $this->db->table('pg_edu_primary')->insert($data);
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertSec($data)
{       
        $this->db->table('pg_edu_ss')->insert($data);
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertBsc($data)
{       
        $this->db->table('pg_edu_first_degree')->insert($data);
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}

function insertEssay($data)
{       
        $this->db->table('pg_essay')->insert($data);
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}

function insertRecomInfo($data)
{       
        $this->db->table('pg_recom_academic')->insert($data);
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}
function insertRecomInfo2($data)
{       
        $this->db->table('pg_recom_religious')->insert($data);
        if($this->db->affectedRows() > 0 )
        {
            return $this->db->affectedRows();
        }
        else
        {
            return 0;
        }
}

public function getRecentFileUploaded($email)
{
    $builder = $this->db->table('files');
    $builder->select('*')
            ->where('Email', $email)
            ->orderBy('File_Id', 'DESC')
            ->limit(4);

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllFileUploaded($email)
{
    $builder = $this->db->table('files');
    $builder->select('*')
            ->where('Email', $email);

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getFileUploaded($email, $file_type)
{
    $builder = $this->db->table('files');
    $builder->select('*')
            ->where('Email', $email)
            ->where('File_Type', $file_type);

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getFileUploadedById($id)
{
    $builder = $this->db->table('files');
    $builder->select('*')
            ->where('File_Id', $id);

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getNgStates()
{
    $builder = $this->db->table('ng_states');
    $builder->select('*')
            ->orderBy('id', "asc");

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

// public function checkInvConOnbStatus($email)
// 	{	
// 		$builder =$this->db->table('investor_connect_onb');
// 		$builder->where('Email',$email);
// 		$query = $builder->get();
// 		 if ($query->getNumRows() > 0) 
//          {
		
// 			return 1;
// 		}
// 		else
// 		{
// 			return 0;
// 		}	
// 	}

public function countRegBVNX()
{
    $builder = $this->db->table('user_ext_info');
    $builder->where('bvn !=', "");
    $builder->where('CHAR_LENGTH(bvn) =', 11);
    $query = $builder->get();

    $count_row = $query->getNumRows();
    return $count_row;
}

public function countRegNINX()
{
    $builder = $this->db->table('user_ext_info');
    $builder->where('nin !=', "");
    $builder->where('CHAR_LENGTH(nin) =', 11);
    $query = $builder->get();

    $count_row = $query->getNumRows();
    return $count_row;
}

public function countRegBVN()
{
    //  $builder = $this->db->table('user_ext_info');
    // $builder->where('assist_wema', 1);
    // $builder->groupStart(); // Start a group for the AND conditions
    // $builder->where('nin', ""); // Check if 'nin' is empty
    // $builder->where('bvn', ""); // Check if 'bvn' is empty
    // $builder->groupEnd(); // End the AND group
    // $query = $builder->get();

    // $count_row = $query->getNumRows();
    // return $count_row;
    return $this->countNeedAccount() -  $this->countRegNIN();
}



public function countRegNIN()
{
    $builder = $this->db->table('user_ext_info');
    $builder->where('assist_wema', 1);
    $builder->groupStart(); // Start a group for OR conditions
    $builder->where('nin !=', "");
    $builder->where('CHAR_LENGTH(nin) =', 11);
    $builder->orGroupStart(); // Start a group for the second OR condition
    $builder->where('bvn !=', "");
    $builder->where('CHAR_LENGTH(bvn) =', 11);
    $builder->groupEnd(); // End the second OR group
    $builder->groupEnd(); // End the main OR group
    $query = $builder->get();

    $count_row = $query->getNumRows();
    return $count_row;
}


public function countNeedAccount()
{
    $builder = $this->db->table('user_ext_info'); 
    $builder->where('assist_wema', 1);
    $query = $builder->get();

    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function countAccountInterest($que)
{
    $builder = $this->db->table('user_ext_info');
    $builder->where('wema_account_que', $que);
    $query = $builder->get();

    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}
public function countRegistrationTotal()
{
    $builder = $this->db->table('startups_inv');
    //$builder->where('Interest_Fund_Raise', $reg_type);
    $query = $builder->get();

    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function countGenderByState($gender, $state)
{
    $builder = $this->db->table('startups_inv'); 
    $builder->where('Gender', $gender);
    $builder->where('State', $state);
    $query = $builder->get();

    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}


public function countGender($gender)
{
    $builder = $this->db->table('startups_inv'); 
    $builder->where('Gender', $gender);
    $query = $builder->get();

    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function countStudentsbyLessonFarByEmail($email)
{
    $builder = $this->db->table('user_activity');
    $builder->select('UserEmail, COUNT(*) as count');
    $builder->whereNotIn('UserAction', ['dashboard', 'signinAction', 'profile_details', 'group_members', 'signoutAction', 'chat', 'Quiz', 'course', 'lesson', 'course']);
    $builder->where('UserEmail !=', '');
    $builder->where('UserEmail !=', 'admin@getfundedafrica.com');
    $builder->where('UserEmail',$email);

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getNumRows();
    } else {
        return [];
    }
}


public function countRegistrationLocation($state)
{
    $builder = $this->db->table('startups_inv');
    $builder->where('State', $state);
    $query = $builder->get();

    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function countRegistrationState($reg_type, $state)
{
    $builder = $this->db->table('startups_inv');
    $builder->where('Interest_Fund_Raise', $reg_type);
    $builder->where('State', $state);
    $query = $builder->get();

    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function countRegistration($reg_type)
{
    $builder = $this->db->table('startups_inv');
    $builder->where('Interest_Fund_Raise', $reg_type);
    $query = $builder->get();

    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function countFileUploaded($email)
{
    $builder = $this->db->table('files');
    $builder->where('Email', $email);
    $query = $builder->get();

    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function MatchInvestorDefaultLimit($Industry_Focus,$Investment_Stage_Focus,$Implementation_Stage_Focus,$Min_Cheque,$Regional_focus)
{			
		
		$min = 0;
		
// 		$where = "Industry_Focus LIKE '%$Industry_Focus%' OR Industry_Focus LIKE '%open to all sectors%'";
//         $this->db->where($where);
 	   
		$builder= $this->db->table('investor');
		$builder->orderBy('Contact_Name', 'ASC');
		$builder->like('Industry_Focus', 'Sector agnostic', 'both');
	        $builder->orLike('Industry_Focus', $Industry_Focus ?? '', 'both');
	        $builder->orLike('Investment_Stage_Focus', $Investment_Stage_Focus ?? '', 'both');
	        $builder->orLike('Implementation_Stage_Focus',$Implementation_Stage_Focus ?? '', 'both');

	  	//  $builder->orLike('Regional_focus', $Regional_focus ?? '', 'both');

	      

		$builder->where("Min_Cheque BETWEEN '$min' AND '$Min_Cheque'");	 
		
		$query = $builder->get();
		$count_row = $query->getNumRows();
		if($query->getNumRows() > 0 && $Industry_Focus !='' )
        {
   			return $query->getResultArray();
        }
		else
        {
    		return 0;
        }
			
}
public function MatchInvestorDefaultLimitOne($Industry_Focus,$Investment_Stage_Focus,$Implementation_Stage_Focus,$Min_Cheque,$Regional_focus)
{			
		
		$min = 0;
		
// 		$where = "Industry_Focus LIKE '%$Industry_Focus%' OR Industry_Focus LIKE '%open to all sectors%'";
//         $this->db->where($where);
 	   
		$builder= $this->db->table('investor');
		$builder->orderBy('Contact_Name', 'ASC');
		$builder->like('Industry_Focus', 'Sector agnostic', 'both');
	        $builder->orLike('Industry_Focus', $Industry_Focus ?? '', 'both');
	        $builder->orLike('Investment_Stage_Focus', $Investment_Stage_Focus ?? '', 'both');
	        $builder->orLike('Implementation_Stage_Focus',$Implementation_Stage_Focus ?? '', 'both');

	  	//  $builder->orLike('Regional_focus', $Regional_focus ?? '', 'both');

	      

		$builder->where("Min_Cheque BETWEEN '$min' AND '$Min_Cheque'");	 
		$builder->limit(1);
		$query = $builder->get();
		$count_row = $query->getNumRows();
		if($query->getNumRows() > 0 && $Industry_Focus !='' )
        {
   			return $query->getResultArray();
        }
		else
        {
    		return 0;
        }
			
}

public function countProfileDocs($email)
{
    $builder = $this->db->table('files');
    $builder->where('Email', $email)
            ->where('File_Type', 'Profile');
    $query = $builder->get();

    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
} 

public function getAllFileUploadedDocument($email)
{
    $builder = $this->db->table('files');
    $builder->select('*')
            ->where('Email', $email)
            ->groupStart()
                ->like('File', '%.docx%', '!', true)
                ->orLike('File', '%.pdf%', '!', true)
                ->orLike('File', '%.doc%', '!', true)
                ->orLike('File', '%.txt%', '!', true)
                ->orLike('File', '%.xls%', '!', true)
                ->orLike('File', '%.ppt%', '!', true)
                ->orLike('File', '%.pptx%', '!', true)
                ->orLike('File', '%.xlsx%', '!', true)
                ->orLike('File', '%.csv%', '!', true)
            ->groupEnd();

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllFileUploadedImage($email)
{
    $builder = $this->db->table('files');
    $builder->select('*')
            ->where('Email', $email)
            ->groupStart()
                ->like('File', '%.jpg%', '!', true)
                ->orLike('File', '%.jpeg%', '!', true)
                ->orLike('File', '%.png%', '!', true)
                ->orLike('File', '%.JPEG%', '!', true)
            ->groupEnd();

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllFileUploadedVideos($email)
{
    $builder = $this->db->table('files');
    $builder->select('*')
            ->where('Email', $email)
            ->groupStart()
                ->like('File', '%.mp4%', '!', true)
                ->orLike('File', '%.3gp%', '!', true)
                ->orLike('File', '%.mov%', '!', true)
                ->orLike('File', '%.avi%', '!', true)
            ->groupEnd();

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllFileUploadedAudio($email)
{
    $builder = $this->db->table('files');
    $builder->select('*')
            ->where('Email', $email)
            ->groupStart()
                ->like('File', '%.mp3%', '!', true)
                ->orLike('File', '%.mp2%', '!', true)
            ->groupEnd();

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function updatePasswordX($data_status, $id)
{
    $this->db->table('login')
             ->where('id', $id)
             ->update($data_status);

    if ($this->db->affectedRows() > 0) {
        return $this->db->affectedRows();
    } else {
        return 0;
    }
}


public function deleteFile($id)
{
    $this->db->table('files')->where('File_Id', $id)->delete();
}

    // public function getLoginDetailsD($email)
    // {
    //     $query = $this->db->table('login')->where('email', $email)->orderBy('id', 'DESC')->get(); 

    //     return $query->getNumRows() > 0 ? $query->getResultArray() : 0;
    // }
public function getLoginDetailsById($id)
{           
        $builder = $this->db->table('login');
        $builder->where('id', $id);
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return $query->getResultArray();
        } else {
            return 0;
        }
    
            
}

    public function getLoginDetails($email)
{           
        $builder = $this->db->table('login');
        $builder->orderBy('id', 'desc');
        $builder->where('email', $email);
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return $query->getResultArray();
        } else {
            return 0;
        }
    
            
}

public function getUser($email)
{           
        $builder = $this->db->table('login');
        $builder->where('email', $email);   
        $query = $builder->get();
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getSubsription($email)
{           
        $builder =$this->db->table('startup');
        $builder ->where('email', $email);  
        $query = $builder->get();
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getAllDcdtByEmailRef(string $email)
{
    

    // Select all the rows from the `pms_ref_link` table where the `email` column matches the email address passed to the function.
    $query = $this->db->table('pms_ref_link')->where('email', $email)->orderBy('id', 'desc')->get();

    // If there are any rows returned, return an array of the rows.
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        // Otherwise, return 0.
        return 0;
    }
}

public function getTellYourStoryByEmail($email)
{
    $query = $this->db->table('story')
                     ->orderBy('story_id', 'desc')
                     ->where('email', $email)
                     ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function getCsr($email)
{
    $builder = $this->db->table('csr');
    $builder->orderBy('csr_id', 'desc');
    $builder->where('email', $email);
    
    $query = $builder->get();
    
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getSubsriptionstatus($status = null)
{
        $builder=$this->db->table('package_sub');
        $builder ->where('status', $status);    
        $query = $builder->get();
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
}

public function invited_admin_access($email,$invite_email)
{           
        $builder = $this->db->table('invite');
        $builder ->where('Email', $email);
        $builder ->where('Invite_Email', $invite_email); 
        $query = $builder->get();   
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getCorperateDetails($email)
{           
        $builder =$this->db->table('cooperate_info');
        $builder->where('Need_contact_email', $email); 
        $query = $builder->get();  
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getStartUpOtherInfo()
{           
        $builder = $this->db->table('user_ext_info');
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getNoOfMentees($email)
{
    $builder = $this->db->table('mentor_info');
    $builder->select('Mentee_No');
    $builder->where('Email', $email);
    $query = $builder->get();
    if($query->getNumRows() > 0 )
    {
        return $query->getResultArray()[0]['Mentee_No'];
    }
    else
    {
        return 0;
    }
}

public function getAllStartUpsById($id)
    {
        $builder = $this->db->table('startups_inv')
                        ->where('STUP_ID', $id);
                        // ->get()
                        // ->getResultArray();
        $query = $builder->get();
        $countRows = $query->getNumRows();
 
        if ($countRows > 0) {
            return $query->getResultArray();
        } else {
            return [];
        }
    }

public function getStartUpDetailsRegAllCalendar()
{
    $builder = $this->db->table('startups_inv');
    $builder->select('Primary_Contact_Name, Startup_Company_Name, Contact_Email');
    $builder->orderBy('STUP_ID', "desc");  
    // $builder->limit($limit);
    $query = $builder->get(); 
    if($query->getNumRows() > 0 )
    {
        return $query->getResultArray();
    }
    else
    {
        return 0;
    }
}


public function getStartUpDetailsForCalendar()
{
    $builder = $this->db->table('startups_inv');
    $builder->select('Primary_Contact_Name AS user_name, Contact_Email AS user_email, Startup_Company_Name');
    $query = $builder->get();
    return $query->getNumRows() > 0 ? $query->getResultArray() : 0;
}
public function getAcceleratorDetailsForCalendar()
{
    $builder = $this->db->table('accelerator');
    $builder->select('Contact_Name AS user_name, Contact_Email AS user_email');
    $query = $builder->get();
    return $query->getNumRows() > 0 ? $query->getResultArray() : 0;
}
public function getMentorDetailsForCalendar()
{
    $builder = $this->db->table('mentor_info');
    $builder->select('Mentor_name AS user_name, Email AS user_email');
    $query = $builder->get();
    return $query->getNumRows() > 0 ? $query->getResultArray() : 0;
}
public function getInvestorDetailsForCalendar()
{
    $builder = $this->db->table('investor');
    $builder->select('Contact_Name AS user_name, Contact_Email AS user_email');
    $query = $builder->get();
    return $query->getNumRows() > 0 ? $query->getResultArray() : 0;
}
public function getCorporateDetailsForCalendar()
{
    $builder = $this->db->table('cooperate_info');
    $builder->select('Corporate_Name AS user_name, Need_contact_email AS user_email');
    $query = $builder->get();
    return $query->getNumRows() > 0 ? $query->getResultArray() : 0;
}

public function getAllUserDetails()
    {
        $startUpDetails = $this->getStartUpDetailsForCalendar();
        $acceleratorDetails = $this->getAcceleratorDetailsForCalendar();
        $mentorDetails = $this->getMentorDetailsForCalendar();
        $investorDetails = $this->getInvestorDetailsForCalendar();
        $corporateDetails = $this->getCorporateDetailsForCalendar();

        // Merge all results into one array
        $allDetails = array_merge(
            $startUpDetails ?: [],
            $acceleratorDetails ?: [],
            $mentorDetails ?: [],
            $investorDetails ?: [],
            $corporateDetails ?: []
        );

        // Remove duplicates based on user_name and user_email
        $uniqueDetails = [];
        $seen = [];

        foreach ($allDetails as $user) {
            // Create a unique key based on user_name and user_email
            $key = $user['user_name'] . $user['user_email'];

            if (!isset($seen[$key])) {
                // If not seen before, add to the result
                $seen[$key] = true;
                $uniqueDetails[] = $user;
            }
        }

        return $uniqueDetails;
    }


public function getStartUpDetailsRegAll()
{           
        $builder = $this->db->table('startups_inv');
        $builder->orderBy('STUP_ID', "desc");  
        $builder->limit(1000); 
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getStartUpDetailsReg($reg_type)
{           
        $builder = $this->db->table('startups_inv');
        $builder->where('Interest_Fund_Raise', $reg_type); 
        $builder->orderBy('STUP_ID', "desc");
        $builder->limit(1000); 
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getStartUpDetails($email)
{           
        $builder = $this->db->table('startups_inv');
        $builder->where('Contact_Email', $email);  
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function set_last_login($email){
    $timezone = new \DateTimeZone('Africa/Lagos');
    $datetime = new \DateTime('now', $timezone);
    $final_date_time = $datetime->format('d-m-Y H:i:s');

    $builder = $this->db->table('login');
    $builder->set('last_login', $final_date_time);
    $builder->where('email', $email);
    $builder->update();
    
    if($this->db->affectedRows() > 0 )
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function countWeeklyReport($email)
{
    $query = $this->db->table('dcdt_report')
                    ->where('email', $email)
                    ->get();

    return $query->getNumRows();
}

public function getAllDcdtByEmail($email)
{           
        $builder =$this->db->table('pms_ref_link');
        $builder ->where('email', $email);
        $builder ->where('ref', 'dcdt');
        $builder ->groupBy('id', "desc");  
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();    
                }
        else
        {
            return 0;
        }
            
}


public function getSortedUserData($email)
{
    $builder_startup = $this->db->table('startups_inv_ext');
    $builder_startup->where('Email', $email);
    $startups_query = $builder_startup->get();
    

    $user = null;

    if ($startups_query->getNumRows() > 0) {
        $startup = $startups_query->getResultArray()[0];
        $startup_detail = $this->getStartUpDetails($startup['Email']);

        $startup_data = [
            'Name' => $startup_detail[0]['Startup_Company_Name'],
            'Email' => $startup['Email'],
            'Type' => 'startup',
            'Phone' => $startup['Startup_Phone'],
            'PersonalName' => $startup['Primary_Contact_Name'],
            'Interest' => $startup['Core_Interest_Corporate'],
            'Status' => 'active',
            'Industry' => $startup['Corporate_industry'],
            'Model' => $startup['Startup_Model'],
            'Solution' => $startup['Solution_Corperate'],
            'Ownership' => $startup['Solution_Ownership'],
            'LinkedIn' => $startup['LinkedIn'],
            'Address' => $startup['CountryHQ']
        ];

        $user = $startup_data;
    } else {
        $builder_corporate = $this->db->table('cooperate_info');
        $builder_corporate->where('Need_contact_email', $email);
        $corporates_query = $builder_corporate->get();

        if ($corporates_query->getNumRows() > 0) {
            $corporate = $corporates_query->getResultArray()[0];

            $corporate_data = [
                'Name' => $corporate['Corporate_Name'],
                'Email' => $corporate['Need_contact_email'],
                'Type' => 'corporate',
                'Phone' => $corporate['Phone'],
                'PersonalName' => $corporate['Key_contact_name'],
                'Interest' => $corporate['Core_Interest_Corporate'],
                'Status' => 'active',
                'Industry' => $corporate['PrimaryBusinessIndustry'],
                'Model' => $corporate['Startup_Model'],
                'Solution' => $corporate['Solution_Corperate'],
                'Ownership' => $corporate['Solution_Ownership'],
                'LinkedIn' => $corporate['LinkedIn'],
                'Address' => $corporate['Need_locations']
            ];

            $user = $corporate_data;
        }
    }

    return $user;
}
public function getTellYourStoryActive()
{
    $query = $this->db->table('story')
                     ->orderBy('story_id', 'desc')
                     ->where('status', 'active')
                     ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getTellYourStory($email)
{
    $query = $this->db->table('story')
                     ->orderBy('story_id', 'desc')
                     ->where('email', $email)
                     ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function getAllReportByEmail($email)
{
    $query = $this->db->table('dcdt_report')
                     ->orderBy('id', 'desc')
                     ->where('email', $email)
                     ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getTellYourStoryLimit10()
{
    $query = $this->db->table('story')
                     ->orderBy('story_id', 'desc')
                     ->where('status', 'active')
                     ->limit(10)
                     ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function getTellYourStoryByTitle($title)
{
    $query = $this->db->table('story')
                     ->orderBy('story_id', 'desc')
                     ->where('title', $title)
                     ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function getStartupWeeklyRefByEmail($email)
{
    $builder = $this->db->table('pms_ref_link');
    $builder->orderBy('id', 'desc');
    $builder->where('email', $email);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function checkPaymentSub($email)
{
    $builder = $this->db->table('package_sub');
    $builder->select('*');
    $builder->where('email', $email);
    $builder->where('status', 'active');
    $builder->orderBy('id', 'desc');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllPartnerById($id)
{
    $builder = $this->db->table('pms_ref_link');
    $builder->where('id', $id);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}


public function getAllPartner($ref)
{
    $builder = $this->db->table('pms_ref_link');
    $builder->where('ref', $ref);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}


public function getStartupDcdtRegByEmailRef($email, $ref)
{
    $builder = $this->db->table('pms_ref_link');
    $builder->where('email', $email);
    $builder->where('ref', $ref);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getStartupDcdtRegByEmail($email)
{
    $builder = $this->db->table('pms_ref_link');
    $builder->where('email', $email);
    $builder->where('ref', 'dcdt');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getCorperateStartupRegByIdRef($id, $ref)
{
    $builder = $this->db->table('pms_ref_link');
    $builder->where('id', $id);
    $builder->where('ref', $ref);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getCorperateStartupRegById($id)
{
    $builder = $this->db->table('pms_ref_link');
    $builder->where('id', $id);
    $builder->where('ref', 'dcdt');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllReport($ref)
    {
        $builder = $this->db->table("dcdt_report");
        $builder->orderBy('id', 'desc');
        $builder->where('ref', $ref);

        $query = $builder->get();
        
        if ($query->getNumRows() > 0) {
            return $query->getResultArray();
        } else {
            return [];
        }
    }

public function getCorperateStartupReg($ref)
{
    $builder = $this->db->table('pms_ref_link');
    $builder->where('ref', $ref);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

function saveInvestorProfile($email,$data)
{       

         $this->db->table('investor')
             ->where('Contact_Email', $email)
             ->update($data);

    return $this->db->affectedRows();
}

function saveInvestorFile($email,$data)
{       
        
        $this->db->table('investor_file')
             ->where('email', $email)
             ->update($data);

    return $this->db->affectedRows();
}

public function saveCreditPoint($email, $data)
{
    $this->db->table('startups_inv')
             ->where('Contact_Email', $email)
             ->update($data);

    return $this->db->affectedRows();
}

public function sort_dcdt_name($ref){
    $approved = $this->getdcdtApproved($ref);
    
    $names = [];
    
    for($i = 0; $i < count($approved); $i++){
        $name = $this->getSortedUserData($approved[$i]['email'])['Name'];
        if(!($name == '' || $name == null)){
            array_push($names, $name);
        }
        
    }
    
    return $names;
}

public function getDcdtApproved($ref)
{
    $builder = $this->db->table('pms_ref_link');
    $builder->where('ref', $ref);
    $builder->where('status', 'approved');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getCorporateDetails($email)
{
    $builder = $this->db->table('cooperate_info');
    $builder->where('Need_contact_email', $email);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}



    public function getCurrentSub($email,$subscription,$status)
{           
        $builder = $this->db->table('package_sub');
        $builder->where('email', $email);
        $builder->where('subscription', $subscription);
        $builder->where('status', $status);
        $builder->orderBy('id', 'desc');
        $builder->limit(1);
        $query= $builder->get();
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

function getWpCred($email)
    {
        $builder =$this->db->table('wp_sso_cred');
        $builder->where('Email',$email); 
        $query = $builder->get();  
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
    }
    
    public function getAcceleratorDetails($email)
{           
        $builder =$this->db->table('Accelerator');
        $builder->where('Contact_Email', $email);  
        $query=$builder->get();
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

    public function getInvestorDetails($email)
{           
        $builder =$this->db->table('investor');
        $builder->where('Contact_Email', $email);  
        $query=$builder->get();
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getStartUpDetailsExt($email)
{           
        $builder = $this->db->table('startups_inv_ext');
        $builder->where('Email', $email); 
        $query=$builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getLogoUploaded($email)
{           
        $builder=$this->db->table('profile_photo');
        $builder->where('Email',$email);
        $builder->where('Upload_Type','logo');
        $builder->orderBy('Photo_id', 'DESC');    
        $query=$builder->get();
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getPhotoUploaded($email)
{           
        $builder=$this->db->table('profile_photo');
        $builder->where('Email',$email);
        $builder->where('Upload_Type !=','logo');
        $builder->orderBy('Photo_id', 'DESC');    
        $query=$builder->get();
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getPaidSubscriber($email)
{           
        $builder=$this->db->table('package_sub');
        $builder->where('email', $email);
        $builder->where('status', 'active');
        $builder->orderBy('id', 'desc');
        $query=$builder->get();
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function getAllRequestConnections($email)
{
    $builder = $this->db->table('all_connections');
    $builder->where('email', $email);
    $builder->where('status', 'pending');
    $builder->orderBy('id', 'ASC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function countStartupConnect($email,$connect)
{           
        $builder = $this->db->table('all_connections');
        $builder->where('email_startup', $email);
        $builder->where('connection', $connect);
        $query=$builder->get();
        $count_row = $query->getNumRows();
        if($query->getNumRows() > 0 )
        {
            return $count_row;
        }
        else
        {
            return 0;
        }
            
}

public function getMentorDetails($email)
{        

        $builder=$this->db->table('mentor_info');   
        $builder->where('Email', $email); 
         $query=$builder->get(); 
                if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function countResourceUploded()
{           
        $builder=$this->db->table('resource');
        // $builder->where('Email', $email);
        $query=$builder->get();  
        $count_row = $query->getNumRows();
        if($query->getNumRows() > 0 )
        {
            return $count_row;
        }
        else
        {
            return 0;
        }
            
}

public function countFileUploded($email)
{           
        $builder=$this->db->table('files');
        $builder->where('Email', $email);
        $query=$builder->get();  
        $count_row = $query->getNumRows();
        if($query->getNumRows() > 0 )
        {
            return $count_row;
        }
        else
        {
            return 0;
        }
            
}

public function countAllStory()
{
    $builder = $this->db->table('story');
    $builder->where('status', 'active');
    $count_row = $builder->countAllResults();
    return $count_row;
}

public function countAllEvents($email)
{
    $builder = $this->db->table('event');
    $builder->where('email', $email);
    $count_row = $builder->countAllResults();
    return $count_row;
}

public function countEventParticipant($event_id)
{
    $builder = $this->db->table('wp_event');
    $builder->where('wp_id', $event_id);
    $count_row = $builder->countAllResults();
    return $count_row;
}

public function countCSRParticipant($csr_id)
{
    $builder = $this->db->table('csr_apply');
    $builder->where('csr_id', $csr_id);
    $count_row = $builder->countAllResults();
    return $count_row;
}

public function getEventByEmailLimit($limit)
{
    $builder = $this->db->table('event');
    $builder->orderBy('event_id', 'desc');
    $builder->where('status', 'active');
    $builder->limit($limit);
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getEventPass($id)
{
    $builder = $this->db->table('event');
    $builder->where('event_id', $id);

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getEventPayRef($pay_ref)
{
    $builder = $this->db->table('wp_event');
    $builder->where('pay_ref', $pay_ref);

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function getEventByIdAttend($id)
{        
        $builder=$this->db->table('event');   
        $builder->where('event_id',$id);   
        $query = $builder->get();
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
            
}

public function mysqlCheck($input)
{
    $getInput = str_replace("'", "", esc($input));
    return $getInput;
}

public function saveStartupProfileExt($email, $data)
{
    $this->db->table('startups_inv_ext')
        ->where('Email', $email)
        ->update($data);

    if ($this->db->affectedRows() > 0) {
        return $this->db->affectedRows();
    } else {
        return 0;
    }
}

public function getInviteDetails($email)
{
    $query = $this->db->query("SELECT * FROM invite WHERE Invite_Email = '$email'");
    
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}


public function saveCorperateProfile($email, $data)
{
    
    $this->db->table('cooperate_info')
        ->where('Need_contact_email', $email)
        ->update($data);

    if ($this->db->affectedRows() > 0) {
        return $this->db->affectedRows();
    } else {
        return 0;
    }
}


public function saveStartupProfile($email, $data)
{
    $this->db->table('startups_inv')
        ->where('Contact_Email', $email)
        ->update($data);

    if ($this->db->affectedRows() > 0) {
        return $this->db->affectedRows();
    } else {
        return 0;
    }
}

public function getEventByEmailRef($email, $ref_id)
{
    $builder = $this->db->table('event');
    $builder->orderBy('event_id', 'desc')
        ->where('email', $email)
        ->where('ref_id', $ref_id);
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getEventByEmail($email)
{
    $builder = $this->db->table('event');
    $builder->orderBy('event_id', 'desc')
        ->where('email', $email);
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllEvent()
{
    $builder = $this->db->table('event');
    $builder->orderBy('event_id', 'desc')
        ->where('status', 'active');
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}


public function countPerksPostedByCategory($category)
{
    $builder = $this->db->table('perks');
    $builder->like('category', $category);
    $count_row = $builder->countAllResults();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function countAllEventAttendeesByEmailGender($wp_id, $gender)
{
    $builder = $this->db->table('wp_event');
    $builder->where('wp_id', $wp_id)
        ->where('attend_gender', $gender);
    $count_row = $builder->countAllResults();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function countAllEventAttendeesByEmail($wp_id)
{
    $builder = $this->db->table('wp_event');
    $builder->where('wp_id', $wp_id);
    $count_row = $builder->countAllResults();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}
public function getOnboardIndividual($email)
{			
    $builder = $this->db->table('onboard_individual');
    $builder->where('email', $email);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getOldStartUpDetails($email)
{			
    $builder = $this->db->table('startupinsight');
    $builder->where('email', $email);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}



public function invitedAdminAccess($email, $inviteEmail)
{			
    $builder = $this->db->table('invite');
    $builder->where('Email', $email);
    $builder->where('Invite_Email', $inviteEmail);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function countDcdtSme($event)
{
    $builder = $this->db->table('pms_ref_link');
    $builder->where('ref', $event);
    $query = $builder->get();
    
    $countRow = $query->getNumRows();

    if ($countRow > 0) {
        return $countRow;
    } else {
        return 0;
    }
}

public function getPerksByRef($ref_id)
{
    $builder = $this->db->table('perks_data');
    $builder->orderBy('id', 'desc');
    $builder->where('ref_id', $ref_id);
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getEventLimit10()
{
    $builder = $this->db->table('event');
    $builder->orderBy('event_id', 'desc');
    $builder->where('status', 'active');
    $builder->limit(10);
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getJobsLimit10()
{
    $builder = $this->db->table('jobpost');
    $builder->orderBy('id', 'desc');
    $builder->limit(10);
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getEventByTitle($ref_id)
{
    $builder = $this->db->table('event');
    $builder->orderBy('event_id', 'desc');
    $builder->where('ref_id', $ref_id);
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getEvent($email)
{
    $builder = $this->db->table('event');
    $builder->orderBy('event_id', 'desc')
            ->where('email', $email);
    
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getWpEvent($email, $event_id)
{
    // Check if the email is empty early on
    if (empty($email)) {
        return 0;
    }

    $builder = $this->db->table('wp_event');
    $builder->orderBy('id', 'desc');
    $builder->where('email', $email);
    $builder->where('wp_id', $event_id);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}



public function getEventByRef($ref_id)
{
    $builder = $this->db->table('post_data');
    $builder->orderBy('id', 'desc');
    $builder->where('ref_id', $ref_id);
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function insertSubPackageUnleashified($data)
{
    $query = $this->db->table('package_sub_unleash')->insert($data);
    
    if ($query)
    {
        return $this->db->affectedRows();
    }
    else
    {
        return 0;
    }
}

public function insertSubPackageFlutter($data)
{
    $builder = $this->db->table('package_sub');
    $builder->insert($data);

    if ($builder->affectedRows() > 0) {
        return $builder->affectedRows();
    } else {
        return 0;
    }
}

public function getAllSub($email)
{
    $builder = $this->db->table('package_sub');
    $builder->orderBy('id', 'desc');
    $builder->where('email', $email);
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllPerksCategoryById($id)
{       
    $builder = $this->db->table('perks_category');
    $builder->where('id', $id);
    $builder->orderBy('id', 'desc');
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllPerksCategoryInOrder()
{           
    $builder = $this->db->table('perks_category');
    $builder->orderBy('category', 'asc');
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllPerksCategory()
{           
    $builder = $this->db->table('perks_category');
    $builder->orderBy('id', 'desc');
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getPerksSearchByCategory($data)
{           
    $builder = $this->db->table('perks');
    $builder->orderBy('id', 'desc');
    $dataCount = sizeof($data);
    for ($j = 0; $j < $dataCount; $j++) {
        if ($j == 0) {
            $builder->like('category', $data[$j]);
        } else {
            $builder->orLike('category', $data[$j]);
        }
    }
    $query = $builder->get();
    if ($query->getNumRows() > 0 && !empty($data)) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}


public function getUserAccountExt($email)
{
    $builder = $this->db->table('user_ext_info');
    $builder->where('email', $email);
    $builder->orderBy('id', 'DESC');
    
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function deleteReport($email, $ref)
{
    $builder = $this->db->table('dcdt_report');
    $builder->where('email', $email);
    $builder->where('ref', $ref);
    $builder->delete();
}

public function deleteRegistrationLink($email, $ref)
{
    $builder = $this->db->table('pms_ref_link');
    $builder->where('email', $email);
    $builder->where('ref', $ref);
    $builder->delete();
}

public function deleteActiveSub($email)
{
    $builder = $this->db->table('package_sub');
    $builder->where('email', $email);
    $builder->where('status', 'active');
    $builder->orWhere('payment_status', 'paid');
    $builder->delete();
}

public function deleteUser($id)
{
    $builder = $this->db->table('users');
    $builder->where('ref_id_api', $id);
    $builder->delete();
}

public function deleteMsg($id)
{
    $builder = $this->db->table('message');
    $builder->where('id', $id);
    $builder->delete();
}

public function updateSubPackage($data, $id)
{
    $builder = $this->db->table('package_sub');
    $builder->where('id', $id);
    $builder->update($data);

    if ($builder->affectedRows() > 0) {
        return $builder->affectedRows();
    } else {
        return 0;
    }
}


public function getAllPerksRedeem()
{           
    $builder = $this->db->table('perks_redeem');
    $builder->orderBy('id', 'desc');
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getPerksSub($sub)
{
    $builder = $this->db->table('perks');
    $builder->selectSum('value_2');
    $builder->orderBy('id', 'desc');
    $builder->where('status', 'Active');
    if ($sub == 'free') {
        $builder->where('sub_type', 'Free');
    } elseif ($sub == 'monthly') {
        $builder->like('sub_type', 'Monthly');
        $builder->orLike('sub_type', 'Free');
    } else {
        $builder->like('sub_type', 'Annual');
        $builder->orLike('sub_type', 'Monthly');
        $builder->orLike('sub_type', 'Free');
    }
    $result = $builder->get()->getRow();
    return $result->value_2 * 750;
}

public function getAllPerksSub($sub)
{
    $builder = $this->db->table('perks');
    $builder->orderBy('id', 'desc');
    $builder->where('status', 'Active');
    if ($sub == 'free') {
        $builder->where('sub_type', 'Free');
    } elseif ($sub == 'monthly') {
        $builder->like('sub_type', 'Monthly');
        $builder->orLike('sub_type', 'Free');
    } else {
        $builder->like('sub_type', 'Annual');
        $builder->orLike('sub_type', 'Monthly');
        $builder->orLike('sub_type', 'Free');
    }
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllPerks()
{
    $builder = $this->db->table('perks');
    $builder->orderBy('id', 'desc');
    //$builder->where('status', 'Active');
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getPerksByRedeemId($id)
{
    $builder = $this->db->table('perks_redeem');
    $builder->where('id', $id);
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

// public function getPerksByRef($ref_id)
// {			
// 		$builder = $this->db->table('perks_data');
// 		$builder->orderBy('id','desc');
// 		$builder->where('ref_id',$ref_id);	
// 		 $query = $builder->get();
// 		if ($query->getNumRows() > 0) {
//         return $query->getResultArray();
//     } else {
//         return 0;
//     }
			
// }

public function getPerksByIdDetails($id) 
{			
			
			$builder = $this->db->table('perks');
		 $builder->where('id',$id);
 		 $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
			
}

public function getPerksByEmailRedeem($email)
{
    $builder = $this->db->table('perks_redeem');
    $builder->orderBy('id', 'desc');
    $builder->where('email', $email);
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getPerksByEmail($email)
{
    $builder = $this->db->table('perks');
    $builder->orderBy('id', 'desc');
    $builder->where('email', $email);
    $query = $builder->get();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getPerksById($email, $id)
{
    if (empty($email) || empty($id)) {
        return 0; // Return early if email or id is empty
    }

    $builder = $this->db->table('perks');
    $builder->where('id', $id);
    $builder->where('email', $email);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}


public function getEventById($email, $id)
{
    if (empty($email) || empty($id)) {
        return 0; // Return early if email or id is empty
    }

    $builder = $this->db->table('event');
    $builder->where('event_id', $id);
    $builder->where('email', $email);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getTellYourStoryById($email, $id)
{
    if (empty($email) || empty($id)) {
        return 0; // Return early if email or id is empty
    }

    $builder = $this->db->table('story');
    $builder->where('story_id', $id);
    $builder->where('email', $email);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}


public function getAllCsrByEmail($email)
{
    $builder = $this->db->table('csr');
    $builder->orderBy('csr_id', 'desc');
    $builder->where('email', $email);

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllCsr()
{
    $builder = $this->db->table('csr');
    $builder->orderBy('csr_id', 'desc');
    $builder->where('status', 'active');

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllJobByEmail($email)
{
    $query = $this->db->table('jobpost')
                     ->where('email', $email)
                     ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function checkInvConOnbStatus($email)
{
    $builder = $this->db->table('investor_connect_onb');
    $builder->where('Email', $email);

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return 1;
    } else {
        return 0;
    }
}

    function insertUserActivity($data) {
        $builder = $this->db->table('user_activity');
        $query = $builder->insert($data);
        
        if ($builder->resultID->num_rows > 0) {
            return true; // Or you can return $builder->insertID() if you need the inserted ID
        } else {
            return false;
        }
    }

    public function saveMentorProfile($email, $data)
    {
        $builder = $this->db->table('mentor_info');
        $builder->where('Email', $email);
        $builder->update($data);

        if ($builder->resultID->num_rows > 0)
        {
            return true;
        }
        else
        {
            return 0;
        }
    }

//-------------------END OF GFAMODEL--------------------------------

}


?>