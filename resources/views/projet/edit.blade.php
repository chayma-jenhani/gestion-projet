@extends('layouts.menu')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gestion Des Projets
                <small>Gestion des projets</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li> <a href="/projet">Projets</a></li>
                <li class="active">Modifier Projet</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <!-- left column -->
                <div class="col-xs-12">
                    <!-- general form elements -->
                    <div class="box box-primary ">
                        <div class="box-header with-border">
                            <h3 class="box-title">Modifier Client</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                         <form role="form" action="/projet/{{$projet->id}}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label >Titre</label>
                                        <input type="text" class="form-control" name="titre" value="{{$projet->titre}}" placeholder="Enter titre">
                                        <label >Délai</label>
                                        <input type="date" class="form-control" value="{{$projet->delai}}" name="delai" >
                                        <label >File input</label>
                                        <input type="file" name="fichier">

                                        <label >Description</label>
                                        <textarea class="form-control" name="description" value="{{$projet->description}}" placeholder="Entrer la description du projet"></textarea>
                                        <label >Employés</label>
                                        <select multiple class="form-control select2" style="width: 100%;" name="employe[]">
                                            @foreach($emp as $value)
                                                <option>{{$value->nom}}</option>
                                            @endforeach

                                        </select>
                                        <label >Responsable</label>
                                        <select  class="form-control select2" style="width: 100%;"  name="reponsable">
                                            @foreach($emp as $value)
                                                <option>{{$value->nom}}</option>
                                            @endforeach

                                        </select>

                                        <br>
                                        <div class="box-footer">

                                            <input type="submit" class="btn btn-info " value="Modifier">
                                            <input type="reset" class="btn pull-right" value="Annuler">
                                        </div>




                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @endsection