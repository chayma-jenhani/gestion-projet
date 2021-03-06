
@extends('layouts.menu')
@section('content')
 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
        <section class="content-header">
            <h1>
                Gestion Des Catégories
                <small>Gestion des catégories</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li ><a href="/categorie">Categorie</a></li>
                <li class="active">Ajout Catégorie</li>
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
                            <h3 class="box-title">Nouvelle Catégorie</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form  role="form" action="/categorie" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <div class=" form-group {{ $errors->has('nom') ? 'has-error' : '' }} ">
                                        <label >Nom</label>

                                        <input type="text" class="form-control" name="nom" value="{{ Request::old('nom') }}" placeholder="Enter nom">
                                            @if( $errors->has('nom'))
                                                <span class="help-block"> {{$errors->first('nom')}}</span>
                                                @endif
                                        </div>
                                        
                                        <label >statut</label>
                                        <input type="text" class="form-control" name="statut" placeholder="Entrer statut" >
                                      


                                        <label >Description</label>
                                        <textarea class="form-control" name="description" placeholder="Entrer la description de catégorie"></textarea>

                                        <div class="box-footer">

                                        <input type="submit" class="btn btn-info " value="Ajouter">
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