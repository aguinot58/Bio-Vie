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

/* categories/index.html.twig */
class __TwigTemplate_0fad3bde2747e933129cd7698bd8660d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "categories/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Index Categories";
        
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

        <h1>Ici vous pouvez gérer les catégories</h1>

        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_new");
        echo "\">Ajouter nouvelle catégorie</a>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Catégorie</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "nom", [], "any", false, false, false, 20) != "En conversion")) {
                // line 21
                echo "                    <tr>
                        <td>
                            <div>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nom", [], "any", false, false, false, 23), "html", null, true);
                echo "</div>
                            <div class=\"actions\">
                                <form method=\"post\" action=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("edit" . twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 26))), "html", null, true);
                echo "\">
                                    <button class=\"btn modification\">Modifier</button>
                                </form>
                                <form method=\"post\" action=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('Etes-vous certain de vouloir supprimer cette catégorie ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 30))), "html", null, true);
                echo "\">
                                    <button class=\"btn suppression\">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                ";
            }
            // line 37
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                <tr>
                    <td colspan=\"1\">Aucun enregistrement trouvé !</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </tbody>
        </table>

        ";
        // line 45
        ob_start();
        // line 46
        echo "
            ";
        // line 47
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 47, $this->source); })()) > 1)) {
            // line 48
            echo "
                ";
            // line 50
            echo "                ";
            $context["defaultPageQuantityAround"] = 3;
            // line 51
            echo "                ";
            // line 52
            echo "                ";
            $context["minimumPageQuantityAround"] = min(((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 52, $this->source); })()) - 1), ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 52, $this->source); })()) - (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 52, $this->source); })())));
            // line 53
            echo "                ";
            // line 54
            echo "                ";
            $context["conditionBefore"] = (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 54, $this->source); })()) != 1) && ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 54, $this->source); })()) <= ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 54, $this->source); })()) - 1)));
            // line 55
            echo "                ";
            // line 56
            echo "                ";
            $context["conditionAfter"] = (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 56, $this->source); })()) != (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 56, $this->source); })())) && ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 56, $this->source); })()) <= ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 56, $this->source); })()) - (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 56, $this->source); })()))));
            // line 57
            echo "                ";
            // line 58
            echo "                ";
            $context["PageQuantityAroundBefore"] = (((isset($context["conditionBefore"]) || array_key_exists("conditionBefore", $context) ? $context["conditionBefore"] : (function () { throw new RuntimeError('Variable "conditionBefore" does not exist.', 58, $this->source); })())) ? ((isset($context["defaultPageQuantityAround"]) || array_key_exists("defaultPageQuantityAround", $context) ? $context["defaultPageQuantityAround"] : (function () { throw new RuntimeError('Variable "defaultPageQuantityAround" does not exist.', 58, $this->source); })())) : ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 58, $this->source); })())));
            // line 59
            echo "                ";
            // line 60
            echo "                ";
            $context["PageQuantityAroundAfter"] = (((isset($context["conditionAfter"]) || array_key_exists("conditionAfter", $context) ? $context["conditionAfter"] : (function () { throw new RuntimeError('Variable "conditionAfter" does not exist.', 60, $this->source); })())) ? ((isset($context["defaultPageQuantityAround"]) || array_key_exists("defaultPageQuantityAround", $context) ? $context["defaultPageQuantityAround"] : (function () { throw new RuntimeError('Variable "defaultPageQuantityAround" does not exist.', 60, $this->source); })())) : ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 60, $this->source); })())));
            // line 61
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_index", ["page" => ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 66, $this->source); })()) - 1)]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_index", ["page" => $context["i"]]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_index", ["page" => $context["i"]]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_index", ["page" => $context["i"]]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_index", ["page" => $context["i"]]), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_index", ["page" => ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 115, $this->source); })()) + 1)]), "html", null, true);
                echo "\" title=\"Next\">»</a>
                        </li>
                    ";
            }
            // line 118
            echo "                </ul>

            ";
        }
        // line 121
        echo "
        ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo twig_spaceless($___internal_parse_0_);
        // line 123
        echo "
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "categories/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 123,  339 => 45,  335 => 121,  330 => 118,  324 => 115,  319 => 114,  316 => 113,  312 => 110,  306 => 109,  296 => 106,  293 => 105,  290 => 104,  281 => 101,  278 => 100,  275 => 99,  266 => 96,  263 => 95,  260 => 94,  251 => 91,  248 => 90,  245 => 89,  240 => 85,  237 => 84,  232 => 80,  229 => 79,  224 => 76,  221 => 75,  218 => 74,  215 => 72,  211 => 71,  207 => 69,  201 => 66,  196 => 65,  193 => 64,  189 => 61,  186 => 60,  184 => 59,  181 => 58,  179 => 57,  176 => 56,  174 => 55,  171 => 54,  169 => 53,  166 => 52,  164 => 51,  161 => 50,  158 => 48,  156 => 47,  153 => 46,  151 => 45,  146 => 42,  137 => 38,  132 => 37,  122 => 30,  118 => 29,  112 => 26,  108 => 25,  103 => 23,  99 => 21,  96 => 20,  91 => 19,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Index Categories{% endblock %}

{% block body %}
    <div class=\"container-body\">

        <h1>Ici vous pouvez gérer les catégories</h1>

        <a href=\"{{ path('app_categories_new') }}\">Ajouter nouvelle catégorie</a>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>Catégorie</th>
                </tr>
            </thead>
            <tbody>
            {% for category in categories %}
                {% if category.nom != \"En conversion\" %}
                    <tr>
                        <td>
                            <div>{{ category.nom }}</div>
                            <div class=\"actions\">
                                <form method=\"post\" action=\"{{ path('app_categories_edit', {'id': category.id}) }}\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit' ~ category.id) }}\">
                                    <button class=\"btn modification\">Modifier</button>
                                </form>
                                <form method=\"post\" action=\"{{ path('app_categories_delete', {'id': category.id}) }}\" onsubmit=\"return confirm('Etes-vous certain de vouloir supprimer cette catégorie ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ category.id) }}\">
                                    <button class=\"btn suppression\">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                {% endif %}
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
                            <a href=\"{{ path('app_categories_index', { 'page': thisPage - 1 }) }}\" title=\"Previous\">«</a>
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
                                <a href=\"{{ path('app_categories_index', { 'page': i }) }}\" title=\"Page {{ i }}\">{{ i }}</a>
                            </li>
                        {# Hide pages over current page and after \"...\" excepted page with number \"maxPages\" (last) #}
                        {% elseif (maxPages != i) and (i > thisPage + PageQuantityAroundAfter + 1) %}
                            <li class=\"hidden\">
                                <a href=\"{{ path('app_categories_index', { 'page': i }) }}\" title=\"Page {{ i }}\">{{ i }}</a>
                            </li>
                        {# Apply particular style for lowest link corresponding to first page 1, and Highest link corresponding to page total count #}
                        {% elseif i == 1 or i == maxPages %}
                            <li>
                                <a href=\"{{ path('app_categories_index', { 'page': i }) }}\" title=\"Page {{ i }}\">{{ i }}</a>
                            </li>
                        {# Normal links which are not concerned by conditions above #}
                        {% else %}
                            <li>
                                <a href=\"{{ path('app_categories_index', { 'page': i }) }}\" title=\"Page {{ i }}\">{{ i }}</a>
                            </li>
                        {% endif %}
                    {% endfor %}


                    {# Next link #}
                    {% if thisPage + 1 <= maxPages %}
                        <li {{ thisPage == maxPages ? 'class=\"disabled\"' }}>
                            <a href=\"{{ path('app_categories_index', { 'page': thisPage + 1 }) }}\" title=\"Next\">»</a>
                        </li>
                    {% endif %}
                </ul>

            {% endif %}

        {% endapply %}

    </div>

{% endblock %}
", "categories/index.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\categories\\index.html.twig");
    }
}
