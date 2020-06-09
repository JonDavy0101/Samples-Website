<?php

// List all Sample categories below in categories array. 
$categories = array("HTML", "CSS", "JAVASCRIPT", "PHP", "MYSQL", "BOOTSTRAP", "MARKDOWN");
$arrLength = count($categories);

for ($i=0; $i < $arrLength; $i++) { 
	echo '<div class="col-md-12" onclick="categoriesSelect(' . "'" . $categories[$i] . "'" . ')"><h3 class="left-nav text-color-light py-3 px-3 my-0">' . $categories[$i] . '</h3></div>';
}

?>