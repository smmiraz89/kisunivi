@extends('backend.layouts.master')
@section('title','Client Edit')
{{--menu--}}
@section('client','side-menu--active')
@section('subOpenClient','menu__sub-open')
@section('clientCreate','side-menu--active')
{{--title header--}}
@section('link','Client')
@section('subLink','Edit')

@section('extraVendorCSS')
@endsection



@section('mainContent')
    @include('backend.layouts._alert')
    <div class="intro-y inbox box mt-5">
        <form action="{{ route('client.update',$client->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="p-5" id="vertical-form">
                <div class="preview">
                    <div>
                        <label>Customer Add Title</label>
                        <input type="text" name="title" value="{{ old('title',isset($client->title)?$client->title:null) }}"class="input w-full border mt-2">
                    </div>
                    @error('title')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror

                    <div class="mt-3">
                        <label>Position</label>
                        <input type="number" name="position" value="{{ old('position',isset($client->position)?$client->position:null) }}" class="input w-full border mt-2">
                    </div>
                    @error('position')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror

                    <div>
                        <label>Status</label>
                        <select class="input w-full border flex-1" name="status">
                            @if(old('status'))
                                <option @if(old('status')) selected @endif>{{ ucwords(old('status')) }}</option>
                            @else
                                <option value="{{ $client->status }}" selected>{{ ucwords($client->status) }}</option>
                            @endif
                                <option value="{{ \App\Models\User::STATUS_ACTIVE }}">{{ \App\Models\User::STATUS_ACTIVE }}</option>
                                <option value="{{ \App\Models\User::STATUS_INACTIVE }}">{{ \App\Models\User::STATUS_INACTIVE }}</option>
                        </select>
                    </div>
                    @error('status')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror

                    <div class="mt-3">
                        <input name="photo" type="file" multiple />
                        <div class="dz-message" data-dz-message>
                            <div class="text-lg font-medium">Drop files here or click to upload.</div>
                        </div>
                    </div>
                    @error('photo')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror
                    <img src="{{ asset($client->photo) }}" width="200px">

                    <button type="submit" class="button bg-theme-1 text-white mt-5">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('extraVendorJs')

@endsection
