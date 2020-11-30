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
<?php

  echo '<table border="0" >';
  echo "<form name='searh' action='index.php?action=shlist' method='POST'>";
  echo "<tr><td align=right>Поиск по полю:</td> <td><input type=radio name=field value='name' checked>Имя</td>";
  echo "<tr><td></td><td><input type=radio name=field value='fname'>Фамилия</td></tr>";
  echo "<tr><td></td><td><input type=radio name=field value='tel'>Номер телефона</td></tr>";
  
  
  echo "<tr><td> <input type='text' SIZE=20 name='search' value=''></td>";
   echo '<td><input type="submit" value="найти"></td></tr>';
  echo "</table><br><br><br><br><br>";
  $data=$kontakts->data;
    if ($kontakts->count>0) {
  echo '<table border="1" cellpadding="2" cellspacing="0">';
  echo "</tr>";
  echo '<tr><th>Имя </th><th>Фамилия</th><th></th><th></th><th></th></tr>';
  for ($i=0;$i<$kontakts->count;$i++)
  {
    echo '<tr>';
    echo '<td>'.$data[$i][1].'</td>';
    echo '<td>'.$data[$i][2].'</td>';
    echo '<td><a href="index.php?action=show&id='.$data[$i][0].'">просмотреть</a></td>';
    echo '<td><a href="index.php?action=edit&id='.$data[$i][0].'">редактировать</a></td>';
    echo '<td><a href="index.php?action=delete&id='.$data[$i][0].'">удалить</a></td>';
    echo '</tr>';
  }
  echo '</table>';
 }
 else {echo "НЕТ ДАНННЫХ";};
  echo '<p><a href="index.php?action=addfrm">Добавить</a></p>';
  if (isset($_POST['search'])) {
  	echo '<p><a href="index.php?action=shlist">Вурнуться к списку</a></p>';}

/*foreach ($kontakts as $key => $kontakt)
{
echo '<tr>
<td>
<a href="index.php?id='.$kontakt->name.'">'.$kontakt->name.'</a></td>
<td>'.$kontakt->city.'</td>
<td>'.$kontakt->country.'</td>
</tr>';
}*/
?>


</body>
</html>