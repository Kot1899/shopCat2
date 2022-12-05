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

/* product/productPage.html.twig */
class __TwigTemplate_80b80d7ec788661c972e2dd39e8d733e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/productPage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/productPage.html.twig", 1);
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
        echo "        <main class=\"container mt-5\" >
            <h3 class=\"mb-5\">Gattino</h3>
            <div class=\"d-flex flex-wrap\" >
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productPageArray"]) || array_key_exists("productPageArray", $context) ? $context["productPageArray"] : (function () { throw new RuntimeError('Variable "productPageArray" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "                <div class=\"card mb-4 rounded-3 shadow-sm\">
                    <div class=\"card-header py-3\">
                        <h4 class=\"my-0 \">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</h4>
                    </div>
                    <div class=\"card-body\">
";
            // line 13
            echo "                        <img src=\"/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo ".jpg\" class=\"img-thumbnail\">
                        <ul class=\"fontMedium list-unstyled mt-3 mb-4\">
                            <li>Breed     -  ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "breed", [], "any", false, false, false, 15), "html", null, true);
            echo "</li>
                            <li>Age       - ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "age", [], "any", false, false, false, 16), "html", null, true);
            echo " month</li>
                            <li>Character - ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "character_cat", [], "any", false, false, false, 17), "html", null, true);
            echo " </li>
                            <li>Soldi     - ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "soldi", [], "any", false, false, false, 18), "html", null, true);
            echo "</li>
                        </ul>
                        <div class=\"centerQ\">
                            <a class=\"btn btn-primary\" href=";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productId", ["productId" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "method", false, false, false, 21)]), "html", null, true);
            echo ">Detail</a>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </div>
        </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "product/productPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 26,  102 => 21,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  78 => 13,  72 => 9,  68 => 7,  64 => 6,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
        <main class=\"container mt-5\" >
            <h3 class=\"mb-5\">Gattino</h3>
            <div class=\"d-flex flex-wrap\" >
                {% for item in productPageArray %}
                <div class=\"card mb-4 rounded-3 shadow-sm\">
                    <div class=\"card-header py-3\">
                        <h4 class=\"my-0 \">{{ item.name }}</h4>
                    </div>
                    <div class=\"card-body\">
{#                        <img :src=\"`images/Andrea.jpg`\" class=\"img-thumbnail\">#}
                        <img src=\"/images/{{ item.name }}.jpg\" class=\"img-thumbnail\">
                        <ul class=\"fontMedium list-unstyled mt-3 mb-4\">
                            <li>Breed     -  {{ item.breed }}</li>
                            <li>Age       - {{ item.age }} month</li>
                            <li>Character - {{ item.character_cat}} </li>
                            <li>Soldi     - {{ item.soldi }}</li>
                        </ul>
                        <div class=\"centerQ\">
                            <a class=\"btn btn-primary\" href={{ path('productId', { productId: item.id() }) }}>Detail</a>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </main>
{% endblock %}", "product/productPage.html.twig", "/Users/acmilan/PhpstormProjects/shopCat2/source/templates/product/productPage.html.twig");
    }
}
