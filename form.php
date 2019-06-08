<?php 

require('dbc.php');
if(isset($_POST['addname'])){
  
    $addname = htmlspecialchars($_POST['addname']);
   // echo "from php: " . $addname;

   try{
        $insert = "INSERT INTO example (`name`) VALUES (?)";

        $stmt = $dbc->prepare($insert)->execute([$addname]);

        if($stmt){
            echo "Inserted";
        }
 
     }catch(PDOException $e) {
         echo "Failure: Insert Name: " . $e->getMessage();
     }
 
}
?>