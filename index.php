<?php
/*
 * mixed by marcexl
 * version 11012022
 * - home
 */ 

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>    
    <link rel="shortcut icon" href="img/logo.ico" />
    
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1208016482969953');
        fbq('track', 'PageView');
        fbq('track', 'Lead');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1208016482969953&ev=PageView&noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->
        
    <!-- Global site tag (gtag.js) - Google Ads: 366678578 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-366678578"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-366678578');
    </script>
    <script>
        gtag('event', 'conversion', {'send_to': 'AW-366678578/Ud_ICKmwgP0CELKk7K4B'});
    </script>
      
    </head>
<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png"/>
                </a>
            </div>
        </nav>
    </header>

    <!-- promo y form -->
    <div class="container-fluid" id="header-container">
        <div class="row">
            <div class="col-9">
                <h1>PAG?? DESDE <span class="usd">$149 usd</span> AL MES</h1>
                <h2>(con cr??dito aprobado)</h1>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/header/lasik.jpg"/>
                            <h4>Mejor?? tu visi??n con</h4>
                            <h3>Lasik</h3>
                        </div>
                        <div class="col-4">
                            <img src="img/header/carnosidad.jpg"/>
                            <h4>Miradas libres de</h4>
                            <h3>Carnosidad</h3>
                        </div>
                        <div class="col-4">
                            <img src="img/header/cataratas.jpg"/>
                            <h4>Recuper?? tu visi??n <br>libre de</h4>
                            <h3>Cataratas</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3" id="form-header">
                <p>Agend?? tu cita de valoraci??n</p>
                <p><h6>totalmente gratis</h6></p>
                <p>y con atenci??n personalizada.</p>
                <form action="index.php" method="POST" class="mt-3" id="form1" name="form1" >
                    <div class="form-group mt-2">
                      <label for="fname">Nombre:</label>
                      <input type="text" name="fname" class="form-control" id="fname">
                    </div>
                    <div class="form-group mt-2">
                      <label for="lname">Apellido:</label>
                      <input type="text" name="lname" class="form-control" id="lname">
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Correo electr??nico:</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group mt-2">
                        <label for="whatsapp">Whatsapp:</label>
                        <input type="text" name="whatsapp" class="form-control" id="whatsapp">
                    </div>
                    <div class="form-group mt-2">
                        <label for="procedimiento">Escoge un procedimiento:</label>
                        <select class="form-select" aria-label="Default select example" name="procedimiento" id="procedimiento">
                            <option value="Lasik">Lasik</option>
                            <option value="Carnosidad">Carnosidad</option>
                            <option value="Cataratas">Cataratas</option>
                          </select>
                    </div>
                    <button type="button" class="btn btn-default btn-warning mt-3" onclick="sendFormHeader()">Agendar valoraci??n gratis</button>
                  </form>
            </div>
        </div>
    </div>

    <!-- equipo -->

    <div class="container-fluid" id="equipo-container">
        <div class="row">
            <div class="col-6">
                <h2>??un equipo de</h2>
                <h1 class="mb-3">expertos!</h1>
                <p>??Trabajamos por m??s de <strong>35 a??os</strong></p>
                <p>para la <strong>comunidad hispana!</strong></p>
                <h3 class="mt-3 mb-5">Hablamos espa??ol <br> en cada sucursal.</h3>

                <p class="mb-5">Ofrecemos variedad de programas <br>de <strong>financiamiento</strong> disponibles,<br> incluyendo <strong>ITIN.</strong></p>
                <p class="mb-5"><strong>Dr. Ellis</strong> busca ayudar a la <strong>comunidad <br>hispana</strong> con pagos accesibles a la medida<br> de sus necesidades <strong>ITIN.</strong></p>
                <p><button type="button" class="btn btn-default btn-warning" ><a href="#form-container-1">Agend?? tu valoraci??n gratuita</a></button></p>
            </div>
            <div class="col-6 p-0">
                <div class="form-group">
                    <img src="img/expertos/001.jpg">
                </div>
                <div class="form-group">
                    <img src="img/expertos/002.jpg">
                </div>
            </div>
        </div>
    </div>

    <!-- sucursales -->
    <div class="container-fluid" id="sucursales-container">
        <div class="row">
            <div class="col">
                <h2>Visitanos en cualquiera de nuestras</h2>
                <h1>7 sucursales</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="sucursal-content">
                    <div class="sucursal-item">
                        <div class="sucursal-item-icon">
                            <img src="img/maps-icon.png"/>
                            <span>1</span>
                        </div>
                        <div class="sucursal-item-desc">
                            <p class="suc-title">Ubicaci??n 1:</p>
                            <p>
                                El Cerrito Oficina<br>
                                6500 Fairmount Ave,<br>
                                Suite #2, El Cerrito,<br>
                                CA 94530<br>
                                (510) 592-5025
                            </p>
                        </div>
                    </div>

                    <div class="sucursal-item">
                        <div class="sucursal-item-icon">
                            <img src="img/maps-icon.png"/>
                            <span>2</span>
                        </div>
                        <div class="sucursal-item-desc">
                            <p class="suc-title">Ubicaci??n 2:</p>
                            <p>
                                San Jos??<br>
                                2211 Moorpark Ave, #200<br>
                                San Jos??, CA 95218<br>
                                (408) 617-7613
                            </p>
                        </div>
                    </div>

                    <div class="sucursal-item">
                        <div class="sucursal-item-icon">
                            <img src="img/maps-icon.png"/>
                            <span>3</span>
                        </div>
                        <div class="sucursal-item-desc">
                            <p class="suc-title">Ubicaci??n 3:</p>
                            <p>
                                Marin-Corte Madera Oficina<br>
                                100 Tamal Plaza, Suite 105<br>
                                Corte Madera, CA 94925<br>
                                (415) 851-6048<br>
                                (415) 945-9779
                            </p>
                        </div>
                    </div>

                    <div class="sucursal-item">
                        <div class="sucursal-item-icon">
                            <img src="img/maps-icon.png"/>
                            <span>4</span>
                        </div>
                        <div class="sucursal-item-desc">
                            <p class="suc-title">Ubicaci??n 4:</p>
                            <p>
                                San Francisco Oficina<br>
                                111 Maiden Lane Suite 700<br>
                                San Francisco, CA 94108<br>
                                (415) 964-3616
                            </p>
                        </div>
                    </div>

                    <div class="sucursal-item">
                        <div class="sucursal-item-icon">
                            <img src="img/maps-icon.png"/>
                            <span>5</span>
                        </div>
                        <div class="sucursal-item-desc">
                            <p class="suc-title">Ubicaci??n 5:</p>
                            <p>
                                Roseville Oficina<br>
                                700 Sunrise Ave, Suite #A<br>
                                Roseville, CA 95661<br>
                                (916) 426-3334 
                            </p>
                        </div>
                    </div>

                    <div class="sucursal-item">
                        <div class="sucursal-item-icon">
                            <img src="img/maps-icon.png"/>
                            <span>6</span>
                        </div>
                        <div class="sucursal-item-desc">
                            <p class="suc-title">Ubicaci??n 6:</p>
                            <p>
                                Wallnut Creek Oficina<br>
                                112 La Casa Via, #360<br>
                                Wallnut Creek, CA 94598<br>
                                (925) 261-7626 
                            </p>
                        </div>
                    </div>

                    <div class="sucursal-item">
                        <div class="sucursal-item-icon">
                            <img src="img/maps-icon.png"/>
                            <span>7</span>
                        </div>
                        <div class="sucursal-item-desc">
                            <p class="suc-title">Ubicaci??n 7:</p>
                            <p>
                                Gilroy Oficina<br>
                                9360 No Name Uno,<br>
                                Suite 10<br>
                                Gilroy, CA 95020<br>
                                (408) 706-2501
                            </p>
                        </div>
                    </div>

                    <div class="sucursal-item">
                        <div class="sucursal-item-icon">
                            <img src="img/maps-icon.png"/>
                            <span>8</span>
                        </div>
                        <div class="sucursal-item-desc">
                            <p class="soon">
                               San Leandro<br>
                               Pronto
                            </p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <!-- form -->

    <div class="container-fluid" id="form-container-1">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div id="footer-form" class="mt-3">
                    <p>Agend?? tu cita de valoraci??n</p>
                    <h6>totalmente gratis</h6>
                    <p>y con atenci??n personalizada</p>
                    <form action="index.php" method="POST" id="form2" name="form2" class="mt-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="fname">Nombre:</label>
                                    <input type="text" name="fname" class="form-control" id="fname">
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo electronico:</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="procedimiento">Escoge un procedimiento:</label>
                                    <select class="form-select" aria-label="Default select example" name="procedimiento" id="procedimiento">
                                        <option value="Lasik">Lasik</option>
                                        <option value="Carnosidad">Carnosidad</option>
                                        <option value="Cataratas">Cataratas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="lname">Apellido:</label>
                                    <input type="text" name="lname" class="form-control" id="lname">
                                </div>
                            
                                <div class="form-group">
                                    <label for="whatsapp">Whatsapp:</label>
                                    <input type="text" name="whatsapp" class="form-control" id="whatsapp">
                                </div>
                                <div class="form-group">
                                    <label for="sucursales">Lista de Sucursales:</label>
                                    <select class="form-select" aria-label="Default select example" name="sucursales" id="sucursales">
                                        <option value="Suc 1 - El Cerrito Oficina">El Cerrito Oficina</option>
                                        <option value="Suc 2 - San Jos?? Oficina">San Jos?? Oficina</option>
                                        <option value="Suc 3 - Marin-Corte Madera Oficina">Marin-Corte Madera Oficina</option>
                                        <option value="Suc 4 - San Francisco Oficina">San Francisco Oficina</option>
                                        <option value="Suc 5 - Roseville Oficina">Roseville Oficina</option>
                                        <option value="Suc 6 - Walnut Creek Oficina">Walnut Creek Oficina</option>
                                        <option value="Suc 7 - Gilroy Oficina">Gilroy Oficina</option>
                                    </select>
                                </div>
                            </div>
                            <button type="button" class="btn btn-default btn-warning mt-3" onclick="sendFormFooter()">Agendar valoraci??n gratis</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="footer-logo">
                        <img src="img/logo.png"/>
                        <p>Todos los Derechos Reservados. &copy; 2021</p>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="footer-desc">
                        <p>*Este sitio no proporciona consejos m??dicos. Si bien la informaci??n que se encuentra en este sitio web es generalmente
                        cierta, las condiciones espec??ficas que puedan relacionarse con usted pueden ser diferentes, incluidos el diagn??stico
                        y los posibles tratamientos. La informaci??n en este sitio web no debe considerarse un sustituto de una evaluaci??n,
                        diagn??stico o tratamiento integral por parte de un profesional calificado de atenci??n ocular. Siempre busque el consejo
                        de su proveedor de atenci??n m??dica calificado si tiene alguna pregunta sobre una inquietud o condici??n m??dica.
                        Los correos electr??nicos no solicitados y los mensajes pueden que no sean respondidos.
                        </p>
                    </div>
                    <div class="footer-aca mt-3">
                        <p><a href="#">ACA Section 1557</a> | <a href="#">Pol??tica de Privacidad</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/main.js"></script>
</body>
</html>