<!DOCTYPE html>
<html>
<head>
	<title>My First PHP Form</title>
	<meta charset="utf-8">
</head>
<body>
  <?php
    echo '<h1>The Job is ' . $_POST['title'] . '!</h1>';
    echo '<p>The Company name is ' . $_POST['company'],'</p>';
    echo '<p>The category is ' . $_POST['category'],'</p>';
    echo '<p>The location is ' . $_POST['location'],'</p>';
    echo '<p>The date posted is ' . $_POST['datePosted'],'</p>';
    echo '<p>The date ending is ' . $_POST['dateEnding'],'</p>';
    echo '<p>The Description is ' . $_POST['description'],'</p>';
    echo '<p>The Qualifications are ' . $_POST['qualifications'],'</p>';
         
    ?>
  </body>
  </html>
