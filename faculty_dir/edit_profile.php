<?php
session_start();

$name=$_SESSION["username"];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cs252";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

$sql_fac_details = 'select * from users where username = "'.$name.'";';
$fac_details = $conn->query($sql_fac_details);
if ($row = $fac_details->fetch_assoc()) 
{
	// $row = $fac_details->fetch_assoc()
	// echo "<br>";
	echo $row["name"];
}

$sql1='SELECT course_code FROM  course_instructor where instructor_username = "'.$name.'" ;';
$result1 = $conn->query($sql1);
$num_courses = $result1->num_rows;


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Instructor's Landing Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="index.html">CS252::Course Management System</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>Messager 1</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>Messager 3</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="Inbox.html">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $row["name"]; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="Inbox.html"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
					<li>
                        <a href="create_course.php"><i class="fa fa-fw fa-dashboard"></i> Create Course</a>
                    </li>                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Courses <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                        	<?php 
                        	for ($i=0; $i < $num_courses; $i++) : 
                        		if ($row_course = $result1->fetch_assoc()) :
                        	?>
	                            <li>
	                                <a href="course_manage.php"> <?php echo $row_course["course_code"]; ?> </a>
	                            </li>
                        	<?php 
                        		endif;
                        	endfor;
                        	?>
                        </ul>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Calender update</a>
                    </li>
                    <!--<li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Upload Marks</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Check Assignment</a>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Upload Assignment Question</a>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Make announcement</a>
                    </li>-->
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Change Password</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Username: <?php echo $name; ?><br/>
                        </h1> 
                    </div>
					<div style="padding-left:70px">
						<div style="float:left">
							<?php
							$profile_pic = '../images/'.$name.'.jpg';
							// $profile_pic = '../images/lnikhilp.jpg';
							if (file_exists($profile_pic)) :
							?>
								<img style="height:200px" class="img-thumbnail" src="<?php echo $profile_pic ?>" alt="" height="10" width="200">
							<?php
							else :
							?>
	                			<img class="img-thumbnail" src="http://placehold.it/200x200" alt="">
	                		<?php 
	                		endif;
	                		?>
						</div>
						<div style="padding-left:42px; float:left"><h3>
							<table style="border-spacing: 15px">
                            <form action="updating_database_edit_profile.php" method="POST">
                            <tr>
                                <th style="height:40px; width:200px">Name:</th>
                                <td style="height:40px; width:200px"><input type="text" name="editName" value="<?php echo $row["name"]; ?>"></td>
                            </tr>
							<tr>
								<th style="height:40px">email:</th>
    							<td><input type="text" name="editEmail" value="<?php echo $row["email"]; ?>"></td>
							</tr>
							<tr>
								<th style="height:40px">Roll No.:</th>
    							<td><input type="text" name="editRoll" value="<?php echo $row["roll"]; ?>"></td>
							</tr>
							<tr>
								<th style="height:40px">Mobile No.:</th>
								<td><input type="text" name="editPhone" value="<?php echo $row["phone"]; ?>"></td>
							</tr>
                            <tr>
                                <th></th>
                                <td><input type="submit" value="Update"></td>
                            </tr>
                            </form>
							</table>
						</h3></div>
					</div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>