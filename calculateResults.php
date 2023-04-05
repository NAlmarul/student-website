<!DOCTYPE html>

<!-- Process information sent from form.html. -->


<html>

<head>
   <meta charset="utf-8">
   <title>Student result</title>
   <link rel="stylesheet" type="text/css" href="theStyle.css">
   </style>
</head>

<body>
<div class="box">


<?php


// Get Values

$StName = $_POST["StName"];
$SuName = $_POST["SuName"];
$SGrade = $_POST["SGrade"];
$PGrade = $_POST["PGrade"];


?>

<!-- Display the student name and subject name -->

<p><label>Student result For : <?php print($StName); ?></label></p>
<br>
<p><label>Subject Name : <?php print($SuName); ?></label></p>
<br>
<!-- Calculate  and display the values -->

<?php

if($SGrade < $PGrade){
   print("<p class = 'failed'><label>Result : Failed</label></p>");
}
else
print("<p class = 'passed'><label>Result : Failed</label></p>");
?>

   </div>

</body>

</html>