<?php
    if(isset($_REQUEST["name"])|| isset($_POST["age"])){
        echo "hi " . $_REQUEST['name'] . "<br/>";
        echo "Your age is " . $_REQUEST['age'] . "years";
        exit();
    }
?>
<html>
    <body>
          <form action="<?php $_PHP_SELF ?>" method = "GET">
            Name: <input type="text" name="name" />
            Age: <input type="text" name="age" />
            <input type="submit" />
        </form>
          
     </body>

</html>

