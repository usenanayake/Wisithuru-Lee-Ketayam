<?php

if(!($this->session->userdata('loggedin'))){
    redirect('Users/Login');
}

if($this->session->flashdata('wel')){

    echo "<h3>".$this->session->flashdata('wel')."</h3>";

}


?>



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


<div class="table-responsive" style="margin-top: 5%;">
    <table class="table">

        <thead>
        <tr>

            <td>name</td>
            <td>price</td>

            <td>Description</td>
            <td>Qty</td>
            <td>Add to cart</td>



        </tr>
        </thead>
        <?php
        foreach($resultone as $row){
            ?><tr>

            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->price; ?></td>

            <td><?php echo $row->description; ?></td>
            <td><input type="text" name="email" ></td>
            <td><button  type="submit" name="submit" style="btn btn-primary">Add</button></td>
            <!--
                padding:auto 50% auto 50%; background-color:#0b7df5; -->

            </tr>

            <?php

        }


        ?>


    </table>
</div>

<div class="table-responsive" style="margin-top: 5%;">
    <table class="table">

        <thead>
        <tr>
            <!-- <td>id</td> -->
            <td>name</td>
            <td>price</td>
            <td>Qty</td>
            <td>Description</td>
            <td>Delete</td>



        </tr>
        </thead>
        <?php
        foreach($result as $p){
            ?><tr>
            <!-- <td><?php echo $p->id; ?></td> -->
            <td><?php echo $p->name; ?></td>
            <td><?php echo $p->price; ?></td>
            <td><?php echo $p->quantity; ?></td>
            <td><?php echo $p->description; ?></td>
            <td><a href="<?php echo base_url().'index.php/product/delete/'.$p->id; ?>" >Delete</a>|<a href="<?php echo base_url().'index.php/product/edit/'.$p->id; ?>" >Edit</a> </td>

            </tr>

            <?php

        }


        ?>


    </table>
</div>
</body>
</html>