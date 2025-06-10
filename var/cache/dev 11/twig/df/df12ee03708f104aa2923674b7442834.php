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

/* portfolio/index.html.twig */
class __TwigTemplate_9b2f8217f97db4c691cbf13a7f8321d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/index.html.twig", 1);
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

        echo "Mon Portfolio - GeniusPro360°";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/portfolio.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Bienvenue sur mon portfolio</h1>

    <section class=\"mb-5\">
        <h2>Qui suis-je ?</h2>
        <p>Je suis <strong>Abdoulaye N'diaye</strong>, technicien informatique depuis 2010 et développeur web Symfony / PHP / Vue.js. J'accompagne les particuliers et professionnels pour leurs besoins informatiques et web.</p>
    </section>

    <section class=\"mb-5\">
        <h2>Mes services</h2>
        <ul>
            <li><strong>Assistance informatique :</strong> installation, résolution de pannes, maintenance.</li>
            <li><strong>Développement Web :</strong> sites vitrines, e-commerce, applications Symfony/Vue.js.</li>
            <li><strong>Support à distance :</strong> diagnostic, accompagnement technique.</li>
        </ul>
    </section>

    <section class=\"mb-5\">
        <h2>Tarifs</h2>
        <table class=\"table table-bordered\">
            <thead>
                <tr><th>Prestation</th><th>Prix</th></tr>
            </thead>
            <tbody>
                <tr><td>Intervention à domicile / sur site</td><td>80 € / heure</td></tr>
                <tr><td>Création site vitrine</td><td>à partir de 600 €</td></tr>
                <tr><td>Création boutique e-commerce</td><td>à partir de 1 200 €</td></tr>
                <tr><td>Support technique à distance</td><td>40 € / heure</td></tr>
            </tbody>
        </table>
    </section>

    <section class=\"mb-5\">
        <h2>Me contacter</h2>
        <p>Vous souhaitez discuter d'un projet ou demander un devis ? <a href=\"mailto:a_ndiaye@outlook.com\">Envoyez-moi un email</a>.</p>
    </section>
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
        return "portfolio/index.html.twig";
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
        return array (  112 => 9,  102 => 8,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Portfolio - GeniusPro360°{% endblock %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/portfolio.css') }}\">
    {% endblock %}    

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Bienvenue sur mon portfolio</h1>

    <section class=\"mb-5\">
        <h2>Qui suis-je ?</h2>
        <p>Je suis <strong>Abdoulaye N'diaye</strong>, technicien informatique depuis 2010 et développeur web Symfony / PHP / Vue.js. J'accompagne les particuliers et professionnels pour leurs besoins informatiques et web.</p>
    </section>

    <section class=\"mb-5\">
        <h2>Mes services</h2>
        <ul>
            <li><strong>Assistance informatique :</strong> installation, résolution de pannes, maintenance.</li>
            <li><strong>Développement Web :</strong> sites vitrines, e-commerce, applications Symfony/Vue.js.</li>
            <li><strong>Support à distance :</strong> diagnostic, accompagnement technique.</li>
        </ul>
    </section>

    <section class=\"mb-5\">
        <h2>Tarifs</h2>
        <table class=\"table table-bordered\">
            <thead>
                <tr><th>Prestation</th><th>Prix</th></tr>
            </thead>
            <tbody>
                <tr><td>Intervention à domicile / sur site</td><td>80 € / heure</td></tr>
                <tr><td>Création site vitrine</td><td>à partir de 600 €</td></tr>
                <tr><td>Création boutique e-commerce</td><td>à partir de 1 200 €</td></tr>
                <tr><td>Support technique à distance</td><td>40 € / heure</td></tr>
            </tbody>
        </table>
    </section>

    <section class=\"mb-5\">
        <h2>Me contacter</h2>
        <p>Vous souhaitez discuter d'un projet ou demander un devis ? <a href=\"mailto:a_ndiaye@outlook.com\">Envoyez-moi un email</a>.</p>
    </section>
</div>
{% endblock %}
", "portfolio/index.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/portfolio/index.html.twig");
    }
}
