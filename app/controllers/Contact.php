<?php
  class Contact extends Controller {
    public function __construct(){
     $this->model= $this->model('UserContact');
    }
    
    public function index(){
      
      $data = [];
      $result = $this->model->showContact();
     
      foreach ($result as $row) {
        array_push($data,$row);
      }
      $this->view('pages/index', $data);
    }
   public function insert()
   {
   if (isset($_POST["submit"])) {
     $data=[ 
    'name' =>$_POST['contact_name'],
    'email' => $_POST['contact_email'],
    'phone'=> $_POST['contact_phone'],
    'address'=> $_POST['contact_address']
     ];
     $this->model->addContact($data);
    header('location:'.URLROOT .'/contact/index');
   }
   
     $this->view('pages/insert');
   }
   public function delete()
   {
     $params=[
       'id'=>$_GET['id']
     ];
    $this->model->deletContact($params); 
       header('location:'.URLROOT.'/' . '/contact/index');
    // echo $_GET['id'];
   }


   public function update($id)
  {

   if (isset($_POST["submit"]))
   {
     
     
    $params=[ 
   'id'=>$id,
   'name' =>$_POST['contact_name'],
   'email' => $_POST['contact_email'],
   'phone'=> $_POST['contact_phone'],
   'address'=> $_POST['contact_address']
    ];
    $this->model->updateContact($params);
    // header('location:'.URLROOT.'/' . '/contact/index');
    header('location:'.URLROOT);
  }
  else {
    $contact = $this->model->getContactbyId($id);

    

    $this->view('pages/update',$contact);
  }
  }

  
   }
  
  


    