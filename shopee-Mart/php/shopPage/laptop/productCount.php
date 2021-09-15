<?php 
    
    $sqlquery="SELECT * FROM product WHERE type='laptop'";

    try{
        $conn = new PDO("mysql:host=localhost;dbname=shopeemart;","root","");
        // echo "$sqlquery";
        $object=$conn->query($sqlquery);

        if($object->rowCount() == 0)
        {
            echo "<p>Showing 0 result</p>";
        }
        else
        {
            $nrow = $object->rowCount();
            if($nrow == 1)
            {
                echo "<p>Showing $nrow result</p>";
            }
            else
            {
                echo "<p>Showing $nrow results</p>";
            }
        }
    }
    catch(PDOException $err)
    {
        echo "<script>window.alert('db connection error');</script>";
        echo "<script>location.assign('../../shop.php');</script>";
    }

    
?>