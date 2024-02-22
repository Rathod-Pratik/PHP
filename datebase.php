<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <style>
      .containar{
        background-color: #dbdbf0;
        border: 2px solid black;
        display: block;
        margin: auto;
        width: 31%;
        height: 350px;
      }
      #forms{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin: 50px 24px;
      }      

        input{
            height: 28px;
            width: 310px;
        }
        .btns input{
            width: 80px;
            margin: 26px 10px;
        }
</style>
</head>
<body>
    
  <div class="containar">
      <form action="/PHP/PHP/.database.php" id="forms">
        <h2>Login now</h2>
        <label for="email">Email</label>
        <input type="email" name="email" >

        <label for="pass">Password</label>
        <input type="password" name="pass">

        <div class="btns">
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
</div>
    </form>
  </div>
</body>
</html>