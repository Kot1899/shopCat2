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

/* create/getNumber.html.twig */
class __TwigTemplate_86e141bbc5bb788fb04e037723135add extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "create/getNumber.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "create/getNumber.html.twig", 1);
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
        echo "    <strong><h3> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productAll"]) || array_key_exists("productAll", $context) ? $context["productAll"] : (function () { throw new RuntimeError('Variable "productAll" does not exist.', 3, $this->source); })()), "getName", [], "method", false, false, false, 3), "html", null, true);
        echo " </strong></h3>
    <br>
    ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productAll"]) || array_key_exists("productAll", $context) ? $context["productAll"] : (function () { throw new RuntimeError('Variable "productAll" does not exist.', 5, $this->source); })()), "getStory", [], "any", false, false, false, 5), "html", null, true);
        echo "
    <br>
    ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productAll"]) || array_key_exists("productAll", $context) ? $context["productAll"] : (function () { throw new RuntimeError('Variable "productAll" does not exist.', 7, $this->source); })()), "getSoldi", [], "any", false, false, false, 7), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "create/getNumber.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  65 => 5,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <strong><h3> {{ productAll.getName() }} </strong></h3>
    <br>
    {{ productAll.getStory }}
    <br>
    {{ productAll.getSoldi }}
{% endblock %}", "create/getNumber.html.twig", "/Users/acmilan/PhpstormProjects/shopCat2/source/templates/create/getNumber.html.twig");
    }
}
