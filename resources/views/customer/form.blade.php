<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cities_id') }}
            {{ Form::select('cities_id', $city, $customer->cities_id, ['class' => 'form-control' . ($errors->has('cities_id') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad Id']) }}
            {!! $errors->first('cities_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('customer_id_number') }}
            {{ Form::text('customer_id_number', $customer->customer_id_number, ['class' => 'form-control' . ($errors->has('customer_id_number') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id Number']) }}
            {!! $errors->first('customer_id_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('custumer_name') }}
            {{ Form::text('custumer_name', $customer->custumer_name, ['class' => 'form-control' . ($errors->has('custumer_name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cliente']) }}
            {!! $errors->first('custumer_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('customer_birth_date') }}
            {{ Form::text('customer_birth_date', $customer->customer_birth_date, ['class' => 'form-control' . ($errors->has('customer_birth_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Cumpleaños']) }}
            {!! $errors->first('customer_birth_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('customer_addres') }}
            {{ Form::text('customer_addres', $customer->customer_addres, ['class' => 'form-control' . ($errors->has('customer_addres') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('customer_addres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('customer_phone') }}
            {{ Form::text('customer_phone', $customer->customer_phone, ['class' => 'form-control' . ($errors->has('customer_phone') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('customer_phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>