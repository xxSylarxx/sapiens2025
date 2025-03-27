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
    
      
    <title>SAPIENS CONSULTING</title>
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
    height: 230px;
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
    text-align:justify;
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
   margin-left:10px;
   margin-right:10px;
   
       
}     




#valores2{
    position:absolute;
    text-align: center;
    z-index:99;
    top:8%;
    left:8%;
    
      
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
    
    text-align:justify;
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
    left: 5rem; 
    display: flex; 
    justify-content: center; 
    align-items: flex-end; 
    height: 100%; 
    padding-bottom: 20%;
        }
.tittle-banner1{
    color:white;
    font-size:3.5rem;
    font-weight: bold;
}
.tittle-banner2{
    color:white;
    font-size:1.8rem;
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
	background: #0c5adb;
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

font-size: 20px;

transition: -webkit-transform 0.2s ease-in-out;

transition: transform 0.2s ease-in-out;

transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;

}



.accordion-button {

font-weight: bold;

color: var(--color2);

font-size: 17.5px;

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

.accordion-item i{
    color:var(--color1);
}

.fa-circle {

font-size: 15px;

color: var(--color1);

}



.title-pe {

color:var(--color5);
font-size: 22px;
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

.flecha1{
    text-align: center;
    color:white;
    padding:5rem;
    margin:2rem;
    background: linear-gradient(rgba(12, 90, 219, 0.8), rgba(12, 90, 219, 0.7)), url("./assets/img/inicio/industria1.jpg");
    clip-path: polygon(85% 0, 100% 50%, 85% 100%, 0% 100%, 16% 51%, 0% 0%);
    transition: transform .7s ease-in-out;
}
.flecha2{
    text-align: center;
    color:white;
    padding:5rem;
    margin:2rem;
    background: linear-gradient(rgba(12, 90, 219, 0.8), rgba(12, 90, 219, 0.7)), url("./assets/img/inicio/industria2.jpg");
    clip-path: polygon(85% 0, 100% 50%, 85% 100%, 0% 100%, 16% 51%, 0% 0%);
    transition: transform .7s ease-in-out;
}
.flecha3{
    text-align: center;
    color:white;
    padding:5rem;
    margin:2rem;
    background: linear-gradient(rgba(12, 90, 219, 0.8), rgba(12, 90, 219, 0.7)), url("./assets/img/inicio/industria3.jpg");
    clip-path: polygon(85% 0, 100% 50%, 85% 100%, 0% 100%, 16% 51%, 0% 0%);
    transition: transform .7s ease-in-out;
}

.flecha4{
    text-align: center;
    color:white;
    padding:5rem;
    margin:2rem;
    background: linear-gradient(rgba(12, 90, 219, 0.8), rgba(12, 90, 219, 0.7)), url("./assets/img/inicio/industria4.jpg");
    clip-path: polygon(85% 0, 100% 50%, 85% 100%, 0% 100%, 16% 51%, 0% 0%);
    transition: transform .7s ease-in-out;
}
.flecha1:hover,.flecha2:hover,.flecha3:hover,.flecha4:hover{
   transform: scale(1.15, 1.15);
}

#careers{
    background-image: url("./assets/img/inicio/fondo1.png");
    background-color: var(--color4);
    background-size: 100%;
}
   
#img-contact{
    
    background: linear-gradient(rgba(35, 35, 35, 0.6), rgba(35, 35, 35, 0.6)), url("./assets/img/inicio/contact.jpg");
    
    background-size: 100%;

}
.form-control:focus{
   
    
    box-shadow: 0 0 0 .25rem rgba(12, 90, 219, 0.25);
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

        #industrias .card h4 {
            margin-bottom: 1.4rem;
        }

        #industrias .card p {
            font-size: 18px;
            text-align: justify;
            overflow: hidden;
            color: var(--color7);
        }

        .carousel-control-prev-icon,.carousel-control-next-icon{
            background-size: 50%;
            opacity:1;
        }
         
        .carousel-control-prev, .carousel-control-next{
            opacity:1;
        }

@media only screen and (max-width:1399px){

   
}
    

    </style>

<?php include_once './includes/header2.php'; ?>



<section style="padding-top:10rem;">

<div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <h2 class="  mb-3" style="color:var(--color1);font-weight:bold;">FACILITIES INSPECTION SYSTEM</h2>
                <!--<p class="color-secu font-weight-bold" style="color:var(--color4);"><i class="fa fa-calendar" aria-hidden="true" ></i>&nbsp; 2021-01-15</p>-->
                <hr>
                <div class="content p-2">
                   <center> <img src="./assets/img/industrias/inspection.jpg" class="img-fluid "alt=""></center>
                <br>
                <br>
                <p><strong>Problem / Challenge</strong><span style="font-weight: 400;">:&nbsp;</span></p>
<p style="text-align:justify;"><span style="font-weight: 400;">The client&rsquo;s main goal was to assess and certify more than 4,500 health care providers or entities. The assessment of the health care providers or entities&rsquo; physical facilities was a critical part of the certification process. The certification process is a Federal and state requirement for all the health care providers or entities, depending on the type of entity or provider. The number of facilities, the complexity of the inspections and the limited time to perform the certification process were the major challenges for our client. The inspection process of the facilities of health care providers or entities involves the planification of the inspections, the assignment of inspectors, the implementation of the inspections, the identification of the foundings, the identification of a corrective action plan, the follow up of the corrective actions, and finally the close of the inspection and the collection of penalties, if applicable.</span></p>
<p><strong>Our Role</strong><span style="font-weight: 400;">:</span></p>
<ul>
    <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Design and Architecture of the solution with two components:</span></li>
    <ul>
        <li style="font-weight: 400; "  aria-level="2"><span style="font-weight: 400;">Mobile App used by inspectors during the facility inspections enabled to operate off-line and sync once is online.</span></li>
        <li style="font-weight: 400;"  aria-level="2"><span style="font-weight: 400;">Central &amp; Administrative App used for planning, assigning inspections, and managing the cases and reports.&nbsp;</span></li>
    </ul>
    <li style="font-weight: 400; text-align:justify;" aria-level="1"><span style="font-weight: 400;">Develop the solution with a mobile app, using Microsoft technology (MS Xamarin) and implemented for android devices, and a Web-based App using Microsoft&nbsp; technology (.NET con AngularJS, Web Services, and Database procedures.)&nbsp;</span></li>
    <li style="font-weight: 400; text-align:justify;" aria-level="1"><span style="font-weight: 400;">Implementation of interfaces between mobile App and Web-based App.&nbsp;</span></li>
</ul>
<p><strong>Key Outcomes</strong><span style="font-weight: 400;">:&nbsp;</span></p>
<ul>
    <li style="font-weight: 400;"  aria-level="1"><span style="font-weight: 400;">Reduce In-situ inspection time.&nbsp;</span></li>
    <li style="font-weight: 400;"  aria-level="1"><span style="font-weight: 400;">Improve planning of inspections allowing to assign of inspectors in real time when inspectors are in the road.</span></li>
    <li style="font-weight: 400;"  aria-level="1"><span style="font-weight: 400;">Speed up the capture of information and avoid duplication of the data and minimize input data errors.</span></li>
    <li style="font-weight: 400;"  aria-level="1"><span style="font-weight: 400;">Off-line use of mobile App.</span></li>
    <li style="font-weight: 400;"  aria-level="1"><span style="font-weight: 400;">Index responses with evidence or pictures of the proper facility.&nbsp;</span></li>
    <li style="font-weight: 400;"  aria-level="1"><span style="font-weight: 400;">Avoid inspectors need to re-visit the facilities already inspected.&nbsp;</span></li>
    <li style="font-weight: 400;"  aria-level="1"><span style="font-weight: 400;">Productivity report and quality control of inspections to ensure that inspections meet Federal and State requirements.</span></li>
</ul>
<p><strong>Technologies used:</strong><span style="font-weight: 400;"> MS Xamarin, Bootstrap, .NET with AngulaJS, Web Services, Java, and J2EE.</span></p>
                
                </div>
            </div>
            <!--<div class="col-md-4">
            <div class="card " id="app" style="border:1px solid var(--color4);">
                    <div class="card-header " style="color:var(--color1);">
                       Popular Posts
                    </div>
                    <div class="card-body bg-white p-0">
                            <div class="row m-0 py-3" style="border-top:1px solid var(--color4);">
                                <div class="col-md-4">
                                    <div class="img_crop">
                                        <img src="./assets/img/industrias/biometric.jpg" class="crop rounded border w-100">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <span style="color:black;font-weight:bold;">BIOMETRIC</span><br>
                                    <a href="biometric.php">Más detalles</a>
                                </div>
                            </div>
                            <div class="row  m-0 py-3" style="border-top:1px solid var(--color4);">
                                <div class="col-md-4">
                                    <div class="img_crop">
                                        <img src="./assets/img/industrias/security.jpg" class="crop rounded border w-100">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <span style="color:black;font-weight:bold;">COMPLEX SECURITY</span><br>
                                    <a href="security.php">Más detalles</a>
                                </div>
                            </div>
                                                
                                            </div>
            </div>
        </div>-->
    </div>







</section>




<br>
<center>
<button class="button1" >
                                <a class="" href="index.php#div-industrias" ><i class="fas fa-chevron-left"></i>&nbsp;Back</a>
                            </button>
</center>

<br>
<br>
<br>
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


