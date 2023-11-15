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

/* perfil/perfilview.html.twig */
class __TwigTemplate_2021653511276437c40073274b3a5e49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perfil/perfilview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perfil/perfilview.html.twig"));

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
                                <a href=\"sign-in.html\">Sign In</a>
                                <a href=\"sign-up.html\" class=\"cmn-btn\">Sign up</a>
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

    <!-- Gaming top info start -->
    <section class=\"gaming-top-info group-details public-profile position-relative\">
        <div class=\"overlay pt-120 pb-120\">
            <div class=\"img-area cover-img\">
                <img src=\"/assets/images/casinoroyalbanner.png\" class=\"w-100\" alt=\"image\">
            </div>
            <div class=\"head-content position-relative\">
                <div class=\"container\">
                    <div class=\"row position-relative justify-content-between\">
                        <div class=\"col-xl-4 col-lg-6 col-md-6 order-1 order-xl-0 py-0 py-lg-5 pb-0\">
                            <div class=\"info-area mt-0 mt-lg-4 d-flex gap-5 flex-wrap justify-content-center justify-content-xl-start align-items-center\">
                                <div class=\"single-area\">
                                    <div class=\"text-center\">
                                        <h4>82</h4>
                                        <p>Friends</p>
                                    </div>
                                </div>
                                <div class=\"single-area\">
                                    <div class=\"text-center\">
                                        <h4>198</h4>
                                        <p>Winning</p>
                                    </div>
                                </div>
                                <div class=\"single-area\">
                                    <div class=\"text-center\">
                                        <h4>241</h4>
                                        <p>Tournaments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 mb-5 mb-lg-0 pos-abs text-center\">
                            <div class=\"logo-area top-0 m-0 position-relative d-flex align-items-center justify-content-center\">
                                <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                <img src=\"/assets/images/top-gamers-1.png\" class=\"position-absolute\" alt=\"icon\">
                            </div>
                            <div class=\"text-area mt-3\">
                                <h4>Dana Grant</h4>
                                <span class=\"active-status\">I will destroy all enemies.</span>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-3 col-md-6 order-1 order-xl-0 text-center mt-4 mt-md-0 justify-content-center justify-content-xl-end d-flex\">
                            <div class=\"btn-area position-absolute d-flex gap-2 gap-sm-4\">
                                <a href=\"javascript:void(0)\" class=\"cmn-btn d-inline-flex gap-2\">
                                    Add Friend
                                    <i class=\"fas fa-plus\"></i>
                                </a>
                                <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">
                                    Send Message
                                </a>
                            </div>
                            <div class=\"social mt-0 mt-lg-5\">
                                <ul class=\"d-flex mt-0 mt-lg-5\">
                                    <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"nav-head mt-5 d-center gap-3 flex-wrap justify-content-between\">
                        <ul class=\"nav border-0 p-0\" role=\"tablist\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link active\" id=\"posts-item-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#posts-item\" type=\"button\" role=\"tab\"
                                    aria-controls=\"posts-item\" aria-selected=\"true\">
                                    posts-item</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"game-stats-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#game-stats\" type=\"button\" role=\"tab\"
                                    aria-controls=\"game-stats\" aria-selected=\"false\">game-stats</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"about-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#about\" type=\"button\" role=\"tab\"
                                    aria-controls=\"about\" aria-selected=\"false\">about</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"friends-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#friends\" type=\"button\" role=\"tab\"
                                    aria-controls=\"friends\" aria-selected=\"false\">friends</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"groups-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#groups\" type=\"button\" role=\"tab\"
                                    aria-controls=\"groups\" aria-selected=\"false\">groups</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"forums-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#forums\" type=\"button\" role=\"tab\"
                                    aria-controls=\"forums\" aria-selected=\"false\">forums</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"points-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#points\" type=\"button\" role=\"tab\"
                                    aria-controls=\"points\" aria-selected=\"false\">points</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"achievements-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#achievements\" type=\"button\" role=\"tab\"
                                    aria-controls=\"achievements\" aria-selected=\"false\">achievements</button>
                            </li>
                        </ul>
                        <div class=\"right-area mb-3 d-flex align-items-center gap-3\">
                            <div class=\"single-area d-center position-relative dropdown-area\">
                                <button type=\"button\" id=\"searchBtn!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <img src=\"/assets/images/icon/search-icon.png\" alt=\"Icon\">
                                </button>
                                <ul class=\"dropdown-menu search-area\" aria-labelledby=\"searchBtn!\">
                                    <li>
                                        <form action=\"#\" class=\"search-form\">
                                            <span class=\"single-input\">
                                                <input type=\"text\" placeholder=\"Enter Keywords.......\" autocomplete=\"off\">
                                            </span>
                                            <button class=\"cmn-btn\">Search</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"single-area d-center position-relative dropdown-area\">
                                <button type=\"button\" id=\"inviteBtn!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                </button>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn!\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                            <span class=\"verify\">
                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                            </span>
                                            Your Content
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                            <span class=\"verify\">
                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                            </span>
                                            Share
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                            <span class=\"verify\">
                                                <img src=\"/assets/images/icon/badges-icon.png\" alt=\"icon\">
                                            </span>
                                            Manage badges
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                            <span class=\"verify\">
                                                <img src=\"/assets/images/icon/report-icon.png\" alt=\"icon\">
                                            </span>
                                            Report Group
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container profile-area\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane fade show active\" id=\"posts-item\" role=\"tabpanel\"
                        aria-labelledby=\"posts-item-tab\">
                        <div class=\"row\">
                            <div class=\"col-lg-8 cus-mar\">
                                <div class=\"single-items\">
                                    <div class=\"top-area pb-5\">
                                        <div class=\"profile-area mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/logo-avatar-1.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Lori Cortez</h6>
                                                    <span class=\"mdtxt\">2 weeks ago</span>
                                                </div>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn1!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn1!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                        <div class=\"post-img mt-3\">
                                            <img src=\"/assets/images/post-img-1.png\" class=\"w-100\" alt=\"image\">
                                        </div>
                                    </div>
                                    <div class=\"react-and-share py-4 d-center justify-content-between\">
                                        <div class=\"friends-list d-flex gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/icon/like-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/care-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/love-icon.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>84</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>109 Participants</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <button>28 Comments</button>
                                            <button>3 Shares</button>
                                        </div>
                                    </div>
                                    <div class=\"footer-item d-center flex-wrap gap-3 gap-md-0 justify-content-between\">
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/react-icon.png\" alt=\"icon\">
                                            React!
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/comment-icon.png\" alt=\"icon\">
                                            Comment
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/share2-icon.png\" alt=\"icon\">
                                            Share
                                        </button>
                                    </div>
                                </div>
                                <div class=\"single-items\">
                                    <div class=\"top-area pb-5\">
                                        <div class=\"profile-area mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item d-flex flex-wrap gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-3.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6 class=\"d-flex flex-wrap align-items-center gap-3\">Toni Kim
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                        <span>joined the group</span>
                                                        <span class=\"highlighter\">LoLAllStars</span>
                                                    </h6>
                                                    <span class=\"mdtxt\">2 weeks ago</span>
                                                </div>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn2!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn2!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"post-img pb-120 position-relative mt-3\">
                                            <img src=\"/assets/images/post-img-2.png\" class=\"w-100\" alt=\"image\">
                                            <div class=\"avater-item position-absolute d-flex gap-3 lign-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/logo-outline-2.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/top-gamers-3.png\" class=\"position-absolute\" alt=\"icon\">
                                                </div>
                                                <div class=\"info-area mt-0 mt-sm-4\">
                                                    <h6 class=\"d-flex align-items-center gap-3\">Toni Kim</h6>
                                                    <span class=\"mdtxt\">@tonikim</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"react-and-share py-4 d-center justify-content-between\">
                                        <div class=\"friends-list d-flex gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/icon/like-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/care-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/love-icon.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>84</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>109 Participants</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <button>28 Comments</button>
                                            <button>3 Shares</button>
                                        </div>
                                    </div>
                                    <div class=\"footer-item second d-center flex-wrap gap-3 gap-md-0 justify-content-between\">
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/react-icon.png\" alt=\"icon\">
                                            React!
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/comment-icon.png\" alt=\"icon\">
                                            Comment
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/share2-icon.png\" alt=\"icon\">
                                            Share
                                        </button>
                                    </div>
                                </div>
                                <div class=\"single-items\">
                                    <div class=\"top-area pb-5\">
                                        <div class=\"profile-area mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-9.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Kelvin Parker</h6>
                                                    <span class=\"mdtxt\">2 weeks ago</span>
                                                </div>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn3!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn3!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                        <div class=\"post-img mt-3\">
                                            <div class=\"video-section m-0 post\">
                                                <div class=\"magnific-area position-relative d-flex align-items-center justify-content-around\">
                                                    <div class=\"bg-area w-100\">
                                                        <img class=\"bg-item w-100\" src=\"/assets/images/post-img-3.png\" alt=\"image\">
                                                    </div>
                                                    <div class=\"content-area text-center position-absolute d-flex align-items-center justify-content-center\">
                                                        <div class=\"content-box\">
                                                            <a class=\"mfp-iframe popupvideo d-flex align-items-center justify-content-center\" href=\"https://www.youtube.com/watch?v=Djz8Nc0Qxwk\">
                                                                <img src=\"/assets/images/icon/play2-icon.png\" alt=\"icon\">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"react-and-share py-4 d-center justify-content-between\">
                                        <div class=\"friends-list d-flex gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/icon/like-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/care-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/love-icon.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>84</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>109 Participants</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <button>28 Comments</button>
                                            <button>3 Shares</button>
                                        </div>
                                    </div>
                                    <div class=\"footer-item second d-center flex-wrap gap-3 gap-md-0 justify-content-between\">
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/react-icon.png\" alt=\"icon\">
                                            React!
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/comment-icon.png\" alt=\"icon\">
                                            Comment
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/share2-icon.png\" alt=\"icon\">
                                            Share
                                        </button>
                                    </div>
                                </div>
                                <div class=\"single-items\">
                                    <div class=\"top-area pb-5\">
                                        <div class=\"profile-area mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-8.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Kyle Reed</h6>
                                                    <span class=\"mdtxt\">2 weeks ago</span>
                                                </div>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn4!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn4!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    </div>
                                    <div class=\"react-and-share py-4 d-center justify-content-between\">
                                        <div class=\"friends-list d-flex gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/icon/like-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/care-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/love-icon.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>84</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>109 Participants</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <button>28 Comments</button>
                                            <button>3 Shares</button>
                                        </div>
                                    </div>
                                    <div class=\"footer-item second d-center flex-wrap gap-3 gap-md-0 justify-content-between\">
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/react-icon.png\" alt=\"icon\">
                                            React!
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/comment-icon.png\" alt=\"icon\">
                                            Comment
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/share2-icon.png\" alt=\"icon\">
                                            Share
                                        </button>
                                    </div>
                                </div>
                                <div class=\"single-items\">
                                    <div class=\"top-area pb-5\">
                                        <div class=\"profile-area mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-7.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Lori Kayla</h6>
                                                    <span class=\"mdtxt\">2 weeks ago</span>
                                                </div>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn5!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn5!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                        <div class=\"post-img second gap-2 mt-3\">
                                            <div class=\"d-flex flex-wrap gap-2 popupgallery\">
                                                <a href=\"/assets/images/post-img-4.png\">
                                                    <img src=\"/assets/images/post-img-4.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-5.png\">
                                                    <img src=\"/assets/images/post-img-5.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-6.png\">
                                                    <img src=\"/assets/images/post-img-6.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-7.png\">
                                                    <img src=\"/assets/images/post-img-7.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-8.png\">
                                                    <img src=\"/assets/images/post-img-8.png\" alt=\"image\">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"react-and-share py-4 d-center justify-content-between\">
                                        <div class=\"friends-list d-flex gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/icon/like-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/care-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/love-icon.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>84</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>109 Participants</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <button>28 Comments</button>
                                            <button>3 Shares</button>
                                        </div>
                                    </div>
                                    <div class=\"footer-item second d-center flex-wrap gap-3 gap-md-0 justify-content-between\">
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/react-icon.png\" alt=\"icon\">
                                            React!
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/comment-icon.png\" alt=\"icon\">
                                            Comment
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/share2-icon.png\" alt=\"icon\">
                                            Share
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 mt-5 mt-lg-0\">
                                <div class=\"sidebar position-sticky\">
                                    <div class=\"single-info single-items\">
                                        <div class=\"profile-area mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item m-0 d-flex gap-3 align-items-center\">
                                                <h5 class=\"p-0 border-0\">Photos <span>74</span></h5>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn6!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn6!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"popupgallery flex-wrap\">
                                                <a href=\"/assets/images/post-img-21.png\">
                                                    <img src=\"/assets/images/post-img-21.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-22.png\">
                                                    <img src=\"/assets/images/post-img-22.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-23.png\">
                                                    <img src=\"/assets/images/post-img-23.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-24.png\">
                                                    <img src=\"/assets/images/post-img-24.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-25.png\">
                                                    <img src=\"/assets/images/post-img-25.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-26.png\">
                                                    <img src=\"/assets/images/post-img-26.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-27.png\">
                                                    <img src=\"/assets/images/post-img-27.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-28.png\">
                                                    <img src=\"/assets/images/post-img-28.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-29.png\">
                                                    <img src=\"/assets/images/post-img-29.png\" alt=\"image\">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"single-info single-items\">
                                        <div class=\"profile-area mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item m-0 d-flex gap-3 align-items-center\">
                                                <h5 class=\"p-0 border-0\">Friends <span>589</span></h5>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn8!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn8!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"avater-item d-flex gap-3 align-items-center\">
                                            <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                <img src=\"/assets/images/leaderboard-img-6.png\" class=\"position-absolute\" alt=\"icon\">
                                                <div class=\"abs-area d-center position-absolute\">
                                                    <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                </div>
                                            </div>
                                            <div class=\"info-area\">
                                                <h6>Toni Kim</h6>
                                                <span class=\"mdtxt\">24.5K profile views</span>
                                            </div>
                                        </div>
                                        <div class=\"avater-item d-flex gap-3 align-items-center\">
                                            <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                <img src=\"/assets/images/leaderboard-img-5.png\" class=\"position-absolute\" alt=\"icon\">
                                                <div class=\"abs-area d-center position-absolute\">
                                                    <h6 class=\"m-0 d-center mdtxt\">14</h6>
                                                </div>
                                            </div>
                                            <div class=\"info-area\">
                                                <h6>Kayla Taylor</h6>
                                                <span class=\"mdtxt\">24.5K profile views</span>
                                            </div>
                                        </div>
                                        <div class=\"avater-item d-flex gap-3 align-items-center\">
                                            <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                <img src=\"/assets/images/leaderboard-img-4.png\" class=\"position-absolute\" alt=\"icon\">
                                                <div class=\"abs-area d-center position-absolute\">
                                                    <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                </div>
                                            </div>
                                            <div class=\"info-area\">
                                                <h6>Lucy Alvarez</h6>
                                                <span class=\"mdtxt\">24.5K profile views</span>
                                            </div>
                                        </div>
                                        <div class=\"avater-item d-flex gap-3 align-items-center\">
                                            <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                <img src=\"/assets/images/leaderboard-img-3.png\" class=\"position-absolute\" alt=\"icon\">
                                                <div class=\"abs-area d-center position-absolute\">
                                                    <h6 class=\"m-0 d-center mdtxt\">14</h6>
                                                </div>
                                            </div>
                                            <div class=\"info-area\">
                                                <h6>Lori Cortez</h6>
                                                <span class=\"mdtxt\">24.5K profile views</span>
                                            </div>
                                        </div>
                                        <div class=\"btn-area mt-4 text-center\">
                                            <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">See all Friends</a>
                                        </div>
                                    </div>
                                    <div class=\"single-info single-items\">
                                        <div class=\"profile-area border-area pb-3 mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item d-flex m-0 gap-3 align-items-center\">
                                                <h5 class=\"p-0 border-0\">Videos <span>3</span></h5>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn7!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn7!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"cus-mar\">
                                            <div class=\"single-box\">
                                                <div class=\"video-section m-0 post\">
                                                    <div class=\"magnific-area position-relative d-flex align-items-center justify-content-around\">
                                                        <div class=\"bg-area w-100\">
                                                            <img class=\"bg-item w-100\" src=\"/assets/images/post-img-9.png\" alt=\"image\">
                                                        </div>
                                                        <div class=\"content-area text-center position-absolute d-flex align-items-center justify-content-center\">
                                                            <div class=\"content-box\">
                                                                <a class=\"mfp-iframe popupvideo d-flex align-items-center justify-content-center\" href=\"https://www.youtube.com/watch?v=Djz8Nc0Qxwk\">
                                                                    <img src=\"/assets/images/icon/play2-icon.png\" alt=\"icon\">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"single-box\">
                                                <div class=\"video-section m-0 post\">
                                                    <div class=\"magnific-area position-relative d-flex align-items-center justify-content-around\">
                                                        <div class=\"bg-area w-100\">
                                                            <img class=\"bg-item w-100\" src=\"/assets/images/post-img-13.png\" alt=\"image\">
                                                        </div>
                                                        <div class=\"content-area text-center position-absolute d-flex align-items-center justify-content-center\">
                                                            <div class=\"content-box\">
                                                                <a class=\"mfp-iframe popupvideo d-flex align-items-center justify-content-center\" href=\"https://www.youtube.com/watch?v=Djz8Nc0Qxwk\">
                                                                    <img src=\"/assets/images/icon/play2-icon.png\" alt=\"icon\">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"single-box\">
                                                <div class=\"video-section m-0 post\">
                                                    <div class=\"magnific-area position-relative d-flex align-items-center justify-content-around\">
                                                        <div class=\"bg-area w-100\">
                                                            <img class=\"bg-item w-100\" src=\"/assets/images/post-img-18.png\" alt=\"image\">
                                                        </div>
                                                        <div class=\"content-area text-center position-absolute d-flex align-items-center justify-content-center\">
                                                            <div class=\"content-box\">
                                                                <a class=\"mfp-iframe popupvideo d-flex align-items-center justify-content-center\" href=\"https://www.youtube.com/watch?v=Djz8Nc0Qxwk\">
                                                                    <img src=\"/assets/images/icon/play2-icon.png\" alt=\"icon\">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"game-stats\" role=\"tabpanel\"
                        aria-labelledby=\"game-stats-tab\">
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"single-info\">
                                    <h4 class=\"mb-3\">Game stats</h4>
                                    <div class=\"row cus-mar\">
                                        <div class=\"col-xxl-3 col-xl-4 col-sm-6\">
                                            <div class=\"stats-single\">
                                                <h5>Warezone</h5>
                                                <ul>
                                                    <li>
                                                        <span>Matches</span>
                                                        <span>264</span>
                                                    </li>
                                                    <li>
                                                        <span>Winnings</span>
                                                        <span>150</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-xxl-3 col-xl-4 col-sm-6\">
                                            <div class=\"stats-single\">
                                                <h5>Apex leg.</h5>
                                                <ul>
                                                    <li>
                                                        <span>Matches</span>
                                                        <span>264</span>
                                                    </li>
                                                    <li>
                                                        <span>Winnings</span>
                                                        <span>150</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-xxl-3 col-xl-4 col-sm-6\">
                                            <div class=\"stats-single\">
                                                <h5>Dota 2</h5>
                                                <ul>
                                                    <li>
                                                        <span>Matches</span>
                                                        <span>264</span>
                                                    </li>
                                                    <li>
                                                        <span>Winnings</span>
                                                        <span>150</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-xxl-3 col-xl-4 col-sm-6\">
                                            <div class=\"stats-single\">
                                                <h5>Fortnite</h5>
                                                <ul>
                                                    <li>
                                                        <span>Matches</span>
                                                        <span>264</span>
                                                    </li>
                                                    <li>
                                                        <span>Winnings</span>
                                                        <span>150</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-7\">
                                <div class=\"sidebar\">
                                    <div class=\"single-info\">
                                        <h4 class=\"mb-3\">Level <span>24</span></h4>
                                        <div class=\"progress mb-3 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            <div class=\"progress-bar\" style=\"width: 24%\"></div>
                                            <h6 class=\" mdtxt text-center position-absolute\">24%</h6>
                                        </div>
                                        <a href=\"javascript:void(0)\">View All Level</a>
                                    </div>
                                    <div class=\"single-info\">
                                        <h4 class=\"mb-3\">Games PLaying</h4>
                                        <div class=\"single d-flex align-items-center gap-3\">
                                            <img src=\"/assets/images/browse-game-img-1.png\" alt=\"image\">
                                            <div class=\"right-area w-100\">
                                                <h5>Warezone</h5>
                                                <ul>
                                                    <li>
                                                        <span>Win Ration</span>
                                                        <span>63%</span>
                                                    </li>
                                                </ul>
                                                <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <div class=\"progress-bar w-50\"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"single mt-4 d-flex align-items-center gap-3\">
                                            <img src=\"/assets/images/browse-game-img-2.png\" alt=\"image\">
                                            <div class=\"right-area w-100\">
                                                <h5>Warezone</h5>
                                                <ul>
                                                    <li>
                                                        <span>Win Ration</span>
                                                        <span>63%</span>
                                                    </li>
                                                </ul>
                                                <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <div class=\"progress-bar\" style=\"width: 63%\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"about\" role=\"tabpanel\"
                    aria-labelledby=\"about-tab\">
                        <div class=\"row information-area\">
                            <div class=\"col-lg-8\">
                                <div class=\"single-info\">
                                    <h4 class=\"mb-3\">About Me</h4>
                                    <p>Hi! My name is Dana Grant.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget nisl venenatis, molestie erat eget, bibendum enim. Morbi a dolor imperdiet, ullamcorper lectus quis, accumsan urna.</p>
                                    <ul class=\"info-ul\">
                                        <li>
                                            <span>Joined</span>
                                            <span>March 26th, 2023</span>
                                        </li>
                                        <li>
                                            <span>City</span>
                                            <span>Los Angeles, California</span>
                                        </li>
                                        <li>
                                            <span>Country</span>
                                            <span>United States</span>
                                        </li>
                                        <li>
                                            <span>Age</span>
                                            <span>32 Years</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"single-info\">
                                    <h4 class=\"mb-3\">Personal Info</h4>
                                    <ul class=\"info-ul\">
                                        <li>
                                            <span>Email</span>
                                            <span>address@yourmail.com</span>
                                        </li>
                                        <li>
                                            <span>City</span>
                                            <span>Long Island, New York United States</span>
                                        </li>
                                        <li>
                                            <span>Country</span>
                                            <span>United States</span>
                                        </li>
                                        <li>
                                            <span>Game ID</span>
                                            <span>gamio65995544855</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"sidebar\">
                                    <div class=\"single-info text-center\">
                                        <div class=\"progress-circle\">
                                            <span class=\"progress-left\">
                                                <span class=\"progress-bar\"></span>
                                            </span>
                                            <span class=\"progress-right\">
                                                <span class=\"progress-bar\"></span>
                                            </span>
                                            <h2 class=\"progress-value\">50</h2>
                                        </div>
                                        <h4 class=\"mt-3 mt-lg-5 mb-3\">Profile Completion</h4>
                                        <p>Complete your profile by filling profile info fields, completing quests & unlocking badges</p>
                                    </div>
                                    <div class=\"single-info single-items\">
                                        <div class=\"profile-area border-area pb-3 mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item d-flex m-0 gap-3 align-items-center\">
                                                <h5 class=\"p-0 border-0\">More Stats</h5>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn10!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn10!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"cus-mar\">
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/emoji-4.png\" alt=\"icon\">
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>5 Days Ago</h6>
                                                    <span class=\"mdtxt\">Last friend added</span>
                                                </div>
                                            </div>
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/stats-icon.png\" alt=\"icon\">
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>1 Days Ago</h6>
                                                    <span class=\"mdtxt\">Last post update</span>
                                                </div>
                                            </div>
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/comments-icon.png\" alt=\"icon\">
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>56 comments</h6>
                                                    <span class=\"mdtxt\">Most commented post</span>
                                                </div>
                                            </div>
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/like2-icon.png\" alt=\"icon\">
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>904 likes</h6>
                                                    <span class=\"mdtxt\">Most liked post</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"friends\" role=\"tabpanel\"
                        aria-labelledby=\"friends-tab\">
                        <div class=\"member-topbar mb-4\">
                            <div class=\"row align-items-center justify-content-between\">
                                <div class=\"col-lg-12\">
                                    <form action=\"#\">
                                        <div class=\"input-area d-flex\">
                                            <input type=\"text\" placeholder=\"Search members\" autocomplete=\"off\">
                                            <button class=\"cmn-btn\">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"row cus-mar\">
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-1.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Elbert Brady</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-2.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Stanley Gill</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-3.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Rose Lindsey</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-4.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Alice Fowler</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-5.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Tracy Young</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-6.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Leo Diaz</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-7.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Mckenzie</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-8.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Thelma Hall</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-9.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Gonzalez</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-10.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Miranda</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-11.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Corey Little</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-12.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Elbert Brady</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav aria-label=\"Page navigation\" class=\"d-flex justify-content-center pagination-area mt-40\">
                            <a class=\"page-btn previous cmn-btn alt\" href=\"javascript:void(0)\" aria-label=\"Previous\">
                                <i class=\"icon-d-arrow-thin\"></i>
                            </a>
                            <ul class=\"pagination justify-content-center align-items-center\">
                                <li class=\"page-item\"><a class=\"page-link cmn-btn alt\" href=\"javascript:void(0)\">1</a></li>
                                <li class=\"page-item\"><a class=\"page-link cmn-btn alt active\" href=\"javascript:void(0)\">2</a></li>
                                <li class=\"page-item\"><a class=\"page-link cmn-btn alt\" href=\"javascript:void(0)\">3</a></li>
                            </ul>
                            <a class=\"page-btn next cmn-btn alt\" href=\"javascript:void(0)\" aria-label=\"Next\">
                                <i class=\"icon-d-arrow-thin\"></i>
                            </a>
                        </nav>
                    </div>
                    <div class=\"tab-pane fade\" id=\"groups\" role=\"tabpanel\"
                        aria-labelledby=\"groups-tab\">
                        <div class=\"member-topbar mb-4\">
                            <div class=\"row align-items-center justify-content-between\">
                                <div class=\"col-lg-12\">
                                    <form action=\"#\">
                                        <div class=\"input-area d-flex\">
                                            <input type=\"text\" placeholder=\"Search group\" autocomplete=\"off\">
                                            <button class=\"cmn-btn\">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"top-groups group-finder group-tab\">
                            <div class=\"row cus-mar\">
                                <div class=\"col-xl-3 col-lg-4 col-6\">
                                    <div class=\"single-slider\">
                                        <div class=\"top-items\">
                                            <div class=\"top-area p-0 d-flex align-items-center justify-content-between\">
                                                <span>Top</span>
                                                <div class=\"logo-area mb-3 position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/logo-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/icon/top-groups-logo-1.png\" class=\"position-absolute\" alt=\"icon\">
                                                </div>
                                                <div class=\"dropdown-area\">
                                                    <button type=\"button\" id=\"followBtn1!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        .....
                                                    </button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"followBtn1!\">
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Share
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/join-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Join
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"info-area text-center\">
                                                <h5>LoL Allstars
                                                    <span class=\"verify\">
                                                        <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                    </span>
                                                </h5>
                                                <span class=\"mdtxt\">13k Members</span>
                                            </div>
                                        </div>
                                        <div class=\"friends-list text-center\">
                                            <p class=\"mdtxt\">You have friends</p>
                                            <ul class=\"d-flex mt-2 align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-4 col-6\">
                                    <div class=\"single-slider\">
                                        <div class=\"top-items\">
                                            <div class=\"top-area p-0 d-flex align-items-center justify-content-between\">
                                                <span>Top</span>
                                                <div class=\"logo-area mb-3 position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/logo-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/icon/top-groups-logo-3.png\" class=\"position-absolute\" alt=\"icon\">
                                                </div>
                                                <div class=\"dropdown-area\">
                                                    <button type=\"button\" id=\"followBtn3!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        .....
                                                    </button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"followBtn3!\">
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Share
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/join-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Join
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"info-area text-center\">
                                                <h5>Storm
                                                    <span class=\"verify\">
                                                        <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                    </span>
                                                </h5>
                                                <span class=\"mdtxt\">13k Members</span>
                                            </div>
                                        </div>
                                        <div class=\"friends-list text-center\">
                                            <p class=\"mdtxt\">You have friends</p>
                                            <ul class=\"d-flex mt-2 align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-4 col-6\">
                                    <div class=\"single-slider\">
                                        <div class=\"top-items\">
                                            <div class=\"top-area p-0 d-flex align-items-center justify-content-between\">
                                                <span>Top</span>
                                                <div class=\"logo-area mb-3 position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/logo-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/icon/top-groups-logo-4.png\" class=\"position-absolute\" alt=\"icon\">
                                                </div>
                                                <div class=\"dropdown-area\">
                                                    <button type=\"button\" id=\"followBtn4!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        .....
                                                    </button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"followBtn4!\">
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Share
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/join-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Join
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"info-area text-center\">
                                                <h5>Dragons
                                                    <span class=\"verify\">
                                                        <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                    </span>
                                                </h5>
                                                <span class=\"mdtxt\">13k Members</span>
                                            </div>
                                        </div>
                                        <div class=\"friends-list text-center\">
                                            <p class=\"mdtxt\">You have friends</p>
                                            <ul class=\"d-flex mt-2 align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-4 col-6\">
                                    <div class=\"single-slider\">
                                        <div class=\"top-items\">
                                            <div class=\"top-area p-0 d-flex align-items-center justify-content-between\">
                                                <span>Top</span>
                                                <div class=\"logo-area mb-3 position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/logo-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/icon/top-groups-logo-5.png\" class=\"position-absolute\" alt=\"icon\">
                                                </div>
                                                <div class=\"dropdown-area\">
                                                    <button type=\"button\" id=\"followBtn5!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        .....
                                                    </button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"followBtn5!\">
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Share
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/join-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Join
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"info-area text-center\">
                                                <h5>Xcoto
                                                    <span class=\"verify\">
                                                        <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                    </span>
                                                </h5>
                                                <span class=\"mdtxt\">13k Members</span>
                                            </div>
                                        </div>
                                        <div class=\"friends-list text-center\">
                                            <p class=\"mdtxt\">You have friends</p>
                                            <ul class=\"d-flex mt-2 align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-4 col-6\">
                                    <div class=\"single-slider\">
                                        <div class=\"top-items\">
                                            <div class=\"top-area p-0 d-flex align-items-center justify-content-between\">
                                                <span>Top</span>
                                                <div class=\"logo-area mb-3 position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/logo-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/icon/top-groups-logo-6.png\" class=\"position-absolute\" alt=\"icon\">
                                                </div>
                                                <div class=\"dropdown-area\">
                                                    <button type=\"button\" id=\"followBtn6!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        .....
                                                    </button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"followBtn6!\">
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Share
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/join-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Join
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"info-area text-center\">
                                                <h5>Biliot
                                                    <span class=\"verify\">
                                                        <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                    </span>
                                                </h5>
                                                <span class=\"mdtxt\">13k Members</span>
                                            </div>
                                        </div>
                                        <div class=\"friends-list text-center\">
                                            <p class=\"mdtxt\">You have friends</p>
                                            <ul class=\"d-flex mt-2 align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-4 col-6\">
                                    <div class=\"single-slider\">
                                        <div class=\"top-items\">
                                            <div class=\"top-area p-0 d-flex align-items-center justify-content-between\">
                                                <span>Top</span>
                                                <div class=\"logo-area mb-3 position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/logo-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/icon/top-groups-logo-7.png\" class=\"position-absolute\" alt=\"icon\">
                                                </div>
                                                <div class=\"dropdown-area\">
                                                    <button type=\"button\" id=\"followBtn7!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        .....
                                                    </button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"followBtn7!\">
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Share
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/join-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Join
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"info-area text-center\">
                                                <h5>Eagle
                                                    <span class=\"verify\">
                                                        <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                    </span>
                                                </h5>
                                                <span class=\"mdtxt\">13k Members</span>
                                            </div>
                                        </div>
                                        <div class=\"friends-list text-center\">
                                            <p class=\"mdtxt\">You have friends</p>
                                            <ul class=\"d-flex mt-2 align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"forums\" role=\"tabpanel\"
                        aria-labelledby=\"forums-tab\">
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"table-responsive p-0\">
                                    <table class=\"table m-0\">
                                        <thead>
                                            <tr>
                                                <th scope=\"col\">Forum</th>
                                                <th scope=\"col\">Voice</th>
                                                <th scope=\"col\">Post</th>
                                                <th scope=\"col\">freshness</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Game Tips &amp; Tricks</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-1.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Toni Kim</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Community Content</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-2.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Corey Little</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">LOL Allstars - Multiplayer</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-3.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Neil Fisher</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">LOL Allstars - Announcements</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-4.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Alton Hardy</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Modern Warfare</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-5.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Lynn Klein</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">General Discussion</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-6.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Rita Bass</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Discord and Forum Discord</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-7.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Leticia Cain</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Game Tips &amp; Tricks</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-8.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Ellen Garcia</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Game Tricks</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-9.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Stacy Hale</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">General Discussion</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-10.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Luis Tate</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Discord and Forum Discord</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-5.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Kerry Lee</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Game Tips</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-6.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Tracy Toni</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Game Tips &amp; Tricks</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-2.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Tracy Meyer</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 col-sm-8 mt-5 mt-lg-0\">
                                <div class=\"sidebar position-sticky\">
                                    <div class=\"single-item single-items\">
                                        <div class=\"profile-area border-area pb-3 mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <h5 class=\"p-0 border-0\">Top Contributors</h5>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn9!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn9!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"single-list d-center justify-content-between\">
                                            <h5>1</h5>
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-6.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Toni Kim</h6>
                                                    <span class=\"mdtxt\">24.5K profile views</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"single-list d-center justify-content-between\">
                                            <h5>2</h5>
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-5.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">14</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Kayla Taylor</h6>
                                                    <span class=\"mdtxt\">24.5K profile views</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"single-list d-center justify-content-between\">
                                            <h5>3</h5>
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-7.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Toni Kim</h6>
                                                    <span class=\"mdtxt\">24.5K profile views</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"single-list d-center justify-content-between\">
                                            <h5>4</h5>
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-8.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Lucy Alvarez</h6>
                                                    <span class=\"mdtxt\">24.5K profile views</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"single-list d-center justify-content-between\">
                                            <h5>5</h5>
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-9.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">14</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Lori Cortez</h6>
                                                    <span class=\"mdtxt\">24.5K profile views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"points\" role=\"tabpanel\"
                        aria-labelledby=\"points-tab\">
                        <div class=\"row cus-mar points-area\">
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info\">
                                    <div class=\"d-flex align-items-start gap-4\">
                                        <img src=\"/assets/images/icon/points-icon-1.png\" alt=\"image\">
                                        <div class=\"right-area w-100\">
                                            <h4>3780</h4>
                                            <div class=\"d-flex my-3 gap-3\">
                                                <p>Gold User</p>
                                                <div class=\"icon-area d-center gap-2\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <span>369</span>
                                                </div>
                                            </div>
                                            <span class=\"progress-head mdtxt\">
                                                3780 / 6000
                                            </span>
                                            <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar w-50\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info\">
                                    <div class=\"d-flex align-items-start gap-4\">
                                        <img src=\"/assets/images/icon/points-icon-2.png\" alt=\"image\">
                                        <div class=\"right-area w-100\">
                                            <h4>3780</h4>
                                            <div class=\"d-flex my-3 gap-3\">
                                                <p>Silver Cup</p>
                                                <div class=\"icon-area d-center gap-2\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <span>369</span>
                                                </div>
                                            </div>
                                            <span class=\"progress-head mdtxt\">
                                                3780 / 6000
                                            </span>
                                            <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar w-50\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info\">
                                    <div class=\"d-flex align-items-start gap-4\">
                                        <img src=\"/assets/images/icon/points-icon-3.png\" alt=\"image\">
                                        <div class=\"right-area w-100\">
                                            <h4>3780</h4>
                                            <div class=\"d-flex my-3 gap-3\">
                                                <p>Bronze Cup</p>
                                                <div class=\"icon-area d-center gap-2\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <span>369</span>
                                                </div>
                                            </div>
                                            <span class=\"progress-head mdtxt\">
                                                3780 / 6000
                                            </span>
                                            <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar w-50\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info\">
                                    <div class=\"d-flex align-items-start gap-4\">
                                        <img src=\"/assets/images/icon/points-icon-4.png\" alt=\"image\">
                                        <div class=\"right-area w-100\">
                                            <h4>3780</h4>
                                            <div class=\"d-flex my-3 gap-3\">
                                                <p>The Collector</p>
                                                <div class=\"icon-area d-center gap-2\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <span>369</span>
                                                </div>
                                            </div>
                                            <span class=\"progress-head mdtxt\">
                                                3780 / 6000
                                            </span>
                                            <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar w-50\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info\">
                                    <div class=\"d-flex align-items-start gap-4\">
                                        <img src=\"/assets/images/icon/points-icon-5.png\" alt=\"image\">
                                        <div class=\"right-area w-100\">
                                            <h4>3780</h4>
                                            <div class=\"d-flex my-3 gap-3\">
                                                <p>Secret Treasure</p>
                                                <div class=\"icon-area d-center gap-2\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <span>369</span>
                                                </div>
                                            </div>
                                            <span class=\"progress-head mdtxt\">
                                                3780 / 6000
                                            </span>
                                            <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar w-50\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info\">
                                    <div class=\"d-flex align-items-start gap-4\">
                                        <img src=\"/assets/images/icon/points-icon-6.png\" alt=\"image\">
                                        <div class=\"right-area w-100\">
                                            <h4>3780</h4>
                                            <div class=\"d-flex my-3 gap-3\">
                                                <p>Private chat</p>
                                                <div class=\"icon-area d-center gap-2\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <span>369</span>
                                                </div>
                                            </div>
                                            <span class=\"progress-head mdtxt\">
                                                3780 / 6000
                                            </span>
                                            <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar w-50\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info\">
                                    <div class=\"d-flex align-items-start gap-4\">
                                        <img src=\"/assets/images/icon/points-icon-7.png\" alt=\"image\">
                                        <div class=\"right-area w-100\">
                                            <h4>3780</h4>
                                            <div class=\"d-flex my-3 gap-3\">
                                                <p>Comrade-in-Arms</p>
                                                <div class=\"icon-area d-center gap-2\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <span>369</span>
                                                </div>
                                            </div>
                                            <span class=\"progress-head mdtxt\">
                                                3780 / 6000
                                            </span>
                                            <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar w-50\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info\">
                                    <div class=\"d-flex align-items-start gap-4\">
                                        <img src=\"/assets/images/icon/points-icon-8.png\" alt=\"image\">
                                        <div class=\"right-area w-100\">
                                            <h4>3780</h4>
                                            <div class=\"d-flex my-3 gap-3\">
                                                <p>Challenger</p>
                                                <div class=\"icon-area d-center gap-2\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <span>369</span>
                                                </div>
                                            </div>
                                            <span class=\"progress-head mdtxt\">
                                                3780 / 6000
                                            </span>
                                            <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar w-50\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"achievements\" role=\"tabpanel\"
                    aria-labelledby=\"achievements-tab\">
                    <h4 class=\"head-area mb-3\">Achievements</h4>
                        <div class=\"row cus-mar points-area\">
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info text-center\">
                                    <div class=\"img-area d-center m-auto mb-3\">
                                        <img src=\"/assets/images/icon/achievements-icon-1.png\" alt=\"image\">
                                    </div>
                                    <div class=\"text-area w-100\">
                                        <h5>Gameplays</h5>
                                        <div class=\"my-2\">
                                            <p>3 of 20</p>
                                        </div>
                                        <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            <div class=\"progress-bar w-25\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info text-center\">
                                    <div class=\"img-area d-center m-auto mb-3\">
                                        <img src=\"/assets/images/icon/achievements-icon-2.png\" alt=\"image\">
                                    </div>
                                    <div class=\"text-area w-100\">
                                        <h5>Tournaments Joined</h5>
                                        <div class=\"my-2\">
                                            <p>3 of 20</p>
                                        </div>
                                        <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            <div class=\"progress-bar w-25\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info text-center\">
                                    <div class=\"img-area d-center m-auto mb-3\">
                                        <img src=\"/assets/images/icon/achievements-icon-3.png\" alt=\"image\">
                                    </div>
                                    <div class=\"text-area w-100\">
                                        <h5>Tournaments Won</h5>
                                        <div class=\"my-2\">
                                            <p>3 of 20</p>
                                        </div>
                                        <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            <div class=\"progress-bar w-25\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info text-center\">
                                    <div class=\"img-area d-center m-auto mb-3\">
                                        <img src=\"/assets/images/icon/achievements-icon-4.png\" alt=\"image\">
                                    </div>
                                    <div class=\"text-area w-100\">
                                        <h5>Sets of Missions</h5>
                                        <div class=\"my-2\">
                                            <p>3 of 20</p>
                                        </div>
                                        <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            <div class=\"progress-bar w-25\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info text-center\">
                                    <div class=\"img-area d-center m-auto mb-3\">
                                        <img src=\"/assets/images/icon/achievements-icon-5.png\" alt=\"image\">
                                    </div>
                                    <div class=\"text-area w-100\">
                                        <h5>Friends Referred</h5>
                                        <div class=\"my-2\">
                                            <p>3 of 20</p>
                                        </div>
                                        <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            <div class=\"progress-bar w-25\"></div>
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
    <!-- Gaming top info end -->

    <!-- Match One Popup start -->
    <div class=\"match-one-popup\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"modal cmn-modal fade\" id=\"matchOneMod\">
                        <div class=\"modal-dialog modal-dialog-centered\">
                            <div class=\"modal-content p-0\">
                                <div class=\"modal-header justify-content-center\">
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                                <div class=\"top-content p-5 gap-3 text-center\">
                                    <h2>Match 1</h2>
                                    <span class=\"cmn-btn mt-3 mb-3\">Waiting</span>
                                    <p>Best of 1 game</p>
                                </div>
                                <div class=\"mid-area d-center gap-4\">
                                    <div class=\"player left-player d-flex gap-3 align-items-center\">
                                        <p>To be decided</p>
                                        <div class=\"icon-area d-center\">
                                            <img src=\"/assets/images/icon/participant-icon.png\" alt=\"image\">
                                        </div>
                                    </div>
                                    <p class=\"vs lgtxt\">
                                        <span>0</span>
                                        <span>:</span>
                                        <span>0</span>
                                    </p>
                                    <div class=\"player right-player d-flex gap-3 align-items-center\">
                                        <div class=\"icon-area d-center\">
                                            <img src=\"/assets/images/icon/participant-icon.png\" alt=\"image\">
                                        </div>
                                        <p>To be decided</p> 
                                    </div>
                                </div>
                                <div class=\"tab-area p-4\">
                                    <div class=\"gaming-top-info\">
                                        <ul class=\"nav p-0\" role=\"tablist\">
                                            <li class=\"nav-item\" role=\"presentation\">
                                                <button class=\"nav-link active\" id=\"free-games-tab\" data-bs-toggle=\"tab\"
                                                    data-bs-target=\"#free-games\" type=\"button\" role=\"tab\"
                                                    aria-controls=\"free-games\" aria-selected=\"true\">
                                                    games</button>
                                            </li>
                                            <li class=\"nav-item\" role=\"presentation\">
                                                <button class=\"nav-link\" id=\"lineups-tab\" data-bs-toggle=\"tab\"
                                                    data-bs-target=\"#lineups\" type=\"button\" role=\"tab\"
                                                    aria-controls=\"lineups\" aria-selected=\"false\">lineups</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"tab-content cus-mar mt-4\">
                                        <div class=\"tab-pane fade show active\" id=\"free-games\" role=\"tabpanel\"
                                            aria-labelledby=\"free-games-tab\">
                                            <div class=\"single-box d-center justify-content-between\">
                                                <div class=\"logo-item d-flex gap-3 align-items-center\">
                                                    <div class=\"logo-area\">
                                                        <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"icon\">
                                                    </div>
                                                    <div class=\"info-area\">
                                                        <h6>Leo Castillo</h6>
                                                        <span class=\"mdtxt\">Name</span>
                                                    </div>
                                                </div>
                                                <div class=\"btn-area\">
                                                    <a href=\"javascript:void(0)\" class=\"cmn-btn\">Contact</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane fade\" id=\"lineups\" role=\"tabpanel\"
                                            aria-labelledby=\"lineups-tab\">
                                            <div class=\"single-box d-center justify-content-between\">
                                                <div class=\"logo-item d-flex gap-3 align-items-center\">
                                                    <div class=\"logo-area\">
                                                        <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"icon\">
                                                    </div>
                                                    <div class=\"info-area\">
                                                        <h6>Leo Castillo</h6>
                                                        <span class=\"mdtxt\">Name</span>
                                                    </div>
                                                </div>
                                                <div class=\"btn-area\">
                                                    <div class=\"dropdown-area\">
                                                        <button type=\"button\" id=\"followBtn!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" tabindex=\"0\">
                                                            .....
                                                        </button>
                                                        <ul class=\"dropdown-menu\" aria-labelledby=\"followBtn!\">
                                                            <li><a class=\"dropdown-item\" href=\"javascript:void(0)\" tabindex=\"0\">Following</a></li>
                                                            <li><a class=\"dropdown-item\" href=\"javascript:void(0)\" tabindex=\"0\">Followers</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"single-box d-center justify-content-between\">
                                                <div class=\"logo-item d-flex gap-3 align-items-center\">
                                                    <div class=\"logo-area\">
                                                        <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"icon\">
                                                    </div>
                                                    <div class=\"info-area\">
                                                        <h6>Leo Castillo</h6>
                                                        <span class=\"mdtxt\">Name</span>
                                                    </div>
                                                </div>
                                                <div class=\"btn-area\">
                                                    <div class=\"dropdown-area\">
                                                        <button type=\"button\" id=\"followBtn2!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" tabindex=\"0\">
                                                            .....
                                                        </button>
                                                        <ul class=\"dropdown-menu\" aria-labelledby=\"followBtn2!\">
                                                            <li><a class=\"dropdown-item\" href=\"javascript:void(0)\" tabindex=\"0\">Following</a></li>
                                                            <li><a class=\"dropdown-item\" href=\"javascript:void(0)\" tabindex=\"0\">Followers</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Match One Popup end -->

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
        return "perfil/perfilview.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
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
                                <a href=\"sign-in.html\">Sign In</a>
                                <a href=\"sign-up.html\" class=\"cmn-btn\">Sign up</a>
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

    <!-- Gaming top info start -->
    <section class=\"gaming-top-info group-details public-profile position-relative\">
        <div class=\"overlay pt-120 pb-120\">
            <div class=\"img-area cover-img\">
                <img src=\"/assets/images/casinoroyalbanner.png\" class=\"w-100\" alt=\"image\">
            </div>
            <div class=\"head-content position-relative\">
                <div class=\"container\">
                    <div class=\"row position-relative justify-content-between\">
                        <div class=\"col-xl-4 col-lg-6 col-md-6 order-1 order-xl-0 py-0 py-lg-5 pb-0\">
                            <div class=\"info-area mt-0 mt-lg-4 d-flex gap-5 flex-wrap justify-content-center justify-content-xl-start align-items-center\">
                                <div class=\"single-area\">
                                    <div class=\"text-center\">
                                        <h4>82</h4>
                                        <p>Friends</p>
                                    </div>
                                </div>
                                <div class=\"single-area\">
                                    <div class=\"text-center\">
                                        <h4>198</h4>
                                        <p>Winning</p>
                                    </div>
                                </div>
                                <div class=\"single-area\">
                                    <div class=\"text-center\">
                                        <h4>241</h4>
                                        <p>Tournaments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 mb-5 mb-lg-0 pos-abs text-center\">
                            <div class=\"logo-area top-0 m-0 position-relative d-flex align-items-center justify-content-center\">
                                <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                <img src=\"/assets/images/top-gamers-1.png\" class=\"position-absolute\" alt=\"icon\">
                            </div>
                            <div class=\"text-area mt-3\">
                                <h4>Dana Grant</h4>
                                <span class=\"active-status\">I will destroy all enemies.</span>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-3 col-md-6 order-1 order-xl-0 text-center mt-4 mt-md-0 justify-content-center justify-content-xl-end d-flex\">
                            <div class=\"btn-area position-absolute d-flex gap-2 gap-sm-4\">
                                <a href=\"javascript:void(0)\" class=\"cmn-btn d-inline-flex gap-2\">
                                    Add Friend
                                    <i class=\"fas fa-plus\"></i>
                                </a>
                                <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">
                                    Send Message
                                </a>
                            </div>
                            <div class=\"social mt-0 mt-lg-5\">
                                <ul class=\"d-flex mt-0 mt-lg-5\">
                                    <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"nav-head mt-5 d-center gap-3 flex-wrap justify-content-between\">
                        <ul class=\"nav border-0 p-0\" role=\"tablist\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link active\" id=\"posts-item-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#posts-item\" type=\"button\" role=\"tab\"
                                    aria-controls=\"posts-item\" aria-selected=\"true\">
                                    posts-item</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"game-stats-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#game-stats\" type=\"button\" role=\"tab\"
                                    aria-controls=\"game-stats\" aria-selected=\"false\">game-stats</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"about-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#about\" type=\"button\" role=\"tab\"
                                    aria-controls=\"about\" aria-selected=\"false\">about</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"friends-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#friends\" type=\"button\" role=\"tab\"
                                    aria-controls=\"friends\" aria-selected=\"false\">friends</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"groups-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#groups\" type=\"button\" role=\"tab\"
                                    aria-controls=\"groups\" aria-selected=\"false\">groups</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"forums-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#forums\" type=\"button\" role=\"tab\"
                                    aria-controls=\"forums\" aria-selected=\"false\">forums</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"points-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#points\" type=\"button\" role=\"tab\"
                                    aria-controls=\"points\" aria-selected=\"false\">points</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"achievements-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#achievements\" type=\"button\" role=\"tab\"
                                    aria-controls=\"achievements\" aria-selected=\"false\">achievements</button>
                            </li>
                        </ul>
                        <div class=\"right-area mb-3 d-flex align-items-center gap-3\">
                            <div class=\"single-area d-center position-relative dropdown-area\">
                                <button type=\"button\" id=\"searchBtn!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <img src=\"/assets/images/icon/search-icon.png\" alt=\"Icon\">
                                </button>
                                <ul class=\"dropdown-menu search-area\" aria-labelledby=\"searchBtn!\">
                                    <li>
                                        <form action=\"#\" class=\"search-form\">
                                            <span class=\"single-input\">
                                                <input type=\"text\" placeholder=\"Enter Keywords.......\" autocomplete=\"off\">
                                            </span>
                                            <button class=\"cmn-btn\">Search</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"single-area d-center position-relative dropdown-area\">
                                <button type=\"button\" id=\"inviteBtn!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                </button>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn!\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                            <span class=\"verify\">
                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                            </span>
                                            Your Content
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                            <span class=\"verify\">
                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                            </span>
                                            Share
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                            <span class=\"verify\">
                                                <img src=\"/assets/images/icon/badges-icon.png\" alt=\"icon\">
                                            </span>
                                            Manage badges
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                            <span class=\"verify\">
                                                <img src=\"/assets/images/icon/report-icon.png\" alt=\"icon\">
                                            </span>
                                            Report Group
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container profile-area\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane fade show active\" id=\"posts-item\" role=\"tabpanel\"
                        aria-labelledby=\"posts-item-tab\">
                        <div class=\"row\">
                            <div class=\"col-lg-8 cus-mar\">
                                <div class=\"single-items\">
                                    <div class=\"top-area pb-5\">
                                        <div class=\"profile-area mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/logo-avatar-1.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Lori Cortez</h6>
                                                    <span class=\"mdtxt\">2 weeks ago</span>
                                                </div>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn1!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn1!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                        <div class=\"post-img mt-3\">
                                            <img src=\"/assets/images/post-img-1.png\" class=\"w-100\" alt=\"image\">
                                        </div>
                                    </div>
                                    <div class=\"react-and-share py-4 d-center justify-content-between\">
                                        <div class=\"friends-list d-flex gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/icon/like-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/care-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/love-icon.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>84</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>109 Participants</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <button>28 Comments</button>
                                            <button>3 Shares</button>
                                        </div>
                                    </div>
                                    <div class=\"footer-item d-center flex-wrap gap-3 gap-md-0 justify-content-between\">
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/react-icon.png\" alt=\"icon\">
                                            React!
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/comment-icon.png\" alt=\"icon\">
                                            Comment
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/share2-icon.png\" alt=\"icon\">
                                            Share
                                        </button>
                                    </div>
                                </div>
                                <div class=\"single-items\">
                                    <div class=\"top-area pb-5\">
                                        <div class=\"profile-area mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item d-flex flex-wrap gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-3.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6 class=\"d-flex flex-wrap align-items-center gap-3\">Toni Kim
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                        <span>joined the group</span>
                                                        <span class=\"highlighter\">LoLAllStars</span>
                                                    </h6>
                                                    <span class=\"mdtxt\">2 weeks ago</span>
                                                </div>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn2!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn2!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"post-img pb-120 position-relative mt-3\">
                                            <img src=\"/assets/images/post-img-2.png\" class=\"w-100\" alt=\"image\">
                                            <div class=\"avater-item position-absolute d-flex gap-3 lign-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/logo-outline-2.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/top-gamers-3.png\" class=\"position-absolute\" alt=\"icon\">
                                                </div>
                                                <div class=\"info-area mt-0 mt-sm-4\">
                                                    <h6 class=\"d-flex align-items-center gap-3\">Toni Kim</h6>
                                                    <span class=\"mdtxt\">@tonikim</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"react-and-share py-4 d-center justify-content-between\">
                                        <div class=\"friends-list d-flex gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/icon/like-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/care-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/love-icon.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>84</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>109 Participants</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <button>28 Comments</button>
                                            <button>3 Shares</button>
                                        </div>
                                    </div>
                                    <div class=\"footer-item second d-center flex-wrap gap-3 gap-md-0 justify-content-between\">
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/react-icon.png\" alt=\"icon\">
                                            React!
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/comment-icon.png\" alt=\"icon\">
                                            Comment
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/share2-icon.png\" alt=\"icon\">
                                            Share
                                        </button>
                                    </div>
                                </div>
                                <div class=\"single-items\">
                                    <div class=\"top-area pb-5\">
                                        <div class=\"profile-area mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-9.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Kelvin Parker</h6>
                                                    <span class=\"mdtxt\">2 weeks ago</span>
                                                </div>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn3!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn3!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                        <div class=\"post-img mt-3\">
                                            <div class=\"video-section m-0 post\">
                                                <div class=\"magnific-area position-relative d-flex align-items-center justify-content-around\">
                                                    <div class=\"bg-area w-100\">
                                                        <img class=\"bg-item w-100\" src=\"/assets/images/post-img-3.png\" alt=\"image\">
                                                    </div>
                                                    <div class=\"content-area text-center position-absolute d-flex align-items-center justify-content-center\">
                                                        <div class=\"content-box\">
                                                            <a class=\"mfp-iframe popupvideo d-flex align-items-center justify-content-center\" href=\"https://www.youtube.com/watch?v=Djz8Nc0Qxwk\">
                                                                <img src=\"/assets/images/icon/play2-icon.png\" alt=\"icon\">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"react-and-share py-4 d-center justify-content-between\">
                                        <div class=\"friends-list d-flex gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/icon/like-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/care-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/love-icon.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>84</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>109 Participants</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <button>28 Comments</button>
                                            <button>3 Shares</button>
                                        </div>
                                    </div>
                                    <div class=\"footer-item second d-center flex-wrap gap-3 gap-md-0 justify-content-between\">
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/react-icon.png\" alt=\"icon\">
                                            React!
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/comment-icon.png\" alt=\"icon\">
                                            Comment
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/share2-icon.png\" alt=\"icon\">
                                            Share
                                        </button>
                                    </div>
                                </div>
                                <div class=\"single-items\">
                                    <div class=\"top-area pb-5\">
                                        <div class=\"profile-area mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-8.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Kyle Reed</h6>
                                                    <span class=\"mdtxt\">2 weeks ago</span>
                                                </div>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn4!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn4!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    </div>
                                    <div class=\"react-and-share py-4 d-center justify-content-between\">
                                        <div class=\"friends-list d-flex gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/icon/like-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/care-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/love-icon.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>84</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>109 Participants</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <button>28 Comments</button>
                                            <button>3 Shares</button>
                                        </div>
                                    </div>
                                    <div class=\"footer-item second d-center flex-wrap gap-3 gap-md-0 justify-content-between\">
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/react-icon.png\" alt=\"icon\">
                                            React!
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/comment-icon.png\" alt=\"icon\">
                                            Comment
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/share2-icon.png\" alt=\"icon\">
                                            Share
                                        </button>
                                    </div>
                                </div>
                                <div class=\"single-items\">
                                    <div class=\"top-area pb-5\">
                                        <div class=\"profile-area mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-7.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Lori Kayla</h6>
                                                    <span class=\"mdtxt\">2 weeks ago</span>
                                                </div>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn5!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn5!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                        <div class=\"post-img second gap-2 mt-3\">
                                            <div class=\"d-flex flex-wrap gap-2 popupgallery\">
                                                <a href=\"/assets/images/post-img-4.png\">
                                                    <img src=\"/assets/images/post-img-4.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-5.png\">
                                                    <img src=\"/assets/images/post-img-5.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-6.png\">
                                                    <img src=\"/assets/images/post-img-6.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-7.png\">
                                                    <img src=\"/assets/images/post-img-7.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-8.png\">
                                                    <img src=\"/assets/images/post-img-8.png\" alt=\"image\">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"react-and-share py-4 d-center justify-content-between\">
                                        <div class=\"friends-list d-flex gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/icon/like-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/care-icon.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/icon/love-icon.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>84</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <ul class=\"d-flex align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                            <span>109 Participants</span>
                                        </div>
                                        <div class=\"friends-list react-list d-flex flex-wrap gap-3 align-items-center text-center\">
                                            <button>28 Comments</button>
                                            <button>3 Shares</button>
                                        </div>
                                    </div>
                                    <div class=\"footer-item second d-center flex-wrap gap-3 gap-md-0 justify-content-between\">
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/react-icon.png\" alt=\"icon\">
                                            React!
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/comment-icon.png\" alt=\"icon\">
                                            Comment
                                        </button>
                                        <button class=\"d-center gap-2\">
                                            <img src=\"/assets/images/icon/share2-icon.png\" alt=\"icon\">
                                            Share
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 mt-5 mt-lg-0\">
                                <div class=\"sidebar position-sticky\">
                                    <div class=\"single-info single-items\">
                                        <div class=\"profile-area mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item m-0 d-flex gap-3 align-items-center\">
                                                <h5 class=\"p-0 border-0\">Photos <span>74</span></h5>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn6!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn6!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"popupgallery flex-wrap\">
                                                <a href=\"/assets/images/post-img-21.png\">
                                                    <img src=\"/assets/images/post-img-21.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-22.png\">
                                                    <img src=\"/assets/images/post-img-22.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-23.png\">
                                                    <img src=\"/assets/images/post-img-23.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-24.png\">
                                                    <img src=\"/assets/images/post-img-24.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-25.png\">
                                                    <img src=\"/assets/images/post-img-25.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-26.png\">
                                                    <img src=\"/assets/images/post-img-26.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-27.png\">
                                                    <img src=\"/assets/images/post-img-27.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-28.png\">
                                                    <img src=\"/assets/images/post-img-28.png\" alt=\"image\">
                                                </a>
                                                <a href=\"/assets/images/post-img-29.png\">
                                                    <img src=\"/assets/images/post-img-29.png\" alt=\"image\">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"single-info single-items\">
                                        <div class=\"profile-area mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item m-0 d-flex gap-3 align-items-center\">
                                                <h5 class=\"p-0 border-0\">Friends <span>589</span></h5>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn8!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn8!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"avater-item d-flex gap-3 align-items-center\">
                                            <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                <img src=\"/assets/images/leaderboard-img-6.png\" class=\"position-absolute\" alt=\"icon\">
                                                <div class=\"abs-area d-center position-absolute\">
                                                    <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                </div>
                                            </div>
                                            <div class=\"info-area\">
                                                <h6>Toni Kim</h6>
                                                <span class=\"mdtxt\">24.5K profile views</span>
                                            </div>
                                        </div>
                                        <div class=\"avater-item d-flex gap-3 align-items-center\">
                                            <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                <img src=\"/assets/images/leaderboard-img-5.png\" class=\"position-absolute\" alt=\"icon\">
                                                <div class=\"abs-area d-center position-absolute\">
                                                    <h6 class=\"m-0 d-center mdtxt\">14</h6>
                                                </div>
                                            </div>
                                            <div class=\"info-area\">
                                                <h6>Kayla Taylor</h6>
                                                <span class=\"mdtxt\">24.5K profile views</span>
                                            </div>
                                        </div>
                                        <div class=\"avater-item d-flex gap-3 align-items-center\">
                                            <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                <img src=\"/assets/images/leaderboard-img-4.png\" class=\"position-absolute\" alt=\"icon\">
                                                <div class=\"abs-area d-center position-absolute\">
                                                    <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                </div>
                                            </div>
                                            <div class=\"info-area\">
                                                <h6>Lucy Alvarez</h6>
                                                <span class=\"mdtxt\">24.5K profile views</span>
                                            </div>
                                        </div>
                                        <div class=\"avater-item d-flex gap-3 align-items-center\">
                                            <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                <img src=\"/assets/images/leaderboard-img-3.png\" class=\"position-absolute\" alt=\"icon\">
                                                <div class=\"abs-area d-center position-absolute\">
                                                    <h6 class=\"m-0 d-center mdtxt\">14</h6>
                                                </div>
                                            </div>
                                            <div class=\"info-area\">
                                                <h6>Lori Cortez</h6>
                                                <span class=\"mdtxt\">24.5K profile views</span>
                                            </div>
                                        </div>
                                        <div class=\"btn-area mt-4 text-center\">
                                            <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">See all Friends</a>
                                        </div>
                                    </div>
                                    <div class=\"single-info single-items\">
                                        <div class=\"profile-area border-area pb-3 mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item d-flex m-0 gap-3 align-items-center\">
                                                <h5 class=\"p-0 border-0\">Videos <span>3</span></h5>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn7!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn7!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"cus-mar\">
                                            <div class=\"single-box\">
                                                <div class=\"video-section m-0 post\">
                                                    <div class=\"magnific-area position-relative d-flex align-items-center justify-content-around\">
                                                        <div class=\"bg-area w-100\">
                                                            <img class=\"bg-item w-100\" src=\"/assets/images/post-img-9.png\" alt=\"image\">
                                                        </div>
                                                        <div class=\"content-area text-center position-absolute d-flex align-items-center justify-content-center\">
                                                            <div class=\"content-box\">
                                                                <a class=\"mfp-iframe popupvideo d-flex align-items-center justify-content-center\" href=\"https://www.youtube.com/watch?v=Djz8Nc0Qxwk\">
                                                                    <img src=\"/assets/images/icon/play2-icon.png\" alt=\"icon\">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"single-box\">
                                                <div class=\"video-section m-0 post\">
                                                    <div class=\"magnific-area position-relative d-flex align-items-center justify-content-around\">
                                                        <div class=\"bg-area w-100\">
                                                            <img class=\"bg-item w-100\" src=\"/assets/images/post-img-13.png\" alt=\"image\">
                                                        </div>
                                                        <div class=\"content-area text-center position-absolute d-flex align-items-center justify-content-center\">
                                                            <div class=\"content-box\">
                                                                <a class=\"mfp-iframe popupvideo d-flex align-items-center justify-content-center\" href=\"https://www.youtube.com/watch?v=Djz8Nc0Qxwk\">
                                                                    <img src=\"/assets/images/icon/play2-icon.png\" alt=\"icon\">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"single-box\">
                                                <div class=\"video-section m-0 post\">
                                                    <div class=\"magnific-area position-relative d-flex align-items-center justify-content-around\">
                                                        <div class=\"bg-area w-100\">
                                                            <img class=\"bg-item w-100\" src=\"/assets/images/post-img-18.png\" alt=\"image\">
                                                        </div>
                                                        <div class=\"content-area text-center position-absolute d-flex align-items-center justify-content-center\">
                                                            <div class=\"content-box\">
                                                                <a class=\"mfp-iframe popupvideo d-flex align-items-center justify-content-center\" href=\"https://www.youtube.com/watch?v=Djz8Nc0Qxwk\">
                                                                    <img src=\"/assets/images/icon/play2-icon.png\" alt=\"icon\">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"game-stats\" role=\"tabpanel\"
                        aria-labelledby=\"game-stats-tab\">
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"single-info\">
                                    <h4 class=\"mb-3\">Game stats</h4>
                                    <div class=\"row cus-mar\">
                                        <div class=\"col-xxl-3 col-xl-4 col-sm-6\">
                                            <div class=\"stats-single\">
                                                <h5>Warezone</h5>
                                                <ul>
                                                    <li>
                                                        <span>Matches</span>
                                                        <span>264</span>
                                                    </li>
                                                    <li>
                                                        <span>Winnings</span>
                                                        <span>150</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-xxl-3 col-xl-4 col-sm-6\">
                                            <div class=\"stats-single\">
                                                <h5>Apex leg.</h5>
                                                <ul>
                                                    <li>
                                                        <span>Matches</span>
                                                        <span>264</span>
                                                    </li>
                                                    <li>
                                                        <span>Winnings</span>
                                                        <span>150</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-xxl-3 col-xl-4 col-sm-6\">
                                            <div class=\"stats-single\">
                                                <h5>Dota 2</h5>
                                                <ul>
                                                    <li>
                                                        <span>Matches</span>
                                                        <span>264</span>
                                                    </li>
                                                    <li>
                                                        <span>Winnings</span>
                                                        <span>150</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-xxl-3 col-xl-4 col-sm-6\">
                                            <div class=\"stats-single\">
                                                <h5>Fortnite</h5>
                                                <ul>
                                                    <li>
                                                        <span>Matches</span>
                                                        <span>264</span>
                                                    </li>
                                                    <li>
                                                        <span>Winnings</span>
                                                        <span>150</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-7\">
                                <div class=\"sidebar\">
                                    <div class=\"single-info\">
                                        <h4 class=\"mb-3\">Level <span>24</span></h4>
                                        <div class=\"progress mb-3 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            <div class=\"progress-bar\" style=\"width: 24%\"></div>
                                            <h6 class=\" mdtxt text-center position-absolute\">24%</h6>
                                        </div>
                                        <a href=\"javascript:void(0)\">View All Level</a>
                                    </div>
                                    <div class=\"single-info\">
                                        <h4 class=\"mb-3\">Games PLaying</h4>
                                        <div class=\"single d-flex align-items-center gap-3\">
                                            <img src=\"/assets/images/browse-game-img-1.png\" alt=\"image\">
                                            <div class=\"right-area w-100\">
                                                <h5>Warezone</h5>
                                                <ul>
                                                    <li>
                                                        <span>Win Ration</span>
                                                        <span>63%</span>
                                                    </li>
                                                </ul>
                                                <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <div class=\"progress-bar w-50\"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"single mt-4 d-flex align-items-center gap-3\">
                                            <img src=\"/assets/images/browse-game-img-2.png\" alt=\"image\">
                                            <div class=\"right-area w-100\">
                                                <h5>Warezone</h5>
                                                <ul>
                                                    <li>
                                                        <span>Win Ration</span>
                                                        <span>63%</span>
                                                    </li>
                                                </ul>
                                                <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <div class=\"progress-bar\" style=\"width: 63%\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"about\" role=\"tabpanel\"
                    aria-labelledby=\"about-tab\">
                        <div class=\"row information-area\">
                            <div class=\"col-lg-8\">
                                <div class=\"single-info\">
                                    <h4 class=\"mb-3\">About Me</h4>
                                    <p>Hi! My name is Dana Grant.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget nisl venenatis, molestie erat eget, bibendum enim. Morbi a dolor imperdiet, ullamcorper lectus quis, accumsan urna.</p>
                                    <ul class=\"info-ul\">
                                        <li>
                                            <span>Joined</span>
                                            <span>March 26th, 2023</span>
                                        </li>
                                        <li>
                                            <span>City</span>
                                            <span>Los Angeles, California</span>
                                        </li>
                                        <li>
                                            <span>Country</span>
                                            <span>United States</span>
                                        </li>
                                        <li>
                                            <span>Age</span>
                                            <span>32 Years</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"single-info\">
                                    <h4 class=\"mb-3\">Personal Info</h4>
                                    <ul class=\"info-ul\">
                                        <li>
                                            <span>Email</span>
                                            <span>address@yourmail.com</span>
                                        </li>
                                        <li>
                                            <span>City</span>
                                            <span>Long Island, New York United States</span>
                                        </li>
                                        <li>
                                            <span>Country</span>
                                            <span>United States</span>
                                        </li>
                                        <li>
                                            <span>Game ID</span>
                                            <span>gamio65995544855</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"sidebar\">
                                    <div class=\"single-info text-center\">
                                        <div class=\"progress-circle\">
                                            <span class=\"progress-left\">
                                                <span class=\"progress-bar\"></span>
                                            </span>
                                            <span class=\"progress-right\">
                                                <span class=\"progress-bar\"></span>
                                            </span>
                                            <h2 class=\"progress-value\">50</h2>
                                        </div>
                                        <h4 class=\"mt-3 mt-lg-5 mb-3\">Profile Completion</h4>
                                        <p>Complete your profile by filling profile info fields, completing quests & unlocking badges</p>
                                    </div>
                                    <div class=\"single-info single-items\">
                                        <div class=\"profile-area border-area pb-3 mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item d-flex m-0 gap-3 align-items-center\">
                                                <h5 class=\"p-0 border-0\">More Stats</h5>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn10!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn10!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"cus-mar\">
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/emoji-4.png\" alt=\"icon\">
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>5 Days Ago</h6>
                                                    <span class=\"mdtxt\">Last friend added</span>
                                                </div>
                                            </div>
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/stats-icon.png\" alt=\"icon\">
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>1 Days Ago</h6>
                                                    <span class=\"mdtxt\">Last post update</span>
                                                </div>
                                            </div>
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/comments-icon.png\" alt=\"icon\">
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>56 comments</h6>
                                                    <span class=\"mdtxt\">Most commented post</span>
                                                </div>
                                            </div>
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/like2-icon.png\" alt=\"icon\">
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>904 likes</h6>
                                                    <span class=\"mdtxt\">Most liked post</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"friends\" role=\"tabpanel\"
                        aria-labelledby=\"friends-tab\">
                        <div class=\"member-topbar mb-4\">
                            <div class=\"row align-items-center justify-content-between\">
                                <div class=\"col-lg-12\">
                                    <form action=\"#\">
                                        <div class=\"input-area d-flex\">
                                            <input type=\"text\" placeholder=\"Search members\" autocomplete=\"off\">
                                            <button class=\"cmn-btn\">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"row cus-mar\">
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-1.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Elbert Brady</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-2.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Stanley Gill</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-3.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Rose Lindsey</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-4.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Alice Fowler</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-5.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Tracy Young</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-6.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Leo Diaz</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-7.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Mckenzie</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-8.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Thelma Hall</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-9.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Gonzalez</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-10.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Miranda</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-11.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Corey Little</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xxl-3 col-lg-4 col-md-6 col-sm-8\">
                                <div class=\"single-members text-center\">
                                    <div class=\"logo-area mb-5 position-relative d-flex align-items-center justify-content-center\">
                                        <img src=\"/assets/images/icon/logo-outline-3.png\" alt=\"icon\">
                                        <img src=\"/assets/images/top-gamers-12.png\" class=\"position-absolute\" alt=\"icon\">
                                    </div>
                                    <h4>Elbert Brady</h4>
                                    <div class=\"social my-4\">
                                        <ul class=\"d-center\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"btn-area d-center gap-3\">
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn d-flex gap-2 mdtxt alt\">Add Friend</a>
                                        <a href=\"javascript:void(0)\" class=\"cmn-btn mdtxt\">Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav aria-label=\"Page navigation\" class=\"d-flex justify-content-center pagination-area mt-40\">
                            <a class=\"page-btn previous cmn-btn alt\" href=\"javascript:void(0)\" aria-label=\"Previous\">
                                <i class=\"icon-d-arrow-thin\"></i>
                            </a>
                            <ul class=\"pagination justify-content-center align-items-center\">
                                <li class=\"page-item\"><a class=\"page-link cmn-btn alt\" href=\"javascript:void(0)\">1</a></li>
                                <li class=\"page-item\"><a class=\"page-link cmn-btn alt active\" href=\"javascript:void(0)\">2</a></li>
                                <li class=\"page-item\"><a class=\"page-link cmn-btn alt\" href=\"javascript:void(0)\">3</a></li>
                            </ul>
                            <a class=\"page-btn next cmn-btn alt\" href=\"javascript:void(0)\" aria-label=\"Next\">
                                <i class=\"icon-d-arrow-thin\"></i>
                            </a>
                        </nav>
                    </div>
                    <div class=\"tab-pane fade\" id=\"groups\" role=\"tabpanel\"
                        aria-labelledby=\"groups-tab\">
                        <div class=\"member-topbar mb-4\">
                            <div class=\"row align-items-center justify-content-between\">
                                <div class=\"col-lg-12\">
                                    <form action=\"#\">
                                        <div class=\"input-area d-flex\">
                                            <input type=\"text\" placeholder=\"Search group\" autocomplete=\"off\">
                                            <button class=\"cmn-btn\">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"top-groups group-finder group-tab\">
                            <div class=\"row cus-mar\">
                                <div class=\"col-xl-3 col-lg-4 col-6\">
                                    <div class=\"single-slider\">
                                        <div class=\"top-items\">
                                            <div class=\"top-area p-0 d-flex align-items-center justify-content-between\">
                                                <span>Top</span>
                                                <div class=\"logo-area mb-3 position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/logo-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/icon/top-groups-logo-1.png\" class=\"position-absolute\" alt=\"icon\">
                                                </div>
                                                <div class=\"dropdown-area\">
                                                    <button type=\"button\" id=\"followBtn1!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        .....
                                                    </button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"followBtn1!\">
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Share
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/join-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Join
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"info-area text-center\">
                                                <h5>LoL Allstars
                                                    <span class=\"verify\">
                                                        <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                    </span>
                                                </h5>
                                                <span class=\"mdtxt\">13k Members</span>
                                            </div>
                                        </div>
                                        <div class=\"friends-list text-center\">
                                            <p class=\"mdtxt\">You have friends</p>
                                            <ul class=\"d-flex mt-2 align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-4 col-6\">
                                    <div class=\"single-slider\">
                                        <div class=\"top-items\">
                                            <div class=\"top-area p-0 d-flex align-items-center justify-content-between\">
                                                <span>Top</span>
                                                <div class=\"logo-area mb-3 position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/logo-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/icon/top-groups-logo-3.png\" class=\"position-absolute\" alt=\"icon\">
                                                </div>
                                                <div class=\"dropdown-area\">
                                                    <button type=\"button\" id=\"followBtn3!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        .....
                                                    </button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"followBtn3!\">
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Share
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/join-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Join
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"info-area text-center\">
                                                <h5>Storm
                                                    <span class=\"verify\">
                                                        <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                    </span>
                                                </h5>
                                                <span class=\"mdtxt\">13k Members</span>
                                            </div>
                                        </div>
                                        <div class=\"friends-list text-center\">
                                            <p class=\"mdtxt\">You have friends</p>
                                            <ul class=\"d-flex mt-2 align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-4 col-6\">
                                    <div class=\"single-slider\">
                                        <div class=\"top-items\">
                                            <div class=\"top-area p-0 d-flex align-items-center justify-content-between\">
                                                <span>Top</span>
                                                <div class=\"logo-area mb-3 position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/logo-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/icon/top-groups-logo-4.png\" class=\"position-absolute\" alt=\"icon\">
                                                </div>
                                                <div class=\"dropdown-area\">
                                                    <button type=\"button\" id=\"followBtn4!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        .....
                                                    </button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"followBtn4!\">
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Share
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/join-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Join
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"info-area text-center\">
                                                <h5>Dragons
                                                    <span class=\"verify\">
                                                        <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                    </span>
                                                </h5>
                                                <span class=\"mdtxt\">13k Members</span>
                                            </div>
                                        </div>
                                        <div class=\"friends-list text-center\">
                                            <p class=\"mdtxt\">You have friends</p>
                                            <ul class=\"d-flex mt-2 align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-4 col-6\">
                                    <div class=\"single-slider\">
                                        <div class=\"top-items\">
                                            <div class=\"top-area p-0 d-flex align-items-center justify-content-between\">
                                                <span>Top</span>
                                                <div class=\"logo-area mb-3 position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/logo-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/icon/top-groups-logo-5.png\" class=\"position-absolute\" alt=\"icon\">
                                                </div>
                                                <div class=\"dropdown-area\">
                                                    <button type=\"button\" id=\"followBtn5!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        .....
                                                    </button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"followBtn5!\">
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Share
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/join-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Join
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"info-area text-center\">
                                                <h5>Xcoto
                                                    <span class=\"verify\">
                                                        <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                    </span>
                                                </h5>
                                                <span class=\"mdtxt\">13k Members</span>
                                            </div>
                                        </div>
                                        <div class=\"friends-list text-center\">
                                            <p class=\"mdtxt\">You have friends</p>
                                            <ul class=\"d-flex mt-2 align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-4 col-6\">
                                    <div class=\"single-slider\">
                                        <div class=\"top-items\">
                                            <div class=\"top-area p-0 d-flex align-items-center justify-content-between\">
                                                <span>Top</span>
                                                <div class=\"logo-area mb-3 position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/logo-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/icon/top-groups-logo-6.png\" class=\"position-absolute\" alt=\"icon\">
                                                </div>
                                                <div class=\"dropdown-area\">
                                                    <button type=\"button\" id=\"followBtn6!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        .....
                                                    </button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"followBtn6!\">
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Share
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/join-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Join
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"info-area text-center\">
                                                <h5>Biliot
                                                    <span class=\"verify\">
                                                        <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                    </span>
                                                </h5>
                                                <span class=\"mdtxt\">13k Members</span>
                                            </div>
                                        </div>
                                        <div class=\"friends-list text-center\">
                                            <p class=\"mdtxt\">You have friends</p>
                                            <ul class=\"d-flex mt-2 align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-4 col-6\">
                                    <div class=\"single-slider\">
                                        <div class=\"top-items\">
                                            <div class=\"top-area p-0 d-flex align-items-center justify-content-between\">
                                                <span>Top</span>
                                                <div class=\"logo-area mb-3 position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/logo-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/icon/top-groups-logo-7.png\" class=\"position-absolute\" alt=\"icon\">
                                                </div>
                                                <div class=\"dropdown-area\">
                                                    <button type=\"button\" id=\"followBtn7!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        .....
                                                    </button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"followBtn7!\">
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Share
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                                <span class=\"verify\">
                                                                    <img src=\"/assets/images/icon/join-icon.png\" alt=\"icon\">
                                                                </span>
                                                                Join
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"info-area text-center\">
                                                <h5>Eagle
                                                    <span class=\"verify\">
                                                        <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                    </span>
                                                </h5>
                                                <span class=\"mdtxt\">13k Members</span>
                                            </div>
                                        </div>
                                        <div class=\"friends-list text-center\">
                                            <p class=\"mdtxt\">You have friends</p>
                                            <ul class=\"d-flex mt-2 align-items-center justify-content-center\">
                                                <li><img src=\"/assets/images/friend-img-1.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-2.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-3.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-4.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-5.png\" alt=\"icon\"></li>
                                                <li><img src=\"/assets/images/friend-img-6.png\" alt=\"icon\"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"forums\" role=\"tabpanel\"
                        aria-labelledby=\"forums-tab\">
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"table-responsive p-0\">
                                    <table class=\"table m-0\">
                                        <thead>
                                            <tr>
                                                <th scope=\"col\">Forum</th>
                                                <th scope=\"col\">Voice</th>
                                                <th scope=\"col\">Post</th>
                                                <th scope=\"col\">freshness</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Game Tips &amp; Tricks</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-1.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Toni Kim</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Community Content</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-2.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Corey Little</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">LOL Allstars - Multiplayer</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-3.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Neil Fisher</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">LOL Allstars - Announcements</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-4.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Alton Hardy</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Modern Warfare</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-5.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Lynn Klein</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">General Discussion</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-6.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Rita Bass</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Discord and Forum Discord</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-7.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Leticia Cain</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Game Tips &amp; Tricks</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-8.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Ellen Garcia</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Game Tricks</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-9.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Stacy Hale</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">General Discussion</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-10.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Luis Tate</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Discord and Forum Discord</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-5.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Kerry Lee</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Game Tips</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-6.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Tracy Toni</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <p class=\"heading mb-2\">Game Tips &amp; Tricks</p>
                                                    <div class=\"name-area d-flex align-items-center gap-2\">
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/table-img-2.png\" alt=\"icon\">
                                                        </span>
                                                        <p>Tracy Meyer</p>
                                                        <span class=\"verify\">
                                                            <img src=\"/assets/images/icon/icon-varified.png\" alt=\"icon\">
                                                        </span>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span>8</span>
                                                </td>
                                                <td>
                                                    <span>12</span>
                                                </td>
                                                <td>
                                                    <span>No Topics</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 col-sm-8 mt-5 mt-lg-0\">
                                <div class=\"sidebar position-sticky\">
                                    <div class=\"single-item single-items\">
                                        <div class=\"profile-area border-area pb-3 mb-3 d-center justify-content-between\">
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <h5 class=\"p-0 border-0\">Top Contributors</h5>
                                            </div>
                                            <div class=\"settings-area dropdown-area\">
                                                <button type=\"button\" id=\"inviteBtn9!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <img src=\"/assets/images/icon/dot-icon.png\" alt=\"Icon\">
                                                </button>
                                                <ul class=\"dropdown-menu\" aria-labelledby=\"inviteBtn9!\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/content-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Your Content
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"javascript:void(0)\">
                                                            <span class=\"verify\">
                                                                <img src=\"/assets/images/icon/share-icon.png\" alt=\"icon\">
                                                            </span>
                                                            Share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"single-list d-center justify-content-between\">
                                            <h5>1</h5>
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-6.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Toni Kim</h6>
                                                    <span class=\"mdtxt\">24.5K profile views</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"single-list d-center justify-content-between\">
                                            <h5>2</h5>
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-5.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">14</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Kayla Taylor</h6>
                                                    <span class=\"mdtxt\">24.5K profile views</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"single-list d-center justify-content-between\">
                                            <h5>3</h5>
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-7.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Toni Kim</h6>
                                                    <span class=\"mdtxt\">24.5K profile views</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"single-list d-center justify-content-between\">
                                            <h5>4</h5>
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-8.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">24</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Lucy Alvarez</h6>
                                                    <span class=\"mdtxt\">24.5K profile views</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"single-list d-center justify-content-between\">
                                            <h5>5</h5>
                                            <div class=\"avater-item d-flex gap-3 align-items-center\">
                                                <div class=\"logo-area position-relative d-flex align-items-center justify-content-center\">
                                                    <img src=\"/assets/images/icon/img-outline.png\" alt=\"icon\">
                                                    <img src=\"/assets/images/leaderboard-img-9.png\" class=\"position-absolute\" alt=\"icon\">
                                                    <div class=\"abs-area d-center position-absolute\">
                                                        <h6 class=\"m-0 d-center mdtxt\">14</h6>
                                                    </div>
                                                </div>
                                                <div class=\"info-area\">
                                                    <h6>Lori Cortez</h6>
                                                    <span class=\"mdtxt\">24.5K profile views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"points\" role=\"tabpanel\"
                        aria-labelledby=\"points-tab\">
                        <div class=\"row cus-mar points-area\">
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info\">
                                    <div class=\"d-flex align-items-start gap-4\">
                                        <img src=\"/assets/images/icon/points-icon-1.png\" alt=\"image\">
                                        <div class=\"right-area w-100\">
                                            <h4>3780</h4>
                                            <div class=\"d-flex my-3 gap-3\">
                                                <p>Gold User</p>
                                                <div class=\"icon-area d-center gap-2\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <span>369</span>
                                                </div>
                                            </div>
                                            <span class=\"progress-head mdtxt\">
                                                3780 / 6000
                                            </span>
                                            <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar w-50\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info\">
                                    <div class=\"d-flex align-items-start gap-4\">
                                        <img src=\"/assets/images/icon/points-icon-2.png\" alt=\"image\">
                                        <div class=\"right-area w-100\">
                                            <h4>3780</h4>
                                            <div class=\"d-flex my-3 gap-3\">
                                                <p>Silver Cup</p>
                                                <div class=\"icon-area d-center gap-2\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <span>369</span>
                                                </div>
                                            </div>
                                            <span class=\"progress-head mdtxt\">
                                                3780 / 6000
                                            </span>
                                            <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar w-50\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info\">
                                    <div class=\"d-flex align-items-start gap-4\">
                                        <img src=\"/assets/images/icon/points-icon-3.png\" alt=\"image\">
                                        <div class=\"right-area w-100\">
                                            <h4>3780</h4>
                                            <div class=\"d-flex my-3 gap-3\">
                                                <p>Bronze Cup</p>
                                                <div class=\"icon-area d-center gap-2\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <span>369</span>
                                                </div>
                                            </div>
                                            <span class=\"progress-head mdtxt\">
                                                3780 / 6000
                                            </span>
                                            <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar w-50\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info\">
                                    <div class=\"d-flex align-items-start gap-4\">
                                        <img src=\"/assets/images/icon/points-icon-4.png\" alt=\"image\">
                                        <div class=\"right-area w-100\">
                                            <h4>3780</h4>
                                            <div class=\"d-flex my-3 gap-3\">
                                                <p>The Collector</p>
                                                <div class=\"icon-area d-center gap-2\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <span>369</span>
                                                </div>
                                            </div>
                                            <span class=\"progress-head mdtxt\">
                                                3780 / 6000
                                            </span>
                                            <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar w-50\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info\">
                                    <div class=\"d-flex align-items-start gap-4\">
                                        <img src=\"/assets/images/icon/points-icon-5.png\" alt=\"image\">
                                        <div class=\"right-area w-100\">
                                            <h4>3780</h4>
                                            <div class=\"d-flex my-3 gap-3\">
                                                <p>Secret Treasure</p>
                                                <div class=\"icon-area d-center gap-2\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <span>369</span>
                                                </div>
                                            </div>
                                            <span class=\"progress-head mdtxt\">
                                                3780 / 6000
                                            </span>
                                            <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar w-50\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info\">
                                    <div class=\"d-flex align-items-start gap-4\">
                                        <img src=\"/assets/images/icon/points-icon-6.png\" alt=\"image\">
                                        <div class=\"right-area w-100\">
                                            <h4>3780</h4>
                                            <div class=\"d-flex my-3 gap-3\">
                                                <p>Private chat</p>
                                                <div class=\"icon-area d-center gap-2\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <span>369</span>
                                                </div>
                                            </div>
                                            <span class=\"progress-head mdtxt\">
                                                3780 / 6000
                                            </span>
                                            <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar w-50\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info\">
                                    <div class=\"d-flex align-items-start gap-4\">
                                        <img src=\"/assets/images/icon/points-icon-7.png\" alt=\"image\">
                                        <div class=\"right-area w-100\">
                                            <h4>3780</h4>
                                            <div class=\"d-flex my-3 gap-3\">
                                                <p>Comrade-in-Arms</p>
                                                <div class=\"icon-area d-center gap-2\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <span>369</span>
                                                </div>
                                            </div>
                                            <span class=\"progress-head mdtxt\">
                                                3780 / 6000
                                            </span>
                                            <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar w-50\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info\">
                                    <div class=\"d-flex align-items-start gap-4\">
                                        <img src=\"/assets/images/icon/points-icon-8.png\" alt=\"image\">
                                        <div class=\"right-area w-100\">
                                            <h4>3780</h4>
                                            <div class=\"d-flex my-3 gap-3\">
                                                <p>Challenger</p>
                                                <div class=\"icon-area d-center gap-2\">
                                                    <div class=\"icon-box\">
                                                        <img src=\"/assets/images/icon/user-2.png\" alt=\"icon\">
                                                    </div>
                                                    <span>369</span>
                                                </div>
                                            </div>
                                            <span class=\"progress-head mdtxt\">
                                                3780 / 6000
                                            </span>
                                            <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar w-50\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"achievements\" role=\"tabpanel\"
                    aria-labelledby=\"achievements-tab\">
                    <h4 class=\"head-area mb-3\">Achievements</h4>
                        <div class=\"row cus-mar points-area\">
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info text-center\">
                                    <div class=\"img-area d-center m-auto mb-3\">
                                        <img src=\"/assets/images/icon/achievements-icon-1.png\" alt=\"image\">
                                    </div>
                                    <div class=\"text-area w-100\">
                                        <h5>Gameplays</h5>
                                        <div class=\"my-2\">
                                            <p>3 of 20</p>
                                        </div>
                                        <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            <div class=\"progress-bar w-25\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info text-center\">
                                    <div class=\"img-area d-center m-auto mb-3\">
                                        <img src=\"/assets/images/icon/achievements-icon-2.png\" alt=\"image\">
                                    </div>
                                    <div class=\"text-area w-100\">
                                        <h5>Tournaments Joined</h5>
                                        <div class=\"my-2\">
                                            <p>3 of 20</p>
                                        </div>
                                        <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            <div class=\"progress-bar w-25\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info text-center\">
                                    <div class=\"img-area d-center m-auto mb-3\">
                                        <img src=\"/assets/images/icon/achievements-icon-3.png\" alt=\"image\">
                                    </div>
                                    <div class=\"text-area w-100\">
                                        <h5>Tournaments Won</h5>
                                        <div class=\"my-2\">
                                            <p>3 of 20</p>
                                        </div>
                                        <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            <div class=\"progress-bar w-25\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info text-center\">
                                    <div class=\"img-area d-center m-auto mb-3\">
                                        <img src=\"/assets/images/icon/achievements-icon-4.png\" alt=\"image\">
                                    </div>
                                    <div class=\"text-area w-100\">
                                        <h5>Sets of Missions</h5>
                                        <div class=\"my-2\">
                                            <p>3 of 20</p>
                                        </div>
                                        <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            <div class=\"progress-bar w-25\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-md-6\">
                                <div class=\"single-info text-center\">
                                    <div class=\"img-area d-center m-auto mb-3\">
                                        <img src=\"/assets/images/icon/achievements-icon-5.png\" alt=\"image\">
                                    </div>
                                    <div class=\"text-area w-100\">
                                        <h5>Friends Referred</h5>
                                        <div class=\"my-2\">
                                            <p>3 of 20</p>
                                        </div>
                                        <div class=\"progress mt-2 position-relative\" role=\"progressbar\" aria-label=\"Example with label\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                            <div class=\"progress-bar w-25\"></div>
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
    <!-- Gaming top info end -->

    <!-- Match One Popup start -->
    <div class=\"match-one-popup\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"modal cmn-modal fade\" id=\"matchOneMod\">
                        <div class=\"modal-dialog modal-dialog-centered\">
                            <div class=\"modal-content p-0\">
                                <div class=\"modal-header justify-content-center\">
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                                <div class=\"top-content p-5 gap-3 text-center\">
                                    <h2>Match 1</h2>
                                    <span class=\"cmn-btn mt-3 mb-3\">Waiting</span>
                                    <p>Best of 1 game</p>
                                </div>
                                <div class=\"mid-area d-center gap-4\">
                                    <div class=\"player left-player d-flex gap-3 align-items-center\">
                                        <p>To be decided</p>
                                        <div class=\"icon-area d-center\">
                                            <img src=\"/assets/images/icon/participant-icon.png\" alt=\"image\">
                                        </div>
                                    </div>
                                    <p class=\"vs lgtxt\">
                                        <span>0</span>
                                        <span>:</span>
                                        <span>0</span>
                                    </p>
                                    <div class=\"player right-player d-flex gap-3 align-items-center\">
                                        <div class=\"icon-area d-center\">
                                            <img src=\"/assets/images/icon/participant-icon.png\" alt=\"image\">
                                        </div>
                                        <p>To be decided</p> 
                                    </div>
                                </div>
                                <div class=\"tab-area p-4\">
                                    <div class=\"gaming-top-info\">
                                        <ul class=\"nav p-0\" role=\"tablist\">
                                            <li class=\"nav-item\" role=\"presentation\">
                                                <button class=\"nav-link active\" id=\"free-games-tab\" data-bs-toggle=\"tab\"
                                                    data-bs-target=\"#free-games\" type=\"button\" role=\"tab\"
                                                    aria-controls=\"free-games\" aria-selected=\"true\">
                                                    games</button>
                                            </li>
                                            <li class=\"nav-item\" role=\"presentation\">
                                                <button class=\"nav-link\" id=\"lineups-tab\" data-bs-toggle=\"tab\"
                                                    data-bs-target=\"#lineups\" type=\"button\" role=\"tab\"
                                                    aria-controls=\"lineups\" aria-selected=\"false\">lineups</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"tab-content cus-mar mt-4\">
                                        <div class=\"tab-pane fade show active\" id=\"free-games\" role=\"tabpanel\"
                                            aria-labelledby=\"free-games-tab\">
                                            <div class=\"single-box d-center justify-content-between\">
                                                <div class=\"logo-item d-flex gap-3 align-items-center\">
                                                    <div class=\"logo-area\">
                                                        <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"icon\">
                                                    </div>
                                                    <div class=\"info-area\">
                                                        <h6>Leo Castillo</h6>
                                                        <span class=\"mdtxt\">Name</span>
                                                    </div>
                                                </div>
                                                <div class=\"btn-area\">
                                                    <a href=\"javascript:void(0)\" class=\"cmn-btn\">Contact</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane fade\" id=\"lineups\" role=\"tabpanel\"
                                            aria-labelledby=\"lineups-tab\">
                                            <div class=\"single-box d-center justify-content-between\">
                                                <div class=\"logo-item d-flex gap-3 align-items-center\">
                                                    <div class=\"logo-area\">
                                                        <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"icon\">
                                                    </div>
                                                    <div class=\"info-area\">
                                                        <h6>Leo Castillo</h6>
                                                        <span class=\"mdtxt\">Name</span>
                                                    </div>
                                                </div>
                                                <div class=\"btn-area\">
                                                    <div class=\"dropdown-area\">
                                                        <button type=\"button\" id=\"followBtn!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" tabindex=\"0\">
                                                            .....
                                                        </button>
                                                        <ul class=\"dropdown-menu\" aria-labelledby=\"followBtn!\">
                                                            <li><a class=\"dropdown-item\" href=\"javascript:void(0)\" tabindex=\"0\">Following</a></li>
                                                            <li><a class=\"dropdown-item\" href=\"javascript:void(0)\" tabindex=\"0\">Followers</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"single-box d-center justify-content-between\">
                                                <div class=\"logo-item d-flex gap-3 align-items-center\">
                                                    <div class=\"logo-area\">
                                                        <img src=\"/assets/images/leaderboard-img-1.png\" alt=\"icon\">
                                                    </div>
                                                    <div class=\"info-area\">
                                                        <h6>Leo Castillo</h6>
                                                        <span class=\"mdtxt\">Name</span>
                                                    </div>
                                                </div>
                                                <div class=\"btn-area\">
                                                    <div class=\"dropdown-area\">
                                                        <button type=\"button\" id=\"followBtn2!\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" tabindex=\"0\">
                                                            .....
                                                        </button>
                                                        <ul class=\"dropdown-menu\" aria-labelledby=\"followBtn2!\">
                                                            <li><a class=\"dropdown-item\" href=\"javascript:void(0)\" tabindex=\"0\">Following</a></li>
                                                            <li><a class=\"dropdown-item\" href=\"javascript:void(0)\" tabindex=\"0\">Followers</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Match One Popup end -->

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

</html>", "perfil/perfilview.html.twig", "/home/alumno/Symf/symfony-casino/templates/perfil/perfilview.html.twig");
    }
}
