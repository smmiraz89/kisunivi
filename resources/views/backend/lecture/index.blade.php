@extends('backend.layouts.master')
@section('title','All Session')
{{--menu--}}
@section('lecture','side-menu--active')
@section('subOpen','menu__sub-open')
@section('lectureAll','side-menu--active')
{{--title header--}}
@section('link','Session')
@section('subLink','All')

@section('extraVendorCSS')
@endsection

@section('mainContent')
    @include('backend.layouts._alert')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Slider
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                        @canany(['lecture.create'])
            <a class="button text-white bg-theme-1 shadow-md mr-2" href="{{ route('session.create') }}">Add New Session</a>
                            @endcanany
        </div>
    </div>
    <!-- BEGIN: Datatable -->
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <table class="table table-report table-report--bordered display datatable w-full">
            <thead>
            <tr>
                <th class="border-b-2 whitespace-no-wrap">Title</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Photo</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Description</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Position</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Status</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($lectures as $key => $lecture)
                <tr>
                    <td class="border-b">
                        <div class="font-medium whitespace-no-wrap">{{ $lecture->title }}</div>
                    </td>
                    <td class="text-center border-b">
                        <div class="flex sm:justify-center">
                            <div class="intro-x w-10 h-10 image-fit">
                                @if(!empty($lecture->photo))
                                <img alt="{{ $lecture->title }}" class="rounded-full" src="{{ asset($lecture->photo) }}">
                                @endif
                            </div>
                        </div>
                    </td>
                    <td class="text-center border-b">{!! substr($lecture->description,0,20) !!} ..</td>
                    <td class="text-center border-b">{{ $lecture->position }}</td>

                    <td class="w-40 border-b">
                        @if($lecture->status == \App\Models\User::STATUS_ACTIVE)
                            <div class="flex items-center sm:justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                        @else
                            <div class="flex items-center sm:justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                        @endif
                    </td>
                    <td class="border-b w-5">
                        <div class="flex sm:justify-center items-center">
                            @canany(['lecture.update'])
                                <a class="flex items-center mr-3" href="{{ route('session.edit',$lecture->id) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            @endcanany
                            @canany(['lecture.delete'])
                                <form action="{{ route('session.destroy',$lecture->id) }}"  method="post" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                   <button class="flex items-center text-theme-6" type="submit" title="Click for Delete" onclick="return confirm('Are you sure?')"><i data-feather="check-square" class="w-4 h-4 mr-2"></i>Delete</button>
                                </form>
                            @endcanany
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <!-- END: Datatable -->
@endsection

@section('extraVendorJs')
@endsection
