<!DOCTYPE html>
<html>
<head>
  <title>Mini Calculator</title>
</head>
<body>

<h3>Mini Calculator Using OOP PHP</h3>
  <form action="calc.php" method="POST">

    <input type="text" name ="first_number" placeholder="First Number" />
    <br><br>
    <input type="text" name="second_number" placeholder="Second Number" />
    <br><br>

    <select name="operation">
      <option value="add">Add </option>
      <option value="substract">Subtract </option>
      <option value="multiply">Multiply </option>
      <option value="divide">Divide </option>
    </select>

    <button type="submit">Calculate</button>

  </form>


  </body>

  </html>
