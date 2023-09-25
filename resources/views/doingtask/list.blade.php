@foreach ($doingtasks as $doingtask)
    <form action="/api/doingtasks/{{$doingtask->amongus_id}}/{{$doingtask->task_id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
        <input type="submit" value="{{$doingtask->amongus->name}}">
        <input type="submit" value="{{$doingtask->task->name}}">
        </div>
    </form>
@endforeach