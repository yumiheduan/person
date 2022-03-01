@extends('layouts.people')

@section('menuber', '新規登録')

@section('content')

    {{-- 新規登録入力フォーム --}}
    <form action="{{ route('person.store') }}" method="post">

    @section('name')
        <input type="text" name="name" id="name" value="{{ old('name') }}">
    @endsection

    @section('mail')
        <input type="mail" name="mail" id="mail" value="{{ old('mail') }}">
    @endsection

    @section('age')
        <input type="number" name="age" id="age" value="{{ old('age') }}">
    @endsection

    @section('sex')
        <input type="radio" name="sex" id="male" value="male">male
        <input type="radio" name="sex" id="female" value="female">female

    @section('submit')
        <input type="submit" value="登録" class="btn btn-primary">
    @endsection

</form>
{{-- 入力フォーム ここまで --}}

@endsection
