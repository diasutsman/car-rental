@extends('layouts.app')

@section('content')
    <div x-data="{ slug: null, car: null }">
        <section>
            <div class="container">
                <div class="text-center">
                    <h1>Cars</h1>

                    <br>

                    <p class="lead">These are the cars that we offer to be rent.</p>
                </div>
            </div>
        </section>

        <section class="section-background">
            <div class="container">
                <div class="row">
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
                                    <p class="lead"><small>from</small> <strong>{{ $car->tariff }}</strong> <small>per
                                            day</small></p>
                                    <p>{{ str($car->description)->limit(56) }}</p>
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

        <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document" @click.outside="slug = ''">
                <div class="modal-content">
                    <div class="modal-header">
                        @auth
                            <button type="button" class="close" data-dismiss="modal" @click="slug = ''"
                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="gridSystemModalLabel">Book Now</h4>
                        @else
                            <h4 class="modal-title" id="gridSystemModalLabel">Please login</h4>
                        @endauth
                    </div>

                    <div class="modal-body">
                        <form :action="`/book/${slug}`" method="POST" id="book-form">
                            @auth
                                <div class="row">
                                    @csrf
                                    <div class="col-md-6">
                                        <input type="text" name="pickup_location" class="form-control"
                                            placeholder="Pick-up location" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" name="return_location" class="form-control"
                                            placeholder="Return location" required>
                                    </div>
                                </div>

                                <div class="row" x-data="{ pickupDate: '', returnDate: '' }">
                                    <div class="col-md-6">
                                        <input type="date" name="start_date" x-model="pickupDate"
                                            :min="new Date().toISOString().split('T')[0]" class="form-control"
                                            placeholder="Pick-up date/time" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="date" name="end_date" x-model="returnDate" :min="pickupDate"
                                            class="form-control" placeholder="Return date/time" required>
                                    </div>
                                </div>

                                <textarea name="information" class="form-control" style="resize: vertical" placeholder="Additional Information"
                                    id="information" cols="30" rows="10"></textarea>
                            @else
                                <h1 class="Please login/register to book a car">Must login first</h1>
                            @endauth
                        </form>
                    </div>

                    <div class="modal-footer">
                        @auth
                            <button type="submit" class="section-btn btn btn-primary" form="book-form">Book Now</button>
                        @else
                            <a class="section-btn btn btn-primary" href="{{ route('login') }}">Login</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
