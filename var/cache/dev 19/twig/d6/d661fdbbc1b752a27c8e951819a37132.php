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

/* portfolio/services.html.twig */
class __TwigTemplate_0983bcbea46734ee58718ac501c6ca44 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/services.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/services.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/services.html.twig", 1);
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

        echo "Nos Services - GeniusPro360°";
        
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
        .services-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: #1e293b;
            border-radius: 16px;
            padding: 2rem;
            color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 30px rgba(250, 204, 21, 0.6);
        }

        .service-card h3 {
            color: #facc15;
            margin-bottom: 1rem;
        }

        .service-card p {
            font-size: 0.95rem;
            line-height: 1.5;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "    <section class=\"services-container\">
        <div class=\"service-card\">
            <h3>Diagnostic Informatique</h3>
            <p>Analyse rapide et précise de l’état de votre ordinateur : performances, erreurs système, virus et matériel.</p>
        </div>
        <div class=\"service-card\">
            <h3>Assistance IA</h3>
            <p>Utilisation de l’intelligence artificielle pour détecter, anticiper et résoudre des problèmes techniques.</p>
        </div>
        <div class=\"service-card\">
            <h3>Sécurité Informatique</h3>
            <p>Protection avancée de vos données : antivirus, pare-feu, sauvegarde, surveillance et audits de sécurité.</p>
        </div>
        <div class=\"service-card\">
            <h3>Support à distance</h3>
            <p>Prise en main à distance pour résoudre vos soucis informatiques sans déplacement.</p>
        </div>
        <div class=\"service-card\">
            <h3>Formations TI</h3>
            <p>Sensibilisation à la cybersécurité, apprentissage des outils bureautiques, et accompagnement personnalisé.</p>
        </div>
    </section>
    <div style=\"text-align: center; margin-top: 2rem;\">
    <a href=\"";
        // line 67
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
        return "portfolio/services.html.twig";
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
        return array (  171 => 67,  146 => 44,  136 => 43,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos Services - GeniusPro360°{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .services-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: #1e293b;
            border-radius: 16px;
            padding: 2rem;
            color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 30px rgba(250, 204, 21, 0.6);
        }

        .service-card h3 {
            color: #facc15;
            margin-bottom: 1rem;
        }

        .service-card p {
            font-size: 0.95rem;
            line-height: 1.5;
        }
    </style>
{% endblock %}

{% block body %}
    <section class=\"services-container\">
        <div class=\"service-card\">
            <h3>Diagnostic Informatique</h3>
            <p>Analyse rapide et précise de l’état de votre ordinateur : performances, erreurs système, virus et matériel.</p>
        </div>
        <div class=\"service-card\">
            <h3>Assistance IA</h3>
            <p>Utilisation de l’intelligence artificielle pour détecter, anticiper et résoudre des problèmes techniques.</p>
        </div>
        <div class=\"service-card\">
            <h3>Sécurité Informatique</h3>
            <p>Protection avancée de vos données : antivirus, pare-feu, sauvegarde, surveillance et audits de sécurité.</p>
        </div>
        <div class=\"service-card\">
            <h3>Support à distance</h3>
            <p>Prise en main à distance pour résoudre vos soucis informatiques sans déplacement.</p>
        </div>
        <div class=\"service-card\">
            <h3>Formations TI</h3>
            <p>Sensibilisation à la cybersécurité, apprentissage des outils bureautiques, et accompagnement personnalisé.</p>
        </div>
    </section>
    <div style=\"text-align: center; margin-top: 2rem;\">
    <a href=\"{{ path('homepage') }}\"
       style=\"background-color: #facc15; color: #1e293b; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: bold; box-shadow: 0 4px 10px rgba(0,0,0,0.3); transition: background-color 0.3s;\">
        ⬅ Retour à l'accueil
    </a>
</div>

{% endblock %}
", "portfolio/services.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/portfolio/services.html.twig");
    }
}
