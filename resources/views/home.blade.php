@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header my-dashboard-header text-light">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <nav class="my-dashboard-nav">
                        <ul>
                            <li>
                                <a href="">
                                    Il mio profilo
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    Il mio menù
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    I miei ordini
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    Le mie statistiche
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <section class="my-main-section">
                        
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
