<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<div class="row justify-content-center">
<img src="<?= base_url().'assets/logo.png' ?>" hight="100" width="200" > </div>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="<?= base_url().'admin/login'?>" class="float-right btn btn-outline-primary mt-1">Log in</a>
	<h4 class="card-title mt-2">Sign up</h4>
</header>
<article class="card-body">
<form action="<?= base_url().'admin/login/signup_user'?>" method = "post">
<?php
if(isset($_SESSION['exist'])){
	if($_SESSION['exist'] == "yes"){
		echo '<div class="alert alert-danger">';
		echo "This Email Account allready registered.";
		echo '</div>';
	}
}
?>
	<div class="form-row">
		<div class="col form-group">
			<label>First name </label>   
		  	<input type="text" class="form-control" placeholder="First name" name = "first_name" value="<?= set_value('first_name');?>" >
              <?php 
                     echo '<div style="color : red">';
                    echo form_error('first_name'); 
                    echo '</div>';
                    ?>
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Last name</label>
		  	<input type="text" class="form-control" placeholder="Last name"  name = "last_name" value="<?= set_value('last_name');?>">
              <?php 
                     echo '<div style="color : red">';
                    echo form_error('last_name'); 
                    echo '</div>';
                    ?>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control" placeholder="Email" name="email" value= "<?= set_value('email');?>">
        <?php 
                     echo '<div style="color : red">';
                    echo form_error('email'); 
                    echo '</div>';
                    ?>
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> <!-- form-group end.// -->
	<div class="form-row">
    <div class=" col form-group">
			<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="male" selectd= "<?= set_value('gender');?>">
		  <span class="form-check-label">Male</span>
		</label>
		<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="female">
		  <span class="form-check-label">Female</span>
          <label class="form-check form-check-inline">
		  <input class="form-check-input ml-2 mt-2" type="radio" name="gender" value="other">
		  <span class="form-check-label  mt-2">Other</span>
		</label>
		<?php 
					// echo "<br>";
                     echo '<div style="color : red">';
                    echo form_error('gender'); 
                    echo '</div>';
                    ?>
		</div>
          <div class="col form-group">
		<label >Mobile No.</label>
	    <input class="form-control" type="text"  name="mobile" placeholder = "03XXXXXXXXX" value="<?= set_value('mobile');?>">
        <?php 
                     echo '<div style="color : red">';
                    echo form_error('mobile'); 
                    echo '</div>';
                    ?>
	</div>
		</label>
       
	</div> <!-- form-group end.// -->
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>City</label>
		  <input type="text" class="form-control" placeholder="City" name="city" value= "<?= set_value('city');?>">
          <?php 
                     echo '<div style="color : red">';
                    echo form_error('city'); 
                    echo '</div>';
                    ?>
		</div> <!-- form-group end.// -->
		<div class="form-group col-md-6">
		  <label>Country</label>
          <input type="text" class="form-control" placeholder="Country" name="country" value="<?= set_value('country');?>">
          <?php 
                     echo '<div style="color : red">';
                    echo form_error('country'); 
                    echo '</div>';
                    ?>
		  <!-- <select id="inputState" class="form-control">
		    <option> Choose...</option>
		      <option>Uzbekistan</option>
		      <option>Russia</option>
		      <option selected="">United States</option>
		      <option>India</option>
		      <option>Afganistan</option>
		  </select> -->
		</div> <!-- form-group end.// -->
	</div> <!-- form-row.// -->
	<div class="form-group">
		<label>Create password</label>
	    <input class="form-control" type="password"  name="password" placeholder = "Create secure Password">
        <?php 
                     echo '<div style="color : red">';
                    echo form_error('password'); 
                    echo '</div>';
                    ?>
        <small class="form-text text-muted">Min. lenght is 8. should contain characters and numbers.</small>
	</div> <!-- form-group end.// -->  
    <div class="form-group">
		<label>Confirm password</label>
	    <input class="form-control" type="password" name="conf_password" placeholder = "Enter same as above">
        <?php 
                     echo '<div style="color : red">';
                    echo form_error('conf_password'); 
                    echo '</div>';
                    ?>
	</div> <!-- form-group end.// --> 
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->      
    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="<?= base_url().'admin/login'?>">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

<br><br>
<!-- <article class="bg-secondary mb-3">   -->
<!-- <div class="card-body text-center">
    <h3 class="text-white mt-3">Bootstrap 4 UI KIT</h3>
<p class="h5 text-white">Components and templates  <br> for Ecommerce, marketplace, booking websites 
and product landing pages</p>   <br>
<p><a class="btn btn-warning" target="_blank" href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com  
 <i class="fa fa-window-restore "></i></a></p>
</div> -->
<br><br>
<!-- </article> -->