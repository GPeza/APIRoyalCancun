<?php
    include_once 'ApiRoyalCancun.php';

    $api = new ApiRoyalCancun();

    $api->getOcupiedDates(0,'01-05-2021');
    
?>