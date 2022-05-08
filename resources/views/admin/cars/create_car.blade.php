@extends("layouts.master")

@section('content')
    <div class="wrapper">

        <div class="content-wrapper  ">

            <form action="{{route('cars.store')}}" method="POST">
                @csrf


               <div class="d-flex flex-column">
                   <div class="d-flex flex-row">
                       <input type="hidden" id="custId" name="client_id" value="{{$id}}">
                       <div class="col-6  d-flex flex-column align-items-center align-self-center">
                           <div class="form-group col-6">
                               <label for="inputStatus">Selectionner un bien :</label>
                               <select class="form-control custom-select" name="type">

                                   <option value="Voitre particiliére">Voitre particiliére</option>
                                   <option value="Voiture mixte">Voiture mixte</option>
                                   <option value="Camionette">Camionette</option>
                                   <option value="Tracteur agricule">Tracteur agricule</option>


                               </select>

                           </div>
                           <div class="form-group col-6">
                               <label for="inputStatus">Macro usage :</label>
                               <select class="form-control custom-select" name="usage">

                                   <option value="Promenade et affaires">Promenade et affaires</option>
                                   <!--            <option value="Voiture mixte">Voiture mixte</option>
                                               <option value="Camionette">Camionette</option>
                                               <option value="Tracteur agricule">Tracteur agricule</option>-->


                               </select>

                           </div>
                           <div class="form-group col-6">
                               <label for="inputStatus">Type d'immatriculation :</label>
                               <select class="form-control custom-select" name="registration_type">

                                   <option value="Tunisienne">Tunisienne</option>
                                   <option value="Etrangere">Etrangere </option>




                               </select>

                           </div>
                           <div class="form-group col-6">
                               <label  for="registration" class="form-label">Immatriculation</label>
                               <input type="text" class="form-control" aria-describedby="emailHelp" name="registration" required>

                           </div>
                           <div class="form-group col-6">
                               <label for="brand">Marque :</label>
                               <select class="form-control custom-select" name="brand">

                                   <option value="BMW">BMW</option>
                                   <option value="Mercedes">Mercedes</option>
                                   <option value="Audi">Audi</option>
                                   <option value="Porsche">Porsche</option>
                                   <option value="Tesla">Tesla</option>
                                   <option value="Renault">Renault</option>
                                   <option value="Opel">Opel </option>
                                   <option value="Mahindra">Mahindra </option>
                                   <option value="Suzuki">Suzuki </option>
                                   <option value="Skoda"> Skoda </option>
                                   <option value="Jeep">Jeep </option>
                                   <option value="Kia">Kia </option>
                                   <option value="Citroën">Citroën </option>
                                   <option value="Mazda">Mazda </option>



                               </select>

                           </div>
                           <div class="form-group col-6">
                               <label for="energy">Energie :</label>
                               <select class="form-control custom-select" name="energy">

                                   <option value="Essence">Essence</option>
                                   <option value="Diesel">Diesel</option>
                                   <option value="Carburants gazeux">Carburants gazeux</option>
                                   <option value="Le gazole">Le gazole</option>
                                   <option value="Electrique">Electrique</option>




                               </select>

                           </div>
                       </div>
                       <div class="col-6   d-flex flex-column align-items-center align-self-center">
                           <div class="form-group col-6">
                               <label  for="registration" class="form-label">Numéro de chassis</label>
                               <input type="text" class="form-control" aria-describedby="emailHelp" name="frame" required>

                           </div>
                           <div class="form-group col-6">
                               <label  for="registration" class="form-label">Puissance en Chevaux </label>
                               <input type="number" class="form-control" aria-describedby="emailHelp" name="power" required>

                           </div>
                           <div class="form-group col-6">
                               <label  for="registration" class="form-label">Nombre  de places </label>
                               <input type="number" class="form-control" aria-describedby="emailHelp" name="places" required>

                           </div>
                           <div class="form-group col-6">
                               <label  for="registration" class="form-label">Couleur de vehicules </label>
                               <input type="text" class="form-control" aria-describedby="emailHelp" name="color" required>

                           </div>
                           <div class="form-group col-6">
                               <label  for="registration" class="form-label">Nombre  de cylindres </label>
                               <input type="number" class="form-control" aria-describedby="emailHelp" name="cylinder" required>

                           </div>
                           <div class="form-group col-6">
                               <label  for="registration" class="form-label">Numéro de permis </label>
                               <input type="text" class="form-control" aria-describedby="emailHelp" name="driving_licence" required>

                           </div>
                           <div class="form-group col-6">
                               <label  for="registration" class="form-label">Date de pris de permis </label>
                               <input type="date" class="form-control" aria-describedby="emailHelp" name="driving_licence_date" required>

                           </div>



                       </div>
                   </div>

                   <button  type="submit" class="btn btn-success col-1 align-self-center"> Ajouter </button>
               </div>
            </form>


        </div>

@endsection

