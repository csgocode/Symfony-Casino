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

/* perfil/perfilmain.html.twig */
class __TwigTemplate_ddc2650932705aa72052f32fe66e95e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perfil/perfilmain.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perfil/perfilmain.html.twig"));

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
                                <a class=\"dropdown-toggle dropdown-nav active\" href=\"javascript:void(0)\">Pages</a>
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
                            <div class=\"btn-area d-block d-lg-none d-flex gap-3 align-items-center\">
                              ";
        // line 174
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "user", [], "any", false, false, false, 174)) {
            // line 175
            echo "        
            <a href=\"#\">Estas logueado como ";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176), "userIdentifier", [], "any", false, false, false, 176), "html", null, true);
            echo ".</a> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Cerrar sesión</a>

    ";
        } else {
            // line 179
            echo "      <a href=\"/login\">Login</a>
      <a href=\"/register\" class=\"cmn-btn\">Registro</a>
    ";
        }
        // line 182
        echo "                            </div>
                            <div class=\"single-item d-none d-lg-block shop-cart-area\">
                                <div class=\"shop-cart-btn cmn-head dot\">
                                    <img src=\"/assets/images/icon/cart-icon.png\" class=\"cart-icon max-un\" alt=\"icon\">
                                    <div class=\"abs-area\">
                                        <span class=\"d-center\">3</span>
                                    </div>
                                </div>
                                <div class=\"main-area px-4 py-4 shop-cart-content\">
                                    <div class=\"head-area mb-4\">
                                        <h6>Shopping Cart <span>3</span></h6>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href=\"javascript:void(0)\" class=\"d-flex align-items-center\">
                                                <div class=\"img-area d-center\">
                                                    <img src=\"/assets/images/products-image-9.png\" class=\"max-un\" alt=\"image\">
                                                </div>
                                                <div class=\"text-area\">
                                                    <h6 class=\"m-0\">Esports Black Shirt</h6>
                                                    <p class=\"mdtxt prize-area mt-2\">\$ 19.99 USD X 01</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void(0)\" class=\"d-flex align-items-center\">
                                                <div class=\"img-area d-center\">
                                                    <img src=\"/assets/images/products-image-10.png\" class=\"max-un\" alt=\"image\">
                                                </div>
                                                <div class=\"text-area\">
                                                    <h6 class=\"m-0\">Esports Black Shirt</h6>
                                                    <p class=\"mdtxt prize-area mt-2\">\$ 19.99 USD X 01</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void(0)\" class=\"d-flex align-items-center\">
                                                <div class=\"img-area d-center\">
                                                    <img src=\"/assets/images/products-image-11.png\" class=\"max-un\" alt=\"image\">
                                                </div>
                                                <div class=\"text-area\">
                                                    <h6 class=\"m-0\">Esports Black Shirt</h6>
                                                    <p class=\"mdtxt prize-area mt-2\">\$ 19.99 USD X 01</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=\"total-cart-area mt-5 py-3 d-flex justify-content-between\">
                                            <span>Total:</span>
                                            <span>\$64.99</span>
                                        </li>
                                        <li class=\"d-center\">
                                            <div class=\"acc-btn-area\">
                                                <div class=\"btn-area mt-4 d-flex text-nowrap gap-4\">
                                                    <a href=\"javascript:void(0)\" class=\"cmn-btn\">Shopping cart</a>
                                                    <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">Go to checkout</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"single-item d-none d-lg-block chat-area\">
                                <div class=\"chat-btn cmn-head position-relative\">
                                    <img src=\"/assets/images/icon/chat-icon.png\" class=\"chat-icon max-un\" alt=\"icon\">
                                    <div class=\"abs-area\">
                                        <span class=\"d-center\">3</span>
                                    </div>
                                </div>
                                <div class=\"main-area chat-content\">
                                    <div class=\"chat-item text-nowrap\">
                                        <div class=\"chat-top-side\">
                                            <div class=\"chat-form\">
                                                <form action=\"#\">
                                                    <div class=\"form-group py-1 input-area d-flex align-items-center\">
                                                        <input type=\"text\" placeholder=\"Search\">
                                                        <img src=\"/assets/images/icon/search-icon.png\" alt=\"icon\">
                                                    </div>
                                                </form>
                                            </div>
                                            <ul>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status orange\"></span>
                                                            offline
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-2.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status green\"></span>
                                                            online
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-3.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status orange\"></span>
                                                            offline
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-4.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status green\"></span>
                                                            online
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-5.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status orange\"></span>
                                                            offline
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-6.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status green\"></span>
                                                            online
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-7.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status green\"></span>
                                                            online
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-8.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status green\"></span>
                                                            online
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-9.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status green\"></span>
                                                            online
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-10.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status orange\"></span>
                                                            offline
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"main\">
                                            <div class=\"d-flex px-3 py-2 align-items-center gap-3\">
                                                <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"image\">
                                                <div>
                                                    <p>Chat with Vincent Porter</p>
                                                </div>
                                            </div>
                                            <ul class=\"chat-main\">
                                                <li class=\"you\">
                                                    <div class=\"entete\">
                                                        <span class=\"status green\"></span>
                                                        <p>Dana</p>
                                                        <span class=\"mdr\">10:12AM, Today</span>
                                                    </div>
                                                    <div class=\"triangle\"></div>
                                                    <p class=\"message\">
                                                        Which game you play now?
                                                    </p>
                                                </li>
                                                <li class=\"me\">
                                                    <div class=\"entete\">
                                                        <span class=\"mdr\">10:12AM, Today</span>
                                                        <p>Dana</p>
                                                        <span class=\"status blue\"></span>
                                                    </div>
                                                    <div class=\"triangle\"></div>
                                                    <p class=\"message\">
                                                        I play Stronghold Kingdoms
                                                    </p>
                                                </li>
                                                <li class=\"me\">
                                                    <div class=\"entete\">
                                                        <span class=\"mdr\">10:12AM, Today</span>
                                                        <p>Dana</p>
                                                        <span class=\"status blue\"></span>
                                                    </div>
                                                    <div class=\"triangle\"></div>
                                                    <p class=\"message\">
                                                        OK
                                                    </p>
                                                </li>
                                                <li class=\"you\">
                                                    <div class=\"entete\">
                                                        <span class=\"status green\"></span>
                                                        <p>Dana</p>
                                                        <span class=\"mdr\">10:12AM, Today</span>
                                                    </div>
                                                    <div class=\"triangle\"></div>
                                                    <p class=\"message\">
                                                        Which game you play now?
                                                    </p>
                                                </li>
                                                <li class=\"me\">
                                                    <div class=\"entete\">
                                                        <span class=\"mdr\">10:12AM, Today</span>
                                                        <p>Dana</p>
                                                        <span class=\"status blue\"></span>
                                                    </div>
                                                    <div class=\"triangle\"></div>
                                                    <p class=\"message\">
                                                        I play Stronghold Kingdoms
                                                    </p>
                                                </li>
                                                <li class=\"me\">
                                                    <div class=\"entete\">
                                                        <span class=\"mdr\">10:12AM, Today</span>
                                                        <p>Dana</p>
                                                        <span class=\"status blue\"></span>
                                                    </div>
                                                    <div class=\"triangle\"></div>
                                                    <p class=\"message\">
                                                        OK
                                                    </p>
                                                </li>
                                            </ul>
                                            <div class=\"chat-footer text-right text-end\">
                                                <form action=\"#\">
                                                    <textarea cols=\"10\" rows=\"2\" placeholder=\"Type your message\"></textarea>
                                                    <div class=\"upload-send px-2 d-flex justify-content-between\">
                                                        <label for=\"files1\">
                                                            <img src=\"/assets/images/icon/upload-img.png\" alt=\"icon\">
                                                        </label>
                                                        <input type=\"file\" id=\"files1\" class=\"d-none\">
                                                        <button type=\"submit\">Send</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"single-item d-none d-lg-block notifications-area\">
                                <div class=\"notifications-btn cmn-head dot\">
                                    <img src=\"/assets/images/icon/nofify-icon.png\" class=\"bell-icon max-un\" alt=\"icon\">
                                    <div class=\"abs-area notify\">
                                        <span class=\"d-center\">3</span>
                                    </div>
                                </div>
                                <div class=\"main-area px-4 py-4 notifications-content\">
                                    <div class=\"head-area d-flex justify-content-between\">
                                        <h5>Notifications</h5>
                                        <span class=\"mdtxt\">Mark all as Read</span>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href=\"javascript:void(0)\" class=\"d-flex\">
                                                <div class=\"img-area\">
                                                    <img src=\"/assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
                                                </div>
                                                <div class=\"text-area\">
                                                    <p><b>Nick Grissom</b> posted a comment on your <span>status update</span></p>
                                                    <p class=\"mdtxt time-area mt-2\">2 minutes ago</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void(0)\" class=\"d-flex\">
                                                <div class=\"img-area\">
                                                    <img src=\"/assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
                                                </div>
                                                <div class=\"text-area\">
                                                    <p><b>Nick Grissom</b> posted a comment on your <span>status update</span></p>
                                                    <p class=\"mdtxt time-area mt-2\">2 minutes ago</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void(0)\" class=\"d-flex\">
                                                <div class=\"img-area\">
                                                    <img src=\"/assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
                                                </div>
                                                <div class=\"text-area\">
                                                    <p><b>Nick Grissom</b> posted a comment on your <span>status update</span></p>
                                                    <p class=\"mdtxt time-area mt-2\">2 minutes ago</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=\"d-center\">
                                            <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">View all Notifications</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"single-item d-none d-lg-block user-area\">
                                <div class=\"profile-area d-flex align-items-center\">
                                    <span class=\"user-profile cmn-head d-flex gap-2 align-items-center\">
                                        <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"User\">
                                        <i class=\"icon-d-arrow-thin\"></i>
                                    </span>
                                </div>
                                <div class=\"main-area user-content\">
                                    <div class=\"head-area py-4 text-center\">
                                        <h5>Hello,</h5>
                                        <p class=\"email-id\">x***9@bunlets.com</p>
                                    </div>
                                    <div class=\"cash-top\">
                                        <div class=\"cash-point d-flex gap-3 align-items-center\">
                                            <div class=\"img-area d-center\">
                                                <img src=\"/assets/images/icon/cash-icon.png\" alt=\"icon\">
                                            </div>
                                            <div class=\"info-area\">
                                                <h5>\$150.00</h5>
                                                <span>Balance</span>
                                            </div>
                                        </div>
                                        <div class=\"cash-point\">
                                            <div class=\"d-flex justify-content-between\">
                                                <div class=\"d-flex gap-3\">
                                                    <div class=\"img-area d-center\">
                                                        <img src=\"/assets/images/icon/cash-icon.png\" alt=\"icon\">
                                                    </div>
                                                    <div class=\"info-area\">
                                                        <h5>50</h5>
                                                        <span>Points</span>
                                                    </div>
                                                </div>
                                                <div class=\"btn-area\">
                                                    <a href=\"javascript:void(0)\">Exchange</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"acc-btn-area py-4 px-4\">
                                        <a href=\"javascript:void(0)\" class=\"account-area d-center justify-content-between\">
                                            <div class=\"d-flex gap-2\">
                                                <span class=\"icon-item d-center\">
                                                    <img src=\"/assets/images/icon/user-6.png\" alt=\"icon\">
                                                </span>
                                                <span>My Account</span>
                                            </div>
                                            <div class=\"icon-arrow d-center\">
                                                <i class=\"icon-c-arrow-single\"></i>
                                            </div>
                                        </a>
                                        <div class=\"btn-area mt-5 d-flex gap-4\">
                                            <a href=\"javascript:void(0)\" class=\"cmn-btn\">Deposit</a>
                                            <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">Withdraw</a>
                                        </div>
                                    </div>
                                    <div class=\"bottom-area\">
                                        <a href=\"javascript:void(0)\" class=\"d-flex justify-content-center py-3 gap-2\">
                                            <div class=\"icon-log\">
                                                <img src=\"/assets/images/icon/logout-icon.png\" alt=\"icon\">
                                            </div>
                                            Signout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </nav>
    </header>
    <!-- header-section end -->

    <!-- inner banner start -->
    <section class=\"banner-section inner-banner account\">
        <div class=\"banner-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"d-flex flex-wrap gap-3 gap-md-0 justify-content-between\">
                            <h6>Bienvenido, ";
        // line 588
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 588, $this->source); })()), "nombre", [], "any", false, false, false, 588), "html", null, true);
        echo "</h6>
                            <p>Último inicio de sesión: ";
        // line 589
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 589, $this->source); })()), "lastlogin", [], "any", false, false, false, 589), "d-m-Y"), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- Account Section start -->
    <section class=\"account-section\">
        <div class=\"overlay pb-120\">
            <div class=\"container profile-area\">
                <div class=\"row cus-mar\">
                    <div class=\"col-lg-4\">
                        <div class=\"single-box link-area\">
                            <a href=\"/perfil\" class=\"d-flex gap-2 active\">
                                <div class=\"icon-box d-center\">
                                    <img src=\"/assets/images/icon/dashboard-icon.png\" alt=\"icon\">
                                </div>
                                Perfil
                            </a>
                            <a href=\"/wallet\" class=\"d-flex gap-2\">
                                <div class=\"icon-box d-center\">
                                    <img src=\"/assets/images/icon/wallet-icon.png\" alt=\"icon\">
                                </div>
                                Billetera
                            </a>
                            <a href=\"/afiliados\" class=\"d-flex gap-2\">
                                <div class=\"icon-box d-center\">
                                    <img src=\"/assets/images/icon/affiliate-icon.png\" alt=\"icon\">
                                </div>
                                Afiliados
                            </a>
                            <div class=\"log-out-area mt-5\">
                               <a href=\"/logout\" class=\"m-0\">
                                    <button class=\"d-flex signup-btn justify-content-center m-auto py-3 gap-2\">
                                        <span class=\"icon-log\">
                                            <img src=\"/assets/images/icon/logout-icon.png\" alt=\"icon\">
                                        </span>
                                        Cerrar sesión
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class=\"single-box text-center\">
                            <div class=\"comment-box m-auto d-center\">
                                <img src=\"/assets/images/icon/comment-icon2.png\" class=\"max-un\" alt=\"icon\">
                            </div>
                            <h5 class=\"my-3\">Need Help?</h5>
                            <p>Have questions or concerns regrading your account?Our experts are here to help!.</p>
                            <a href=\"sign-up.html\" class=\"cmn-btn mt-5\">Chat with US</a>
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <div class=\"row balance-area\">
                            <div class=\"col-lg-6\">
                                <div class=\"single-box\">
                                    <div class=\"d-flex align-items-center justify-content-between\">
                                        <div class=\"d-flex align-items-center gap-2 gap-sm-4\">
                                            <div class=\"img-area d-center\">
                                                <img src=\"/assets/images/icon/balance-icon.png\" class=\"max-un\" alt=\"icon\">
                                            </div>
                                            <div class=\"info-area\">
                                                <h5 class=\"m-0\">";
        // line 653
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 653, $this->source); })()), "dinero", [], "any", false, false, false, 653), "html", null, true);
        echo " €</h5>
                                                <span>Dinero disponible</span>
                                            </div>
                                        </div>
                                        <div class=\"btn-area\">
                                            <a href=\"javascript:void(0)\" class=\"icon-arrow d-center\">
                                                <i class=\"icon-c-arrow-single\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"single-box\">
                                    <div class=\"d-flex align-items-center justify-content-between\">
                                        <div class=\"d-flex align-items-center gap-4\">
                                            <div class=\"img-area d-center\">
                                                <img src=\"/assets/images/icon/balance-icon.png\" class=\"max-un\" alt=\"icon\">
                                            </div>
                                            <div class=\"info-area\">
                                                <h5 class=\"m-0\">";
        // line 673
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 673, $this->source); })()), "dineroafiliados", [], "any", false, false, false, 673), "html", null, true);
        echo " €</h5>
                                                <span>Dinero afiliados</span>
                                            </div>
                                        </div>
                                        <div class=\"btn-area\">
                                            <a href=\"javascript:void(0)\" class=\"icon-arrow d-center\">
                                                <i class=\"icon-c-arrow-single\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-box\">
                            <form action=\"#\">
                                <div class=\"row\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"head-area pb-3 d-center justify-content-between\">
                                            <h6 class=\"m-0\">Información personal</h6>
                                            <div class=\"edit-icon\">
                                                <button class=\"d-center\"><img src=\"/assets/images/icon/edit-icon.png\" class=\"max-un\" alt=\"icon\"></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label for=\"fname\">Nombre</label>
                                            <input type=\"text\" id=\"fname\" placeholder=\"Nombre\" value=\"";
        // line 700
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 700, $this->source); })()), "nombre", [], "any", false, false, false, 700), "html", null, true);
        echo "\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label for=\"fname\">Apellidos</label>
                                            <input type=\"text\" id=\"lname\" placeholder=\"Apellidos\" value=\"";
        // line 706
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 706, $this->source); })()), "apellidos", [], "any", false, false, false, 706), "html", null, true);
        echo "\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label for=\"birth\">Fecha de nacimiento</label>
                                            <input type=\"text\" id=\"birth\" placeholder=\"Fecha de nacimiento\" value=\"";
        // line 712
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 712, $this->source); })()), "fechanacimiento", [], "any", false, false, false, 712), "d-m-Y"), "html", null, true);
        echo "\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label for=\"gender\">Sexo</label>
                                            <input type=\"text\" id=\"gender\" placeholder=\"Sexo\" value=\"";
        // line 718
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 718, $this->source); })()), "sexo", [], "any", false, false, false, 718), "html", null, true);
        echo "\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label for=\"country\">Pais</label>
                                            <input type=\"text\" id=\"country\" placeholder=\"Pais\" value=\"";
        // line 724
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 724, $this->source); })()), "pais", [], "any", false, false, false, 724), "html", null, true);
        echo "\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label for=\"City\">Ciudad</label>
                                            <input type=\"text\" id=\"City\" placeholder=\"Ciudad\" value=\"";
        // line 730
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 730, $this->source); })()), "ciudad", [], "any", false, false, false, 730), "html", null, true);
        echo "\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"form-group\">
                                            <label for=\"address\">Dirección de facturación</label>
                                            <input type=\"text\" id=\"address\" placeholder=\"Dirección\" value=\"";
        // line 736
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 736, $this->source); })()), "direccion", [], "any", false, false, false, 736), "html", null, true);
        echo "\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label for=\"postcode\">Código Postal</label>
                                            <input type=\"text\" id=\"postcode\" placeholder=\"Código Postal\" value=\"";
        // line 742
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 742, $this->source); })()), "CP", [], "any", false, false, false, 742), "html", null, true);
        echo "\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class=\"single-box\">
                            <form action=\"#\">
                                <div class=\"row\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"head-area pb-3 d-center justify-content-between\">
                                            <h6 class=\"m-0\">Seguridad</h6>
                                            <div class=\"edit-icon\">
                                                <button class=\"d-center\"><img src=\"/assets/images/icon/edit-icon.png\" class=\"max-un\" alt=\"icon\"></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <label for=\"number\">Teléfono</label>
                                            <input type=\"text\" id=\"number\" placeholder=\"Teléfono\" value=\"";
        // line 762
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 762, $this->source); })()), "telefono", [], "any", false, false, false, 762), "html", null, true);
        echo "\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <label for=\"email\">Correo</label>
                                            <input type=\"text\" id=\"email\" placeholder=\"Correo\" value=\"";
        // line 768
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 768, $this->source); })()), "email", [], "any", false, false, false, 768), "html", null, true);
        echo "\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class=\"single-box\">
                            <form action=\"#\">
                                <div class=\"row\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"head-area border-0 d-center justify-content-between\">
                                            <h6 class=\"m-0\">Cambiar contraseña</h6>
                                            <div class=\"edit-icon\">
                                                <button class=\"d-center\"><img src=\"/assets/images/icon/edit-icon.png\" class=\"max-un\" alt=\"icon\"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Account Section end -->

    <!-- Bottom Menu area start -->
    <div class=\"header-menu d-block d-lg-none position-fixed bottom-0 w-100 z-1\">
        <div class=\"right-area position-relative px-2 px-sm-5 py-2 d-flex gap-3 gap-xxl-5 justify-content-between align-items-center\">
            <div class=\"single-item shop-cart-area\">
                <div class=\"shop-cart-btn cmn-head dot\">
                    <img src=\"/assets/images/icon/cart-icon.png\" class=\"cart-icon max-un\" alt=\"icon\">
                    <div class=\"abs-area\">
                        <span class=\"d-center\">3</span>
                    </div>
                </div>
                <div class=\"main-area px-2 py-4 px-sm-4 shop-cart-content\">
                    <div class=\"head-area mb-4\">
                        <h6>Shopping Cart <span>3</span></h6>
                    </div>
                    <ul>
                        <li>
                            <a href=\"javascript:void(0)\" class=\"d-flex align-items-center\">
                                <div class=\"img-area d-center\">
                                    <img src=\"/assets/images/products-image-9.png\" class=\"max-un\" alt=\"image\">
                                </div>
                                <div class=\"text-area\">
                                    <h6 class=\"m-0\">Esports Black Shirt</h6>
                                    <p class=\"mdtxt prize-area mt-2\">\$ 19.99 USD X 01</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\" class=\"d-flex align-items-center\">
                                <div class=\"img-area d-center\">
                                    <img src=\"/assets/images/products-image-10.png\" class=\"max-un\" alt=\"image\">
                                </div>
                                <div class=\"text-area\">
                                    <h6 class=\"m-0\">Esports Black Shirt</h6>
                                    <p class=\"mdtxt prize-area mt-2\">\$ 19.99 USD X 01</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\" class=\"d-flex align-items-center\">
                                <div class=\"img-area d-center\">
                                    <img src=\"/assets/images/products-image-11.png\" class=\"max-un\" alt=\"image\">
                                </div>
                                <div class=\"text-area\">
                                    <h6 class=\"m-0\">Esports Black Shirt</h6>
                                    <p class=\"mdtxt prize-area mt-2\">\$ 19.99 USD X 01</p>
                                </div>
                            </a>
                        </li>
                        <li class=\"total-cart-area mt-2 mt-sm-5 py-3 d-flex justify-content-between\">
                            <span>Total:</span>
                            <span>\$64.99</span>
                        </li> 
                        <li class=\"d-center\">
                            <div class=\"acc-btn-area\">
                                <div class=\"btn-area mt-2 mt-sm-4 flex-wrap d-flex flex-wrap text-nowrap gap-2 gap-sm-4\">
                                    <a href=\"javascript:void(0)\" class=\"cmn-btn\">Shopping cart</a>
                                    <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">Go to checkout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"single-item chat-area\">
                <div class=\"chat-btn cmn-head position-relative\">
                    <img src=\"/assets/images/icon/chat-icon.png\" class=\"chat-icon max-un\" alt=\"icon\">
                    <div class=\"abs-area\">
                        <span class=\"d-center\">3</span>
                    </div>
                </div>
                <div class=\"main-area chat-content\">
                    <div class=\"chat-item text-nowrap\">
                        <div class=\"chat-top-side\">
                            <div class=\"chat-form\">
                                <form action=\"#\">
                                    <div class=\"form-group py-1 input-area d-flex align-items-center\">
                                        <input type=\"text\" placeholder=\"Search\">
                                        <img src=\"/assets/images/icon/search-icon.png\" alt=\"icon\">
                                    </div>
                                </form>
                            </div>
                            <ul>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status orange\"></span>
                                            offline
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-2.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-3.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status orange\"></span>
                                            offline
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-4.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-5.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status orange\"></span>
                                            offline
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-6.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-7.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-8.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-9.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-10.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status orange\"></span>
                                            offline
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"main\">
                            <div class=\"d-flex px-3 py-2 align-items-center gap-3\">
                                <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"image\">
                                <div>
                                    <p>Chat with Vincent Porter</p>
                                </div>
                            </div>
                            <ul class=\"chat-main\">
                                <li class=\"you\">
                                    <div class=\"entete\">
                                        <span class=\"status green\"></span>
                                        <p>Dana</p>
                                        <span class=\"mdr\">10:12AM, Today</span>
                                    </div>
                                    <div class=\"triangle\"></div>
                                    <p class=\"message\">
                                        Which game you play now?
                                    </p>
                                </li>
                                <li class=\"me\">
                                    <div class=\"entete\">
                                        <span class=\"mdr\">10:12AM, Today</span>
                                        <p>Dana</p>
                                        <span class=\"status blue\"></span>
                                    </div>
                                    <div class=\"triangle\"></div>
                                    <p class=\"message\">
                                        I play Stronghold Kingdoms
                                    </p>
                                </li>
                                <li class=\"me\">
                                    <div class=\"entete\">
                                        <span class=\"mdr\">10:12AM, Today</span>
                                        <p>Dana</p>
                                        <span class=\"status blue\"></span>
                                    </div>
                                    <div class=\"triangle\"></div>
                                    <p class=\"message\">
                                        OK
                                    </p>
                                </li>
                                <li class=\"you\">
                                    <div class=\"entete\">
                                        <span class=\"status green\"></span>
                                        <p>Dana</p>
                                        <span class=\"mdr\">10:12AM, Today</span>
                                    </div>
                                    <div class=\"triangle\"></div>
                                    <p class=\"message\">
                                        Which game you play now?
                                    </p>
                                </li>
                                <li class=\"me\">
                                    <div class=\"entete\">
                                        <span class=\"mdr\">10:12AM, Today</span>
                                        <p>Dana</p>
                                        <span class=\"status blue\"></span>
                                    </div>
                                    <div class=\"triangle\"></div>
                                    <p class=\"message\">
                                        I play Stronghold Kingdoms
                                    </p>
                                </li>
                                <li class=\"me\">
                                    <div class=\"entete\">
                                        <span class=\"mdr\">10:12AM, Today</span>
                                        <p>Dana</p>
                                        <span class=\"status blue\"></span>
                                    </div>
                                    <div class=\"triangle\"></div>
                                    <p class=\"message\">
                                        OK
                                    </p>
                                </li>
                            </ul>
                            <div class=\"chat-footer text-right text-end\">
                                <form action=\"#\">
                                    <textarea cols=\"10\" rows=\"2\" placeholder=\"Type your message\"></textarea>
                                    <div class=\"upload-send px-2 d-flex justify-content-between\">
                                        <label for=\"files\">
                                            <img src=\"/assets/images/icon/upload-img.png\" alt=\"icon\">
                                        </label>
                                        <input type=\"file\" id=\"files\" class=\"d-none\">
                                        <button type=\"submit\">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"single-item notifications-area\">
                <div class=\"notifications-btn cmn-head dot\">
                    <img src=\"/assets/images/icon/nofify-icon.png\" class=\"bell-icon max-un\" alt=\"icon\">
                    <div class=\"abs-area notify\">
                        <span class=\"d-center\">3</span>
                    </div>
                </div>
                <div class=\"main-area px-2 py-4 px-sm-4 notifications-content\">
                    <div class=\"head-area d-flex justify-content-between\">
                        <h5>Notifications</h5>
                        <span class=\"mdtxt\">Mark all as Read</span>
                    </div>
                    <ul>
                        <li>
                            <a href=\"javascript:void(0)\" class=\"d-flex\">
                                <div class=\"img-area\">
                                    <img src=\"/assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
                                </div>
                                <div class=\"text-area\">
                                    <p><b>Nick Grissom</b> posted a comment on your <span>status update</span></p>
                                    <p class=\"mdtxt time-area mt-2\">2 minutes ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\" class=\"d-flex\">
                                <div class=\"img-area\">
                                    <img src=\"/assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
                                </div>
                                <div class=\"text-area\">
                                    <p><b>Nick Grissom</b> posted a comment on your <span>status update</span></p>
                                    <p class=\"mdtxt time-area mt-2\">2 minutes ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\" class=\"d-flex\">
                                <div class=\"img-area\">
                                    <img src=\"/assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
                                </div>
                                <div class=\"text-area\">
                                    <p><b>Nick Grissom</b> posted a comment on your <span>status update</span></p>
                                    <p class=\"mdtxt time-area mt-2\">2 minutes ago</p>
                                </div>
                            </a>
                        </li>
                        <li class=\"d-center\">
                            <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">View all Notifications</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"single-item user-area\">
                <div class=\"profile-area d-flex align-items-center\">
                    <span class=\"user-profile cmn-head d-flex gap-2 align-items-center\">
                        <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"User\">
                        <i class=\"icon-d-arrow-thin\"></i>
                    </span>
                </div>
                <div class=\"main-area user-content\">
                    <div class=\"head-area py-4 text-center\">
                        <h5>Hello,</h5>
                        <p class=\"email-id\">x***9@bunlets.com</p>
                    </div>
                    <div class=\"cash-top\">
                        <div class=\"cash-point d-flex gap-3 align-items-center\">
                            <div class=\"img-area d-center\">
                                <img src=\"/assets/images/icon/cash-icon.png\" alt=\"icon\">
                            </div>
                            <div class=\"info-area\">
                                <h5>\$150.00</h5>
                                <span>Balance</span>
                            </div>
                        </div>
                        <div class=\"cash-point\">
                            <div class=\"d-flex justify-content-between\">
                                <div class=\"d-flex gap-3\">
                                    <div class=\"img-area d-center\">
                                        <img src=\"/assets/images/icon/cash-icon.png\" alt=\"icon\">
                                    </div>
                                    <div class=\"info-area\">
                                        <h5>50</h5>
                                        <span>Points</span>
                                    </div>
                                </div>
                                <div class=\"btn-area\">
                                    <a href=\"javascript:void(0)\">Exchange</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"acc-btn-area py-4 px-4\">
                        <a href=\"javascript:void(0)\" class=\"account-area d-center justify-content-between\">
                            <div class=\"d-flex gap-2\">
                                <span class=\"icon-item d-center\">
                                    <img src=\"/assets/images/icon/user-6.png\" alt=\"icon\">
                                </span>
                                <span>My Account</span>
                            </div>
                            <div class=\"icon-arrow d-center\">
                                <i class=\"icon-c-arrow-single\"></i>
                            </div>
                        </a>
                        <div class=\"btn-area mt-5 d-flex gap-4\">
                            <a href=\"javascript:void(0)\" class=\"cmn-btn\">Deposit</a>
                            <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">Withdraw</a>
                        </div>
                    </div>
                    <div class=\"bottom-area\">
                        <a href=\"javascript:void(0)\" class=\"d-flex justify-content-center py-3 gap-2\">
                            <div class=\"icon-log\">
                                <img src=\"/assets/images/icon/logout-icon.png\" alt=\"icon\">
                            </div>
                            Signout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Menu area end -->

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
    <script src=\"/assets/js/plugin/apexcharts.js\"></script>
    <script src=\"/assets/js/plugin/waypoint.min.js\"></script>
    <script src=\"/assets/js/plugin/jquery.magnific-popup.min.js\"></script>
    <script src=\"/assets/js/plugin/wow.min.js\"></script>
    <script src=\"/assets/js/plugin/plugin.js\"></script>
    <script src=\"/assets/js/main.js\"></script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "perfil/perfilmain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  863 => 768,  854 => 762,  831 => 742,  822 => 736,  813 => 730,  804 => 724,  795 => 718,  786 => 712,  777 => 706,  768 => 700,  738 => 673,  715 => 653,  648 => 589,  644 => 588,  236 => 182,  231 => 179,  223 => 176,  220 => 175,  218 => 174,  43 => 1,);
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
                                <a class=\"dropdown-toggle dropdown-nav active\" href=\"javascript:void(0)\">Pages</a>
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
                            <div class=\"btn-area d-block d-lg-none d-flex gap-3 align-items-center\">
                              {% if app.user %}
        
            <a href=\"#\">Estas logueado como {{ app.user.userIdentifier }}.</a> <a href=\"{{ path('app_logout') }}\">Cerrar sesión</a>

    {% else %}
      <a href=\"/login\">Login</a>
      <a href=\"/register\" class=\"cmn-btn\">Registro</a>
    {% endif %}
                            </div>
                            <div class=\"single-item d-none d-lg-block shop-cart-area\">
                                <div class=\"shop-cart-btn cmn-head dot\">
                                    <img src=\"/assets/images/icon/cart-icon.png\" class=\"cart-icon max-un\" alt=\"icon\">
                                    <div class=\"abs-area\">
                                        <span class=\"d-center\">3</span>
                                    </div>
                                </div>
                                <div class=\"main-area px-4 py-4 shop-cart-content\">
                                    <div class=\"head-area mb-4\">
                                        <h6>Shopping Cart <span>3</span></h6>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href=\"javascript:void(0)\" class=\"d-flex align-items-center\">
                                                <div class=\"img-area d-center\">
                                                    <img src=\"/assets/images/products-image-9.png\" class=\"max-un\" alt=\"image\">
                                                </div>
                                                <div class=\"text-area\">
                                                    <h6 class=\"m-0\">Esports Black Shirt</h6>
                                                    <p class=\"mdtxt prize-area mt-2\">\$ 19.99 USD X 01</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void(0)\" class=\"d-flex align-items-center\">
                                                <div class=\"img-area d-center\">
                                                    <img src=\"/assets/images/products-image-10.png\" class=\"max-un\" alt=\"image\">
                                                </div>
                                                <div class=\"text-area\">
                                                    <h6 class=\"m-0\">Esports Black Shirt</h6>
                                                    <p class=\"mdtxt prize-area mt-2\">\$ 19.99 USD X 01</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void(0)\" class=\"d-flex align-items-center\">
                                                <div class=\"img-area d-center\">
                                                    <img src=\"/assets/images/products-image-11.png\" class=\"max-un\" alt=\"image\">
                                                </div>
                                                <div class=\"text-area\">
                                                    <h6 class=\"m-0\">Esports Black Shirt</h6>
                                                    <p class=\"mdtxt prize-area mt-2\">\$ 19.99 USD X 01</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=\"total-cart-area mt-5 py-3 d-flex justify-content-between\">
                                            <span>Total:</span>
                                            <span>\$64.99</span>
                                        </li>
                                        <li class=\"d-center\">
                                            <div class=\"acc-btn-area\">
                                                <div class=\"btn-area mt-4 d-flex text-nowrap gap-4\">
                                                    <a href=\"javascript:void(0)\" class=\"cmn-btn\">Shopping cart</a>
                                                    <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">Go to checkout</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"single-item d-none d-lg-block chat-area\">
                                <div class=\"chat-btn cmn-head position-relative\">
                                    <img src=\"/assets/images/icon/chat-icon.png\" class=\"chat-icon max-un\" alt=\"icon\">
                                    <div class=\"abs-area\">
                                        <span class=\"d-center\">3</span>
                                    </div>
                                </div>
                                <div class=\"main-area chat-content\">
                                    <div class=\"chat-item text-nowrap\">
                                        <div class=\"chat-top-side\">
                                            <div class=\"chat-form\">
                                                <form action=\"#\">
                                                    <div class=\"form-group py-1 input-area d-flex align-items-center\">
                                                        <input type=\"text\" placeholder=\"Search\">
                                                        <img src=\"/assets/images/icon/search-icon.png\" alt=\"icon\">
                                                    </div>
                                                </form>
                                            </div>
                                            <ul>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status orange\"></span>
                                                            offline
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-2.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status green\"></span>
                                                            online
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-3.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status orange\"></span>
                                                            offline
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-4.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status green\"></span>
                                                            online
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-5.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status orange\"></span>
                                                            offline
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-6.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status green\"></span>
                                                            online
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-7.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status green\"></span>
                                                            online
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-8.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status green\"></span>
                                                            online
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-9.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status green\"></span>
                                                            online
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src=\"/assets/images/leaderboard-img-10.png\" alt=\"image\">
                                                    <div>
                                                        <h6>Prénom Nom</h6>
                                                        <p>
                                                            <span class=\"status orange\"></span>
                                                            offline
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"main\">
                                            <div class=\"d-flex px-3 py-2 align-items-center gap-3\">
                                                <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"image\">
                                                <div>
                                                    <p>Chat with Vincent Porter</p>
                                                </div>
                                            </div>
                                            <ul class=\"chat-main\">
                                                <li class=\"you\">
                                                    <div class=\"entete\">
                                                        <span class=\"status green\"></span>
                                                        <p>Dana</p>
                                                        <span class=\"mdr\">10:12AM, Today</span>
                                                    </div>
                                                    <div class=\"triangle\"></div>
                                                    <p class=\"message\">
                                                        Which game you play now?
                                                    </p>
                                                </li>
                                                <li class=\"me\">
                                                    <div class=\"entete\">
                                                        <span class=\"mdr\">10:12AM, Today</span>
                                                        <p>Dana</p>
                                                        <span class=\"status blue\"></span>
                                                    </div>
                                                    <div class=\"triangle\"></div>
                                                    <p class=\"message\">
                                                        I play Stronghold Kingdoms
                                                    </p>
                                                </li>
                                                <li class=\"me\">
                                                    <div class=\"entete\">
                                                        <span class=\"mdr\">10:12AM, Today</span>
                                                        <p>Dana</p>
                                                        <span class=\"status blue\"></span>
                                                    </div>
                                                    <div class=\"triangle\"></div>
                                                    <p class=\"message\">
                                                        OK
                                                    </p>
                                                </li>
                                                <li class=\"you\">
                                                    <div class=\"entete\">
                                                        <span class=\"status green\"></span>
                                                        <p>Dana</p>
                                                        <span class=\"mdr\">10:12AM, Today</span>
                                                    </div>
                                                    <div class=\"triangle\"></div>
                                                    <p class=\"message\">
                                                        Which game you play now?
                                                    </p>
                                                </li>
                                                <li class=\"me\">
                                                    <div class=\"entete\">
                                                        <span class=\"mdr\">10:12AM, Today</span>
                                                        <p>Dana</p>
                                                        <span class=\"status blue\"></span>
                                                    </div>
                                                    <div class=\"triangle\"></div>
                                                    <p class=\"message\">
                                                        I play Stronghold Kingdoms
                                                    </p>
                                                </li>
                                                <li class=\"me\">
                                                    <div class=\"entete\">
                                                        <span class=\"mdr\">10:12AM, Today</span>
                                                        <p>Dana</p>
                                                        <span class=\"status blue\"></span>
                                                    </div>
                                                    <div class=\"triangle\"></div>
                                                    <p class=\"message\">
                                                        OK
                                                    </p>
                                                </li>
                                            </ul>
                                            <div class=\"chat-footer text-right text-end\">
                                                <form action=\"#\">
                                                    <textarea cols=\"10\" rows=\"2\" placeholder=\"Type your message\"></textarea>
                                                    <div class=\"upload-send px-2 d-flex justify-content-between\">
                                                        <label for=\"files1\">
                                                            <img src=\"/assets/images/icon/upload-img.png\" alt=\"icon\">
                                                        </label>
                                                        <input type=\"file\" id=\"files1\" class=\"d-none\">
                                                        <button type=\"submit\">Send</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"single-item d-none d-lg-block notifications-area\">
                                <div class=\"notifications-btn cmn-head dot\">
                                    <img src=\"/assets/images/icon/nofify-icon.png\" class=\"bell-icon max-un\" alt=\"icon\">
                                    <div class=\"abs-area notify\">
                                        <span class=\"d-center\">3</span>
                                    </div>
                                </div>
                                <div class=\"main-area px-4 py-4 notifications-content\">
                                    <div class=\"head-area d-flex justify-content-between\">
                                        <h5>Notifications</h5>
                                        <span class=\"mdtxt\">Mark all as Read</span>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href=\"javascript:void(0)\" class=\"d-flex\">
                                                <div class=\"img-area\">
                                                    <img src=\"/assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
                                                </div>
                                                <div class=\"text-area\">
                                                    <p><b>Nick Grissom</b> posted a comment on your <span>status update</span></p>
                                                    <p class=\"mdtxt time-area mt-2\">2 minutes ago</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void(0)\" class=\"d-flex\">
                                                <div class=\"img-area\">
                                                    <img src=\"/assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
                                                </div>
                                                <div class=\"text-area\">
                                                    <p><b>Nick Grissom</b> posted a comment on your <span>status update</span></p>
                                                    <p class=\"mdtxt time-area mt-2\">2 minutes ago</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void(0)\" class=\"d-flex\">
                                                <div class=\"img-area\">
                                                    <img src=\"/assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
                                                </div>
                                                <div class=\"text-area\">
                                                    <p><b>Nick Grissom</b> posted a comment on your <span>status update</span></p>
                                                    <p class=\"mdtxt time-area mt-2\">2 minutes ago</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=\"d-center\">
                                            <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">View all Notifications</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"single-item d-none d-lg-block user-area\">
                                <div class=\"profile-area d-flex align-items-center\">
                                    <span class=\"user-profile cmn-head d-flex gap-2 align-items-center\">
                                        <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"User\">
                                        <i class=\"icon-d-arrow-thin\"></i>
                                    </span>
                                </div>
                                <div class=\"main-area user-content\">
                                    <div class=\"head-area py-4 text-center\">
                                        <h5>Hello,</h5>
                                        <p class=\"email-id\">x***9@bunlets.com</p>
                                    </div>
                                    <div class=\"cash-top\">
                                        <div class=\"cash-point d-flex gap-3 align-items-center\">
                                            <div class=\"img-area d-center\">
                                                <img src=\"/assets/images/icon/cash-icon.png\" alt=\"icon\">
                                            </div>
                                            <div class=\"info-area\">
                                                <h5>\$150.00</h5>
                                                <span>Balance</span>
                                            </div>
                                        </div>
                                        <div class=\"cash-point\">
                                            <div class=\"d-flex justify-content-between\">
                                                <div class=\"d-flex gap-3\">
                                                    <div class=\"img-area d-center\">
                                                        <img src=\"/assets/images/icon/cash-icon.png\" alt=\"icon\">
                                                    </div>
                                                    <div class=\"info-area\">
                                                        <h5>50</h5>
                                                        <span>Points</span>
                                                    </div>
                                                </div>
                                                <div class=\"btn-area\">
                                                    <a href=\"javascript:void(0)\">Exchange</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"acc-btn-area py-4 px-4\">
                                        <a href=\"javascript:void(0)\" class=\"account-area d-center justify-content-between\">
                                            <div class=\"d-flex gap-2\">
                                                <span class=\"icon-item d-center\">
                                                    <img src=\"/assets/images/icon/user-6.png\" alt=\"icon\">
                                                </span>
                                                <span>My Account</span>
                                            </div>
                                            <div class=\"icon-arrow d-center\">
                                                <i class=\"icon-c-arrow-single\"></i>
                                            </div>
                                        </a>
                                        <div class=\"btn-area mt-5 d-flex gap-4\">
                                            <a href=\"javascript:void(0)\" class=\"cmn-btn\">Deposit</a>
                                            <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">Withdraw</a>
                                        </div>
                                    </div>
                                    <div class=\"bottom-area\">
                                        <a href=\"javascript:void(0)\" class=\"d-flex justify-content-center py-3 gap-2\">
                                            <div class=\"icon-log\">
                                                <img src=\"/assets/images/icon/logout-icon.png\" alt=\"icon\">
                                            </div>
                                            Signout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </nav>
    </header>
    <!-- header-section end -->

    <!-- inner banner start -->
    <section class=\"banner-section inner-banner account\">
        <div class=\"banner-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"d-flex flex-wrap gap-3 gap-md-0 justify-content-between\">
                            <h6>Bienvenido, {{user.nombre}}</h6>
                            <p>Último inicio de sesión: {{user.lastlogin|date('d-m-Y')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- Account Section start -->
    <section class=\"account-section\">
        <div class=\"overlay pb-120\">
            <div class=\"container profile-area\">
                <div class=\"row cus-mar\">
                    <div class=\"col-lg-4\">
                        <div class=\"single-box link-area\">
                            <a href=\"/perfil\" class=\"d-flex gap-2 active\">
                                <div class=\"icon-box d-center\">
                                    <img src=\"/assets/images/icon/dashboard-icon.png\" alt=\"icon\">
                                </div>
                                Perfil
                            </a>
                            <a href=\"/wallet\" class=\"d-flex gap-2\">
                                <div class=\"icon-box d-center\">
                                    <img src=\"/assets/images/icon/wallet-icon.png\" alt=\"icon\">
                                </div>
                                Billetera
                            </a>
                            <a href=\"/afiliados\" class=\"d-flex gap-2\">
                                <div class=\"icon-box d-center\">
                                    <img src=\"/assets/images/icon/affiliate-icon.png\" alt=\"icon\">
                                </div>
                                Afiliados
                            </a>
                            <div class=\"log-out-area mt-5\">
                               <a href=\"/logout\" class=\"m-0\">
                                    <button class=\"d-flex signup-btn justify-content-center m-auto py-3 gap-2\">
                                        <span class=\"icon-log\">
                                            <img src=\"/assets/images/icon/logout-icon.png\" alt=\"icon\">
                                        </span>
                                        Cerrar sesión
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class=\"single-box text-center\">
                            <div class=\"comment-box m-auto d-center\">
                                <img src=\"/assets/images/icon/comment-icon2.png\" class=\"max-un\" alt=\"icon\">
                            </div>
                            <h5 class=\"my-3\">Need Help?</h5>
                            <p>Have questions or concerns regrading your account?Our experts are here to help!.</p>
                            <a href=\"sign-up.html\" class=\"cmn-btn mt-5\">Chat with US</a>
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <div class=\"row balance-area\">
                            <div class=\"col-lg-6\">
                                <div class=\"single-box\">
                                    <div class=\"d-flex align-items-center justify-content-between\">
                                        <div class=\"d-flex align-items-center gap-2 gap-sm-4\">
                                            <div class=\"img-area d-center\">
                                                <img src=\"/assets/images/icon/balance-icon.png\" class=\"max-un\" alt=\"icon\">
                                            </div>
                                            <div class=\"info-area\">
                                                <h5 class=\"m-0\">{{user.dinero}} €</h5>
                                                <span>Dinero disponible</span>
                                            </div>
                                        </div>
                                        <div class=\"btn-area\">
                                            <a href=\"javascript:void(0)\" class=\"icon-arrow d-center\">
                                                <i class=\"icon-c-arrow-single\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"single-box\">
                                    <div class=\"d-flex align-items-center justify-content-between\">
                                        <div class=\"d-flex align-items-center gap-4\">
                                            <div class=\"img-area d-center\">
                                                <img src=\"/assets/images/icon/balance-icon.png\" class=\"max-un\" alt=\"icon\">
                                            </div>
                                            <div class=\"info-area\">
                                                <h5 class=\"m-0\">{{user.dineroafiliados}} €</h5>
                                                <span>Dinero afiliados</span>
                                            </div>
                                        </div>
                                        <div class=\"btn-area\">
                                            <a href=\"javascript:void(0)\" class=\"icon-arrow d-center\">
                                                <i class=\"icon-c-arrow-single\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-box\">
                            <form action=\"#\">
                                <div class=\"row\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"head-area pb-3 d-center justify-content-between\">
                                            <h6 class=\"m-0\">Información personal</h6>
                                            <div class=\"edit-icon\">
                                                <button class=\"d-center\"><img src=\"/assets/images/icon/edit-icon.png\" class=\"max-un\" alt=\"icon\"></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label for=\"fname\">Nombre</label>
                                            <input type=\"text\" id=\"fname\" placeholder=\"Nombre\" value=\"{{user.nombre}}\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label for=\"fname\">Apellidos</label>
                                            <input type=\"text\" id=\"lname\" placeholder=\"Apellidos\" value=\"{{user.apellidos}}\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label for=\"birth\">Fecha de nacimiento</label>
                                            <input type=\"text\" id=\"birth\" placeholder=\"Fecha de nacimiento\" value=\"{{user.fechanacimiento|date('d-m-Y')}}\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label for=\"gender\">Sexo</label>
                                            <input type=\"text\" id=\"gender\" placeholder=\"Sexo\" value=\"{{user.sexo}}\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label for=\"country\">Pais</label>
                                            <input type=\"text\" id=\"country\" placeholder=\"Pais\" value=\"{{user.pais}}\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label for=\"City\">Ciudad</label>
                                            <input type=\"text\" id=\"City\" placeholder=\"Ciudad\" value=\"{{user.ciudad}}\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"form-group\">
                                            <label for=\"address\">Dirección de facturación</label>
                                            <input type=\"text\" id=\"address\" placeholder=\"Dirección\" value=\"{{user.direccion}}\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label for=\"postcode\">Código Postal</label>
                                            <input type=\"text\" id=\"postcode\" placeholder=\"Código Postal\" value=\"{{user.CP}}\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class=\"single-box\">
                            <form action=\"#\">
                                <div class=\"row\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"head-area pb-3 d-center justify-content-between\">
                                            <h6 class=\"m-0\">Seguridad</h6>
                                            <div class=\"edit-icon\">
                                                <button class=\"d-center\"><img src=\"/assets/images/icon/edit-icon.png\" class=\"max-un\" alt=\"icon\"></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <label for=\"number\">Teléfono</label>
                                            <input type=\"text\" id=\"number\" placeholder=\"Teléfono\" value=\"{{user.telefono}}\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <label for=\"email\">Correo</label>
                                            <input type=\"text\" id=\"email\" placeholder=\"Correo\" value=\"{{user.email}}\" autocomplete=\"off\">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class=\"single-box\">
                            <form action=\"#\">
                                <div class=\"row\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"head-area border-0 d-center justify-content-between\">
                                            <h6 class=\"m-0\">Cambiar contraseña</h6>
                                            <div class=\"edit-icon\">
                                                <button class=\"d-center\"><img src=\"/assets/images/icon/edit-icon.png\" class=\"max-un\" alt=\"icon\"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Account Section end -->

    <!-- Bottom Menu area start -->
    <div class=\"header-menu d-block d-lg-none position-fixed bottom-0 w-100 z-1\">
        <div class=\"right-area position-relative px-2 px-sm-5 py-2 d-flex gap-3 gap-xxl-5 justify-content-between align-items-center\">
            <div class=\"single-item shop-cart-area\">
                <div class=\"shop-cart-btn cmn-head dot\">
                    <img src=\"/assets/images/icon/cart-icon.png\" class=\"cart-icon max-un\" alt=\"icon\">
                    <div class=\"abs-area\">
                        <span class=\"d-center\">3</span>
                    </div>
                </div>
                <div class=\"main-area px-2 py-4 px-sm-4 shop-cart-content\">
                    <div class=\"head-area mb-4\">
                        <h6>Shopping Cart <span>3</span></h6>
                    </div>
                    <ul>
                        <li>
                            <a href=\"javascript:void(0)\" class=\"d-flex align-items-center\">
                                <div class=\"img-area d-center\">
                                    <img src=\"/assets/images/products-image-9.png\" class=\"max-un\" alt=\"image\">
                                </div>
                                <div class=\"text-area\">
                                    <h6 class=\"m-0\">Esports Black Shirt</h6>
                                    <p class=\"mdtxt prize-area mt-2\">\$ 19.99 USD X 01</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\" class=\"d-flex align-items-center\">
                                <div class=\"img-area d-center\">
                                    <img src=\"/assets/images/products-image-10.png\" class=\"max-un\" alt=\"image\">
                                </div>
                                <div class=\"text-area\">
                                    <h6 class=\"m-0\">Esports Black Shirt</h6>
                                    <p class=\"mdtxt prize-area mt-2\">\$ 19.99 USD X 01</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\" class=\"d-flex align-items-center\">
                                <div class=\"img-area d-center\">
                                    <img src=\"/assets/images/products-image-11.png\" class=\"max-un\" alt=\"image\">
                                </div>
                                <div class=\"text-area\">
                                    <h6 class=\"m-0\">Esports Black Shirt</h6>
                                    <p class=\"mdtxt prize-area mt-2\">\$ 19.99 USD X 01</p>
                                </div>
                            </a>
                        </li>
                        <li class=\"total-cart-area mt-2 mt-sm-5 py-3 d-flex justify-content-between\">
                            <span>Total:</span>
                            <span>\$64.99</span>
                        </li> 
                        <li class=\"d-center\">
                            <div class=\"acc-btn-area\">
                                <div class=\"btn-area mt-2 mt-sm-4 flex-wrap d-flex flex-wrap text-nowrap gap-2 gap-sm-4\">
                                    <a href=\"javascript:void(0)\" class=\"cmn-btn\">Shopping cart</a>
                                    <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">Go to checkout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"single-item chat-area\">
                <div class=\"chat-btn cmn-head position-relative\">
                    <img src=\"/assets/images/icon/chat-icon.png\" class=\"chat-icon max-un\" alt=\"icon\">
                    <div class=\"abs-area\">
                        <span class=\"d-center\">3</span>
                    </div>
                </div>
                <div class=\"main-area chat-content\">
                    <div class=\"chat-item text-nowrap\">
                        <div class=\"chat-top-side\">
                            <div class=\"chat-form\">
                                <form action=\"#\">
                                    <div class=\"form-group py-1 input-area d-flex align-items-center\">
                                        <input type=\"text\" placeholder=\"Search\">
                                        <img src=\"/assets/images/icon/search-icon.png\" alt=\"icon\">
                                    </div>
                                </form>
                            </div>
                            <ul>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status orange\"></span>
                                            offline
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-2.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-3.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status orange\"></span>
                                            offline
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-4.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-5.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status orange\"></span>
                                            offline
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-6.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-7.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-8.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-9.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"/assets/images/leaderboard-img-10.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status orange\"></span>
                                            offline
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"main\">
                            <div class=\"d-flex px-3 py-2 align-items-center gap-3\">
                                <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"image\">
                                <div>
                                    <p>Chat with Vincent Porter</p>
                                </div>
                            </div>
                            <ul class=\"chat-main\">
                                <li class=\"you\">
                                    <div class=\"entete\">
                                        <span class=\"status green\"></span>
                                        <p>Dana</p>
                                        <span class=\"mdr\">10:12AM, Today</span>
                                    </div>
                                    <div class=\"triangle\"></div>
                                    <p class=\"message\">
                                        Which game you play now?
                                    </p>
                                </li>
                                <li class=\"me\">
                                    <div class=\"entete\">
                                        <span class=\"mdr\">10:12AM, Today</span>
                                        <p>Dana</p>
                                        <span class=\"status blue\"></span>
                                    </div>
                                    <div class=\"triangle\"></div>
                                    <p class=\"message\">
                                        I play Stronghold Kingdoms
                                    </p>
                                </li>
                                <li class=\"me\">
                                    <div class=\"entete\">
                                        <span class=\"mdr\">10:12AM, Today</span>
                                        <p>Dana</p>
                                        <span class=\"status blue\"></span>
                                    </div>
                                    <div class=\"triangle\"></div>
                                    <p class=\"message\">
                                        OK
                                    </p>
                                </li>
                                <li class=\"you\">
                                    <div class=\"entete\">
                                        <span class=\"status green\"></span>
                                        <p>Dana</p>
                                        <span class=\"mdr\">10:12AM, Today</span>
                                    </div>
                                    <div class=\"triangle\"></div>
                                    <p class=\"message\">
                                        Which game you play now?
                                    </p>
                                </li>
                                <li class=\"me\">
                                    <div class=\"entete\">
                                        <span class=\"mdr\">10:12AM, Today</span>
                                        <p>Dana</p>
                                        <span class=\"status blue\"></span>
                                    </div>
                                    <div class=\"triangle\"></div>
                                    <p class=\"message\">
                                        I play Stronghold Kingdoms
                                    </p>
                                </li>
                                <li class=\"me\">
                                    <div class=\"entete\">
                                        <span class=\"mdr\">10:12AM, Today</span>
                                        <p>Dana</p>
                                        <span class=\"status blue\"></span>
                                    </div>
                                    <div class=\"triangle\"></div>
                                    <p class=\"message\">
                                        OK
                                    </p>
                                </li>
                            </ul>
                            <div class=\"chat-footer text-right text-end\">
                                <form action=\"#\">
                                    <textarea cols=\"10\" rows=\"2\" placeholder=\"Type your message\"></textarea>
                                    <div class=\"upload-send px-2 d-flex justify-content-between\">
                                        <label for=\"files\">
                                            <img src=\"/assets/images/icon/upload-img.png\" alt=\"icon\">
                                        </label>
                                        <input type=\"file\" id=\"files\" class=\"d-none\">
                                        <button type=\"submit\">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"single-item notifications-area\">
                <div class=\"notifications-btn cmn-head dot\">
                    <img src=\"/assets/images/icon/nofify-icon.png\" class=\"bell-icon max-un\" alt=\"icon\">
                    <div class=\"abs-area notify\">
                        <span class=\"d-center\">3</span>
                    </div>
                </div>
                <div class=\"main-area px-2 py-4 px-sm-4 notifications-content\">
                    <div class=\"head-area d-flex justify-content-between\">
                        <h5>Notifications</h5>
                        <span class=\"mdtxt\">Mark all as Read</span>
                    </div>
                    <ul>
                        <li>
                            <a href=\"javascript:void(0)\" class=\"d-flex\">
                                <div class=\"img-area\">
                                    <img src=\"/assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
                                </div>
                                <div class=\"text-area\">
                                    <p><b>Nick Grissom</b> posted a comment on your <span>status update</span></p>
                                    <p class=\"mdtxt time-area mt-2\">2 minutes ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\" class=\"d-flex\">
                                <div class=\"img-area\">
                                    <img src=\"/assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
                                </div>
                                <div class=\"text-area\">
                                    <p><b>Nick Grissom</b> posted a comment on your <span>status update</span></p>
                                    <p class=\"mdtxt time-area mt-2\">2 minutes ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\" class=\"d-flex\">
                                <div class=\"img-area\">
                                    <img src=\"/assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
                                </div>
                                <div class=\"text-area\">
                                    <p><b>Nick Grissom</b> posted a comment on your <span>status update</span></p>
                                    <p class=\"mdtxt time-area mt-2\">2 minutes ago</p>
                                </div>
                            </a>
                        </li>
                        <li class=\"d-center\">
                            <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">View all Notifications</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"single-item user-area\">
                <div class=\"profile-area d-flex align-items-center\">
                    <span class=\"user-profile cmn-head d-flex gap-2 align-items-center\">
                        <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"User\">
                        <i class=\"icon-d-arrow-thin\"></i>
                    </span>
                </div>
                <div class=\"main-area user-content\">
                    <div class=\"head-area py-4 text-center\">
                        <h5>Hello,</h5>
                        <p class=\"email-id\">x***9@bunlets.com</p>
                    </div>
                    <div class=\"cash-top\">
                        <div class=\"cash-point d-flex gap-3 align-items-center\">
                            <div class=\"img-area d-center\">
                                <img src=\"/assets/images/icon/cash-icon.png\" alt=\"icon\">
                            </div>
                            <div class=\"info-area\">
                                <h5>\$150.00</h5>
                                <span>Balance</span>
                            </div>
                        </div>
                        <div class=\"cash-point\">
                            <div class=\"d-flex justify-content-between\">
                                <div class=\"d-flex gap-3\">
                                    <div class=\"img-area d-center\">
                                        <img src=\"/assets/images/icon/cash-icon.png\" alt=\"icon\">
                                    </div>
                                    <div class=\"info-area\">
                                        <h5>50</h5>
                                        <span>Points</span>
                                    </div>
                                </div>
                                <div class=\"btn-area\">
                                    <a href=\"javascript:void(0)\">Exchange</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"acc-btn-area py-4 px-4\">
                        <a href=\"javascript:void(0)\" class=\"account-area d-center justify-content-between\">
                            <div class=\"d-flex gap-2\">
                                <span class=\"icon-item d-center\">
                                    <img src=\"/assets/images/icon/user-6.png\" alt=\"icon\">
                                </span>
                                <span>My Account</span>
                            </div>
                            <div class=\"icon-arrow d-center\">
                                <i class=\"icon-c-arrow-single\"></i>
                            </div>
                        </a>
                        <div class=\"btn-area mt-5 d-flex gap-4\">
                            <a href=\"javascript:void(0)\" class=\"cmn-btn\">Deposit</a>
                            <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">Withdraw</a>
                        </div>
                    </div>
                    <div class=\"bottom-area\">
                        <a href=\"javascript:void(0)\" class=\"d-flex justify-content-center py-3 gap-2\">
                            <div class=\"icon-log\">
                                <img src=\"/assets/images/icon/logout-icon.png\" alt=\"icon\">
                            </div>
                            Signout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Menu area end -->

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
    <script src=\"/assets/js/plugin/apexcharts.js\"></script>
    <script src=\"/assets/js/plugin/waypoint.min.js\"></script>
    <script src=\"/assets/js/plugin/jquery.magnific-popup.min.js\"></script>
    <script src=\"/assets/js/plugin/wow.min.js\"></script>
    <script src=\"/assets/js/plugin/plugin.js\"></script>
    <script src=\"/assets/js/main.js\"></script>
</body>

</html>", "perfil/perfilmain.html.twig", "/home/alumno/Symf/symfony-casino/templates/perfil/perfilmain.html.twig");
    }
}
