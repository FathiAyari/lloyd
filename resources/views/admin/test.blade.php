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
            <div class="modal-body">
                <form action="{{ route('clients.store') }}" method="POST">
                    @csrf
                    <div class="d-flex flex-row">
                        <div class="form-group p-1">
                            <label for="exampleInputEmail1">Nom</label>
                            <input type="email" class="form-control" name="name"
                                   aria-describedby="emailHelp">

                        </div>
                        <div class="form-group p-1">
                            <label for="exampleInputPassword1">Prénom</label>
                            <input type="text" class="form-control" name="lastname"
                            >
                        </div>
                    </div>


                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexe" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Homme
                        </label>
                    </div>




                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexe" id="flexRadioDefault2" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Femme
                        </label>
                    </div>



                    <div class="form-group">
                        <label for="exampleInputEmail1" name="nationality" >Nationalié</label>
                        <input type="text   " for="nationality" class="form-control">

                    </div>



                    <div class="d-flex flex-row ">
                        <div class="form-group p-1">
                            <label for="exampleInputEmail1" name="ville">Ville</label>
                            <input type="text" class="form-control" name="ville">

                        </div>
                        <div class="form-group p-1">
                            <label for="zip">Code postale</label>
                            <input type="text" class="form-control" id="zip" name="zip"
                                   placeholder="123456">
                        </div>

                    </div>



                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control custom-select" name="type">

                            <option value="mourale">Mourale</option>
                            <option value="physique">Physique</option>


                        </select>

                    </div>

                    <div class="d-flex flex-row ">
                        <div class="form-group col-6">
                            <label for="inputStatus">Document</label>
                            <select class="form-control custom-select" name="document_type">

                                <option value="cin">Cin</option>
                                <option value="passeport">Passeport</option>
                                <option value="sejour">Carte sejour</option>


                            </select>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Numéro de document</label>
                            <input type="text" class="form-control" id="zip" name="document_number"
                                   placeholder="123456">
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-success">Confirmer</button>
            </div>
            <!-- Main content -->

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
