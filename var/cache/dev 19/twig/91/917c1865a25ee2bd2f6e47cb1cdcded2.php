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

/* freelancermanager/reporting_index.html.twig */
class __TwigTemplate_0642128f0779dddd7065dcaf206aac34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/reporting_index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/reporting_index.html.twig"));

        $this->parent = $this->loadTemplate("InoFreelancerManager.html.twig", "freelancermanager/reporting_index.html.twig", 1);
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
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item h3\" aria-current=\"page\">
            <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_report_index");
        echo "\">
              <i class=\"fa-solid fa-chart-line fa-fw\"></i> Rapports
            </a>
          </li>
        </ol>
      </nav>
    </div>
  </div>
  
  <div class=\"row\">
    <div class=\"col-4 mb-3\">
      <div class=\"card h-100\">
        <div class=\"card-body text-center\">
          <form method=\"get\" action=\"#\" id=\"frm_fl_report_tools\">
            <div class=\"form-floating mb-4\">
              <select name=\"fl_report\" id=\"fl_report\" class=\"form-select\">
                <option value=\"\"></option>
                <option value=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_report_by_project");
        echo "\">Par projet sur une période</option>
              </select>
              <label for=\"fl_report\">Choisir un rapport</label>
            </div>
          </form>
          <p class=\"mb-0 pb-0 pt-2\">Chiffre d'affaires ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
          <h4>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((isset($context["SAL_YEAR"]) || array_key_exists("SAL_YEAR", $context) ? $context["SAL_YEAR"] : (function () { throw new RuntimeError('Variable "SAL_YEAR" does not exist.', 32, $this->source); })()), "EUR"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->formatWorkTimeLocalized((isset($context["WORKTIME_YEAR"]) || array_key_exists("WORKTIME_YEAR", $context) ? $context["WORKTIME_YEAR"] : (function () { throw new RuntimeError('Variable "WORKTIME_YEAR" does not exist.', 32, $this->source); })())), "html", null, true);
        echo ")</h4>
          <hr>
          <p class=\"mb-0 pb-0 pt-2\">Chiffre d'affaires ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["CURRENT_MONTH"]) || array_key_exists("CURRENT_MONTH", $context) ? $context["CURRENT_MONTH"] : (function () { throw new RuntimeError('Variable "CURRENT_MONTH" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</p>
          <h4>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((isset($context["SAL_MONTH"]) || array_key_exists("SAL_MONTH", $context) ? $context["SAL_MONTH"] : (function () { throw new RuntimeError('Variable "SAL_MONTH" does not exist.', 35, $this->source); })()), "EUR"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->formatWorkTimeLocalized((isset($context["WORKTIME_MONTH"]) || array_key_exists("WORKTIME_MONTH", $context) ? $context["WORKTIME_MONTH"] : (function () { throw new RuntimeError('Variable "WORKTIME_MONTH" does not exist.', 35, $this->source); })())), "html", null, true);
        echo ")</h4>
        </div>
      </div>
    </div>
  
    <div class=\"col-4 mb-3\">
      <div class=\"card h-100\">
        <div class=\"card-body\">
          <table class=\"table table-sm table-striped table-hover\">
            <caption>Résumé</caption>
            <tbody>
              <tr>
                <td>Utilisateur :</td>
                <td class=\"text-end\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "firstName", [], "any", false, false, false, 48), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "lastName", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <td>Entreprise :</td>
                <td class=\"text-end\">
                  ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["CONFIG"] ?? null), "companyName", [], "any", true, true, false, 53)) {
            // line 54
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 54, $this->source); })()), "companyName", [], "any", false, false, false, 54), "html", null, true);
            echo "
                  ";
        } else {
            // line 56
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_configuration_form");
            echo "\" class=\"text-danger\">Aucune configuration !</a>
                  ";
        }
        // line 58
        echo "                </td>
              </tr>
              <tr>
                <td>Projets :</td>
                <td class=\"text-end\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["OVERVIEW"]) || array_key_exists("OVERVIEW", $context) ? $context["OVERVIEW"] : (function () { throw new RuntimeError('Variable "OVERVIEW" does not exist.', 62, $this->source); })()), "projects", [], "array", false, false, false, 62)), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <td>Clients :</td>
                <td class=\"text-end\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["OVERVIEW"]) || array_key_exists("OVERVIEW", $context) ? $context["OVERVIEW"] : (function () { throw new RuntimeError('Variable "OVERVIEW" does not exist.', 66, $this->source); })()), "customers", [], "array", false, false, false, 66)), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <td>Entrées :</td>
                <td class=\"text-end\">";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["OVERVIEW"]) || array_key_exists("OVERVIEW", $context) ? $context["OVERVIEW"] : (function () { throw new RuntimeError('Variable "OVERVIEW" does not exist.', 70, $this->source); })()), "entries", [], "array", false, false, false, 70)), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <td>Entrées de / à :</td>
                <td class=\"text-end\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OVERVIEW"]) || array_key_exists("OVERVIEW", $context) ? $context["OVERVIEW"] : (function () { throw new RuntimeError('Variable "OVERVIEW" does not exist.', 74, $this->source); })()), "firstentry", [], "array", false, false, false, 74), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OVERVIEW"]) || array_key_exists("OVERVIEW", $context) ? $context["OVERVIEW"] : (function () { throw new RuntimeError('Variable "OVERVIEW" does not exist.', 74, $this->source); })()), "lastentry", [], "array", false, false, false, 74), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <td>Période d'enregistrement :</td>
                <td class=\"text-end\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OVERVIEW"]) || array_key_exists("OVERVIEW", $context) ? $context["OVERVIEW"] : (function () { throw new RuntimeError('Variable "OVERVIEW" does not exist.', 78, $this->source); })()), "myrange", [], "array", false, false, false, 78), "html", null, true);
        echo "</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  
    <div class=\"col-4 mb-3\">
      <div class=\"card h-100\">
        <div class=\"card-body\">
          <table class=\"table table-sm table-striped table-hover\">
            <caption>Statistiques globales</caption>
            <tbody>
              <tr>
                <td>Temps de travail total :</td>
                <td class=\"text-end\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->formatWorkTimeLocalized(twig_get_attribute($this->env, $this->source, (isset($context["TOTALS"]) || array_key_exists("TOTALS", $context) ? $context["TOTALS"] : (function () { throw new RuntimeError('Variable "TOTALS" does not exist.', 94, $this->source); })()), "total_seconds", [], "array", false, false, false, 94)), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <td>Revenus totaux :</td>
                <td class=\"text-end\">";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["TOTALS"]) || array_key_exists("TOTALS", $context) ? $context["TOTALS"] : (function () { throw new RuntimeError('Variable "TOTALS" does not exist.', 98, $this->source); })()), "total_salary", [], "array", false, false, false, 98), "EUR"), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <td>Taux horaire moyen :</td>
                <td class=\"text-end\">";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["TOTALS"]) || array_key_exists("TOTALS", $context) ? $context["TOTALS"] : (function () { throw new RuntimeError('Variable "TOTALS" does not exist.', 102, $this->source); })()), "AVG_HOURLY_RATE", [], "array", false, false, false, 102), "EUR"), "html", null, true);
        echo "</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <div class=\"row\">
    <div class=\"col-xl-6 col-12 mb-3\">
      <div class=\"card\">
        <div class=\"card-body\">
          <table class=\"table table-sm table-striped table-hover\">
            <caption>Top 10 projets par temps de travail</caption>
            <thead>
              <tr>
                <th>Nom du projet</th>
                <th>Client</th>
                <th class=\"text-end\">Temps total</th>
                <th class=\"text-end\">Revenus</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TOP_TIME"]) || array_key_exists("TOP_TIME", $context) ? $context["TOP_TIME"] : (function () { throw new RuntimeError('Variable "TOP_TIME" does not exist.', 126, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 127
            echo "                <tr>
                  <td>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "project_name", [], "any", false, false, false, 128), "html", null, true);
            echo "</td>
                  <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "customer_name", [], "any", false, false, false, 129), "html", null, true);
            echo "</td>
                  <td class=\"text-end\">";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->formatWorkTimeLocalized(twig_get_attribute($this->env, $this->source, $context["s"], "totsecs", [], "any", false, false, false, 130)), "html", null, true);
            echo "</td>
                  <td class=\"text-end\">";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["s"], "salary", [], "any", false, false, false, 131), "EUR"), "html", null, true);
            echo "</td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 134
            echo "                <tr>
                  <td colspan=\"4\">Aucune donnée disponible !</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "            </tbody>
          </table>
        </div>
      </div>
    </div>
  
    <div class=\"col-xl-6 col-12 mb-3\">
      <div class=\"card\">
        <div class=\"card-body\">
          <table class=\"table table-sm table-striped table-hover\">
            <caption>Top 10 projets par revenus</caption>
            <thead>
              <tr>
                <th>Nom du projet</th>
                <th>Client</th>
                <th class=\"text-end\">Temps total</th>
                <th class=\"text-end\">Revenus</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TOP_PAYED"]) || array_key_exists("TOP_PAYED", $context) ? $context["TOP_PAYED"] : (function () { throw new RuntimeError('Variable "TOP_PAYED" does not exist.', 158, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 159
            echo "                <tr>
                  <td>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "project_name", [], "any", false, false, false, 160), "html", null, true);
            echo "</td>
                  <td>";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "customer_name", [], "any", false, false, false, 161), "html", null, true);
            echo "</td>
                  <td class=\"text-end\">";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->formatWorkTimeLocalized(twig_get_attribute($this->env, $this->source, $context["s"], "totsecs", [], "any", false, false, false, 162)), "html", null, true);
            echo "</td>
                  <td class=\"text-end\">";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["s"], "salary", [], "any", false, false, false, 163), "EUR"), "html", null, true);
            echo "</td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 166
            echo "                <tr>
                  <td colspan=\"4\">Aucune donnée disponible !</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 178
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 179
        echo "  <script>
  \$(\"#fl_report\").on('change', function() {
    let url = \$(this).val();
    if(url !== \"\")
    {
      window.location.href = url;
    }
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
        return "freelancermanager/reporting_index.html.twig";
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
        return array (  379 => 179,  369 => 178,  353 => 170,  344 => 166,  336 => 163,  332 => 162,  328 => 161,  324 => 160,  321 => 159,  316 => 158,  294 => 138,  285 => 134,  277 => 131,  273 => 130,  269 => 129,  265 => 128,  262 => 127,  257 => 126,  230 => 102,  223 => 98,  216 => 94,  197 => 78,  188 => 74,  181 => 70,  174 => 66,  167 => 62,  161 => 58,  155 => 56,  149 => 54,  147 => 53,  137 => 48,  119 => 35,  115 => 34,  108 => 32,  104 => 31,  96 => 26,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoFreelancerManager.html.twig' %}

  {% block body %}
  <div class=\"row\">
    <div class=\"col-12\">
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item h3\" aria-current=\"page\">
            <a href=\"{{ path(\"fl_report_index\") }}\">
              <i class=\"fa-solid fa-chart-line fa-fw\"></i> Rapports
            </a>
          </li>
        </ol>
      </nav>
    </div>
  </div>
  
  <div class=\"row\">
    <div class=\"col-4 mb-3\">
      <div class=\"card h-100\">
        <div class=\"card-body text-center\">
          <form method=\"get\" action=\"#\" id=\"frm_fl_report_tools\">
            <div class=\"form-floating mb-4\">
              <select name=\"fl_report\" id=\"fl_report\" class=\"form-select\">
                <option value=\"\"></option>
                <option value=\"{{ path(\"fl_report_by_project\") }}\">Par projet sur une période</option>
              </select>
              <label for=\"fl_report\">Choisir un rapport</label>
            </div>
          </form>
          <p class=\"mb-0 pb-0 pt-2\">Chiffre d'affaires {{ \"now\"|date(\"Y\") }}</p>
          <h4>{{ SAL_YEAR|format_currency('EUR') }} ({{ WORKTIME_YEAR|formatWorkTimeLocalized }})</h4>
          <hr>
          <p class=\"mb-0 pb-0 pt-2\">Chiffre d'affaires {{ CURRENT_MONTH }}</p>
          <h4>{{ SAL_MONTH|format_currency('EUR') }} ({{ WORKTIME_MONTH|formatWorkTimeLocalized }})</h4>
        </div>
      </div>
    </div>
  
    <div class=\"col-4 mb-3\">
      <div class=\"card h-100\">
        <div class=\"card-body\">
          <table class=\"table table-sm table-striped table-hover\">
            <caption>Résumé</caption>
            <tbody>
              <tr>
                <td>Utilisateur :</td>
                <td class=\"text-end\">{{ app.user.firstName }} {{ app.user.lastName }}</td>
              </tr>
              <tr>
                <td>Entreprise :</td>
                <td class=\"text-end\">
                  {% if CONFIG.companyName is defined %}
                    {{ CONFIG.companyName }}
                  {% else %}
                    <a href=\"{{ path(\"fl_configuration_form\") }}\" class=\"text-danger\">Aucune configuration !</a>
                  {% endif %}
                </td>
              </tr>
              <tr>
                <td>Projets :</td>
                <td class=\"text-end\">{{ OVERVIEW['projects']|format_number }}</td>
              </tr>
              <tr>
                <td>Clients :</td>
                <td class=\"text-end\">{{ OVERVIEW['customers']|format_number }}</td>
              </tr>
              <tr>
                <td>Entrées :</td>
                <td class=\"text-end\">{{ OVERVIEW['entries']|format_number }}</td>
              </tr>
              <tr>
                <td>Entrées de / à :</td>
                <td class=\"text-end\">{{ OVERVIEW['firstentry'] }} - {{ OVERVIEW['lastentry'] }}</td>
              </tr>
              <tr>
                <td>Période d'enregistrement :</td>
                <td class=\"text-end\">{{ OVERVIEW['myrange'] }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  
    <div class=\"col-4 mb-3\">
      <div class=\"card h-100\">
        <div class=\"card-body\">
          <table class=\"table table-sm table-striped table-hover\">
            <caption>Statistiques globales</caption>
            <tbody>
              <tr>
                <td>Temps de travail total :</td>
                <td class=\"text-end\">{{ TOTALS['total_seconds']|formatWorkTimeLocalized }}</td>
              </tr>
              <tr>
                <td>Revenus totaux :</td>
                <td class=\"text-end\">{{ TOTALS['total_salary']|format_currency('EUR') }}</td>
              </tr>
              <tr>
                <td>Taux horaire moyen :</td>
                <td class=\"text-end\">{{ TOTALS['AVG_HOURLY_RATE']|format_currency('EUR') }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <div class=\"row\">
    <div class=\"col-xl-6 col-12 mb-3\">
      <div class=\"card\">
        <div class=\"card-body\">
          <table class=\"table table-sm table-striped table-hover\">
            <caption>Top 10 projets par temps de travail</caption>
            <thead>
              <tr>
                <th>Nom du projet</th>
                <th>Client</th>
                <th class=\"text-end\">Temps total</th>
                <th class=\"text-end\">Revenus</th>
              </tr>
            </thead>
            <tbody>
              {% for s in TOP_TIME %}
                <tr>
                  <td>{{ s.project_name }}</td>
                  <td>{{ s.customer_name }}</td>
                  <td class=\"text-end\">{{ s.totsecs|formatWorkTimeLocalized }}</td>
                  <td class=\"text-end\">{{ s.salary|format_currency('EUR') }}</td>
                </tr>
              {% else %}
                <tr>
                  <td colspan=\"4\">Aucune donnée disponible !</td>
                </tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  
    <div class=\"col-xl-6 col-12 mb-3\">
      <div class=\"card\">
        <div class=\"card-body\">
          <table class=\"table table-sm table-striped table-hover\">
            <caption>Top 10 projets par revenus</caption>
            <thead>
              <tr>
                <th>Nom du projet</th>
                <th>Client</th>
                <th class=\"text-end\">Temps total</th>
                <th class=\"text-end\">Revenus</th>
              </tr>
            </thead>
            <tbody>
              {% for s in TOP_PAYED %}
                <tr>
                  <td>{{ s.project_name }}</td>
                  <td>{{ s.customer_name }}</td>
                  <td class=\"text-end\">{{ s.totsecs|formatWorkTimeLocalized }}</td>
                  <td class=\"text-end\">{{ s.salary|format_currency('EUR') }}</td>
                </tr>
              {% else %}
                <tr>
                  <td colspan=\"4\">Aucune donnée disponible !</td>
                </tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  {% endblock %}
  
  {% block javascripts %}
  <script>
  \$(\"#fl_report\").on('change', function() {
    let url = \$(this).val();
    if(url !== \"\")
    {
      window.location.href = url;
    }
  });
  </script>
  {% endblock %}
  ", "freelancermanager/reporting_index.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/freelancermanager/reporting_index.html.twig");
    }
}
