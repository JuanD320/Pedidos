@extends('layouts.app')

@section('template_title')
    Customer
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cliente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('customers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Registro') }}
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
                                        <th>ID</th>
                                        
										<th>Ciudad</th>
										<th>Cliente ID</th>
										<th>Nombre Clinte</th>
										<th>Cumpleaños</th>
										<th>Email</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $customer->city->city_name }}</td>
											<td>{{ $customer->customer_id_number }}</td>
											<td>{{ $customer->custumer_name }}</td>
											<td>{{ $customer->customer_birth_date }}</td>
											<td>{{ $customer->customer_addres }}</td>
											<td>{{ $customer->customer_phone }}</td>

                                            <td>
                                                <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('customers.show',$customer->id) }}"><i class="fa fa-fw fa-eye"></i> Mostar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('customers.edit',$customer->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $customers->links() !!}
            </div>
        </div>
    </div>
@endsection
