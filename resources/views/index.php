<!DOCTYPE html>
<html lang="tr" ng-app="ferry-goat">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title ng-bind="'Ferry-Goat A.Ş. &dash; ' + title">Ferry-Goat A.Ş.</title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-route.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-animate.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-aria.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/restangular/1.5.1/restangular.js"></script>
    </head>

    <body>
        <header>
            <nav class="light-blue lighten-1" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="#/" class="brand-logo" title="Anasayfa">
                        Ferry-Goat
                    </a>

                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a href="#/ferries">Feribotlar</a>
                        </li>

                        <li>
                            <a href="#/routes">Seferler</a>
                        </li>
                    </ul>

                    <ul id="nav-mobile" class="side-nav">
                        <li>
                            <a href="#/ferries">Feribotlar</a>
                        </li>

                        <li>
                            <a href="#/routes">Seferler</a>
                        </li>
                    </ul>

                    <a href="#" data-activates="nav-mobile" class="button-collapse">
                        <i class="material-icons">menu</i>
                    </a>
                </div>
            </nav>
        </header>

        <main class="container">
            <div ng-view></div>
        </main>

        <footer class="page-footer orange">
            <div class="container">
                <div class="row">
                    <div class="col s12 l6">
                        <h5 class="white-text">Şirket Profili</h5>

                        <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, minima iste laborum officia. Numquam, perspiciatis, placeat! Unde, facere molestiae debitis doloremque mollitia esse, corrupti omnis quia sint odio, eum blanditiis laboriosam temporibus, voluptate quae! Nemo sit inventore ex aliquam saepe tenetur tempore, ipsam earum deleniti.</p>
                    </div>

                    <div class="col s12 l4">
                        <h5 class="white-text">Site Haritası</h5>

                        <div class="row">
                            <div class="col s12 m4">
                                <h6 class="white-text">Feribotlar</h6>

                                <ul>
                                    <li>
                                        <a href="#/ferries" class="orange-text text-lighten-4">Listele</a>
                                    </li>

                                    <li>
                                        <a href="#/ferries/create" class="orange-text text-lighten-4">Ekle</a>
                                    </li>

                                    <li>
                                        <a href="#/ferries/update" class="orange-text text-lighten-4">Düzenle</a>
                                    </li>

                                    <li>
                                        <a href="#/ferries/delete" class="orange-text text-lighten-4">Sil</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col s12 m4">
                                <h6 class="white-text">Seferler</h6>

                                <ul>
                                    <li>
                                        <a href="#/routes" class="orange-text text-lighten-4">Listele</a>
                                    </li>

                                    <li>
                                        <a href="#/routes/create" class="orange-text text-lighten-4">Ekle</a>
                                    </li>

                                    <li>
                                        <a href="#/routes/update" class="orange-text text-lighten-4">Düzenle</a>
                                    </li>

                                    <li>
                                        <a href="#/routes/delete" class="orange-text text-lighten-4">Sil</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col s12 m4">
                                <h6 class="white-text">Limanlar</h6>

                                <ul>
                                    <li>
                                        <a href="#/ports" class="orange-text text-lighten-4">Listele</a>
                                    </li>

                                    <li>
                                        <a href="#/ports/create" class="orange-text text-lighten-4">Ekle</a>
                                    </li>

                                    <li>
                                        <a href="#/ports/update" class="orange-text text-lighten-4">Düzenle</a>
                                    </li>

                                    <li>
                                        <a href="#/ports/delete" class="orange-text text-lighten-4">Sil</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="container">
                    Front-end
                    <a href="https://angularjs.org/" class="orange-text text-lighten-3">AngularJS</a>
                    ve
                    <a href="http://materializecss.com" class="orange-text text-lighten-3">Materialize</a>
                    ile, back-end
                    <a href="http://lumen.laravel.com/" class="orange-text text-lighten-3">Lumen</a>
                    ile,
                    <a href="http://ozanmuyes.com" class="orange-text text-lighten-3">Ozan Müyesseroğlu</a>
                    tarafından kodlandı.
                </div>
            </div>
        </footer>

        <script src="js/index/index.js"></script>
        <script src="js/ferries/ferries.js"></script>
        <script src="js/routes/routes.js"></script>
        <script src="js/init.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>