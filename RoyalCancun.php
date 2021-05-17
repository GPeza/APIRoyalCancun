<?php

include_once 'db.php';

class Pelicula extends DB{
    
    function getOcupiedDates($idReservation, $date){
        $query = $this->connect()->query('CALL u434370356_royal_cancun.getOcupiedDates($idReservation,"$date");');
        return $query;
    }

}

?>