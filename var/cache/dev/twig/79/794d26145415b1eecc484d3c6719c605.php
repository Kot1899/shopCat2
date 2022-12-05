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

/* about/aboutPage.html.twig */
class __TwigTemplate_446daf858474633e23bdd36036d9844c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/aboutPage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/aboutPage.html.twig", 1);
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
        <h1>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["aboutPage"]) || array_key_exists("aboutPage", $context) ? $context["aboutPage"] : (function () { throw new RuntimeError('Variable "aboutPage" does not exist.', 4, $this->source); })()), "getTitle", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
        <div class=\"d-flex flex-wrap\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aboutPageArray"]) || array_key_exists("aboutPageArray", $context) ? $context["aboutPageArray"] : (function () { throw new RuntimeError('Variable "aboutPageArray" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "                <div class=\"card mb-4 rounded-3 shadow-sm\">
                    <div class=\"card-body\">
                        <img src=\"/images/";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo "_Milan_650x404.jpg\" class=\"img-thumbnail\">
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            <p class=\"stb\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["aboutPage"]) || array_key_exists("aboutPage", $context) ? $context["aboutPage"] : (function () { throw new RuntimeError('Variable "aboutPage" does not exist.', 13, $this->source); })()), "getDescription", [], "any", false, false, false, 13), "html", null, true);
        echo " </p>
            <p class=\"stb\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["aboutPage"]) || array_key_exists("aboutPage", $context) ? $context["aboutPage"] : (function () { throw new RuntimeError('Variable "aboutPage" does not exist.', 14, $this->source); })()), "getFooter", [], "any", false, false, false, 14), "html", null, true);
        echo " </p>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "about/aboutPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 14,  85 => 13,  75 => 9,  71 => 7,  67 => 6,  62 => 4,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <main class=\"container px-3\">
        <h1>{{ aboutPage.getTitle }}</h1>
        <div class=\"d-flex flex-wrap\">
            {% for item in aboutPageArray %}
                <div class=\"card mb-4 rounded-3 shadow-sm\">
                    <div class=\"card-body\">
                        <img src=\"/images/{{ item.id }}_Milan_650x404.jpg\" class=\"img-thumbnail\">
                    </div>
                </div>
            {% endfor %}
            <p class=\"stb\">{{ aboutPage.getDescription }} </p>
            <p class=\"stb\">{{ aboutPage.getFooter }} </p>
        </div>
    </main>
{% endblock %}

", "about/aboutPage.html.twig", "/Users/acmilan/PhpstormProjects/shopCat2/source/templates/about/aboutPage.html.twig");
    }
}
