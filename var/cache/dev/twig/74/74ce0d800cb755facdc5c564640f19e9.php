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

/* funciones/login.html.twig */
class __TwigTemplate_631b7d5fae5fef8bf61791486410cb0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "funciones/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "funciones/login.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Dooplo - Gaming HTML Template</title>

    <link rel=\"shortcut icon\" href=\"../../assets/images/fav.png\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"../../assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/fontawesome.min.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/plugin/nice-select.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/plugin/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/plugin/slick.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/plugin/odometer.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/arafat-font.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/plugin/animate.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/style.css\">
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

    <!-- Info Area Start -->
    <section class=\"info-section mt-60\">
        <div class=\"container pt-120\">
            <div class=\"row justify-content-between\">
                <div class=\"col-xl-6 col-lg-6\">
                    <div class=\"section-text\">
                        <h3 class=\"mb-3\">Toni Casino</h3>
                        <p>¡Multiplica tu dinero! El truco está en depositar todo tu dinero en nuestro casino.</p>
                    </div>
                    <div class=\"dooplo-info cus-mar\">
                        <div class=\"single-box d-flex gap-3 align-items-center\">
                        </div>
                        <div class=\"single-box d-flex gap-3 align-items-center\">
                        </div>
                
                    </div>
                </div>
                <div class=\"col-xl-5 col-lg-6 mt-5 mt-lg-0\">
                    <div class=\"form-content\">
                        ";
        // line 209
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 209, $this->source); })()), 'form');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Info Area end -->

    <!-- FAQs In start -->
    <section class=\"faqs-section signup-signin\">
        <div class=\"overlay pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"section-header text-center\">
                            <h2 class=\"title\">Frequently Asked Questions</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-xl-8\">
                        <div class=\"faq-box\">
                            <div class=\"accordion\" id=\"accordionExample\">
                                <div class=\"accordion-item\">
                                    <h5 class=\"accordion-header\" id=\"headingTwo\">
                                        <button class=\"accordion-button collapsed\" type=\"button\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\"
                                            aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                            Waht is Dooplo?
                                        </button>
                                    </h5>
                                    <div id=\"collapseTwo\" class=\"accordion-collapse collapse\"
                                        aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h5 class=\"accordion-header\" id=\"headingThree\">
                                        <button class=\"accordion-button collapsed\" type=\"button\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\"
                                            aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                            Is it free to sign up?
                                        </button>
                                    </h5>
                                    <div id=\"collapseThree\" class=\"accordion-collapse collapse\"
                                        aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h5 class=\"accordion-header\" id=\"headingFour\">
                                        <button class=\"accordion-button collapsed\" type=\"button\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFour\"
                                            aria-expanded=\"false\" aria-controls=\"collapseFour\">
                                            Can I create more than one account?
                                        </button>
                                    </h5>
                                    <div id=\"collapseFour\" class=\"accordion-collapse collapse\"
                                        aria-labelledby=\"headingFour\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h5 class=\"accordion-header\" id=\"headingFive\">
                                        <button class=\"accordion-button collapsed\" type=\"button\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFive\"
                                            aria-expanded=\"false\" aria-controls=\"collapseFive\">
                                            How old must I be?
                                        </button>
                                    </h5>
                                    <div id=\"collapseFive\" class=\"accordion-collapse collapse\"
                                        aria-labelledby=\"headingFive\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h5 class=\"accordion-header\" id=\"headingsix\">
                                        <button class=\"accordion-button collapsed\" type=\"button\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#collapsesix\"
                                            aria-expanded=\"false\" aria-controls=\"collapsesix\">
                                            Is Dooplo Legal?
                                        </button>
                                    </h5>
                                    <div id=\"collapsesix\" class=\"accordion-collapse collapse\"
                                        aria-labelledby=\"headingsix\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
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
    <!-- FAQs In end -->

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
    <script src=\"../../assets/js/jquery.min.js\"></script>
    <script src=\"../../assets/js/jquery-ui.js\"></script>
    <script src=\"../../assets/js/bootstrap.min.js\"></script>
    <script src=\"../../assets/js/plugin/jquery.downCount.js\"></script>
    <script src=\"../../assets/js/plugin/slick.js\"></script>
    <script src=\"../../assets/js/plugin/jquery.nice-select.min.js\"></script>
    <script src=\"../../assets/js/plugin/waypoint.min.js\"></script>
    <script src=\"../../assets/js/plugin/jquery.magnific-popup.min.js\"></script>
    <script src=\"../../assets/js/plugin/wow.min.js\"></script>
    <script src=\"../../assets/js/plugin/odometer.min.js\"></script>
    <script src=\"../../assets/js/plugin/viewport.jquery.js\"></script>
    <script src=\"../../assets/js/plugin/plugin.js\"></script>
    <script src=\"../../assets/js/main.js\"></script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "funciones/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 209,  43 => 1,);
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

    <link rel=\"shortcut icon\" href=\"../../assets/images/fav.png\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"../../assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/fontawesome.min.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/plugin/nice-select.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/plugin/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/plugin/slick.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/plugin/odometer.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/arafat-font.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/plugin/animate.css\">
    <link rel=\"stylesheet\" href=\"../../assets/css/style.css\">
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

    <!-- Info Area Start -->
    <section class=\"info-section mt-60\">
        <div class=\"container pt-120\">
            <div class=\"row justify-content-between\">
                <div class=\"col-xl-6 col-lg-6\">
                    <div class=\"section-text\">
                        <h3 class=\"mb-3\">Toni Casino</h3>
                        <p>¡Multiplica tu dinero! El truco está en depositar todo tu dinero en nuestro casino.</p>
                    </div>
                    <div class=\"dooplo-info cus-mar\">
                        <div class=\"single-box d-flex gap-3 align-items-center\">
                        </div>
                        <div class=\"single-box d-flex gap-3 align-items-center\">
                        </div>
                
                    </div>
                </div>
                <div class=\"col-xl-5 col-lg-6 mt-5 mt-lg-0\">
                    <div class=\"form-content\">
                        {{ form(formulario) }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Info Area end -->

    <!-- FAQs In start -->
    <section class=\"faqs-section signup-signin\">
        <div class=\"overlay pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"section-header text-center\">
                            <h2 class=\"title\">Frequently Asked Questions</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-xl-8\">
                        <div class=\"faq-box\">
                            <div class=\"accordion\" id=\"accordionExample\">
                                <div class=\"accordion-item\">
                                    <h5 class=\"accordion-header\" id=\"headingTwo\">
                                        <button class=\"accordion-button collapsed\" type=\"button\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\"
                                            aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                            Waht is Dooplo?
                                        </button>
                                    </h5>
                                    <div id=\"collapseTwo\" class=\"accordion-collapse collapse\"
                                        aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h5 class=\"accordion-header\" id=\"headingThree\">
                                        <button class=\"accordion-button collapsed\" type=\"button\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\"
                                            aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                            Is it free to sign up?
                                        </button>
                                    </h5>
                                    <div id=\"collapseThree\" class=\"accordion-collapse collapse\"
                                        aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h5 class=\"accordion-header\" id=\"headingFour\">
                                        <button class=\"accordion-button collapsed\" type=\"button\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFour\"
                                            aria-expanded=\"false\" aria-controls=\"collapseFour\">
                                            Can I create more than one account?
                                        </button>
                                    </h5>
                                    <div id=\"collapseFour\" class=\"accordion-collapse collapse\"
                                        aria-labelledby=\"headingFour\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h5 class=\"accordion-header\" id=\"headingFive\">
                                        <button class=\"accordion-button collapsed\" type=\"button\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFive\"
                                            aria-expanded=\"false\" aria-controls=\"collapseFive\">
                                            How old must I be?
                                        </button>
                                    </h5>
                                    <div id=\"collapseFive\" class=\"accordion-collapse collapse\"
                                        aria-labelledby=\"headingFive\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item\">
                                    <h5 class=\"accordion-header\" id=\"headingsix\">
                                        <button class=\"accordion-button collapsed\" type=\"button\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#collapsesix\"
                                            aria-expanded=\"false\" aria-controls=\"collapsesix\">
                                            Is Dooplo Legal?
                                        </button>
                                    </h5>
                                    <div id=\"collapsesix\" class=\"accordion-collapse collapse\"
                                        aria-labelledby=\"headingsix\" data-bs-parent=\"#accordionExample\">
                                        <div class=\"accordion-body\">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
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
    <!-- FAQs In end -->

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
    <script src=\"../../assets/js/jquery.min.js\"></script>
    <script src=\"../../assets/js/jquery-ui.js\"></script>
    <script src=\"../../assets/js/bootstrap.min.js\"></script>
    <script src=\"../../assets/js/plugin/jquery.downCount.js\"></script>
    <script src=\"../../assets/js/plugin/slick.js\"></script>
    <script src=\"../../assets/js/plugin/jquery.nice-select.min.js\"></script>
    <script src=\"../../assets/js/plugin/waypoint.min.js\"></script>
    <script src=\"../../assets/js/plugin/jquery.magnific-popup.min.js\"></script>
    <script src=\"../../assets/js/plugin/wow.min.js\"></script>
    <script src=\"../../assets/js/plugin/odometer.min.js\"></script>
    <script src=\"../../assets/js/plugin/viewport.jquery.js\"></script>
    <script src=\"../../assets/js/plugin/plugin.js\"></script>
    <script src=\"../../assets/js/main.js\"></script>
</body>

</html>", "funciones/login.html.twig", "/home/alumno/Symf/symfony-casino/templates/funciones/login.html.twig");
    }
}
