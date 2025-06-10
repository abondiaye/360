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

/* kontomanager/categories_form.html.twig */
class __TwigTemplate_73cd7840ca1a5da54ab4125739d9b6db extends Template
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
        return "InoKontoManager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/categories_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/categories_form.html.twig"));

        $this->parent = $this->loadTemplate("InoKontoManager.html.twig", "kontomanager/categories_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"row\">
  <div class=\"col\">
    <div class=\"card-title h3\">";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)) {
            echo "Kategorie #";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
            echo " bearbeiten";
        } else {
            echo "Neue Kategorie anlegen";
        }
        echo "</div>
  </div>
</div>
<form method=\"post\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_category_save");
        echo "\" id=\"frm_category\" class=\"needs-validation\" novalidate>
  <input type=\"hidden\" name=\"CATID\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", false, false, false, 9), 0)) : (0)), "html", null, true);
        echo "\">
  <div class=\"row\">
    <div class=\"col-xl-4 col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"mb-2\">
            <label class=\"form-check-label\" for=\"catname\">Name</label>
            <input type=\"text\" name=\"catname\" id=\"catname\" class=\"form-control\" placeholder=\"Name der Kategorie\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "\" required autofocus>
          </div>
          <div class=\"form-check form-switch mb-2\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"is_fixed\" name=\"is_fixed\" value=\"1\"";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 19, $this->source); })()), "isFixed", [], "any", false, false, false, 19)) {
            echo " checked";
        }
        echo ">
            <label class=\"form-check-label\" for=\"is_fixed\">Fixkosten?</label>
          </div>
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"is_active\" name=\"is_active\" value=\"1\"";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 23, $this->source); })()), "isActive", [], "any", false, false, false, 23)) {
            echo " checked";
        }
        echo ">
            <label class=\"form-check-label\" for=\"is_active\">Aktiv?</label>
          </div>
          <div class=\"mt-3\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"far fa-save\"></i> Speichern</button>
            ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)) {
            // line 29
            echo "            <button type=\"button\" class=\"btn btn-danger btn_del_cat\"><i class=\"fa fa-trash\"></i> Löschen</button>
            ";
        }
        // line 31
        echo "            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_categories");
        echo "'\"><i class=\"fa-solid fa-arrow-left\"></i> Zurück</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<form method=\"post\" action=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_category_del");
        echo "\" id=\"frm_del\">
  <input type=\"hidden\" name=\"CATID\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "<script>
\$(\".btn_del_cat\").on('click', function() {
  SwalConfirmSubmit(\"Diese Kategorie wirklich löschen?<br><br>Bereits zugewiesene Einträge werden auf \\\"Keine Kategorie\\\" gesetzt!\",\"frm_del\");
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
        return "kontomanager/categories_form.html.twig";
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
        return array (  168 => 43,  158 => 42,  145 => 39,  141 => 38,  130 => 31,  126 => 29,  124 => 28,  114 => 23,  105 => 19,  99 => 16,  89 => 9,  85 => 8,  73 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoKontoManager.html.twig' %}
{% block body %}
<div class=\"row\">
  <div class=\"col\">
    <div class=\"card-title h3\">{% if ENTRY.id %}Kategorie #{{ ENTRY.id }} bearbeiten{% else %}Neue Kategorie anlegen{% endif %}</div>
  </div>
</div>
<form method=\"post\" action=\"{{ path('km_category_save') }}\" id=\"frm_category\" class=\"needs-validation\" novalidate>
  <input type=\"hidden\" name=\"CATID\" value=\"{{ ENTRY.id|default(0) }}\">
  <div class=\"row\">
    <div class=\"col-xl-4 col-md-6 col-12\">
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"mb-2\">
            <label class=\"form-check-label\" for=\"catname\">Name</label>
            <input type=\"text\" name=\"catname\" id=\"catname\" class=\"form-control\" placeholder=\"Name der Kategorie\" value=\"{{ ENTRY.name }}\" required autofocus>
          </div>
          <div class=\"form-check form-switch mb-2\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"is_fixed\" name=\"is_fixed\" value=\"1\"{% if ENTRY.isFixed %} checked{% endif %}>
            <label class=\"form-check-label\" for=\"is_fixed\">Fixkosten?</label>
          </div>
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"is_active\" name=\"is_active\" value=\"1\"{% if ENTRY.isActive %} checked{% endif %}>
            <label class=\"form-check-label\" for=\"is_active\">Aktiv?</label>
          </div>
          <div class=\"mt-3\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"far fa-save\"></i> Speichern</button>
            {% if ENTRY.id %}
            <button type=\"button\" class=\"btn btn-danger btn_del_cat\"><i class=\"fa fa-trash\"></i> Löschen</button>
            {% endif %}
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='{{ path('km_categories') }}'\"><i class=\"fa-solid fa-arrow-left\"></i> Zurück</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<form method=\"post\" action=\"{{ path(\"km_category_del\") }}\" id=\"frm_del\">
  <input type=\"hidden\" name=\"CATID\" value=\"{{ ENTRY.id }}\">
</form>
{% endblock %}
{% block javascripts %}
<script>
\$(\".btn_del_cat\").on('click', function() {
  SwalConfirmSubmit(\"Diese Kategorie wirklich löschen?<br><br>Bereits zugewiesene Einträge werden auf \\\"Keine Kategorie\\\" gesetzt!\",\"frm_del\");
});
</script>
{% endblock %}
", "kontomanager/categories_form.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/kontomanager/categories_form.html.twig");
    }
}
