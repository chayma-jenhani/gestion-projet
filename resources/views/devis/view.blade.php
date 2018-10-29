@extends('layouts.menu')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gestion des Devis
                <small>Gestion des Devis</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li class="active">Devis</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Liste des Devis</h3>

                <a type="button" href="/devis/create" class="btn btn-primary pull-right " ><div class="glyphicon glyphicon-plus"></div> Ajouter Devis</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Client</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($tab as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{$value->nom }}</td>
                            <td>{{$value->client->nom }} {{$value->client->prenom}}</td>
                          
                                <td>

                                    <form action="/devis/{{$value->id}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                  <a href="{{url ('devis/'.$value->id.'/edit')}}" class="btn-warning btn glyphicon glyphicon-pencil" ></a>
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