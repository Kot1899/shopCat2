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

/* main/mainPage.html.twig */
class __TwigTemplate_147a73e53ce8a6651a9cbec3ad0c66f1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/mainPage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/mainPage.html.twig", 1);
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
        echo "    <main class=\"container px-3\">
        <h1>  ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mainPage"]) || array_key_exists("mainPage", $context) ? $context["mainPage"] : (function () { throw new RuntimeError('Variable "mainPage" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        echo " </h1>
        <img id=\"object-position-1\" src=\"images/";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mainPage"]) || array_key_exists("mainPage", $context) ? $context["mainPage"] : (function () { throw new RuntimeError('Variable "mainPage" does not exist.', 5, $this->source); })()), "img", [], "any", false, false, false, 5), "html", null, true);
        echo ".jpg\" class=\"img-space\" >
        <p class=\"lead\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mainPage"]) || array_key_exists("mainPage", $context) ? $context["mainPage"] : (function () { throw new RuntimeError('Variable "mainPage" does not exist.', 6, $this->source); })()), "description", [], "any", false, false, false, 6), "html", null, true);
        echo " </p>
        <?php endforeach;?>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/mainPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 6,  66 => 5,  62 => 4,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <main class=\"container px-3\">
        <h1>  {{ mainPage.title }} </h1>
        <img id=\"object-position-1\" src=\"images/{{ mainPage.img }}.jpg\" class=\"img-space\" >
        <p class=\"lead\">{{ mainPage.description }} </p>
        <?php endforeach;?>
    </main>
{% endblock %}", "main/mainPage.html.twig", "/Users/acmilan/PhpstormProjects/shopCat2/source/templates/main/mainPage.html.twig");
    }
}
