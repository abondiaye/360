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

/* portfolio/formation.html.twig */
class __TwigTemplate_2d9665206e42fb105845115796ce1e98 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/formation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/formation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/formation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Parcours & Diplômes - GeniusPro360°";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .clip-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            padding: 3rem;
            background-color: #0f172a;
        }

        .clip-card {
            position: relative;
            overflow: hidden;
            height: 250px;
            border-radius: 1rem;
            box-shadow: 0 10px 20px rgba(0,0,0,0.4);
            cursor: pointer;
        }

        .clip-card svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .clip-card image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .clip-title {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 1rem;
            background: rgba(15,23,42,0.8);
            color: #facc15;
            font-weight: bold;
            text-align: center;
            font-size: 1rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "    <h1 style=\"text-align:center; color: #facc15; margin-top: 2rem;\">Mes diplômes et expériences</h1>
    <div class=\"clip-grid\">
        <div class=\"clip-card\">
            <svg viewBox=\"0 0 300 200\" preserveAspectRatio=\"xMidYMid slice\">
                <defs>
                    <clipPath id=\"clip1\">
                        <circle cx=\"150\" cy=\"100\" r=\"100\" />
                    </clipPath>
                </defs>
                <image xlink:href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/diplomes/cuisine.jpg"), "html", null, true);
        echo "\" width=\"300\" height=\"200\" clip-path=\"url(#clip1)\" />
            </svg>
            <div class=\"clip-title\">CAP Cuisine</div>
        </div>

        <div class=\"clip-card\">
            <svg viewBox=\"0 0 300 200\" preserveAspectRatio=\"xMidYMid slice\">
                <defs>
                    <clipPath id=\"clip2\">
                        <circle cx=\"150\" cy=\"100\" r=\"100\" />
                    </clipPath>
                </defs>
                <image xlink:href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/diplomes/traiteur.jpg"), "html", null, true);
        echo "\" width=\"300\" height=\"200\" clip-path=\"url(#clip2)\" />
            </svg>
            <div class=\"clip-title\">Mention Complémentaire Traiteur</div>
        </div>

        <div class=\"clip-card\">
            <svg viewBox=\"0 0 300 200\" preserveAspectRatio=\"xMidYMid slice\">
                <defs>
                    <clipPath id=\"clip3\">
                        <circle cx=\"150\" cy=\"100\" r=\"100\" />
                    </clipPath>
                </defs>
                <image xlink:href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/diplomes/accueil-routier.jpg"), "html", null, true);
        echo "\" width=\"300\" height=\"200\" clip-path=\"url(#clip3)\" />
            </svg>
            <div class=\"clip-title\">BAC Accueil & Conduite Routière</div>
        </div>

        <div class=\"clip-card\">
            <svg viewBox=\"0 0 300 200\" preserveAspectRatio=\"xMidYMid slice\">
                <defs>
                    <clipPath id=\"clip4\">
                        <circle cx=\"150\" cy=\"100\" r=\"100\" />
                    </clipPath>
                </defs>
                <image xlink:href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/diplomes/transports.jpg"), "html", null, true);
        echo "\" width=\"300\" height=\"200\" clip-path=\"url(#clip4)\" />
            </svg>
            <div class=\"clip-title\">TCL, Cars du Rhône, Philibert, Keolis</div>
        </div>

        <div class=\"clip-card\">
            <svg viewBox=\"0 0 300 200\" preserveAspectRatio=\"xMidYMid slice\">
                <defs>
                    <clipPath id=\"clip5\">
                        <circle cx=\"150\" cy=\"100\" r=\"100\" />
                    </clipPath>
                </defs>
                <image xlink:href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/diplomes/informatique.jpg"), "html", null, true);
        echo "\" width=\"300\" height=\"200\" clip-path=\"url(#clip5)\" />
            </svg>
            <div class=\"clip-title\">BTS TSSR - Support Informatique</div>
        </div>

        <div class=\"clip-card\">
            <svg viewBox=\"0 0 300 200\" preserveAspectRatio=\"xMidYMid slice\">
                <defs>
                    <clipPath id=\"clip6\">
                        <circle cx=\"150\" cy=\"100\" r=\"100\" />
                    </clipPath>
                </defs>
                <image xlink:href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/diplomes/devweb.jpg"), "html", null, true);
        echo "\" width=\"300\" height=\"200\" clip-path=\"url(#clip6)\" />
            </svg>
            <div class=\"clip-title\">BAC+3 Développeur Web Full-Stack</div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "portfolio/formation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  242 => 123,  227 => 111,  212 => 99,  197 => 87,  182 => 75,  167 => 63,  156 => 54,  146 => 53,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Parcours & Diplômes - GeniusPro360°{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .clip-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            padding: 3rem;
            background-color: #0f172a;
        }

        .clip-card {
            position: relative;
            overflow: hidden;
            height: 250px;
            border-radius: 1rem;
            box-shadow: 0 10px 20px rgba(0,0,0,0.4);
            cursor: pointer;
        }

        .clip-card svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .clip-card image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .clip-title {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 1rem;
            background: rgba(15,23,42,0.8);
            color: #facc15;
            font-weight: bold;
            text-align: center;
            font-size: 1rem;
        }
    </style>
{% endblock %}

{% block body %}
    <h1 style=\"text-align:center; color: #facc15; margin-top: 2rem;\">Mes diplômes et expériences</h1>
    <div class=\"clip-grid\">
        <div class=\"clip-card\">
            <svg viewBox=\"0 0 300 200\" preserveAspectRatio=\"xMidYMid slice\">
                <defs>
                    <clipPath id=\"clip1\">
                        <circle cx=\"150\" cy=\"100\" r=\"100\" />
                    </clipPath>
                </defs>
                <image xlink:href=\"{{ asset('images/diplomes/cuisine.jpg') }}\" width=\"300\" height=\"200\" clip-path=\"url(#clip1)\" />
            </svg>
            <div class=\"clip-title\">CAP Cuisine</div>
        </div>

        <div class=\"clip-card\">
            <svg viewBox=\"0 0 300 200\" preserveAspectRatio=\"xMidYMid slice\">
                <defs>
                    <clipPath id=\"clip2\">
                        <circle cx=\"150\" cy=\"100\" r=\"100\" />
                    </clipPath>
                </defs>
                <image xlink:href=\"{{ asset('images/diplomes/traiteur.jpg') }}\" width=\"300\" height=\"200\" clip-path=\"url(#clip2)\" />
            </svg>
            <div class=\"clip-title\">Mention Complémentaire Traiteur</div>
        </div>

        <div class=\"clip-card\">
            <svg viewBox=\"0 0 300 200\" preserveAspectRatio=\"xMidYMid slice\">
                <defs>
                    <clipPath id=\"clip3\">
                        <circle cx=\"150\" cy=\"100\" r=\"100\" />
                    </clipPath>
                </defs>
                <image xlink:href=\"{{ asset('images/diplomes/accueil-routier.jpg') }}\" width=\"300\" height=\"200\" clip-path=\"url(#clip3)\" />
            </svg>
            <div class=\"clip-title\">BAC Accueil & Conduite Routière</div>
        </div>

        <div class=\"clip-card\">
            <svg viewBox=\"0 0 300 200\" preserveAspectRatio=\"xMidYMid slice\">
                <defs>
                    <clipPath id=\"clip4\">
                        <circle cx=\"150\" cy=\"100\" r=\"100\" />
                    </clipPath>
                </defs>
                <image xlink:href=\"{{ asset('images/diplomes/transports.jpg') }}\" width=\"300\" height=\"200\" clip-path=\"url(#clip4)\" />
            </svg>
            <div class=\"clip-title\">TCL, Cars du Rhône, Philibert, Keolis</div>
        </div>

        <div class=\"clip-card\">
            <svg viewBox=\"0 0 300 200\" preserveAspectRatio=\"xMidYMid slice\">
                <defs>
                    <clipPath id=\"clip5\">
                        <circle cx=\"150\" cy=\"100\" r=\"100\" />
                    </clipPath>
                </defs>
                <image xlink:href=\"{{ asset('images/diplomes/informatique.jpg') }}\" width=\"300\" height=\"200\" clip-path=\"url(#clip5)\" />
            </svg>
            <div class=\"clip-title\">BTS TSSR - Support Informatique</div>
        </div>

        <div class=\"clip-card\">
            <svg viewBox=\"0 0 300 200\" preserveAspectRatio=\"xMidYMid slice\">
                <defs>
                    <clipPath id=\"clip6\">
                        <circle cx=\"150\" cy=\"100\" r=\"100\" />
                    </clipPath>
                </defs>
                <image xlink:href=\"{{ asset('images/diplomes/devweb.jpg') }}\" width=\"300\" height=\"200\" clip-path=\"url(#clip6)\" />
            </svg>
            <div class=\"clip-title\">BAC+3 Développeur Web Full-Stack</div>
        </div>
    </div>
{% endblock %}
", "portfolio/formation.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/portfolio/formation.html.twig");
    }
}
