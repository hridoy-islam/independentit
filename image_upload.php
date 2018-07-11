if (isset($_POST['save'])) {
		$path = 'assets/img/';
	$target = $path.$_FILES['picture']['name'];
	$name = $_FILES['picture']['tmp_name'];
	$filesize = $_FILES['picture']['size'];
	$filetype = pathinfo($target, PATHINFO_EXTENSION);
	

echo "<pre>";
	print_r($_FILES);

	$hello = getimagesize($name);
	echo "<pre>";
	print_r($hello);

	if ($hello) {
		if (file_exists($target)) {
			die('This file Already Exists');
		}
		else{
			if ($filesize > 5242880) {
				die('File Size is Large');
			}
			else{
				if ($filetype !='jpg' && $filetype !='png') {
					die('File Type Is Not Valid');
				}
				else{
					move_uploaded_file($name, $target);
					echo "Image Uploaded Successfully";
				}
			}
		}
	}
	else {
		echo "This uploaded File is not a Image";
	}
}


///

	session_start();
	
	$x = session_id();
	echo $x;
	echo "<br/>";

	$name = "kopa kopa kopakopakopakopakopakopa";

	

	
	session_destroy();

	$x = session_id();
	echo $x;
	echo "<br/>";
