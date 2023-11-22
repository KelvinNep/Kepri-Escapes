<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog - Kepri Escapes</title>

  {{-- Link to CSS --}}
  <link rel="stylesheet" href="{{ asset('assets/css/blog.css')}}">
  {{-- bootsrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
  {{-- Box Icons --}}
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
  {{-- header --}}
 @include('includes.header')

  {{-- home --}}
  <section class="home" id="home">
    <link rel="stylesheet" href="{{asset('assets/img/blog.jpg')}}">
    <div class="home-text container">
  
      <h2 class="home-title animated animatedFadeInUp fadeInUp">News & Blog</h2>
      <span class="home-subtitle animated animatedFadeInUp fadeInUp">See the latest about Kepulauan Riau from Kepri Escapes</span>
    </div>
  </section>

  {{-- post filter --}}
  <div class="post-filter container animated animatedFadeInUp fadeInUp">
    <span class="filter-item active-filter" data-filter="all">All</span>
    <span class="filter-item" data-filter="design">Design</span>
    <span class="filter-item" data-filter="tech">Tech</span>
    <span class="filter-item" data-filter="mobile">Mobile</span>
  </div>

  {{-- Posts --}}
  
  

<section class="post container animated animatedFadeInUp fadeInUp">
  
  @foreach ($posts as $postItem)
  @php
  $picture = str_replace('public', 'storage', $postItem->post_picture);
 @endphp
    <div class="post-box">
      @if (!empty($postItem->post_picture))
        <img src="{{ asset($picture) }}" alt="" class="post-img">
      @endif
      <h2 class="category">{{ $postItem->Category->category_name }}</h2>
      <a href="/blog/{{ $postItem->slug }}" class="post-title">
        {{ $postItem->post_title }}
      </a>
      <span class="post-date">{{ Carbon\Carbon::parse($postItem->created_at)->isoFormat('D MMMM Y') }}</span>
      <p class="post-description">{!! \Illuminate\Support\Str::limit($postItem->post_content, $limit = 50, $end = '...') !!}</p>

      <div class="profile">
        <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="" class="profile-img">
        <span class="profile-name">{{ $postItem->creator }}</span>
      </div>
    </div>
    </div>
  @endforeach
 

    {{-- post box 2 --}}
</section>


  {{-- Footer --}}
  @include('includes.footer')
    











  {{-- JQuery --}}
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  {{-- link to JS --}}
  <script src="{{asset('assets/js/blog.js')}}"></script>
</body>
</html>