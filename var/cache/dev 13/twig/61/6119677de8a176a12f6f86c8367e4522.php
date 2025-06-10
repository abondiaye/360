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

/* kontomanager/csv_importer_done.html.twig */
class __TwigTemplate_80717ac222cdc618d8e3e074804af04d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/csv_importer_done.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/csv_importer_done.html.twig"));

        $this->parent = $this->loadTemplate("InoKontoManager.html.twig", "kontomanager/csv_importer_done.html.twig", 1);
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
  <div class=\"col-12\">
    <div class=\"card-title h3\">Ergebnis des CSV Imports</div>
    <p>Es wurden ";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["RESULT"]) || array_key_exists("RESULT", $context) ? $context["RESULT"] : (function () { throw new RuntimeError('Variable "RESULT" does not exist.', 6, $this->source); })())), "html", null, true);
        echo " Zeile(n) in ";
        echo twig_escape_filter($this->env, (isset($context["IMPTIME"]) || array_key_exists("IMPTIME", $context) ? $context["IMPTIME"] : (function () { throw new RuntimeError('Variable "IMPTIME" does not exist.', 6, $this->source); })()), "html", null, true);
        echo " importiert.</p>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-12\">
    <table class=\"table table-sm table-striped table-hover\">
    <thead>
    <tr>
      <th class=\"w-auto\">Buchungsdatum</th>
      <th class=\"w-100\">Buchungstext</th>
      <th class=\"w-auto text-end\">Summe</th>
      <th class=\"w-auto\">Kontonummer</th>
      <th class=\"w-auto\">Ergebnis</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["RESULT"]) || array_key_exists("RESULT", $context) ? $context["RESULT"] : (function () { throw new RuntimeError('Variable "RESULT" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 23
            echo "    <tr >
      <td class=\"";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, $context["r"], "STATUS", [], "any", false, false, false, 24) == 1)) {
                echo "text-danger";
            } else {
                echo "text-success";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "BDATE", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
      <td class=\"";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["r"], "STATUS", [], "any", false, false, false, 25) == 1)) {
                echo "text-danger";
            } else {
                echo "text-success";
            }
            echo " td-truncate\">
        ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "TXT", [], "any", false, false, false, 26), "html", null, true);
            echo "
      </td>
      <td class=\"text-end ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, $context["r"], "STATUS", [], "any", false, false, false, 28) == 1)) {
                echo "text-danger";
            } else {
                echo "text-success";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["r"], "SUM", [], "any", false, false, false, 28), "EUR"), "html", null, true);
            echo "</td>
      <td class=\"";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["r"], "STATUS", [], "any", false, false, false, 29) == 1)) {
                echo "text-danger";
            } else {
                echo "text-success";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "IBAN", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
      <td class=\"text-nowrap ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, $context["r"], "STATUS", [], "any", false, false, false, 30) == 1)) {
                echo "text-danger";
            } else {
                echo "text-success";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "RESULT", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </tbody>
    </table>
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
        return "kontomanager/csv_importer_done.html.twig";
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
        return array (  159 => 33,  144 => 30,  134 => 29,  124 => 28,  119 => 26,  111 => 25,  101 => 24,  98 => 23,  94 => 22,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoKontoManager.html.twig' %}
{% block body %}
<div class=\"row\">
  <div class=\"col-12\">
    <div class=\"card-title h3\">Ergebnis des CSV Imports</div>
    <p>Es wurden {{ RESULT|length }} Zeile(n) in {{ IMPTIME }} importiert.</p>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-12\">
    <table class=\"table table-sm table-striped table-hover\">
    <thead>
    <tr>
      <th class=\"w-auto\">Buchungsdatum</th>
      <th class=\"w-100\">Buchungstext</th>
      <th class=\"w-auto text-end\">Summe</th>
      <th class=\"w-auto\">Kontonummer</th>
      <th class=\"w-auto\">Ergebnis</th>
    </tr>
    </thead>
    <tbody>
    {% for r in RESULT %}
    <tr >
      <td class=\"{% if r.STATUS == 1 %}text-danger{% else %}text-success{% endif %}\">{{ r.BDATE }}</td>
      <td class=\"{% if r.STATUS == 1 %}text-danger{% else %}text-success{% endif %} td-truncate\">
        {{ r.TXT }}
      </td>
      <td class=\"text-end {% if r.STATUS == 1 %}text-danger{% else %}text-success{% endif %}\">{{ r.SUM|format_currency('EUR') }}</td>
      <td class=\"{% if r.STATUS == 1 %}text-danger{% else %}text-success{% endif %}\">{{ r.IBAN }}</td>
      <td class=\"text-nowrap {% if r.STATUS == 1 %}text-danger{% else %}text-success{% endif %}\">{{ r.RESULT }}</td>
    </tr>
    {% endfor %}
    </tbody>
    </table>
  </div>
</div>
{% endblock %}
", "kontomanager/csv_importer_done.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/kontomanager/csv_importer_done.html.twig");
    }
}
