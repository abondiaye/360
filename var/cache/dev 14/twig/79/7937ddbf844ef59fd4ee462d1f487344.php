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
class __TwigTemplate_c21736f97b598267b03e9afddd48266a extends Template
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
            'body' => [$this, 'block_body'],
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

        echo "Gestionnaire de Comptes";
        
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
        Tag de navigation inconnu \"";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["ACTNAV"]) || array_key_exists("ACTNAV", $context) ? $context["ACTNAV"] : (function () { throw new RuntimeError('Variable "ACTNAV" does not exist.', 19, $this->source); })()), "html", null, true);
                echo "\" - VÉRIFIEZ VOTRE CODE !
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
        echo "\"><i class=\"fa-solid fa-gauge-high fa-fw\"></i> Tableau de bord</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 31, $this->source); })()), "bank", [], "array", false, false, false, 31), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_bank");
        echo "\"><i class=\"fa-solid fa-bank fa-fw\"></i> Gérer les comptes bancaires</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 32, $this->source); })()), "list", [], "array", false, false, false, 32), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_list");
        echo "\"><i class=\"fa-solid fa-list fa-fw\"></i> Voir les comptes</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 33, $this->source); })()), "import", [], "array", false, false, false, 33), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_csvImport");
        echo "\"><i class=\"fa-solid fa-file-import fa-fw\"></i> Importer des données CSV</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 34, $this->source); })()), "categories", [], "array", false, false, false, 34), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_categories");
        echo "\"><i class=\"fa-solid fa-pen-to-square fa-fw\"></i> Modifier les catégories</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 35, $this->source); })()), "report", [], "array", false, false, false, 35), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_report_overview");
        echo "\"><i class=\"fa-solid fa-chart-line fa-fw\"></i> Rapports et analyses</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 36, $this->source); })()), "add", [], "array", false, false, false, 36), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_accForm", ["id" => 0]);
        echo "\"><i class=\"fa-solid fa-square-plus fa-fw\"></i> Ajouter une opération</a></li>
          <li class=\"nav-item\"><a class=\"nav-link ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["naventries"]) || array_key_exists("naventries", $context) ? $context["naventries"] : (function () { throw new RuntimeError('Variable "naventries" does not exist.', 37, $this->source); })()), "filter", [], "array", false, false, false, 37), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_importfilter");
        echo "\"><i class=\"fa-solid fa-filter fa-fw\"></i> Modifier les filtres d'import</a></li>
        </ul>
        <hr>
        <ul class=\"nav flex-column\">
          <li class=\"nav-item\"><a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><i class=\"fa-solid fa-home fa-fw\"></i> Retour à l'accueil</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"fa-solid fa-power-off fa-fw\"></i> Déconnexion</a></li>
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

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "  <div class=\"container\">
    <h1>Gestionnaire de Comptes</h1>
    <p>Cette page vous permet de gérer vos comptes bancaires.</p>
    <p>Vous pouvez ajouter, modifier ou supprimer des comptes.</p>
    <p>Pour ajouter un compte, cliquez sur le bouton ci-dessous.</p>
    <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_accForm", ["id" => 0]);
        echo "\" class=\"btn btn-primary\">Ajouter un compte</a>
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
        return array (  262 => 61,  255 => 56,  245 => 55,  232 => 51,  222 => 50,  211 => 48,  201 => 47,  186 => 42,  182 => 41,  173 => 37,  167 => 36,  161 => 35,  155 => 34,  149 => 33,  143 => 32,  137 => 31,  131 => 30,  124 => 25,  121 => 24,  118 => 23,  115 => 22,  109 => 19,  106 => 18,  103 => 17,  100 => 16,  97 => 15,  94 => 14,  91 => 4,  81 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoSession.html.twig' %}
{% block navbar_title %}Gestionnaire de Comptes{% endblock %}
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
        Tag de navigation inconnu \"{{ ACTNAV }}\" - VÉRIFIEZ VOTRE CODE !
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
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['home'] }}\" href=\"{{ path(\"km_index\") }}\"><i class=\"fa-solid fa-gauge-high fa-fw\"></i> Tableau de bord</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['bank'] }}\" href=\"{{ path(\"km_bank\") }}\"><i class=\"fa-solid fa-bank fa-fw\"></i> Gérer les comptes bancaires</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['list'] }}\" href=\"{{ path(\"km_list\") }}\"><i class=\"fa-solid fa-list fa-fw\"></i> Voir les comptes</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['import'] }}\" href=\"{{ path(\"km_csvImport\") }}\"><i class=\"fa-solid fa-file-import fa-fw\"></i> Importer des données CSV</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['categories'] }}\" href=\"{{ path(\"km_categories\") }}\"><i class=\"fa-solid fa-pen-to-square fa-fw\"></i> Modifier les catégories</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['report'] }}\" href=\"{{ path(\"km_report_overview\") }}\"><i class=\"fa-solid fa-chart-line fa-fw\"></i> Rapports et analyses</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['add'] }}\" href=\"{{ path(\"km_accForm\",{'id':0}) }}\"><i class=\"fa-solid fa-square-plus fa-fw\"></i> Ajouter une opération</a></li>
          <li class=\"nav-item\"><a class=\"nav-link {{ naventries['filter'] }}\" href=\"{{ path(\"km_importfilter\") }}\"><i class=\"fa-solid fa-filter fa-fw\"></i> Modifier les filtres d'import</a></li>
        </ul>
        <hr>
        <ul class=\"nav flex-column\">
          <li class=\"nav-item\"><a class=\"nav-link\" aria-current=\"page\" href=\"{{ path(\"home\") }}\"><i class=\"fa-solid fa-home fa-fw\"></i> Retour à l'accueil</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" aria-current=\"page\" href=\"{{ path(\"app_logout\") }}\"><i class=\"fa-solid fa-power-off fa-fw\"></i> Déconnexion</a></li>
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
{% block body %}
  <div class=\"container\">
    <h1>Gestionnaire de Comptes</h1>
    <p>Cette page vous permet de gérer vos comptes bancaires.</p>
    <p>Vous pouvez ajouter, modifier ou supprimer des comptes.</p>
    <p>Pour ajouter un compte, cliquez sur le bouton ci-dessous.</p>
    <a href=\"{{ path('km_accForm', {'id': 0}) }}\" class=\"btn btn-primary\">Ajouter un compte</a>
  </div>
{% endblock %}", "InoKontoManager.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/InoKontoManager.html.twig");
    }
}
