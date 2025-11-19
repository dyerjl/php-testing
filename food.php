Make a Food table...
Use these fields
FoodID, Name, Description, Category (drink, snack, sandwich), price

Make a form to input food (drop down list for Category... look it up!)
Add food to database
Show current foods on this page as per users page.

<!DOCTYPE HTML>
<html>
    <head>
        <title>Add food</title>
    </head>

    <body>
       <form action="addfood.php" method="post">
            <label for="Category">Choose a category:</label>
            <select name="Category" id="Category">
                <option value="Sandwich">Sandwich</option>
                <option value="Drink">Drink</option>
                <option value="Snack">Snack</option>
                
            </select>
            <br>
            Name: <input type="text" name ="Name"><br>
            Description: <input type="text" name ="Description"><br>
            Price: <input type="number" name ="Price"><br>
            <input type="submit" value="Submit">

       
       </form>

       <?php
            include_once("connection.php");
            $stmt1= $conn->prepare("SELECT * FROM tblfood");
            $stmt1->execute();
            
        
        
        ?>
    
    
    </body>
</html>
