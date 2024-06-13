
@extends('layouts.app')
@section('content')
<!-- content @s -->
<div class="nk-content ">
    <style type="text/css">
    .card-body{        
        text-align: center;  
    }
    .card-body h4{
        padding-bottom: 12px;
        padding-top: 30px;
        color: #1a3c8a;
    }
    .card-footer{
        font-family: 'Nunito';
        font-size: initial;        
    }
    .text-muted{
        color: #fff !important;
    }
    
    .card.card-bordered:hover {
        transition: 0.4s ease;
        transform: scale(1.05);
        box-shadow: 1px 1px 20px rgba(200,200,200,0.1);
    }
</style>

<div class="container-fluid">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <!-- <h3 class="nk-block-title page-title">Panel</h3> -->
                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card-header">{{ __('Dashboard') }}: User based permission</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content @e --> 
@endsection