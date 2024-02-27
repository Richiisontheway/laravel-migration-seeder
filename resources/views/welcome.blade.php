@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<div class="row">
        @foreach ($trains as $train)
            <div class="col-12 col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            {{ $train->factory }}
                        </h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
