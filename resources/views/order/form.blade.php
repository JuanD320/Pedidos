<div class="box box-info padding-1">
    <div class="box-body">
        
        

        <div class="form-group">
            {{ Form::label('customer_id') }}
            {{ Form::select('customer_id', $customer, $order->customer_id, ['class' => 'form-control' . ($errors->has('customer_id') ? ' is-invalid' : ''), 'placeholder' => 'Customer Id']) }}
            {!! $errors->first('customer_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('order_date') }}
            {{ Form::text('order_date', $order->order_date, ['class' => 'form-control' . ($errors->has('order_date') ? ' is-invalid' : ''), 'placeholder' => 'Order Date']) }}
            {!! $errors->first('order_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('order_total') }}
            {{ Form::text('order_total', $order->order_total, ['class' => 'form-control' . ($errors->has('order_total') ? ' is-invalid' : ''), 'placeholder' => 'Order Total']) }}
            {!! $errors->first('order_total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('order_date_delivery') }}
            {{ Form::text('order_date_delivery', $order->order_date_delivery, ['class' => 'form-control' . ($errors->has('order_date_delivery') ? ' is-invalid' : ''), 'placeholder' => 'Order Date Delivery']) }}
            {!! $errors->first('order_date_delivery', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('order_status') }}
            {{ Form::text('order_status', $order->order_status, ['class' => 'form-control' . ($errors->has('order_status') ? ' is-invalid' : ''), 'placeholder' => 'Order Status']) }}
            {!! $errors->first('order_status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>