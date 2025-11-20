<!DOCTYPE HTML>
<html>
    <head>
        <title>Add food</title>
    </head>

    <body>
       <form action="addfood.php" method="post">
            <label for="category">Choose a category:</label>
            <select name="category" id="category">
                <option value="sandwich">Sandwich</option>
                <option value="drink">Drink</option>
                <option value="snack">Snack</option>
                
            </select>
            <br>
            Name: <input type="text" name ="name"><br>
            Description: <input type="text" name ="description"><br>
            Price: <input type="number" name ="price"><br>
            <input type="submit" value="Submit">

       
       </form>

       <?php
            include_once("connection.php");
            $stmt1= $conn->prepare("SELECT * FROM tblfood");
            $stmt1->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            //print_r($row);
            echo($row["name"]." ".$row["description"]." ".$row["price"]);
            echo("<br>");
        }
            
        
        
        ?>
    
    
    </body>
</html>
