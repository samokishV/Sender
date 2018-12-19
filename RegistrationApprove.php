<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.12.18
 * Time: 12:12
 */
include 'view.class.php';

class RegistrationApprove {
    private $title = "Registartion approve";

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function getHtml() {
        $content = (string) include('views/RegistrationApprove.php');
        return $content;

        //$this->view->generate('RegistrationApprove.php', 'base.php');
    }

    function __construct()
    {
        // $this->view = new View();
    }
}