@extends('layouts.admin_layout')
@section('title','Услуги ЧОП')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('home.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="serviceTitle" id="exampleInputEmail1" placeholder="Вводите заголовок ">
                </div>
                <div class="form-group">
                    <textarea name="serviceDescription" placeholder="Вводите Описание " cols="50" rows="10"></textarea>
                   </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="serviceImage">
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
