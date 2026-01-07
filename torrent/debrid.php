<?php
if (isset($_GET["name"])) {
    $name = $_GET["name"];
} else {
echo "please set torrent file name";
exit;
}
$ch = curl_init();
//get your private name folder https://alldebrid.com/account/
//curl_setopt($ch, CURLOPT_URL, "https://myfiles.debrid.it/privatefoldername/magnets/%5BPok%C3%A9mon%20Fansub%5D%20Pok%C3%A9mon%20Horizons%20-%20001%20%28VOSTFR-FR%201920x1080%20H264%20AAC%29.mp4");
curl_setopt($ch, CURLOPT_URL, "https://myfiles.debrid.it/privatefoldername/magnets/" . $name . "");
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:146.0) Gecko/20100101 Firefox/146.0");
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$res = curl_exec($ch);
curl_close($ch);
preg_match("!\r\n(?:location|URI): *(.*?) *\r\n!", $res, $matches);
$url = $matches[1];
echo $url;
