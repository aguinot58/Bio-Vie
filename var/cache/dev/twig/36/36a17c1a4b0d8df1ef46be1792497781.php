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
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 45, $this->source); })()) > 1)) {
            // line 46
            echo "            <ul>
                ";
            // line 48
            echo "                <li ";
            echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 48, $this->source); })()) == 1)) ? ("class=\"disabled\"") : (""));
            echo ">
                    ";
            // line 50
            echo "                    <a href=\"{page: thisPage-1 < 1 ? 1 : thisPage-1}\">«</a>
                </li>

                ";
            // line 54
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 54, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 55
                echo "                    <li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 55, $this->source); })()) == $context["i"])) ? ("class=\"active\"") : (""));
                echo ">
                    ";
                // line 57
                echo "                    <a href=\"{page: i}\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "
                ";
            // line 62
            echo "                <li ";
            echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 62, $this->source); })()) == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 62, $this->source); })()))) ? ("class=\"disabled\"") : (""));
            echo ">
                    ";
            // line 64
            echo "                    <a href=\"{page: thisPage+1 <= maxPages ? thisPage+1 : thisPage}\">»</a>
                </li>
            </ul>
        ";
            // line 76
            echo "        ";
        }
        // line 77
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
        return array (  202 => 77,  199 => 76,  194 => 64,  189 => 62,  186 => 60,  176 => 57,  171 => 55,  166 => 54,  161 => 50,  156 => 48,  153 => 46,  151 => 45,  146 => 42,  137 => 38,  132 => 37,  122 => 30,  118 => 29,  112 => 26,  108 => 25,  103 => 23,  99 => 21,  96 => 20,  91 => 19,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
        {#{% else %}
            <ul>
                {% for i in 1..maxPages %}
                    <li {{ thisPage == i ? 'class=\"active\"' }}>
                    <a href=\"{{ path('routeName', {page: i}) }}\">{{ i }}</a>
                    <a href=\"{page: i}\">{{ i }}</a>
                    </li>
                {% endfor %}
            </ul>#}
        {% endif %}

    </div>

{% endblock %}
", "categories/index.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\categories\\index.html.twig");
    }
}
