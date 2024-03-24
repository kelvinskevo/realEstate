@extends('admin.body.app')

@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('propertyTypes.create') }}" class="btn btn-inverse-info">Add Property Type</a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Property Type All</h6>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>SI</th>
                                        <th>Type Name</th>
                                        <th>Type Icon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($propertyType as $key => $type)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $type->type_name }}</td>
                                            <td>{{ $type->type_icon }}</td>
                                            <td>
                                                <form method="POST" action="/propertyTypes/{{ $type->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="/propertyTypes/{{ $type->id }}/edit"
                                                        class="btn btn-inverse-warning">Edit</a>


                                                    <button type="submit" class="btn btn-inverse-danger btn-sm delete-btn">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
