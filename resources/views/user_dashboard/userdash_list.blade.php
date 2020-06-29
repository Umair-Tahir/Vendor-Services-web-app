@extends('user_dashboard.userdash_master')

@section('title')
    - Dashboard
@endsection

@section('content')

<div class="dashboard-content">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="dashboard-page-header">
                    <h3 class="dashboard-page-title">My To Do List</h3>
                    <p>Create and manage your wedding planning checklist. Its ultimate and real simple.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-xl-8 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 text-right mb20">
                <div id="slide-panel" class="slide-panel-light" style="position: fixed; width: 275px; transition: all 450ms ease 0s; height: 100%; top: 0px; right: -275px; z-index: 1049;">
                    <h3>Create Task</h3>
                    <form autocomplete="off">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="form-group">
                                    <label class="control-label" for="tasktitle">Task Title</label>
                                    <input id="tasktitle" name="tasktitle" type="text" placeholder="Write task here" class="form-control " required="">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="control-label" for="taskdate">Task Date</label>
                                    <input id="taskdate" name="taskdate" type="text" placeholder="Task Date" class="form-control  hasDatepicker" required="">
                                    <div class="venue-form-calendar"><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Submit to do </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <a href="#" class="btn btn-default" id="trigger">Add New Task</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card card-summary">
                    <div class="card-body">
                        <div class="float-left">
                            <div class="summary-count">80</div>
                            <p>Completed Task</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card card-summary">
                    <div class="card-body">
                        <div class="float-left">
                            <div class="summary-count">20</div>
                            <p>Due Task </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card card-summary">
                    <div class="card-body">
                        <div class="float-left">
                            <div class="summary-count">20</div>
                            <p>Pending </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card card-summary">
                    <div class="card-body">
                        <div class="float-left">
                            <div class="summary-count">120</div>
                            <p>Total Task </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- accordions -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div id="accordion" class="todo">
                    <!-- accordion-card -->
                    <div class="accordion-card card">
                        <div class="accordion-card-header" id="headingOne">
                            <h5 class="mb-0">
                            <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         Janurary (9)<span class="fas fa-plus float-right"></span></a></h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <!-- to do header -->
                                <div class="todo-thead">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                            <div class=" ">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckAll">
                                                    <label class="custom-control-label" for="customCheckAll">
                                                        All
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <span class=" ">Task Date</span>
                                        </div>
                                        <div class="col-xl-2">
                                            <span class=" "> Status </span>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                            Action
                                        </div>
                                    </div>
                                </div>
                                <!-- /.to do header -->
                                <div class="todo-list">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class="todo-list-content">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1">
                                                                Nulla efficitur quam consectetur pretium semper.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="todo-date">03 January 2019</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    <div class="todo-list-btn">
                                                        <a href="#" class="btn btn-outline-violate btn-xs">edit</a>
                                                        <a href="# " class="btn btn-outline-pink btn-xs">delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class="todo-list-content">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                            <label class="custom-control-label" for="customCheck2">
                                                                Orci varius natoque penatibus et magnius.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="todo-date">03 January 2019</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="to-do-status"><span class="badge badge-danger">Due</span></span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    <div class="todo-list-btn">
                                                        <a href="#" class="btn btn-outline-violate btn-xs">edit</a>
                                                        <a href="# " class="btn btn-outline-pink btn-xs">delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class="todo-list-content">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                            <label class="custom-control-label" for="customCheck3">
                                                                Vivamus congue ipsum vitae nisi tincidunt, in semper velit finibus.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="todo-date">03 January 2019</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    <div class="todo-list-btn">
                                                        <a href="#" class="btn btn-outline-violate btn-xs">edit</a>
                                                        <a href="# " class="btn btn-outline-pink btn-xs">delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class="todo-list-content">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                            <label class="custom-control-label" for="customCheck11">
                                                                Nam consequat dui vitae ultrices scelerisque.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="todo-date">03 January 2019</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    <div class="todo-list-btn">
                                                        <a href="#" class="btn btn-outline-violate btn-xs">edit</a>
                                                        <a href="# " class="btn btn-outline-pink btn-xs">delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class="todo-list-content">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                            <label class="custom-control-label" for="customCheck12">
                                                                Cras auctor, nunc vel consectetur luctus.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="todo-date">03 January 2019</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    <div class="todo-list-btn">
                                                        <a href="#" class="btn btn-outline-violate btn-xs">edit</a>
                                                        <a href="# " class="btn btn-outline-pink btn-xs">delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.accordion-card -->
                    <!-- accordion-card -->
                    <div class="accordion-card card">
                        <div class="accordion-card-header" id="headingTwo">
                            <h5 class="mb-0">
                            <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            February <span class="fas fa-plus float-right"></span>
                            </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <!-- to do header -->
                                <div class="todo-thead">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                            <div class=" ">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckAll2">
                                                    <label class="custom-control-label" for="customCheckAll2">
                                                        All
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <span class=" ">Task Date</span>
                                        </div>
                                        <div class="col-xl-2">
                                            <span class=" "> Status </span>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                            Action
                                        </div>
                                    </div>
                                </div>
                                <!-- /.to do header -->
                                <div class="todo-list">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class="todo-list-content">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                            <label class="custom-control-label" for="customCheck4">
                                                                Praesent elementum urna at nisl convallis placerat.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="todo-date">03 January 2019</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    <div class="todo-list-btn">
                                                        <a href="#" class="btn btn-outline-violate btn-xs">edit</a>
                                                        <a href="# " class="btn btn-outline-pink btn-xs">delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class="todo-list-content">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                            <label class="custom-control-label" for="customCheck5">
                                                                Vestibulum quis nulla pretium lectus faucibus aliquam.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="todo-date">03 January 2019</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="to-do-status"><span class="badge badge-danger">Due</span></span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    <div class="todo-list-btn">
                                                        <a href="#" class="btn btn-outline-violate btn-xs">edit</a>
                                                        <a href="# " class="btn btn-outline-pink btn-xs">delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class="todo-list-content">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                            <label class="custom-control-label" for="customCheck6">
                                                                Orci varius natoque penatibus et magnius.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="todo-date">03 January 2019</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    <div class="todo-list-btn">
                                                        <a href="#" class="btn btn-outline-violate btn-xs">edit</a>
                                                        <a href="# " class="btn btn-outline-pink btn-xs">delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.accordion-card -->
                    <!-- accordion-card -->
                    <div class="accordion-card card">
                        <div class="accordion-card-header" id="headingThree">
                            <h5 class="mb-0">
           <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         March <span class="fas fa-plus float-right"></span>
               </a>
                     </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <!-- to do header -->
                                <div class="todo-thead">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                            <div class=" ">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckAll3">
                                                    <label class="custom-control-label" for="customCheckAll3">
                                                        All
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <span class=" ">Task Date</span>
                                        </div>
                                        <div class="col-xl-2">
                                            <span class=" "> Status </span>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                            Action
                                        </div>
                                    </div>
                                </div>
                                <!-- /.to do header -->
                                <div class="todo-list">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class="todo-list-content">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                            <label class="custom-control-label" for="customCheck7">
                                                                Pellentesque a massa id nibh pretium porta.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="todo-date">03 January 2019</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    <div class="todo-list-btn">
                                                        <a href="#" class="btn btn-outline-violate btn-xs">edit</a>
                                                        <a href="# " class="btn btn-outline-pink btn-xs">delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class="todo-list-content">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                            <label class="custom-control-label" for="customCheck8">
                                                                Praesent suscipit massa ut velit suscipit fringilla.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="todo-date">03 January 2019</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="to-do-status"><span class="badge badge-danger">Due</span></span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    <div class="todo-list-btn">
                                                        <a href="#" class="btn btn-outline-violate btn-xs">edit</a>
                                                        <a href="# " class="btn btn-outline-pink btn-xs">delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class="todo-list-content">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                            <label class="custom-control-label" for="customCheck9">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="todo-date">03 January 2019</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    <div class="todo-list-btn">
                                                        <a href="#" class="btn btn-outline-violate btn-xs">edit</a>
                                                        <a href="# " class="btn btn-outline-pink btn-xs">delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/. accordion-card -->
                </div>
            </div>
        </div>
        <!-- /.accordions -->
    </div>
</div>


    @endsection