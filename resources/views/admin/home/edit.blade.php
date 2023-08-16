{{--<a href="{{ route('logout') }}"--}}
{{--   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--    logout--}}
{{--</a>--}}
{{--<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--    @csrf--}}
{{--</form>--}}
@extends('layouts.admin_layout')
@section('title','Услуги ЧОП')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{route('home.update',$service->id)}}" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" value="{{$service->title}}" class="form-control" name="title">
                    </div>
                    <img style="width: 100px;height: 100px" src="{{asset('/storage/app/'.$service->img)}}"
                         alt="">
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="img">
                                <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="desc" placeholder="Вводите Описание " cols="50" rows="10">{{$service->desc}}</textarea>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Обновить </button>
                </div>
            </form>

        </div>
    </section>
@endsection
