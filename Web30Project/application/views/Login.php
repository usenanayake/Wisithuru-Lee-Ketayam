



<?php echo validation_errors(); ?>
<?php echo form_open('Login/LoginUser'); ?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url()?>template/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='<?php echo base_url()?>template/vendor/font-awesome/css/new.css' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url()?>template/vendor/font-awesome/css/neww.css' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url()?>template/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>template/css/creative.min.css" rel="stylesheet">

  </head>

  <div class="container">

    <?php if($this->session->flashdata('errmsg')){
        echo "<h3>".$this->session->flashdata('errmsg')."<h3>";
    }
    ?>
  
   
  <table align="center">
     <tr>
    <td><b>Email:</b></td>
    <td><input type="text" name="email" ></td>
    </tr>
   
    
    <tr>
    <td><b>password:</b></td>
    <td><input type="password" name="password" >
    </td>
    </tr>
   
    
   

    </table>
    <!-- <input type="checkbox" name="termsNCondition" value="Checked" style="float: left;" required=""> I accept Terms and Conditions -->

    
<div style="text-align:center">  
    
   <button  type="submit" name="submit" style="padding:auto 50% auto 50%; background-color:#0b7df5;">Login</button>
  
</div>


    
<?php echo form_close(); ?>

<a href="<?php echo site_url('Welcome') ?>"><button type="button" class="btn btn-primary" >Home</button></a>
    
  </div>

</body>
</html>
