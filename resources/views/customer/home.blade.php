@extends('layouts.app')

@section('content')
    <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
            <div class="nav-profile-image">
                <img src="{{ url('images/faces/face1.jpg') }}" alt="profile">
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2"> {{ Auth::user()->name }}</span>
                <span class="text-secondary text-small"> {{ Auth::user()->email }}</span>
            </div>
            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <span class="menu-title">New Drop</span>
            <i class="mdi mdi-message menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <span class="menu-title">Apparels</span>
            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <span class="menu-title">Product</span>
            <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <span class="menu-title">My Account</span>
            <i class="mdi mdi-finance menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
            <span class="menu-title">Logout</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
            <i class="mdi mdi-logout menu-icon"></i>
            </a>
        </li>
        </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
            </nav>
        </div>
        
        <div class="offset-1 col-md-10">  
            <div class="shop">
                <div class="row"> 
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{ url('images/shop/products/1.jpg') }}">
                                </a>
                                <span class="product-new">NEW</span>
                                <span class="product-wishlist">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </span>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Bolt Sweatshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>Rp 120.000</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">6 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{ url('images/shop/products/1.jpg') }}">
                                </a>
                                <span class="product-wishlist">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </span>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Red Polo</a></h3>
                                </div>
                                <div class="product-price"><ins>Rp 300.000</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">26 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{ url('images/shop/products/1.jpg') }}">
                                </a>
                                <span class="product-wishlist">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </span>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Red Dress</a></h3>
                                </div>
                                <div class="product-price"><ins>Rp. 400.000</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">100 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{ url('images/shop/products/1.jpg') }}">
                                </a>
                                <span class="product-new">NEW</span>
                                <span class="product-wishlist">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </span>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Long Dress</a></h3>
                                </div>
                                <div class="product-price"><ins>Rp 900.000</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">33 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{ url('images/shop/products/1.jpg') }}">
                                </a>
                                <span class="product-new">NEW</span>
                                <span class="product-wishlist">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </span>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Bolt Sweatshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>Rp 120.000</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">6 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{ url('images/shop/products/1.jpg') }}">
                                </a>
                                <span class="product-wishlist">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </span>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Red Polo</a></h3>
                                </div>
                                <div class="product-price"><ins>Rp 300.000</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">26 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{ url('images/shop/products/1.jpg') }}">
                                </a>
                                <span class="product-wishlist">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </span>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Red Dress</a></h3>
                                </div>
                                <div class="product-price"><ins>Rp. 400.000</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">100 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{ url('images/shop/products/1.jpg') }}">
                                </a>
                                <span class="product-new">NEW</span>
                                <span class="product-wishlist">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </span>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Long Dress</a></h3>
                                </div>
                                <div class="product-price"><ins>Rp 900.000</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">33 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection