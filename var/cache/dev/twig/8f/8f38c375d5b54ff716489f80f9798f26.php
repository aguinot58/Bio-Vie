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
        echo "<form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "#section-artisans\" method=\"GET\">

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
        echo "
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 5
            echo "
        ";
            // line 6
            if ((twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 6) != "En conversion")) {
                // line 7
                echo "
            <button type=\"submit\" value=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 8), "html", null, true);
                echo "\" name=\"categorie\">
                <article value=\"";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 9), "html", null, true);
                echo "\" name=\"categorie\">
                    <img class=\"img-cat\" src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 10), "html", null, true);
                echo ".png";
                echo "\" alt=\"icône de la catégorie ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 10), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 10), "html", null, true);
                echo "\" name=\"categorie\">
                    <div class=\"cercle\"> </div>
                    <p class=\"nom-cat\" value=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 12), "html", null, true);
                echo "\" name=\"categorie\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 12)), "html", null, true);
                echo "</p>
                </article>
                
            </button>

        ";
            }
            // line 18
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
        echo "

</form>";
        
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
        return array (  99 => 20,  92 => 18,  81 => 12,  70 => 10,  66 => 9,  62 => 8,  59 => 7,  57 => 6,  54 => 5,  50 => 4,  46 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ path('home') }}#section-artisans\" method=\"GET\">

{{ form_start(form) }}
    {% for categorie in categories %}

        {% if categorie.nom != \"En conversion\" %}

            <button type=\"submit\" value=\"{{ categorie.id }}\" name=\"categorie\">
                <article value=\"{{ categorie.id }}\" name=\"categorie\">
                    <img class=\"img-cat\" src=\"{{ asset(\"images/icons/icon-\")}}{{ categorie.nom }}{{(\".png\") }}\" alt=\"icône de la catégorie {{ categorie.nom }}\" value=\"{{ categorie.id }}\" name=\"categorie\">
                    <div class=\"cercle\"> </div>
                    <p class=\"nom-cat\" value=\"{{ categorie.id }}\" name=\"categorie\">{{ categorie.nom|upper }}</p>
                </article>
                
            </button>

        {% endif %}

    {% endfor %}
{{ form_end(form) }}

</form>", "home/_form.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\home\\_form.html.twig");
    }
}
