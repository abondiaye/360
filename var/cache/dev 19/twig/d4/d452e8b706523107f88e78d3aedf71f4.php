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

/* kontomanager/report_costs_month_table.html.twig */
class __TwigTemplate_7a0a435331d695901c28716dbd38f620 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/report_costs_month_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/report_costs_month_table.html.twig"));

        // line 1
        echo "<table class=\"table table-sm table-striped table-bordered table-hover\">
<thead>
<tr>
  <th>Kategorie</th>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["MONTHS"]) || array_key_exists("MONTHS", $context) ? $context["MONTHS"] : (function () { throw new RuntimeError('Variable "MONTHS" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["mi"] => $context["m"]) {
            // line 6
            echo "  <th class=\"text-center\" id=\"M_";
            echo twig_escape_filter($this->env, $context["mi"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo "</th>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['mi'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  <th class=\"text-end\">Total pro<br>Kategorie</th>
  <th class=\"text-end\">Monats-<br>durchschnitt</th>
</tr>
</thead>
<tbody class=\"table-group-divider\">
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["DATA"]) || array_key_exists("DATA", $context) ? $context["DATA"] : (function () { throw new RuntimeError('Variable "DATA" does not exist.', 13, $this->source); })()), "all_cats", [], "array", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 14
            echo "  <tr>
    <td id=\"C_";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["DATA"]) || array_key_exists("DATA", $context) ? $context["DATA"] : (function () { throw new RuntimeError('Variable "DATA" does not exist.', 15, $this->source); })()), "cat_map", [], "array", false, false, false, 15), $context["c"], [], "array", false, false, false, 15), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["c"], "html", null, true);
            echo "</td>
  ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["MONTHS"]) || array_key_exists("MONTHS", $context) ? $context["MONTHS"] : (function () { throw new RuntimeError('Variable "MONTHS" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["m"] => $context["mname"]) {
                // line 17
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["DATA"] ?? null), "data", [], "array", false, true, false, 17), $context["c"], [], "array", false, true, false, 17), $context["m"], [], "array", true, true, false, 17)) {
                    // line 18
                    echo "    <td class=\"text-end ";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["DATA"]) || array_key_exists("DATA", $context) ? $context["DATA"] : (function () { throw new RuntimeError('Variable "DATA" does not exist.', 18, $this->source); })()), "data", [], "array", false, false, false, 18), $context["c"], [], "array", false, false, false, 18), $context["m"], [], "array", false, false, false, 18)), "html", null, true);
                    echo " mp_click\" data-catid=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["DATA"]) || array_key_exists("DATA", $context) ? $context["DATA"] : (function () { throw new RuntimeError('Variable "DATA" does not exist.', 18, $this->source); })()), "cat_map", [], "array", false, false, false, 18), $context["c"], [], "array", false, false, false, 18), "html", null, true);
                    echo "\" data-month=\"";
                    echo twig_escape_filter($this->env, $context["m"], "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $context["mname"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["DATA"]) || array_key_exists("DATA", $context) ? $context["DATA"] : (function () { throw new RuntimeError('Variable "DATA" does not exist.', 18, $this->source); })()), "data", [], "array", false, false, false, 18), $context["c"], [], "array", false, false, false, 18), $context["m"], [], "array", false, false, false, 18), "EUR"), "html", null, true);
                    echo "</td>
    ";
                } else {
                    // line 20
                    echo "    <td class=\"text-end\">---</td>
    ";
                }
                // line 22
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['m'], $context['mname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "  <td class=\"text-end ";
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["DATA"]) || array_key_exists("DATA", $context) ? $context["DATA"] : (function () { throw new RuntimeError('Variable "DATA" does not exist.', 23, $this->source); })()), "cat_sums", [], "array", false, false, false, 23), $context["c"], [], "array", false, false, false, 23)), "html", null, true);
            echo "\" title=\"Gesamtkosten für ";
            echo twig_escape_filter($this->env, $context["c"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["DATA"]) || array_key_exists("DATA", $context) ? $context["DATA"] : (function () { throw new RuntimeError('Variable "DATA" does not exist.', 23, $this->source); })()), "cat_sums", [], "array", false, false, false, 23), $context["c"], [], "array", false, false, false, 23), "EUR"), "html", null, true);
            echo "</td>
  ";
            // line 24
            $context["avg"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["DATA"]) || array_key_exists("DATA", $context) ? $context["DATA"] : (function () { throw new RuntimeError('Variable "DATA" does not exist.', 24, $this->source); })()), "cat_sums", [], "array", false, false, false, 24), $context["c"], [], "array", false, false, false, 24) / 12);
            // line 25
            echo "  <td class=\"text-end\" title=\"Monatsdurchschnitt für ";
            echo twig_escape_filter($this->env, $context["c"], "html", null, true);
            echo " auf 12 Monate\">";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(abs((isset($context["avg"]) || array_key_exists("avg", $context) ? $context["avg"] : (function () { throw new RuntimeError('Variable "avg" does not exist.', 25, $this->source); })())), "EUR"), "html", null, true);
            echo "</td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</tbody>
<tfoot class=\"table-group-divider\">
<tr class=\"fw-bold\">
  <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["DATA"]) || array_key_exists("DATA", $context) ? $context["DATA"] : (function () { throw new RuntimeError('Variable "DATA" does not exist.', 31, $this->source); })()), "all_cats", [], "array", false, false, false, 31)), "html", null, true);
        echo " Kategorien</td>
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["MONTHS"]) || array_key_exists("MONTHS", $context) ? $context["MONTHS"] : (function () { throw new RuntimeError('Variable "MONTHS" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["m"] => $context["mname"]) {
            // line 33
            echo "  <td class=\"text-end ";
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["DATA"]) || array_key_exists("DATA", $context) ? $context["DATA"] : (function () { throw new RuntimeError('Variable "DATA" does not exist.', 33, $this->source); })()), "mon_sums", [], "array", false, false, false, 33), $context["m"], [], "array", false, false, false, 33)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["DATA"]) || array_key_exists("DATA", $context) ? $context["DATA"] : (function () { throw new RuntimeError('Variable "DATA" does not exist.', 33, $this->source); })()), "mon_sums", [], "array", false, false, false, 33), $context["m"], [], "array", false, false, false, 33), "EUR"), "html", null, true);
            echo "</td>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['m'], $context['mname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
</tfoot>
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
        return "kontomanager/report_costs_month_table.html.twig";
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
        return array (  162 => 35,  151 => 33,  147 => 32,  143 => 31,  138 => 28,  126 => 25,  124 => 24,  115 => 23,  109 => 22,  105 => 20,  91 => 18,  88 => 17,  84 => 16,  78 => 15,  75 => 14,  71 => 13,  64 => 8,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table-sm table-striped table-bordered table-hover\">
<thead>
<tr>
  <th>Kategorie</th>
{% for mi,m in MONTHS %}
  <th class=\"text-center\" id=\"M_{{ mi }}\">{{ m }}</th>
{% endfor %}
  <th class=\"text-end\">Total pro<br>Kategorie</th>
  <th class=\"text-end\">Monats-<br>durchschnitt</th>
</tr>
</thead>
<tbody class=\"table-group-divider\">
{% for c in DATA['all_cats'] %}
  <tr>
    <td id=\"C_{{ DATA['cat_map'][c] }}\">{{ c }}</td>
  {% for m,mname in MONTHS %}
    {% if DATA['data'][c][m] is defined %}
    <td class=\"text-end {{ DATA['data'][c][m]|MoneyColor }} mp_click\" data-catid=\"{{ DATA['cat_map'][c] }}\" data-month=\"{{ m }}\" title=\"{{ mname }}\">{{ DATA['data'][c][m]|format_currency('EUR') }}</td>
    {% else %}
    <td class=\"text-end\">---</td>
    {% endif %}
  {% endfor %}
  <td class=\"text-end {{ DATA['cat_sums'][c]|MoneyColor }}\" title=\"Gesamtkosten für {{ c }}\">{{ DATA['cat_sums'][c]|format_currency('EUR') }}</td>
  {% set avg = DATA['cat_sums'][c] / 12 %}
  <td class=\"text-end\" title=\"Monatsdurchschnitt für {{ c }} auf 12 Monate\">{{ avg|abs|format_currency('EUR') }}</td>
  </tr>
{% endfor %}
</tbody>
<tfoot class=\"table-group-divider\">
<tr class=\"fw-bold\">
  <td>{{ DATA['all_cats']|length }} Kategorien</td>
{% for m,mname in MONTHS %}
  <td class=\"text-end {{ DATA['mon_sums'][m]|MoneyColor }}\">{{ DATA['mon_sums'][m]|format_currency('EUR') }}</td>
{% endfor %}
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
</tfoot>
</table>
", "kontomanager/report_costs_month_table.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/kontomanager/report_costs_month_table.html.twig");
    }
}
