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
                <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li class="active">Projets</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Liste des projets</h3>

                            <a type="button" href="/projet/create" class="btn btn-primary pull-right " >
                                <div class="glyphicon glyphicon-plus"></div> Ajouter un Projet</a>
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
                                    <th>Date de modification</th>
                                    <th>Délai</th>
                                    <th>Devis</th>
                                    <th>Client</th>
                                    <th>Responsable</th>
                                    <th>Fichiers</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($tab as $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{$value->titre}}</td>
                                        <td>{{$value->description}}</td>
                                        <td>{{$value->created_at }}</td>
                                        <td>{{$value->updated_at }}</td>
                                        <td>{{$value->delai }}</td>

                                        <td>{{$value->devis->nom }}</td>
                                        <td>{{$value->client->nom }}</td>
                                        <td>{{$value->responsable_id}}
              </td>
               <td>
                                            <a   href="/projet/fichier/{{$value->id}}">cliquer ici
               
              </a></td>
                <td>   <form action="/projet/{{$value->id}}" method="post">
                                         <a href="{{url ('projet/'.$value->id.'/affiche')}}" class="btn-success 
                                        btn glyphicon glyphicon-eye-open" ></a>
                                        <a href="{{url ('projet/'.$value->id.'/edit')}}" class="btn-warning btn glyphicon glyphicon-pencil" ></a>
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