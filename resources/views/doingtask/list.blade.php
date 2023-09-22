@foreach ($doingtasks as $doingtask)
    <form action="/api/doingtasks/{{$doingtask->id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$doingtask->amongus->name}} {{$doingtask->task->name}}">
        </div>
    </form>
@endforeach