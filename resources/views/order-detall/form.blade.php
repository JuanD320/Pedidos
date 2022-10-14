<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('order_id') }}
            {{ Form::text('order_id', $orderDetall->order_id, ['class' => 'form-control' . ($errors->has('order_id') ? ' is-invalid' : ''), 'placeholder' => 'Order Id']) }}
            {!! $errors->first('order_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('product_id') }}
            {{ Form::text('product_id', $orderDetall->product_id, ['class' => 'form-control' . ($errors->has('product_id') ? ' is-invalid' : ''), 'placeholder' => 'Product Id']) }}
            {!! $errors->first('product_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>