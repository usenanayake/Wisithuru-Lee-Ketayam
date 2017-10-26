
<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password],input[type=Email] {
    width: 100%;
    padding: 12px 20px;
    margin: 20px 0px ;
    display: in-line;
    border: 1px solid #ccc;
    box-sizing: border-box;
}



/* Add padding to container elements */
.container {
    padding: 10px;
}


</style>
<body>

<h1 align="center">Registration Form1</h1>

<?php echo validation_errors(); ?>
<?php /*echo form_open('Register/RegisterUser');*/ ?>

  <div class="container">

    <?php if($this->session->flashdata('msg')){
        echo "<h3>".$this->session->flashdata('msg')."<h3>";
    }
    ?>
  
   
  <table align="center">
  
   <tr>
    <td><b>Username: </b></td>
    <td><input type="text" name="username"  ></td>
    </tr>


    <tr>
    <td><b>First Name: </b></td>
    <td><input type="text" name="fname"  ></td>
    </tr>

    <tr>
    <td><b>Last Name: </b></td>
    <td><input type="text" name="lname"  ></td>
    </tr>
    
    <tr>
    <td><b>password:</b></td>
    <td><input type="password" name="password" >
    </td>
    </tr>
   
    
    <tr>
    <td><b>Confirm Password:</b></td>
    <td><input type="password" name="c_password"></td>
    </tr>
    
    
    
    <tr>
    <td><b>Email:</b></td>
    <td><input type="text" name="email" ></td>
    </tr>
    <!-- 
     <tr>
    <td><b>Gender:</b></td>
    <td><input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female</td>
    </tr> -->
    
    
   <!--  <tr>
        <td colspan="2"><input type = "checkbox" name="termsNCondition" value="Non-English" style="margin: 20px 10px ;">I accept Terms and Conditions   <input type="submit" value="Register" style="margin: 20px 180px ;"align="center"></td>

    </tr> -->

    </table>
    <!-- <input type="checkbox" name="termsNCondition" value="Checked" style="float: left;" required=""> I accept Terms and Conditions -->

    
<div style="text-align:center">  
    
   <button  type="submit" name="submit" style="padding:auto 50% auto 50%; background-color:#0b7df5;">Register</button>
  
</div>
    
<?php /*echo form_close(); */?>
    
  </div>
<!-- </form>
 -->
</body>
</html>
