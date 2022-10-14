@extends('layouts.app')

@section('template_title')
    {{ $order->name ?? 'Show Order' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Order</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Customer Id:</strong>
                            {{ $order->customer_id }}
                        </div>
                        <div class="form-group">
                            <strong>Order Date:</strong>
                            {{ $order->order_date }}
                        </div>
                        <div class="form-group">
                            <strong>Order Total:</strong>
                            {{ $order->order_total }}
                        </div>
                        <div class="form-group">
                            <strong>Order Date Delivery:</strong>
                            {{ $order->order_date_delivery }}
                        </div>
                        <div class="form-group">
                            <strong>Order Status:</strong>
                            {{ $order->order_status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
