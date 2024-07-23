@extends('layouts.header')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
     <!-- Main content -->
    <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
            <div class="card">               
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h3>Item Logs</h3>
                </div>
                <hr class="hr">
                <table id="example" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <!-- <th>No.</th> -->
                            <th>Item name</th>
                            <th>Count</th>
                            <th>Remaining</th>
                            <th>Action Done by:</th>
                            {{-- <th>Status</th> --}}
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($logs as $log)
                            <tr>
                                <!-- <td class="id">{{ $log->id }}</td> -->
                                <td>{{ $log->item_name }}</td>
                                <td>{{ $log->count }}</td>
                                <td>{{ $log->remaining }}</td>
                                <td>{{ $log->admin_name }}</td>
                                {{-- <td>
                                    @if ($log->status == 'Y')
                                        <span class='badge badge-success'>Successful</span>
                                    @else
                                        <span class='badge badge-danger'>Denied</span>
                                    @endif
                                </td> --}}
                                <td>{{ $log->created_at}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No Item Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
