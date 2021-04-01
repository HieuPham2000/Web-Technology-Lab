<html>
    <head><title> Receiving Input </title></head>
    <body>
        <font size=5>Thank you: Got Your Input.</font>
        <?php
        if ($_POST["fullname"]!="")
        {
            $fullname = $_POST["fullname"];
            print ("<br>Your full name is $fullname");
        }
        if ($_POST["dateofbirth"]!="")
        {
            $dateofbirth = $_POST["dateofbirth"];
            print ("<br>Your date of birth is $dateofbirth");
        }
        if ($_POST["gender"]!="")
        {
            $gender = $_POST["gender"];
            print ("<br>Your gender is $gender");
        }
        if ($_POST["mobilephonenumber"]!="")
        {
            $mobilephonenumber = $_POST["mobilephonenumber"];
            print ("<br>Your mobile phone number is $mobilephonenumber");
        }
        if ($_POST["emailaddress"]!="")
        {
            $emailaddress = $_POST["emailaddress"];
            print ("<br>Your email address is $emailaddress");
        }
        if ($_POST["educationprocess"]!="")
        {
            $educationprocess = $_POST["educationprocess"];
            print ("<br>Your education process is $educationprocess");
        }
        if ($_POST["class"]!="")
        {
            $class = $_POST["class"];
            print ("<br>Your class is $class");
        }
        if ($_POST["village"]!="")
        {
            $village = $_POST["village"];
            print ("<br>Your village is $village");
        }
        if ($_POST["living"]!="")
        {
            $living = $_POST["living"];
            print ("<br>Your living is $living");
        }
        print ("<br>Your hobby is ");
        if (isset($_POST["hobby1"]))
        {
            $hobby1 = $_POST["hobby1"];
            print("$hobby1");
        }
        if (isset($_POST["hobby2"]))
        {
            $hobby2 = $_POST["hobby2"];
            print("$hobby2");
        }
        if (isset($_POST["hobby3"]))
        {
            $hobby3 = $_POST["hobby3"];
            print("$hobby3");
        }
        if (isset($_POST["hobby4"]))
        {
            $hobby4 = $_POST["hobby4"];
            print("$hobby4");
        }
        if (isset($_POST["hobby5"]))
        {
            $hobby5 = $_POST["hobby5"];
            print("$hobby5");
        }
        if (isset($_POST["hobby6"]))
        {
            $hobby6 = $_POST["hobby6"];
            print("$hobby6");
        }
        if (isset($_POST["hobby7"]))
        {
            $hobby7 = $_POST["hobby7"];
            print("$hobby7");
        }
        $hobby = $_POST["hobby"];
        print("$hobby");
        
        ?>
    </body>
</html>