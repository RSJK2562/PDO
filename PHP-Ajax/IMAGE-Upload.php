<?php
if($_FILES['file']['name'] != ''){
    
    $filename = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];

    $extension = pathinfo($filename,PATHINFO_EXTENSION);
    $valid_extension = array("jpg","jpeg","png","gif");

    if(in_array($extension, $valid_extension)){
        $new_name = rand() . "." . $extension;
        $path = "IMAGE-Upload/" .$new_name;

        if(move_uploaded_file($tmp_name, $path)){
            echo '<img class="card-img-top h-25" src="'.$path.'"> <br> <button class="btn btn-info w-100" id="delete_btn" data-dlt="'.$path.'">Remove</button>';
        } 
        
    } else {
        echo '<script>alert("Invalid File Format.")</script>';
    }

} else{
    echo '<script>alert("Please Select File!")</script>';
}

?>