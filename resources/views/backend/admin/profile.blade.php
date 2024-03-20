@extends('backend.admin.profile')
@section('content')
<!-- Start::row-1 -->
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">Profile Details</h5>
            </div>
            <div class="box-body">
                <form class="ti-custom-validation" novalidate>
                    <div class="flex gap-20">
                        <div class="flex-1 col-span-6 lg:col-span-4">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Logo Upload</h5>
                                </div>
                                <div class="box-body">
                                    <input type="file" name="header_logo" action="https://php.spruko.com/file-upload" class="filepond basic-filepond dropzone" data-allow-reorder="true" data-max-file-size="3MB" data-max-files="1">
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 col-span-6 lg:col-span-4">
                            <div class="box">
                                <div class="box-body">
                                    <img src="{{$system->header_logo}}" alt="" height="120">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Date Of Birth</label>
                        <input type="date" class="birthdate ti-form-input  rounded-sm flatpickr-input" readonly required>
                        <span class="dobError text-red-500 text-xs hidden">error</span>
                    </div>

                    
                    <div class="space-y-2">
                        <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Gender</label>
                        <ul class="flex flex-col sm:flex-row">
                            <li class="ti-list-group w-full gap-x-2.5 py-2 px-4 bg-white dark:bg-bodybg border text-gray-800 rounded-none border-e-0 sm:-ms-px sm:mt-0  !rounded-e-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                              <div class="relative flex items-start w-full">
                                <div class="flex items-center h-5">
                                  <input id="ti-radio-validation-11" name="ti-radio-validation" type="radio" class="ti-form-radio" checked required>
                                </div>
                                <label for="ti-radio-validation-11" class="ms-3 block w-full text-sm text-gray-600 dark:text-[#8c9097] dark:text-white/50">
                                Female
                                </label>
                              </div>
                            </li>

                            <li class="ti-list-group w-full gap-x-2.5 py-2 px-4 bg-white dark:bg-bodybg border text-gray-800 sm:-ms-px !rounded-none !border-e-0 dark:bg-bgdark dark:border-white/10 dark:text-white">
                              <div class="relative flex items-start w-full">
                                <div class="flex items-center h-5">
                                  <input id="ti-radio-validation-12" name="ti-radio-validation" type="radio" class="ti-form-radio" required>
                                </div>
                                <label for="ti-radio-validation-12" class="ms-3 block w-full text-sm text-gray-600 dark:text-[#8c9097] dark:text-white/50">
                                  Male
                                </label>
                              </div>
                            </li>

                            <li class="ti-list-group w-full gap-x-2.5 py-2 px-4 bg-white dark:bg-bodybg border text-gray-800 rounded-none !rounded-s-sm  dark:bg-bgdark dark:border-white/10 dark:text-white">
                              <div class="relative flex items-start w-full">
                                <div class="flex items-center h-5">
                                  <input id="ti-radio-validation-13" name="ti-radio-validation" type="radio" class="ti-form-radio" required>
                                </div>
                                <label for="ti-radio-validation-13" class="ms-3 block w-full text-sm text-gray-600 dark:text-[#8c9097] dark:text-white/50">
                                Others
                                </label>
                              </div>
                            </li>
                          </ul>
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
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Password</label>
                            <input type="password" class="password ti-form-input  rounded-sm" placeholder="password" required>
                            <span class="passwordError text-red-500 text-xs hidden">error</span>
                        </div>
                        <div class="space-y-2">
                            <label class="ti-form-label dark:text-defaulttextcolor/70 mb-0">Confirm Password</label>
                            <input type="password" class="confirmPassword ti-form-input  rounded-sm" placeholder="password" required>
                            <span class="confirmPasswordError text-red-500 text-xs hidden">error</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection