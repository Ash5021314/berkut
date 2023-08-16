@extends('layouts.admin_layout')
@section('title','Слаидер')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <a href="{{route('sliderCreate')}}" class="btn btn-block btn-secondary mb-5">добавить инфо</a>

            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Slider img</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @isset($sliders)
                    @foreach($sliders as $slider)
{{--                                            {{dd($slider)}}--}}
                        <tr>
                            <td>{{$slider->id}}</td>
                            <td><img style="width: 100px;height: 100px" src="{{asset('/storage/app/'.$slider->img)}}"
                                     alt=""></td>
                            <td>
                                <a href="{{route('sliderEdit',$slider->id)}}" class="btn btn-block btn-warning btn-sm mb-3">Edit</a>
                                <form action="{{ route("sliderDelete",$slider->id) }}" method="post">
{{--                                    @method("DELETE")--}}
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
