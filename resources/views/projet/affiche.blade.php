@extends('layouts.menu')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gestion des Projets
                <small>Gestion des projets</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/home"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li >Projets</li>
                <li class="active">Tâches</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"></h3>

                            <a type="button" href="/tache/create/{{$idprojet}}" class="btn btn-primary pull-right " >
                                <div class="glyphicon glyphicon-plus"></div> Ajouter une Tâche</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Date d'ajout</th>
                                    <th>Deadline</th>
                                    <th>Statut</th>
                                    <th>Priorité</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($tache as $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{$value->titre}}</td>
                                        <td>{{$value->description}}</td>
                                        <td>{{$value->dateAjout }}</td>

                                        <td>{{$value->deadline }}</td>

                                        <td>{{$value->statut }}</td>
                                        <td>{{$value->priorite }}</td>


                                     <td> <form action="/tache/{{$value->id}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                  <a href="{{url ('tache/'.$value->id.'/edit')}}" class="btn-warning btn glyphicon glyphicon-pencil" ></a>
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                     
                             <button type="submit" class="btn-danger btn glyphicon glyphicon-trash"></button></form> </td>
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