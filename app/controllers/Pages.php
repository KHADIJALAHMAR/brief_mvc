<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('contacts');
      }

      $data = [
        'title' => 'My Contacts management',
        'description' => 'This is the first page of my contacts management application'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to manage contacts.'
      ];

      $this->view('pages/about', $data);
    }
  }