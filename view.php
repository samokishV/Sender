<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.12.18
 * Time: 13:08
 */


class View
{
    //public $template_view; // здесь можно указать общий вид по умолчанию.

    function generate($content_view, $template_view, $data = null)
    {

        include 'views/'.$template_view;
    }
}




