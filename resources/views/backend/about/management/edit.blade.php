@extends('backend.layouts.app')
@section('content')
    <!-- Start::row-1 -->
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">Management</h5>
            </div>
            <div class="flex ">
                <!-- End:: row-1 -->
                <div class="flex-1">
                    <div class="box-body">
                        <form  action="{{route('admin.management.update',$management->id)}}" enctype="multipart/form-data" method="POST">
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
                                    <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Management Name</label>
                                    <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm" name="management_name" placeholder="Management Name goes to here." value="{{$management->management_name}}">
                                </div>
                                <div class="space-y-2 my-2">
                                    <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Designation</label>
                                    <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm" name="designation" placeholder="Designation goes to here." value="{{$management->designation}}">
                                </div>
                                <div class="space-y-2 my-2">
                                    <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Image ALT Text</label>
                                    <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm" name="image_alt" placeholder="Image ALT text goes to here." value="{{$management->image_alt}}">
                                </div>
                            </div>
                            <div class="flex justify-between gap-4">
                                <div class="space-y-2 my-2">
                                    <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Facebook</label>
                                    <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm w-[300px]" name="facebook" placeholder="Facebook Address goes to here." value="{{$management->facebook}}">
                                </div>
                                <div class="space-y-2 my-2">
                                    <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Instagram</label>
                                    <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm w-[300px]" name="instagram" placeholder="Instagram Address goes to here." value="{{$management->instagram}}">
                                </div>
                                <div class="space-y-2 my-2">
                                    <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Linkedin</label>
                                    <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm w-[300px]" name="linkedin" placeholder="Linked address goes to here." value="{{$management->linkedin}}">
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gp-6 my-2">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Management Description
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div >
                                                <textarea name="description" id="ashik" class="w-full h-32">{{$management->description}}</textarea>
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
                            <button  type="submit" class="ti-btn ti-btn-primary-full ">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection