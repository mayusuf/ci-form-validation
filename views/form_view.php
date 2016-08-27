<html>
<head>
<title>Validation Form</title>

<style>
    .error{
     color:red;   
    }
</style>

</head>
<body>

<?php //echo validation_errors(); ?>

<?php echo form_open('form/index'); ?>

<h5>Name</h5>
<input type="text" name="name" value="" size="50" />
<span class="error"><?php echo form_error('name'); ?></span>

<h5>Username</h5>
<input type="text" name="username" value="" size="50" />
<span class="error"><?php echo form_error('username'); ?></span>

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />
<span class="error"><?php echo form_error('password'); ?></span>

<h5>Password Confirm</h5>
<input type="text" name="passconf" value="" size="50" />
<span class="error"><?php echo form_error('passconf'); ?></span>

<h5>Price</h5>
<input type="text" name="price" value="" size="50" />
<span class="error"><?php echo form_error('price'); ?></span>

<h5>Email Address</h5>
<input type="text" name="email" value="" size="50" />
<span class="error"><?php echo form_error('email'); ?></span>

<h5>User Photo</h5>
<input type="file" name="photo" />
<span class="error"><?php echo form_error('photo'); ?></span>

<div><input type="submit" value="Submit" /></div>
</form>

</body>
</html>