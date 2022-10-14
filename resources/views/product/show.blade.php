@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Product Description:</strong>
                            {{ $product->product_description }}
                        </div>
                        <div class="form-group">
                            <strong>Product Amount:</strong>
                            {{ $product->product_amount }}
                        </div>
                        <div class="form-group">
                            <strong>Product Value:</strong>
                            {{ $product->product_value }}
                        </div>
                        <div class="form-group">
                            <strong>Product Status:</strong>
                            {{ $product->product_status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
