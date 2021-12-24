<?php
    # $_SERVER SUPERGLOBAL

    //Create Server Array
    $server =[
        'Server Name' => $_SERVER['SERVER_NAME'],
        'Host Header' => $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Current Page' => $_SERVER['PHP_SELF'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
    ];
    //Create Client Array
    $client =[
       'Client_System_Info' => $_SERVER['HTTP_USER_AGENT'],
       'Client_IP' => $_SERVER['REMOTE_ADDR'], 
       'Client_Port' => $_SERVER['REMOTE_PORT']  
    ];
?>