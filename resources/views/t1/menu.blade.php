@extends("t1.layout.l2")
@section('content')


<section >
    <div class="container" style="padding-left:0px;padding-right:0px;" >
    <div class="col-sm-12 slick item_bg" id="slick_menu" style="padding-left:-50px;padding-right:-50px;">
      <!---slick-->
      <div class="row slick_menu text-sm-center"  >
       <!---item1-->
         <div class="col-sm-3" >
           <a href="" id="ele" onclick="active(this.id)"><h1 class="col-sm-12 slik_title " >Assiettes</h1></a>
         </div>

       <!---item2-->
       <div class="col-sm-3">
         <a href="" id="ele2" onclick="active(this.id)"><h1 class="col-sm-12 slik_title" >Assortiments </h1></a>
       </div>

       <!--item3-->
       <div class="col-sm-3">
         <a href="" id="ele3" onclick="active(this.id)"><h1 class="col-sm-12 slik_title" >Entrées</h1></a>
       </div>

       <!--item4-->
       <div class="col-sm-3">
         <a href="" id="ele4" onclick="active(this.id)"><h1 class="col-sm-12 slik_title" >Salades </h1></a>
       </div>

       <!--item5-->
       <div class="col-sm-3">
         <a href="" id="ele5" onclick="active(this.id)"><h1 class="col-sm-12 slik_title" >Accompagnements </h1></a>
       </div>

       <!--item6-->
       <div class="col-sm-3">
         <a href="" id="ele6" onclick="active(this.id)"><h1 class="col-sm-12 slik_title" >Boissons </h1></a>
       </div>

       <!--item7-->
       <div class="col-sm-3">
         <a href="" id="ele7" onclick="active(this.id)"><h1 class="col-sm-12 slik_title" >Desserts</h1></a>
       </div>

       <!--item8-->
       <div class="col-sm-3">
         <a href="" id="ele8" onclick="active(this.id)"><h1 class="col-sm-12 slik_title" >Boissons</h1></a>
       </div>

         <!--item9-->
        <div class="col-sm-3">
             <a href="" id="ele9" onclick="active(this.id)"><h1 class="col-sm-12 slik_title" >item9</h1></a>
        </div>

       <!--item10-->
       <div class="col-sm-3">
         <a href="" id="ele10" onclick="active(this.id)"><h1 class="col-sm-12 slik_title" >item10 </h1></a>
       </div>

       <!--item11-->
       <div class="col-sm-3">
         <a href="" id="ele11" onclick="active(this.id)"><h1 class="col-sm-12 slik_title" >item11 </h1></a>
      </div>

       <!--item12-->
       <div class="col-sm-3">
         <a href="" id="ele12" onclick="active(this.id)"><h1 class="col-sm-12 slik_title" >item12</h1></a>
       </div>

         <!--item13-->
       <div class="col-sm-3">
         <a href="" id="ele13" onclick="active(this.id)"><h1 class="col-sm-12 slik_title" >item13 </h1></a>
       </div>

       <!--item14-->
       <div class="col-sm-3" >
         <a href="" id="ele14" onclick="active(this.id)"><h1 class="col-sm-12 slik_title" >item14</h1></a>
       </div>
     </div>
     <hr class="hr-style"/>

  </div>

  </div>
</section>

<section>
      <div class="container">

          <div class="row">

              <div class="col-sm-9 " id="articles">

                  <!--s-->
                  <div class="row class_margin" id="pro1" onclick="popup(this.id)">
                      <!--img-->
                      <div class="col-3 d-flex justify-content-center item_bg align-items-center" style="background-image:url('https://drive.google.com/thumbnail?id=1JUkZHEpi2T5FbrZCbX7KzGX_rqVL7dIK');background-position:center;background-repeat:no-repeat;">

                      </div>
                      <!--text-->
                      <div class="col-9 class_padding_text d-flex item_bg flex-column justify-content-center" >
                          <h1 class="article_title ">Pavé de saumon fumé et citrons confits</h1>
                          <p class="p_article ">Délicieux pavé de saumon frais accompagné de sa sauce aux citrons confits et au thym frais.Servi avec acommpagnement.</p>
                          <h4 class="h_choix">Choix de :boisson,accompagnement,sauce</h4>
                          <div class="row align-items-center">
                              <div class="col-sm-8">
                                  <h4 class="article_price_menu">9.99€</h4>
                              </div>
                              <div class="col-4 text-sm-right">
                           <span  id="produit1" onclick="toggle_menu(this.id)"class="iconify col-sm-4 slick_icon_add "   data-icon="fluent:add-square-24-filled" data-inline="false" width="2em" height="2em" ></span>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row class_margin item_bg " id="pro2" onclick="popup(this.id)">
                      <!--img-->
                      <div class="col-sm-2 d-flex justify-content-center align-items-center">
                          <img src="https://drive.google.com/thumbnail?id=1JUkZHEpi2T5FbrZCbX7KzGX_rqVL7dIK" class="img-fluid" alt="">

                      </div>
                      <!--text-->
                      <div class="col-sm-10 class_padding_text d-flex flex-column justify-content-center" >
                          <h1 class="article_title">Pavé de saumon fumé et citrons confits</h1>
                          <p class="p_article">Délicieux pavé de saumon frais accompagné de sa sauce aux citrons confits et au thym frais.Servi avec acommpagnement.</p>
                          <h4 class="h_choix">Choix de :boisson,accompagnement,sauce</h4>
                          <div class="row align-items-center">
                              <div class="col-sm-8">
                                  <h4 class="article_price_menu">9.99€</h4>
                              </div>
                              <div class="col-sm-4 text-sm-right">
                                <span  id="produit2" onclick="toggle_menu(this.id)"class="iconify col-sm-4 slick_icon_add hided"   data-icon="fluent:add-square-24-filled" data-inline="false" width="2em" height="2em" ></span>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row class_margin item_bg" id="pro8" onclick="popup(this.id)">
                      <!--img-->
                      <div class="col-sm-2 d-flex justify-content-center align-items-center">
                          <img src="https://drive.google.com/thumbnail?id=1JUkZHEpi2T5FbrZCbX7KzGX_rqVL7dIK" class="img-fluid" alt="">

                      </div>
                      <!--text-->
                      <div class="col-sm-10 class_padding_text d-flex flex-column justify-content-center" >
                          <h1 class="article_title">Pavé de saumon fumé et citrons confits</h1>
                          <p class="p_article">Délicieux pavé de saumon frais accompagné de sa sauce aux citrons confits et au thym frais.Servi avec acommpagnement.</p>
                          <h4 class="h_choix">Choix de :boisson,accompagnement,sauce</h4>
                          <div class="row align-items-center">
                              <div class="col-sm-8">
                                  <h4 class="article_price_menu">9.99€</h4>
                              </div>
                              <div class="col-sm-4 text-sm-right">
                                <span  id="produit3" onclick="toggle_menu(this.id)"class="iconify col-sm-4 slick_icon_add hided"   data-icon="fluent:add-square-24-filled" data-inline="false" width="2em" height="2em" ></span>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row class_margin item_bg" id="pro3" onclick="popup(this.id)">
                      <!--img-->
                      <div class="col-sm-2 d-flex justify-content-center align-items-center">
                          <img src="https://drive.google.com/thumbnail?id=1JUkZHEpi2T5FbrZCbX7KzGX_rqVL7dIK" class="img-fluid" alt="">

                      </div>
                      <!--text-->
                      <div class="col-sm-10 class_padding_text d-flex flex-column justify-content-center" >
                          <h1 class="article_title">Pavé de saumon fumé et citrons confits</h1>
                          <p class="p_article">Délicieux pavé de saumon frais accompagné de sa sauce aux citrons confits et au thym frais.Servi avec acommpagnement.</p>
                          <h4 class="h_choix">Choix de :boisson,accompagnement,sauce</h4>
                          <div class="row align-items-center">
                              <div class="col-sm-8">
                                  <h4 class="article_price_menu">9.99€</h4>
                              </div>
                              <div class="col-sm-4 text-sm-right">
                                <span  id="produit4" onclick="toggle_menu(this.id)"class="iconify col-sm-4 slick_icon_add hided"   data-icon="fluent:add-square-24-filled" data-inline="false" width="2em" height="2em" ></span>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row class_margin item_bg" id="pro4" onclick="popup(this.id)">
                      <!--img-->
                      <div class="col-sm-2 d-flex justify-content-center align-items-center">
                          <img src="https://drive.google.com/thumbnail?id=1JUkZHEpi2T5FbrZCbX7KzGX_rqVL7dIK" class="img-fluid" alt="">

                      </div>
                      <!--text-->
                      <div class="col-sm-10 class_padding_text d-flex flex-column justify-content-center" >
                          <h1 class="article_title">Pavé de saumon fumé et citrons confits</h1>
                          <p class="p_article">Délicieux pavé de saumon frais accompagné de sa sauce aux citrons confits et au thym frais.Servi avec acommpagnement.</p>
                          <h4 class="h_choix">Choix de :boisson,accompagnement,sauce</h4>
                          <div class="row align-items-center">
                              <div class="col-sm-8">
                                  <h4 class="article_price_menu">9.99€</h4>
                              </div>
                              <div class="col-sm-4 text-sm-right">
                                <span  id="produit5" onclick="toggle_menu(this.id)"class="iconify col-sm-4 slick_icon_add hided"   data-icon="fluent:add-square-24-filled" data-inline="false" width="2em" height="2em" ></span>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row  class_margin item_bg" id="pro5" onclick="popup(this.id)">
                      <!--img-->
                      <div class="col-sm-2 d-flex justify-content-center align-items-center">
                          <img src="https://drive.google.com/thumbnail?id=1JUkZHEpi2T5FbrZCbX7KzGX_rqVL7dIK" class="img-fluid" alt="">

                      </div>
                      <!--text-->
                      <div class="col-sm-10 class_padding_text d-flex flex-column justify-content-center" >
                          <h1 class="article_title">Pavé de saumon fumé et citrons confits</h1>
                          <p class="p_article">Délicieux pavé de saumon frais accompagné de sa sauce aux citrons confits et au thym frais.Servi avec acommpagnement.</p>
                          <h4 class="h_choix">Choix de :boisson,accompagnement,sauce</h4>
                          <div class="row align-items-center">
                              <div class="col-sm-8">
                                  <h4 class="article_price_menu">9.99€</h4>
                              </div>
                              <div class="col-sm-4 text-sm-right">
                                <span  id="produit6" onclick="toggle_menu(this.id)"class="iconify col-sm-4 slick_icon_add hided"   data-icon="fluent:add-square-24-filled" data-inline="false" width="2em" height="2em" ></span>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row class_margin item_bg" id="pro6" onclick="popup(this.id)">
                      <!--img-->
                      <div class="col-sm-2 d-flex justify-content-center align-items-center">
                          <img src="https://drive.google.com/thumbnail?id=1JUkZHEpi2T5FbrZCbX7KzGX_rqVL7dIK" class="img-fluid" alt="">

                      </div>
                      <!--text-->
                      <div class="col-sm-10 class_padding_text d-flex flex-column justify-content-center" >
                          <h1 class="article_title">Pavé de saumon fumé et citrons confits</h1>
                          <p class="p_article">Délicieux pavé de saumon frais accompagné de sa sauce aux citrons confits et au thym frais.Servi avec acommpagnement.</p>
                          <h4 class="h_choix">Choix de :boisson,accompagnement,sauce</h4>
                          <div class="row align-items-center">
                              <div class="col-sm-8">
                                  <h4 class="article_price_menu">9.99€</h4>
                              </div>
                              <div class="col-sm-4 text-sm-right">
                                <span  id="produit7" onclick="toggle_menu(this.id)"class="iconify col-sm-4 slick_icon_add hided"   data-icon="fluent:add-square-24-filled" data-inline="false" width="2em" height="2em" ></span>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row class_margin item_bg" id="pro7" onclick="popup(this.id)">
                      <!--img-->
                      <div class="col-sm-2 d-flex justify-content-center align-items-center">
                          <img src="https://drive.google.com/thumbnail?id=1JUkZHEpi2T5FbrZCbX7KzGX_rqVL7dIK" class="img-fluid" alt="">

                      </div>
                      <!--text-->
                      <div class="col-sm-10 class_padding_text d-flex flex-column justify-content-center" >
                          <h1 class="article_title">Pavé de saumon fumé et citrons confits</h1>
                          <p class="p_article">Délicieux pavé de saumon frais accompagné de sa sauce aux citrons confits et au thym frais.Servi avec acommpagnement.</p>
                          <h4 class="h_choix">Choix de :boisson,accompagnement,sauce</h4>
                          <div class="row align-items-center">
                              <div class="col-sm-8">
                                  <h4 class="article_price_menu">9.99€</h4>
                              </div>
                              <div class="col-sm-4 text-sm-right">
                                <span  id="produit8" onclick="toggle_menu(this.id)"class="iconify col-sm-4 slick_icon_add hided"   data-icon="fluent:add-square-24-filled" data-inline="false" width="2em" height="2em" ></span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-3  div_form_menu    " id="div_form_menu" >
                <div class="container">
                  <form action="" class="item_bg" >
                      <h1 class="article_title">Pave de saumon fumé et citrons confits</h1>
                      <h4 class="p_article">Choix boisson :</h4>
                      <div class="control-group">
                          <label class="control control-checkbox">
                            Coca-cola 33cl<input type="checkbox" checked="checked" />
                              <div class="control_indicator"></div>
                          </label>
                          <label class="control control-checkbox">
                            Fanta 33cl<input type="checkbox" />
                              <div class="control_indicator"></div>
                          </label>
                          <label class="control control-checkbox">
                            Eau plat 50cl
                                  <input type="checkbox" />
                              <div class="control_indicator"></div>
                          </label>
                          <label class="control control-checkbox">
                            Ice Tea Lipton 33cl
                                <input type="checkbox" />
                            <div class="control_indicator"></div>
                        </label>
                      </div>
                      <h4 class="p_article">Choix accompagnement :</h4>
                      <div class="control-group">
                          <label class="control control-checkbox">
                            Frites Belge<input type="checkbox" checked="checked" />
                              <div class="control_indicator"></div>
                          </label>
                          <label class="control control-checkbox">
                            Potatoes + 1.50€<input type="checkbox" />
                              <div class="control_indicator"></div>
                          </label>
                          <label class="control control-checkbox">
                            Pommes de terre à la Lyonnaise + 2.50€
                                  <input type="checkbox" />
                              <div class="control_indicator"></div>
                          </label>
                        </div>
                      <h4 class="p_article">Choix sauce :</h4>
                      <div class="control-group">
                          <label class="control control-checkbox">
                            Andalouse + 0.50€<input type="checkbox" checked="checked" />
                              <div class="control_indicator"></div>
                          </label>
                          <label class="control control-checkbox">
                            Samorai  + 0.50€<input type="checkbox" />
                              <div class="control_indicator"></div>
                          </label>
                          <label class="control control-checkbox">
                            Ketchup  + 0.50€
                                  <input type="checkbox" />
                              <div class="control_indicator"></div>
                          </label>
                          <label class="control control-checkbox">
                            Mayonnaise  + 0.50€
                                <input type="checkbox" />
                            <div class="control_indicator"></div>
                        </label>
                      </div>

                      <h4 class="p_article">Ingrédients :</h4>
                      <div id="unique">
                        <div class="control-group">
                          <label class="control control-checkbox">
                            Sans cornichons
                              <input type="checkbox" checked="checked" />
                              <div class="control_indicator"></div>
                          </label>
                          <label class="control control-checkbox">
                            Sans fromage
                              <input type="checkbox" />
                              <div class="control_indicator"></div>
                          </label>
                          <label class="control control-checkbox">
                            Sans sauce
                              <input type="checkbox" />
                              <div class="control_indicator"></div>
                          </label>
                          <label class="control control-checkbox">
                            Sans oignons
                              <input type="checkbox" />
                              <div class="control_indicator"></div>
                          </label>
                      </div>

                      </div>
                      <h4 class="p_article">Commentaire :</h4>
                      <div class="control-group">
                        <textarea id="commentaire" name="commentaire"  rows="4" cols="20">

                          </textarea>
                      </div>

                      <div class="control-group">
                        <input type="button" class="botton" onclick="hide_menu()" value="Ajouter"/>
                      </div>

                  </form>
                </div>
              </div>
          </div>
      </div>
  </section>


@endsection
