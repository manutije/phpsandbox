<?php
    //=================================================================
    //DATES

    echo "<h5> Impresion del dia </h5>";
    echo date('d'); //Day
    echo "<h5> Impresion del mes </h5>";
    echo date('m'); //Month
    echo "<h5> Impresion del anio </h5>";
    echo date('Y'); //Year
    echo "<h5> Impresion del dia de la semana</h5>";
    echo date('l'); //Day of the week

    echo "<h5> Impresion de la fecha de hoy con formato 1</h5>";
    echo date('Y/m/d');
    echo "<h5> Impresion de la fecha de hoy con formato 2</h5>";
    echo date('d-m-Y');

    //=================================================================
    //TIME
    echo "<h5> Impresion de la hora </h5>";
    echo date('h'); //Hour
    echo "<h5> Impresion del minuto </h5>";
    echo date('i'); //Minutes
    echo "<h5> Impresion del segundo </h5>";
    echo date('s'); //Seconds
    echo "<h5> Impresion AM/PM </h5>";
    echo date('a'); //AM/PM

    //Set Timezone
    date_default_timezone_set('America/Mexico_City');

    echo "<h5> Impresion hora en Mexico </h5>";
    echo date('h:i:s a');

    //=================================================================
    //TIMESTAMPS

    //Create a timestamp (Horas,minutos,segundos, mes, dia, anio)
    $timestamp = mktime(12,5,0,4,21,1998);
    echo "<h5> Impresion TimeStamp 1 (Fecha de cumpleanos)</h5>";
    echo date('d/m/Y h:i:s a',$timestamp);

    //Create a timestamp from a string
    $timestamp2 =strtotime('3:00am December 23 2021');
    echo "<h5> Impresion TimeStamp 2 (3 am de 23/12/2021)</h5>";
    echo date('d/m/Y h:i:s a',$timestamp2);

    $timestamp3 =strtotime('tomorrow');
    echo "<h5> Impresion TimeStamp 3 (manana)</h5>";
    echo date('d/m/Y h:i:s a',$timestamp3);

    $timestamp4 =strtotime('next tuesday');
    echo "<h5> Impresion TimeStamp 4 (Proximo martes)</h5>";
    echo date('d/m/Y h:i:s a',$timestamp3);

    $timestamp5 =strtotime('+2 Months');
    echo "<h5> Impresion TimeStamp 5 (En dos meses)</h5>";
    echo date('d/m/Y h:i:s a',$timestamp3);

    //=================================================================


?>