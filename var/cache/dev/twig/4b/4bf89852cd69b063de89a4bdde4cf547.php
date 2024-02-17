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

/* partials/footer.html.twig */
class __TwigTemplate_f4f3f4d7608e212d8f611f0d3737435e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        echo "
<!-- Sección de pie de página inicio -->
<footer class=\"footer-section\">
    <div class=\"overlay\">
        <div class=\"call-action index-3\">
            <div class=\"container\">
                <div class=\"main-content\">
                    <div class=\"row gap-4 gap-lg-0 align-items-center justify-content-between\">
                        <div class=\"col-lg-6\">
                            <div class=\"section-area mb-3\">
                                <h3>¿Listo para comenzar a jugar?</h3>
                            </div>
                            <p>Deja de deslizar hacia abajo y empieza a jugar. ¡Crea tu cuenta ahora y gana 20 euros gratis!</p>
                        </div>
                        <div class=\"col-lg-5 d-flex justify-content-lg-end\">
                            <div class=\"btn-area\">
                                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"cmn-btn\">¡Regístrate Ahora!</a>
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
                                <img src=\"assets/images/logo.png\" height=\"300px\" width=\"230px\" class=\"logo\" alt=\"logo\">
                            </a>

                        </div>
                        <div class=\"single-box social\">
                            <ul class=\"d-flex\">
                                <!-- Iconos sociales -->
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
                                <p>Derechos de autor © <a href=\"#\">Royal Casino</a> | Programado por Antonio Soare</p>
                            </div>
                        </div>
                        <div class=\"col-md-6 d-flex justify-content-md-end justify-content-center\">
                            <ul class=\"d-flex gap-4 flex-wrap align-items-center\">
                                <li><a href=\"#\">Privacidad</a></li>
                                <li><a href=\"#\">Términos y Condiciones</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Sección de pie de página fin -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Sección de pie de página inicio -->
<footer class=\"footer-section\">
    <div class=\"overlay\">
        <div class=\"call-action index-3\">
            <div class=\"container\">
                <div class=\"main-content\">
                    <div class=\"row gap-4 gap-lg-0 align-items-center justify-content-between\">
                        <div class=\"col-lg-6\">
                            <div class=\"section-area mb-3\">
                                <h3>¿Listo para comenzar a jugar?</h3>
                            </div>
                            <p>Deja de deslizar hacia abajo y empieza a jugar. ¡Crea tu cuenta ahora y gana 20 euros gratis!</p>
                        </div>
                        <div class=\"col-lg-5 d-flex justify-content-lg-end\">
                            <div class=\"btn-area\">
                                <a href=\"{{path('app_register')}}\" class=\"cmn-btn\">¡Regístrate Ahora!</a>
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
                                <img src=\"assets/images/logo.png\" height=\"300px\" width=\"230px\" class=\"logo\" alt=\"logo\">
                            </a>

                        </div>
                        <div class=\"single-box social\">
                            <ul class=\"d-flex\">
                                <!-- Iconos sociales -->
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
                                <p>Derechos de autor © <a href=\"#\">Royal Casino</a> | Programado por Antonio Soare</p>
                            </div>
                        </div>
                        <div class=\"col-md-6 d-flex justify-content-md-end justify-content-center\">
                            <ul class=\"d-flex gap-4 flex-wrap align-items-center\">
                                <li><a href=\"#\">Privacidad</a></li>
                                <li><a href=\"#\">Términos y Condiciones</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Sección de pie de página fin -->", "partials/footer.html.twig", "/home/alumno/Symf/CasinoV3/templates/partials/footer.html.twig");
    }
}
