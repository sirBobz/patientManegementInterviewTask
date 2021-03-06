@extends('Admin.backLayout.app')


@section('title')

Dashboard

@stop

@section('style')

@stop
@section('content')

<div class="row tile_count">
 <div class="row">
  <section class="content-header pull-right">
  <ol class="breadcrumb">
    <li><a href="{{ url('return-view/admin-dashboard') }}"><i class="fa fa-dashboard"> Dashboard </i>  </a></li>
  </ol>
  <br>
</section>  
</div>
<!-- Main content -->
<section class="content">
    <div class="box-header with-border">

      <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-2x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$users}}</div>
                                    <div>Users </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('return-view/list-subscribers') }}">
                            <div class="panel-footer">
                                <span style="color:purple" class="pull-left">View Details</span>
                                <span style="color:purple" class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-2x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$patients}} </div>
                                    <div>No of Patients</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('return-view/messages-inbound') }}">
                            <div class="panel-footer">
                                <span style="color:purple" class="pull-left">View Details</span>
                                <span style="color:purple" class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                 <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-2x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$deleted_patients}}</div>
                                    <div>Deleted Patients</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('return-view/list-Content') }}">
                            <div class="panel-footer">
                                <span style="color:purple" class="pull-left">View Details</span>
                                <span style="color:purple" class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                <!-- /.info-box -->
            </div>

                        <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                 <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-send fa-2x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$last_date}} </div>
                                    <div> Last Join Date</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('return-view/all-users') }}">
                            <div class="panel-footer">
                                <span style="color:purple" class="pull-left">View Details</span>
                                <span style="color:purple" class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                <!-- /.info-box -->
            </div>

        </div>
       <div class="row"> 
       <hr>
       </div>
      
  </div>
</section>    
</div>
@endsection

@section('scripts')

       
@endsection