<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Final Grade</title>
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
		
		<?php
	
				//function that returns a calculated percentage. Requires two parameters: points earned amd Maximum points possible. 
				function calcPercentage($earned,$maxEarned){
					$percentageAverage = ($earned / $maxEarned) * 100;
					return $percentageAverage;
				}
				//function that returns a calculated weighted percentage. Requires two parameters: calculated percentage and assigned weight.
				function calcWeightedPercentage($calculatedPercentage,$assignedWeight){
					$weightedPercent = ($calculatedPercentage / 100) * $assignedWeight;
					return $weightedPercent;
				}
				
				//Calculations for Participation.
				$earnedParticipation = $_POST['earnedParticipation'];
				$maxParticipation = $_POST['maxParticipation'];
				define("WEIGHT_PARTICIPATION",$_POST['weightParticipation']);
				$participationPercentage = calcPercentage($earnedParticipation,$maxParticipation);
				$weightedParticipation = calcWeightedPercentage($participationPercentage,WEIGHT_PARTICIPATION);
				echo "<p>You earned a $participationPercentage% for Participation, with a weighted value of $weightedParticipation%</p>";
				
				//calculations for Quizzes
				$earnedQuiz = $_POST['earnedQuiz'];
				$maxQuiz = $_POST['maxQuiz'];
				define("WEIGHT_QUIZ",$_POST['weightQuiz']);
				$quizPercentage = calcPercentage($earnedQuiz,$maxQuiz);
				$weightedQuiz = calcWeightedPercentage($quizPercentage,WEIGHT_QUIZ);
				echo "<p>You earned a $quizPercentage% for the Quizzes, with a weighted value of $weightedQuiz%</p>";
				
				//calculations for Lab Assignments
				$earnedLab = $_POST['earnedLab'];
				$maxLab = $_POST['maxLab'];
				define("WEIGHT_LAB",$_POST['weightLab']);
				$labPercentage = calcPercentage($earnedLab,$maxLab);
				$weightedLab = calcWeightedPercentage($labPercentage,WEIGHT_LAB);
				echo "<p>You earned a $labPercentage% for the Lab Assignments, with a weighted value of $weightedLab%</p>";
				
				//calculations for Practica
				$earnedPracticum = $_POST['earnedPracticum'];
				$maxPracticum = $_POST['maxPracticum'];
				define("WEIGHT_PRACTICUM",$_POST['weightPracticum']);
				$practicaPercentage = calcPercentage($earnedPracticum,$maxPracticum);
				$weightedPractica = calcWeightedPercentage($practicaPercentage,WEIGHT_PRACTICUM);
				echo "<p>You earned a $practicaPercentage% for the Practica, with a weighted value of $weightedPractica%</p>";
				
				//determining Final Grade
				$finalGrade = $weightedParticipation + $weightedQuiz + $weightedLab + $weightedPractica;
				(($finalGrade >= 97) ? $letterGrade = "A+" : 
					(($finalGrade >= 93) ? $letterGrade = "A" : 
						(($finalGrade >= 90) ? $letterGrade = "A-" :
							(($finalGrade >= 87) ? $letterGrade = "B+" :
								(($finalGrade >= 83) ? $letterGrade = "B" :
									(($finalGrade >= 80) ? $letterGrade = "B-" : 
										(($finalGrade >= 77) ? $letterGrade = "C+" : 
											(($finalGrade >= 73) ? $letterGrade = "C" : 
												(($finalGrade >= 70) ? $letterGrade = "C-" : 
													(($finalGrade >= 60) ? $letterGrade = "D" : 
														(($finalGrade >= 0) ? $letterGrade = "F" : $letterGrade = "No more letters")))))))))));
				
				echo "<b>Your Final grade is a $finalGrade%, which is a $letterGrade.</b>";
		?>
				
	</div>
	
	
	<div id="footer">
		<?php 
			include_once ROOT. 'footer.inc';
		?>
	</div>

</div>

</body>
</html>