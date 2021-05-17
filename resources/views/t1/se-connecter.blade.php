@extends('t1.layout.l2')

@section('content')
<div class="container">
    <section>
        <div class="row">
            <div class="col-sm-6">
                <form action="" class="connect-id">
                    <h3>Identifiez-vous</h3>
                    <input class="full-i" style="width: 100%" placeholder="E-mail" type="text" >
                    <input class="full-i"  style="width: 100%" placeholder="Mot de passe" type="text">
                    <div  class="d-flex justify-content-end">
                    <button type="submit">Se connecter</button>
                </div>
                </form>
            </div>
            <div class="col-sm-6">
                <form action="" >
                    <div class="new-acc">
                        <h3>Ou créez votre compte</h3>
                        <input placeholder="Nom" class="half-i" type="text" name="" id="">
                        <input placeholder="Prénom" class="half-i" type="text" name="" id="">
                        <input placeholder="E-mail" class="full-i" type="text" name="" id="">
                        <input placeholder="Mot de passe" class="full-i" class="full-i" type="text" name="" id="">
                        <input placeholder="Confirmer le mot de passe" class="full-i" type="text" name="" id="">
                        <input placeholder="Téléphone" class="full-i" type="text" name="" id="">
                    </div>
                    <div class="new-acc">
                        <h3>Adresse de livraison</h3>
                        <input type="text" class="half-i" style="width: 60%" placeholder="Adresse">
                        <input type="text" class="half-i" style="width: 28%" placeholder="Code postal">
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
                        <div  class="d-flex justify-content-end">
                            <button type="submit">Se connecter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
    
@endsection