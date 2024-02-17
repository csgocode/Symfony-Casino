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

/* afiliate/index.html.twig */
class __TwigTemplate_e0c1c1c12fe2d3432fde5a80d94aa8e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "afiliate/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "afiliate/index.html.twig"));

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

   ";
        // line 32
        $this->loadTemplate("partials/menu.html.twig", "afiliate/index.html.twig", 32)->display($context);
        // line 33
        echo "
    <!-- inner banner start -->
    <section class=\"banner-section inner-banner account\">
        <div class=\"banner-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"d-flex flex-wrap gap-3 gap-md-0 justify-content-between\">
                            <h6>Hola, ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "nombre", [], "any", false, false, false, 41), "html", null, true);
        echo "</h6>
                            <p>Último inicio de sesión: ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "lastlogin", [], "any", false, false, false, 42), "d-m-Y"), "html", null, true);
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
                            <a href=\"/perfil\" class=\"d-flex gap-2\">
                                <div class=\"icon-box d-center\">
                                    <img src=\"assets/images/icon/dashboard-icon.png\" alt=\"icon\">
                                </div>
                                Panel de control
                            </a>
                            <a href=\"/wallet\" class=\"d-flex gap-2\">
                                <div class=\"icon-box d-center\">
                                    <img src=\"assets/images/icon/wallet-icon.png\" alt=\"icon\">
                                </div>
                                Billetera
                            </a>
                            <a href=\"/afiliados\" class=\"d-flex gap-2 active\">
                                <div class=\"icon-box d-center\">
                                    <img src=\"assets/images/icon/affiliate-icon.png\" alt=\"icon\">
                                </div>
                                Afiliados
                            </a>
                            <div class=\"log-out-area mt-5\">
                                <a href=\"/logout\">
                                    <button class=\"d-flex signup-btn justify-content-center m-auto py-3 gap-2\">
                                        <span class=\"icon-log\">
                                            <img src=\"assets/images/icon/logout-icon.png\" alt=\"icon\">
                                        </span>
                                        Cerrar
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class=\"single-box text-center\">
                            <div class=\"comment-box m-auto d-center\">
                                <img src=\"assets/images/icon/comment-icon2.png\" class=\"max-un\" alt=\"icon\">
                            </div>
                            <h5 class=\"my-3\">¿Necesitas ayuda?</h5>
                            <p>Tenemos un magnífico chat de soporte 24/7 para ayudarte a solucionar los problemas o las dudas relacionadas con Casino Royal.</p>
                            <a href=\"#b_77y70llb_22\" id=\"chat\" class=\"cmn-btn mt-5\">Chatea con Soporte</a>
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <div class=\"single-box\">
                            <div class=\"row gaming-top-info\">
                                <div class=\"col-lg-8 mb-3\">
                                    <div class=\"head-area\">
                                        <h4 class=\"mb-2\">Programa de Afiliados Pro</h4>
                                        <p>¡Consigue un extra mensual con nuestro programa de invitados!</p>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"affiliate-box dots\">
                                        <div class=\"row cus-mar pb-xl-0 pb-4 justify-content-between\">
                                            <div class=\"col-xxl-7 col-xl-6\">
                                                <div class=\"single-input\">
                                                    <label for=\"referral\">Link de invitación</label>
                                                    <div class=\"input-area py-1 d-flex\">
                                                        <input type=\"text\" id=\"referral\" placeholder=\"Link\" disabled value=\"https://casinoroyal.es/register?i=";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 112, $this->source); })()), "username", [], "any", false, false, false, 112), "html", null, true);
        echo "\" autocomplete=\"off\">
                                                        <button class=\"copy-text\">
                                                            <img src=\"/assets/images/icon/copy-icon.png\" class=\"max-un\" alt=\"icon\">
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xxl-4 col-xl-6\">
                                                <span>Compartir</span>
                                                <div class=\"social mt-3\">
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
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-5\">
                                            <div class=\"affiliate-box text-center\">
                                                <div class=\"single-input\">
                                                    <div class=\"icon\">
                                                        <img src=\"/assets/images/icon/earning-icon-1.png\" class=\"max-un\" alt=\"icon\">
                                                    </div>
                                                    <h6 class=\"mt-3 mb-2\">";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 140, $this->source); })()), "dineroafiliados", [], "any", false, false, false, 140), "html", null, true);
        echo " EUR</h6>
                                                    <p class=\"mdtxt\">¡Dinero ganado! </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-7\">
                                            <div class=\"affiliate-box text-center\">
                                                <div class=\"single-input w-xl-75 w-100 m-auto\">
                                                    <div class=\"icon\">
                                                        <img src=\"/assets/images/icon/earning-icon-2.png\" class=\"max-un\" alt=\"icon\">
                                                    </div>
                                                    <h6 class=\"mt-3 mb-2\">¡Cuantos más traigas, más dinero!</h6>
                                                    <p class=\"mdtxt\">Ganarás <span>0,50 EUR</span> por cada amigo que traigas, además del 10% de sus pérdidas en nuestro casino. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"px-4 py-4 transaction-box\">
                                        <div class=\"head-area row gap-3 gap-lg-0 align-items-center justify-content-between\">
                                            <div class=\"col-xl-6 col-md-4 col-sm-3\">
                                                <h6 for=\"referral\">Referral</h6>
                                            </div>
                                            <div class=\"col-xl-5 col-md-7 col-sm-8\">
                                                <div class=\"date-area input-area py-0 d-center\">
                                                    <input id =\"dateStart\" type=\"text\" placeholder=\"dd/m/yyyy\">
                                                    <input id =\"dateEnd\" type=\"text\" placeholder=\"dd/m/yyyy\">
                                                    <div class=\"icon\">
                                                        <img src=\"/assets/images/icon/date-icon.png\" class=\"max-un\" alt=\"icon\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"table-responsive mt-4\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Level</th>
                    <th scope=\"col\">Username</th>
                    <th scope=\"col\">Earned</th>
                    <th scope=\"col\">Email</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["afiliados"]) || array_key_exists("afiliados", $context) ? $context["afiliados"] : (function () { throw new RuntimeError('Variable "afiliados" does not exist.', 184, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["afiliado"]) {
            // line 185
            echo "                    <tr>
                        <th scope=\"row\">
                            <p>";
            // line 187
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["afiliado"], "fechaRegistro", [], "any", false, false, false, 187), "d M"), "html", null, true);
            echo "</p>
                        </th>
                        <td>
                            <p>";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["afiliado"], "level", [], "any", false, false, false, 190), "html", null, true);
            echo "</p>
                        </td>
                        <td>
                            <p>";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["afiliado"], "invitadoUser", [], "any", false, false, false, 193), "username", [], "any", false, false, false, 193), "html", null, true);
            echo "</p>
                        </td>
                        <td>
                            <p>";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["afiliado"], "afiliadoUser", [], "any", false, false, false, 196), "dineroafiliados", [], "any", false, false, false, 196), "html", null, true);
            echo " EUR</p>
                        </td>
                        <td>
                            <p>";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["afiliado"], "invitadoUser", [], "any", false, false, false, 199), "email", [], "any", false, false, false, 199), "html", null, true);
            echo "</p>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['afiliado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "            </tbody>
        </table>
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
   ";
        // line 613
        $this->loadTemplate("partials/footer.html.twig", "afiliate/index.html.twig", 613)->display($context);
        // line 614
        echo "
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
    <script src=\"/assets/js/copyAfi.js\"></script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "afiliate/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  699 => 614,  697 => 613,  285 => 203,  275 => 199,  269 => 196,  263 => 193,  257 => 190,  251 => 187,  247 => 185,  243 => 184,  196 => 140,  165 => 112,  92 => 42,  88 => 41,  78 => 33,  76 => 32,  43 => 1,);
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

   {% include 'partials/menu.html.twig' %}

    <!-- inner banner start -->
    <section class=\"banner-section inner-banner account\">
        <div class=\"banner-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"d-flex flex-wrap gap-3 gap-md-0 justify-content-between\">
                            <h6>Hola, {{user.nombre}}</h6>
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
                            <a href=\"/perfil\" class=\"d-flex gap-2\">
                                <div class=\"icon-box d-center\">
                                    <img src=\"assets/images/icon/dashboard-icon.png\" alt=\"icon\">
                                </div>
                                Panel de control
                            </a>
                            <a href=\"/wallet\" class=\"d-flex gap-2\">
                                <div class=\"icon-box d-center\">
                                    <img src=\"assets/images/icon/wallet-icon.png\" alt=\"icon\">
                                </div>
                                Billetera
                            </a>
                            <a href=\"/afiliados\" class=\"d-flex gap-2 active\">
                                <div class=\"icon-box d-center\">
                                    <img src=\"assets/images/icon/affiliate-icon.png\" alt=\"icon\">
                                </div>
                                Afiliados
                            </a>
                            <div class=\"log-out-area mt-5\">
                                <a href=\"/logout\">
                                    <button class=\"d-flex signup-btn justify-content-center m-auto py-3 gap-2\">
                                        <span class=\"icon-log\">
                                            <img src=\"assets/images/icon/logout-icon.png\" alt=\"icon\">
                                        </span>
                                        Cerrar
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class=\"single-box text-center\">
                            <div class=\"comment-box m-auto d-center\">
                                <img src=\"assets/images/icon/comment-icon2.png\" class=\"max-un\" alt=\"icon\">
                            </div>
                            <h5 class=\"my-3\">¿Necesitas ayuda?</h5>
                            <p>Tenemos un magnífico chat de soporte 24/7 para ayudarte a solucionar los problemas o las dudas relacionadas con Casino Royal.</p>
                            <a href=\"#b_77y70llb_22\" id=\"chat\" class=\"cmn-btn mt-5\">Chatea con Soporte</a>
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <div class=\"single-box\">
                            <div class=\"row gaming-top-info\">
                                <div class=\"col-lg-8 mb-3\">
                                    <div class=\"head-area\">
                                        <h4 class=\"mb-2\">Programa de Afiliados Pro</h4>
                                        <p>¡Consigue un extra mensual con nuestro programa de invitados!</p>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"affiliate-box dots\">
                                        <div class=\"row cus-mar pb-xl-0 pb-4 justify-content-between\">
                                            <div class=\"col-xxl-7 col-xl-6\">
                                                <div class=\"single-input\">
                                                    <label for=\"referral\">Link de invitación</label>
                                                    <div class=\"input-area py-1 d-flex\">
                                                        <input type=\"text\" id=\"referral\" placeholder=\"Link\" disabled value=\"https://casinoroyal.es/register?i={{user.username}}\" autocomplete=\"off\">
                                                        <button class=\"copy-text\">
                                                            <img src=\"/assets/images/icon/copy-icon.png\" class=\"max-un\" alt=\"icon\">
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xxl-4 col-xl-6\">
                                                <span>Compartir</span>
                                                <div class=\"social mt-3\">
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
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-5\">
                                            <div class=\"affiliate-box text-center\">
                                                <div class=\"single-input\">
                                                    <div class=\"icon\">
                                                        <img src=\"/assets/images/icon/earning-icon-1.png\" class=\"max-un\" alt=\"icon\">
                                                    </div>
                                                    <h6 class=\"mt-3 mb-2\">{{user.dineroafiliados}} EUR</h6>
                                                    <p class=\"mdtxt\">¡Dinero ganado! </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-7\">
                                            <div class=\"affiliate-box text-center\">
                                                <div class=\"single-input w-xl-75 w-100 m-auto\">
                                                    <div class=\"icon\">
                                                        <img src=\"/assets/images/icon/earning-icon-2.png\" class=\"max-un\" alt=\"icon\">
                                                    </div>
                                                    <h6 class=\"mt-3 mb-2\">¡Cuantos más traigas, más dinero!</h6>
                                                    <p class=\"mdtxt\">Ganarás <span>0,50 EUR</span> por cada amigo que traigas, además del 10% de sus pérdidas en nuestro casino. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"px-4 py-4 transaction-box\">
                                        <div class=\"head-area row gap-3 gap-lg-0 align-items-center justify-content-between\">
                                            <div class=\"col-xl-6 col-md-4 col-sm-3\">
                                                <h6 for=\"referral\">Referral</h6>
                                            </div>
                                            <div class=\"col-xl-5 col-md-7 col-sm-8\">
                                                <div class=\"date-area input-area py-0 d-center\">
                                                    <input id =\"dateStart\" type=\"text\" placeholder=\"dd/m/yyyy\">
                                                    <input id =\"dateEnd\" type=\"text\" placeholder=\"dd/m/yyyy\">
                                                    <div class=\"icon\">
                                                        <img src=\"/assets/images/icon/date-icon.png\" class=\"max-un\" alt=\"icon\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"table-responsive mt-4\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Level</th>
                    <th scope=\"col\">Username</th>
                    <th scope=\"col\">Earned</th>
                    <th scope=\"col\">Email</th>
                </tr>
            </thead>
            <tbody>
                {% for afiliado in afiliados %}
                    <tr>
                        <th scope=\"row\">
                            <p>{{ afiliado.fechaRegistro|date('d M') }}</p>
                        </th>
                        <td>
                            <p>{{ afiliado.level }}</p>
                        </td>
                        <td>
                            <p>{{ afiliado.invitadoUser.username }}</p>
                        </td>
                        <td>
                            <p>{{ afiliado.afiliadoUser.dineroafiliados }} EUR</p>
                        </td>
                        <td>
                            <p>{{ afiliado.invitadoUser.email }}</p>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
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
   {% include 'partials/footer.html.twig' %}

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
    <script src=\"/assets/js/copyAfi.js\"></script>
</body>

</html>", "afiliate/index.html.twig", "/home/alumno/Symf/CasinoV3/templates/afiliate/index.html.twig");
    }
}
