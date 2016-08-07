<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('AppController', 'Controller');

class RadioshowController extends AppController
{
    public function index()
    {
    }
    
    public function view($id)
    {
        $this->layout = false;
        //$this->autoRender = false;
        $this->set("id", $id);
    }
}