<script type="text/javascript">
      $(document).ready(function(){
    
$(window).scroll(function(){
   var barra = $(window).scrollTop();
   var posicion = barra * 0.40;
   
   $('body').css({
      'background-position': '0 '+ posicion + 'px' 
   });
});
});</script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #fff;
      background-attachment: fixed;
      background-size: 100% 100%;
 }
  div#vacio{
      width: 100%;
  }
  .parallax{
      background: #fff fixed no-repeat 50% 50%;
      background-size: cover;
      
  }
  
  #seccion1{
      background-image: url(source/arenal.jpeg);
  }
  #seccion2{
      background-image: url(http://www.negoplanet.com/wp-content/uploads/2014/06/costaRica08.jpeg);
      background-size: 100% 100%;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #85e596;/*#303030;*/
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-image: url(source/Monteverde2.jpg);
      background-attachment: fixed;
      background-size: 100% 100%;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #85e596;
      font-size: 50px;
  }
  .logo {
      color: #4b5659;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #3c69c9;
  }
  .carousel-indicators li {
      border-color: #3c69c9;
  }
  .carousel-indicators li.active {
      background-color: #3c69c9;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #85e596; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
      opacity:0.7;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #3c69c9;
      background-color: #fff !important;
      color: #3c69c9;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #a5be8d !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #a5be8d;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #4a7c59;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #4a7c59 !important;
      background-color: #c8d5b9 !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #3c69c9;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- Modal -->
<div id="inicio" > </div>

