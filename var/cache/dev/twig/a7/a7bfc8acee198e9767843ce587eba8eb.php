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
            echo "</h3><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkUser_DNI", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\"><button>Ver usuario</button></a> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editUser", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\"><button>Editar usuario</button></a> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removeUser", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\"><button>Eliminar usuario</button></a>    ";
            if ((twig_get_attribute($this->env, $this->source, $context["usuario"], "isAdmin", [], "any", false, false, false, 13) == true)) {
                // line 14
                echo "    <p><strong>Roles (user/admin):</strong> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removeadminUser", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 14)]), "html", null, true);
                echo "\"><button>Quitar admin</button></a></p>
    ";
            } else {
                // line 16
                echo "    <p><strong>Roles (user/admin):</strong> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminUser", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 16)]), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "apellidos", [], "any", false, false, false, 20), "html", null, true);
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
    <p><strong>¿Desbanear usuario? </strong><a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unbanUser", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\"><button>Unban</button></a></p>
    ";
            } else {
                // line 32
                echo "    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("banUser", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\"><button>Banear usuario</button></a>
    ";
            }
            // line 34
            echo "
    ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, $context["usuario"], "estaVerificado", [], "any", false, false, false, 35) == 1)) {
                // line 36
                echo "    <p><strong>Verificado: Sí</strong>
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 37
$context["usuario"], "estaVerificado", [], "any", false, false, false, 37) == 2)) {
                // line 38
                echo "    <p><strong>Verificado: En proceso de revisión</strong>
    ";
            } else {
                // line 40
                echo "    <p><strong>Verificado: No</strong>
    ";
            }
            // line 42
            echo "
    ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["usuario"], "estaVerificado", [], "any", false, false, false, 43) == 1)) {
                // line 44
                echo "        <p><strong>Cara DNI:</strong> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docimg1", [], "any", false, false, false, 44), "html", null, true);
                echo "</p>
        <img src=\"..";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docimg1", [], "any", false, false, false, 45), "html", null, true);
                echo "\" height=\"300\" width=\"500\" alt=\"Cara DNI\" />
        <p><strong>Parte trasera DNI:</strong> ";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docimg2", [], "any", false, false, false, 46), "html", null, true);
                echo "</p>
        <img src=\"..";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docimg2", [], "any", false, false, false, 47), "html", null, true);
                echo "\" height=\"300\" width=\"500\" alt=\"Parte trasera DNI\" />
        <p><strong>Selfie:</strong> ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docselfie", [], "any", false, false, false, 48), "html", null, true);
                echo "</p>
        <img src=\"..";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docselfie", [], "any", false, false, false, 49), "html", null, true);
                echo "\" height=\"300\" width=\"500\" alt=\"Selfie\" /><br>
        <p>Este usuario esta verificado.</p>
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 51
$context["usuario"], "estaVerificado", [], "any", false, false, false, 51) == 2)) {
                // line 52
                echo "    <p><strong>Cara DNI:</strong> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docimg1", [], "any", false, false, false, 52), "html", null, true);
                echo "</p>
        <img src=\"..";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docimg1", [], "any", false, false, false, 53), "html", null, true);
                echo "\" height=\"300\" width=\"500\" alt=\"Cara DNI\" />
        <p><strong>Parte trasera DNI:</strong> ";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docimg2", [], "any", false, false, false, 54), "html", null, true);
                echo "</p>
        <img src=\"..";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docimg2", [], "any", false, false, false, 55), "html", null, true);
                echo "\" height=\"300\" width=\"500\" alt=\"Parte trasera DNI\" />
        <p><strong>Selfie:</strong> ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docselfie", [], "any", false, false, false, 56), "html", null, true);
                echo "</p>
        <img src=\"..";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "docselfie", [], "any", false, false, false, 57), "html", null, true);
                echo "\" height=\"300\" width=\"500\" alt=\"Selfie\" /><br>
    <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verifyAdminUser", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\"><button>Aceptar sus documentos de identidad</button></a>  <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verifyDenegar", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\"><button>Denegar sus documentos de identidad</button></a>
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 59
$context["usuario"], "estaVerificado", [], "any", false, false, false, 59) ==  -1)) {
                // line 60
                echo "    <p>Solicitud de verificación rechazada. El usuario debe subir de nuevo su identidad.</p>
    <p>Razón del rechazo: ";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "razonrechazoverificacion", [], "any", false, false, false, 61), "html", null, true);
                echo "</p>
    ";
            } else {
                // line 63
                echo "    <p>Este usuario no ha subido ningun documento de identidad.</p> 
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
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
        return array (  242 => 66,  234 => 63,  229 => 61,  226 => 60,  224 => 59,  218 => 58,  214 => 57,  210 => 56,  206 => 55,  202 => 54,  198 => 53,  193 => 52,  191 => 51,  186 => 49,  182 => 48,  178 => 47,  174 => 46,  170 => 45,  165 => 44,  163 => 43,  160 => 42,  156 => 40,  152 => 38,  150 => 37,  147 => 36,  145 => 35,  142 => 34,  136 => 32,  131 => 30,  126 => 29,  124 => 28,  119 => 26,  115 => 25,  111 => 24,  107 => 23,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  86 => 18,  80 => 16,  74 => 14,  62 => 13,  59 => 12,  55 => 11,  43 => 1,);
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
    <h3>Usuario ID {{ usuario.id }} - Rol: {{ usuario.isAdmin == 1 ? 'Administrador' : 'Usuario normal' }}</h3><a href=\"{{path('checkUser_DNI', {'id': usuario.id})}}\"><button>Ver usuario</button></a> <a href=\"{{path('editUser', {'id': usuario.id})}}\"><button>Editar usuario</button></a> <a href=\"{{path('removeUser', {'id': usuario.id})}}\"><button>Eliminar usuario</button></a>    {% if usuario.isAdmin == true %}
    <p><strong>Roles (user/admin):</strong> <a href=\"{{path('removeadminUser', {'id': usuario.id})}}\"><button>Quitar admin</button></a></p>
    {% else %}
    <p><strong>Roles (user/admin):</strong> <a href=\"{{path('adminUser', {'id': usuario.id})}}\"><button>Hacer admin</button></a>
    {% endif %}
    <p><strong>Documento identidad:</strong> {{ usuario.docidentidad }}</p>
    <p><strong>Nombre:</strong> {{ usuario.nombre }}</p>
    <p><strong>Apellidos:</strong> {{ usuario.apellidos }}</p>
    <p><strong>Fecha nacimiento:</strong> {{usuario.fechaNacimiento|date('d-m-Y') }}</p>
    <p><strong>Correo:</strong> {{ usuario.email }}</p>
    <p><strong>Password:</strong> {{ usuario.password }}</p>
    <p><strong>Último login:</strong> {{ usuario.lastlogin|date('d-m-Y') }}</p>
    <p><strong>Dinero disponible:</strong> {{ usuario.dinero }}€</p>
    <p><strong>Baneado:</strong> {{ usuario.estaBaneado == 1 ? 'Sí' : 'No' }}</p>

    {% if usuario.estaBaneado == 1 %}
    <p><strong>Razón baneo:</strong> {{ usuario.razonbaneo }}</p>
    <p><strong>¿Desbanear usuario? </strong><a href=\"{{path('unbanUser', {'id': usuario.id})}}\"><button>Unban</button></a></p>
    {% else %}
    <a href=\"{{path('banUser', {'id': usuario.id})}}\"><button>Banear usuario</button></a>
    {% endif %}

    {% if usuario.estaVerificado == 1 %}
    <p><strong>Verificado: Sí</strong>
    {% elseif usuario.estaVerificado == 2 %}
    <p><strong>Verificado: En proceso de revisión</strong>
    {% else %}
    <p><strong>Verificado: No</strong>
    {% endif %}

    {% if usuario.estaVerificado == 1 %}
        <p><strong>Cara DNI:</strong> {{ usuario.docimg1 }}</p>
        <img src=\"..{{ usuario.docimg1 }}\" height=\"300\" width=\"500\" alt=\"Cara DNI\" />
        <p><strong>Parte trasera DNI:</strong> {{ usuario.docimg2 }}</p>
        <img src=\"..{{ usuario.docimg2 }}\" height=\"300\" width=\"500\" alt=\"Parte trasera DNI\" />
        <p><strong>Selfie:</strong> {{ usuario.docselfie }}</p>
        <img src=\"..{{ usuario.docselfie }}\" height=\"300\" width=\"500\" alt=\"Selfie\" /><br>
        <p>Este usuario esta verificado.</p>
    {% elseif usuario.estaVerificado == 2 %}
    <p><strong>Cara DNI:</strong> {{ usuario.docimg1 }}</p>
        <img src=\"..{{ usuario.docimg1 }}\" height=\"300\" width=\"500\" alt=\"Cara DNI\" />
        <p><strong>Parte trasera DNI:</strong> {{ usuario.docimg2 }}</p>
        <img src=\"..{{ usuario.docimg2 }}\" height=\"300\" width=\"500\" alt=\"Parte trasera DNI\" />
        <p><strong>Selfie:</strong> {{ usuario.docselfie }}</p>
        <img src=\"..{{ usuario.docselfie }}\" height=\"300\" width=\"500\" alt=\"Selfie\" /><br>
    <a href=\"{{path('verifyAdminUser', {'id': usuario.id})}}\"><button>Aceptar sus documentos de identidad</button></a>  <a href=\"{{path('verifyDenegar', {'id': usuario.id})}}\"><button>Denegar sus documentos de identidad</button></a>
    {% elseif usuario.estaVerificado == -1 %}
    <p>Solicitud de verificación rechazada. El usuario debe subir de nuevo su identidad.</p>
    <p>Razón del rechazo: {{ usuario.razonrechazoverificacion }}</p>
    {% else %}
    <p>Este usuario no ha subido ningun documento de identidad.</p> 
    {% endif %}
{% endfor %}

    </body>
</html>
", "checks/checkAllUsers.html.twig", "/home/alumno/Symf/CasinoV3/templates/checks/checkAllUsers.html.twig");
    }
}
