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

/* home/_form.html.twig */
class __TwigTemplate_1fbb328b596239484af160f29a98fb5b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/_form.html.twig"));

        // line 1
        echo "
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 3
            echo "
        ";
            // line 4
            if ((twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 4) != "En conversion")) {
                // line 5
                echo "
            <div value=\"";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 6), "html", null, true);
                echo "\" name=\"categorie\" onclick=\"recup_Data(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 6), "html", null, true);
                echo ")\">
                <article value=\"";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 7), "html", null, true);
                echo "\" name=\"categorie\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 7), "html", null, true);
                echo "\" class=\"card-cat\">
                    <div class=\"conteneur-image\">
                        <img class=\"img-cat\" src=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 9), "html", null, true);
                echo ".png";
                echo "\" alt=\"icône de la catégorie ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 9), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 9), "html", null, true);
                echo "\" name=\"categorie\">
                        <div class=\"cercle\"> </div>
                    </div>
                    <div class=\"conteneur-titre\">
                        <p class=\"nom-cat\" value=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 13), "html", null, true);
                echo "\" name=\"categorie\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 13)), "html", null, true);
                echo "</p>
                    </div>
                </article>
                <input type=\"hidden\" name=\"page\" value=\"";
                // line 16
                echo twig_escape_filter($this->env, (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 16, $this->source); })()), "html", null, true);
                echo "\" id=\"page\">
            </div>

        ";
            }
            // line 20
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 20,  89 => 16,  81 => 13,  68 => 9,  61 => 7,  55 => 6,  52 => 5,  50 => 4,  47 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    {% for categorie in categories %}

        {% if categorie.nom != \"En conversion\" %}

            <div value=\"{{ categorie.id }}\" name=\"categorie\" onclick=\"recup_Data({{ categorie.id }})\">
                <article value=\"{{ categorie.id }}\" name=\"categorie\" id=\"{{ categorie.id }}\" class=\"card-cat\">
                    <div class=\"conteneur-image\">
                        <img class=\"img-cat\" src=\"{{ asset(\"images/icons/icon-\")}}{{ categorie.nom }}{{(\".png\") }}\" alt=\"icône de la catégorie {{ categorie.nom }}\" value=\"{{ categorie.id }}\" name=\"categorie\">
                        <div class=\"cercle\"> </div>
                    </div>
                    <div class=\"conteneur-titre\">
                        <p class=\"nom-cat\" value=\"{{ categorie.id }}\" name=\"categorie\">{{ categorie.nom|upper }}</p>
                    </div>
                </article>
                <input type=\"hidden\" name=\"page\" value=\"{{ thisPage }}\" id=\"page\">
            </div>

        {% endif %}

    {% endfor %}", "home/_form.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\home\\_form.html.twig");
    }
}
