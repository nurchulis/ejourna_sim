<body>
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" id="event-wrapper2">    
    </div>
    <ul class="list-group col-sm-4" id="event-wrapper4">    
    </ul>

      <!-- Controls -->
      <div class="carousel-controls">
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>
  </div>       
</div>
          <div id="event-wrapper" style="display: none" style="position: relative;">
          <div id="spinner"><img src="./grab/images/spin.gif"></div>
          </div>
</body>
      <!-- /.container -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="<?php echo base_url(); ?>assets/js/jquery.min2.js"></script>
      <script>window.jQuery || document.write('<script src="grab/js/jquery.min.js"><\/script>')</script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="grab/js/ie10-viewport-bug-workaround.js"></script>
       <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
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
            '<img style="width:760px;height: 300px;object-fit: cover; object-position: 60%  1%" src="<?php echo base_url() ?>'+ coba +'">' +
           '<div class="carousel-caption">' +
                      '<a href="'+ item.settings.url +'" target="blank">' +
            '<h4 style="color:white"><b>'+ item.settings.title +'</b></h4></a>' +
            '<p>'+ ini +'...</p>'+
          '</div>' +
        '</div>');

            $('#event-wrapper4').append(
        '<li data-target="#myCarousel" data-slide-to="'+ i +'" class="list-group-item"><h4><b>'+ item.settings.title +'</b></h4></li>');
        
        





              $('img').error(function(){
        $(this).attr('src', '<?php echo base_url() ?>assets/img/not_found.png');
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
   </body>
</html>