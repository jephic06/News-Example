<!doctype html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
  	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	   <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('aznews/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('aznews/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('aznews/assets/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('aznews/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('aznews/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('aznews/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('aznews/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('aznews/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('aznews/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('aznews/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('aznews/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('aznews/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('aznews/assets/css/custom-style.css') }}">
 </head>

 <body>

   <div class="container-fluid bg-dark">
     <img src="http://mat1.gtimg.com/www/mobi/2017/image/logo-text-whitetext_v2.svg" style="padding:20px" />
   </div>

   <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top justify-content-center">
     <ul class="navbar-nav" style="flex-direction:row;">
       <li class="nav-item">
         <a class="nav-link active" href="#">要闻</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">推荐</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">热点</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">视频</a>
       </li>
     </ul>
   </nav>

  <main>
    <div class="trending-area fix">
      <div class="container">
        <div class="trending-main">

          <div style="padding-top:30px"></div>

          <div id="results"></div>
          <input id="offset" value="0" hidden/>
          <input id="newsCount" value="{{$newsCount}}" hidden/>

        </div>
      </div>
    </div>
  </main>

    <!-- JS here -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset('aznews/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('aznews/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('aznews/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('aznews/assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('aznews/assets/js/jquery.slicknav.min.js') }}"></script>
    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('aznews/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('aznews/assets/js/slick.min.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset('aznews/assets/js/gijgo.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('aznews/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('aznews/assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('aznews/assets/js/jquery.magnific-popup.js') }}"></script>
    <!-- Breaking New Pluging -->
    <script src="{{ asset('aznews/assets/js/jquery.ticker.js') }}"></script>
    <script src="{{ asset('aznews/assets/js/site.js') }}"></script>
    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('aznews/assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('aznews/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('aznews/assets/js/jquery.sticky.js') }}"></script>
    <!-- contact js -->
    <script src="{{ asset('aznews/assets/js/contact.js') }}"></script>
    <script src="{{ asset('aznews/assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('aznews/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('aznews/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('aznews/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('aznews/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('aznews/assets/js/main.js') }}"></script>

    <script>
    $(document).ready(function() {
      loadResults();
      $(window).scroll(function() {
        var offset = parseInt($("#offset").val())
        var newsCount = parseInt($("#newsCount").val())
        var results = $("#results");
        if (!results.data("loading") && offset < newsCount) {
          if($(window).scrollTop() == $(document).height() - $(window).height()) {
            $("#results").after($("<li class='loading' style='text-align:center;padding-bottom:50px'>Loading ...</li>").fadeIn('fast')).data("loading", true);
            setTimeout(function(){
              loadResults();
            }, 1000);
          }
        }
      });
    })

    function loadResults() {
      var offset = $("#offset").val()

      $.ajax({
        url: "{{ route('load') }}",
        type: "post",
        data: {
          offset: offset,
          limit: offset == 0 ? 10 : 5,
        },
        success: function(data) {

          var dataItem = ''
          var results = $("#results");
          $(".loading").fadeOut('fast', function() {
            $(this).remove();
          });

          data.forEach((item) => {
            dataItem += '<div class="trand-right-single d-flex">'
            dataItem += '<div class="trand-right-cap" style='+(item.newsImages.split(',').length > 1 ? "width:100%" : "")+'>'
            dataItem += '<h4><span class="color'+item.newsCategoryID+'">'+item.newsCategory+'</span><a href="#">'+item.newsTitle+'</a></h4>'

            if(item.newsImages.split(',').length > 1) {
              dataItem += '<div class="trand-middle-img">'
              item.newsImages.split(',').forEach((imgItem) => {
                dataItem += '<img src="'+imgItem+'" alt="" width="30%" style="object-fit:cover;">'
              })
              dataItem += '</div>'
            }

            dataItem += '<span class="news-source">'+item.newsSource+'</span><span class="news-datetime">'+item.newsDatetime+'</span>'
            dataItem += '</div>'

            dataItem += '<div class="trand-right-img">'
            if(item.newsImages.split(',').length == 1) dataItem += '<img src="'+item.newsImages+'" alt="" width="100">'
            dataItem += '</div>'

            dataItem += '</div>'
          })

          $("#offset").val(parseInt(offset)+(offset == 0 ? 10 : 5))
          results.append(dataItem);
          results.removeData("loading");
        }

      });
    };
    </script>

  </body>
</html>
