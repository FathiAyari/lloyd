@extends('layouts.master')
@section('content')
    <div class="wrapper">
        <!-- fonction js -->

        <script type="text/javascript">
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideD(500, function() {
                    $(this).hide();
                });
            }, 2500);
        </script>





        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid  ">
                    <div class="d-flex flex-row-reverse">

                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i
                                class="fa-solid fa-plus"></i>Ajouter un client</button>

                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Modal -->
@include("admin.clients.add_client_modal")
@include("admin.clients.edit_client")
            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">

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

        <td class="project-actions justify-content-center d-flex flex-row">
            <button  data-toggle="modal" class="btn btn-success btn-sm m-1" data-target="#exampleModal"><i class="fa-solid fa-plus"></i> Ajouter voiture</button>

            <button  data-toggle="modal" class="btn btn-info btn-sm m-1" data-target="#editClient"><i class="fas fa-pencil-alt"></i> Modifier</button>


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
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>

@endsection
