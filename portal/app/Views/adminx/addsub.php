

<div class="user-area pt-100 pb-70">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-8">
<div class="user-form">
<div class="contact-form">
<h2>Add Subscripion</h2>
 <p class="ml-4 savePersonalInfo"><?php if(!empty($message)){ echo $message; } ?></p>
<form id="addSub" method="post" action="<?php echo base_url(); ?>admin/addSubAction" class="row">
<div class="col-lg-12">
<div class="form-group">
<select name="package">
<option value="0">---Selecet Package----</option>
<option value="email_marketing">Email Marketing </option>
<option value="transactional">Transactional</option>
<option value="payasyougo">Pay as you Go</option>
</select>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<select name="subscription">
<option value="0">---Selecet Subscription----</option>
<option value="monthly">monthly</option>
<option value="yearly">yearly</option>

</select>
</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<select name="subscription_type">
<option value="0">--- Subscription Type----</option>
<option value="enterprise">Enterprise</option>
<option value="standard">Standard</option>
<option value="free">Free</option>
</select>
</div>
</div>
<div class="single-field col-12 col-md-6">
<input  type="text" class="form-control" name="pricing_desc" required data-error="Please enter your Username" placeholder="Subscription Type Description" >
</div>
<div class="single-field col-12 col-md-6">
<input  type="number" class="form-control" name="amount" required data-error="Please enter your Username" placeholder="Amount" >
</div>
<div class="col-lg-12">
<div class="form-group">

</div>
</div>

<div class="single-field col-12 col-md-6">
<input  type="text" class="form-control" name="per_campaign" required data-error="Please enter your Username" placeholder="per campaign" >
</div>
<div class="single-field col-12 col-md-6">
<input  type="number" class="form-control" name="per_month" required data-error="Please enter your Username" placeholder="per month" >
</div>
<div class="single-field col-12 col-md-6">
<input  type="number" class="form-control" name="maximum_contacts" required data-error="Please enter your Username" placeholder="maximum contacts" >
</div>
<div class="col-lg-12">
<div class="form-group">

</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<input  type="text" class="form-control" name="details[]" required data-error="Please enter your Username" placeholder="1. Selected Package Details" >
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input  type="text" class="form-control" name="details[]"  data-error="Please enter your Username" placeholder="2. Selected Package Details" >
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input  type="text" class="form-control" name="details[]"  data-error="Please enter your Username" placeholder="3. Selected Package Details" >
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input  type="text" class="form-control" name="details[]"  data-error="Please enter your Username" placeholder="4. Selected Package Details" >
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input  type="text" class="form-control" name="details[]"  data-error="Please enter your Username" placeholder="5. Selected Package Details" >
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input  type="text" class="form-control" name="details[]"  data-error="Please enter your Username" placeholder="6. Selected Package Details" >
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input  type="text" class="form-control" name="details[]"  data-error="Please enter your Username" placeholder="7. Selected Package Details" >
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input  type="text" class="form-control" name="details[]"  data-error="Please enter your Username" placeholder="8. Selected Package Details" >
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input  type="text" class="form-control" name="details[]"  data-error="Please enter your Username" placeholder="9. Selected Package Details" >
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input  type="text" class="form-control" name="details[]" data-error="Please enter your Username" placeholder="10. Selected Package Details" >
</div>
</div>





<div class="single-field col-12 text-md-left mt-20">
<button class="theme-btn" type="submit">Add</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>