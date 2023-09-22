<form action="/api/doingtasks/{{$doingtask->id}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <select name="amongus_id" placeholder="Amongus ID">
        @foreach ($amonguses as $amongus)
            <option value="{{$amongus->id}}"
            {{$amongus->id == $task->id ? 'selected' : ''}}
            >{{$amongus->name}}</option>
        @endforeach
        </select>
        <select name="status" placeholder="Status">
            <option value="1"
            <?php echo $doingtask->is_done == 1 ? 'selected' : '' ?>
            >Done</option>
            <option value="0"
            <?php echo $doingtask->is_done == 1 ? 'selected' : '' ?>
            >Not done</option>
        </select>
        <input type="submit" value="Ok">
</form>