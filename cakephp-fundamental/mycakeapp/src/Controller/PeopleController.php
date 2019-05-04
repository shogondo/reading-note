<?php
namespace App\Controller;

use App\Controller\AppController;

class PeopleController extends AppController {
    public function index() {
        $id = $this->request->getQuery('id');
        $data = $this->People->get($id);
        $this->set('data', $data);
    }
}
