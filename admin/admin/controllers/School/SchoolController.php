<?php


class SchoolController
{


    function index()
    {
        $data = School::all();
        view("", compact("data"));
    }


    function create(){
        view("",);
    }
    function save(){
        print_r($_POST);

       if(isset($_POST["btn_submit"])){
       $school= new School();
       $school->name= $_POST["name"];
       $school->email= $_POST["email"];
       $school->phone= $_POST["phone"];
       $school->address= $_POST["address"];
       $school->create();
         redirect();
       }
      
    }

    function delete(){
        $id= $_GET["id"];
        school::delete($id);
        redirect();
    }

   function edit(){
     $data= school::find($_GET["id"]);
     view("", compact("data"));
   }

   function update(){
    if(isset($_POST["btn_submit"])){
       $school= new School();
       $school->id= $_POST["id"];
       $school->name= $_POST["name"];
       $school->email= $_POST["email"];
       $school->phone= $_POST["phone"];
       $school->address= $_POST["address"];
       $school->update();
         redirect();
       }
   }

}
?>