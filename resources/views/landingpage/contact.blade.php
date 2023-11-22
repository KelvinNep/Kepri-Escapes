<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact - Kepri Escapes</title>

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
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/assets/img/about.jpg');
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
  
      <h2 class="home-title animated animatedFadeInUp fadeInUp">Contact</h2>
      <span class="home-subtitle animated animatedFadeInUp fadeInUp">Discover the way to keep in touch with Kepri Escapes</span>
    </div>
  </section>


  
  

        <section class="post container animated animatedFadeInUp fadeInUp">
          

        

            
        </section>


  {{-- Footer --}}
  @include('includes.footer')
    











  {{-- JQuery --}}
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  {{-- link to JS --}}
  <script src="{{asset('assets/js/blog.js')}}"></script>
</body>
</html>