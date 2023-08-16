@extends('layouts.app')
@section('content')
    <div class="header-content">
    <div class="slider">
        <div class="container">
            <div class="slideshow">
                @foreach($sliders as $slider)
                <div class="slide">
                    <img src="storage/app/{{$slider->img}}"
                                        style="width: 850px"/>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
    <div class="main">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text">
                    <h1>СОЗДАНИЕ СЛУЖБЫ БЕЗОПАСНОСТИ ОРГАНИЗАЦИИ
                        ПОД КЛЮЧ </h1>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="creating-service">
                                <div class="creating-service-img">
                                    <i class="fa fa-solid fa-sitemap"></i>
                                </div>
                                <h3 class="creating-service-title">ПОСТРОЕНИЕ СТРУКТУРЫ</h3>
                                <div class="creating-service-text">Структура, штат, нормативная база и техническая
                                    (информационная) база
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="creating-service">
                                <div class="creating-service-img">
                                    <i class="fa fa-solid fa-users"></i>
                                </div>
                                <h3 class="creating-service-title">ПЕРСОНАЛ</h3>
                                <div class="creating-service-text">Подбор, подготовка проверка кадров на профпригодность
                                    и соответствие с требованиям.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="creating-service">
                                <div class="creating-service-img">
                                    <i class="fa fa-solid fa-id-card"></i>
                                </div>
                                <h3 class="creating-service-title">ПРОВЕРКА</h3>
                                <div class="creating-service-text">Тестирование персонала, аудит, проверка на
                                    полиграфе.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="creating-service">
                                <div class="creating-service-img">
                                    <i class=" fa fa-solid fa-eye"></i>
                                </div>
                                <h3 class="creating-service-title">КОНТРОЛЬ РАБОТЫ</h3>
                                <div class="creating-service-text">Независимая периодическая проверка службы
                                    безопасности, создание нештатных ситуаций.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="creating-service">
                                <div class="creating-service-img">
                                    <i class="fa fa-solid fa-compass"></i>
                                </div>
                                <h3 class="creating-service-title">СОПРОВОЖДЕНИЕ ДЕЯТЕЛЬНОСТИ</h3>
                                <div class="creating-service-text">Ведение, управление работой (консалтинг) отдела
                                    службы безопасности (старший, аутсорсинг).
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="creating-service">
                                <div class="creating-service-img">
                                    <i class="fa fa-sharp fa-solid fa-triangle-exclamation"></i>
                                </div>
                                <h3 class="creating-service-title">ПОДДЕРЖКА</h3>
                                <div class="creating-service-text">Поддержка, обеспечение стабильной работы в
                                    критических и не стабильных ситуациях.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="place-section container" id="place-section">
            <h2 class="section-title">ПРОФЕССИОНАЛЬНАЯ БЕЗОПАСНОСТЬ — ЭТО
                ЗАЩИТА ВАШЕГО БИЗНЕСА И ВАША</h2>
            @foreach($services as $service)
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="protect-img">
                        <img style="width: 546px;height: 364px" src="storage/app/{{$service->img}}" alt="">
                    </div>

                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="d-flex align-items-center h-100">
                        <div class="protect-text">
                            <h3>
                                {{$service->title}}
                            </h3>
                            <p> {{$service->desc}}</p>
                            <a href="">Подробнее об услуге</a>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </section>
    <section >
        <div class="container">
            <div class="for-clients">
                <h2>ДЛЯ ВСЕХ НАШИХ КЛИЕНТОВ
                    ЧОП ГРУППА-БЕРКУТ-М:</h2>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="for-clients-col">
                            <h3>Профессионализм во всем</h3>
                            <ul>
                                <li>Положительная практика в отрасли на протяжении 17 лет.</li>
                                <li>Профессиональная правовая защита и поддержка работы служб и работников.</li>
                                <li>Высокая квалификация всего персонала и ежегодная переаттестация.</li>
                                <li>Использование современных и передовых технологий, оборудования, моделей организации работы служб безопасности</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="for-clients-col">
                            <h3>Гарантии безопасности</h3>
                            <ul>
                                <li>Правовая поддержка</li>
                                <li>Безопасность предпринимателя</li>
                                <li>Страхование рисков</li>
                                <li>Двойная проверка персонала</li>
                                <li>Постоянный аудит СБ</li>
                                <li>Контроль показателей на опережение</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection
