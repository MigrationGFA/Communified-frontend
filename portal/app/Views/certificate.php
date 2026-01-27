<?php $this->gfa_model = model('App\Models\GfaModel'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if(!empty($page_title)){ echo $page_title; } ?></title>
    <!-- FGN-ALAT Certificate of Completion -->
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
    <link rel="stylesheet" href="<?php echo base_url('public/assets-new/cert_soft/styles.css'); ?>" />
  </head>
  <body>
    <div class="certificate-container">
      <img src="<?php echo base_url('public/assets-new/cert_soft/Certificate.jpg'); ?>" alt="Certificate" class="certificate-image" />

      <div class="text-overlay">
        <p><?php echo $certData[0]['prog'] ?></p>
        <h1><?php 
    	$nameArray = explode(" ", $certData[0]['name']);
		echo ucwords(trim(($nameArray[0] ?? '') . ' ' . ($nameArray[2] ?? '') . ' ' . ($nameArray[1] ?? ''))); ?> </h1>
        <h3 style="font-size:25px;"><?php echo str_replace(","," |",$certData[0]['course']) ?></h3>
      </div>
    </div>
  </body>
</html>
