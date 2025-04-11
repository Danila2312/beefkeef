@extends('layouts.app')

@section('title',('Каталог'))

@section('content')
    <section class="filters bg-cream py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <select class="form-select">
                        <option>Все категории</option>
                        <option>Говядина</option>
                        <option>Свинина</option>
                    </select>
                </div>
                <div class="col-md-4 mb-2">
                    <select class="form-select">
                        <option>Сначала дешевые</option>
                        <option>Сначала дорогие</option>
                    </select>
                </div>
                <div class="col-md-4 mb-2">
                    <input type="text" class="form-control" placeholder="Поиск...">
                </div>
            </div>
        </div>
    </section>

    <!-- Сетка товаров -->
    <section class="products py-4">
        <div class="container">
            <div class="row">
                <!-- Товар 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="images/beef.jpg" class="card-img-top" alt="Говядина">
                        <div class="card-body">
                            <h5 class="card-title">Говядина вырезка</h5>
                            <p class="card-text">850 ₽/кг</p>
                            <button class="btn btn-light-brown">В корзину</button>
                        </div>
                    </div>
                </div>
                <!-- Товар 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="images/pork.jpg" class="card-img-top" alt="Свинина">
                        <div class="card-body">
                            <h5 class="card-title">Свиная шея</h5>
                            <p class="card-text">600 ₽/кг</p>
                            <button class="btn btn-light-brown">В корзину</button>
                        </div>
                    </div>
                </div>
                <!-- Еще товары... -->
            </div>
        </div>
    </section>
@endsection
