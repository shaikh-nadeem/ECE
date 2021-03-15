@extends('layouts.loginLayout')

@section('content')

<div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="" class="log-logo">
                    <img src="{{asset('assets/img/logo.png')}}">
                </a>
            </div>
            <div class="m-t-20 card-box log-body">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold mb-0">{{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</h4>
                </div>
                <div class="p-20">
                    @isset($url)
                    <form class="form-horizontal m-t-20" id="loginForm" method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                    @else
                    <form class="form-horizontal m-t-20" id="loginForm" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @endisset
                    @csrf

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="email" class="form-control" name="email" id="email" autocomplete="off" placeholder="Email">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="password" class="form-control" name="password" id="password" autocomplete="off"  placeholder="Password">

                            </div>
                        </div>

                        <div class="form-group keyfield" style="display:none">
                            <div class="col-xs-12">
                                <input id="secret_key" type="hidden" class="form-control" name="secret_key"  placeholder="Secret Key" disabled="">
                            </div>
                        </div>
<!--                        <div class="form-group">
                            <label for="mathgroup">Please solve the following math function: {{ app('mathcaptcha')->label() }}</label>
                            {!! app('mathcaptcha')->input(['class' => 'form-control', 'id' => 'mathgroup']) !!}
                            @if ($errors->has('mathcaptcha'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mathcaptcha') }}</strong>
                                </span>
                            @endif
                        </div>-->
                    {{ app('mathcaptcha')->label() }}
{!! app('mathcaptcha')->input() !!}
                        <div class="form-group ">
<!--                            <div class="col-xs-12">
                                <div class="checkbox checkbox-custom">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember checkbox-signup">

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>-->
                            <div class="col-xs-12">
                                <div class="alert-success"></div>
                                <div class="alert-danger"></div>
                            </div>
                        </div>

                        <div class="form-group text-right m-t-30">
                            <div class="col-xs-12">
                                <div id="circulardiv" style='display:none'>
                                <div id="circularG">
                                    <div id="circularG_1" class="circularG"></div>
                                    <div id="circularG_2" class="circularG"></div>
                                    <div id="circularG_3" class="circularG"></div>
                                    <div id="circularG_4" class="circularG"></div>
                                    <div id="circularG_5" class="circularG"></div>
                                    <div id="circularG_6" class="circularG"></div>
                                    <div id="circularG_7" class="circularG"></div>
                                    <div id="circularG_8" class="circularG"></div>
                                </div>
                                </div>
                                <button type="submit" class="btn btn-custom btn-bordred btn-block waves-effect waves-light submitbtn">
                                    {{ __('Sign In') }}
                                </button>
                            </div>
                        </div>                       
                    </form>                    
         
                </div>
            </div><!-- end card-box-->
        </div>
        <!-- end wrapper page -->
@endsection

<style>
    #circulardiv {
        float: right;
        width: 17%;
    }
    #circularG{
	position:relative;
	width:58px;
	height:58px;
	margin: auto;
    }

    .circularG{
        position:absolute;
        background-color:rgb(0,0,0);
        width:14px;
        height:14px;
        border-radius:9px;
                -o-border-radius:9px;
                -ms-border-radius:9px;
                -webkit-border-radius:9px;
                -moz-border-radius:9px;
        animation-name:bounce_circularG;
                -o-animation-name:bounce_circularG;
                -ms-animation-name:bounce_circularG;
                -webkit-animation-name:bounce_circularG;
                -moz-animation-name:bounce_circularG;
        animation-duration:1.1s;
                -o-animation-duration:1.1s;
                -ms-animation-duration:1.1s;
                -webkit-animation-duration:1.1s;
                -moz-animation-duration:1.1s;
        animation-iteration-count:infinite;
                -o-animation-iteration-count:infinite;
                -ms-animation-iteration-count:infinite;
                -webkit-animation-iteration-count:infinite;
                -moz-animation-iteration-count:infinite;
        animation-direction:normal;
                -o-animation-direction:normal;
                -ms-animation-direction:normal;
                -webkit-animation-direction:normal;
                -moz-animation-direction:normal;
    }

    #circularG_1{
        left:0;
        top:23px;
        animation-delay:0.41s;
                -o-animation-delay:0.41s;
                -ms-animation-delay:0.41s;
                -webkit-animation-delay:0.41s;
                -moz-animation-delay:0.41s;
    }

    #circularG_2{
        left:6px;
        top:6px;
        animation-delay:0.55s;
                -o-animation-delay:0.55s;
                -ms-animation-delay:0.55s;
                -webkit-animation-delay:0.55s;
                -moz-animation-delay:0.55s;
    }

    #circularG_3{
        top:0;
        left:23px;
        animation-delay:0.69s;
                -o-animation-delay:0.69s;
                -ms-animation-delay:0.69s;
                -webkit-animation-delay:0.69s;
                -moz-animation-delay:0.69s;
    }

    #circularG_4{
        right:6px;
        top:6px;
        animation-delay:0.83s;
                -o-animation-delay:0.83s;
                -ms-animation-delay:0.83s;
                -webkit-animation-delay:0.83s;
                -moz-animation-delay:0.83s;
    }

    #circularG_5{
        right:0;
        top:23px;
        animation-delay:0.97s;
                -o-animation-delay:0.97s;
                -ms-animation-delay:0.97s;
                -webkit-animation-delay:0.97s;
                -moz-animation-delay:0.97s;
    }

    #circularG_6{
        right:6px;
        bottom:6px;
        animation-delay:1.1s;
                -o-animation-delay:1.1s;
                -ms-animation-delay:1.1s;
                -webkit-animation-delay:1.1s;
                -moz-animation-delay:1.1s;
    }

    #circularG_7{
        left:23px;
        bottom:0;
        animation-delay:1.24s;
                -o-animation-delay:1.24s;
                -ms-animation-delay:1.24s;
                -webkit-animation-delay:1.24s;
                -moz-animation-delay:1.24s;
    }

    #circularG_8{
        left:6px;
        bottom:6px;
        animation-delay:1.38s;
                -o-animation-delay:1.38s;
                -ms-animation-delay:1.38s;
                -webkit-animation-delay:1.38s;
                -moz-animation-delay:1.38s;
    }



    @keyframes bounce_circularG{
        0%{
                transform:scale(1);
        }

        100%{
                transform:scale(.3);
        }
    }

    @-o-keyframes bounce_circularG{
        0%{
                -o-transform:scale(1);
        }

        100%{
                -o-transform:scale(.3);
        }
    }

    @-ms-keyframes bounce_circularG{
        0%{
                -ms-transform:scale(1);
        }

        100%{
                -ms-transform:scale(.3);
        }
    }

    @-webkit-keyframes bounce_circularG{
        0%{
                -webkit-transform:scale(1);
        }

        100%{
                -webkit-transform:scale(.3);
        }
    }

    @-moz-keyframes bounce_circularG{
        0%{
                -moz-transform:scale(1);
        }

        100%{
                -moz-transform:scale(.3);
        }
    }
</style>