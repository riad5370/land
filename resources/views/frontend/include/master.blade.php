
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha384-*********************************" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
    <style>
        .background-section {
        position: relative;
        width: 100%;
        height: 400px;
        background-image: url('{{ asset('frontend/img/banner1.jpeg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    </style>
    @stack('css')
</head>

<body>
    @include('frontend.include.header')

    @yield('body')

    @include('frontend.include.footer')


    <script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>
    <script>
        function changeMainImage(src) {
            document.getElementById('mainImage').src = src;
        }
    </script>
    @stack('js')
</body>

</html>