<?php
include_once("model/kontakt.php");

class book{
 public $model;

 public function __construct(){
  $this->model = new kontakt();
 }
 
 public function main(){

 	if ( !isset( $_GET["action"] ) ) $_GET["action"] = "shlist";
switch ( $_GET["action"] )
 {
  case "shlist":    {
    $kontakts = $this->model->getAllList();
    include 'view/booklist.php'; break;}
  case "show":{    
  	$kontakt = $this->model->getkontakt($_GET["id"]);
    include 'view/viewkontakt.php'; break;}
  case "addfrm":  {   
     include 'view/addkontakt.php'; break;}
  case "add":        
   $this->model->addkontakt(); break;
  case "edit":{
      $kontakt = $this->model->getkontakt($_GET["id"]);    
      include 'view/editkontakt.php'; break;}
  case "update":      
    $this->model->updatekontakt($_GET["id"]); break;
  case "delete":      
    $this->model->deletekontakt($_GET["id"]); break;
  default:{
    $kontakts = $this->model->getAllList();
    include 'view/booklist.php'; }
 }

/*  if(!isset($_GET['id'])){
    $kontakts = $this->model->getAllList();
    include 'view/booklist.php';
  }
  else{
   $kontakts= $this->model->getkontakt($_GET['action']);
   include 'view/viewbook.php';
  }
 }*/
} }

?>