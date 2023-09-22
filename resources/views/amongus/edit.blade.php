<form action="/api/amonguses/{{$amongus->id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="name" placeholder="Name" value="{{$amongus->name}}">
    <input type="text" name="color" placeholder="Color" value="{{$amongus->color}}">
    <select name="roleId">
        @foreach ($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Ok">
</form>