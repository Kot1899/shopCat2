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

/* base.html.twig */
class __TwigTemplate_464bf591f11186abbe5034877857093c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <link rel=\"shortcut icon\" href=\"/images/favicon.ico\">
        <link rel=\"shortcut icon\" type=\"image/x-icon\"  href=\"/images/favicon.ico\">
        <link rel=\"stylesheet\" href=\"/css/style.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" >
        <meta charset=\"UTF-8\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    </head>
    <style>
        .btn-outline-primary {
            color: #0d6efd;
            border-color: #0d6efd;
            margin-left: 5px;
        }
    </style>
    <header>
        <div class=\"container\">
            <div class=\"d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom\">
                <a href=\"/main\" class=\"d-flex align-items-center text-dark text-decoration-none\">
                    <a class=\"header-kot text-decoration-none\" href=";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mainPage");
        echo ">gattino.Store</a>
                </a>
                <nav class=\"d-inline-flex mt-2 mt-md-0 ms-md-auto\">
                    <a class=\"me-3 py-2 text-dark text-decoration-none\" href=";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mainPage");
        echo ">Main</a>
                    <a class=\"me-3 py-2 text-dark text-decoration-none\" href=";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productPage");
        echo ">Product</a>
                    <a class=\"me-3 py-2 text-dark text-decoration-none\" href=";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accountPage");
        echo ">Account</a>
                    <a class=\"me-3 py-2 text-dark text-decoration-none\" href=";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cartPage");
        echo ">Cart</a>
                </nav>
                    ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            // line 32
            echo "                        <strong> Hello, ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "html", null, true);
            echo " </strong>
                        <a class=\"btn btn-outline-primary\" href=/logout >Logout</a>
                    ";
        } else {
            // line 35
            echo "                        <a class=\"btn btn-outline-primary\" href=";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo ">Sign in</a>
                    ";
        }
        // line 37
        echo "            </div>
        </div>
    </header>
    <body>
        <div class=\"container\">
            ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "        </div>
    </body>
    <footer class=\" container pt-4 my-md-5 pt-md-5 border-top\">
        <div class=\"row\">
            <div class=\"col-12 col-md\">
                <small class=\"d-block mb-3 text-muted\">© gattino.store</small>
            </div>
            <div class=\"col-3 col-md\">
                <a class=\"p-2 link-secondary\" href=";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aboutPage");
        echo ">About</a>
            </div>
            <div class=\"col-3 col-md\">
                <a class=\"p-2 link-secondary\" href=";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contactPage");
        echo ">Contact</a>
            </div>
            <div class=\"col-3 col-md\">
                <a class=\"p-2 link-secondary\" href=\"https://instagram.com\" target=\"_blank\">Instagram</a>
            </div>
            <div class=\"col-3 col-md\">
                <a class=\"p-2 link-secondary\" href=\"https://Facebook.com\" target=\"_blank\">Facebook</a>
            </div>
        </div>

    </footer>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 42,  152 => 9,  132 => 54,  126 => 51,  116 => 43,  114 => 42,  107 => 37,  101 => 35,  94 => 32,  92 => 31,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  69 => 23,  52 => 9,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <link rel=\"shortcut icon\" href=\"/images/favicon.ico\">
        <link rel=\"shortcut icon\" type=\"image/x-icon\"  href=\"/images/favicon.ico\">
        <link rel=\"stylesheet\" href=\"/css/style.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" >
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    </head>
    <style>
        .btn-outline-primary {
            color: #0d6efd;
            border-color: #0d6efd;
            margin-left: 5px;
        }
    </style>
    <header>
        <div class=\"container\">
            <div class=\"d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom\">
                <a href=\"/main\" class=\"d-flex align-items-center text-dark text-decoration-none\">
                    <a class=\"header-kot text-decoration-none\" href={{ path('mainPage') }}>gattino.Store</a>
                </a>
                <nav class=\"d-inline-flex mt-2 mt-md-0 ms-md-auto\">
                    <a class=\"me-3 py-2 text-dark text-decoration-none\" href={{ path('mainPage') }}>Main</a>
                    <a class=\"me-3 py-2 text-dark text-decoration-none\" href={{ path('productPage') }}>Product</a>
                    <a class=\"me-3 py-2 text-dark text-decoration-none\" href={{ path('accountPage') }}>Account</a>
                    <a class=\"me-3 py-2 text-dark text-decoration-none\" href={{ path('cartPage') }}>Cart</a>
                </nav>
                    {% if app.user %}
                        <strong> Hello, {{ app.user   }} </strong>
                        <a class=\"btn btn-outline-primary\" href=/logout >Logout</a>
                    {% else %}
                        <a class=\"btn btn-outline-primary\" href={{ path('login') }}>Sign in</a>
                    {% endif %}
            </div>
        </div>
    </header>
    <body>
        <div class=\"container\">
            {% block body %}{% endblock %}
        </div>
    </body>
    <footer class=\" container pt-4 my-md-5 pt-md-5 border-top\">
        <div class=\"row\">
            <div class=\"col-12 col-md\">
                <small class=\"d-block mb-3 text-muted\">© gattino.store</small>
            </div>
            <div class=\"col-3 col-md\">
                <a class=\"p-2 link-secondary\" href={{ path('aboutPage') }}>About</a>
            </div>
            <div class=\"col-3 col-md\">
                <a class=\"p-2 link-secondary\" href={{ path('contactPage') }}>Contact</a>
            </div>
            <div class=\"col-3 col-md\">
                <a class=\"p-2 link-secondary\" href=\"https://instagram.com\" target=\"_blank\">Instagram</a>
            </div>
            <div class=\"col-3 col-md\">
                <a class=\"p-2 link-secondary\" href=\"https://Facebook.com\" target=\"_blank\">Facebook</a>
            </div>
        </div>

    </footer>
</html>
", "base.html.twig", "/Users/acmilan/PhpstormProjects/shopCat2/source/templates/base.html.twig");
    }
}
