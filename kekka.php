<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP課題01</title>
</head>
<body>
  <form method="POST" action="kekka.php">
    <p>
      <select name="day">
        <option value="Mon">Mon</option>
        <option value="Tue">Tue</option>
        <option value="Wed">Wed</option>
        <option value="Thu">Thu</option>
        <option value="Fri">Fri</option>
        <option value="Sat">Sat</option>
        <option value="Sun">Sun</option>
      </select>
      <input type="submit" value="送信">
    </p>
  </form>

  <?php
  $day = $_POST['day'];
  $date = array("Mon" => "月曜日", "Tue" => "火曜日", "Wed" => "水曜日", "Thu" => "木曜日", "Fri" => "金曜日", "Sat" => "土曜日", "Sun" => "日曜日");
  echo($day."といえば".$date[$day]);
   ?>

</html>
