@extends('layouts.app')

@section('template_title')
    {{ $customer->name ?? 'Show Customer' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Customer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cities Id:</strong>
                            {{ $customer->cities_id }}
                        </div>
                        <div class="form-group">
                            <strong>Customer Id Number:</strong>
                            {{ $customer->customer_id_number }}
                        </div>
                        <div class="form-group">
                            <strong>Custumer Name:</strong>
                            {{ $customer->custumer_name }}
                        </div>
                        <div class="form-group">
                            <strong>Customer Birth Date:</strong>
                            {{ $customer->customer_birth_date }}
                        </div>
                        <div class="form-group">
                            <strong>Customer Addres:</strong>
                            {{ $customer->customer_addres }}
                        </div>
                        <div class="form-group">
                            <strong>Customer Phone:</strong>
                            {{ $customer->customer_phone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
