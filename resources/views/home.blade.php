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
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
             <h3>{{$nbclient}}</h3>

              <p>Clients</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="/client" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$nbemp}}</h3>

             <p>Employés</p>
            </div>
            <div class="icon">
              
               <i class="fa fa-group"></i>
            </div>
            <a href="/employe" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <h3>{{$nbcat}}</h3>

      

              <p>Catégories</p>
            </div>
            <div class="icon">
             <i class="fa fa-th-large"></i>
            </div>
            <a href="/categorie" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
             <div class="inner">
              <h3>{{$nbprojet}}</h3>

              <p>Projets</p>
            </div>

              
            </div>
            <div class="icon">
                <i class="fa fa-edit"></i>
            </div>
            <a href="/projet "class="small-box-footer">Plus d'informations <i class="fa fa-edit"></i></a>
          </div>
        </div>
        <!-- ./col -->
     </div>

      
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Statisques</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  
                  <th>Tâche</th>
                  <th>Evolution</th>
                  <th style="width: 40px">Pourcentage(%)</th>
                </tr>
                <tr>
                  
                  <td>Active</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger"
                       style="width:{{$act}}% "></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">{{$act}}%</span></td>
                </tr>
                <tr>
                  
                  <td>En progression</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: {{$enprog}}%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-yellow">{{$enprog}}%</span></td>
                </tr>
                <tr>
                  
                  <td>En pause</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width:{{$enpause}}%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">{{$enpause}}%</span></td>
                </tr>
                <tr>
                 
                  <td>Terminé</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width:{{$termine}}%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-green">{{$termine}}%</span></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>            </section>



@endsection