<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/icons/escudo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <link rel="stylesheet" href="./assets/css/niveles.css">
    <link rel="stylesheet" href="./assets/css/networks.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
  
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">
    <script src="https://www.google.com/recaptcha/api.js?hl=en"></script>
    
      
    <title>Awari Digital</title>
</head>

<body>

    
    
    

<style>
        .abajo{
            background-color: var(--color1);
        }

#valores{
    margin-top:-160px;
}


#valores .flip {
    height: 200px;
    padding: 0.6em;
    
    
    
    
}

#valores .card {
        
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform .6s;
    transform-style: preserve-3d;
    border-radius:12px;
    border-color:none;
    background-color: white;
}

#valores .flip:nth-child(1):hover .card {
    transform: rotateY(180deg);
    
}

#valores .front,
#valores .back {
    
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    cursor: default;
}

#valores .front {
    
    color: var(--color7);
    
    
}

#valores .back {
    text-align:start;
    border-radius: 12px;
    color: white;
    transform: rotateY(180deg);
    background-color: var(--color4);
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(12, 90, 219) 0px 0px 0px 3px;
    padding: 0.5em;
    
    
}   
#valores .back h4{
    text-align:center;
   
       
}     
#valores .back span{
   margin-left:1px;
   margin-right:2px;
   
       
}     




#valores2{
    position:absolute;
    text-align: center;
    z-index:99;
    top:8%;
    left:100px;
    
      
}


#valores2 .flip {
    height: 250px;
    padding: 0.6em;
    overflow:hidden;
    
    
}

#valores2 .card {
    
    
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform .6s;
    transform-style: preserve-3d;
    border-radius:12px;
    border-color:var(--color4);
    background-color: transparent;
}

#valores2 .flip:nth-child(1):hover .card {
    transform: rotateY(180deg);
    
}

#valores2 .front,
#valores2 .back {
    
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    cursor: default;
}



#valores2 .front {
    color: white;
    padding: 0.5em;
    
}

#valores2 .back {
    border-radius: 12px;
    color: white;
    transform: rotateY(180deg);
    background-color: var(--color4);
    padding: .8em;
    font-size:1rem;
    
}  
#valores2 .back span{
    
    text-align:start;
}  
#div-video{
    position:relative;
    background-color: var(--color5);
    margin:0;
    overflow: hidden;
        
}

#div-video video{
    opacity: .3;
    
    
}



.button1 {
background-color: var(--color4);
border: 1px solid var(--color4);
border-radius: 10px;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
transition: transform .3s ease-in-out;
}
.button1 a{

        color:white;
}





.button1:hover {

transform: scale(1.06);
background-color: var(--color1);
border: 1px solid var(--color1);
}

.button2 {
background-color: transparent;
border: 1px solid white;
border-radius: 10px;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
transition: transform .3s ease-in-out;
}
.button2 a{

        color:white;
}





.button2:hover {

transform: scale(1.06);
background-color: var(--color1);
border: 1px solid var(--color1);
}
        
        
     /* separador */
.separador {
  background-color: var(--color3);
  height: 4px;
  width: 50px;
  transition: width 2s;
}

#div-hover:hover .separador {
  background-color:  var(--color3);
  width: 180px;
}  

#noticias:hover .separador {
  background-color:  var(--color3);
  width: 180px;
} 
.div-banner {
        
    position: absolute; 
    left: 10px; 
    display: flex; 
    justify-content: center; 
    align-items: flex-end; 
    height: 100%; 
    padding-bottom: 25%;
        }
.tittle-banner1{
    color:white;
    
    font-weight: bold;
}
.tittle-banner2{
    color:white;
    
    font-weight: bold;
}
/* Destilo del separador*/
.bar-main {
    width: 10%;
	margin: 18px 0 45px;
    text-align: start;
}
.bar.bar-big {
	height: 5px;
	width: 120px;
	background: #aec6ef;
	margin: 20px auto;
	position: relative;
	border-radius: 30px;
}

.bar.bar-big::before {
	content: '';
	position: absolute;
	left: 0;
	top: -2.7px;
	height: 10px;
	width: 10px;
	border-radius: 50%;
	background: #410099;
	-webkit-animation-duration: 3s;
	animation-duration: 3s;
	-webkit-animation-timing-function: linear;
	animation-timing-function: linear;
	-webkit-animation-iteration-count: infinite;
	animation-iteration-count: infinite;
	-webkit-animation-name: MOVE-BG;
	animation-name: MOVE-BG;
}
#valores2 .bar-main{
    width: 100%;
}

@-webkit-keyframes MOVE-BG {
  from {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  to {
    -webkit-transform: translateX(88px);
            transform: translateX(88px);
  }
}

@keyframes MOVE-BG {
  from {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  to {
    -webkit-transform: translateX(88px);
            transform: translateX(88px);
  }
}

/*estilo de circular*/


.about_shape {
    position:relative;
    margin-top: -400px;       
    z-index: -1;
    left: -72px;
}
.about_shape img {
    -webkit-animation: alltuchtopdown 1.5s ease-in-out 0s infinite alternate;
    animation: alltuchtopdown 1.5s ease-in-out 0s infinite alternate;
    -webkit-animation-duration: 2.5s;
    animation-duration: 2.5s;

    
}

/* para ocultar los iconos por defecto*/
.accordion-body p{
    margin:0;
}

.accordion-button:not(.collapsed)::after {
    display:none;
content: "";

background-image: url("");

}



.accordion-button::after {
    display:none;
width: 0px;

height: 0px;

content: "";

background-image: url("");

background-size: 0px;

}



/* color y tamaño en modo activo */

.accordion-button:not(.collapsed) div.boton-icono {

color: var(--color1);

font-size: 20px;

-webkit-transform: rotate(-180deg);

transform: rotate(-180deg);

}



/* color y tamaño */

.accordion-button div.boton-icono {

color: var(--color5);

font-size: 16px;

transition: -webkit-transform 0.2s ease-in-out;

transition: transform 0.2s ease-in-out;

transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;

}



.accordion-button {

font-weight: bold;

color: var(--color2);

font-size: 16px;


}



.accordion-button:hover {

color: var(--color1);

}



.accordion-flush .accordion-item {

border-bottom: 0;

}



.accordion-button:not(.collapsed) {

color: var(--color1);

}
.accordion-item {
    border:none;
}

.accordion-button i{
    color:var(--color6);
}

.fa-circle {

font-size: 10px;

color: var(--color1);

}



.title-pe {

color:var(--color5);
font-size: 18px;
font-weight:none;

}



/* focus accordion */

.accordion-button:focus {

box-shadow: none;

}

@keyframes alltuchtopdown{
	0%{
		-webkit-transform:rotateX(0deg) translateY(0px);
		-ms-transform:rotateX(0deg) translateY(0px);
		transform:rotateX(0deg) translateY(0px)
	}
	50%{
		-webkit-transform:rotateX(0deg) translateY(-20px);
		-ms-transform:rotateX(0deg) translateY(-20px);
		transform:rotateX(0deg) translateY(-20px)
	}
	100%{
		-webkit-transform:rotateX(0deg) translateY(0px);
		-ms-transform:rotateX(0deg) translateY(0px);
		transform:rotateX(0deg) translateY(0px)
	}
}



#careers{
    background-image: url("./assets/img/inicio/fondo1.png");
    background-color: var(--color4);
    background-size: 100%;
}
   
#img-contact{
    
    background: linear-gradient(rgba(35, 35, 35, 0.6), rgba(35, 35, 35, 0.6)), url("./assets/img/inicio/contact.jpg")  no-repeat;
    
    background-size: cover;

}
.form-control:focus{
   
    
    box-shadow: 0 0 0 .25rem rgba(12, 90, 219, 0.25);
}
html {
  scroll-behavior: smooth;
}
section[id] { 
  scroll-margin-top:120px;
}
#div-video1{
    scroll-margin-top:100px;
}
#div-contact { 
  scroll-margin-top:50px;
}
#div-industrias{
        background-color: white;
        margin-top:-5px;
        scroll-margin-top:50px;
        position:relative;
        
    }

#img-banner{
        object-fit: cover;
        width:1920px;
        height:876px;
}

#div-progra{
    background: linear-gradient(rgba(12, 90, 219, 0.8), rgba(12, 90, 219, 0.7)), url("./assets/img/inicio/blog2.jpg");
   
    background-size:100%;
    opacity:.8;
    

}
/* novedades */
#industrias .card {
            position: relative;
            padding: .4rem;
            border-radius: 0;
            transition: transform .3s ease-in-out;
            box-shadow: 0 0 10px rgb(212 212 212);
            margin: 1rem 1.2rem;
        }

        #industrias .card .news {
            position: absolute;
            top: 20px;
            left: -16px;
            border-radius: 5px;
            padding: 4px 12px;
            background-color: var(--color4);
            color: white;
            font-size: 14px;
            font-weight: bold;
        }

        #industrias .card img {
            object-fit: cover;
        }

        #industrias .card:hover {
            transform: scale(1.06);
        }

        #industrias .card h6 {
            margin-bottom: 1.2rem;
        }

        #industrias .card p {
            font-size: 18px;
            text-align: start;
            overflow: hidden;
            color: var(--color7);
        }

        #ind-health{
            position:absolute;
            left:36%;
            top:40%;
        }
        #ind-government{
            position:absolute;
            left:26%;
            top:40%;
        }
        #ind-manufacturing{
            position:absolute;
            left:24%;
            top:40%;
        }
        #ind-banking{
            position:absolute;
            left:35%;
            top:40%;
        }
      .btn-carousel1{
        padding-right:5rem;
      }
      .btn-carousel2{
        padding-left:5rem;
      }
        .btn-carousel1 span { 
           
            border-radius:50%;
            background-color:var(--color4);
            background-size: 50%;
            opacity:1;
        }
        .btn-carousel2 span{ 
           
           border-radius:50%;
           background-color:var(--color4);
           background-size: 50%;
           opacity:1;
       }
       
       
        .carousel-control-prev, .carousel-control-next{
            opacity:1;
        }
        @media only screen and (min-width:210px)  and (max-width:409px){



            #ind-health{
            position:absolute;
            left:39%;
            top:45%
        }
        #ind-government{
            position:absolute;
            left:30%;
            top:45%
        }
        #ind-manufacturing{
            position:absolute;
            left:30%;
            top:45%
        }
        #ind-banking{
            position:absolute;
            left:39%;
            top:45%
        }
            #img-contact{
    
    background: linear-gradient(rgba(35, 35, 35, 0.6), rgba(35, 35, 35, 0.6)), url("./assets/img/inicio/contact.jpg") center center no-repeat;
    
    background-size: cover;

}
    
    .btn-carousel1.btn-carousel2 { 
           display:none;
        }

 
   #valores2 {
       padding-top:2rem;
       padding-bottom:2rem;
       position:static;
   }
   #div-video video{
    display:none;
    
    
    }
    #div-about .about{
        padding-top:10rem;
    }
    #valores{
    margin-top:0px;
}
.div-banner {
    position: absolute; 
    left: 1.5rem; 
    display: flex; 
    justify-content: center; 
   
    height: 100%; 
    padding-bottom: 10%;
            }
    .tittle-banner1{
        font-size:1rem;
        padding:1rem;
        color:white;
        
        font-weight: bold;
    }
    .tittle-banner2{
        display:none;
           
   
}

#img-banner{
        object-fit: cover;
        width:780px;
        height:419px;
}


  #rc-imageselect, .g-recaptcha {
      transform:scale(0.77);
-webkit-transform:scale(0.77);
margin-right:20rem;
}

        
        
        
        }
@media only screen and (min-width:410px)  and (max-width:1096px){
    #img-contact{
    
    background: linear-gradient(rgba(35, 35, 35, 0.6), rgba(35, 35, 35, 0.6)), url("./assets/img/inicio/contact.jpg") center center no-repeat;
    
    background-size: cover;

}
    
    .btn-carousel1.btn-carousel2 { 
           display:none;
        }

 
   #valores2 {
       padding-top:2rem;
       padding-bottom:2rem;
       position:static;
   }
   #div-video video{
    display:none;
    
    
    }
    #div-about .about{
        padding-top:10rem;
    }
    #valores{
    margin-top:0px;
}
.div-banner {
    position: absolute; 
    left: 1.5rem; 
    display: flex; 
    justify-content: center; 
   
    height: 100%; 
    padding-bottom: 10%;
            }
    .tittle-banner1{
        font-size:1rem;
        padding:1rem;
        color:white;
        
        font-weight: bold;
    }
    .tittle-banner2{
        display:none;
           
   
}

#img-banner{
        object-fit: cover;
        width:780px;
        height:419px;
}


  #rc-imageselect, .g-recaptcha {
      transform:scale(0.77);
-webkit-transform:scale(0.77);
margin-right:20rem;
}

}

@media only screen and (min-width:1097px) and (max-width:1280px){

    #valores2{
    
    top:8%;
    left:60px;
    
      
}
    #div-video {
        
        height:900px;
    }
    #div-video video{
        
        width:150%;
    }

    #valores2 {
       padding-top:2rem;
       height:900px;
       
   }
    #ind-health{
            position:absolute;
            left:33%;
            top:40%
        }
        #ind-government{
            position:absolute;
            left:23%;
            top:40%
        }
        #ind-manufacturing{
            position:absolute;
            left:19%;
            top:40%
        }
        #ind-banking{
            position:absolute;
            left:35%;
            top:40%
        }
}
  

@media only screen and (min-width:1281px) and (max-width:1366px){


#div-video {
    
    height:900px;
}
#div-video video{
    
    width:150%;
}

#valores2 {
   padding-top:2rem;
   height:900px;
   
}
#ind-health{
        position:absolute;
        left:33%;
        top:40%
    }
    #ind-government{
        position:absolute;
        left:23%;
        top:40%
    }
    #ind-manufacturing{
        position:absolute;
        left:19%;
        top:40%
    }
    #ind-banking{
        position:absolute;
        left:35%;
        top:40%
    }
}





    </style>

<?php include_once './includes/header.php'; ?>

<section style="padding:10rem 0 6rem 0;">


<div class="container" style="text-align:center;" >
        <div class="row justify-content-center">
             <div class="col-lg-12">

                 <h2 style="color:var(--color7);font-weight:bold;">Team</h2>
                    <div class="bar-main" style="width:100%;">
                        <div class="bar bar-big"></div>
                    </div>
            </div>

        </div>
        <div class="row d-flex justify-content-center" >
                <div class="col-12 col-lg-3 mx-3">
                    <img style="border: 8px solid #fff;box-shadow: 1px 1px 3px rgb(0 0 0 / 30%);" src="./assets/img/trabajadores/ruth.jpg" class="img-fluid" alt="">
                    <div style="font-size:1rem;text-align:center;padding-top:.8rem;"> Ruth Karchov </div>
                    <div style="font-size:1rem;text-align:center;font-weight:bold;"> Founder & CEO </div>
                </div>
                <div class="col-12 col-lg-3 mx-3">
                    <img style="border: 8px solid #fff;box-shadow: 1px 1px 3px rgb(0 0 0 / 30%);" src="./assets/img/trabajadores/mary.jpg" class="img-fluid" alt="">
                    <div style="font-size:1rem;text-align:center;padding-top:.8rem;"> Mary Fuentes </div>
                    <div style="font-size:1rem;text-align:center;font-weight:bold;"> Chief Operating Officer </div>
                </div>
                <div class="col-12 col-lg-3 mx-3">

                 <img style="border: 8px solid #fff;box-shadow: 1px 1px 3px rgb(0 0 0 / 30%);" src="./assets/img/trabajadores/jaime.jpg" class="img-fluid" alt="">
                 <div style="font-size:1rem;text-align:center;padding-top:.8rem;"> Jaime Villafuerte </div>
                 <div style="font-size:1rem;text-align:center;font-weight:bold;"> Board Member </div>
                </div>




        </div>

</div>




</section>



    <?php include_once './includes/footer.php'; ?>
    
</body>



  
    
    
  
    <script type="text/javascript">
        let modal = new bootstrap.Modal(document.getElementById('myModal'), );
        modal.show();
    </script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.pooper.js"></script>
    
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script src="./assets/js/hubslider.min.js"></script>
    
    <script type="text/javascript">

            window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>750);
		})

    </script>
    <script>
    $(".hover").mouseleave(
        function() {
            $(this).removeClass("hover");
        }
    );
</script>
</html>


