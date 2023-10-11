<?php
$n = 4;
$n = 0;
try{
    if($n <= 0){
        throw new Exception("Enter the valid number.");
    }
    $div = 2 / $n;
    echo $div;
}catch(Exception $ms) {
    echo $ms->getMessage();
}

// MyException: // 
class MyException extends Exception{
    function errorMessage(){
        $error = "My Exception Message : " . $this->getMessage() . 
                "<br> Error on line no. :" . $this->getLine();
        return $error;
    }
}
function fun($n){
    try{
        if($n <= 0){
            throw new Exception("<br>Enter the valid number.");
        }
        if($n == 3){
            throw new MyException("<br>Number is 3.");
        }
        $div = 2 / $n;
        echo "<br>".$div;
    }catch(Exception $ms) {
        echo $ms->getMessage();
        // echo $ms->getLine();
        // echo $ms->getCode();
        // echo $ms->getFile();
    }catch(MyException $my) {
        echo $my->errorMessage();
    }
    finally{
        echo ",Finally";
    }
}
fun(2);
fun(0);
fun(4);
fun(3);
?>