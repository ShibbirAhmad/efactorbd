<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon" />
<title>Marketshop - eCommerce HTML Template</title>
<meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
       @include('Frontend.partials.css')
</head>
<body>
<div class="wrapper-wide">

  @include('Frontend.partials.header')

  <div id="container">
    <div class="container">
       
        @yield('content')

    </div>
  </div>
  <!-- Feature Box Start-->
  <div class="container">
    <div class="custom-feature-box row">
      <div class="col-sm-4 col-xs-12">
        <div class="feature-box fbox_1">
          <div class="title">Free Shipping</div>
          <p>Free shipping on order over $1000</p>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12">
        <div class="feature-box fbox_3">
          <div class="title">Gift Cards</div>
          <p>Give the special perfect gift</p>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12">
        <div class="feature-box fbox_4">
          <div class="title">Reward Points</div>
          <p>Earn and spend with ease</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Feature Box End-->
 
    @include('Frontend.partials.footer')

  <!-- Facebook Side Block Start -->
  <div id="facebook" class="fb-left sort-order-1">
    <div class="facebook_icon"><i class="fa fa-facebook"></i></div>
    <div class="fb-page" data-href="https://www.facebook.com/harnishdesign/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">
      <div class="fb-xfbml-parse-ignore">
        <blockquote cite="https://www.facebook.com/harnishdesign/"><a href="https://www.facebook.com/harnishdesign/">Harnish Design</a></blockquote>
      </div>
    </div>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  </div>
  <!-- Facebook Side Block End -->
  <!-- Twitter Side Block Start -->
  <div id="twitter_footer" class="twit-left sort-order-2">
    <div class="twitter_icon"><i class="fa fa-twitter"></i></div>
    <a class="twitter-timeline" href="https://twitter.com/" data-chrome="nofooter noscrollbar transparent" data-theme="light" data-tweet-limit="2" data-related="twitterapi,twitter" data-aria-polite="assertive" data-widget-id="347621595801608192">Tweets by @</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
  <!-- Twitter Side Block End -->
  <!-- Video Side Block Start -->
  <div id="video_box" class="vb-right sort-order-1">
    <div id="video_box_icon"><i class="fa fa-play"></i></div>
    <p>
      <iframe allowfullscreen="" src="//www.youtube.com/embed/SZEflIVnhH8" height="315" width="560"></iframe>
    </p>
  </div>
  <!-- Video Side Block End -->
  <!-- Custom Side Block Start -->
  <div id="custom_side_block" class="custom_side_block_right sort-order-2">
    <div class="custom_side_block_icon"> <i class="fa fa-chevron-right"></i> </div>
    <table>
      <tbody>
        <tr>
          <td><h2>CMS Blocks</h2></td>
        </tr>
        <tr>
          <td><img alt="" src="image/banner/cms-block.jpg"></td>
        </tr>
        <tr>
          <td><p>This is a CMS block. You can insert any content (HTML, Text, Images) Here.</p></td>
        </tr>
        <tr>
          <td><strong><a href="#" class="btn btn-sm btn-primary">Read More</a></strong></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- Custom Side Block End -->
</div>

 @include('Frontend.partials.js')

</body>
</html>