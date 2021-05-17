@extends('t3.layout.l2')

@section('content')
<!-- table -->
<div class="container panier">
        <section class="panier-header hided">
            <div class="row panier-row1">
                <div class="col-2"><h2>Produit</h2></div>
                <div class="col-3 hided"><h2>Annexes</h2></div>
                <div class="col-2 text-center" ><h2>Quantité</h2></div>
                <div class="col-2 text-center hided"><h2>Prix/pc</h2></div>
                <div class="col-2 text-center"><h2>Prix Total</h2></div>
                <div class="col-1"></div>
            </div>
        </section>
        <div class="panier-table">
            <div class="row panier-row2">
                <div class="col-sm-2"><p>Pavé de saumon fumé et citrons confits</p><img src="/assets/images/image 7.png" alt=""></div>
                <div class="col-3 hided">
                    <ul>
                        <li>BACON CHEESYERIES JALAPENOS</li>
                        <li>Menu XL</li>
                        <li>Sans Sauce</li>
                        <li>EAU PETILLANTE</li>
                      </ul>

                </div>
                <div class="col-sm-2 ">
                        <div class=" row justify-content-center">
                            <span class="iconify qt" data-icon="akar-icons:minus" data-inline="false"></span>
                            <div ><p>2</p></div>
                            <span class="iconify qt" data-icon="akar-icons:plus" data-inline="false"></span>
                    </div>
                </div>
                <div class="col-2 text-center hided"><p>15.00 €</p></div>
                <div class="col-sm-2 text-center"><p>30.00 €</p></div>
                <div class="col-sm-1 text-center">x</div>
                <hr width="95%" style="margin-top: 35px">

            </div>
            <div class="row panier-row2">
                <div class="col-sm-2"><p>Pavé de saumon fumé et citrons confits</p><img src="/assets/images/image 7.png" alt=""></div>
                <div class="col-3 hided">
                    <ul>
                        <li>BACON CHEESYERIES JALAPENOS</li>
                        <li>Menu XL</li>
                        <li>Sans Sauce</li>
                        <li>EAU PETILLANTE</li>
                      </ul>

                </div>
                <div class="col-sm-2 ">
                        <div class=" row justify-content-center">
                            <span class="iconify qt" data-icon="akar-icons:minus" data-inline="false"></span>
                            <div ><p>2</p></div>
                            <span class="iconify qt" data-icon="akar-icons:plus" data-inline="false"></span>
                    </div>
                </div>
                <div  class="col-2 text-center hided"><p>15.00 €</p></div>
                <div class="col-sm-2 text-center"><p>30.00 €</p></div>
                <div class="col-sm-1 text-center" >x</div>
                <hr width="95%" >

            </div>

        </div>
        <!-- form -->
        <div class=" d-flex justify-content-end">
            <div class="panier-form text-right pad">
                <ul>
                    <li>Frais de livraison: 5,00 €</li>
                    <li>Total: 30,00 €</li>
                    <li>Promo “SEAFOOD10”: 2,50€</li>
                </ul>
                <div class="d-flex justify-content-end">
                    <hr width="30%">
                </div>
                <p>Prix final: 32,50 €</p>
                <input type="text"><input value="Go" type="submit"><br>
                <button>Commander</button>
            </div>
        </div>
    </div>

@endsection
