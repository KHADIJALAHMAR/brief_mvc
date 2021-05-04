

<?php
class UserContact{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }    

    public function showContact()
    {
      $this->db->query("SELECT * FROM contact");

      $results = $this->db-> resultSet();

      return $results;
    }
    public function addContact($data)
    
    {
   $this->db->query("INSERT INTO `contact`( `name`, `email`, `phone`, `address`) VALUES (:name,:email_contact,:phone_contact,:address_contact)");
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':email_contact', $data['email']);
    $this->db->bind(':phone_contact', $data['phone']);
    $this->db->bind(':address_contact', $data['address']);
    $exucute_data=$this->db->execute();
    return $exucute_data;
    }
    public function deletContact($params)
    {
      $this->db->query("DELETE FROM `contact` WHERE `id` = :id");
      $this->db->bind(':id',$params['id']);
      $this->db->execute();
     return  $db;
    }

    public function getContactbyId($id){
      $this->db->query("SELECT * FROM contact WHERE id = :id");
      $this->db->bind(':id',$id);

      $results = $this->db->single();

      return $results;
    }
    public function updateContact($params)
    {
      $this->db->query("UPDATE contact SET `name`= :name, `email`= :email, `phone`= :phone, `address`= :address WHERE `id`= :id");
      $this->db->bind(':name', $params['name']);
      $this->db->bind(':email',$params['email']);
      $this->db->bind(':phone',$params['phone']);
      $this->db->bind(':address',$params['address']);
      $this->db->bind(':id',$params['id']);
      $this->db->execute();
      return $db;
      
    }
    
}
    ?>