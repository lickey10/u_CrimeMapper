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

	$id             = mysqli_real_escape_string( $connection, $_POST[ 'id'           ] );
	$date_funded    = mysqli_real_escape_string( $connection, $_POST[ 'date_funded'  ] );
	$name 			= mysqli_real_escape_string( $connection, $_POST[ 'name'         ] );
	$dsc            = mysqli_real_escape_string( $connection, $_POST[ 'dsc'          ] );

	//****************************************************************************
	//
	//****************************************************************************
	
	$query  = "UPDATE `organizations` SET "
	          . "`date_funded` = '"	. $date_funded . "',"
	          . "`name` = '" 		. $name 	   . "',"
	          . "`dsc` = '"         . $desc        . "'"
              . " WHERE `items`.`id` = " . $id;
	
	$result = mysqli_query( $connection, $query );
	
	if( $result === false )
	{
		echo( "{ \"error\":\"" . mysqli_error() . "\" }" );
		
		exit( 1 );
	}
	
	exit( 0 );
?>