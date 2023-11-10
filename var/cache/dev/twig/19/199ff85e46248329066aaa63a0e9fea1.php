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

/* funciones/contacto.html.twig */
class __TwigTemplate_2df6a3bb056859859230ef9e8a28502b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "funciones/contacto.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "funciones/contacto.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t<meta name=\"forntEnd-Developer\" content=\"Mamunur Rashid\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title> Dooplo - Gaming HTML Template</title>
\t<!-- favicon -->
\t<link rel=\"shortcut icon\" href=\"assets2/images/favicon.png\" type=\"image/x-icon\">
\t<!-- bootstrap -->
\t<link rel=\"stylesheet\" href=\"assets2/css/bootstrap.min.css\">
\t<!-- Plugin css -->
\t<link rel=\"stylesheet\" href=\"assets2/css/plugin.css\">

\t<!-- stylesheet -->
\t<link rel=\"stylesheet\" href=\"assets2/css/style.css\">
\t<!-- responsive -->
\t<link rel=\"stylesheet\" href=\"assets2/css/responsive.css\">
</head>

<body>
\t<!-- preloader area start -->
\t<div class=\"preloader\" id=\"preloader\">
\t\t<div class=\"loader loader-1\">
\t\t\t<div class=\"loader-outter\"></div>
\t\t\t<div class=\"loader-inner\"></div>
\t\t</div>
\t</div>
\t<!-- preloader area end -->

\t<!-- Header Area Start  -->
\t<header class=\"header\">
\t\t<!-- Top Header Area Start -->
\t\t<section class=\"top-header\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<div class=\"left-content\">
\t\t\t\t\t\t\t\t<ul class=\"left-list\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-headset\"></i>\tSupport
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>\tinfo@Dooplo.com
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"language-selector\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"language\" class=\"language\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">English</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Japan</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"right-content\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"right-list\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart-icon tm-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cart-arrow-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cart-count\">10</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tm-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"number-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>24</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>25</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>26</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>27</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>28</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"number-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>24</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>25</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>26</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>27</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>28</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"number-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>24</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>25</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>26</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>27</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>28</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"number-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>24</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>25</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>26</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>27</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>28</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"cart.html\" class=\"link-btn\">Cart Page</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notofication tm-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"count\">11</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tm-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInvest Exchange
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInvest Exchange
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInvest Exchange
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInvest Exchange
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInvest Exchange
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"sign-in\" data-toggle=\"modal\" data-target=\"#login\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i> Sign In
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- Top Header Area End -->
\t\t<!--Main-Menu Area Start-->
\t\t<div class=\"mainmenu-area\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">                 
\t\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t\t\t\t<div class=\"container-fluid p-0\">
\t\t\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t\t\t\t\t<img src=\"assets2/images/logo.png\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
\t\t\t\t\t\t\t\t\tdata-bs-target=\"#main_menu\" aria-controls=\"main_menu\" aria-expanded=\"false\"
\t\t\t\t\t\t\t\t\taria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-end fixed-height\" id=\"main_menu\">
\t\t\t\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\tHome
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-hover-effect\"></div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"index.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>Home 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"index2.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i> Home 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"play.html\">Play
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-hover-effect\"></div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"lottery.html\">lottery
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-hover-effect\"></div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"tournaments.html\">tournaments
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-hover-effect\"></div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\tPages
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-hover-effect\"></div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"about.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>About</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"affiliate.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>Affiliate</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"awards.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>Awards</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"bonus.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>Bonus</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"cart.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>Cart</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"faq.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>Faq</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"how-it-work.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>How It Work</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"terms-conditions.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>Terms & Condition</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"terms-conditions-details.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>Condition Details</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"404.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>404</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"contact.html\">Contact
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-hover-effect\"></div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mybtn1\" data-toggle=\"modal\" data-target=\"#signin\"> Join us</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--Main-Menu Area Start-->
\t</header>
\t<!-- Header Area End  -->

\t<!-- Breadcrumb Area Start -->
\t<section class=\"breadcrumb-area bc-contact\">
\t\t<img class=\"bc-img\" src=\"assets2/images/breadcrumb/contact.png\" alt=\"\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\tContact
\t\t\t\t\t</h4>
\t\t\t\t\t<ul class=\"breadcrumb-list\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-home\"></i>
\t\t\t\t\t\t\t\t\tHome
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<span><i class=\"fas fa-chevron-right\"></i> </span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"contact.html\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Breadcrumb Area End -->

\t<!-- Contact Area End -->
\t<section class=\"contact\">
\t\t<img class=\"left-img\" src=\"assets2/images/contact-left.png\" alt=\"\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-lg-8 col-md-10\">
\t\t\t\t\t<div class=\"section-heading\">
\t\t\t\t\t\t<h5 class=\"subtitle\">
\t\t\t\t\t\t\tContact Us
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<h2 class=\"title\">
\t\t\t\t\t\t\tGet in Touch
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<p class=\"text\">
\t\t\t\t\t\t\t\tIt’s up to the competition in features, with some unique 
\t\t\t\t\t\t\t\tadvantages.All the latest crypto games.Here are some of them.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row justify-content-end\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"contact-form-wrapper\">
\t\t\t\t\t\t<div class=\"contact-box\">
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\tSend Us a Message
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t";
        // line 330
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 330, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
";
        // line 331
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 331, $this->source); })()), 'errors');
        echo "
\t<div class=\"form-group\">
\t\t<div class=\"col-xs-6\">
\t\t\t";
        // line 334
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "Nombre", [], "any", false, false, false, 334), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-xs-12\">
\t\t\t";
        // line 339
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 339, $this->source); })()), "Correo", [], "any", false, false, false, 339), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-xs-12\">
\t\t\t";
        // line 344
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 344, $this->source); })()), "Mensaje", [], "any", false, false, false, 344), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 345
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 345, $this->source); })()), "Send", [], "any", false, false, false, 345), 'row', ["attr" => ["class" => "pull-right btn btn-lg sr-button"]]);
        echo "
\t\t</div>
\t</div>
";
        // line 348
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 348, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Contact Area End -->

\t<!-- Footer Area Start -->
\t<footer class=\"footer\" id=\"footer\">
\t\t\t<div class=\"subscribe-area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div class=\"subscribe-box\">
\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"heading-area\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"sub-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tsubscribe to Dooplo
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tTo Get Exclusive Benefits
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-4 d-flex align-self-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets2/images/mail-box.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-8 d-flex align-self-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-area\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Your Email Address\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 d-flex align-self-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"button-area\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"mybtn1\" type=\"submit\">Subscribe
\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"fas fa-paper-plane\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"footer-widget info-link-widget\">
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\tAbout 
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<ul class=\"link-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>\tAbout Us
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>\tContact Us
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>\tLatest Blog
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>\tAuthenticity Guarantee
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>\tCustomer Reviews
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>\tPrivacy Policy
\t
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"footer-widget info-link-widget\">
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<ul class=\"link-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i> Manage Your Account
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i> How to Deposit
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i> How to Withdraw
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i> Account Varification
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i> Safety & Security
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i> Membership Level
\t
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"footer-widget info-link-widget\">
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\thelp center 
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<ul class=\"link-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Help centre
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>FAQ
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Quick Start Guide
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Tutorials
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Borrow
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Lend
\t
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"footer-widget info-link-widget\">
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\tLegal Info
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<ul class=\"link-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Risk Warnings
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Privacy Notice
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Security
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Terms of Service
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Become Affiliate
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Complaints Policy
\t
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"copy-bg\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t<div class=\"left-area\">
\t\t\t\t\t\t\t\t<p>Copyright © 2019.All Rights Reserved By <a href=\"#\">Dooplo</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t<ul class=\"copright-area-links\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Terms Of Use</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Privacy Policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Gamble</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Aware</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Help Cente</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t</footer> 
\t<!-- Footer Area End -->

\t<!-- Back to Top Start -->
\t<div class=\"bottomtotop\">
\t\t<i class=\"fas fa-chevron-right\"></i>
\t</div>
\t<!-- Back to Top End -->

\t<!-- Login Area Start -->
\t<div class=\"modal fade login-modal\" id=\"login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"login\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"logo-area\">
\t\t\t\t\t\t\t<img class=\"logo\" src=\"assets2/images/logo.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-area\">
\t\t\t\t\t\t<h4 class=\"title\">Great to have you back!</h4>
\t\t\t\t\t\t<p class=\"sub-title\">Enter your details below.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-area\">
\t\t\t\t\t\t<form action=\"#\"  method=\"POST\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"login-input-email\">Email*</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"input-field\" id=\"login-input-email\"  placeholder=\"Enter your Email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"login-input-password\">Password*</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"input-field\" id=\"login-input-password\"  placeholder=\"Password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"check-box-field\" id=\"input-save-password\" checked>
\t\t\t\t\t\t\t\t\t\t<label for=\"input-save-password\">Remember Password</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\tForgot Password?
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t   <button type=\"submit\" class=\"mybtn1\">Log In</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-footer\">
\t\t\t\t\t\t<p>Not a member? 
\t\t\t\t\t\t\t\t<a href=\"#\">Create account <i class=\"fas fa-angle-double-right\"></i></a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Login Area End -->
\t
\t\t<!-- SignIn Area Start -->
\t\t<div class=\"modal fade login-modal sign-in\" id=\"signin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"signin\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog modal-dialog-centered \" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"logo-area\">
\t\t\t\t\t\t\t\t<img class=\"logo\" src=\"assets2/images/logo.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-area\">
\t\t\t\t\t\t\t<h4 class=\"title\">Great to have you back!</h4>
\t\t\t\t\t\t\t<p class=\"sub-title\">Enter your details below.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-area\">
\t\t\t\t\t\t\t<form action=\"#\" method=\"POST\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-name\">Name*</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"input-field\" id=\"input-name\"  placeholder=\"Enter your Name\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-email\">Email*</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"input-field\" id=\"input-email\"  placeholder=\"Enter your Email\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-password\">Password*</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"input-field\" id=\"input-password\"  placeholder=\"Enter your password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-con-password\">confirm password**</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"input-field\" id=\"input-con-password\"  placeholder=\"Enter your Confirm Password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">BTC</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">USD</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">EUR</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"check-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"check-box-field\" id=\"input-terms\" checked>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-terms\">
\t\t\t\t\t\t\t\t\t\t\t\t\tI agree with <a href=\"#\">terms and Conditions</a> and  <a href=\"#\">privacy policy</a>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"mybtn1\">Take Bonus</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t<!-- SignIn Area End -->

\t<!-- jquery -->
\t<script src=\"assets2/js/jquery.js\"></script>
\t<!-- popper -->
\t<script src=\"assets2/js/popper.min.js\"></script>
\t<!-- bootstrap -->
\t<script src=\"assets2/js/bootstrap.min.js\"></script>
\t<!-- plugin js-->
\t<script src=\"assets2/js/plugin.js\"></script>

\t<!-- MpusemoverParallax JS-->
\t<script src=\"assets2/js/TweenMax.js\"></script>
\t<script src=\"assets2/js/mousemoveparallax.js\"></script>
\t<!-- main -->
\t<script src=\"assets2/js/main.js\"></script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "funciones/contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 348,  404 => 345,  400 => 344,  392 => 339,  384 => 334,  378 => 331,  374 => 330,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t<meta name=\"forntEnd-Developer\" content=\"Mamunur Rashid\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title> Dooplo - Gaming HTML Template</title>
\t<!-- favicon -->
\t<link rel=\"shortcut icon\" href=\"assets2/images/favicon.png\" type=\"image/x-icon\">
\t<!-- bootstrap -->
\t<link rel=\"stylesheet\" href=\"assets2/css/bootstrap.min.css\">
\t<!-- Plugin css -->
\t<link rel=\"stylesheet\" href=\"assets2/css/plugin.css\">

\t<!-- stylesheet -->
\t<link rel=\"stylesheet\" href=\"assets2/css/style.css\">
\t<!-- responsive -->
\t<link rel=\"stylesheet\" href=\"assets2/css/responsive.css\">
</head>

<body>
\t<!-- preloader area start -->
\t<div class=\"preloader\" id=\"preloader\">
\t\t<div class=\"loader loader-1\">
\t\t\t<div class=\"loader-outter\"></div>
\t\t\t<div class=\"loader-inner\"></div>
\t\t</div>
\t</div>
\t<!-- preloader area end -->

\t<!-- Header Area Start  -->
\t<header class=\"header\">
\t\t<!-- Top Header Area Start -->
\t\t<section class=\"top-header\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<div class=\"left-content\">
\t\t\t\t\t\t\t\t<ul class=\"left-list\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-headset\"></i>\tSupport
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>\tinfo@Dooplo.com
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"language-selector\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"language\" class=\"language\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">English</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">France</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Japan</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"right-content\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"right-list\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart-icon tm-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cart-arrow-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cart-count\">10</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tm-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"number-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>24</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>25</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>26</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>27</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>28</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"number-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>24</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>25</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>26</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>27</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>28</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"number-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>24</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>25</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>26</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>27</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>28</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"number-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>24</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>25</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>26</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>27</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>28</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"cart.html\" class=\"link-btn\">Cart Page</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notofication tm-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"count\">11</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tm-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInvest Exchange
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInvest Exchange
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInvest Exchange
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInvest Exchange
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInvest Exchange
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"sign-in\" data-toggle=\"modal\" data-target=\"#login\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i> Sign In
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- Top Header Area End -->
\t\t<!--Main-Menu Area Start-->
\t\t<div class=\"mainmenu-area\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">                 
\t\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t\t\t\t<div class=\"container-fluid p-0\">
\t\t\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t\t\t\t\t<img src=\"assets2/images/logo.png\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
\t\t\t\t\t\t\t\t\tdata-bs-target=\"#main_menu\" aria-controls=\"main_menu\" aria-expanded=\"false\"
\t\t\t\t\t\t\t\t\taria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-end fixed-height\" id=\"main_menu\">
\t\t\t\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\tHome
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-hover-effect\"></div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"index.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>Home 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"index2.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i> Home 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"play.html\">Play
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-hover-effect\"></div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"lottery.html\">lottery
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-hover-effect\"></div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"tournaments.html\">tournaments
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-hover-effect\"></div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\tPages
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-hover-effect\"></div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"about.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>About</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"affiliate.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>Affiliate</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"awards.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>Awards</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"bonus.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>Bonus</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"cart.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>Cart</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"faq.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>Faq</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"how-it-work.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>How It Work</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"terms-conditions.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>Terms & Condition</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"terms-conditions-details.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>Condition Details</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"404.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-angle-double-right\"></i>404</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"contact.html\">Contact
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-hover-effect\"></div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mybtn1\" data-toggle=\"modal\" data-target=\"#signin\"> Join us</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--Main-Menu Area Start-->
\t</header>
\t<!-- Header Area End  -->

\t<!-- Breadcrumb Area Start -->
\t<section class=\"breadcrumb-area bc-contact\">
\t\t<img class=\"bc-img\" src=\"assets2/images/breadcrumb/contact.png\" alt=\"\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\tContact
\t\t\t\t\t</h4>
\t\t\t\t\t<ul class=\"breadcrumb-list\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-home\"></i>
\t\t\t\t\t\t\t\t\tHome
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<span><i class=\"fas fa-chevron-right\"></i> </span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"contact.html\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Breadcrumb Area End -->

\t<!-- Contact Area End -->
\t<section class=\"contact\">
\t\t<img class=\"left-img\" src=\"assets2/images/contact-left.png\" alt=\"\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-lg-8 col-md-10\">
\t\t\t\t\t<div class=\"section-heading\">
\t\t\t\t\t\t<h5 class=\"subtitle\">
\t\t\t\t\t\t\tContact Us
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<h2 class=\"title\">
\t\t\t\t\t\t\tGet in Touch
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<p class=\"text\">
\t\t\t\t\t\t\t\tIt’s up to the competition in features, with some unique 
\t\t\t\t\t\t\t\tadvantages.All the latest crypto games.Here are some of them.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row justify-content-end\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"contact-form-wrapper\">
\t\t\t\t\t\t<div class=\"contact-box\">
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\tSend Us a Message
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t{{ form_start(form, {'attr': {'class':'form-horizontal'}}) }}
{{ form_errors(form) }}
\t<div class=\"form-group\">
\t\t<div class=\"col-xs-6\">
\t\t\t{{ form_row(form.Nombre, {'attr': {'class':'form-control'}}) }}
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-xs-12\">
\t\t\t{{ form_row(form.Correo, {'attr': {'class':'form-control'}}) }}
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-xs-12\">
\t\t\t{{ form_row(form.Mensaje, {'attr': {'class':'form-control'}}) }}
\t\t\t{{ form_row(form.Send, {'attr': {'class':'pull-right btn btn-lg sr-button'}}) }}
\t\t</div>
\t</div>
{{ form_end(form) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Contact Area End -->

\t<!-- Footer Area Start -->
\t<footer class=\"footer\" id=\"footer\">
\t\t\t<div class=\"subscribe-area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div class=\"subscribe-box\">
\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"heading-area\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"sub-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tsubscribe to Dooplo
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tTo Get Exclusive Benefits
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-4 d-flex align-self-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets2/images/mail-box.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-8 d-flex align-self-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-area\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Your Email Address\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 d-flex align-self-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"button-area\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"mybtn1\" type=\"submit\">Subscribe
\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"fas fa-paper-plane\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"footer-widget info-link-widget\">
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\tAbout 
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<ul class=\"link-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>\tAbout Us
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>\tContact Us
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>\tLatest Blog
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>\tAuthenticity Guarantee
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>\tCustomer Reviews
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>\tPrivacy Policy
\t
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"footer-widget info-link-widget\">
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<ul class=\"link-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i> Manage Your Account
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i> How to Deposit
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i> How to Withdraw
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i> Account Varification
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i> Safety & Security
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i> Membership Level
\t
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"footer-widget info-link-widget\">
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\thelp center 
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<ul class=\"link-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Help centre
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>FAQ
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Quick Start Guide
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Tutorials
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Borrow
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Lend
\t
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t<div class=\"footer-widget info-link-widget\">
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\tLegal Info
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<ul class=\"link-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Risk Warnings
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Privacy Notice
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Security
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Terms of Service
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Become Affiliate
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>Complaints Policy
\t
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"copy-bg\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t<div class=\"left-area\">
\t\t\t\t\t\t\t\t<p>Copyright © 2019.All Rights Reserved By <a href=\"#\">Dooplo</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t<ul class=\"copright-area-links\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Terms Of Use</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Privacy Policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Gamble</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Aware</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Help Cente</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t</footer> 
\t<!-- Footer Area End -->

\t<!-- Back to Top Start -->
\t<div class=\"bottomtotop\">
\t\t<i class=\"fas fa-chevron-right\"></i>
\t</div>
\t<!-- Back to Top End -->

\t<!-- Login Area Start -->
\t<div class=\"modal fade login-modal\" id=\"login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"login\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"logo-area\">
\t\t\t\t\t\t\t<img class=\"logo\" src=\"assets2/images/logo.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-area\">
\t\t\t\t\t\t<h4 class=\"title\">Great to have you back!</h4>
\t\t\t\t\t\t<p class=\"sub-title\">Enter your details below.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-area\">
\t\t\t\t\t\t<form action=\"#\"  method=\"POST\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"login-input-email\">Email*</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"input-field\" id=\"login-input-email\"  placeholder=\"Enter your Email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"login-input-password\">Password*</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"input-field\" id=\"login-input-password\"  placeholder=\"Password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"check-box-field\" id=\"input-save-password\" checked>
\t\t\t\t\t\t\t\t\t\t<label for=\"input-save-password\">Remember Password</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\tForgot Password?
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t   <button type=\"submit\" class=\"mybtn1\">Log In</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-footer\">
\t\t\t\t\t\t<p>Not a member? 
\t\t\t\t\t\t\t\t<a href=\"#\">Create account <i class=\"fas fa-angle-double-right\"></i></a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Login Area End -->
\t
\t\t<!-- SignIn Area Start -->
\t\t<div class=\"modal fade login-modal sign-in\" id=\"signin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"signin\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog modal-dialog-centered \" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"logo-area\">
\t\t\t\t\t\t\t\t<img class=\"logo\" src=\"assets2/images/logo.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-area\">
\t\t\t\t\t\t\t<h4 class=\"title\">Great to have you back!</h4>
\t\t\t\t\t\t\t<p class=\"sub-title\">Enter your details below.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-area\">
\t\t\t\t\t\t\t<form action=\"#\" method=\"POST\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-name\">Name*</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"input-field\" id=\"input-name\"  placeholder=\"Enter your Name\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-email\">Email*</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"input-field\" id=\"input-email\"  placeholder=\"Enter your Email\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-password\">Password*</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"input-field\" id=\"input-password\"  placeholder=\"Enter your password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-con-password\">confirm password**</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"input-field\" id=\"input-con-password\"  placeholder=\"Enter your Confirm Password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">BTC</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">USD</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">EUR</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"check-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"check-box-field\" id=\"input-terms\" checked>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-terms\">
\t\t\t\t\t\t\t\t\t\t\t\t\tI agree with <a href=\"#\">terms and Conditions</a> and  <a href=\"#\">privacy policy</a>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"mybtn1\">Take Bonus</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t<!-- SignIn Area End -->

\t<!-- jquery -->
\t<script src=\"assets2/js/jquery.js\"></script>
\t<!-- popper -->
\t<script src=\"assets2/js/popper.min.js\"></script>
\t<!-- bootstrap -->
\t<script src=\"assets2/js/bootstrap.min.js\"></script>
\t<!-- plugin js-->
\t<script src=\"assets2/js/plugin.js\"></script>

\t<!-- MpusemoverParallax JS-->
\t<script src=\"assets2/js/TweenMax.js\"></script>
\t<script src=\"assets2/js/mousemoveparallax.js\"></script>
\t<!-- main -->
\t<script src=\"assets2/js/main.js\"></script>
</body>

</html>", "funciones/contacto.html.twig", "/home/alumno/Symf/symfony-casino/templates/funciones/contacto.html.twig");
    }
}
