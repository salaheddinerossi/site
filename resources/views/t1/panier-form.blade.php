@extends("t1.layout.l2")

@section('content')
<div class="container">
    <section>
        <div class="row ">
            <div class="col-md-6">
                <div class="container">

                <div class="panier-form-header d-flex justify-content-between">
                    <p>2 Pièces</p>
                    <p>Montant global  : 35 €</p>
                </div>
                <div class="bg-form">
                        <div class="row panier-form-body">
                            <div class="col-md-10 media-center ">
                                <div class="row  ">
                                    <div class="col-md-4">
                                        <img src="/assets/images/image 7.png" alt="" width="100px" height="100px">
                                    </div>
                                    <div class="col-md-8 list-form">
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
                            <div class="col-md-2 text-center"><p>15.00€</p></div>
                        </div>
                        <hr class=" hr hr-center">

                        <div class="row panier-form-body">
                            <div class="col-md-10 media-center ">
                                <div class="row  ">
                                    <div class="col-md-4">
                                        <img src="/assets/images/image 7.png" alt="" width="100px" height="100px">
                                    </div>
                                    <div class="col-md-8 list-form">
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
                            <div class="col-md-2 text-center"><p>15.00€</p></div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-5 pr-md-0 panier-form-button">
                                <button >Modifier</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <form action="" >

                    <div class="container">
                        <div  class="form-bg">
                        <div class="personnel-info">
                            <h3>Informations personelles</h3>
                            <div class="row">
                                <div class="col-md-6 pr-md-0">
                                    <input placeholder="Nom" class="half-i" type="text">
                                </div>
                                <div class="col-md-6 pr-md-0">
                                    <input placeholder="Prénom" class="half-i" type="text">
                                </div>
                                <div class="col-md-12 pr-md-0">
                                    <input placeholder="adress" class="full-i" type="text">
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
                                <div class="col-md-12 pr-md-0">
                                    <input placeholder="E-mail" class="half-i" type="text">
                                </div>
                                <div class="col-md-12 pr-md-0">
                                    <input placeholder="Téléphone" class="half-i" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="form-livraison">
                            <h3>Choisissez le moment de livraison</h3>
                            <div class="row">
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
                            </div>
                        </div>
                        <div class="form-enlign">
                            <h4>Paiment</h4>
                            <p>En lign</p>
                            <div class="row">
                                <div class="col-md-5 pr-md-0">
                                    <button type="submit">Valider</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

@endsection
