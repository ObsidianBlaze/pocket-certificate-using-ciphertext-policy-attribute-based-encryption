
@include('admin.dashboardtop')
    <!-- content -->
    <div class="flex-1 p-10 text-2xl font-bold" style="margin-left: 20%;">

                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Create New Admin
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="{{route('create_admin')}}" method="post">

                            {{csrf_field()}}
                            <div>
                                <label for="matNo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Admin Email</label>
                                <input type="email" name="email" id="email"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="xy@mail.com" required="" value="{{old('email')}}">
                                @if($errors->has('email'))
                                    <div class="error-danger"
                                         style="color: #b85151; font-size: small">{{ $errors->first('email') }}</div>
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

                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">
                                Create
                            </button>
                        </form>
                    </div>
                </div>

    </div>
@include('admin.dashboardbottom')
