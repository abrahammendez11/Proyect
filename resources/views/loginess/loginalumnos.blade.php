<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
    {{-- <!-- <link rel="stylesheet" href="{{ asset('css/auth.css') }}"> --> --}}
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="{{ asset('js/edit/login.js') }}"></script>

    <title>Inicio de sesion Alumnos</title>


</head>
<body>

 
  

  {{-- <header class="header">
    <div class="header__background"></div>
    <div class="header__title">
        <img src="{{asset("images/COSSIES_logo-light.png")}}" alt="" class="responsive-img">
   {{--      <h1>COSSIES</h1>
        <p>COORDINACIÓN DE SERVICIO SOCIAL DE INSTITUCIONES DE EDUCACIÓN SUPERIOR</p>
    </div>
{{-- </h{{-- eader> --}} 

    <div class="cotn_principal">
        <div class="cont_centrar">
        
          <div class="cont_login">
        <div class="cont_info_log_sign_up">
              <div class="col_md_login">
        <div class="cont_ba_opcitiy">
                
                <h2>Alumnos</h2>  
          <p>Si ya tienes una Cuenta inicia sesion aqui</p> 
          <button class="btn_login" onclick="change_to_login()">Iniciar Sesion</button>
          </div>
          </div>
        <div class="col_md_sign_up">
        <div class="cont_ba_opcitiy">
          <h2>Registro</h2>
          <p>Si aun no tienes una cuenta, registrate aqui.</p>
          <button class="btn_sign_up" onclick="change_to_sign_up()">Registrarse</button>
        </div>
          </div>
               </div>
        
            
            <div class="cont_back_info">
               <div class="cont_img_back_grey">
               <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
               </div>
               
            </div>
        <div class="cont_forms" >
            <div class="cont_img_back_">
               <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
               </div>
         <div class="cont_form_login">
        <a href="#" onclick="hidden_login_and_sign_up()" >&#xE5C4;</a>
           <h2>Iniciar Sesion</h2>
         <input type="text" placeholder="Correo Electronico" />
        <input type="password" placeholder="Contraeña" />
        <button class="btn_login" onclick="change_to_login()">Iniciar Sesion</button>
          </div>
          
           <div class="cont_form_sign_up">
        <a href="#" onclick="hidden_login_and_sign_up()"></a>
             <h2>Registrarse</h2>
        <input type="text" placeholder="Correo Electronico" />
        <input type="text" placeholder="Nombre Completo" />
        <input type="password" placeholder="Contraseña" />
        <input type="password" placeholder="Confirmar Contraseña" />
        {{-- <input type="text" placeholder="Credencial" />
        <input type="text" placeholder="Direccion" />
        <input type="text" placeholder="Escuela" />
        <input type="text" placeholder="Carrera" />
        <input type="text" placeholder="Grado" />
        <input type="text" placeholder="Numero de Telefono" />
        <input type="date" placeholder="Fecha de Ingreso" /> --}}

        <button class="btn_sign_up" onclick="change_to_sign_up()">Registrarse</button>
        
          </div>
        
            </div>
            
          </div>
         </div>
        </div>
    
</body>
</html>