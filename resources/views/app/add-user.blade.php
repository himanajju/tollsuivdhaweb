@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add New User
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
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

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ url('add-user') }}" id="main" method="post" novalidate>
                            <!-- text input -->
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter email " >
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter password" >
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="confirmpassword" placeholder="Enter confirm password" >
                            </div>

                            <div class="form-group">
                                <label>Contact No.</label>
                                <input type="password" class="form-control" name="contactno" placeholder="Enter password" >
                            </div>

                            <!-- select -->
                            <div class="form-group">
                                <label>User Type</label>
                                <select class="form-control" name="usergroup">
                                    <?php if (session('userdata')[0]['usergroup'] === 'ADMINISTRATOR'){?>

                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                    <option value="3">Booth User</option>
                                    <option value="4">Manager</option><?php }elseif(session('userdata')[0]['usergroup'] === 'MANAGER' || session('userdata')[0]['usergroup'] === 'BOOTH_OPERATOR' ){?> <option value="3">Booth User</option> <?php } ?>
                                
                                </select>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection