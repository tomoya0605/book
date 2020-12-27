@extends('layouts.app')
@section('content')
<div class="container">
    <div class="mt-2 row">
        <table class="table table-striped">
            <thead>
            <tr class="table-info">
                <th scope="col">ID</th>
                <th scope="col">名前</th>
                <th scope="col">学生番号</th>
                <th scope="col">所属</th>
                <th scope="col">作成日時</th>
                <th scope="col">更新日時</th>
            </tr>
            </thead>
            <tbody>
            @foreach($readers as $reader)
            <tr>
                <td>{{ $reader->id}}</td>
                <td>{{ $reader->name }}</td>
                <td>{{ $reader->school_number }}</td>
                <td>{{ $reader->department->name }}</td>
                <td>{{ $reader->created_at }}</td>
                <td>{{ $reader->updated_at }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection