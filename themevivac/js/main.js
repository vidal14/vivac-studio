
jQuery(document).ready(function($){
    
    console.log('lalalalla');


  var $body = $("body");
  //SCROLL ESCONDIDO DURANTE EL PRELOAD
  $('body').addClass("scroll-oculto");

  //FUNCION DEVOLVER SCROLL PARA PASAR DESPÚES DEL PRELOAD
  function overflowVisible() {
    $body.removeClass("scroll-oculto");
  }

  //PRELOAD
  $(window).on("load", function () {

    var preload = $(".preload"),
      preloadImg = $(".preload img");

    // preloadImg.css('opacity', '0');

    var tlPreload = new TimelineLite({ onComplete: overflowVisible });

    // tlPreload.to(preloadDos, 0.5, { width: 0, ease: Power1.ease, delay:1 }, "-=0");
    // tlPreload.to(preloadVideo, 0.5, { autoAlpha: 0, transform: "scale(0.9)", ease: Power1.ease }, "-=0");
    tlPreload.to(preloadImg, 0.5, { scale: 0.8, autoAlpha: 0, ease: Power1.ease }, "-=0");
    tlPreload.to(preload, 0.5, { autoAlpha: 0, ease: Power1.ease }, "-=0");

  });
  


  // Import stylesheets
  //import "../css/style.css";

  new Vue({
    el: '#app',
    data: {
      paso: 1,
      pasoMaximo: 3,
    },
    methods: {
      siguientePaso: function () {
        if (this.paso < this.pasoMaximo) {
          this.paso++;
        }
      }
    }
  })

  

 wow = new WOW({
   boxClass: "view", // default
   animateClass: "animated", // default
   offset: 0, // default
   mobile: true, // default
   live: true // default
 });
 wow.init();

  
  




//MENU FULLWIDTH OCULTO

   var $menuOculto = $(".menu-wrapper"),
     $header = $(".header"),
     $burguer = $(".header-nav-icon"),
     $idiomas = $(".header-idiomas"),
     $logoMenu = $("#logo-menu"),
     $menuNav = $(".menu, .menu-wrapper .header-idiomas"),
     $video = $(".menu-background video"),
     $estado = true;

     //Línea de tiempo
     var tl = new TimelineLite();  

     
     //Evento click para activar el menú
    $burguer.click(function(){
      
      TweenLite.set($menuOculto, { className: "-=menu-oculto" });

        if ($estado) {
          tl.to($menuOculto, 1, {
            transform: "translateX(0)",
           ease: Power1.easeInOut
         });
          tl.to($video, 0.5, { autoAlpha: 1 }, "-=0.1");
          tl.to($logoMenu, 0.5, { autoAlpha: 1 }, "-=0.2");
          tl.to($menuNav, 0.5, { autoAlpha: 1, transform:"translateY(0)" }, "-=0.2");
          tl.timeScale(1);
          tl.restart(); 
          TweenLite.set($burguer, { className: "+=is-open" });
          TweenLite.set($body, { className: "+=scroll-oculto" });
         $estado = false;
       } 
        
       else {
           tl.reverse();
           tl.timeScale(5);
           TweenLite.set($burguer, { className: "-=is-open" });
          //  TweenLite.set($menuOculto, {
          //    className: "+=menu-oculto", delay:1
          //  });
           TweenLite.set($body, {
             className: "-=scroll-oculto"
           });
           $estado = true;
       }
           
    })
    

  
//FORMULARIO DE CONTACTO OCULTO

        var $formWrapper = $(".form-wrapper"),
            $form = $(".form-wrapper-info"),
            $formInfo = $(".form-info"),
            $botonForm = $(".boton-activar"),
            $botonClose = $(".form-icon, .form-wrapper-close");
   
        //Línea de tiempo
        var tlForm = new TimelineLite();
      
        //Evento click para activar el formulario

        $botonForm.click(function (e) {

          e.preventDefault();
            //TweenLite.set($formWrapper, { autoAlpha: "1" });
           //$formWrapper.css("visibility", "visible");

           tlForm
             .to($formWrapper, 0.5, { autoAlpha: "1", ease: Power1.ease })
             .to($form, 0.6, { transform: "translateX(0)", ease: Power1.ease },"-=0.2")
             .to($formInfo, 0.2, { autoAlpha:1, tranform:"translateY(0)", ease: Power1.ease });
           tlForm.restart();
           tlForm.timeScale(1);
        });

          //Click para cerrar el formulario

        $botonClose.click(function (e){
          tlForm.timeScale(2);
          tlForm.reverse(); 
        });

                       
     
         

//AJAX LOOPS SECCION PROYECTOS

  var $botonFiltro = $('.proyectos-filtro button'),
    $proye = $('.prueba-container-project'),
    $button = $('.proyectos-filtro button');


  
  var tlPro = new TimelineLite();
  var tlProEnt = new TimelineLite();

  function animacionProyectos() {
   
    tlPro.to($proye, 0.4, { transform: "scale(0.5)", ease: Power1.ease })
      .to($proye, 0.2, { autoAlpha: "0", ease: Power1.ease }, "-=0.2");
  }

  function animacionProyectosEntrada() {
    tlProEn
      .to($proye, 0.4, { autoAlpha: "0", ease: Power1.ease })
      .to($proye, 0.2, { autoAlpha: "1", ease: Power1.ease }, "-=0.2");
  }


    //Evento de click en boton filtro         
  $botonFiltro.click(function () {

      //AJAX

    console.log('pinchado');
    $(this).addClass('active');
    $button.not(this).removeClass('active');
    
    
    $proye = $(".prueba-container-project");

    $.ajax({
      
      beforeSend: animacionProyectos(),
      
      type: "POST", // Esto no cambia
      url: $(this).data("ajax"), // Esta es la dirección de /wp-admin/admin-ajax.php
      data: {
        action: "proyectosWeb",
        postCategory: $(this).data("category")
      }, // action es la función que se ejecutará y lo siguiente las variables que le pasamos
      success: function (data) {
        $("#contain-proyectos").html(data);
        
        
      },
      error: function (error) {
        console.log(error);
      }
    });
  });





//EJEMPLO DE UN PROYECTO CONCRETO

        var $project = $(".wrapper-projects, .container-projects"),
          $ejemploWrapper = $(".proyecto-wrapper"),
          $ejemploProyecto = $(".proyecto-wrapper .proyecto-wrapper-right"),
          $ejemploInfo = $(".proyecto-info-wrapper"),
          $botonCloseEj = $("#form-icon, .proyecto-wrapper-left");
   
        //Línea de tiempo
        var tlProject = new TimelineLite();
      
        
        //Función salida entrada proyecto concreto

        function abrirProyecto() {
          $body.css('overflow', 'hidden');
          TweenLite.set($ejemploWrapper, { visibility: "visible" });

          tlProject
            .to($ejemploWrapper, 0.3, {
              autoAlpha: "1",
              ease: Power3.ease
            })
            .to($ejemploProyecto, 0.5, { transform: "translateX(0)", ease: Power3.ease }, "-=0.1")
            .to($ejemploInfo, 0.3, {
              autoAlpha: 1,
              transform: "translateY(0px)",
              ease: Power3.ease
            });
          tlProject.restart();
          tlProject.timeScale(1);
        }


        //Evento click para activar el proyecto

        $project.on("click", ".project-in", function () {

          //AJAX

          $.ajax({
            type: "POST", // Esto no cambia
            url: $(this).data("ajax"), // Esta es la dirección de /wp-admin/admin-ajax.php
            data: {
              action: "ejemploProyecto",
              postID: $(this).data("post")
            }, // action es la función que se ejecutará y lo siguiente las variables que le pasamos
            success: function (data) {
              abrirProyecto();
              $("#contain").html(data);
            },
            error: function (error) {
              console.log(error);
            }
          });
        });

          //Click para cerrar el proyecto

        $botonCloseEj.click(function (e){
        
          tlProject.reverse();
          tlProject.timeScale(2);
           $body.css("overflow", "auto");
           console.log('cerrado');
          
        })

 });






//MAPA - API GOOGLE MAPS

google.maps.event.addDomListener(window, 'load', init);

function init() {

  var mapOptions = { // How zoomed in you want the map to start at (always required)
    zoom: 16, center: new google.maps.LatLng(38.8196202, -0.6003706000000193), styles: [{ "stylers": [{ "saturation": -100 }, { "gamma": 1 }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "off" }] }, { "featureType": "poi.business", "elementType": "labels.text", "stylers": [{ "visibility": "off" }] }, { "featureType": "poi.business", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "poi.place_of_worship", "elementType": "labels.text", "stylers": [{ "visibility": "off" }] }, { "featureType": "poi.place_of_worship", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "road", "elementType": "geometry", "stylers": [{ "visibility": "simplified" }] }, { "featureType": "water", "stylers": [{ "visibility": "on" }, { "saturation": 50 }, { "gamma": 0 }, { "hue": "#50a5d1" }] }, { "featureType": "administrative.neighborhood", "elementType": "labels.text.fill", "stylers": [{ "color": "#333333" }] }, { "featureType": "road.local", "elementType": "labels.text", "stylers": [{ "weight": 0.5 }, { "color": "#333333" }] }, { "featureType": "transit.station", "elementType": "labels.icon", "stylers": [{ "gamma": 1 }, { "saturation": 50 }] }]
  }; // This is where you would paste any style found on Snazzy Maps. // The latitude and longitude to center the map (always required) // How you would like to style the map. // New York


  // Get the HTML DOM element that will contain your map 
  // We are using a div with id="map" seen below in the <body>
  var mapElement = document.getElementById('mapa');

  // Create the Google Map using our element and options defined above
  var map = new google.maps.Map(mapElement, mapOptions);

  // Let's also add a marker while we're at it
  var marker = new google.maps.Marker({
    position: new google.maps.LatLng(38.8196202, -0.6003706000000193),
    map: map,
    title: "Vivac Estudi"
  });
}

     





