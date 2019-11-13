<?php
    function clasificacion($puntos){
        if($puntos >= 56){
            $clas = "REANIMACIÓN";
        }else{
            if($puntos >= 46 && $puntos <= 55){
                $clas = "EMERGENCIA";
            }else{
                if($puntos >= 36 && $puntos <= 45){
                    $clas = "URGENCIA";
                }else{
                    if($puntos >= 26 && $puntos <= 35){
                        $clas = "PRIORITARIO";
                    }else{
                        if($puntos >= 16 && $puntos <= 25){
                            $clas = "NO URGENTE";
                        }
                    }
                }
            }
        }
        return $clas;
    }
?>