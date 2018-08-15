<?php
if(isset($_POST['myfile'])){
    $check = getimagesize($_FILES["myfile"]["tmp_name"]);
    if($check !== false){
        $myfile = $_FILES['myfile']['tmp_name'];
        $imgContent = addslashes(file_get_contents($myfile));

        /*
         * Insert myfile data into database
         */

        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'wishheart';

        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }



        //Insert myfile content into database
        $insert = $db->query("INSERT into image VALUES ('$imgContent')");
        if($insert){
            echo "File uploaded successfully.";
            header("location:view.php");
        }else{
            echo "File upload failed, please try again.";
        }
    }else{
        echo "Please select an myfile file to upload.";
    }
}
?>

