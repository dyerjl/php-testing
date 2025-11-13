<!DOCTYPE HTML>
<html>
    <head>
        <title>Add users</title>
    </head>

    <body>
       <form action="adduser.php">
        Surname: <input type="text" name ="surname"><br>
        Forename: <input type="text" name ="forename"><br>
        Passowrd: <input type="text" name ="password"><br>
        Year: <input type="number" name ="year"><br>
        Initial Balance: <input type="number" name ="balance"><br>
        Role:
        <input type="radio" name ="role" value="pupil" checked><br>
        <input type="radio" name ="role" value="admin">Admin<br>
        <input type="submit" value="Add user"><br>
       </form>
    </body>
</html>
