@extends('layouts.frontend-layout')
@section('page_title')
    {{ "Home | "}}{{ config('app.name')}}
@endsection
@section('content')

<div class="wrapper pt-0 bg-white">
    <section class="secBanner">
        <div class="dec-img3">
            <img src="{{asset('assets/img/img-3.jpg')}}" class="img-fluid">
        </div>
        <div class="secTopBanner">
            <div class="bannerContent">
                <h2>my <strong>BEST</strong> decision!</h2>
                <div class="deskContent">
                    <h4>Since joining ECE Teacher,<br> I work less and get paid more!</h4>
                    <pre>
I set the times, day and
locations of where I 
want to work, and I am 
now getting paid $33 
per hour. Being a new mum 
that is studying I no 
longer have the added 
stress of having to be 
at work Monday to 
Friday.</pre> 
                </div>                         
                <div class="registerBtnBox">
                    <a href="#" class="btnRegister">Register Now</a>
                    <h4>more freedom,<br> time and money</h4>
                </div>
            </div>
        </div>        
    </section>
    <div class="hr w-100">
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
            <div class="more-profile">
                <a href="#">See more profiles</a>
            </div>
        </div>
        <div class="hr mob-line">
            <hr>
        </div>      
    </section>
    <div class="paid ad">
        <a href="#">Paid Ad</a>
    </div>
</div>


@endsection