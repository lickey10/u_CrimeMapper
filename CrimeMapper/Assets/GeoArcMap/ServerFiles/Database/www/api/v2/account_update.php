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

	$id             = mysqli_real_escape_string( $connection, $_POST[ 'id'             ] );
	$login_username = mysqli_real_escape_string( $connection, $_POST[ 'login_username' ] );
	$login_password = mysqli_real_escape_string( $connection, $_POST[ 'login_password' ] );
	$name           = mysqli_real_escape_string( $connection, $_POST[ 'name'           ] );
	$organization   = mysqli_real_escape_string( $connection, $_POST[ 'organization'   ] );
	$rank           = mysqli_real_escape_string( $connection, $_POST[ 'rank'           ] );
	$type           = mysqli_real_escape_string( $connection, $_POST[ 'type'           ] );

	//****************************************************************************
	//
	//****************************************************************************
	
	$query  = "UPDATE `employees` SET "
	          . "`login_username` = '" . $login_username . "',"
	          . "`login_password` = '" . $login_password . "',"
	          . "`name` = '"           . $name           . "',"
	          . "`organization` = '"   . $organization   . "',"
	          . "`rank` = '"           . $rank           . "',"
	          . "`type` = '"           . $type           . "'"
              . " WHERE `employees`.`id` = " . $id;
	
	$result = mysqli_query( $connection, $query );
	
	if( $result === false )
	{
		echo( "{ \"error\":\"" . mysqli_error() . "\" }" );
		
		exit( 1 );
	}
	
	exit( 0 );
?>