@extends('Admin\header')
@section('body')
    <div class="kanban">
        <a>Welcome to adminstrator page</a>
        <div>
            <a class="link" href="/admin/cakes"></a>
            <img src="/img/cake.png" alt="cakes-icon"/>
            <a>Cakes</a>
        </div>
        <div>
            <a class="link" href="/admin/chefs"></a>
            <img src="/img/hat.png" alt="chefs-icon"/>
            <a>Chefs</a>
        </div>
        <div>
            <a class="link" href="/admin/categories"></a>
            <img src="/img/cate.png" alt="category-icon"/>
            <a>Category</a>
        </div>
    </div>
@endsection