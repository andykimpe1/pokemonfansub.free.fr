<?php
if (isset($_GET["search"])) {
    $search = $_GET["search"];
} else {
	header("Location: http://pokemonfansub.alwaysdata.net/");
    exit;
}
header("Location: https://www.google.com/search?client=ms-google-coop&q=site:pokemonfansub.alwaysdata.net+" . $search . "");
