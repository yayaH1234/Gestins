<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dindy | user profil page</title>

<link rel="icon" href="dist/img/sabApps.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">





@extends('layouts.app')

@section('content')

<br/>
<br/>
<br/>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#FF4136;">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="Dindy" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dindy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>






      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if ( Auth::user()->clienttype != 'respadv')
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Users management
                
              </p>
            </a>
           
          </li>
          @endif
          <li class="nav-item">
            <a href="inslist" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Incidents management
                
              </p>
            </a>
           
          </li>
           
            <li class="nav-item">
            <a href="searchins" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Incidents search
                
              </p>
            </a>
           
          </li>
           <li class="nav-item">
            <a href="addUser" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Add user
                
              </p>
            </a>
           
          </li>
            <li class="nav-item">
            <a href="approveins" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Approver des incidents
                
              </p>
            </a>
           
          </li>

          
        </ul>
      </nav>




    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image: url('dist/img/dindy2.jpg');">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $user->name }}</h3>

                <p class="text-muted text-center">{{ $user->clienttype }}</p>

                <!--ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul-->

                <button onclick="goBack()" class="btn btn-primary btn-block"><b>Go Back</b></button>
                
                            <script>
                            function goBack() {
                            window.history.back();
                            }
                            </script>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Email</strong>

                <p class="text-muted">
                {{ $user->email }}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> type client </strong>
                <p class="text-muted"> {{ $user->clienttype }}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Est administrateur?</strong>

                <p class="text-muted">
                
                @if ($user->is_admin == '1')
                           
                           <span class="badge badge-success">
                              True
                           </span>
                           @else
                           <span class="badge badge-danger">
                              False
                           </span>
 
                           @endif
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Password</strong>

                <p class="text-muted">{{ $user->password  }}</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>




        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; {{ date('Y') }} <a href=""><img src="dist/img/sabApps.png" width="50px" height="40px" /> sabApps</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
@endsection
</body>
</html>