@extends('backend.layouts.app')
@section('content')
<!-- Start::row-1 -->
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">Application Details</h5>
            </div>
            <div class="box-body">
                <form  action="{{route('admin.system.update',$system->id)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('put')
                    <div class="flex gap-20">
                        <div class="flex-1 col-span-6 lg:col-span-4">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Logo Upload</h5>
                                </div>
                                <div class="box-body">
                                    <input type="file" name="header_logo" class="w-full">
                                    {{-- <input type="file" name="header_logo" action="https://php.spruko.com/file-upload" class="filepond basic-filepond dropzone" data-allow-reorder="true" data-max-file-size="1MB" data-max-files="1"> --}}
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 col-span-6 lg:col-span-4">
                            <div class="box">
                                <div class="box-body">
                                    <img src="{{asset($system->header_logo)}}" alt="" height="120">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Logo Upload</h5>
                            </div>
                            <div class="box-body">
                                <div data-single="true" action="https://php.spruko.com/file-upload" class="dropzone"></div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="grid lg:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Phone Number</label>
                            <input type="number" class="phonenumber my-auto ti-form-input  rounded-sm" name="phone_number" placeholder="Ex: +01792104772" value="{{$system->phone_number}}">
                            {{-- <span class="phoneError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Fax</label>
                            <input type="number" class="phonenumber my-auto ti-form-input  rounded-sm" name="fax" placeholder="Ex: +01792104772" value="{{$system->fax}}">
                            {{-- <span class="phoneError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Email Address</label>
                            <input type="email" class="email-address my-auto ti-form-input  rounded-sm" name="email" placeholder="example@mail.com" value="{{$system->email}}" >
                            {{-- <span class="emailError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                        <div class="space-y-2">
                            <div class="space-y-2">
                                <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Office Address</label>
                                <input type="text" class="postalAddress my-auto ti-form-input  rounded-sm" name="office_address" placeholder="Office Address goes to here" value="{{$system->office_address}}" >
                                {{-- <span class="addressError text-red-500 text-xs hidden">error</span> --}}
                            </div>
                        </div>
                        <div class="flex gap-20 space-y-2">
                            <div class="flex-1 col-span-6 lg:col-span-4">
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Years Logo Upload</h5>
                                    </div>
                                    <div class="box-body">
                                        <input type="file" name="years_logo" class="w-full">
                                        {{-- <input type="file" name="years_logo" action="https://php.spruko.com/file-upload" class="filepond basic-filepond-second dropzone" data-allow-reorder="true" data-max-file-size="3MB" data-max-files="1"> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 col-span-6 lg:col-span-4">
                                <div class="box">
                                    <div class="box-body bg-gray-200">
                                        <img src="{{asset($system->years_logo)}}" alt="" height="120">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-20 space-y-2">
                            <div class="flex-1 col-span-6 lg:col-span-4">
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Footer Logo Upload</h5>
                                    </div>
                                    <div class="box-body">
                                        <input type="file" name="footer_logo" class="w-full">
                                        {{-- <input type="file" name="footer_logo" action="https://php.spruko.com/file-upload" class="filepond basic-filepond-third dropzone" data-allow-reorder="true" data-max-file-size="1MB" data-max-files="1"> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 col-span-6 lg:col-span-4">
                                <div class="box">
                                    <div class="box-body bg-gray-200">
                                        <img src="{{asset($system->footer_logo)}}" alt="" height="120">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Copyright Text</label>
                            <input type="text" class="firstName my-auto ti-form-input  rounded-sm" name="copyright_text" placeholder="Firstname" value="{{$system->copyright_text}}"  >
                            {{-- <span class="firstNameError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                        <div class="space-y-2">
                            <!-- Start:: row-1 -->
                        <div class="grid grid-cols-12 gp-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Footer Description
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div >
                                            <textarea name="footer_short_desc" id="editor" class="w-full h-32"></textarea>
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
                        <!-- End:: row-1 -->    
                        </div>
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">About Title</label>
                            <input type="text" class="lastName my-auto ti-form-input  rounded-sm" placeholder="Enter Home About Title" name="about_title" required value="{{$system->about_title}}">
                            {{-- <span class="lastNameError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                        
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">About Description</label>
                            <textarea name="about_desc" id="" cols="30" rows="10" class="w-full">{{$system->about_desc}}</textarea>
                            {{-- <span class="passwordError text-red-500 text-xs hidden">error</span> --}}
                        </div>

                        
                    </div>
                    <div class="my-5">
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Buy Now URL</label>
                            <input type="text" class="postalAddress my-auto ti-form-input  rounded-sm" name="buy_now_url" placeholder="Enter Buy Now URL to redirect there" value="{{$system->buy_now_url}}" >
                            {{-- <span class="addressError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Video</label>
                            <input type="file" class="cityName my-auto ti-form-input  rounded-sm" name="video" placeholder="Enter video file here" value="{{$system->video}}" >
                            {{-- <span class="cityError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Facebook Link</label>
                            <input type="text" class="stateName my-auto ti-form-input  rounded-sm" name="facebook" placeholder="Facebook" value="{{$system->facebook}}" >
                            {{-- <span class="stateError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Instagram Link</label>
                            <input type="text" class="stateName my-auto ti-form-input  rounded-sm" name="instagram" placeholder="Instagram" value="{{$system->instagram}}" >
                            {{-- <span class="stateError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Linkedin Link</label>
                            <input type="text" class="stateName my-auto ti-form-input  rounded-sm" name="linkedin" placeholder="Linkedin" value="{{$system->linkedin}}" >
                            {{-- <span class="stateError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">YouTube Link</label>
                            <input type="text" class="stateName my-auto ti-form-input  rounded-sm" name="youtube" placeholder="YouTUbe" value="{{$system->youtube}}" >
                            {{-- <span class="stateError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">YouTube Video Link</label>
                            <input type="text" class="pincode my-auto ti-form-input  rounded-sm" name="youtube_video" placeholder="Youtube Video Link goes to here.." value="{{$system->youtube_video}}">
                            {{-- <span class="pincodeError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Facebook Page</label>
                            <input type="text" class="pincode my-auto ti-form-input  rounded-sm" name="facebook_page" placeholder="Facebook Page Link goes to here.." value="{{$system->facebook_page}}">
                            {{-- <span class="pincodeError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Instagram Page Link Link</label>
                            <input type="text" class="pincode my-auto ti-form-input  rounded-sm" name="instagram_page" placeholder="Instagram Page Link Link goes to here.." value="{{$system->instagram_page}}">
                            {{-- <span class="pincodeError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Linkedin Page Link</label>
                            <input type="text" class="pincode my-auto ti-form-input  rounded-sm" name="linkedin_page" placeholder="Linkedin Page Link goes to here.." value="{{$system->linkedin_page}}">
                            {{-- <span class="pincodeError text-red-500 text-xs hidden">error</span> --}}
                        </div>
                    </div>
                    <button  type="submit" class="ti-btn ti-btn-primary-full ">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection