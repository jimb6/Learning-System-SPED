@extends('layouts.app')
@section('content')
    @include('partials.header')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb">
                    <img class="card-img-top" src="{{ URL::to('img/math.jpg') }}" alt="Card image cap">
                    <div class="card-body mb">
                        <h5 class="card-title">Math</h5>
                        <p class="card-text">Basic Calculation using Arithmetic Operation</p>
                        <button type="button" class="btn btn-primary mb">Select Subject</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb">
                    <img class="card-img-top" src="{{ URL::to('img/english.jpg') }}" alt="Card image cap">
                    <div class="card-body mb">
                        <h5 class="card-title">English</h5>
                        <p class="card-text">Play with Grammar, Forming Sentence and </p>
                        <button type="button" class="btn btn-primary mb">Select Subject</button>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
