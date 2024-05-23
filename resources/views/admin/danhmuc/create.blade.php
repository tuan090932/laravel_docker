<form method="post" action="/danhmuc/store">
    @csrf
    <p>
        <label for="title">Title</label><br>
        <input type="text" name="ten_danhmuc" value="">
    </p>

    <p>
        <button type="submit">Submit</button>
    </p>
</form> 