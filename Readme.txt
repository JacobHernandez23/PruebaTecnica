Prueba Crud

una disculpa por la tardanza yo se que no es relevante, y es que primero realice el crud sin usar ajax pensando que adaptarlo seria facil pero no cambia totalmente

gracias por su atencion

ejecutar estos comandos para ver la pagina:

//cambia de nombre el archivo .env
mv .env.example .env

// regenerar la clave de la aplicación,
php artisan key:generate
php artisan cache:clear 

//configurar la bd el archivo env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=


//agregar las tablas
php artisan migrate 


//usar servidor de laravel para ver la pagina
php artisan serve

si los comandos no sirven descargar el zip