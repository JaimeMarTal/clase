<?php
function pintarCheckbox($nom, $arrayValueLabel, $seleccionados){
    $html='';
    
    foreach ($arrayValueLabel as $value => $label){
        //aqui se usa in_array porque los checkbox pueden seleccionar varios entionces tenemos que buscar dentro d eun array y comparar si est� ah�
        //los select pasa lo mismo
        //En el otro se usa simplemente == porque solo hya que compararlo con uno
        
        $selected = in_array($value, $seleccionados) ? 'selected="selected"' : '';
        //Aqu�i va todo el c�digo html para puntarlo con las opciones que le pasemos
    }
    
}

?>