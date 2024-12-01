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

                    <a href="{{ route('admin.section.wingAdd') }}"
                        class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-plus-square">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                        </svg>
                        নতুন অনুবিভাগ যোগ করুন
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
                                        <th>অনুবিভাগের নাম</th>
                                        <th>কর্মপ্রক্রিয়া</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-active">
                                        <td>১</td>
                                        <td>প্রশাসন অনুবিভাগ</td>
                                        <td>
                                            <a class="btn btn-primary btn-xs" href="#"><i data-feather="edit"></i>
                                                সম্পাদন করুন</a>&nbsp;&nbsp;
                                            <a class="btn btn-danger btn-xs" href="#"><i data-feather="trash-2"></i>
                                                মুছুন</a>
                                        </td>
                                    </tr>
                                    <tr class="table-active">
                                        <td>২</td>
                                        <td>জরিপ ও সায়রাত অনুবিভাগ</td>
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
