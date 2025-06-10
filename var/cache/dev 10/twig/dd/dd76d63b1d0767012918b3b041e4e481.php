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

/* InoFreelancerManager.html.twig */
class __TwigTemplate_f2405e302e4cf1bdebc85418c439fee9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar_title' => [$this, 'block_navbar_title'],
            'navbar_side' => [$this, 'block_navbar_side'],
            'body_before' => [$this, 'block_body_before'],
            'body_after' => [$this, 'block_body_after'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "InoSession.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "InoFreelancerManager.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "InoFreelancerManager.html.twig"));

        $this->parent = $this->loadTemplate("InoSession.html.twig", "InoFreelancerManager.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_navbar_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_title"));

        echo "Freelancer Manager";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_navbar_side($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_side"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_side"));

        // line 4
        echo "  ";
        $context["naventries"] = ["home" => "", "time" => "", "services" => "", "customer" => "", "projects" => "", "reports" => "", "invoices" => "", "contracts" => "", "config" => ""];
        // line 15
        echo "  ";
        if ( !array_key_exists("ACTNAV", $context)) {
            // line 16
            echo "    ";
            $context["naventries"] = $this->env->getFunction('set_element')->getCallable()((isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 16, $this->source); })()), "home", "active");
            // line 17
            echo "  ";
        } else {
            // line 18
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["naventries"] ?? null), (isset($context["ACTNAV"]) || array_key_exists("ACTNAV", $context) ? $context["ACTNAV"] : (function () { throw new RuntimeError('Variable "ACTNAV" does not exist.', 18, $this->source); })()), [], "array", true, true, false, 18)) {
                // line 19
                echo "      <div class=\"alert alert-danger\" role=\"alert\">
        Unknown navigation tag \"";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["ACTNAV"]) || array_key_exists("ACTNAV", $context) ? $context["ACTNAV"] : (function () { throw new RuntimeError('Variable "ACTNAV" does not exist.', 20, $this->source); })()), "html", null, true);
                echo "\" - CHECK YOUR CODE!
      </div>
    ";
            } else {
                // line 23
                echo "      ";
                $context["naventries"] = $this->env->getFunction('set_element')->getCallable()((isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 23, $this->source); })()), (isset($context["ACTNAV"]) || array_key_exists("ACTNAV", $context) ? $context["ACTNAV"] : (function () { throw new RuntimeError('Variable "ACTNAV" does not exist.', 23, $this->source); })()), "active");
                // line 24
                echo "    ";
            }
            // line 25
            echo "  ";
        }
        // line 26
        echo "<div class=\"container-fluid\">
  <div class=\"row\">
    <nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-3 col-xl-2 d-md-block bg-light sidebar collapse\">
      <div class=\"position-sticky pt-3\">
        <ul class=\"nav flex-column\">
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 31, $this->source); })()), "home", [], "array", false, false, false, 31), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_index");
        echo "\"><i class=\"fa-solid fa-gauge fa-fw\"></i> Dashboard</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 32, $this->source); })()), "time", [], "array", false, false, false, 32), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_time_form");
        echo "\"><i class=\"fa-solid fa-clock fa-fw\"></i> Zeiterfassung</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 33, $this->source); })()), "services", [], "array", false, false, false, 33), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_services_overview");
        echo "\"><i class=\"fa-solid fa-money-bill-1-wave fa-fw\"></i> Zusatzleistungen</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 34, $this->source); })()), "customer", [], "array", false, false, false, 34), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_customer_list");
        echo "\"><i class=\"fa-solid fa-user-group fa-fw\"></i> Kunden</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 35, $this->source); })()), "projects", [], "array", false, false, false, 35), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_projects_list");
        echo "\"><i class=\"fa-solid fa-diagram-project fa-fw\"></i> Projekte</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 36, $this->source); })()), "reports", [], "array", false, false, false, 36), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_report_index");
        echo "\"><i class=\"fa-solid fa-chart-line fa-fw\"></i> Auswertungen</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 37, $this->source); })()), "invoices", [], "array", false, false, false, 37), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_invoices_list");
        echo "\"><i class=\"fa-solid fa-file-invoice-dollar fa-fw\"></i> Rechnungen</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 38, $this->source); })()), "contracts", [], "array", false, false, false, 38), "html", null, true);
        echo "\" href=\"#\"><i class=\"fa-solid fa-file-signature fa-fw\"></i> Service Verträge</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 39, $this->source); })()), "config", [], "array", false, false, false, 39), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_configuration_form");
        echo "\"><i class=\"fa-solid fa-gear fa-fw\"></i> Einstellungen</a></li>
        </ul>
        <hr>
        <ul class=\"nav flex-column\">
          <li class=\"nav-item\"><a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><i class=\"fa-solid fa-home fa-fw\"></i> Zurück zum Start</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"fa-solid fa-power-off fa-fw\"></i> Abmelden</a></li>
        </ul>
      </div>
    </nav>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_body_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_before"));

        // line 50
        echo "    <main class=\"col-md-9 col-lg-9 col-xl-10 ms-sm-auto px-md-4 mt-4\">
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_body_after($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_after"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_after"));

        // line 53
        echo "    </main>
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
        return "InoFreelancerManager.html.twig";
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
        return array (  235 => 53,  225 => 52,  214 => 50,  204 => 49,  189 => 44,  185 => 43,  176 => 39,  172 => 38,  166 => 37,  160 => 36,  154 => 35,  148 => 34,  142 => 33,  136 => 32,  130 => 31,  123 => 26,  120 => 25,  117 => 24,  114 => 23,  108 => 20,  105 => 19,  102 => 18,  99 => 17,  96 => 16,  93 => 15,  90 => 4,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoSession.html.twig' %}
{% block navbar_title %}Freelancer Manager{% endblock %}
{% block navbar_side %}
  {% set naventries = {
    'home':'',
    'time':'',
    'services':'',
    'customer':'',
    'projects':'',
    'reports':'',
    'invoices':'',
    'contracts':'',
    'config':'',
  } %}
  {% if ACTNAV is not defined %}
    {% set naventries = set_element(naventries,'home','active') %}
  {% else %}
    {% if naventries[ACTNAV] is not defined %}
      <div class=\"alert alert-danger\" role=\"alert\">
        Unknown navigation tag \"{{ ACTNAV }}\" - CHECK YOUR CODE!
      </div>
    {% else %}
      {% set naventries = set_element(naventries,ACTNAV,'active') %}
    {% endif %}
  {% endif %}
<div class=\"container-fluid\">
  <div class=\"row\">
    <nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-3 col-xl-2 d-md-block bg-light sidebar collapse\">
      <div class=\"position-sticky pt-3\">
        <ul class=\"nav flex-column\">
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['home'] }}\" href=\"{{ path(\"fl_index\") }}\"><i class=\"fa-solid fa-gauge fa-fw\"></i> Dashboard</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['time'] }}\" href=\"{{ path(\"fl_time_form\") }}\"><i class=\"fa-solid fa-clock fa-fw\"></i> Zeiterfassung</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['services'] }}\" href=\"{{ path(\"fl_services_overview\") }}\"><i class=\"fa-solid fa-money-bill-1-wave fa-fw\"></i> Zusatzleistungen</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['customer'] }}\" href=\"{{ path(\"fl_customer_list\") }}\"><i class=\"fa-solid fa-user-group fa-fw\"></i> Kunden</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['projects'] }}\" href=\"{{ path(\"fl_projects_list\") }}\"><i class=\"fa-solid fa-diagram-project fa-fw\"></i> Projekte</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['reports'] }}\" href=\"{{ path(\"fl_report_index\") }}\"><i class=\"fa-solid fa-chart-line fa-fw\"></i> Auswertungen</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['invoices'] }}\" href=\"{{ path(\"fl_invoices_list\") }}\"><i class=\"fa-solid fa-file-invoice-dollar fa-fw\"></i> Rechnungen</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['contracts'] }}\" href=\"#\"><i class=\"fa-solid fa-file-signature fa-fw\"></i> Service Verträge</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['config'] }}\" href=\"{{ path(\"fl_configuration_form\") }}\"><i class=\"fa-solid fa-gear fa-fw\"></i> Einstellungen</a></li>
        </ul>
        <hr>
        <ul class=\"nav flex-column\">
          <li class=\"nav-item\"><a class=\"nav-link\" aria-current=\"page\" href=\"{{ path(\"home\") }}\"><i class=\"fa-solid fa-home fa-fw\"></i> Zurück zum Start</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" aria-current=\"page\" href=\"{{ path(\"app_logout\") }}\"><i class=\"fa-solid fa-power-off fa-fw\"></i> Abmelden</a></li>
        </ul>
      </div>
    </nav>
    {% endblock %}
    {% block body_before %}
    <main class=\"col-md-9 col-lg-9 col-xl-10 ms-sm-auto px-md-4 mt-4\">
      {% endblock %}
      {% block body_after %}
    </main>
  </div>
</div>
{% endblock %}
", "InoFreelancerManager.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/InoFreelancerManager.html.twig");
    }
}
