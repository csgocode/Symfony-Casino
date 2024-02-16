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
    <title>Dooplo - Gaming HTML Template</title>

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

    <!-- header-section start -->
    <header class=\"header-section header-menu\">
        <nav class=\"navbar navbar-expand-lg p-0\">
            <div class=\"container\">
                <nav class=\"navbar w-100 navbar-expand-lg\">
                    <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center gap-2\">
                        <img src=\"/assets/images/fav.png\" class=\"logo\" alt=\"logo\">
                        <img src=\"/assets/images/logo-alt.png\" class=\"logo-alt\" alt=\"logo-alt\">
                    </a>
                    <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-content\">
                        <i class=\"fas fa-bars\"></i>
                    </button>
                    <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbar-content\">
                        <ul class=\"navbar-nav gap-3 py-4 py-lg-0 m-auto align-self-center\">
                            <li class=\"dropdown show-dropdown\">
                                <a class=\"dropdown-toggle dropdown-nav\" href=\"javascript:void(0)\">Home</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a class=\"dropdown-item\" href=\"index.html\">Home One</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index-2.html\">Home Two</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index-3.html\">Home Three</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index-4.html\">Home Four</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index-5.html\">Home Five</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class=\"dropdown-nav active\" href=\"play-as-you-go.html\">Play</a>
                            </li>
                            <li class=\"dropdown show-dropdown\">
                                <a class=\"dropdown-toggle dropdown-nav\" href=\"javascript:void(0)\">games</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a class=\"dropdown-item\" href=\"games.html\">games</a></li>
                                    <li><a class=\"dropdown-item\" href=\"games-details.html\">games Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class=\"dropdown-nav\" href=\"matchfinders.html\">Matchfinders</a>
                            </li>
                            <li>
                                <a class=\"dropdown-nav\" href=\"leaderboard.html\">leaderboard</a>
                            </li>
                            <li class=\"dropdown show-dropdown\">
                                <a class=\"dropdown-toggle dropdown-nav\" href=\"javascript:void(0)\">Pages</a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"about-us.html\">About</a>
                                    </li>
                                    <li class=\"sub-dropdown\">
                                        <a class=\"dropdown-item dropdown-toggle\" href=\"javascript:void(0)\">tournament</a>
                                        <ul class=\"sub sub-menu dropend\">
                                            <li><a class=\"dropdown-item\" href=\"tournament.html\">tournament</a></li>
                                            <li><a class=\"dropdown-item\" href=\"tournament-details.html\">tournament Details</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"sub-dropdown\">
                                        <a class=\"dropdown-item dropdown-toggle\" href=\"javascript:void(0)\">accounts</a>
                                        <ul class=\"sub sub-menu dropend\">
                                            <li><a class=\"dropdown-item\" href=\"accounts-1.html\">accounts one</a></li>
                                            <li><a class=\"dropdown-item\" href=\"accounts-2.html\">accounts two</a></li>
                                            <li><a class=\"dropdown-item\" href=\"accounts-3.html\">accounts three</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"affiliate.html\">affiliate</a>
                                    </li>
                                    <li class=\"sub-dropdown\">
                                        <a class=\"dropdown-item dropdown-toggle\" href=\"javascript:void(0)\">careers</a>
                                        <ul class=\"sub sub-menu dropend\">
                                            <li><a class=\"dropdown-item\" href=\"careers.html\">careers</a></li>
                                            <li><a class=\"dropdown-item\" href=\"careers-details.html\">careers Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"community.html\">community</a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"features.html\">features</a>
                                    </li>
                                    <li class=\"sub-dropdown\">
                                        <a class=\"dropdown-item dropdown-toggle\" href=\"javascript:void(0)\">help center</a>
                                        <ul class=\"sub sub-menu dropend\">
                                            <li><a class=\"dropdown-item\" href=\"help-center.html\">help center one</a></li>
                                            <li><a class=\"dropdown-item\" href=\"help-center-2.html\">help center two</a></li>
                                            <li><a class=\"dropdown-item\" href=\"help-center-3.html\">help center three</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"sub-dropdown\">
                                        <a class=\"dropdown-item dropdown-toggle\" href=\"javascript:void(0)\">group finder</a>
                                        <ul class=\"sub sub-menu dropend\">
                                            <li><a class=\"dropdown-item\" href=\"group-finder.html\">group finder</a></li>
                                            <li><a class=\"dropdown-item\" href=\"group-details.html\">group Details</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"sub-dropdown\">
                                        <a class=\"dropdown-item dropdown-toggle\" href=\"javascript:void(0)\">profile</a>
                                        <ul class=\"sub sub-menu dropend\">
                                            <li><a class=\"dropdown-item\" href=\"public-profile.html\">public profile</a></li>
                                            <li><a class=\"dropdown-item\" href=\"private-profile.html\">private profile</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"privacy-policy.html\">privacy policy</a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"terms-conditions.html\">terms conditions</a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"how-works.html\">how works</a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"error.html\">404</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown show-dropdown\">
                                <a class=\"dropdown-toggle dropdown-nav\" href=\"javascript:void(0)\">shop</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a class=\"dropdown-item\" href=\"shop.html\">shop</a></li>
                                    <li><a class=\"dropdown-item\" href=\"shop-details.html\">shop details one</a></li>
                                    <li><a class=\"dropdown-item\" href=\"shop-details-2.html\">shop details two</a></li>
                                    <li><a class=\"dropdown-item\" href=\"shop-details-3.html\">shop details three</a></li>
                                    <li><a class=\"dropdown-item\" href=\"shop-cart.html\">shop cart</a></li>
                                    <li><a class=\"dropdown-item\" href=\"calculate-shipping-1.html\">shipping one</a></li>
                                    <li><a class=\"dropdown-item\" href=\"calculate-shipping-2.html\">shipping two</a></li>
                                    <li><a class=\"dropdown-item\" href=\"checkout.html\">checkout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"right-area position-relative d-flex gap-3 gap-xxl-5 align-items-center\">
                            <div class=\"single-item form-search-area\">
                                <div class=\"form-search-btn cmn-head dot\">
                                    <div class=\"icon-area d-center\">
                                        <img src=\"/assets/images/icon/search-icon.png\" alt=\"Icon\">
                                    </div>
                                </div>
                                <div class=\"main-area px-2 py-2 py-sm-4 px-sm-4 form-search-content\">
                                    <form action=\"#\" class=\"search-form\">
                                        <input type=\"text\" placeholder=\"Enter Keywords.......\">
                                        <button class=\"cmn-btn\">Search</button>
                                    </form>
                                </div>
                            </div>
                            <div class=\"btn-area d-flex gap-3 align-items-center\">
                                <a href=\"sign-in.html\">Sign in</a>
                                <a href=\"sign-up.html\" class=\"cmn-btn\">Sign up</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </nav>
    </header>
    <!-- header-section end -->

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
                                                    <p>Info Juego</p>
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
        // line 293
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
                                                    <p>Info Juego</p>
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
        // line 340
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
                                                    <p>Info Juego</p>
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
        // line 387
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
        // line 466
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
                            <h2 class=\"mb-3\">Play as You Go</h2>
                            <p>Play as you go is a place where you can play and compete any time you want, to get to the top of the leaderboard. Gamers will play as many matches as they can within one week to collect points. The leaderboard will reset on every Sunday Midnight.</p>
                        </div>
                        <div class=\"btn-area\">
                            <a href=\"games.html\" class=\"cmn-btn\">Let's Play Now</a>
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

    <!-- Gamers Review start -->
    <section class=\"gamers-review\">
        <div class=\"overlay pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <h2>Happy Players</h2>
                    </div>
                </div>
                <div class=\"review-carousel mt-5\">
                    <div class=\"single-item\">
                        <div class=\"single-content\">
                            <div class=\"single-slide position-relative\">
                                <div class=\"abs-img position-absolute\">
                                    <img src=\"/assets/images/icon/comma.png\" alt=\"icon\">
                                </div>
                                <h5>100% Transparency</h5>
                                <p class=\"lgtxt\">I can say the innovation behind Dooplo is nothing short of incredible. You can’t beat the on-chain experience with its</p>
                                <div class=\"img-area d-flex gap-3\">
                                    <span class=\"img-area\">
                                        <img src=\"/assets/images/profile-image-1.png\" alt=\"image\">
                                    </span>
                                    <div class=\"designation\">
                                        <h5>Allen Barton</h5>
                                        <p>3720 followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"single-item\">
                        <div class=\"single-content\">
                            <div class=\"single-slide position-relative\">
                                <div class=\"abs-img position-absolute\">
                                    <img src=\"/assets/images/icon/comma.png\" alt=\"icon\">
                                </div>
                                <h5>Simply Amazing</h5>
                                <p class=\"lgtxt\">I can say the innovation behind Dooplo is nothing short of incredible. You can’t beat the on-chain experience with its</p>
                                <div class=\"img-area d-flex gap-3\">
                                    <span class=\"img-area\">
                                        <img src=\"/assets/images/profile-image-2.png\" alt=\"image\">
                                    </span>
                                    <div class=\"designation\">
                                        <h5>Zatoshi</h5>
                                        <p>10632 followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"single-item\">
                        <div class=\"single-content\">
                            <div class=\"single-slide position-relative\">
                                <div class=\"abs-img position-absolute\">
                                    <img src=\"/assets/images/icon/comma.png\" alt=\"icon\">
                                </div>
                                <h5>Unique Experience</h5>
                                <p class=\"lgtxt\">I can say the innovation behind Dooplo is nothing short of incredible. You can’t beat the on-chain experience with its</p>
                                <div class=\"img-area d-flex gap-3\">
                                    <span class=\"img-area\">
                                        <img src=\"/assets/images/profile-image-3.png\" alt=\"image\">
                                    </span>
                                    <div class=\"designation\">
                                        <h5>Devon Lane</h5>
                                        <p>33266 followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"single-item\">
                        <div class=\"single-content\">
                            <div class=\"single-slide position-relative\">
                                <div class=\"abs-img position-absolute\">
                                    <img src=\"/assets/images/icon/comma.png\" alt=\"icon\">
                                </div>
                                <h5>Unique Experience</h5>
                                <p class=\"lgtxt\">I can say the innovation behind Dooplo is nothing short of incredible. You can’t beat the on-chain experience with its</p>
                                <div class=\"img-area d-flex gap-3\">
                                    <span class=\"img-area\">
                                        <img src=\"/assets/images/profile-image-3.png\" alt=\"image\">
                                    </span>
                                    <div class=\"designation\">
                                        <h5>Devon Lane</h5>
                                        <p>33266 followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gamers Review end -->

    <!-- Footer Area Start -->
    <footer class=\"footer-section\">
        <div class=\"overlay\">
            <div class=\"call-action\">
                <div class=\"container\">
                    <div class=\"main-content\">
                        <div class=\"row gap-4 gap-lg-0 align-items-center justify-content-between\">
                            <div class=\"col-lg-6\">
                                <div class=\"section-area mb-3\">
                                    <h3>Ready to start Your Journey?</h3>
                                </div>
                                <p>Stop Scrolling, Start Playing.Create your account now and earn 500 coins</p>
                            </div>
                            <div class=\"col-lg-5 d-flex justify-content-lg-end\">
                                <div class=\"btn-area\">
                                    <a href=\"sign-up.html\" class=\"cmn-btn\">Register Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"footer-area\">
                <div class=\"container\">
                    <div class=\"row wrapper mt-80 mb-80\">
                        <div class=\"col-xl-12 cus-mar d-flex flex-wrap align-items-center justify-content-center justify-content-md-between top-area\">
                            <div class=\"single-box d-flex flex-wrap gap-md-5 gap-3 align-items-center justify-content-center justify-content-md-start\">
                                <a href=\"index.html\">
                                    <img src=\"/assets/images/logo.png\" class=\"logo\" alt=\"logo\">
                                </a>
                                <ul class=\"items gap-3 d-flex flex-wrap align-items-center justify-content-md-start justify-content-center\">
                                    <li><a href=\"index-4.html\">Home</a></li>
                                    <li><a href=\"games.html\">Game</a></li>
                                    <li><a href=\"shop.html\">Shop</a></li>
                                    <li><a href=\"about-us.html\">About Us</a></li>
                                    <li><a href=\"sign-in.html\">Support</a></li>
                                </ul>
                            </div>
                            <div class=\"single-box social\">
                                <ul class=\"d-flex\">
                                    <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"footer-bottom\">
                    <div class=\"container\">
                        <div class=\"row gap-md-0 gap-3 justify-content-between\">
                            <div class=\"col-md-6 order-1 order-md-0 text-md-start text-center\">
                                <div class=\"copyright\">
                                    <p>Copyright © <a href=\"index-3.html\">Dooplo</a> | Designed by <a href=\"javascript:void(0)\" class=\"company\">Pixelaxis</a></p>
                                </div>
                            </div>
                            <div class=\"col-md-6 d-flex justify-content-md-end justify-content-center\">
                                <ul class=\"d-flex gap-4 flex-wrap align-items-center\">
                                    <li><a href=\"privacy-policy.html\">Privacy</a></li>
                                    <li><a href=\"terms-conditions.html\">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

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
        return array (  519 => 466,  437 => 387,  387 => 340,  337 => 293,  43 => 1,);
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
    <title>Dooplo - Gaming HTML Template</title>

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

    <!-- header-section start -->
    <header class=\"header-section header-menu\">
        <nav class=\"navbar navbar-expand-lg p-0\">
            <div class=\"container\">
                <nav class=\"navbar w-100 navbar-expand-lg\">
                    <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center gap-2\">
                        <img src=\"/assets/images/fav.png\" class=\"logo\" alt=\"logo\">
                        <img src=\"/assets/images/logo-alt.png\" class=\"logo-alt\" alt=\"logo-alt\">
                    </a>
                    <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-content\">
                        <i class=\"fas fa-bars\"></i>
                    </button>
                    <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbar-content\">
                        <ul class=\"navbar-nav gap-3 py-4 py-lg-0 m-auto align-self-center\">
                            <li class=\"dropdown show-dropdown\">
                                <a class=\"dropdown-toggle dropdown-nav\" href=\"javascript:void(0)\">Home</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a class=\"dropdown-item\" href=\"index.html\">Home One</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index-2.html\">Home Two</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index-3.html\">Home Three</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index-4.html\">Home Four</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index-5.html\">Home Five</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class=\"dropdown-nav active\" href=\"play-as-you-go.html\">Play</a>
                            </li>
                            <li class=\"dropdown show-dropdown\">
                                <a class=\"dropdown-toggle dropdown-nav\" href=\"javascript:void(0)\">games</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a class=\"dropdown-item\" href=\"games.html\">games</a></li>
                                    <li><a class=\"dropdown-item\" href=\"games-details.html\">games Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class=\"dropdown-nav\" href=\"matchfinders.html\">Matchfinders</a>
                            </li>
                            <li>
                                <a class=\"dropdown-nav\" href=\"leaderboard.html\">leaderboard</a>
                            </li>
                            <li class=\"dropdown show-dropdown\">
                                <a class=\"dropdown-toggle dropdown-nav\" href=\"javascript:void(0)\">Pages</a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"about-us.html\">About</a>
                                    </li>
                                    <li class=\"sub-dropdown\">
                                        <a class=\"dropdown-item dropdown-toggle\" href=\"javascript:void(0)\">tournament</a>
                                        <ul class=\"sub sub-menu dropend\">
                                            <li><a class=\"dropdown-item\" href=\"tournament.html\">tournament</a></li>
                                            <li><a class=\"dropdown-item\" href=\"tournament-details.html\">tournament Details</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"sub-dropdown\">
                                        <a class=\"dropdown-item dropdown-toggle\" href=\"javascript:void(0)\">accounts</a>
                                        <ul class=\"sub sub-menu dropend\">
                                            <li><a class=\"dropdown-item\" href=\"accounts-1.html\">accounts one</a></li>
                                            <li><a class=\"dropdown-item\" href=\"accounts-2.html\">accounts two</a></li>
                                            <li><a class=\"dropdown-item\" href=\"accounts-3.html\">accounts three</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"affiliate.html\">affiliate</a>
                                    </li>
                                    <li class=\"sub-dropdown\">
                                        <a class=\"dropdown-item dropdown-toggle\" href=\"javascript:void(0)\">careers</a>
                                        <ul class=\"sub sub-menu dropend\">
                                            <li><a class=\"dropdown-item\" href=\"careers.html\">careers</a></li>
                                            <li><a class=\"dropdown-item\" href=\"careers-details.html\">careers Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"community.html\">community</a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"features.html\">features</a>
                                    </li>
                                    <li class=\"sub-dropdown\">
                                        <a class=\"dropdown-item dropdown-toggle\" href=\"javascript:void(0)\">help center</a>
                                        <ul class=\"sub sub-menu dropend\">
                                            <li><a class=\"dropdown-item\" href=\"help-center.html\">help center one</a></li>
                                            <li><a class=\"dropdown-item\" href=\"help-center-2.html\">help center two</a></li>
                                            <li><a class=\"dropdown-item\" href=\"help-center-3.html\">help center three</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"sub-dropdown\">
                                        <a class=\"dropdown-item dropdown-toggle\" href=\"javascript:void(0)\">group finder</a>
                                        <ul class=\"sub sub-menu dropend\">
                                            <li><a class=\"dropdown-item\" href=\"group-finder.html\">group finder</a></li>
                                            <li><a class=\"dropdown-item\" href=\"group-details.html\">group Details</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"sub-dropdown\">
                                        <a class=\"dropdown-item dropdown-toggle\" href=\"javascript:void(0)\">profile</a>
                                        <ul class=\"sub sub-menu dropend\">
                                            <li><a class=\"dropdown-item\" href=\"public-profile.html\">public profile</a></li>
                                            <li><a class=\"dropdown-item\" href=\"private-profile.html\">private profile</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"privacy-policy.html\">privacy policy</a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"terms-conditions.html\">terms conditions</a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"how-works.html\">how works</a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"error.html\">404</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown show-dropdown\">
                                <a class=\"dropdown-toggle dropdown-nav\" href=\"javascript:void(0)\">shop</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a class=\"dropdown-item\" href=\"shop.html\">shop</a></li>
                                    <li><a class=\"dropdown-item\" href=\"shop-details.html\">shop details one</a></li>
                                    <li><a class=\"dropdown-item\" href=\"shop-details-2.html\">shop details two</a></li>
                                    <li><a class=\"dropdown-item\" href=\"shop-details-3.html\">shop details three</a></li>
                                    <li><a class=\"dropdown-item\" href=\"shop-cart.html\">shop cart</a></li>
                                    <li><a class=\"dropdown-item\" href=\"calculate-shipping-1.html\">shipping one</a></li>
                                    <li><a class=\"dropdown-item\" href=\"calculate-shipping-2.html\">shipping two</a></li>
                                    <li><a class=\"dropdown-item\" href=\"checkout.html\">checkout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"right-area position-relative d-flex gap-3 gap-xxl-5 align-items-center\">
                            <div class=\"single-item form-search-area\">
                                <div class=\"form-search-btn cmn-head dot\">
                                    <div class=\"icon-area d-center\">
                                        <img src=\"/assets/images/icon/search-icon.png\" alt=\"Icon\">
                                    </div>
                                </div>
                                <div class=\"main-area px-2 py-2 py-sm-4 px-sm-4 form-search-content\">
                                    <form action=\"#\" class=\"search-form\">
                                        <input type=\"text\" placeholder=\"Enter Keywords.......\">
                                        <button class=\"cmn-btn\">Search</button>
                                    </form>
                                </div>
                            </div>
                            <div class=\"btn-area d-flex gap-3 align-items-center\">
                                <a href=\"sign-in.html\">Sign in</a>
                                <a href=\"sign-up.html\" class=\"cmn-btn\">Sign up</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </nav>
    </header>
    <!-- header-section end -->

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
                                                    <p>Info Juego</p>
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
                                                    <p>Info Juego</p>
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
                                                    <p>Info Juego</p>
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
                            <h2 class=\"mb-3\">Play as You Go</h2>
                            <p>Play as you go is a place where you can play and compete any time you want, to get to the top of the leaderboard. Gamers will play as many matches as they can within one week to collect points. The leaderboard will reset on every Sunday Midnight.</p>
                        </div>
                        <div class=\"btn-area\">
                            <a href=\"games.html\" class=\"cmn-btn\">Let's Play Now</a>
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

    <!-- Gamers Review start -->
    <section class=\"gamers-review\">
        <div class=\"overlay pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <h2>Happy Players</h2>
                    </div>
                </div>
                <div class=\"review-carousel mt-5\">
                    <div class=\"single-item\">
                        <div class=\"single-content\">
                            <div class=\"single-slide position-relative\">
                                <div class=\"abs-img position-absolute\">
                                    <img src=\"/assets/images/icon/comma.png\" alt=\"icon\">
                                </div>
                                <h5>100% Transparency</h5>
                                <p class=\"lgtxt\">I can say the innovation behind Dooplo is nothing short of incredible. You can’t beat the on-chain experience with its</p>
                                <div class=\"img-area d-flex gap-3\">
                                    <span class=\"img-area\">
                                        <img src=\"/assets/images/profile-image-1.png\" alt=\"image\">
                                    </span>
                                    <div class=\"designation\">
                                        <h5>Allen Barton</h5>
                                        <p>3720 followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"single-item\">
                        <div class=\"single-content\">
                            <div class=\"single-slide position-relative\">
                                <div class=\"abs-img position-absolute\">
                                    <img src=\"/assets/images/icon/comma.png\" alt=\"icon\">
                                </div>
                                <h5>Simply Amazing</h5>
                                <p class=\"lgtxt\">I can say the innovation behind Dooplo is nothing short of incredible. You can’t beat the on-chain experience with its</p>
                                <div class=\"img-area d-flex gap-3\">
                                    <span class=\"img-area\">
                                        <img src=\"/assets/images/profile-image-2.png\" alt=\"image\">
                                    </span>
                                    <div class=\"designation\">
                                        <h5>Zatoshi</h5>
                                        <p>10632 followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"single-item\">
                        <div class=\"single-content\">
                            <div class=\"single-slide position-relative\">
                                <div class=\"abs-img position-absolute\">
                                    <img src=\"/assets/images/icon/comma.png\" alt=\"icon\">
                                </div>
                                <h5>Unique Experience</h5>
                                <p class=\"lgtxt\">I can say the innovation behind Dooplo is nothing short of incredible. You can’t beat the on-chain experience with its</p>
                                <div class=\"img-area d-flex gap-3\">
                                    <span class=\"img-area\">
                                        <img src=\"/assets/images/profile-image-3.png\" alt=\"image\">
                                    </span>
                                    <div class=\"designation\">
                                        <h5>Devon Lane</h5>
                                        <p>33266 followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"single-item\">
                        <div class=\"single-content\">
                            <div class=\"single-slide position-relative\">
                                <div class=\"abs-img position-absolute\">
                                    <img src=\"/assets/images/icon/comma.png\" alt=\"icon\">
                                </div>
                                <h5>Unique Experience</h5>
                                <p class=\"lgtxt\">I can say the innovation behind Dooplo is nothing short of incredible. You can’t beat the on-chain experience with its</p>
                                <div class=\"img-area d-flex gap-3\">
                                    <span class=\"img-area\">
                                        <img src=\"/assets/images/profile-image-3.png\" alt=\"image\">
                                    </span>
                                    <div class=\"designation\">
                                        <h5>Devon Lane</h5>
                                        <p>33266 followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gamers Review end -->

    <!-- Footer Area Start -->
    <footer class=\"footer-section\">
        <div class=\"overlay\">
            <div class=\"call-action\">
                <div class=\"container\">
                    <div class=\"main-content\">
                        <div class=\"row gap-4 gap-lg-0 align-items-center justify-content-between\">
                            <div class=\"col-lg-6\">
                                <div class=\"section-area mb-3\">
                                    <h3>Ready to start Your Journey?</h3>
                                </div>
                                <p>Stop Scrolling, Start Playing.Create your account now and earn 500 coins</p>
                            </div>
                            <div class=\"col-lg-5 d-flex justify-content-lg-end\">
                                <div class=\"btn-area\">
                                    <a href=\"sign-up.html\" class=\"cmn-btn\">Register Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"footer-area\">
                <div class=\"container\">
                    <div class=\"row wrapper mt-80 mb-80\">
                        <div class=\"col-xl-12 cus-mar d-flex flex-wrap align-items-center justify-content-center justify-content-md-between top-area\">
                            <div class=\"single-box d-flex flex-wrap gap-md-5 gap-3 align-items-center justify-content-center justify-content-md-start\">
                                <a href=\"index.html\">
                                    <img src=\"/assets/images/logo.png\" class=\"logo\" alt=\"logo\">
                                </a>
                                <ul class=\"items gap-3 d-flex flex-wrap align-items-center justify-content-md-start justify-content-center\">
                                    <li><a href=\"index-4.html\">Home</a></li>
                                    <li><a href=\"games.html\">Game</a></li>
                                    <li><a href=\"shop.html\">Shop</a></li>
                                    <li><a href=\"about-us.html\">About Us</a></li>
                                    <li><a href=\"sign-in.html\">Support</a></li>
                                </ul>
                            </div>
                            <div class=\"single-box social\">
                                <ul class=\"d-flex\">
                                    <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"footer-bottom\">
                    <div class=\"container\">
                        <div class=\"row gap-md-0 gap-3 justify-content-between\">
                            <div class=\"col-md-6 order-1 order-md-0 text-md-start text-center\">
                                <div class=\"copyright\">
                                    <p>Copyright © <a href=\"index-3.html\">Dooplo</a> | Designed by <a href=\"javascript:void(0)\" class=\"company\">Pixelaxis</a></p>
                                </div>
                            </div>
                            <div class=\"col-md-6 d-flex justify-content-md-end justify-content-center\">
                                <ul class=\"d-flex gap-4 flex-wrap align-items-center\">
                                    <li><a href=\"privacy-policy.html\">Privacy</a></li>
                                    <li><a href=\"terms-conditions.html\">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

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
</body>

</html>", "gaming/juegos.html.twig", "/home/alumno/Symf/CasinoV2/templates/gaming/juegos.html.twig");
    }
}
