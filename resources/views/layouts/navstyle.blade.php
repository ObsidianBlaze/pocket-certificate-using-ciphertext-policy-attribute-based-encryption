<head>
    <title>Laspotech Pocket Certificate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<style>
    .dropdown:hover .dropdown-menu {
        display: block;
    }

    #carousel {
        max-width: 1200px;
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        position: relative;
    }
    .slide-indicators {
        display: flex;
        justify-content: center;
    }
    .slide-indicator {
        height: 44px;
        width: 50px;
        display: flex;
        justify-items: center;
        cursor: pointer;
    }
    .slide-indicator:after {
        content: "";
        background-color: #878787;
        height: 10px;
        margin-top: 10px;
        width: 40px;
    }
    .slide-indicator.active:after,
    .slide-indicator:hover:after {
        background-color: #000000;
    }
    .slide-banner {
        background-color: #000000;
        color: #ffffff;
        position: absolute;
        left: 0;
        bottom: 20px;
        padding: 15px;
        font-size: 2.5vw;
    }
    .slide-banner a {
        color: #ffffff;
    }
    #slide-container {
        scroll-snap-type: x mandatory;
        overflow-x: scroll;
        overflow-y: hidden;
        display: flex;
        align-items: center;
        height: 100%;
        gap: 10px;
        -webkit-overflow-scrolling: touch;
        scroll-behavior: smooth;
    }
    .slide {
        scroll-snap-align: center;
        position: relative;
        min-width: 100%;
        padding-top: 50%;
    }
    .slide img {
        height: 100%;
        width: auto;
        position: absolute;
        top: 0;
        left: 0;
    }
    .arrow {
        color: #ffffff;
        height: 20px;
        width: 20px;
        background-color: #000000;
        position: absolute;
        padding: 10px;
        opacity: 0.3;
        cursor: pointer;
    }
    .arrow.back {
        left: 10px;
        top: 10px;
    }
    .arrow.forward {
        right: 10px;
        top: 10px;
    }
    .arrow:hover {
        opacity: 1;
    }

</style>
