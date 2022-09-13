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
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 43, $this->source); })()) > 1)) {
            // line 44
            echo "            <ul>
                ";
            // line 46
            echo "                <li ";
            echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 46, $this->source); })()) == 1)) ? ("class=\"disabled\"") : (""));
            echo ">
                    ";
            // line 48
            echo "                    <a href=\"{page: thisPage-1 < 1 ? 1 : thisPage-1}\">«</a>
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
                    ";
                // line 55
                echo "                    <a href=\"{page: i}\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
                ";
            // line 60
            echo "                <li ";
            echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 60, $this->source); })()) == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 60, $this->source); })()))) ? ("class=\"disabled\"") : (""));
            echo ">
                    ";
            // line 62
            echo "                    <a href=\"{page: thisPage+1 <= maxPages ? thisPage+1 : thisPage}\">»</a>
                </li>
            </ul>
        ";
        }
        // line 66
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
        return array (  194 => 66,  188 => 62,  183 => 60,  180 => 58,  170 => 55,  165 => 53,  160 => 52,  155 => 48,  150 => 46,  147 => 44,  145 => 43,  140 => 40,  131 => 36,  119 => 29,  115 => 28,  109 => 25,  105 => 24,  100 => 22,  96 => 20,  91 => 19,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
{% endblock %}
", "activites/index.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\activites\\index.html.twig");
    }
}
