<html>
 <head>
  <title>Телефонная книга</title>
  <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">  
  <link href="telbook.css" rel=stylesheet>   
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>
    $( function() {
     $( "#datepicker" ).datepicker();
    } );
  </script>
 </head>
 <body>
<?
$data=$kontakt->data;
$data_tel=$kontakt->data_tel;
  echo '<h2>Просморт контакта</h2>';
  echo '<table border=1px  ridge #7F7D02>';
  echo '<tr>';
  echo '<td>Имя</td>';
  echo '<td>'.$data['name'].'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Фамилия</td>';
  echo '<td>'.$data['fname'].'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Email</td>';
  echo '<td>'.$data['email'].'</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Дата рождения</td>';
  echo '<td>'.$data['date'].'</td>';
  echo '</tr>';
  
  echo '<tr>';
  echo '<td>Телефон</td>';
  echo '<td>'.$data_tel['1'].'</td>';
    for ($i=1; $i <= 20 ; $i++) { 
     if ($data_tel[$i+1]){
     	echo '<tr>';
     echo '<td>Телефон</td><td>'.$data_tel[$i+1].'</td>';
     echo "</tr>";}
   }
  echo '</tr>';
  echo '<tr>';
  echo '</tr>';
  echo '</table>';
  echo "<a href=index.php>Вернуться к списку контактов</a>";
?>
</body>
</html>