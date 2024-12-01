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


                    <a href="{{ route('admin.section.subSectionList') }}" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-plus-square">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                        </svg>
                        সকল শাখা
                    </a>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <form>
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">অনুবিভাগের নাম</label>
                                            {{-- <input type="text" class="form-control"
                                                placeholder="অনুবিভাগের নাম প্রদান করুন"> --}}

                                            <select class="form-select mb-3">
                                                <option selected="" disabled>অনুবিভাগের নাম নির্বাচন করুন</option>
                                                <option value="1">প্রশাসন অনুবিভাগ</option>
                                                <option value="2">উন্নয়ন অনুবিভাগ</option>
                                                <option value="3">মাঠ প্রশাসন অনুবিভাগ</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">অধিশাখার নাম</label>
                                            {{-- <input type="text" class="form-control"
                                                placeholder="অনুবিভাগের নাম প্রদান করুন"> --}}

                                            <select class="form-select mb-3">
                                                <option selected="" disabled>অধিশাখার নাম নির্বাচন করুন</option>
                                                <option value="1">প্রশাসন-১ অধিশাখা</option>
                                                <option value="2">উন্নয়ন-১ অধিশাখা</option>
                                                <option value="3">মাঠ প্রশাসন-১ অধিশাখা</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">শাখার নাম</label>
                                            <input type="text" class="form-control"
                                                placeholder="অধিশাখার নাম প্রদান করুন">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">&nbsp;</label>
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <button type="button" class="btn btn-primary submit">সংরক্ষণ করুন</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection
