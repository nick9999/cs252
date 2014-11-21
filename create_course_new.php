<?php
	session_start();
	$instructor_name=$_POST['instructor_name'];
	$instructor_username=$_POST['instructor_username'];
	$instructor_email=$_POST['instructor_email'];
	$instructor_homepage=$_POST['instructor_homepage'];

	echo "<script>alert('Inside create_course_new.php');</script>";

	$course_name=$_POST['course_name'];
	$course_code=$_POST['course_code'];

	$no_of_ta=$_POST['no_of_ta'];

	$quiz_weightage=$_POST['quiz_weightage'];
	$quiz_number=$_POST['quiz_number'];
	$assignment_weightage=$_POST['assignment_weightage'];
	$assignment_number=$_POST['assignment_number'];
	$lab_weightage=$_POST['lab_weightage'];
	$lab_number=$_POST['lab_number'];

	$end_sem_weightage=$_POST['end_sem_weightage'];
	$mid_sem_weightage=$_POST['mid_sem_weightage'];
	$end_sem_date=$_POST['end_sem_date'];
	$mid_sem_date=$_POST['mid_sem_date'];

	$json_schedule=$_POST['json_schedule'];
	$if_lecture=$_POST['if_lecture'];

if(empty($instructor_name)||empty($instructor_username)||empty($instructor_email)||empty($instructor_homepage))
{
	echo "<script>alert('Name, username, email or homepage field cannot be left empty!!');</script>";
		header( "refresh:4; url=create_course_new.php" );
}
else if(empty($course_name)||empty($course_code))
{
	echo "<script>alert('Course name and Course Code cannot be left empty!!');</script>";
		header( "refresh:4; url=create_course_new.php" );
}
else if(empty($no_of_ta)||empty($quiz_number)||empty($quiz_weightage)||empty($assignment_number)||empty($assignment_weightage)||empty($lab_number)||empty($lab_weightage))
{
	echo "<script>alert('No of TA, Quiz, Assignment, Lab cannot be left empty!!');</script>";
		header( "refresh:4; url=create_course_new.php" );
}
else
{
	echo "<script>alert('Inside Else!!');</script>";	
	$temp_instructor_name=strip_tags(stripslashes($instructor_name));
	$check_instructor_name = ($temp_instructor_name==$instructor_name);
	$temp_instructor_username=strip_tags(stripslashes($instructor_username));
	$check_instructor_username = ($temp_instructor_username==$instructor_username);
	$temp_instructor_email=strip_tags(stripslashes($instructor_email));
	$check_instructor_email = ($temp_instructor_email==$instructor_email);
	$temp_instructor_homepage=strip_tags(stripslashes($instructor_homepage));
	$check_instructor_homepage = ($temp_instructor_homepage==$instructor_homepage);

	$temp_course_name=strip_tags(stripslashes($course_name));
	$check_course_name = ($temp_course_name==$course_name);
	$temp_course_code=strip_tags(stripslashes($course_code));
	$check_course_code = ($temp_course_code==$course_code);

	$temp_no_of_ta=strip_tags(stripslashes($no_of_ta));
	$check_no_of_ta = ($temp_no_of_ta==$no_of_ta);

	$temp_quiz_weightage=strip_tags(stripslashes($quiz_weightage));
	$check_quiz_weightage = ($temp_quiz_weightage==$quiz_weightage);
	$temp_quiz_number=strip_tags(stripslashes($quiz_number));
	$check_quiz_number = ($temp_quiz_number==$quiz_number);
	$temp_assignment_weightage=strip_tags(stripslashes($assignment_weightage));
	$check_assignment_weightage = ($temp_assignment_weightage==$assignment_weightage);
	$temp_assignment_number=strip_tags(stripslashes($assignment_number));
	$check_assignment_number = ($temp_assignment_number==$assignment_number);
	$temp_lab_weightage=strip_tags(stripslashes($lab_weightage));
	$check_lab_weightage = ($temp_lab_weightage==$lab_weightage);
	$temp_lab_number=strip_tags(stripslashes($lab_number));
	$check_lab_number = ($temp_lab_number==$lab_number);

	$temp_end_sem_weightage=strip_tags(stripslashes($end_sem_weightage));
	$check_end_sem_weightage = ($temp_end_sem_weightage==$end_sem_weightage);
	$temp_mid_sem_weightage=strip_tags(stripslashes($mid_sem_weightage));
	$check_mid_sem_weightage = ($temp_mid_sem_weightage==$mid_sem_weightage);
	$temp_end_sem_date=strip_tags(stripslashes($end_sem_date));
	$check_end_sem_date = ($temp_end_sem_date==$end_sem_date);
	$temp_mid_sem_date=strip_tags(stripslashes($mid_sem_date));
	$check_mid_sem_date = ($temp_mid_sem_date==$mid_sem_date);

	$temp_json_schedule=strip_tags(stripslashes($json_schedule));
	$check_json_schedule = ($temp_json_schedule==$json_schedule);
	$temp_if_lecture=strip_tags(stripslashes($if_lecture));
	$check_if_lecture = ($temp_if_lecture==$if_lecture);

	$check_email = filter_var($email,FILTER_VALIDATE_EMAIL);
	if(!$check_instructor_name||!$check_instructor_username||!$check_instructor_homepage||
		!$check_instructor_email||!$check_course_name||!$check_course_code||!$check_no_of_ta||
		!$check_quiz_number||!$check_quiz_weightage||!$check_assignment_number||!$check_assignment_weightage
		||!$check_lab_number||!$check_lab_weightage||!$check_mid_sem_date||!$check_mid_sem_weightage||
		!$check_end_sem_date||!$check_end_sem_weightage||!$check_json_schedule||!$check_if_lecture)
	{
		echo "<script>alert('Fields cannot contain \,< or >!!');</script>";
	}
	else
	{
		include_once 'connect-db.php';

// Create New Table of Course Lectures
		$sql = $mysqli->prepare("CREATE TABLE IF NOT EXISTS ".$course_code."_lecture (
			`lecture_name` varchar(300) NOT NULL, 
			`lecture_link` varchar(400) NOT NULL, 
			PRIMARY KEY (`lecture_name`)
			) ENGINE=InnoDB DEFAULT CHARSET=latin1;");

		if($sql->execute())
			echo "<script>alert(\"Course Table Created\")</script>";
		else
			echo "<script>alert(\"Failure. Try registering again\")</script>";

// Create New Table of Course Weightage
		$sql2 = $mysqli->prepare("CREATE TABLE IF NOT EXISTS ".$course_code."_weightage (
						  `test_name` varchar(300) NOT NULL,
						  `test_weightage` int(100) NOT NULL,
						  `test_upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
						  `test_deadline` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
						  `test_if_upload` int(100) NOT NULL,
						  `test_link` varchar(400) NOT NULL,
						  PRIMARY KEY (`test_name`)
						) ENGINE=InnoDB DEFAULT CHARSET=latin1");

		if($sql2->execute())
			echo "<script>alert(\"Weightage Table Created\")</script>";
		else
			echo "<script>alert(\"Failure. Try registering again\")</script>";


// Create New Table of Course Weightage
		$sql3 = $mysqli->prepare("CREATE TABLE IF NOT EXISTS ".$course_code." (
			  `student_name` varchar(255) NOT NULL,
			  `student_username` varchar(255) NOT NULL,
			  `group_no` varchar(10) NOT NULL,
			  `mid_sem_marks` int(100) NOT NULL DEFAULT '0',
			  `end_sem_marks` int(100) NOT NULL DEFAULT '0',
			  `grade` varchar(2) DEFAULT '0',
			  `max_marks` int(10) DEFAULT '100',
			  `marks_obtained` int(10) DEFAULT '0',
			  PRIMARY KEY (`student_username`)
			) ENGINE=InnoDB DEFAULT CHARSET=latin1");

		if($sql3->execute())
			echo "<script>alert(\"Course Table Created\")</script>";
		else
			echo "<script>alert(\"Failure. Try registering again\")</script>";

		$sql4 = $mysqli->prepare("INSERT INTO course_instructor (
				instructor_name, instructor_username, instructor_email, instructor_homepage, course_name,
				course_code, no_of_ta, quiz_weightage, quiz_number, assignment_weightage, assignment_number,
				lab_weightage, lab_number, mid_sem_weightage, mid_sem_date, end_sem_weightage, end_sem_date,
				json_schedule, if_lecture) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		if ($sql4->bind_param('ssssssiiiiiiiisisss', $instructor_name, $instructor_username, 
			$instructor_email, $instructor_homepage, $course_name, $course_code, $no_of_ta, 
			$quiz_weightage, $quiz_number, $assignment_weightage, $assignment_number,
			$lab_weightage, $lab_number, $mid_sem_weightage, $mid_sem_date, $end_sem_weightage, 
			$end_sem_date, $json_schedule, $if_lecture))
			echo "<script>alert(\"Bind Parameter Done\")</script>";
		else
			echo "<script>alert(\"Bind Parameter Not Done\")</script>";

		if($sql4->execute())
			echo "<script>alert(\"Successfully Registered\")</script>";
		else
			echo "<script>alert(\"Failure. Try registering again\")</script>";
	}
	if ($if_lecture == "yes")
	{
		if (chdir("/var/www/cs252/uploads/"))
			echo "<script>alert(\"CHDIR Done\")</script>";
		else
			echo "<script>alert(\"CHDIR Fail\")</script>";

		if(mkdir("/var/www/cs252/uploads".$course_code,0777))
			echo "<script>alert(\"MKDIR Done\")</script>";
		else
			echo "<script>alert(\"MKDIR Fail\")</script>";
	}
}
?>