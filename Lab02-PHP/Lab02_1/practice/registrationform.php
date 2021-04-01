<!DOCTYPE html>
<html>
  <head><title>Register Form</title></head>
  <body>
    <form action="Form4Radio.php" method="POST">
      Register Form
      <table>
        <tr>
          <td>Name: </td>
          <td><input type="text" placeholder="Enter your name" name="name" required></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input type="email" placeholder="Enter your email" name="email" required></td>
        </tr>
        <tr>
          <td>Birthday: </td>
          <td><input type="date" name="date" required></td>
        </tr>
        <tr>
          <td>Gender: </td>
          <td>
            <input type="radio" name="gender" value="Male" checked>
            <input type="radio" name="gender" value="Female">
          </td>
        </tr>
        <tr>
          <td>Job: </td>
          <td>
            <label><input type="checkbox" value="front-end" name="group-improve">Front-end</label>
            <label><input type="checkbox" value="back-end" name="group-improve">Back-end</label>
            <label><input type="checkbox" value="data" name="group-improve">Data Sciencetist</label>
          </td>
        </tr>          
      <table>
     
      May we contact you?
      <input type="radio" name="contact" value="Yes" checked>
      <input type="radio" name="contact" value="No">
      <br>
      <br>
      <input type="submit" value="Click to submit">
      <input type="reset" value="Erase and Restart">
      
    </form>
  </body>
</html>