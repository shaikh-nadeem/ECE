@extends('layouts.frontend-layout')
@section('page_title')
    {{ "FAQ | "}}{{ config('app.name')}}
@endsection
@section('content')

<div class="wrapper">
    <section class="secFaqs">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 contactLeft text-center align-self-end">
                <img src="{{ asset('assets/img/contactImg.jpg')}}" class="img-fluid">
                <div class="imgText">
                    <p>I am confident ECE Teacher will exceed your expectations</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 faqRight">
                <ul class="nav nav-pills navFaq" id="tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#for-educators">For Educators</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#for-providers">For Providers</a>
                    </li>
                </ul>
                <div class="tab-content faqContent" id="tabs">
                    <div class="tab-pane fade show active" id="for-educators" role="tabpanel" aria-labelledby="home-tab">
                        <div id="accordion"> 
                            @php
                            $i = 1;
                            @endphp
                            @if(count($educators) > 0 )
                            @foreach($educators as $educator)
                            <div class="card">
                              <div class="card-header" id="heading_{{$i}}">
                                <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_{{$i}}" aria-expanded="false" aria-controls="collapse_{{$i}}">
                                    {{$educator->title}}
                                    <img src="{{asset('assets/img/selectArrow.svg')}}">
                                  </button>
                                </h5>
                              </div>
                              <div id="collapse_{{$i}}" class="collapse" aria-labelledby="heading_{{$i}}" data-parent="#accordion">
                                <div class="card-body">{{$educator->content}}</div>
                              </div>
                            </div>
                            @php
                            $i++;
                            @endphp
                            @endforeach
                            @else
                            <div class="data">
                                <div class="error-img">
                                     <img src="{{asset('assets/img/error.svg')}}">
                                    <p>no data found !</p>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="tab-pane fade" id="for-providers" role="tabpanel" aria-labelledby="home-tab">
                        <div id="accordion2">
                            @php
                            $j = 1;
                            @endphp
                            @if(count($providers) > 0 )
                            @foreach($providers as $provider)
                            <div class="card">
                              <div class="card-header" id="headings_{{$j}}">
                                <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapses_{{$j}}" aria-expanded="false" aria-controls="collapses_{{$j}}">
                                    {{$provider->title}}
                                    <img src="{{asset('assets/img/selectArrow.svg')}}">
                                  </button>
                                </h5>
                              </div>
                              <div id="collapses_{{$j}}" class="collapse" aria-labelledby="headings_{{$j}}" data-parent="#accordion2">
                                <div class="card-body">{{$provider->content}}</div>
                              </div>
                            </div>
                            @php
                            $j++;
                            @endphp
                            @endforeach
                            @else
                            <div class="data">
                                <div class="error-img">
                                     <img src="{{asset('assets/img/error.svg')}}">
                                    <p>no data found !</p>
                                </div>
                            </div>
                            @endif
                        </div>
                     </div>
                     <div class="left">
                         <a href="{{route('frontend-contact')}}">Did we miss something? Click here</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection