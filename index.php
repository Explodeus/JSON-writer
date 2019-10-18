<?php
	$_POST = json_decode(file_get_contents('php://input'), true);

	$json = $_POST['json'];

   	/* sanity check */
   	if (json_decode($json) != null)
   	{
     	$file = fopen('new_map_data.json','w+');
     	fwrite($file, $json);
     	fclose($file);
   	} else {
		echo "Error Query! \n".$_POST;
	}

?>