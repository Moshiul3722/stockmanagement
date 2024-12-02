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

                    <a href="{{ route('admin.productType.add') }}"
                        class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                        <i data-feather="plus-square"></i>
                        মালামালের ধরন যুক্ত করুন
                    </a>

                </div>
            </div>


            <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>মালামালের ধরনের নাম</th>
                                        <th>কর্মপ্রক্রিয়া</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-active">
                                        <td>১</td>
                                        <td>টেন্ডারে প্রাপ্ত মালামাল</td>
                                        <td>
                                            <a class="btn btn-primary btn-xs" href="#"><i data-feather="edit"></i>
                                                সম্পাদন করুন</a>&nbsp;&nbsp;
                                            <a class="btn btn-danger btn-xs" href="#"><i data-feather="trash-2"></i>
                                                মুছুন</a>
                                        </td>
                                    </tr>
                                    <tr class="table-active">
                                        <td>২</td>
                                        <td>সরাসরি ক্রয়কৃত মালামাল</td>
                                        <td>
                                            <a class="btn btn-primary btn-xs" href="#"><i data-feather="edit"></i>
                                                সম্পাদন করুন</a>&nbsp;&nbsp;
                                            <a class="btn btn-danger btn-xs" href="#"><i data-feather="trash-2"></i>
                                                মুছুন</a>
                                        </td>
                                    </tr>
                                    <tr class="table-active">
                                        <td>৩</td>
                                        <td>বি জি প্রেস হতে সংগ্রহকৃত মালামাল</td>
                                        <td>
                                            <a class="btn btn-primary btn-xs" href="#"><i data-feather="edit"></i>
                                                সম্পাদন করুন</a>&nbsp;&nbsp;
                                            <a class="btn btn-danger btn-xs" href="#"><i data-feather="trash-2"></i>
                                                মুছুন</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
