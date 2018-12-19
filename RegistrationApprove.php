<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.12.18
 * Time: 12:12
 */
include 'view.php';

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

        ob_start();
        $this->view->generate('RegistrationApprove.php', 'base.php');
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }

    function __construct()
    {
        $this->view = new View();
    }
}