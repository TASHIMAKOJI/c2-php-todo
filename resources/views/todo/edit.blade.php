@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-10">
            <h2 class="text-muted py-3">Todo {{$todo->title}} 編集</h2>
            <form action="/todo" method="POST">
                @include('parts.todo.input')
                <button class="btn btn-primary my-2" type="submit">更新</button>
            </form>
            <hr>
            @include('parts.button.back')
        </div>
    </div>
@endsection