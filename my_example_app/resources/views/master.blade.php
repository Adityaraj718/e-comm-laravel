<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E Commerce</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>

<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}
</body>
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px;
    }

    /* .carousel{
        display:flex;
        overflow:hidden;
        width:100;
    }
    .carousel-item{
        min-width: 100%;
        flex: 0 0 auto;
        transition: transform 0.5s ease;
    } */
    /* .carousel {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js
    }

    .carousel-item {
        flex: 0 0 auto;
        scroll-snap-align: start;
    } */

    img.slider-img {
        height: 400px !important;
        width: 500px
    }

    .custom-product {
        height: 600px
    }

    .slider-text {
        background-color: #35443585 !important;
    }
    .trending-image {
        height: 100px;
        width: 150px;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper{
        margin: 30px;

    }
    .detail-img{
        height: 200px;
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom :20px;
        padding-bottom: 20px
    }
</style>

</html>
