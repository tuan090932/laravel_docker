<form method="post" action="/api/register">
    @csrf
    <p>
        <label for="name">Tên</label><br>
        <input type="text" name="name" value="">
    </p>
    <p>
        <label for="email">email</label><br>
        <input type="email" name="email" value="">
    </p>
    <p>
        <label for="password">password</label><br>
        <input type="password" name="password" value="">
    </p>
    <p>
        <label for="password_confirmation">password_confirmation</label><br>
        <input type="password" name="password_confirmation" value="">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form> 