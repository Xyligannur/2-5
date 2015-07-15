<?php
if (isset($_FILES['file'])){

upload_file($_FILES['file']);

}
?>
<input class="selectbutton" type="file" name="file" />
<input class="btn btn-default" type="submit" value="Загрузить файл!" />
</form>
<br>

<?php
$res = mysql_query('SELECT * FROM photo');
while ($row = mysql_fetch_array($res)) {
  echo '<a href ="'."photo.php?id=" . $row[0] . '"' .'>';
  echo '<img src="'.'img_small/'.$row[1] . '"' . 'alt= ""' . '>';
  echo '</a>';
}
?>