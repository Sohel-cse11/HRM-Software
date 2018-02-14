<?php

if (!function_exists('http_post')) {

    function http_post($url, $data) {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, count($data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $output = curl_exec($ch);

        curl_close($ch);
        return $output;
    }

}


if (!function_exists('dd')) {

    function dd($data)
    {
       echo '<pre>',  print_r($data),'</pre>';
    }

}
