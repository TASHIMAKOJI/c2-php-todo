@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-10">
        <h2 class="text-muted py-3">{{ $todo->title }}</h2>
            <div class="float-right my-3">
                <form action="/todo/{{ $todo->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt mr-2"></i>削除</button>
                </form>
            </div>
        <table class="table">
            <thead>
            <tr>
                <th>タイトル</th>
                <th>期限</th>
                <th>状態</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td  style="width: 300px">{{ $todo->title }}</td>
                <td>{{ $todo->due_date }}</td>
                <td>{{ $todo->getStatusText() }}</td>
            </tr>
            </tbody>
        </table>
        <div>
        <th>
            <a href="/todo/{{ $todo->id }}/edit" class="btn btn-success"><i class="fas fa-edit mr-2"></i>編集</a>
        </th>
        <hr>        
        @include('parts.button.back')
    </div>
@endsection