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

/* backOffice/backOffice.html.twig */
class __TwigTemplate_c3aae708e82b595aa1b252965d1e911d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/backOffice.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "backOffice/backOffice.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil Administration";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container-body\">

        <h1>Bienvenue dans l'administration du site BIO&VIE</h1>

        <div class=\"container-admin\">

            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operateurs_index");
        echo "\">
                <div class=\"card\">
                    <img class=\"img-back\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/back/artisans.jpg"), "html", null, true);
        echo "\" alt=\"Homme souriant avec chapeau de paille tenant un panier de légumes\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Artisans</h5>
                    </div>
                </div>
            </a>

            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_index");
        echo "\">
                <div class=\"card\">
                    <img class=\"img-back\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/back/categories.jpg"), "html", null, true);
        echo "\" alt=\"image avec différentes catégories de produits bio\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Catégories</h5>
                    </div>
                </div>
            </a>

            <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activites_index");
        echo "\">
                <div class=\"card\">
                    <img class=\"img-back\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/back/activites.jpg"), "html", null, true);
        echo "\" alt=\"image avec différentes activités et types de circuits de distributions de produits bio\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Activités</h5>
                    </div>
                </div>
            </a>

        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "backOffice/backOffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  112 => 31,  102 => 24,  97 => 22,  87 => 15,  82 => 13,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Accueil Administration{% endblock %}

{% block body %}

    <div class=\"container-body\">

        <h1>Bienvenue dans l'administration du site BIO&VIE</h1>

        <div class=\"container-admin\">

            <a href=\"{{ path(\"app_operateurs_index\") }}\">
                <div class=\"card\">
                    <img class=\"img-back\" src=\"{{ asset(\"images/back/artisans.jpg\") }}\" alt=\"Homme souriant avec chapeau de paille tenant un panier de légumes\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Artisans</h5>
                    </div>
                </div>
            </a>

            <a href=\"{{ path(\"app_categories_index\") }}\">
                <div class=\"card\">
                    <img class=\"img-back\" src=\"{{ asset(\"images/back/categories.jpg\") }}\" alt=\"image avec différentes catégories de produits bio\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Catégories</h5>
                    </div>
                </div>
            </a>

            <a href=\"{{ path(\"app_activites_index\") }}\">
                <div class=\"card\">
                    <img class=\"img-back\" src=\"{{ asset(\"images/back/activites.jpg\") }}\" alt=\"image avec différentes activités et types de circuits de distributions de produits bio\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Activités</h5>
                    </div>
                </div>
            </a>

        </div>

    </div>

{% endblock %}", "backOffice/backOffice.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\backOffice\\backOffice.html.twig");
    }
}
