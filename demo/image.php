<?php

header("Content-type: image/jpg");
echo  file_get_contents("demo.jpg");

?>
<img src="image.php?image=004">