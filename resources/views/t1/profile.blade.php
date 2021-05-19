@extends('t1.layout.l2')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="profile-adresse-header">
                    <h3>Mes adresses</h3>
                </div>
                <div class="profile-adresse-body">
                    <p class="bold">Nawal El Ayadi</p>
                    <p>Rue Saint-Denis 284</p>
                    <p>1190 Forest</p>
                    <br>
                    <p>N° de téléphone: 0486820121</p>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <div class="editable-adreses">
                            <p class="bold">Nawal El Ayadi</p>
                            <p>Rue Saint-Denis 284</p>
                            <p>1190 Forest</p>
                            <br>
                            <p>N° de téléphone: 0486820121</p>
                        </div>
                        <div class="profile-actions">
                            <button>Modifier</button>
                            <br>
                            <button>Effacer</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="profile-commandes-header">
                    <h3>Mes commandes</h3>
                </div>
                <div class="profile-commandes-body">
                    <div class="profile-commandes-body-top d-flex justify-content-between">
                        <p>3 articles - 12/04/2021 <span>32,50€</span></p>
                        <button>Commander à nouveau</button>
                    </div>
                    <div class="commande-list">
                        <p>Pavé de saumon fumé et citrons confits</p>
                        <ul>
                            <li>Sauce lyonnaise</li>
                            <li>Pommes de terre à létouffée</li>
                        </ul>
                    </div>
                    <div class="commande-list">
                        <p>Pavé de saumon fumé et citrons confits</p>
                        <ul>
                            <li>Sauce lyonnaise</li>
                            <li>Pommes de terre à létouffée</li>
                        </ul>
                    </div>
                    <div class="commande-list">
                        <p>Pavé de saumon fumé et citrons confits</p>
                        <ul>
                            <li>Sauce lyonnaise</li>
                            <li>Pommes de terre à létouffée</li>
                        </ul>
                    </div>
                    <hr>
                    <div class="profile-commandes-body-top d-flex justify-content-between">
                        <p>3 articles - 12/04/2021 <span>32,50€</span></p>
                        <button>Commander à nouveau</button>
                    </div>
                    <div class="commande-list">
                        <p>Pavé de saumon fumé et citrons confits</p>
                        <ul>
                            <li>Sauce lyonnaise</li>
                            <li>Pommes de terre à létouffée</li>
                        </ul>
                    </div>
                    <div class="commande-list">
                        <p>Pavé de saumon fumé et citrons confits</p>
                        <ul>
                            <li>Sauce lyonnaise</li>
                            <li>Pommes de terre à létouffée</li>
                        </ul>
                    </div>
                    <div class="commande-list">
                        <p>Pavé de saumon fumé et citrons confits</p>
                        <ul>
                            <li>Sauce lyonnaise</li>
                            <li>Pommes de terre à létouffée</li>
                        </ul>
                    </div>
                    <hr>
                    <div class="profile-commandes-body-top d-flex justify-content-between">
                        <p>3 articles - 12/04/2021 <span>32,50€</span></p>
                        <button>Commander à nouveau</button>
                    </div>
                    <div class="commande-list">
                        <p>Pavé de saumon fumé et citrons confits</p>
                        <ul>
                            <li>Sauce lyonnaise</li>
                            <li>Pommes de terre à létouffée</li>
                        </ul>
                    </div>
                    <div class="commande-list">
                        <p>Pavé de saumon fumé et citrons confits</p>
                        <ul>
                            <li>Sauce lyonnaise</li>
                            <li>Pommes de terre à létouffée</li>
                        </ul>
                    </div>
                    <div class="commande-list">
                        <p>Pavé de saumon fumé et citrons confits</p>
                        <ul>
                            <li>Sauce lyonnaise</li>
                            <li>Pommes de terre à létouffée</li>
                        </ul>
                    </div>
                    <div  class="d-flex justify-content-center commandes-page">
                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 1L1 9L9 17" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 17L9 9L1 1" stroke="#9ED1F4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
