<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TOLL SUVIDHA</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/font-awesome.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/ionicons.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ URL::asset('AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/skin-purple.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/cropper.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/dataTables.bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/jquery.tagsinput.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/datepicker3.css')}}">
        <!-- Auto Complete        -->
        <link rel="StyleSheet" href="{{ URL::asset('bootstrap/css/jquery-ui-1.9.2.custom.min.css')}}" type="text/css" media="all"/>
        <link rel="StyleSheet" href="{{ URL::asset('bootstrap/css/jquery.tagedit.css')}}" type="text/css" media="all"/>
        <!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
        <style type="text/css">
        img{
        border:0;
        }
        #main{
        margin: 15px auto;
        background:white;
        overflow: auto;
        width: 100%;
        }
        #header{
        background:white;
        margin-bottom:15px;
        }
        #mainbody{
        background: white;
        width:100%;
        display:none;
        }
        #v{
        width:320px;
        height:240px;
        }
        #qr-canvas{
        display:none;
        }
        #qrfile{
        width:320px;
        height:240px;
        }
        #mp1{
        text-align:center;
        font-size:35px;
        }
        #imghelp{
        position:relative;
        left:0px;
        top:-160px;
        z-index:100;
        font:18px arial,sans-serif;
        background:#f0f0f0;
        margin-left:35px;
        margin-right:35px;
        padding-top:10px;
        padding-bottom:10px;
        border-radius:20px;
        }
        .selector{
        margin:0;
        padding:0;
        cursor:pointer;
        margin-bottom:-5px;
        }
        #outdiv
        {
        width:320px;
        height:240px;
        border: solid;
        border-width: 3px 3px 3px 3px;
        }
        #result{
        border: solid;
        border-width: 1px 1px 1px 1px;
        padding:20px;
        width:70%;
        }

        ul{
        margin-bottom:0;
        margin-right:40px;
        }
        li{
        display:inline;
        padding-right: 0.5em;
        padding-left: 0.5em;
        font-weight: bold;
        border-right: 1px solid #333333;
        }
        li a{
        text-decoration: none;
        color: black;
        }
        .tsel{
        padding:0;
        }

        </style>
    </head>

