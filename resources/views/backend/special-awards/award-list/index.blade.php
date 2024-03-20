@extends('backend.layouts.app')
@section('content')

    <!-- Start::row-1 -->
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">Special Awards</h5>
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
                                                    <th scope="col" class="text-start">Image</th>
                                                    <th scope="col" class="text-start">Description</th>
                                                    <th scope="col" class="text-start">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (isset($special_awards))
                                                    @foreach ($special_awards as $special)
                                                        <tr class="border-b border-defaultborder">
                                                            <th scope="row">
                                                                <div class="flex items-center">
                                                                    <img src="{{asset($special->image)}}" alt="img" class="h-[200px]">
                                                                </div>
                                                            </th>
                                                            <td >{!! Str::limit($special->description, 50, '...') !!}</td>
                                                            <td>
                                                                <div class="hstack gap-2 flex-wrap">
                                                                    <a aria-label="anchor" href="{{route('admin.special.edit',$special->id)}}" class="mx-2 text-info text-[.875rem] leading-none"><i
                                                                            class="ri-edit-line"></i></a>
                                                                    <a aria-label="anchor" href="{{route('admin.special.delete',$special->id)}}" class="mx-2 text-danger text-[.875rem] leading-none"><i
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
                        <form  action="{{route('admin.special.create')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="flex gap-20">
                                <div class="flex-1 col-span-6 lg:col-span-4">
                                    <div class="">
                                        <div class="box-header">
                                            <h5 class="box-title">Image Upload</h5>
                                        </div>
                                        <div class="">
                                            <input type="file" name="image" class="w-full" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-2 gap-6">
                                {{-- <div class="space-y-2 my-2">
                                    <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Designation</label>
                                    <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm" name="designation" placeholder="Designation goes to here." >
                                </div> --}}
                                <div class="space-y-2 my-2">
                                    <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Image ALT Text</label>
                                    <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm" name="image_alt" placeholder="Image ALT text goes to here." >
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gp-6 my-2">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                special Description
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div >
                                                <textarea name="description" id="ashik" class="w-full"></textarea>
                                                {{-- <h4><b class="ql-size-large">Quill Snow</b> is a free, open source <a href="https://github.com/quilljs/quill/" target="_blank">Quill Editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/" target="_blank">modular architecture</a> and expressive API, it is completely customizable to fit any need.</h4>
                                                <p><br></p>
                                                <ol>
                                                    <li class="ql-size-normal">Write text select and edit with multiple options.</li>
                                                    <li class="">This is quill snow editor.</li>
                                                    <li class="">Easy to customize and flexible.</li>
                                                </ol>
                                                <p><br></p>
                                                <h4>Quill officially supports a standard toolbar theme <a href="https://github.com/quilljs/quill/" target="_blank">"Snow"</a> and a floating tooltip theme <a href="https://github.com/quilljs/quill/" target="_blank">"Bubble"</a></h4> --}}
                                            </div>
                                        </div>
                                    </div>
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