<?php

?>
@extends('layouts.default')
@section('content')
<form method="post" action="/danhmuc/store">
    @csrf
    <p>
        <label for="title">Title</label><br>
        <input type="text" name="ten_danhmuc" value="">
    </p>

    <p>
        <button type="submit">Thêm danh mục</button>
    </p>
</form> 

<?php
foreach ($danhmucs as $dm) {
    ?>
    <div class="d-flex align-items-center">
    <div class="btn-group">
            <a href="./danhmuc/delete/<?=$dm['id_danhmuc']?>" class="btn btn-sm btn-outline-secondary">Delete</a>
        </div>
        <h2 >
            <?=$dm['ten_danhmuc']?>
        </h2>
    </div>
<?php
}
?>
@endsection