@extends('backend.layouts.app')
@section('content')
<style>
    .ck-content{
        min-height: 260px !important;
    }
    td>p{
        width: 350px;
    }
</style>
    <!-- Start::row-1 -->
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">Special Awards</h5>
            </div>
            <div class="flex ">
                <!-- End:: row-1 -->
                <div class="flex-1">
                    <div class="box-body">
                        <form  action="{{route('admin.special.update',$special->id)}}" enctype="multipart/form-data" method="POST">
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
                                {{-- <div class="space-y-2 my-2">
                                    <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Designation</label>
                                    <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm" name="designation" placeholder="Designation goes to here." >
                                </div> --}}
                                <div class="space-y-2 my-2">
                                    <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Image ALT Text</label>
                                    <input type="text" class="phonenumber my-auto ti-form-input  rounded-sm" name="image_alt" placeholder="Image ALT text goes to here." value="{{$special->image_alt}}">
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
                                                <textarea name="description" id="ashik" class="w-full">{{$special->description}}</textarea>
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