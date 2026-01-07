<?php
include "../function.php";
$name = "_Pokemon_Fansub__Pokemon_SunMoon_-_67_VOSTFR__FR___TV_720p_AAC.mp4";
$url = https://yourprivatehosting/torrent/debrid.php?name=" . urlencode($name) . "";
$post = http_build_query([
    'link' => "" . $link . "",
]);
$cr = curl($url, null, "false", "false", null, $post);
header("Location: " . $cr . "");
exit;

