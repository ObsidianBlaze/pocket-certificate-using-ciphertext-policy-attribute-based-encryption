<!doctype html>
<html  lang="en">
@include('layouts.navstyle')

<body>
<section class="mb-40">

    @include('layouts.nav')

</section>

<section class="container my-24 px-6 mx-auto">
    <div class="bg-sky-300 ...">
        <img class="object-fill"  width="1800" height="600" src="{{asset('img/history.png')}}">
    </div>

    <div >
        <p class="text-base leading-6 mt-4 text-gray-600 dark:text-gray-100">
            Over the years, Lagos State has grown to become Nigeria’s most dynamic state. It is the most populous conurbation in Nigeria with 7,937,932 inhabitants as at the 2006 census. It is currently the second most populous city in Africa and currently estimated to be the second fastest growing city in Africa. Lagos is Nigeria’s most prosperous city, and much of the nation’s wealth and economic activities are concentrated in Lagos State. The commercial, financial and business center of Lagos and of Nigeria remains the business district of Lagos Island, where most of the country’s largest banks and financial institutions are located. Its progress, development and growth emanate from its dynamism as the nation’s commercialcultural melting pot in tourism, football, education and from the commendable foresight of successive administrations that have governed the state. Lagos State lies to the south-western part of the Federal Republic of Nigeria on the West Coast of Africa. It has one of the largest and most extensive road networks in West Africa. The Lagos-Ibadan expressway and the Lagos-Abeokuta expressway are the major arterial routes in the north of the city and serve as inter-state highways to Oyo and Ogun States respectively.
        </p>

        <p class="text-base leading-6 mt-4 text-gray-600 dark:text-gray-100">
            To the West, the congested Badagry expressway serves outlying towns such as Festac town. It stretches for over 180 kilometers along the coast of the Atlantic Ocean. It is pertinent to note that despite its sprawling population, constant reconstruction, renovation and incessant traffic jams, Lagos still offers a lot of satisfaction to its visitors and inhabitants. Lagos is a bustling social city with varying traditional festivals such as the Eyo and Egungun festivasl, carnivals and other side attractions such as theatres, cultural centres etc. It has a vibrant administration which is supported by 57 Local Government areas, one of which is the Ikorodu Local Government that hosts the main campus of the Polytechnic.
        </p>

        <p class="text-base leading-6 mt-4 text-gray-600 dark:text-gray-100">
            In 1975, the Lagos State Government decided to approve the establishment of a College of Science and Technology as the first Lagos State-owned tertiary institution. The Lagos State Polytechnic (LASPOTECH), previously known as the Lagos State College of Science and Technology (LACOSTECH), was founded in 1977 with the promulgation of the Lagos State Edict No.1 of 1978 which gave the College its legal existence with retroactive effect from June 1977.
        </p>

        <p class="text-base leading-6 mt-4 text-gray-600 dark:text-gray-100">
            In 1986, the Lagos State Government changed the name of the Institution from the Lagos State College of Science and Technology to the Lagos State Polytechnic. Academic activities started at the Isolo Campus of the Polytechnic in January, 1978 with the admission of 287 pioneer students into five different departments, viz: Accountancy and Finance, Insurance, Secretarial Studies, Management and Business Studies. The College was also offering Basic Studies Programme for candidates wishing to prepare for the G.C.E ‘A’ levels in Arts and the Sciences.
        </p>

        <p class="text-base leading-6 mt-4 text-gray-600 dark:text-gray-100">
            On the 1st of August, 1978, the Lagos State Government-owned School of Agriculture at Ikorodu was integrated into the College to become the Ikorodu Campus. The Polytechnic is concluding efforts to move from its hitherto multi-campus nature, to a monocampus institution. Sequel to the movement of the seat of administration to the Ikorodu permanent Campus, the Polytechnic had been operating a multi-campus system with three campuses namely, Ikorodu, Isolo and Surulere, (the last two located within Lagos metropolis).
        </p>

        <p class="text-base leading-6 mt-4 text-gray-600 dark:text-gray-100">
            With effect from May 2000, the Ikorodu Campus took over from the Isolo Campus as the seat of administration of the Polytechnic and the permanent campus of the institution. Since the giant step was taken in the year 2000, the institution has moved most of its schools and departments to the Ikorodu campus, while plans are going on to move the few remaining departments of the School of Management and Business Studies in the nearest future after the completion of accommodation facilities. It is pertinent to note that the Polytechnic will still retain the Isolo Campus as the School of Part Time Studies, in view of its proximity to the major clientele for the programme, who are largely situated in the Lagos metropolis.
        </p>

    </div>
</section>

<div class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 text-center md:text-left">

        <h2 class="text-3xl font-bold mb-12 text-center">Leaders</h2>

        <div class="flex flex-wrap mb-6">
            <div class="grow-0 shrink-0 basis-auto w-full md:w-3/12 px-3 mb-6 md:mb-0 ml-auto">
                <div
                    class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img src="{{asset('img/rector.jpg')}}"
                         class="w-full" alt="Louvre" />
                    <a href="#!">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                             style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                </div>
            </div>

            <div class="grow-0 shrink-0 basis-auto w-full md:w-9/12 xl:w-7/12 px-3 mb-6 md:mb-0 mr-auto">
                <h5 class="text-lg font-bold mb-3">Dr Oluremi Nurudeen Olaleye</h5>
                <div class="mb-3 text-red-600 font-medium text-sm flex items-center justify-center md:justify-start">
                </div>
                <p class="text-gray-500">
                    Rector
                </p>
            </div>
        </div>

        <div class="flex flex-wrap mb-6">
            <div class="grow-0 shrink-0 basis-auto w-full md:w-3/12 px-3 mb-6 md:mb-0 ml-auto">
                <div
                    class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img src="{{asset('img/deputy_rector.jpg')}}"
                         class="w-full" alt="Louvre" />
                    <a href="#!">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                             style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                </div>
            </div>

            <div class="grow-0 shrink-0 basis-auto w-full md:w-9/12 xl:w-7/12 px-3 mb-6 md:mb-0 mr-auto">
                <h5 class="text-lg font-bold mb-3">Mr Olumide Metilelu</h5>
                <div class="mb-3 text-red-600 font-medium text-sm flex items-center justify-center md:justify-start">
                </div>
                <p class="text-gray-500">
                    Deputy Rector
                </p>
            </div>
        </div>

        <div class="flex flex-wrap mb-6">
            <div class="grow-0 shrink-0 basis-auto w-full md:w-3/12 px-3 mb-6 md:mb-0 ml-auto">
                <div
                    class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img src="{{asset('img/deputy_rector_admin.png')}}"
                         class="w-full" alt="Louvre" />
                    <a href="#!">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                             style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                </div>
            </div>

            <div class="grow-0 shrink-0 basis-auto w-full md:w-9/12 xl:w-7/12 px-3 mb-6 md:mb-0 mr-auto">
                <h5 class="text-lg font-bold mb-3">Dr Kolawole Gbemavo G.</h5>
                <div class="mb-3 text-red-600 font-medium text-sm flex items-center justify-center md:justify-start">
                </div>
                <p class="text-gray-500">
                    Deputy Rector Administrator
                </p>
            </div>
        </div>

        <div class="flex flex-wrap mb-6">
            <div class="grow-0 shrink-0 basis-auto w-full md:w-3/12 px-3 mb-6 md:mb-0 ml-auto">
                <div
                    class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img src="{{asset('img/registrar.jpg')}}"
                         class="w-full" alt="Louvre" />
                    <a href="#!">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                             style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                </div>
            </div>

            <div class="grow-0 shrink-0 basis-auto w-full md:w-9/12 xl:w-7/12 px-3 mb-6 md:mb-0 mr-auto">
                <h5 class="text-lg font-bold mb-3">Dr Shakiru A. Bello</h5>
                <div class="mb-3 text-red-600 font-medium text-sm flex items-center justify-center md:justify-start">
                </div>
                <p class="text-gray-500">
                    The Registrar
                </p>
            </div>
        </div>

        <div class="flex flex-wrap mb-6">
            <div class="grow-0 shrink-0 basis-auto w-full md:w-3/12 px-3 mb-6 md:mb-0 ml-auto">
                <div
                    class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img src="{{asset('img/bursar.jpg')}}"
                         class="w-full" alt="Louvre" />
                    <a href="#!">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                             style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                </div>
            </div>

            <div class="grow-0 shrink-0 basis-auto w-full md:w-9/12 xl:w-7/12 px-3 mb-6 md:mb-0 mr-auto">
                <h5 class="text-lg font-bold mb-3">Mr Maumoh J. Jinadu</h5>
                <div class="mb-3 text-red-600 font-medium text-sm flex items-center justify-center md:justify-start">
                </div>
                <p class="text-gray-500">
                    Bursar
                </p>
            </div>
        </div>

        <div class="flex flex-wrap mb-6">
            <div class="grow-0 shrink-0 basis-auto w-full md:w-3/12 px-3 mb-6 md:mb-0 ml-auto">
                <div
                    class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img src="{{asset('img/librarian.jpg')}}"
                         class="w-full" alt="Louvre" />
                    <a href="#!">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                             style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                </div>
            </div>

            <div class="grow-0 shrink-0 basis-auto w-full md:w-9/12 xl:w-7/12 px-3 mb-6 md:mb-0 mr-auto">
                <h5 class="text-lg font-bold mb-3">Yusuf Kuburat Folasade</h5>
                <div class="mb-3 text-red-600 font-medium text-sm flex items-center justify-center md:justify-start">
                </div>
                <p class="text-gray-500">
                    Acting Librarian
                </p>
            </div>
        </div>

    </section>
    <!-- Section: Design Block -->

</div>


</body>
@include('layouts.footer')

</html>
