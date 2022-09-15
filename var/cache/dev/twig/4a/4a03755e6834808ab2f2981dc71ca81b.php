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

/* operateurs/index.html.twig */
class __TwigTemplate_6f59705434709c5e75743491e8b2fb5f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "operateurs/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "operateurs/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Index Artisans";
        
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

        <h1>Ici vous pouvez gérer les artisans</h1>

        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operateurs_new");
        echo "\">Ajouter nouvel artisan</a>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>RaisonSociale</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operateurs"]) || array_key_exists("operateurs", $context) ? $context["operateurs"] : (function () { throw new RuntimeError('Variable "operateurs" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["operateur"]) {
            // line 21
            echo "                <tr>
                    <td>
                        <div>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operateur"], "raisonSociale", [], "any", false, false, false, 23), "html", null, true);
            echo "</div>
                        <div class=\"actions\">
                            <form method=\"post\" action=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operateurs_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["operateur"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("edit" . twig_get_attribute($this->env, $this->source, $context["operateur"], "id", [], "any", false, false, false, 26))), "html", null, true);
            echo "\">
                                <button class=\"btn modification\">Modifier</button>
                            </form>
                            <form method=\"post\" action=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operateurs_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["operateur"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Etes-vous certain de vouloir supprimer cet artisan ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["operateur"], "id", [], "any", false, false, false, 30))), "html", null, true);
            echo "\">
                                <button class=\"btn suppression\">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "                <tr>
                    <td colspan=\"11\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </tbody>
        </table>

        ";
        // line 44
        ob_start();
        // line 45
        echo "
            ";
        // line 46
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 46, $this->source); })()) > 1)) {
            // line 47
            echo "                
                ";
            // line 49
            echo "                ";
            $context["defaultPageQuantityAround"] = 3;
            // line 50
            echo "                ";
            // line 51
            echo "                ";
            $context["minimumPageQuantityAround"] = min(((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 51, $this->source); })()) - 1), ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 51, $this->source); })()) - (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 51, $this->source); })())));
            // line 52
            echo "                ";
            // line 53
            echo "                ";
            $context["conditionBefore"] = (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 53, $this->source); })()) != 1) && ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 53, $this->source); })()) <= ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 53, $this->source); })()) - 1)));
            // line 54
            echo "                ";
            // line 55
            echo "                ";
            $context["conditionAfter"] = (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 55, $this->source); })()) != (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 55, $this->source); })())) && ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 55, $this->source); })()) <= ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 55, $this->source); })()) - (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 55, $this->source); })()))));
            // line 56
            echo "                ";
            // line 57
            echo "                ";
            $context["PageQuantityAroundBefore"] = (((isset($context["conditionBefore"]) || array_key_exists("conditionBefore", $context) ? $context["conditionBefore"] : (function () { throw new RuntimeError('Variable "conditionBefore" does not exist.', 57, $this->source); })())) ? ((isset($context["defaultPageQuantityAround"]) || array_key_exists("defaultPageQuantityAround", $context) ? $context["defaultPageQuantityAround"] : (function () { throw new RuntimeError('Variable "defaultPageQuantityAround" does not exist.', 57, $this->source); })())) : ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 57, $this->source); })())));
            // line 58
            echo "                ";
            // line 59
            echo "                ";
            $context["PageQuantityAroundAfter"] = (((isset($context["conditionAfter"]) || array_key_exists("conditionAfter", $context) ? $context["conditionAfter"] : (function () { throw new RuntimeError('Variable "conditionAfter" does not exist.', 59, $this->source); })())) ? ((isset($context["defaultPageQuantityAround"]) || array_key_exists("defaultPageQuantityAround", $context) ? $context["defaultPageQuantityAround"] : (function () { throw new RuntimeError('Variable "defaultPageQuantityAround" does not exist.', 59, $this->source); })())) : ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 59, $this->source); })())));
            // line 60
            echo "
                <ul>
                    
                    ";
            // line 64
            echo "                    ";
            if ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 64, $this->source); })()) - 1) != 0)) {
                // line 65
                echo "                        <li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 65, $this->source); })()) == 1)) ? ("class=\"disabled\"") : (""));
                echo ">
                            <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operateurs_index", ["page" => ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 66, $this->source); })()) - 1)]), "html", null, true);
                echo "\" title=\"Previous\">«</a>
                        </li>
                    ";
            }
            // line 69
            echo "

                    ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 71, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 72
                echo "
                        ";
                // line 74
                echo "                        ";
                if (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 74, $this->source); })()) == $context["i"])) {
                    // line 75
                    echo "                            <li class=\"active\">
                                <a href=\"#\">";
                    // line 76
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                    // line 79
                    echo "                        ";
                } elseif (((($context["i"] < (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 79, $this->source); })())) && (1 != $context["i"])) && ($context["i"] == (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 79, $this->source); })()) - (isset($context["PageQuantityAroundBefore"]) || array_key_exists("PageQuantityAroundBefore", $context) ? $context["PageQuantityAroundBefore"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundBefore" does not exist.', 79, $this->source); })())) - 1)))) {
                    // line 80
                    echo "                            <li>
                                <a href=\"#\">...</a>
                            </li>
                        ";
                    // line 84
                    echo "                        ";
                } elseif (((($context["i"] > (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 84, $this->source); })())) && ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 84, $this->source); })()) != $context["i"])) && ($context["i"] == (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 84, $this->source); })()) + (isset($context["PageQuantityAroundAfter"]) || array_key_exists("PageQuantityAroundAfter", $context) ? $context["PageQuantityAroundAfter"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundAfter" does not exist.', 84, $this->source); })())) + 1)))) {
                    // line 85
                    echo "                            <li>
                                <a href=\"#\">...</a>
                            </li>
                        ";
                    // line 89
                    echo "                        ";
                } elseif (((1 != $context["i"]) && ($context["i"] < (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 89, $this->source); })()) - (isset($context["PageQuantityAroundBefore"]) || array_key_exists("PageQuantityAroundBefore", $context) ? $context["PageQuantityAroundBefore"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundBefore" does not exist.', 89, $this->source); })())) - 1)))) {
                    // line 90
                    echo "                            <li class=\"hidden\">
                                <a href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operateurs_index", ["page" => $context["i"]]), "html", null, true);
                    echo "\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                    // line 94
                    echo "                        ";
                } elseif ((((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 94, $this->source); })()) != $context["i"]) && ($context["i"] > (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 94, $this->source); })()) + (isset($context["PageQuantityAroundAfter"]) || array_key_exists("PageQuantityAroundAfter", $context) ? $context["PageQuantityAroundAfter"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundAfter" does not exist.', 94, $this->source); })())) + 1)))) {
                    // line 95
                    echo "                            <li class=\"hidden\">
                                <a href=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operateurs_index", ["page" => $context["i"]]), "html", null, true);
                    echo "\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                    // line 99
                    echo "                        ";
                } elseif ((($context["i"] == 1) || ($context["i"] == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 99, $this->source); })())))) {
                    // line 100
                    echo "                            <li>
                                <a href=\"";
                    // line 101
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operateurs_index", ["page" => $context["i"]]), "html", null, true);
                    echo "\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                    // line 104
                    echo "                        ";
                } else {
                    // line 105
                    echo "                            <li>
                                <a href=\"";
                    // line 106
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operateurs_index", ["page" => $context["i"]]), "html", null, true);
                    echo "\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                // line 109
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "

                    ";
            // line 113
            echo "                    ";
            if ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 113, $this->source); })()) + 1) <= (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 113, $this->source); })()))) {
                // line 114
                echo "                        <li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 114, $this->source); })()) == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 114, $this->source); })()))) ? ("class=\"disabled\"") : (""));
                echo ">
                            <a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operateurs_index", ["page" => ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 115, $this->source); })()) + 1)]), "html", null, true);
                echo "\" title=\"Next\">»</a>
                        </li>
                    ";
            }
            // line 118
            echo "
                </ul>

            ";
        }
        // line 122
        echo "
        ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo twig_spaceless($___internal_parse_0_);
        // line 124
        echo "
    </div>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "operateurs/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 124,  336 => 44,  332 => 122,  326 => 118,  320 => 115,  315 => 114,  312 => 113,  308 => 110,  302 => 109,  292 => 106,  289 => 105,  286 => 104,  277 => 101,  274 => 100,  271 => 99,  262 => 96,  259 => 95,  256 => 94,  247 => 91,  244 => 90,  241 => 89,  236 => 85,  233 => 84,  228 => 80,  225 => 79,  220 => 76,  217 => 75,  214 => 74,  211 => 72,  207 => 71,  203 => 69,  197 => 66,  192 => 65,  189 => 64,  184 => 60,  181 => 59,  179 => 58,  176 => 57,  174 => 56,  171 => 55,  169 => 54,  166 => 53,  164 => 52,  161 => 51,  159 => 50,  156 => 49,  153 => 47,  151 => 46,  148 => 45,  146 => 44,  141 => 41,  132 => 37,  120 => 30,  116 => 29,  110 => 26,  106 => 25,  101 => 23,  97 => 21,  92 => 20,  80 => 11,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Index Artisans{% endblock %}

{% block body %}

    <div class=\"container-body\">

        <h1>Ici vous pouvez gérer les artisans</h1>

        <a href=\"{{ path('app_operateurs_new') }}\">Ajouter nouvel artisan</a>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>RaisonSociale</th>
                </tr>
            </thead>
            <tbody>
            {% for operateur in operateurs %}
                <tr>
                    <td>
                        <div>{{ operateur.raisonSociale }}</div>
                        <div class=\"actions\">
                            <form method=\"post\" action=\"{{ path('app_operateurs_edit', {'id': operateur.id}) }}\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit' ~ operateur.id) }}\">
                                <button class=\"btn modification\">Modifier</button>
                            </form>
                            <form method=\"post\" action=\"{{ path('app_operateurs_delete', {'id': operateur.id}) }}\" onsubmit=\"return confirm('Etes-vous certain de vouloir supprimer cet artisan ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ operateur.id) }}\">
                                <button class=\"btn suppression\">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"11\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

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
                            <a href=\"{{ path('app_operateurs_index', { 'page': thisPage - 1 }) }}\" title=\"Previous\">«</a>
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
                                <a href=\"{{ path('app_operateurs_index', { 'page': i }) }}\" title=\"Page {{ i }}\">{{ i }}</a>
                            </li>
                        {# Hide pages over current page and after \"...\" excepted page with number \"maxPages\" (last) #}
                        {% elseif (maxPages != i) and (i > thisPage + PageQuantityAroundAfter + 1) %}
                            <li class=\"hidden\">
                                <a href=\"{{ path('app_operateurs_index', { 'page': i }) }}\" title=\"Page {{ i }}\">{{ i }}</a>
                            </li>
                        {# Apply particular style for lowest link corresponding to first page 1, and Highest link corresponding to page total count #}
                        {% elseif i == 1 or i == maxPages %}
                            <li>
                                <a href=\"{{ path('app_operateurs_index', { 'page': i }) }}\" title=\"Page {{ i }}\">{{ i }}</a>
                            </li>
                        {# Normal links which are not concerned by conditions above #}
                        {% else %}
                            <li>
                                <a href=\"{{ path('app_operateurs_index', { 'page': i }) }}\" title=\"Page {{ i }}\">{{ i }}</a>
                            </li>
                        {% endif %}
                    {% endfor %}


                    {# Next link #}
                    {% if thisPage + 1 <= maxPages %}
                        <li {{ thisPage == maxPages ? 'class=\"disabled\"' }}>
                            <a href=\"{{ path('app_operateurs_index', { 'page': thisPage + 1 }) }}\" title=\"Next\">»</a>
                        </li>
                    {% endif %}

                </ul>

            {% endif %}

        {% endapply %}

    </div>
    
{% endblock %}
", "operateurs/index.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\operateurs\\index.html.twig");
    }
}
