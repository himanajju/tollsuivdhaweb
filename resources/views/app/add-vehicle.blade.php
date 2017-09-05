@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Toll Payment
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
                        <form action="{{ url('get-vehicle-details') }}" id="main" method="post" novalidate>
                            <!-- text input -->
                            <div class="col-md-6" style="padding:0px;">
                                <div id="vehicle" class="form-group" >
                                    <label>Vehicle No.</label>
                                    <input type="text" class="form-control" name="vehicleno" @if (session('vehicleDetails'))
                                           value = "{{ session('vehicleDetails')['data']['vehicle_no'] }}" readonly
                                           @endif placeholder="Enter Vehicle No" >
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-top:25px;">
                                <button type="submit" class="btn btn-primary">Get Details</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                        <form action="{{ url('toll-payment') }}" id="main" method="post" novalidate>
                            <input type="hidden" name="vehicleno" @if (session('vehicleDetails'))
                                   value = "{{ session('vehicleDetails')['data']['vehicle_no'] }}" readonly
                                   @endif>
                            <div class="col-md-6" style="padding:0px;">
                                <div class="form-group">
                                    <label>Vehicle Type</label>
                                    <select class="form-control">
                                        @if (session('vehicleDetails'))
                                        <option value="{{session('vehicleDetails')['data']['vehicle_type']}}" >{{ session('vehicleDetails')['data']['vehicle_type'] }}</option> 
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" style="">
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input type="text" class="form-control" name="amount"  @if (session('vehicleDetails'))
                                           value = "{{ session('vehicleDetails')['data']['amount'] }}" readonly
                                @endif placeholder="Enter Amount" >
                                </div>
                            </div>
                            <script type="text/javascript" src="{{ URL::asset('bootstrap/js/qrreader/llqrcode.js') }}"></script>
                            <script type="text/javascript" src="{{ URL::asset('bootstrap/js/qrreader/plusone.js') }}"></script>
                            <script type="text/javascript" src="{{ URL::asset('bootstrap/js/qrreader/webqr.js') }}"></script>
                        
                            <div id="main">                        
                                <div id="mainbody">
                                    <table class="tsel" border="0" width="100%">
                                        <tr>
                                            <td valign="top" align="center" width="50%">
                                                <table class="tsel" border="0">
                                                    <tr>
                                                        <td><img class="selector" id="webcamimg" src="https://webqr.com/vid.png" onclick="setwebcam()" align="left" /></td>
                                                        <td><img class="selector" id="qrimg" src="https://webqr.com/cam.png" onclick="setimg()" align="right"/></td></tr>
                                                    <tr><td colspan="2" align="center">
                                                        <div id="outdiv">
                                                        </div></td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr><td colspan="3" align="center">
                                            <img src="https://webqr.com/down.png"/>
                                            </td></tr>
                                        <tr><td colspan="3" align="center">
                                            <input id="result" name="qrcode" value="" />
                                            </td></tr>
                                    </table>
                                </div>&nbsp;
                            </div>
                            <canvas id="qr-canvas" width="800" height="600"></canvas>
                            <script type="text/javascript">load();</script>

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