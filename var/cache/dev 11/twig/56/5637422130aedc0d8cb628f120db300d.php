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

/* freelancermanager/pdf/reporting_by_project.html.twig */
class __TwigTemplate_0cfee5a21f6f77a14e68caa09640e8d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/pdf/reporting_by_project.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/pdf/reporting_by_project.html.twig"));

        // line 2
        echo "<table cellpadding=\"1\" cellspacing=\"1\">
<tr>
  <th colspan=\"3\"><b><u>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["PROJECT_NAME"]) || array_key_exists("PROJECT_NAME", $context) ? $context["PROJECT_NAME"] : (function () { throw new RuntimeError('Variable "PROJECT_NAME" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</u></b></th>
</tr>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ENTRIES"]) || array_key_exists("ENTRIES", $context) ? $context["ENTRIES"] : (function () { throw new RuntimeError('Variable "ENTRIES" does not exist.', 6, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 7
            echo "<tr style=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 7) % 2 != 0)) {
                echo "background-color:#eeeeee;";
            } else {
                echo "background-color:#dddddd;";
            }
            echo "\">
  <td width=\"50\">";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "ymd", [], "any", false, false, false, 8)), "html", null, true);
            echo "</td>
  <td width=\"50\" style=\"text-align:center;\">
  ";
            // line 10
            if ((twig_get_attribute($this->env, $this->source, $context["e"], "record_type", [], "any", false, false, false, 10) == twig_constant("App\\Entity\\FlProjectEntries::RT_PROJECT_ENTRY"))) {
                // line 11
                echo "    ";
                echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->formatWorkTime(twig_get_attribute($this->env, $this->source, $context["e"], "work_time_in_secs", [], "any", false, false, false, 11)), "html", null, true);
                echo "
  ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 12
$context["e"], "record_type", [], "any", false, false, false, 12) == twig_constant("App\\Entity\\FlProjectEntries::RT_TRAVEL_ALLOWANCE"))) {
                // line 13
                echo "    ";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["e"], "salary", [], "any", false, false, false, 13), "EUR"), "html", null, true);
                echo "
  ";
            }
            // line 15
            echo "  </td>
  <td width=\"363\">
    ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, $context["e"], "record_type", [], "any", false, false, false, 17) == twig_constant("App\\Entity\\FlProjectEntries::RT_TRAVEL_ALLOWANCE"))) {
                // line 18
                echo "      Indemnité de déplacement
      ";
                // line 19
                if ((twig_get_attribute($this->env, $this->source, $context["e"], "work_description", [], "any", false, false, false, 19) != "")) {
                    // line 20
                    echo "        <br>
      ";
                }
                // line 22
                echo "    ";
            }
            // line 23
            echo "    ";
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "work_description", [], "any", false, false, false, 23), "html", null, true));
            echo "
  </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "<tr>
  <td style=\"text-align:right;border-top: 1px solid #666666;\"><b>Total :</b></td>
  <td style=\"text-align:center;border-top: 1px solid #666666;\"><b>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->formatWorkTime((isset($context["TOTAL_SECONDS"]) || array_key_exists("TOTAL_SECONDS", $context) ? $context["TOTAL_SECONDS"] : (function () { throw new RuntimeError('Variable "TOTAL_SECONDS" does not exist.', 29, $this->source); })())), "html", null, true);
        echo "</b></td>
  <td style=\"border-top: 1px solid #666666;\"><b>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((isset($context["TOTAL_SALARY"]) || array_key_exists("TOTAL_SALARY", $context) ? $context["TOTAL_SALARY"] : (function () { throw new RuntimeError('Variable "TOTAL_SALARY" does not exist.', 30, $this->source); })()), "EUR"), "html", null, true);
        echo "</b></td>
</tr>
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
        return "freelancermanager/pdf/reporting_by_project.html.twig";
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
        return array (  143 => 30,  139 => 29,  135 => 27,  116 => 23,  113 => 22,  109 => 20,  107 => 19,  104 => 18,  102 => 17,  98 => 15,  92 => 13,  90 => 12,  85 => 11,  83 => 10,  78 => 8,  69 => 7,  52 => 6,  47 => 4,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Sortie des entrées pour un projet donné - ce code HTML est spécifique à TCPDF !! #}
<table cellpadding=\"1\" cellspacing=\"1\">
<tr>
  <th colspan=\"3\"><b><u>{{ PROJECT_NAME }}</u></b></th>
</tr>
{% for e in ENTRIES %}
<tr style=\"{% if loop.index is odd %}background-color:#eeeeee;{% else %}background-color:#dddddd;{% endif %}\">
  <td width=\"50\">{{ e.ymd|format_date }}</td>
  <td width=\"50\" style=\"text-align:center;\">
  {% if e.record_type == constant('App\\\\Entity\\\\FlProjectEntries::RT_PROJECT_ENTRY') %}
    {{ e.work_time_in_secs|formatWorkTime }}
  {% elseif e.record_type == constant('App\\\\Entity\\\\FlProjectEntries::RT_TRAVEL_ALLOWANCE') %}
    {{ e.salary|format_currency('EUR') }}
  {% endif %}
  </td>
  <td width=\"363\">
    {% if e.record_type == constant('App\\\\Entity\\\\FlProjectEntries::RT_TRAVEL_ALLOWANCE') %}
      Indemnité de déplacement
      {% if e.work_description != \"\" %}
        <br>
      {% endif %}
    {% endif %}
    {{ e.work_description|nl2br }}
  </td>
</tr>
{% endfor %}
<tr>
  <td style=\"text-align:right;border-top: 1px solid #666666;\"><b>Total :</b></td>
  <td style=\"text-align:center;border-top: 1px solid #666666;\"><b>{{ TOTAL_SECONDS|formatWorkTime }}</b></td>
  <td style=\"border-top: 1px solid #666666;\"><b>{{ TOTAL_SALARY|format_currency('EUR') }}</b></td>
</tr>
</table>

{# Exemple de données :
\"id\" => 10905
\"salary\" => \"45.00\"
\"ymd\" => \"2023-12-29\"
\"project_name\" => \"Administration IT\"
\"customer_name\" => \"Maître Frank Meier\"
\"no_reporting\" => false
\"work_time_in_secs\" => 1800
\"work_description\" => \"Vérification des sauvegardes, configuration Strato HiDrive, intégration HiDrive\"
#}
", "freelancermanager/pdf/reporting_by_project.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/freelancermanager/pdf/reporting_by_project.html.twig");
    }
}
