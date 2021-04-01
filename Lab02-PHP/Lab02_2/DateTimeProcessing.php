<html>

<head>
  <title>Date Time Processing</title>
  <script src="script.js"></script>
</head>

<body onload="solve()">

  <?php
  if (array_key_exists("name", $_POST) && $_POST['name'] != "") {
    $name = $_POST["name"];
    $hour = $_POST["hour"];
    $minute = $_POST["minute"];
    $second = $_POST["second"];
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];
  } else {
    $name = "";
    $hour = 0;
    $minute = 0;
    $second = 0;
    $day = 1;
    $month = 1;
    $year = 2000;
  }

  function numberDayOfMonth($month, $year)
  {
    switch ($month) {
      case 1:
      case 3:
      case 5:
      case 7:
      case 8:
      case 10:
      case 12:
        return 31;
      case 2:
        if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) {
          return 29;
        } else {
          return 28;
        }
      default:
        return 30;
    }
  }
  ?>


  <p>Enter your name and select date and time for the appointment</p>
  <br>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <table>
      <tr>
        <td>Your name: </td>
        <td>
          <input type="text" name="name" value="<?php echo $name ?>" required>
        </td>
      </tr>
      <tr>
        <td>Date: </td>
        <td>
          <select name="day" id="day">
            <?php
            for ($i = 1; $i <= 31; $i++) {
              if ($day == $i) {
                print("<option selected>$i</option>");
              } else {
                print("<option>$i</option>");
              }
            }
            ?>
          </select>
          <select name="month" id="month" onchange="solve()">
            <?php
            for ($i = 1; $i <= 12; $i++) {
              if ($month == $i) {
                print("<option selected>$i</option>");
              } else {
                print("<option>$i</option>");
              }
            }
            ?>
          </select>
          <select name="year" id="year" onchange="solve()">
            <?php
            for ($i = 2000; $i <= 2030; $i++) {
              if ($year == $i) {
                print("<option selected>$i</option>");
              } else {
                print("<option>$i</option>");
              }
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Time: </td>
        <td>
          <select name="hour">
            <?php
            for ($i = 0; $i <= 23; $i++) {
              if ($hour == $i) {
                print("<option selected>$i</option>");
              } else {
                print("<option>$i</option>");
              }
            }
            ?>
          </select>
          <select name="minute">
            <?php
            for ($i = 0; $i <= 59; $i++) {
              if ($minute == $i) {
                print("<option selected>$i</option>");
              } else {
                print("<option>$i</option>");
              }
            }
            ?>
          </select>
          <select name="second">
            <?php
            for ($i = 0; $i <= 59; $i++) {
              if ($second == $i) {
                print("<option selected>$i</option>");
              } else {
                print("<option>$i</option>");
              }
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td align="right"><input type="submit" value="Submit"></td>
        <td align="left"><input type="reset" value="Reset"></td>
      </tr>
    </table>

    <br>
    <?php
    if (array_key_exists("name", $_POST) && $_POST['name'] != "") {
      print("Hi $name");
      print("<p>You have choose to have an appointment on $hour:$minute:$second, $day/$month/$year</p>");
      print("<p>More information</p>");

      $hourin12 = $hour % 12;
      $tmp = $hour / 12;
      if ($tmp == 0) {
        $str = "AM";
      } else {
        $str = "PM";
      }
      print("<p>In 12 hours, the time and date is $hourin12:$minute:$second $str, $day/$month/$year</p>");

      $maxNumberDayOfMonth = numberDayOfMonth($month, $year);
      print("<p>This month has $maxNumberDayOfMonth days!</p>");
    }
    ?>
  </form>
</body>

</html>