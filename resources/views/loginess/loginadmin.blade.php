<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/colors.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">  
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">   
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Inicio de sesion Administradores</title>

</head>
<body>
    <header class="header">
        <div class="header__background"></div>
        <div class="header__title">
            <img src="{{asset("images/SEPE-USET HQ - light.png")}}" alt="" class="responsive-img">
            <h1>COSSIES</h1>
            <p>COORDINACIÓN DE SERVICIO SOCIAL DE INSTITUCIONES DE EDUCACIÓN SUPERIOR</p>
        </div>
    </header>

    <!-- <div class="position-fixed top-50 start-50 translate-middle w-100" style="z-index: 10;">   -->
    <div class="container">

        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
        <!-- <h1 class="text-4xl font-bold mb-4 text-gray-700">SI-EXACTAA</h1> -->
            </div>

    <div class="formbg-outer">
    <div class="formbg">
<div class="formbg-inner padding-horizontal--48">

    <section>
        <span class="padding-bottom--15">Si aun no te registras puedes hacerlo desde aqui</span>
            <form method="POST" >
                <input type="hidden" name="_token" value="696H0HIJcuWexZcMJ0ACd4Y1rHuxke96i8u0pe8s" autocomplete="off">               
                    
                    <div class="field padding-bottom--24">
                        <label class="block font-medium text-sm text-gray-700" for="nombreAdministrativo">Nombre Administrativo</label>
                        <input id="nombreAdministrativo" class="block mt-1 w-full" type="text" name="nombreAdministrativo" required="required" autofocus="autofocus" autocomplete="nombreAdministrativo">
                    </div>

                    <div class="field padding-bottom--24">
                        <label class="block font-medium text-sm text-gray-700" for="correoElectronico">Correo Electrónico</label>
                        <input id="correoElectronico" class="block mt-1 w-full" type="email" name="correoElectronico" required="required" autocomplete="correoElectronico">
                    </div>

                    <div class="field padding-bottom--24">
                        <label class="block font-medium text-sm text-gray-700" for="contraseña">Contraseña</label>
                        <input id="contraseña" class="block mt-1 w-full" type="password" name="contraseña" required="required" autocomplete="contraseña">
                    </div>
                    
                    <div class="field padding-bottom--24">
                        <label class="block font-medium text-sm text-gray-700" for="puesto">Puesto</label>
                        <input id="puesto" class="block mt-1 w-full" type="text" name="puesto" required="required" autocomplete="puesto">
                    </div>
                
                    <div class="field padding-bottom--24">
                        <label class="block font-medium text-sm text-gray-700" for="credencial">Credencial</label>
                        <input id="credencial" class="block mt-1 w-full" type="text" name="credencial" required="required" autocomplete="credencial">
                    </div>

                    <div class="field padding-bottom--24">
                        <label class="block font-medium text-sm text-gray-700" for="telefonoContacto">Teléfono de Contacto</label>
                        <input id="numeroTelefono" class="block mt-1 w-full" type="text" name="numeroTelefono" required="required" autocomplete="numeroTelefono">
                    </div>

                    <div class="w-full">
                    <button type="submit" class="btn-continue w-full">Registrar</button>        
                    </div>
            </form>
    </section>
                    </div>
                </div>
            {{-- </div> --}}
       {{--  </div> --}}
    {{-- </div> --}}

   {{--  <section>
            <span class="padding-bottom--15">Administradores</span>
                <form method="POST" >
                    <input type="hidden" name="_token" value="696H0HIJcuWexZcMJ0ACd4Y1rHuxke96i8u0pe8s" autocomplete="off">               
                        
                        <div class="field padding-bottom--24">
                            <label class="block font-medium text-sm text-gray-700" for="nombreAdministrativo">Nombre Administrativo</label>
                            <input id="nombreAdministrativo" class="block mt-1 w-full" type="text" name="nombreAdministrativo" required="required" autofocus="autofocus" autocomplete="nombreAdministrativo">
                        </div>

                        <div class="field padding-bottom--24">
                            <label class="block font-medium text-sm text-gray-700" for="correoElectronico">Correo Electrónico</label>
                            <input id="correoElectronico" class="block mt-1 w-full" type="email" name="correoElectronico" required="required" autocomplete="correoElectronico">
                        </div>

                        <div class="field padding-bottom--24">
                            <label class="block font-medium text-sm text-gray-700" for="contraseña">Contraseña</label>
                            <input id="contraseña" class="block mt-1 w-full" type="password" name="contraseña" required="required" autocomplete="contraseña">
                        </div>
                        
                        <div class="field padding-bottom--24">
                            <label class="block font-medium text-sm text-gray-700" for="puesto">Puesto</label>
                            <input id="puesto" class="block mt-1 w-full" type="text" name="puesto" required="required" autocomplete="puesto">
                        </div>
                    
                        <div class="field padding-bottom--24">
                            <label class="block font-medium text-sm text-gray-700" for="credencial">Credencial</label>
                            <input id="credencial" class="block mt-1 w-full" type="text" name="credencial" required="required" autocomplete="credencial">
                        </div>

                        <div class="field padding-bottom--24">
                            <label class="block font-medium text-sm text-gray-700" for="telefonoContacto">Teléfono de Contacto</label>
                            <input id="credencial" class="block mt-1 w-full" type="text" name="credencial" required="required" autocomplete="credencial">
                        </div>

                        <div class="w-full">
                        <button type="submit" class="btn-continue w-full">Continuar</button>        
                        </div>
                </form>
    </section>
 --}}
     {{--                 </div>
                </div>
            </div>
        </div>
    </div> --}}

     <section>
            <span class="padding-bottom--15">Administradores</span>
                <form method="POST" >
                    <input type="hidden" name="_token" value="696H0HIJcuWexZcMJ0ACd4Y1rHuxke96i8u0pe8s" autocomplete="off">               
                        
                        <div class="field padding-bottom--24">
                            <label class="block font-medium text-sm text-gray-700" for="nombreAdministrativo">Nombre Administrativo</label>
                            <input id="nombreAdministrativo" class="block mt-1 w-full" type="text" name="nombreAdministrativo" required="required" autofocus="autofocus" autocomplete="nombreAdministrativo">
                        </div>

                        <div class="field padding-bottom--24">
                            <label class="block font-medium text-sm text-gray-700" for="correoElectronico">Correo Electrónico</label>
                            <input id="correoElectronico" class="block mt-1 w-full" type="email" name="correoElectronico" required="required" autocomplete="correoElectronico">
                        </div>

                        <div class="field padding-bottom--24">
                            <label class="block font-medium text-sm text-gray-700" for="contraseña">Contraseña</label>
                            <input id="contraseña" class="block mt-1 w-full" type="password" name="contraseña" required="required" autocomplete="contraseña">
                        </div>
                        
                        <div class="field padding-bottom--24">
                            <label class="block font-medium text-sm text-gray-700" for="puesto">Puesto</label>
                            <input id="puesto" class="block mt-1 w-full" type="text" name="puesto" required="required" autocomplete="puesto">
                        </div>
                    
                        <div class="field padding-bottom--24">
                            <label class="block font-medium text-sm text-gray-700" for="credencial">Credencial</label>
                            <input id="credencial" class="block mt-1 w-full" type="text" name="credencial" required="required" autocomplete="credencial">
                        </div>

                        <div class="field padding-bottom--24">
                            <label class="block font-medium text-sm text-gray-700" for="telefonoContacto">Teléfono de Contacto</label>
                            <input id="credencial" class="block mt-1 w-full" type="text" name="credencial" required="required" autocomplete="credencial">
                        </div>

                        <div class="w-full">
                        <button type="submit" class="btn-continue w-full">Continuar</button>        
                        </div>
                </form>
    </section>

</div>
</div>
</div>


<br><br><br><br>

</body>
</html>