<?php
    header("Location: food.php");
    print_r($_POST);
    include_once("connection.php");
    

    
    $stmt1 = $conn->prepare("INSERT INTO tblfood
    (FoodID, Name, Description, Category, Price)
    VALUES
    (NULL,:FoodID, :Name, :Description, :Category, :Price)
    "); 
    $stmt1->bindParam(":FoodID", $_POST["FoodID"]);
    $stmt1->bindParam(":Name", $_POST["Name"]);
    $stmt1->bindParam(":Description", $_POST["Description"]);
    $stmt1->bindParam(":Category", $_POST["Category"]);
    $stmt1->bindParam(":Price", $_POST["Price"]);
   
    

    $stmt1->execute();
?>
