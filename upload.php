<?php

$uploaddir = '/img/works/';
$file = $uploaddir . basename($_FILES['file']['name']); 
$_SESSION['filename'] = basename($_FILES['file']['name']);
if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {echo "success";}
 else {echo "error";}