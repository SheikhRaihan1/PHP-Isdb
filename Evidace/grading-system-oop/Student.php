<?php

class Student
{
   public $id;
   public $name;
   public $batch;

   public function __construct($_id, $_name, $_batch)
   {
      $this->id = trim($_id);
      $this->name = trim($_name);
      $this->batch = trim($_batch);
   }


   function save()
   {
      global $db;
      $stmt= $db->query("insert into results(name,batch)
                        values('$this->name', '$this->batch')");
   }

   public static function all()
{
    global $db;

    $data = $db->query("SELECT * FROM results");

    $students = [];

    while($row = $data->fetch_object()){
        $students[] = $row;
    }

    return $students;
}

    

   static function find($id)
   {
      global $db;
      $data = $db->query("select * from results where id= $id");
      $student = $data->fetch_object();


      return $student;
   }
}

   ?>