@extends('layouts.admin_layout')
@section('title','Услуги ЧОП')

@section('content')
    <div class="card card-primary">
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('sliderStore')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="sliderImage">
                            <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">добавить </button>
            </div>
        </form>
    </div>
@endsection
