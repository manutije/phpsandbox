<?php
    #Function: Block of code that can be repeatedly called

    /*
        Camel Case - myFunction()
        Lower Case - my_function()
        Pascal Case - MyFunction() Usually for classes
    */

    //Create Simple Function
    function simpleFunction(){
        echo "<h5> Example of simple function</h5>";
        echo 'Hello World';
        echo "<br>";
    }

    //Run simple function
    simpleFunction();

    //Create function with arguments
    //default option if not argument in the call
    function sayHello($name = 'Default'){
        if($name == 'Default'){
            echo "<h5> Example of complex function with default</h5>";
        }
        else{
            echo "<h5> Example of complex function with name</h5>";
        }
        echo 'Hello'.' '.$name;
        echo "<br>";
    }

    //Run function with a name
    sayHello('Manuel');
    
    //Run function without a name
    sayHello();

    //Return function Example
    function addNumbers($num1,$num2){
        $total = $num1 + $num2;
        return $total;
    }

    //Run and print result
    echo "<h5> Example of return function</h5>";
    echo addNumbers(10,5);
    echo "<br>";

    //Pasing Arguments by reference
    $myNum = 10;

    function addFive(&$num){
        $num +=5;
    }

    //Run and print result
    echo "<h5> Example of Passing Arguments by reference function</h5>";
    echo "Before: $myNum";
    echo "<br>";
    addFive($myNum);
    echo "After: $myNum";
    echo "<br>";


?>
