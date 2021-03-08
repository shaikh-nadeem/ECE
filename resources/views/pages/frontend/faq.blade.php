@extends('layouts.frontend-layout')
@section('page_title')
    {{ "Home page | "}}{{ config('app.name')}}
@endsection
@section('content')


<div class="wrapper">
    <section class="secContact">
        <div class="row">
            <div class="col-lg-6 col-md-12 faqLeft">
                <div class="imgText">
                    <p>I am confident ECE Teacher will exceed your expectations</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 faqRight">
                <ul class="nav nav-pills navFaq" role="tablist">
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
                                  <button class="btn btn-link <?php if($i != 1){ echo 'collapsed'; }?>" data-toggle="collapse" data-target="#collapse_{{$i}}" aria-expanded="<?php if($i == 1){ echo 'true'; }else{echo 'false';}?>" aria-controls="collapse_{{$i}}">
                                    {{$educator->title}}
                                    <img src="{{asset('assets/img/selectArrow.svg')}}">
                                  </button>
                                </h5>
                              </div>
                              <div id="collapse_{{$i}}" class="collapse <?php if($i == 1){ echo 'show'; }?>" aria-labelledby="heading_{{$i}}" data-parent="#accordion">
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
                     <div id="accordion">
                       <div id="accordion">
                            @php
                            $j = 1;
                            @endphp
                            @if(count($providers) > 0 )
                            @foreach($providers as $provider)
                            <div class="card">
                              <div class="card-header" id="heading_{{$j}}">
                                <h5 class="mb-0">
                                  <button class="btn btn-link <?php if($j != 1){ echo 'collapsed'; }?>" data-toggle="collapse" data-target="#collapse_{{$j}}" aria-expanded="<?php if($j == 1){ echo 'true'; }else{echo 'false';}?>" aria-controls="collapse_{{$j}}">
                                    {{$provider->title}}
                                    <img src="{{asset('assets/img/selectArrow.svg')}}">
                                  </button>
                                </h5>
                              </div>
                              <div id="collapse_{{$j}}" class="collapse <?php if($j == 1){ echo 'show'; }?>" aria-labelledby="heading_{{$j}}" data-parent="#accordion">
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
                 </div>

                </div>
                <div class="left">
                <p>Did we miss something??</p>
                <a href="{{route('frontend-contact')}}">click here</a>
                </div>
                    </div>
                </div>
               
        </section>
</div>

@endsection