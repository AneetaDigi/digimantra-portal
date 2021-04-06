<?php 
foreach(array('video', 'audio') as $type) {
    if (isset($_FILES["${type}-blob"])) {
    	//print_r($_FILES);
    
        //echo 'C:/xampp/htdocs/digimantra-portal/wp-content/themes/twenty-twenty-one-child/';
        
        $fileName = $_POST["${type}-filename"];
        $uploadDirectory = $fileName;
        
    

        if (!move_uploaded_file($_FILES["${type}-blob"]["tmp_name"], $uploadDirectory)) {
            echo(" problem moving uploaded file");
        }
    
       
    }
}