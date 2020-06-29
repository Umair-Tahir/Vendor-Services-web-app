@extends('vendor_dashboard.vd_master')

@section('title')
    - Dashboard
@endsection

@section('content')
<div class="dashboard-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Creation Requests</h3>
                            <p>Below are all the responses to your service creation requests.</p>
                        </div>
                    </div>
                </div>
                <div class="dashboard-vendor-list">
                    <ul class="list-unstyled">
                        <li>
                            <div class="dashboard-list-block">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="dashboard-list-img"><a href="#"><img style="height:100px;" src="https://www.confluenceedu.com/wp-content/uploads/2018/11/graduate-diploma-in-even-management.jpg" alt="" class="img-fluid"></a></div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="dashboard-list-content">
                                            <h3 class="mb0"><a href="#" class="title">Service Title</a></h3>
                                            <p>Service Request Accepted</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="dashboard-list-btn" style="text-align: left;"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">cancel</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dashboard-list-block">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="dashboard-list-img"><a href="#"><img style="height:100px;" src="https://qph.fs.quoracdn.net/main-qimg-9b18a9ba220937fd47608fe6593c9e36" alt="" class="img-fluid"></a></div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="dashboard-list-content">
                                            <h3 class="mb0"><a href="#" class="title">Service Title</a></h3>
                                            <p>Service Request Rejected</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="dashboard-list-btn" style="text-align: left;"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">cancel</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Update Requests</h3>
                            <p>Below are all the responses to your service updation requests.</p>
                        </div>
                    </div>
                </div>
                <div class="dashboard-vendor-list">
                    <ul class="list-unstyled">
                        <li>
                            <div class="dashboard-list-block">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="dashboard-list-img"><a href="#"><img style="height:100px;" src="https://www.confluenceedu.com/wp-content/uploads/2018/11/graduate-diploma-in-even-management.jpg" alt="" class="img-fluid"></a></div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="dashboard-list-content">
                                            <h3 class="mb0"><a href="#" class="title">Service Title</a></h3>
                                            <p>Service Request Accepted</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="dashboard-list-btn" style="text-align: left;"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">cancel</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dashboard-list-block">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="dashboard-list-img"><a href="#"><img style="height:100px;" src="https://qph.fs.quoracdn.net/main-qimg-9b18a9ba220937fd47608fe6593c9e36" alt="" class="img-fluid"></a></div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="dashboard-list-content">
                                            <h3 class="mb0"><a href="#" class="title">Service Title</a></h3>
                                            <p>Service Request Rejected</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="dashboard-list-btn" style="text-align: left;"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">cancel</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /# column -->
        </div>
    </div>
</div>
@endsection