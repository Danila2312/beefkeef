@extends('layouts.app')

@section('title','Корзина')

@section('content')
    <div>
        <!-- Список товаров -->
        <section class="cart-items py-4">
            <div class="ms-3 mb-3">
                <h2>
                    ИТОГО:
                </h2>
            </div>
            <div class="container">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>Говядина вырезка</h5>
                                <p>850 ₽/кг × 1.5 кг</p>
                            </div>
                            <div class="text-end">
                                <p class="fw-bold">1 275 ₽</p>
                                <button class="btn btn-sm btn-outline-dark">✕</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>Говядина вырезка</h5>
                                <p>850 ₽/кг × 1.5 кг</p>
                            </div>
                            <div class="text-end">
                                <p class="fw-bold">1 275 ₽</p>
                                <button class="btn btn-sm btn-outline-dark">✕</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>Говядина вырезка</h5>
                                <p>850 ₽/кг × 1.5 кг</p>
                            </div>
                            <div class="text-end">
                                <p class="fw-bold">1 275 ₽</p>
                                <button class="btn btn-sm btn-outline-dark">✕</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>Говядина вырезка</h5>
                                <p>850 ₽/кг × 1.5 кг</p>
                            </div>
                            <div class="text-end">
                                <p class="fw-bold">1 275 ₽</p>
                                <button class="btn btn-sm btn-outline-dark">✕</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>Говядина вырезка</h5>
                                <p>850 ₽/кг × 1.5 кг</p>
                            </div>
                            <div class="text-end">
                                <p class="fw-bold">1 275 ₽</p>
                                <button class="btn btn-sm btn-outline-dark">✕</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>Говядина вырезка</h5>
                                <p>850 ₽/кг × 1.5 кг</p>
                            </div>
                            <div class="text-end">
                                <p class="fw-bold">1 275 ₽</p>
                                <button class="btn btn-sm btn-outline-dark">✕</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Еще товары... -->
            </div>
        </section>

        <!-- Итого -->
        <section class="total bg-cream py-4 border">
            <div class="container ">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="m-0">Итого: 2 150 ₽</h4>
                    <a href="" class="btn btn-light-brown">Оформить</a>
                </div>
            </div>
        </section>
    </div>

@endsection
