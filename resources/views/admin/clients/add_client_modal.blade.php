<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('clients.store') }}" method="POST">
                    @csrf


                    <div class="d-flex flex-row">

                        <div class="form-group p-1">
                            <label for="exampleInputEmail1">Nom</label>
                            <input type="text" class="form-control" name="name" required
                                   aria-describedby="emailHelp">

                        </div>


                        <div class="form-group p-1">
                            <label for="exampleInputPassword1">Prénom</label>
                            <input type="text" class="form-control" name="lastname"
                            >
                        </div>

                    </div>


















                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Homme" name="sexe" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Homme
                        </label>
                    </div>




                    <div class="form-check">
                        <input class="form-check-input" value="Femme" type="radio" name="sexe" id="flexRadioDefault2" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Femme
                        </label>
                    </div>



                    <div class="form-group">
                        <label for="exampleInputEmail1" name="nationality" >Nationalié</label>
                        <input type="text   " for="nationality" class="form-control" name="nationality">

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

                    <div class="modal-footer d-flex justify-content-center">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-success">Confirmer</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
