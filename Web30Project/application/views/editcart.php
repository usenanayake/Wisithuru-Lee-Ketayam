<?php echo validation_errors(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shopping Cart</title>

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


<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Welcome <?php echo $this->session->userdata('fname') ?> </a>
        </div>

        <ul class="nav navbar-nav navbar-right">

            <li><a href="<?php echo base_url().'index.php/Login/LogoutUser/'; ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
    </div>
</nav>


<form action="<?php echo base_url().'index.php/product/update'; ?>" method="post" >

    <?php foreach ($user as $row){ ?>
    <div class="table-responsive" style="margin-top: 5%;">
        <table class="table">


                <tr>
                    <td>name</td>
                    <td><input type="text" name="name" value="<?php echo $row->name; ?>" ></td>
                </tr>

                <tr>
                    <td>price</td>
                    <td><input type="text" name="price" value="<?php echo $row->price; ?>" ></td>
                </tr>

                <tr>
                    <td>Qty</td>
                    <td><input type="text" name="qty" value="<?php echo $row->quantity; ?>" ></td>
                </tr>

                <tr>
                    <td>Description</td>
                    <td><input type="text" name="des" value="<?php echo $row->description; ?>" ></td>
                </tr>

            <?php } ?>

            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>


        </table>

</form>
</div>
</body>
</html>