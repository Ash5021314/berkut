@extends('layouts.app')
@section('content')
    <div class="main">
        <div class="container">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            <div class="contact-cont">
                <div class="contact-map">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7c1ed56cf8ece084032b8b3855e5851dc3bcc75225989941b7d6edcd50032d6f&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="contact-left">

                            <h2>Контакты ГРУППА-БЕРКУТ-М</h2>
                            <p><span>ООО ЧОП «ГРУППА-БЕРКУТ-М»</span></p>
                            <p><span>E-Mail:</span> {{$contact[0]->email}}</p>
                            <p><span>Адрес</span>  {{$contact[0]->address}}</p>
                            <p><span>Телефон:</span> {{$contact[0]->phones}}</p>
                            <h3>
                                Интеллектуальная, информационная и физическая защита Вас и Вашего бизнеса
                            </h3>
                            <ul>
                                <li>Создадим структуру, штат, нормативную базу и техническую (информационную) базу Вашей службы безопасности.</li>
                                <li>Подбор, подготовка, проверка кадров на профпригодность и соответствие требованиям.</li>
                                <li>Тестирование, полиграф.</li>
                                <li>Независимая периодическая проверка службы безопасности, создание нештатных ситуаций.</li>
                                <li>Ведение (консалтинг) отдела службы безопасности (руководство).</li>
                                <li>Поддержка в критических и не стабильных ситуациях.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-right">
                            <h3>Всегда На Связи
                            </h3>

                            <form action="{{route('send-mail')}}" method="POST">
                                @csrf
                                <div class="input-form">
                                    <label>
                                        <p>Ваше Имя</p>
                                        <input type="text" name="name" >
                                    </label>
                                    <label>
                                        <p>E-Mail <abbr>*</abbr></p>
                                        <input type="email" name="email" >
                                    </label>
                                </div>
                                <div class="input-form">
                                    <label>
                                        <p>Ваш номер телефона <abbr>*</abbr></p>
                                        <input type="text" name="tel" >
                                    </label>
                                    <label>
                                        <p>Тема</p>
                                        <input type="text" name="title" >
                                    </label>
                                </div>
                                <div class="input-form">
                                    <label class="w-100">
                                        <p>Сообщение</p>
                                        <textarea name="message" id="" cols="30" rows="10" ></textarea>
                                    </label>
                                </div>
                                <input type="submit" value="Отправить">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
