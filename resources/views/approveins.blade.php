
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dindy | approveuser</title>

<link rel="icon" href="dist/img/sabApps.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

@extends('layouts.app')

@section('content')



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#FF4136;">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="Dindy" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dindy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

 



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
            <a href="addUser" class="nav-link">
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
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">New  Incidents</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #Id
                      </th>
                      <th style="width: 20%">
                       Societe
                      </th>
                      <th style="width: 30%">
                      Motif
                      </th>
                      <th>
                      Commercial
                      </th>
                      <th style="width: 30%" class="text-center">
                      Prix de vente
                      </th>
                      <th style="wiDth: 20%">
                      dates
                      </th>
                      <th style="wiDth: 20%">
                      
                      </th>

                  </tr>
              </thead>
              <tbody>
    @foreach ($incidents as $incident)
                  <tr>
                    <td>
                         #{{ $incident->num_facture }}
                      </td>
                      <td>
                          <a>
                               {{ $incident->societe }} 
                          </a>
                          
                      </td>
                      <td>
                      {{ $incident->motif }}
                      </td>
                      <td class="project_progress">
                       {{ $incident->commercial }}
                      
                      </td>
                      <td class="project-state">
                    {{ $incident->prixvente }} 
                      </td>
                      <td style="wiDth: 20%">
                        {{ $incident->dates }}
                      </td>



                      <td class="project-actions text-right">
                      <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">


                    <form action="approveins/{{$incident->id}}" method="POST">


                   <a href="{{ route('approveins.edit',$incident) }}" style="background-color:green;" class="btn btn-info"><i class="fas fa-plus"></i></a>
                    <a href="{{ route('approveins.show',$incident->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                       @csrf
                           @method('DELETE')
                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                      </form>
                  </div>
                </td>
                      </td>
                  </tr>





      
                  @endforeach






              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->











    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0-rc
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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

@endsection
</body>
</html>
