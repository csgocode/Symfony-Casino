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

/* wallet/index.html.twig */
class __TwigTemplate_6789e8c8bd7eecd5db0e6f5a1c58453b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wallet/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wallet/index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>CasinoRoyal: Tu casino blockchain de confianza</title>

    <link rel=\"shortcut icon\" href=\"assets/images/fav.png\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/fontawesome.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/nice-select.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/slick.css\">
    <link rel=\"stylesheet\" href=\"assets/css/arafat-font.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/animate.css\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
    <script src=\"https://js.stripe.com/v3/\"></script>
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
        $this->loadTemplate("partials/menu.html.twig", "wallet/index.html.twig", 32)->display($context);
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
                            <p>Última sesión: ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "lastLogin", [], "any", false, false, false, 42), "d-m-Y g:sA"), "html", null, true);
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
                            <a href=\"/wallet\" class=\"d-flex gap-2 active\">
                                <div class=\"icon-box d-center\">
                                    <img src=\"assets/images/icon/wallet-icon.png\" alt=\"icon\">
                                </div>
                                Billetera
                            </a>
                            <a href=\"/afiliados\" class=\"d-flex gap-2\">
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
                    <div class=\"elfsight-app-f7b3cf75-7c22-4e77-9a53-dfad5e5ff99f\" data-elfsight-app-lazy></div>
                        <div class=\"single-box\">
                            <div class=\"row gaming-top-info\">
                                <div class=\"col-lg-6 mb-3\">
                                
                                    <div class=\"head-area\">
                                        <h4>Wallet</h4>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <ul class=\"nav mb-sm-4 mb-2 p-0 dashboard-nav border-0\" role=\"tablist\">
                                        <li class=\"nav-item\" role=\"presentation\">
                                            <button class=\"nav-link active\" id=\"deposit-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#deposit\" type=\"button\" role=\"tab\" aria-controls=\"deposit\" aria-selected=\"true\">Depositar</button>
                                        </li>
                                        <li class=\"nav-item\" role=\"presentation\">
                                            <button class=\"nav-link\" id=\"withdraw-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#withdraw\" type=\"button\" role=\"tab\" aria-controls=\"withdraw\" aria-selected=\"false\">Retirar</button>
                                        </li>
                                        <li class=\"nav-item\" role=\"presentation\">
                                            <button class=\"nav-link\" id=\"transaction-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#transaction\" type=\"button\" role=\"tab\" aria-controls=\"transaction\" aria-selected=\"false\">Transacciones</button>
                                        </li>
                                    </ul>
                                    <div class=\"tab-content p-0\">
                                        <div class=\"tab-pane fade active show\" id=\"deposit\" role=\"tabpanel\" aria-labelledby=\"deposit-tab\">
                                            <div class=\"deposit-box\">
                                                <div class=\"banalce-box\">
                                                    <div class=\"banalce-head px-3 d-center justify-content-between\">
                                                        <h6>Balance</h6>
                                                        <div class=\"right d-center gap-2\">
                                                            <h6>";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "dinero", [], "any", false, false, false, 125), "html", null, true);
        echo "€</h6>
                                                            <select>
                                                                <option value=\"0\">EUR</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-area px-3 py-3 d-flex flex-wrap\">
                                                       
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"dcardSelect\" id=\"dmastercard\">
                                                            <label for=\"dmastercard\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-2.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                        
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"dcardSelect\" id=\"dbitcoin\">
                                                            <label for=\"dbitcoin\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-5.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"dcardSelect\" id=\"dlitecoin\">
                                                            <label for=\"dlitecoin\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-6.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"dcardSelect\" id=\"deth\">
                                                            <label for=\"deth\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-7.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"dcardSelect\" id=\"dripple\">
                                                            <label for=\"dripple\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-8.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"pay-details pt-4\">
                                                    <h6>Sistema de pagos (0,50 EUR comisión)</h6>
                                                    <h6 class=\"d-flex flex-wrap gap-3 gap-sm-2 mt-3 mb-3\">Depositar cantdad <span class=\"mdtxt\">Instantáneo | Mínimo: 5 EUR • Máximo: 6.000 EUR</span></h6>
                                                    <ul class=\"quick-value d-flex gap-2 mb-3\">
                                                        <li><h5>20</h5></li>
                                                        <li><h5 class=\"active\">50</h5></li>
                                                        <li><h5>100</h5></li>
                                                        <li><h5>500</h5></li>
                                                        <li><h5>2000</h5></li>
                                                    </ul>
                                                   <form action=\"";
        // line 181
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recarga_procesar");
        echo "\" method=\"POST\" id=\"depositForm\">
                                                        <div class=\"col-12\">
                                                            <div class=\"single-input\">
                                                                <label for=\"dAmount\">Depositar cantidad - <span id=\"rangeValue\">20</span> EUR</label>
                                                               <div class=\"range-slider\">
    <input type=\"range\" name=\"amount\" id=\"dAmount\" min=\"5\" max=\"6000\" value=\"20\" class=\"multirange\" data-drag-middle=\"true\">
</div>
  </div>
                                                             <div class=\"single-input\">
                                                                <label for=\"email\">Email</label>
                                                                <input type=\"text\" id=\"email\" placeholder=\"";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 191, $this->source); })()), "email", [], "any", false, false, false, 191), "html", null, true);
        echo "\" readonly=\"readonly\" autocomplete=\"off\">
                                                            </div>
                                                            <div class=\"btn-area text-center mt-3\">
                                                                <button type=\"submit\" class=\"cmn-btn d-center w-100\">Depositar</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane fade\" id=\"withdraw\" role=\"tabpanel\" aria-labelledby=\"withdraw-tab\">
                                            <div class=\"deposit-box\">
                                                <div class=\"banalce-box\">
                                                    <div class=\"banalce-head px-3 d-center justify-content-between\">
                                                        <h6>Balance</h6>
                                                        <div class=\"right d-center gap-2\">
                                                            <h6>";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 207, $this->source); })()), "dinero", [], "any", false, false, false, 207), "html", null, true);
        echo "</h6>
                                                            <select>
                                                                <option value=\"0\">EUR</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-area px-3 py-3 d-flex flex-wrap\">
                                                      
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" checked=\"checked\" name=\"cardSelect\" id=\"mastercard\">
                                                            <label for=\"mastercard\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-2.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"cardSelect\" id=\"bitcoin\">
                                                            <label for=\"bitcoin\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-5.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"cardSelect\" id=\"litecoin\">
                                                            <label for=\"litecoin\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-6.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"cardSelect\" id=\"eth\">
                                                            <label for=\"eth\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-7.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"cardSelect\" id=\"ripple\">
                                                            <label for=\"ripple\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-8.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"pay-details pt-4\">
                                                    <h6>Sistema de pagos - Casino Royal</h6>
                                                    <h6 class=\"d-flex flex-wrap gap-3 gap-sm-2 mt-3 mb-3\">Retirar cantidad<span class=\"mdtxt\">| Instantáneo - SEPA o retiro directo a tarjeta</span></h6>
                                                    <ul class=\"quick-value d-flex gap-2 mb-3\">
                                                        <li><h5>10</h5></li>
                                                        <li><h5 class=\"active\">20</h5></li>
                                                        <li><h5>30</h5></li>
                                                        <li><h5>40</h5></li>
                                                        <li><h5>50</h5></li>
                                                    </ul>
                                                    <form action=\"#\">
                                                        <div class=\"col-12\">
                                                            <div class=\"single-input\">
                                                                <label for=\"amount\">Withdraw amount</label>
                                                                <input type=\"text\" id=\"amount\" placeholder=\"Enter Amount\" value=\"\" autocomplete=\"off\">
                                                            </div>
                                                            <div class=\"single-input\">
                                                                <label for=\"email\">Email</label>
                                                                <input type=\"text\" id=\"email\" placeholder=\"";
        // line 271
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 271, $this->source); })()), "email", [], "any", false, false, false, 271), "html", null, true);
        echo "\" readonly=\"readonly\" autocomplete=\"off\">
                                                            </div>
                                                            <div class=\"btn-area text-center mt-3\">
                                                                <button class=\"cmn-btn d-center w-100\">Withdraw</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane fade\" id=\"transaction\" role=\"tabpanel\" aria-labelledby=\"transaction-tab\">
                                            <div class=\"transaction-box px-3 py-3\">
                                                <div class=\"top-filter d-flex gap-3 align-items-end\">
                                                    <div class=\"single-filter\">
                                                        <p>Fecha mes/año</p>
                                                        <input type=\"text\" placeholder=\"05/2023\">
                                                    </div>
                                                    <div class=\"single-filter\">
                                                        <p>Tipo</p>
                                                        <select>
                                                            <option value=\"0\">Todas</option>
                                                            <option value=\"1\">Depósito</option>
                                                            <option value=\"2\">Retirada</option>
                                                        </select><div class=\"nice-select\" tabindex=\"0\"><span class=\"current\">Todas</span><ul class=\"list\"><li data-value=\"0\" class=\"option selected\">Todas</li><li data-value=\"1\" class=\"option\">Depósito</li><li data-value=\"2\" class=\"option\">Retirada</li></ul></div>
                                                    </div>
                                                    <div class=\"single-filter\">
                                                        <p>Transacciones</p>
                                                        <select>
                                                            <option value=\"0\">Todas</option>
                                                            <option value=\"1\">Completadas</option>
                                                            <option value=\"2\">No Completadas</option>
                                                        </select><div class=\"nice-select\" tabindex=\"0\"><span class=\"current\">Todas</span><ul class=\"list\"><li data-value=\"0\" class=\"option selected\">Todas</li><li data-value=\"1\" class=\"option\">Completadas</li><li data-value=\"2\" class=\"option\">No Completadas</li></ul></div>
                                                    </div>
                                                    <div class=\"single-btn\">
                                                        <button class=\"cmn-btn\">Filtrar</button>
                                                    </div>
                                                </div>
                                               <div class=\"table-responsive mt-4\">
                                                    <table class=\"table\">
                                                        <thead>
                                                            <tr>
                                                                <th scope=\"col\">Fecha transacción</th>
                                                                <th scope=\"col\">Tipo</th>
                                                                <th scope=\"col\">Moneda</th>
                                                                <th scope=\"col\">Cantidad</th>
                                                                <th scope=\"col\">Autorización</th>
                                                                <th scope=\"col\">Estado</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            ";
        // line 321
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transacciones"]) || array_key_exists("transacciones", $context) ? $context["transacciones"] : (function () { throw new RuntimeError('Variable "transacciones" does not exist.', 321, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["transaccion"]) {
            // line 322
            echo "                                                                <tr>
                                                                    <td style=\"color: white; font-weight: bold;\">";
            // line 323
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaccion"], "FechaInicio", [], "any", false, false, false, 323), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                                                                    <td style=\"color: white; font-weight: bold;\">";
            // line 324
            echo (((twig_get_attribute($this->env, $this->source, $context["transaccion"], "Tipo", [], "any", false, false, false, 324) == 1)) ? ("Depósito") : ((((twig_get_attribute($this->env, $this->source, $context["transaccion"], "Tipo", [], "any", false, false, false, 324) == 2)) ? ("Retirada") : ("Referido"))));
            echo "</td>
                                                                    <td style=\"color: white; font-weight: bold;\">EUR</td>
                                                                    <td style=\"color: white; font-weight: bold;\">";
            // line 326
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaccion"], "CantidadEUR", [], "any", false, false, false, 326), "html", null, true);
            echo "</td>
                                                                    <td style=\"color: white; font-weight: bold;\">";
            // line 327
            echo ((twig_get_attribute($this->env, $this->source, $context["transaccion"], "Autorizacion", [], "any", false, false, false, 327)) ? ("Autorizada") : ("En espera"));
            echo "</td>
                                                                    <td style=\"color: white; font-weight: bold;\">";
            // line 328
            echo ((twig_get_attribute($this->env, $this->source, $context["transaccion"], "Completada", [], "any", false, false, false, 328)) ? ("Completada") : ("En espera"));
            echo "</td>
                                                                    
                                                                </tr>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 332
        echo "                                                        </tbody>
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
            </div>
        </div>
    </section>
    <!-- Account Section end -->

    <!-- Bottom Menu area start -->
    <div class=\"header-menu d-block d-lg-none position-fixed bottom-0 w-100 z-1\">
        <div class=\"right-area position-relative px-2 px-sm-5 py-2 d-flex gap-3 gap-xxl-5 justify-content-between align-items-center\">
            <div class=\"single-item shop-cart-area\">
                <div class=\"shop-cart-btn cmn-head dot\">
                    <img src=\"assets/images/icon/cart-icon.png\" class=\"cart-icon max-un\" alt=\"icon\">
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
                                    <img src=\"assets/images/products-image-9.png\" class=\"max-un\" alt=\"image\">
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
                                    <img src=\"assets/images/products-image-10.png\" class=\"max-un\" alt=\"image\">
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
                                    <img src=\"assets/images/products-image-11.png\" class=\"max-un\" alt=\"image\">
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
                    <img src=\"assets/images/icon/chat-icon.png\" class=\"chat-icon max-un\" alt=\"icon\">
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
                                        <img src=\"assets/images/icon/search-icon.png\" alt=\"icon\">
                                    </div>
                                </form>
                            </div>
                            <ul>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-1.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status orange\"></span>
                                            offline
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-2.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-3.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status orange\"></span>
                                            offline
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-4.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-5.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status orange\"></span>
                                            offline
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-6.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-7.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-8.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-9.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-10.png\" alt=\"image\">
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
                                <img src=\"assets/images/leaderboard-img-1.png\" alt=\"image\">
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
                                            <img src=\"assets/images/icon/upload-img.png\" alt=\"icon\">
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
                    <img src=\"assets/images/icon/nofify-icon.png\" class=\"bell-icon max-un\" alt=\"icon\">
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
                                    <img src=\"assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
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
                                    <img src=\"assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
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
                                    <img src=\"assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
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
                        <img src=\"assets/images/leaderboard-img-1.png\" alt=\"User\">
                        <i class=\"icon-d-arrow-thin\"></i>
                    </span>
                </div>
                <div class=\"main-area user-content\">
                    <div class=\"head-area py-4 text-center\">
                        <h5>Hola,</h5>
                        <p class=\"email-id\">";
        // line 686
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 686, $this->source); })()), "email", [], "any", false, false, false, 686), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"cash-top\">
                        <div class=\"cash-point d-flex gap-3 align-items-center\">
                            <div class=\"img-area d-center\">
                                <img src=\"assets/images/icon/cash-icon.png\" alt=\"icon\">
                            </div>
                            <div class=\"info-area\">
                                <h5>";
        // line 694
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 694, $this->source); })()), "dinero", [], "any", false, false, false, 694), "html", null, true);
        echo " EUR</h5>
                                <span>Balance</span>
                            </div>
                        </div>
                        <div class=\"cash-point\">
                            <div class=\"d-flex justify-content-between\">
                                <div class=\"d-flex gap-3\">
                                    <div class=\"img-area d-center\">
                                        <img src=\"assets/images/icon/cash-icon.png\" alt=\"icon\">
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
                                    <img src=\"assets/images/icon/user-6.png\" alt=\"icon\">
                                </span>
                                <span>Mi cuenta</span>
                            </div>
                            <div class=\"icon-arrow d-center\">
                                <i class=\"icon-c-arrow-single\"></i>
                            </div>
                        </a>
                        <div class=\"btn-area mt-5 d-flex gap-4\">
                            <a href=\"javascript:void(0)\" class=\"cmn-btn\">Depositar</a>
                            <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">Retirar</a>
                        </div>
                    </div>
                    <div class=\"bottom-area\">
                        <a href=\"/logout\" class=\"d-flex justify-content-center py-3 gap-2\">
                            <div class=\"icon-log\">
                                <img src=\"assets/images/icon/logout-icon.png\" alt=\"icon\">
                            </div>
                            Cerrar sesión
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Menu area end -->

   ";
        // line 746
        $this->loadTemplate("partials/footer.html.twig", "wallet/index.html.twig", 746)->display($context);
        // line 747
        echo "    <!-- Start of LiveAgent integration script: Chat button: Botón burbuja 84 -->
<script type=\"text/javascript\">
(function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.defer=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document,
'https://casinoroyal.ladesk.com/scripts/track.js',
function(e){ LiveAgent.createButton('77y70llb', e); });
</script>
<!-- End of LiveAgent integration script -->

    <!--==================================================================-->
    <script src=\"assets/js/jquery.min.js\"></script>
    <script src=\"assets/js/jquery-ui.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/plugin/jquery.downCount.js\"></script>
    <script src=\"assets/js/plugin/slick.js\"></script>
    <script src=\"assets/js/plugin/jquery.nice-select.min.js\"></script>
    <script src=\"assets/js/plugin/apexcharts.js\"></script>
    <script src=\"assets/js/plugin/waypoint.min.js\"></script>
    <script src=\"assets/js/plugin/jquery.magnific-popup.min.js\"></script>
    <script src=\"assets/js/plugin/wow.min.js\"></script>
    <script src=\"assets/js/plugin/plugin.js\"></script>
    <script src=\"assets/js/main.js\"></script>
    <script src=\"assets/js/procesarPagos.js\"></script>
    <script src=\"assets/js/jQueryRange.js\"></script>
    <script src=\"assets/js/RangeConfigurar.js\"></script>
    <script src=\"assets/js/botonesLiveChat.js\"></script>
    <script src=\"https://static.elfsight.com/platform/platform.js\" data-use-service-core defer></script>


</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wallet/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  847 => 747,  845 => 746,  790 => 694,  779 => 686,  423 => 332,  413 => 328,  409 => 327,  405 => 326,  400 => 324,  396 => 323,  393 => 322,  389 => 321,  336 => 271,  269 => 207,  250 => 191,  237 => 181,  178 => 125,  92 => 42,  88 => 41,  78 => 33,  76 => 32,  43 => 1,);
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

    <link rel=\"shortcut icon\" href=\"assets/images/fav.png\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/fontawesome.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/nice-select.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/slick.css\">
    <link rel=\"stylesheet\" href=\"assets/css/arafat-font.css\">
    <link rel=\"stylesheet\" href=\"assets/css/plugin/animate.css\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
    <script src=\"https://js.stripe.com/v3/\"></script>
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
                            <p>Última sesión: {{user.lastLogin|date('d-m-Y g:sA')}}</p>
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
                            <a href=\"/wallet\" class=\"d-flex gap-2 active\">
                                <div class=\"icon-box d-center\">
                                    <img src=\"assets/images/icon/wallet-icon.png\" alt=\"icon\">
                                </div>
                                Billetera
                            </a>
                            <a href=\"/afiliados\" class=\"d-flex gap-2\">
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
                    <div class=\"elfsight-app-f7b3cf75-7c22-4e77-9a53-dfad5e5ff99f\" data-elfsight-app-lazy></div>
                        <div class=\"single-box\">
                            <div class=\"row gaming-top-info\">
                                <div class=\"col-lg-6 mb-3\">
                                
                                    <div class=\"head-area\">
                                        <h4>Wallet</h4>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <ul class=\"nav mb-sm-4 mb-2 p-0 dashboard-nav border-0\" role=\"tablist\">
                                        <li class=\"nav-item\" role=\"presentation\">
                                            <button class=\"nav-link active\" id=\"deposit-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#deposit\" type=\"button\" role=\"tab\" aria-controls=\"deposit\" aria-selected=\"true\">Depositar</button>
                                        </li>
                                        <li class=\"nav-item\" role=\"presentation\">
                                            <button class=\"nav-link\" id=\"withdraw-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#withdraw\" type=\"button\" role=\"tab\" aria-controls=\"withdraw\" aria-selected=\"false\">Retirar</button>
                                        </li>
                                        <li class=\"nav-item\" role=\"presentation\">
                                            <button class=\"nav-link\" id=\"transaction-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#transaction\" type=\"button\" role=\"tab\" aria-controls=\"transaction\" aria-selected=\"false\">Transacciones</button>
                                        </li>
                                    </ul>
                                    <div class=\"tab-content p-0\">
                                        <div class=\"tab-pane fade active show\" id=\"deposit\" role=\"tabpanel\" aria-labelledby=\"deposit-tab\">
                                            <div class=\"deposit-box\">
                                                <div class=\"banalce-box\">
                                                    <div class=\"banalce-head px-3 d-center justify-content-between\">
                                                        <h6>Balance</h6>
                                                        <div class=\"right d-center gap-2\">
                                                            <h6>{{user.dinero}}€</h6>
                                                            <select>
                                                                <option value=\"0\">EUR</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-area px-3 py-3 d-flex flex-wrap\">
                                                       
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"dcardSelect\" id=\"dmastercard\">
                                                            <label for=\"dmastercard\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-2.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                        
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"dcardSelect\" id=\"dbitcoin\">
                                                            <label for=\"dbitcoin\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-5.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"dcardSelect\" id=\"dlitecoin\">
                                                            <label for=\"dlitecoin\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-6.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"dcardSelect\" id=\"deth\">
                                                            <label for=\"deth\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-7.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"dcardSelect\" id=\"dripple\">
                                                            <label for=\"dripple\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-8.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"pay-details pt-4\">
                                                    <h6>Sistema de pagos (0,50 EUR comisión)</h6>
                                                    <h6 class=\"d-flex flex-wrap gap-3 gap-sm-2 mt-3 mb-3\">Depositar cantdad <span class=\"mdtxt\">Instantáneo | Mínimo: 5 EUR • Máximo: 6.000 EUR</span></h6>
                                                    <ul class=\"quick-value d-flex gap-2 mb-3\">
                                                        <li><h5>20</h5></li>
                                                        <li><h5 class=\"active\">50</h5></li>
                                                        <li><h5>100</h5></li>
                                                        <li><h5>500</h5></li>
                                                        <li><h5>2000</h5></li>
                                                    </ul>
                                                   <form action=\"{{ path('recarga_procesar') }}\" method=\"POST\" id=\"depositForm\">
                                                        <div class=\"col-12\">
                                                            <div class=\"single-input\">
                                                                <label for=\"dAmount\">Depositar cantidad - <span id=\"rangeValue\">20</span> EUR</label>
                                                               <div class=\"range-slider\">
    <input type=\"range\" name=\"amount\" id=\"dAmount\" min=\"5\" max=\"6000\" value=\"20\" class=\"multirange\" data-drag-middle=\"true\">
</div>
  </div>
                                                             <div class=\"single-input\">
                                                                <label for=\"email\">Email</label>
                                                                <input type=\"text\" id=\"email\" placeholder=\"{{user.email}}\" readonly=\"readonly\" autocomplete=\"off\">
                                                            </div>
                                                            <div class=\"btn-area text-center mt-3\">
                                                                <button type=\"submit\" class=\"cmn-btn d-center w-100\">Depositar</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane fade\" id=\"withdraw\" role=\"tabpanel\" aria-labelledby=\"withdraw-tab\">
                                            <div class=\"deposit-box\">
                                                <div class=\"banalce-box\">
                                                    <div class=\"banalce-head px-3 d-center justify-content-between\">
                                                        <h6>Balance</h6>
                                                        <div class=\"right d-center gap-2\">
                                                            <h6>{{user.dinero}}</h6>
                                                            <select>
                                                                <option value=\"0\">EUR</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-area px-3 py-3 d-flex flex-wrap\">
                                                      
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" checked=\"checked\" name=\"cardSelect\" id=\"mastercard\">
                                                            <label for=\"mastercard\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-2.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"cardSelect\" id=\"bitcoin\">
                                                            <label for=\"bitcoin\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-5.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"cardSelect\" id=\"litecoin\">
                                                            <label for=\"litecoin\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-6.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"cardSelect\" id=\"eth\">
                                                            <label for=\"eth\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-7.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                        <div class=\"single-card\">
                                                            <input type=\"radio\" name=\"cardSelect\" id=\"ripple\">
                                                            <label for=\"ripple\">
                                                                <span class=\"wrapper\"></span>
                                                                <img src=\"assets/images/paymsystem-8.png\" alt=\"image\">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"pay-details pt-4\">
                                                    <h6>Sistema de pagos - Casino Royal</h6>
                                                    <h6 class=\"d-flex flex-wrap gap-3 gap-sm-2 mt-3 mb-3\">Retirar cantidad<span class=\"mdtxt\">| Instantáneo - SEPA o retiro directo a tarjeta</span></h6>
                                                    <ul class=\"quick-value d-flex gap-2 mb-3\">
                                                        <li><h5>10</h5></li>
                                                        <li><h5 class=\"active\">20</h5></li>
                                                        <li><h5>30</h5></li>
                                                        <li><h5>40</h5></li>
                                                        <li><h5>50</h5></li>
                                                    </ul>
                                                    <form action=\"#\">
                                                        <div class=\"col-12\">
                                                            <div class=\"single-input\">
                                                                <label for=\"amount\">Withdraw amount</label>
                                                                <input type=\"text\" id=\"amount\" placeholder=\"Enter Amount\" value=\"\" autocomplete=\"off\">
                                                            </div>
                                                            <div class=\"single-input\">
                                                                <label for=\"email\">Email</label>
                                                                <input type=\"text\" id=\"email\" placeholder=\"{{user.email}}\" readonly=\"readonly\" autocomplete=\"off\">
                                                            </div>
                                                            <div class=\"btn-area text-center mt-3\">
                                                                <button class=\"cmn-btn d-center w-100\">Withdraw</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane fade\" id=\"transaction\" role=\"tabpanel\" aria-labelledby=\"transaction-tab\">
                                            <div class=\"transaction-box px-3 py-3\">
                                                <div class=\"top-filter d-flex gap-3 align-items-end\">
                                                    <div class=\"single-filter\">
                                                        <p>Fecha mes/año</p>
                                                        <input type=\"text\" placeholder=\"05/2023\">
                                                    </div>
                                                    <div class=\"single-filter\">
                                                        <p>Tipo</p>
                                                        <select>
                                                            <option value=\"0\">Todas</option>
                                                            <option value=\"1\">Depósito</option>
                                                            <option value=\"2\">Retirada</option>
                                                        </select><div class=\"nice-select\" tabindex=\"0\"><span class=\"current\">Todas</span><ul class=\"list\"><li data-value=\"0\" class=\"option selected\">Todas</li><li data-value=\"1\" class=\"option\">Depósito</li><li data-value=\"2\" class=\"option\">Retirada</li></ul></div>
                                                    </div>
                                                    <div class=\"single-filter\">
                                                        <p>Transacciones</p>
                                                        <select>
                                                            <option value=\"0\">Todas</option>
                                                            <option value=\"1\">Completadas</option>
                                                            <option value=\"2\">No Completadas</option>
                                                        </select><div class=\"nice-select\" tabindex=\"0\"><span class=\"current\">Todas</span><ul class=\"list\"><li data-value=\"0\" class=\"option selected\">Todas</li><li data-value=\"1\" class=\"option\">Completadas</li><li data-value=\"2\" class=\"option\">No Completadas</li></ul></div>
                                                    </div>
                                                    <div class=\"single-btn\">
                                                        <button class=\"cmn-btn\">Filtrar</button>
                                                    </div>
                                                </div>
                                               <div class=\"table-responsive mt-4\">
                                                    <table class=\"table\">
                                                        <thead>
                                                            <tr>
                                                                <th scope=\"col\">Fecha transacción</th>
                                                                <th scope=\"col\">Tipo</th>
                                                                <th scope=\"col\">Moneda</th>
                                                                <th scope=\"col\">Cantidad</th>
                                                                <th scope=\"col\">Autorización</th>
                                                                <th scope=\"col\">Estado</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            {% for transaccion in transacciones %}
                                                                <tr>
                                                                    <td style=\"color: white; font-weight: bold;\">{{ transaccion.FechaInicio|date('Y-m-d H:i:s') }}</td>
                                                                    <td style=\"color: white; font-weight: bold;\">{{ transaccion.Tipo == 1 ? 'Depósito' : (transaccion.Tipo == 2 ? 'Retirada' : 'Referido') }}</td>
                                                                    <td style=\"color: white; font-weight: bold;\">EUR</td>
                                                                    <td style=\"color: white; font-weight: bold;\">{{ transaccion.CantidadEUR }}</td>
                                                                    <td style=\"color: white; font-weight: bold;\">{{ transaccion.Autorizacion ? 'Autorizada' : 'En espera' }}</td>
                                                                    <td style=\"color: white; font-weight: bold;\">{{ transaccion.Completada ? 'Completada' : 'En espera' }}</td>
                                                                    
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
            </div>
        </div>
    </section>
    <!-- Account Section end -->

    <!-- Bottom Menu area start -->
    <div class=\"header-menu d-block d-lg-none position-fixed bottom-0 w-100 z-1\">
        <div class=\"right-area position-relative px-2 px-sm-5 py-2 d-flex gap-3 gap-xxl-5 justify-content-between align-items-center\">
            <div class=\"single-item shop-cart-area\">
                <div class=\"shop-cart-btn cmn-head dot\">
                    <img src=\"assets/images/icon/cart-icon.png\" class=\"cart-icon max-un\" alt=\"icon\">
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
                                    <img src=\"assets/images/products-image-9.png\" class=\"max-un\" alt=\"image\">
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
                                    <img src=\"assets/images/products-image-10.png\" class=\"max-un\" alt=\"image\">
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
                                    <img src=\"assets/images/products-image-11.png\" class=\"max-un\" alt=\"image\">
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
                    <img src=\"assets/images/icon/chat-icon.png\" class=\"chat-icon max-un\" alt=\"icon\">
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
                                        <img src=\"assets/images/icon/search-icon.png\" alt=\"icon\">
                                    </div>
                                </form>
                            </div>
                            <ul>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-1.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status orange\"></span>
                                            offline
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-2.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-3.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status orange\"></span>
                                            offline
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-4.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-5.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status orange\"></span>
                                            offline
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-6.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-7.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-8.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-9.png\" alt=\"image\">
                                    <div>
                                        <h6>Prénom Nom</h6>
                                        <p>
                                            <span class=\"status green\"></span>
                                            online
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src=\"assets/images/leaderboard-img-10.png\" alt=\"image\">
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
                                <img src=\"assets/images/leaderboard-img-1.png\" alt=\"image\">
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
                                            <img src=\"assets/images/icon/upload-img.png\" alt=\"icon\">
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
                    <img src=\"assets/images/icon/nofify-icon.png\" class=\"bell-icon max-un\" alt=\"icon\">
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
                                    <img src=\"assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
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
                                    <img src=\"assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
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
                                    <img src=\"assets/images/leaderboard-img-1.png\" class=\"max-un\" alt=\"image\">
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
                        <img src=\"assets/images/leaderboard-img-1.png\" alt=\"User\">
                        <i class=\"icon-d-arrow-thin\"></i>
                    </span>
                </div>
                <div class=\"main-area user-content\">
                    <div class=\"head-area py-4 text-center\">
                        <h5>Hola,</h5>
                        <p class=\"email-id\">{{user.email}}</p>
                    </div>
                    <div class=\"cash-top\">
                        <div class=\"cash-point d-flex gap-3 align-items-center\">
                            <div class=\"img-area d-center\">
                                <img src=\"assets/images/icon/cash-icon.png\" alt=\"icon\">
                            </div>
                            <div class=\"info-area\">
                                <h5>{{user.dinero}} EUR</h5>
                                <span>Balance</span>
                            </div>
                        </div>
                        <div class=\"cash-point\">
                            <div class=\"d-flex justify-content-between\">
                                <div class=\"d-flex gap-3\">
                                    <div class=\"img-area d-center\">
                                        <img src=\"assets/images/icon/cash-icon.png\" alt=\"icon\">
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
                                    <img src=\"assets/images/icon/user-6.png\" alt=\"icon\">
                                </span>
                                <span>Mi cuenta</span>
                            </div>
                            <div class=\"icon-arrow d-center\">
                                <i class=\"icon-c-arrow-single\"></i>
                            </div>
                        </a>
                        <div class=\"btn-area mt-5 d-flex gap-4\">
                            <a href=\"javascript:void(0)\" class=\"cmn-btn\">Depositar</a>
                            <a href=\"javascript:void(0)\" class=\"cmn-btn alt\">Retirar</a>
                        </div>
                    </div>
                    <div class=\"bottom-area\">
                        <a href=\"/logout\" class=\"d-flex justify-content-center py-3 gap-2\">
                            <div class=\"icon-log\">
                                <img src=\"assets/images/icon/logout-icon.png\" alt=\"icon\">
                            </div>
                            Cerrar sesión
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Menu area end -->

   {% include 'partials/footer.html.twig' %}
    <!-- Start of LiveAgent integration script: Chat button: Botón burbuja 84 -->
<script type=\"text/javascript\">
(function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.defer=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document,
'https://casinoroyal.ladesk.com/scripts/track.js',
function(e){ LiveAgent.createButton('77y70llb', e); });
</script>
<!-- End of LiveAgent integration script -->

    <!--==================================================================-->
    <script src=\"assets/js/jquery.min.js\"></script>
    <script src=\"assets/js/jquery-ui.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/plugin/jquery.downCount.js\"></script>
    <script src=\"assets/js/plugin/slick.js\"></script>
    <script src=\"assets/js/plugin/jquery.nice-select.min.js\"></script>
    <script src=\"assets/js/plugin/apexcharts.js\"></script>
    <script src=\"assets/js/plugin/waypoint.min.js\"></script>
    <script src=\"assets/js/plugin/jquery.magnific-popup.min.js\"></script>
    <script src=\"assets/js/plugin/wow.min.js\"></script>
    <script src=\"assets/js/plugin/plugin.js\"></script>
    <script src=\"assets/js/main.js\"></script>
    <script src=\"assets/js/procesarPagos.js\"></script>
    <script src=\"assets/js/jQueryRange.js\"></script>
    <script src=\"assets/js/RangeConfigurar.js\"></script>
    <script src=\"assets/js/botonesLiveChat.js\"></script>
    <script src=\"https://static.elfsight.com/platform/platform.js\" data-use-service-core defer></script>


</body>

</html>", "wallet/index.html.twig", "/home/alumno/Symf/CasinoV3/templates/wallet/index.html.twig");
    }
}
