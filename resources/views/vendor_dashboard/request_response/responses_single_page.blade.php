@extends('vendor_dashboard.vd_master')

@section('title')
    - Dashboard
@endsection

@section('content')
<div class="dashboard-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10"><br>
                        <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="dashboard-page-header">
                                <h3 class="dashboard-page-title">Service Requests</h3>
                                <p>Below are all the responses to your service creation and updation requests.</p>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-vendor-list">
                        <ul class="list-unstyled">
                            <li>
                                <div class="dashboard-list-block">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                                            <div class="dashboard-list-img"><a href="#"><img style="height:100px;" src="https://www.confluenceedu.com/wp-content/uploads/2018/11/graduate-diploma-in-even-management.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                        <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12 ">
                                            <div class="dashboard-list-content">
                                                <h3 class="mb0"><a href="#" class="title">Service Title</a></h3>
                                                <p>Service Request Accepted</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                            <div class="dashboard-list-btn"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">cancel</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dashboard-list-block">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                                            <div class="dashboard-list-img"><a href="#"><img style="height:100px;" src="https://qph.fs.quoracdn.net/main-qimg-9b18a9ba220937fd47608fe6593c9e36" alt="" class="img-fluid"></a></div>
                                        </div>
                                        <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12">
                                            <div class="dashboard-list-content">
                                                <h3 class="mb0"><a href="#" class="title">Service Title</a></h3>
                                                <p>Service Request Rejected</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 ">
                                            <div class="dashboard-list-btn"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">cancel</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
        </div>
    @endsection