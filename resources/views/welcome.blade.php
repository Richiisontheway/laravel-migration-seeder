@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<div class="row">
        @foreach ($trains as $index => $singleTrain)
            <div class="col-12 col-sm-3">
                <div class="card">
                    <div class="card-body text-center">

                        <h3>
                            nome azienda:
                            {{ $singleTrain->factory }}
                        </h3>

                        <ul>
                            <li>
                                Stazione di partenza:
                                <span>
                                    {{ $singleTrain->departure_station }}
                                </span>
                            </li>
                            <li>
                                Stazione di arrivo:
                                <span>
                                    {{ $singleTrain->arrival_station }}
                                </span>
                            </li>
                            <li>
                                Data di partenza:
                                <span>
                                    {{ $singleTrain->departure_time }}
                                </span>
                            </li>
                            <li>
                                Data di arrivo:
                                <span>
                                    {{ $singleTrain->arrival_time }}
                                </span>
                            </li>
                            @if (!$singleTrain->in_time && !$singleTrain->deleted)
                                <li>
                                    Il treno è in ritardo
                                </li>
                            @endif
                            @if (!$singleTrain->in_time && $singleTrain->deleted)
                                <li>
                                    Il treno è stato cancellato
                                </li>
                            @endif
                        </ul>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
