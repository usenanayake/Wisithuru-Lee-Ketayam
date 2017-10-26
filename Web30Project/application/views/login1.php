<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Boostrap Validator</title>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>  
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
</head>
<body>
   
	<div>
		<h1><center>Login</center></h1>
	</div>
	

	<!-- <form id="registration_form" action="register.php" method="post">
		<tr><td>user name:</td><td><input type="text" name="username" class="form_text"></td><td><span class="error_message" id="username_error"></span></td></tr><br><br>
		<tr><td>password:</td><td><input type="password" name="password" class="form_text"></td><td><span class="error_message" id="password_error"></span></td></tr><br><br>
		<tr><td>retype password:</td><td><input type="password" name="retype_password" class="form_text"></td><td><span class="error_message" id="retypepassword_error"></span></td></tr><br><br>
		<tr><td>email:</td><td><input type="email" name="email" class="form_text"></td><td><span class="error_message" id="email_error"></span></td></tr><br><br>
		<tr><td></td><td><input type="submit" name="submit" class="submitbtn"></td><td></td></tr>
	</form> -->
	<form id="contactForm" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="col-md-3 control-label">Email</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="email" />
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-md-3 control-label">Password</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password" />
        </div>
    </div>
    
    
    <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            <div id="messages"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            <button type="submit" class="btn btn-default">Login</button>
        </div>
    </div>
    <div align="center">
        <a href="<?php echo site_url('Welcome') ?>"><button type="button" class="btn btn-primary" >Home</button></a>
    </div>
    
</form>

<script>
$(document).ready(function() {
    $('#contactForm').bootstrapValidator({
        container: '#messages',
        
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        	email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not valid'
                    }
                }
            },
            
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    }
                }
            }
            
            // title: {
            //     validators: {
            //         notEmpty: {
            //             message: 'The title is required and cannot be empty'
            //         },
            //         stringLength: {
            //             max: 100,
            //             message: 'The title must be less than 100 characters long'
            //         }
            //     }
            // },
            // content: {
            //     validators: {
            //         notEmpty: {
            //             message: 'The content is required and cannot be empty'
            //         },
            //         stringLength: {
            //             max: 500,
            //             message: 'The content must be less than 500 characters long'
            //         }
            //     }
            // }
        }
    });
});
</script>

</body>
</html>