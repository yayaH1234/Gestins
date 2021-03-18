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
               Ajouter des incidents
                
              </p>
            </a>
             <a href="/listinsforcommercial" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Afficher les incidents
                
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
  <div class="content-wrapper" style="background-image: url('/dist/img/dindy2.jpg');">
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

                <button onclick="goBack()" class="btn btn-primary btn-block" style="background-color:#2e8b57"><b>Go Back</b></button>
                
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
              <div class="card-header" style="background-color:#2e8b57">
                <h3 class="card-title">Incident Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
              <strong><!--i class="fas fa-book mr-1"></i--> <i class="fas fa-id-card"></i> Id</strong>

                <p class="text-muted">
                {{ $incident->id }}
                </p>

                <hr>
                
                
                
                
                <strong><!--i class="fas fa-book mr-1"></i--> <i class="fas fa-list-ol"></i> Numéro de facture</strong>

                <p class="text-muted">
                {{ $incident->num_facture }}
                </p>

                <hr>

                <strong> <i class="far fa-user"></i> Motif</strong>
                <p class="text-muted"> 
                {{ $incident->motif }} </p>

                <hr>

                <strong><!--i class="fas fa-pencil-alt mr-1"></i--> <i class="fas fa-building"></i> Societe</strong>

                <p class="text-muted">
                {{ $incident->societe }}
                </p>

                <hr>

                <strong><!--i class="far fa-file-alt mr-1"></i--><i class="fas fa-info-circle"></i> Description</strong>

                <p class="text-muted">{{ $incident->description }}</p>
                                <hr>
                <strong><!--i class="far fa-file-alt mr-1"></i--><i class="fas fa-calendar-week"></i> Dates</strong>

                <p class="text-muted">{{ $incident->dates }} </p>
            

                <hr>
              <strong><!--i class="fas fa-pencil-alt mr-1"></i--> <i class="fas fa-male"></i> Livreur</strong>

                <p class="text-muted">
                {{ $incident->livreur }}
                </p>

                <hr>


                <strong><!--i class="fas fa-pencil-alt mr-1"></i--><i class="fas fa-landmark"></i> Decision</strong>

                <p class="text-muted">
                {{ $incident->decision }}
                </p>

                <hr>


                <strong><!--i class="fas fa-pencil-alt mr-1"></i--><i class="fas fa-user-friends"></i> vendue a</strong>

                <p class="text-muted">
                {{ $incident->vendu_a }}
                </p>

                <hr>


                <strong><!--i class="fas fa-pencil-alt mr-1"></i--><i class="fas fa-user-tie"></i> Client</strong>

                <p class="text-muted">
                {{ $incident->client }}
                </p>

                <hr>


                <strong><!--i class="fas fa-pencil-alt mr-1"></i--><i class="fas fa-user-md"></i> Service responsable</strong>

                <p class="text-muted">
                {{ $incident->service_resp }}
                </p>

                <hr>


                <strong><!--i class="fas fa-pencil-alt mr-1"></i--><i class="fas fa-balance-scale-right"></i> Réglementation de la revente</strong>

                <p class="text-muted">
                {{ $incident->regelement_revente }}
                </p>

                <hr>


                <strong><!--i class="fas fa-pencil-alt mr-1"></i--><i class="fas fa-user-tag"></i> Commercial</strong>

                <p class="text-muted">
                {{ $incident->commercial }}
                </p>

                <hr>

                  <strong><!--i class="fas fa-pencil-alt mr-1"></i--><i class="fas fa-hand-holding-usd"></i> Prix de vente</strong>

                  <p class="text-muted">
                  {{ $incident->prixvente }}
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