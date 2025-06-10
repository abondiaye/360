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

/* freelancermanager/customer_list.html.twig */
class __TwigTemplate_2c1612c8f99a4badb7c3541be2647064 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/customer_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/customer_list.html.twig"));

        $this->parent = $this->loadTemplate("InoFreelancerManager.html.twig", "freelancermanager/customer_list.html.twig", 1);
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
            <i class=\"fa-solid fa-user-group fa-fw\"></i> Clients
          </li>
        </ol>
      </nav>
    </div>
  </div>
  
  <div class=\"row mb-2\">
    <div class=\"col-auto\">
      <button type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href='";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_customer_form");
        echo "'\">
        <i class=\"fa-solid fa-user-plus\"></i> Ajouter un nouveau client
      </button>
    </div>
    <div class=\"col-auto\">
      <select name=\"F_ACTIVE\" id=\"f_active\" class=\"form-select\">
        <option value=\"\">Afficher tous</option>
        <option value=\"1\" ";
        // line 25
        if (((isset($context["F_ACTIVE"]) || array_key_exists("F_ACTIVE", $context) ? $context["F_ACTIVE"] : (function () { throw new RuntimeError('Variable "F_ACTIVE" does not exist.', 25, $this->source); })()) == "1")) {
            echo "selected";
        }
        echo ">Clients actifs uniquement</option>
        <option value=\"0\" ";
        // line 26
        if (((isset($context["F_ACTIVE"]) || array_key_exists("F_ACTIVE", $context) ? $context["F_ACTIVE"] : (function () { throw new RuntimeError('Variable "F_ACTIVE" does not exist.', 26, $this->source); })()) == "0")) {
            echo "selected";
        }
        echo ">Clients inactifs uniquement</option>
      </select>
    </div>
  </div>
  
  <div class=\"row\">
    <div class=\"col-sm-12 table-responsive\">
      <table class=\"table table-sm table-striped table-hover\" id=\"tbl_fl_customer\">
        <thead class=\"table-light\">
          <tr>
            <th>ID</th>
            <th>Numéro client</th>
            <th>Entreprise</th>
            <th>Contact</th>
            <th>Adresse e-mail</th>
            <th>Téléphone</th>
            <th class=\"text-center\">Actif ?</th>
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

    // line 52
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "  <script>
  var formurl = \"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_customer_form");
        echo "\";
  
  var dtable  = \$(\"#tbl_fl_customer\").DataTable({
    columnDefs: [
      { className: \"td_edit\", targets: [0,1,2,3,4] },
      { className: \"td_edit text-center\", targets: [6] }
    ],
    \"processing\": true,
    \"serverSide\": true,
    ajax: {
      url: '";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_customer_ajax");
        echo "',
      \"data\": function (d) {
        d.F_ACTIVE = \$('#f_active').val();
      }
    },
    \"stateSave\": true,
    \"stateDuration\": 0,
    \"fnInitComplete\": function() {
      this.fnAdjustColumnSizing(true);
    },
  });
  
  // Gérer le clic sur une cellule
  \$('#tbl_fl_customer tbody').on('click', 'td', function () {
    var data = dtable.cell(this).data();
    if (Array.isArray(data) === true) {
      return;
    }
    var row = dtable.row(dtable.cell(this).index().row).data();
    window.location.href = formurl + \"/\" + row[0];
  });
  
  // Réagir au changement du filtre \"actif\"
  \$(\"#f_active\").on('change', function() {
    dtable.ajax.reload(null, false);
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
        return "freelancermanager/customer_list.html.twig";
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
        return array (  164 => 64,  151 => 54,  148 => 53,  138 => 52,  101 => 26,  95 => 25,  85 => 18,  69 => 4,  59 => 3,  36 => 1,);
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
            <i class=\"fa-solid fa-user-group fa-fw\"></i> Clients
          </li>
        </ol>
      </nav>
    </div>
  </div>
  
  <div class=\"row mb-2\">
    <div class=\"col-auto\">
      <button type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href='{{ path(\"fl_customer_form\") }}'\">
        <i class=\"fa-solid fa-user-plus\"></i> Ajouter un nouveau client
      </button>
    </div>
    <div class=\"col-auto\">
      <select name=\"F_ACTIVE\" id=\"f_active\" class=\"form-select\">
        <option value=\"\">Afficher tous</option>
        <option value=\"1\" {% if F_ACTIVE == \"1\" %}selected{% endif %}>Clients actifs uniquement</option>
        <option value=\"0\" {% if F_ACTIVE == \"0\" %}selected{% endif %}>Clients inactifs uniquement</option>
      </select>
    </div>
  </div>
  
  <div class=\"row\">
    <div class=\"col-sm-12 table-responsive\">
      <table class=\"table table-sm table-striped table-hover\" id=\"tbl_fl_customer\">
        <thead class=\"table-light\">
          <tr>
            <th>ID</th>
            <th>Numéro client</th>
            <th>Entreprise</th>
            <th>Contact</th>
            <th>Adresse e-mail</th>
            <th>Téléphone</th>
            <th class=\"text-center\">Actif ?</th>
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
  var formurl = \"{{ path(\"fl_customer_form\") }}\";
  
  var dtable  = \$(\"#tbl_fl_customer\").DataTable({
    columnDefs: [
      { className: \"td_edit\", targets: [0,1,2,3,4] },
      { className: \"td_edit text-center\", targets: [6] }
    ],
    \"processing\": true,
    \"serverSide\": true,
    ajax: {
      url: '{{ path(\"fl_customer_ajax\") }}',
      \"data\": function (d) {
        d.F_ACTIVE = \$('#f_active').val();
      }
    },
    \"stateSave\": true,
    \"stateDuration\": 0,
    \"fnInitComplete\": function() {
      this.fnAdjustColumnSizing(true);
    },
  });
  
  // Gérer le clic sur une cellule
  \$('#tbl_fl_customer tbody').on('click', 'td', function () {
    var data = dtable.cell(this).data();
    if (Array.isArray(data) === true) {
      return;
    }
    var row = dtable.row(dtable.cell(this).index().row).data();
    window.location.href = formurl + \"/\" + row[0];
  });
  
  // Réagir au changement du filtre \"actif\"
  \$(\"#f_active\").on('change', function() {
    dtable.ajax.reload(null, false);
  });
  </script>
  {% endblock %}
  ", "freelancermanager/customer_list.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/freelancermanager/customer_list.html.twig");
    }
}
