<form action="/api/doingtasks" method="post">
        {{csrf_field()}}
        <select name="amongus_id">
        @foreach ($amonguses as $amongus)
            <option value="{{$amongus->id}}">{{$amongus->name}}</option>
        @endforeach
        </select>
        <select name="task_id">
        @foreach ($tasks as $task)
            <option value="{{$task->id}}">{{$task->name}}</option>
        @endforeach
        </select>
        <select name="is_done" placeholder="is_done">
            <option value="1">Done</option>
            <option value="0">Not done</option>
        </select>
        <input type="submit" value="Ok">
</form>