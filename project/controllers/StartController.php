<?php

namespace Project\Controllers;
use Core\Controller;

class StartController extends Controller {
    
    public function actionIndex() {
        $this->title = 'Getting start';
        return $this->render('start/index', []);
    }
    
    public function actionAbout() {
        $this->title = 'About';
        return $this->render('start/about', []);
    }
    
    public function actionContact() {
        $this->title = 'Contact form';
        return $this->render('start/contact', []);
    }
}