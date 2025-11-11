<?php
// require_once './api/v0/php/PHPMailer';
require 'translation/french/main.php';

$db_host = "noradb.mysql.database.azure.com";
$db_user = "NoraDBAdmin";
$db_password = "Creo*la@1789";
$db_name = "getfylig_trans";

if (!($database = mysqli_connect($db_host, $db_user, $db_password))) {
    $msg_info = translate('There was an error connecting to the database.');
    $title_info = translate("Oops...");
    $icon_info = "error";
    die();
}

if (!(mysqli_select_db($database, $db_name))){
  $msg_info = 'There is a database selection error.';
  $title_info = translate("Oops...");
  $icon_info = "error";
  die();
}

mysqli_autocommit($database, FALSE);


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    // Generate random ticket ID
    $random_number = mt_rand(1000, 9999);
    $ticket_id = $random_number . time();

    // Sanitize input values
    $email = mysqli_real_escape_string($database, $_POST['email'] ?? '');
    $first_name = mysqli_real_escape_string($database, $_POST['first_name'] ?? '');
    $surname = mysqli_real_escape_string($database, $_POST['surname'] ?? '');
    $subject = mysqli_real_escape_string($database, $_POST['subject'] ?? '');
    $urgency = mysqli_real_escape_string($database, $_POST['urgency'] ?? '');
    $message = mysqli_real_escape_string($database, $_POST['message'] ?? '');

    // Define other variables
    $created_by = trim($email);
    $full_name = trim("$first_name $surname");
    $role = "Guest";
    $date_created = date("Y-m-d H:i:s");
    $date_updated = date("Y-m-d H:i:s");

    // Insert into support_tickets table
   $queryA = "INSERT INTO support_tickets (ticket_id, subject, urgency, status, created_by, full_name, date_created) 
           VALUES ('$ticket_id', '$subject', '$urgency', 0, '$created_by', '$full_name', '$date_created')";

    if (!mysqli_query($database, $queryA)) {
       $msg_info = mysqli_error($database);
        $title_info = translate("Oops...");
        $icon_info = "error";
        die();
    }

    // Insert into support_tickets_msg table
    $queryB = "INSERT INTO support_tickets_msg (ticket_id, message, created_by, role, date_updated) 
           VALUES ('$ticket_id', '$message', '$created_by', '$role', '$date_updated')";


    if (!mysqli_query($database, $queryB)) {
        $msg_info = mysqli_error($database);
        $title_info = translate("Oops...");
        $icon_info = "error";
        die();
    } else {
        $msg_info = translate('You have successfully submitted your message. You will be contacted shortly!');
        $title_info = translate("Successful");
        $icon_info = "success";
    }

$mesg = "<strong><p>User Email: $created_by</p> <p>Ticket ID: $ticket_id</p>
            <p>Subject: $subject</p></strong> <p>Message: $message</p>";

// ACMail('CIPME', 'Support Ticket', $mesg, 'promise@gfa-tech.com');
// ACMail('CIPME', 'Support Ticket', $mesg, 'oluwatoyin@gfa-tech.com');
}
mysqli_commit($database);
    mysqli_rollback($database);
    mysqli_close($database);

if (!empty($msg_info)) {
    // Output these variables into JavaScript-friendly format
    echo "<script>
            var titleInfo = '".addslashes($title_info)."';
            var msgInfo = '".addslashes($msg_info)."';
            var iconInfo = '".addslashes($icon_info)."';
          </script>";
    $msg_info = ''; // Reset $msg_info

}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Help Center</title>
    <link
      rel="icon"
      href="https://getfundedafrica.com/gfa/upload/cropped-TG-Thumb-32x32.png"
      sizes="32x32"
    />
    <link
      rel="icon"
      href="https://getfundedafrica.com/gfa/upload/cropped-TG-Thumb-192x192.png"
      sizes="192x192"
    />
    <link
      rel="apple-touch-icon"
      href="https://getfundedafrica.com/gfa/upload/cropped-TG-Thumb-180x180.png"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="stylesheet" href="./assets/css/responsive.css" />
  </head>

  <body>
    <style>
      .container .card .left-side-index {
        width: 40%;
        background-image: url("./assets/images/csr.jpg");
        background-repeat: no-repeat;
        background-size: cover; /* Ensures the background image covers the entire element */
        background-position: center; /* Centers the background image */
        height: 100%;
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;
        padding: 20px 30px;
        box-sizing: border-box;
        position: fixed;
      }
      .container .card .right-side-index {
        width: 60%;

        margin-left: 38.5rem;
        background-color: #f1f1f1;
        height: 100%;
        border-radius: 0px;
      }

      @media (max-width: 767px) {
        .container .card .left-side-index {
          display: none;
        }
        .container .card .right-side-index {
          background-color: #f1f1f1;
          height: 100%;
          width: 90%;
          margin-left: 0px;
          border-radius: 0px;
        }
      }
    </style>
    
    <form action="" method="post">
      <div class="container">
        <div class="card">
          <div class="form">
            <div class="left-side-index">
            </div>
            <div class="right-side-index">
              <div class="inner">
                <div class="main active">
                  <div class="text" style="text-align: left">
                    <a
                      href="javascript:history.back()"
                      style="color: #02913f; text-decoration: solid underline"
                      >← Go back</a
                    >
                  </div>

                  <div class="text">
                    <h2><?php echo translate('Help Desk'); ?></h2>
                    <p><?php echo translate('Please fill the form below accurately'); ?>.</p>
                    <span
                      class="input-group-text"
                      style="color: red; display: none"
                      id="errorUser"
                    ></span>
                  </div>

                  <div class="input-text">
                    <div class="input-div mb-1">
                      <label class="form-label" for="first-name-icon"
                        ><?php echo translate('First Name'); ?></label
                      >
                      <div class="input-group input-group-merge">
                        <input
                          type="text"
                          id="first-name"
                          class="form-control"
                          name="first_name"
                          placeholder="<?php echo translate('First Name'); ?>"
                          minlength="3"
                          required=""
                        />
                      </div>
                    </div>
                    
                    <div class="input-div mb-1">
                      <label class="form-label" for="first-name-icon"
                        > <?php echo translate('Surname'); ?> </label
                      >
                      <div class="input-group input-group-merge">
                        <input
                          type="text"
                          id="last-name"
                          class="form-control"
                          name="surname"
                          placeholder="<?php echo translate('Surname'); ?>"
                          minlength="3"
                          required=""
                        />
                      </div>
                    </div>
                  </div>

                  <div class="input-text">
                    <div class="input-div mb-1">
                      <label class="form-label" for="contact-info-icon"
                        ><?php echo translate('Email Address'); ?></label
                      >
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"></span>
                        <input
                          type="email"
                          id="email"
                          class="form-control"
                          name="email"
                          placeholder="<?php echo translate('Email Address'); ?>"
                          required=""
                        />
                      </div>
                    </div>
                  </div>
                      
                  <div class="input-text">
                    <div class="input-div mb-1">
                      <label class="form-label" for="contact-info-icon"
                        ><?php echo translate('Subject'); ?></label
                      >
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"></span>
                        <input
                          type="text"
                          id="subject"
                          class="form-control"
                          name="subject"
                          placeholder="<?php echo translate('Subject'); ?>"
                          required=""
                        />
                      </div>
                    </div>
                  </div>

                  <div class="input-text">
                    <div class="input-div mb-1">
                      <label class="form-label" for="contact-info-icon"
                        > <?php echo translate('Urgency'); ?> </label
                      >
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"></span>
                        <select
                          name="urgency"
                          class="form-select"
                          required=""
                        >
                          <option value="" selected="selected">
                            - Select -
                          </option>
                          <option value="Low"><?php echo translate('Low'); ?></option>
                          <option value="Medium"><?php echo translate('Medium'); ?></option>
                          <option value="High"><?php echo translate('High'); ?></option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="input-text">
                    <div class="input-div mb-1">
                      <label class="form-label" for="contact-info-icon"
                        > Message </label
                      >
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"></span>
                        <textarea name="message" class="form-control" style="height:90px" required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="buttons">
                    <button type="submit"><?php echo translate('Submit'); ?></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
	<script>
  // Check if msgInfo is not empty, meaning the PHP variables were set
  if (typeof msgInfo !== 'undefined' && msgInfo !== '') {
      Swal.fire({
          title: titleInfo,
          text: msgInfo,
          icon: iconInfo,
      }).then(() => {
          window.location.href = "https://nora.cipme.ci/register/ticket.php";
      });
  }
</script>
</html>
