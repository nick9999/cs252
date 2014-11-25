<!DOCTYPE html>
<form action ='create_course_new.php' method='POST'>
	Course 	Name:			<input type='text' name='course_name' 			required><br>
	Course Code:			<input type='text' name='course_code'	 		required><br>

	Instructor Name:		<input type='text' name='instructor_name' 		required><br>
	Instructor Username:	<input type='text' name='instructor_username' 	required><br>
	Instructor Email:		<input type='email' name='instructor_email'	 	required><br>
	Instructor Homepage:	<input type='text' name='instructor_homepage' 	required><br>

	Number Of TA:			<input type='number' name='no_of_ta' 			required><br>

	Quiz Number:			<input type='number' name='quiz_number' 		required><br>
	Quiz Weightage:			<input type='number' name='quiz_weightage' 		required><br>
	Assignment Number:		<input type='number' name='assignment_number' 	required><br>
	Assignment Weightage:	<input type='number' name='assignment_weightage'required><br>
	Lab Number:				<input type='number' name='lab_number' 			required><br>
	Lab Weightage:			<input type='number' name='lab_weightage' 		required><br>

	Mid Sem Date : 			<input type='date' name='mid_sem_date' 		required><br>
	Mid Sem Weightage:		<input type='number' name='mid_sem_weightage' 	required><br>
	End Sem Date : 			<input type='date' name='end_sem_date' 		required><br>
	End Sem Weightage:		<input type='number' name='end_sem_weightage' 	required><br>

	Schedule:				<input type='text' name='schedule' required><br>
	Lecture Slides Upload:
		<select name="if_lecture">
		<option value='yes'>	Yes	</option>
		<option value='no'>		No 	</option>
		</select>

<!-- 	<div id="create_assignment">
		<input type="button" value="Add Assignment" onclick="generate_assignment()"/>
	</div>
	<div id="create_assignment">
		<input type="button" value="Add Assignment" onclick="generate_assignment()"/>
	</div>
 -->
	<input type='submit' value='Submit'>
</form>
</html>
