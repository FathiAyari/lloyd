@extends('layouts.master')
@section('content')
    <div class="wrapper">
        <!-- fonction js -->





        <div class="content-wrapper">
            <section class="content-header d-flex flex-row justify-content-center">
                <p>Gestion de messages </p>

            </section>
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
                                    Email
                                </th>
                                <th style="width: 20%"class="text-center">
                                 Message

                                </th>
                                <th style="width: 40%" class="text-center">
                                    Options

                                </th>
                            </tr>
                            </thead>
                            <tbody>





                                <tr>




                                    <td class="text-center">


                                    </td>




                                    <td class="text-center">


                                    </td>


                                    <td class="project_progress text-center" >


                                    </td>

                                    <td class="project-actions justify-content-center d-flex ">




                                        <a href="" class="btn btn-primary btn-sm m-1"><i class="fa-solid fa-eye"></i>Voir</a>


                                        <form action=""method="POST">
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
