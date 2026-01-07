<?php
include "../function.php";
$name = "_Pokemon_Fansub__Pokemon_SunMoon_-_67_VOSTFR__FR___TV_720p_AAC.mp4";
$urlname = urlencode($name);
$url = https://yourprivatehosting/torrent/debrid.php?name=" . $urlname . "";
$user_agent = null;
$hdrs = null;
$post = http_build_query([
    'link' => "" . $link . "",
]);
$cr = curl($url, $user_agent, "false", "false", $hdrs, $post);
header("Location: " . $cr . "");
exit;

