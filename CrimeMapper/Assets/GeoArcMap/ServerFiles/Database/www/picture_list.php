<?php
	//****************************************************************************
	//
	//****************************************************************************

	if( $handle = opendir( 'uploads/pictures' ) ) 
	{
		while( false !== ( $entry = readdir( $handle ) ) ) 
		{
			if( ( $entry != "." ) && ( $entry != ".." ) ) 
			{
				echo "$entry,";
			}
		}
		
		closedir( $handle );
	}
?>
