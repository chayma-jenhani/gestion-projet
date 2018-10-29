@extends('layouts.menu')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gestion Des Employés
                <small>Gestion Des employés</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li ><a href="/employe">Employés</a></li>
                <li class="active"> Modifier Employé</li>
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
                            <h3 class="box-title">Modifier Employé</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                         <form role="form" action="/employe/{{$emp->id}}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <div class=" form-group {{ $errors->has('nom') ? 'has-error' : '' }} ">
                                            <label >Nom</label>

                                            <input type="text" class="form-control" name="nom" value="{{$emp->nom}}" placeholder="Enter nom">
                                            @if( $errors->has('nom'))
                                                <span class="help-block"> {{$errors->first('nom')}}</span>
                                            @endif
                                        </div>
                                        <div class=" form-group {{ $errors->has('prenom') ? 'has-error' : '' }} ">
                                            <label >Prénom</label>
                                            <input type="text" class="form-control" name="prenom" value="{{$emp->prenom}}" placeholder="Enter prénom">
                                            @if( $errors->has('prenom'))
                                                <span class="help-block"> {{$errors->first('prenom')}}</span>
                                            @endif
                                        </div>



                                        <div class=" form-group {{ $errors->has('adresse') ? 'has-error' : '' }} ">
                                            <label >Adresse</label>
                                            <input type="text" class="form-control" name="adresse" value="{{$emp->adresse}}" placeholder="Enter adresse">
                                            @if( $errors->has('adresse'))
                                                <span class="help-block"> {{$errors->first('adresse')}}</span>
                                            @endif
                                        </div>
                                        <div class=" form-group {{ $errors->has('CIN') ? 'has-error' : '' }} ">
                                            <label >CIN</label>
                                            <input type="text" class="form-control" name="CIN" value="{{$emp->CIN}}" placeholder="Enter CIN">
                                            @if( $errors->has('CIN'))
                                                <span class="help-block"> {{$errors->first('CIN')}}</span>
                                            @endif
                                        </div>
                                        <div class=" form-group {{ $errors->has('salaire') ? 'has-error' : '' }} ">
                                            <label >Salaire</label>
                                            <input type="text" class="form-control" name="salaire" value="{{$emp->salaire}}" placeholder="Enter salaire">
                                            @if( $errors->has('salaire'))
                                                <span class="help-block"> {{$errors->first('salaire')}}</span>
                                            @endif
                                        </div>
                                        <div class=" form-group {{ $errors->has('photo') ? 'has-error' : '' }} ">
                                            <label >Photo</label>
                                            <input type="file"  name="photo" value="{{$emp->photo}}" >
                                            @if( $errors->has('photo'))
                                                <span class="help-block"> {{$errors->first('photo')}}</span>
                                            @endif
                                        </div>

                                        <div class=" form-group {{ $errors->has('tel1') ? 'has-error' : '' }} ">
                                            <label >Téléphone 1</label>
                                            <input type="tel" class="form-control" name="tel1" value="{{$emp->tel1}}" placeholder="Enter téléphone" >
                                            @if( $errors->has('tel1'))
                                                <span class="help-block"> {{$errors->first('tel1')}}</span>
                                            @endif
                                        </div>



                                        <label >Téléphone 2</label>
                                        <input type="tel" class="form-control" name="tel2" value="{{$emp->tel2}}" placeholder="Enter téléphone" >

                                        <div class=" form-group {{ $errors->has('bank') ? 'has-error' : '' }} ">
                                            <label >Bank</label>
                                            <input type="text" class="form-control" name="bank" value="{{$emp->bank}}" placeholder="Enter bank" >
                                            @if( $errors->has('bank'))
                                                <span class="help-block"> {{$errors->first('bank')}}</span>
                                            @endif
                                        </div>
                                        <label >BK-banc</label>
                                        <input type="text" class="form-control" name="BK_banc" value="{{$emp->BK_banc}}" placeholder="Enter BK-banc" >

                                        <div class=" form-group {{ $errors->has('email') ? 'has-error' : '' }} ">
                                            <label >Email</label>
                                            <input type="text" class="form-control" name="email"  value="{{$emp->email}}"placeholder="Enter email">
                                            @if( $errors->has('email'))
                                                <span class="help-block"> {{$errors->first('email')}}</span>
                                            @endif
                                        </div>
                                        <label >Statut</label>
                                        <input type="text" class="form-control" name="statut" value="{{$emp->statut}}"placeholder="Enter statut">
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