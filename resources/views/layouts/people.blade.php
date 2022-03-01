@extends('layouts.app')

@section('content')

    <h1>@yield('menuber')</h1>

    @yield('contnt')

    {{-- バリデーションのエラーメッセージを表示する --}}
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {{-- エラーメッセージ ここまで --}}

    {{-- 入力フォーム --}}
    <table class="table">
        @csrf
        <tr>
            <th>name</th>
            <td>@yield('name')</td>
        </tr>
        <tr>
            <th>email</th>
            <td>@yield('mail')</td>
        </tr>
        <tr>
            <th>age</th>
            <td>@yield('age')</td>
        </tr>
        <tr>
            <th>sex</th>
            <td>@yield('sex')</td>
        </tr>
        <tr>
            <th></th>
            <td>@yield('submit')
                <a href="{{ route('person.index') }}" class="btn btn-secondary">一覧に戻る</a>
            </td>
        </tr>
    </table>
    </form>
    {{-- 入力フォーム ここまで --}}

@endsection
