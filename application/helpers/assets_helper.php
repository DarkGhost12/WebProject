<?php  
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    if ( ! function_exists('css'))
    {
        function css($nom)
        {
            return '<link rel="stylesheet" href="' . base_url() . 'assets/css/' . $nom . '.css " type="text/css" media="screen" />';
        }
    }
    if(!function_exists('site_header')){
        function site_header($nom){
            return base_url().'assets/header/'.$nom.'.php';
        }
    }
?>

