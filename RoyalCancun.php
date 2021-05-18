<?php

include_once 'db.php';

class RoyalCancun extends DB{
    
    function getOcupiedDates($idReservation, $startDate){
        $query = $this->connect()->query('CALL u434370356_royal_cancun.getOcupiedDates('.$idReservation.','.$startDate.');');
        return $query;
    }

}

?>