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

/* home/_card2.html.twig */
class __TwigTemplate_9dc36b5d45012b575c74b4505ca79313 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/_card2.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operateursFiltered"]) || array_key_exists("operateursFiltered", $context) ? $context["operateursFiltered"] : (function () { throw new RuntimeError('Variable "operateursFiltered" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operateur"]) {
            // line 2
            echo "
    <div class=\"card\">
        <a href=\"";
            // line 4
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artisan");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "categories", [], "any", false, false, false, 4)), "html", null, true);
            echo "\">
            <img class=\"img-cat\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-"), "html", null, true);
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "categories", [], "any", false, false, false, 5)), "html", null, true);
            echo "_gris.png";
            echo "\" alt=\"icône de la catégorie ";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "categories", [], "any", false, false, false, 5)), "html", null, true);
            echo "\">
                
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "raisonSociale", [], "any", false, false, false, 8), "html", null, true);
            echo "</h5>
                <div class=\"card-infos\">
                    <p class=\"gras\">";
            // line 10
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "gerant", [], "any", false, false, false, 10)), "html", null, true);
            echo "</p>
                    <p>";
            // line 11
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "telephone", [], "any", false, false, false, 11), 0, 2), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "telephone", [], "any", false, false, false, 11), 2, 2), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "telephone", [], "any", false, false, false, 11), 4, 2), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "telephone", [], "any", false, false, false, 11), 6, 2), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "telephone", [], "any", false, false, false, 11), 8, 2), "html", null, true);
            echo "</p>
                </div>
            </div>
        </a>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
";
        // line 19
        ob_start();
        // line 20
        echo "
                ";
        // line 21
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 21, $this->source); })()) > 1)) {
            // line 22
            echo "
                    ";
            // line 24
            echo "                    ";
            $context["defaultPageQuantityAround"] = 3;
            // line 25
            echo "                    ";
            // line 26
            echo "                    ";
            $context["minimumPageQuantityAround"] = min(((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 26, $this->source); })()) - 1), ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 26, $this->source); })()) - (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 26, $this->source); })())));
            // line 27
            echo "                    ";
            // line 28
            echo "                    ";
            $context["conditionBefore"] = (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 28, $this->source); })()) != 1) && ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 28, $this->source); })()) <= ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 28, $this->source); })()) - 1)));
            // line 29
            echo "                    ";
            // line 30
            echo "                    ";
            $context["conditionAfter"] = (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 30, $this->source); })()) != (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 30, $this->source); })())) && ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 30, $this->source); })()) <= ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 30, $this->source); })()) - (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 30, $this->source); })()))));
            // line 31
            echo "                    ";
            // line 32
            echo "                    ";
            $context["PageQuantityAroundBefore"] = (((isset($context["conditionBefore"]) || array_key_exists("conditionBefore", $context) ? $context["conditionBefore"] : (function () { throw new RuntimeError('Variable "conditionBefore" does not exist.', 32, $this->source); })())) ? ((isset($context["defaultPageQuantityAround"]) || array_key_exists("defaultPageQuantityAround", $context) ? $context["defaultPageQuantityAround"] : (function () { throw new RuntimeError('Variable "defaultPageQuantityAround" does not exist.', 32, $this->source); })())) : ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 32, $this->source); })())));
            // line 33
            echo "                    ";
            // line 34
            echo "                    ";
            $context["PageQuantityAroundAfter"] = (((isset($context["conditionAfter"]) || array_key_exists("conditionAfter", $context) ? $context["conditionAfter"] : (function () { throw new RuntimeError('Variable "conditionAfter" does not exist.', 34, $this->source); })())) ? ((isset($context["defaultPageQuantityAround"]) || array_key_exists("defaultPageQuantityAround", $context) ? $context["defaultPageQuantityAround"] : (function () { throw new RuntimeError('Variable "defaultPageQuantityAround" does not exist.', 34, $this->source); })())) : ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 34, $this->source); })())));
            // line 35
            echo "
                    <ul>
                        ";
            // line 38
            echo "                        ";
            if ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 38, $this->source); })()) - 1) != 0)) {
                // line 39
                echo "                            <li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 39, $this->source); })()) == 1)) ? ("class=\"disabled\"") : (""));
                echo ">
                                <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 40, $this->source); })()) - 1), "categorie" => (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 40, $this->source); })())]), "html", null, true);
                echo "#section-artisans\" title=\"Previous\"><</a>
                            </li>
                        ";
            }
            // line 43
            echo "

                        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 45, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 46
                echo "
                            ";
                // line 48
                echo "                            ";
                if (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 48, $this->source); })()) == $context["i"])) {
                    // line 49
                    echo "                                <li class=\"active\">
                                    <a href=\"#\">";
                    // line 50
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                    // line 53
                    echo "                            ";
                } elseif (((($context["i"] < (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 53, $this->source); })())) && (1 != $context["i"])) && ($context["i"] == (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 53, $this->source); })()) - (isset($context["PageQuantityAroundBefore"]) || array_key_exists("PageQuantityAroundBefore", $context) ? $context["PageQuantityAroundBefore"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundBefore" does not exist.', 53, $this->source); })())) - 1)))) {
                    // line 54
                    echo "                                <li>
                                    <a href=\"#\">...</a>
                                </li>
                            ";
                    // line 58
                    echo "                            ";
                } elseif (((($context["i"] > (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 58, $this->source); })())) && ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 58, $this->source); })()) != $context["i"])) && ($context["i"] == (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 58, $this->source); })()) + (isset($context["PageQuantityAroundAfter"]) || array_key_exists("PageQuantityAroundAfter", $context) ? $context["PageQuantityAroundAfter"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundAfter" does not exist.', 58, $this->source); })())) + 1)))) {
                    // line 59
                    echo "                                <li>
                                    <a href=\"#\">...</a>
                                </li>
                            ";
                    // line 63
                    echo "                            ";
                } elseif (((1 != $context["i"]) && ($context["i"] < (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 63, $this->source); })()) - (isset($context["PageQuantityAroundBefore"]) || array_key_exists("PageQuantityAroundBefore", $context) ? $context["PageQuantityAroundBefore"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundBefore" does not exist.', 63, $this->source); })())) - 1)))) {
                    // line 64
                    echo "                                <li class=\"hidden\">
                                    <a href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => $context["i"], "categorie" => (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 65, $this->source); })())]), "html", null, true);
                    echo "#section-artisans\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                    // line 68
                    echo "                            ";
                } elseif ((((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 68, $this->source); })()) != $context["i"]) && ($context["i"] > (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 68, $this->source); })()) + (isset($context["PageQuantityAroundAfter"]) || array_key_exists("PageQuantityAroundAfter", $context) ? $context["PageQuantityAroundAfter"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundAfter" does not exist.', 68, $this->source); })())) + 1)))) {
                    // line 69
                    echo "                                <li class=\"hidden\">
                                    <a href=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => $context["i"], "categorie" => (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 70, $this->source); })())]), "html", null, true);
                    echo "#section-artisans\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                    // line 73
                    echo "                            ";
                } elseif ((($context["i"] == 1) || ($context["i"] == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 73, $this->source); })())))) {
                    // line 74
                    echo "                                <li>
                                    <a href=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => $context["i"], "categorie" => (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 75, $this->source); })())]), "html", null, true);
                    echo "#section-artisans\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                    // line 78
                    echo "                            ";
                } else {
                    // line 79
                    echo "                                <li>
                                    <a href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => $context["i"], "categorie" => (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 80, $this->source); })())]), "html", null, true);
                    echo "#section-artisans\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                }
                // line 83
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "

                        ";
            // line 87
            echo "                        ";
            if ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 87, $this->source); })()) + 1) <= (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 87, $this->source); })()))) {
                // line 88
                echo "                            <li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 88, $this->source); })()) == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 88, $this->source); })()))) ? ("class=\"disabled\"") : (""));
                echo ">
                                <a href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 89, $this->source); })()) + 1), "categorie" => (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 89, $this->source); })())]), "html", null, true);
                echo "#section-artisans\" title=\"Next\">></a>
                            </li>
                        ";
            }
            // line 92
            echo "                    </ul>

                ";
        }
        // line 95
        echo "
            ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        echo twig_spaceless($___internal_parse_0_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/_card2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 19,  283 => 95,  278 => 92,  272 => 89,  267 => 88,  264 => 87,  260 => 84,  254 => 83,  244 => 80,  241 => 79,  238 => 78,  229 => 75,  226 => 74,  223 => 73,  214 => 70,  211 => 69,  208 => 68,  199 => 65,  196 => 64,  193 => 63,  188 => 59,  185 => 58,  180 => 54,  177 => 53,  172 => 50,  169 => 49,  166 => 48,  163 => 46,  159 => 45,  155 => 43,  149 => 40,  144 => 39,  141 => 38,  137 => 35,  134 => 34,  132 => 33,  129 => 32,  127 => 31,  124 => 30,  122 => 29,  119 => 28,  117 => 27,  114 => 26,  112 => 25,  109 => 24,  106 => 22,  104 => 21,  101 => 20,  99 => 19,  96 => 18,  75 => 11,  71 => 10,  66 => 8,  56 => 5,  48 => 4,  44 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for operateur in operateursFiltered %}

    <div class=\"card\">
        <a href=\"{{ path(\"artisan\") }}/{{ operateur.id }}/{{ operateur.categories|first }}\">
            <img class=\"img-cat\" src=\"{{ asset(\"images/icons/icon-\")}}{{ operateur.categories|first }}{{ (\"_gris.png\") }}\" alt=\"icône de la catégorie {{ operateur.categories|first }}\">
                
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ operateur.raisonSociale }}</h5>
                <div class=\"card-infos\">
                    <p class=\"gras\">{{ operateur.gerant|upper }}</p>
                    <p>{{ operateur.telephone|slice(0, 2) }} {{ operateur.telephone|slice(2, 2) }} {{ operateur.telephone|slice(4, 2) }} {{ operateur.telephone|slice(6, 2) }} {{ operateur.telephone|slice(8, 2) }}</p>
                </div>
            </div>
        </a>
    </div>

{% endfor %}

{% apply spaceless %}

                {% if maxPages > 1 %}

                    {# Page quantity to show around current page is 3 or a calculated minimum value #}
                    {% set defaultPageQuantityAround = 3 %}
                    {# Mininum value #}
                    {% set minimumPageQuantityAround = min(thisPage - 1, maxPages - thisPage) %}
                    {# Condition to show the right page numbers before current page: default or minimum value #}
                    {% set conditionBefore = thisPage != 1 and minimumPageQuantityAround <= thisPage - 1 %}
                    {# Condition to show the right page numbers after current page: default or minimum value #}
                    {% set conditionAfter = thisPage != maxPages and minimumPageQuantityAround <= maxPages - thisPage %}
                    {# Define page numbers before, other pages will be replaced by \"...\" #}
                    {% set PageQuantityAroundBefore = conditionBefore ? defaultPageQuantityAround : minimumPageQuantityAround %}
                    {# Define page numbers after, other pages will be replaced by \"...\" #}
                    {% set PageQuantityAroundAfter = conditionAfter ? defaultPageQuantityAround : minimumPageQuantityAround %}

                    <ul>
                        {# Previous link #}
                        {% if thisPage - 1 != 0 %}
                            <li {{ thisPage == 1 ? 'class=\"disabled\"' }}>
                                <a href=\"{{ path('home', { page: thisPage - 1, categorie: cat }) }}#section-artisans\" title=\"Previous\"><</a>
                            </li>
                        {% endif %}


                        {% for i in 1..maxPages %}

                            {# Current page to show #}
                            {% if thisPage == i %}
                                <li class=\"active\">
                                    <a href=\"#\">{{ i }}</a>
                                </li>
                            {# Show \"...\" before current page depending on page numbers to show before #}
                            {% elseif (i < thisPage and 1 != i) and (i == thisPage - PageQuantityAroundBefore - 1) %}
                                <li>
                                    <a href=\"#\">...</a>
                                </li>
                            {# Show \"...\" after current page depending on page numbers to show after #}
                            {% elseif (i > thisPage and maxPages != i) and (i == thisPage + PageQuantityAroundAfter + 1) %}
                                <li>
                                    <a href=\"#\">...</a>
                                </li>
                            {# Hide pages under current page and before \"...\" excepted page 1 #}
                            {% elseif (1 != i) and (i < thisPage - PageQuantityAroundBefore - 1) %}
                                <li class=\"hidden\">
                                    <a href=\"{{ path('home', { page: i, categorie: cat }) }}#section-artisans\" title=\"Page {{ i }}\">{{ i }}</a>
                                </li>
                            {# Hide pages over current page and after \"...\" excepted page with number \"maxPages\" (last) #}
                            {% elseif (maxPages != i) and (i > thisPage + PageQuantityAroundAfter + 1) %}
                                <li class=\"hidden\">
                                    <a href=\"{{ path('home', { page: i, categorie: cat }) }}#section-artisans\" title=\"Page {{ i }}\">{{ i }}</a>
                                </li>
                            {# Apply particular style for lowest link corresponding to first page 1, and Highest link corresponding to page total count #}
                            {% elseif i == 1 or i == maxPages %}
                                <li>
                                    <a href=\"{{ path('home', { page: i, categorie: cat }) }}#section-artisans\" title=\"Page {{ i }}\">{{ i }}</a>
                                </li>
                            {# Normal links which are not concerned by conditions above #}
                            {% else %}
                                <li>
                                    <a href=\"{{ path('home', { page: i, categorie: cat }) }}#section-artisans\" title=\"Page {{ i }}\">{{ i }}</a>
                                </li>
                            {% endif %}
                        {% endfor %}


                        {# Next link #}
                        {% if thisPage + 1 <= maxPages %}
                            <li {{ thisPage == maxPages ? 'class=\"disabled\"' }}>
                                <a href=\"{{ path('home', { page: thisPage + 1, categorie: cat }) }}#section-artisans\" title=\"Next\">></a>
                            </li>
                        {% endif %}
                    </ul>

                {% endif %}

            {% endapply %}", "home/_card2.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\home\\_card2.html.twig");
    }
}
