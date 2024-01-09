@extends('layouts.main')

@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-title">
                            <div class="d-flex align-items-center">
                                <h2 class="mb-0">Car Details</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-md-3">Model:</dt>
                                <dd class="col-md-9">{{ $car->model }}</dd>

                                <dt class="col-md-3">Year:</dt>
                                <dd class="col-md-9">{{ $car->year }}</dd>

                                <dt class="col-md-3">Salesperson Email:</dt>
                                <dd class="col-md-9">{{ $car->salesperson_email }}</dd>

                                <dt class="col-md-3">Manufacturer:</dt>
                                <dd class="col-md-9">{{ $car->manufacturer->name }}</dd>
                            </dl>

                            <hr>
                            
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-9 offset-md-3">
                                <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-info">Edit</a>
                                <a href=" {{ route('cars.destroy', $car->id) }}" class="btn-delete btn btn-outline-danger" title="Delete">Delete</a>
                                <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary">Cancel</a>
                                
                                <form id="form-delete" method="POST" style="display: none">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection