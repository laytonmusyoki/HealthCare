@extends('user.advent-app')

@section('title','Find Care')


@section('content')


<section class="test-info">
    <div class="row">
        <div class="col-lg-12">
            <div class="info">
                <a href="{{ route('user.tests') }}" class="list"><i class="fa-solid fa-arrow-left"></i>Tests Results List</a>
                <h3>POC GLUCOSE METER</h3>
                <div class="collected">
                    <h4>Collected on November 24, 2024 12:54 PM</h4>
                    <a href=""><i class="fa-solid fa-print"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row visualization">
        <h3>Lab tests - Blood (Blood, Capillary)</h3>
        <h5>Results</h5>
        <div class="row">
            <div class="col-lg-8">
                <div class="cards">
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection