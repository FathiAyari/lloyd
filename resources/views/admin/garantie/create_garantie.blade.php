@extends("layouts.master")

@section('content')
    <div class="wrapper">

        <div class="content-wrapper  ">

            <form action="{{route('garantie.store')}}" method="POST">
                @csrf


               <div class="d-flex flex-row col-12 justify-content-center">
                   <div class="d-flex flex-column">
                       <div class="d-flex flex-column">

                           <div class="d-flex flex-column">
                               <p>Garantie Legale</p>
                               <div class="form-check">

                                   <input class="form-check-input" type="checkbox" value="Réesponsabilité  Civile-Recours Tiers Incendie" name="legale[]"  checked="checked"  disabled>
                                   <label class="form-check-label" for="flexCheckDefault">
                                      Réesponsabilité  Civile-Recours Tiers Incendie
                                   </label>
                               </div>
                           </div>
                           <div class="d-flex flex-column">
                               <p>Garantie Facultative : </p>
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" value="Défense et recours" name="optional[]" >
                                   <label class="form-check-label" for="flexCheckDefault">
                                       Défense et recours
                                   </label>
                               </div>
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" value="Incendie" name="optional[]" >
                                   <label class="form-check-label" for="flexCheckDefault">
                                       Incendie
                                   </label>
                               </div>
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" value="Tiers collision" name="optional[]" >
                                   <label class="form-check-label" for="flexCheckDefault">
                                       Tiers collision
                                   </label>
                               </div>
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" value="Vol de vehicule" name="optional[]" >
                                   <label class="form-check-label" for="flexCheckDefault">
                                       Vol de vehicule
                                   </label>
                               </div>
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" value="Dommage accidentels" name="optional[]" >
                                   <label class="form-check-label" for="flexCheckDefault">
                                       Dommage accidentels
                                   </label>
                               </div>
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" value="Tiers complete" name="optional[]" >
                                   <label class="form-check-label" for="flexCheckDefault">
                                       Tiers complete
                                   </label>
                               </div>
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" value="Brise de glace" name="optional[]" >
                                   <label class="form-check-label" for="flexCheckDefault">
                                       Brise de glace
                                   </label>
                               </div>
                           </div>
                           <div class="d-flex flex-column">
                               <p>Assurances de personnes  : </p>
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" value="Personnes Transportérs" name="persons[]" >
                                   <label class="form-check-label" for="flexCheckDefault">
                                       Personnes Transportérs
                                   </label>
                               </div>
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" value="Spécial Individuel Conducteur" name="persons[]" >
                                   <label class="form-check-label" for="flexCheckDefault">
                                       Spécial Individuel Conducteur
                                   </label>
                               </div>

                           </div>




                       </div>


                   </div>

               </div>
                <div class="d-flex flex-row justify-content-center  ">
                    <button  type="submit" class="btn btn-success col-1 "> Ajouter </button>
                </div>
            </form>


        </div>

@endsection

