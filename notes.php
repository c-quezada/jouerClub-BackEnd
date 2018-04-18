*----------VUE.JS----------------------------------------------------------------
Para Vue.js
Neceistamos publicar los contenidos / componentes del framework para utiizar VUE.js
este es un framework para el frontend en donde su gestor de dependencias es npm - node

Como primer punto debemos ejecutar;
php artisan vendor:publish --tag=passport-components

Como resultado encontraremos otra carpeta dentro de resources (resources/assets)
en donde estaran los componentes vue.js para la administracion de tokens

Ahora, se debe incorporar las series de dependencias para que esto funcione, es por ello que se ejecuta el comando:
npm install (este comando recae en package.json)

para verificar que esto se realizo satisfactoriamente, en la carpeta de nuestro proyecto debemos
encontrar a capeta node_modules. (este paquete es ignorado por git, en el archivo .gitignore)

Una vez que las dependencias estan instaladas, debemos compilar el proyecto (vistas y componentes).
npm run dev
Debemos repetir el proceso cada vez que se modifique una vista o componente

*----------COMPONENTE PERSONAL TOKEN---------------------------------------------
Para registrar un nuevo compoente, esto lo debemos realizar en el app.js
resources/assets/js/app.js

Vue.component(
 'nombre del componente',
 require('ruta-del-componente'));

Actua como una etiqueta HTML

1.- Registrar la ruta
2.- Implementar el metodo en el controlador especifico, en este caso HomeController
3.- Generar la vista

MVC

En la vista, utilizamos el componente como:

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <passport-authorized-clients></passport-authorized-clients>
        </div>
    </div>
</div>
@endsection

php artisan passport:client --personal

El access token personal nunca expira*

*----------COMPONENTE CLIENTES---------------------------------------------------

Visualizar los clientes que son propiedad del usuario que esta autentificado en ese momento
Validar los clientes que el usuario a autorizado

*----------Grant Type------------------------------------------------------------
Con el cliente registrado, solicitamos un codigo de autorizacion para luego obtener el access token
Realizar esto con la sesion de usuario activa

jouerclub.dev/oauth/authorize?client_id=id&redirect_uri=http://localhost&response_type=code

El codigo retornado codificado, por lo que tenemos que decodificar el codigo.

http://localhost/?code=def50200bf1036ef165bc223a161d3f8ee76e8c611d6df2ea522d4cd3fc7bf26c0cab0f915dedc7a50dc41da750206b072d6e77f37a9e6895874d08968143ade3abc30c73916a1a177c8cca3b0dd692c7ad846ec3c3b2847084e2f03f87f2d0325182619476387223849872678d46a3a18bea44044b9090faf7306464f92a67595f3bdf2e518a211b150a60e2682554495f1b4b223cc239428bc6e498a2a23abd9822295f70c4fea7e69d2ccc59bd45e1f6de2fd4ee39cd4fdb04911ad29735e0dbc19a8e69443bd4ed5aa2ce9c2fcc4bf9861924dc4a1fe811a1c4d250bfa3163847e6a1958c5b72373fb4b709eb7daffa942d70d70f054fd1b756893991af709df2e27d4758f34d12fcd253541d21a18f64411c195b5a286047cb79d02b0da7bdb3d47a12300a05eb172deeef1ca0db0a74f945597f5948b21183e3e5f78a4319a90c7a0f773013b8f6ab2558fd56bbb

*----------Grant Type Implicito--------------------------------------------------
Se utiliza cuando el cliente no puede almacenar sus credenciales, ejemplo, app moviles
Se tiene que registrar en el AuthServiceProvider:

  Passport::enableImplicitGrant();

Con ello, podemos solicitar access token de manera inmediata, sin pasar la password ni un usuario asociado

jouerclub.dev/oauth/authorize?client_id=id&redirect_uri=http://localhost&response_type=token
Non retorna el refreshToken. Se deberia solicitar acceso

*----------Refresh Token---------------------------------------------------------
Sirve para solicitar un nuevo access token, cuando ya este se encuentre expirado
grant_type - refresh_token

*----------Scopes----------------------------------------------------------------
Permisos que se le asignara a un cliente. [tokensCan]
