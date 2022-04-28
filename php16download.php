<?php
$uploaddir = 'img/';
$target_file = $uploaddir . basename($_FILES["userfile"]["name"]);
move_uploaded_file($_FILES["userfile"]['tmp_name'], $target_file );
