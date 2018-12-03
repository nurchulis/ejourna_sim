<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="<?php echo base_url() ?>assets/img/favicon.png">
      <title>E-Journal UIN Sunan Kalijaga</title>
      <!-- Bootstrap core CSS -->
      <link href="grab/css/bootstrap.min.css" rel="stylesheet">
      <!-- Link to hover.css -->
      <link href="grab/css/hover.css" rel="stylesheet">
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <link href="grab/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="grab/css/style.css" rel="stylesheet">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style type="text/css">

      </style>
   </head>
   <body>
      <div class="header-top"></div>
      <div class="container">
         <div class="row header-bar">
            <div class="col-md-4 col-sm-6 col-xs-12">
               <div class="header-image"><img src="grab/images/logo.png"></div>
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
                  <li class="dropdown" >
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="icon-flower"></span> BROWSE</a>
                    <ul class="dropdown-menu">
                      <li><a href="../adab" target="blank">FAKULTAS ADAB DAN ILMU BUDAYA</a></li>
                      <li><a href="../dakwah" target="blank">FAKULTAS DAKWAH DAN KOMUNIKASI</a></li>
                      <li><a href="../febi" target="blank">FAKULTAS EKONOMI DAN BISNIS ISLAM</a></li>
                      <li><a href="../isoshum" target="blank">FAKULTAS ILMU SOSIAL DAN HUMANIORA</a></li>
                      <li><a href="../saintek" target="blank">FAKULTAS SAINS DAN TEKNOLOGI</a></li>
                      <li><a href="../syariah" target="blank">FAKULTAS SYARI'AH DAN ILMU HUKUM</a></li>
                      <li><a href="../tarbiyah" target="blank">FAKULTAS TARBIYAH DAN KEGURUAN</a></li>
                      <li><a href="../ushuluddin" target="blank">FAKULTAS USHULUDDIN DAN PEMIKIRAN ISLAM</a></li>
                      <li><a href="../pusat" target="blank">LEMBAGA PENELITIAN DAN PENGEMBANGAN MASYARAKAT</a></li>
                      <li><a href="../pasca" target="blank">PASCASARJANA</a></li>

                    </ul>
                  </li>
                  <li><a href="#event"><span class="icon-flower"></span> EVENTS</a></li>
               </ul>
            </div>
            <!--/.nav-collapse -->
         </div>
      </nav>
      
      <!-- begin thumbnail sections -->
      <div class="container"">
         <div class="row">
          <div id="event-wrapper2" class="col-md-12" style="display: none">
          </div>
          <div id="event-wrapper" class="col-md-12">
            <div id="spinner"><img src="grab/images/spin.gif"></div>
          </div>

         </div>
      </div>
      <!-- /.container -->

     
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="grab/js/jquery.min.js"><\/script>')</script>
      <script src="grab/js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="js/ie10-viewport-bug-workaround.js"></script>

      <script type="text/javascript">
      var events;
      var per_page = 10;
      var curr_page = 1;

      function loadEvent(data, offset, limit){
            $('#event-wrapper').html('');

            data = data.slice((offset-1)*limit, offset+limit-1);
            $.each(data, function(i, item){
           
            var date_posted = new Date(item.date_posted);
            var mon = date_posted.toDateString().substring(4, 7);
            var date = date_posted.toDateString().substring(8, 10);
            var resku =item.settings.descriptionShort;
            var deskripsi = item.settings.descriptionShort.replace(/<img[^>]*>/g,"");
             var des = deskripsi.substr(0, 380);
            var desc =resku.slice(14,-1);

            $('#event-wrapper2').append(
                      '<img id="'+ item.settings.title +'"  style="display:none" src="'+ desc +'">');
      
            var div1 = document.getElementById(item.settings.title);
            var coba = div1.getAttribute("src");

            $('#event-wrapper').append(
                  
                  '<div class="media">' +
                    '<div class="media-left">' 
                      +
                      '<div class="media-object calendar">' +
                        '<div class="header">'+ mon +'</div>' +
                        '<div class="num-day">'+ date +'</div>' +
                      '</div>' +
                    '</div>' +
                    '<div class="media-body">' +
                      '<a href="'+ item.settings.url +'" target="blank">' +
                        '<h4 class="media-heading">'+ item.settings.title +'</h4>' +
                      '</a>'+
                      '<img id="img_slide" style="width:460px;height: 300px;object-fit: cover; object-position: 60%  1%;" src="<?php echo base_url() ?>'+ coba +'">'
                      +'<p>'+ des +'<p>'+
                    '</div>' +
                  '</div>' + '<hr>'
              );
       $('img').error(function(){
        $(this).attr('src', '<?php echo base_url() ?>assets/img/not_found.png');
        });

          });
          // Pagination
            if(offset == 1){
              if(events.length >= offset + limit){ 
                loadPagination('disabled', 'enabled');
              } else {
                loadPagination('disabled', 'disabled');
              }
            }
            else if(((offset + 1) * limit ) > events.length)
              loadPagination('enabled', 'disabled');
            else
              loadPagination('enabled', 'enabled');
      
      }

      function loadPagination(newer, older){
            $('#event-wrapper').append(
                '<nav>' +
                  '<ul class="pager">' +
                    '<li class="previous '+ newer +'"><a href="javascript:void(0)" onclick="loadNewer();"><span aria-hidden="true">&larr;</span> Newer</a></li>' +
                    '<li class="next '+ older +'"><a href="javascript:void(0)" onclick="loadOlder();">Older <span aria-hidden="true">&rarr;</span></a></li>' +
                  '</ul>' +
                '</nav>'
              );
      }

      function loadNewer(){
          if( $('.previous').hasClass('disabled'))
            return false;
          loadSpinner('#event-wrapper');
          curr_page = curr_page - 1;
          setTimeout(function() { 
              loadEvent(events, curr_page, per_page); 
          }, 500);
      }

      function loadOlder(){
          if( $('.next').hasClass('disabled'))
            return false;
          loadSpinner('#event-wrapper');
          curr_page = curr_page + 1;
          setTimeout(function() { 
              loadEvent(events, curr_page, per_page); 
          }, 500);
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
      </script>
   </body>
</html>
