<div id="topbar">
            <div class="line1">

                <div class="box-phone">
                    <i class="bi bi-telephone"></i>
                    <span>04 68 89 65 22</span>
                </div>

                <div class="box-social-icons">
                    <a href="#"> <i class="bi bi-facebook"></i> </a>
                    <a href="#"> <i class="bi bi-instagram"></i> </a>
                    <a href="#"> <i class="bi bi-twitter-x"></i> </a>
                </div>

            </div>
            <div class="line2">

                <!-- 1er block : logo du site -->
                <div class="nav-logo">
                    <a href="/">
                        <img class="logo-papapizza" src="/assets/images/homepage/papapizza.svg" alt="logo Papapizza">
                    </a>
                </div>

                <!-- 2ème block : navigation -->
                <div class="nav-list">
                    <nav class="custom-nav">
                        <ul class="custom-ul">
                            <li class="custom-link"><a href="/">Accueil</a></li>
                            <li class="custom-link"><a href="/pizzas">Carte</a></li>
                            <li class="custom-link"><a href="#">Actualités</a></li>
                            <li class="custom-link"><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- 3ème block : menu du profil -->
                <div class="nav-profil">
                    <nav class="custom-nav-profil">
                        <ul class="custom-ul-profil">
                            <!-- <li class="custom-link"><a href="/connexion">Se connecter <i class="bi bi-person custom-svg"></i></a>
                            </li>
                            <li class="custom-link end-link"><a href="#"><i class="bi bi-cart"></i></a></li> -->
                            
                            <li class="custom-link">
                                <!-- Si je suis en session j'affiche mon compte -->
                                <?php

            use App\Controller\OrderController;
            use Core\Session\Session;

                if($auth::isAuth()) $user_id = Session::get(Session::USER)->id;

                                      if ($auth::isAuth()): ?>
                                      
                                    <div class="dropdown custom-link">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Mon compte
                                        <i class="bi bi-person custom-svg"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a href="#" class="dropdown-item custom-link">Profil</a></li>
                                            <li><a href="/user/create-pizza/<?= $user_id ?>" class="dropdown-item custom-link">Créer une pizza</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a href="/user/list-custom-pizza/<?= $user_id ?>" class="dropdown-item custom-link">Mes pizzas</a></li>
                                            <li><a href="/user/list-order/<?= $user_id ?>" class="dropdown-item custom-link">Mes commandes</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item custom-link" href="/logout"> La Déconnexion</a></li>
                                        </ul>
                                    </div>
                                    <!-- sinon j'affiche se connecter  -->
                                    <?php else: ?>
                                        <a href="/connexion">Se connecter <i class="bi bi-person custom-svg"></i></a>
                                    <?php endif ?>

                            </li>
                            <li class="custom-link">
                              <?php
                              
                              if($auth::isAuth()) : ?> 
                                
                                <a href="/order/<?= $user_id ?>" class="position-relative">
                                  <div>
                                    <i class="bi bi-cart custom-svg"></i>
                                    <!-- on vérifie si on a des lignes dans le panier -->
                                     <?php if(OrderController::hasOrderInCart()): ?>
                                      <span class="bg-danger position-absolute top-0 start-100 translate-middle p-1 border border-light rounded-circle">
                                      </span>
                                     <?php endif ?>
                                  </div>
                                </a>

                              <?php endif ?>
                              
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>