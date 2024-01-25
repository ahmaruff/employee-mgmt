@extends('home.layouts.base')


@section('content')
<section class="section-header overflow-hidden pt-7 pt-lg-8 pb-9 pb-lg-12 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="bootstrap-big-icon d-none d-lg-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="700" height="622" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                </div>
                <h1 class="fw-bolder">Employee Management</h1>
                <h2 class="lead fw-normal text-muted mb-5">Volt - Open source dashboard powered by Bootstrap 5</h2>
                <!-- Button Modal -->
                <div class="d-flex align-items-center justify-content-center mb-5">
                    <a href="{{route('admin.dashboard')}}" class="btn btn-secondary d-inline-flex align-items-center me-4">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11 4a1 1 0 10-2 0v4a1 1 0 102 0V7zm-3 1a1 1 0 10-2 0v3a1 1 0 102 0V8zM8 9a1 1 0 00-2 0v2a1 1 0 102 0V9z" clip-rule="evenodd"></path></svg>
                        Admin Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
    <figure class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n2"><svg class="home-pattern" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4"><path d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path></svg></figure>
</section>
<section class="section section-sm">
    <div class="container">
        <div class="row justify-content-center my-5 my-lg-6">
            <div class="col-12 text-center">
                <h2 class="h1 px-lg-5">Lorem Ipsum</h2>
                <p class="lead px-lg-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel sed sint odit amet impedit. Sed, quasi voluptatibus quo facere, maxime minus voluptatum deleniti hic voluptas esse quam ipsum facilis natus!</p>
            </div>
        </div>
    </div>
</section>
@endsection
