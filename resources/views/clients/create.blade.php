@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header pb-0">
            <h4 class="card-title">{{ __('New client') }}</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('clients.store') }}" id="clients-form">
                @csrf
        @include('clients.__form')
            </form>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('clients.index') }}" class="btn btn-danger">
                <i class="fas fa-arrow-left"></i> {{ __('Cancel') }}
            </a>
            <button type="submit" class="btn btn-success" form="clients-form">
                <i class="fas fa-save"></i> {{ __('Save') }}
            </button>
        </div>
    </div>
@endsection

