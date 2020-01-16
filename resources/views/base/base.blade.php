<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>ACME | @yield('title', 'ACME')</title>
    @yield('styles')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">ACME</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('lista_personas')}}">Personas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('lista_vehiculos')}}">Vehiculos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('reporte_vehiculo')}}">Reporte</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')

    @yield('scripts')
</body>

</html>