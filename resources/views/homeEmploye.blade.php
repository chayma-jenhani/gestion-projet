@extends('layouts.menu')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
        Tableau de bord
        <small>Tableau de bord</small>
      </h1>
            <ol class="breadcrumb">
                <li class="active"><a href="/home"><i class="fa fa-dashboard"></i>Accueil</a></li>
             
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Date création</th>
                        <th>Date Modification</th>
                        <th>Deadline</th>
                        <th>Employé</th>
                        <th>Statut</th>
                        <th>Priorité</th>
                        <th>Projet</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($tab as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{$value->titre }}</td>
                            <td>{{$value->description }}</td>
                            <td>{{$value->created_at }}</td>
                            <td>{{$value->updated_at }}</td>
                            <td>{{$value->deadline}}</td>
                            <td>{{$value->employe->nom}}</td>
                            <td>{{$value->statut }}</td>
                            <td>{{$value->priorite}}</td>
                            <td>{{$value->projet->nom}}</td>

                              
                        </tr>
                        @endforeach

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