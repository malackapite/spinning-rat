<form action="/api/roles/{{$role->id}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <input type="text" name="name" placeholder="Name">
        <input type="submit" value="Ok">
</form>