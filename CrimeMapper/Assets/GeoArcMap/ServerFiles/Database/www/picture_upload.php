<?php
	//****************************************************************************
	//
	//****************************************************************************

	$cancel    = 0;
	
	$dest_dir  = "uploads/pictures/";
	
	$dest_file = $dest_dir . basename( $_FILES[ "fileToUpload" ][ "name" ] );
	
	$file_ext  = pathinfo( $dest_file, PATHINFO_EXTENSION );

	//****************************************************************************
	//
	//****************************************************************************
	
	if( isset( $_POST[ "submit" ] ) ) 
	{
		$check = getimagesize( $_FILES[ "fileToUpload" ][ "tmp_name" ] );
		
		if( $check == false ) 
		{
			echo "File is not an image.";
			
			$cancel = 1;
		}
	}
	
	//****************************************************************************
	//
	//****************************************************************************
	
	if( file_exists( $dest_file ) ) 
	{
		echo "Sorry, file already exists.";
		
		$cancel = 1;
	}
	
	//****************************************************************************
	//
	//****************************************************************************
	
	if( $_FILES[ "fileToUpload" ][ "size" ] > ( 500 * 1024 ) ) 
	{
		echo "Files size must not exceed 500KB";
		
		$cancel = 1;
	}
	
	//****************************************************************************
	//
	//****************************************************************************
	
	if( ( $file_ext != "jpg" ) && ( $file_ext != "png" ) && ( $file_ext != "jpeg" ) ) 
	{
		echo "Only JPG, JPEG and PNG files are allowed.";
		
		$cancel = 1;
	}
	
	//****************************************************************************
	//
	//****************************************************************************
	
	if( $cancel == 1 ) 
	{
		echo "Sorry, your file was not uploaded.";
	} 
	else 
	{
		if( move_uploaded_file( $_FILES[ "fileToUpload" ][ "tmp_name" ], $dest_file ) ) 
		{
			echo "The file ". basename( $_FILES[ "fileToUpload" ][ "name" ] ). " has been uploaded.";
			
		} else 
		{
			echo "Sorry, there was an error uploading your file.";
		}
	}
?>
