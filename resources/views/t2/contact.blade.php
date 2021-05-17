@extends('t2.layout.l2')

@section('content')
<section >
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="" class="question">
                    <p>Vous avez une question? Vous aimeriez en savoir plus sur les allergènes pouvant se trouver dans nos produits? N’hésitez pas à nous contacter, nous reviendrons vers vous dans les plus brefs délais.</p>
                    <input placeholder="Nom" type="text" class="half-i">
                    <input placeholder="Prénom" type="text" class="half-i">
                    <input placeholder="E-mail" type="text" class="full-i">
                    <input placeholder="Numéro de téléphone" type="text" class="full-i">
                    <textarea placeholder="Comment pouvons-nous aider?" name="" id="" cols="30" rows="10" class="full-i contact-text"></textarea>
                    <div  class="d-flex justify-content-end">
                        <button type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <img class="contact-image" src="/assets/images/image 6.png" alt="">
            </div>
        </div>
    </div>
</section>
@endsection