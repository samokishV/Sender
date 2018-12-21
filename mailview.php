<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.12.18
 * Time: 13:08
 */


class MailView
{
    private $title = "default title";
    private $content;

    function __construct($view, $data) {
        $file = $this->getFile($view);
        $path = $this->getPath($file);
        $content = $this->render($path, $data);
        $this->setHtml($content);

    }

    private function getFile($view) {
        $file = $view.".php";
        return $file;
    }

    private function getPath($file) {
        $path = 'views/'.$file;
        return $path;
    }

    private function render($path, $data) {
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

    public function getTitle() {
        return $this->title;
    }
}




