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
                                <th style="width: 20%"class="text-center">
                                    date d'envoie

                                </th>
                                <th style="width: 40%" class="text-center">
                                    Options

                                </th>
                            </tr>
                            </thead>
                            <tbody>





                          @foreach($messages as $message)
                              <tr>




                                  <td class="text-center">

                                      {{$message->name}}
                                      {{$message->lastname}}
                                  </td>





                                  <td class="text-center">

                                      {{$message->email}}

                                  </td>


                                  <td class="project_progress text-center" >

                                      {{$message->message}}
                                  </td>
                                  <td class="project_progress text-center" >

                                      {{$message->created_at}}
                                  </td>

                                  <td class="project-actions justify-content-center d-flex ">


                                        <button class="btn btn-primary"> <i class="fa fa-comment-dots"></i>repondre</button>




                                      <form action="{{ route('messages.destroy',$message) }}"method="POST">
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
