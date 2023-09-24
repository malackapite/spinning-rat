<form action="/api/doingtasks/{{$doingtask->amongus_id}}/{{$doingtask->task_id}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        
        <select name="amongus_id" placeholder="Amongus ID">
        @foreach ($amonguses as $amongus)
            <option value="{{$amongus->id}}"
            {{$doingtask->amongus_id == $amongus->id ? 'selected' : ''}}
            >{{$amongus->name}}</option>
        @endforeach
        </select>

        <select name="task_id" placeholder="Task ID">
        @foreach ($tasks as $task)
            <option value="{{$task->id}}"
            {{$doingtask->task_id == $task->id ? 'selected' : ''}}
            >{{$task->name}}</option>
        @endforeach
        </select>


        <select name="is_done" placeholder="is_done">
            <option value="1"
            <?php echo $doingtask->is_done == 1 ? 'selected' : '' ?>
            >Done</option>
            <option value="0"
            <?php echo $doingtask->is_done == 1 ? 'selected' : '' ?>
            >Not done</option>
        </select>
        <input type="submit" value="Ok">
</form>