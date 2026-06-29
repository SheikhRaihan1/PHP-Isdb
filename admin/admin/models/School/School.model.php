<?php 

  class School{
   
   public $id;
   public $name;
   public $email;
   public $phone;
   public $address;
  

   public function __construct()
   {
   }
  

   public function set($id,$name, $email,$phone,$address)
   {
     $this->id=$id;
     $this->name=$name;
     $this->email=$email;
     $this->phone=$phone;
     $this->address=$address;
   }
   


     public function create(){
       global $db;
       $stmt= $db->query("insert into schools (name, email, phone, address)
        values('$this->name', 
          '$this->email',
          '$this->phone',
          '$this->address'
        )
       ");
       return $db->insert_id;
     }
     public function update(){
       global $db;
       $stmt= $db->query("update schools set 
          
          name= '$this->name', 
          email= '$this->email',
          phone= '$this->phone',
          address= '$this->address',
       ");
       return $stmt;
     }

     public static function all(){
       global $db;
       $stmt= $db->query("select * from schools");
       return  array_map( fn($d)=> (object) $d, $stmt->fetch_all(MYSQLI_ASSOC));
     }
     public static function find($id){
       global $db;
       $stmt= $db->query("select * from schools where id=$id");
       return   $stmt->fetch_object();
     }
     public static function delete($id){
       global $db;
       $stmt= $db->query("delete  from schools where id= $id");
       return $stmt;
     }





  }


?>