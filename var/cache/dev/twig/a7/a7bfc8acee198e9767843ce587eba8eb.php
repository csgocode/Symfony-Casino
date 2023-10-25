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

/* checks/checkAllUsers.html.twig */
class __TwigTemplate_64a7c39eb87924723a6dde259e9ff3b6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checks/checkAllUsers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checks/checkAllUsers.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Listado de Usuarios</title>
    </head>
    <body>

<h2>Listado de Usuarios</h2>

";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) || array_key_exists("usuarios", $context) ? $context["usuarios"] : (function () { throw new RuntimeError('Variable "usuarios" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 12
            echo "    <hr>
    <h3>Usuario ID ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo " - Rol: ";
            echo (((twig_get_attribute($this->env, $this->source, $context["usuario"], "isAdmin", [], "any", false, false, false, 13) == 1)) ? ("Administrador") : ("Usuario normal"));
            echo "</h3><a href=\"../checkUser/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\"><button>Ver usuario</button></a> <a href=\"../usuario/editar/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\"><button>Editar usuario</button></a> <a href=\"../usuario/eliminar/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\"><button>Eliminar usuario</button></a>    ";
            if ((twig_get_attribute($this->env, $this->source, $context["usuario"], "isAdmin", [], "any", false, false, false, 13) == true)) {
                // line 14
                echo "    <p><strong>Roles (user/admin):</strong> <a href=\"../usuario/removeAdmin/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 14), "html", null, true);
                echo "\"><button>Quitar admin</button></a></p>
    ";
            } else {
                // line 16
                echo "    <p><strong>Roles (user/admin):</strong> <a href=\"../usuario/makeAdmin/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 16), "html", null, true);
                echo "\"><button>Hacer admin</button></a>
    ";
            }
            // line 18
            echo "    <p><strong>Documento identidad:</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docidentidad", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
    <p><strong>Nombre:</strong> ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "nombre", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
    <p><strong>Apellidos:</strong> ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "apellido1", [], "any", false, false, false, 20), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "apellido2", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
    <p><strong>Fecha nacimiento:</strong> ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "fechaNacimiento", [], "any", false, false, false, 21), "d-m-Y"), "html", null, true);
            echo "</p>
    <p><strong>Correo:</strong> ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "email", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
    <p><strong>Password:</strong> ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "password", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
    <p><strong>Último login:</strong> ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "lastlogin", [], "any", false, false, false, 24), "d-m-Y"), "html", null, true);
            echo "</p>
    <p><strong>Dinero disponible:</strong> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "dinero", [], "any", false, false, false, 25), "html", null, true);
            echo "€</p>
    <p><strong>Baneado:</strong> ";
            // line 26
            echo (((twig_get_attribute($this->env, $this->source, $context["usuario"], "estaBaneado", [], "any", false, false, false, 26) == 1)) ? ("Sí") : ("No"));
            echo "</p>

    ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, $context["usuario"], "estaBaneado", [], "any", false, false, false, 28) == 1)) {
                // line 29
                echo "    <p><strong>Razón baneo:</strong> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "razonbaneo", [], "any", false, false, false, 29), "html", null, true);
                echo "</p>
    <p><strong>Solicitar desbaneo: </strong><a href=\"../usuario/unban/";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "\"><button>Solicitar unban</button></a></p>
    ";
            } else {
                // line 32
                echo "    <a href=\"../usuario/banear/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo "\"><button>Banear usuario</button></a>
    ";
            }
            // line 34
            echo "

    <p><strong>Verificado:</strong> ";
            // line 36
            echo (((twig_get_attribute($this->env, $this->source, $context["usuario"], "estaVerificado", [], "any", false, false, false, 36) == 1)) ? ("Sí") : ("No"));
            echo "</p>
    ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, $context["usuario"], "estaVerificado", [], "any", false, false, false, 37) == 1)) {
                // line 38
                echo "        <p><strong>Cara DNI:</strong> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docimg1", [], "any", false, false, false, 38), "html", null, true);
                echo "</p>
        <img src=\"..";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docimg1", [], "any", false, false, false, 39), "html", null, true);
                echo "\" alt=\"Cara DNI\" />
        <p><strong>Parte trasera DNI:</strong> ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docimg2", [], "any", false, false, false, 40), "html", null, true);
                echo "</p>
        <img src=\"..";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docimg2", [], "any", false, false, false, 41), "html", null, true);
                echo "\" alt=\"Parte trasera DNI\" />
        <p><strong>Selfie:</strong> ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docselfie", [], "any", false, false, false, 42), "html", null, true);
                echo "</p>
        <img src=\"..";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docselfie", [], "any", false, false, false, 43), "html", null, true);
                echo "\" alt=\"Selfie\" />
    ";
            } else {
                // line 45
                echo "    <p>Solicita tu verificación de identidad: <a href=\"../usuario/verificar/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 45), "html", null, true);
                echo "\"><button>Verificar tu identidad</button></a></p> 
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "checks/checkAllUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 48,  180 => 45,  175 => 43,  171 => 42,  167 => 41,  163 => 40,  159 => 39,  154 => 38,  152 => 37,  148 => 36,  144 => 34,  138 => 32,  133 => 30,  128 => 29,  126 => 28,  121 => 26,  117 => 25,  113 => 24,  109 => 23,  105 => 22,  101 => 21,  95 => 20,  91 => 19,  86 => 18,  80 => 16,  74 => 14,  62 => 13,  59 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Listado de Usuarios</title>
    </head>
    <body>

<h2>Listado de Usuarios</h2>

{% for usuario in usuarios %}
    <hr>
    <h3>Usuario ID {{ usuario.id }} - Rol: {{ usuario.isAdmin == 1 ? 'Administrador' : 'Usuario normal' }}</h3><a href=\"../checkUser/{{usuario.id}}\"><button>Ver usuario</button></a> <a href=\"../usuario/editar/{{usuario.id}}\"><button>Editar usuario</button></a> <a href=\"../usuario/eliminar/{{usuario.id}}\"><button>Eliminar usuario</button></a>    {% if usuario.isAdmin == true %}
    <p><strong>Roles (user/admin):</strong> <a href=\"../usuario/removeAdmin/{{usuario.id}}\"><button>Quitar admin</button></a></p>
    {% else %}
    <p><strong>Roles (user/admin):</strong> <a href=\"../usuario/makeAdmin/{{usuario.id}}\"><button>Hacer admin</button></a>
    {% endif %}
    <p><strong>Documento identidad:</strong> {{ usuario.docidentidad }}</p>
    <p><strong>Nombre:</strong> {{ usuario.nombre }}</p>
    <p><strong>Apellidos:</strong> {{ usuario.apellido1 }} {{ usuario.apellido2 }}</p>
    <p><strong>Fecha nacimiento:</strong> {{usuario.fechaNacimiento|date('d-m-Y') }}</p>
    <p><strong>Correo:</strong> {{ usuario.email }}</p>
    <p><strong>Password:</strong> {{ usuario.password }}</p>
    <p><strong>Último login:</strong> {{ usuario.lastlogin|date('d-m-Y') }}</p>
    <p><strong>Dinero disponible:</strong> {{ usuario.dinero }}€</p>
    <p><strong>Baneado:</strong> {{ usuario.estaBaneado == 1 ? 'Sí' : 'No' }}</p>

    {% if usuario.estaBaneado == 1 %}
    <p><strong>Razón baneo:</strong> {{ usuario.razonbaneo }}</p>
    <p><strong>Solicitar desbaneo: </strong><a href=\"../usuario/unban/{{usuario.id}}\"><button>Solicitar unban</button></a></p>
    {% else %}
    <a href=\"../usuario/banear/{{usuario.id}}\"><button>Banear usuario</button></a>
    {% endif %}


    <p><strong>Verificado:</strong> {{ usuario.estaVerificado == 1 ? 'Sí' : 'No' }}</p>
    {% if usuario.estaVerificado == 1 %}
        <p><strong>Cara DNI:</strong> {{ usuario.docimg1 }}</p>
        <img src=\"..{{ usuario.docimg1 }}\" alt=\"Cara DNI\" />
        <p><strong>Parte trasera DNI:</strong> {{ usuario.docimg2 }}</p>
        <img src=\"..{{ usuario.docimg2 }}\" alt=\"Parte trasera DNI\" />
        <p><strong>Selfie:</strong> {{ usuario.docselfie }}</p>
        <img src=\"..{{ usuario.docselfie }}\" alt=\"Selfie\" />
    {% else %}
    <p>Solicita tu verificación de identidad: <a href=\"../usuario/verificar/{{usuario.id}}\"><button>Verificar tu identidad</button></a></p> 
    {% endif %}
{% endfor %}

    </body>
</html>
", "checks/checkAllUsers.html.twig", "/home/alumno/Symf/symfony-casino/templates/checks/checkAllUsers.html.twig");
    }
}
