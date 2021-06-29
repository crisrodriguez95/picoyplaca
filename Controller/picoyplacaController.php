<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of picoyplacaController
 *
 * @author danyl
 */
class picoyplacaController {
    /*
     * Esta funcion comprueba la existencia del archivo con los inputs
     * Obtiene cada uno de ellos
     */

    public function getInput() {
        $file = 'Files/inputs.txt';

        if (is_file($file)) {
            if (($fp = fopen($file, "r")) !== FALSE) {
                while (($data = fgets($fp, 4096)) !== FALSE) {
                    $this->getParameters($data);
                }
            }
        } else
            print_r('No es un archivo');
    }

    /*
     *
     * Obtiene los parametros para el calculo de las restricciones 
     */

    public function getParameters($data) {
        $array = explode(';', $data);
        $lastDigit = substr($array[0], -1);
        $day = date('D', strtotime($array[1]));

        print_r('La placa: ' . $array[0] . $this->getRestriction($lastDigit, $day, $array[2]) . ' a las ' . $array[2]);
    }
    
    
    /*
     *
     * retorna un String inidicando si es que se puede o no circular
     */
    public function getRestriction($lastDigit, $day, $hour) {
        // print_r( ($hour >  '19:30' && $hour < '07:30'));
        $weekend = ['Sat', 'Sun'];

        if (in_array($day, $weekend))
            return ' puede circular por ser fin de semana';
        else if (($hour > '09:30' && $hour < '16:00') || ($hour > '19:30' && $hour < '07:30') || $hour == '00:00')
            return ' puede circular en esa hora';
        else {
            if ((($lastDigit == 1 || $lastDigit == 2) && $day == 'Mon') ||
                    (($lastDigit == 3 || $lastDigit == 4) && $day == 'Tue') ||
                    (($lastDigit == 5 || $lastDigit == 6) && $day == 'Wed') ||
                    (($lastDigit == 7 || $lastDigit == 8) && $day == 'Thu') ||
                    (($lastDigit == 9 || $lastDigit == 0) && $day == 'Fri')) {
                return ' no puede circular en esa hora';
            }

            return ' puede circular en esa hora';
        }
    }

}
