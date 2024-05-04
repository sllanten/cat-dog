<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cat&Dog v2</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('storage/img/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{ asset('storage/css/styles.css') }}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function(){
            var current = 1,current_step,next_step,steps;
            steps = $("fieldset").length;
            $(".next").click(function(){

                current_step = $(this).parent();
                next_step = $(this).parent().next();
                next_step.show();
                current_step.hide();
                setProgressBar(++current);
            });
            $(".previous").click(function(){
                current_step = $(this).parent();
                next_step = $(this).parent().prev();
                next_step.show();
                current_step.hide();
                setProgressBar(--current);
            });
            setProgressBar(current);
            // Change progress bar action
            function setProgressBar(curStep){
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                .css("width",percent+"%")
                .html(percent+"%");
            }
            });

            function messageInfo(option){
                var option= parseInt(option);
                switch (option) {
                    case 1:
                            $("#capa").addClass("clasecss");
                        break;
                
                    case 2:
                            $("#divInfo").removeClass("msgHide");
                        break;
                }
            }

            function validateBtn() {
                var celular = $('#loginCelular').val();
                var clave = $('#loginPass').val();

                if (celular == 0 || clave == "") {
                    messageInfo(2);

                } else{
                    document.getElementById('FormLogin').submit();
                }
            }

            function validateForm(){
                event.preventDefault();
                var nombre = $('#regNombre').val();
                var clave = $('#regPass').val();
                var celular = $('#regCel').val();

                var nombre2 = $('#regMasc').val();
                var especie = $('#selectEspecie').val();
                var genero = $('#selectGenero').val();
                

                if (nombre == "" || clave == "" || celular== "" || nombre2== "" || especie== "x" || genero== "x") {
                    messageInfo(2);

                } else{
                     document.getElementById('regiration_form').submit();
                }

            }


        </script>

        <style type="text/css">
            #regiration_form fieldset:not(:first-of-type) {
                display: none;
            }
            
            .msgShow{
                display: block;
            }

            .msgHide{
                display: none;
                
            }

        </style>
    </head>
    <body id="inicio">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#inicio">Inicio</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
                 type="button" data-toggle="collapse" data-target="#navbarResponsive"
                  aria-controls="navbarResponsive" aria-expanded="false"
                  aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#registro">Registrate Gratis</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#info">Que es Cat&Dog</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#ingreso">Ingresar</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src="{{ asset('storage/img/avataaars.svg') }}" alt="Joda" />
                <h2 class="masthead-heading text-uppercase mb-0">¿Veterinaria?</h2>
                <h1 class="masthead-heading text-uppercase mb-0">Cat&Dog</h1>

                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Veterinaria de caninos y felinos</p>
            </div>
        </header>
        
        <!-- registro Section-->
        <section class="page-section registro" id="registro">
          <center><h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Registrate Gratis</h2></center>
            <div class="container">
                <div class="container">
                    <form id="regiration_form" target="" action="{{ route('regUser') }}"  method="POST">
                        @csrf
                        <fieldset>
                            <h2 style="color: #4c2882;">Informacion Personal</h2>
                            <div class="form-group">
                                <label for="text">Nombre Completo </label>
                                <input type="text" class="form-control" id="regNombre" name="regNombre" placeholder="Nombre completo" >
                            </div>
                            <div class="form-group">
                                <label for="text">Contraseña</label>
                                <input type="text" class="form-control" id="regPass" name="regPass" placeholder="Contraseña">
                            </div>
                            <div class="form-group">
                                <label for="text">Celular</label>
                                <input type="number" class="form-control" id="regCel" name="regCel" placeholder="Celular" >
                            </div>
                            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
                        </fieldset>
                        <fieldset>
                            <h2 style="color: #4c2882;">Informacion de la mascota</h2>
                            <div class="form-group">
                                <label for="Numero">Nombre de la mascota</label>
                                <input type="text" class="form-control" id="regMasc" name="regMasc" placeholder="Nombre de la mascota" >
                            </div>
                            <div class="form-group">
                                <label for="genero">Especie</label>
                                <select class="custom-select" id="selectEspecie" name="selectEspecie">
                                <option value="x" selected>Seleccione</option>
                                    @foreach ($especie as $item2)
                                        <option value="{{ $item2 }}">{{ $item2 }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="genero">Genero</label>
                                <select class="custom-select" id="selectGenero" name="selectGenero">
                                    <option value="x" selected>Seleccione</option>
                                    @foreach ($genero as  $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <input type="button" name="previous" class="previous btn btn-info" value="Atras" />
                            <input type="button" name="btnRegistro" id="btnRegistro" class="submit btn btn-success" value="Registarme" 
                            onclick="validateForm()"/>
                        </fieldset>
                
                    </form>
                    <br>
                    <div id="divInfo" class="msgHide">
                        <div class="alert alert-danger" role="alert">
                            Hay campos vacios. Vuelve a intentar.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="info">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-headi
                <!-- About Section Heading-->
                ng text-center text-uppercase text-white">¿Que es Cat&Dog?</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ml-auto"><p class="lead">Es una Veterinaria virtual que cuanta con un sistema
                       de informacion basico que incluye procesos como historial clinico de caninos y felinos
                       hasta una agenda de citas virtual </p></div>
                    <div class="col-lg-4 mr-auto"><p class="lead">
                      Incluye roles como veterinario y propietario de mascota
                      lo cual te permite ver el historial clinico de tu mascota desde cualquier parte del mundo.
                    </p></div>
                </div>
                <!-- About Section Button-->

            </div>
        </section>

        <!-- login Section-->
        <section class="page-section" id="ingreso">
            <div class="container">
                <!-- login Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Entrar</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- login Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the login form email address, go to mail/login_me.php and update the email address in the PHP file on line 19.-->
                        <form id="FormLogin" method="post" novalidate="" action="{{ route('login') }}">
                            @csrf
                            <div class="control-group">
                              <label for="numero_documento">Celular:</label>
                              <input type="number"  class="form-control" name="celular" id="celular" placeholder="Numero de celular"
                               @auth disabled @endauth>
                              <label for="contraseña">Contraseña:</label>
                              <input type="password"  class="form-control" name="password" id="password" placeholder="Contraseña" 
                               @auth disabled @endauth>
                              <br>
                              <input type="button" class="btn btn-success" id="btnIngreso" value="Ingresar" onclick="validateBtn()"
                              @auth disabled @endauth> </input>
                              <br><br>
                              <div id="divInfo" class="msgHide">
                                <div class="alert alert-danger" role="alert">
                                Hay campos vacios. Vuelve a intentar.
                               </div>
                              </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Desarrollado por</h4>
                        <p class="lead mb-0">Javier Llanten Quiñones</p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Contacto</h4>
                          <p class="lead mb-0">Celular: 3235073356</p>
                          <p class="lead mb-0">Correo: devsllanten@gmail.com</p>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                      <h4 class="text-uppercase mb-4">Cat&Dog v2</h4>
                        <p class="lead mb-0">Tu veterina virtual</p>
                    </div>
            </div>
        </footer>

        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © Cat&Dog v2 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#inicio"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
      
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <!-- Core theme JS-->
        <script src="{{ asset('storage/js/scripts.js') }}"></script>
        
        <!-- formulario de registro-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </body>
</html>
