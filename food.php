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
       <form method="post">
            <label for="sandwich">Choose a sandwich:</label>
            <select name="sandwich" id="sandwich">
                <option value="Ham">Ham</option>
                <option value="Cheese">Cheese</option>
                <option value="Mayo">Mayo</option>
                
            </select>
            <input type="submit" value="Submit">

       </form>
       <form method="post">
            <label for="snack">Choose a snack:</label>
            <select name="snack" id="snack">
                <option value="KitKat">KitKat</option>
                <option value="Walkers">Walkers</option>
                <option value="Snickers">Snickers</option>
                
            </select>
            <input type="submit" value="Submit">

       </form>
       <form method="post">
            <label for="drink">Choose a drink:</label>
            <select name="drink" id="drink">
                <option value="Coke">Coke</option>
                <option value="Water">Water</option>
                <option value="Huel">Huel</option>
                
            </select>
            <input type="submit" value="Submit">

       </form>

       <?php
            include_once("connection.php");
            $stmt1= $conn->prepare("SELECT * FROM tblfood");
            $stmt1->execute();
            while($row = $stmt1->fetch(PDO::FETCH_ASSOC))
            {
                echo($row["Forename"]." ".$row["Surname"]."<br>");
            }
        
        
        ?>
    
    
    </body>
</html>
