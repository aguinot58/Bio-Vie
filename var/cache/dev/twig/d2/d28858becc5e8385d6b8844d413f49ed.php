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
                <img title=\"Photo décorative femme asiatique cueillant olives vertes\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/index/infos.jpg"), "html", null, true);
        echo "\" alt=\"femme asiatique cueillant des olives vertes\">
            </div>

            <div class=\"infos\">
                <img title=\"icon-blé\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-ble.png"), "html", null, true);
        echo "\" alt=\"logo représentant des épis de blés\">
                <p class=\"nombre\">";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</p>
                <p>professionnels</p>
                <img id=\"img-France\" title=\"icon-france\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-france.png"), "html", null, true);
        echo "\" alt=\"logo représentant la carte de France\">
                <p>Dans la France entière</p>
            </div>

\t</section>

    <section id=\"section-presentation\">

        <div class=\"container\">

            <div class=\"image\">
                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/index/presentation.jpg"), "html", null, true);
        echo "\" alt=\"couple d'une cinquantaine d'années tenant des barquettes en plastique de boutures de plantes\">
                <div class=\"bande-verte-2\"></div>
            </div>

            <div class=\"infos\">
                <h2>Qui sont-ils ?</h2>
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
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 58
            echo "
                ";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 59) != "En conversion")) {
                // line 60
                echo "
                    <article>
                        <img class=\"img-cat\" src=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 62), "html", null, true);
                echo ".png";
                echo "\" alt=\"icône de la catégorie ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 62), "html", null, true);
                echo "\">
                        <p class=\"nom-cat\">";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 63), "html", null, true);
                echo "</p>
                    </article>

                ";
            }
            // line 67
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
        </div>

    </section>

    <section id=\"section-artisans\">

        <div class=\"container\">

            <h2>Les professionnels</h2>
            <div class=\"bande-verte-3\"></div>

            <div class=\"container-artisans\">

                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operateurs"]) || array_key_exists("operateurs", $context) ? $context["operateurs"] : (function () { throw new RuntimeError('Variable "operateurs" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operateur"]) {
            // line 84
            echo "
                    ";
            // line 85
            $this->loadTemplate("operateurs/_card.html.twig", "home/home.html.twig", 85)->display(twig_to_array(["operateur" => $context["operateur"]]));
            // line 86
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "
            </div>

            ";
        // line 91
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 91, $this->source); })()) > 1)) {
            // line 92
            echo "                <ul>
                    ";
            // line 94
            echo "                    <li ";
            echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 94, $this->source); })()) == 1)) ? ("class=\"disabled\"") : (""));
            echo ">
                        ";
            // line 96
            echo "                        <a href=\"{page: thisPage-1 < 1 ? 1 : thisPage-1}\">«</a>
                    </li>

                    ";
            // line 100
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 100, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 101
                echo "                        <li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 101, $this->source); })()) == $context["i"])) ? ("class=\"active\"") : (""));
                echo ">
                        ";
                // line 103
                echo "                        <a href=\"{page: i}\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "
                    ";
            // line 108
            echo "                    <li ";
            echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 108, $this->source); })()) == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 108, $this->source); })()))) ? ("class=\"disabled\"") : (""));
            echo ">
                        ";
            // line 110
            echo "                        <a href=\"{page: thisPage+1 <= maxPages ? thisPage+1 : thisPage}\">»</a>
                    </li>
                </ul>
            ";
        }
        // line 114
        echo "            
        </div>

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
        return array (  250 => 114,  244 => 110,  239 => 108,  236 => 106,  226 => 103,  221 => 101,  216 => 100,  211 => 96,  206 => 94,  203 => 92,  201 => 91,  196 => 88,  189 => 86,  187 => 85,  184 => 84,  180 => 83,  164 => 69,  157 => 67,  150 => 63,  142 => 62,  138 => 60,  136 => 59,  133 => 58,  129 => 57,  105 => 36,  91 => 25,  86 => 23,  82 => 22,  75 => 18,  59 => 4,  52 => 3,  35 => 1,);
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
                <img title=\"Photo décorative femme asiatique cueillant olives vertes\" src=\"{{ asset('images/index/infos.jpg') }}\" alt=\"femme asiatique cueillant des olives vertes\">
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
                <h2>Qui sont-ils ?</h2>
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

            {% for categorie in categories %}

                {% if categorie.nom != \"En conversion\" %}

                    <article>
                        <img class=\"img-cat\" src=\"{{ asset(\"images/icons/icon-\")}}{{ categorie.nom }}{{(\".png\") }}\" alt=\"icône de la catégorie {{ categorie.nom }}\">
                        <p class=\"nom-cat\">{{ categorie.nom }}</p>
                    </article>

                {% endif %}

            {% endfor %}

        </div>

    </section>

    <section id=\"section-artisans\">

        <div class=\"container\">

            <h2>Les professionnels</h2>
            <div class=\"bande-verte-3\"></div>

            <div class=\"container-artisans\">

                {% for operateur in operateurs %}

                    {% include 'operateurs/_card.html.twig' with {operateur: operateur} only %}

                {% endfor %}

            </div>

            {% if maxPages > 1 %}
                <ul>
                    {# `«` arrow  #}
                    <li {{ thisPage == 1 ? 'class=\"disabled\"' }}>
                        {#<a href=\"{{ path('routeName', {page: thisPage-1 < 1 ? 1 : thisPage-1}) }}\">«</a>#}
                        <a href=\"{page: thisPage-1 < 1 ? 1 : thisPage-1}\">«</a>
                    </li>

                    {# Render each page number #}
                    {% for i in 1..maxPages %}
                        <li {{ thisPage == i ? 'class=\"active\"' }}>
                        {#<a href=\"{{ path('routeName', {page: i}) }}\">{{ i }}</a>#}
                        <a href=\"{page: i}\">{{ i }}</a>
                        </li>
                    {% endfor %}

                    {# `»` arrow #}
                    <li {{ thisPage == maxPages ? 'class=\"disabled\"' }}>
                        {#<a href=\"{{ path('routeName', {page: thisPage+1 <= maxPages ? thisPage+1 : thisPage}) }}\">»</a>#}
                        <a href=\"{page: thisPage+1 <= maxPages ? thisPage+1 : thisPage}\">»</a>
                    </li>
                </ul>
            {% endif %}
            
        </div>

    </section>

{% endblock %}", "home/home.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\home\\home.html.twig");
    }
}
