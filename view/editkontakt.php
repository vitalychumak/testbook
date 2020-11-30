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
 echo '<h2>Редактировать</h2>';
    
  echo '<form name="edit" action="index.php?action=update&id='.$_GET['id'].'" method="POST">';
  echo '<table>';
  echo '<tr>';
  echo '<td>Фамилия</td>';
  echo '<td><input type="text" name="fname" value="'.$data['name'].'"></td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Имя</td>';
  echo '<td><input type="text" name="lname" value="'.$data['fname'].'"></td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Email</td>';
  echo '<td><input type="text" name="email" value="'.$data['email'].'"></td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Дата рождения</td>';
  echo '<td><input type="text" name="date" id="datepicker" value="'.$data['date'].'"></td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Телефон</td>';
  echo '<td><input type="text" name="tel0" value="'.$data_tel[1].'" required pattern="^[0-9]{5,10}"/></td>';
  echo '</tr>';
  for ($i=1; $i <= 20 ; $i++) { 
     echo '<tr>';
     echo '<td>Телефон'.$i.'</td><td><input name=tel'.$i.' value="'.$data_tel[$i+1].'"  pattern="^[0-9]{0,10}"/></td>';
     echo "</tr>";
   }
    echo '<tr>';
  echo '<td><input type="submit" value="Сохранить"></td>';
  echo '<td><button type="button" onClick="history.back();">Отменить</button></td>';
  echo '</tr>';
  echo '</table>';
  echo '</form>';
?>


</body>
</html>