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

/* operateurs/show.html.twig */
class __TwigTemplate_85352a637b7e77476e12ea0e31d9bdb3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "operateurs/show.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "operateurs/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Operateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Operateurs</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NumeroBio</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 16, $this->source); })()), "numeroBio", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Siret</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 20, $this->source); })()), "siret", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CodeNAF</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 24, $this->source); })()), "codeNAF", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Gerant</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 28, $this->source); })()), "gerant", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>RaisonSociale</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 32, $this->source); })()), "raisonSociale", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 40, $this->source); })()), "telephone", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>SiteWeb</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 44, $this->source); })()), "siteWeb", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateMAJ</th>
                <td>";
        // line 48
        ((twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 48, $this->source); })()), "dateMAJ", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 48, $this->source); })()), "dateMAJ", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operateurs_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operateurs_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 57
        echo twig_include($this->env, $context, "operateurs/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "operateurs/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 57,  157 => 55,  152 => 53,  144 => 48,  137 => 44,  130 => 40,  123 => 36,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Operateurs{% endblock %}

{% block body %}
    <h1>Operateurs</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ operateur.id }}</td>
            </tr>
            <tr>
                <th>NumeroBio</th>
                <td>{{ operateur.numeroBio }}</td>
            </tr>
            <tr>
                <th>Siret</th>
                <td>{{ operateur.siret }}</td>
            </tr>
            <tr>
                <th>CodeNAF</th>
                <td>{{ operateur.codeNAF }}</td>
            </tr>
            <tr>
                <th>Gerant</th>
                <td>{{ operateur.gerant }}</td>
            </tr>
            <tr>
                <th>RaisonSociale</th>
                <td>{{ operateur.raisonSociale }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ operateur.email }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ operateur.telephone }}</td>
            </tr>
            <tr>
                <th>SiteWeb</th>
                <td>{{ operateur.siteWeb }}</td>
            </tr>
            <tr>
                <th>DateMAJ</th>
                <td>{{ operateur.dateMAJ ? operateur.dateMAJ|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_operateurs_index') }}\">back to list</a>

    <a href=\"{{ path('app_operateurs_edit', {'id': operateur.id}) }}\">edit</a>

    {{ include('operateurs/_delete_form.html.twig') }}
{% endblock %}
", "operateurs/show.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\operateurs\\show.html.twig");
    }
}
