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

/* contact/contact.html.twig */
class __TwigTemplate_9d9746c3705c162e445fd1dffc304242 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <section id=\"section-contact\">

        <div class=\"container\">

            <div class=\"formulaire\">
                <h1>CONTACTEZ-NOUS</h1>
                ";
        // line 11
        echo twig_include($this->env, $context, "contact/_form.html.twig");
        echo "
            </div>

            <div class=\"disposition-droite\">

                <div class=\"infos-droite\">
                    <h2>NOS INFORMATIONS</h2>
                    <div class=\"mail infos\">
                        <i class=\"fa-sharp fa-solid fa-envelope-open-text\"></i>
                        <p>contact@bio-et-vie.fr</p>
                    </div>
                    <div class=\"fixe infos\">
                        <i class=\"fa-solid fa-phone-flip\"></i>
                        <p>04 75 25 53 00</p>
                    </div>
                    <div class=\"mobile infos\">
                        <i class=\"fa-solid fa-mobile-screen-button\"></i>
                        <p>06 68 54 78 00</p>
                    </div>
                </div>
            
                <div class=\"map-droite\">
                    <iframe src=\"https://www.google.com/maps/d/embed?mid=1939EUGCct0qvSjHoL6gfEzOAl8ZeNXM&ehbc=2E312F\"></iframe>
                </div>

            </div>

        </div>

\t</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <section id=\"section-contact\">

        <div class=\"container\">

            <div class=\"formulaire\">
                <h1>CONTACTEZ-NOUS</h1>
                {{ include('contact/_form.html.twig') }}
            </div>

            <div class=\"disposition-droite\">

                <div class=\"infos-droite\">
                    <h2>NOS INFORMATIONS</h2>
                    <div class=\"mail infos\">
                        <i class=\"fa-sharp fa-solid fa-envelope-open-text\"></i>
                        <p>contact@bio-et-vie.fr</p>
                    </div>
                    <div class=\"fixe infos\">
                        <i class=\"fa-solid fa-phone-flip\"></i>
                        <p>04 75 25 53 00</p>
                    </div>
                    <div class=\"mobile infos\">
                        <i class=\"fa-solid fa-mobile-screen-button\"></i>
                        <p>06 68 54 78 00</p>
                    </div>
                </div>
            
                <div class=\"map-droite\">
                    <iframe src=\"https://www.google.com/maps/d/embed?mid=1939EUGCct0qvSjHoL6gfEzOAl8ZeNXM&ehbc=2E312F\"></iframe>
                </div>

            </div>

        </div>

\t</section>

{% endblock %}", "contact/contact.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\contact\\contact.html.twig");
    }
}
