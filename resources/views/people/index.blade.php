@extends('layouts.app')

@section('content')
    <h1>一覧画面</h1>

    {{-- 新規登録ページへのリンク --}}
    <a href="{{ route('person.create') }}" class="btn btn-primary">新規登録</a>

    {{-- 一覧画面表示テーブル --}}
    <table class="table">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>age</th>
            <th>sex</th>
        </tr>

        @foreach ($people as $person)
            <tr>
                <td>{{ $person->id }}</td>
                <td>{{ $person->name }}</td>
                <td>{{ $person->mail }}</td>
                <td>{{ $person->age }}</td>
                <td>{{ $person->sex }}</td>
                <td>

                    {{-- 削除ボタンおよび更新登録ページのリンク --}}
                    <form action="{{ route('person.destroy', $person) }}" method="post" class="form-inline">
                        @method('DELETE')
                        @csrf
                        <a href="{{ route('person.edit', $person) }}" class="btn btn-warning">更新</a>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('本当に削除しますか？');">削除</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{-- テーブルここまで --}}
@endsection
