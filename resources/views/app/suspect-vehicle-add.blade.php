@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Suspected Vehicle
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <form action="{{ url('add-suspected-vehicle') }}" id="main" method="post" novalidate>
                            <!-- text input -->
                            <div class="col-md-12" style="padding:0px;">
                                <div class="form-group" >
                                    <label>Vehicle No.</label>
                                    <input type="text" class="form-control" name="vehicleno" placeholder="Enter Vehicle No" >
                                </div>
                            </div>
                            <div class="col-md-12" style="padding:0px;">
                                <div class="form-group" >
                                    <label>Remarks</label>
                                    <input type="text" class="form-control" name="remarks" placeholder="Enter Remarks" >
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-top:25px;">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection