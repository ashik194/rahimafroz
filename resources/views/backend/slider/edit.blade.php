@extends('backend.layouts.app')
@section('content')
    <!-- Start::row-1 -->
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">Main slider</h5>
            </div>
            <div class="box-body">
                <form  action="{{route('admin.slider.update',$slider?->id)}}" enctype="multipart/form-data" method="POST">
                    @method('put')
                    @csrf
                    <div class="flex gap-20">
                        <div class="flex-1 col-span-6 lg:col-span-4">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Slider</h5>
                                </div>
                                <div class="box-body">
                                    <input type="file" name="slider_image" class="w-full">
                                    <img src="{{asset($slider?->slider_image)}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Slider Title</label>
                            <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm" name="slider_title" placeholder="Slider Title goes to here." value="{{$slider?->slider_title}}">
                            {{-- <span class="phoneError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Slider ALT text</label>
                            <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm" name="slider_alt" placeholder="Slider ALT text goes to here." value="{{$slider?->slider_alt}}">
                            {{-- <span class="phoneError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                        <button  type="submit" class="ti-btn ti-btn-primary-full ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection