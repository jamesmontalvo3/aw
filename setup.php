<?php

require_once "PDO_Connection.php";
require_once "LocalSettings.php";


$sql = new PDO_Connection( $appConfig['database'] );
$sql->connect();


function get_valid_shows_sites() {
	global $sql;

	$sql_stmt = $sql->conn()->prepare(
		"SELECT 
			show_site.title, show_site.contact_name, show_site.phone_1, show_site.phone_2, 
			show_site.start_date, show_site.end_date, show_site.admission_cost,
			show_site.parking_cost, show_site.description, region.title
		 FROM show_site
		 ON show_site.region_id=region.id
		 LEFT JOIN region
		 WHERE region.display=1 AND show_site.display=1;"
	);
	$sql_stmt->execute(  ); // removed arg: array('path'=>$album_path)

	$out = array();
	while(

	return array("Show 1", "Show 2");
}


		$sql_stmt = $sql->conn()->prepare(
			"SELECT * FROM albums, WHERE path=:path;"
		);
		$sql_stmt->execute( array('path'=>$album_path) );

		if( $album = $sql_stmt->fetch(PDO::FETCH_OBJ) ) { 
			$this->path = $album_path;
			$this->name = $album->name;
			$this->description = $album->description;
		}
		else {
		    header('HTTP/1.0 404 Not Found');
			readfile("$IP/view/404.html");
			exit();
		}
		$this->path_parts = explode('/',$this->path);
