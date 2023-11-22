<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kepri Escapes</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Favicons -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png')}}">

    <link rel="stylesheet" href="{{ asset('assets/plugin/css/all.css') }}" />
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    

     <!-- Summernote Editor -->
  
    <!-- include libraries(jQuery, bootstrap) -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    

    <!-- include summernote css/js-->
   

    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


   <!-- Trix Editor -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/trix.css')}}">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    
  <style>
    trix-toolbar [data-trix-button-group="file-tools"]{
        display:none;
    }
  </style>
   
   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    @include('includes.navbar')

    <!-- Sidebar -->
    @include('includes.sidebar')


    <!-- Main Content -->
    @yield('content')

    <!-- Modal View -->
  {{-- stisla --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    {{-- <script src="{{ asset('assets/vendor/feather-icons/feather.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script> --}}
    <script src="{{ asset('assets/vendor/quill/quill.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>
    @include('sweetalert::alert')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script type="text/javascript">

      $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          
          event.preventDefault();
          Swal.fire({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, delete it!"
        }).then((result) => {
          if (result.isConfirmed) {
            form.submit();
          }
        });
        });
     
    </script>
</body>

</html>
