<?php
    /**
     * This is a simple calculator to divide two numbers to as mentioned number of decimal places
     * 
     * @package ApproxDivision Calculator
     * @author  Abhishek singh
     * @version 1.0
     * 
     * Thank you for watching the code. Happy coding ..........
    */

    $num = mt_rand(1,100);                                  //generate random number for division 
    $divisor = mt_rand(1,100);                              //generate random number for division        
    echo $num.' / '.$divisor.' = ';                         //echoing appropriate message
    function approxDivide($num,$divisor,$count) {           // function definition for appproxDivide
        static $counter = 1;                                //static counter for incrementing to approx decimal count
        $integralPart = (int)($num/$divisor);               // getting the integral part  
        $fractionalPart = $num%$divisor;                    //getting the fractional part
        if($count == 0) {                                   //if count is 0 return decimal point
            echo $integralPart,'.';
        }
        else {                                              //else to not return decimal point
            echo $integralPart;
        }        
        if($counter == 1000)                                //counter to the number of decimal places needed 
            exit(0);                                        //exit(0) to stop script execution
        $num = $fractionalPart*10;                          //picking the remainder and adding decimal point at the back of it
        approxDivide($num,$divisor,$counter++);             //calling the same function with apropriate value as argument
    }
    approxDivide($num,$divisor,0);                          //first call to the function with the actual argument
?>
