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

/* base.html.twig */
class __TwigTemplate_31fbfa853f1c9dd6b6a42b56ecceb7f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css\" integrity=\"sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/front.css"), "html", null, true);
        echo "\">

        ";
        // line 15
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </head>

    <body>
        <header>
            <div id=\"root\" class=\"container\">
                <div class=\"site\">
                    <a class=\"nom-site\" href=\"/\"><p id=\"B\">B</p><p id=\"I\">I</p><p id=\"O\">O</p><p id=\"ET\">&</p><p id=\"V\">V</p><p id=\"I2\">I</p><p id=\"E\">E</p></a>
                </div>
                <nav class=\"barre-nav\">
                    <a class=\"lien-nav\" href=\"/\"><p>ACCUEIL</p></a>
                    <p class=\"sep-nav\">|</p>
                    <a class=\"lien-nav\" href=\"/#section-artisans\"><p>NOS PROFESSIONNELS</p></a>
                    <p class=\"sep-nav\">|</p>
                    <a class=\"lien-nav\" href=\"/contact\"><p>CONTACTEZ-NOUS</p></a>
                </nav>
                <div id=\"topnav_hamburger_icon\" onclick=\"showResponsiveMenu()\">
                    <i class=\"fa-solid fa-bars\"></i>
                </div>
                <nav id=\"topnav_responsive_menu\">
                    <div class=\"icon-menu-open\" onclick=\"showResponsiveMenu()\"><i class=\"fa-solid fa-chevron-left\"></i></div>
                    <ul>
                        <li><div class=\"titre-burger\"><h2>BIO&VIE</h2><div class=\"bande-verte-burger\"></div></div></li>
                        <li><a class=\"lien-nav\" href=\"/\"><p>ACCUEIL</p></a></li>
                        <li><a class=\"lien-nav\" href=\"/#section-artisans\"><p>NOS PROFESSIONNELS</p></a></li>
                        <li><a class=\"lien-nav\" href=\"/contact\"><p>CONTACTEZ-NOUS</p></a></li>
                    </ul>
                </nav>
            </div>
        </header>

        ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "
        <footer>
            <div class=\"container\">
                <div class=\"pied\">
                    <a href=\"/\"><h2>BIO&VIE</h2></a>
                    <a href=\"/contact\"><p>Contactez-nous</p></a>
                    <p>Mentions légales</p>
                </div>
            </div>
        </footer>

        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript/front.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bio_et_Vie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 53,  180 => 52,  170 => 20,  163 => 19,  153 => 16,  146 => 15,  133 => 5,  120 => 66,  107 => 55,  105 => 52,  73 => 22,  71 => 19,  68 => 18,  65 => 15,  60 => 12,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Bio_et_Vie{% endblock %}</title>

        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css\" integrity=\"sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

        <link rel=\"stylesheet\" href=\"{{ asset('styles/front.css') }}\">

        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>

    <body>
        <header>
            <div id=\"root\" class=\"container\">
                <div class=\"site\">
                    <a class=\"nom-site\" href=\"/\"><p id=\"B\">B</p><p id=\"I\">I</p><p id=\"O\">O</p><p id=\"ET\">&</p><p id=\"V\">V</p><p id=\"I2\">I</p><p id=\"E\">E</p></a>
                </div>
                <nav class=\"barre-nav\">
                    <a class=\"lien-nav\" href=\"/\"><p>ACCUEIL</p></a>
                    <p class=\"sep-nav\">|</p>
                    <a class=\"lien-nav\" href=\"/#section-artisans\"><p>NOS PROFESSIONNELS</p></a>
                    <p class=\"sep-nav\">|</p>
                    <a class=\"lien-nav\" href=\"/contact\"><p>CONTACTEZ-NOUS</p></a>
                </nav>
                <div id=\"topnav_hamburger_icon\" onclick=\"showResponsiveMenu()\">
                    <i class=\"fa-solid fa-bars\"></i>
                </div>
                <nav id=\"topnav_responsive_menu\">
                    <div class=\"icon-menu-open\" onclick=\"showResponsiveMenu()\"><i class=\"fa-solid fa-chevron-left\"></i></div>
                    <ul>
                        <li><div class=\"titre-burger\"><h2>BIO&VIE</h2><div class=\"bande-verte-burger\"></div></div></li>
                        <li><a class=\"lien-nav\" href=\"/\"><p>ACCUEIL</p></a></li>
                        <li><a class=\"lien-nav\" href=\"/#section-artisans\"><p>NOS PROFESSIONNELS</p></a></li>
                        <li><a class=\"lien-nav\" href=\"/contact\"><p>CONTACTEZ-NOUS</p></a></li>
                    </ul>
                </nav>
            </div>
        </header>

        {% block body %}
        
        {% endblock %}

        <footer>
            <div class=\"container\">
                <div class=\"pied\">
                    <a href=\"/\"><h2>BIO&VIE</h2></a>
                    <a href=\"/contact\"><p>Contactez-nous</p></a>
                    <p>Mentions légales</p>
                </div>
            </div>
        </footer>

        <script src=\"{{ asset('javascript/front.js') }}\"></script>

    </body>

</html>
", "base.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\base.html.twig");
    }
}
