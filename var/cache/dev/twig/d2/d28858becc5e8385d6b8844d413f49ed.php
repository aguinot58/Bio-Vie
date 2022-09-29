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

/* home/home.html.twig */
class __TwigTemplate_83d7c3e7c6bc4bd3cbaa100a2f83bcef extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
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
    <section id=\"section-titre\">

        <div class=\"container\">
            <h1>BIO&VIE</h1>
            <h3 class=\"sous-titre\">Votre catalogue</h3>
            <h3>des professionnels certifiés bio</h3>
        </div>

\t</section>

    <section id=\"section-nombre\">
            
            <div class=\"image\">
                <img class=\"img-desktop\" title=\"Photo décorative femme asiatique cueillant olives vertes\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/index/infos.jpg"), "html", null, true);
        echo "\" alt=\"femme asiatique cueillant des olives vertes\">
                <img class=\"img-mobile\" title=\"Photo décorative femme asiatique cueillant olives vertes\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/index/infos-mobile.jpg"), "html", null, true);
        echo "\" alt=\"femme asiatique cueillant des olives vertes\">
            </div>

            <div class=\"infos\">
                <img title=\"icon-blé\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-ble.png"), "html", null, true);
        echo "\" alt=\"logo représentant des épis de blés\">
                <p class=\"nombre\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</p>
                <p>professionnels</p>
                <img id=\"img-France\" title=\"icon-france\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-france.png"), "html", null, true);
        echo "\" alt=\"logo représentant la carte de France\">
                <p>Dans la France entière</p>
            </div>

\t</section>

    <section id=\"section-presentation\">

        <div class=\"container\">

            <div class=\"image\">
                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/index/presentation.jpg"), "html", null, true);
        echo "\" alt=\"couple d'une cinquantaine d'années tenant des barquettes en plastique de boutures de plantes\">
                <div class=\"bande-verte-2\"></div>
            </div>

            <div class=\"infos\">
                <h2>QUI SONT-ILS ?</h2>
                <div class=\"bande-verte-1\"></div>
                <p>Lorem ipsum dolor sit amet. Ut corporis galisum ad facilis deserunt quo pariatur culpa eum impedit nulla ut recusandae iste. 
                    Sit magni consequatur eum cumque commodi est incidunt nihil et voluptatem consectetur nam reprehenderit quidem ad voluptate 
                    illum in soluta minima. 
                </p>
            </div>
            
        </div>

\t</section>
    

    <section id=\"section-categories\">

        <div class=\"container\">

            ";
        // line 59
        $this->loadTemplate("home/_form2.html.twig", "home/home.html.twig", 59)->display($context);
        // line 60
        echo "
        </div>

    </section>

    <section id=\"section-artisans\">

        <div class=\"container\">

            <h2>LES PROFESSIONNELS</h2>
            <div class=\"bande-verte-3\"></div>

            <div id=\"content-ajax\">

                ";
        // line 79
        echo "
                ";
        // line 80
        $this->loadTemplate("operateurs/_card2.html.twig", "home/home.html.twig", 80)->display($context);
        // line 81
        echo "


            </div>

        </div>
        <div class=\"bande-verte-4\"></div>

    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 81,  155 => 80,  152 => 79,  136 => 60,  134 => 59,  109 => 37,  95 => 26,  90 => 24,  86 => 23,  79 => 19,  75 => 18,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

    <section id=\"section-titre\">

        <div class=\"container\">
            <h1>BIO&VIE</h1>
            <h3 class=\"sous-titre\">Votre catalogue</h3>
            <h3>des professionnels certifiés bio</h3>
        </div>

\t</section>

    <section id=\"section-nombre\">
            
            <div class=\"image\">
                <img class=\"img-desktop\" title=\"Photo décorative femme asiatique cueillant olives vertes\" src=\"{{ asset('images/index/infos.jpg') }}\" alt=\"femme asiatique cueillant des olives vertes\">
                <img class=\"img-mobile\" title=\"Photo décorative femme asiatique cueillant olives vertes\" src=\"{{ asset('images/index/infos-mobile.jpg') }}\" alt=\"femme asiatique cueillant des olives vertes\">
            </div>

            <div class=\"infos\">
                <img title=\"icon-blé\" src=\"{{ asset('images/icons/icon-ble.png') }}\" alt=\"logo représentant des épis de blés\">
                <p class=\"nombre\">{{ donnees }}</p>
                <p>professionnels</p>
                <img id=\"img-France\" title=\"icon-france\" src=\"{{ asset('images/icons/icon-france.png') }}\" alt=\"logo représentant la carte de France\">
                <p>Dans la France entière</p>
            </div>

\t</section>

    <section id=\"section-presentation\">

        <div class=\"container\">

            <div class=\"image\">
                <img src=\"{{ asset('images/index/presentation.jpg') }}\" alt=\"couple d'une cinquantaine d'années tenant des barquettes en plastique de boutures de plantes\">
                <div class=\"bande-verte-2\"></div>
            </div>

            <div class=\"infos\">
                <h2>QUI SONT-ILS ?</h2>
                <div class=\"bande-verte-1\"></div>
                <p>Lorem ipsum dolor sit amet. Ut corporis galisum ad facilis deserunt quo pariatur culpa eum impedit nulla ut recusandae iste. 
                    Sit magni consequatur eum cumque commodi est incidunt nihil et voluptatem consectetur nam reprehenderit quidem ad voluptate 
                    illum in soluta minima. 
                </p>
            </div>
            
        </div>

\t</section>
    

    <section id=\"section-categories\">

        <div class=\"container\">

            {% include 'home/_form2.html.twig' %}

        </div>

    </section>

    <section id=\"section-artisans\">

        <div class=\"container\">

            <h2>LES PROFESSIONNELS</h2>
            <div class=\"bande-verte-3\"></div>

            <div id=\"content-ajax\">

                {#{% for operateur in operateursFiltered %}

                        {% include 'operateurs/_card.html.twig' with {operateur: operateur} only %}

                {% endfor %}#}

                {% include 'operateurs/_card2.html.twig' %}



            </div>

        </div>
        <div class=\"bande-verte-4\"></div>

    </section>

{% endblock %}", "home/home.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\home\\home.html.twig");
    }
}
