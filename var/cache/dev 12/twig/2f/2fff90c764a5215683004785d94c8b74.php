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

/* kontomanager/report_costs_month_modal.html.twig */
class __TwigTemplate_a0623138d596c3b8f25402542c408c5a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/report_costs_month_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/report_costs_month_modal.html.twig"));

        // line 1
        echo "<table class=\"table table-sm table-striped table-hover\">
  <thead>
  <tr>
    <th>Datum</th>
    <th>Kategorie</th>
    <th>Buchungstext</th>
    <th class=\"text-end\">Summe</th>
  </tr>
  </thead>
  <tbody>
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["DATA"]) || array_key_exists("DATA", $context) ? $context["DATA"] : (function () { throw new RuntimeError('Variable "DATA" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 12
            echo "    <tr>
      <td class=\"align-top\" title=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "booking_date", [], "any", false, false, false, 13), "full"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "booking_date", [], "any", false, false, false, 13), "medium"), "html", null, true);
            echo "</td>
      <td class=\"align-top\">
        <select name=\"cat[]\" id=\"cat_";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"form-select form-select-sm\">
          ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["CATLIST"]) || array_key_exists("CATLIST", $context) ? $context["CATLIST"] : (function () { throw new RuntimeError('Variable "CATLIST" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 17
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "id", [], "any", false, false, false, 17), "html", null, true);
                echo "|";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "array", false, false, false, 17), "html", null, true);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["d"], "ref_category_id", [], "any", true, true, false, 17) && (twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "array", false, false, false, 17) == twig_get_attribute($this->env, $this->source, $context["d"], "ref_category_id", [], "any", false, false, false, 17)))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "array", false, false, false, 17), "html", null, true);
                echo "</option>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </select>
      </td>
      <td class=\"align-top\"><small>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "description", [], "any", false, false, false, 21), "html", null, true);
            echo "</small></td>
      <td class=\"align-top text-end ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, $context["d"], "amount", [], "any", false, false, false, 22)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["d"], "amount", [], "any", false, false, false, 22), "EUR"), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </tbody>
</table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "kontomanager/report_costs_month_modal.html.twig";
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
        return array (  113 => 25,  102 => 22,  98 => 21,  94 => 19,  77 => 17,  73 => 16,  69 => 15,  62 => 13,  59 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table-sm table-striped table-hover\">
  <thead>
  <tr>
    <th>Datum</th>
    <th>Kategorie</th>
    <th>Buchungstext</th>
    <th class=\"text-end\">Summe</th>
  </tr>
  </thead>
  <tbody>
  {% for d in DATA %}
    <tr>
      <td class=\"align-top\" title=\"{{ d.booking_date|format_date('full') }}\">{{ d.booking_date|format_date('medium') }}</td>
      <td class=\"align-top\">
        <select name=\"cat[]\" id=\"cat_{{ d.id }}\" class=\"form-select form-select-sm\">
          {% for c in CATLIST %}
            <option value=\"{{ d.id }}|{{ c['id'] }}\"{% if d.ref_category_id is defined and c['id'] == d.ref_category_id  %} selected{% endif %}>{{ c['name'] }}</option>
          {% endfor %}
        </select>
      </td>
      <td class=\"align-top\"><small>{{ d.description }}</small></td>
      <td class=\"align-top text-end {{ d.amount|MoneyColor }}\">{{ d.amount|format_currency('EUR') }}</td>
    </tr>
  {% endfor %}
  </tbody>
</table>
", "kontomanager/report_costs_month_modal.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/kontomanager/report_costs_month_modal.html.twig");
    }
}
