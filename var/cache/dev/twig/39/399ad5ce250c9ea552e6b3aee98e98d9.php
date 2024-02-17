<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* gaming/juegos.html.twig */
class __TwigTemplate_5c8f0838c9f09062635069b62daf0bae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gaming/juegos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gaming/juegos.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>CasinoRoyal: Tu casino blockchain de confianza</title>

    <link rel=\"shortcut icon\" href=\"/assets/images/fav.png\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"/assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/fontawesome.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/plugin/nice-select.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/plugin/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/plugin/slick.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/plugin/odometer.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/arafat-font.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/plugin/animate.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
</head>

<body>
    <!-- start preloader -->
    <div class=\"preloader align-items-center justify-content-center\">
        <div class=\"load\">
            <hr/><hr/><hr/><hr/>
        </div>
    </div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <button class=\"scrollToTop\"><i class=\"fas fa-angle-double-up\"></i></button>
    <!-- Scroll To Top End -->

";
        // line 37
        $this->loadTemplate("partials/menu.html.twig", "gaming/juegos.html.twig", 37)->display($context);
        // line 38
        echo "
    <!-- inner banner start -->
    <section class=\"banner-section inner-banner about play-go\">
        <div class=\"banner-content position-relative d-flex align-items-center\">
            <div class=\"abs-area d-none d-lg-block\">
                <img src=\"/assets/images/play-shape-1.png\" class=\"shape-1 position-absolute\" alt=\"image\">
            </div>
            <div class=\"container\">
                <div class=\"row d-flex justify-content-start\">
                    <div class=\"col-md-7 col-sm-9\">
                        <div class=\"text-area\">
                            <h2>Play as you go</h2>
                            <div class=\"breadcrumb-area\">
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb d-flex gap-2 gap-lg-0 mt-2 mt-lg-0\">
                                        <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Play</a></li>
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Play as you go</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-5 col-sm-3\">
                        <div class=\"illus-area d-none d-sm-block position-absolute\">
                            <img src=\"/assets/images/banner-play-go-illus.png\" class=\"wow fadeInUp\" alt=\"icon\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- Compete In start -->
    <section class=\"browse-games compete-in play-you-go\">
        <div class=\"overlay pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"section-text text-center\">
                        <h2>Juegos Royal</h2>
                    </div>
                </div>
                <div class=\"row gap-sm-0 gap-3 mb-3 mb-sm-0\">
                    <div class=\"col-md-12\">
                        <ul class=\"nav justify-content-center\" role=\"tablist\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link active\" id=\"free-games-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#free-games\" type=\"button\" role=\"tab\"
                                    aria-controls=\"free-games\" aria-selected=\"true\">Novedades</button>
                            </li>
                           
                            <li class=\"nav-item\" role=\"presentation\">                
                                <button class=\"nav-link\" id=\"coming-soon-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#coming-soon\" type=\"button\" role=\"tab\"
                                    aria-controls=\"coming-soon\" aria-selected=\"false\">Próximamente</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"tab-content\">
                    <div class=\"tab-pane fade show active\" id=\"free-games\" role=\"tabpanel\"
                        aria-labelledby=\"free-games-tab\">
                        <div class=\"row cus-mar mt-3\">
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-box p-0\">
                                    <div class=\"single-slide m-0\">
                                        <div class=\"icon-box position-relative\">
                                            <img src=\"/assets/images/juego-1.png\" alt=\"image\">
                                            <div class=\"abs-area\">
                                                <span style=\"background-color:green; color: black;\" class=\"live-area mdtxt\">Disponible</span>
                                                <span class=\"entry mdtxt\">Mín: 0.15 EUR</span>
                                            </div>
                                        </div>
                                        <div class=\"bottom-area\">
                                            <div class=\"countdown d-flex align-items-center\">
                                                <span class=\"mdtxt\">
                                                    <span>Oferta acaba en</span>
                                                    <span class=\"hours\">00</span><span class=\"ref\">H </span>
                                                </span>
                                                <span class=\"mdtxt\">
                                                    <span class=\"minutes\">00</span><span class=\"ref\">M </span>
                                                </span>
                                                <span class=\"mdtxt\">
                                                    <span class=\"seconds\">00</span><span class=\"ref\">S</span>
                                                </span>
                                            </div>
                                            <h5>Royal Escape V2</h5>
                                            <div class=\"player-area d-flex flex-wrap gap-3 gap-sm-0 align-items-center justify-content-between\">
                                                <div class=\"single\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/search-icon-2.png\" alt=\"icon\">
                                                    </div>
                                                    <p><button id=\"Juego1\">Info Juego</button></p>

                                                </div>
                                                <div class=\"single\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-3.png\" alt=\"icon\">
                                                    </div>
                                                    <p>Jugando: <span>12</span></p>
                                                </div>
                                            </div>
                                            <p class=\"mdtxt mt-4 mb-4 prize-pool text-center w-100\">Jackpot: <span class=\"lgtxt\">0.90 <i class=\"fab fa-btc\"></i></span></p>
                                            <div class=\"btn-area mb-3\">
                                                <a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_royalv2");
        echo "\" class=\"w-100 text-center cmn-btn justify-content-center\">Jugar ahora</a>
                                            </div>
                                            <p class=\"mdtxt text-center\">Game ID: 1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-box p-0\">
                                    <div class=\"single-slide m-0\">
                                        <div class=\"icon-box position-relative\">
                                            <img src=\"/assets/images/juego-2.png\" alt=\"image\">
                                            <div class=\"abs-area\">
                                                <span class=\"live-area mdtxt\">Mantenimiento</span>
                                                <span class=\"entry mdtxt\">Mín: 0.50 EUR</span>
                                            </div>
                                        </div>
                                        <div class=\"bottom-area\">
                                            <div class=\"countdown d-flex align-items-center\">
                                                <span class=\"mdtxt\">
                                                    <span>Oferta acaba en</span>
                                                    <span class=\"hours\">00</span><span class=\"ref\">H </span>
                                                </span>
                                                <span class=\"mdtxt\">
                                                    <span class=\"minutes\">00</span><span class=\"ref\">M </span>
                                                </span>
                                                <span class=\"mdtxt\">
                                                    <span class=\"seconds\">00</span><span class=\"ref\">S</span>
                                                </span>
                                            </div>
                                            <h5>Desactiva la bomba</h5>
                                            <div class=\"player-area d-flex flex-wrap gap-3 gap-sm-0 align-items-center justify-content-between\">
                                                <div class=\"single\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/search-icon-2.png\" alt=\"icon\">
                                                    </div>
                                                    <p><button id=\"Juego2\">Info Juego</button></p>
                                                </div>
                                                <div class=\"single\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-3.png\" alt=\"icon\">
                                                    </div>
                                                    <p>Jugando: <span>0</span></p>
                                                </div>
                                            </div>
                                            <p class=\"mdtxt mt-4 mb-4 prize-pool text-center w-100\">Jackpot: <span class=\"lgtxt\">0.10 <i class=\"fab fa-btc\"></i></span></p>
                                            <div class=\"btn-area mb-3\">
                                                <a href=\"";
        // line 190
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_bomba");
        echo "\" class=\"w-100 text-center cmn-btn justify-content-center\">Jugar Ahora</a>
                                            </div>
                                            <p class=\"mdtxt text-center\">Game ID: 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-box p-0\">
                                    <div class=\"single-slide m-0\">
                                        <div class=\"icon-box position-relative\">
                                            <img src=\"/assets/images/juego-3.png\" alt=\"image\">
                                            <div class=\"abs-area\">
                                                <span class=\"live-area mdtxt\">Mantenimiento</span>
                                                <span class=\"entry mdtxt\">Mín: 5.00 EUR</span>
                                            </div>
                                        </div>
                                        <div class=\"bottom-area\">
                                            <div class=\"countdown d-flex align-items-center\">
                                                <span class=\"mdtxt\">
                                                    <span>Oferta acaba en</span>
                                                    <span class=\"hours\">00</span><span class=\"ref\">H </span>
                                                </span>
                                                <span class=\"mdtxt\">
                                                    <span class=\"minutes\">00</span><span class=\"ref\">M </span>
                                                </span>
                                                <span class=\"mdtxt\">
                                                    <span class=\"seconds\">00</span><span class=\"ref\">S</span>
                                                </span>
                                            </div>
                                            <h5>Rescata a Sheila</h5>
                                            <div class=\"player-area d-flex flex-wrap gap-3 gap-sm-0 align-items-center justify-content-between\">
                                                <div class=\"single\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/search-icon-2.png\" alt=\"icon\">
                                                    </div>
                                                    <p><button id=\"Juego3\">Info Juego</button></p>
                                                </div>
                                                <div class=\"single\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-3.png\" alt=\"icon\">
                                                    </div>
                                                    <p>Jugando: <span>231</span></p>
                                                </div>
                                            </div>
                                            <p class=\"mdtxt mt-4 mb-4 prize-pool text-center w-100\">Jackpot: <span class=\"lgtxt\">1.27 <i class=\"fab fa-btc\"></i></span></p>
                                            <div class=\"btn-area mb-3\">
                                                <a href=\"";
        // line 237
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_sheila");
        echo "\" class=\"w-100 text-center cmn-btn justify-content-center\">Jugar Ahora</a>
                                            </div>
                                            <p class=\"mdtxt text-center\">Game ID: 3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"coming-soon\" role=\"tabpanel\"
                        aria-labelledby=\"coming-soon-tab\">
                        <div class=\"row cus-mar mt-3\">
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-box p-0\">
                                    <div class=\"single-slide m-0\">
                                        <div class=\"icon-box position-relative\">
                                            <img src=\"/assets/images/compete-img-1.png\" alt=\"image\">
                                            <div class=\"abs-area\">
                                                <span class=\"live-area mdtxt\">Live</span>
                                                <span class=\"entry mdtxt\">Entry: \$5</span>
                                            </div>
                                        </div>
                                        <div class=\"bottom-area\">
                                            <div class=\"countdown d-flex align-items-center\">
                                                <span class=\"mdtxt\">
                                                    <span>Ends in</span>
                                                    <span class=\"hours\">00</span><span class=\"ref\">H </span>
                                                </span>
                                                <span class=\"mdtxt\">
                                                    <span class=\"minutes\">00</span><span class=\"ref\">M </span>
                                                </span>
                                                <span class=\"mdtxt\">
                                                    <span class=\"seconds\">00</span><span class=\"ref\">S</span>
                                                </span>
                                            </div>
                                            <h5>Ninja Assassin</h5>
                                            <div class=\"player-area d-flex flex-wrap gap-3 gap-sm-0 align-items-center justify-content-between\">
                                                <div class=\"single\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <p>Players: <span>771</span></p>
                                                </div>
                                                <div class=\"single\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-3.png\" alt=\"icon\">
                                                    </div>
                                                    <p>Playing: <span>12</span></p>
                                                </div>
                                            </div>
                                            <p class=\"mdtxt mt-4 mb-4 prize-pool text-center w-100\">Prize Pool: <span class=\"lgtxt\">0.90<i class=\"fab fa-btc\"></i></span></p>
                                            <div class=\"btn-area mb-3\">
                                                <a href=\"games.html\" class=\"w-100 text-center cmn-btn justify-content-center\">Play Now</a>
                                            </div>
                                            <p class=\"mdtxt text-center\">Game ID: 548</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Compete In end -->

    <!-- Affiliate start -->
    <section class=\"affiliate pb-120\">
        <div class=\"overlay\">
            <div class=\"container\">
                <div class=\"main-content\">
                    <div class=\"row align-items-center justify-content-between\">
                        <div class=\"col-lg-5 mt-60 mb-60\">
                            <div class=\"section-text\">
                                <h5>¡Invita a tus amigos y gana dinero!</h5>
                            </div>
                            <div class=\"btn-area\">
                                <a href=\"";
        // line 316
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afiliated");
        echo "\" class=\"cmn-btn\">Saber más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Affiliate in end -->

    <!-- Video Section start -->
    <section class=\"video-section plas-as m-0 overflow-hidden\">
        <div class=\"overlay pb-120\">
            <div class=\"container-fluid wow fadeInUp\">
                <div class=\"row offset-md-2 offset-lg-1 offset-xxl-2 align-items-center justify-content-between\">
                    <div class=\"col-xxl-5 col-xl-6 col-lg-6 col-md-9\">
                        <div class=\"section-text\">
                            <h2 class=\"mb-3\">Juegos Royal</h2>
                            <p>Nuestro casino está equipado con los últimos juegos más atractivos de todos los casinos online. Juega y gana dinero.</p>
                        </div>
                        <div class=\"btn-area\">
                            <a href=\"#\" class=\"cmn-btn\">Juega ahora</a>
                        </div>
                    </div>
                    <div class=\"col-xxl-6 col-xl-6 col-lg-6 col-md-9 mt-4 mt-lg-0\">
                        <div class=\"magnific-area position-relative d-flex align-items-center justify-content-around\">
                            <div class=\"bg-area w-100\">
                                <img class=\"bg-item w-100\" src=\"/assets/images/video-bg-2.png\" alt=\"image\">
                            </div>
                            <div class=\"content-area text-center position-absolute d-flex align-items-center justify-content-center\">
                                <div class=\"content-box\">
                                    <a class=\"mfp-iframe popupvideo d-flex align-items-center justify-content-center\" href=\"https://www.youtube.com/watch?v=Djz8Nc0Qxwk\">
                                        <img src=\"/assets/images/icon/play-icon.png\" alt=\"icon\">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section end -->



    <!--==================================================================-->
    <script src=\"/assets/js/jquery.min.js\"></script>
    <script src=\"/assets/js/jquery-ui.js\"></script>
    <script src=\"/assets/js/bootstrap.min.js\"></script>
    <script src=\"/assets/js/plugin/jquery.downCount.js\"></script>
    <script src=\"/assets/js/plugin/slick.js\"></script>
    <script src=\"/assets/js/plugin/jquery.nice-select.min.js\"></script>
    <script src=\"/assets/js/plugin/waypoint.min.js\"></script>
    <script src=\"/assets/js/plugin/jquery.magnific-popup.min.js\"></script>
    <script src=\"/assets/js/plugin/wow.min.js\"></script>
    <script src=\"/assets/js/plugin/odometer.min.js\"></script>
    <script src=\"/assets/js/plugin/viewport.jquery.js\"></script>
    <script src=\"/assets/js/plugin/plugin.js\"></script>
    <script src=\"/assets/js/main.js\"></script>
    <script src=\"https://unpkg.com/@popperjs/core@2\"></script>
    <script src=\"https://unpkg.com/tippy.js@6\"></script>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/tippy.js@6/dist/tippy.css\">
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        tippy('#Juego1', {
        animation: 'fade',
        content: 'Royal Escape es un juego donde tendrás que escapar de los malos.',
        });
        tippy('#Juego2', {
        animation: 'fade',
        content: 'En Desactiva la Bomba tendrás que competir con otros jugadores para desactivar una bomba.',
        });
        tippy('#Juego3', {
        animation: 'fade',
        content: '¡Sheila necesita tu ayuda! Juega a este gran juego simulando Flappy Birds.',
        });
    });
    </script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "gaming/juegos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 316,  290 => 237,  240 => 190,  190 => 143,  83 => 38,  81 => 37,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>CasinoRoyal: Tu casino blockchain de confianza</title>

    <link rel=\"shortcut icon\" href=\"/assets/images/fav.png\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"/assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/fontawesome.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/plugin/nice-select.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/plugin/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/plugin/slick.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/plugin/odometer.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/arafat-font.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/plugin/animate.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
</head>

<body>
    <!-- start preloader -->
    <div class=\"preloader align-items-center justify-content-center\">
        <div class=\"load\">
            <hr/><hr/><hr/><hr/>
        </div>
    </div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <button class=\"scrollToTop\"><i class=\"fas fa-angle-double-up\"></i></button>
    <!-- Scroll To Top End -->

{% include 'partials/menu.html.twig' %}

    <!-- inner banner start -->
    <section class=\"banner-section inner-banner about play-go\">
        <div class=\"banner-content position-relative d-flex align-items-center\">
            <div class=\"abs-area d-none d-lg-block\">
                <img src=\"/assets/images/play-shape-1.png\" class=\"shape-1 position-absolute\" alt=\"image\">
            </div>
            <div class=\"container\">
                <div class=\"row d-flex justify-content-start\">
                    <div class=\"col-md-7 col-sm-9\">
                        <div class=\"text-area\">
                            <h2>Play as you go</h2>
                            <div class=\"breadcrumb-area\">
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb d-flex gap-2 gap-lg-0 mt-2 mt-lg-0\">
                                        <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Play</a></li>
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Play as you go</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-5 col-sm-3\">
                        <div class=\"illus-area d-none d-sm-block position-absolute\">
                            <img src=\"/assets/images/banner-play-go-illus.png\" class=\"wow fadeInUp\" alt=\"icon\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- Compete In start -->
    <section class=\"browse-games compete-in play-you-go\">
        <div class=\"overlay pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"section-text text-center\">
                        <h2>Juegos Royal</h2>
                    </div>
                </div>
                <div class=\"row gap-sm-0 gap-3 mb-3 mb-sm-0\">
                    <div class=\"col-md-12\">
                        <ul class=\"nav justify-content-center\" role=\"tablist\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link active\" id=\"free-games-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#free-games\" type=\"button\" role=\"tab\"
                                    aria-controls=\"free-games\" aria-selected=\"true\">Novedades</button>
                            </li>
                           
                            <li class=\"nav-item\" role=\"presentation\">                
                                <button class=\"nav-link\" id=\"coming-soon-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#coming-soon\" type=\"button\" role=\"tab\"
                                    aria-controls=\"coming-soon\" aria-selected=\"false\">Próximamente</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"tab-content\">
                    <div class=\"tab-pane fade show active\" id=\"free-games\" role=\"tabpanel\"
                        aria-labelledby=\"free-games-tab\">
                        <div class=\"row cus-mar mt-3\">
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-box p-0\">
                                    <div class=\"single-slide m-0\">
                                        <div class=\"icon-box position-relative\">
                                            <img src=\"/assets/images/juego-1.png\" alt=\"image\">
                                            <div class=\"abs-area\">
                                                <span style=\"background-color:green; color: black;\" class=\"live-area mdtxt\">Disponible</span>
                                                <span class=\"entry mdtxt\">Mín: 0.15 EUR</span>
                                            </div>
                                        </div>
                                        <div class=\"bottom-area\">
                                            <div class=\"countdown d-flex align-items-center\">
                                                <span class=\"mdtxt\">
                                                    <span>Oferta acaba en</span>
                                                    <span class=\"hours\">00</span><span class=\"ref\">H </span>
                                                </span>
                                                <span class=\"mdtxt\">
                                                    <span class=\"minutes\">00</span><span class=\"ref\">M </span>
                                                </span>
                                                <span class=\"mdtxt\">
                                                    <span class=\"seconds\">00</span><span class=\"ref\">S</span>
                                                </span>
                                            </div>
                                            <h5>Royal Escape V2</h5>
                                            <div class=\"player-area d-flex flex-wrap gap-3 gap-sm-0 align-items-center justify-content-between\">
                                                <div class=\"single\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/search-icon-2.png\" alt=\"icon\">
                                                    </div>
                                                    <p><button id=\"Juego1\">Info Juego</button></p>

                                                </div>
                                                <div class=\"single\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-3.png\" alt=\"icon\">
                                                    </div>
                                                    <p>Jugando: <span>12</span></p>
                                                </div>
                                            </div>
                                            <p class=\"mdtxt mt-4 mb-4 prize-pool text-center w-100\">Jackpot: <span class=\"lgtxt\">0.90 <i class=\"fab fa-btc\"></i></span></p>
                                            <div class=\"btn-area mb-3\">
                                                <a href=\"{{path('game_royalv2')}}\" class=\"w-100 text-center cmn-btn justify-content-center\">Jugar ahora</a>
                                            </div>
                                            <p class=\"mdtxt text-center\">Game ID: 1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-box p-0\">
                                    <div class=\"single-slide m-0\">
                                        <div class=\"icon-box position-relative\">
                                            <img src=\"/assets/images/juego-2.png\" alt=\"image\">
                                            <div class=\"abs-area\">
                                                <span class=\"live-area mdtxt\">Mantenimiento</span>
                                                <span class=\"entry mdtxt\">Mín: 0.50 EUR</span>
                                            </div>
                                        </div>
                                        <div class=\"bottom-area\">
                                            <div class=\"countdown d-flex align-items-center\">
                                                <span class=\"mdtxt\">
                                                    <span>Oferta acaba en</span>
                                                    <span class=\"hours\">00</span><span class=\"ref\">H </span>
                                                </span>
                                                <span class=\"mdtxt\">
                                                    <span class=\"minutes\">00</span><span class=\"ref\">M </span>
                                                </span>
                                                <span class=\"mdtxt\">
                                                    <span class=\"seconds\">00</span><span class=\"ref\">S</span>
                                                </span>
                                            </div>
                                            <h5>Desactiva la bomba</h5>
                                            <div class=\"player-area d-flex flex-wrap gap-3 gap-sm-0 align-items-center justify-content-between\">
                                                <div class=\"single\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/search-icon-2.png\" alt=\"icon\">
                                                    </div>
                                                    <p><button id=\"Juego2\">Info Juego</button></p>
                                                </div>
                                                <div class=\"single\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-3.png\" alt=\"icon\">
                                                    </div>
                                                    <p>Jugando: <span>0</span></p>
                                                </div>
                                            </div>
                                            <p class=\"mdtxt mt-4 mb-4 prize-pool text-center w-100\">Jackpot: <span class=\"lgtxt\">0.10 <i class=\"fab fa-btc\"></i></span></p>
                                            <div class=\"btn-area mb-3\">
                                                <a href=\"{{path('game_bomba')}}\" class=\"w-100 text-center cmn-btn justify-content-center\">Jugar Ahora</a>
                                            </div>
                                            <p class=\"mdtxt text-center\">Game ID: 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-box p-0\">
                                    <div class=\"single-slide m-0\">
                                        <div class=\"icon-box position-relative\">
                                            <img src=\"/assets/images/juego-3.png\" alt=\"image\">
                                            <div class=\"abs-area\">
                                                <span class=\"live-area mdtxt\">Mantenimiento</span>
                                                <span class=\"entry mdtxt\">Mín: 5.00 EUR</span>
                                            </div>
                                        </div>
                                        <div class=\"bottom-area\">
                                            <div class=\"countdown d-flex align-items-center\">
                                                <span class=\"mdtxt\">
                                                    <span>Oferta acaba en</span>
                                                    <span class=\"hours\">00</span><span class=\"ref\">H </span>
                                                </span>
                                                <span class=\"mdtxt\">
                                                    <span class=\"minutes\">00</span><span class=\"ref\">M </span>
                                                </span>
                                                <span class=\"mdtxt\">
                                                    <span class=\"seconds\">00</span><span class=\"ref\">S</span>
                                                </span>
                                            </div>
                                            <h5>Rescata a Sheila</h5>
                                            <div class=\"player-area d-flex flex-wrap gap-3 gap-sm-0 align-items-center justify-content-between\">
                                                <div class=\"single\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/search-icon-2.png\" alt=\"icon\">
                                                    </div>
                                                    <p><button id=\"Juego3\">Info Juego</button></p>
                                                </div>
                                                <div class=\"single\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-3.png\" alt=\"icon\">
                                                    </div>
                                                    <p>Jugando: <span>231</span></p>
                                                </div>
                                            </div>
                                            <p class=\"mdtxt mt-4 mb-4 prize-pool text-center w-100\">Jackpot: <span class=\"lgtxt\">1.27 <i class=\"fab fa-btc\"></i></span></p>
                                            <div class=\"btn-area mb-3\">
                                                <a href=\"{{path('game_sheila')}}\" class=\"w-100 text-center cmn-btn justify-content-center\">Jugar Ahora</a>
                                            </div>
                                            <p class=\"mdtxt text-center\">Game ID: 3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"coming-soon\" role=\"tabpanel\"
                        aria-labelledby=\"coming-soon-tab\">
                        <div class=\"row cus-mar mt-3\">
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-box p-0\">
                                    <div class=\"single-slide m-0\">
                                        <div class=\"icon-box position-relative\">
                                            <img src=\"/assets/images/compete-img-1.png\" alt=\"image\">
                                            <div class=\"abs-area\">
                                                <span class=\"live-area mdtxt\">Live</span>
                                                <span class=\"entry mdtxt\">Entry: \$5</span>
                                            </div>
                                        </div>
                                        <div class=\"bottom-area\">
                                            <div class=\"countdown d-flex align-items-center\">
                                                <span class=\"mdtxt\">
                                                    <span>Ends in</span>
                                                    <span class=\"hours\">00</span><span class=\"ref\">H </span>
                                                </span>
                                                <span class=\"mdtxt\">
                                                    <span class=\"minutes\">00</span><span class=\"ref\">M </span>
                                                </span>
                                                <span class=\"mdtxt\">
                                                    <span class=\"seconds\">00</span><span class=\"ref\">S</span>
                                                </span>
                                            </div>
                                            <h5>Ninja Assassin</h5>
                                            <div class=\"player-area d-flex flex-wrap gap-3 gap-sm-0 align-items-center justify-content-between\">
                                                <div class=\"single\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <p>Players: <span>771</span></p>
                                                </div>
                                                <div class=\"single\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-3.png\" alt=\"icon\">
                                                    </div>
                                                    <p>Playing: <span>12</span></p>
                                                </div>
                                            </div>
                                            <p class=\"mdtxt mt-4 mb-4 prize-pool text-center w-100\">Prize Pool: <span class=\"lgtxt\">0.90<i class=\"fab fa-btc\"></i></span></p>
                                            <div class=\"btn-area mb-3\">
                                                <a href=\"games.html\" class=\"w-100 text-center cmn-btn justify-content-center\">Play Now</a>
                                            </div>
                                            <p class=\"mdtxt text-center\">Game ID: 548</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Compete In end -->

    <!-- Affiliate start -->
    <section class=\"affiliate pb-120\">
        <div class=\"overlay\">
            <div class=\"container\">
                <div class=\"main-content\">
                    <div class=\"row align-items-center justify-content-between\">
                        <div class=\"col-lg-5 mt-60 mb-60\">
                            <div class=\"section-text\">
                                <h5>¡Invita a tus amigos y gana dinero!</h5>
                            </div>
                            <div class=\"btn-area\">
                                <a href=\"{{path('app_afiliated')}}\" class=\"cmn-btn\">Saber más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Affiliate in end -->

    <!-- Video Section start -->
    <section class=\"video-section plas-as m-0 overflow-hidden\">
        <div class=\"overlay pb-120\">
            <div class=\"container-fluid wow fadeInUp\">
                <div class=\"row offset-md-2 offset-lg-1 offset-xxl-2 align-items-center justify-content-between\">
                    <div class=\"col-xxl-5 col-xl-6 col-lg-6 col-md-9\">
                        <div class=\"section-text\">
                            <h2 class=\"mb-3\">Juegos Royal</h2>
                            <p>Nuestro casino está equipado con los últimos juegos más atractivos de todos los casinos online. Juega y gana dinero.</p>
                        </div>
                        <div class=\"btn-area\">
                            <a href=\"#\" class=\"cmn-btn\">Juega ahora</a>
                        </div>
                    </div>
                    <div class=\"col-xxl-6 col-xl-6 col-lg-6 col-md-9 mt-4 mt-lg-0\">
                        <div class=\"magnific-area position-relative d-flex align-items-center justify-content-around\">
                            <div class=\"bg-area w-100\">
                                <img class=\"bg-item w-100\" src=\"/assets/images/video-bg-2.png\" alt=\"image\">
                            </div>
                            <div class=\"content-area text-center position-absolute d-flex align-items-center justify-content-center\">
                                <div class=\"content-box\">
                                    <a class=\"mfp-iframe popupvideo d-flex align-items-center justify-content-center\" href=\"https://www.youtube.com/watch?v=Djz8Nc0Qxwk\">
                                        <img src=\"/assets/images/icon/play-icon.png\" alt=\"icon\">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section end -->



    <!--==================================================================-->
    <script src=\"/assets/js/jquery.min.js\"></script>
    <script src=\"/assets/js/jquery-ui.js\"></script>
    <script src=\"/assets/js/bootstrap.min.js\"></script>
    <script src=\"/assets/js/plugin/jquery.downCount.js\"></script>
    <script src=\"/assets/js/plugin/slick.js\"></script>
    <script src=\"/assets/js/plugin/jquery.nice-select.min.js\"></script>
    <script src=\"/assets/js/plugin/waypoint.min.js\"></script>
    <script src=\"/assets/js/plugin/jquery.magnific-popup.min.js\"></script>
    <script src=\"/assets/js/plugin/wow.min.js\"></script>
    <script src=\"/assets/js/plugin/odometer.min.js\"></script>
    <script src=\"/assets/js/plugin/viewport.jquery.js\"></script>
    <script src=\"/assets/js/plugin/plugin.js\"></script>
    <script src=\"/assets/js/main.js\"></script>
    <script src=\"https://unpkg.com/@popperjs/core@2\"></script>
    <script src=\"https://unpkg.com/tippy.js@6\"></script>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/tippy.js@6/dist/tippy.css\">
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        tippy('#Juego1', {
        animation: 'fade',
        content: 'Royal Escape es un juego donde tendrás que escapar de los malos.',
        });
        tippy('#Juego2', {
        animation: 'fade',
        content: 'En Desactiva la Bomba tendrás que competir con otros jugadores para desactivar una bomba.',
        });
        tippy('#Juego3', {
        animation: 'fade',
        content: '¡Sheila necesita tu ayuda! Juega a este gran juego simulando Flappy Birds.',
        });
    });
    </script>

</body>

</html>", "gaming/juegos.html.twig", "/home/alumno/Symf/CasinoV3/templates/gaming/juegos.html.twig");
    }
}
