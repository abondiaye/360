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

/* freelancermanager/_entries_yyyymm.html.twig */
class __TwigTemplate_e13aa065391936aca11297b00ca722ca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/_entries_yyyymm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/_entries_yyyymm.html.twig"));

        // line 1
        echo "<table class=\"table table-sm table-striped\">
<thead>
<tr>
  <th>Date</th>
  <th>Client</th>
  <th>Projet</th>
  <th class=\"text-end\">Durée</th>
  <th class=\"text-end\">Gains</th>
</tr>
</thead>
<tbody>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["DATA"]) || array_key_exists("DATA", $context) ? $context["DATA"] : (function () { throw new RuntimeError('Variable "DATA" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 13
            echo "<tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
  <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "ymd", [], "any", false, false, false, 14)), "html", null, true);
            echo "</td>
  <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "customer_name", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
  <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "project_name", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
  <td class=\"text-end\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->formatWorkTime(twig_get_attribute($this->env, $this->source, $context["d"], "work_time_in_secs", [], "any", false, false, false, 17)), "html", null, true);
            echo "</td>
  <td class=\"text-end\">
    ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, $context["d"], "no_reporting", [], "any", false, false, false, 19) == false)) {
                // line 20
                echo "      ";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["d"], "salary", [], "any", false, false, false, 20), "EUR"), "html", null, true);
                echo "
    ";
            } else {
                // line 22
                echo "      -/-
    ";
            }
            // line 24
            echo "  </td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "<tr>
  <td colspan=\"5\" class=\"text-bg-info text-center\">Aucune entrée disponible !</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</tbody>
<tfoot>
<tr>
  <td class=\"fw-bold\" colspan=\"3\">Total :</td>
  <td class=\"fw-bold text-end\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->formatWorkTime((isset($context["TOTAL_TIME"]) || array_key_exists("TOTAL_TIME", $context) ? $context["TOTAL_TIME"] : (function () { throw new RuntimeError('Variable "TOTAL_TIME" does not exist.', 35, $this->source); })())), "html", null, true);
        echo "</td>
  <td class=\"fw-bold text-end\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((isset($context["TOTAL_SALARY"]) || array_key_exists("TOTAL_SALARY", $context) ? $context["TOTAL_SALARY"] : (function () { throw new RuntimeError('Variable "TOTAL_SALARY" does not exist.', 36, $this->source); })()), "EUR"), "html", null, true);
        echo "</td>
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
        return "freelancermanager/_entries_yyyymm.html.twig";
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
        return array (  121 => 36,  117 => 35,  111 => 31,  102 => 27,  95 => 24,  91 => 22,  85 => 20,  83 => 19,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  61 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table-sm table-striped\">
<thead>
<tr>
  <th>Date</th>
  <th>Client</th>
  <th>Projet</th>
  <th class=\"text-end\">Durée</th>
  <th class=\"text-end\">Gains</th>
</tr>
</thead>
<tbody>
{% for d in DATA %}
<tr data-id=\"{{ d.id }}\">
  <td>{{ d.ymd|format_date }}</td>
  <td>{{ d.customer_name }}</td>
  <td>{{ d.project_name }}</td>
  <td class=\"text-end\">{{ d.work_time_in_secs|formatWorkTime }}</td>
  <td class=\"text-end\">
    {% if d.no_reporting == false %}
      {{ d.salary|format_currency('EUR') }}
    {% else %}
      -/-
    {% endif %}
  </td>
</tr>
{% else %}
<tr>
  <td colspan=\"5\" class=\"text-bg-info text-center\">Aucune entrée disponible !</td>
</tr>
{% endfor %}
</tbody>
<tfoot>
<tr>
  <td class=\"fw-bold\" colspan=\"3\">Total :</td>
  <td class=\"fw-bold text-end\">{{ TOTAL_TIME|formatWorkTime }}</td>
  <td class=\"fw-bold text-end\">{{ TOTAL_SALARY|format_currency('EUR') }}</td>
</tr>
</tfoot>
</table>
", "freelancermanager/_entries_yyyymm.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/freelancermanager/_entries_yyyymm.html.twig");
    }
}
