@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Answers from</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All handed in Assigments.</h3>
                    </div>
                    <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered table-striped overviews">
                                <thead>
                                <tr>
                                    <th class="no-sort">Question</th>
                                    <th class="no-sort">Answer</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                        </div>
                        <hr>
                        <div class="box-body">
                            <table class="table table-bordered table-striped overviews">
                                <tbody>
                                <tr>

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
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@extends('layouts.footer')

