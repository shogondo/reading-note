<?php
namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController {
    public function index() {
        $this->viewBuilder()->autoLayout(false);
        $values = [
            'title' => 'Hello with array!',
            'message' => 'This is message!'
        ];
        $this->set($values);
    }
}