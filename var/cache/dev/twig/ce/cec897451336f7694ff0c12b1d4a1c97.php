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

/* main/login.html.twig */
class __TwigTemplate_b4882ae31dd0982686636a9663731640 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/login.html.twig", 1);
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
        echo "
    ";
        // line 4
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "    <span style=\"color: red\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })()), "messageKey", [], "any", false, false, false, 5), "html", null, true);
            echo "</span>
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
        <div class=\"col-md-4\">
            <p>
                <strong>Login:</strong> <input type=\"text\" name=\"_username\" class=\"form-control\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\"/>
            </p>
            <p>
                <strong>Password:</strong> <input type=\"password\" class=\"form-control\" name=\"_password\"/>
            </p>
            <button type=\"submit\" class=\"btn btn-outline-primary\">Submit </button>
            <br/>
            <div class=\"d-flex flex-column flex-md-row align-items-center\">
                <nav class=\"d-inline-flex mt-2 mt-md-0 ms-md-auto\">
                     <a class=\"btn btn-outline-primary\" href=";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registrationPage");
        echo ">Registration</a>
                </nav>
            </div>
        </div>
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  79 => 11,  73 => 8,  70 => 7,  64 => 5,  62 => 4,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

    {% if error %}
    <span style=\"color: red\"> {{ error.messageKey }}</span>
    {% endif %}

    <form action=\"{{ path('login') }}\" method=\"post\">
        <div class=\"col-md-4\">
            <p>
                <strong>Login:</strong> <input type=\"text\" name=\"_username\" class=\"form-control\" value=\"{{ last_username }}\"/>
            </p>
            <p>
                <strong>Password:</strong> <input type=\"password\" class=\"form-control\" name=\"_password\"/>
            </p>
            <button type=\"submit\" class=\"btn btn-outline-primary\">Submit </button>
            <br/>
            <div class=\"d-flex flex-column flex-md-row align-items-center\">
                <nav class=\"d-inline-flex mt-2 mt-md-0 ms-md-auto\">
                     <a class=\"btn btn-outline-primary\" href={{ path('registrationPage') }}>Registration</a>
                </nav>
            </div>
        </div>
    </form>
{% endblock %}", "main/login.html.twig", "/Users/acmilan/PhpstormProjects/shopCat2/source/templates/main/login.html.twig");
    }
}
