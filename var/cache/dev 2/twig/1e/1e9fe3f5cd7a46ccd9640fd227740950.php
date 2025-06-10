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

/* kontomanager/index.html.twig */
class __TwigTemplate_300d9ee68abdef78ed91cfa44bcb10d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/index.html.twig"));

        $this->parent = $this->loadTemplate("InoKontoManager.html.twig", "kontomanager/index.html.twig", 1);
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
  <div class=\"col-xl-3 col-lg-4 col-md-4 col-6\">
    <div class=\"card h-100\">
      <div class=\"card-body\">
        <div class=\"card-title h3\">Datenbank Übersicht</div>
        <table class=\"table table-sm\">
        <tbody>
        <tr>
          <td>Anz. Datensätze:</td>
          <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["TOTAL_STATS"]) || array_key_exists("TOTAL_STATS", $context) ? $context["TOTAL_STATS"] : (function () { throw new RuntimeError('Variable "TOTAL_STATS" does not exist.', 12, $this->source); })()), "TOTAL_ROWS", [], "array", false, false, false, 12), array(), "decimal", "default", "de"), "html", null, true);
        echo " </td>
        </tr>
        <tr>
          <td>Bereich:</td>
          <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["TOTAL_STATS"]) || array_key_exists("TOTAL_STATS", $context) ? $context["TOTAL_STATS"] : (function () { throw new RuntimeError('Variable "TOTAL_STATS" does not exist.', 16, $this->source); })()), "MIN_DATE", [], "array", false, false, false, 16), "d.m.Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["TOTAL_STATS"]) || array_key_exists("TOTAL_STATS", $context) ? $context["TOTAL_STATS"] : (function () { throw new RuntimeError('Variable "TOTAL_STATS" does not exist.', 16, $this->source); })()), "MAX_DATE", [], "array", false, false, false, 16), "d.m.Y"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
          <td>Anz. Kategorien:</td>
          <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["TOTAL_STATS"]) || array_key_exists("TOTAL_STATS", $context) ? $context["TOTAL_STATS"] : (function () { throw new RuntimeError('Variable "TOTAL_STATS" does not exist.', 20, $this->source); })()), "TOTAL_CATEGORIES", [], "array", false, false, false, 20), array(), "decimal", "default", "de"), "html", null, true);
        echo " </td>
        </tr>
        <tr>
          <td>Anz. Importfilter:</td>
          <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["TOTAL_STATS"]) || array_key_exists("TOTAL_STATS", $context) ? $context["TOTAL_STATS"] : (function () { throw new RuntimeError('Variable "TOTAL_STATS" does not exist.', 24, $this->source); })()), "TOTAL_FILTER", [], "array", false, false, false, 24), array(), "decimal", "default", "de"), "html", null, true);
        echo " </td>
        </tr>
        </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class=\"col-xl-3 col-lg-4 col-md-4 col-6\">
    <div class=\"card h-100\">
      <div class=\"card-body\">
        <div class=\"card-title h3\">Umsatz ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["YEAR"]) || array_key_exists("YEAR", $context) ? $context["YEAR"] : (function () { throw new RuntimeError('Variable "YEAR" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</div>
        <table class=\"table table-sm\">
          <tbody>
          <tr>
            <td>Einnahmen:</td>
            <td class=\"text-end text-success\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["YEAR_STATS"]) || array_key_exists("YEAR_STATS", $context) ? $context["YEAR_STATS"] : (function () { throw new RuntimeError('Variable "YEAR_STATS" does not exist.', 39, $this->source); })()), "INCOME", [], "array", false, false, false, 39), "EUR", array(), "de"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>Ausgaben:</td>
            <td class=\"text-end text-danger\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["YEAR_STATS"]) || array_key_exists("YEAR_STATS", $context) ? $context["YEAR_STATS"] : (function () { throw new RuntimeError('Variable "YEAR_STATS" does not exist.', 43, $this->source); })()), "OUTCOME", [], "array", false, false, false, 43), "EUR", array(), "de"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>Differenz:</td>
            <td class=\"text-end ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, (isset($context["YEAR_STATS"]) || array_key_exists("YEAR_STATS", $context) ? $context["YEAR_STATS"] : (function () { throw new RuntimeError('Variable "YEAR_STATS" does not exist.', 47, $this->source); })()), "DIFFERENCE", [], "array", false, false, false, 47)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["YEAR_STATS"]) || array_key_exists("YEAR_STATS", $context) ? $context["YEAR_STATS"] : (function () { throw new RuntimeError('Variable "YEAR_STATS" does not exist.', 47, $this->source); })()), "DIFFERENCE", [], "array", false, false, false, 47), "EUR", array(), "de"), "html", null, true);
        echo "</td>
          </tr>
          ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["BALANCE_STATS"] ?? null), "balance", [], "array", true, true, false, 49)) {
            // line 50
            echo "          <tr>
            <td>Kontostand am ";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BALANCE_STATS"]) || array_key_exists("BALANCE_STATS", $context) ? $context["BALANCE_STATS"] : (function () { throw new RuntimeError('Variable "BALANCE_STATS" does not exist.', 51, $this->source); })()), "balance_date", [], "array", false, false, false, 51), "d.m.Y"), "html", null, true);
            echo ":</td>
            <td class=\"text-end ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, (isset($context["BALANCE_STATS"]) || array_key_exists("BALANCE_STATS", $context) ? $context["BALANCE_STATS"] : (function () { throw new RuntimeError('Variable "BALANCE_STATS" does not exist.', 52, $this->source); })()), "balance", [], "array", false, false, false, 52)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["BALANCE_STATS"]) || array_key_exists("BALANCE_STATS", $context) ? $context["BALANCE_STATS"] : (function () { throw new RuntimeError('Variable "BALANCE_STATS" does not exist.', 52, $this->source); })()), "balance", [], "array", false, false, false, 52), "EUR", array(), "de"), "html", null, true);
            echo "</td>
          </tr>
          ";
        }
        // line 55
        echo "          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class=\"col-xl-3 col-lg-4 col-md-4 col-6\">
    <div class=\"card h-100\">
      <div class=\"card-body\">
        <div class=\"card-title h3\">Gesamt Umsatz</div>
        <table class=\"table table-sm\">
          <tbody>
          <tr>
            <td>Einnahmen:</td>
            <td class=\"text-end text-success\">";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["ALLTIME_STATS"]) || array_key_exists("ALLTIME_STATS", $context) ? $context["ALLTIME_STATS"] : (function () { throw new RuntimeError('Variable "ALLTIME_STATS" does not exist.', 68, $this->source); })()), "INCOME", [], "array", false, false, false, 68), "EUR", array(), "de"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>Ausgaben:</td>
            <td class=\"text-end text-danger\">";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["ALLTIME_STATS"]) || array_key_exists("ALLTIME_STATS", $context) ? $context["ALLTIME_STATS"] : (function () { throw new RuntimeError('Variable "ALLTIME_STATS" does not exist.', 72, $this->source); })()), "OUTCOME", [], "array", false, false, false, 72), "EUR", array(), "de"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>Differenz:</td>
            <td class=\"text-end ";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, (isset($context["ALLTIME_STATS"]) || array_key_exists("ALLTIME_STATS", $context) ? $context["ALLTIME_STATS"] : (function () { throw new RuntimeError('Variable "ALLTIME_STATS" does not exist.', 76, $this->source); })()), "DIFFERENCE", [], "array", false, false, false, 76)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["ALLTIME_STATS"]) || array_key_exists("ALLTIME_STATS", $context) ? $context["ALLTIME_STATS"] : (function () { throw new RuntimeError('Variable "ALLTIME_STATS" does not exist.', 76, $this->source); })()), "DIFFERENCE", [], "array", false, false, false, 76), "EUR", array(), "de"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>Nur Gehalt:</td>
            <td class=\"text-end text-success\">";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((isset($context["TOTAL_GEHALT"]) || array_key_exists("TOTAL_GEHALT", $context) ? $context["TOTAL_GEHALT"] : (function () { throw new RuntimeError('Variable "TOTAL_GEHALT" does not exist.', 80, $this->source); })()), "EUR", array(), "de"), "html", null, true);
        echo "</td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class=\"row mt-3\">
  <div class=\"col-12\">
    <div class=\"card h-100\">
      <div class=\"card-body\">
        <div class=\"card-title h3 text-center\">Netto-Gehaltsentwicklung</div>
        <canvas id=\"myChart\" width=\"100%\" height=\"20\"></canvas>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/chart.umd.js"), "html", null, true);
        echo "\"></script>
<script>
\$(document).ready(function() {
  const ctx = \$('#myChart');
  const labels = ";
        // line 104
        echo (isset($context["G_LABELS"]) || array_key_exists("G_LABELS", $context) ? $context["G_LABELS"] : (function () { throw new RuntimeError('Variable "G_LABELS" does not exist.', 104, $this->source); })());
        echo ";
  const values = ";
        // line 105
        echo (isset($context["G_VALUES"]) || array_key_exists("G_VALUES", $context) ? $context["G_VALUES"] : (function () { throw new RuntimeError('Variable "G_VALUES" does not exist.', 105, $this->source); })());
        echo ";
  const myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: labels,
      datasets: [{
        label: 'Jahresnettogehalt in EUR',
        data: values,
        borderColor: 'rgb(50, 61, 83)',
        borderWidth: 1,
      }]
    },
    options: {
      locale: 'de-DE',
      plugins: {
        tooltip: {
          callbacks: {
            label: function (context)
              {
              let label = context.dataset.label || '';
              if (label)
                {
                label += ': ';
                }
              if (context.parsed.y !== null)
                {
                label += new Intl.NumberFormat('de-DE', {
                  style: 'currency',
                  currency: 'EUR'
                  }).format(context.parsed.y);
                  }
                return label;
              }
            }
          }
        },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
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
        return "kontomanager/index.html.twig";
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
        return array (  251 => 105,  247 => 104,  239 => 100,  229 => 99,  200 => 80,  191 => 76,  184 => 72,  177 => 68,  162 => 55,  154 => 52,  150 => 51,  147 => 50,  145 => 49,  138 => 47,  131 => 43,  124 => 39,  116 => 34,  103 => 24,  96 => 20,  87 => 16,  80 => 12,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoKontoManager.html.twig' %}
{% block body %}
<div class=\"row\">
  <div class=\"col-xl-3 col-lg-4 col-md-4 col-6\">
    <div class=\"card h-100\">
      <div class=\"card-body\">
        <div class=\"card-title h3\">Datenbank Übersicht</div>
        <table class=\"table table-sm\">
        <tbody>
        <tr>
          <td>Anz. Datensätze:</td>
          <td>{{TOTAL_STATS['TOTAL_ROWS']|format_number(locale='de')}} </td>
        </tr>
        <tr>
          <td>Bereich:</td>
          <td>{{TOTAL_STATS['MIN_DATE']|date('d.m.Y')}} - {{ TOTAL_STATS['MAX_DATE']|date('d.m.Y') }}</td>
        </tr>
        <tr>
          <td>Anz. Kategorien:</td>
          <td>{{TOTAL_STATS['TOTAL_CATEGORIES']|format_number(locale='de')}} </td>
        </tr>
        <tr>
          <td>Anz. Importfilter:</td>
          <td>{{TOTAL_STATS['TOTAL_FILTER']|format_number(locale='de')}} </td>
        </tr>
        </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class=\"col-xl-3 col-lg-4 col-md-4 col-6\">
    <div class=\"card h-100\">
      <div class=\"card-body\">
        <div class=\"card-title h3\">Umsatz {{ YEAR }}</div>
        <table class=\"table table-sm\">
          <tbody>
          <tr>
            <td>Einnahmen:</td>
            <td class=\"text-end text-success\">{{YEAR_STATS['INCOME']|format_currency('EUR',locale='de')}}</td>
          </tr>
          <tr>
            <td>Ausgaben:</td>
            <td class=\"text-end text-danger\">{{ YEAR_STATS['OUTCOME']|format_currency('EUR',locale='de')}}</td>
          </tr>
          <tr>
            <td>Differenz:</td>
            <td class=\"text-end {{ YEAR_STATS['DIFFERENCE']|MoneyColor }}\">{{ YEAR_STATS['DIFFERENCE']|format_currency('EUR',locale='de')}}</td>
          </tr>
          {% if BALANCE_STATS['balance'] is defined %}
          <tr>
            <td>Kontostand am {{ BALANCE_STATS['balance_date']|date('d.m.Y') }}:</td>
            <td class=\"text-end {{ BALANCE_STATS['balance']|MoneyColor }}\">{{ BALANCE_STATS['balance']|format_currency('EUR',locale='de')}}</td>
          </tr>
          {% endif %}
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class=\"col-xl-3 col-lg-4 col-md-4 col-6\">
    <div class=\"card h-100\">
      <div class=\"card-body\">
        <div class=\"card-title h3\">Gesamt Umsatz</div>
        <table class=\"table table-sm\">
          <tbody>
          <tr>
            <td>Einnahmen:</td>
            <td class=\"text-end text-success\">{{ALLTIME_STATS['INCOME']|format_currency('EUR',locale='de')}}</td>
          </tr>
          <tr>
            <td>Ausgaben:</td>
            <td class=\"text-end text-danger\">{{ ALLTIME_STATS['OUTCOME']|format_currency('EUR',locale='de')}}</td>
          </tr>
          <tr>
            <td>Differenz:</td>
            <td class=\"text-end {{ ALLTIME_STATS['DIFFERENCE']|MoneyColor }}\">{{ ALLTIME_STATS['DIFFERENCE']|format_currency('EUR',locale='de')}}</td>
          </tr>
          <tr>
            <td>Nur Gehalt:</td>
            <td class=\"text-end text-success\">{{ TOTAL_GEHALT|format_currency('EUR',locale='de')}}</td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class=\"row mt-3\">
  <div class=\"col-12\">
    <div class=\"card h-100\">
      <div class=\"card-body\">
        <div class=\"card-title h3 text-center\">Netto-Gehaltsentwicklung</div>
        <canvas id=\"myChart\" width=\"100%\" height=\"20\"></canvas>
      </div>
    </div>
  </div>
</div>
{% endblock %}
{% block javascripts %}
<script src=\"{{ asset('js/vendor/chart.umd.js') }}\"></script>
<script>
\$(document).ready(function() {
  const ctx = \$('#myChart');
  const labels = {{ G_LABELS|raw }};
  const values = {{ G_VALUES|raw }};
  const myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: labels,
      datasets: [{
        label: 'Jahresnettogehalt in EUR',
        data: values,
        borderColor: 'rgb(50, 61, 83)',
        borderWidth: 1,
      }]
    },
    options: {
      locale: 'de-DE',
      plugins: {
        tooltip: {
          callbacks: {
            label: function (context)
              {
              let label = context.dataset.label || '';
              if (label)
                {
                label += ': ';
                }
              if (context.parsed.y !== null)
                {
                label += new Intl.NumberFormat('de-DE', {
                  style: 'currency',
                  currency: 'EUR'
                  }).format(context.parsed.y);
                  }
                return label;
              }
            }
          }
        },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
});
</script>
{% endblock %}
", "kontomanager/index.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/kontomanager/index.html.twig");
    }
}
