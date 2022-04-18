
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
                        <a href="{{route('assurances.index')}}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
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
        </div>
    </div>


@endsection
