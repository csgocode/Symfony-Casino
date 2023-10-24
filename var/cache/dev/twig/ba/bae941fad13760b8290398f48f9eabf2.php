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

/* checks/DNIcheck.html.twig */
class __TwigTemplate_c207274c7e554134ef2062498de79512 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checks/DNIcheck.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checks/DNIcheck.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>DNI Check</title>
    </head>
    <body>
<h2>Usuario ID ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "</h2>
<p><strong>Documento identidad:</strong> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 9, $this->source); })()), "docidentidad", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
<p><strong>Nombre:</strong> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 10, $this->source); })()), "nombre", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
<p><strong>Apellidos:</strong> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 11, $this->source); })()), "apellido1", [], "any", false, false, false, 11), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 11, $this->source); })()), "apellido2", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
<p><strong>Correo:</strong> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
<p><strong>Password:</strong> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 13, $this->source); })()), "password", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
<p><strong>Último login:</strong> ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 14, $this->source); })()), "lastlogin", [], "any", false, false, false, 14), "d-m-Y"), "html", null, true);
        echo "</p>
<p><strong>Dinero disponible:</strong> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 15, $this->source); })()), "dinero", [], "any", false, false, false, 15), "html", null, true);
        echo "€</p>
<p><strong>Baneado:</strong> ";
        // line 16
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 16, $this->source); })()), "estaBaneado", [], "any", false, false, false, 16) == 1)) ? ("Sí") : ("No"));
        echo "</p>
";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 17, $this->source); })()), "estaBaneado", [], "any", false, false, false, 17) == 1)) {
            // line 18
            echo "<p><strong>Razón baneo:</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 18, $this->source); })()), "razonbaneo", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
<p><strong>Solicitar desbaneo:</strong><a href=\"/unban\"><button>Solicitar unban</button></a></p>
";
        }
        // line 21
        echo "<p><strong>Verificado:</strong> ";
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 21, $this->source); })()), "estaVerificado", [], "any", false, false, false, 21) == 1)) ? ("Sí") : ("No"));
        echo "</p>
";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 22, $this->source); })()), "estaVerificado", [], "any", false, false, false, 22) == 1)) {
            // line 23
            echo "    <p><strong>Cara DNI:</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 23, $this->source); })()), "docimg1", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
    <img src=\"../docs/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 24, $this->source); })()), "docimg1", [], "any", false, false, false, 24), "html", null, true);
            echo "\" />
    <p><strong>Parte trasera DNI:</strong> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 25, $this->source); })()), "docimg2", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
    <img src=\"../docs/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 26, $this->source); })()), "docimg2", [], "any", false, false, false, 26), "html", null, true);
            echo "\" />
    <p><strong>Selfie:</strong> ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 27, $this->source); })()), "docselfie", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
    <img src=\"../docs/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 28, $this->source); })()), "docselfie", [], "any", false, false, false, 28), "html", null, true);
            echo "\" />
";
        } else {
            // line 30
            echo "<p>Solicita tu verificacion de identidad:<a href=\"/verificar\"><button>Verificar tu identidad</button></a></p> 
";
        }
        // line 32
        echo "

    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "checks/DNIcheck.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 32,  132 => 30,  127 => 28,  123 => 27,  119 => 26,  115 => 25,  111 => 24,  106 => 23,  104 => 22,  99 => 21,  92 => 18,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>DNI Check</title>
    </head>
    <body>
<h2>Usuario ID {{ usuario.id }}</h2>
<p><strong>Documento identidad:</strong> {{ usuario.docidentidad }}</p>
<p><strong>Nombre:</strong> {{ usuario.nombre }}</p>
<p><strong>Apellidos:</strong> {{ usuario.apellido1 }} {{ usuario.apellido2 }}</p>
<p><strong>Correo:</strong> {{ usuario.email }}</p>
<p><strong>Password:</strong> {{ usuario.password }}</p>
<p><strong>Último login:</strong> {{ usuario.lastlogin|date('d-m-Y') }}</p>
<p><strong>Dinero disponible:</strong> {{ usuario.dinero }}€</p>
<p><strong>Baneado:</strong> {{ usuario.estaBaneado == 1 ? 'Sí' : 'No' }}</p>
{% if usuario.estaBaneado == 1 %}
<p><strong>Razón baneo:</strong> {{ usuario.razonbaneo }}</p>
<p><strong>Solicitar desbaneo:</strong><a href=\"/unban\"><button>Solicitar unban</button></a></p>
{% endif %}
<p><strong>Verificado:</strong> {{ usuario.estaVerificado == 1 ? 'Sí' : 'No' }}</p>
{% if usuario.estaVerificado == 1 %}
    <p><strong>Cara DNI:</strong> {{ usuario.docimg1 }}</p>
    <img src=\"../docs/{{ usuario.docimg1 }}\" />
    <p><strong>Parte trasera DNI:</strong> {{ usuario.docimg2 }}</p>
    <img src=\"../docs/{{ usuario.docimg2 }}\" />
    <p><strong>Selfie:</strong> {{ usuario.docselfie }}</p>
    <img src=\"../docs/{{ usuario.docselfie }}\" />
{% else %}
<p>Solicita tu verificacion de identidad:<a href=\"/verificar\"><button>Verificar tu identidad</button></a></p> 
{% endif %}


    </body>
</html>", "checks/DNIcheck.html.twig", "/home/alumno/Symf/symfony-casino/templates/checks/DNIcheck.html.twig");
    }
}
