
@extends('layouts.master')


@section('content')
    <div class="wrapper">
        <div class="d-flex flex-column my-5 ">
            <div class="row justify-content-center">
                <div class="col-2">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">

                            <h3>{{$clients->count()}}</h3>

                            <p>Clients</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <a href="{{route('clients.index')}}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-2">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$cars->count()}}</h3>

                            <p>Vehicules</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-car"></i>
                        </div>
                        <a href="{{route('cars.index')}}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-2">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$assurance->count()}}</h3>

                            <p>Contrats</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-file-signature"></i>
                        </div>
                        <a href="{{route('garantie.index')}}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-2">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$messages->count()}}</h3>

                            <p>Messages</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-message"></i>
                        </div>
                        <a href="{{route('messages.index')}}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <section class="content-header d-flex flex-row justify-content-center">
                <p>Histouriques </p>

            </section>
           <div class="d-flex flex-row justify-content-center">
               <div class="card col-6 ">

                   <table class="table table-striped projects">
                       <thead>
                       <tr>

                           <th style="width: 20%"class="text-center">
                               date de l' operation
                           </th>
                           <th style="width: 20%"class="text-center">
                               sujet
                           </th>

                       </tr>
                       </thead>
                       <tbody>
                       @foreach($historiques as $historique)




                           <tr class="bg-{{$historique->type}} bg-opacity-75" >




                               <td class="text-center">

                                   {{$historique->created_at}}
                               </td>




                               <td class="text-center">
                                   {{$historique->subject}}

                               </td>



                           </tr>



                       @endforeach





                       </tbody>
                   </table>
                   <div class="m-5  d-flex flex-row justify-content-center  ">
                       <div>{{$historiques->links()}} </div>

                   </div>
               </div>
           </div>
        </div>
    </div>


@endsection
