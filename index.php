<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>lab 1</title>
	<link rel="stylesheet" type="text/css" href="website.css"/>
	
</head>
<body>
<div id="container">
	<div id="header">
	<?php 
			define(ROOT, '../');
			include_once ROOT. 'header.php';
		?>

	</div>

	<div id="labspractica">
	
		<?php 
			include_once ROOT. 'menu.inc';
		?>
	</div>
	
	<div id="labcontent">
		
		<form action="finalgrade.php" method="post">
			<h3>Participation</h3>
			Earned: <input type="text" name="earnedParticipation" />
			Max: <input type="text" name="maxParticipation" />
			Weight (percentage): <input type="text" name="weightParticipation" />
			<h3>Quizzes</h3>
			Earned: <input type="text" name="earnedQuiz" />
			Max: <input type="text" name="maxQuiz" />
			Weight (percentage): <input type="text" name="weightQuiz" />
			<h3>Lab Assignments</h3>
			Earned: <input type="text" name="earnedLab" />
			Max: <input type="text" name="maxLab" />
			Weight (percentage): <input type="text" name="weightLab" />
			<h3>Practica</h3>
			Earned: <input type="text" name="earnedPracticum" />
			Max: <input type="text" name="maxPracticum" />
			Weight (percentage): <input type="text" name="weightPracticum" />
			<br /><br />
			<input type="submit" />
		</form>
		
	</div>
	
	
	
	
	<div id="footer">
		<?php 
			include_once ROOT. 'footer.inc';
		?>
	</div>

</div>

</body>
</html>