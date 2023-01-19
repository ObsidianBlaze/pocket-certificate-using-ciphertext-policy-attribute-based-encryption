@include('admin.dashboardtop')
<!-- content -->

<div class="flex-1 p-10 text-2xl font-bold" style="margin-left: 17%;">
    <form class="w-full max-w-sm">
        <div class="flex items-center border-b border-teal-500 py-2">
            <label for="level">Level:</label>
            <select name="level" id="level" value="{{old('level') }}">
                <option value="" selected="selected">Select Level...</option>
                @foreach($levels as $level)
                    <option value="{{$level -> id}}">{{$level -> name}}</option>
                @endforeach
            </select>

            @foreach($user as $admin)
                <input type="number" hidden disabled value="{{$admin -> id}}">
            @endforeach

            <label for="mat_number" style="padding-left: 20px;">Mat Number:</label>
            <input type="number" name="mat_number" style="border: 1px solid black">

            <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
                Cancel
            </button>
        </div>
    </form>


</div>
@include('admin.dashboardbottom')
