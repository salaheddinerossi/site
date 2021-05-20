@extends('t1.layout.l2')

@section('content')
<div class="container">
    <section>
        <div class="row">
            <div class="col-md-6">
                <form action="" >
                    <div class="connect-id">
                            <h3>Identifiez-vous</h3>
                            <div class="row d-flex justify-content-end">
                                <div class="col-md-12 pr-md-0">
                                    <input class="full-i" placeholder="E-mail" type="text" >
                                </div>
                                <div class="col-md-12 pr-md-0">
                                    <input class="full-i" placeholder="Mot de passe" type="text">
                                </div>
                                <div  class="col-md-5 se-connecter pr-md-0">
                                        <button  type="submit">Se connecter</button>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <form action="" >
                    <div class="new-acc">
                        <h3>Ou créez votre compte</h3>
                        <div class="row justify-content-between padding-row">
                            <div class="col-md-6 pr-md-0">
                                <input placeholder="Nom" class=" half-i" type="text" name="" id="">
                            </div>
                            <div class="col-md-6 pr-md-0">
                                <input placeholder="Prénom" class=" half-i" type="text" name="" id="">
                            </div>
                            <div class="col-md-12 pr-md-0">
                                <input placeholder="E-mail" class="col-md-12 full-i" type="text" name="" id="">
                            </div>
                            <div class="col-md-12 pr-md-0">
                                <input placeholder="Mot de passe" class="col-md-12 full-i" type="text" name="" id="">
                            </div>
                            <div class="col-md-12 pr-md-0">
                                <input placeholder="Confirmer le mot de passe" class="col-md-12 full-i" type="text" name="" id="">
                            </div>
                            <div class="col-md-12 pr-md-0">
                                <input placeholder="Téléphone" class="col-md-12 full-i" type="text" name="" id="">
                            </div>
                        </div>
                    </div>
                    <div class="new-acc">
                        <h3>Adresse de livraison</h3>
                        <div class="row justify-content-end padding-row">
                            <div class="col-md-8 pr-md-0">
                                <input type="text" class="half-i"  placeholder="Adresse">
                            </div>
                            <div class="col-md-4 pr-md-0">
                                <input type="text" class="half-i" placeholder="Code postal">
                            </div>
                            <div class="col-md-12 pr-md-0">
                                <div class="select">
                                    <select>
                                        <option>--Select--</option>
                                        <option>Hello 1</option>
                                        <option>Hello 2</option>
                                        <option>Hello 3</option>
                                        <option>Hello 4</option>
                                    </select>
                                    <div class="select_arrow">
                                    </div>
                                </div>
                            </div>
                            <div  class="col-md-5 inscrire pr-md-0">
                                <button  type="submit">s'inscrire</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

@endsection
