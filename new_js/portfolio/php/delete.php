<?php
   /*  include_once"sql_code.php" */
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form_box" 
    style ="box-shadow:black 2px 2px 10px;
      width:25%;
      height:25vh; margin: auto;
      text-align:center;
      padding:40px;
      margin-top:2%;
      background-color:white;"
        >


        <?php
         if($_GET['id']){       //This is to get the userid from "url" sent from "index.php".
            $id = $_GET['id'];}

         ?>
        
        <form action="sql_code.php" method ="post">
            <input type="hidden" name="id" value ="<?php echo $id;?>"> <!-- so that the id is passed to "sql_code.php" to delete the specific data row. -->
            
            <label style="border-bottom:2px solid black;color:black;display:block; padding:10px; " ><b>ARE YOU SURE YOU WANT TO DELETE</b></label><br><br>
            
            <input style="padding: 10px 30px; margin-right:20px; margin-top:20%;background-color:red; border-radius:10px;color:white;" type="submit" name="yes_delete" value="YES">
            
            <input style="padding: 10px 30px;margin-left:20px; background-color:green; border-radius:10px; color:white;" type="submit" name="no_delete" value="NO">
        </form>
    </div>
    
</body>
</html>