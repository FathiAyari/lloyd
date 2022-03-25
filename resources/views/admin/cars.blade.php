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




        <div class="content-wrapper ">
            <!-- Content Header (Page header) -->
            <section class="content-header d-flex flex-row justify-content-center">
                <p>Gestion de voitures </p>

            </section>
            <!-- Modal -->

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">

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
                                    Nombre totale de voitures

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





                                    <a class="btn btn-success btn-sm m-1" href="">
                                        <i
                                            class="fa-solid fa-plus">
                                        </i>
                                        Ajouter voiture
                                    </a>

                                </td>
                            </tr>




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
