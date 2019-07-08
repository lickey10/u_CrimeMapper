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

	$id             = mysqli_real_escape_string( $connection, $_POST[ 'id'            ] );
	$site_id        = mysqli_real_escape_string( $connection, $_POST[ 'site_id'       ] );
	$date_created   = mysqli_real_escape_string( $connection, $_POST[ 'date_created'  ] );
	$date_found     = mysqli_real_escape_string( $connection, $_POST[ 'date_found'    ] );
	$name 			= mysqli_real_escape_string( $connection, $_POST[ 'name'          ] );
	$dsc            = mysqli_real_escape_string( $connection, $_POST[ 'dsc'           ] );
	$lat   			= mysqli_real_escape_string( $connection, $_POST[ 'lat'           ] );
	$lng           	= mysqli_real_escape_string( $connection, $_POST[ 'lng'           ] );
	$alt           	= mysqli_real_escape_string( $connection, $_POST[ 'alt'           ] );
	$pic           	= mysqli_real_escape_string( $connection, $_POST[ 'pic'           ] );

	//****************************************************************************
	//
	//****************************************************************************

	$query  = "INSERT INTO items (id, site_id, date_created, date_found, name, dsc, lat, lng, alt, pic) VALUES (" 
	          . "'" . $id           . "',"
			  . "'" . $site_id      . "',"
	          . "'" . $date_created . "',"
	          . "'" . $date_found 	. "',"
			  . "'" . $name 		. "',"
			  . "'" . $dsc 			. "',"
			  . "'" . $lat 			. "',"
			  . "'" . $lng 			. "',"
			  . "'" . $alt 			. "',"
			  . "'" . $pic 			. "')";
			  
			  
	$result = mysqli_query( $connection, $query );
	
	if( $result === false )
	{
		echo( "{ \"error\":\"" . mysqli_error() . "\" }" );
		
		exit( 1 );
	}

	exit( 0 );
?>