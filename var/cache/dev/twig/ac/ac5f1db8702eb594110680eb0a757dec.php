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

/* back.html.twig */
class __TwigTemplate_6af58990779f0617d0620ed75fdc3efa extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css\" integrity=\"sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript/back.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/back.css"), "html", null, true);
        echo "\">

        ";
        // line 16
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </head>

    <body>

        <div class=\"container-back\">

            <header>
                <div class=\"container\">
                    <div class=\"site\">
                        <a class=\"nom-site\" href=\"/\"><p>BIO&VIE</p></a>
                        <img class=\"image-site\" title=\"icon-blé\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-ble.png"), "html", null, true);
        echo "\" alt=\"logo représentant des épis de blés\">
                    </div>
                    <div class=\"barre-nav\">
                        <a class=\"lien-nav\" href=\"/back\"><p>Accueil administration</p></a>
                        <a class=\"lien-nav\" href=\"/operateurs/?page=1\"><p>Gérer les artisans</p></a>
                        <a class=\"lien-nav\" href=\"/categories/?page=1\"><p>Gérer les catégories</p></a>
                        <a class=\"lien-nav\" href=\"/activites/?page=1\"><p>Gérer les activités</p></a>
                    </div>
                    <div id=\"menuToggle\">
                        <div class=\"icon-menu-close\">
                            <i class=\"fa-solid fa-bars\"></i>
                            <ul id=\"menu\">
                                <i class=\"fa-solid fa-chevron-left icon-menu-open\"></i>
                                <li><a class=\"lien-nav\" href=\"/back\"><p>Accueil administration</p></a></li>
                                <li><a class=\"lien-nav\" href=\"/operateurs/?page=1\"><p>Gérer les artisans</p></a></li>
                                <li><a class=\"lien-nav\" href=\"/categories/?page=1\"><p>Gérer les catégories</p></a></li>
                                <li><a class=\"lien-nav\" href=\"/activites/?page=1\"><p>Gérer les activités</p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "
        </div>

    </body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Back_Bio_et_Vie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 56
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "            
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 57,  176 => 56,  166 => 21,  159 => 20,  149 => 17,  142 => 16,  129 => 5,  117 => 59,  115 => 56,  89 => 33,  77 => 23,  75 => 20,  72 => 19,  69 => 16,  64 => 13,  60 => 12,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Back_Bio_et_Vie{% endblock %}</title>

        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css\" integrity=\"sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

        <script src=\"{{ asset('javascript/back.js') }}\"></script>
        <link rel=\"stylesheet\" href=\"{{ asset('styles/back.css') }}\">

        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>

    <body>

        <div class=\"container-back\">

            <header>
                <div class=\"container\">
                    <div class=\"site\">
                        <a class=\"nom-site\" href=\"/\"><p>BIO&VIE</p></a>
                        <img class=\"image-site\" title=\"icon-blé\" src=\"{{ asset('images/icons/icon-ble.png') }}\" alt=\"logo représentant des épis de blés\">
                    </div>
                    <div class=\"barre-nav\">
                        <a class=\"lien-nav\" href=\"/back\"><p>Accueil administration</p></a>
                        <a class=\"lien-nav\" href=\"/operateurs/?page=1\"><p>Gérer les artisans</p></a>
                        <a class=\"lien-nav\" href=\"/categories/?page=1\"><p>Gérer les catégories</p></a>
                        <a class=\"lien-nav\" href=\"/activites/?page=1\"><p>Gérer les activités</p></a>
                    </div>
                    <div id=\"menuToggle\">
                        <div class=\"icon-menu-close\">
                            <i class=\"fa-solid fa-bars\"></i>
                            <ul id=\"menu\">
                                <i class=\"fa-solid fa-chevron-left icon-menu-open\"></i>
                                <li><a class=\"lien-nav\" href=\"/back\"><p>Accueil administration</p></a></li>
                                <li><a class=\"lien-nav\" href=\"/operateurs/?page=1\"><p>Gérer les artisans</p></a></li>
                                <li><a class=\"lien-nav\" href=\"/categories/?page=1\"><p>Gérer les catégories</p></a></li>
                                <li><a class=\"lien-nav\" href=\"/activites/?page=1\"><p>Gérer les activités</p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            {% block body %}
            
            {% endblock %}

        </div>

    </body>

</html>", "back.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\back.html.twig");
    }
}
