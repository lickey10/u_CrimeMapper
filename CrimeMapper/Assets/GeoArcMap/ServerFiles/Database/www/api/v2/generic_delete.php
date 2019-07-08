<?php
	//****************************************************************************
	//
	// DB connection params specified in db_connection.php -> php.ini
	//
	//****************************************************************************
	
	$NEWLINE   = "<br>";
	$ENTRY_SEP = ";";
	$FIELD_SEP = "|";
	
	//****************************************************************************
	//
	//****************************************************************************
	
	$connection = new mysqli( DB_ADR, DB_USERNAME, DB_PASSWORD, DB_NAME );
	
	if( $connection == null )
	{
		echo( "{ \"error\":\"" . mysqli_connect_error() . "\" }" );
		
		exit( 1 );
	}
	else
	{
		mysqli_set_charset( $connection, "utf8" );
	}

	//****************************************************************************
	//
	//****************************************************************************

	$id    = mysqli_real_escape_string( $connection, $_POST[ 'id'    ] );
	$table = mysqli_real_escape_string( $connection, $_POST[ 'table' ] );

	//****************************************************************************
	//
	//****************************************************************************
	
	$query  = "DELETE FROM `" . DB_NAME . "`.`" . $table . "` WHERE `" . $table . "`.`id` = " . $id;
	
	$result = mysqli_query( $connection, $query );
	
	if( $result === false )
	{
		echo( "{ \"error\":\"" . mysqli_error() . "\" }" );
		
		exit( 1 );
	}
	
	exit( 0 );
?>