<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('product_description') }}
            {{ Form::text('product_description', $product->product_description, ['class' => 'form-control' . ($errors->has('product_description') ? ' is-invalid' : ''), 'placeholder' => 'Product Description']) }}
            {!! $errors->first('product_description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('product_amount') }}
            {{ Form::text('product_amount', $product->product_amount, ['class' => 'form-control' . ($errors->has('product_amount') ? ' is-invalid' : ''), 'placeholder' => 'Product Amount']) }}
            {!! $errors->first('product_amount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('product_value') }}
            {{ Form::text('product_value', $product->product_value, ['class' => 'form-control' . ($errors->has('product_value') ? ' is-invalid' : ''), 'placeholder' => 'Product Value']) }}
            {!! $errors->first('product_value', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('product_status') }}
            {{ Form::text('product_status', $product->product_status, ['class' => 'form-control' . ($errors->has('product_status') ? ' is-invalid' : ''), 'placeholder' => 'Product Status']) }}
            {!! $errors->first('product_status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>