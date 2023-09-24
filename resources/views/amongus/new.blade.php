<form action="/api/amonguses" method="post">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="color" placeholder="Color">
    <select name="roleId">
        @foreach ($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Ok">
</form>