<form action="/api/tasks/{{$task->id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="name" placeholder="Task name" value="{{$task->name}}">
    <input type="submit" value="Ok">
</form>