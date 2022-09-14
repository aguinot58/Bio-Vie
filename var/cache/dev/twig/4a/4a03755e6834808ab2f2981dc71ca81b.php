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
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 44, $this->source); })()) > 1)) {
            // line 45
            echo "            <ul>
                ";
            // line 47
            echo "                <li ";
            echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 47, $this->source); })()) == 1)) ? ("class=\"disabled\"") : (""));
            echo ">
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operateurs_index", ["page" => (((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 48, $this->source); })()) - 1) < 1)) ? (1) : (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 48, $this->source); })()) - 1)))]), "html", null, true);
            echo "\">«</a>
                </li>

                ";
            // line 52
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 52, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 53
                echo "                    <li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 53, $this->source); })()) == $context["i"])) ? ("class=\"active\"") : (""));
                echo ">
                    <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operateurs_index", ["page" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
                ";
            // line 59
            echo "                <li ";
            echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 59, $this->source); })()) == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 59, $this->source); })()))) ? ("class=\"disabled\"") : (""));
            echo ">
                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operateurs_index", ["page" => (((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 60, $this->source); })()) + 1) <= (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 60, $this->source); })()))) ? (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 60, $this->source); })()) + 1)) : ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 60, $this->source); })())))]), "html", null, true);
            echo "\">»</a>
                </li>
            </ul>
        ";
        }
        // line 64
        echo "    </div>
    
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
        return array (  198 => 64,  191 => 60,  186 => 59,  183 => 57,  172 => 54,  167 => 53,  162 => 52,  156 => 48,  151 => 47,  148 => 45,  146 => 44,  141 => 41,  132 => 37,  120 => 30,  116 => 29,  110 => 26,  106 => 25,  101 => 23,  97 => 21,  92 => 20,  80 => 11,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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

        {% if maxPages > 1 %}
            <ul>
                {# `«` arrow  #}
                <li {{ thisPage == 1 ? 'class=\"disabled\"' }}>
                    <a href=\"{{ path('app_operateurs_index', {page: thisPage-1 < 1 ? 1 : thisPage-1}) }}\">«</a>
                </li>

                {# Render each page number #}
                {% for i in 1..maxPages %}
                    <li {{ thisPage == i ? 'class=\"active\"' }}>
                    <a href=\"{{ path('app_operateurs_index', {page: i}) }}\">{{ i }}</a>
                    </li>
                {% endfor %}

                {# `»` arrow #}
                <li {{ thisPage == maxPages ? 'class=\"disabled\"' }}>
                    <a href=\"{{ path('app_operateurs_index', {page: thisPage+1 <= maxPages ? thisPage+1 : thisPage}) }}\">»</a>
                </li>
            </ul>
        {% endif %}
    </div>
    
{% endblock %}
", "operateurs/index.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\operateurs\\index.html.twig");
    }
}
