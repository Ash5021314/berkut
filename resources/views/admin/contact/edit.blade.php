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
            <form method="POST" action="{{route('contact.update',$contact[0]->id)}}" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" value="{{$contact[0]->email}}" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$contact[0]->address}}" class="form-control" name="address">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$contact[0]->phones}}" class="form-control" name="phones">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </div>
            </form>

        </div>
    </section>
@endsection
