<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('city_name') }}
            {{ Form::text('city_name', $city->city_name, ['class' => 'form-control' . ($errors->has('city_name') ? ' is-invalid' : ''), 'placeholder' => 'City Name']) }}
            {!! $errors->first('city_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>