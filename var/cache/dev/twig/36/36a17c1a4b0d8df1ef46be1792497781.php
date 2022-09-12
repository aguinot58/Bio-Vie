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

        echo "Categories index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Ici vous pouvez gérer les catégories</h1>

    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_new");
        echo "\">Create new</a>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>actions</th>
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
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>
                    <form method=\"post\" action=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("edit" . twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 25))), "html", null, true);
            echo "\">
                        <button class=\"btn\">Modifier</button>
                    </form>
                    <form method=\"post\" action=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Etes-vous certain de vouloir supprimer cette catégorie ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 29))), "html", null, true);
            echo "\">
                        <button class=\"btn\">Supprimer</button>
                    </form>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <tr>
                <td colspan=\"3\">Aucun enregistrement trouvé !</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

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
        return array (  142 => 39,  133 => 35,  122 => 29,  118 => 28,  112 => 25,  108 => 24,  103 => 22,  99 => 21,  96 => 20,  91 => 19,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Categories index{% endblock %}

{% block body %}
    <h1>Ici vous pouvez gérer les catégories</h1>

    <a href=\"{{ path('app_categories_new') }}\">Create new</a>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td>{{ category.id }}</td>
                <td>{{ category.nom }}</td>
                <td>
                    <form method=\"post\" action=\"{{ path('app_categories_edit', {'id': category.id}) }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit' ~ category.id) }}\">
                        <button class=\"btn\">Modifier</button>
                    </form>
                    <form method=\"post\" action=\"{{ path('app_categories_delete', {'id': category.id}) }}\" onsubmit=\"return confirm('Etes-vous certain de vouloir supprimer cette catégorie ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ category.id) }}\">
                        <button class=\"btn\">Supprimer</button>
                    </form>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">Aucun enregistrement trouvé !</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "categories/index.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\categories\\index.html.twig");
    }
}
