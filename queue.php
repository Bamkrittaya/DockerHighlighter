<?php
$userid = $_POST['userid'];
$projectid = $_POST['projectid'];
$target_dir = "source/";
$target_file = $target_dir . basename($_FILES["srcfile"]["name"]);
move_uploaded_file($_FILES["srcfile"]["tmp_name"], $target_file);
header('Location: index.html');
?>
