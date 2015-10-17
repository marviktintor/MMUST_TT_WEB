<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Insert title here</title>
		<link rel="stylesheet" type="text/css" href="styles.css"/>
		
	</head>
	
	<body>
		<div id="template_container">
			<div id="template_head">
				<p>MMUST STUDENT TIMETABLE</p>
			</div>
			
			<div id="navigation">
				<button id="btn_classes">Classes</button>
				<button id="btn_assessments">Assessments</button>
				<button id="btn_courses">Courses</button>
				<button id="btn_lecturers">Lecturers</button>
			</div>
			
			<div id="notifications">
				<p id="p_notifications"> Notifications </p>
				<div id="wrapper_notifications"> 
					<?php include 'read_notifications.php';?>
				</div>
				
			</div>
		</div>
	</body>
</html>