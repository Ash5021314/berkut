@extends('layouts.admin_layout')
@section('title','Услуги ЧОП')

@section('content')

    <section class="content">
        <div class="container-fluid">
{{--            <a href="{{route('home.create')}}" class="btn btn-block btn-secondary mb-5">добавить инфо</a>--}}

            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phones</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>{{$contact[0]->id}}</td>
                            <td>{{$contact[0]->email}}</td>
                            <td>{{$contact[0]->address}}</td>
                            <td>{{$contact[0]->phones}}</td>
                            <td>
                                <a href="{{route('contact.edit',$contact[0]->id)}}" class="btn btn-block btn-warning btn-sm mb-3">Edit</a>
                                <form action="{{ route("contact.destroy",$contact[0]->id) }}" method="post">
                                    @method("DELETE")
                                    @csrf
                                    <input value="DELETE" class="btn btn-danger btn-sm w-100" type="submit">
                                </form>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
