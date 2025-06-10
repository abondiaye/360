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

/* freelancermanager/index.html.twig */
class __TwigTemplate_70d37452397ecd23cd28c7f72fb857d5 extends Template
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
        return "InoFreelancerManager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/index.html.twig"));

        $this->parent = $this->loadTemplate("InoFreelancerManager.html.twig", "freelancermanager/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"row\">
    <div class=\"col-12\">
      <h3><i class=\"fa-solid fa-gauge fa-fw\"></i> Tableau de bord</h3>
    </div>
  </div>
  
  ";
        // line 10
        if (((isset($context["NO_CONFIG"]) || array_key_exists("NO_CONFIG", $context) ? $context["NO_CONFIG"] : (function () { throw new RuntimeError('Variable "NO_CONFIG" does not exist.', 10, $this->source); })()) == true)) {
            // line 11
            echo "  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"alert alert-warning\" role=\"alert\">
        Aucune configuration disponible – Veuillez d'abord <a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_configuration_form");
            echo "\" class=\"alert-link\">configurer l'application</a> !
      </div>
    </div>
  </div>
  ";
        } else {
            // line 19
            echo "  
  <div class=\"row\">
    <div class=\"col-xl-6 col-md-9 col-12\">
      <div class=\"card h-100\">
        <div class=\"card-body\">
          <div class=\"row align-items-center\">
            ";
            // line 25
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 25, $this->source); })()), "companyLogo", [], "any", false, false, false, 25))) {
                // line 26
                echo "              <div class=\"col-3\">
                <img src=\"data:";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 27, $this->source); })()), "companyLogoMimeType", [], "any", false, false, false, 27), "html", null, true);
                echo ";base64,";
                echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->Base64Encode(twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 27, $this->source); })()), "companyLogo", [], "any", false, false, false, 27)), "html", null, true);
                echo "\" class=\"img-fluid\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 27, $this->source); })()), "companyLogoName", [], "any", false, false, false, 27), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 27, $this->source); })()), "companyLogoName", [], "any", false, false, false, 27), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 27, $this->source); })()), "companyLogoSize", [], "any", false, false, false, 27)), "html", null, true);
                echo " octets)\">
              </div>
            ";
            }
            // line 30
            echo "            <div class=\"col border-end\">
              <h4>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 31, $this->source); })()), "companyName", [], "any", false, false, false, 31), "html", null, true);
            echo "</h4>
              ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 32, $this->source); })()), "companyStreet", [], "any", false, false, false, 32), "html", null, true);
            echo "<br>
              ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 33, $this->source); })()), "companyPostal", [], "any", false, false, false, 33), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 33, $this->source); })()), "companyCity", [], "any", false, false, false, 33), "html", null, true);
            echo "<br>
              ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 34, $this->source); })()), "companyCountry", [], "any", false, false, false, 34), "html", null, true);
            echo "<br>
              ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 35, $this->source); })()), "companyPhone", [], "any", false, false, false, 35), "html", null, true);
            echo "<br>
            </div>
            <div class=\"col\">
              <table class=\"table table-sm\">
                <tr>
                  <td>Clients (actifs) :</td>
                  <td class=\"text-end\">";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER_STATS"]) || array_key_exists("CUSTOMER_STATS", $context) ? $context["CUSTOMER_STATS"] : (function () { throw new RuntimeError('Variable "CUSTOMER_STATS" does not exist.', 41, $this->source); })()), "TOTAL", [], "array", false, false, false, 41)), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER_STATS"]) || array_key_exists("CUSTOMER_STATS", $context) ? $context["CUSTOMER_STATS"] : (function () { throw new RuntimeError('Variable "CUSTOMER_STATS" does not exist.', 41, $this->source); })()), "ACTIVE", [], "array", false, false, false, 41)), "html", null, true);
            echo ")</td>
                </tr>
                <tr>
                  <td>Projets :</td>
                  <td class=\"text-end\">";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber((isset($context["PROJECT_COUNT"]) || array_key_exists("PROJECT_COUNT", $context) ? $context["PROJECT_COUNT"] : (function () { throw new RuntimeError('Variable "PROJECT_COUNT" does not exist.', 45, $this->source); })())), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                  <td>Entrées projet :</td>
                  <td class=\"text-end\">";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber((isset($context["PRJ_ENTRY_COUNT"]) || array_key_exists("PRJ_ENTRY_COUNT", $context) ? $context["PRJ_ENTRY_COUNT"] : (function () { throw new RuntimeError('Variable "PRJ_ENTRY_COUNT" does not exist.', 49, $this->source); })())), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                  <td>Contrats de service :</td>
                  <td class=\"text-end\">";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber((isset($context["CONTRACT_COUNT"]) || array_key_exists("CONTRACT_COUNT", $context) ? $context["CONTRACT_COUNT"] : (function () { throw new RuntimeError('Variable "CONTRACT_COUNT" does not exist.', 53, $this->source); })())), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                  <td>Factures :</td>
                  <td class=\"text-end\">";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber((isset($context["INVOICE_COUNT"]) || array_key_exists("INVOICE_COUNT", $context) ? $context["INVOICE_COUNT"] : (function () { throw new RuntimeError('Variable "INVOICE_COUNT" does not exist.', 57, $this->source); })())), "html", null, true);
            echo "</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class=\"col\">
      <div class=\"card h-100\">
        <div class=\"card-body align-items-center\">
          <table class=\"table table-sm table-striped\">
            <caption>4 dernières entrées</caption>
            <tbody>
            ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["LAST_ENTRIES"]) || array_key_exists("LAST_ENTRIES", $context) ? $context["LAST_ENTRIES"] : (function () { throw new RuntimeError('Variable "LAST_ENTRIES" does not exist.', 72, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 73
                echo "              <tr>
                <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "entry_date", [], "any", false, false, false, 74)), "html", null, true);
                echo "</td>
                <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "customer_name", [], "any", false, false, false, 75), "html", null, true);
                echo "</td>
                <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "project_name", [], "any", false, false, false, 76), "html", null, true);
                echo "</td>
                <td class=\"text-end\">";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->formatWorkTime(twig_get_attribute($this->env, $this->source, $context["l"], "work_time_in_secs", [], "any", false, false, false, 77)), "html", null, true);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <div class=\"row mt-3\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-body\">
          <table class=\"table table-sm table-bordered pb-0 mb-0\">
            <thead>
              <tr>
                ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["THIS_YEAR_MONTH"]) || array_key_exists("THIS_YEAR_MONTH", $context) ? $context["THIS_YEAR_MONTH"] : (function () { throw new RuntimeError('Variable "THIS_YEAR_MONTH" does not exist.', 94, $this->source); })()));
            foreach ($context['_seq'] as $context["mi"] => $context["mmm"]) {
                // line 95
                echo "                  <th class=\"text-center showyyyymm mp_click";
                if (($context["mi"] == twig_date_format_filter($this->env, "now", "m"))) {
                    echo " bg-light";
                }
                echo "\" data-ym=\"";
                echo twig_escape_filter($this->env, (isset($context["CURRENT_YEAR"]) || array_key_exists("CURRENT_YEAR", $context) ? $context["CURRENT_YEAR"] : (function () { throw new RuntimeError('Variable "CURRENT_YEAR" does not exist.', 95, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber($context["mi"], ["min_integer_digit" => 2]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["mmm"], "html", null, true);
                echo "</th>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['mi'], $context['mmm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "              </tr>
            </thead>
            <tbody>
              <tr>
                ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["THIS_YEAR_MONTH"]) || array_key_exists("THIS_YEAR_MONTH", $context) ? $context["THIS_YEAR_MONTH"] : (function () { throw new RuntimeError('Variable "THIS_YEAR_MONTH" does not exist.', 101, $this->source); })()));
            foreach ($context['_seq'] as $context["mi"] => $context["mmm"]) {
                // line 102
                echo "                  <td class=\"text-center showyyyymm mp_click";
                if (($context["mi"] == twig_date_format_filter($this->env, "now", "m"))) {
                    echo " bg-light";
                }
                echo "\" data-ym=\"";
                echo twig_escape_filter($this->env, (isset($context["CURRENT_YEAR"]) || array_key_exists("CURRENT_YEAR", $context) ? $context["CURRENT_YEAR"] : (function () { throw new RuntimeError('Variable "CURRENT_YEAR" does not exist.', 102, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber($context["mi"], ["min_integer_digit" => 2]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["THIS_YEAR_SUM"]) || array_key_exists("THIS_YEAR_SUM", $context) ? $context["THIS_YEAR_SUM"] : (function () { throw new RuntimeError('Variable "THIS_YEAR_SUM" does not exist.', 102, $this->source); })()), $context["mi"], [], "array", false, false, false, 102), "EUR"), "html", null, true);
                echo "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['mi'], $context['mmm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "              </tr>
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
          <div class=\"card-title h3 text-center\">Chiffre d'affaires annuel</div>
          <canvas id=\"myChart\" width=\"100%\" height=\"20\"></canvas>
        </div>
      </div>
    </div>
  </div>
  
  ";
        }
        // line 124
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/chart.umd.js"), "html", null, true);
        echo "\"></script>
  <script>
  // Gestion du clic sur un mois
  \$(\".showyyyymm\").on('click', function() {
    var ym = \$(this).data('ym');
    fl_showEntriesFromMonth(ym);
  });
  
  \$(document).ready(function() {
    const ctx = \$('#myChart');
    const labels = ";
        // line 137
        echo json_encode((isset($context["LABELS"]) || array_key_exists("LABELS", $context) ? $context["LABELS"] : (function () { throw new RuntimeError('Variable "LABELS" does not exist.', 137, $this->source); })()));
        echo ";
    const values = ";
        // line 138
        echo json_encode((isset($context["VALUES"]) || array_key_exists("VALUES", $context) ? $context["VALUES"] : (function () { throw new RuntimeError('Variable "VALUES" does not exist.', 138, $this->source); })()));
        echo ";
    const myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: labels,
        datasets: [{
          label: 'Chiffre d\\'affaires en EUR',
          data: values,
          borderColor: 'rgb(50, 61, 83)',
          borderWidth: 1,
        }]
      },
      options: {
        locale: 'fr-FR',
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
                      label += new Intl.NumberFormat('fr-FR', {
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
        return "freelancermanager/index.html.twig";
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
        return array (  347 => 138,  343 => 137,  329 => 127,  319 => 126,  309 => 124,  287 => 104,  271 => 102,  267 => 101,  261 => 97,  245 => 95,  241 => 94,  225 => 80,  216 => 77,  212 => 76,  208 => 75,  204 => 74,  201 => 73,  197 => 72,  179 => 57,  172 => 53,  165 => 49,  158 => 45,  149 => 41,  140 => 35,  136 => 34,  130 => 33,  126 => 32,  122 => 31,  119 => 30,  105 => 27,  102 => 26,  100 => 25,  92 => 19,  84 => 14,  79 => 11,  77 => 10,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoFreelancerManager.html.twig' %}

  {% block body %}
  <div class=\"row\">
    <div class=\"col-12\">
      <h3><i class=\"fa-solid fa-gauge fa-fw\"></i> Tableau de bord</h3>
    </div>
  </div>
  
  {% if NO_CONFIG == true %}
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"alert alert-warning\" role=\"alert\">
        Aucune configuration disponible – Veuillez d'abord <a href=\"{{ path(\"fl_configuration_form\") }}\" class=\"alert-link\">configurer l'application</a> !
      </div>
    </div>
  </div>
  {% else %}
  
  <div class=\"row\">
    <div class=\"col-xl-6 col-md-9 col-12\">
      <div class=\"card h-100\">
        <div class=\"card-body\">
          <div class=\"row align-items-center\">
            {% if CONFIG.companyLogo is not null %}
              <div class=\"col-3\">
                <img src=\"data:{{ CONFIG.companyLogoMimeType }};base64,{{ CONFIG.companyLogo|Base64Encode }}\" class=\"img-fluid\" alt=\"{{ CONFIG.companyLogoName }}\" title=\"{{ CONFIG.companyLogoName }} ({{ CONFIG.companyLogoSize|format_number }} octets)\">
              </div>
            {% endif %}
            <div class=\"col border-end\">
              <h4>{{ CONFIG.companyName }}</h4>
              {{ CONFIG.companyStreet }}<br>
              {{ CONFIG.companyPostal }} {{ CONFIG.companyCity }}<br>
              {{ CONFIG.companyCountry }}<br>
              {{ CONFIG.companyPhone }}<br>
            </div>
            <div class=\"col\">
              <table class=\"table table-sm\">
                <tr>
                  <td>Clients (actifs) :</td>
                  <td class=\"text-end\">{{ CUSTOMER_STATS['TOTAL']|format_number }} ({{ CUSTOMER_STATS['ACTIVE']|format_number }})</td>
                </tr>
                <tr>
                  <td>Projets :</td>
                  <td class=\"text-end\">{{ PROJECT_COUNT|format_number }}</td>
                </tr>
                <tr>
                  <td>Entrées projet :</td>
                  <td class=\"text-end\">{{ PRJ_ENTRY_COUNT|format_number }}</td>
                </tr>
                <tr>
                  <td>Contrats de service :</td>
                  <td class=\"text-end\">{{ CONTRACT_COUNT|format_number }}</td>
                </tr>
                <tr>
                  <td>Factures :</td>
                  <td class=\"text-end\">{{ INVOICE_COUNT|format_number }}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class=\"col\">
      <div class=\"card h-100\">
        <div class=\"card-body align-items-center\">
          <table class=\"table table-sm table-striped\">
            <caption>4 dernières entrées</caption>
            <tbody>
            {% for l in LAST_ENTRIES %}
              <tr>
                <td>{{ l.entry_date|format_date }}</td>
                <td>{{ l.customer_name }}</td>
                <td>{{ l.project_name }}</td>
                <td class=\"text-end\">{{ l.work_time_in_secs|formatWorkTime }}</td>
              </tr>
            {% endfor %}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <div class=\"row mt-3\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-body\">
          <table class=\"table table-sm table-bordered pb-0 mb-0\">
            <thead>
              <tr>
                {% for mi,mmm in THIS_YEAR_MONTH %}
                  <th class=\"text-center showyyyymm mp_click{% if mi == \"now\"|date('m') %} bg-light{% endif %}\" data-ym=\"{{ CURRENT_YEAR }}{{ mi|format_number({min_integer_digit:2})}}\">{{ mmm }}</th>
                {% endfor %}
              </tr>
            </thead>
            <tbody>
              <tr>
                {% for mi,mmm in THIS_YEAR_MONTH %}
                  <td class=\"text-center showyyyymm mp_click{% if mi == \"now\"|date('m') %} bg-light{% endif %}\" data-ym=\"{{ CURRENT_YEAR }}{{ mi|format_number({min_integer_digit:2})}}\">{{ THIS_YEAR_SUM[mi]|format_currency('EUR') }}</td>
                {% endfor %}
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
          <div class=\"card-title h3 text-center\">Chiffre d'affaires annuel</div>
          <canvas id=\"myChart\" width=\"100%\" height=\"20\"></canvas>
        </div>
      </div>
    </div>
  </div>
  
  {% endif %}
  {% endblock %}
  
  {% block javascripts %}
  <script src=\"{{ asset('js/vendor/chart.umd.js') }}\"></script>
  <script>
  // Gestion du clic sur un mois
  \$(\".showyyyymm\").on('click', function() {
    var ym = \$(this).data('ym');
    fl_showEntriesFromMonth(ym);
  });
  
  \$(document).ready(function() {
    const ctx = \$('#myChart');
    const labels = {{ LABELS|json_encode|raw }};
    const values = {{ VALUES|json_encode|raw }};
    const myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: labels,
        datasets: [{
          label: 'Chiffre d\\'affaires en EUR',
          data: values,
          borderColor: 'rgb(50, 61, 83)',
          borderWidth: 1,
        }]
      },
      options: {
        locale: 'fr-FR',
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
                      label += new Intl.NumberFormat('fr-FR', {
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
  ", "freelancermanager/index.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/freelancermanager/index.html.twig");
    }
}
