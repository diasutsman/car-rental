@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="text-center">
                <h1>Offers</h1>

                <br>

                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, alias.</p>
            </div>
        </div>
    </section>

    <section class="section-background">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="images/offer-1-720x480.jpg" class="img-responsive" alt="">
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="{{ route('fleet') }}">Lorem ipsum dolor sit amet.</a></h3>
                            <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="images/offer-2-720x480.jpg" class="img-responsive" alt="">
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="{{ route('fleet') }}">Animi eligendi minus</a></h3>
                            <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="images/offer-3-720x480.jpg" class="img-responsive" alt="">
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="{{ route('fleet') }}">Rerum accusantium </a></h3>
                            <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="images/offer-4-720x480.jpg" class="img-responsive" alt="">
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="{{ route('fleet') }}">Deleniti magni cupiditate</a></h3>
                            <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="images/offer-5-720x480.jpg" class="img-responsive" alt="">
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="{{ route('fleet') }}">Voluptate officiis nesit</a></h3>
                            <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img src="images/offer-6-720x480.jpg" class="img-responsive" alt="">
                            </div>
                        </div>

                        <div class="courses-detail">
                            <h3><a href="{{ route('fleet') }}">Lorem ipsum dolor sit amet.</a></h3>
                            <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
