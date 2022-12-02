@extends('templates.main')

@section('content')

    @if(count($images) != 0)
        <form action="{{route('actionUploaded')}}" method="get" id="sorted">
            <select class="form-select" name="selected" onchange="sendSortedData()">
                <option selected disabled>Сортировать по</option>
                <option value="name">Наименованию</option>
                <option value="date-time">Дате и времени</option>
            </select>
        </form>
        <table class="table">

            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Превью</th>
                <th scope="col">Наименование файла</th>
                <th scope="col">Дата и время загрузки</th>
            </tr>
            </thead>
            @foreach($images as $image)
                <tbody>
                <tr>
                    <th scope="row">{{$image->id}}</th>
                    <td><a data-fancybox="gallery" href="{{asset('uploaded_images/' . $image->name_file)}}"><img
                                class="image-preview" src="{{asset('uploaded_images/' . $image->name_file)}}"></a></td>
                    <td>{{$image->name_file}}</td>
                    <td>{{$image->created_at}}</td>
                </tr>
                </tbody>
            @endforeach
        </table>
    @else
        <p>Вы пока не загрузили изображения. Для загрузки перейдите <a href="{{route('actionHome')}}">Сюда</a></p>
    @endif

@endsection
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
   function sendSortedData(){
     $('#sorted').submit();
   }
</script>
