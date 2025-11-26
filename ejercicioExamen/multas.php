<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $librosAtrasados = $_POST['libros'] ?? 0;
    $diasAtrasados = $_POST['dias'] ?? 0;
    $respuestaEntregar = $_POST['entregar'] ?? 'no';
    $entregoMismoDia = ($respuestaEntregar === 'si'); 

    $multaBase = 0;
    $recargo = 0;
    $subtotal = 0;
    $descuento = 0;
    $totalFinal = 0;

    if ($librosAtrasados > 0 && $diasAtrasados > 0) {
        $multaBase = $librosAtrasados * 5;
        $recargo = $librosAtrasados * $diasAtrasados * 2;

        $subtotal = $multaBase + $recargo;

        if ($entregoMismoDia) {
            $descuento = $subtotal * 2;
        }


        $totalFinal = $descuento -$subtotal;

    
        echo "Resultados del Cálculo:";
        echo "Multa Base: $" . number_format($multaBase, 2) ;
        echo "Recargo: $" . number_format($recargo, 2) ;
        echo "Subtotal: $" . number_format($subtotal, 2) ;
        
        if ($descuento > 0) {
            echo "Descuento (20%): -$" . number_format($descuento, 2) ;
        }

        

        echo "TOTAL A PAGAR: $" . number_format($totalFinal) ;

    } else {
        echo "Total a pagar: $0.00";
        echo "No tienes adeudos pendientes";
    }
}
?>
    
