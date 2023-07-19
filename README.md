#############################################################################
####--INSTRUCCIONES PARA LA INSTALACION Y PUESTA EN MARCHA DE LA PRUEBA--####
#############################################################################


1 - Tener instalado un servidor y gestor de base de datos (Para hacer este ejercicio 
    utilice XAMPP que me proporciona el servidor Apache y el gestor de base de datos
    MySQL).

2 - Tener inslado composer y laravel

3 - Descargar todo el codigo fuente y ponerlo en la carpeta del servidor

4 - En MySql cree la base de datos "konecta_laravel_bd"

5 - En el archivo ".env" verifique los valores para que se acceda a la base de datos:

    servidor: '127.0.0.1'
    Base de datos: 'konecta_laravel_bd'
    usuario: 'root'
    clave: ''

6 - Este proyecto usa migrate para crear las tablas en la base de datos directamente desde la linea de comando.

Para hacerlo ejecute la linea de comandos desde la carpeta del proyecto o desde el editor de codigo fuente y ejecute la siguiente linea:

'php artisan migrate'

Al hacer lo anterior se crearan las tablas y configuracion.

7 - Acceda al aplicativo desde su navegador en la siguiente direccion

localhost/konecta_laravel/public/productos



Muchas gracias...