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
	$date_created   = mysqli_real_escape_string( $connection, $_POST[ 'date_created'   ] );
	$login_username = mysqli_real_escape_string( $connection, $_POST[ 'login_username' ] );
	$login_password = mysqli_real_escape_string( $connection, $_POST[ 'login_password' ] );
	$name           = mysqli_real_escape_string( $connection, $_POST[ 'name'           ] );
	$organization   = mysqli_real_escape_string( $connection, $_POST[ 'organization'   ] );
	$rank           = mysqli_real_escape_string( $connection, $_POST[ 'rank'           ] );
	$type           = mysqli_real_escape_string( $connection, $_POST[ 'type'           ] );

	//****************************************************************************
	//
	//****************************************************************************
	
	$query  = "INSERT INTO employees (id, date_created, login_username, login_password, name, organization, rank, type) VALUES (" 
	          . "'" . $id             . "'," 
	          . "'" . $date_created   . "'," 
	          . "'" . $login_username . "'," 
			  . "'" . $login_password . "'," 
			  . "'" . $name           . "'," 
			  . "'" . $organization   . "'," 
			  . "'" . $rank           . "'," 
			  . "'" . $type           . "')";
	
	$result = mysqli_query( $connection, $query );
	
	if( $result === false )
	{
		echo( "{ \"error\":\"" . mysqli_error() . "\" }" );
		
		exit( 1 );
	}

	exit( 0 );
?>