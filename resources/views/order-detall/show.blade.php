@extends('layouts.app')

@section('template_title')
    {{ $orderDetall->name ?? 'Show Order Detall' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Order Detall</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('order-detalls.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Order Id:</strong>
                            {{ $orderDetall->order_id }}
                        </div>
                        <div class="form-group">
                            <strong>Product Id:</strong>
                            {{ $orderDetall->product_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
