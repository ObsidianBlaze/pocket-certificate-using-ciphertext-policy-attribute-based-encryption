@include('admin.dashboardtop')
<!-- content -->

<div class="flex-1 p-10 text-2xl font-bold" style="margin-left: 17%;">
    <form style="font-size: large;">
        <div class="flex items-center border-b border-teal-500 py-2">
            <label for="level" style="padding-right: 10px;" >Level:</label>
            <select name="level" id="level" value="{{old('level') }}" style="width: 120px;">
                <option value="" selected="selected">Select Level...</option>
                @foreach($levels as $level)
                    <option value="{{$level -> id}}">{{$level -> name}}</option>
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


</div>
@include('admin.dashboardbottom')
