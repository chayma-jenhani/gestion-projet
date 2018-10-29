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
                <li class="active"><a href="/projet">Projets</a></li>
                
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
                            <h3 class="box-title">Nouveau Projet</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="/projet" method="POST"  enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                         <div class=" form-group {{ $errors->has('titre') ? 'has-error' : '' }} ">
                                            <label >Titre</label>

                                            <input type="text" class="form-control" name="titre" value="{{ Request::old('titre') }}" placeholder="Enter titre">
                                            @if( $errors->has('titre'))
                                                <span class="help-block"> {{$errors->first('titre')}}</span>
                                            @endif
                                        </div>
                                         <div class=" form-group {{ $errors->has('delai') ? 'has-error' : '' }} ">
                                        <label >Délai</label>
                                        <input type="date" class="form-control" name="delai" >
                                        @if( $errors->has('delai'))
                                                <span class="help-block"> {{$errors->first('delai')}}</span>
                                            @endif
                                        </div>
                                        <label >Fichiers</label>
                                        <input type="file" name="fichiers" multiple>

                                        <label >Description</label>
                                        <textarea class="form-control" name="description" placeholder="Entrer la description du projet"></textarea>

                                          <label >Client</label>
                                    <select  class="form-control select2"  name="client">
                                        @foreach ($cl as $value)
                                                <option>{{$value->nom}}
                                                </option>
                                            @endforeach

                                        </select>
                                        <label >Employés</label>
                             <select multiple class="form-control select2"  name="employes">
                                     @foreach($emp as $value)
                                  <option>{{$value->nom}}</option>
                                                @endforeach

                            </select>
                            <label >Categories</label>
                              <select multiple class="form-control select2"  name="categories">
                                     @foreach($cat as $value)
                                  <option>{{$value->nom}}</option>
                                                @endforeach

                            </select>
                                        <label >Responsable</label>
                                    <select  class="form-control select2"  name="responsable">
                                            @foreach($emp as $value)
                                                <option>{{$value->nom}}</option>
                                            @endforeach

                                        </select>
                                      
                                        <label >Devis</label>
                                    <select  class="form-control select2"  name="devis">
                                            @foreach($devis as $value)
                                                <option>{{$value->nom}}</option>
                                            @endforeach

                                        </select>
                                        
                                        <br>
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