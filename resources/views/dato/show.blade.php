@extends('layouts.app')

@section('template_title')
    {{ $dato->name ?? 'Show Dato' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Dato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('datos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $dato->name }}
                        </div>
                        <div class="form-group">
                            <strong>Years:</strong>
                            {{ $dato->years }}
                        </div>
                        <div class="form-group">
                            <strong>Document:</strong>
                            {{ $dato->document }}
                        </div>
                        <div class="form-group">
                            <strong>Alergias:</strong>
                            {{ $dato->alergias }}
                        </div>
                        <div class="form-group">
                            <strong>Nameparent:</strong>
                            {{ $dato->nameparent }}
                        </div>
                        <div class="form-group">
                            <strong>Numparent:</strong>
                            {{ $dato->numparent }}
                        </div>
                        <div class="form-group">
                            <strong>Namedoctor:</strong>
                            {{ $dato->namedoctor }}
                        </div>
                        <div class="form-group">
                            <strong>Numdoctor:</strong>
                            {{ $dato->numdoctor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
