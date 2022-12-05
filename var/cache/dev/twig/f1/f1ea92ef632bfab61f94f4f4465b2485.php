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

/* contact/contactPage.html.twig */
class __TwigTemplate_4e8fe379b6faae8b9dfd11b8d1498c90 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contactPage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/contactPage.html.twig", 1);
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
        <h1 class=\"mb-5\">Contacts</h1>
        <div class=\"d-flex flex-wrap\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contactPageArray"]) || array_key_exists("contactPageArray", $context) ? $context["contactPageArray"] : (function () { throw new RuntimeError('Variable "contactPageArray" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "            <div class=\"card1 mb-3 rounded-3 \">
                <div class=\"card-body-contact\">
                    <img src=\"images/";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Id", [], "any", false, false, false, 9), "html", null, true);
            echo "_contact.jpg\" class=\"img-thumbnail\">
                    <ul class=\"list-unstyled mt-3 mb-4\">
                        <li>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 11), "html", null, true);
            echo " </li>
                    </ul>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contact/contactPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 16,  77 => 11,  72 => 9,  68 => 7,  64 => 6,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <main class=\"container px-3\">
        <h1 class=\"mb-5\">Contacts</h1>
        <div class=\"d-flex flex-wrap\">
            {% for item in contactPageArray %}
            <div class=\"card1 mb-3 rounded-3 \">
                <div class=\"card-body-contact\">
                    <img src=\"images/{{ item.Id }}_contact.jpg\" class=\"img-thumbnail\">
                    <ul class=\"list-unstyled mt-3 mb-4\">
                        <li>{{ item.email }} </li>
                    </ul>
                </div>
            </div>
            {% endfor %}
        </div>
    </main>
{% endblock %}", "contact/contactPage.html.twig", "/Users/acmilan/PhpstormProjects/shopCat2/source/templates/contact/contactPage.html.twig");
    }
}
