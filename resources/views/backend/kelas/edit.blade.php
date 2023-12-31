@extends('layouts.backend.app')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4 class="card-title"> {{ __('button.add') }} {{ __('field.kelas') }}</h4>
        <div class="card-header-action">
            <a href="{{ route('backend.kelas.index') }}" class="btn btn-secondary">{{ __('button.back') }}</a>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('backend.kelas.update',$data['kelas']) }}" method="post">
            @csrf
            @csrf
            <x-forms.select name="jurusan_id" id="jurusan_id" :label="__('field.jurusan')" :isRequired="true">
                @foreach ($data['jurusan'] as $jurusan)
                <option value="{{ $jurusan->id }}" {{ $data['kelas']['jurusan_id'] == $jurusan->id ? 'selected' : '' }}>{{ $jurusan->name }}</option>
                @endforeach
            </x-forms.select>
            <x-forms.input :label="__('field.kelas_name')" name="name" id="name" isRequired="true" :value="$data['kelas']['name']" />
            <div class="text-end">
                <button type="submit" class="btn btn-primary">{{ __('button.update') }}</button>
            </div>
        </form>
    </div>
</div>
@endsection