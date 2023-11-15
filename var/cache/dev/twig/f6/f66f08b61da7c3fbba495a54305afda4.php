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

/* controlador_casino/index.html.twig */
class __TwigTemplate_28fe3a1780be37f70c470dccac21edf5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "controlador_casino/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "controlador_casino/index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Dooplo - Gaming HTML Template</title>

    <link rel=\"shortcut icon\" href=\"assets/images/fav.png\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/fontawesome.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/nice-select.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/slick.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/odometer.css\">
    <link rel=\"stylesheet\" href=\"assets/css/arafat-font.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/animate.css\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
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
                        <img src=\"assets/images/fav.png\" class=\"logo\" alt=\"logo\">
                        <img src=\"assets/images/logo-alt.png\" class=\"logo-alt\" alt=\"logo-alt\">
                    </a>
                    <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-content\">
                        <i class=\"fas fa-bars\"></i>
                    </button>
                    <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbar-content\">
                        <ul class=\"navbar-nav gap-3 py-4 py-lg-0 m-auto align-self-center\">
                            <li class=\"dropdown show-dropdown\">
                                <a class=\"dropdown-toggle dropdown-nav active\" href=\"javascript:void(0)\">Home</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a class=\"dropdown-item\" href=\"index.html\">Home One</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index-2.html\">Home Two</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index-3.html\">Home Three</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index-4.html\">Home Four</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index-5.html\">Home Five</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class=\"dropdown-nav\" href=\"play-as-you-go.html\">Play</a>
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
                                        <img src=\"assets/images/icon/search-icon.png\" alt=\"Icon\">
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
                               ";
        // line 179
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 179, $this->source); })()), "user", [], "any", false, false, false, 179)) {
            // line 180
            echo "        
            <a href=\"#\">Estas logueado como ";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 181, $this->source); })()), "user", [], "any", false, false, false, 181), "userIdentifier", [], "any", false, false, false, 181), "html", null, true);
            echo ".</a> <a class=\"cmn-btn\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Cerrar</a>

    ";
        } else {
            // line 184
            echo "      <a href=\"/login\">Login</a>
      <a href=\"/register\" class=\"cmn-btn\">Registro</a>
    ";
        }
        // line 187
        echo "                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </nav>
    </header>
    <!-- header-section end -->

    <!-- Banner Section start -->
    <section class=\"banner-section index three\">
        <div class=\"overlay overflow-hidden\">
            <div class=\"banner-content position-relative\">
                <div class=\"shape-content\">
                    <img src=\"assets/images/banner-shape-1.png\" class=\"shape-1\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-2.png\" class=\"shape-2\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-3.png\" class=\"shape-3\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-4.png\" class=\"shape-4\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-5.png\" class=\"shape-5\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-6.png\" class=\"shape-6\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-7.png\" class=\"shape-7\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-8.png\" class=\"shape-8\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-9.png\" class=\"shape-9\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-10.png\" class=\"shape-10\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-11.png\" class=\"shape-11\" alt=\"image\">
                </div>
                <div class=\"container\">
                    <div class=\"row position-relative align-items-center\">
                        <div class=\"col-lg-7 col-md-8\">
                            <div class=\"main-content\">
                                <div class=\"section-text\">
                                    <h4 class=\"sub-title\">Play.Win.Earn</h4>
                                    <h1 class=\"mb-2\">An Ultimate Gaming Platform</h1>
                                    <p class=\"lgtxt\">Compete game tournaments for cash prizes or play head to head for real money.</p>
                                </div>
                                <div class=\"btn-area\">
                                    <a href=\"games.html\" class=\"cmn-btn\">Let's Play Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section end -->

    <!-- How to Play start -->
    <section class=\"how-play overflow-hidden index-3\">
        <div class=\"overlay\">
            <div class=\"container\">
                <div class=\"row cus-mar\">
                    <div class=\"col-sm-4\">
                        <div class=\"single-box\">
                            <div class=\"img-area\">
                                <img src=\"assets/images/icon/how-play-icon-1.png\" alt=\"image\">
                                <span class=\"abs-area xxltxt d-center text-center position-absolute\">1</span>
                            </div>
                            <h5>Register</h5>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"single-box\">
                            <div class=\"img-area\">
                                <img src=\"assets/images/icon/how-play-icon-2.png\" alt=\"image\">
                                <span class=\"abs-area xxltxt d-center text-center position-absolute\">2</span>
                            </div>
                            <h5>Play</h5>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"single-box\">
                            <div class=\"img-area\">
                                <img src=\"assets/images/icon/how-play-icon-3.png\" alt=\"image\">
                                <span class=\"abs-area xxltxt d-center text-center position-absolute\">3</span>
                            </div>
                            <h5>Get Paid</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How to Play end -->

    <!-- About start -->
    <section class=\"about-us index-3\">
        <div class=\"overlay pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-6 col-lg-5 mb-lg-0 mb-5\">
                        <div class=\"section-text\">
                            <h5 class=\"sub-title\">Turn your passion into profits</h5>
                            <h2 class=\"mb-3\">Truly Best Gaming Platform</h2>
                            <p>Are you addicted to Online Games? Have you ever thought of earning through Online Gaming or from Playing Multiplayer Mobile Games? What if you were rewarded for playing your favorite games and that too of which you are addicted to? Well, dooplo is the Platform which makes this possible.</p>
                        </div>
                        <div class=\"btn-area\">
                            <a href=\"games.html\" class=\"cmn-btn\">Let's Play Now</a>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-7\">
                        <div class=\"row cus-mar\">
                            <div class=\"col-sm-6\">
                                <div class=\"single-box\">
                                    <div class=\"img-area\">
                                        <img src=\"assets/images/icon/about-icon-1.png\" alt=\"image\">
                                    </div>
                                    <h5>Reward Your Dedication</h5>
                                </div>
                                <div class=\"single-box\">
                                    <div class=\"img-area\">
                                        <img src=\"assets/images/icon/about-icon-2.png\" alt=\"image\">
                                    </div>
                                    <h5>Try Something New</h5>
                                </div>
                            </div>
                            <div class=\"col-sm-6 mt-lg-5 mt-lg-0\">
                                <div class=\"single-box\">
                                    <div class=\"img-area\">
                                        <img src=\"assets/images/icon/about-icon-3.png\" alt=\"image\">
                                    </div>
                                    <h5>There’s always more to play</h5>
                                </div>
                                <div class=\"single-box\">
                                    <div class=\"img-area\">
                                        <img src=\"assets/images/icon/about-icon-4.png\" alt=\"image\">
                                    </div>
                                    <h5>Get more for less</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->

    <!-- Features Tournaments start -->
    <section class=\"features-tournaments index-2\">
        <div class=\"overlay pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"section-text d-flex flex-wrap gap-lg-0 gap-3 justify-content-between\">
                        <h2>Features Tournaments</h2>
                        <a href=\"javascript:void(0)\" class=\"cmn-btn\">View All</a>
                    </div>
                </div>
                <div class=\"row cus-mar compete-in\">
                    <div class=\"col-xl-8\">
                        <div class=\"single-box second\">
                            <div class=\"icon-box position-relative\">
                                <img src=\"assets/images/tournaments-img-4.png\" alt=\"image\">
                                <div class=\"abs-area\">
                                    <div class=\"entry d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/trophy-icon-1.png\" alt=\"image\">
                                        <div class=\"right-area\">
                                            <p class=\"mdtxt fw-bolder\">\$5,000</p>
                                            <p class=\"mdtxt\">Prize Pool</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bottom-area\">
                                <div class=\"battle mb-4 d-flex gap-4 align-items-center\">
                                    <div class=\"player-join d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/user-2.png\" alt=\"icon\">
                                        <span>13/64</span>
                                    </div>
                                    <span>3v3</span>
                                </div>
                                <h5>FiFa Seasons Game</h5>
                                <div class=\"player-area mt-3 d-flex flex-wrap gap-3 gap-md-0 align-items-center justify-content-between\">
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Monday, March 21st 2023</p>
                                    </div>
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Single Elimination</p>
                                    </div>
                                </div>
                                <p class=\"mdtxt d-flex gap-3 align-items-center mt-4 mb-4 prize-pool w-100\">Tournament By: <img src=\"assets/images/icon/tournament-logo-1.png\" alt=\"icon\"></p>
                                <div class=\"btn-area mb-3\">
                                    <a href=\"games.html\" class=\"w-100 text-center cmn-btn justify-content-center\">Join Now</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-box second\">
                            <div class=\"icon-box position-relative\">
                                <img src=\"assets/images/tournaments-img-5.png\" alt=\"image\">
                                <div class=\"abs-area\">
                                    <div class=\"entry d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/trophy-icon-1.png\" alt=\"image\">
                                        <div class=\"right-area\">
                                            <p class=\"mdtxt fw-bolder\">\$5,000</p>
                                            <p class=\"mdtxt\">Prize Pool</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bottom-area\">
                                <div class=\"battle mb-4 d-flex gap-4 align-items-center\">
                                    <div class=\"player-join d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/user-2.png\" alt=\"icon\">
                                        <span>13/64</span>
                                    </div>
                                    <span>3v3</span>
                                </div>
                                <h5>Martial fighter</h5>
                                <div class=\"player-area mt-3 d-flex flex-wrap gap-3 gap-md-0 align-items-center justify-content-between\">
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Monday, March 21st 2023</p>
                                    </div>
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Single Elimination</p>
                                    </div>
                                </div>
                                <p class=\"mdtxt d-flex gap-3 align-items-center mt-4 mb-4 prize-pool w-100\">Tournament By: <img src=\"assets/images/icon/tournament-logo-1.png\" alt=\"icon\"></p>
                                <div class=\"btn-area mb-3\">
                                    <a href=\"games.html\" class=\"w-100 text-center cmn-btn justify-content-center\">Join Now</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-box second\">
                            <div class=\"icon-box position-relative\">
                                <img src=\"assets/images/tournaments-img-6.png\" alt=\"image\">
                                <div class=\"abs-area\">
                                    <div class=\"entry d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/trophy-icon-1.png\" alt=\"image\">
                                        <div class=\"right-area\">
                                            <p class=\"mdtxt fw-bolder\">\$5,000</p>
                                            <p class=\"mdtxt\">Prize Pool</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bottom-area\">
                                <div class=\"battle mb-4 d-flex gap-4 align-items-center\">
                                    <div class=\"player-join d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/user-2.png\" alt=\"icon\">
                                        <span>13/64</span>
                                    </div>
                                    <span>3v3</span>
                                </div>
                                <h5>Spartan archer</h5>
                                <div class=\"player-area mt-3 d-flex flex-wrap gap-3 gap-md-0 align-items-center justify-content-between\">
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Monday, March 21st 2023</p>
                                    </div>
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Single Elimination</p>
                                    </div>
                                </div>
                                <p class=\"mdtxt d-flex gap-3 align-items-center mt-4 mb-4 prize-pool w-100\">Tournament By: <img src=\"assets/images/icon/tournament-logo-1.png\" alt=\"icon\"></p>
                                <div class=\"btn-area mb-3\">
                                    <a href=\"games.html\" class=\"w-100 text-center cmn-btn justify-content-center\">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-md-12 d-xl-grid d-md-flex gap-4 gap-xl-0\">
                        <div class=\"single-box\">
                            <div class=\"icon-box position-relative\">
                                <img src=\"assets/images/tournaments-img-7.png\" alt=\"image\">
                                <div class=\"abs-area\">
                                    <div class=\"entry d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/trophy-icon-1.png\" alt=\"image\">
                                        <div class=\"right-area\">
                                            <p class=\"mdtxt fw-bolder\">\$5,000</p>
                                            <p class=\"mdtxt\">Prize Pool</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bottom-area\">
                                <div class=\"battle mb-4 d-flex gap-4 align-items-center\">
                                    <div class=\"player-join d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/user-2.png\" alt=\"icon\">
                                        <span>13/64</span>
                                    </div>
                                    <span>3v3</span>
                                </div>
                                <h5>Ninja Assassin</h5>
                                <div class=\"player-area mt-3 d-flex flex-wrap gap-3 gap-md-0 align-items-center justify-content-between\">
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Monday, March 21st 2023</p>
                                    </div>
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Single Elimination</p>
                                    </div>
                                </div>
                                <p class=\"mdtxt d-flex gap-3 align-items-center mt-4 mb-4 prize-pool w-100\">Tournament By: <img src=\"assets/images/icon/tournament-logo-1.png\" alt=\"icon\"></p>
                                <div class=\"btn-area mb-3\">
                                    <a href=\"games.html\" class=\"w-100 text-center cmn-btn justify-content-center\">Join Now</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-box\">
                            <div class=\"icon-box position-relative\">
                                <img src=\"assets/images/tournaments-img-8.png\" alt=\"image\">
                                <div class=\"abs-area\">
                                    <div class=\"entry d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/trophy-icon-1.png\" alt=\"image\">
                                        <div class=\"right-area\">
                                            <p class=\"mdtxt fw-bolder\">\$5,000</p>
                                            <p class=\"mdtxt\">Prize Pool</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bottom-area\">
                                <div class=\"battle mb-4 d-flex gap-4 align-items-center\">
                                    <div class=\"player-join d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/user-2.png\" alt=\"icon\">
                                        <span>13/64</span>
                                    </div>
                                    <span>3v3</span>
                                </div>
                                <h5>Warzone</h5>
                                <div class=\"player-area mt-3 d-flex flex-wrap gap-3 gap-md-0 align-items-center justify-content-between\">
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Monday, March 21st 2023</p>
                                    </div>
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Single Elimination</p>
                                    </div>
                                </div>
                                <p class=\"mdtxt d-flex gap-3 align-items-center mt-4 mb-4 prize-pool w-100\">Tournament By: <img src=\"assets/images/icon/tournament-logo-1.png\" alt=\"icon\"></p>
                                <div class=\"btn-area mb-3\">
                                    <a href=\"games.html\" class=\"w-100 text-center cmn-btn justify-content-center\">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Tournaments end -->

    <!-- Level Up Skills start -->
    <section class=\"level-up-skills\">
        <div class=\"affiliate pt-120 pb-120\">
            <div class=\"overlay\">
                <div class=\"container\">
                    <div class=\"main-content\">
                        <div class=\"row align-items-center justify-content-between\">
                            <div class=\"col-lg-5 mt-60 mb-60\">
                                <div class=\"section-text\">
                                    <h5>Invite Friends and Win Rewards. Join dooplo Games today</h5>
                                </div>
                                <div class=\"btn-area\">
                                    <a href=\"games.html\" class=\"cmn-btn\">Let's Play Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"overlay\">
            <div class=\"container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-lg-5\">
                        <div class=\"section-text\">
                            <h5 class=\"sub-title\">Level-up your gaming skills</h5>
                            <h2 class=\"mb-3\">Climb to the top of the leaderboard</h2>
                            <p>In our tournaments everyone has a chance to shine. Play as many games as you want and we will only track your best scores meaning that you can never have a worse score than the current one.</p>
                        </div>
                        <div class=\"btn-area\">
                            <a href=\"sign-up.html\" class=\"cmn-btn\">Join Now</a>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"sec-img\">
                            <img src=\"assets/images/level-up-skills-illus.png\" class=\"max-un\" alt=\"image\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Level Up Skills end -->

    <!-- Call to Action start -->
    <section class=\"call-to-action\">
        <div class=\"affiliate pt-120 pb-120\">
            <div class=\"overlay\">
                <div class=\"container\">
                    <div class=\"main-content\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-lg-7 mt-60 mb-60\">
                                <div class=\"section-text\">
                                    <h2 class=\"mb-3\">Stop Scrolling, Start Playing</h2>
                                    <p>Ready to play with your friends, have fun and make money? Showcase your  achievement, match history and win rate while you build your reputation on dooplo</p>
                                </div>
                                <div class=\"btn-area\">
                                    <a href=\"sign-up.html\" class=\"cmn-btn\">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action end -->

    <!-- Gamers Review start -->
    <section class=\"gamers-review index-3\">
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
                                    <img src=\"assets/images/icon/comma.png\" alt=\"icon\">
                                </div>
                                <h5>100% Transparency</h5>
                                <p class=\"lgtxt\">I can say the innovation behind Dooplo is nothing short of incredible. You can’t beat the on-chain experience with its</p>
                                <div class=\"img-area d-flex gap-3\">
                                    <span class=\"img-area\">
                                        <img src=\"assets/images/profile-image-1.png\" alt=\"image\">
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
                                    <img src=\"assets/images/icon/comma.png\" alt=\"icon\">
                                </div>
                                <h5>Simply Amazing</h5>
                                <p class=\"lgtxt\">I can say the innovation behind Dooplo is nothing short of incredible. You can’t beat the on-chain experience with its</p>
                                <div class=\"img-area d-flex gap-3\">
                                    <span class=\"img-area\">
                                        <img src=\"assets/images/profile-image-2.png\" alt=\"image\">
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
                                    <img src=\"assets/images/icon/comma.png\" alt=\"icon\">
                                </div>
                                <h5>Unique Experience</h5>
                                <p class=\"lgtxt\">I can say the innovation behind Dooplo is nothing short of incredible. You can’t beat the on-chain experience with its</p>
                                <div class=\"img-area d-flex gap-3\">
                                    <span class=\"img-area\">
                                        <img src=\"assets/images/profile-image-3.png\" alt=\"image\">
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
                                    <img src=\"assets/images/icon/comma.png\" alt=\"icon\">
                                </div>
                                <h5>Unique Experience</h5>
                                <p class=\"lgtxt\">I can say the innovation behind Dooplo is nothing short of incredible. You can’t beat the on-chain experience with its</p>
                                <div class=\"img-area d-flex gap-3\">
                                    <span class=\"img-area\">
                                        <img src=\"assets/images/profile-image-3.png\" alt=\"image\">
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
            <div class=\"call-action index-3\">
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
                                    <img src=\"assets/images/logo.png\" class=\"logo\" alt=\"logo\">
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
    <script src=\"assets/js/jquery.min.js\"></script>
    <script src=\"assets/js/jquery-ui.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/plugin/jquery.downCount.js\"></script>
    <script src=\"assets/js/plugin/slick.js\"></script>
    <script src=\"assets/js/plugin/jquery.nice-select.min.js\"></script>
    <script src=\"assets/js/plugin/waypoint.min.js\"></script>
    <script src=\"assets/js/plugin/jquery.magnific-popup.min.js\"></script>
    <script src=\"assets/js/plugin/wow.min.js\"></script>
    <script src=\"assets/js/plugin/odometer.min.js\"></script>
    <script src=\"assets/js/plugin/viewport.jquery.js\"></script>
    <script src=\"assets/js/plugin/plugin.js\"></script>
    <script src=\"assets/js/main.js\"></script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "controlador_casino/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 187,  236 => 184,  228 => 181,  225 => 180,  223 => 179,  43 => 1,);
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

    <link rel=\"shortcut icon\" href=\"assets/images/fav.png\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/fontawesome.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/nice-select.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/slick.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/odometer.css\">
    <link rel=\"stylesheet\" href=\"assets/css/arafat-font.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/animate.css\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
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
                        <img src=\"assets/images/fav.png\" class=\"logo\" alt=\"logo\">
                        <img src=\"assets/images/logo-alt.png\" class=\"logo-alt\" alt=\"logo-alt\">
                    </a>
                    <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-content\">
                        <i class=\"fas fa-bars\"></i>
                    </button>
                    <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbar-content\">
                        <ul class=\"navbar-nav gap-3 py-4 py-lg-0 m-auto align-self-center\">
                            <li class=\"dropdown show-dropdown\">
                                <a class=\"dropdown-toggle dropdown-nav active\" href=\"javascript:void(0)\">Home</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a class=\"dropdown-item\" href=\"index.html\">Home One</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index-2.html\">Home Two</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index-3.html\">Home Three</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index-4.html\">Home Four</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index-5.html\">Home Five</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class=\"dropdown-nav\" href=\"play-as-you-go.html\">Play</a>
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
                                        <img src=\"assets/images/icon/search-icon.png\" alt=\"Icon\">
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
                               {% if app.user %}
        
            <a href=\"#\">Estas logueado como {{ app.user.userIdentifier }}.</a> <a class=\"cmn-btn\" href=\"{{ path('app_logout') }}\">Cerrar</a>

    {% else %}
      <a href=\"/login\">Login</a>
      <a href=\"/register\" class=\"cmn-btn\">Registro</a>
    {% endif %}
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </nav>
    </header>
    <!-- header-section end -->

    <!-- Banner Section start -->
    <section class=\"banner-section index three\">
        <div class=\"overlay overflow-hidden\">
            <div class=\"banner-content position-relative\">
                <div class=\"shape-content\">
                    <img src=\"assets/images/banner-shape-1.png\" class=\"shape-1\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-2.png\" class=\"shape-2\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-3.png\" class=\"shape-3\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-4.png\" class=\"shape-4\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-5.png\" class=\"shape-5\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-6.png\" class=\"shape-6\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-7.png\" class=\"shape-7\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-8.png\" class=\"shape-8\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-9.png\" class=\"shape-9\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-10.png\" class=\"shape-10\" alt=\"image\">
                    <img src=\"assets/images/banner-shape-11.png\" class=\"shape-11\" alt=\"image\">
                </div>
                <div class=\"container\">
                    <div class=\"row position-relative align-items-center\">
                        <div class=\"col-lg-7 col-md-8\">
                            <div class=\"main-content\">
                                <div class=\"section-text\">
                                    <h4 class=\"sub-title\">Play.Win.Earn</h4>
                                    <h1 class=\"mb-2\">An Ultimate Gaming Platform</h1>
                                    <p class=\"lgtxt\">Compete game tournaments for cash prizes or play head to head for real money.</p>
                                </div>
                                <div class=\"btn-area\">
                                    <a href=\"games.html\" class=\"cmn-btn\">Let's Play Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section end -->

    <!-- How to Play start -->
    <section class=\"how-play overflow-hidden index-3\">
        <div class=\"overlay\">
            <div class=\"container\">
                <div class=\"row cus-mar\">
                    <div class=\"col-sm-4\">
                        <div class=\"single-box\">
                            <div class=\"img-area\">
                                <img src=\"assets/images/icon/how-play-icon-1.png\" alt=\"image\">
                                <span class=\"abs-area xxltxt d-center text-center position-absolute\">1</span>
                            </div>
                            <h5>Register</h5>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"single-box\">
                            <div class=\"img-area\">
                                <img src=\"assets/images/icon/how-play-icon-2.png\" alt=\"image\">
                                <span class=\"abs-area xxltxt d-center text-center position-absolute\">2</span>
                            </div>
                            <h5>Play</h5>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"single-box\">
                            <div class=\"img-area\">
                                <img src=\"assets/images/icon/how-play-icon-3.png\" alt=\"image\">
                                <span class=\"abs-area xxltxt d-center text-center position-absolute\">3</span>
                            </div>
                            <h5>Get Paid</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How to Play end -->

    <!-- About start -->
    <section class=\"about-us index-3\">
        <div class=\"overlay pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-6 col-lg-5 mb-lg-0 mb-5\">
                        <div class=\"section-text\">
                            <h5 class=\"sub-title\">Turn your passion into profits</h5>
                            <h2 class=\"mb-3\">Truly Best Gaming Platform</h2>
                            <p>Are you addicted to Online Games? Have you ever thought of earning through Online Gaming or from Playing Multiplayer Mobile Games? What if you were rewarded for playing your favorite games and that too of which you are addicted to? Well, dooplo is the Platform which makes this possible.</p>
                        </div>
                        <div class=\"btn-area\">
                            <a href=\"games.html\" class=\"cmn-btn\">Let's Play Now</a>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-7\">
                        <div class=\"row cus-mar\">
                            <div class=\"col-sm-6\">
                                <div class=\"single-box\">
                                    <div class=\"img-area\">
                                        <img src=\"assets/images/icon/about-icon-1.png\" alt=\"image\">
                                    </div>
                                    <h5>Reward Your Dedication</h5>
                                </div>
                                <div class=\"single-box\">
                                    <div class=\"img-area\">
                                        <img src=\"assets/images/icon/about-icon-2.png\" alt=\"image\">
                                    </div>
                                    <h5>Try Something New</h5>
                                </div>
                            </div>
                            <div class=\"col-sm-6 mt-lg-5 mt-lg-0\">
                                <div class=\"single-box\">
                                    <div class=\"img-area\">
                                        <img src=\"assets/images/icon/about-icon-3.png\" alt=\"image\">
                                    </div>
                                    <h5>There’s always more to play</h5>
                                </div>
                                <div class=\"single-box\">
                                    <div class=\"img-area\">
                                        <img src=\"assets/images/icon/about-icon-4.png\" alt=\"image\">
                                    </div>
                                    <h5>Get more for less</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->

    <!-- Features Tournaments start -->
    <section class=\"features-tournaments index-2\">
        <div class=\"overlay pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"section-text d-flex flex-wrap gap-lg-0 gap-3 justify-content-between\">
                        <h2>Features Tournaments</h2>
                        <a href=\"javascript:void(0)\" class=\"cmn-btn\">View All</a>
                    </div>
                </div>
                <div class=\"row cus-mar compete-in\">
                    <div class=\"col-xl-8\">
                        <div class=\"single-box second\">
                            <div class=\"icon-box position-relative\">
                                <img src=\"assets/images/tournaments-img-4.png\" alt=\"image\">
                                <div class=\"abs-area\">
                                    <div class=\"entry d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/trophy-icon-1.png\" alt=\"image\">
                                        <div class=\"right-area\">
                                            <p class=\"mdtxt fw-bolder\">\$5,000</p>
                                            <p class=\"mdtxt\">Prize Pool</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bottom-area\">
                                <div class=\"battle mb-4 d-flex gap-4 align-items-center\">
                                    <div class=\"player-join d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/user-2.png\" alt=\"icon\">
                                        <span>13/64</span>
                                    </div>
                                    <span>3v3</span>
                                </div>
                                <h5>FiFa Seasons Game</h5>
                                <div class=\"player-area mt-3 d-flex flex-wrap gap-3 gap-md-0 align-items-center justify-content-between\">
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Monday, March 21st 2023</p>
                                    </div>
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Single Elimination</p>
                                    </div>
                                </div>
                                <p class=\"mdtxt d-flex gap-3 align-items-center mt-4 mb-4 prize-pool w-100\">Tournament By: <img src=\"assets/images/icon/tournament-logo-1.png\" alt=\"icon\"></p>
                                <div class=\"btn-area mb-3\">
                                    <a href=\"games.html\" class=\"w-100 text-center cmn-btn justify-content-center\">Join Now</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-box second\">
                            <div class=\"icon-box position-relative\">
                                <img src=\"assets/images/tournaments-img-5.png\" alt=\"image\">
                                <div class=\"abs-area\">
                                    <div class=\"entry d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/trophy-icon-1.png\" alt=\"image\">
                                        <div class=\"right-area\">
                                            <p class=\"mdtxt fw-bolder\">\$5,000</p>
                                            <p class=\"mdtxt\">Prize Pool</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bottom-area\">
                                <div class=\"battle mb-4 d-flex gap-4 align-items-center\">
                                    <div class=\"player-join d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/user-2.png\" alt=\"icon\">
                                        <span>13/64</span>
                                    </div>
                                    <span>3v3</span>
                                </div>
                                <h5>Martial fighter</h5>
                                <div class=\"player-area mt-3 d-flex flex-wrap gap-3 gap-md-0 align-items-center justify-content-between\">
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Monday, March 21st 2023</p>
                                    </div>
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Single Elimination</p>
                                    </div>
                                </div>
                                <p class=\"mdtxt d-flex gap-3 align-items-center mt-4 mb-4 prize-pool w-100\">Tournament By: <img src=\"assets/images/icon/tournament-logo-1.png\" alt=\"icon\"></p>
                                <div class=\"btn-area mb-3\">
                                    <a href=\"games.html\" class=\"w-100 text-center cmn-btn justify-content-center\">Join Now</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-box second\">
                            <div class=\"icon-box position-relative\">
                                <img src=\"assets/images/tournaments-img-6.png\" alt=\"image\">
                                <div class=\"abs-area\">
                                    <div class=\"entry d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/trophy-icon-1.png\" alt=\"image\">
                                        <div class=\"right-area\">
                                            <p class=\"mdtxt fw-bolder\">\$5,000</p>
                                            <p class=\"mdtxt\">Prize Pool</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bottom-area\">
                                <div class=\"battle mb-4 d-flex gap-4 align-items-center\">
                                    <div class=\"player-join d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/user-2.png\" alt=\"icon\">
                                        <span>13/64</span>
                                    </div>
                                    <span>3v3</span>
                                </div>
                                <h5>Spartan archer</h5>
                                <div class=\"player-area mt-3 d-flex flex-wrap gap-3 gap-md-0 align-items-center justify-content-between\">
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Monday, March 21st 2023</p>
                                    </div>
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Single Elimination</p>
                                    </div>
                                </div>
                                <p class=\"mdtxt d-flex gap-3 align-items-center mt-4 mb-4 prize-pool w-100\">Tournament By: <img src=\"assets/images/icon/tournament-logo-1.png\" alt=\"icon\"></p>
                                <div class=\"btn-area mb-3\">
                                    <a href=\"games.html\" class=\"w-100 text-center cmn-btn justify-content-center\">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-md-12 d-xl-grid d-md-flex gap-4 gap-xl-0\">
                        <div class=\"single-box\">
                            <div class=\"icon-box position-relative\">
                                <img src=\"assets/images/tournaments-img-7.png\" alt=\"image\">
                                <div class=\"abs-area\">
                                    <div class=\"entry d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/trophy-icon-1.png\" alt=\"image\">
                                        <div class=\"right-area\">
                                            <p class=\"mdtxt fw-bolder\">\$5,000</p>
                                            <p class=\"mdtxt\">Prize Pool</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bottom-area\">
                                <div class=\"battle mb-4 d-flex gap-4 align-items-center\">
                                    <div class=\"player-join d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/user-2.png\" alt=\"icon\">
                                        <span>13/64</span>
                                    </div>
                                    <span>3v3</span>
                                </div>
                                <h5>Ninja Assassin</h5>
                                <div class=\"player-area mt-3 d-flex flex-wrap gap-3 gap-md-0 align-items-center justify-content-between\">
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Monday, March 21st 2023</p>
                                    </div>
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Single Elimination</p>
                                    </div>
                                </div>
                                <p class=\"mdtxt d-flex gap-3 align-items-center mt-4 mb-4 prize-pool w-100\">Tournament By: <img src=\"assets/images/icon/tournament-logo-1.png\" alt=\"icon\"></p>
                                <div class=\"btn-area mb-3\">
                                    <a href=\"games.html\" class=\"w-100 text-center cmn-btn justify-content-center\">Join Now</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-box\">
                            <div class=\"icon-box position-relative\">
                                <img src=\"assets/images/tournaments-img-8.png\" alt=\"image\">
                                <div class=\"abs-area\">
                                    <div class=\"entry d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/trophy-icon-1.png\" alt=\"image\">
                                        <div class=\"right-area\">
                                            <p class=\"mdtxt fw-bolder\">\$5,000</p>
                                            <p class=\"mdtxt\">Prize Pool</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bottom-area\">
                                <div class=\"battle mb-4 d-flex gap-4 align-items-center\">
                                    <div class=\"player-join d-flex gap-2 align-items-center\">
                                        <img src=\"assets/images/icon/user-2.png\" alt=\"icon\">
                                        <span>13/64</span>
                                    </div>
                                    <span>3v3</span>
                                </div>
                                <h5>Warzone</h5>
                                <div class=\"player-area mt-3 d-flex flex-wrap gap-3 gap-md-0 align-items-center justify-content-between\">
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Monday, March 21st 2023</p>
                                    </div>
                                    <div class=\"single\">
                                        <p class=\"mdtxt\">Single Elimination</p>
                                    </div>
                                </div>
                                <p class=\"mdtxt d-flex gap-3 align-items-center mt-4 mb-4 prize-pool w-100\">Tournament By: <img src=\"assets/images/icon/tournament-logo-1.png\" alt=\"icon\"></p>
                                <div class=\"btn-area mb-3\">
                                    <a href=\"games.html\" class=\"w-100 text-center cmn-btn justify-content-center\">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Tournaments end -->

    <!-- Level Up Skills start -->
    <section class=\"level-up-skills\">
        <div class=\"affiliate pt-120 pb-120\">
            <div class=\"overlay\">
                <div class=\"container\">
                    <div class=\"main-content\">
                        <div class=\"row align-items-center justify-content-between\">
                            <div class=\"col-lg-5 mt-60 mb-60\">
                                <div class=\"section-text\">
                                    <h5>Invite Friends and Win Rewards. Join dooplo Games today</h5>
                                </div>
                                <div class=\"btn-area\">
                                    <a href=\"games.html\" class=\"cmn-btn\">Let's Play Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"overlay\">
            <div class=\"container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-lg-5\">
                        <div class=\"section-text\">
                            <h5 class=\"sub-title\">Level-up your gaming skills</h5>
                            <h2 class=\"mb-3\">Climb to the top of the leaderboard</h2>
                            <p>In our tournaments everyone has a chance to shine. Play as many games as you want and we will only track your best scores meaning that you can never have a worse score than the current one.</p>
                        </div>
                        <div class=\"btn-area\">
                            <a href=\"sign-up.html\" class=\"cmn-btn\">Join Now</a>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"sec-img\">
                            <img src=\"assets/images/level-up-skills-illus.png\" class=\"max-un\" alt=\"image\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Level Up Skills end -->

    <!-- Call to Action start -->
    <section class=\"call-to-action\">
        <div class=\"affiliate pt-120 pb-120\">
            <div class=\"overlay\">
                <div class=\"container\">
                    <div class=\"main-content\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-lg-7 mt-60 mb-60\">
                                <div class=\"section-text\">
                                    <h2 class=\"mb-3\">Stop Scrolling, Start Playing</h2>
                                    <p>Ready to play with your friends, have fun and make money? Showcase your  achievement, match history and win rate while you build your reputation on dooplo</p>
                                </div>
                                <div class=\"btn-area\">
                                    <a href=\"sign-up.html\" class=\"cmn-btn\">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action end -->

    <!-- Gamers Review start -->
    <section class=\"gamers-review index-3\">
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
                                    <img src=\"assets/images/icon/comma.png\" alt=\"icon\">
                                </div>
                                <h5>100% Transparency</h5>
                                <p class=\"lgtxt\">I can say the innovation behind Dooplo is nothing short of incredible. You can’t beat the on-chain experience with its</p>
                                <div class=\"img-area d-flex gap-3\">
                                    <span class=\"img-area\">
                                        <img src=\"assets/images/profile-image-1.png\" alt=\"image\">
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
                                    <img src=\"assets/images/icon/comma.png\" alt=\"icon\">
                                </div>
                                <h5>Simply Amazing</h5>
                                <p class=\"lgtxt\">I can say the innovation behind Dooplo is nothing short of incredible. You can’t beat the on-chain experience with its</p>
                                <div class=\"img-area d-flex gap-3\">
                                    <span class=\"img-area\">
                                        <img src=\"assets/images/profile-image-2.png\" alt=\"image\">
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
                                    <img src=\"assets/images/icon/comma.png\" alt=\"icon\">
                                </div>
                                <h5>Unique Experience</h5>
                                <p class=\"lgtxt\">I can say the innovation behind Dooplo is nothing short of incredible. You can’t beat the on-chain experience with its</p>
                                <div class=\"img-area d-flex gap-3\">
                                    <span class=\"img-area\">
                                        <img src=\"assets/images/profile-image-3.png\" alt=\"image\">
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
                                    <img src=\"assets/images/icon/comma.png\" alt=\"icon\">
                                </div>
                                <h5>Unique Experience</h5>
                                <p class=\"lgtxt\">I can say the innovation behind Dooplo is nothing short of incredible. You can’t beat the on-chain experience with its</p>
                                <div class=\"img-area d-flex gap-3\">
                                    <span class=\"img-area\">
                                        <img src=\"assets/images/profile-image-3.png\" alt=\"image\">
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
            <div class=\"call-action index-3\">
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
                                    <img src=\"assets/images/logo.png\" class=\"logo\" alt=\"logo\">
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
    <script src=\"assets/js/jquery.min.js\"></script>
    <script src=\"assets/js/jquery-ui.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/plugin/jquery.downCount.js\"></script>
    <script src=\"assets/js/plugin/slick.js\"></script>
    <script src=\"assets/js/plugin/jquery.nice-select.min.js\"></script>
    <script src=\"assets/js/plugin/waypoint.min.js\"></script>
    <script src=\"assets/js/plugin/jquery.magnific-popup.min.js\"></script>
    <script src=\"assets/js/plugin/wow.min.js\"></script>
    <script src=\"assets/js/plugin/odometer.min.js\"></script>
    <script src=\"assets/js/plugin/viewport.jquery.js\"></script>
    <script src=\"assets/js/plugin/plugin.js\"></script>
    <script src=\"assets/js/main.js\"></script>
</body>

</html>", "controlador_casino/index.html.twig", "/home/alumno/Symf/symfony-casino/templates/controlador_casino/index.html.twig");
    }
}
