@extends('backend.layouts.app')
@section('content')

    <!-- Start::row-1 -->
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">Awards</h5>
            </div>
            <div class="flex ">
                <!-- End:: row-1 -->
                <div class="flex-1">
                    <div class="box-body">
                        <form  action="{{route('admin.award.update',$award->id)}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('put')
                            <div class="flex gap-20">
                                <div class="flex-1 col-span-6 lg:col-span-4">
                                    <div class="">
                                        <div class="box-header">
                                            <h5 class="box-title">Image Upload</h5>
                                        </div>
                                        <div class="">
                                            <input type="file" name="image" class="w-full" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-2 gap-6">
                                <div class="space-y-2 my-2">
                                    <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Title</label>
                                    <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm" name="title" placeholder="Title goes to here." value="{{$award->title}}">
                                </div>
                                <div class="space-y-2 my-2">
                                    <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Image ALT Text</label>
                                    <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm" name="image_alt" placeholder="Image ALT text goes to here." value="{{$award->image_alt}}">
                                </div>
                            </div>
                            <button  type="submit" class="ti-btn ti-btn-primary-full ">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection