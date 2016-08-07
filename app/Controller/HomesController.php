<?php
App::uses('AppController', 'Controller');
/**
 * Homes Controller
 */
class HomesController extends AppController {

public function index()
{
    $this->layout = false;
    //$this->autoRender = false;
}

public function greeting()
{
    $this->layout = false;
}

}
