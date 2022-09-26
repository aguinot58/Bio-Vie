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

/* artisan/artisan.html.twig */
class __TwigTemplate_cc007001da8e864fa28d732b8fef214d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artisan/artisan.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "artisan/artisan.html.twig", 1);
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
    <section id=\"section-fiche-artisan\">

        <div class=\"container\">

            <div class=\"top-part\">
                <img class=\"img-cat\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-"), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 10, $this->source); })()), "html", null, true);
        echo ".png";
        echo "\" alt=\"icône de la catégorie ";
        echo twig_escape_filter($this->env, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\">
                <h1 class=\"raisonSociale\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 11, $this->source); })()), "raisonSociale", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
            </div>

            <div class=\"bottom-part\">

                <div class=\"left-part\">
                    <h3>NUMÉRO BIO</h3>
                    <p>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 18, $this->source); })()), "numeroBio", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>

                    <h3>SIRET</h3>
                    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 21, $this->source); })()), "siret", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>

                    <h3>SITE INTERNET</h3>
                    <p>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 24, $this->source); })()), "siteWeb", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>

                    <hr width=\"250vw\" size=\"2\" align=\"left\" color=\"black\">

                    <h3>GÉRANT</h3>
                    <p>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 29, $this->source); })()), "gerant", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>

                    <h3>TÉLÉPHONE</h3>
                    <p>";
        // line 32
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 32, $this->source); })()), "telephone", [], "any", false, false, false, 32), 0, 2), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 32, $this->source); })()), "telephone", [], "any", false, false, false, 32), 2, 2), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 32, $this->source); })()), "telephone", [], "any", false, false, false, 32), 4, 2), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 32, $this->source); })()), "telephone", [], "any", false, false, false, 32), 6, 2), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 32, $this->source); })()), "telephone", [], "any", false, false, false, 32), 8, 2), "html", null, true);
        echo "</p>

                    <h3>EMAIL</h3>
                    <p>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), "html", null, true);
        echo "</p>
                </div>

                <div class=\"right-part\">
                    <h3>CATÉGORIES</h3>
                    <ul>
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 41, $this->source); })()), "categories", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 42
            echo "                        <li><p>";
            echo twig_escape_filter($this->env, $context["categorie"], "html", null, true);
            echo "</p></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    </ul>

                    <h3>ACTIVITÉS</h3>
                    <ul>
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 48, $this->source); })()), "activites", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 49
            echo "                        <li><p>";
            echo twig_escape_filter($this->env, $context["activite"], "html", null, true);
            echo "</p></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    </ul>
                </div>

            </div>

        </div>

\t</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "artisan/artisan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 51,  157 => 49,  153 => 48,  147 => 44,  138 => 42,  134 => 41,  125 => 35,  111 => 32,  105 => 29,  97 => 24,  91 => 21,  85 => 18,  75 => 11,  67 => 10,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <section id=\"section-fiche-artisan\">

        <div class=\"container\">

            <div class=\"top-part\">
                <img class=\"img-cat\" src=\"{{ asset(\"images/icons/icon-\")}}{{ categorie }}{{ (\".png\") }}\" alt=\"icône de la catégorie {{ categorie }}\">
                <h1 class=\"raisonSociale\">{{ operateur.raisonSociale }}</h1>
            </div>

            <div class=\"bottom-part\">

                <div class=\"left-part\">
                    <h3>NUMÉRO BIO</h3>
                    <p>{{ operateur.numeroBio }}</p>

                    <h3>SIRET</h3>
                    <p>{{ operateur.siret }}</p>

                    <h3>SITE INTERNET</h3>
                    <p>{{ operateur.siteWeb }}</p>

                    <hr width=\"250vw\" size=\"2\" align=\"left\" color=\"black\">

                    <h3>GÉRANT</h3>
                    <p>{{ operateur.gerant }}</p>

                    <h3>TÉLÉPHONE</h3>
                    <p>{{ operateur.telephone|slice(0, 2) }} {{ operateur.telephone|slice(2, 2) }} {{ operateur.telephone|slice(4, 2) }} {{ operateur.telephone|slice(6, 2) }} {{ operateur.telephone|slice(8, 2) }}</p>

                    <h3>EMAIL</h3>
                    <p>{{ operateur.email }}</p>
                </div>

                <div class=\"right-part\">
                    <h3>CATÉGORIES</h3>
                    <ul>
                    {% for categorie in operateur.categories %}
                        <li><p>{{ categorie }}</p></li>
                    {% endfor %}
                    </ul>

                    <h3>ACTIVITÉS</h3>
                    <ul>
                    {% for activite in operateur.activites %}
                        <li><p>{{ activite }}</p></li>
                    {% endfor %}
                    </ul>
                </div>

            </div>

        </div>

\t</section>

{% endblock %}", "artisan/artisan.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\artisan\\artisan.html.twig");
    }
}
