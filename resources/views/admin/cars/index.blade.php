@extends('layouts.master')
@section('content')@include("admin.clients.add_client_modal")
    <div class="wrapper">
        <!-- fonction js -->





        <div class="content-wrapper">
            <section class="content-header d-flex flex-row justify-content-center">
                <p>Gestion de voitures </p>

            </section>
            <section class="content">
                @if($message=Session::get('success'))
                    <div class="alert alert-success" role="alert">{{ $message }}</div>
            @endif
                <!-- Default box -->
                <div class="card  ">

                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>

                                <th style="width: 25%"class="text-center">
                                    Nom et Prénom de client
                                </th>
                                <th style="width: 25%"class="text-center">
                                    Nationalité
                                </th>
                                <th style="width: 25%"class="text-center">
                                    Immatricule

                                </th>
                                <th style="width: 25%" class="text-center">
                                    Options

                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($cars as $car)
                                <tr>




                                    <td class="text-center">
                                        {{$car->client->name}}
                                        {{$car->client->lastname}}

                                    </td>




                                    <td class="text-center">
                                        {{$car->client->nationality}}

                                    </td>
                                    <td class="project_progress text-center" >
                                        {{$car->registration}}

                                    </td>

                                    <td class="project-actions text-center">





                                        <a href="{{route('garantie.create')}}" class="btn btn-success">Ajouter un garantie</a>

                                    </td>
                                </tr>
                            @endforeach




                            </tbody>
                        </table>
                        <div class="m-5  d-flex flex-row justify-content-center  ">
                            <div>{{$cars->links()}} </div>

                        </div>
                        <div class="m-5  d-flex flex-row justify-content-center  ">


                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>


@endsection
