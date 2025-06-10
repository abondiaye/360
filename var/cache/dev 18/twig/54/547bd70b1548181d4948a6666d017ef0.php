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
class __TwigTemplate_902c340fca27ace3e14ebde5ce1920f0 extends Template
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
    <link rel=\"stylesheet\" href=\"";
        // line 7
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

  <!-- Filtrage des projets -->
  <div class=\"mb-3\">
    <form method=\"get\" action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_projects");
        echo "\">
      <div class=\"row\">
        <div class=\"col-md-4\">
          <label for=\"statusFilter\">Filtrer par statut</label>
          <select name=\"status\" id=\"statusFilter\" class=\"form-control\">
            <option value=\"\">Tous</option>
            <option value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_constant("App\\Entity\\FlProjects::PROJ_STATUS_ACTIVE"), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "get", ["status"], "method", false, false, false, 24) == twig_constant("App\\Entity\\FlProjects::PROJ_STATUS_ACTIVE"))) {
            echo "selected";
        }
        echo ">Actif</option>
            <option value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_constant("App\\Entity\\FlProjects::PROJ_STATUS_INACTIVE"), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "get", ["status"], "method", false, false, false, 25) == twig_constant("App\\Entity\\FlProjects::PROJ_STATUS_INACTIVE"))) {
            echo "selected";
        }
        echo ">Inactif</option>
          </select>
        </div>
        <div class=\"col-md-4\">
          <button type=\"submit\" class=\"btn btn-outline-dark mt-4\">Filtrer</button>
        </div>
      </div>
    </form>
  </div>

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
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 47
            echo "        <tr>
          <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "projectName", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
          <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "refCustomer", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 51) == twig_constant("App\\Entity\\FlProjects::PROJ_STATUS_ACTIVE"))) {
                // line 52
                echo "              ✅ Actif
            ";
            } else {
                // line 54
                echo "              ❌ Inactif
            ";
            }
            // line 56
            echo "          </td>
          <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "createdOn", [], "any", false, false, false, 57), "d/m/Y"), "html", null, true);
            echo "</td>
          <td>
            <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_project", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\">Éditer</a>
            <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_project", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')\">Supprimer</a>
          </td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "        <tr>
          <td colspan=\"5\" class=\"text-center\">Aucun projet trouvé.</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </tbody>
  </table>

  <!-- Pagination -->
  <div class=\"d-flex justify-content-center\">
    ";
        // line 73
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 73, $this->source); })()));
        echo "
  </div>

  <!-- Bouton Retour -->
  <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"btn btn-outline-secondary mb-3\">⬅ Retour</a>

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
        return array (  244 => 77,  237 => 73,  230 => 68,  221 => 64,  212 => 60,  208 => 59,  203 => 57,  200 => 56,  196 => 54,  192 => 52,  190 => 51,  185 => 49,  181 => 48,  178 => 47,  173 => 46,  145 => 25,  137 => 24,  128 => 18,  121 => 14,  116 => 11,  106 => 10,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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

  <!-- Filtrage des projets -->
  <div class=\"mb-3\">
    <form method=\"get\" action=\"{{ path('admin_projects') }}\">
      <div class=\"row\">
        <div class=\"col-md-4\">
          <label for=\"statusFilter\">Filtrer par statut</label>
          <select name=\"status\" id=\"statusFilter\" class=\"form-control\">
            <option value=\"\">Tous</option>
            <option value=\"{{ constant('App\\\\Entity\\\\FlProjects::PROJ_STATUS_ACTIVE') }}\" {% if app.request.get('status') == constant('App\\\\Entity\\\\FlProjects::PROJ_STATUS_ACTIVE') %}selected{% endif %}>Actif</option>
            <option value=\"{{ constant('App\\\\Entity\\\\FlProjects::PROJ_STATUS_INACTIVE') }}\" {% if app.request.get('status') == constant('App\\\\Entity\\\\FlProjects::PROJ_STATUS_INACTIVE') %}selected{% endif %}>Inactif</option>
          </select>
        </div>
        <div class=\"col-md-4\">
          <button type=\"submit\" class=\"btn btn-outline-dark mt-4\">Filtrer</button>
        </div>
      </div>
    </form>
  </div>

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
            <a href=\"{{ path('admin_edit_project', {'id': project.id}) }}\" class=\"btn btn-sm btn-warning\">Éditer</a>
            <a href=\"{{ path('admin_delete_project', {'id': project.id}) }}\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')\">Supprimer</a>
          </td>
        </tr>
      {% else %}
        <tr>
          <td colspan=\"5\" class=\"text-center\">Aucun projet trouvé.</td>
        </tr>
      {% endfor %}
    </tbody>
  </table>

  <!-- Pagination -->
  <div class=\"d-flex justify-content-center\">
    {{ knp_pagination_render(projects) }}
  </div>

  <!-- Bouton Retour -->
  <a href=\"{{ path('admin_dashboard') }}\" class=\"btn btn-outline-secondary mb-3\">⬅ Retour</a>

</div>
{% endblock %}
", "admin/projects.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/admin/projects.html.twig");
    }
}
