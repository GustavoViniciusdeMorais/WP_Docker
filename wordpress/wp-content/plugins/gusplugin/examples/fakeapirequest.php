<?php

function getimages()
{
    $url = 'https://jsonplaceholder.typicode.com/photos?_limit=2';

    // create a new cURL resource
    $ch = curl_init();

    // set URL and other appropriate options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    // grab URL and pass it to the browser
    $return = curl_exec($ch);

    // close cURL resource, and free up system resources
    curl_close($ch);
    // print_r(json_encode($return));
    // die;
    $return = json_decode($return);

    echo "<div class='wrapper'>";
    foreach($return as $item){
        echo "<div class='one'>{$item->id}</div>";
        echo "<div class='two'>{$item->title}</div>";
        echo "<div class='three'><img src={$item->thumbnailUrl}</div>";
    }
    echo "</div>";
    exit;
}