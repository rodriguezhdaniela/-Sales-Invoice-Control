@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header d-flex justify-content-between">
            <h5 class="card-title mb-0">Sellers</h5>
            <div class="btn-group-sm">
                <a class="btn btn-primary btn-sm" href="{{ route('sellers.create') }}"><i class="fas fa-plus"></i> Create</a>
            </div>
        </div>
        <div class="container">
            @include('partials.__alerts')
            <nav class="navbar navbar-light justify-content-lg-end">
                <form method='GET' action="{{ route('sellers.index')}}" class="form-inline">
                    <input type="text" class="form-control mr-sm-2" name="personal_id" placeholder="ID Number" value="{{ request()->input('personal_id')}}">
                    <input type="text" class="form-control mr-sm-2" name="name" placeholder="Name" value="{{ request()->input('name')}}">
                    <div class="btn-group-sm">
                        <button class="btn btn-success" type="submit"><i class="fas fa-search"></i> {{ __('Search') }}</button>
                    </div>
                </form>
            </nav>
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Type ID</th>
                        <th>ID Number</th>
                        <th>Names</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sellers as $seller)
                    <tr>
                        <td>{{$seller->type_id}}</td>
                        <td>{{$seller->personal_id}}</td>
                        <td>{{$seller->name}}</td>
                        <td>{{$seller->address}}</td>
                        <td>{{$seller->phone_number}}</td>
                        <td>{{$seller->email}}</td>
                        <td class="text-right">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('sellers.edit', $seller) }}" class="btn btn-link text-secondary">
                                <i class="fas fa-edit"></i> Edit
                                </a>
                                <button type="button" class="btn btn-link text-danger" data-route="{{ route('sellers.destroy', $seller) }}" data-toggle="modal" data-target="#confirmDeleteModal" title="{{ __('Delete') }}">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <div class="mt-3 d-flex justify-content-center">
                    {!! $sellers->render() !!}
                </div>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
@endsection
@push('modals')
    @include('partials.__confirm_delete_modal')
@endpush
@push('scripts')
    <script src="{{ asset(mix('js/delete-modal.js')) }}"></script>
@endpush
