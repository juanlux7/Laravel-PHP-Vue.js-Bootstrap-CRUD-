<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Laravel-PHP-Vue.js-Bootstrap-CRUD (Explicacion del proyecto - Description of the project)

(Español)
Este es un proyecto creado mediante el framework PHP Laravel (5.6) y el uso de la libreria JavaScript Vue.js, ademas del framework HTML bootstrap 4.0 para maquetacion (grid) y uso de componentes. El proyecto consiste en una aplicacion simple de tareas, almacenadas en una Base de datos SQL (configurando el archivo .env en Laravel y creando el Schema en phpmyadmin), y gestionando las vistas mediante la herencia de plantillas blade de Laravel (uso de un template master y otro para desplegar tareas), ademas de la creacion de un componente Vue para realizar el CRUD de dichas tareas (mostrarlas, crearlas, borrarlas y editarlas).

Desde Laravel se han declarado rutas api que apuntan a un controller y a un metodo en especifico, el controller es de tipo resource y posee los metodos básicos de un CRUD. Desde Vue se ha realizado una conexion HTTP a las rutas api de laravel mediante el modulo AXIOS, posteriormente se han gestionado las respuestas mediante promises. Ademas se ha hecho uso de lifecycle-hooks para listar las tareas una vez este iniciado el componente. 

Las tareas se pueden colocar como pendientes (en rojo) o como completadas (en verde) simplemente haciendo click en ellas

![alt text](https://user-images.githubusercontent.com/40801686/42422225-6006ff2c-82e2-11e8-8e91-1004b95a5bc2.png)

------------------------------------------------------------------------------------------------------------------------------


(English)
This is a project created with the PHP framework Laravel (5.6) and the Vue Javascript library, as well as the bootstrap 4 HTML framework for the grid and the basic components. The project consists in a simple task app, stored in a SQL database (through .env config file and creating a schema in phpmyadmin), and managing the views with template hierarchy thanks to blade (using a master layout and another for displaying the tasks), also i have used a Vue component to perform the CRUD operations (basically, show, create delete and update them).

From Laravel I have declared some api routes that point to an controller and a specific method inside of it, that controller is a resource controller and it has the necessary methods of a CRUD. From vue I have done a HTTP connection to those api routes via AXIOS module, and after that i have managed the responses with promises. Also there is a lifecycle-hook included for listing the tasks once the component is initialized.

You can change the tasks as pending (representated with red color) or as completed (representated with green color) just by clicking on them.

# Instrucciones de instalacion - steps for installation

(Español)

1. Una vez que clones el repositorio y obtengas el proyecto, es necesario instalar las dependencias de Laravel (la carpeta vendor) mediante el comando composer install

2. Ademas es necesario generar un nuevo archivo .env a partir del .env.example mediante el comando cp .env.example .env y seguidamente colocar los valores de conexion a nuestra base de datos (la cual habra que tener creada)

3. el este paso se debe generar una nueva key para la aplicacion con el comando php artisan generate:key

4. asimismo, es necesario instalar las dependencias js con el comando npm install en la raiz del proyecto

5. por ultimo, solo queda levantar el servidor con php artisan serve

------------------------------------------------------------------------------------------------------------------------------

(English)

1. Once you clone the repository on your PC, it's necessary to install the Laravel dependencies with the command composer install (make sure you have composer installed on your machine).

2. Also it's required to generate a new .env file by cloning the existing .env.example with the command cp .env.example .env and then put all the connection parameters to our local database (You must have a database or schema created)

3. on this step you have to generate a new app key with the command php artisan generate:key in order to start the project

4. At the same time, it is required to install the js dependencies with npm install in the root of the project

5. finally you can start the local server with the command php artisan serve
