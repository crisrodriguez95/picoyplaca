# picoyplaca
El programa tiene por objetivo retornar si es que la placa ingresada puede circular en una fecha y hora determinada

## Inputs
Los inputs estan dentro de la carpeta Files en el archico input.txt, el orden es placa, fecha, hora.

`PBC-9521;28-06-2021;08:00`

## Output

El output es un mensaje en el que se puede saver si es que el auto puede circular en las condiciones antes señaladas.

`La placa: PBC-9521 no puede circular en esa hora 08:00`

## Reglas
Las placas terminadas en estos numeros no podran circular de (Hours: 7:00am - 9:30am / 16:00pm - 19:30)

Lunes: 1 y 2
Martes: 3 y 4
Miércoles: 5 y 6
Jueves: 7 y 8
Viernes: 9 y 0
#Ejecucion
Para ejecutar primero se debe verificar que exista archivo dentro de la carpeta files luego en el terminar ubicados en la raiz digitar.

`php index.php`

#Test
Para ejecutar el test ejecute el siguiente comando ubicandonos en la raiz del proyecto

`../vendor/bin/phpunit picoyplacaControllerTest.php`

