

<!-- <form role="form" action="<?php echo base_url()?>index.php/Users/addUser" method="POST" > -->


<?php echo validation_errors(); ?>
<?php echo form_open('Login/LoginUser'); ?>

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
    
  </div>
<!-- </form>
 -->
</body>
</html>
