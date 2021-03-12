@extends('layouts.admin-layout')
@section('page_title')
    {{ "Home page | "}}{{ config('app.name')}}
@endsection
@section('content')

<div class="wrapper mb60">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                 
                <div class="row">
                    <div class="col-md-4 dashbox">
                        <div class="card text-white bg-das1">
                            <div class="card-body">
                                <blockquote class="card-bodyquote mb-0 w100p">
                                     <a href="">
                                    <div class="dashicon">
                                        <i class="mdi mdi-account"></i>
                                    </div>
                                    <p class="dashnum">10</p>
                                    <p class="dashtext">New Contact Request</P>
                                     </a>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 dashbox">
                        <div class="card text-white bg-das2">
                            <div class="card-body">
                                <blockquote class="card-bodyquote mb-0 w100p">
                                    <a href="">
                                    <div class="dashicon">
                                        <i class="mdi mdi-account-check"></i>
                                    </div>
                                    <p class="dashnum">10</p>
                                    <p class="dashtext">Number of FAQs</P>
                                    </a>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 dashbox">
                        <div class="card text-white bg-das3">
                            <div class="card-body">
                                <blockquote class="card-bodyquote mb-0 w100p">
                                    <a href="">
                                    <div class="dashicon">
                                        <i class="mdi mdi-account-off"></i>
                                    </div>
                                    <p class="dashnum">10</p>
                                    <p class="dashtext">Lorem Ipsum</P>
                                    </a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 dashbox">
                        <div class="card text-white bg-das4">
                            <div class="card-body">
                                <blockquote class="card-bodyquote mb-0 w100p">
                                    <a href="">
                                    <div class="dashicon">
                                        <i class="mdi mdi-account-group"></i>
                                    </div>
                                    <p class="dashnum">10</p>
                                    <p class="dashtext">Lorem Ipsum</P>
                                     </a>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 dashbox">
                        <div class="card text-white bg-das5">
                            <div class="card-body">
                                <blockquote class="card-bodyquote mb-0 w100p">
                                    <a href="">
                                    <div class="dashicon">
                                        <i class="mdi mdi-account-multiple-plus"></i>
                                    </div>
                                    <p class="dashnum">10</p>
                                    <p class="dashtext">Lorem Ipsum</P>
                                     </a>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 dashbox">
                        <div class="card text-white bg-das6">
                            <div class="card-body">
                                <blockquote class="card-bodyquote mb-0 w100p">
                                     <a href="">
                                    <div class="dashicon">
                                        <i class="mdi mdi-account-star"></i>
                                    </div>
                                    <p class="dashnum">10</p>
                                    <p class="dashtext">Lorem Ipsum</P>
                                     </a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-pink">
                                    <i class="mdi mdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- end wrapper -->

@endsection