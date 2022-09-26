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
                <img title=\"Photo décorative femme asiatique cueillant olives vertes\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/index/infos.jpg"), "html", null, true);
        echo "\" alt=\"femme asiatique cueillant des olives vertes\">
            </div>

            <div class=\"infos\">
                <img title=\"icon-blé\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-ble.png"), "html", null, true);
        echo "\" alt=\"logo représentant des épis de blés\">
                <p class=\"nombre\">";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</p>
                <p>professionnels</p>
                <img id=\"img-France\" title=\"icon-france\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/icon-france.png"), "html", null, true);
        echo "\" alt=\"logo représentant la carte de France\">
                <p>Dans la France entière</p>
            </div>

\t</section>

    <section id=\"section-presentation\">

        <div class=\"container\">

            <div class=\"image\">
                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/index/presentation.jpg"), "html", null, true);
        echo "\" alt=\"couple d'une cinquantaine d'années tenant des barquettes en plastique de boutures de plantes\">
            </div>

            <div class=\"infos\">
                <h2>Qui sont-ils ?</h2>
                <div class=\"bande-verte-1\"></div>
                <p>Lorem ipsum dolor sit amet. Ut corporis galisum ad facilis deserunt quo pariatur culpa eum impedit nulla ut recusandae iste. 
                    Sit magni consequatur eum cumque commodi est incidunt nihil et voluptatem consectetur nam reprehenderit quidem ad voluptate 
                    illum in soluta minima. 
                </p>
            </div>
            
        </div>
        <div class=\"bande-verte-2\"></div>

\t</section>
    

    <section id=\"section-categories\">

        <div class=\"container\">

            ";
        // line 70
        echo "
            ";
        // line 71
        $this->loadTemplate("home/_form.html.twig", "home/home.html.twig", 71)->display($context);
        // line 72
        echo "
        </div>

    </section>

    <section id=\"section-artisans\">

        <div class=\"container\">

            <h2>Les professionnels";
        // line 81
        echo "</h2>
            <div class=\"bande-verte-3\"></div>

            <div class=\"container-artisans\">

                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operateurs"]) || array_key_exists("operateurs", $context) ? $context["operateurs"] : (function () { throw new RuntimeError('Variable "operateurs" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operateur"]) {
            // line 87
            echo "
                    ";
            // line 88
            if ((twig_get_attribute($this->env, $this->source, $context["operateur"], "categories", [], "any", false, false, false, 88) != "En conversion")) {
                // line 89
                echo "
                        ";
                // line 90
                $this->loadTemplate("operateurs/_card.html.twig", "home/home.html.twig", 90)->display(twig_to_array(["operateur" => $context["operateur"]]));
                // line 91
                echo "
                    ";
            }
            // line 93
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
            </div>

            ";
        // line 98
        ob_start();
        // line 99
        echo "
                ";
        // line 100
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 100, $this->source); })()) > 1)) {
            // line 101
            echo "
                    ";
            // line 103
            echo "                    ";
            $context["defaultPageQuantityAround"] = 3;
            // line 104
            echo "                    ";
            // line 105
            echo "                    ";
            $context["minimumPageQuantityAround"] = min(((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 105, $this->source); })()) - 1), ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 105, $this->source); })()) - (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 105, $this->source); })())));
            // line 106
            echo "                    ";
            // line 107
            echo "                    ";
            $context["conditionBefore"] = (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 107, $this->source); })()) != 1) && ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 107, $this->source); })()) <= ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 107, $this->source); })()) - 1)));
            // line 108
            echo "                    ";
            // line 109
            echo "                    ";
            $context["conditionAfter"] = (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 109, $this->source); })()) != (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 109, $this->source); })())) && ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 109, $this->source); })()) <= ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 109, $this->source); })()) - (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 109, $this->source); })()))));
            // line 110
            echo "                    ";
            // line 111
            echo "                    ";
            $context["PageQuantityAroundBefore"] = (((isset($context["conditionBefore"]) || array_key_exists("conditionBefore", $context) ? $context["conditionBefore"] : (function () { throw new RuntimeError('Variable "conditionBefore" does not exist.', 111, $this->source); })())) ? ((isset($context["defaultPageQuantityAround"]) || array_key_exists("defaultPageQuantityAround", $context) ? $context["defaultPageQuantityAround"] : (function () { throw new RuntimeError('Variable "defaultPageQuantityAround" does not exist.', 111, $this->source); })())) : ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 111, $this->source); })())));
            // line 112
            echo "                    ";
            // line 113
            echo "                    ";
            $context["PageQuantityAroundAfter"] = (((isset($context["conditionAfter"]) || array_key_exists("conditionAfter", $context) ? $context["conditionAfter"] : (function () { throw new RuntimeError('Variable "conditionAfter" does not exist.', 113, $this->source); })())) ? ((isset($context["defaultPageQuantityAround"]) || array_key_exists("defaultPageQuantityAround", $context) ? $context["defaultPageQuantityAround"] : (function () { throw new RuntimeError('Variable "defaultPageQuantityAround" does not exist.', 113, $this->source); })())) : ((isset($context["minimumPageQuantityAround"]) || array_key_exists("minimumPageQuantityAround", $context) ? $context["minimumPageQuantityAround"] : (function () { throw new RuntimeError('Variable "minimumPageQuantityAround" does not exist.', 113, $this->source); })())));
            // line 114
            echo "
                    <ul>
                        ";
            // line 117
            echo "                        ";
            if ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 117, $this->source); })()) - 1) != 0)) {
                // line 118
                echo "                            <li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 118, $this->source); })()) == 1)) ? ("class=\"disabled\"") : (""));
                echo ">
                                <a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 119, $this->source); })()) - 1)]), "html", null, true);
                echo "#section-artisans\" title=\"Previous\"><</a>
                            </li>
                        ";
            }
            // line 122
            echo "

                        ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 124, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 125
                echo "
                            ";
                // line 127
                echo "                            ";
                if (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 127, $this->source); })()) == $context["i"])) {
                    // line 128
                    echo "                                <li class=\"active\">
                                    <a href=\"#\">";
                    // line 129
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                    // line 132
                    echo "                            ";
                } elseif (((($context["i"] < (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 132, $this->source); })())) && (1 != $context["i"])) && ($context["i"] == (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 132, $this->source); })()) - (isset($context["PageQuantityAroundBefore"]) || array_key_exists("PageQuantityAroundBefore", $context) ? $context["PageQuantityAroundBefore"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundBefore" does not exist.', 132, $this->source); })())) - 1)))) {
                    // line 133
                    echo "                                <li>
                                    <a href=\"#\">...</a>
                                </li>
                            ";
                    // line 137
                    echo "                            ";
                } elseif (((($context["i"] > (isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 137, $this->source); })())) && ((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 137, $this->source); })()) != $context["i"])) && ($context["i"] == (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 137, $this->source); })()) + (isset($context["PageQuantityAroundAfter"]) || array_key_exists("PageQuantityAroundAfter", $context) ? $context["PageQuantityAroundAfter"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundAfter" does not exist.', 137, $this->source); })())) + 1)))) {
                    // line 138
                    echo "                                <li>
                                    <a href=\"#\">...</a>
                                </li>
                            ";
                    // line 142
                    echo "                            ";
                } elseif (((1 != $context["i"]) && ($context["i"] < (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 142, $this->source); })()) - (isset($context["PageQuantityAroundBefore"]) || array_key_exists("PageQuantityAroundBefore", $context) ? $context["PageQuantityAroundBefore"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundBefore" does not exist.', 142, $this->source); })())) - 1)))) {
                    // line 143
                    echo "                                <li class=\"hidden\">
                                    <a href=\"";
                    // line 144
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => $context["i"]]), "html", null, true);
                    echo "#section-artisans\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                    // line 147
                    echo "                            ";
                } elseif ((((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 147, $this->source); })()) != $context["i"]) && ($context["i"] > (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 147, $this->source); })()) + (isset($context["PageQuantityAroundAfter"]) || array_key_exists("PageQuantityAroundAfter", $context) ? $context["PageQuantityAroundAfter"] : (function () { throw new RuntimeError('Variable "PageQuantityAroundAfter" does not exist.', 147, $this->source); })())) + 1)))) {
                    // line 148
                    echo "                                <li class=\"hidden\">
                                    <a href=\"";
                    // line 149
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => $context["i"]]), "html", null, true);
                    echo "#section-artisans\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                    // line 152
                    echo "                            ";
                } elseif ((($context["i"] == 1) || ($context["i"] == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 152, $this->source); })())))) {
                    // line 153
                    echo "                                <li>
                                    <a href=\"";
                    // line 154
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => $context["i"]]), "html", null, true);
                    echo "#section-artisans\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                    // line 157
                    echo "                            ";
                } else {
                    // line 158
                    echo "                                <li>
                                    <a href=\"";
                    // line 159
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => $context["i"]]), "html", null, true);
                    echo "#section-artisans\" title=\"Page ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                }
                // line 162
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "

                        ";
            // line 166
            echo "                        ";
            if ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 166, $this->source); })()) + 1) <= (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 166, $this->source); })()))) {
                // line 167
                echo "                            <li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 167, $this->source); })()) == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 167, $this->source); })()))) ? ("class=\"disabled\"") : (""));
                echo ">
                                <a href=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 168, $this->source); })()) + 1)]), "html", null, true);
                echo "#section-artisans\" title=\"Next\">></a>
                            </li>
                        ";
            }
            // line 171
            echo "                    </ul>

                ";
        }
        // line 174
        echo "
            ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo twig_spaceless($___internal_parse_0_);
        // line 176
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
        return array (  373 => 176,  371 => 98,  367 => 174,  362 => 171,  356 => 168,  351 => 167,  348 => 166,  344 => 163,  338 => 162,  328 => 159,  325 => 158,  322 => 157,  313 => 154,  310 => 153,  307 => 152,  298 => 149,  295 => 148,  292 => 147,  283 => 144,  280 => 143,  277 => 142,  272 => 138,  269 => 137,  264 => 133,  261 => 132,  256 => 129,  253 => 128,  250 => 127,  247 => 125,  243 => 124,  239 => 122,  233 => 119,  228 => 118,  225 => 117,  221 => 114,  218 => 113,  216 => 112,  213 => 111,  211 => 110,  208 => 109,  206 => 108,  203 => 107,  201 => 106,  198 => 105,  196 => 104,  193 => 103,  190 => 101,  188 => 100,  185 => 99,  183 => 98,  178 => 95,  171 => 93,  167 => 91,  165 => 90,  162 => 89,  160 => 88,  157 => 87,  153 => 86,  146 => 81,  135 => 72,  133 => 71,  130 => 70,  105 => 36,  91 => 25,  86 => 23,  82 => 22,  75 => 18,  59 => 4,  52 => 3,  35 => 1,);
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
                <img title=\"Photo décorative femme asiatique cueillant olives vertes\" src=\"{{ asset('images/index/infos.jpg') }}\" alt=\"femme asiatique cueillant des olives vertes\">
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
            </div>

            <div class=\"infos\">
                <h2>Qui sont-ils ?</h2>
                <div class=\"bande-verte-1\"></div>
                <p>Lorem ipsum dolor sit amet. Ut corporis galisum ad facilis deserunt quo pariatur culpa eum impedit nulla ut recusandae iste. 
                    Sit magni consequatur eum cumque commodi est incidunt nihil et voluptatem consectetur nam reprehenderit quidem ad voluptate 
                    illum in soluta minima. 
                </p>
            </div>
            
        </div>
        <div class=\"bande-verte-2\"></div>

\t</section>
    

    <section id=\"section-categories\">

        <div class=\"container\">

            {#{% for categorie in categories %}

                {% if categorie.nom != \"En conversion\" %}

                    <article>
                        <img class=\"img-cat\" src=\"{{ asset(\"images/icons/icon-\")}}{{ categorie.nom }}{{(\".png\") }}\" alt=\"icône de la catégorie {{ categorie.nom }}\">
                        <p class=\"nom-cat\">{{ categorie.nom }}</p>
                    </article>

                {% endif %}

            {% endfor %}#}

            {% include 'home/_form.html.twig' %}

        </div>

    </section>

    <section id=\"section-artisans\">

        <div class=\"container\">

            <h2>Les professionnels{# - {{ cat }}#}</h2>
            <div class=\"bande-verte-3\"></div>

            <div class=\"container-artisans\">

                {% for operateur in operateurs %}

                    {% if operateur.categories != \"En conversion\" %}

                        {% include 'operateurs/_card.html.twig' with {operateur: operateur} only %}

                    {% endif %}

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
                                <a href=\"{{ path('home', { 'page': thisPage - 1 }) }}#section-artisans\" title=\"Previous\"><</a>
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
                                    <a href=\"{{ path('home', { 'page': i }) }}#section-artisans\" title=\"Page {{ i }}\">{{ i }}</a>
                                </li>
                            {# Hide pages over current page and after \"...\" excepted page with number \"maxPages\" (last) #}
                            {% elseif (maxPages != i) and (i > thisPage + PageQuantityAroundAfter + 1) %}
                                <li class=\"hidden\">
                                    <a href=\"{{ path('home', { 'page': i }) }}#section-artisans\" title=\"Page {{ i }}\">{{ i }}</a>
                                </li>
                            {# Apply particular style for lowest link corresponding to first page 1, and Highest link corresponding to page total count #}
                            {% elseif i == 1 or i == maxPages %}
                                <li>
                                    <a href=\"{{ path('home', { 'page': i }) }}#section-artisans\" title=\"Page {{ i }}\">{{ i }}</a>
                                </li>
                            {# Normal links which are not concerned by conditions above #}
                            {% else %}
                                <li>
                                    <a href=\"{{ path('home', { 'page': i }) }}#section-artisans\" title=\"Page {{ i }}\">{{ i }}</a>
                                </li>
                            {% endif %}
                        {% endfor %}


                        {# Next link #}
                        {% if thisPage + 1 <= maxPages %}
                            <li {{ thisPage == maxPages ? 'class=\"disabled\"' }}>
                                <a href=\"{{ path('home', { 'page': thisPage + 1 }) }}#section-artisans\" title=\"Next\">></a>
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
