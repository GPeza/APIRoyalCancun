<?php

include_once 'RoyalCancun.php';

class ApiRoyalCancun{


    function getOcupiedDates($idReservation, $date){
        $RoyalCancun = new RoyalCancun();
        $peliculas = array();
        $peliculas["startDate"] = array();

        $res = $RoyalCancun->getOcupiedDates($idReservation, $date);

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "message" => $row['message'],
                    "startDate" => $row['startDate'],
                    "endDate" => $row['endDate'],
                );
                array_push($getOcupiedDates["items"], $item);
            }
        
            echo json_encode($getOcupiedDates);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
}

?>