@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h2 align="center">Bienvenido <span class="label label-warning">{{ strtoupper(\Auth::user()->name) }}</span></h2></div>

                <div class="panel-body">
					<main>
                        @include('carousel')
                        <div class="col-md-12">
                            @include('homeInfo')
                        </div>
					</main>

                </div>
            </div>
        </div>
    </div>
@endsection
