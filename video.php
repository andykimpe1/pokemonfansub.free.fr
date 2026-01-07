<?php
if (isset($_GET["link"])) {
    $link = $_GET["link"];
	$poster = $_GET["poster"];
} else {
	echo "add ling get parameter";
	exit;
}
echo "<video poster=\"" . $poster . "\" controls width='100%' height='100%'>\r\n";
echo "    <source src=\"" . $link . "\" type=\"video/mp4\">\r\n";
echo "</video>\r\n";
