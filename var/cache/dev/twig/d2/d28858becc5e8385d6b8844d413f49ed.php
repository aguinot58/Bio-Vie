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

/* home/home.html.twig */
class __TwigTemplate_83d7c3e7c6bc4bd3cbaa100a2f83bcef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <section id=\"section-titre\">

        <div class=\"container\">
            <h1>BIO&VIE</h1>
            <h3 class=\"sous-titre\">Votre catalogue</h3>
            <h3>des professionnels certifiés bio</h3>
        </div>

\t</section>

    <section id=\"section-nombre\">
            
            <div class=\"image\">
                <img class=\"img-desktop\" title=\"Photo décorative femme asiatique cueillant olives vertes\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/index/infos.jpg"), "html", null, true);
        echo "\" alt=\"femme asiatique cueillant des olives vertes\">
                <img class=\"img-mobile\" title=\"Photo décorative femme asiatique cueillant olives vertes\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/index/infos-mobile.jpg"), "html", null, true);
        echo "\" alt=\"femme asiatique cueillant des olives vertes\">
            </div>

            <div class=\"infos\">
                <img title=\"icon-blé\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-ble.png"), "html", null, true);
        echo "\" alt=\"logo représentant des épis de blés\">
                <p class=\"nombre\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</p>
                <p>professionnels</p>
                <img id=\"img-France\" title=\"icon-france\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-france.png"), "html", null, true);
        echo "\" alt=\"logo représentant la carte de France\">
                <p>Dans la France entière</p>
            </div>

\t</section>

    <section id=\"section-presentation\">

        <div class=\"container\">

            <div class=\"image\">
                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/index/presentation.jpg"), "html", null, true);
        echo "\" alt=\"couple d'une cinquantaine d'années tenant des barquettes en plastique de boutures de plantes\">
                <div class=\"bande-verte-2\"></div>
            </div>

            <div class=\"infos\">
                <h2>QUI SONT-ILS ?</h2>
                <div class=\"bande-verte-1\"></div>
                <p>Lorem ipsum dolor sit amet. Ut corporis galisum ad facilis deserunt quo pariatur culpa eum impedit nulla ut recusandae iste. 
                    Sit magni consequatur eum cumque commodi est incidunt nihil et voluptatem consectetur nam reprehenderit quidem ad voluptate 
                    illum in soluta minima. 
                </p>
            </div>
            
        </div>

\t</section>
    

    <section id=\"section-categories\">

        <div class=\"container\">

            ";
        // line 59
        $this->loadTemplate("home/_form.html.twig", "home/home.html.twig", 59)->display($context);
        // line 60
        echo "
        </div>

    </section>

    <section id=\"section-artisans\">

        <div class=\"container\">

            <h2>LES PROFESSIONNELS</h2>
            <div class=\"bande-verte-3\"></div>

            <div class=\"container-artisans\">

                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operateursFiltered"]) || array_key_exists("operateursFiltered", $context) ? $context["operateursFiltered"] : (function () { throw new RuntimeError('Variable "operateursFiltered" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operateur"]) {
            // line 75
            echo "
                        ";
            // line 76
            $this->loadTemplate("operateurs/_card.html.twig", "home/home.html.twig", 76)->display(twig_to_array(["operateur" => $context["operateur"]]));
            // line 77
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
            </div>

            ";
        // line 82
        ob_start();
        // line 83
        echo "
                ";
        // line 84
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 84, $this->source); })()) > 1)) {
            // line 85
            echo "
                    ";
            // line 87
            echo "                    ";
            $context["defaultPageQuantityAround"] = 3;
            // line 88
            echo "                    ";
            // line 89
            echo "                    ";
            $context["minimumPageQuantityAround"] = min(((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 89, $this->source); })()) - 1), ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 89, $this->source); })()) - (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 89, $this->source); })())));
            // line 90
            echo "                    ";
            // line 91
            echo "                    ";
            $context["conditionBefore"] = (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 91, $this->source); })()) != 1) && ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 91, $this->source); })()) <= ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 91, $this->source); })()) - 1)));
            // line 92
            echo "                    ";
            // line 93
            echo "                    ";
            $context["conditionAfter"] = (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 93, $this->source); })()) != (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 93, $this->source); })())) && ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 93, $this->source); })()) <= ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 93, $this->source); })()) - (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 93, $this->source); })()))));
            // line 94
            echo "                    ";
            // line 95
            echo "                    ";
            $context["PageQuantityAroundBefore"] = (((isset($context["conditionBefore"]) || array_key_exists("conditionBefore", $context) ? $context["conditionBefore"] : (function () { throw new RuntimeError('Variable "conditionBefore" does not exist.', 95, $this->source); })())) ? ((isset($context["defaultPageQuantityAround"]) || array_key_exists("defaultPageQuantityAround", $context) ? $context["defaultPageQuantityAround"] : (function () { throw new RuntimeError('Variable "defaultPageQuantityAround" does not exist.', 95, $this->source); })())) : ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 95, $this->source); })())));
            // line 96
            echo "                    ";
            // line 97
            echo "                    ";
            $context["PageQuantityAroundAfter"] = (((isset($context["conditionAfter"]) || array_key_exists("conditionAfter", $context) ? $context["conditionAfter"] : (function () { throw new RuntimeError('Variable "conditionAfter" does not exist.', 97, $this->source); })())) ? ((isset($context["defaultPageQuantityAround"]) || array_key_exists("defaultPageQuantityAround", $context) ? $context["defaultPageQuantityAround"] : (function () { throw new RuntimeError('Variable "defaultPageQuantityAround" does not exist.', 97, $this->source); })())) : ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 97, $this->source); })())));
            // line 98
            echo "
                    <ul>
                        ";
            // line 101
            echo "                        ";
            if ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 101, $this->source); })()) - 1) != 0)) {
                // line 102
                echo "                            <li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 102, $this->source); })()) == 1)) ? ("class=\"disabled\"") : (""));
                echo ">
                                <a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 103, $this->source); })()) - 1), "categorie" => (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 103, $this->source); })())]), "html", null, true);
                echo "#section-artisans\" title=\"Previous\"><</a>
                            </li>
                        ";
            }
            // line 106
            echo "

                        ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 108, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 109
                echo "
                            ";
                // line 111
                echo "                            ";
                if (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 111, $this->source); })()) == $context["i"])) {
                    // line 112
                    echo "                                <li class=\"active\">
                                    <a href=\"#\">";
                    // line 113
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                    // line 116
                    echo "                            ";
                } elseif (((($context["i"] < (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 116, $this->source); })())) && (1 != $context["i"])) && ($context["i"] == (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 116, $this->source); })()) - (isset($context["PageQuantityAroundBefore"]) || array_key_exists("PageQuantityAroundBefore", $context) ? $context["PageQuantityAroundBefore"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundBefore" does not exist.', 116, $this->source); })())) - 1)))) {
                    // line 117
                    echo "                                <li>
                                    <a href=\"#\">...</a>
                                </li>
                            ";
                    // line 121
                    echo "                            ";
                } elseif (((($context["i"] > (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 121, $this->source); })())) && ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 121, $this->source); })()) != $context["i"])) && ($context["i"] == (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 121, $this->source); })()) + (isset($context["PageQuantityAroundAfter"]) || array_key_exists("PageQuantityAroundAfter", $context) ? $context["PageQuantityAroundAfter"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundAfter" does not exist.', 121, $this->source); })())) + 1)))) {
                    // line 122
                    echo "                                <li>
                                    <a href=\"#\">...</a>
                                </li>
                            ";
                    // line 126
                    echo "                            ";
                } elseif (((1 != $context["i"]) && ($context["i"] < (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 126, $this->source); })()) - (isset($context["PageQuantityAroundBefore"]) || array_key_exists("PageQuantityAroundBefore", $context) ? $context["PageQuantityAroundBefore"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundBefore" does not exist.', 126, $this->source); })())) - 1)))) {
                    // line 127
                    echo "                                <li class=\"hidden\">
                                    <a href=\"";
                    // line 128
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => $context["i"], "categorie" => (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 128, $this->source); })())]), "html", null, true);
                    echo "#section-artisans\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                    // line 131
                    echo "                            ";
                } elseif ((((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 131, $this->source); })()) != $context["i"]) && ($context["i"] > (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 131, $this->source); })()) + (isset($context["PageQuantityAroundAfter"]) || array_key_exists("PageQuantityAroundAfter", $context) ? $context["PageQuantityAroundAfter"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundAfter" does not exist.', 131, $this->source); })())) + 1)))) {
                    // line 132
                    echo "                                <li class=\"hidden\">
                                    <a href=\"";
                    // line 133
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => $context["i"], "categorie" => (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 133, $this->source); })())]), "html", null, true);
                    echo "#section-artisans\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                    // line 136
                    echo "                            ";
                } elseif ((($context["i"] == 1) || ($context["i"] == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 136, $this->source); })())))) {
                    // line 137
                    echo "                                <li>
                                    <a href=\"";
                    // line 138
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => $context["i"], "categorie" => (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 138, $this->source); })())]), "html", null, true);
                    echo "#section-artisans\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                    // line 141
                    echo "                            ";
                } else {
                    // line 142
                    echo "                                <li>
                                    <a href=\"";
                    // line 143
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => $context["i"], "categorie" => (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 143, $this->source); })())]), "html", null, true);
                    echo "#section-artisans\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                }
                // line 146
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "

                        ";
            // line 150
            echo "                        ";
            if ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 150, $this->source); })()) + 1) <= (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 150, $this->source); })()))) {
                // line 151
                echo "                            <li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 151, $this->source); })()) == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 151, $this->source); })()))) ? ("class=\"disabled\"") : (""));
                echo ">
                                <a href=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 152, $this->source); })()) + 1), "categorie" => (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 152, $this->source); })())]), "html", null, true);
                echo "#section-artisans\" title=\"Next\">></a>
                            </li>
                        ";
            }
            // line 155
            echo "                    </ul>

                ";
        }
        // line 158
        echo "
            ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo twig_spaceless($___internal_parse_0_);
        // line 160
        echo "            
        </div>
        <div class=\"bande-verte-4\"></div>

    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 160,  361 => 82,  357 => 158,  352 => 155,  346 => 152,  341 => 151,  338 => 150,  334 => 147,  328 => 146,  318 => 143,  315 => 142,  312 => 141,  303 => 138,  300 => 137,  297 => 136,  288 => 133,  285 => 132,  282 => 131,  273 => 128,  270 => 127,  267 => 126,  262 => 122,  259 => 121,  254 => 117,  251 => 116,  246 => 113,  243 => 112,  240 => 111,  237 => 109,  233 => 108,  229 => 106,  223 => 103,  218 => 102,  215 => 101,  211 => 98,  208 => 97,  206 => 96,  203 => 95,  201 => 94,  198 => 93,  196 => 92,  193 => 91,  191 => 90,  188 => 89,  186 => 88,  183 => 87,  180 => 85,  178 => 84,  175 => 83,  173 => 82,  168 => 79,  161 => 77,  159 => 76,  156 => 75,  152 => 74,  136 => 60,  134 => 59,  109 => 37,  95 => 26,  90 => 24,  86 => 23,  79 => 19,  75 => 18,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

    <section id=\"section-titre\">

        <div class=\"container\">
            <h1>BIO&VIE</h1>
            <h3 class=\"sous-titre\">Votre catalogue</h3>
            <h3>des professionnels certifiés bio</h3>
        </div>

\t</section>

    <section id=\"section-nombre\">
            
            <div class=\"image\">
                <img class=\"img-desktop\" title=\"Photo décorative femme asiatique cueillant olives vertes\" src=\"{{ asset('images/index/infos.jpg') }}\" alt=\"femme asiatique cueillant des olives vertes\">
                <img class=\"img-mobile\" title=\"Photo décorative femme asiatique cueillant olives vertes\" src=\"{{ asset('images/index/infos-mobile.jpg') }}\" alt=\"femme asiatique cueillant des olives vertes\">
            </div>

            <div class=\"infos\">
                <img title=\"icon-blé\" src=\"{{ asset('images/icons/icon-ble.png') }}\" alt=\"logo représentant des épis de blés\">
                <p class=\"nombre\">{{ donnees }}</p>
                <p>professionnels</p>
                <img id=\"img-France\" title=\"icon-france\" src=\"{{ asset('images/icons/icon-france.png') }}\" alt=\"logo représentant la carte de France\">
                <p>Dans la France entière</p>
            </div>

\t</section>

    <section id=\"section-presentation\">

        <div class=\"container\">

            <div class=\"image\">
                <img src=\"{{ asset('images/index/presentation.jpg') }}\" alt=\"couple d'une cinquantaine d'années tenant des barquettes en plastique de boutures de plantes\">
                <div class=\"bande-verte-2\"></div>
            </div>

            <div class=\"infos\">
                <h2>QUI SONT-ILS ?</h2>
                <div class=\"bande-verte-1\"></div>
                <p>Lorem ipsum dolor sit amet. Ut corporis galisum ad facilis deserunt quo pariatur culpa eum impedit nulla ut recusandae iste. 
                    Sit magni consequatur eum cumque commodi est incidunt nihil et voluptatem consectetur nam reprehenderit quidem ad voluptate 
                    illum in soluta minima. 
                </p>
            </div>
            
        </div>

\t</section>
    

    <section id=\"section-categories\">

        <div class=\"container\">

            {% include 'home/_form.html.twig' %}

        </div>

    </section>

    <section id=\"section-artisans\">

        <div class=\"container\">

            <h2>LES PROFESSIONNELS</h2>
            <div class=\"bande-verte-3\"></div>

            <div class=\"container-artisans\">

                {% for operateur in operateursFiltered %}

                        {% include 'operateurs/_card.html.twig' with {operateur: operateur} only %}

                {% endfor %}

            </div>

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
                                <a href=\"{{ path('home', { page: thisPage - 1, categorie: cat }) }}#section-artisans\" title=\"Previous\"><</a>
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
                                    <a href=\"{{ path('home', { page: i, categorie: cat }) }}#section-artisans\" title=\"Page {{ i }}\">{{ i }}</a>
                                </li>
                            {# Hide pages over current page and after \"...\" excepted page with number \"maxPages\" (last) #}
                            {% elseif (maxPages != i) and (i > thisPage + PageQuantityAroundAfter + 1) %}
                                <li class=\"hidden\">
                                    <a href=\"{{ path('home', { page: i, categorie: cat }) }}#section-artisans\" title=\"Page {{ i }}\">{{ i }}</a>
                                </li>
                            {# Apply particular style for lowest link corresponding to first page 1, and Highest link corresponding to page total count #}
                            {% elseif i == 1 or i == maxPages %}
                                <li>
                                    <a href=\"{{ path('home', { page: i, categorie: cat }) }}#section-artisans\" title=\"Page {{ i }}\">{{ i }}</a>
                                </li>
                            {# Normal links which are not concerned by conditions above #}
                            {% else %}
                                <li>
                                    <a href=\"{{ path('home', { page: i, categorie: cat }) }}#section-artisans\" title=\"Page {{ i }}\">{{ i }}</a>
                                </li>
                            {% endif %}
                        {% endfor %}


                        {# Next link #}
                        {% if thisPage + 1 <= maxPages %}
                            <li {{ thisPage == maxPages ? 'class=\"disabled\"' }}>
                                <a href=\"{{ path('home', { page: thisPage + 1, categorie: cat }) }}#section-artisans\" title=\"Next\">></a>
                            </li>
                        {% endif %}
                    </ul>

                {% endif %}

            {% endapply %}
            
        </div>
        <div class=\"bande-verte-4\"></div>

    </section>

{% endblock %}", "home/home.html.twig", "C:\\laragon\\www\\Bio-Vie\\templates\\home\\home.html.twig");
    }
}
