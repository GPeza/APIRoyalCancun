<?php
    include_once 'ApiRoyalCancun.php';

    $api = new ApiRoyalCancun();

    $api->getOcupiedDates(0,'2021-05-10');
    
?>