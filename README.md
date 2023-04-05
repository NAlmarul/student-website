# student-website

The provided file [index.html] will contain 2 links [one with students.html as “Show Students “and one with form.html as “Calculate Students Results”] 

*Complete the provided file [theStyle.css] by adding the following CSS rules:*

1.	the body should 
-	have a background image (use background.jpg that is provided in the images folder)
-	use Tahoma font-family
2.	define a CSS class named “box” with the properties:
-	25 pixels border radius
-	white background color
-	any proper width and height
-	45 pixels padding
-	Center justify-content.

Consider the file [results.json] that contains a list of students name and results . For each student the file specifies the subjects with the grades. 
You are expected to complete the file [students.html] by using Ajax to retrieve the information from [results.json] as a JSON array. When the user open the file named [students.html] displayed as a table showing below. The table should have the following CSS properties that you should add to [theStyle.css]
•	The table should have full width (100%) with centred-text.
•	Each cell in header row should be bordered with 1px red solid border.

Consider the provided file: [form.html] 

Complete [form.html] by following the requirements:
.	Add a form student name and subject name of type text.
.	Add a student grade and passing grade of type number.
Make sure that min value for student grade allowed is 0 and max value allowed is 100. Also, make sure that min value for passing grade allowed is 40 and max value allowed is 100.
.	Add a submit button that submits the form data to calculateResults.php
.	Make sure you add the labels as shown in the given image

Complete [calculateResults.php] by following the requirements:
The calculate model predicts the efforts of passing and failing the subject. So, the php will print student name, subject name, subject grade and passing grade. 
.	Print Failed in red color if the student Failed
.	Print Passed in green color if the student Passed
