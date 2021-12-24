<?php
    #Function: Block of code that can be repeatedly called

    /*
        Camel Case - myFunction()
        Lower Case - my_function()
        Pascal Case - MyFunction() Usually for classes
    */

    //Create Simple Function
    function simpleFunction(){
        echo 'Hello World';
    }

    //Run simple function
    simpleFunction();

    //Create function with arguments
    function sayHello($name){
        echo 'Hello'.' '.$name;
    }

    //Run function with a name
    sayHello('Manuel');

?>
