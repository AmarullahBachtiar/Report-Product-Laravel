@extends('layouts.main')
@section('content')
<!-- Main content -->
<div class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"> </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Brand</th>
            <th>Area Name</th>
            <th>Percentage</th>
          </tr>
        </thead>
        <tbody>

          @foreach($data as $d)
          <tr>
            <td>{{ $d->brand_name }}</td>
            <td>{{ $d->area_name }}</td>
            <td>{{ $d->persen }}</td>


          </tr>
          @endforeach
        </tbody>

      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
</div>
@endsection