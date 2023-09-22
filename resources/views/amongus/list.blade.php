@foreach ($amonguses as $amongus)
    <form action='/api/amonguses/{{$amongus->id}}' method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$amongus->name}}">
            <input type="submit" value="{{$amongus->color}}">
            <input type="submit" value="{{$amongus->role->name}}">
        </div>
    </form>
@endforeach