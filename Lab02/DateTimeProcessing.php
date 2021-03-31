<html><head><title>Date Time Processing</title></head>
    <body><font size="4" color="black">
        Enter your name and select date and time for the appointment </font>
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <?php
            if(array_key_exists("day", $_GET)){
                $day =$_GET["day"];
                $month =$_GET["month"];
                $year =$_GET["year"];
                $hour =$_GET["hour"];
                $minute =$_GET["minute"];
                $second =$_GET["second"];
                $yourname =$_GET["yourname"];
            } else {
                $day = 1;
                $month = 1;
                $year = 1;
                $hour = 0;
                $minute = 0;
                $second = 0;
                $yourname = "";
            }
            ?>
            Your name: <input type="text" size="16" maxlength="50" name="yourname" value="<?php echo $yourname?>">
            <br></br>
            <table>
                <tr>
                    <td>Date: </td>
                    <td><select name="day">
                            <?php
                            for ($i=1; $i<=31; $i++){
                                if($day==$i){
                                    print ("<option selected>$i</option>");
                                }
                                else{
                                    print ("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                        <select name="month">
                            <?php
                            for ($i=1; $i<=12; $i++){
                                if($month==$i){
                                    print ("<option selected>$i</option>");
                                }
                                else{
                                    print ("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                        <select name="year">
                            <?php
                            for ($i=1; $i<=9999; $i++){
                                if($year==$i){
                                    print ("<option selected>$i</option>");
                                }
                                else{
                                    print ("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Time: </td>
                    <td><select name="hour">
                            <?php
                            for ($i=0; $i<24; $i++){
                                if($hour==$i){
                                    print ("<option selected>$i</option>");
                                }
                                else{
                                    print ("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                        <select name="minute">
                            <?php
                            for ($i=0; $i<60; $i++){
                                if($minute==$i){
                                    print ("<option selected>$i</option>");
                                }
                                else{
                                    print ("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                        <select name="second">
                            <?php
                            for ($i=0; $i<60; $i++){
                                if($second==$i){
                                    print ("<option selected>$i</option>");
                                }
                                else{
                                    print ("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right"> <input type="submit" value="Submit"></td>
                    <td align="left"> <input type="reset" value="Reset"></td>
                </tr>
            </table>
            <table>
                <?php
                if(array_key_exists("day", $_GET)){
                    print("Hi $yourname!<br>");
                    print("You have choose to have an appointment on $hour:$minute:$second, $day/$month/$year<br></br>");
                    print("More information<br></br>");
                    if($hour>12){
                        $hour-=12;
                        $m = "PM";
                    } elseif($hour == 12){
                        $m = "PM";
                    } else{
                        $m = "AM";
                    }
                    print("In 12 hours, the time and date is $hour:$minute:$second $m, $day/$month/$year<br></br>");
                    if($month==1||$month==3||$month==5||$month==7||$month==8||$month==10||$month==12){
                        $daynumber=31;
                    } elseif($month==4||$month==6||$month==9||$month==11){
                        $daynumber=30;
                    } else{
                        if($year % 4==0){
                            if($year % 100 == 0){
                                if ($year %400 == 0){
                                $daynumber = 29;
                                }
                                else {
                                    $daynumber = 28;
                                }
                            }
                            else {
                                $daynumber = 29;
                            }
                        }
                        else{
                            $daynumber=28;
                        }
                    }
                    print("This month has $daynumber days!");
                }
                ?>
            </table>
        </form>
    </body>
</html>
    