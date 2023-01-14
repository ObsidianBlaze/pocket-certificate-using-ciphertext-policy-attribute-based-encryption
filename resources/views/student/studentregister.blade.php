<!doctype html>
<html lang="en">
@include('layouts.navstyle')
<body>
<section class="mb-40">

    @include('layouts.nav')

</section>

@include('layouts.main')
@if(session('errorMsg'))
    <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-gray-800 dark:text-red-400"
         role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
             xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                  clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">{{session('errorMsg')}}</span>
        </div>
    </div>
@endif

<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img class="w-18 h-18 mr-2" src="{{asset('img/newlogo.jpg')}}" alt="logo">
        </a>
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Register your credentials
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{route('create')}}" method="post">

                    {{csrf_field()}}
                    <div>
                        <label for="matNo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Matriculation
                            Number</label>
                        <input type="number" name="matNo" id="matNo"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="2005022032" required="" value="{{old('matNo')}}">
                        @if($errors->has('matNo'))
                            <div class="error-danger"
                                 style="color: #b85151; font-size: small">{{ $errors->first('matNo') }}</div>
                        @endif
                    </div>

                    <div>
                        <label for="surname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Surname</label>
                        <input type="text" name="surname" id="surname"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Okoye" required="" value="{{old('surname')}}">
                        @if($errors->has('surname'))
                            <div class="error-danger"
                                 style="color: #b85151; font-size: small">{{ $errors->first('surname') }}</div>
                        @endif
                    </div>

                    <div>
                        <label for="state_of_origin"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">State of
                            Origin</label>
                        <select name="state_of_origin" id="state" onchange="toggleLGA(this)" value="{{old('state_of_origin') }}">
                            <option value="" selected="selected">Select State...</option>
                            <option value="Abia">Abia</option>
                            <option value="Adamawa">Adamawa</option>
                            <option value="AkwaIbom">AkwaIbom</option>
                            <option value="Anambra">Anambra</option>
                            <option value="Bauchi">Bauchi</option>
                            <option value="Bayelsa">Bayelsa</option>
                            <option value="Benue">Benue</option>
                            <option value="Borno">Borno</option>
                            <option value="Cross River">Cross River</option>
                            <option value="Delta">Delta</option>
                            <option value="Ebonyi">Ebonyi</option>
                            <option value="Edo">Edo</option>
                            <option value="Ekiti">Ekiti</option>
                            <option value="Enugu">Enugu</option>
                            <option value="FCT">FCT</option>
                            <option value="Gombe">Gombe</option>
                            <option value="Imo">Imo</option>
                            <option value="Jigawa">Jigawa</option>
                            <option value="Kaduna">Kaduna</option>
                            <option value="Kano">Kano</option>
                            <option value="Katsina">Katsina</option>
                            <option value="Kebbi">Kebbi</option>
                            <option value="Kogi">Kogi</option>
                            <option value="Kwara">Kwara</option>
                            <option value="Lagos">Lagos</option>
                            <option value="Nasarawa">Nasarawa</option>
                            <option value="Niger">Niger</option>
                            <option value="Ogun">Ogun</option>
                            <option value="Ondo">Ondo</option>
                            <option value="Osun">Osun</option>
                            <option value="Oyo">Oyo</option>
                            <option value="Plateau">Plateau</option>
                            <option value="Rivers">Rivers</option>
                            <option value="Sokoto">Sokoto</option>
                            <option value="Taraba">Taraba</option>
                            <option value="Yobe">Yobe</option>
                            <option value="Zamfara">Zamafara</option>
                        </select>
                        @if($errors->has('state_of_origin'))
                            <div class="error-danger"
                                 style="color: #b85151; font-size: small">{{ $errors->first('state_of_origin') }}</div>
                        @endif
                    </div>

                    <div>
                        <label for="dob" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date Of
                            Birth</label>
                        <input type="date" name="dob" id="dob"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required="" value="{{old('dob')}}">
                        @if($errors->has('dob'))
                            <div class="error-danger"
                                 style="color: #b85151; font-size: small">{{ $errors->first('dob') }}</div>
                        @endif
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               required="">
                        @if($errors->has('password'))
                            <div class="error-danger"
                                 style="color: #b85151; font-size: small">{{ $errors->first('password') }}</div>
                        @endif
                    </div>

                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
@include('layouts.footer')
</html>
