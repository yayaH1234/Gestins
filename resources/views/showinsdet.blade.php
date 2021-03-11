<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dindy | show ins page</title>

<link rel="icon" href="{{ asset('dist/img/sabApps.png') }}">

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
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
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
   <!--nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Users management
                
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="inslist" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Incidents management
                
              </p>
            </a>
           
          </li>

          
        </ul>
      </nav-->

      @if (Auth::user()->clienttype == 'commercial')
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/homeC" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
        </ul>
      </nav>
      @elseif (Auth::user()->is_admin == 1)
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Users management
                
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="inslist" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Incidents management
                
              </p>
            </a>
           
          </li>

          
        </ul>
      </nav>
      @else
    
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/homeM" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                List incidents
                
              </p>
            </a>
          </li>
        </ul>
      </nav>


      @endif








      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Details incident</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Incident details</li>
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
                       src="../../dist/img/user2-160x160.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $incident->client }}</h3>

                <p class="text-muted text-center">{{ $incident->id }}</p>

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
                <h3 class="card-title">Incident Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
              <strong><i class="fas fa-book mr-1"></i> Id</strong>

                <p class="text-muted">
                {{ $incident->id }}
                </p>

                <hr>
                
                
                
                
                <strong><i class="fas fa-book mr-1"></i> Invoice number</strong>

                <p class="text-muted">
                {{ $incident->num_facture }}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Pattern</strong>
                <p class="text-muted"> 
                {{ $incident->motif }} </p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Society</strong>

                <p class="text-muted">
                {{ $incident->societe }}
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Description</strong>

                <p class="text-muted">{{ $incident->description }}</p>
                                <hr>
                <strong><i class="far fa-file-alt mr-1"></i> Dates</strong>

                <p class="text-muted">{{ $incident->dates }} </p>
            

                <hr>
              <strong><i class="fas fa-pencil-alt mr-1"></i> Delivery man</strong>

                <p class="text-muted">
                {{ $incident->livreur }}
                </p>

                <hr>


                <strong><i class="fas fa-pencil-alt mr-1"></i> Decision</strong>

                <p class="text-muted">
                {{ $incident->decision }}
                </p>

                <hr>


                <strong><i class="fas fa-pencil-alt mr-1"></i> Sold to</strong>

                <p class="text-muted">
                {{ $incident->vendu_a }}
                </p>

                <hr>


                <strong><i class="fas fa-pencil-alt mr-1"></i> Client</strong>

                <p class="text-muted">
                {{ $incident->client }}
                </p>

                <hr>


                <strong><i class="fas fa-pencil-alt mr-1"></i> Responsible service</strong>

                <p class="text-muted">
                {{ $incident->service_resp }}
                </p>

                <hr>


                <strong><i class="fas fa-pencil-alt mr-1"></i> Resale regulation</strong>

                <p class="text-muted">
                {{ $incident->regelement_revente }}
                </p>

                <hr>


                <strong><i class="fas fa-pencil-alt mr-1"></i> Commercial</strong>

                <p class="text-muted">
                {{ $incident->commercial }}
                </p>

                <hr>

                  <strong><i class="fas fa-pencil-alt mr-1"></i> Sell price</strong>

                  <p class="text-muted">
                  {{ $incident->prix_vente }}
                  </p>

                  <hr>


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
    <strong>Copyright &copy; {{ date('Y') }} <a href=""><img src="{{ asset('dist/img/sabApps.png') }}" width="50px" height="40px" /> sabApps</a>.</strong> All rights reserved.
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