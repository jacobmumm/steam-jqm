<?php

function curl_json($base_url='',$query='',$json=true){

    //set the url to use
    $target_url = 'http://api.steampowered.com/ISteamUserStats/GetPlayerAchievements/v0001/?appid=440&key=B288A76BB1621D6D9F02D6DA5DC54454&steamid=76561197960432907';
    $url == ($base_url='' ? $target_url : $base_url)  ;

    $ch = curl_init();
    $headers = array();
    $headers[] = 'Content-type: application/json';
    $headers[] = 'X-HTTP-Method-Override: GET';
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => array($headers),
        CURLOPT_TIMEOUT => 5,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HEADER => 0,
        CURLOPT_FOLLOWLOCATION => 1,
        CURLOPT_MAXREDIRS => 3,
        CURLOPT_USERAGENT => 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)'
    );
    curl_setopt_array($ch,$options);
    $response = curl_exec($ch);
    if($response === false || curl_error($ch)) {
        curl_close($ch);
        return false;
    } else {
        curl_close($ch);
        return json_decode($response, true);
    }
}

echo curl_json();