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

/* operateurs/_card.html.twig */
class __TwigTemplate_9b03820ffd8d2483e0cb576aabbf60d2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "operateurs/_card.html.twig"));

        // line 1
        echo "<div class=\"container-artisans\">

    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operateursFiltered"]) || array_key_exists("operateursFiltered", $context) ? $context["operateursFiltered"] : (function () { throw new RuntimeError('Variable "operateursFiltered" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operateur"]) {
            // line 4
            echo "
        <a href=\"";
            // line 5
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artisan");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "id", [], "any", false, false, false, 5), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "categories", [], "any", false, false, false, 5)), "html", null, true);
            echo "\">
            <div class=\"card\">
                <img class=\"img-cat\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-"), "html", null, true);
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "categories", [], "any", false, false, false, 7)), "html", null, true);
            echo "_gris.png";
            echo "\" alt=\"icône de la catégorie ";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "categories", [], "any", false, false, false, 7)), "html", null, true);
            echo "\">
                    
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "raisonSociale", [], "any", false, false, false, 10), "html", null, true);
            echo "</h5>
                    <div class=\"card-infos\">
                        <p class=\"gras\">";
            // line 12
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "gerant", [], "any", false, false, false, 12)), "html", null, true);
            echo "</p>
                        <p>";
            // line 13
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "telephone", [], "any", false, false, false, 13), 0, 2), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "telephone", [], "any", false, false, false, 13), 2, 2), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "telephone", [], "any", false, false, false, 13), 4, 2), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "telephone", [], "any", false, false, false, 13), 6, 2), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "telephone", [], "any", false, false, false, 13), 8, 2), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
        </a>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
</div>

";
        // line 23
        ob_start();
        // line 24
        echo "
    ";
        // line 25
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 25, $this->source); })()) > 1)) {
            // line 26
            echo "
        ";
            // line 28
            echo "        ";
            $context["defaultPageQuantityAround"] = 3;
            // line 29
            echo "        ";
            // line 30
            echo "        ";
            $context["minimumPageQuantityAround"] = min(((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 30, $this->source); })()) - 1), ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 30, $this->source); })()) - (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 30, $this->source); })())));
            // line 31
            echo "        ";
            // line 32
            echo "        ";
            $context["conditionBefore"] = (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 32, $this->source); })()) != 1) && ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 32, $this->source); })()) <= ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 32, $this->source); })()) - 1)));
            // line 33
            echo "        ";
            // line 34
            echo "        ";
            $context["conditionAfter"] = (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 34, $this->source); })()) != (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 34, $this->source); })())) && ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 34, $this->source); })()) <= ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 34, $this->source); })()) - (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 34, $this->source); })()))));
            // line 35
            echo "        ";
            // line 36
            echo "        ";
            $context["PageQuantityAroundBefore"] = (((isset($context["conditionBefore"]) || array_key_exists("conditionBefore", $context) ? $context["conditionBefore"] : (function () { throw new RuntimeError('Variable "conditionBefore" does not exist.', 36, $this->source); })())) ? ((isset($context["defaultPageQuantityAround"]) || array_key_exists("defaultPageQuantityAround", $context) ? $context["defaultPageQuantityAround"] : (function () { throw new RuntimeError('Variable "defaultPageQuantityAround" does not exist.', 36, $this->source); })())) : ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 36, $this->source); })())));
            // line 37
            echo "        ";
            // line 38
            echo "        ";
            $context["PageQuantityAroundAfter"] = (((isset($context["conditionAfter"]) || array_key_exists("conditionAfter", $context) ? $context["conditionAfter"] : (function () { throw new RuntimeError('Variable "conditionAfter" does not exist.', 38, $this->source); })())) ? ((isset($context["defaultPageQuantityAround"]) || array_key_exists("defaultPageQuantityAround", $context) ? $context["defaultPageQuantityAround"] : (function () { throw new RuntimeError('Variable "defaultPageQuantityAround" does not exist.', 38, $this->source); })())) : ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 38, $this->source); })())));
            // line 39
            echo "
        <ul>
            ";
            // line 42
            echo "            ";
            if ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 42, $this->source); })()) - 1) != 0)) {
                // line 43
                echo "                <li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 43, $this->source); })()) == 1)) ? ("class=\"disabled\"") : (""));
                echo ">
                    <p onclick=\"recup_Data(";
                // line 44
                echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 44, $this->source); })()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 44, $this->source); })()) - 1), "html", null, true);
                echo ", 'yes')\" title=\"Previous\"><</p>
                </li>
            ";
            }
            // line 47
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 47, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 48
                echo "                ";
                // line 49
                echo "                ";
                if (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 49, $this->source); })()) == $context["i"])) {
                    // line 50
                    echo "                    <li class=\"active\">
                        <p>";
                    // line 51
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</p>
                    </li>
                ";
                    // line 54
                    echo "                ";
                } elseif (((($context["i"] < (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 54, $this->source); })())) && (1 != $context["i"])) && ($context["i"] == (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 54, $this->source); })()) - (isset($context["PageQuantityAroundBefore"]) || array_key_exists("PageQuantityAroundBefore", $context) ? $context["PageQuantityAroundBefore"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundBefore" does not exist.', 54, $this->source); })())) - 1)))) {
                    // line 55
                    echo "                    <li>
                        <p>...</p>
                    </li>
                ";
                    // line 59
                    echo "                ";
                } elseif (((($context["i"] > (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 59, $this->source); })())) && ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 59, $this->source); })()) != $context["i"])) && ($context["i"] == (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 59, $this->source); })()) + (isset($context["PageQuantityAroundAfter"]) || array_key_exists("PageQuantityAroundAfter", $context) ? $context["PageQuantityAroundAfter"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundAfter" does not exist.', 59, $this->source); })())) + 1)))) {
                    // line 60
                    echo "                    <li>
                        <p>...</p>
                    </li>
                ";
                    // line 64
                    echo "                ";
                } elseif (((1 != $context["i"]) && ($context["i"] < (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 64, $this->source); })()) - (isset($context["PageQuantityAroundBefore"]) || array_key_exists("PageQuantityAroundBefore", $context) ? $context["PageQuantityAroundBefore"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundBefore" does not exist.', 64, $this->source); })())) - 1)))) {
                    // line 65
                    echo "                    <li class=\"hidden\">
                        <p onclick=\"recup_Data(";
                    // line 66
                    echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 66, $this->source); })()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo ", 'yes')\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</p>
                    </li>
                ";
                    // line 69
                    echo "                ";
                } elseif ((((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 69, $this->source); })()) != $context["i"]) && ($context["i"] > (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 69, $this->source); })()) + (isset($context["PageQuantityAroundAfter"]) || array_key_exists("PageQuantityAroundAfter", $context) ? $context["PageQuantityAroundAfter"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundAfter" does not exist.', 69, $this->source); })())) + 1)))) {
                    // line 70
                    echo "                    <li class=\"hidden\">
                        <p onclick=\"recup_Data(";
                    // line 71
                    echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 71, $this->source); })()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo ", 'yes')\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</p>
                    </li>
                ";
                    // line 74
                    echo "                ";
                } elseif ((($context["i"] == 1) || ($context["i"] == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 74, $this->source); })())))) {
                    // line 75
                    echo "                    <li>
                        <p onclick=\"recup_Data(";
                    // line 76
                    echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 76, $this->source); })()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo ", 'yes')\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</p>
                    </li>
                ";
                    // line 79
                    echo "                ";
                } else {
                    // line 80
                    echo "                    <li>
                        <p onclick=\"recup_Data(";
                    // line 81
                    echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 81, $this->source); })()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo ", 'yes')\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</p>
                    </li>
                ";
                }
                // line 84
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "            ";
            // line 86
            echo "            ";
            if ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 86, $this->source); })()) + 1) <= (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 86, $this->source); })()))) {
                // line 87
                echo "                <li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 87, $this->source); })()) == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 87, $this->source); })()))) ? ("class=\"disabled\"") : (""));
                echo ">
                    <p onclick=\"recup_Data(";
                // line 88
                echo twig_escape_filter($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 88, $this->source); })()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 88, $this->source); })()) + 1), "html", null, true);
                echo ", 'yes')\" title=\"Next\">></p>
                </li>
            ";
            }
            // line 91
            echo "        </ul>

    ";
        }
        // line 94
        echo "
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        echo twig_spaceless($___internal_parse_0_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "operateurs/_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 23,  295 => 94,  290 => 91,  282 => 88,  277 => 87,  274 => 86,  272 => 85,  266 => 84,  254 => 81,  251 => 80,  248 => 79,  237 => 76,  234 => 75,  231 => 74,  220 => 71,  217 => 70,  214 => 69,  203 => 66,  200 => 65,  197 => 64,  192 => 60,  189 => 59,  184 => 55,  181 => 54,  176 => 51,  173 => 50,  170 => 49,  168 => 48,  163 => 47,  155 => 44,  150 => 43,  147 => 42,  143 => 39,  140 => 38,  138 => 37,  135 => 36,  133 => 35,  130 => 34,  128 => 33,  125 => 32,  123 => 31,  120 => 30,  118 => 29,  115 => 28,  112 => 26,  110 => 25,  107 => 24,  105 => 23,  100 => 20,  79 => 13,  75 => 12,  70 => 10,  60 => 7,  51 => 5,  48 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-artisans\">

    {% for operateur in operateursFiltered %}

        <a href=\"{{ path(\"artisan\") }}/{{ operateur.id }}/{{ operateur.categories|first }}\">
            <div class=\"card\">
                <img class=\"img-cat\" src=\"{{ asset(\"images/icons/icon-\")}}{{ operateur.categories|first }}{{ (\"_gris.png\") }}\" alt=\"icône de la catégorie {{ operateur.categories|first }}\">
                    
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ operateur.raisonSociale }}</h5>
                    <div class=\"card-infos\">
                        <p class=\"gras\">{{ operateur.gerant|upper }}</p>
                        <p>{{ operateur.telephone|slice(0, 2) }} {{ operateur.telephone|slice(2, 2) }} {{ operateur.telephone|slice(4, 2) }} {{ operateur.telephone|slice(6, 2) }} {{ operateur.telephone|slice(8, 2) }}</p>
                    </div>
                </div>
            </div>
        </a>
        
    {% endfor %}

</div>

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
                    <p onclick=\"recup_Data({{ cat }}, {{thisPage - 1}}, 'yes')\" title=\"Previous\"><</p>
                </li>
            {% endif %}
            {% for i in 1..maxPages %}
                {# Current page to show #}
                {% if thisPage == i %}
                    <li class=\"active\">
                        <p>{{ i }}</p>
                    </li>
                {# Show \"...\" before current page depending on page numbers to show before #}
                {% elseif (i < thisPage and 1 != i) and (i == thisPage - PageQuantityAroundBefore - 1) %}
                    <li>
                        <p>...</p>
                    </li>
                {# Show \"...\" after current page depending on page numbers to show after #}
                {% elseif (i > thisPage and maxPages != i) and (i == thisPage + PageQuantityAroundAfter + 1) %}
                    <li>
                        <p>...</p>
                    </li>
                {# Hide pages under current page and before \"...\" excepted page 1 #}
                {% elseif (1 != i) and (i < thisPage - PageQuantityAroundBefore - 1) %}
                    <li class=\"hidden\">
                        <p onclick=\"recup_Data({{ cat }}, {{ i }}, 'yes')\" title=\"Page {{ i }}\">{{ i }}</p>
                    </li>
                {# Hide pages over current page and after \"...\" excepted page with number \"maxPages\" (last) #}
                {% elseif (maxPages != i) and (i > thisPage + PageQuantityAroundAfter + 1) %}
                    <li class=\"hidden\">
                        <p onclick=\"recup_Data({{ cat }}, {{ i }}, 'yes')\" title=\"Page {{ i }}\">{{ i }}</p>
                    </li>
                {# Apply particular style for lowest link corresponding to first page 1, and Highest link corresponding to page total count #}
                {% elseif i == 1 or i == maxPages %}
                    <li>
                        <p onclick=\"recup_Data({{ cat }}, {{ i }}, 'yes')\" title=\"Page {{ i }}\">{{ i }}</p>
                    </li>
                {# Normal links which are not concerned by conditions above #}
                {% else %}
                    <li>
                        <p onclick=\"recup_Data({{ cat }}, {{ i }}, 'yes')\" title=\"Page {{ i }}\">{{ i }}</p>
                    </li>
                {% endif %}
            {% endfor %}
            {# Next link #}
            {% if thisPage + 1 <= maxPages %}
                <li {{ thisPage == maxPages ? 'class=\"disabled\"' }}>
                    <p onclick=\"recup_Data({{ cat }}, {{thisPage + 1}}, 'yes')\" title=\"Next\">></p>
                </li>
            {% endif %}
        </ul>

    {% endif %}

{% endapply %}", "operateurs/_card.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\operateurs\\_card.html.twig");
    }
}
