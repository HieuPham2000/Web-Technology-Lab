<html>


<head>
  <title>Hello World</title>
  <style>
    h3 {
      color: orangered;
      text-align: center;
    }

    hr {
      width: 1000px;
      margin: 0;
      padding: 0;
    }
  </style>
</head>

<body>
  <!-- hello.php CS443 -->
  <h3>Basic PHP syntax</h3>
  <p>This is going to be ignored by the PHP interpreter.</p>
  <?php echo '<p>While this is going to be parsed.</p>'; ?>
  <p>This will also be ignored by the PHP preprocessor.</p>
  <?php print('<p>Hello and welcome to <i>my</i> page!</p>');
  ?>
  <?php
  //This is a comment
  /*
  This is
  a comment
  block
  */
  ?>
  <hr>

  <!-- scalars.php CS443 -->
  <h3>Scalars</h3>
  <p>
    <?php
    $foo = true;
    if ($foo) echo "It is TRUE! <br /> \n";
    $txt = '1234';
    echo "$txt <br /> \n";
    $a = 1234;
    echo "$a <br /> \n";
    $a = -123;
    echo "$a <br /> \n";
    $a = 1.234;
    echo "$a <br /> \n";
    $a = 1.2e3;
    echo "$a <br /> \n";
    $a = 7E-10;
    echo "$a <br /> \n";
    echo 'Arnold once said: "I\'ll be back"', "<br /> \n";
    $beer = 'Heineken';
    echo "$beer's taste is great <br /> \n";
    $str = <<<EOD
    Example of string
    spanning multiple lines
    using “heredoc” syntax.
    EOD;
    echo $str;
    ?>
  </p>
  <hr>

  <h3>Arrays</h3>
  <?php
  $arr = array("foo" => "bar", 12 => true);
  echo $arr["foo"]; // bar
  echo $arr[12]; // 1
  ?>
  <?php
  array(5 => 43, 32, 56, "b" => 12);
  array(5 => 43, 6 => 32, 7 => 56, "b" => 12);
  ?>
  <?php
  $arr = array(5 => 1, 12 => 2);
  foreach ($arr as $key => $value) {
    echo $key, '=>', $value; 
  }
  $arr[] = 56; // the same as $arr[13] = 56;
  $arr["x"] = 42; // adds a new element
  unset($arr[5]); // removes the element
  unset($arr); // deletes the whole array
  $a = array(1 => 'one', 2 => 'two', 3 => 'three');
  unset($a[2]);
  $b = array_values($a);
  ?>
  <hr>

  <h3>Constants</h3>
  <?php
  // Valid constant names
  define("FOO", "something");
  define("FOO2", "something else");
  define("FOO_BAR", "something more");
  // Invalid constant names (they shouldn’t start
  // with a number!)
  define("2FOO", "something");
  // This is valid, but should be avoided:
  // PHP may one day provide a "magical" constant
  // that will break your script
  define("__FOO__", "something");
  ?>
  <hr>

  <h3>Operators</h3>
  <?php
  $a = "Hello ";
  $b = $a . "World!"; // now $b contains "Hello World!"
  $a = "Hello ";
  $a .= "World!"
  ?>
  <hr>

  <h3>Conditional: if else</h3>
  <?php
  $d=date("D");
  echo $d, "<br/>";
  if ($d=="Fri")
  echo "Have a nice weekend! <br/>";
  else
  echo "Have a nice day! <br/>";
  $x=10;
  if ($x==10)
  {
  echo "Hello<br />";
  echo "Good morning<br />";
  }
  ?>
  <hr>

  <h3>Conditional: switch</h3>
  <?php
  $x = rand(1,5); // random integer
  echo "x = $x <br/><br/>";
  switch ($x)
  {
  case 1:
  echo "Number 1";
  break;
  case 2:
  echo "Number 2";
  break;
  case 3:
  echo "Number 3";
  break;
  default:
  echo "No number between 1 and 3";
  break;
  }
  ?>
  <hr>

  <h3>Looping: while and do-while</h3>
  <?php
    $i=1;
    while($i <= 5) {
      echo "The number is $i <br />";
      $i++;
    }
  ?>
  <hr>
  <?php
    $i=0;
    do {
      $i++;
      echo "The number is $i <br />";
    } while($i <= 10);
  ?>
  <hr>

  <h3>Looping: for and foreach</h3>
  <?php
    for ($i=1; $i<=5; $i++)
    {
      echo "Hello World!<br />";
    }
  ?>
  <hr>
  <?php
    $a_array = array(1, 2, 3, 4);
    foreach ($a_array as $value)
    {
      $value = $value * 2;
      echo "$value <br/> \n";
    }
  ?>
  <hr>
  <?php
    $a_array=array("a","b","c");
    foreach ($a_array as $key => $value)
    {
      echo $key . " = " . $value . "\n";
    }
  ?>
  <hr>

  <h3>User Defined Functions</h3>
  <?php
    function square($num)
    {
      return $num * $num;
    }
    echo square(4);
  ?>
  <hr>
  <?php
    function small_numbers()
    {
      return array (0, 1, 2);
    }
    list ($zero, $one, $two) = small_numbers();
    echo $zero, $one, $two;
  ?>
  <hr>
  <?php
    function takes_array($input)
    {
      echo "$input[0] + $input[1] = ", $input[0]+$input[1];
    }
    takes_array(array(1,2));
  ?>
  <hr>
  
  <h3>Variable Scope</h3>
  <?php
    $a = 1; /* limited variable scope */
    function Test()
    {
      echo $a;
      /* reference to local scope variable */
    }
    Test();
  ?>
  <hr>
  <?php
    $a = 1;
    $b = 2;
    function Sum()
    {
      global $a, $b;
      $b = $a + $b;
    }
    Sum();
    echo $b;
  ?>
  <hr>
  <?php
    function Test1()
    {
      static $a = 0;
      echo $a;
      $a++;
    }
    Test1();
    Test1();
    Test1();
  ?>
  <hr>

  <h3>Including Files</h3>
  <?php
    echo "A $color $fruit"; // A
    include 'vars.php';
    echo "A $color $fruit"; // A green apple
  ?>
  <hr>
  <?php
    function foo()
    {
      global $color;
      include ('vars.php');
      echo "A $color $fruit";
    }
    /* vars.php is in the scope of foo() so *
    * $fruit is NOT available outside of this *
    * scope. $color is because we declared it *
    * as global. */
    foo(); // A green apple
    echo "A $color $fruit"; // A green
  ?>
  <hr>

  <h3>PHP Information</h3>
  <!-- <?php
  phpinfo();
  ?> -->
  <?php
  phpinfo(INFO_GENERAL);
  ?>
  <hr>

  <h3>Server Variables</h3>
  <?php
    echo "Referer: " . $_SERVER["HTTP_REFERER"] . "<br />";
    echo "Browser: " . $_SERVER["HTTP_USER_AGENT"] . "<br />";
    echo "User's IP address: " . $_SERVER["REMOTE_ADDR"];
  ?>
  <?php
    echo "<br/><br/><br/>";
    echo "<h2>All information</h2>";
    foreach ($_SERVER as $key => $value)
    {
      echo $key . " = " . $value . "<br/>";
    }
  ?>
  <hr>

  <h3>File Open</h3>
  <?php
    // $fh=fopen("welcome.txt","r");
  ?>
  <?php
    // if( !($fh=fopen("welcome.txt","r")) )
    //   exit("Unable to open file!");
  ?> 
  <hr>

  <h3>File Workings</h3>
  <?php
    // $myFile = "welcome.txt";
    // if (!($fh=fopen($myFile,'r')))
    // exit("Unable to open file.");
    // while (!feof($fh))
    // {
    // $x=fgetc($fh);
    // echo $x;
    // }
    // fclose($fh);
  ?>
  <hr>

  <h3>Getting Time and Date</h3>
  <?php
  //Prints something like: Monday
  echo date("l");
  //Like: Monday 15th of January 2003 05:51:38 AM
  echo date("l jS \of F Y h:i:s A");
  //Like: Monday the 15th
  echo date("l \\t\h\e jS");
  ?>
  <hr>
  <?php
  $nextWeek = time() + (7 * 24 * 60 * 60);
  // 7 days; 24 hours; 60 mins; 60secs
  echo 'Now: '. date('Y-m-d') ."\n";
  echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
  ?>
  <hr>

</body>

</html>