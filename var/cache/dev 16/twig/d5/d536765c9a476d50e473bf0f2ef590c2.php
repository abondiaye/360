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

/* freelancermanager/projects_list.html.twig */
class __TwigTemplate_67277b1b62d8b3651ec6e828db9106db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "InoFreelancerManager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/projects_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/projects_list.html.twig"));

        $this->parent = $this->loadTemplate("InoFreelancerManager.html.twig", "freelancermanager/projects_list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"row\">
    <div class=\"col-12\">
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item active h3\" aria-current=\"page\">
            <i class=\"fa-solid fa-user-group fa-fw\"></i> Projets
          </li>
        </ol>
      </nav>
    </div>
  </div>
  
  <div class=\"row mb-2\">
    <div class=\"col-auto\">
      <button type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href='";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_projects_form");
        echo "'\">
        <i class=\"fa-solid fa-plus\"></i> Créer un nouveau projet
      </button>
    </div>
  
    <div class=\"col-auto\">
      <select name=\"F_ACTIVE\" id=\"f_active\" class=\"form-select fl_filter\">
        <option value=\"\">Afficher tous</option>
        <option value=\"0\"";
        // line 26
        if (((isset($context["F_STATUS"]) || array_key_exists("F_STATUS", $context) ? $context["F_STATUS"] : (function () { throw new RuntimeError('Variable "F_STATUS" does not exist.', 26, $this->source); })()) == "0")) {
            echo " selected";
        }
        echo ">Seulement actifs</option>
        <option value=\"1\"";
        // line 27
        if (((isset($context["F_STATUS"]) || array_key_exists("F_STATUS", $context) ? $context["F_STATUS"] : (function () { throw new RuntimeError('Variable "F_STATUS" does not exist.', 27, $this->source); })()) == "1")) {
            echo " selected";
        }
        echo ">Seulement inactifs</option>
      </select>
    </div>
  
    <div class=\"col-auto\">
      <select name=\"F_REPORTING\" id=\"f_reporting\" class=\"form-select fl_filter\">
        <option value=\"\">Afficher tous</option>
        <option value=\"false\"";
        // line 34
        if (((isset($context["F_REPORTING"]) || array_key_exists("F_REPORTING", $context) ? $context["F_REPORTING"] : (function () { throw new RuntimeError('Variable "F_REPORTING" does not exist.', 34, $this->source); })()) == "false")) {
            echo " selected";
        }
        echo ">Comptabilisés</option>
        <option value=\"true\"";
        // line 35
        if (((isset($context["F_REPORTING"]) || array_key_exists("F_REPORTING", $context) ? $context["F_REPORTING"] : (function () { throw new RuntimeError('Variable "F_REPORTING" does not exist.', 35, $this->source); })()) == "true")) {
            echo " selected";
        }
        echo ">Non comptabilisés</option>
      </select>
    </div>
  
    <div class=\"col-auto\">
      <select name=\"F_CUSTOMER\" id=\"f_customer\" class=\"form-select fl_filter\">
        <option value=\"\">Tous les clients</option>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["CUSTOMER_LIST"]) || array_key_exists("CUSTOMER_LIST", $context) ? $context["CUSTOMER_LIST"] : (function () { throw new RuntimeError('Variable "CUSTOMER_LIST" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 43
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\"";
            if (((isset($context["F_CUSTOMER"]) || array_key_exists("F_CUSTOMER", $context) ? $context["F_CUSTOMER"] : (function () { throw new RuntimeError('Variable "F_CUSTOMER" does not exist.', 43, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 43))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 43), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "      </select>
    </div>
  </div>
  
  <div class=\"row\">
    <div class=\"col-sm-12 table-responsive\">
      <table class=\"table table-sm table-striped table-hover\" id=\"tbl_fl_projects\">
        <thead class=\"table-light\">
          <tr>
            <th>ID</th>
            <th>Nom du projet</th>
            <th>Client</th>
            <th>Statut</th>
            <th class=\"text-center\">Comptabilisé ?</th>
            <th class=\"text-end\">Taux horaire</th>
            <th>Devise</th>
          </tr>
        </thead>
        <tbody class=\"table-group-divider\">
        </tbody>
      </table>
    </div>
  </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "  <script>
    var formurl = \"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_projects_form");
        echo "\";
  
    var dtable  = \$(\"#tbl_fl_projects\").DataTable({
      columnDefs: [
        { className: \"td_edit\", targets: [0,1,2,3,4] },
        { className: \"td_edit text-center\", targets: [4] },
        { className: \"td_edit text-end\", targets: [5] }
      ],
      order: [[2, 'desc']],
      \"processing\": true,
      'serverSide': true,
      ajax: {
        url: '";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_projects_ajax");
        echo "',
        \"data\": function (d) {
          d.F_STATUS    = \$('#f_active').val();
          d.F_REPORTING = \$('#f_reporting').val();
          d.F_CUSTOMER  = \$('#f_customer').val();
        }
      },
      \"stateSave\": true,
      \"stateDuration\": 0,
      \"fnInitComplete\": function() {
        this.fnAdjustColumnSizing(true);
      },
    });
  
    // Clic sur une cellule pour éditer le projet
    \$('#tbl_fl_projects tbody').on('click', 'td', function () {
      var data = dtable.cell(this).data();
      if (Array.isArray(data) === true) {
        return;
      }
      var row = dtable.row(dtable.cell(this).index().row).data();
      window.location.href = formurl + \"/\" + row[0];
    });
  
    // Rafraîchir en fonction des filtres
    \$(\".fl_filter\").on('change', function() {
      dtable.ajax.reload(null,false);
    });
  </script>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "freelancermanager/projects_list.html.twig";
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
        return array (  212 => 84,  197 => 72,  194 => 71,  184 => 70,  151 => 45,  136 => 43,  132 => 42,  120 => 35,  114 => 34,  102 => 27,  96 => 26,  85 => 18,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoFreelancerManager.html.twig' %}

  {% block body %}
  <div class=\"row\">
    <div class=\"col-12\">
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item active h3\" aria-current=\"page\">
            <i class=\"fa-solid fa-user-group fa-fw\"></i> Projets
          </li>
        </ol>
      </nav>
    </div>
  </div>
  
  <div class=\"row mb-2\">
    <div class=\"col-auto\">
      <button type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href='{{ path(\"fl_projects_form\") }}'\">
        <i class=\"fa-solid fa-plus\"></i> Créer un nouveau projet
      </button>
    </div>
  
    <div class=\"col-auto\">
      <select name=\"F_ACTIVE\" id=\"f_active\" class=\"form-select fl_filter\">
        <option value=\"\">Afficher tous</option>
        <option value=\"0\"{% if F_STATUS == \"0\" %} selected{% endif %}>Seulement actifs</option>
        <option value=\"1\"{% if F_STATUS == \"1\" %} selected{% endif %}>Seulement inactifs</option>
      </select>
    </div>
  
    <div class=\"col-auto\">
      <select name=\"F_REPORTING\" id=\"f_reporting\" class=\"form-select fl_filter\">
        <option value=\"\">Afficher tous</option>
        <option value=\"false\"{% if F_REPORTING == \"false\" %} selected{% endif %}>Comptabilisés</option>
        <option value=\"true\"{% if F_REPORTING == \"true\" %} selected{% endif %}>Non comptabilisés</option>
      </select>
    </div>
  
    <div class=\"col-auto\">
      <select name=\"F_CUSTOMER\" id=\"f_customer\" class=\"form-select fl_filter\">
        <option value=\"\">Tous les clients</option>
        {% for c in CUSTOMER_LIST %}
          <option value=\"{{ c.id }}\"{% if F_CUSTOMER == c.id %} selected{% endif %}>{{ c.name }}</option>
        {% endfor %}
      </select>
    </div>
  </div>
  
  <div class=\"row\">
    <div class=\"col-sm-12 table-responsive\">
      <table class=\"table table-sm table-striped table-hover\" id=\"tbl_fl_projects\">
        <thead class=\"table-light\">
          <tr>
            <th>ID</th>
            <th>Nom du projet</th>
            <th>Client</th>
            <th>Statut</th>
            <th class=\"text-center\">Comptabilisé ?</th>
            <th class=\"text-end\">Taux horaire</th>
            <th>Devise</th>
          </tr>
        </thead>
        <tbody class=\"table-group-divider\">
        </tbody>
      </table>
    </div>
  </div>
  {% endblock %}
  
  {% block javascripts %}
  <script>
    var formurl = \"{{ path(\"fl_projects_form\") }}\";
  
    var dtable  = \$(\"#tbl_fl_projects\").DataTable({
      columnDefs: [
        { className: \"td_edit\", targets: [0,1,2,3,4] },
        { className: \"td_edit text-center\", targets: [4] },
        { className: \"td_edit text-end\", targets: [5] }
      ],
      order: [[2, 'desc']],
      \"processing\": true,
      'serverSide': true,
      ajax: {
        url: '{{ path(\"fl_projects_ajax\") }}',
        \"data\": function (d) {
          d.F_STATUS    = \$('#f_active').val();
          d.F_REPORTING = \$('#f_reporting').val();
          d.F_CUSTOMER  = \$('#f_customer').val();
        }
      },
      \"stateSave\": true,
      \"stateDuration\": 0,
      \"fnInitComplete\": function() {
        this.fnAdjustColumnSizing(true);
      },
    });
  
    // Clic sur une cellule pour éditer le projet
    \$('#tbl_fl_projects tbody').on('click', 'td', function () {
      var data = dtable.cell(this).data();
      if (Array.isArray(data) === true) {
        return;
      }
      var row = dtable.row(dtable.cell(this).index().row).data();
      window.location.href = formurl + \"/\" + row[0];
    });
  
    // Rafraîchir en fonction des filtres
    \$(\".fl_filter\").on('change', function() {
      dtable.ajax.reload(null,false);
    });
  </script>
  {% endblock %}
  ", "freelancermanager/projects_list.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/freelancermanager/projects_list.html.twig");
    }
}
