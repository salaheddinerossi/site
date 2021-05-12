@extends("t1.layout.l2")

@section('content')
<div class="container">
    <section>
        <div class="row">
            <div class="col-sm-6">
                <div class="panier-form-header d-flex justify-content-between">
                    <p>2 Pièces</p>
                    <p>Montant global  : 35 €</p>
                </div>
                <div class="   bg-form">
                    <div class="row panier-form-body">
                        <div class="col-9 ">
                            <div class="row  ">
                                <div class="col-sm-3">
                                    <img src="/assets/images/image 7.png" alt="" width="100px" height="100px">
                                </div>
                                <div class="col-sm-9 list-form">
                                    <h3>Pavé de saumon fumé et citrons confits</h3>
                                    <ul>
                                        <li>BACON CHEESYERIES JALAPENOS</li>
                                        <li>Menu XL</li>
                                        <li>Sans Sauce</li>
                                        <li>EAU PETILLANTE</li>
                                    </ul>

                                </div>
                            </div>
                            <hr style="margin-top:30px;">
                        </div>
                        <div class="col-sm-3"><p>15.00€</p></div>
                    </div>
                    <div class="row panier-form-body">
                        <div class="col-9 ">
                            <div class="row  ">
                                <div class="col-sm-3">
                                    <img src="/assets/images/image 7.png" alt="" width="100px" height="100px">
                                </div>
                                <div class="col-sm-9 list-form">
                                    <h3>Pavé de saumon fumé et citrons confits</h3>
                                    <ul>
                                        <li>BACON CHEESYERIES JALAPENOS</li>
                                        <li>Menu XL</li>
                                        <li>Sans Sauce</li>
                                        <li>EAU PETILLANTE</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3"><p>15.00€</p></div>
                    </div>

                </div>
                <button class="panier-form-button" >Modifier</button>

            </div>
            <div class="col-sm-6">
                <form action="">
                    <div class="container">
                        <div class="personnel-info">
                            <h3>Informations personelles</h3>
                            <input class="half-i" type="text"><input class="half-i" type="text">
                            <input class="full-i" type="text">
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
                            <input class="half-i" type="text">
                            <input class="half-i" type="text">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

@endsection
