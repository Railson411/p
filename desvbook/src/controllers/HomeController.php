<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\Loginhandlers;

class HomeController extends Controller {


    private $loggedUser;

// verificação de controle quem está logado no site
    public function __construct() {
        $this->loggedUser = LoginHandler::checkLogin();
        if($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }


    public function index() {
        $this->render('home', ['nome' => 'Bonieky']);
 
}
}