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
            <a href="{{route('home.create')}}" class="btn btn-block btn-secondary mb-5">добавить инфо</a>

                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Service img</th>
                        <th>Service Title</th>
                        <th>Service description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($services)
                        @foreach($services as $service)
                            {{--                    {{dd($service)}}--}}
                            <tr>
                                <td>{{$service->id}}</td>
                                <td><img style="width: 100px;height: 100px" src="{{asset('/storage/app/'.$service->img)}}"
                                         alt=""></td>
                                <td>{{$service->title}}</td>
                                <td>{{$service->desc}}</td>
                                <td>
                                    <a href="{{route('home.edit',$service->id)}}" class="btn btn-block btn-warning btn-sm mb-3">Edit</a>
                                    <form action="{{ route("home.destroy",$service->id) }}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <input value="DELETE" class="btn btn-danger btn-sm w-100" type="submit">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endisset
                    </tbody>
                </table>
        </div>
    </section>
@endsection
