<?php


$output_dir = "../../knowledgebase/".$_REQUEST['imo']."/".$_REQUEST['order']."/".$_REQUEST['folder'];
echo $output_dir;



if( isset( $_FILES["file"] ) ) {

	
	if ( $_FILES["file"]["error"] > 0 ) {
	
		echo "Error: " . $_FILES["file"]["error"] . "";
	
	} else {
	
		move_uploaded_file( $_FILES["file"]["tmp_name"], $output_dir."/".$_FILES["file"]["name"] );
		
		echo "Uploaded File : ".$_FILES["file"]["name"];
	}
}

?>
