<?php

namespace Core;

class Controller {
    protected $layout = 'default.php';
    
    protected function render($view, $data) {
        return new Page($this->layout, $this->title, $view, $data);
    }
}