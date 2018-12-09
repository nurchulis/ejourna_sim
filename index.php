<?php 
ob_start(); // Dengan Menambahkan ob_start(), Warning Session bisa Fix
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>E-Journal UIN Sunan Kalijaga</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php  ?>assets/css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="icon" href="assets/img/favicon.png">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/hover.css">


<style type="text/css">
.mainmenubtn {
    border: none;
    cursor: pointer;
  padding: 15px;
  background:#2E2E2E; color:#555
}
.mainmenubtn:hover {
  color:white;
}
.dropdown {
}
.dropdown-child {
    display: none;
    background-color: black;
    min-width: 200px;
}
.dropdown-child a {
    color: white;
    padding: 20px;
    text-decoration: none;
    display: block;
}
.dropdown:hover .dropdown-child {
    display: block;
    position: absolute;
}

  .dropdown-menu {
  background-color: #2E2E2E;
  border: solid 1px #2E2E2E;
}
.dropdown-menu>li>a {
  color: #FFFFFF;
  z-index: 98
}

.dropdown-menu>li>a:hover {
  background-color:#A4884A;
  color: #FFFFFF;
  z-index: 98
}

#myCarousel .carousel-caption {
    left:0;
  right:0;
  bottom:0;
  text-align:left;
  padding:10px;
  background:rgba(0,0,0,0.6);
  text-shadow:none;
}

#myCarousel .list-group {
  position:absolute;
  top:0;
  right:0;
  color:#555;
}
#myCarousel .list-group-item {
  border-radius:0px;
  cursor:pointer;
}
#myCarousel .list-group .active {
  background-color:#eee;  
  color: #A4884A !important;
}

@media (min-width: 992px) { 
  #myCarousel {padding-right:33.3333%;}
  #myCarousel .carousel-controls {display:none;}  
}
@media (max-width: 991px) { 
  .carousel-caption p,
  #myCarousel .list-group {display:none;} 
}
</style>

</head>
<body>
<div class="header-top"></div>
      <div class="container">
         <div class="row header-bar">
            <div class="col-md-4 col-sm-6 col-xs-12">
               <div class="header-image"><img src="http://localhost/ejournal/assets/img/logo.png"></div>
            </div>
            <div class="col-md-2 hidden-sm hidden-xs"></div>
            <div class="col-md-2 hidden-sm hidden-xs"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">
               <div class='header-text'>ACADEMIC JOURNAL PUBLICATIONS</div>
            </div>
         </div>
      </div>

<nav class="navbar navbar-inverse navbar-static-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Menu</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
             <ul class="nav navbar-nav">
                  <li><a href="index.php"><span class="icon-flower"></span> HOME</a></li>
                  
                  <li><div class="dropdown">
  <button  class="mainmenubtn" style="color: #9D9D9D;"><span class="icon-flower"></span>BROWSE</button>
  <ul class="dropdown-child dropdown-menu">
   <li><a href="../adab" target="blank">FAKULTAS ADAB DAN ILMU BUDAYA</a></li>
                      <li><a href="../dakwah" target="blank">FAKULTAS DAKWAH DAN KOMUNIKASI</a></li>
                      <li><a href="../febi" target="blank">FAKULTAS EKONOMI DAN BISNIS ISLAM</a></li>
                      <li><a href="../isoshum" target="blank">FAKULTAS ILMU SOSIAL DAN HUMANIORA</a></li>
                      <li><a href="../saintek" target="blank">FAKULTAS SAINS DAN TEKNOLOGI</a></li>
                      <li><a href="../syariah" target="blank">FAKULTAS SYARI'AH DAN ILMU HUKUM</a></li>
                      <li><a href="../tarbiyah" target="blank">FAKULTAS ILMU TARBIYAH DAN KEGURUAN</a></li>
                      <li><a href="../ushuluddin" target="blank">FAKULTAS USHULUDDIN DAN PEMIKIRAN ISLAM</a></li>
                      <li><a href="../pusat" target="blank">LEMBAGA PENELITIAN DAN PENGEMBANGAN MASYARAKAT</a></li>
                      <li><a href="../pasca" target="blank">PASCASARJANA</a></li>
  </ul>
  </li>

                  <li><a href="http://localhost/ejourna_sim/event"><span class="icon-flower"></span> EVENTS</a></li>
                  <li><a href="http://localhost/ejourna_sim?page=publish"><span class="icon-flower"></span> PUBLISH</a></li>
                  <?php
                    if((@$_SESSION['status'] =="login")){
                     echo "<li><a href='Home/Proses/Logout.php'><span class='icon-flower'></span>LOGOUT(". $_SESSION['username'].")</a></li>";
                    }
                  ?>
                  
               </ul>
            </div>
            <!--/.nav-collapse -->
         </div>
      </nav>
<center>



<div class="container-fluid" style="margin-bottom: 100px;">

<div class="col-md-12" style="padding: 0px; height: 300px;">
<body>
<div class="container">
    
 <?php
@$page=$_GET['page'];

switch ($page) {
  
  case "publish":
  include "Home/Publish.php";
    break;
  
  case 'HomePublisher':
    include "Home/HomePublisher.php";
    break;
  case 'Login':
    include "Home/Login.php";
    break;
  

  default:
    include "Home/Slide.php";    
    break;
}

 ?>
</div>
          <div id="event-wrapper" style="display: none" style="position: relative;">
          <div id="spinner"><img src="./grab/images/spin.gif"></div>
          </div>
</body>
      <!-- /.container -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="assets/js/jquery.min2.js"></script>
      <script>window.jQuery || document.write('<script src="grab/js/jquery.min.js"><\/script>')</script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="grab/js/ie10-viewport-bug-workaround.js"></script>
       <script src="assets/js/bootstrap.min.js"></script>
      <script type="text/javascript">
        
      </script>
      <script type="text/javascript">
      var events;
      var per_page = 10;
      var curr_page = 1;

      function loadEvent(data, offset, limit){
            data = data.slice((offset-1)*limit, offset+limit-1);
            $.each(data, function(i, item){
            var date_posted = new Date(item.date_posted);
            var mon = date_posted.toDateString().substring(4, 7);
            var date = date_posted.toDateString().substring(8, 10);
            var deskripsi = item.settings.descriptionShort.replace(/<img[^>]*>/g,"");
            var des = deskripsi.substr(0, 280);
            var ini = des.replace(/(<([^>]+)>)/ig,""); 
            var resku =item.settings.descriptionShort;
            var desc =resku.slice(14,-1);   
            $('#event-wrapper3').html('');
             
             $('#event-wrapper').append('<img id="'+ item.settings.title +'"  style="display:none" src="'+ desc +'">');
            var div1 = document.getElementById(item.settings.title);
            var coba = div1.getAttribute("src");
        
            $('#event-wrapper2').append(
        '<div class="item">' +
            '<img style="width:760px;height: 300px;object-fit: cover; object-position: 60%  1%" src="http://localhost/ejourna_sim/'+ coba +'">' +
           '<div class="carousel-caption">' +
                      '<a href="'+ item.settings.url +'" target="blank">' +
            '<h4 style="color:white"><b>'+ item.settings.title +'</b></h4></a>' +
            '<p>'+ ini +'...</p>'+
          '</div>' +
        '</div>');

            $('#event-wrapper4').append(
        '<li data-target="#myCarousel" data-slide-to="'+ i +'" class="list-group-item"><h4><b>'+ item.settings.title +'</b></h4></li>');
        
        





              $('img').error(function(){
        $(this).attr('src', 'http://localhost/ejournal/assets/img/not_found.png');
        });

          });
         
      
      $(document).ready(function(){
  $('.carousel').each(function(){
    $(this).find('.carousel-item').eq(0).addClass('active');
  });
});
      }

      

      function loadSpinner(wrapper){
        $(wrapper).html('<div id="spinner"><img src="grab/images/spin.gif"></div>');
      }

      $(document).ready(function(){
        $.ajax({
          type: 'GET',
          url: 'grab/announcement.php',
          dataType: 'json',
          success: function(data){
            events = data;
            loadEvent(events, curr_page, per_page);
          }
        });
      });
      
      $(document).ready(function(){
  var clickEvent = false;
  $('#myCarousel').carousel({

    interval:   5000  
  }).on('click', '.list-group li', function() {
      clickEvent = true;
      $('.list-group li').removeClass('active');
      $(this).addClass('active');   
  }).on('slid.bs.carousel-innerl', function(e) {
    if(!clickEvent) {
      var count = $('.list-group').children().length -1;
      var current = $('.list-group li.active');
      current.removeClass('active').next().addClass('active');
      var id = parseInt(current.data('slide-to'));
      if(count == id) {
        $('.list-group li').first().addClass('active'); 
      }
    }
    clickEvent = false;
  });
});

$(window).load(function() {
  $(document).ready(function(){
          $(".item:first").addClass(" active");
      });
  $(document).ready(function(){
          $(".list-group-item:first").addClass(" active");
      });
    var boxheight = $('#myCarousel .carousel-inner').innerHeight();
    var itemlength = $('#myCarousel .item').length;
    var triggerheight = Math.round(boxheight/itemlength+1);
  $('#myCarousel .list-group-item').outerHeight(triggerheight);
  
      
});

</script>
</div>

</div>

  
<div class="container" style="color:rgb(119, 119, 119); margin-bottom: 50px;">
  
 <?php
@$page=$_GET['page'];

switch ($page) {
  
  case "publish":
    break;
    
  case 'Login':
      break;  
    case 'HomePublisher':
    break;

  default:
    include "Home/Home.php";    
    break;
}

 ?>
          
          


    
      </div>
  


</div>

    </center>
 <!-- END OF NEWS -->
      <footer class="footer">
        <div class="container">
            <div class="col-md-3">
              <div>
                <a href="http://uin-suka.ac.id"><img src="http://localhost/ejournal/assets/img/logo-white.png" class="footer-logo"></a>
              </div>
            </div>
            <div class="col-md-6">
              <p>
                UIN Sunan Kalijaga, Jl. Marsda Adisucipto Yogyakarta 55281<br>
                Tel. +62-274-512474, +62-274-589621 <br> Fax. +62-274-586117
                <br>Email: <a href="mailto:humas@uin-suka.ac.id">humas@uin-suka.ac.id</a><br>
              </p>
            </div>
            <!-- <div class="col-md-3">
              <div class="footer-link">
                <a href="#">Disclaimer</a>
                |
                <a href="#">Privacy Policy</a>
                |
                <a href="#">Term of Services</a>
              </div>
            </div> -->
            <div class="col-md-3">
              <div class="footer-link">
                <a href="https://plus.google.com/108019994213770776584" target="blank"><img src="http://localhost/ejournal/assets/img/gplus.png" class="button-soc"></a>
                <a href="https://www.facebook.com/UINSK" target="blank"><img src="http://localhost/ejournal/assets/img/fb.png" class="button-soc"></a>
                <a href="https://twitter.com/uinsk" target="blank"><img src="http://localhost/ejournal/assets/img/twitter.png" class="button-soc"></a>
                <a href="https://www.youtube.com/user/UINSK" target="blank"><img src="http://localhost/ejournal/assets/img/youtube.png" class="button-soc"></a>
                <a href="https://www.instagram.com/uinsk" target="blank"><img src="http://localhost/ejournal/assets/img/instagram.png" class="button-soc"></a>
                <a href="https://foursquare.com/uinsk" target="blank"><img src="http://localhost/ejournal/assets/img/foursquare.png" class="button-soc"></a>
              </div>
            </div>
          </div>
        </div>

      <div class="col-md-12" id="bawah">
      <center>  
      Copyright &copy; 2018 | Universitas Islam Negeri Sunan Kalijaga, Yogyakarta</div>
      </center>
      </footer>



</body>

  <script src="assets/js/jquery.min2.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>

  <script src="assets/js/echo.js"></script>
    <script>
  echo.init({
    offset: 100,
    throttle: 250,
    unload: false,
    callback: function (element, op) {
      console.log(element, 'has been', op + 'ed')
    }
  });

  // echo.render(); is also available for non-scroll callbacks
  </script>
<script type="text/javascript">
$(document).ready(function(){
    
  var clickEvent = false;
  $('#myCarousel').carousel({
    interval:   4000  
  }).on('click', '.list-group li', function() {
      clickEvent = true;
      $('.list-group li').removeClass('active');
      $(this).addClass('active');   
  }).on('slid.bs.carousel', function(e) {
    if(!clickEvent) {
      var count = $('.list-group').children().length -1;
      var current = $('.list-group li.active');
      current.removeClass('active').next().addClass('active');
      var id = parseInt(current.data('slide-to'));
      if(count == id) {
        $('.list-group li').first().addClass('active'); 
      }
    }
    clickEvent = false;
  });
})

$(window).load(function() {
    var boxheight = $('#myCarousel .carousel-inner').innerHeight();
    var itemlength = $('#myCarousel .item').length;
    var triggerheight = Math.round(boxheight/itemlength+1);
  $('#myCarousel .list-group-item').outerHeight(triggerheight);
});
</script>



      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
