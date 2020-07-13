<!DOCTYPE html>

<style>
	#container {
  width: 50vw;
}
#ig1 {
  width: 33%!important;
}
.navbar-brand{
	margin: 0;
	padding: 0; 
}

.glyphicon-user{
	font-size: 1.45em;
 
}

.logo{
	height: 120px;
	padding-right: 15px;
	padding-left: 5px;
}

.navbar-nav.navbar-center { 
    position: absolute; 
    left: 50%; 
    transform: translatex(-50%);
   /* font-family: Poppins;*/
    font-family: nimbus-sans, sans-serif;
    background-color:  #e5d5b4; 
} 

#navbarItems > li {
	padding-left: 75px;
	padding-right: 75px;
	font-size: 1.9em;
}

/*#navbarItems{
  padding-right: 40px;
}*/


#User-icon{
	float: right;
	padding-bottom: 9px;

}
.glyphicon glyphicon-user{
  background-color:  #e5d5b4;
}
.nav-item > li {
	/*font-size: 2.4em !important;*/
}

.nav a{
	/*font-size: 1.4em !important;*/
}

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  position: relative;
  margin: auto;
  padding-top: 80px;
}

/* Hide the images by default */
.mySlides {
  display: none;
}


/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade-in;
  -webkit-animation-duration: 0.1s;
  animation-name: fade-in;
  animation-duration: 5s;
}

.fade-out{
	-webkit-animation-name: fade-out;
	-webkit-animation-duration: 0.1s;
	animation-name: fade-out;
	animation-duration: 5s;
}

@-webkit-keyframes fade-in {
  from {opacity: .000001}
  to {opacity: .95}
}

@-webkit-keyframes fade-out {
  from {opacity: .95}
  to {opacity: 0}
}

@keyframes fade-in {
  from {opacity: .000001}
  to {opacity: .95}
}

h2{
	text-align: center;
	padding-top: 120px;
	font-family: nimbus-sans, sans-serif;
	font-weight: 400;
}

p{
	text-align: center;
	padding-top: 80px;
	font-family: nimbus-sans, sans-serif;
  color: #e9782f;
}

h1{
	padding-top: 50px;
  color: #e9782f;
}

body {
  padding-bottom:120px;
}

#logo-banner{
  padding-top: 20px;
}

.footer{
  padding-top:  120px;
}
#Prod-header{
  text-align: center;
}
#navbarItems-tab > li{
  padding-left: 50px;
  padding-right: 50px;
  font-size: 1.5em;
}
.caption{
  display: block;
}
#products1{
   padding-top: 90px;
  padding-bottom: 80px;
}
#products2{
   padding-top: 90px;
  padding-bottom: 80px;
}
#products-navbar{
  background-color:  #e5d5b4;
}

.social-wrapper {
  text-align: center;
}
.social-wrapper ul li {
  display: inline;
  margin: 0 5px;
}
.twitter-logo:hover
.insta-logo:hover
.gmail-logo:hover{
  opacity: 1.0;
  filter: alpha(opacity=100);
}
.footer-nav span {
  text-align: center;
}
#unstyled > li{
  padding-right: 60px;
  padding-left: 60px;
}
#size:hover {
  border-color: black!important;
  cursor: pointer;
}
figcaption:hover {
  color: red;
  cursor: pointer;
}
#logo {
  opacity: 0.8;
}
#logo:hover {
  opacity: 1.0;
}
h4 {
  color: green;
}

.julyHeader{
  padding-top: 20px;
  padding-bottom: -50px;
}

.augustHeader{
  padding-top: 20px;
  padding-bottom: -50px;
}
#shoe-image{
box-shadow: 3px 3px 4px #000000;
}


</style>


<html>
   <section>

  <!-- JULY SHOES -->
    <h2 class="img-responsive" class="julyHeader" style="color: black; text-align: center; font-size: 40px; padding-bottom: 30px;">JULY<h2>

    <div class="row text-center product-leftAK" id="products1" id="july">


      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
          <img src="{{ url('img/offwhite-rubberduck.jpg') }}"
          class="img-fluid" style="width: 275px; height: 200px;">
          <figcaption style="text-decoration: underline; font-size: 17px;">OFF-WHITE x NIKE AIR RUBBER DUNK (UNIVERSITY GOLD)</figcaption>
          <figcaption style="text-decoration: underline; font-size: 17px;">$189 - JULY 1ST</figcaption>
        </figure>
      </div>

</html>

