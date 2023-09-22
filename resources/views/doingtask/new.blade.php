<form action="/api/doingtask" method="post">
        {{csrf_field()}}
        <input type="text" name="name" placeholder="name">
        <input type="submit" value="Ok">
</form>