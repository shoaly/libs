<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination
$targetFolder = '/uploads'; // Relative to the root

if (!empty($_FILES)) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
//	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
	//上传文件直接放在uploadify.php同级目录下面
	$targetPath=dirname(__file__);
	$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
	
	// Validate the file type
	$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	
	if (in_array($fileParts['extension'],$fileTypes)) {
		move_uploaded_file($tempFile,$targetFile);
		print_r($targetFile);
	} else {
		echo 'Invalid file type.';
	}
}
?>