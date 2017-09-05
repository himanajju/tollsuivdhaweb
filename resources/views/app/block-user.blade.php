@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Block User
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
                    <div class="box-body">
                        <form action="{{ url('do-block-user') }}" id="main" method="get" novalidate> 
                            <!-- text input -->
                            <div class="form-group" >
                                <label>Email Id</label>
                                <input type="text" class="form-control" name="email"  placeholder="Enter Email Id " >
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Block</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection