<@extends('layouts.menu')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gestion Des Clients
                <small>Gestion des clients</small>
            </h1>
            <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li> <a href="/client">Clients</a></li>
                <li class="active">Modifier Client</li>
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
                        <form role="form" action="/client/{{$cl->id}}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <div class=" form-group {{ $errors->has('nom') ? 'has-error' : '' }} ">
                                            <label >Nom</label>

                                            <input type="text" class="form-control" name="nom" value="{{ $cl->nom }}" placeholder="Enter nom">
                                            @if( $errors->has('nom'))
                                                <span class="help-block"> {{$errors->first('nom')}}</span>
                                            @endif
                                        </div>
                                        <div class=" form-group {{ $errors->has('prenom') ? 'has-error' : '' }} ">
                                            <label >Prénom</label>
                                            <input type="text" class="form-control" name="prenom" value="{{ $cl->prenom }}" placeholder="Enter prénom">
                                            @if( $errors->has('prenom'))
                                                <span class="help-block"> {{$errors->first('prenom')}}</span>
                                            @endif
                                        </div>

                                       

                                        <div class=" form-group {{ $errors->has('adresse') ? 'has-error' : '' }} ">
                                            <label >Adresse</label>
                                            <input type="text" class="form-control" name="adresse" value="{{ $cl->adresse }}" placeholder="Enter adresse">
                                            @if( $errors->has('adresse'))
                                                <span class="help-block"> {{$errors->first('adresse')}}</span>
                                            @endif
                                        </div>
                                        <div class=" form-group {{ $errors->has('tel') ? 'has-error' : '' }} ">
                                            <label >Téléphone</label>
                                            <input type="tel" class="form-control" name="tel" value="{{ $cl->tel }}" placeholder="Enter téléphone" >
                                            @if( $errors->has('tel'))
                                                <span class="help-block"> {{$errors->first('tel')}}</span>
                                            @endif
                                        </div>
                                        <div class=" form-group {{ $errors->has('email') ? 'has-error' : '' }} ">
                                            <label >Email</label>
                                            <input type="text" class="form-control" name="email"  value="{{$cl->email }}"placeholder="Enter email">
                                            @if( $errors->has('email'))
                                                <span class="help-block"> {{$errors->first('email')}}</span>
                                            @endif
                                        </div>
                                        <label >Statut</label>
                                        <input type="text" class="form-control" name="statut" value="{{$cl->statut}} ">
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