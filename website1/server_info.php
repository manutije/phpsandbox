<?php
    # $_SERVER SUPERGLOBAL

    //Create Server Array
    $server =[
        'Server_Name' => $_SERVER['SERVER_NAME'],
        'Host_Header' => $_SERVER['HTTP_HOST'],
        'Server_Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document_Root' => $_SERVER['DOCUMENT_ROOT'],
        'Current_Page' => $_SERVER['PHP_SELF'],
        'Script_Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute_Path' => $_SERVER['SCRIPT_FILENAME']
    ];
    
    //Create Client Array
    $client =[
       'Client_System_Info' => $_SERVER['HTTP_USER_AGENT'],
       'Client_IP' => $_SERVER['REMOTE_ADDR'], 
       'Client_Port' => $_SERVER['REMOTE_PORT']  
    ];
?>