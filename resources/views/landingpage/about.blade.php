<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>About - Kepri Escapes</title>

  {{-- Link to CSS --}}
  <link rel="stylesheet" href="{{ asset('assets/css/blog.css')}}">
  {{-- bootsrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
  {{-- Box Icons --}}
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
  <style>
    .home{
      background:  linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/assets/img/abouttt.jpg') no-repeat;
      background-position: center; 
    }
  </style>
</head>
<body>
  {{-- header --}}
 @include('includes.header')

  {{-- home --}}
  <section class="home" id="home">
    <link rel="stylesheet" href="{{asset('assets/img/blog.jpg')}}">
    <div class="home-text container">
  
      <h2 class="home-title animated animatedFadeInUp fadeInUp">About Us</h2>
      <span class="home-subtitle animated animatedFadeInUp fadeInUp">Discover information about Kepri Escapes</span>
    </div>
  </section>


  <section class="about" id="about">
    <div class="row">
      <div class="col">
      <div class="image">
        <img src="{{asset('assets/img/about2.jpg')}}" alt="" class="img-shadow-left animated animatedFadeInLeft fadeInLeft">
      </div>
      </div>
      <div class="col">
      <div class="content animated animatedFadeInRight fadeInRight">
        <h3> Kepri Escapes, Your Favorite Tour Provider</h3>
        <div class="line"></div>
        <p>Welcome to Kepri Escapes, your gateway to unforgettable adventures in the Riau Islands! We are not just a tour package provider; we are architects of beautiful memories that will linger in your mind for a lifetime. Kepri Escapes envisions bringing the beauty of the Riau Islands to you through travel packages that not only captivate but also fulfill your every adventure-seeking desire.</p>
      </div>
    </div>
  
    </div>
    <div class="row">
      <div class="col">
        <div class="content animated animatedFadeInLeft fadeInLeft">
          <h3> Enjoy Your Holiday With Us</h3>
          <div class="line"></div>
          <p>We are not just a tour package provider; we are the architects of beautiful memories that will remain in your memory for the rest of your life. Kepri Escapes is here with a vision to present the natural beauty of the Riau Islands in a travel package that is not only stunning, but also fulfills your every adventure wish.</p>
        </div>
      </div>
      <div class="col">
        <div class="image">
          <img src="{{asset('assets/img/about3.jpg')}}" alt="" class="img-shadow-right animated animatedFadeInRight fadeInRight">
        </div>
   </section>





  {{-- Footer --}}
  @include('includes.footer')
    











  {{-- JQuery --}}
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  {{-- link to JS --}}
  <script src="{{asset('assets/js/blog.js')}}"></script>
  
  <script type="text/javascript">
  
    document.addEventListener('DOMContentLoaded', function() {
      var element = document.querySelector('.fade-in-left');
      element.classList.add('active');
    });
      </script>
</body>
</html>