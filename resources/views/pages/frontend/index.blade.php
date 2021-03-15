@extends('layouts.frontend-layout')
@section('page_title')
    {{ "Home | "}}{{ config('app.name')}}
@endsection
@section('content')

<div class="wrapper">
    <section class="secBanner">
        <div class="decision-img">
            <div class="dec-img3">
                <img src="{{asset('assets/img/img-3.jpg')}}">
            </div>
            <div class="row secTopBanner">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="decision">
                        <h2>my <strong>BEST</strong> decision !</h2>
                        <h4>Since joining ece teacher, I work less and get paid more!</h4>
                        <p>I set the times, day and
                            locations of where I
                            want to work, and I am
                            now getting paid $33
                            per hour plus holiday
                            pay. Being a new mum
                            that is studying I no
                            longer have the added
                            stress of having to be
                            at work Monday to
                            Friday.
                        </p>
                        <div class="registerBtnBox">
                            <button class="Register-button mt-4" type="btn">Register Now</button>
                        </div>
                    </div>
                </div>     
                <div class="col-xl-5 col-lg-5 col-md-12 text-center">
                    <img src="{{asset('assets/img/contactImg.png')}}" class="img-fluid" />
                </div>
            </div>
            <div class="row  register-now">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 text-center">
                    <div class="text">
                        <p>more freedom, time and money</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <div class="hr">
            <hr>
        </div>
    <section>
        <div class="row profile-image1">
            <div class="col-lg-3 col-md-6">
                <div class="profile">
                    <img src="{{asset('assets/img/profile2.jpg')}}">
                    <a href="#" type="button"  data-toggle="modal" data-target="#exampleModalCenter">Click Here</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="profile">
                    <img src="{{asset('assets/img/profile2.jpg')}}">
                    <a href="#" type="button"  data-toggle="modal" data-target="#exampleModalCenter">Click Here</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="profile">
                    <img src="{{asset('assets/img/profile1.jpg')}}">
                    <a href="#" type="button"  data-toggle="modal" data-target="#exampleModalCenter">Click Here</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="profile">
                    <img src="{{asset('assets/img/profile2.jpg')}}">
                    <a href="#" type="button"  data-toggle="modal" data-target="#exampleModalCenter">Click Here</a>
                </div>
            </div>
            <div class="more-profile">
                <a href="#">See more profiles</a>
            </div>
        </div>
        <div class="row profile-image2">
            <div class="col-lg-3 col-md-6">
                <div class="profile">
                    <img src="{{asset('assets/img/profile2.jpg')}}">
                    <a href="#" type="button"  data-toggle="modal" data-target="#exampleModalCenter">Click Here</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="profile">
                    <img src="{{asset('assets/img/profile1.jpg')}}">
                    <a href="#" type="button"  data-toggle="modal" data-target="#exampleModalCenter">Click Here</a>
                </div>
            </div>
            <div class="hr">
                <hr>
            </div>
        </div>       
    </section>
    <section>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="paid ad">
                    <a href="#">Paid Ad</a>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection