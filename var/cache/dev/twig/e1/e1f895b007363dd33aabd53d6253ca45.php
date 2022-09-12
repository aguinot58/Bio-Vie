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
        echo "<div class=\"card\">

    <img src=\"\" alt=\"image categorie\" class=\"image-top\">
    <div class=\"card-body\">
        <h5 class=\"card-title\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 5, $this->source); })()), "raisonSociale", [], "any", false, false, false, 5), "html", null, true);
        echo "</h5>
        <div class=\"card-infos\">
            <p class=\"gras\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 7, $this->source); })()), "gerant", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
            <p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["operateur"]) || array_key_exists("operateur", $context) ? $context["operateur"] : (function () { throw new RuntimeError('Variable "operateur" does not exist.', 8, $this->source); })()), "telephone", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
        </div>
    </div>

</div>";
        
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
        return array (  55 => 8,  51 => 7,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">

    <img src=\"\" alt=\"image categorie\" class=\"image-top\">
    <div class=\"card-body\">
        <h5 class=\"card-title\">{{ operateur.raisonSociale }}</h5>
        <div class=\"card-infos\">
            <p class=\"gras\">{{ operateur.gerant }}</p>
            <p>{{ operateur.telephone }}</p>
        </div>
    </div>

</div>", "operateurs/_card.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\operateurs\\_card.html.twig");
    }
}
