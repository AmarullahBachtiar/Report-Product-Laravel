@extends('layouts.main')
@section('content')
<!-- Main content -->
<div class="content">
  <div class="card">
    <div class="card-header">
      <form action="/report/cari" method="GET">
        <div class="col">
          <select name="area_id" id="area_id">
            <option disabled value>Area</option>
            <option name="cari" value="">pillih area</option>
            @foreach ($filter as $key => $value)
            <option value="{{ $key }}" {{ ( $key == 0) ? 'selected' : '' }}>
              {{ $value }}
            </option>

            @endforeach

          </select>
          <input type="submit" value="VIEW">
        </div>
      </form>
    </div>
  </div>
  <div class="card">
    <div class="card-header border-0">
      <div class="d-flex justify-content-between">
        <h3 class="card-title">Sales</h3>
        <a href="javascript:void(0);">View Report</a>
      </div>
    </div>
    <div class="card-body">
      <div class="d-flex">
        <p class="d-flex flex-column">
          <span class="text-bold text-lg">$18,230.00</span>
          <span>Sales Over Time</span>
        </p>
        <p class="ml-auto d-flex flex-column text-right">
          <span class="text-success">
            <i class="fas fa-arrow-up"></i> 33.1%
          </span>
          <span class="text-muted">Since last month</span>
        </p>
      </div>
      <!-- /.d-flex -->



      <div class="d-flex flex-row justify-content-end">
        <span class="mr-2">
          <i class="fas fa-square text-primary"></i> This year
        </span>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with minimal features & hover style</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Report ID</th>
            <th>Store</th>
            <th>Product</th>
            <th>compliance</th>
            <th>Tanggal</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          @foreach($data as $d)
          <tr>
            <td>{{$no++ }}</td>
            <td>{{ $d->report_id }}</td>
            <td>{{ $d->store->store_name }}</td>
            <td>{{$d->product->product_name }}</td>
            <td>{{$d->compliance }}</td>
            <td>{{$d->tanggal}}</td>

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