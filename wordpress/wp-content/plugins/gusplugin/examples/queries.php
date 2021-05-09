<?php

function posts()
{
    $args = array(
        'post_title' => 'Hello world!',
    );

    $query = new WP_Query( $args );

    print_r(json_encode($query->posts));
    die;
}