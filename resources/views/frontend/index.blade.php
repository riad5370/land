@extends('frontend.include.master')
@section('body')

<section class="background-section">
    <div class="overlay" style="background: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        <div class="row" style="display: flex; align-items: center; justify-content: center; height: 100%;">
            <div class="col-lg-12 text-center container">
                <h2 class="text-white" style="color: white; font-size: 48px; font-family: 'Arial', sans-serif; margin-bottom: 20px;">WEBSITE DESIGN</h2>
                <h4 class="text-white" style="color: white; font-size: 24px; font-family: 'Arial', sans-serif; font-weight: 300;">AND DEVELOPMENT</h4>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-3 p-2">
                <div class="d-flex align-items-center justify-content-center" style="width: 100%; height: 100px; background: #FFD2DD;">
                    <div style="width: 90%; height: 80px; background: #FF456D; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem; font-weight: bold; text-align: center;">
                        E-commerce Solutions
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2">
                <div class="d-flex align-items-center justify-content-center" style="width: 100%; height: 100px; background: #C2E7FF;">
                    <div style="width: 90%; height: 80px; background: #3A87F4; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem; font-weight: bold; text-align: center;">
                        Custom Website
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2">
                <div class="d-flex align-items-center justify-content-center" style="width: 100%; height: 100px; background: #C2E7FF;">
                    <div style="width: 90%; height: 80px; background: #02B070; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem; font-weight: bold; text-align: center;">
                        Landing Page
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2">
                <div class="d-flex align-items-center justify-content-center" style="width: 100%; height: 100px; background: #FFEEB4;">
                    <div style="width: 90%; height: 80px; background: #FF5528; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem; font-weight: bold; text-align: center;">
                        App Development
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@php
    $totalReview = $reviews->count(); 
@endphp
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-3">
                <div class="product-gallery">
                    <div class="main-image">
                        <a href="#"><img id="mainImage" class="product-main-img" src="{{asset('frontend')}}/img/product.jpg" alt="Main product image"></a>
                    </div>
                    <div class="thumbnail-images">
                        <img class="product-thumbnail" src="{{asset('frontend')}}/img/product.jpg" alt="Product thumbnail 1" onclick="changeMainImage('{{asset('frontend')}}/img/product.jpg')">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>PHP-LARAVEL ই-কমার্স প্যকেজ READY-MADE</h3>
                    @php
                        if ($totalReview) {
                            $rating = $total_star / $totalReview;
                        }
                        $averageRating = round($totalReview ? $total_star / $totalReview : 0);
                    @endphp
                    <div class="product__details__rating">
                        <span class="text-warning">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= floor($averageRating))
                                    <i class="fa fa-star"></i>
                                @elseif ($i == ceil($averageRating) && $averageRating - floor($averageRating) > 0)
                                    <i class="fa fa-star-half-o"></i>
                                @else
                                    <i class="fa fa-star-o"></i>
                                @endif
                            @endfor
                        </span>
                        <span>({{ $totalReview }} reviews)</span>
                    </div>
                    <div class="product__details__price">$50.00</div>
                    <p>Single Vendor PHP-LARAVEL ই-কমার্স ওয়েবসাইট | বুস্টিং করে বেশি সেল জেনারেট করার জন্য  আপনার ওয়েবসাইটের যেন প্রতিদিন কয়েক হাজার ভিজিটর হ্যান্ডেল করতে কোন সমস্যা না হয় তা বিবেচনা করে এই ওয়েবসাইটটি ডেভেলপ করা।</p>
                    <a href="" class="btn btn-dark">Live Preview</a>
                    <a href="{{route('checkout')}}" class="btn btn-primary">Order Now</a>
                    </a>
                    <ul class="mt-2">
                        <li> <span>১ বছর ফ্রি সাপোর্ট।</span></li>
                        <li> <span>মানিব্যাক গ্যারান্টি(৭দিন)/ফ্রি ট্রাইল সুবিধা ।</span></li>
                        <li> <span>প্রফেশনাল ডাইনামিক ডিজাইন ।</span></li>
                        <li><span>লোডিং স্পিড- সুপার ফাস্ট ।</span></li>
                        <li><span>আপডেট টেকনোলজি </span></li>
                        <li><span>লাইভ চ্যাট</span></li>
                        <li><span>পেমেন্ট মেথড (আপনার প্রয়োজন অনুযায়ী । যেমন : SSL Commerze, stripe, bkash, nagad etc)</span></li>
                    </ul>
                </div>
            </div>
            <div style="color: #333; font-family: 'Arial', sans-serif; padding: 20px; border: 1px solid #ddd; border-radius: 4px; background-color: #f9f9f9;">
            <h5 style="margin: 0; font-size: 18px;">
                এটি আমাদের রেডি ই-কমার্স সফটওয়ার। এছাড়াও আপনার প্রয়োজন অনুযায়ী যদি কোনো ফিচার এড করতে হয় বা বাদ দিতে হয় অথবা যদি আপনি আপনার মতো করে কোনো কাস্টম ই-কমারর্স ওয়েবসাইট বানাতে চান তাহলেও আমাদের সাথে যোগাযোগ করতে পারেন।
            </h5>
           </div>
            <div class="col-lg-12 mt-4" id="jjj">
                <div class="product-details-tabs">
                    <ul class="nav nav-tabs" id="productTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#tabs-1" type="button" role="tab" aria-controls="tabs-1" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#tabs-3" type="button" role="tab" aria-controls="tabs-3" aria-selected="false">Reviews <span>({{$totalReview}})</span></button>
                        </li>
                    </ul>
                    <div class="tab-content" id="productTabContent">
                        <div class="tab-pane fade show active" id="tabs-1" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-tab-desc">
                                <h6>Products Information</h6>
                                <p>ফিচার সমূহঃ </p>
                                <ul>
                                    <li>ইউজার ফেন্ডলি ।</li>
                                    <li>রেসপনসিভ ডিজাইন ।</li>
                                    <li>এডমিন প্যানেল ।</li>
                                    <li>কাস্টমার মেইল নটিফিকেশন (অর্ডার করার পরে)।</li>
                                    <li>কাস্টমার এসএমএস নটিফিকেশন ।</li>
                                    <li>সোশ্যাল মিডিয়া লগিন সিস্টেম ।</li>
                                    <li>পেমেন্ট মেথড সেটাপ ।</li>
                                    <li>কার্ড সিস্টেম ।</li>
                                    <li>লাইভ চ্যাট ।</li>
                                    <li>ক্যাটেগরি,সাবক্যাটেগরী  অনুযায়ী প্রডাক্ট লিস্টিং।</li>
                                    <li>ইনভয়েস এছাড়াও ই-কমারর্স ওয়েবসাইট এর সকল ফাংশনালিটি।</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Reviews Section -->
                        <div class="tab-pane fade" id="tabs-3" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="product-details-tab-desc">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h6 class="mb-0">Reviews ({{$totalReview}}) <span class="text-warning">Ratings </span>{{$rating}}</h6>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Write a Review
                                    </button>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        @foreach ($reviews as $review)
                                        <div class="review-item">
                                            <div class="review-author">{{ $review->name }}</div>
                                            <div class="review-stars">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $review->star)
                                                        &#9733; <!-- filled star -->
                                                    @else
                                                        &#9734; <!-- empty star -->
                                                    @endif
                                                @endfor
                                            </div>
                                            <div class="review-comment">{{ $review->comment }}</div>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Review Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Submit Your Review</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="alert-container"></div>
                                        <form id="review-form" action="{{ route('review.store') }}" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <h6>Your Rating</h6>
                                                <div class="submit-rating d-flex justify-content-between">
                                                    @for($i = 5; $i >= 1; $i--)
                                                        <input id="star-{{ $i }}" type="radio" name="star" value="{{ $i }}" />
                                                        <label for="star-{{ $i }}" title="{{ $i }} stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </label>
                                                    @endfor
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="reviewer-name">Name</label>
                                                <input type="text" id="reviewer-name" name="name" class="form-control" placeholder="Enter your name">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="review-comment">Comment</label>
                                                <textarea id="review-comment" name="comment" class="form-control" rows="4" placeholder="Write your review"></textarea>
                                            </div>
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Submit Review</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div style="background-color: #f8f9fa; font-family: Arial, sans-serif; margin: 0; padding: 0;">
    <div class="container" style="margin-top: 10px;">
        <div class="header" style="background-color: #004080; color: #fff; padding: 10px; text-align: center; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <marquee behavior="scroll" direction="left">
                <h5 style="margin: 0; font-size: 1.5rem;">E-commerce Website | Pos software  | Inventory software | Company Website | Personal Website | Blog website | News Portal | protfolio website and #App Development </h5>
            </marquee>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    document.getElementById('review-form').addEventListener('submit', function(event) {
        event.preventDefault();
    
        const form = event.target;
        const formData = new FormData(form);
        const alertContainer = document.getElementById('alert-container');
    
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'Accept': 'application/json',
            }
        })
        .then(response => {
            if (response.status === 422) {
                return response.json().then(errors => {
                    throw errors;
                });
            }
            return response.json();
        })
        .then(data => {
            alertContainer.innerHTML = '';
            if (data.success) {
                const successMessage = document.createElement('div');
                successMessage.classList.add('alert', 'alert-success');
                successMessage.textContent = data.success;
                alertContainer.appendChild(successMessage);
                form.reset();
            }
        })
        .catch(errors => {
            alertContainer.innerHTML = '';
            const errorList = document.createElement('ul');
            errorList.classList.add('alert', 'alert-danger');
            Object.keys(errors.errors).forEach(key => {
                const errorItem = document.createElement('li');
                errorItem.textContent = errors.errors[key][0];
                errorList.appendChild(errorItem);
            });
            alertContainer.appendChild(errorList);
        });
    });
    </script>
@endpush