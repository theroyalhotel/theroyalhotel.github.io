<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield ('title')
    <base href="{{asset('')}} ">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="source/images/icon/favicon.ico">
    <!--Boostrap-->
    <link rel="stylesheet" href="source/css/bootstrap.min.css">
    <!-- animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Material Design Iconic Font CSS-->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!--datepicker-->
    <link rel="stylesheet" href="source/css/datepicker.css">

    <!-- sclick slider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css"/>
    <link rel="stylesheet" href="source/css/style.css">
    <!-- <link rel="stylesheet" href="source/css/responsive.css"> -->
    <link rel="stylesheet" href="source/css/feedback.css">
    <!-- izitoast -->
    <link rel="stylesheet" href="https://unpkg.com/izitoast/dist/css/iziToast.min.css">
    <!-- sweetarlet -->
    <link rel="stylesheet" href="source/css/sweetalert2.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.6/dist/sweetalert2.min.css"> -->

   @yield('css')
</head>

<body>
<div class="wrapper">
@include('home.layouts.header')
@yield ('content')
    <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>


@include('home.layouts.footer')
</div>
<!--jquery-->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
    $(document).ready(function(){
        $(".checkdayin").change(function(){
            dayin=$(this).val();
            dayout=$('.checkdayout').val();
            totalall=$('.totalall').val();

        });
        $(".checkdayout").change(function(){
            dayout=$(this).val();

        });
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="source/js/main.js"></script>
<!-- animate -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--boostrap-->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!--datepicker-->
<!-- <script src="source/js/datepicker.js"></script> -->
<script src="source/js/bootstrap-datepicker.js"></script>

<!-- slide -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js"></script>
<!-- izitoast -->
<script src="https://unpkg.com/izitoast/dist/js/iziToast.min.js"></script>
<!-- sweetarlet -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.6/dist/sweetalert2.all.min.js"></script> -->
</body>

</html>

