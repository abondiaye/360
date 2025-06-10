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

/* InoKontoManager.html.twig */
class __TwigTemplate_59b9e2fa13829c2e0738de71fe7b18a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "InoKontoManager.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "InoKontoManager.html.twig"));

        $this->parent = $this->loadTemplate("InoSession.html.twig", "InoKontoManager.html.twig", 1);
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

        echo "Konto Manager";
        
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
        $context["naventries"] = ["home" => "", "bank" => "", "list" => "", "import" => "", "categories" => "", "report" => "", "add" => "", "filter" => ""];
        // line 14
        echo "  ";
        if ( !array_key_exists("ACTNAV", $context)) {
            // line 15
            echo "    ";
            $context["naventries"] = $this->env->getFunction('set_element')->getCallable()((isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 15, $this->source); })()), "home", "active");
            // line 16
            echo "  ";
        } else {
            // line 17
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["naventries"] ?? null), (isset($context["ACTNAV"]) || array_key_exists("ACTNAV", $context) ? $context["ACTNAV"] : (function () { throw new RuntimeError('Variable "ACTNAV" does not exist.', 17, $this->source); })()), [], "array", true, true, false, 17)) {
                // line 18
                echo "      <div class=\"alert alert-danger\" role=\"alert\">
        Unknown navigation tag \"";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["ACTNAV"]) || array_key_exists("ACTNAV", $context) ? $context["ACTNAV"] : (function () { throw new RuntimeError('Variable "ACTNAV" does not exist.', 19, $this->source); })()), "html", null, true);
                echo "\" - CHECK YOUR CODE!
      </div>
    ";
            } else {
                // line 22
                echo "      ";
                $context["naventries"] = $this->env->getFunction('set_element')->getCallable()((isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 22, $this->source); })()), (isset($context["ACTNAV"]) || array_key_exists("ACTNAV", $context) ? $context["ACTNAV"] : (function () { throw new RuntimeError('Variable "ACTNAV" does not exist.', 22, $this->source); })()), "active");
                // line 23
                echo "    ";
            }
            // line 24
            echo "  ";
        }
        // line 25
        echo "<div class=\"container-fluid\">
  <div class=\"row\">
    <nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-3 col-xl-2 d-md-block bg-light sidebar collapse\">
      <div class=\"position-sticky pt-3\">
        <ul class=\"nav flex-column\">
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 30, $this->source); })()), "home", [], "array", false, false, false, 30), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_index");
        echo "\"><i class=\"fa-solid fa-gauge-high fa-fw\"></i> Dashboard</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 31, $this->source); })()), "bank", [], "array", false, false, false, 31), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_bank");
        echo "\"><i class=\"fa-solid fa-bank fa-fw\"></i> Bankkonten verwalten</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 32, $this->source); })()), "list", [], "array", false, false, false, 32), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_list");
        echo "\"><i class=\"fa-solid fa-list fa-fw\"></i> Kontoübersicht anzeigen</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 33, $this->source); })()), "import", [], "array", false, false, false, 33), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_csvImport");
        echo "\"><i class=\"fa-solid fa-file-import fa-fw\"></i> CSV Daten importieren</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 34, $this->source); })()), "categories", [], "array", false, false, false, 34), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_categories");
        echo "\"><i class=\"fa-solid fa-pen-to-square fa-fw\"></i> Kategorien bearbeiten</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 35, $this->source); })()), "report", [], "array", false, false, false, 35), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_report_overview");
        echo "\"><i class=\"fa-solid fa-chart-line fa-fw\"></i> Auswertungen</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 36, $this->source); })()), "add", [], "array", false, false, false, 36), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_accForm", ["id" => 0]);
        echo "\"><i class=\"fa-solid fa-square-plus fa-fw\"></i> Kontoeintrag hinzufügen</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 37, $this->source); })()), "filter", [], "array", false, false, false, 37), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_importfilter");
        echo "\"><i class=\"fa-solid fa-filter fa-fw\"></i> Importfilter bearbeiten</a></li>
        </ul>
        <hr>
        <ul class=\"nav flex-column\">
          <li class=\"nav-item\"><a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><i class=\"fa-solid fa-home fa-fw\"></i> Zurück zum Start</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"fa-solid fa-power-off fa-fw\"></i> Abmelden</a></li>
        </ul>
      </div>
    </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_body_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_before"));

        // line 48
        echo "    <main class=\"col-md-9 col-lg-9 col-xl-10 ms-sm-auto px-md-4 mt-4\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 50
    public function block_body_after($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_after"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_after"));

        // line 51
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
        return "InoKontoManager.html.twig";
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
        return array (  231 => 51,  221 => 50,  210 => 48,  200 => 47,  185 => 42,  181 => 41,  172 => 37,  166 => 36,  160 => 35,  154 => 34,  148 => 33,  142 => 32,  136 => 31,  130 => 30,  123 => 25,  120 => 24,  117 => 23,  114 => 22,  108 => 19,  105 => 18,  102 => 17,  99 => 16,  96 => 15,  93 => 14,  90 => 4,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoSession.html.twig' %}
{% block navbar_title %}Konto Manager{% endblock %}
{% block navbar_side %}
  {% set naventries = {
    'home':'',
    'bank':'',
    'list':'',
    'import':'',
    'categories':'',
    'report':'',
    'add':'',
    'filter':'',
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
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['home'] }}\" href=\"{{ path(\"km_index\") }}\"><i class=\"fa-solid fa-gauge-high fa-fw\"></i> Dashboard</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['bank'] }}\" href=\"{{ path(\"km_bank\") }}\"><i class=\"fa-solid fa-bank fa-fw\"></i> Bankkonten verwalten</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['list'] }}\" href=\"{{ path(\"km_list\") }}\"><i class=\"fa-solid fa-list fa-fw\"></i> Kontoübersicht anzeigen</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['import'] }}\" href=\"{{ path(\"km_csvImport\") }}\"><i class=\"fa-solid fa-file-import fa-fw\"></i> CSV Daten importieren</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['categories'] }}\" href=\"{{ path(\"km_categories\") }}\"><i class=\"fa-solid fa-pen-to-square fa-fw\"></i> Kategorien bearbeiten</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['report'] }}\" href=\"{{ path(\"km_report_overview\") }}\"><i class=\"fa-solid fa-chart-line fa-fw\"></i> Auswertungen</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['add'] }}\" href=\"{{ path(\"km_accForm\",{'id':0}) }}\"><i class=\"fa-solid fa-square-plus fa-fw\"></i> Kontoeintrag hinzufügen</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['filter'] }}\" href=\"{{ path(\"km_importfilter\") }}\"><i class=\"fa-solid fa-filter fa-fw\"></i> Importfilter bearbeiten</a></li>
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
", "InoKontoManager.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/InoKontoManager.html.twig");
    }
}
