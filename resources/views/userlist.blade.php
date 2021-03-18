<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dindy | users list</title>

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
<div class="wrapper" >

  @extends('layouts.app')

  @section('content')


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#FF4136;">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
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

    

      <!-- Sidebar Menu -->
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
      <!-- /.sidebar-menu -->
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
    <section class="content ">


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


      <!-- Default box -->
      <div class="card ">
        <div class="card-header ">
          <h3 class="card-title">Existing users
          <br/><br/>
          <a href="/exportuser" class="btn btn-primary">Telecharger </a>
          </h3>

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
                          #
                      </th>
                      <th style="width: 20%">
                          Name
                      </th>
                      <th style="width: 30%">
                          Email
                      </th>
                      <th>
                          Client type
                      </th>
                      <th style="width: 8%" class="text-center">
                          Is admin
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>

              <p hidden> {{ $i=0 }} </p>
              @foreach ($users as $user)
                 <tr>
                      <td>
                          #{{ ++$i }}
                      </td>
                      <td>
                          <a>
                          {{ $user->name }}
                          </a>
                          
                      </td>
                      <td>
                         
                          {{ $user->email }}
                      </td>
                      <td class="project_progress">
                          

                          {{ $user->clienttype }}
                      </td>
                      <td class="project-state">
                          @if ($user->is_admin == '1')
                           
                          <span class="badge badge-success">
                             Yes
                          </span>
                          @else
                          <span class="badge badge-danger">
                             No
                          </span>

                          @endif
                      </td>
                      <td class="project-actions text-right">

                      <form action="userlist/{{$user->id}}" method="POST">

                          <a class="btn btn-primary btn-sm" href="{{ route('userlist.show',$user->id) }}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{ route('userlist.edit',$user) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          @csrf
                           @method('DELETE')
                          <button class="btn btn-danger btn-sm"  type="submit">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </button>

                      </form>

                      </td>
                   </tr>


                  @endforeach

              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->








      <!--div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Files</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table">
            <thead>
              <tr>
                <th>File Name</th>
                <th>File Size</th>
                <th></th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>Functional-requirements.docx</td>
                <td>49.8005 kb</td>
                <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-info"><i class="fas fa-user-plus"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr><tr>
                <td>UAT.pdf</td>
                <td>28.4883 kb</td>
                <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-info"><i class="fas fa-user-plus"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr><tr>
                <td>Email-from-flatbal.mln</td>
                <td>57.9003 kb</td>
                <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-info"><i class="fas fa-user-plus"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr><tr>
                <td>Logo.png</td>
                <td>50.5190 kb</td>
                <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-info"><i class="fas fa-user-plus"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr><tr>
                <td>Contract-10_12_2014.docx</td>
                <td>44.9715 kb</td>
                <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-info"><i class="fas fa-user-plus"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  </div>
                </td>

            </tr></tbody>
          </table>
        </div>
      </div-->

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
