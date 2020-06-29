<div id="return-message" class="container">
<div class="row"> <!--Change-->
    <div class="col-sm-4"></div> <!--Change-->
    <div class="col-md-4"> <!--Change-->
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif

        @if(session('success'))
            <div class="alert alert-success animated fadeIn">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger animated fadeIn">
                {{session('error')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
    </div>
    <div class="col-sm-4"></div> <!--Change-->
</div> <!--Change-->
</div>
