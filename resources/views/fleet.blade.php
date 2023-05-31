@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="text-center">
                <h1>Fleet</h1>

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
                                <h3><a href="{{ route('fleet') }}">{{ str($car->size)->ucfirst() }}: {{ str($car->name)->ucfirst()  }}</a></h3>
                                <p class="lead"><small>from</small> <strong>{{ $car->tariff }}</strong> <small>per
                                        day</small></p>
                                <p>{{ str($car->description)->limit(56) }}</p>
                            </div>

                            <div class="courses-info">
                                <button type="button" data-toggle="modal" data-target=".bs-example-modal"
                                    class="section-btn btn btn-primary btn-block">Book Now</button>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="images/product-2-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="courses-date">
                                <span title="passegengers"><i class="fa fa-user"></i> 5</span>
                                <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                <span title="transmission"><i class="fa fa-cog"></i> A</span>
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="{{ route('fleet') }}">Large: Station wagon</a></h3>
                            <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>

                        <div class="courses-info">
                            <button type="button" data-toggle="modal" data-target=".bs-example-modal"
                                class="section-btn btn btn-primary btn-block">Book Now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="images/product-3-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="courses-date">
                                <span title="passegengers"><i class="fa fa-user"></i> 5</span>
                                <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                <span title="transmission"><i class="fa fa-cog"></i> A</span>
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="{{ route('fleet') }}">Medium: Low emission</a></h3>
                            <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>

                        <div class="courses-info">
                            <button type="button" data-toggle="modal" data-target=".bs-example-modal"
                                class="section-btn btn btn-primary btn-block">Book Now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="images/product-4-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="courses-date">
                                <span title="passegengers"><i class="fa fa-user"></i> 4</span>
                                <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                <span title="transmission"><i class="fa fa-cog"></i> A</span>
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="{{ route('fleet') }}">Small: Economy</a></h3>
                            <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>

                        <div class="courses-info">
                            <button type="button" data-toggle="modal" data-target=".bs-example-modal"
                                class="section-btn btn btn-primary btn-block">Book Now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="images/product-5-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="courses-date">
                                <span title="passegengers"><i class="fa fa-user"></i> 2</span>
                                <span title="luggages"><i class="fa fa-briefcase"></i> 2</span>
                                <span title="doors"><i class="fa fa-sign-out"></i> 2</span>
                                <span title="transmission"><i class="fa fa-cog"></i> M</span>
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="{{ route('fleet') }}">Small: Mini</a></h3>
                            <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>

                        <div class="courses-info">
                            <button type="button" data-toggle="modal" data-target=".bs-example-modal"
                                class="section-btn btn btn-primary btn-block">Book Now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="images/product-6-720x480.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="courses-date">
                                <span title="passegengers"><i class="fa fa-user"></i> 5</span>
                                <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                <span title="transmission"><i class="fa fa-cog"></i> A</span>
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="{{ route('fleet') }}">Large: Premium</a></h3>
                            <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>

                        <div class="courses-info">
                            <button type="button" data-toggle="modal" data-target=".bs-example-modal"
                                class="section-btn btn btn-primary btn-block">Book Now</button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Book Now</h4>
                </div>

                <div class="modal-body">
                    <form action="#" id="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Pick-up location" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Return location" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Pick-up date/time" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Return date/time" required>
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter full name" required>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Enter email address" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Enter phone" required>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="section-btn btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
    </div>
@endsection
