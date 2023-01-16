@include('admin.dashboardtop')
<!-- content -->

<div class="flex-1 p-10 text-2xl font-bold" style="margin-left: 20%;">

    <label for="level">Level:</label>
    <select name="level" id="level" value="{{old('level') }}">
        <option value="" selected="selected">Select Level...</option>
    @foreach($levels as $level)
            <option value="{{$level -> id}}">{{$level -> name}}</option>
    @endforeach
    </select>
    
</div>
@include('admin.dashboardbottom')
