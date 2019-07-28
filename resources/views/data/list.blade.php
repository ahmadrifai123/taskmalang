@extends('template.master')



@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data

        </h1>

    </section>
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">List Post</h3>
                        <div class="box-tools pull-right">
                            <a href="{{ route('data.create')}}" class="btn btn-primary btn-sm btn-flat">

                                Add Data
                            </a>
                        </div>

                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Date</th>
                  <th>Tlp</th>
                  <th>Gender</th>
                  <th>Foto</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>



                  @foreach($data as $d)
                    
                  
                <tr>
                  <td>{{$d->nama}}</td>
                  <td>{{$d->email}}</td>
                  <td>{{$d->date}}</td>
                  <td>{{$d->telepon}}</td>
                  <td>{{$d->gender}}</td>
                  <td><img style="width: 100px;height: 100px;" src="{{ URL::asset('image/'.$d->foto) }}">
                  </td>
                  
                  <td class="text-center" style="width:150px;">
                      <form method="POST" action="{{route('data.destroy', $d->id)}}" accept-charset="UTF-8">
                      <a href="{{route('data.edit', $d->id)}}" class="btn btn-primary btn-sm btn-flat" >
                          Edit
                         </a>
                      <input name="_method" type="hidden" value="DELETE">
                      <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <input type="submit" class="btn btn-danger btn-sm btn-flat" onclick="return confirm('Anda yakin akan menghapus data ini?');" value="Hapus">

                      </form>
                  </td> 
                </tr>
               
             @endforeach
               
                </tbody>
                <tfoot>
                <tr>
                   <th>Nama</th>
                  <th>Email</th>
                  <th>Date</th>
                  <th>Tlp</th>
                  <th>Gender</th>
                  <th>Foto</th>
                  <th>Action</th>


                </tr>
                </tfoot>
              </table>
            </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<!-- jQuery 3 -->
<script src="{{asset('backend/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('backend/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection
