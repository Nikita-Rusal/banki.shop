@extends('templates.main')


@section('title', 'Загрузка изображений')

@section('content')

    @include('layouts.messages.messages')

    <form action="{{route('uploadImage')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="form-group">
            <input type="file" name="images[]" multiple>
        </div>
        <button type="submit">Загрузить</button>
    </form>

@endsection


