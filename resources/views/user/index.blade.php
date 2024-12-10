@extends('admin.admin_dashboard')
@section('title', 'Section Entry')
@section('admin')


    <div class="page-wrapper">
        <div class="page-content">
            <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                <div class="welcome-text">
                    <h4 class="mb-3 mb-md-0">ভূমি মন্ত্রণালয়ের স্টোর ম্যানেজমেন্ট সিস্টেমে প্রশাসন-১ শাখাকে স্বাগতম
                    </h4>
                </div>
                <div class="d-flex align-items-center flex-wrap text-nowrap">


                    <a href="{{ route('admin.section.daptarList') }}" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-plus-square">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                        </svg>
                        সকল দপ্তর
                    </a>
                </div>
            </div>


            <div class="row">
                <div class="col-md-8 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h6 class="card-title">Form Grid</h6> --}}
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">সম্পূর্ণ নাম</label>
                                            <input type="text" class="form-control" placeholder="সম্পূর্ণ নাম লিখুন">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">ইউজার নেইম</label>
                                            <input type="text" class="form-control" placeholder="ইউজার নেইম লিখুন">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">পদবি</label>
                                            <input type="text" class="form-control" placeholder="পদবি লিখুন">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">কর্মরত শাখার নাম</label>
                                            <input type="text" class="form-control" placeholder="কর্মরত শাখার নাম">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label class="form-label">ই-মেইল</label>
                                                <input type="email" class="form-control" placeholder="ই-মেইল প্রদান করুন">
                                            </div>
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">পাসওয়ার্ড</label>
                                            <input type="password" class="form-control" autocomplete="off"
                                                placeholder="পাসওয়ার্ড">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">পুনঃপাসওয়ার্ড</label>
                                            <input type="password" class="form-control" autocomplete="off"
                                                placeholder="পুনঃপাসওয়ার্ড">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                            </form>
                            <button type="button" class="btn btn-primary submit">সংরক্ষণ করুন</button>
                        </div>
                    </div>
                </div>
                {{-- </div>

            <div class="row"> --}}
                <div class="col-md-4 stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex align-content-around flex-wrap">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label">ছবি প্রদান করুন</label>
                                        <input type="file" name="" id="">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label">স্বাক্ষর প্রদান করুন</label>
                                        <input type="file" name="" id="">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
