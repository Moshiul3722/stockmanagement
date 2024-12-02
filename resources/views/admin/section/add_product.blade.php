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


                    <a href="{{ route('admin.product.list') }}" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                        <i data-feather="plus-square"></i>
                        সকল মালামাল
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
                                            <label class="form-label">মালামালের ধরন</label>
                                            {{-- <input type="text" class="form-control"
                                                placeholder="অনুবিভাগের নাম প্রদান করুন"> --}}

                                            <select class="form-select mb-3">
                                                <option selected="" disabled>মালামালের ধরন নির্বাচন করুন</option>
                                                <option value="1">টেন্ডারে প্রাপ্ত মালামাল</option>
                                                <option value="2">সরাসরি ক্রয়কৃত মালামাল</option>
                                                <option value="3">বি জি প্রেস হতে সংগ্রহকৃত মালামাল</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">মালামালের নাম</label>
                                            <input type="text" class="form-control"
                                                placeholder="মালামালের নাম প্রদান করুন">
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
