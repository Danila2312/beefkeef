@extends('layouts.app')

@section('title', 'Профиль')

@section('content')
    <section class="profile py-4">
        <div class="container">
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="text-center">Иван Петров</h3>
                    <p class="text-center text-muted">+7 (900) 123-45-67</p>
                </div>
            </div>

            <!-- Бонусы -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4>Бонусы</h4>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-brown" style="width: 30%;">30%</div>
                    </div>
                    <p>У вас 150 баллов (15% скидка)</p>
                </div>
            </div>

            <!-- История заказов -->
            <div class="card">
                <div class="card-body">
                    <h4>История заказов</h4>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Заказ #123 (1.5 кг говядины)</span>
                            <span class="text-brown">1 275 ₽</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Заказ #123 (1.5 кг говядины)</span>
                            <span class="text-brown">1 275 ₽</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Заказ #123 (1.5 кг говядины)</span>
                            <span class="text-brown">1 275 ₽</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Заказ #123 (1.5 кг говядины)</span>
                            <span class="text-brown">1 275 ₽</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Заказ #123 (1.5 кг говядины)</span>
                            <span class="text-brown">1 275 ₽</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Заказ #123 (1.5 кг говядины)</span>
                            <span class="text-brown">1 275 ₽</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Заказ #123 (1.5 кг говядины)</span>
                            <span class="text-brown">1 275 ₽</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Заказ #123 (1.5 кг говядины)</span>
                            <span class="text-brown">1 275 ₽</span>
                        </li>

                        <!-- Еще заказы... -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
