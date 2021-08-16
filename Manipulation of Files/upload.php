<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload">
	<button type="submit">Send</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST")
{
	$file = $_FILES["fileUpload"];
	if($file["error"]){
		throw new Exception("Erro: ".$file["error"]);
	}

	$dirUploads = "uploads";
	if(!is_dir($dirUploads))
	{
		mkdir($dirUploads);
	}

	if(move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"]))
	{
		echo "Upload realizado com sucesso!";
		foreach(scandir($dirUploads) as $uploads)
		{
			if(!in_array($uploads, array(".", "..")))
			{
				$filename = "uploads".DIRECTORY_SEPARATOR.$uploads;

				$upl = pathinfo($filename);

				if($upl["extension"] === "jpg" || $upl["extension"] === "png")
				{
					$images = "images";
					if(!is_dir($images)){
						mkdir($images);
					}
					rename($dirUploads.DIRECTORY_SEPARATOR.$file["name"], $images.DIRECTORY_SEPARATOR.$file["name"]);

				}else if($upl["extension"] === "mp4")
				{
					$videos = "videos";
					if(!is_dir($videos)){
						mkdir($videos);
					}
					rename($dirUploads.DIRECTORY_SEPARATOR.$file["name"], $videos.DIRECTORY_SEPARATOR.$file["name"]);

				}else if($upl["extension"] === "mp3")
				{
					$music = "music";
					if(!is_dir($music)){
						mkdir($music);
					}
					rename($dirUploads.DIRECTORY_SEPARATOR.$file["name"], $music.DIRECTORY_SEPARATOR.$file["name"]);
				}
			}
		}
	}else
	{
		echo "Não foi possível realizar o upload!";
	}
}
?>