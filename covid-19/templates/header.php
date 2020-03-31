<?php

function http_request($url){
    // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, $url);
    
    // set user agent    
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // mengembalikan hasil curl
    return $output;
}

$profile = http_request("https://api.kawalcorona.com/indonesia/");
$profileprov = http_request("https://api.kawalcorona.com/indonesia/provinsi/");
$duniamati = http_request("https://api.kawalcorona.com/meninggal/");
$duniasembuh = http_request("https://api.kawalcorona.com/sembuh/");
$duniapositif = http_request("https://api.kawalcorona.com/positif/");
$dunia = http_request("https://api.kawalcorona.com/");

// ubah string JSON menjadi array
$profileprov = json_decode($profileprov, TRUE);
$profile = json_decode($profile, TRUE);
$duniamati = json_decode($duniamati, TRUE);
$duniasembuh = json_decode($duniasembuh, TRUE);
$duniapositif = json_decode($duniapositif, TRUE);
$dunia = json_decode($dunia, TRUE);



foreach($profile as $p) {
	$data1 = $p['sembuh'];
	$data2 = $p['meninggal'];
	$data3 = $p['positif'];
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Info Corona</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- DataTables -->
  <link rel="stylesheet" href="assets/DataTables/datatables.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>