

<div class="user-area pt-100 pb-70">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-8">
<div class="user-form">
<div class="contact-form">
<h2>Add Subscripion</h2>
 <p class="ml-4 savePersonalInfo"><?php if(!empty($message)){ echo $message; } ?></p>
<form id="addSub" method="post" action="<?php echo base_url(); ?>admin/editSubAction" class="row">
<?php $getSelectSub = $this->admin_model->getSub($id); ?>
<div class="col-lg-12">
<div class="form-group">
<select name="package">
<option value="<?php echo $getSelectSub[0]['package'] ?>"><?php echo ucwords($getSelectSub[0]['package']) ?></option>
<option value="email_marketing">Email Marketing </option>
<option value="transactional">Transactional</option>
<option value="payasyougo">Pay as you Go</option>
</select>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<select name="subscription">
<option value="<?php echo ucwords($getSelectSub[0]['subscription']) ?>"><?php echo ucwords($getSelectSub[0]['subscription']) ?></option>
<option value="monthly">monthly</option>
<option value="yearly">yearly</option>

</select>
</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<select name="subscription_type">
<option value="<?php echo ucwords($getSelectSub[0]['subscription_type']) ?>"><?php echo ucwords($getSelectSub[0]['subscription_type']) ?></option>
<option value="enterprise">Enterprise</option>
<option value="standard">Standard</option>
<option value="free">Free</option>
</select>
</div>
</div>
<div class="single-field col-12 col-md-6">
<input  type="text" class="form-control" name="pricing_desc" required data-error="Please enter your Username" placeholder="Subscription Type Description" value="<?php echo $getSelectSub[0]['pricing_desc'] ?>" >
</div>
<div class="single-field col-12 col-md-6">
<input  type="number" class="form-control" name="amount" required data-error="Please enter your Username" placeholder="Amount" value="<?php echo $getSelectSub[0]['amount'] ?>" >
</div>
<div class="col-lg-12">
<div class="form-group">

</div>
</div>

<div class="single-field col-12 col-md-6">
<input  type="text" class="form-control" name="per_campaign" required data-error="Please enter your Username" placeholder="per campaign"  value="<?php echo $getSelectSub[0]['per_campaign'] ?>">
</div>
<div class="single-field col-12 col-md-6">
<input  type="number" class="form-control" name="per_month" required data-error="Please enter your Username" placeholder="per month" value="<?php echo $getSelectSub[0]['per_month'] ?>">
</div>
<div class="single-field col-12 col-md-6">
<input  type="number" class="form-control" name="maximum_contacts" required data-error="Please enter your Username" placeholder="maximum contacts" value="<?php echo $getSelectSub[0]['maximum_contacts'] ?>" >
</div>
<div class="col-lg-12">
<div class="form-group">

</div>
</div>
<?php $rowDetails = json_decode($getSelectSub[0]['details'], true);
					foreach($rowDetails as $key => $n){ ?>
<div class="col-lg-12">
<div class="form-group">
<input  type="text" class="form-control" name="details[]" required data-error="Please enter your Username" placeholder="1. Selected Package Details" value="<?php echo $rowDetails[$key] ?>" >
</div>
</div>

<?php }  ?>
<div class="col-lg-12">
<div class="form-group">
<input  type="text" class="form-control" name="details[]"  data-error="Please enter your Username" placeholder="Selected Package Details" >
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input  type="text" class="form-control" name="details[]"  data-error="Please enter your Username" placeholder="Selected Package Details" >
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input  type="text" class="form-control" name="details[]"  data-error="Please enter your Username" placeholder="Selected Package Details" >
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input  type="text" class="form-control" name="details[]"  data-error="Please enter your Username" placeholder="Selected Package Details" >
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input  type="text" class="form-control" name="details[]"  data-error="Please enter your Username" placeholder="Selected Package Details" >
</div>
</div>

<input  type="hidden" class="form-control" name="id" data-error="Please enter your Username"  value="<?php echo $getSelectSub[0]['id'] ?>" >



<div class="single-field col-12 text-md-left mt-20">
<button class="theme-btn" type="submit">Edit</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>