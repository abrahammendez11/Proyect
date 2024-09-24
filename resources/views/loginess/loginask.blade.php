<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
    {{-- <!-- <link rel="stylesheet" href="{{ asset('css/auth.css') }}"> --> --}}
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">

    <title>Inicio de sesion Alumnos</title>


</head>
<body>
    <header class="header">
        <div class="header__background"></div>
        <div class="header__title">
            <img src="{{asset("images/COSSIES_logo-light.png")}}" alt="" class="responsive-img">
            <h1>COSSIES</h1>
            <p>COORDINACIÓN DE SERVICIO SOCIAL DE INSTITUCIONES DE EDUCACIÓN SUPERIOR</p>
        </div>
    </header>

    <div class="central-button-container">   
    
        <a href="{{route('loginalumnos')}}">
        <button class="custom-btn btn-1"><span>Ingresa Aqui!</span><span>¿Eres Alumno?</span></button>
        </a>
        
        <button class="custom-btn btn-2"><span>Ingresa Aqui!</span><span>¿Eres Administrativo?</span></button>
    </div>
    

</body>
</html>