@extends('layouts.admin')

<!-- main header section -->
@section('main-content-header')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Dashboard</h3>
        </div>
        <div class="box-body">
            <a href="{{ url('#') }}" class="btn btn-success">New</a>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection
<!-- /main header section -->

<!-- main section -->
@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Sales</h3>
                </div>
                <!-- /.box-header -->
                <div style="overflow: auto" class="box-body">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Location</th>
                            <th>View</th>
                            <th>Status</th>
                            <th>Options</th>

                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>1001</td>
                            <td>Beautiful Sri Lanaka</td>
                            <td>Village View</td>
                            <td>Kandy, Hathkorale</td>
                            <td>1000</td>
                            <td>Publish</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger">view</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1001</td>
                            <td>Beautiful Sri Lanaka</td>
                            <td>Village View</td>
                            <td>Kandy, Hathkorale</td>
                            <td>1000</td>
                            <td>Publish</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger">view</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1001</td>
                            <td>Beautiful Sri Lanaka</td>
                            <td>Village View</td>
                            <td>Kandy, Hathkorale</td>
                            <td>1000</td>
                            <td>Publish</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger">view</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1001</td>
                            <td>Beautiful Sri Lanaka</td>
                            <td>Village View</td>
                            <td>Kandy, Hathkorale</td>
                            <td>1000</td>
                            <td>Publish</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger">view</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1001</td>
                            <td>Beautiful Sri Lanaka</td>
                            <td>Village View</td>
                            <td>Kandy, Hathkorale</td>
                            <td>1000</td>
                            <td>Publish</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger">view</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1001</td>
                            <td>Beautiful Sri Lanaka</td>
                            <td>Village View</td>
                            <td>Kandy, Hathkorale</td>
                            <td>1000</td>
                            <td>Publish</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger">view</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1001</td>
                            <td>Beautiful Sri Lanaka</td>
                            <td>Village View</td>
                            <td>Kandy, Hathkorale</td>
                            <td>1000</td>
                            <td>Publish</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger">view</a>
                            </td>
                        </tr>



                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

@endsection
<!-- /main section -->