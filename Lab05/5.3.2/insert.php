<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head><title>Insert Table - Results</title></head>
    <body>
        <form method="POST" action="insert_table.php">
            <table>
                <tr>
                    <td>Item Description:</td>
                    <td><input type="text" name="description" required></td>
                </tr>
                <tr>
                    <td>Weight:</td>
                    <td><input type="text" name="weight" required></td>
                </tr>
                <tr>
                    <td>Cost:</td>
                    <td><input type="text" name="cost" required></td>
                </tr>
                <tr>
                    <td>Number Available:</td>
                    <td><input type="text" name="available" required></td>
                </tr>
                <tr>
                    <td align="right"><input type="submit" value="Click to Submit"></td>
                    <td align="left"><input type="reset" value="Reset" ></td>
                </tr>
            </table>
        </form>

    </body>
</html>