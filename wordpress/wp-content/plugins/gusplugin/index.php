<?php
/**
 * Gustavo URLs
 *
 * @package           PluginPackage
 * @author            Gustavo Vinicius
 * @copyright         2021 Gustavo Vinicius
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Gustavo URLs
 * Plugin URI:        https://github.com/gustavoviniciusdemorais
 * Description:       Fight your limits
 * Version:           1.0.0
 */

function gs_init()
{
    require_once 'examples/addmenuicon.php';
    menu_icon();

    echo "<link rel='stylesheet' type='text/css' href='style/grid.css'>";

    if(isset($_GET['gus'])){
        if($_GET['gus'] == 'posts'){
            require_once 'examples/queries.php';
            posts();
        }elseif($_GET['gus'] == 'images'){
            require_once 'examples/fakeapirequest.php';
            getimages();
        }else{
            var_dump($_GET['gus']);
            exit;
        }
    }else{
        return;
    }
}

 add_action('init', 'gs_init');