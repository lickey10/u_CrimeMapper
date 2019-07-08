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
	
	$query  = "SELECT id, date_created, name, organization, rank, type FROM employees";
	
	$result = mysqli_query( $connection, $query );
	
	if( $result === false )
	{
		echo( "{ \"error\":\"" . mysqli_error() . "\" }" );
		
		exit( 1 );
	}
	
	//****************************************************************************
	//
	//****************************************************************************
	
	echo  "[";
	
	if( mysqli_num_rows( $result ) > 0 )
	{
		$comma = false;
		
		while( $row = mysqli_fetch_assoc( $result ) )
		{
			if( $comma ) echo ",";
			
			echo json_encode( $row, JSON_UNESCAPED_UNICODE );
			
			$comma = true;
		}
	}
	
	echo  "]";
	
	exit( 0 );
?>