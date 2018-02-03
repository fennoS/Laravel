@extends('layouts.master')

@section('content')
    <!-- Main content -->
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
                    <tr>
                        <td>Question</td>
                        <td>Answer</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->

@endsection