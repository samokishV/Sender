<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.12.18
 * Time: 13:08
 */

namespace Sender\views;

class MailView
{
    private $title = "default title";
    private $content;

    function __construct($view, $data, $config) {
        $file = $this->getFile($view);
        $path = $this->getPath($file);
        $content = $this->render($path, $data, $config);
        $this->setHtml($content);

    }

    private function getFile($view) {
        $file = $view.".php";
        return $file;
    }

    private function getPath($file) {
        $path = __DIR__.'/../views/'.$file;
        return $path;
    }

    private function render($path, $data, $config) {
        ob_start();
        include $path;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    private function setHtml($content) {
        $this->content = $content;
    }

    public function getHtml(){
        return $this->content;
    }

    public function getTitle($view, $data) {
        switch($view) {
            case 'ContactUs' : $this->title = $data['subject'];
                break;
            case 'ProductOrder' : $this->title = 'Product order';
                break;
            case 'RegistrationApprove' : $this->title = 'Registration approve';
                break;
            case 'PasswordRecovery' : $this->title = 'Password recovery';
                break;
        }
        return $this->title;
    }
}




