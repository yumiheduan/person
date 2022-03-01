@extends('layouts.people')

@section('menuber', '更新登録')

@section('content')

    {{-- 更新登録入力フォーム --}}
    <form action="{{ route('person.update', $person) }}" method="post">
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $person->id }}">

    @section('name')
        <input type="text" name="name" id="name" value="{{ old('name', $person->name) }}">
    @endsection

    @section('mail')
        <input type="mail" name="mail" id="mail" value="{{ old('mail', $person->mail) }}">
    @endsection

    @section('age')
        <input type="number" name="age" id="age" value="{{ old('age', $person->age) }}">
    @endsection

    @section('sex')
        <input type="radio" name="sex" id="male" value="male" @if (old('sex', $person->sex) == 'male') checked @endif>male
        <input type="radio" name="sex" id="female" value="female" @if (old('sex', $person->sex) == 'female') checked @endif>female

    @section('submit')
        <button class='btn btn-primary' type="submit">送信</button>
    @endsection

</form>
{{-- 入力フォーム ここまで --}}

@endsection
