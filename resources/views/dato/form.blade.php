<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $dato->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('years') }}
            {{ Form::text('years', $dato->years, ['class' => 'form-control' . ($errors->has('years') ? ' is-invalid' : ''), 'placeholder' => 'Years']) }}
            {!! $errors->first('years', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('document') }}
            {{ Form::text('document', $dato->document, ['class' => 'form-control' . ($errors->has('document') ? ' is-invalid' : ''), 'placeholder' => 'Document']) }}
            {!! $errors->first('document', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alergias') }}
            {{ Form::text('alergias', $dato->alergias, ['class' => 'form-control' . ($errors->has('alergias') ? ' is-invalid' : ''), 'placeholder' => 'Alergias']) }}
            {!! $errors->first('alergias', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nameparent') }}
            {{ Form::text('nameparent', $dato->nameparent, ['class' => 'form-control' . ($errors->has('nameparent') ? ' is-invalid' : ''), 'placeholder' => 'Nameparent']) }}
            {!! $errors->first('nameparent', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numparent') }}
            {{ Form::text('numparent', $dato->numparent, ['class' => 'form-control' . ($errors->has('numparent') ? ' is-invalid' : ''), 'placeholder' => 'Numparent']) }}
            {!! $errors->first('numparent', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('namedoctor') }}
            {{ Form::text('namedoctor', $dato->namedoctor, ['class' => 'form-control' . ($errors->has('namedoctor') ? ' is-invalid' : ''), 'placeholder' => 'Namedoctor']) }}
            {!! $errors->first('namedoctor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numdoctor') }}
            {{ Form::text('numdoctor', $dato->numdoctor, ['class' => 'form-control' . ($errors->has('numdoctor') ? ' is-invalid' : ''), 'placeholder' => 'Numdoctor']) }}
            {!! $errors->first('numdoctor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>