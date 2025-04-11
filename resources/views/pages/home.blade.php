@extends('layouts.app')

@section('title', 'Главная')

@section('content')

    <section class="loyalty bg-cream py-4">
        <div class="container">
            <h3>Ваши бонусы</h3>
            <div class="progress mb-2">
                <div class="progress-bar bg-brown" style="width: 50%;">50%</div>
            </div>
            <p>Еще 500 ₽ до следующего уровня!</p>
            <a href="loyalty.html" class="btn btn-brown">Подробнее</a>
        </div>
    </section>

    <section class="banner bg-cream py-4">
        <div class="container text-center">
            <h2>Скидка 10% новым клиентам!</h2>
            <p>Используйте промокод <strong>MEAT10</strong></p>
        </div>
    </section>

    <!-- Категории -->
    <section class="categories py-4">
        <div class="container">
            <h3 class="mb-3">Категории</h3>
            <div class="d-flex overflow-auto">
                <a href="catalog.html?category=beef" class="btn btn-light-brown me-2">Говядина</a>
                <a href="catalog.html?category=pork" class="btn btn-light-brown me-2">Свинина</a>
                <a href="catalog.html?category=poultry" class="btn btn-light-brown me-2">Птица</a>
                <a href="catalog.html?category=meals" class="btn btn-light-brown">Готовые блюда</a>
            </div>
        </div>
    </section>

    <!-- Популярные товары -->
    <section class="products py-4">
        <div class="container">
            <h3 class="mb-3">Популярные товары</h3>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/beef.jpg" class="card-img-top" alt="Говядина">
                        <div class="card-body">
                            <h5 class="card-title">Говядина премиум</h5>
                            <p class="card-text">800 ₽/кг</p>
                            <button class="btn btn-light-brown">В корзину</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/beef.jpg" class="card-img-top" alt="Говядина">
                        <div class="card-body">
                            <h5 class="card-title">Говядина премиум</h5>
                            <p class="card-text">800 ₽/кг</p>
                            <button class="btn btn-light-brown">В корзину</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/beef.jpg" class="card-img-top" alt="Говядина">
                        <div class="card-body">
                            <h5 class="card-title">Говядина премиум</h5>
                            <p class="card-text">800 ₽/кг</p>
                            <button class="btn btn-light-brown">В корзину</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/beef.jpg" class="card-img-top" alt="Говядина">
                        <div class="card-body">
                            <h5 class="card-title">Говядина премиум</h5>
                            <p class="card-text">800 ₽/кг</p>
                            <button class="btn btn-light-brown">В корзину</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/beef.jpg" class="card-img-top" alt="Говядина">
                        <div class="card-body">
                            <h5 class="card-title">Говядина премиум</h5>
                            <p class="card-text">800 ₽/кг</p>
                            <button class="btn btn-light-brown">В корзину</button>
                        </div>
                    </div>
                </div>
                <!-- Еще товары... -->
            </div>
        </div>
    </section>

@endsection
