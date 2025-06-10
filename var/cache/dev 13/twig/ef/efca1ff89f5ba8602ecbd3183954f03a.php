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

/* admin/projects.html.twig */
class __TwigTemplate_f8225ceb173403532e51bb9757c9ce91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/projects.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/projects.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/projects.html.twig", 1);
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

        echo "Gestion des Projets - GeniusPro360°";
        
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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/projects.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div class=\"container mt-5\">
  <h1 class=\"mb-4\">Gestion des Projets</h1>

  <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_add_project");
        echo "\" class=\"btn btn-primary mb-3\">➕ Ajouter un projet</a>

  <table class=\"table table-bordered table-hover\">
    <thead class=\"table-dark\">
      <tr>
        <th>Nom du projet</th>
        <th>Client</th>
        <th>Status</th>
        <th>Date de création</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 28
            echo "        <tr>
          <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "projectName", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
          <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "refCustomer", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 32) == twig_constant("App\\Entity\\FlProjects::PROJ_STATUS_ACTIVE"))) {
                // line 33
                echo "              ✅ Actif
            ";
            } else {
                // line 35
                echo "              ❌ Inactif
            ";
            }
            // line 37
            echo "          </td>
          <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "createdOn", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true);
            echo "</td>
          <td>
            <a href=\"#\" class=\"btn btn-sm btn-info\">Voir</a>
            <a href=\"#\" class=\"btn btn-sm btn-warning\">Éditer</a>
            <a href=\"#\" class=\"btn btn-sm btn-danger\">Supprimer</a>
          </td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "        <tr>
          <td colspan=\"5\" class=\"text-center\">Aucun projet trouvé.</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </tbody>
  </table>
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
        return "admin/projects.html.twig";
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
        return array (  189 => 50,  180 => 46,  167 => 38,  164 => 37,  160 => 35,  156 => 33,  154 => 32,  149 => 30,  145 => 29,  142 => 28,  137 => 27,  121 => 14,  116 => 11,  106 => 10,  94 => 6,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Projets - GeniusPro360°{% endblock %}
  {% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/projects.css') }}\">
{% endblock %}


{% block body %}
<div class=\"container mt-5\">
  <h1 class=\"mb-4\">Gestion des Projets</h1>

  <a href=\"{{ path('admin_add_project') }}\" class=\"btn btn-primary mb-3\">➕ Ajouter un projet</a>

  <table class=\"table table-bordered table-hover\">
    <thead class=\"table-dark\">
      <tr>
        <th>Nom du projet</th>
        <th>Client</th>
        <th>Status</th>
        <th>Date de création</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      {% for project in projects %}
        <tr>
          <td>{{ project.projectName }}</td>
          <td>{{ project.refCustomer.name }}</td>
          <td>
            {% if project.status == constant('App\\\\Entity\\\\FlProjects::PROJ_STATUS_ACTIVE') %}
              ✅ Actif
            {% else %}
              ❌ Inactif
            {% endif %}
          </td>
          <td>{{ project.createdOn|date('d/m/Y') }}</td>
          <td>
            <a href=\"#\" class=\"btn btn-sm btn-info\">Voir</a>
            <a href=\"#\" class=\"btn btn-sm btn-warning\">Éditer</a>
            <a href=\"#\" class=\"btn btn-sm btn-danger\">Supprimer</a>
          </td>
        </tr>
      {% else %}
        <tr>
          <td colspan=\"5\" class=\"text-center\">Aucun projet trouvé.</td>
        </tr>
      {% endfor %}
    </tbody>
  </table>
</div>
{% endblock %}
", "admin/projects.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/admin/projects.html.twig");
    }
}
