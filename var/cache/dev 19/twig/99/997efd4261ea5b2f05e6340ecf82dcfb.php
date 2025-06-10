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

/* blog/index.html.twig */
class __TwigTemplate_e0cdbfbc61ee75d21495a4261f5eed35 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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

        echo "Blog - GeniusPro360°";
        
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
        .blog-container {
            max-width: 1100px;
            margin: 2rem auto;
            padding: 1rem 2rem;
        }

        .blog-post {
            background-color: #1f2937;
            border-left: 6px solid #facc15;
            margin-bottom: 2rem;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .blog-post:hover {
            transform: translateY(-5px);
        }

        .blog-post h2 {
            color: #facc15;
            margin-bottom: 0.5rem;
        }

        .blog-post p {
            color: #e5e7eb;
            font-size: 0.95rem;
        }

        .blog-post small {
            color: #94a3b8;
            display: block;
            margin-bottom: 1rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "    <div class=\"blog-container\">
        <h1 style=\"color: #facc15; text-align: center; margin-bottom: 2rem;\">Derniers articles</h1>

        <div class=\"blog-post\">
            <h2>Pourquoi le diagnostic préventif est essentiel ?</h2>
            <small>Publié le 11 mai 2025</small>
            <p>Un diagnostic informatique régulier permet d’identifier les failles matérielles ou logicielles avant qu’elles ne deviennent critiques. Cela prolonge la durée de vie de vos équipements.</p>
        </div>

        <div class=\"blog-post\">
            <h2>L’IA au service de l’assistance informatique</h2>
            <small>Publié le 8 mai 2025</small>
            <p>L’intelligence artificielle permet aujourd’hui de détecter automatiquement les erreurs système, de proposer des solutions, et même de les appliquer sans intervention humaine directe.</p>
        </div>

        <div class=\"blog-post\">
            <h2>Comment protéger ses données personnelles efficacement ?</h2>
            <small>Publié le 2 mai 2025</small>
            <p>La cybersécurité est devenue essentielle. Nous partageons ici nos conseils pour sécuriser ses mots de passe, activer la double authentification et éviter les attaques courantes.</p>
        </div>
    </div>
    <div style=\"text-align: center; margin-top: 2rem;\">
    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"
       style=\"background-color: #facc15; color: #1e293b; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: bold; box-shadow: 0 4px 10px rgba(0,0,0,0.3); transition: background-color 0.3s;\">
        ⬅ Retour à l'accueil
    </a>
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
        return "blog/index.html.twig";
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
        return array (  173 => 69,  149 => 47,  139 => 46,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Blog - GeniusPro360°{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .blog-container {
            max-width: 1100px;
            margin: 2rem auto;
            padding: 1rem 2rem;
        }

        .blog-post {
            background-color: #1f2937;
            border-left: 6px solid #facc15;
            margin-bottom: 2rem;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .blog-post:hover {
            transform: translateY(-5px);
        }

        .blog-post h2 {
            color: #facc15;
            margin-bottom: 0.5rem;
        }

        .blog-post p {
            color: #e5e7eb;
            font-size: 0.95rem;
        }

        .blog-post small {
            color: #94a3b8;
            display: block;
            margin-bottom: 1rem;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"blog-container\">
        <h1 style=\"color: #facc15; text-align: center; margin-bottom: 2rem;\">Derniers articles</h1>

        <div class=\"blog-post\">
            <h2>Pourquoi le diagnostic préventif est essentiel ?</h2>
            <small>Publié le 11 mai 2025</small>
            <p>Un diagnostic informatique régulier permet d’identifier les failles matérielles ou logicielles avant qu’elles ne deviennent critiques. Cela prolonge la durée de vie de vos équipements.</p>
        </div>

        <div class=\"blog-post\">
            <h2>L’IA au service de l’assistance informatique</h2>
            <small>Publié le 8 mai 2025</small>
            <p>L’intelligence artificielle permet aujourd’hui de détecter automatiquement les erreurs système, de proposer des solutions, et même de les appliquer sans intervention humaine directe.</p>
        </div>

        <div class=\"blog-post\">
            <h2>Comment protéger ses données personnelles efficacement ?</h2>
            <small>Publié le 2 mai 2025</small>
            <p>La cybersécurité est devenue essentielle. Nous partageons ici nos conseils pour sécuriser ses mots de passe, activer la double authentification et éviter les attaques courantes.</p>
        </div>
    </div>
    <div style=\"text-align: center; margin-top: 2rem;\">
    <a href=\"{{ path('homepage') }}\"
       style=\"background-color: #facc15; color: #1e293b; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: bold; box-shadow: 0 4px 10px rgba(0,0,0,0.3); transition: background-color 0.3s;\">
        ⬅ Retour à l'accueil
    </a>
</div>

{% endblock %}
", "blog/index.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/blog/index.html.twig");
    }
}
