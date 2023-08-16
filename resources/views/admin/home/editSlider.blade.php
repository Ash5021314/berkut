@extends('layouts.admin_layout')
@section('title','Услуги ЧОП')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{route('sliderUpdate',$slider->id)}}" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="card-body">
                    <img style="width: 100px;height: 100px" src="{{asset('/storage/app/'.$slider->img)}}"
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

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Обновить </button>
                </div>
            </form>

        </div>
    </section>
@endsection
