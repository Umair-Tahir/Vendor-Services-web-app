@extends('front_end.master')

@section('title')
    Home
@endsection

@section('content')

     <div class="page-header">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title">Frequantly Ask Question</h1>
                    </div>
                </div>
                <!-- /.page caption -->
            </div>
        </div>
        <!-- page caption -->
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">FAQ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- page breadcrumb -->
    </div>
    <!-- /.page-header -->
    <!-- faq-page-section -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="left-navbar mb30">
                        <ul class="nav flex-column mb30">
                            <li class="nav-item">
                                <a class="nav-link active" href="#general">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#vendor-faq">Vendor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#bride-groom-faq">Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pricing">Services</a>
                            </li>
                        </ul>
                  
                    <div class="card">
                        <div class="card-body">
                            <h3>Can’t find what you’re looking for </h3>
                            <p>Contact our customer service representative for further assistance.</p>
                            <a href="#" class="btn btn-primary">contact us</a>
                        </div>
                        <div class="card-footer">
                            <p class="text-default">+92-306-4505970</p>
                        </div>
                    </div>
                      </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                    <div class="" id="general">
                    <div class="card">
                        <!-- section-title -->
                        <h3 class="card-header bg-white">General Questions</h3>
                        <!-- /.section-title -->
                        <!-- faq-block -->
                        <div class="card-body">
                            <div class="faq-qa-block">
                                <h4>What is EventsBlash?</h4>
                                <p>Events bash aims to provide a platform where users can experience superior event services with just a click. It enables different business vendors to publish their services hence enhancing their business to market. </p>
                            </div>
                            <!-- /.faq-block -->
                            <!-- faq-block -->
                            <div class="faq-qa-block">
                                <h4>How does EventsBlash work?</h4>
                                <p>It enables different business vendors to publish their services hence enhancing their business to market. </p>
                            </div>
                            <!-- /.faq-block -->
                            <!-- faq-block -->
                            <div class="faq-qa-block">
                                <h4>Why should i use EventsBlash?</h4>
                                <p>Events bash aims to provide a platform where users can experience superior event services with just a click. </p>
                            </div>
                            <!-- /.faq-block -->
                            <!-- faq-block -->
                            <div class="faq-qa-block">
                                <h4>Which vendor categories can sign up for the vendor accounts?</h4>
                                <p>It enables different business vendors to publish their services hence enhancing their business to market.  </p>
                                <ul class="list-unstyled arrow">
                                    <li> Catering</li>
                                    <li> Photography</li>
                                    <li> Venues </li>
                                    <li> Wedings </li>
                                
                                <p>Providing services online has become quite common and effective in various aspects.  </p>
                            </div>
                            <!-- /.faq-block -->
                        </div>
                        <!-- faq-block -->
                    </div>
                </div>
                    <div class="" id="vendor-faq">
                        <div class="card">
                            <h3 class="card-header bg-white">Vendor</h3>
                            <div class="card-body">
                                <div class="faq-qa-block">
                                    <h4>What information is provided for each vender?</h4>
                                    <p>The objective of this web application is to ensure easy accessibility of services such as event organizers, venue providers and floral providers to the people searching on online platforms. Helping people hire specialists and professionals </p>
                                </div>
                                <div class="faq-qa-block">
                                    <h4>What can I display in my vendor profile?</h4>
                                    <p>Providing services online has become quite common and effective in various aspects. People find it easy to book services online rather than physically reaching out to service providers.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.faq-block -->
                    </div>
                   <div class="" id="bride-groom-faq">
                        <div class="card">
                        <h3 class="card-header bg-white">Events</h3>
                        <!-- faq-block -->
                        <div class="card-body">
                            <div class="faq-qa-block">
                                <h4>How does the event registration process is taken. ?</h4>
                                <p>Events bash aims to provide a platform where users can experience superior event services with just a click. It enables different business vendors to publish their services hence enhancing their business to market.</p>
                            </div>
                            <!-- /.faq-block -->
                            <!-- faq-block -->
                            <div class="faq-qa-block">
                                <h4>Why should i get registered to the events?</h4>
                                <p>Providing services online has become quite common and effective in various aspects. People find it easy to book services online rather than physically reaching out to service providers. Helping people hire specialists and professionals </p>
                            </div>
                            <!-- /.faq-block -->
                        </div>
                    </div>
                   </div>
                   <div id="pricing">
                        <div class="card">
                        <h3 class="card-header bg-white">Services</h3>
                        <!-- faq-block -->
                        <div class="card-body">
                            <div class="faq-qa-block">
                                <h4>How does the services are provided?</h4>
                                <p>Events bash aims to provide a platform where users can experience superior event services with just a click. It enables different business vendors to publish their services hence enhancing their business to market.</p>
                            </div>
                            <!-- /.faq-block -->
                            <!-- faq-block -->
                            <div class="faq-qa-block">
                                <h4>What is the best service you can check ?</h4>
                                <p>The objective of this web application is to ensure easy accessibility of services such as event organizers, venue providers and floral providers to the people searching on online platforms.  </p>
                            </div>
                            <!-- /.faq-block -->
                        </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>

@endsection
