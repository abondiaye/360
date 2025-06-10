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

/* kontomanager/pdf/list.html.twig */
class __TwigTemplate_1d7e9e7b82f2d7921c46ed744ad5567a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/pdf/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/pdf/list.html.twig"));

        // line 1
        echo "<h1>Relevé de compte pour ";
        echo twig_escape_filter($this->env, (isset($context["ACCOUNT_NUMBER"]) || array_key_exists("ACCOUNT_NUMBER", $context) ? $context["ACCOUNT_NUMBER"] : (function () { throw new RuntimeError('Variable "ACCOUNT_NUMBER" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "</h1>
Catégorie : \"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["F_CATEGORY"]) || array_key_exists("F_CATEGORY", $context) ? $context["F_CATEGORY"] : (function () { throw new RuntimeError('Variable "F_CATEGORY" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\", 
 Période : ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["F_MONTH"]) || array_key_exists("F_MONTH", $context) ? $context["F_MONTH"] : (function () { throw new RuntimeError('Variable "F_MONTH" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["F_YEAR"]) || array_key_exists("F_YEAR", $context) ? $context["F_YEAR"] : (function () { throw new RuntimeError('Variable "F_YEAR" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "

<p>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber((isset($context["DATA_COUNT"]) || array_key_exists("DATA_COUNT", $context) ? $context["DATA_COUNT"] : (function () { throw new RuntimeError('Variable "DATA_COUNT" does not exist.', 5, $this->source); })())), "html", null, true);
        echo " opérations | Revenus : <span class=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 5, $this->source); })()), "INCOME", [], "array", false, false, false, 5)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 5, $this->source); })()), "INCOME", [], "array", false, false, false, 5), "EUR"), "html", null, true);
        echo "</span> | Dépenses : <span class=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 5, $this->source); })()), "OUTCOME", [], "array", false, false, false, 5)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 5, $this->source); })()), "OUTCOME", [], "array", false, false, false, 5), "EUR"), "html", null, true);
        echo "</span> | Différence : <span class=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 5, $this->source); })()), "DIFF", [], "array", false, false, false, 5)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 5, $this->source); })()), "DIFF", [], "array", false, false, false, 5), "EUR"), "html", null, true);
        echo "</span></p>

<p>&nbsp;</p>

<table cellpadding=\"2\" cellspacing=\"1\">
<thead>
<tr>
  <th width=\"55\" style=\"border-bottom: 1px solid #000000;\"><b>Date</b></th>
  <th width=\"100\" style=\"border-bottom: 1px solid #000000;\"><b>Catégorie</b></th>
  <th width=\"270\" style=\"border-bottom: 1px solid #000000;\"><b>Description</b></th>
  <th width=\"70\" style=\"border-bottom: 1px solid #000000; text-align: right;\"><b>Montant</b></th>
</tr>
</thead>
<tbody>
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["DATA"]) || array_key_exists("DATA", $context) ? $context["DATA"] : (function () { throw new RuntimeError('Variable "DATA" does not exist.', 19, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 20
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 20) % 2)) {
                // line 21
                echo "    ";
                $context["row_color"] = "#ffffff";
                // line 22
                echo "  ";
            } else {
                // line 23
                echo "    ";
                $context["row_color"] = "#dedede";
                // line 24
                echo "  ";
            }
            // line 25
            echo "<tr style=\"background-color: ";
            echo twig_escape_filter($this->env, (isset($context["row_color"]) || array_key_exists("row_color", $context) ? $context["row_color"] : (function () { throw new RuntimeError('Variable "row_color" does not exist.', 25, $this->source); })()), "html", null, true);
            echo ";\">
  <td width=\"55\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "dt", [], "array", false, false, false, 26), "html", null, true);
            echo "</td>
  <td width=\"100\">
    ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["d"], "catid", [], "array", false, false, false, 28)) {
                // line 29
                echo "      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "category_name", [], "array", false, false, false, 29), "html", null, true);
                echo "
    ";
            } else {
                // line 31
                echo "      <b>Pas de catégorie</b>
    ";
            }
            // line 33
            echo "  </td>
  <td width=\"270\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "description", [], "array", false, false, false, 34), "html", null, true);
            echo "</td>
  <td width=\"70\" style=\"text-align: right; padding: 2px;\">";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["d"], "amount", [], "array", false, false, false, 35), "EUR"), "html", null, true);
            echo "</td>
</tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</tbody>
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
        return "kontomanager/pdf/list.html.twig";
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
        return array (  166 => 38,  149 => 35,  145 => 34,  142 => 33,  138 => 31,  132 => 29,  130 => 28,  125 => 26,  120 => 25,  117 => 24,  114 => 23,  111 => 22,  108 => 21,  105 => 20,  88 => 19,  59 => 5,  52 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Relevé de compte pour {{ ACCOUNT_NUMBER }}</h1>
Catégorie : \"{{ F_CATEGORY }}\", 
 Période : {{ F_MONTH }} {{ F_YEAR }}

<p>{{ DATA_COUNT|format_number }} opérations | Revenus : <span class=\"{{ REVENUE['INCOME']|MoneyColor }}\">{{ REVENUE['INCOME']|format_currency('EUR') }}</span> | Dépenses : <span class=\"{{ REVENUE['OUTCOME']|MoneyColor }}\">{{ REVENUE['OUTCOME']|format_currency('EUR') }}</span> | Différence : <span class=\"{{ REVENUE['DIFF']|MoneyColor }}\">{{ REVENUE['DIFF']|format_currency('EUR') }}</span></p>

<p>&nbsp;</p>

<table cellpadding=\"2\" cellspacing=\"1\">
<thead>
<tr>
  <th width=\"55\" style=\"border-bottom: 1px solid #000000;\"><b>Date</b></th>
  <th width=\"100\" style=\"border-bottom: 1px solid #000000;\"><b>Catégorie</b></th>
  <th width=\"270\" style=\"border-bottom: 1px solid #000000;\"><b>Description</b></th>
  <th width=\"70\" style=\"border-bottom: 1px solid #000000; text-align: right;\"><b>Montant</b></th>
</tr>
</thead>
<tbody>
{% for d in DATA %}
  {% if loop.index0 % 2 %}
    {% set row_color = '#ffffff' %}
  {% else %}
    {% set row_color = '#dedede' %}
  {% endif %}
<tr style=\"background-color: {{ row_color }};\">
  <td width=\"55\">{{ d['dt'] }}</td>
  <td width=\"100\">
    {% if d['catid'] %}
      {{ d['category_name'] }}
    {% else %}
      <b>Pas de catégorie</b>
    {% endif %}
  </td>
  <td width=\"270\">{{ d['description'] }}</td>
  <td width=\"70\" style=\"text-align: right; padding: 2px;\">{{ d['amount']|format_currency('EUR') }}</td>
</tr>
{% endfor %}
</tbody>
</table>
", "kontomanager/pdf/list.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/kontomanager/pdf/list.html.twig");
    }
}
