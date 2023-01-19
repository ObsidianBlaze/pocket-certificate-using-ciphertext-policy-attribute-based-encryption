@include('admin.dashboardtop')
<!-- content -->

<div class="flex-1 p-10 text-2xl font-bold" style="margin-left: 17%;">
    <form style="font-size: medium;">
        <div class="flex items-center border-b border-teal-500 py-2">
            <label for="level" style="padding-right: 10px;" >Level:</label>
            <select name="level" id="level" value="{{old('level') }}" style="width: 120px;">
                <option value="" selected="selected">Select...</option>
                @foreach($levels as $level)
                    <option value="{{$level -> id}}">{{$level -> name}}</option>
                @endforeach
            </select>

            <label for="department" style="padding-right: 10px;" >Department:</label>
            <select name="department" id="level" value="{{old('department') }}" style="width: 120px;">
                <option value="" selected="selected">Select...</option>
                @foreach($departments as $department)
                    <option value="{{$department -> id}}">{{$department -> name}}</option>
                @endforeach
            </select>

        @foreach($user as $admin)
                <input type="number" hidden disabled value="{{$admin -> id}}">
            @endforeach

            <label for="mat_number" style="padding-right: 10px;">Mat Number:</label>
            <input type="number" name="mat_number" style="border: 1px solid black">

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                GO!
            </button>
        </div>
    </form>



    <div class="relative overflow-x-auto" style="margin-top: 70px;">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-9 py-3">
                    Matric_No
                </th>
                <th scope="col" class="px-9 py-3">
                    Department
                </th>
                <th scope="col" class="px-9 py-3">
                    Level
                </th>
                <th scope="col" class="px-9 py-3">
                    Admin_Email
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-9 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    2005022029
                </th>
                <td class="px-9 py-4">
                    Computer Science
                </td>
                <td class="px-9 py-4">
                    ND
                </td>
                <td class="px-9 py-4">
                    admin@mail.com
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-9 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    2005022032
                </th>
                <td class="px-9 py-4">
                    Computer Science
                </td>
                <td class="px-9 py-4">
                    HND
                </td>
                <td class="px-9 py-4">
                    admin@mail.com
                </td>
            </tr>

            </tbody>
        </table>
    </div>


</div>
@include('admin.dashboardbottom')
