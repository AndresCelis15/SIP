@extends('layouts.app')

@section('template_title')
    Dato
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Dato') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('datos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Years</th>
										<th>Document</th>
										<th>Alergias</th>
										<th>Nameparent</th>
										<th>Numparent</th>
										<th>Namedoctor</th>
										<th>Numdoctor</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datos as $dato)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $dato->name }}</td>
											<td>{{ $dato->years }}</td>
											<td>{{ $dato->document }}</td>
											<td>{{ $dato->alergias }}</td>
											<td>{{ $dato->nameparent }}</td>
											<td>{{ $dato->numparent }}</td>
											<td>{{ $dato->namedoctor }}</td>
											<td>{{ $dato->numdoctor }}</td>

                                            <td>
                                                <form action="{{ route('datos.destroy',$dato->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('datos.show',$dato->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('datos.edit',$dato->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $datos->links() !!}
            </div>
        </div>
    </div>
@endsection
