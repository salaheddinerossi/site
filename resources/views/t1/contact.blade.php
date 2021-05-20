@extends('t1.layout.l2')

@section('content')
<section >
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="" class="question">
                    <p>Vous avez une question? Vous aimeriez en savoir plus sur les allergènes pouvant se trouver dans nos produits? N’hésitez pas à nous contacter, nous reviendrons vers vous dans les plus brefs délais.</p>
                    <div class="row justify-content-end">
                        <div class="col-md-6 pr-md-0">
                            <input placeholder="Nom" type="text" class="half-i">
                        </div>
                        <div class="col-md-6 pr-md-0">
                            <input placeholder="Prénom" type="text" class="half-i">
                        </div>
                        <div class="col-md-12 pr-md-0">
                            <input placeholder="E-mail" type="text" class="full-i">
                        </div>
                        <div class="col-md-12 pr-md-0">
                            <input placeholder="Numéro de téléphone" type="text" class="full-i">
                        </div>
                        <div class="col-md-12 pr-md-0">
                            <textarea placeholder="Comment pouvons-nous aider?" name="" id="" cols="30" rows="10" class="full-i contact-text"></textarea>
                        </div>
                        <div  class="col-md-5 pl-md-0">
                            <button type="submit">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="contact-image">
                    <img  src="/assets/images/image 6.png" alt="" class="contact-image-img">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
