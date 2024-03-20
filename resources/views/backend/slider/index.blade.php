@extends('backend.layouts.app')
@section('content')
    <!-- Start::row-1 -->
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">Main slider</h5>
            </div>
            <div class="flex ">
                <div class="flex-1">
                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-6 gap-6">
                        
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table whitespace-nowrap table-bordered min-w-full">
                                            <thead>
                                                <tr class="border-b border-defaultborder">
                                                    <th scope="col" class="text-start">Slider Image</th>
                                                    <th scope="col" class="text-start">Slider Title</th>
                                                    <th scope="col" class="text-start">Slider ALT text</th>
                                                    <th scope="col" class="text-start">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (isset($sliders))
                                                    @foreach ($sliders as $slider)
                                                        <tr class="border-b border-defaultborder">
                                                            <th scope="row">
                                                                <div class="flex items-center">
                                                                    <img src="{{asset($slider->slider_image)}}" alt="img" class="h-24">
                                                                </div>
                                                            </th>
                                                            <td>{{$slider->slider_title??""}}</td>
                                                            <td>{{$slider->slider_alt??""}}</td>
                                                            <td>
                                                                <div class="hstack gap-2 flex-wrap">
                                                                    <a aria-label="anchor" href="javascript:void(0);" class="text-info text-[.875rem] leading-none"><i
                                                                            class="ri-edit-line"></i></a>
                                                                    <a aria-label="anchor" href="javascript:void(0);" class="text-danger text-[.875rem] leading-none"><i
                                                                            class="ri-delete-bin-5-line"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->
                <div class="flex-1">
                    <div class="box-body">
                        <form  action="{{route('admin.slider.create')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="flex gap-20">
                                <div class="flex-1 col-span-6 lg:col-span-4">
                                    <div class="">
                                        <div class="box-header">
                                            <h5 class="box-title">Slider Upload</h5>
                                        </div>
                                        <div class="">
                                            <input type="file" name="slider_image" class="w-full" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Slider Title</label>
                                    <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm" name="slider_title" placeholder="Slider Title goes to here." >
                                    {{-- <span class="phoneError text-red-500 text-xs hidden">error</span> --}}
                                </div>
                                <div class="space-y-2">
                                    <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Slider ALT text</label>
                                    <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm" name="slider_alt" placeholder="Slider ALT text goes to here." >
                                    {{-- <span class="phoneError text-red-500 text-xs hidden">error</span> --}}
                                </div>
                                <button  type="submit" class="ti-btn ti-btn-primary-full ">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection