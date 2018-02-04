@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Alle beschikbare stageplaatsen</h3>
            </div>
            <div class="box-body">
                <table id="onlineTrainersTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Bedrijf</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>UNIQUE</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Bekijken</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
@endsection