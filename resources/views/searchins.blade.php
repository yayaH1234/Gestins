<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dindy | searchins</title>

<link rel="icon" href="dist/img/sabApps.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">


</head>

<body class="hold-transition sidebar-mini">
<nav>

@extends('layouts.app')

@section('content')
</nav>
<div class="wrapper">



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
            <h1>Advanced Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
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
            <div class="card card-primary">
              <div class="card-header" style="background-color:#2e8b57">
                <h3 class="card-title">declared incident</h3>
              </div>
            <div class="card-body">
            <form  method="post" action="searchinsl">
            @csrf
                <div class="form-group">
                    <label for="title">Numéro de facture</label>
                    <input type="text" class="form-control" id="" name="num_facture" placeholder="Numéro de facture...">
                </div>
                <div class="form-group">
                    <label for="Department">Motif</label>
                    <input type="text" class="form-control" id="" name="motif" placeholder="Motif...">
                </div>
                <div class="form-group">
                    <label for="Location">Societe</label>
                    <input type="text" class="form-control" id="" name="societe" placeholder="society....">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="" name="description" placeholder="Description..."></textarea>
                </div>
                <!-- Date -->
                <div class="form-group">
                  <label>Date occurence:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" name="dates" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                </div>
                <div class="form-group">
                    <label for="Location">Livreur</label>
                    <input type="text" class="form-control" id="" name="livreur" placeholder="Livreur....">
                </div>
                <div class="form-group">
                    <label for="Location">Decision</label>
                    <input type="text" class="form-control" id="" name="decision" placeholder="Decision....">
                </div>
                <div class="form-group">
                    <label for="Location">vendu a</label>
                    <input type="text" class="form-control" id="" name="vendu_a" placeholder="Vendue a....">
                </div>
                <div class="form-group">
                    <label for="Location">Client</label>
                    <input type="text" class="form-control" id="" name="client" placeholder="Client....">
                </div>
                <div class="form-group">
                    <label for="Location">Responsible service</label>
                    <!--input type="text" class="form-control" id="" name="service_resp" placeholder="Responsible service...."-->
                    <select style="text-align-last:center;" class="form-control" name="service_resp" id="role">
                                      <option value="">--Service responsable....--</option>
                                      <option value="resplogistique">Service logistique</option>
                                      <option value="respadv">Service ADV</option>
                                       <option value="respproduction">service production</option>
                                        <option value="respqualite">Service Qualité</option>
                                        <option value="commercial">Service commercial</option>
                                        <option value="resplogistique">Service comptabilité</option>
                                </select>
                </div>


               
                
                <div class="form-group">
                    <label for="Location">Réglementation du revente</label>
                    <input type="text" class="form-control" id="" name="regelement_revente" placeholder="Réglementation de la revente....">
                </div>
                <div class="form-group">
                    <label for="Location">Commercial</label>
                    <input type="text" class="form-control" id=""  name="commercial" placeholder="commercial....">
                </div>
                <div class="form-group">
                    <label for="Location">Prix de vente</label>
                    <input type="text" class="form-control" id="" name="prix_vente" placeholder="Prix de vente....">
                </div>

              </div>
                <!-- /.form group -->
                <!-- Date range -->
               
               
                <!-- /.form group -->
                <div class="">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
              <!-- /.card -->
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
       


      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  

















@if ($incidents ==  null)

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">


          @foreach ($incidents as $incident)
     
          @if (Auth::user()->clienttype == $incident->service_resp)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>{{ $incident->commercial }}</b></h2>
                      <p class="text-muted text-sm"><b>About: </b> {{ $incident->client }} </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Society: {{ $incident->societe }}</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> numFacture #: {{ $incident->num_facture }}</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="dist/img/user2-160x160.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">

                    @if(Auth::user()->clienttype == 'commercial')  
                     <a href="/viewdetcom/{{ $incident->id }}" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Voir les détails
                    </a> 
@else
     <a href="/viewdet/{{ $incident->id }}" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Voir les détails
                    </a>        
@endif
                  </div>
                </div>
              </div>
            </div>

            @endif



            @endforeach









          </div>
        </div>
        <!-- /.card-body -->
        <!--div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav>
        </div-->
        
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->


@endif









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
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

   
    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>

@endsection
</body>
</html>
