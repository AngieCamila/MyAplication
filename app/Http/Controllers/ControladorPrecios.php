<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPrecios extends Controller
{
    public function precio($total){

        $precioTotal = 0;
        $descuento1 = 0.2;
        $descuento2 = 0.3;
        $descuento3 = 0.4;
        $descuento4 = 0.5;
        if($total > 0){
            if(is_numeric($total)){
                if($total >= 100000 && $total <= 150000){
                    $precioTotal = $total * $descuento1;

                    return 'El descuento del producto es del 2%, y el total a
                    pagar es: $'.$precioTotal;
                }
                elseif($total > 150000 && $total <= 300000){
                    $precioTotal = $total * $descuento2;

                    return 'El descuento del producto es del 3%, y el total a
                    pagar es: $'.$precioTotal;
                }
                elseif($total >= 300000 && $total <= 500000){
                    $precioTotal = $total * $descuento3;

                    return 'El descuento del producto es del 4%, y el total a
                    pagar es: $'.$precioTotal;
                }
                elseif($total >= 500000){
                    $precioTotal = $total * $descuento3;

                    return 'El descuento del producto es del 5%, y el total a
                    pagar es: $'.$precioTotal;
                }
                else{
                    echo 'No hay descuento';
                }
            }
            else{
                echo 'El valor ingresado es incorrecto. Inténtelo nuevamente”.';
            }

        }
        else{
            echo 'El valor ingresado es incorrecto. Inténtelo nuevamente”.';
        }
    }

    public function getIVA($Nombre, $precio){
        $IVA = 1.19;
        $psinIva = 0;
        $precioTotal = 0;
        $precioTotal = $precio * $IVA;
        $psinIva = $precioTotal - $precio;

        return 'El artículo '.$Nombre.' sin IVA cuesta $'.$precio.' y el precio del IVA es de $'.$psinIva.'. El
        total a pagar por el artículo es de $'.$precioTotal;
    }
}
