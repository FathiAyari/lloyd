@extends('layouts.master')
@section('content')
    <div class="wrapper">
        <!-- fonction js -->

<!--        <script type="text/javascript">
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideD(500, function() {
                    $(this).hide();
                });
            }, 2500);
        </script>-->





        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid  ">

                    <div class="d-flex justify-content-between">
                        <form action="{{route("search")}}"  method="GET" class="form-inline my-2 my-lg-0">

                                @csrf

                            <input class="form-control mr-sm-2" name="search" placeholder="Nom de client" aria-label="Search">

                            <button   class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                        </form>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i
                                class="fa-solid fa-plus"></i>Ajouter un client</button>


                    </div>







                    @error('search')
                    <div class="alert alert-danger  m-1 col-3" role="alert">
                        {{$message}}
                    </div>

                    @enderror
                </div><!-- /.container-fluid -->
            </section>
            <!-- Modal -->
@include("admin.clients.add_client_modal")
        <!-- heritage de modale de l'ajout de client -->
            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card  ">

                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>

                                <th style="width: 20%"class="text-center">
                                    Nom et Prénom de client
                                </th>
                                <th style="width: 20%"class="text-center">
                                    Nationalité
                                </th>
                                <th style="width: 20%"class="text-center">
                                   Type de client

                                </th>
                                <th style="width: 40%" class="text-center">
                                    Options

                                </th>
                            </tr>
                            </thead>
                            <tbody>
                @foreach($clients as $client)




               <tr>




        <td class="text-center">
            {{$client->name}}
            {{$client->lastname}}

        </td>




        <td class="text-center">
            {{$client->nationality}}

        </td>


        <td class="project_progress text-center" >
            {{$client->type}}

        </td>

        <td class="project-actions justify-content-center d-flex ">

            <button  data-toggle="modal" class="btn btn-success btn-sm m-1" data-target="#exampleModal"><i class="fa-solid fa-plus"></i> Ajouter voiture</button>

            <a href="{{route("clients.edit",$client)}}" class="btn btn-info btn-sm m-1" ><i class="fas fa-pencil-alt"></i> Modifier</a>
            <a href="{{route("clients.show",$client)}}" class="btn btn-primary btn-sm m-1"><i class="fa-solid fa-eye"></i>Voir</a>


            <form action="{{ route('clients.destroy',$client) }}"method="POST">
            @method('DELETE')
            @csrf
            <!-- pour des raison de securité -->
                <button type="submit" class="btn btn-danger btn-sm m-1">
                    <i class="fas fa-trash">
                    </i>
                    Supprimer
                </button>
            </form>


        </td>
    </tr>



                @endforeach





                            </tbody>
                        </table>
                       <div class="m-5  d-flex flex-row justify-content-center  ">
                           <div>{{$clients->links()}} </div>

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
