@extends('layouts.backend.app')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4 class="card-title"> {{ __('button.add') }} {{ __('field.pemilih') }}</h4>
        <div class="card-header-action">
            <a href="{{ route('backend.pemilih.index') }}" class="btn btn-secondary">{{ __('button.back') }}</a>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('backend.pemilih.update',$data['pemilih']) }}" method="post" enctype="multipart/form-data">
            @csrf
            @csrf

            <x-forms.input :label=" __('field.voter_name')" name="name" id="name" isRequired="true" :value="$data['pemilih']['name']" />

            <x-forms.input :label="__('field.voter_nis')" name="email" id="email" isRequired="true" :value="$data['pemilih']['email']" />


            <div class="text-end">
                <button type="submit" class="btn btn-primary">{{ __('button.update') }}</button>
            </div>
        </form>
    </div>
</div>
@endsection