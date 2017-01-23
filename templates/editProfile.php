<!DOCTYPE html>
<HTML>
	<HEAD>
	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Freelancer - Start Bootstrap Theme</title>

	    <!-- Bootstrap Core CSS -->
	    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Theme CSS -->
	    <link href="../bootstrap/css/freelancer.min.css" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	</HEAD>
	<BODY id="page-top" class="index">
		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="../index.php/home">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Edit</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <section id="portfolio">

        <div class="container">
        <h2>Upadate user profile</h2>
        <?php if(isset($error_message)){?>
            <div class="alert alert-danger"><?php echo $error_message;?></div>
        <?php } ?>
        <form name="myform" id="myfrom" method="post" action="" enctype="multipart/form-data">
            
        <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" class="form-control" id="fname" placeholder="First name" name="fname" value="<?php echo $profile['fname'];?>">
        </div>

        <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" id="lname" placeholder="Last name" name="lname" value="<?php echo $profile['lname'];?>">
        </div>

        <div class="form-group">
        <label for="lname">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $profile['email'];?>">
        </div>

        <div class="form-group">
        <label for="lname">Gender</label>
        <input type="radio" name="gender" value="male" 
        <?php if($profile['gender'] == 'male') echo 'checked';?>>Male
        <input type="radio" name="gender" value="female" <?php if($profile['gender'] == 'female') echo 'checked';?>>Female
        </div>

        <div class="form-group">
        <label for="lname">Address</label>
        <textarea name="address" class="form-control"><?php echo $profile['address'];?></textarea>
        </div>  

        <div class="form-group">
        <label for="lname">Existing Avatar:       </label>
        <img src="../uploads/<?php echo $profile['avatar'];?>" width="140px">
        </div>

        <div class="form-group">
        <label for="lname">Avatar</label>
        <input type="file" name="avatar">
        </div>

        <div class="form-group">
            <input type="submit" name="sumbit" value="Update" class="btn btn-primary">
           <!--  <input type="hidden" name="id" value="<?php echo $user['id'];?>"> -->
        </div>
        

        </div>
  </section>

	</BODY>
</HTML>