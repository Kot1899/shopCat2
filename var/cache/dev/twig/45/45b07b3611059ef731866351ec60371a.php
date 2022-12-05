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

/* product/productId.html.twig */
class __TwigTemplate_cbe6c4b513ab36302df869f6c6ef636d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/productId.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/productId.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "        <main class=\"container col-md-6\">
            <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
                <div class=\"col p9-4 d-flex flex-column position-static\" >
                    <strong class=\"d-inline-block mb-2 text-primary fontBig\"> ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo " </strong>
                    <h3 class=\"mb-0\">About me </h3>
                    <p class=\"card-text marginb-2\" > ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 8, $this->source); })()), "story", [], "any", false, false, false, 8), "html", null, true);
        echo " </p>
                    <div class=\"marginb-1\">Age - ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 9, $this->source); })()), "age", [], "any", false, false, false, 9), "html", null, true);
        echo " month</div>
                    <p class=\"card-text marginb-1\"> Character - ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 10, $this->source); })()), "character_cat", [], "any", false, false, false, 10), "html", null, true);
        echo "  </p>
                    <p class=\"card-text marginb-1\"> Soldi - ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 11, $this->source); })()), "soldi", [], "any", false, false, false, 11), "html", null, true);
        echo " </p>
                    <a class=\"btn2 btn2-outline-primary\" href=";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cartPage");
        echo ">Take me</a>
                    <div class=\"col-auto d-none d-lg-block\">
                        <img id=\"object-position-1\" src=\"/images/";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo ".jpg\" class=\"img-product\" width=\"300\" height=\"214\">
                    </div>
                </div>
            </div>
        </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "product/productId.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 14,  85 => 12,  81 => 11,  77 => 10,  73 => 9,  69 => 8,  64 => 6,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
        <main class=\"container col-md-6\">
            <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
                <div class=\"col p9-4 d-flex flex-column position-static\" >
                    <strong class=\"d-inline-block mb-2 text-primary fontBig\"> {{ productId.name }} </strong>
                    <h3 class=\"mb-0\">About me </h3>
                    <p class=\"card-text marginb-2\" > {{ productId.story }} </p>
                    <div class=\"marginb-1\">Age - {{ productId.age }} month</div>
                    <p class=\"card-text marginb-1\"> Character - {{ productId.character_cat }}  </p>
                    <p class=\"card-text marginb-1\"> Soldi - {{ productId.soldi }} </p>
                    <a class=\"btn2 btn2-outline-primary\" href={{ path('cartPage') }}>Take me</a>
                    <div class=\"col-auto d-none d-lg-block\">
                        <img id=\"object-position-1\" src=\"/images/{{ productId.name }}.jpg\" class=\"img-product\" width=\"300\" height=\"214\">
                    </div>
                </div>
            </div>
        </main>
{% endblock %}", "product/productId.html.twig", "/Users/acmilan/PhpstormProjects/shopCat2/source/templates/product/productId.html.twig");
    }
}
