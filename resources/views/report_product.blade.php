@extends('layouts.main')
@section('content')
<!-- Main content -->
<div class="content">

    <div class="card">
        <div class="card-header">
            <div class="row mt-4">
                <div class="col">
                    <form action="/cari" class="form-inline" method="get">
                        <select name="cari" class="form-control ml-3" id="area_id">
                            <option disabled value>Area</option>
                            <option>pillih area</option>
                            @foreach ($filter as $key => $value)
                            <option name="cari" value="{{ $key }}">
                                {{ $value }}
                            </option>
                            @endforeach
                        </select>
                        <label for="" class=" ml-3">From :</label>
                        <input type="date" class="form-control ml-1 " name="start_date">
                        <label for="" class=" m-2">To :</label>
                        <input type="date" class="form-control" name="end_date">
                        <button type="submit" class=" btn btn-info ml-3">view</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Chart</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div style="width: 1000px;height: 500px">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Tabel</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Brand</th>
                        @foreach ($labels as $a)
                        <th>{{ $a }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>



                    <tr>
                        @foreach($brand as $d)

                        <td>{{$d->brand_name}}</td>
                        @endforeach
                        @foreach($data as $d)

                        <td>{{$d->persen}}</td>
                        @endforeach

                    </tr>

                    <tr>


                        @foreach($brand2 as $br)

                        <td>{{$br->brand_name}}</td>
                        @endforeach
                        @foreach($data2 as $b)
                        <td>{{$b->persen}}</td>

                        @endforeach


                    </tr>

                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
</div>

@endsection