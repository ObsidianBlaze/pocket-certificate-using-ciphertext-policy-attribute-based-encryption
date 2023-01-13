<!doctype html>
<html>
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
<body>
<!-- Container for demo purpose -->
<div>

    <!-- Section: Design Block -->
    <section class="mb-40">


        <nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="{{url('/')}}" class="flex items-center">
                    <img src="{{asset('img/newlogo.jpeg')}}" class="h-6 mr-3 h-20 w-20" alt="Laspotech Logo">
                </a>
                <div class="flex md:order-2">
                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">News</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                        <li>
                            <button class="block py-2 hasSubMenu md:font-medium" >Login <span class="inline-block"><svg data-baseweb="icon" viewBox="0 0 24 24" class="ml-1 w-4 h-4 fill-current login"><title>Login</title><path transform="rotate(270, 12, 12)" fill-rule="evenodd" clip-rule="evenodd" d="M9 12C9 12.2652 9.10536 12.5196 9.29289 12.7071L13.2929 16.7071C13.6834 17.0976 14.3166 17.0976 14.7071 16.7071C15.0976 16.3166 15.0976 15.6834 14.7071 15.2929L11.4142 12L14.7071 8.70711C15.0976 8.31658 15.0976 7.68342 14.7071 7.29289C14.3166 6.90237 13.6834 6.90237 13.2929 7.29289L9.29289 11.2929C9.10536 11.4804 9 11.7348 9 12Z"></path></svg> </span> </button>
                            <ul class="text-sm subMenu hidden border-gray-100 rounded-lg bg-gray-50 md:flex-row md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                                <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Student</a>
                                <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Admin</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="text-center bg-gray-50 text-gray-800 py-24 px-6">
            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">Pocket Certificate
                <br/><span class="text-blue-600">Lagos State Polytechnic</span></h1>
        </div>
    </section>


    <!-- Section: Design Block -->

</div>

{{--Carousel--}}
<div id="carousel">
    <div id="slide-container">
        <div class="slide" data-slideIndex="0">
            <div class="slide-banner">School Entrance</div>
            <img width="1200" height="600" src="{{asset('img/laspotech_slide1.jpg')}}">
        </div>
        <div class="slide" data-slideIndex="1">
            <div class="slide-banner">Library Complex!</div>
            <img width="1200" height="600" src="{{asset('img/laspotech_slide2.jpg')}}">
        </div>
        <div class="slide" data-slideIndex="2">
            <div class="slide-banner">Governor Awarding Student </div>
            <img width="1200" height="600" src="{{asset('img/laspotech_slide3.jpg')}}">
        </div>
{{--        <div class="slide" data-slideIndex="3">--}}
{{--            <div class="slide-banner">See penguins! <a href="">Buy tickets now.</a></div>--}}
{{--            <img width="1200" height="600" src="https://web-dev.imgix.net/image/j2RDdG43oidUy6AL6LovThjeX9c2/oweFaoCZ4g8bieZdvG5L.jpg?auto=format&w=800">--}}
{{--        </div>--}}
{{--        <div class="slide" data-slideIndex="4">--}}
{{--            <div class="slide-banner">Take a ride on the wheel! <a href="">Buy tickets now.</a></div>--}}
{{--            <img width="1200" height="600" src="https://web-dev.imgix.net/image/j2RDdG43oidUy6AL6LovThjeX9c2/G0aWgHwWJTPZus9YEMyH.jpg?auto=format&w=800">--}}
{{--        </div>--}}
    </div>
    <div id="back-button" class="arrow back">←</div>
    <div id="forward-button" class="arrow forward">→</div>
    <div class="slide-indicators">
        <div class="slide-indicator active"></div>
        <div class="slide-indicator"></div>
        <div class="slide-indicator"></div>
{{--        <div class="slide-indicator"></div>--}}
{{--        <div class="slide-indicator"></div>--}}
    </div>
</div>

<div class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 text-center md:text-left">

        <h2 class="text-3xl font-bold mb-12 text-center">Latest News</h2>

        <div class="flex flex-wrap mb-6">
            <div class="grow-0 shrink-0 basis-auto w-full md:w-3/12 px-3 mb-6 md:mb-0 ml-auto">
                <div
                    class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img src="https://mdbootstrap.com/img/new/standard/city/018.jpg"
                         class="w-full" alt="Louvre" />
                    <a href="#!">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                             style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                </div>
            </div>

            <div class="grow-0 shrink-0 basis-auto w-full md:w-9/12 xl:w-7/12 px-3 mb-6 md:mb-0 mr-auto">
                <h5 class="text-lg font-bold mb-3">Welcome to California</h5>
                <div class="mb-3 text-red-600 font-medium text-sm flex items-center justify-center md:justify-start">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm82.29 357.6c-3.9 3.88-7.99 7.95-11.31 11.28-2.99 3-5.1 6.7-6.17 10.71-1.51 5.66-2.73 11.38-4.77 16.87l-17.39 46.85c-13.76 3-28 4.69-42.65 4.69v-27.38c1.69-12.62-7.64-36.26-22.63-51.25-6-6-9.37-14.14-9.37-22.63v-32.01c0-11.64-6.27-22.34-16.46-27.97-14.37-7.95-34.81-19.06-48.81-26.11-11.48-5.78-22.1-13.14-31.65-21.75l-.8-.72a114.792 114.792 0 0 1-18.06-20.74c-9.38-13.77-24.66-36.42-34.59-51.14 20.47-45.5 57.36-82.04 103.2-101.89l24.01 12.01C203.48 89.74 216 82.01 216 70.11v-11.3c7.99-1.29 16.12-2.11 24.39-2.42l28.3 28.3c6.25 6.25 6.25 16.38 0 22.63L264 112l-10.34 10.34c-3.12 3.12-3.12 8.19 0 11.31l4.69 4.69c3.12 3.12 3.12 8.19 0 11.31l-8 8a8.008 8.008 0 0 1-5.66 2.34h-8.99c-2.08 0-4.08.81-5.58 2.27l-9.92 9.65a8.008 8.008 0 0 0-1.58 9.31l15.59 31.19c2.66 5.32-1.21 11.58-7.15 11.58h-5.64c-1.93 0-3.79-.7-5.24-1.96l-9.28-8.06a16.017 16.017 0 0 0-15.55-3.1l-31.17 10.39a11.95 11.95 0 0 0-8.17 11.34c0 4.53 2.56 8.66 6.61 10.69l11.08 5.54c9.41 4.71 19.79 7.16 30.31 7.16s22.59 27.29 32 32h66.75c8.49 0 16.62 3.37 22.63 9.37l13.69 13.69a30.503 30.503 0 0 1 8.93 21.57 46.536 46.536 0 0 1-13.72 32.98zM417 274.25c-5.79-1.45-10.84-5-14.15-9.97l-17.98-26.97a23.97 23.97 0 0 1 0-26.62l19.59-29.38c2.32-3.47 5.5-6.29 9.24-8.15l12.98-6.49C440.2 193.59 448 223.87 448 256c0 8.67-.74 17.16-1.82 25.54L417 274.25z"/></svg>Travels
                </div>
                <p class="text-gray-500 mb-6">
                    <small>Published <u>13.01.2022</u> by
                        <a href="" class="text-gray-900">Anna Maria Doe</a></small>
                </p>
                <p class="text-gray-500">
                    Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                    placerat vulputate. Ut vulputate est non quam dignissim
                    elementum. Donec a ullamcorper diam.
                </p>
            </div>
        </div>

        <div class="flex flex-wrap mb-6">
            <div class="grow-0 shrink-0 basis-auto w-full md:w-3/12 px-3 mb-6 md:mb-0 ml-auto">
                <div
                    class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img src="https://mdbootstrap.com/img/new/standard/city/032.jpg"
                         class="w-full" alt="Louvre" />
                    <a href="#!">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                             style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                </div>
            </div>

            <div class="grow-0 shrink-0 basis-auto w-full md:w-9/12 xl:w-7/12 px-3 mb-6 md:mb-0 mr-auto">
                <h5 class="text-lg font-bold mb-3">Exhibition in Paris</h5>
                <div class="mb-3 text-blue-600 font-medium text-sm flex items-center justify-center md:justify-start">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M204.3 5C104.9 24.4 24.8 104.3 5.2 203.4c-37 187 131.7 326.4 258.8 306.7 41.2-6.4 61.4-54.6 42.5-91.7-23.1-45.4 9.9-98.4 60.9-98.4h79.7c35.8 0 64.8-29.6 64.9-65.3C511.5 97.1 368.1-26.9 204.3 5zM96 320c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm32-128c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128-64c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 64c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"/></svg>Art
                </div>
                <p class="text-gray-500 mb-6">
                    <small>Published <u>12.01.2022</u> by
                        <a href="" class="text-gray-900">Halley Frank</a></small>
                </p>
                <p class="text-gray-500">
                    Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet diam
                    orci, nec ornare metus semper sed. Integer volutpat ornare erat
                    sit amet rutrum.
                </p>
            </div>
        </div>

        <div class="flex flex-wrap mb-6">
            <div class="grow-0 shrink-0 basis-auto w-full md:w-3/12 px-3 mb-6 md:mb-0 ml-auto">
                <div
                    class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img src="https://mdbootstrap.com/img/new/standard/city/059.jpg"
                         class="w-full" alt="Louvre" />
                    <a href="#!">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                             style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                </div>
            </div>

            <div class="grow-0 shrink-0 basis-auto w-full md:w-9/12 xl:w-7/12 px-3 mb-6 md:mb-0 mr-auto">
                <h5 class="text-lg font-bold mb-3">Stock market boom</h5>
                <div class="mb-3 text-yellow-500 font-medium text-sm flex items-center justify-center md:justify-start">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M608 64H32C14.33 64 0 78.33 0 96v320c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V96c0-17.67-14.33-32-32-32zM48 400v-64c35.35 0 64 28.65 64 64H48zm0-224v-64h64c0 35.35-28.65 64-64 64zm272 176c-44.19 0-80-42.99-80-96 0-53.02 35.82-96 80-96s80 42.98 80 96c0 53.03-35.83 96-80 96zm272 48h-64c0-35.35 28.65-64 64-64v64zm0-224c-35.35 0-64-28.65-64-64h64v64z"/></svg>Business
                </div>
                <p class="text-gray-500 mb-6">
                    <small>Published <u>10.01.2022</u> by
                        <a href="" class="text-gray-900">Joe Svan</a></small>
                </p>
                <p class="text-gray-500">
                    Curabitur tristique, mi a mollis sagittis, metus felis mattis
                    arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
                    massa volutpat feugiat. Donec.
                </p>
            </div>
        </div>

    </section>
    <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->

</body>

<script>

    function autoplayCarousel() {
        const carouselEl = document.getElementById("carousel");
        const slideContainerEl = carouselEl.querySelector("#slide-container");
        const slideEl = carouselEl.querySelector(".slide");
        let slideWidth = slideEl.offsetWidth;
        // Add click handlers
        document
            .querySelector("#back-button")
            .addEventListener("click", () => navigate("backward"));
        document
            .querySelector("#forward-button")
            .addEventListener("click", () => navigate("forward"));
        document.querySelectorAll(".slide-indicator").forEach((dot, index) => {
            dot.addEventListener("click", () => navigate(index));
            dot.addEventListener("mouseenter", () => clearInterval(autoplay));
        });
        // Add keyboard handlers
        document.addEventListener("keydown", (e) => {
            if (e.code === "ArrowLeft") {
                clearInterval(autoplay);
                navigate("backward");
            } else if (e.code === "ArrowRight") {
                clearInterval(autoplay);
                navigate("forward");
            }
        });
        // Add resize handler
        window.addEventListener("resize", () => {
            slideWidth = slideEl.offsetWidth;
        });
        // Autoplay
        const autoplay = setInterval(() => navigate("forward"), 3000);
        slideContainerEl.addEventListener("mouseenter", () =>
            clearInterval(autoplay)
        );
        // Slide transition
        const getNewScrollPosition = (arg) => {
            const gap = 10;
            const maxScrollLeft = slideContainerEl.scrollWidth - slideWidth;
            if (arg === "forward") {
                const x = slideContainerEl.scrollLeft + slideWidth + gap;
                return x <= maxScrollLeft ? x : 0;
            } else if (arg === "backward") {
                const x = slideContainerEl.scrollLeft - slideWidth - gap;
                return x >= 0 ? x : maxScrollLeft;
            } else if (typeof arg === "number") {
                const x = arg * (slideWidth + gap);
                return x;
            }
        };
        const navigate = (arg) => {
            slideContainerEl.scrollLeft = getNewScrollPosition(arg);
        };
        // Slide indicators
        const slideObserver = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const slideIndex = entry.target.dataset.slideindex;
                        carouselEl
                            .querySelector(".slide-indicator.active")
                            .classList.remove("active");
                        carouselEl
                            .querySelectorAll(".slide-indicator")
                            [slideIndex].classList.add("active");
                    }
                });
            },
            { root: slideContainerEl, threshold: 0.1 }
        );
        document.querySelectorAll(".slide").forEach((slide) => {
            slideObserver.observe(slide);
        });
    }
    autoplayCarousel();

    function toggleMenu (btn) {
        const el = btn.parentElement.querySelector('.subMenu')
        el.classList.toggle('hidden')
    }
    const btn = document.querySelector('.hasSubMenu')
    btn.addEventListener('click', function(){
        toggleMenu(btn)
    })

</script>
</html>
