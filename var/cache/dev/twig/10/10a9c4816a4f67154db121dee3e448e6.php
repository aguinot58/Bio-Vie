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

/* activites/index.html.twig */
class __TwigTemplate_193dcd5d910c3388d80f840d33848132 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activites/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "activites/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Index Activités";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-body\">

        <h1>Ici vous pouvez gérer les activités</h1>

        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activites_new");
        echo "\">Ajouter nouvelle activité</a>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Activité</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 20
            echo "                <tr>
                    <td>
                        <div>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nomActivite", [], "any", false, false, false, 22), "html", null, true);
            echo "</div>
                        <div class=\"actions\">
                            <form method=\"post\" action=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activites_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("edit" . twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 25))), "html", null, true);
            echo "\">
                                <button class=\"btn modification\">Modifier</button>
                            </form>
                            <form method=\"post\" action=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activites_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Etes-vous certain de vouloir supprimer cette activité ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 29))), "html", null, true);
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
            // line 36
            echo "                <tr>
                    <td colspan=\"1\">Aucun enregistrement trouvé !</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
        </table>

        ";
        // line 43
        ob_start();
        // line 44
        echo "
            ";
        // line 45
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 45, $this->source); })()) > 1)) {
            // line 46
            echo "
                ";
            // line 48
            echo "                ";
            $context["defaultPageQuantityAround"] = 3;
            // line 49
            echo "                ";
            // line 50
            echo "                ";
            $context["minimumPageQuantityAround"] = min(((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 50, $this->source); })()) - 1), ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 50, $this->source); })()) - (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 50, $this->source); })())));
            // line 51
            echo "                ";
            // line 52
            echo "                ";
            $context["conditionBefore"] = (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 52, $this->source); })()) != 1) && ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 52, $this->source); })()) <= ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 52, $this->source); })()) - 1)));
            // line 53
            echo "                ";
            // line 54
            echo "                ";
            $context["conditionAfter"] = (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 54, $this->source); })()) != (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 54, $this->source); })())) && ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 54, $this->source); })()) <= ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 54, $this->source); })()) - (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 54, $this->source); })()))));
            // line 55
            echo "                ";
            // line 56
            echo "                ";
            $context["PageQuantityAroundBefore"] = (((isset($context["conditionBefore"]) || array_key_exists("conditionBefore", $context) ? $context["conditionBefore"] : (function () { throw new RuntimeError('Variable "conditionBefore" does not exist.', 56, $this->source); })())) ? ((isset($context["defaultPageQuantityAround"]) || array_key_exists("defaultPageQuantityAround", $context) ? $context["defaultPageQuantityAround"] : (function () { throw new RuntimeError('Variable "defaultPageQuantityAround" does not exist.', 56, $this->source); })())) : ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 56, $this->source); })())));
            // line 57
            echo "                ";
            // line 58
            echo "                ";
            $context["PageQuantityAroundAfter"] = (((isset($context["conditionAfter"]) || array_key_exists("conditionAfter", $context) ? $context["conditionAfter"] : (function () { throw new RuntimeError('Variable "conditionAfter" does not exist.', 58, $this->source); })())) ? ((isset($context["defaultPageQuantityAround"]) || array_key_exists("defaultPageQuantityAround", $context) ? $context["defaultPageQuantityAround"] : (function () { throw new RuntimeError('Variable "defaultPageQuantityAround" does not exist.', 58, $this->source); })())) : ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 58, $this->source); })())));
            // line 59
            echo "
                <ul>
                    ";
            // line 62
            echo "                    ";
            if ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 62, $this->source); })()) - 1) != 0)) {
                // line 63
                echo "                        <li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 63, $this->source); })()) == 1)) ? ("class=\"disabled\"") : (""));
                echo ">
                            <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activites_index", ["page" => ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 64, $this->source); })()) - 1)]), "html", null, true);
                echo "\" title=\"Previous\">«</a>
                        </li>
                    ";
            }
            // line 67
            echo "

                    ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 69, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 70
                echo "
                        ";
                // line 72
                echo "                        ";
                if (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 72, $this->source); })()) == $context["i"])) {
                    // line 73
                    echo "                            <li class=\"active\">
                                <a href=\"#\">";
                    // line 74
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                    // line 77
                    echo "                        ";
                } elseif (((($context["i"] < (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 77, $this->source); })())) && (1 != $context["i"])) && ($context["i"] == (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 77, $this->source); })()) - (isset($context["PageQuantityAroundBefore"]) || array_key_exists("PageQuantityAroundBefore", $context) ? $context["PageQuantityAroundBefore"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundBefore" does not exist.', 77, $this->source); })())) - 1)))) {
                    // line 78
                    echo "                            <li>
                                <a href=\"#\">...</a>
                            </li>
                        ";
                    // line 82
                    echo "                        ";
                } elseif (((($context["i"] > (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 82, $this->source); })())) && ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 82, $this->source); })()) != $context["i"])) && ($context["i"] == (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 82, $this->source); })()) + (isset($context["PageQuantityAroundAfter"]) || array_key_exists("PageQuantityAroundAfter", $context) ? $context["PageQuantityAroundAfter"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundAfter" does not exist.', 82, $this->source); })())) + 1)))) {
                    // line 83
                    echo "                            <li>
                                <a href=\"#\">...</a>
                            </li>
                        ";
                    // line 87
                    echo "                        ";
                } elseif (((1 != $context["i"]) && ($context["i"] < (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 87, $this->source); })()) - (isset($context["PageQuantityAroundBefore"]) || array_key_exists("PageQuantityAroundBefore", $context) ? $context["PageQuantityAroundBefore"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundBefore" does not exist.', 87, $this->source); })())) - 1)))) {
                    // line 88
                    echo "                            <li class=\"hidden\">
                                <a href=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activites_index", ["page" => $context["i"]]), "html", null, true);
                    echo "\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                    // line 92
                    echo "                        ";
                } elseif ((((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 92, $this->source); })()) != $context["i"]) && ($context["i"] > (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 92, $this->source); })()) + (isset($context["PageQuantityAroundAfter"]) || array_key_exists("PageQuantityAroundAfter", $context) ? $context["PageQuantityAroundAfter"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundAfter" does not exist.', 92, $this->source); })())) + 1)))) {
                    // line 93
                    echo "                            <li class=\"hidden\">
                                <a href=\"";
                    // line 94
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activites_index", ["page" => $context["i"]]), "html", null, true);
                    echo "\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                    // line 97
                    echo "                        ";
                } elseif ((($context["i"] == 1) || ($context["i"] == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 97, $this->source); })())))) {
                    // line 98
                    echo "                            <li>
                                <a href=\"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activites_index", ["page" => $context["i"]]), "html", null, true);
                    echo "\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                    // line 102
                    echo "                        ";
                } else {
                    // line 103
                    echo "                            <li>
                                <a href=\"";
                    // line 104
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activites_index", ["page" => $context["i"]]), "html", null, true);
                    echo "\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                // line 107
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "

                    ";
            // line 111
            echo "                    ";
            if ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 111, $this->source); })()) + 1) <= (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 111, $this->source); })()))) {
                // line 112
                echo "                        <li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 112, $this->source); })()) == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 112, $this->source); })()))) ? ("class=\"disabled\"") : (""));
                echo ">
                            <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activites_index", ["page" => ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 113, $this->source); })()) + 1)]), "html", null, true);
                echo "\" title=\"Next\">»</a>
                        </li>
                    ";
            }
            // line 116
            echo "                </ul>

            ";
        }
        // line 119
        echo "
        ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo twig_spaceless($___internal_parse_0_);
        // line 121
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "activites/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 121,  333 => 43,  329 => 119,  324 => 116,  318 => 113,  313 => 112,  310 => 111,  306 => 108,  300 => 107,  290 => 104,  287 => 103,  284 => 102,  275 => 99,  272 => 98,  269 => 97,  260 => 94,  257 => 93,  254 => 92,  245 => 89,  242 => 88,  239 => 87,  234 => 83,  231 => 82,  226 => 78,  223 => 77,  218 => 74,  215 => 73,  212 => 72,  209 => 70,  205 => 69,  201 => 67,  195 => 64,  190 => 63,  187 => 62,  183 => 59,  180 => 58,  178 => 57,  175 => 56,  173 => 55,  170 => 54,  168 => 53,  165 => 52,  163 => 51,  160 => 50,  158 => 49,  155 => 48,  152 => 46,  150 => 45,  147 => 44,  145 => 43,  140 => 40,  131 => 36,  119 => 29,  115 => 28,  109 => 25,  105 => 24,  100 => 22,  96 => 20,  91 => 19,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Index Activités{% endblock %}

{% block body %}
    <div class=\"container-body\">

        <h1>Ici vous pouvez gérer les activités</h1>

        <a href=\"{{ path('app_activites_new') }}\">Ajouter nouvelle activité</a>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Activité</th>
                </tr>
            </thead>
            <tbody>
            {% for activite in activites %}
                <tr>
                    <td>
                        <div>{{ activite.nomActivite }}</div>
                        <div class=\"actions\">
                            <form method=\"post\" action=\"{{ path('app_activites_edit', {'id': activite.id}) }}\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit' ~ activite.id) }}\">
                                <button class=\"btn modification\">Modifier</button>
                            </form>
                            <form method=\"post\" action=\"{{ path('app_activites_delete', {'id': activite.id}) }}\" onsubmit=\"return confirm('Etes-vous certain de vouloir supprimer cette activité ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ activite.id) }}\">
                                <button class=\"btn suppression\">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"1\">Aucun enregistrement trouvé !</td>
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
                            <a href=\"{{ path('app_activites_index', { 'page': thisPage - 1 }) }}\" title=\"Previous\">«</a>
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
                                <a href=\"{{ path('app_activites_index', { 'page': i }) }}\" title=\"Page {{ i }}\">{{ i }}</a>
                            </li>
                        {# Hide pages over current page and after \"...\" excepted page with number \"maxPages\" (last) #}
                        {% elseif (maxPages != i) and (i > thisPage + PageQuantityAroundAfter + 1) %}
                            <li class=\"hidden\">
                                <a href=\"{{ path('app_activites_index', { 'page': i }) }}\" title=\"Page {{ i }}\">{{ i }}</a>
                            </li>
                        {# Apply particular style for lowest link corresponding to first page 1, and Highest link corresponding to page total count #}
                        {% elseif i == 1 or i == maxPages %}
                            <li>
                                <a href=\"{{ path('app_activites_index', { 'page': i }) }}\" title=\"Page {{ i }}\">{{ i }}</a>
                            </li>
                        {# Normal links which are not concerned by conditions above #}
                        {% else %}
                            <li>
                                <a href=\"{{ path('app_activites_index', { 'page': i }) }}\" title=\"Page {{ i }}\">{{ i }}</a>
                            </li>
                        {% endif %}
                    {% endfor %}


                    {# Next link #}
                    {% if thisPage + 1 <= maxPages %}
                        <li {{ thisPage == maxPages ? 'class=\"disabled\"' }}>
                            <a href=\"{{ path('app_activites_index', { 'page': thisPage + 1 }) }}\" title=\"Next\">»</a>
                        </li>
                    {% endif %}
                </ul>

            {% endif %}

        {% endapply %}

    </div>
{% endblock %}
", "activites/index.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\activites\\index.html.twig");
    }
}
