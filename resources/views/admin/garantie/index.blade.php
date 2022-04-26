@extends('layouts.master')
@section('content')@include("admin.clients.add_client_modal")
<div class="wrapper">






    <div class="content-wrapper">
        <section class="content-header d-flex flex-row justify-content-center">
            <p>Gestion de garantie </p>

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
                                Date de creation
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

                   @foreach($assurances as $assurance)
                       <tr>




                           <td class="text-center">
                               {{$assurance->created_at}}

                           </td>




                           <td class="text-center">
                               {{$assurance->car->registration}}

                           </td>


                           <td class="project-actions text-center">


                               <a href="{{route("pdf",['id' => $assurance->id])}}" class="btn btn-primary">   <i class="fa fa-download"></i>Telecharger le fichier</a>


                           </td>
                       </tr>
                   @endforeach




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
