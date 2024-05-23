<form method="post" action="/api/login">
    @csrf
    <p>
        <label for="email">email</label><br>
        <input type="email" name="email" value="">
    </p>
    <p>
        <label for="password">password</label><br>
        <input type="password" name="password" value="">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form> 