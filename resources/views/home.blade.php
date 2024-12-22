<!DOCTYPE html>
<html lang="es">

<head>
  <script
    type="text/javascript"> const iconos_d2 = 'https://casino-fortunato.com/front/[+++]/cacino/iconos/d2.png?v=1727800576'; const iconos_d1 = 'https://casino-fortunato.com/front/[+++]/cacino/iconos/d1.png?v=1727800538'; </script>
  <title> Zenythic Client Final Test </title>
  <meta name="description" content="Zenythic Client Final Test">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" type="text/css" href="https://casino-fortunato.com/front/[+++]/swiper/swiper.css?v=1730824182">
  <script type="text/javascript" src="https://casino-fortunato.com/front/[+++]/swiper/swiper.js?v=1730824220"></script>
  <link rel="stylesheet" type="text/css" href="https://casino-fortunato.com/front/[+++]/dom/dom.css?v=1730987844">
  <link rel="stylesheet" type="text/css" href="https://casino-fortunato.com/front/[+++]/dom/dom.fijo.css?v=1730741298">
  <script type="text/javascript" src="https://casino-fortunato.com/front/[+++]/dom/dom.js?v=1730999516"></script>
  <link rel="stylesheet" type="text/css"
    href="https://casino-fortunato.com/front/[+++]/slick/slick.min.css?v=1727868200">
  <link rel="stylesheet" type="text/css"
    href="https://casino-fortunato.com/front/[+++]/slick/slick-theme.min.css?v=1728065734">
  <link rel="stylesheet" type="text/css"
    href="https://casino-fortunato.com/front/[+++]/cacino/css/cacino.css?v=1731001324">
  <script type="text/javascript"
    src="https://casino-fortunato.com/front/[+++]/slick/jquery.min.js?v=1729162266"></script>
  <script type="text/javascript"
    src="https://casino-fortunato.com/front/[+++]/slick/slick.min.js?v=1727868544"></script>
  <script type="text/javascript"
    src="https://casino-fortunato.com/front/[+++]/cacino/js/cacino.js?v=1728242468"></script>
  <style type="text/css">
    /**/
    /*HERO INICIAL DE FONDO*/
    .casino-hero-barner {
      background-image: url('https://casino-fortunato.com/front/[+++]/cacino/background.png?v=1727790452');
      background-size: 100%;
      background-repeat: no-repeat;
    }

    /**/
  </style>
</head>

<body>
  <div class="pagina-externa">
    <div class="pagina-interna lato-regular">
      <script> /**/ /*Inicio de SLIDERS*/ dom.funciones_onload.push(_ => dom.carga_sliders()); /**/ /*Funcion Slot Machine*/ dom.funciones_onclick.push(_ => { /**/ /*Indicar funcion ejecutada*/ if (dom.funciones_ejecutadas.slot_machine) return; dom.funciones_ejecutadas.slot_machine = 1; /**/ /*Inicio de SONIDO*/ dom.ejecutar_sonido('#ng-slot-machine'); /**/ }); /**/ </script>
      <div id="billetera" class="ng-modal-covertor ng-modal-inactivo" ng-mousein="fn=>dom.validate()">
        <div class="ng-modal-covertor-interno">
          <script ng-init="{ 'i:billetera_pantalla':1, }"></script>
          <div id="billetera_pantalla_1"
            class="ng-modal-pantalla ng-pantalla-inactiva ng-modal-pantalla-h-xl ng-modal-pantalla-w-l">
            <div class="ng-cloak ng-cloak-1 form--registro d--flex flex--column padding--l--2rem padding--r--2rem"
              style="min-width: 100%;padding-bottom: 5rem;"> <input name="_token" ng-model="s:token" hidden="">
              <div class="mi-billetera"> Mi Billetera </div>
              <div class="cerrar-billetera text--right d--flex align--center justify--end"> <button
                  class="no--boton boton--cacino boton--cacino--rojo texto--blanco--i"> <span
                    class="lato-regular">Total</span> <span class="lato-regular">$</span> <span class="lato-regular"
                    ng-model="f:saldo">0.00</span> </button> <a href="#" class="no--boton"
                  ng-click="fn=> dom.cerrar_modals(); dom.validate(); "
                  ng-mousein="fn=>dom.validate({ 'nombre': 'Cerrar', 'target': $target, })"> <img width="" height=""
                    alt=""
                    src="https://casino-fortunato.com/front/[+++]/iconos/times.png?int=1&amp;resize=14&amp;colorize=$555555&amp;v=1709547330">
                </a> </div>
              <div class="depositar--retirar">
                <div class="depositar--billetera pointer--cursor"
                  ng-class="{ 'activo':<i:billetera_pantalla>===1, 'inactivo':<i:billetera_pantalla>!==1, }"
                  ng-click="set=>i:billetera_pantalla=1"> Depositar </div>
                <div class="depositar--billetera pointer--cursor"
                  ng-class="{ 'activo':<i:billetera_pantalla>===2, 'inactivo':<i:billetera_pantalla>!==2, }"
                  ng-click="set=>i:billetera_pantalla=2"> Retirar </div>
              </div>
              <div class="billetera--pantallas">
                <form class="billetera-pantalla-1"
                  ng-class="{ 'activo':<i:billetera_pantalla>===1, 'inactivo':<i:billetera_pantalla>!==1, }"
                  ng-submit="fn=>dom.xhr({ 'metodo': 'POST', 'url': 'https://casino-fortunato.com/api/depositar/post', 'funcion': _ => alert(1), 'form': $target, 'type': $type, 'event': $event, })"
                  ng-submit-prevent ng-mousein="fn=>dom.validate()">
                  <div class="billetera-pantalla-agregar-cuenta">
                    <div class="billetera-pantalla-agregar-texto"> Antes de realizar un depósito debe agregar una cuenta
                    </div>
                    <div> <button class="texto--blanco--i boton--cacino boton--cacino--rojo no--boton"> Agregar Tarjeta
                      </button> </div>
                  </div>
                  <div class="billetera--campos"> <label
                      class="boton--cacino boton--cacino--negro cacino--boton-buscador boton--borde"> <img width=""
                        height="" alt="" class="input--contenedor--icono" style="left: 2rem;"
                        src="https://casino-fortunato.com/front/[+++]/iconos/card.png?int=1&amp;resize=20&amp;colorize=$FFFFFF&amp;v=1728747082">
                      <select class="cacino--billetera--select" name="tarjeta">
                        <option>Agregar una tarjeta</option>
                      </select> <img width="" height="" alt="" class="cacino--select--img"
                        src="https://casino-fortunato.com/front/[+++]/iconos/arrow-down-2.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1728132700">
                    </label>
                    <div class="se-aceptan-visa-y-mastercar" style="margin-bottom:1rem"> Se aceptan Mastercard y Visa
                      <img width="" height="" alt=""
                        src="https://casino-fortunato.com/front/[+++]/cacino/pagos.png?v=1715094544">
                    </div> <button type="button" class="texto--blanco--i boton--cacino boton--cacino--paypal no--boton">
                      Depositar
                      con <img width="" height="" alt=""
                        src="https://casino-fortunato.com/front/[+++]/iconos/paypal.png?int=1&amp;resize=75&amp;v=1728748146">
                    </button> <button type="button"
                      class="texto--blanco--i boton--cacino boton--cacino--rojo no--boton boton--cacino--mercadolibre">
                      <img width="" height="" alt=""
                        src="https://casino-fortunato.com/front/[+++]/iconos/mercadolibre.png?int=1&amp;resize=35&amp;v=1728748368">
                      Depositar con Mercadopago </button>
                  </div>
                </form>
                <div class="billetera-pantalla-1"
                  ng-class="{ 'activo':<i:billetera_pantalla>===2, 'inactivo':<i:billetera_pantalla>!==2, }"
                  ng-submit="fn=>dom.xhr({ 'metodo': 'POST', 'url': 'https://casino-fortunato.com/api/retirar/post', 'funcion': _ => alert(1), 'form': $target, 'type': $type, 'event': $event, })"
                  ng-submit-prevent ng-mousein="fn=>dom.validate()">
                  <div class="billetera-pantalla-agregar-cuenta">
                    <div class="billetera-pantalla-agregar-texto"> Antes de realizar un retiro debe agregar una cuenta
                    </div>
                    <div> <button class="texto--blanco--i boton--cacino boton--cacino--rojo no--boton"> Ir a perfil
                      </button> </div>
                  </div>
                  <div class="billetera--campos"> <label
                      class="boton--cacino boton--cacino--negro cacino--boton-buscador boton--borde"> <img width=""
                        height="" alt="" class="input--contenedor--icono" style="left: 2rem;"
                        src="https://casino-fortunato.com/front/[+++]/iconos/card.png?int=1&amp;resize=20&amp;colorize=$FFFFFF&amp;v=1728747082">
                      <select class="cacino--billetera--select" name="tarjeta">
                        <option>Agregar una tarjeta</option>
                      </select> <img width="" height="" alt="" class="cacino--select--img"
                        src="https://casino-fortunato.com/front/[+++]/iconos/arrow-down-2.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1728132700">
                    </label>
                    <div class="se-aceptan-visa-y-mastercar" style="margin-bottom:1rem"> Se aceptan Mastercard y Visa
                      <img width="" height="" alt=""
                        src="https://casino-fortunato.com/front/[+++]/cacino/pagos.png?v=1715094544">
                    </div> <button type="button" class="texto--blanco--i boton--cacino boton--cacino--paypal no--boton">
                      Depositar
                      con <img width="" height="" alt=""
                        src="https://casino-fortunato.com/front/[+++]/iconos/paypal.png?int=1&amp;resize=75&amp;v=1728748146">
                    </button> <button type="button"
                      class="texto--blanco--i boton--cacino boton--cacino--rojo no--boton boton--cacino--mercadolibre">
                      <img width="" height="" alt=""
                        src="https://casino-fortunato.com/front/[+++]/iconos/mercadolibre.png?int=1&amp;resize=35&amp;v=1728748368">
                      Depositar con Mercadopago </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ng-cloak ng-cloak-1 casino-navbar glutters">
        <div class="cacino-navbar-logotipo"> Logotipo </div>
        <div class="no--movil casino-navbar-links"> <a href="https://casino-fortunato.com/front"
            class="link--navbar no--boton">Inicio</a> <a href="https://casino-fortunato.com/front/casino"
            class="link--navbar no--boton">Casino</a> <a href="https://casino-fortunato.com/front/deportes"
            class="link--navbar no--boton"> Deportes </a> </div>
        <div class="no--movil casino-narbar-botones" ng-show="<i:inicio_sesion> !== 1"> <a class="no--boton"> <img
              width="" height="" alt="" class="buscador--navbar--img"
              src="https://casino-fortunato.com/front/[+++]/cacino/iconos/b1.png?v=1715094544"> </a> <a
            style="margin-top: 1rem; margin-bottom: 1rem;" class="boton--cacino no--boton"
            href="https://casino-fortunato.com/front/login"> Iniciar Sesión </a> <a
            style="margin-top: 1rem; margin-bottom: 1rem;" href="https://casino-fortunato.com/front/registro"
            class="boton--cacino boton--cacino--rojo no--boton"> Registrarse </a> </div>
        <div class="no--movil casino-narbar-botones" ng-show="<i:inicio_sesion> === 1"> <a class="no--boton"> <img
              width="" height="" alt="" class="buscador--navbar--img"
              src="https://casino-fortunato.com/front/[+++]/cacino/iconos/b1.png?v=1715094544"> </a> <a href="#"
            class="d--flex gap--d5 align--center boton--cacino boton--cacino--rojo no--boton" style="font-size: 12px"
            ng-click="fn=>dom.modal('#billetera', '#billetera_pantalla_1', 5 )"> <span
              style="padding-right: .5rem;border-right: 1px solid white;">TOTAL $<span ng-model="f:saldo"></span></span>
            <span style="font-size: 10px">Hacer un deposito</span> <img
              src="https://casino-fortunato.com/front/[+++]/usuarios/1.png?int=1&amp;resize=25&amp;v=1728749570"> </a>
          <a href="#" class="no--boton" onclick="document.querySelector('#menu--perfil').classList.toggle('activo')">
            Perfil </a>
        </div>
        <div id="menu--perfil" class="menu--perfil"> <a href="https://casino-fortunato.com/front/micuenta"
            class="no--boton menu--perfil--row d--flex gap--d5"> <img
              src="https://casino-fortunato.com/front/[+++]/iconos/user2.png?int=1&amp;resize=16&amp;colorize=$FFFFFF&amp;v=1728032262">
            <span> Mi cuenta </span>
            <div class="menu--perfil--icono--acompaniante">
              <div>Completar</div> <img
                src="https://casino-fortunato.com/front/[+++]/iconos/info2.png?int=1&amp;resize=16&amp;colorize=$DF2D2F&amp;v=1727869818">
            </div>
            <div class="menu--perfil--icono--flecha"> <img
                src="https://casino-fortunato.com/front/[+++]/iconos/right.png?int=1&amp;resize=10&amp;colorize=$FFFFFF&amp;v=1710423206">
            </div>
          </a> <a href="https://casino-fortunato.com/front/configuracion"
            class="no--boton menu--perfil--row d--flex gap--d5"> <img
              src="https://casino-fortunato.com/front/[+++]/iconos/dialog.png?int=1&amp;resize=16&amp;colorize=$FFFFFF&amp;v=1728032662">
            <span> Configuración </span>
            <div class="menu--perfil--icono--flecha"> <img
                src="https://casino-fortunato.com/front/[+++]/iconos/right.png?int=1&amp;resize=10&amp;colorize=$FFFFFF&amp;v=1710423206">
            </div>
          </a> <a href="#" class="no--boton menu--perfil--row d--flex gap--d5"> <img
              src="https://casino-fortunato.com/front/[+++]/iconos/cog2.png?int=1&amp;resize=16&amp;colorize=$FFFFFF&amp;v=1728032574">
            <span> Soporte Online </span>
            <div class="menu--perfil--icono--flecha"> <img
                src="https://casino-fortunato.com/front/[+++]/iconos/right.png?int=1&amp;resize=10&amp;colorize=$FFFFFF&amp;v=1710423206">
            </div>
          </a>
          <script> dom.cerrar_sesion = $parametros => dom.manejador_xhr($parametros, { 'alerta_leer_solicitud': 1, 'alerta_codigo_lectura': 1, 'alerta_formulario_error': 1, 'alerta_leer_errores': 1, 'alerta_lectura_cod_desconocido': 1, 'alerta_codigo_403': 1, 'alerta_codigo_429': 1, 'alerta_codigo_500': 1, 'alerta_codigo_500_lectura': 1, 'alerta_codigo_desconocido': 1, 'prueba_exitosa': 1, 'lectura_exitosa': _ => window.location.href = 'https://casino-fortunato.com/front/despedida', }); </script>
          <a href="#" class="no--boton menu--perfil--row perfil--cerrar d--flex gap--d5"
            ng-click="fn=>dom.xhr({ 'metodo': 'GET', 'url': 'https://casino-fortunato.com/api/logout', 'funcion': dom.cerrar_sesion, })">
            <img
              src="https://casino-fortunato.com/front/[+++]/iconos/logout.png?int=1&amp;resize=16&amp;colorize=$DF2D2F&amp;v=1728033768">
            <span> Cerrar Sesión </span> </a>
        </div>
        <div class="no--pc text--center" onclick="document.querySelector('#menu--navbar').classList.toggle('activo')">
          Menu </div>
        <div id="menu--navbar" class="no--pc menu--navbar"> <a href="#"
            class="boton--cacino boton--cacino--rojo no--boton d--relative" ng-show="<i:inicio_sesion> === 1"> Saldo:
            <span ng-model="f:saldo"></span> </a> <a href="https://casino-fortunato.com/front"
            class="boton--cacino no--boton d--relative"> Inicio </a> <a href="https://casino-fortunato.com/front/casino"
            class="boton--cacino no--boton d--relative"> Casino </a> <a class="boton--cacino no--boton d--relative"
            href="https://casino-fortunato.com/front/deportes"> Deportes </a> <a class="boton--cacino no--boton"
            href="https://casino-fortunato.com/front/login" ng-show="<i:inicio_sesion> === 0"> Iniciar Sesión </a> <a
            href="https://casino-fortunato.com/front/registro" class="boton--cacino boton--cacino--rojo no--boton"
            ng-show="<i:inicio_sesion> === 0"> Registrarse </a> <a href="#" class="boton--cacino no--boton d--relative"
            ng-show="<i:inicio_sesion> === 1" ng-click="fn=>dom.modal('#billetera', '#billetera_pantalla_1', 5 )"> Hacer
            depósito </a> <a href="https://casino-fortunato.com/front/micuenta"
            class="boton--cacino no--boton d--relative" ng-show="<i:inicio_sesion> === 1"> Mi cuenta </a> <a
            href="https://casino-fortunato.com/front/configuracion" class="boton--cacino no--boton d--relative"
            ng-show="<i:inicio_sesion> === 1"> Configuración </a> <a href="#"
            class="boton--cacino no--boton d--relative" ng-show="<i:inicio_sesion> === 1"> Soporte Online </a> <a
            href="#" class="boton--cacino boton--cacino--rojo no--boton d--relative" ng-show="<i:inicio_sesion> === 1"
            ng-click="fn=>dom.xhr({ 'metodo': 'GET', 'url': 'https://casino-fortunato.com/api/logout', 'funcion': dom.cerrar_sesion, })">
            Cerrar Sesión </a> </div>
      </div>
      <div class="panel-deporte-oscuro"></div>
      <div class="panel-deporte-1">

        <div>
          <div class="lateral-deportes-template activo" ng-ripple="'#FFF'" ng-ripple-tiempo="1" ng-ripple-opacidad=".1"
            style=" border-top-left-radius: 20px; border-top-right-radius: 20px; ">
            <div> Deportes </div>
            <div> <img alt="" width="" height=""
                src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
            </div>
          </div>
          <div style=" overflow: hidden; ">
            <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
              ng-class="{ 'activo':<i:seleccionado_lateral_deportes>===1, }"
              ng-click="fn=> if( <i:seleccionado_lateral_deportes> === 1 ){ dom.set( 'i:seleccionado_lateral_deportes', -1 ); dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_lateral_deportes', 1 ); ">
              <div> Futbol </div>
              <div> <img ng-show="<i:seleccionado_lateral_deportes>!==1" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                <img ng-show="<i:seleccionado_lateral_deportes>===1" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
              </div>
            </div>
            <div ng-show="<i:seleccionado_lateral_deportes>===1">
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===1, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 1 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 1 ); "
                style=" padding-left: 3rem; ">
                <div> Alemania </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==1" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===1" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===1">
                <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                  style=" padding-left: 6rem; ">
                  <div> Busdesliga </div>
                  <div> <img alt="" width="" height=""
                      src="https://casino-fortunato.com/front/[+++]/iconos\arrow-right-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  </div>
                </div>
                <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                  style=" padding-left: 6rem; ">
                  <div> 2.Busdesliga </div>
                  <div> <img alt="" width="" height=""
                      src="https://casino-fortunato.com/front/[+++]/iconos\arrow-right-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  </div>
                </div>
                <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                  style=" padding-left: 6rem; ">
                  <div> 3.Busdesliga </div>
                  <div> <img alt="" width="" height=""
                      src="https://casino-fortunato.com/front/[+++]/iconos\arrow-right-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  </div>
                </div>
                <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                  style=" padding-left: 6rem; ">
                  <div> DFB-pokal </div>
                  <div> <img alt="" width="" height=""
                      src="https://casino-fortunato.com/front/[+++]/iconos\arrow-right-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  </div>
                </div>
                <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                  style=" padding-left: 6rem; ">
                  <div> Inglaterra </div>
                  <div> <img alt="" width="" height=""
                      src="https://casino-fortunato.com/front/[+++]/iconos\arrow-right-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  </div>
                </div>
              </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===2, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 2 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 2 ); "
                style=" padding-left: 3rem; ">
                <div> Inglaterra </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==2" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===2" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===2"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===3, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 3 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 3 ); "
                style=" padding-left: 3rem; ">
                <div> España </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==3" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===3" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===3"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===4, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 4 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 4 ); "
                style=" padding-left: 3rem; ">
                <div> Francia </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==4" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===4" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===4"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===5, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 5 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 5 ); "
                style=" padding-left: 3rem; ">
                <div> Italia </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==5" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===5" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===5"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===6, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 6 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 6 ); "
                style=" padding-left: 3rem; ">
                <div> Holanda </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==6" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===6" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===6"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===7, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 7 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 7 ); "
                style=" padding-left: 3rem; ">
                <div> Portugal </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==7" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===7" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===7"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===8, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 8 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 8 ); "
                style=" padding-left: 3rem; ">
                <div> Internacional </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==8" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===8" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===8"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===9, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 9 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 9 ); "
                style=" padding-left: 3rem; ">
                <div> Internacional clubes </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==9" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===9" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===9"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===10, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 10 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 10 ); "
                style=" padding-left: 3rem; ">
                <div> Rusia </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==10" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===10" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===10"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===11, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 11 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 11 ); "
                style=" padding-left: 3rem; ">
                <div> Turkia </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==11" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===11" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===11"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===12, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 12 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 12 ); "
                style=" padding-left: 3rem; ">
                <div> Republica checa </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==12" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===12" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===12"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===13, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 13 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 13 ); "
                style=" padding-left: 3rem; ">
                <div> Mexico </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==13" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===13" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===13"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===14, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 14 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 14 ); "
                style=" padding-left: 3rem; ">
                <div> Iran </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==14" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===14" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===14"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===15, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 15 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 15 ); "
                style=" padding-left: 3rem; ">
                <div> Egipto </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==15" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===15" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===15"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===16, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 16 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 16 ); "
                style=" padding-left: 3rem; ">
                <div> Arabia saudita </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==16" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===16" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===16"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===17, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 17 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 17 ); "
                style=" padding-left: 3rem; ">
                <div> Argentina </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==17" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===17" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===17"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===18, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 18 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 18 ); "
                style=" padding-left: 3rem; ">
                <div> Brazil </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==18" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===18" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===18"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===19, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 19 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 19 ); "
                style=" padding-left: 3rem; ">
                <div> Colombia </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==19" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===19" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===19"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===20, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 20 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 20 ); "
                style=" padding-left: 3rem; ">
                <div> Argelia </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==20" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===20" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===20"> </div>
              <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
                ng-class="{ 'activo':<i:seleccionado_nivel_2_lateral_deportes>===21, }"
                ng-click="fn=> if( <i:seleccionado_nivel_2_lateral_deportes> === 21 ){ dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_nivel_2_lateral_deportes', 21 ); "
                style=" padding-left: 3rem; ">
                <div> Estados Unidos </div>
                <div> <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>!==21" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                  <img ng-show="<i:seleccionado_nivel_2_lateral_deportes>===21" alt="" width="" height=""
                    src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                </div>
              </div>
              <div ng-show="<i:seleccionado_nivel_2_lateral_deportes>===21"> </div>
            </div>
            <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
              ng-class="{ 'activo':<i:seleccionado_lateral_deportes>===2, }"
              ng-click="fn=> if( <i:seleccionado_lateral_deportes> === 2 ){ dom.set( 'i:seleccionado_lateral_deportes', -1 ); dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_lateral_deportes', 2 ); ">
              <div> Baloncesto </div>
              <div> <img ng-show="<i:seleccionado_lateral_deportes>!==2" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                <img ng-show="<i:seleccionado_lateral_deportes>===2" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
              </div>
            </div>
            <div ng-show="<i:seleccionado_lateral_deportes>===2"> </div>
            <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
              ng-class="{ 'activo':<i:seleccionado_lateral_deportes>===3, }"
              ng-click="fn=> if( <i:seleccionado_lateral_deportes> === 3 ){ dom.set( 'i:seleccionado_lateral_deportes', -1 ); dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_lateral_deportes', 3 ); ">
              <div> Beisbol </div>
              <div> <img ng-show="<i:seleccionado_lateral_deportes>!==3" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                <img ng-show="<i:seleccionado_lateral_deportes>===3" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
              </div>
            </div>
            <div ng-show="<i:seleccionado_lateral_deportes>===3"> </div>
            <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
              ng-class="{ 'activo':<i:seleccionado_lateral_deportes>===4, }"
              ng-click="fn=> if( <i:seleccionado_lateral_deportes> === 4 ){ dom.set( 'i:seleccionado_lateral_deportes', -1 ); dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_lateral_deportes', 4 ); ">
              <div> Hockey sobre hielo </div>
              <div> <img ng-show="<i:seleccionado_lateral_deportes>!==4" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                <img ng-show="<i:seleccionado_lateral_deportes>===4" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
              </div>
            </div>
            <div ng-show="<i:seleccionado_lateral_deportes>===4"> </div>
            <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
              ng-class="{ 'activo':<i:seleccionado_lateral_deportes>===5, }"
              ng-click="fn=> if( <i:seleccionado_lateral_deportes> === 5 ){ dom.set( 'i:seleccionado_lateral_deportes', -1 ); dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_lateral_deportes', 5 ); ">
              <div> Fulbol Americano </div>
              <div> <img ng-show="<i:seleccionado_lateral_deportes>!==5" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                <img ng-show="<i:seleccionado_lateral_deportes>===5" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
              </div>
            </div>
            <div ng-show="<i:seleccionado_lateral_deportes>===5"> </div>
            <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
              ng-class="{ 'activo':<i:seleccionado_lateral_deportes>===6, }"
              ng-click="fn=> if( <i:seleccionado_lateral_deportes> === 6 ){ dom.set( 'i:seleccionado_lateral_deportes', -1 ); dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_lateral_deportes', 6 ); ">
              <div> Tenis </div>
              <div> <img ng-show="<i:seleccionado_lateral_deportes>!==6" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                <img ng-show="<i:seleccionado_lateral_deportes>===6" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
              </div>
            </div>
            <div ng-show="<i:seleccionado_lateral_deportes>===6"> </div>
            <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
              ng-class="{ 'activo':<i:seleccionado_lateral_deportes>===7, }"
              ng-click="fn=> if( <i:seleccionado_lateral_deportes> === 7 ){ dom.set( 'i:seleccionado_lateral_deportes', -1 ); dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_lateral_deportes', 7 ); ">
              <div> Tenis de mesa </div>
              <div> <img ng-show="<i:seleccionado_lateral_deportes>!==7" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                <img ng-show="<i:seleccionado_lateral_deportes>===7" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
              </div>
            </div>
            <div ng-show="<i:seleccionado_lateral_deportes>===7"> </div>
            <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
              ng-class="{ 'activo':<i:seleccionado_lateral_deportes>===8, }"
              ng-click="fn=> if( <i:seleccionado_lateral_deportes> === 8 ){ dom.set( 'i:seleccionado_lateral_deportes', -1 ); dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_lateral_deportes', 8 ); ">
              <div> Rugby </div>
              <div> <img ng-show="<i:seleccionado_lateral_deportes>!==8" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                <img ng-show="<i:seleccionado_lateral_deportes>===8" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
              </div>
            </div>
            <div ng-show="<i:seleccionado_lateral_deportes>===8"> </div>
            <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
              ng-class="{ 'activo':<i:seleccionado_lateral_deportes>===9, }"
              ng-click="fn=> if( <i:seleccionado_lateral_deportes> === 9 ){ dom.set( 'i:seleccionado_lateral_deportes', -1 ); dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_lateral_deportes', 9 ); ">
              <div> Voleibol </div>
              <div> <img ng-show="<i:seleccionado_lateral_deportes>!==9" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                <img ng-show="<i:seleccionado_lateral_deportes>===9" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
              </div>
            </div>
            <div ng-show="<i:seleccionado_lateral_deportes>===9"> </div>
            <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
              ng-class="{ 'activo':<i:seleccionado_lateral_deportes>===10, }"
              ng-click="fn=> if( <i:seleccionado_lateral_deportes> === 10 ){ dom.set( 'i:seleccionado_lateral_deportes', -1 ); dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_lateral_deportes', 10 ); ">
              <div> Carrera de autos </div>
              <div> <img ng-show="<i:seleccionado_lateral_deportes>!==10" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                <img ng-show="<i:seleccionado_lateral_deportes>===10" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
              </div>
            </div>
            <div ng-show="<i:seleccionado_lateral_deportes>===10"> </div>
            <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
              ng-class="{ 'activo':<i:seleccionado_lateral_deportes>===11, }"
              ng-click="fn=> if( <i:seleccionado_lateral_deportes> === 11 ){ dom.set( 'i:seleccionado_lateral_deportes', -1 ); dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_lateral_deportes', 11 ); ">
              <div> Boxeo </div>
              <div> <img ng-show="<i:seleccionado_lateral_deportes>!==11" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                <img ng-show="<i:seleccionado_lateral_deportes>===11" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
              </div>
            </div>
            <div ng-show="<i:seleccionado_lateral_deportes>===11"> </div>
            <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
              ng-class="{ 'activo':<i:seleccionado_lateral_deportes>===12, }"
              ng-click="fn=> if( <i:seleccionado_lateral_deportes> === 12 ){ dom.set( 'i:seleccionado_lateral_deportes', -1 ); dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_lateral_deportes', 12 ); ">
              <div> Futbol sala </div>
              <div> <img ng-show="<i:seleccionado_lateral_deportes>!==12" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                <img ng-show="<i:seleccionado_lateral_deportes>===12" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
              </div>
            </div>
            <div ng-show="<i:seleccionado_lateral_deportes>===12"> </div>
            <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
              ng-class="{ 'activo':<i:seleccionado_lateral_deportes>===13, }"
              ng-click="fn=> if( <i:seleccionado_lateral_deportes> === 13 ){ dom.set( 'i:seleccionado_lateral_deportes', -1 ); dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_lateral_deportes', 13 ); ">
              <div> E-futbol </div>
              <div> <img ng-show="<i:seleccionado_lateral_deportes>!==13" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                <img ng-show="<i:seleccionado_lateral_deportes>===13" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
              </div>
            </div>
            <div ng-show="<i:seleccionado_lateral_deportes>===13"> </div>
            <div class="lateral-deportes-template" ng-ripple="'#FFF'" ng-ripple-tiempo="2" ng-ripple-opacidad=".1"
              ng-class="{ 'activo':<i:seleccionado_lateral_deportes>===14, }"
              ng-click="fn=> if( <i:seleccionado_lateral_deportes> === 14 ){ dom.set( 'i:seleccionado_lateral_deportes', -1 ); dom.set( 'i:seleccionado_nivel_2_lateral_deportes', -1 ); return; } dom.set( 'i:seleccionado_lateral_deportes', 14 ); ">
              <div> E-sport + </div>
              <div> <img ng-show="<i:seleccionado_lateral_deportes>!==14" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-up-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
                <img ng-show="<i:seleccionado_lateral_deportes>===14" alt="" width="" height=""
                  src="https://casino-fortunato.com/front/[+++]/iconos\arrow-down-2.png?int=1&amp;resize=27&amp;colorize=$FFFFFF&amp;v=0">
              </div>
            </div>
            <div ng-show="<i:seleccionado_lateral_deportes>===14"> </div>
          </div>
        </div>


        <div class="juegos--container">
          <div class="envivo-slider-apuestas-container">
            <div class="envivo-slider-container-container">
              <div class="envivo-container-container-container">
                <div class="slider-container slider-container-2">
                  <div id="slider-envivos" class="slider-envivos">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> alemania &gt; busdesliga </div>
                              <div class="envivo--contenedor--superior--2--pais"> bayer leverkusen </div>
                              <div class="envivo--contenedor--superior--2--pais"> hamburgo </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> bayer l... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> hamburg... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> portugal &gt; Algo </div>
                              <div class="envivo--contenedor--superior--2--pais"> bayer leverkusen </div>
                              <div class="envivo--contenedor--superior--2--pais"> hamburgo </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> bayer l... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> hamburg... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> belgica &gt; La Liga 2 </div>
                              <div class="envivo--contenedor--superior--2--pais"> Luton Town </div>
                              <div class="envivo--contenedor--superior--2--pais"> Everton </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Luton T... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Everton... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> rusia &gt; Liga de Dimit... </div>
                              <div class="envivo--contenedor--superior--2--pais"> Luton Town </div>
                              <div class="envivo--contenedor--superior--2--pais"> Everton </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Luton T... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Everton... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> españa &gt; La Liga 3 </div>
                              <div class="envivo--contenedor--superior--2--pais"> Caribes </div>
                              <div class="envivo--contenedor--superior--2--pais"> Tiburones </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Caribes... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Tiburon... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> españa &gt; La Liga 3 </div>
                              <div class="envivo--contenedor--superior--2--pais"> Caribes </div>
                              <div class="envivo--contenedor--superior--2--pais"> Tiburones </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Caribes... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Tiburon... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> españa &gt; La Liga 3 </div>
                              <div class="envivo--contenedor--superior--2--pais"> Caribes </div>
                              <div class="envivo--contenedor--superior--2--pais"> Tiburones </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Caribes... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Tiburon... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> españa &gt; La Liga 3 </div>
                              <div class="envivo--contenedor--superior--2--pais"> Caribes </div>
                              <div class="envivo--contenedor--superior--2--pais"> Tiburones </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Caribes... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Tiburon... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> españa &gt; La Liga 3 </div>
                              <div class="envivo--contenedor--superior--2--pais"> Caribes </div>
                              <div class="envivo--contenedor--superior--2--pais"> Tiburones </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Caribes... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Tiburon... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> españa &gt; La Liga 3 </div>
                              <div class="envivo--contenedor--superior--2--pais"> Caribes </div>
                              <div class="envivo--contenedor--superior--2--pais"> Tiburones </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Caribes... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Tiburon... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> españa &gt; La Liga 3 </div>
                              <div class="envivo--contenedor--superior--2--pais"> Caribes </div>
                              <div class="envivo--contenedor--superior--2--pais"> Tiburones </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Caribes... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Tiburon... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> españa &gt; La Liga 3 </div>
                              <div class="envivo--contenedor--superior--2--pais"> Caribes </div>
                              <div class="envivo--contenedor--superior--2--pais"> Tiburones </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Caribes... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Tiburon... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> venezuela &gt; Universit... </div>
                              <div class="envivo--contenedor--superior--2--pais"> Magallanes </div>
                              <div class="envivo--contenedor--superior--2--pais"> Caracas </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Magalla... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Caracas... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> venezuela &gt; Universit... </div>
                              <div class="envivo--contenedor--superior--2--pais"> Magallanes </div>
                              <div class="envivo--contenedor--superior--2--pais"> Caracas </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Magalla... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Caracas... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> venezuela &gt; Universit... </div>
                              <div class="envivo--contenedor--superior--2--pais"> Magallanes </div>
                              <div class="envivo--contenedor--superior--2--pais"> Caracas </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Magalla... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Caracas... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> venezuela &gt; Universit... </div>
                              <div class="envivo--contenedor--superior--2--pais"> Magallanes </div>
                              <div class="envivo--contenedor--superior--2--pais"> Caracas </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Magalla... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Caracas... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide swiper-slide-2">
                        <div class="swiper-contenedor-2">
                          <div class="envivo--contenedor--superior">
                            <div class="envivo--contenedor--superior--1">
                              <div class="envivo-contenedor-superior-imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=60&amp;colorize=$FFFFFF&amp;v=1730827270">
                              </div>
                              <div class="envivo-contenedor-superior-placeholder"> Fútbol </div>
                            </div>
                            <div class="envivo--contenedor--superior--2">
                              <div class="envivo--contenedor--superior--2--pais"> venezuela &gt; Universit... </div>
                              <div class="envivo--contenedor--superior--2--pais"> Magallanes </div>
                              <div class="envivo--contenedor--superior--2--pais"> Caracas </div>
                            </div>
                            <div class="envivo--contenedor--superior--3">
                              <div class="envivo--contenedor--superior--3--imagen"> <img width="" height="" alt=""
                                  src="https://casino-fortunato.com/front/[+++]/iconos/heart.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730836918">
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--tag"> En vivo </div>
                              </div>
                              <div class="envivo--contenedor--superior--3--imagen">
                                <div class="envivo--contenedor--superior--3--liga"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/wifi.png?int=1&amp;resize=25&amp;colorize=$03A750&amp;v=1730837252">
                                  <div>45&#039; 1 parte</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="envivo--contenedor--inferior">
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Magalla... </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Empate </div>
                              </div>
                            </div>
                            <div class="envivo-contenedor-inferior-boton-contenedor">
                              <div class="envivo-boton-inferior" ng-ripple="'#FFF'" ng-ripple-tiempo="5"
                                ng-ripple-opacidad=".1">
                                <div class="envivo-boton-imagen"> <img width="" height="" alt=""
                                    src="https://casino-fortunato.com/front/[+++]/iconos/padlock.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1727869746">
                                </div>
                                <div class="envivo-boton-placeholder"> Caracas... </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <script
                  type="text/javascript"> new Swiper('#slider-envivos', { direction: 'horizontal', freeMode: { enabled: true, sticky: false, }, onAny($evento, ...$args) { dom.swiper_adicional($evento, ...$args); }, }); </script>
              </div>
              <div class="slider-container-container-container">
                <div class="slider-container-container">
                  <div class="slider-container slider-container-1">
                    <div id="slider-categorias" class="slider-categorias" ng-offset-limit="-957">
                      <div class="swiper-wrapper" ng-init="{ 'i:slider_categoria_seleccionada':-1, }">
                        <div class="swiper-slide swiper-slide-1">
                          <div class="slider-categorias-contenedor-icono" ng-ripple="'#000'" ng-ripple-tiempo="5"
                            ng-ripple-opacidad=".3" ng-class="{ 'activo':<i:slider_categoria_seleccionada>===0, }"
                            ng-click="set=>i:slider_categoria_seleccionada=0">
                            <div class="slider-categorias-contenedor-img"> <img width="" height="" alt=""
                                src="https://casino-fortunato.com/front/[+++]/iconos/windows.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1730830074">
                            </div>
                            <div class="slider-categorias-contenedor-texto"> Todos </div>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-1">
                          <div class="slider-categorias-contenedor-icono" ng-ripple="'#000'" ng-ripple-tiempo="5"
                            ng-ripple-opacidad=".3" ng-class="{ 'activo':<i:slider_categoria_seleccionada>===1, }"
                            ng-click="set=>i:slider_categoria_seleccionada=1">
                            <div class="slider-categorias-contenedor-img"> <img width="" height="" alt=""
                                src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1730827270">
                            </div>
                            <div class="slider-categorias-contenedor-texto"> Futbol </div>
                          </div>
                        </div>

                        <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

                        <div class="swiper-slide swiper-slide-1">
                          <div class="slider-categorias-contenedor-icono" ng-ripple="'#000'" ng-ripple-tiempo="5"
                            ng-ripple-opacidad=".3" ng-class="{ 'activo':<i:slider_categoria_seleccionada>===2, }"
                            ng-click="set=>i:slider_categoria_seleccionada=2">
                            <div class="slider-categorias-contenedor-img"> <img width="" height="" alt=""
                                src="https://casino-fortunato.com/front/[+++]/iconos/baskebal.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1730827328">
                            </div>
                            <div class="slider-categorias-contenedor-texto"> Baloncesto </div>
                          </div>
                        </div>

                        <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

                        
                        <div class="swiper-slide swiper-slide-1">
                          <div class="slider-categorias-contenedor-icono" ng-ripple="'#000'" ng-ripple-tiempo="5"
                            ng-ripple-opacidad=".3" ng-class="{ 'activo':<i:slider_categoria_seleccionada>===3, }"
                            ng-click="set=>i:slider_categoria_seleccionada=3">
                            <div class="slider-categorias-contenedor-img"> <img width="" height="" alt=""
                                src="https://casino-fortunato.com/front/[+++]/iconos/beisbol.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1730827486">
                            </div>
                            <div class="slider-categorias-contenedor-texto"> Beisbol </div>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-1">
                          <div class="slider-categorias-contenedor-icono" ng-ripple="'#000'" ng-ripple-tiempo="5"
                            ng-ripple-opacidad=".3" ng-class="{ 'activo':<i:slider_categoria_seleccionada>===4, }"
                            ng-click="set=>i:slider_categoria_seleccionada=4">
                            <div class="slider-categorias-contenedor-img"> <img width="" height="" alt=""
                                src="https://casino-fortunato.com/front/[+++]/iconos/hockey.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1730828814">
                            </div>
                            <div class="slider-categorias-contenedor-texto"> Hockey sobre hielo </div>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-1">
                          <div class="slider-categorias-contenedor-icono" ng-ripple="'#000'" ng-ripple-tiempo="5"
                            ng-ripple-opacidad=".3" ng-class="{ 'activo':<i:slider_categoria_seleccionada>===5, }"
                            ng-click="set=>i:slider_categoria_seleccionada=5">
                            <div class="slider-categorias-contenedor-img"> <img width="" height="" alt=""
                                src="https://casino-fortunato.com/front/[+++]/iconos/casco.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1730828868">
                            </div>
                            <div class="slider-categorias-contenedor-texto"> Fulbol Americano </div>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-1">
                          <div class="slider-categorias-contenedor-icono" ng-ripple="'#000'" ng-ripple-tiempo="5"
                            ng-ripple-opacidad=".3" ng-class="{ 'activo':<i:slider_categoria_seleccionada>===6, }"
                            ng-click="set=>i:slider_categoria_seleccionada=6">
                            <div class="slider-categorias-contenedor-img"> <img width="" height="" alt=""
                                src="https://casino-fortunato.com/front/[+++]/iconos/tenis.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1730828912">
                            </div>
                            <div class="slider-categorias-contenedor-texto"> Tenis </div>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-1">
                          <div class="slider-categorias-contenedor-icono" ng-ripple="'#000'" ng-ripple-tiempo="5"
                            ng-ripple-opacidad=".3" ng-class="{ 'activo':<i:slider_categoria_seleccionada>===7, }"
                            ng-click="set=>i:slider_categoria_seleccionada=7">
                            <div class="slider-categorias-contenedor-img"> <img width="" height="" alt=""
                                src="https://casino-fortunato.com/front/[+++]/iconos/tenis_mesa.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1730828944">
                            </div>
                            <div class="slider-categorias-contenedor-texto"> Tenis de mesa </div>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-1">
                          <div class="slider-categorias-contenedor-icono" ng-ripple="'#000'" ng-ripple-tiempo="5"
                            ng-ripple-opacidad=".3" ng-class="{ 'activo':<i:slider_categoria_seleccionada>===8, }"
                            ng-click="set=>i:slider_categoria_seleccionada=8">
                            <div class="slider-categorias-contenedor-img"> <img width="" height="" alt=""
                                src="https://casino-fortunato.com/front/[+++]/iconos/rugby.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1730828992">
                            </div>
                            <div class="slider-categorias-contenedor-texto"> Rugby </div>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-1">
                          <div class="slider-categorias-contenedor-icono" ng-ripple="'#000'" ng-ripple-tiempo="5"
                            ng-ripple-opacidad=".3" ng-class="{ 'activo':<i:slider_categoria_seleccionada>===9, }"
                            ng-click="set=>i:slider_categoria_seleccionada=9">
                            <div class="slider-categorias-contenedor-img"> <img width="" height="" alt=""
                                src="https://casino-fortunato.com/front/[+++]/iconos/voleibol.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1730829026">
                            </div>
                            <div class="slider-categorias-contenedor-texto"> Voleibol </div>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-1">
                          <div class="slider-categorias-contenedor-icono" ng-ripple="'#000'" ng-ripple-tiempo="5"
                            ng-ripple-opacidad=".3" ng-class="{ 'activo':<i:slider_categoria_seleccionada>===10, }"
                            ng-click="set=>i:slider_categoria_seleccionada=10">
                            <div class="slider-categorias-contenedor-img"> <img width="" height="" alt=""
                                src="https://casino-fortunato.com/front/[+++]/iconos/carrera.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1730829136">
                            </div>
                            <div class="slider-categorias-contenedor-texto"> Carrera de autos </div>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-1">
                          <div class="slider-categorias-contenedor-icono" ng-ripple="'#000'" ng-ripple-tiempo="5"
                            ng-ripple-opacidad=".3" ng-class="{ 'activo':<i:slider_categoria_seleccionada>===11, }"
                            ng-click="set=>i:slider_categoria_seleccionada=11">
                            <div class="slider-categorias-contenedor-img"> <img width="" height="" alt=""
                                src="https://casino-fortunato.com/front/[+++]/iconos/boxeo.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1730829174">
                            </div>
                            <div class="slider-categorias-contenedor-texto"> Boxeo </div>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-1">
                          <div class="slider-categorias-contenedor-icono" ng-ripple="'#000'" ng-ripple-tiempo="5"
                            ng-ripple-opacidad=".3" ng-class="{ 'activo':<i:slider_categoria_seleccionada>===12, }"
                            ng-click="set=>i:slider_categoria_seleccionada=12">
                            <div class="slider-categorias-contenedor-img"> <img width="" height="" alt=""
                                src="https://casino-fortunato.com/front/[+++]/iconos/salon.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1730829326">
                            </div>
                            <div class="slider-categorias-contenedor-texto"> Futbol sala </div>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-1">
                          <div class="slider-categorias-contenedor-icono" ng-ripple="'#000'" ng-ripple-tiempo="5"
                            ng-ripple-opacidad=".3" ng-class="{ 'activo':<i:slider_categoria_seleccionada>===13, }"
                            ng-click="set=>i:slider_categoria_seleccionada=13">
                            <div class="slider-categorias-contenedor-img"> <img width="" height="" alt=""
                                src="https://casino-fortunato.com/front/[+++]/iconos/soccer.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1730827270">
                            </div>
                            <div class="slider-categorias-contenedor-texto"> E-futbol </div>
                          </div>
                        </div>
                        <div class="swiper-slide swiper-slide-1">
                          <div class="slider-categorias-contenedor-icono" ng-ripple="'#000'" ng-ripple-tiempo="5"
                            ng-ripple-opacidad=".3" ng-class="{ 'activo':<i:slider_categoria_seleccionada>===14, }"
                            ng-click="set=>i:slider_categoria_seleccionada=14">
                            <div class="slider-categorias-contenedor-img"> <img width="" height="" alt=""
                                src="https://casino-fortunato.com/front/[+++]/iconos/carrera.png?int=1&amp;resize=40&amp;colorize=$FFFFFF&amp;v=1730829136">
                            </div>
                            <div class="slider-categorias-contenedor-texto"> E-sport + </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <script
                    type="text/javascript"> new Swiper('#slider-categorias', { direction: 'horizontal', freeMode: { enabled: true, sticky: false, }, onAny($evento, ...$args) { dom.swiper_adicional($evento, ...$args); }, }); </script>
                </div>
              </div>
            </div>
            <div class="apuestas--container">
              <style type="text/css">
                .apuestas-cabezera-deportes {
                  display: grid;
                  grid-template: auto/ repeat(2, 1fr);
                  height: 60px;
                }

                .boton-cabezera-apuestas-deportes {
                  background: #18212A;
                  font-size: 20px;
                  justify-content: center;
                  align-items: center;
                  display: flex;
                  flex-flow: column;
                  border-bottom: 1px solid #4F6B90;
                  transition: .5s;
                  cursor: pointer;
                  user-select: none;
                }

                .boton-cabezera-apuestas-deportes.activo {
                  border-bottom: 5px solid #FF3030;
                }

                .boton-cabezera-apuestas-deportes:hover {
                  border-bottom: 1px solid #FFFFFF;
                }

                .boton-cabezera-apuestas-deportes.activo:hover {
                  border-bottom: 5px solid #FFFFFF;
                }

                .tickect-contenedor-deportes {
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  height: calc(100% - 60px);
                  background: #18212A;
                }

                .tickect-contenedor-deportes-2 {
                  height: calc(100% - 60px);
                  background: #18212A;
                  padding: .5rem;
                  display: grid;
                  grid-template: 1fr 1fr / 1fr;
                }
              </style>
              <div class="apuestas-cabezera-deportes">
                <div class="boton-cabezera-apuestas-deportes activo"
                  ng-class="{ 'activo':<i:boton_apuestas_historial>===0, }" ng-click="set=>i:boton_apuestas_historial=0"
                  ng-ripple="'#000'" ng-ripple-tiempo="3" ng-ripple-opacidad=".3"> Tu ticket </div>
                <div class="boton-cabezera-apuestas-deportes" ng-class="{ 'activo':<i:boton_apuestas_historial>===1, }"
                  ng-click="set=>i:boton_apuestas_historial=1" ng-ripple="'#000'" ng-ripple-tiempo="3"
                  ng-ripple-opacidad=".3"> Historial </div>
              </div>
              <div style=" height: 100%; " ng-show="<i:boton_apuestas_historial>===0">
                <div class="tickect-contenedor-deportes" ng-show="<s:apuestas> === ''">
                  <div
                    style=" font-size: 20px; color: #4E6781 ; justify-content: center; align-items: center; display: flex; flex-flow: column; text-align: center; ">
                    <div> No hay selecciones<br> en el boleto de apuesta </div>
                    <div>
                      <div
                        style=" background-image: linear-gradient( 180deg ,rgba( 255, 48, 145 ) ,rgba( 255, 48, 52 ) ); padding: 1rem; border-radius: 100%; margin-top: 2rem; user-select: none; cursor: pointer; "
                        ng-ripple="'#000'" ng-ripple-tiempo="5" ng-ripple-opacidad=".3"
                        ng-click="fn=>dom.modal('#deportes_formulario_apuestas', '#deportes_formulario_apuestas_pantalla_1', 5 )">
                        <img width="" height="" alt=""
                          src="https://casino-fortunato.com/front/[+++]/iconos/pin.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1730902808">
                      </div>
                    </div>
                  </div>
                </div>
                <div style="display:none;" class="tickect-contenedor-deportes-2"
                  ng-style="{ 'display':{ 'check': <s:apuestas> === '', 'val_true':'none', 'val_false':'[delete]', } }">
                  <div id="ticket-listado-deportes" hidden=1>
                    <div style=" background: #222F3B; border-radius: 20px; font-size: 20px; ">
                      <div
                        style=" display: grid; grid-template: auto/ 1fr 2fr; padding: 1rem; padding-left: 2rem; padding-right: 2rem; border-bottom: 1px solid #4E6781 ; ">
                        <div> [ejecutar] [$placeholder].apuesta_categoria [/ejecutar] </div>
                        <div> [ejecutar] [$placeholder].apuesta_pais [/ejecutar] </div>
                      </div>
                      <div style=" padding: 1rem; padding-left: 2rem; padding-right: 2rem; ">
                        <div> [ejecutar] [$placeholder].apuesta_liga [/ejecutar] </div>
                        <div style="color: #4E6781 "> [ejecutar] [$placeholder].apuesta_nombre [/ejecutar] </div>
                        <style type="text/css">
                          .ticket-monto-apuesta {
                            display: grid;
                            grid-template: auto / 1fr 1fr;
                          }

                          .ticket-monto-apuesta-valor {
                            display: flex;
                            flex-flow: column;
                            justify-content: flex-end;
                            align-items: flex-end;
                          }
                        </style>
                        <div
                          style=" display: flex; flex-flow: column; padding-top: .5rem; padding-bottom: .5rem; grid-gap: .5rem; ">
                          <div class="ticket-monto-apuesta">
                            <div> Monto: </div>
                            <div class="ticket-monto-apuesta-valor"> [ejecutar] [$placeholder].apuesta_monto [/ejecutar]
                            </div>
                          </div>
                          <div class="ticket-monto-apuesta">
                            <div> Multiplicador: </div>
                            <div class="ticket-monto-apuesta-valor"> [ejecutar] [$placeholder].apuesta_id [/ejecutar]
                            </div>
                          </div>
                          <div class="ticket-monto-apuesta">
                            <div> Posible ganancia: </div>
                            <div class="ticket-monto-apuesta-valor"> [ejecutar] [$placeholder].apuesta_ganancia
                              [/ejecutar] </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    ng-for="fn=> let $total_ganancias = 0; let $total_apuestas = 0; <a:apuestas>.forEach( $a => { $total_ganancias += dom.transformar_a_float( $a.apuesta_ganancia ); $total_apuestas += dom.transformar_a_float( $a.apuesta_monto ); }); dom.modelos.total_ganancias = $total_ganancias; dom.modelos.total_apuestas = $total_apuestas; dom.actualizar_modelos( 's:', 'total_ganancias' ); dom.actualizar_modelos( 's:', 'total_apuestas' ); return <a:apuestas>.length; "
                    ng-for-template="#ticket-listado-deportes" ng-for-modelo="a:apuestas"
                    ng-for-placeholder="[$modelo][ [$key] ]"
                    style=" display: flex; flex-flow: column; grid-gap: 1rem; height: 175px; overflow: auto; "></div>
                  <style type="text/css">
                    .contenedor-botones-apuestas {
                      display: flex;
                      justify-content: center;
                      align-items: flex-end;
                      font-size: 18px;
                      flex-flow: column;
                    }

                    .boton-apuesta-apostar {
                      background: #FF3030;
                      padding: 1rem;
                      border-radius: 5px;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      user-select: none;
                      cursor: pointer;
                    }

                    .boton-apuesta-apostar-2 {
                      background: gray;
                      padding: 1rem;
                      border-radius: 5px;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      user-select: none;
                      cursor: pointer;
                    }

                    .resultado-apuesta-apostar {
                      display: grid;
                      grid-template: auto / repeat(2, 1fr);
                    }

                    .resultado-apuesta-valor {
                      display: flex;
                      flex-flow: column;
                      justify-content: flex-end;
                      align-items: flex-end;
                    }
                  </style>
                  <div class="contenedor-botones-apuestas">
                    <div
                      style=" display: grid; grid-template: auto / repeat( 2, 1fr ); grid-gap: .5rem; width: 100%; padding: 1rem; ">
                      <div class="boton-apuesta-apostar"> Apostar </div>
                      <div class="boton-apuesta-apostar-2" ng-ripple="'#000'" ng-ripple-tiempo="5"
                        ng-ripple-opacidad=".3"
                        ng-click="fn=>dom.modal('#deportes_formulario_apuestas', '#deportes_formulario_apuestas_pantalla_1', 5 )">
                        Crear Ticket </div>
                    </div>
                    <div style=" color: gray; width: 100%; padding: 1rem; ">
                      <div class="resultado-apuesta-apostar">
                        <div>Total de apuestas</div>
                        <div class="resultado-apuesta-valor" ng-text="<i:total_apuestas>"></div>
                      </div>
                      <div class="resultado-apuesta-apostar">
                        <div>Ganancias posibles</div>
                        <div class="resultado-apuesta-valor" ng-text="<i:total_ganancias>"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                style=" height: calc( 100% - 60px ); display: grid; grid-template: 1fr 1fr / 1fr; background: #18212A; "
                ng-show="<i:boton_apuestas_historial>===1">
                <div hidden=1 id="tickets-historial-template">
                  <div
                    style=" width: 100%; display: flex; flex-flow: column; justify-content: center; padding: 1rem; grid-gap: .5rem; font-size: 20px; border: 1px solid #4E6781; "
                    class="ng-diapositiva">
                    <div> [ejecutar] [$placeholder].apuesta_pais [/ejecutar] > [ejecutar] [$placeholder].apuesta_liga
                      [/ejecutar] </div>
                    <div> Luton Town vs Everton </div>
                    <div> [ejecutar] [$placeholder].apuesta_nombre [/ejecutar] </div>
                  </div>
                </div>
                <div class="ng-slider pointer scroll" ng-slider ng-slider-gap="0rem" ng-slider-int="10"
                  style=" width: 500px; height: auto; max-width: 100%; /*padding-bottom: 0;*/ "
                  ng-for="<a:apuestas>.length" ng-for-modelo="a:apuestas" ng-for-template="#tickets-historial-template"
                  ng-for-placeholder="[$modelo][ [$key] ]"></div>
                <div
                  style=" color: grey; display: flex; flex-flow: column; justify-content: flex-start; align-items: center; width: 100%; font-size: 20px; border-top: 1px solid #4E6781; margin-top: 1rem; padding: 1rem; ">
                  <style type="text/css">
                    .resultados-historial-apuestas {
                      display: grid;
                      grid-template: auto / repeat(2, 1fr);
                      width: 100%;
                    }

                    .resultados-historial-apuestas-numeros {
                      justify-content: flex-end;
                      align-items: flex-end;
                      display: flex;
                    }
                  </style>
                  <div class="resultados-historial-apuestas">
                    <div>Total de Apuestas</div>
                    <div class="resultados-historial-apuestas-numeros">0000</div>
                  </div>
                  <div class="resultados-historial-apuestas">
                    <div>Ganancias Posibles</div>
                    <div class="resultados-historial-apuestas-numeros">0000</div>
                  </div>
                  <div class="resultados-historial-apuestas">
                    <div>Estatus</div>
                    <div class="resultados-historial-apuestas-numeros">En desarrollo</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="botonera-deportes">
            <div class="contenedor-botones-categorias">
              <div class="botones-categorias " ng-class="{ 'activo':<i:botones_categorias>===0, }"
                ng-click="set=>i:botones_categorias=0" ng-ripple="'#FFF'" ng-ripple-tiempo="3" ng-ripple-opacidad=".1">
                Partidos en vivo </div>
              <div class="botones-categorias" ng-class="{ 'activo':<i:botones_categorias>===1, }"
                ng-click="set=>i:botones_categorias=1" ng-ripple="'#FFF'" ng-ripple-tiempo="3" ng-ripple-opacidad=".1">
                Recomendados </div>
              <div class="botones-categorias" ng-class="{ 'activo':<i:botones_categorias>===2, }"
                ng-click="set=>i:botones_categorias=2" ng-ripple="'#FFF'" ng-ripple-tiempo="3" ng-ripple-opacidad=".1">
                Próximos </div>
            </div>
            <div>
              <div class="buscador-contenedor" ng-ripple="'#FFF'" ng-ripple-tiempo="3" ng-ripple-opacidad=".1">
                <div class="buscador-input-img"> <img width="" height="" alt=""
                    src="https://casino-fortunato.com/front/[+++]/iconos/search.png?int=1&amp;resize=20&amp;colorize=$FFFFFF&amp;v=1710422954">
                </div>
                <div class="buscador-input-placeholder" ng-show="<s:input_buscador_equipo>===''"> Buscar por equipo
                </div>
                <div class="ng-input-link-boton-vacio buscador-input-oculto" ng-model="s:input_buscador_equipo"
                  contenteditable=true></div>
              </div>
            </div>
            <div class="contenedor-boton-categorias" ng-ripple="'#FFF'" ng-ripple-tiempo="3" ng-ripple-opacidad=".1">
              <div class="boton-todas-categorias" ng-ripple="'#FFF'" ng-ripple-tiempo="3" ng-ripple-opacidad=".1">
                <div> Todas las categorías </div>
                <div> <img width="" height="" alt=""
                    src="https://casino-fortunato.com/front/[+++]/iconos/arrow-down-2.png?int=1&amp;resize=30&amp;colorize=$FFFFFF&amp;v=1728132700">
                </div>
              </div>
            </div>

            <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->


          </div> <iframe id="deportes_envivos" src="/deportes_envivo_proxy" class="ng-input-link-boton-vacio"
            style=" width: 100%; "></iframe>


          <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

          <script
            type="text/javascript"> dom.interval_loader('ajuste_deportes_envivos', _ => { dom.iframe_ajustar_scroll_y('#deportes_envivos', '.pagina-interna'); }, 500); </script>



          <div class="botonera-deportes-2">
            <div class="boton-ver-todos" ng-ripple="'#FFFF'" ng-ripple-tiempo="5" ng-ripple-opacidad=".2">
              <div> Ver todos los partidos </div> <img width="" height="" alt=""
                src="https://casino-fortunato.com/front/[+++]/iconos/arrow-down-2.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1728132700">
            </div>
          </div>
          <div class="botonera-deportes-3"> Recomendados </div> <iframe id="deportes_recomendados"
            src="/recomendados_proxy" class="ng-input-link-boton-vacio"
            style=" width: 100%; "></iframe>
          <script
            type="text/javascript"> dom.interval_loader('ajuste_deportes_recomendados', _ => { dom.iframe_ajustar_scroll_y('#deportes_recomendados', '.pagina-interna'); }, 500); </script>
          <div class="botonera-deportes-2">
            <div class="boton-ver-todos" ng-ripple="'#FFFF'" ng-ripple-tiempo="5" ng-ripple-opacidad=".2">
              <div> Ver todos los partidos recomendados </div> <img width="" height="" alt=""
                src="https://casino-fortunato.com/front/[+++]/iconos/arrow-down-2.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1728132700">
            </div>
          </div>
          <div class="botonera-deportes-3"> Próximos </div> <iframe id="deportes_proximos"
            src="/proximos_proxy" class="ng-input-link-boton-vacio"
            style=" width: 100%; "></iframe>
          <script
            type="text/javascript"> dom.interval_loader('ajuste_deportes_proximos', _ => { dom.iframe_ajustar_scroll_y('#deportes_proximos', '.pagina-interna'); }, 500); </script>
          <div class="botonera-deportes-2">
            <div class="boton-ver-todos" ng-ripple="'#FFFF'" ng-ripple-tiempo="5" ng-ripple-opacidad=".2">
              <div> Ver todos los próximos partidos </div> <img width="" height="" alt=""
                src="https://casino-fortunato.com/front/[+++]/iconos/arrow-down-2.png?int=1&amp;resize=25&amp;colorize=$FFFFFF&amp;v=1728132700">
            </div>
          </div>
        </div>
      </div>
      <div class="glutters footer margin--top--4rem">
        <div class="d--pc--flex gap--3 justify-between"> <button
            class="boton--cacino boton--cacino--negro--footer no--boton"> Logo </button>
          <div> <img width="" height="" alt=""
              src="https://casino-fortunato.com/front/[+++]/cacino/loteria.png?v=1715094544" style="max-width: 100%">
          </div>
        </div>
        <div class="grid--pc--5 gap--8 margin--top--4rem">
          <div class="span--2">
            <p class="footer--interlineado--2"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
              ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
              voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
            <p class="footer--en--redes"> Siguenos en Redes Sociales </p>
            <div class="d--flex gap--d5"> <img width="" height="" alt="" style="width: 35px"
                src="https://casino-fortunato.com/front/[+++]/cacino/iconos/instagram.png?v=1715094544"> <img width=""
                height="" alt="" style="width: 35px"
                src="https://casino-fortunato.com/front/[+++]/cacino/iconos/x.png?v=1715094544"> </div>
          </div>
          <div>
            <div class="h3">Juegos</div>
            <div class="padding--top--1rem"> <a class="no--boton" href="#destacados">Destacados</a> </div>
            <div class="padding--top--1rem"> <a class="no--boton" href="#nuevos">Nuevos juegos</a> </div>
            <div class="padding--top--1rem"> <a class="no--boton" href="#clasicos">Clásicos</a> </div>
            <div class="padding--top--1rem"> <a class="no--boton" href="#juegos">Todos los juegos</a> </div>
            <div class="padding--top--1rem"> <a class="no--boton" href="#deportes">Deportes</a> </div>
          </div>
          <div>
            <div class="h3">Legales</div>
            <div class="padding--top--1rem"> <a class="no--boton" href="#nosotros">Acerca de nosotros</a> </div>
            <div class="padding--top--1rem"> <a class="no--boton" href="#terminos">Términos y condiciones</a> </div>
            <div class="padding--top--1rem"> <a class="no--boton" href="#privacidad">Política de privacidad</a> </div>
            <div class="padding--top--1rem"> <a class="no--boton" href="#responsable">Juego Responsable</a> </div>
          </div>
          <div>
            <div class="h3">Ayuda</div>
            <div class="padding--top--1rem"> <span class="no--boton">Chat de&nbsp;</span><a class="texto--blanco"
                href="#soporte">Soporte Online</a> </div>
            <div class="padding--top--1rem"> <a class="no--boton" href="#preguntas">Preguntas frecuentes</a> </div>
            <div class="padding--top--1rem"> <a class="no--boton" href="#rembolsos">Reembolsos</a> </div>
            <div class="padding--top--1rem"> <a class="no--boton" href="#contacto">Contacto</a> </div>
          </div>
        </div>
        <div class="hr margin--top--4rem"></div>
        <div class="copy--right">
          <div class="d--pc--flex gap--3 justify-between align-center margin--top--2rem">
            <div> Zenythic Client Final Test © Todos los derechos reservados, 2024. </div>
            <div> <img width="" height="" alt=""
                src="https://casino-fortunato.com/front/[+++]/cacino/pagos.png?v=1715094544"> </div>
          </div>
        </div>
      </div>
      <style type="text/css">
        .formulario-apuestas-ticket {
          border: 1px solid white;
          height: 800px;
          width: 600px;
          max-width: 100%;
          max-height: 100%;
          flex-shrink: 0;
          position: relative;
          padding-top: 3rem;
          display: flex;
          flex-flow: column;
          font-size: 20px;
          justify-content: flex-start;
          background: #18212A;
        }

        .boton-cerrar-x-formulario-apuestas {
          position: absolute;
          top: 1rem;
          right: 1rem;
          cursor: pointer;
          user-select: none;
        }

        .crear-ticket {
          display: flex;
          flex-flow: column;
          justify-content: center;
          align-items: center;
          width: 100%;
        }

        .monto-apostar-ticket {
          margin-top: 1rem;
          padding: 1rem;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-flow: column;
          background: #2B3A4F;
          border-radius: 20px;
          box-shadow: 3px 3px 3px rgba(0, 0, 0, .5), -3px -3px 3px rgba(255, 255, 255, .3);
          user-select: none;
          cursor: pointer;
          width: 170px;
        }

        .monto-apostar-ticket.inactivo *,
        .monto-apostar-ticket.inactivo {
          pointer-events: none !important;
          opacity: .5 !important;
        }

        .contenedor-campo-apostar-ticket {
          position: relative;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-flow: column;
          height: 50px;
          width: 100%;
          text-align: center;
        }

        .campo-apostar-ticket {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: calc(100% - 1rem);
          background: #121821;
          padding: .5rem;
          border-radius: 5px;
          color: white;
          font-size: 18px;
          text-align: center;
          margin-top: 1rem;
        }

        .contenedor-boton-guardar-ticket {
          padding-top: 2rem;
          padding-bottom: 2rem;
        }

        .boton-guardar-ticket {
          background-image: linear-gradient(180deg, rgba(255, 48, 145, 1), rgba(255, 48, 52, 1));
          padding: 1rem;
          border-radius: 20px;
          user-select: none;
          cursor: pointer;
        }

        .monto-apostar-ticket.select {
          display: grid;
          grid-template: auto / 1fr 25px;
        }

        .contenedor-formulario-apuestas-select {
          position: relative;
        }

        .contenedor-formulario-apuestas-select.inactivo *,
        .contenedor-formulario-apuestas-select.inactivo {
          pointer-events: none !important;
          opacity: .8 !important;
        }

        .contenedor-boton-guardar-ticket.inactivo *,
        .contenedor-boton-guardar-ticket.inactivo {
          pointer-events: none !important;
          opacity: .5 !important;
        }
      </style>
      <div id="deportes_formulario_apuestas" class="ng-modal-covertor ng-modal-inactivo"
        ng-mousein="fn=>dom.validate()">
        <div class="ng-modal-covertor-interno">
          <div id="deportes_formulario_apuestas_pantalla_1"
            class="ng-modal-pantalla ng-pantalla-inactiva formulario-apuestas-ticket">
            <div class="boton-cerrar-x-formulario-apuestas" ng-click="fn=>dom.cerrar_modals()"> <img
                src="https://casino-fortunato.com/front/[+++]/iconos/times.png?int=1&amp;resize=20&amp;colorize=$FFFFFF&amp;v=1709547330"
                alt="" height="" width=""> </div>
            <div style="flex-shrink: 0;height: 80px;"> Realizar Ticket </div>
            <div class="crear-ticket">
              <div style=" display: grid; grid-template: auto / repeat( 3, 1fr ); grid-gap: 1rem; "> <label
                  class="monto-apostar-ticket" ng-ripple="'#FFF'" ng-ripple-tiempo="7" ng-ripple-opacidad=".1">
                  <div> Monto a apostar </div>
                  <div class="contenedor-campo-apostar-ticket"> <input
                      class=" ng-input-link-boton-vacio campo-apostar-ticket " ng-model="f:apuesta_monto" type="number"
                      ng-input="fn=> let $numero = dom.get('s:apuesta_monto'); if( $numero.length > 9 ){ $numero = $numero.substr( 0, 9 ); dom.set('f:apuesta_monto', $numero ); } ">
                  </div>
                </label> <label class="monto-apostar-ticket" ng-ripple="'#FFF'" ng-ripple-tiempo="7"
                  ng-ripple-opacidad=".1"
                  ng-class="{ 'activo':<s:apuesta_apuesta_id>!=='', 'inactivo':<s:apuesta_apuesta_id>==='' }">
                  <div> Multiplicador </div>
                  <div class="contenedor-campo-apostar-ticket">
                    <div class=" ng-input-link-boton-vacio campo-apostar-ticket " type="number" readonly=1
                      ng-text="<f:apuesta_apuesta_id>"> </div>
                  </div>
                </label> <label class="monto-apostar-ticket" ng-ripple="'#FFF'" ng-ripple-tiempo="7"
                  ng-ripple-opacidad=".1"
                  ng-class="{ 'activo':<s:apuesta_apuesta_id>!=='', 'inactivo':<s:apuesta_apuesta_id>==='' }">
                  <div> Ganancias </div>
                  <div class="contenedor-campo-apostar-ticket">
                    <div class=" ng-input-link-boton-vacio campo-apostar-ticket " type="number" readonly=1
                      ng-text="fn=> let $resultado = `${ <f:apuesta_apuesta_id> * <f:apuesta_monto> }`; $resultado = $resultado.split('.'); let $numero = $resultado[0]; let $decimal = $resultado[1]; if( $decimal && $decimal.length > 3 ) $decimal = $decimal.substr( 0, 2 ); else $decimal = 0; dom.modelos.apuesta_ganancia = `${ $numero }.${ $decimal }`; return dom.get('s:apuesta_ganancia'); ">
                    </div>
                  </div>
                </label> </div>
              <div style=" display: grid; grid-template: auto / repeat( 3, 1fr ); grid-gap: 1rem; ">
                <div class="contenedor-formulario-apuestas-select"> <label class="monto-apostar-ticket select"
                    ng-ripple="'#FFF'" ng-ripple-tiempo="7" ng-ripple-opacidad=".1"
                    ng-click="fn=> document.querySelector('#categorias-selector-formulario').classList.add('activo'); ">
                    <div ng-show="<s:apuesta_categoria>===''"> Categoria </div>
                    <div ng-show="<s:apuesta_categoria>!==''" ng-text="<s:apuesta_categoria>"></div> <img
                      src="https://casino-fortunato.com/front/[+++]/iconos/arrow-down-2.png?int=1&amp;resize=22&amp;colorize=$FFFFFF&amp;v=1728132700"
                      alt="" width="" height="">
                  </label>
                  <div id="categorias-selector-formulario" class="ng-select-class">
                    <div class="ng-select-class-opcion notocar"
                      ng-click-1="fn=> setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      <img
                        src="https://casino-fortunato.com/front/[+++]/iconos/times.png?int=1&amp;resize=20&amp;colorize=$FFFFFF&amp;v=1709547330"
                        alt="" height="" width="">
                      <div> ─ </div>
                      <div> Cerrar </div>
                    </div>
                    <div class="ng-select-class-opcion notocar" ng-value="" ng-value-id=""
                      ng-click-1="fn=> dom.set('s:apuesta_categoria', $target.getAttribute('ng-value') ); dom.set('s:apuesta_categoria_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      <img
                        src="https://casino-fortunato.com/front/[+++]/iconos/trash.png?int=1&amp;resize=20&amp;colorize=$FFFFFF&amp;v=1710423858"
                        alt="" height="" width="">
                      <div> ─ </div>
                      <div> Vaciar </div>
                    </div>
                    <div class="ng-select-class-opcion" ng-value="Futbol" ng-value-id="1"
                      ng-click-1="fn=> dom.set('s:apuesta_categoria', $target.getAttribute('ng-value') ); dom.set('s:apuesta_categoria_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      Futbol </div>
                    <div class="ng-select-class-opcion" ng-value="Baloncesto" ng-value-id="2"
                      ng-click-1="fn=> dom.set('s:apuesta_categoria', $target.getAttribute('ng-value') ); dom.set('s:apuesta_categoria_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      Baloncesto </div>
                    <div class="ng-select-class-opcion" ng-value="Beisbol" ng-value-id="3"
                      ng-click-1="fn=> dom.set('s:apuesta_categoria', $target.getAttribute('ng-value') ); dom.set('s:apuesta_categoria_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      Beisbol </div>
                    <div class="ng-select-class-opcion" ng-value="Hockey sobre hielo" ng-value-id="4"
                      ng-click-1="fn=> dom.set('s:apuesta_categoria', $target.getAttribute('ng-value') ); dom.set('s:apuesta_categoria_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      Hockey sobre hielo </div>
                    <div class="ng-select-class-opcion" ng-value="Fulbol Americano" ng-value-id="5"
                      ng-click-1="fn=> dom.set('s:apuesta_categoria', $target.getAttribute('ng-value') ); dom.set('s:apuesta_categoria_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      Fulbol Americano </div>
                    <div class="ng-select-class-opcion" ng-value="Tenis" ng-value-id="6"
                      ng-click-1="fn=> dom.set('s:apuesta_categoria', $target.getAttribute('ng-value') ); dom.set('s:apuesta_categoria_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      Tenis </div>
                    <div class="ng-select-class-opcion" ng-value="Tenis de mesa" ng-value-id="7"
                      ng-click-1="fn=> dom.set('s:apuesta_categoria', $target.getAttribute('ng-value') ); dom.set('s:apuesta_categoria_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      Tenis de mesa </div>
                    <div class="ng-select-class-opcion" ng-value="Rugby" ng-value-id="8"
                      ng-click-1="fn=> dom.set('s:apuesta_categoria', $target.getAttribute('ng-value') ); dom.set('s:apuesta_categoria_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      Rugby </div>
                    <div class="ng-select-class-opcion" ng-value="Voleibol" ng-value-id="9"
                      ng-click-1="fn=> dom.set('s:apuesta_categoria', $target.getAttribute('ng-value') ); dom.set('s:apuesta_categoria_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      Voleibol </div>
                    <div class="ng-select-class-opcion" ng-value="Carrera de autos" ng-value-id="10"
                      ng-click-1="fn=> dom.set('s:apuesta_categoria', $target.getAttribute('ng-value') ); dom.set('s:apuesta_categoria_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      Carrera de autos </div>
                    <div class="ng-select-class-opcion" ng-value="Boxeo" ng-value-id="11"
                      ng-click-1="fn=> dom.set('s:apuesta_categoria', $target.getAttribute('ng-value') ); dom.set('s:apuesta_categoria_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      Boxeo </div>
                    <div class="ng-select-class-opcion" ng-value="Futbol sala" ng-value-id="12"
                      ng-click-1="fn=> dom.set('s:apuesta_categoria', $target.getAttribute('ng-value') ); dom.set('s:apuesta_categoria_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      Futbol sala </div>
                    <div class="ng-select-class-opcion" ng-value="E-futbol" ng-value-id="13"
                      ng-click-1="fn=> dom.set('s:apuesta_categoria', $target.getAttribute('ng-value') ); dom.set('s:apuesta_categoria_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      E-futbol </div>
                    <div class="ng-select-class-opcion" ng-value="E-sport +" ng-value-id="14"
                      ng-click-1="fn=> dom.set('s:apuesta_categoria', $target.getAttribute('ng-value') ); dom.set('s:apuesta_categoria_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      E-sport + </div>
                  </div>
                </div>
                <div class="contenedor-formulario-apuestas-select"
                  ng-class="{ 'activo':<s:apuesta_categoria>!=='', 'inactivo':<s:apuesta_categoria>==='', }"> <label
                    class="monto-apostar-ticket select" ng-ripple="'#FFF'" ng-ripple-tiempo="7" ng-ripple-opacidad=".1"
                    ng-click="fn=> document.querySelector('#paises-selector-formulario').classList.add('activo'); ">
                    <div ng-show="<s:apuesta_pais>===''"> Pais </div>
                    <div ng-show="<s:apuesta_pais>!==''" ng-text="<s:apuesta_pais>"></div> <img
                      src="https://casino-fortunato.com/front/[+++]/iconos/arrow-down-2.png?int=1&amp;resize=22&amp;colorize=$FFFFFF&amp;v=1728132700"
                      alt="" width="" height="">
                  </label>
                  <div id="paises-selector-formulario" class="ng-select-class">
                    <div class="ng-select-class-opcion notocar"
                      ng-click-1="fn=> setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      <img
                        src="https://casino-fortunato.com/front/[+++]/iconos/times.png?int=1&amp;resize=20&amp;colorize=$FFFFFF&amp;v=1709547330"
                        alt="" height="" width="">
                      <div> ─ </div>
                      <div> Cerrar </div>
                    </div>
                    <div class="ng-select-class-opcion notocar" ng-value="" ng-value-id=""
                      ng-click-1="fn=> dom.set('s:apuesta_pais', $target.getAttribute('ng-value') ); dom.set('s:apuesta_pais_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      <img
                        src="https://casino-fortunato.com/front/[+++]/iconos/trash.png?int=1&amp;resize=20&amp;colorize=$FFFFFF&amp;v=1710423858"
                        alt="" height="" width="">
                      <div> ─ </div>
                      <div> Vaciar </div>
                    </div>
                    <div hidden=1 id="lista_de_paises">
                      <div class="ng-select-class-opcion" ng-value=" [ejecutar] [$placeholder].nombre [/ejecutar] "
                        ng-value-id=" [ejecutar] [$placeholder].id [/ejecutar] "
                        ng-click-1="fn=> dom.set('s:apuesta_pais', $target.getAttribute('ng-value') ); dom.set('s:apuesta_pais_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); "
                        style="padding-bottom: 1rem;"> [ejecutar] [$placeholder].nombre [/ejecutar] </div>
                    </div>
                    <div
                      ng-for="fn=> try{ return Array.from( dom.get('o:paises_ligas')[ <i:apuesta_categoria_id> ] ).length; }catch( _ ){ return 0; } "
                      ng-for-template="#lista_de_paises"
                      ng-for-placeholder="dom.get('o:paises_ligas')[ <i:apuesta_categoria_id> ][ [$key] ]"></div>
                  </div>
                </div>
                <div class="contenedor-formulario-apuestas-select"
                  ng-class="{ 'activo': <s:apuesta_pais>!=='' , 'inactivo': <s:apuesta_pais>==='' , }"> <label
                    class="monto-apostar-ticket select" ng-ripple="'#FFF'" ng-ripple-tiempo="7" ng-ripple-opacidad=".1"
                    ng-click="fn=> document.querySelector('#ligas-selector-formulario').classList.add('activo'); ">
                    <div ng-show="<s:apuesta_liga>===''"> Liga </div>
                    <div ng-show="<s:apuesta_liga>!==''" ng-text="<s:apuesta_liga>"></div> <img
                      src="https://casino-fortunato.com/front/[+++]/iconos/arrow-down-2.png?int=1&amp;resize=22&amp;colorize=$FFFFFF&amp;v=1728132700"
                      alt="" width="" height="">
                  </label>
                  <div id="ligas-selector-formulario" class="ng-select-class">
                    <div class="ng-select-class-opcion notocar"
                      ng-click-1="fn=> setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      <img
                        src="https://casino-fortunato.com/front/[+++]/iconos/times.png?int=1&amp;resize=20&amp;colorize=$FFFFFF&amp;v=1709547330"
                        alt="" height="" width="">
                      <div> ─ </div>
                      <div> Cerrar </div>
                    </div>
                    <div class="ng-select-class-opcion notocar" ng-value="" ng-value-id=""
                      ng-click-1="fn=> dom.set('s:apuesta_liga', $target.getAttribute('ng-value') ); dom.set('s:apuesta_liga_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      <img
                        src="https://casino-fortunato.com/front/[+++]/iconos/trash.png?int=1&amp;resize=20&amp;colorize=$FFFFFF&amp;v=1710423858"
                        alt="" height="" width="">
                      <div> ─ </div>
                      <div> Vaciar </div>
                    </div>
                    <div hidden=1 id="lista_de_ligas">
                      <div class="ng-select-class-opcion" ng-value=" [ejecutar] [$placeholder].liga [/ejecutar] "
                        ng-value-id=" [ejecutar] [$placeholder].id [/ejecutar] "
                        ng-click-1="fn=> dom.set('s:apuesta_liga', $target.getAttribute('ng-value') ); dom.set('s:apuesta_liga_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); dom.set('a:apuestas_listado', [ { 'valor': [$placeholder].dos_por_uno_equipo_1, 'nombre':`1x2 a favor de ${ [$placeholder]['equipo_1'] }`, }, { 'valor': [$placeholder].dos_por_uno_equipo_2, 'nombre':`1x2 a favor de ${ [$placeholder]['equipo_2'] }`, }, { 'valor': [$placeholder].dos_por_uno_equipo_empate, 'nombre':`1x2 a favor de empate`, }, { 'valor': [$placeholder].doble_oportunidad_equipo_1_empate, 'nombre':`Doble Oportunidad a favor de ${ [$placeholder]['equipo_1'] } o empate`, }, { 'valor': [$placeholder].doble_oportunidad_equipo_2_empate, 'nombre':`Doble Oportunidad a favor de ${ [$placeholder]['equipo_2'] } o empate`, }, { 'valor': [$placeholder].doble_oportunidad_equipo_1_2, 'nombre':`Doble Oportunidad a favor de no hay empate`, }, { 'valor': [$placeholder].total_mas_de_valor_1, 'nombre':`Puntaje mas de ${ [$placeholder]['total_mas_de_nombre_1'] }`, }, { 'valor': [$placeholder].total_mas_de_valor_2, 'nombre':`Puntaje mas ${ [$placeholder]['total_mas_de_nombre_2'] }`, }, { 'valor': [$placeholder].total_menos_de_valor_1, 'nombre':`Puntaje menos ${ [$placeholder]['total_menos_de_nombre_1'] }`, }, { 'valor': [$placeholder].total_menos_de_valor_2, 'nombre':`Puntaje menos ${ [$placeholder]['total_menos_de_nombre_2'] }`, }, ]); "
                        style="padding-bottom: 1rem;"> [ejecutar] [$placeholder].liga [/ejecutar] </div>
                    </div>
                    <div ng-for="<a:ligas>.length" ng-for-modelo="a:ligas" ng-for-placeholder="[$modelo][ [$key] ]"
                      ng-for-template="#lista_de_ligas"></div>
                  </div>
                </div>
              </div>
              <div style=" width: calc( 100% - 5rem ); ">
                <div class="contenedor-formulario-apuestas-select" style=" width: 100%; "
                  ng-class="{ 'activo':<a:apuestas_listado>.length>0, 'inactivo':<a:apuestas_listado>.length === 0, }">
                  <label style=" width: 100%; " class="monto-apostar-ticket select" ng-ripple="'#FFF'"
                    ng-ripple-tiempo="7" ng-ripple-opacidad=".1"
                    ng-click="fn=> document.querySelector('#apuestas-selector-lista').classList.add('activo'); ">
                    <div ng-show="<s:apuesta_apuesta>===''"> Apuestas </div>
                    <div ng-show="<s:apuesta_apuesta>!==''" ng-text="<s:apuesta_apuesta>"></div> <img
                      src="https://casino-fortunato.com/front/[+++]/iconos/arrow-down-2.png?int=1&amp;resize=22&amp;colorize=$FFFFFF&amp;v=1728132700"
                      alt="" width="" height="">
                  </label>
                  <div id="apuestas-selector-lista" class="ng-select-class">
                    <div class="ng-select-class-opcion notocar"
                      ng-click-1="fn=> setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      <img
                        src="https://casino-fortunato.com/front/[+++]/iconos/times.png?int=1&amp;resize=20&amp;colorize=$FFFFFF&amp;v=1709547330"
                        alt="" height="" width="">
                      <div> ─ </div>
                      <div> Cerrar </div>
                    </div>
                    <div class="ng-select-class-opcion notocar" ng-value="" ng-value-id=""
                      ng-click-1="fn=> dom.set('s:apuesta_apuesta', $target.getAttribute('ng-value') ); dom.set('s:apuesta_apuesta_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); ">
                      <img
                        src="https://casino-fortunato.com/front/[+++]/iconos/trash.png?int=1&amp;resize=20&amp;colorize=$FFFFFF&amp;v=1710423858"
                        alt="" height="" width="">
                      <div> ─ </div>
                      <div> Vaciar </div>
                    </div>
                    <div hidden=1 id="lista_de_apuestas">
                      <div class="ng-select-class-opcion" ng-value=" [ejecutar] [$placeholder].nombre [/ejecutar] "
                        ng-value-id=" [ejecutar] [$placeholder].valor [/ejecutar] "
                        ng-click-1="fn=> dom.set('s:apuesta_apuesta', $target.getAttribute('ng-value') ); dom.set('s:apuesta_apuesta_id', $target.getAttribute('ng-value-id') ); setTimeout( _ => $target.closest('.ng-select-class').classList.remove('activo'), 100 ); "
                        style="padding-bottom: 1rem;"> [ejecutar] [$placeholder].nombre [/ejecutar] </div>
                    </div>
                    <div ng-for="<a:apuestas_listado>.length" ng-for-template="#lista_de_apuestas"
                      ng-for-modelo="a:apuestas_listado" ng-for-placeholder="[$modelo][ [$key] ]"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="contenedor-boton-guardar-ticket"
              ng-class="{ 'activo': <s:apuesta_apuesta_id>!=='', 'inactivo': <s:apuesta_apuesta_id>==='', }"
              style=" display: flex; grid-gap: 1rem; ">
              <div ng-ripple="'#000'" ng-ripple-tiempo="3" ng-ripple-opacidad=".3" class="boton-guardar-ticket"
                ng-click="fn=> let $apuestas = dom.get('a:apuestas'); $apuestas.push({ 'apuesta_nombre': <s:apuesta_apuesta>, 'apuesta_id': <s:apuesta_apuesta_id>, 'apuesta_liga': <s:apuesta_liga>, 'apuesta_liga_id': <s:apuesta_liga_id>, 'apuesta_pais': <s:apuesta_pais>, 'apuesta_pais_id': <s:apuesta_pais_id>, 'apuesta_categoria': <s:apuesta_categoria>, 'apuesta_categoria_id': <s:apuesta_categoria_id>, 'apuesta_monto': <s:apuesta_monto>, 'apuesta_ganancia': <s:apuesta_ganancia>, }); localStorage.setItem('apuestas', JSON.stringify( $apuestas ) ); dom.set('a:apuestas', $apuestas ); dom.cerrar_modals(); dom.crear_mensaje('Ticket creado'); ">
                Guardar Ticket </div>
              <div ng-ripple="'#000'" ng-ripple-tiempo="3" ng-ripple-opacidad=".3" class="boton-guardar-ticket"
                ng-click="fn=> let $apuestas = dom.get('a:apuestas'); $apuestas.push({ 'apuesta_nombre': <s:apuesta_apuesta>, 'apuesta_id': <s:apuesta_apuesta_id>, 'apuesta_liga': <s:apuesta_liga>, 'apuesta_liga_id': <s:apuesta_liga_id>, 'apuesta_pais': <s:apuesta_pais>, 'apuesta_pais_id': <s:apuesta_pais_id>, 'apuesta_categoria': <s:apuesta_categoria>, 'apuesta_categoria_id': <s:apuesta_categoria_id>, 'apuesta_monto': <s:apuesta_monto>, 'apuesta_ganancia': <s:apuesta_ganancia>, }); localStorage.setItem('apuestas', JSON.stringify( $apuestas ) ); dom.set('a:apuestas', $apuestas ); dom.crear_mensaje('Ticket creado'); ">
                Guardar y continuar </div>
            </div>
          </div>
        </div>
      </div>
      <script> /*dom.funciones_onload.push( _ => { dom.modal('#deportes_formulario_apuestas', '#deportes_formulario_apuestas_pantalla_1', 10 ) })*/</script>
    </div>
  </div>
  <script type="text/javascript" src="https://casino-fortunato.com/front/[+++]/dom/dom.load.js?v=1727515450"></script>
</body>

</html>