<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>AJAX</title>
  <script>
    function fun(str) {
      let xhr;

      function change() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          document.getElementById('texthint').innerHTML = xhr.responseText;
        }
      }

      xhr = new XMLHttpRequest();
      xhr.open("GET", "25. AJAX database.php?no="+str, true);
      xhr.onreadystatechange = change;
      xhr.send();
    }
  </script>
</head>

<body>
  <form style="display: flex;justify-content: center; margin-top:12px;">
  <lable for="no" >  Select the data: </lable>
    <select name="no" id="select"  onchange="fun(this.value)">
      <?php
      $server = "localhost";
      $username = "root";
      $database = "Royal";
      $password = "";

      $connect = mysqli_connect($server, $username, $password, $database);
      $sql = "SELECT * FROM `notes`";

      $result = mysqli_query($connect, $sql);

      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
 } 
      ?>
    </select>
  </form>
  <div id="texthint"></div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>