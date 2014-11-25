<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Moodle</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
    .bs-example{
      margin: 8px;
    }
    .list-group-item{
    	width: 850px  !important;
    	background-color: #ececec !important;
    }
    
</style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span  class="navbar-brand" >Course Managment System</span>
				
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              

                <li>
                    
                    <div class="bs-example">

                        <form action='auth.php' method='POST' class="form-inline">
                            <div class="form-group">

                                <label class="sr-only" >Username</label>

                                <input type="text" class="form-control" id="inputusername" name="username" placeholder="Username">

                            </div>

                            <div class="form-group">

                                <label class="sr-only" for="inputPassword">Password</label>

                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">

                            </div>

                            

                            <button type="submit" class="btn btn-primary">Login</button>

                        </form>
                    </div>


                </li>

               
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           
            <!-- /.navbar-collapse -->
        </nav>

    </div>
    <!-- /#wrapper -->    

                <!-- Page Heading -->
               


   

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

			
				
					<!--<div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Course Management System</h3>
                            </div>
                            <div class="panel-body">
                          
								
								<form action='auth.php' method='POST' >
                            <div class="form-group">
								<label class="sr-only" >Username</label>

                                <input type="text" class="form-control" id="inputusername" name="username" placeholder="Username">

                            </div>

                            <div class="form-group">

                                <label class="sr-only" for="inputPassword">Password</label>

                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">

                            </div>
							<div>
                            <a href="forgot_password.html">Forgot Password</a>
							</div>
                            <button type="submit" class="btn btn-primary">Login</button>

                        </form>
								
								
                               
                            </div>
                        </div>
                    </div>
					-->
					<br>
					<br>
					
					<div class="col-lg-4">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title">Course Management</h3>
                            </div>
                            <div class="panel-body">
                              
								
								<form action='auth.php' method='POST' >
                            <div class="form-group">
								<label class="sr-only" >Username</label>

                                <input type="text" class="form-control" id="inputusername" name="username" placeholder="Username">

                            </div>

                            <div class="form-group">

                                <label class="sr-only" for="inputPassword">Password</label>

                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">

                            </div>
							<a href="register.php">Sign Up!</a>
							<div class="text-right">
                            <a href="forgot_password.html">Forgot Password?</a>
							</div>
                            <button type="submit" class="btn btn-primary">Log In</button>

                        </form>
								
								
                            </div>
                        </div>
                    </div>
					
					
</body>

</html>


