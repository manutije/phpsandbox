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
        echo "<h5> Example of complex function</h5>";
        echo 'Hello'.' '.$name;
        echo "<br>";
    }

    //Run function with a name
    sayHello('Manuel');
    
    //Run function without a name
    sayHello();

?>
