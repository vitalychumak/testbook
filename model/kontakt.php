<?php

class kontakt
{
public $data;
public $count;
public $data_tel;


public function __construct($data = null,$count = null,$data_tel = null)
{
$this->data = $data;
$this->count = $count;
$this->data_tel = $data_tel;
}

function addkontakt()
{
 for ($i=0; $i <= 20 ; $i++) { 
  $tel[$i]=mysqli_escape_string($GLOBALS['link'], $_POST['tel'.$i] );
  }
  $query_tel = "INSERT INTO telefon(number,number1,number2,number3,number4,number5,number6,number7,number8,number9,number10,number11,number12,number13,number14,number15,number16,number17,number18,number19,number20) VALUES ('$tel[0]','$tel[1]','$tel[2]','$tel[3]','$tel[4]','$tel[5]','$tel[6]','$tel[7]','$tel[8]','$tel[9]','$tel[10]','$tel[11]','$tel[12]','$tel[13]','$tel[14]','$tel[15]','$tel[16]','$tel[17]','$tel[18]','$tel[19]','$tel[20]')";
  mysqli_query ($GLOBALS['link'],$query_tel);
  @mysqli_free_result($query_tel);
  $query_last="SELECT id_telefon FROM telefon ORDER by id_telefon DESC";
   $result= mysqli_query ($GLOBALS['link'],$query_last);
  $row = mysqli_fetch_array($result, MYSQLI_BOTH);
  $id_telefon=$row['id_telefon'];
   $fname = mysqli_escape_string($GLOBALS['link'], $_POST['fname'] );
  $lname = mysqli_escape_string($GLOBALS['link'], $_POST['lname'] );
  $email = mysqli_escape_string($GLOBALS['link'], $_POST['email'] );
  $date = mysqli_escape_string($GLOBALS['link'], $_POST['date'] );
  $query = "INSERT INTO kontakt(name,fname,email,date,id_telefon) VALUES ('$fname','$lname','$email','$date','$id_telefon')";
  mysqli_query ($GLOBALS['link'],$query);
  echo "Данные успешно добавлены </br><a href=index.php>Вернуться к списку контактов</a>";

}

function updatekontakt($id)
{
  $query_k="SELECT id_telefon FROM kontakt where id_kontakt=".$id;
  $result= mysqli_query ($GLOBALS['link'],$query_k);
  $row = mysqli_fetch_array($result, MYSQLI_BOTH);
  $id_telefon=$row['id_telefon'];
   for ($i=0; $i <= 20 ; $i++) { 
  $tel[$i]=mysqli_escape_string($GLOBALS['link'], $_POST['tel'.$i] );
 }

 $query_tel = "UPDATE telefon SET number='".$tel[0]."',number1='".$tel[1]."', number2='".$tel[2]."', number3='".$tel[3]."', number4='".$tel[4]."', number5='".$tel[5]."', number6='".$tel[6]."', number7='".$tel[7]."', number8='".$tel[8]."', number9='".$tel[9]."', number10='".$tel[10]."', number11='".$tel[11]."', number12='".$tel[12]."', number13='".$tel[13]."', number14='".$tel[14]."', number15='".$tel[15]."', number16='".$tel[16]."', number17='".$tel[17]."', number18='".$tel[18]."', number19='".$tel[19]."', number20='".$tel[20]."' where id_telefon=".$id_telefon;      
  mysqli_query ($GLOBALS['link'], $query_tel );
 
  $name = mysqli_escape_string($GLOBALS['link'], $_POST['fname'] );
  $lname = mysqli_escape_string($GLOBALS['link'], $_POST['lname'] );
  $email = mysqli_escape_string($GLOBALS['link'], $_POST['email'] );
  $date = mysqli_escape_string($GLOBALS['link'], $_POST['date'] );
 
  $query = "UPDATE kontakt SET name ='".$name."', fname='".$lname."', email = '".$email."', date = '".$date."' WHERE id_kontakt=".$id;
  
  echo "Данные успешно изменены </br><a href=index.php>Вернуться к списку контактов</a>";
   mysqli_query ($GLOBALS['link'], $query);
  die();

}

public function getAllList()
{
$kontakts= new kontakt;
if (isset($_POST['search'])) {
  	$f=$_POST['field'];
  	$ff=$_POST['search'];
  if ($f=="tel") { 
   $query = "SELECT * FROM telefon where number='".$ff."' or number1='".$ff."' or number2='".$ff."' or number3='".$ff."' or number4='".$ff."' or number5='".$ff."' or number6='".$ff."' or number7='".$ff."' or number8='".$ff."' or number9='".$ff."' or number10='".$ff."' or number11='".$ff."' or number12='".$ff."' or number13='".$ff."' or number14='".$ff."' or number15='".$ff."' or number16='".$ff."' or number17='".$ff."' or number18='".$ff."' or number19='".$ff."' or number20='".$ff."'";
  $result = mysqli_query($GLOBALS['link'],$query);
  @$id_telefon = mysqli_fetch_assoc($result);
  $id=$id_telefon['id_telefon'];
  $query = "SELECT * FROM kontakt where id_telefon=$id";
  }
   else {$query = "SELECT * FROM kontakt where ".$f."='".$_POST['search']."'";}}
  
   if (!isset($_POST['search'])) {$query = "SELECT * FROM kontakt ";}

  $result = mysqli_query($GLOBALS['link'],$query);
  @$kontakts->count=  mysqli_num_rows($result);
  $kontakts->data = mysqli_fetch_all($result);
return $kontakts;


}

public function getkontakt($id)
{

  $kontakt= new kontakt;
  $query = "SELECT id_kontakt, name, fname, email, date, id_telefon FROM kontakt WHERE id_kontakt=".$id;
  $result = mysqli_query($GLOBALS['link'], $query );
  @$kontakt->data = mysqli_fetch_array($result, MYSQLI_BOTH);
  $id_tel=$kontakt->data['id_telefon'];
  $query_tel="SELECT * FROM telefon where id_telefon=$id_tel";
   $result_tel= mysqli_query ($GLOBALS['link'],$query_tel);
  @$kontakt->data_tel = mysqli_fetch_array($result_tel, MYSQLI_BOTH);
  return $kontakt;  
}

public function deletekontakt($id)
{
 $query ="SELECT * FROM kontakt where id_kontakt=".$id;
 $result= mysqli_query ($GLOBALS['link'],$query);
 $id_telefon=mysqli_fetch_array($result, MYSQLI_BOTH);
 

  $query = "DELETE FROM kontakt WHERE id_kontakt=".$id;
  mysqli_query ($GLOBALS['link'], $query );
  $query_tel = "DELETE FROM telefon WHERE id_telefon=".$id_telefon['id_telefon'];
  mysqli_query ($GLOBALS['link'], $query_tel);
  echo "Данные успешно удалены </br><a href=index.php>Вернуться к списку контактов</a>";
}

}
?>