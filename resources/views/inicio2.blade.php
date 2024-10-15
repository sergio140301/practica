<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/js/app.js'])

{{-- <style>
    /* Row */
.container .row .row{
 padding-right:284px;
 width:284px;
}

@media (min-width:768px){

 /* Column 6/12 */
 .container .container .row .col-md-6{
  width:25% !important;
 }
 
}
</style> --}}

    <title>Inicio</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                @include('menu2')
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>BIENVENIDO AL SISTEMA, <br>
                        INCIASTE SESION CORRECTAMENTE</br></h1>
                </div>
            </div>
 
            <div class="row">
                <div class="col">
                    @yield('contenido4000')
                </div>
            </div> 

            <div class="row">
                <div class="col-md-6"> <!-- Columna para contenido2 -->
                    @yield('contenido2')
                </div>
                {{-- <div class="col-md-6"> <!-- Columna para contenido3000 -->
                    @yield('contenido3000')
                </div>
            </div> --}}

            <div class="row">
                <div class="col">
                    @yield('contenido1')
                </div>
            </div>

            <div class="row">
                <div class="col">
                    @include('piedepagina2')
                </div>
            </div>
        </div>
    </div>

</body>

</html>
