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
    <title>CasinoRoyal: Tu casino blockchain de confianza</title>

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

";
        // line 37
        $this->loadTemplate("partials/menu.html.twig", "controlador_casino/index.html.twig", 37)->display($context);
        // line 38
        echo "
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
                                    <h4 class=\"sub-title\">¡Juega y gana!</h4>
                                    <h1 class=\"mb-2\">Casino Royal</h1>
                                    <p class=\"lgtxt\">Juega a juegos compitiendo con tus amigos y gana magníficos premios!</p>
                                </div>
                                <div class=\"btn-area\">
                                    <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"cmn-btn\">¡Regístrate ya!</a>
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
                            <h5>Regístrate</h5>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"single-box\">
                            <div class=\"img-area\">
                                <img src=\"assets/images/icon/how-play-icon-2.png\" alt=\"image\">
                                <span class=\"abs-area xxltxt d-center text-center position-absolute\">2</span>
                            </div>
                            <h5>Juega</h5>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"single-box\">
                            <div class=\"img-area\">
                                <img src=\"assets/images/icon/how-play-icon-3.png\" alt=\"image\">
                                <span class=\"abs-area xxltxt d-center text-center position-absolute\">3</span>
                            </div>
                            <h5>Gana Dinero</h5>
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
                        <h5 class=\"sub-title\">Convierte tu pasión en ganancias</h5>
                        <h2 class=\"mb-3\">La Mejor Plataforma de Juegos Verdaderamente</h2>
                        <p>¿Eres adicto a los Juegos en Línea? ¿Alguna vez has pensado en ganar a través de Juegos en Línea o jugando Juegos Móviles Multijugador? ¿Qué pasaría si fueras recompensado por jugar tus juegos favoritos y eso de lo que eres adicto? Bueno, Casino Royal es la Plataforma que hace esto posible.</p>
                    </div>
                    <div class=\"btn-area\">
                        <a href=\"/register\" class=\"cmn-btn\">Juguemos Ahora</a>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-7\">
                    <div class=\"row cus-mar\">
                        <div class=\"col-sm-6\">
                            <div class=\"single-box\">
                                <div class=\"img-area\">
                                    <img src=\"assets/images/icon/about-icon-1.png\" alt=\"imagen\">
                                </div>
                                <h5>Recompensa tu Dedicación</h5>
                            </div>
                            <div class=\"single-box\">
                                <div class=\"img-area\">
                                    <img src=\"assets/images/icon/about-icon-2.png\" alt=\"imagen\">
                                </div>
                                <h5>Prueba Algo Nuevo</h5>
                            </div>
                        </div>
                        <div class=\"col-sm-6 mt-lg-5 mt-lg-0\">
                            <div class=\"single-box\">
                                <div class=\"img-area\">
                                    <img src=\"assets/images/icon/about-icon-3.png\" alt=\"imagen\">
                                </div>
                                <h5>Siempre hay más para jugar</h5>
                            </div>
                            <div class=\"single-box\">
                                <div class=\"img-area\">
                                    <img src=\"assets/images/icon/about-icon-4.png\" alt=\"imagen\">
                                </div>
                                <h5>Obtén más por menos</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- FIN SECCION INFO -->


    <!-- Level Up Skills start -->
    <section class=\"level-up-skills\">
        <div class=\"affiliate pt-120 pb-120\">
            <div class=\"overlay\">
                <div class=\"container\">
                    <div class=\"main-content\">
                        <div class=\"row align-items-center justify-content-between\">
                            <div class=\"col-lg-5 mt-60 mb-60\">
                                <div class=\"section-text\">
                                    <h5>¡Invita a tus amigos y gana dinero, te llevas el 10% de lo que pierdan!</h5>
                                </div>
                                <div class=\"btn-area\">
                                    <a href=\"/register\" class=\"cmn-btn\">Jugar ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Level Up Skills end -->

<!-- Llamada a la acción inicio -->
<section class=\"call-to-action\">
    <div class=\"affiliate pt-120 pb-120\">
        <div class=\"overlay\">
            <div class=\"container\">
                <div class=\"main-content\">
                    <div class=\"row align-items-center justify-content-end\">
                        <div class=\"col-lg-7 mt-60 mb-60\">
                            <div class=\"section-text\">
                                <h2 class=\"mb-3\">Deja de Desplazarte, Empieza a Jugar</h2>
                                <p>¿Listo para jugar con tus amigos, divertirte y ganar dinero? Muestra tu logro, historial de partidas y tasa de victorias mientras construyes tu reputación en Dooplo</p>
                            </div>
                            <div class=\"btn-area\">
                                <a href=\"sign-up.html\" class=\"cmn-btn\">Únete Ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Llamada a la acción fin -->
   ";
        // line 217
        $this->loadTemplate("partials/footer.html.twig", "controlador_casino/index.html.twig", 217)->display($context);
        // line 218
        echo "

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
        return array (  269 => 218,  267 => 217,  113 => 66,  83 => 38,  81 => 37,  43 => 1,);
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

{% include 'partials/menu.html.twig' %}

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
                                    <h4 class=\"sub-title\">¡Juega y gana!</h4>
                                    <h1 class=\"mb-2\">Casino Royal</h1>
                                    <p class=\"lgtxt\">Juega a juegos compitiendo con tus amigos y gana magníficos premios!</p>
                                </div>
                                <div class=\"btn-area\">
                                    <a href=\"{{path('app_register')}}\" class=\"cmn-btn\">¡Regístrate ya!</a>
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
                            <h5>Regístrate</h5>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"single-box\">
                            <div class=\"img-area\">
                                <img src=\"assets/images/icon/how-play-icon-2.png\" alt=\"image\">
                                <span class=\"abs-area xxltxt d-center text-center position-absolute\">2</span>
                            </div>
                            <h5>Juega</h5>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"single-box\">
                            <div class=\"img-area\">
                                <img src=\"assets/images/icon/how-play-icon-3.png\" alt=\"image\">
                                <span class=\"abs-area xxltxt d-center text-center position-absolute\">3</span>
                            </div>
                            <h5>Gana Dinero</h5>
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
                        <h5 class=\"sub-title\">Convierte tu pasión en ganancias</h5>
                        <h2 class=\"mb-3\">La Mejor Plataforma de Juegos Verdaderamente</h2>
                        <p>¿Eres adicto a los Juegos en Línea? ¿Alguna vez has pensado en ganar a través de Juegos en Línea o jugando Juegos Móviles Multijugador? ¿Qué pasaría si fueras recompensado por jugar tus juegos favoritos y eso de lo que eres adicto? Bueno, Casino Royal es la Plataforma que hace esto posible.</p>
                    </div>
                    <div class=\"btn-area\">
                        <a href=\"/register\" class=\"cmn-btn\">Juguemos Ahora</a>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-7\">
                    <div class=\"row cus-mar\">
                        <div class=\"col-sm-6\">
                            <div class=\"single-box\">
                                <div class=\"img-area\">
                                    <img src=\"assets/images/icon/about-icon-1.png\" alt=\"imagen\">
                                </div>
                                <h5>Recompensa tu Dedicación</h5>
                            </div>
                            <div class=\"single-box\">
                                <div class=\"img-area\">
                                    <img src=\"assets/images/icon/about-icon-2.png\" alt=\"imagen\">
                                </div>
                                <h5>Prueba Algo Nuevo</h5>
                            </div>
                        </div>
                        <div class=\"col-sm-6 mt-lg-5 mt-lg-0\">
                            <div class=\"single-box\">
                                <div class=\"img-area\">
                                    <img src=\"assets/images/icon/about-icon-3.png\" alt=\"imagen\">
                                </div>
                                <h5>Siempre hay más para jugar</h5>
                            </div>
                            <div class=\"single-box\">
                                <div class=\"img-area\">
                                    <img src=\"assets/images/icon/about-icon-4.png\" alt=\"imagen\">
                                </div>
                                <h5>Obtén más por menos</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- FIN SECCION INFO -->


    <!-- Level Up Skills start -->
    <section class=\"level-up-skills\">
        <div class=\"affiliate pt-120 pb-120\">
            <div class=\"overlay\">
                <div class=\"container\">
                    <div class=\"main-content\">
                        <div class=\"row align-items-center justify-content-between\">
                            <div class=\"col-lg-5 mt-60 mb-60\">
                                <div class=\"section-text\">
                                    <h5>¡Invita a tus amigos y gana dinero, te llevas el 10% de lo que pierdan!</h5>
                                </div>
                                <div class=\"btn-area\">
                                    <a href=\"/register\" class=\"cmn-btn\">Jugar ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Level Up Skills end -->

<!-- Llamada a la acción inicio -->
<section class=\"call-to-action\">
    <div class=\"affiliate pt-120 pb-120\">
        <div class=\"overlay\">
            <div class=\"container\">
                <div class=\"main-content\">
                    <div class=\"row align-items-center justify-content-end\">
                        <div class=\"col-lg-7 mt-60 mb-60\">
                            <div class=\"section-text\">
                                <h2 class=\"mb-3\">Deja de Desplazarte, Empieza a Jugar</h2>
                                <p>¿Listo para jugar con tus amigos, divertirte y ganar dinero? Muestra tu logro, historial de partidas y tasa de victorias mientras construyes tu reputación en Dooplo</p>
                            </div>
                            <div class=\"btn-area\">
                                <a href=\"sign-up.html\" class=\"cmn-btn\">Únete Ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Llamada a la acción fin -->
   {% include 'partials/footer.html.twig' %}


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

</html>", "controlador_casino/index.html.twig", "/home/alumno/Symf/CasinoV3/templates/controlador_casino/index.html.twig");
    }
}
