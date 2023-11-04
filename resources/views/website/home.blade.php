@extends('layouts.website')
@section('content')
    {{-- Banner --}}
    <div class="banner-wrapper ">
        <div class="banner d-flex justify-content-center align-items-center">
            <div class="banner-content text-center">
                <h1 class="banner-title">Feeling Hungry????</h1>
                <form action="">
                    <div class="home-search">
                        <input type="text" name="search" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    {{-- Banner --}}


    {{-- Categories --}}
        <div class="food-categories-wrapper">
            <div class="container">
                <div class="food-categories">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="food-category">
                                Pakistani Cusines
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- Categories --}}
@endsection