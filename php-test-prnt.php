<?php
/**
 * by mrZ
 * Email: mrZLab630@gmail.com
 * Date: 17.06.19
 * Time: 11:49
 * About: print_r function wrapper with additional information for debugging
 */


if (!function_exists('test_prnt')) {
    function test_prnt($d,$off=null){

        if(isset($off)){return NULL;}

        echo '<pre style="margin: 10px auto;width: 50%;padding: 30px;border: black 1px solid;overflow:auto;">';

        $debug = debug_backtrace();

        if(isset($debug) AND is_array($debug) AND !empty($debug)){

            echo $debug[0]['line'].'|'.$debug[0]['file'].'<hr>';

        }else{

            echo __LINE__.'|'.__FILE__.'<hr>';

        }


        print_r($d);

        echo '</pre>';

    }
}