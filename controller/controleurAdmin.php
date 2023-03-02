<?php

require_once 'model/admin.php';
require_once 'view/Vue.php';

class controleurAdmin {

    private $admin;

    public function __construct() {
      $this->admin = new admin();
    }
  
    public function adminPanel() {
        $admin = $this->admin->getAllArticles();
        $vue = new Vue("Admin");
        $vue->generer(array('instruments' => $admin));
      }
}