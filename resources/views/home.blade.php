@extends('layouts.app')
@section('content')
    <!-- HOME -->
    <section id="home">
        <div class="row">
            <div class="owl-carousel owl-theme home-slider">
                <div class="item item-first">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>Mudah dan Nyaman</h1>
                                <h3>Kemudahan dan kenyamanan perjalanan Anda dengan layanan Rental Mobil terpercaya.</h3>
                                <a href="{{ route('cars.index') }}" class="section-btn btn btn-default">Lihat lebih banyak mobil</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-second">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>Terlengkap sesuai kebutuhan</h1>
                                <h3>Temukan mobil yang tepat untuk kebutuhan Anda dengan pilihan armada terlengkap.</h3>
                                <a href="{{ route('cars.index') }}" class="section-btn btn btn-default">Lihat lebih banyak mobil</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-third">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>Harga Kompetitif dan Layanan Professional</h1>
                                <h3>Menyewa mobil dengan harga kompetitif dan layanan profesional untuk pengalaman perjalanan yang tak terlupakan.</h3>
                                <a href="{{ route('cars.index') }}" class="section-btn btn btn-default">Lihat lebih banyak mobil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="text-center">
                            <h2>Tentang Kami</h2>

                            <br>

                            <p class="lead">Rental Mobil adalah solusi terbaik bagi Anda yang membutuhkan kendaraan untuk keperluan perjalanan atau aktivitas sehari-hari. Dengan layanan Rental Mobil, Anda dapat menyewa mobil sesuai kebutuhan dan dengan berbagai pilihan model dan ukuran yang tersedia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title text-center">
                            <h2>Mobil yang sering disewa <small>karena mobil ini paling nyaman</small></h2>
                        </div>
                    </div>

                    @foreach ($cars as $car)
                        <div class="col-md-4 col-sm-4">
                            <div class="courses-thumb courses-thumb-secondary">
                                <div class="courses-top">
                                    <div class="courses-image">
                                        <img src="@if ($car->photo) {{ asset('storage/' . $car->photo) }}
                                    @else
                                    {{ asset('images/product-1-720x480.jpg') }} @endif "
                                            class="img-responsive" alt="">
                                    </div>
                                    <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> {{ $car->seats }}</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> {{ $car->luggages }}</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> {{ $car->doors }}</span>
                                        <span title="transmission"><i class="fa fa-cog"></i>
                                            {{ str($car->transmission)->substr(0, 1)->upper() }}</span>
                                    </div>
                                </div>

                                <div class="courses-detail">
                                    <h3><a href="{{ route('cars.index') }}">{{ str($car->size)->ucfirst() }}:
                                            {{ str($car->name)->ucfirst() }}</a></h3>
                                    <p class="lead"><small>from</small>
                                        <strong>{{ money($car->tariff, 'IDR', true) }}</strong> <small>per
                                            day</small>
                                    </p>
                                    <div x-data="{ expand: false }">
                                        <template x-if="!expand">
                                            <p class="m-0">{{ str($car->description)->limit(56) }} <a class="btn-link"
                                                    style="cursor: pointer;" @click="expand = true">Read
                                                    more</a></p>
                                        </template>
                                        <template x-if="expand">
                                            <p class="m-0">{{ $car->description }} <a @click="expand = false"
                                                    style="cursor: pointer;" class="btn-link">Read
                                                    less</a></p>
                                        </template>
                                        </a>
                                    </div>
                                </div>

                                <div class="courses-info">
                                    <button type="button" data-toggle="modal" data-target=".bs-example-modal"
                                        class="section-btn btn btn-primary btn-block"
                                        @click="slug = '{{ $car->slug }}';car = {{ $car }}">Book Now</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
