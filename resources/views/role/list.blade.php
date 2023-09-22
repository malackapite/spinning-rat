@foreach ($roles as $role)
    <form action="/api/roles/{{$role->id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$role->name}}">
        </div>
    </form>
@endforeach