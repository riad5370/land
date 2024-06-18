@extends('frontend.include.master')
@section('body')
<!--This is a comment. marquee tag-->
<div style="background-color: #f8f9fa; font-family: Arial, sans-serif; margin: 0; padding: 18px 0;">
    <div class="container" style="margin-top: 80px;">
        <div class="header" style="background-color: #004080; color: #fff; padding: 10px; text-align: center; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <marquee behavior="scroll" direction="left">
                <h5 style="margin: 0; font-size: 1.5rem;">Welcome to Checkout Page. এছাড়াও আপনার পছন্দ মতো কোনো কাস্টম ওয়েবসাইট বানাতে আমাদের সাথে যোগাযোগ করুন ।</h5>
            </marquee>
        </div>
    </div>
</div>
<!--This is a end comment. marquee tag-->

<!--start breadcamp-->
<div class="bg-light" style="font-family: Arial, sans-serif;">
    <div class="container ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light p-3 rounded">
                <li class="breadcrumb-item"><a href="{{url('/')}}" class="text-primary text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcamp-->

<!--start billing details-->
<section class="my-4">
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-md-8 col-12 mb-3 mt-2">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('order.confirm')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="first-name" class="form-label">Name</label>
                                        <input type="text" name="name" id="first-name" class="form-control" value="{{old('name')}}" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="last-name" class="form-label">Email</label>
                                        <input type="email" value="{{old('email')}}" name="email" id="last-name" class="form-control" placeholder="Enter your Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" name="phone" class="form-label">Phone</label>
                                        <input type="number" value="{{old('phone')}}" id="phone" name="phone" class="form-control" placeholder="Enter your Mobile Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Software Code</label>
                                        <input type="text" value="e-202401" name="productCode" id="email" class="form-control" placeholder="Enter your Product Code">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Address</label>
                                <textarea id="message" name="address" class="form-control" rows="4" placeholder="Enter your Address">{{old('address')}}</textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end billing details-->

<!--start marquee tag-->
<div style="background-color: #f8f9fa; font-family: Arial, sans-serif; margin: 0; padding: 0;">
    <div class="container" style="margin-top: 60px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-lg rounded">
                    <div class="card-body text-center py-5">
                        <marquee behavior="scroll" direction="left">
                            <h2 class="card-title text-primary mb-0" style="font-size: 2.5rem;">1.E-commerce Website  2.Pos software  3.Inventory software  3.Company Website  4.Personal Website  5.Blog website  6.News Portal  7.protfolio website and #App Development </h2>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end marquee tag-->
@endsection