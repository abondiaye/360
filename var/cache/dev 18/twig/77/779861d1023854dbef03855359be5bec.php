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

/* kontomanager/report_overview.html.twig */
class __TwigTemplate_8963be6fa6d6bc8cfe311bc82ef3e52f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/report_overview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/report_overview.html.twig"));

        $this->parent = $this->loadTemplate("InoKontoManager.html.twig", "kontomanager/report_overview.html.twig", 1);
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
    <div class=\"card-title h3\">Auswertungen</div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xl-3 col-4\">
    <form method=\"get\" action=\"#\" id=\"frm_report_filter\">
      <div class=\"form-floating\">
         <select name=\"year\" id=\"year\" class=\"form-select\">
          ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["YEARLIST"]) || array_key_exists("YEARLIST", $context) ? $context["YEARLIST"] : (function () { throw new RuntimeError('Variable "YEARLIST" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 14
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["year"], "y", [], "array", false, false, false, 14), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["year"], "y", [], "array", false, false, false, 14) == (isset($context["ACTYEAR"]) || array_key_exists("ACTYEAR", $context) ? $context["ACTYEAR"] : (function () { throw new RuntimeError('Variable "ACTYEAR" does not exist.', 14, $this->source); })()))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["year"], "y", [], "array", false, false, false, 14), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </select>
        <label for=\"year\">Gewünschtes Jahr auswählen</label>
      </div>
    </form>
  </div>
  <div class=\"col-xl-8 col-8\">
    <form method=\"get\" action=\"#\" id=\"frm_report_tools\">
      <div class=\"form-floating\">
        <select name=\"report\" id=\"report\" class=\"form-select\">
          <option value=\"\"></option>
          <option value=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_report_costsMonth");
        echo "\">Auflistung der Kosten/Monat</option>
          <option value=\"#\">Fixkosten Vergleich</option>
          <option value=\"#\">Kontoführungsgebühren anzeigen</option>
          <option value=\"#\">Auszüge für Steuerberater</option>
        </select>
        <label for=\"report\">Gewünschten Report auswählen</label>
      </div>
    </form>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xl-3 col-12 mt-3\">
    <div class=\"card h-100\">
      <div class=\"card-body\">
        <div class=\"card-title fw-bold text-center pie_title\"></div>
        <div class=\"card chart-container\">
          <canvas id=\"pie_inout\" height=\"300\"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-xl-8 col-12 mt-3\">
    <div class=\"card h-100\">
      <div class=\"card-body\">
        <div class=\"card-title fw-bold text-center bar_title\"></div>
        <div class=\"card chart-container\">
          <canvas id=\"bar_inout\" width=\"100%\" height=\"30\"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/chart.umd.js"), "html", null, true);
        echo "\"></script>
<script>
  var myChart   = undefined;
  var yearChart = undefined;
  function loadData()
    {
      const labels = ['Jan','Feb','Mär','Apr','Mai','Jun','Jul','Aug','Sep','Okt','Nov','Dez'];
      var selYear = \$(\"#year\").val();
      var url = \"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_report_ajaxOverview");
        echo "/\" + selYear;
      \$.ajax(url, {
        'dataType': 'json',
      }).done(function (json)
      {
        \$(\".pie_title\").html(\"Einnahmen / Ausgaben \"+selYear);
        \$(\".bar_title\").html(selYear+\": Einnahmen: \"+FormatEuro(json['PIE_DATA']['INCOME'],true)+\" | Ausgaben: \"+FormatEuro(json['PIE_DATA']['OUTCOME'],true)+\" | Differenz: \"+FormatEuro(json['PIE_DATA']['DIFFERENCE'],true));
        if(myChart === undefined)
          {
          myChart = new Chart(\$('#pie_inout'), {
            type: 'pie',
            data: {
              labels: ['Einnahmen', 'Ausgaben'],
              datasets: [{
                data: [json['PIE_DATA']['INCOME'], json['PIE_DATA']['OUTCOME']],
                backgroundColor: [
                  '#198754',
                  '#dc3545',
                ],
                borderColor: 'rgb(50, 61, 83)',
                borderWidth: 1,
              }]
            },
            options: {
              aspectRatio: 0,
              locale: 'de-DE',
              plugins: {
                tooltip: {
                  enabled: true,
                  usePointStyle: true,
                  callbacks: {
                    // To change title GenuisPro360°
//              title: (data) => { return data[0].parsed.x },
                    // To change label GenuisPro360°
                    label: (data) =>
                      {
                      return data.label + \": \" + FormatEuro(data.raw)
                      }
                    },
                  },
                },
              },
            });
          var data = {
            labels: labels,
            datasets: [
              {
                label: 'Einnahmen',
                data: json['YEAR_DATA']['INCOME'],
                backgroundColor: ['#198754',],
              },
              {
                label: 'Ausgaben',
                data: json['YEAR_DATA']['OUTCOME'],
                backgroundColor: ['#dc3545',],
              }
            ]
          };
          yearChart = new Chart(\$(\"#bar_inout\"), {
            type: 'bar',data: data,
            options: {
              scales: {y: {beginAtZero: true}},
              plugins: {
                tooltip: {
                  enabled: true,
                  usePointStyle: true,
                  callbacks: {
                    // To change title GenuisPro360°
//              title: (data) => { return data[0].parsed.x },
                    // To change label GenuisPro360°
                    label: (data) =>
                      {
                        return FormatEuro(data.raw)
                      }
                  },
                },
              },
            },
            });
          }
        else
          {
          myChart.data.datasets[0].data = [json['PIE_DATA']['INCOME'],json['PIE_DATA']['OUTCOME']];
          myChart.update();
          yearChart.data.datasets[0].data = json['YEAR_DATA']['INCOME'];
          yearChart.data.datasets[1].data = json['YEAR_DATA']['OUTCOME'];
          yearChart.update();
          }
      });
    }

  \$(document).ready(function () {
    /** Handle selection of a year */
    \$(\"#year\").on('change', function() {
      loadData();
    });
    loadData();

    /** Handle selection of report */
    \$(\"#report\").on('change', function() {
      var rep = \$(this).val();
      if(rep === \"\")
        {
        return;
        }
      var y = \$(\"#year\").val();
      window.location.href=rep+\"/\"+y;
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
        return "kontomanager/report_overview.html.twig";
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
        return array (  177 => 68,  165 => 60,  155 => 59,  112 => 26,  100 => 16,  85 => 14,  81 => 13,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoKontoManager.html.twig' %}
{% block body %}
<div class=\"row\">
  <div class=\"col\">
    <div class=\"card-title h3\">Auswertungen</div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xl-3 col-4\">
    <form method=\"get\" action=\"#\" id=\"frm_report_filter\">
      <div class=\"form-floating\">
         <select name=\"year\" id=\"year\" class=\"form-select\">
          {% for year in YEARLIST %}
          <option value=\"{{ year['y'] }}\"{% if year['y'] == ACTYEAR %} selected{% endif %}>{{ year['y'] }}</option>
          {% endfor %}
        </select>
        <label for=\"year\">Gewünschtes Jahr auswählen</label>
      </div>
    </form>
  </div>
  <div class=\"col-xl-8 col-8\">
    <form method=\"get\" action=\"#\" id=\"frm_report_tools\">
      <div class=\"form-floating\">
        <select name=\"report\" id=\"report\" class=\"form-select\">
          <option value=\"\"></option>
          <option value=\"{{ path(\"km_report_costsMonth\") }}\">Auflistung der Kosten/Monat</option>
          <option value=\"#\">Fixkosten Vergleich</option>
          <option value=\"#\">Kontoführungsgebühren anzeigen</option>
          <option value=\"#\">Auszüge für Steuerberater</option>
        </select>
        <label for=\"report\">Gewünschten Report auswählen</label>
      </div>
    </form>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xl-3 col-12 mt-3\">
    <div class=\"card h-100\">
      <div class=\"card-body\">
        <div class=\"card-title fw-bold text-center pie_title\"></div>
        <div class=\"card chart-container\">
          <canvas id=\"pie_inout\" height=\"300\"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-xl-8 col-12 mt-3\">
    <div class=\"card h-100\">
      <div class=\"card-body\">
        <div class=\"card-title fw-bold text-center bar_title\"></div>
        <div class=\"card chart-container\">
          <canvas id=\"bar_inout\" width=\"100%\" height=\"30\"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
{% block javascripts %}
<script src=\"{{ asset('js/vendor/chart.umd.js') }}\"></script>
<script>
  var myChart   = undefined;
  var yearChart = undefined;
  function loadData()
    {
      const labels = ['Jan','Feb','Mär','Apr','Mai','Jun','Jul','Aug','Sep','Okt','Nov','Dez'];
      var selYear = \$(\"#year\").val();
      var url = \"{{ path(\"km_report_ajaxOverview\") }}/\" + selYear;
      \$.ajax(url, {
        'dataType': 'json',
      }).done(function (json)
      {
        \$(\".pie_title\").html(\"Einnahmen / Ausgaben \"+selYear);
        \$(\".bar_title\").html(selYear+\": Einnahmen: \"+FormatEuro(json['PIE_DATA']['INCOME'],true)+\" | Ausgaben: \"+FormatEuro(json['PIE_DATA']['OUTCOME'],true)+\" | Differenz: \"+FormatEuro(json['PIE_DATA']['DIFFERENCE'],true));
        if(myChart === undefined)
          {
          myChart = new Chart(\$('#pie_inout'), {
            type: 'pie',
            data: {
              labels: ['Einnahmen', 'Ausgaben'],
              datasets: [{
                data: [json['PIE_DATA']['INCOME'], json['PIE_DATA']['OUTCOME']],
                backgroundColor: [
                  '#198754',
                  '#dc3545',
                ],
                borderColor: 'rgb(50, 61, 83)',
                borderWidth: 1,
              }]
            },
            options: {
              aspectRatio: 0,
              locale: 'de-DE',
              plugins: {
                tooltip: {
                  enabled: true,
                  usePointStyle: true,
                  callbacks: {
                    // To change title GenuisPro360°
//              title: (data) => { return data[0].parsed.x },
                    // To change label GenuisPro360°
                    label: (data) =>
                      {
                      return data.label + \": \" + FormatEuro(data.raw)
                      }
                    },
                  },
                },
              },
            });
          var data = {
            labels: labels,
            datasets: [
              {
                label: 'Einnahmen',
                data: json['YEAR_DATA']['INCOME'],
                backgroundColor: ['#198754',],
              },
              {
                label: 'Ausgaben',
                data: json['YEAR_DATA']['OUTCOME'],
                backgroundColor: ['#dc3545',],
              }
            ]
          };
          yearChart = new Chart(\$(\"#bar_inout\"), {
            type: 'bar',data: data,
            options: {
              scales: {y: {beginAtZero: true}},
              plugins: {
                tooltip: {
                  enabled: true,
                  usePointStyle: true,
                  callbacks: {
                    // To change title GenuisPro360°
//              title: (data) => { return data[0].parsed.x },
                    // To change label GenuisPro360°
                    label: (data) =>
                      {
                        return FormatEuro(data.raw)
                      }
                  },
                },
              },
            },
            });
          }
        else
          {
          myChart.data.datasets[0].data = [json['PIE_DATA']['INCOME'],json['PIE_DATA']['OUTCOME']];
          myChart.update();
          yearChart.data.datasets[0].data = json['YEAR_DATA']['INCOME'];
          yearChart.data.datasets[1].data = json['YEAR_DATA']['OUTCOME'];
          yearChart.update();
          }
      });
    }

  \$(document).ready(function () {
    /** Handle selection of a year */
    \$(\"#year\").on('change', function() {
      loadData();
    });
    loadData();

    /** Handle selection of report */
    \$(\"#report\").on('change', function() {
      var rep = \$(this).val();
      if(rep === \"\")
        {
        return;
        }
      var y = \$(\"#year\").val();
      window.location.href=rep+\"/\"+y;
    });
  });
</script>
{% endblock %}
", "kontomanager/report_overview.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/kontomanager/report_overview.html.twig");
    }
}
