<form action="/api/tasks" method="post">
     {{csrf_field()}}
    <input type="text" name="name" placeholder="Task name">
    <input type="submit" value="Ok">
</form>