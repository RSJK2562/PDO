<?php
if(!empty($_POST['delimg'])){
    if(unlink($_POST['delimg'])){
        echo 'Image Delete';
    }
}
?>