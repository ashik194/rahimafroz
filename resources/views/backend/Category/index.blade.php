@extends('backend.layouts.app')
@section('content')
    <!-- Start::row-1 -->
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">Category</h5>
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
                                                    <th scope="col" class="text-start">Category Image</th>
                                                    <th scope="col" class="text-start">Category Name</th>
                                                    <th scope="col" class="text-start">ALT</th>
                                                    <th scope="col" class="text-start">Status</th>
                                                    <th scope="col" class="text-start">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (isset($managements))
                                                    @foreach ($managements as $management)
                                                        <tr class="border-b border-defaultborder">
                                                            <th scope="row">
                                                                <div class="flex items-center">
                                                                    <img src="{{asset($management->category_image)}}" alt="img" class="h-24">
                                                                </div>
                                                            </th>
                                                            <td>{{$management->category_name??""}}</td>
                                                            <td>{{$management->category_alt??""}}</td>
                                                            <td>{{$management->status??""}}</td>
                                                            <td>
                                                                <div class="hstack gap-2 flex-wrap">
                                                                    <a aria-label="anchor" href="{{route('admin.management.edit',$management->id)}}" class="mx-2 text-info text-[.875rem] leading-none"><i
                                                                            class="ri-edit-line"></i></a>
                                                                    <a aria-label="anchor" href="{{route('admin.management.delete',$management->id)}}" class="mx-2 text-danger text-[.875rem] leading-none"><i
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
                        <form  action="{{route('admin.management.create')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="flex gap-20">
                                <div class="flex-1 col-span-6 lg:col-span-4">
                                    <div class="">
                                        <div class="box-header">
                                            <h5 class="box-title">Category Image Upload</h5>
                                        </div>
                                        <div class="">
                                            <input type="file" name="image" class="w-full" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-2 gap-6">
                                <div class="space-y-2 my-2">
                                    <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Category Name</label>
                                    <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm" name="category_name" placeholder="Category Name goes to here." >
                                </div>
                                <div class="space-y-2 my-2">
                                    <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Image ALT Text</label>
                                    <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm" name="category_alt" placeholder="Image ALT text goes to here." >
                                </div>
                            </div>
                            <div class="flex justify-between gap-4">
                                <div class="space-y-2 my-2">
                                    <select name="status" id="">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <button  type="submit" class="ti-btn ti-btn-primary-full ">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection