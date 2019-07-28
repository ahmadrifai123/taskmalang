@extends('template.master')


@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data
        <!-- <small>Preview</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/')}}">All Data</a></li>
        <li class="active">Create New Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <form role="form" class="form-horizontal" method="POST" action="{{route('data.update', $data->id)}}">
              <input name="_method" type="hidden" value="PATCH">

              {{ csrf_field() }}
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">New Post </h3>
            </div> -->
            <!-- /.box-header -->
            <!-- form start -->
           

              <div class="box-body">
                 <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="{{$data->nama}}">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="email" name="email" value="{{$data->nama}}">
                  </div>
                </div>

                     <div class="form-group">
                      <label class="col-sm-2 control-label">Date:</label>

                    <div class="col-sm-10">
                      
                      <input type="text" class="form-control " id="datepicker" value="{{$data->date}}">
                    </div>
                    <!-- /.input group -->
                  </div>

                 <div class="form-group">
                  <label for="tlp" class="col-sm-2 control-label">no telepon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tlp" placeholder="nama" name="tlp" value="{{$data->nama}}">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="gender" class="col-sm-2 control-label">Gender</label>

                  <div class="col-sm-10">

                   
                   <select class="form-control" style="width: 100%;" name="gender" id="gender" required="">
                                    <option value>Select a gender</option>

                                    @foreach(["male" => "Male","female" => "Female"] AS $gender_id => $gender_label )
                                     @php
                                    $selected = '';
                                    if ($gender_id == $data->gender) {
                                    $selected = 'selected="selected"';
                                    }
                                    @endphp
                                    <option value="{{$gender_id}}" {{$selected}}>{{$gender_label}}</option>
                                    @endforeach
                                </select>
                 
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">upload foto</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="foto" name="foto"  name="foto">

                  </div>
                </div>
               
               
               
                 
                
                 
              </div>
                 <div class="box-footer">
                            <a href="{{route('data.index')}}" type="button" class="btn btn-default ">Back</a>
                            <button type="submit" class="btn btn-info pull-right">Submit</button>
                        </div>
              <!-- /.box-body -->

            
           
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
        </form>
    </section>

    <!-- /.content -->
  </div>
  

<!-- jQuery 3 -->

<script src="{{ URL::asset('backend/bower_components/jquery/dist/jquery.min.js')}}"></script>

<!-- Select2 -->
<script src="{{ URL::asset('backend/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{ URL::asset('backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('backend/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('backend/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('backend/dist/js/demo.js')}}"></script>


<script type="text/javascript">
  
  $(function () {
     $('#gender').select2()

    

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
  });
   
   
  

</script>


    @endsection