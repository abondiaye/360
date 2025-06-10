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

/* freelancermanager/invoices_list.html.twig */
class __TwigTemplate_fdfff8dd0e56a8c2b47d8a8123e2b34e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/invoices_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/invoices_list.html.twig"));

        $this->parent = $this->loadTemplate("InoFreelancerManager.html.twig", "freelancermanager/invoices_list.html.twig", 1);
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
            <i class=\"fa-solid fa-file-invoice-dollar fa-fw\"></i> Factures
          </li>
        </ol>
      </nav>
    </div>
  </div>
  
  <div class=\"row mb-2\">
    <div class=\"col-auto\">
      <button type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href='";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_invoices_form");
        echo "'\">
        <i class=\"fa-solid fa-plus\"></i> Créer une nouvelle facture
      </button>
    </div>
  
    <div class=\"col-auto\">
      <select name=\"F_TYPE\" id=\"f_type\" class=\"form-select fl_filter\">
        <option value=\"\">Afficher toutes</option>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["INVOICE_TYPES"]) || array_key_exists("INVOICE_TYPES", $context) ? $context["INVOICE_TYPES"] : (function () { throw new RuntimeError('Variable "INVOICE_TYPES" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["i"] => $context["it"]) {
            // line 27
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"";
            if ((((array_key_exists("F_TYPE", $context)) ? (_twig_default_filter((isset($context["F_TYPE"]) || array_key_exists("F_TYPE", $context) ? $context["F_TYPE"] : (function () { throw new RuntimeError('Variable "F_TYPE" does not exist.', 27, $this->source); })()),  -1)) : ( -1)) == $context["i"])) {
                echo " selected";
            }
            echo ">Seulement ";
            echo twig_escape_filter($this->env, $context["it"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['it'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      </select>
    </div>
  
    <div class=\"col-auto\">
      <select name=\"F_PAID\" id=\"f_paid\" class=\"form-select fl_filter\">
        <option value=\"\">Afficher toutes</option>
        <option value=\"0\"";
        // line 35
        if (((isset($context["F_PAID"]) || array_key_exists("F_PAID", $context) ? $context["F_PAID"] : (function () { throw new RuntimeError('Variable "F_PAID" does not exist.', 35, $this->source); })()) == "0")) {
            echo " selected";
        }
        echo ">Seulement impayées</option>
        <option value=\"1\"";
        // line 36
        if (((isset($context["F_PAID"]) || array_key_exists("F_PAID", $context) ? $context["F_PAID"] : (function () { throw new RuntimeError('Variable "F_PAID" does not exist.', 36, $this->source); })()) == "1")) {
            echo " selected";
        }
        echo ">Seulement payées</option>
      </select>
    </div>
  </div>
  
  <div class=\"row\">
    <div class=\"col-sm-12 table-responsive\">
      <table class=\"table table-sm table-striped table-hover\" id=\"tbl_fl_invoices\">
        <thead class=\"table-light\">
          <tr>
            <th>ID</th>
            <th>Numéro de facture</th>
            <th>Date</th>
            <th>Client</th>
            <th>Type de facture</th>
            <th>Montant</th>
            <th class=\"text-center\">Payée ?</th>
            <th class=\"text-center\">PDF</th>
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

    // line 63
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "  <script>
    var ajaxUrl = \"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_invoices_ajax");
        echo "\";
    var blobUrl = \"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_invoices_dl");
        echo "\";
  </script>
  <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/inotool/invoices_list.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "freelancermanager/invoices_list.html.twig";
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
        return array (  189 => 68,  184 => 66,  180 => 65,  177 => 64,  167 => 63,  129 => 36,  123 => 35,  115 => 29,  100 => 27,  96 => 26,  85 => 18,  69 => 4,  59 => 3,  36 => 1,);
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
            <i class=\"fa-solid fa-file-invoice-dollar fa-fw\"></i> Factures
          </li>
        </ol>
      </nav>
    </div>
  </div>
  
  <div class=\"row mb-2\">
    <div class=\"col-auto\">
      <button type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href='{{ path(\"fl_invoices_form\") }}'\">
        <i class=\"fa-solid fa-plus\"></i> Créer une nouvelle facture
      </button>
    </div>
  
    <div class=\"col-auto\">
      <select name=\"F_TYPE\" id=\"f_type\" class=\"form-select fl_filter\">
        <option value=\"\">Afficher toutes</option>
        {% for i, it in INVOICE_TYPES %}
          <option value=\"{{ i }}\"{% if F_TYPE|default(-1) == i %} selected{% endif %}>Seulement {{ it }}</option>
        {% endfor %}
      </select>
    </div>
  
    <div class=\"col-auto\">
      <select name=\"F_PAID\" id=\"f_paid\" class=\"form-select fl_filter\">
        <option value=\"\">Afficher toutes</option>
        <option value=\"0\"{% if F_PAID == \"0\" %} selected{% endif %}>Seulement impayées</option>
        <option value=\"1\"{% if F_PAID == \"1\" %} selected{% endif %}>Seulement payées</option>
      </select>
    </div>
  </div>
  
  <div class=\"row\">
    <div class=\"col-sm-12 table-responsive\">
      <table class=\"table table-sm table-striped table-hover\" id=\"tbl_fl_invoices\">
        <thead class=\"table-light\">
          <tr>
            <th>ID</th>
            <th>Numéro de facture</th>
            <th>Date</th>
            <th>Client</th>
            <th>Type de facture</th>
            <th>Montant</th>
            <th class=\"text-center\">Payée ?</th>
            <th class=\"text-center\">PDF</th>
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
    var ajaxUrl = \"{{ path(\"fl_invoices_ajax\") }}\";
    var blobUrl = \"{{ path(\"fl_invoices_dl\") }}\";
  </script>
  <script src=\"{{ asset(\"js/inotool/invoices_list.js\") }}\"></script>
  {% endblock %}
  ", "freelancermanager/invoices_list.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/freelancermanager/invoices_list.html.twig");
    }
}
