@extends('layouts.master')
@section('content')@include("admin.clients.add_client_modal")
<div class="wrapper">






    <div class="content-wrapper">
        <section class="content-header d-flex flex-row justify-content-center">
            <p>Gestion de garantie </p>

        </section>
        <section class="content">

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

                        <tr>




                            <td class="text-center">
                                aa

                            </td>




                            <td class="text-center">
                                aa

                            </td>
                            <td class="project_progress text-center" >
                                aa

                            </td>

                            <td class="project-actions text-center">





                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i
                                        class="fa-solid fa-plus"></i>Telecharger le fichier</button>

                            </td>
                        </tr>




                        </tbody>
                    </table>
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
