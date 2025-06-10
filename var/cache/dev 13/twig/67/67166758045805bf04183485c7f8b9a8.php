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

/* freelancermanager/reporting_by_project.html.twig */
class __TwigTemplate_c2ecde01d20a4b79f39d92a9e89bdb9f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/reporting_by_project.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/reporting_by_project.html.twig"));

        $this->parent = $this->loadTemplate("InoFreelancerManager.html.twig", "freelancermanager/reporting_by_project.html.twig", 1);
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
          <li class=\"breadcrumb-item active h3\" aria-current=\"page\">Par projet sur une période</li>
        </ol>
      </nav>
    </div>
  </div>
  
  <div class=\"row\">
    <div class=\"col-xl-6 col-md-9 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <span>Veuillez sélectionner un projet et une période</span>
        </div>
        <div class=\"card-body\">
          <form method=\"post\" action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_report_by_project");
        echo "\" novalidate class=\"needs-validation\">
            <div class=\"form-floating mb-4\">
              <select name=\"fl_project\" id=\"fl_project\" class=\"form-select\" required>
                <option value=\"\"></option>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["PROJECTS_LIST"]) || array_key_exists("PROJECTS_LIST", $context) ? $context["PROJECTS_LIST"] : (function () { throw new RuntimeError('Variable "PROJECTS_LIST" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 31
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\"";
            if ((((array_key_exists("PROJECT_ID", $context)) ? (_twig_default_filter((isset($context["PROJECT_ID"]) || array_key_exists("PROJECT_ID", $context) ? $context["PROJECT_ID"] : (function () { throw new RuntimeError('Variable "PROJECT_ID" does not exist.', 31, $this->source); })()), 0)) : (0)) == twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 31))) {
                echo " selected";
            }
            echo ">
                    ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "projectName", [], "any", false, false, false, 32), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "refCustomer", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            echo "]
                  </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "              </select>
              <label for=\"fl_project\">Sélectionner un projet</label>
            </div>
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mb-4\">
                  <input type=\"date\" class=\"form-control\" name=\"fl_sd\" id=\"fl_sd\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["SD"]) || array_key_exists("SD", $context) ? $context["SD"] : (function () { throw new RuntimeError('Variable "SD" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "\" required>
                  <label for=\"fl_sd\">Du</label>
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-floating mb-4\">
                  <input type=\"date\" class=\"form-control\" name=\"fl_ed\" id=\"fl_ed\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["ED"]) || array_key_exists("ED", $context) ? $context["ED"] : (function () { throw new RuntimeError('Variable "ED" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "\" required>
                  <label for=\"fl_ed\">Au</label>
                </div>
              </div>
            </div>
  
            <button type=\"submit\" class=\"btn btn-primary\">
              <i class=\"fa-solid fa-magnifying-glass-chart\"></i> Afficher
            </button>
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_report_index");
        echo "'\">
              <i class=\"fa-solid fa-arrow-left\"></i> Retour
            </button>
  
            ";
        // line 61
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT_ENTRIES"]) || array_key_exists("PROJECT_ENTRIES", $context) ? $context["PROJECT_ENTRIES"] : (function () { throw new RuntimeError('Variable "PROJECT_ENTRIES" does not exist.', 61, $this->source); })()), "data", [], "array", false, false, false, 61))) {
            // line 62
            echo "            <button type=\"button\" class=\"btn btn-secondary btn_pdf\">
              <i class=\"fa-regular fa-file-pdf\"></i> Générer le PDF
            </button>
            ";
        }
        // line 66
        echo "          </form>
        </div>
      </div>
    </div>
  </div>
  
  ";
        // line 72
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT_ENTRIES"]) || array_key_exists("PROJECT_ENTRIES", $context) ? $context["PROJECT_ENTRIES"] : (function () { throw new RuntimeError('Variable "PROJECT_ENTRIES" does not exist.', 72, $this->source); })()), "data", [], "array", false, false, false, 72))) {
            // line 73
            echo "  <div class=\"row mt-4\">
    <div class=\"col\">
      <div class=\"card\">
        <div class=\"card-header\">
          <span class=\"font-weight-bold\">
            Il y a <strong>";
            // line 78
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT_ENTRIES"]) || array_key_exists("PROJECT_ENTRIES", $context) ? $context["PROJECT_ENTRIES"] : (function () { throw new RuntimeError('Variable "PROJECT_ENTRIES" does not exist.', 78, $this->source); })()), "data", [], "array", false, false, false, 78)), "html", null, true);
            echo "</strong> entrées entre <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, (isset($context["SD"]) || array_key_exists("SD", $context) ? $context["SD"] : (function () { throw new RuntimeError('Variable "SD" does not exist.', 78, $this->source); })())), "html", null, true);
            echo "</strong> et <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, (isset($context["ED"]) || array_key_exists("ED", $context) ? $context["ED"] : (function () { throw new RuntimeError('Variable "ED" does not exist.', 78, $this->source); })())), "html", null, true);
            echo "</strong> pour le projet <strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT_ENTRIES"]) || array_key_exists("PROJECT_ENTRIES", $context) ? $context["PROJECT_ENTRIES"] : (function () { throw new RuntimeError('Variable "PROJECT_ENTRIES" does not exist.', 78, $this->source); })()), "totals", [], "array", false, false, false, 78), "PROJECT", [], "array", false, false, false, 78), "html", null, true);
            echo "</strong>
          </span>
        </div>
        <div class=\"card-body\">
          <table class=\"table table-sm table-striped table-hover\">
            <thead>
              <tr>
                <th>Date</th>
                <th class=\"text-center\">Temps</th>
                <th class=\"text-end\">Revenu</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["PROJECT_ENTRIES"]) || array_key_exists("PROJECT_ENTRIES", $context) ? $context["PROJECT_ENTRIES"] : (function () { throw new RuntimeError('Variable "PROJECT_ENTRIES" does not exist.', 92, $this->source); })()), "data", [], "array", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["pe"]) {
                // line 93
                echo "              <tr>
                <td>";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["pe"], "ymd", [], "array", false, false, false, 94)), "html", null, true);
                echo "</td>
                <td class=\"text-center\">";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->formatWorkTime(twig_get_attribute($this->env, $this->source, $context["pe"], "work_time_in_secs", [], "array", false, false, false, 95)), "html", null, true);
                echo "</td>
                <td class=\"text-end";
                // line 96
                if ((twig_get_attribute($this->env, $this->source, $context["pe"], "no_reporting", [], "array", false, false, false, 96) == true)) {
                    echo " fst-italic";
                }
                echo "\">
                  ";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["pe"], "salary", [], "array", false, false, false, 97), "EUR"), "html", null, true);
                echo "
                </td>
                <td>
                  ";
                // line 100
                if ((twig_get_attribute($this->env, $this->source, $context["pe"], "record_type", [], "array", false, false, false, 100) == twig_constant("App\\Entity\\FlProjectEntries::RT_TRAVEL_ALLOWANCE"))) {
                    // line 101
                    echo "                    <span class=\"me-4\">Frais de déplacement</span>
                  ";
                }
                // line 103
                echo "                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pe"], "work_description", [], "array", false, false, false, 103), "html", null, true);
                echo "
                </td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "            </tbody>
            <tfoot>
              <tr>
                <td><b>Total :</b></td>
                <td><b>";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->formatWorkTime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT_ENTRIES"]) || array_key_exists("PROJECT_ENTRIES", $context) ? $context["PROJECT_ENTRIES"] : (function () { throw new RuntimeError('Variable "PROJECT_ENTRIES" does not exist.', 111, $this->source); })()), "totals", [], "array", false, false, false, 111), "WORK_TIME", [], "array", false, false, false, 111)), "html", null, true);
            echo "</b></td>
                <td class=\"text-end";
            // line 112
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT_ENTRIES"]) || array_key_exists("PROJECT_ENTRIES", $context) ? $context["PROJECT_ENTRIES"] : (function () { throw new RuntimeError('Variable "PROJECT_ENTRIES" does not exist.', 112, $this->source); })()), "totals", [], "array", false, false, false, 112), "NO_REPORTING", [], "array", false, false, false, 112) == true)) {
                echo " fst-italic";
            }
            echo "\">
                  <b>";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT_ENTRIES"]) || array_key_exists("PROJECT_ENTRIES", $context) ? $context["PROJECT_ENTRIES"] : (function () { throw new RuntimeError('Variable "PROJECT_ENTRIES" does not exist.', 113, $this->source); })()), "totals", [], "array", false, false, false, 113), "SALARY", [], "array", false, false, false, 113), "EUR"), "html", null, true);
            echo "</b>
                </td>
                <td>
                  ";
            // line 116
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT_ENTRIES"]) || array_key_exists("PROJECT_ENTRIES", $context) ? $context["PROJECT_ENTRIES"] : (function () { throw new RuntimeError('Variable "PROJECT_ENTRIES" does not exist.', 116, $this->source); })()), "totals", [], "array", false, false, false, 116), "NO_REPORTING", [], "array", false, false, false, 116) == false)) {
                // line 117
                echo "                    &nbsp;
                  ";
            } else {
                // line 119
                echo "                    <div class=\"small ms-2\">
                      (<span class=\"fst-italic\">Italique</span> = Total non comptabilisé)
                    </div>
                  ";
            }
            // line 123
            echo "                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <form method=\"post\" action=\"";
            // line 132
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf_report_by_project");
            echo "\" id=\"frm_pdf_report\">
    <input type=\"hidden\" name=\"pid\" value=\"";
            // line 133
            echo twig_escape_filter($this->env, (isset($context["PROJECT_ID"]) || array_key_exists("PROJECT_ID", $context) ? $context["PROJECT_ID"] : (function () { throw new RuntimeError('Variable "PROJECT_ID" does not exist.', 133, $this->source); })()), "html", null, true);
            echo "\">
    <input type=\"hidden\" name=\"sd\" value=\"";
            // line 134
            echo twig_escape_filter($this->env, (isset($context["SD"]) || array_key_exists("SD", $context) ? $context["SD"] : (function () { throw new RuntimeError('Variable "SD" does not exist.', 134, $this->source); })()), "html", null, true);
            echo "\">
    <input type=\"hidden\" name=\"ed\" value=\"";
            // line 135
            echo twig_escape_filter($this->env, (isset($context["ED"]) || array_key_exists("ED", $context) ? $context["ED"] : (function () { throw new RuntimeError('Variable "ED" does not exist.', 135, $this->source); })()), "html", null, true);
            echo "\">
  </form>
  ";
        }
        // line 138
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 140
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 141
        echo "  <script>
  \$(\".btn_pdf\").on('click', function() {
    \$(\"#frm_pdf_report\").submit();
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
        return "freelancermanager/reporting_by_project.html.twig";
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
        return array (  339 => 141,  329 => 140,  319 => 138,  313 => 135,  309 => 134,  305 => 133,  301 => 132,  290 => 123,  284 => 119,  280 => 117,  278 => 116,  272 => 113,  266 => 112,  262 => 111,  256 => 107,  245 => 103,  241 => 101,  239 => 100,  233 => 97,  227 => 96,  223 => 95,  219 => 94,  216 => 93,  212 => 92,  189 => 78,  182 => 73,  180 => 72,  172 => 66,  166 => 62,  164 => 61,  157 => 57,  145 => 48,  136 => 42,  127 => 35,  116 => 32,  107 => 31,  103 => 30,  96 => 26,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
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
          <li class=\"breadcrumb-item active h3\" aria-current=\"page\">Par projet sur une période</li>
        </ol>
      </nav>
    </div>
  </div>
  
  <div class=\"row\">
    <div class=\"col-xl-6 col-md-9 col-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <span>Veuillez sélectionner un projet et une période</span>
        </div>
        <div class=\"card-body\">
          <form method=\"post\" action=\"{{ path(\"fl_report_by_project\") }}\" novalidate class=\"needs-validation\">
            <div class=\"form-floating mb-4\">
              <select name=\"fl_project\" id=\"fl_project\" class=\"form-select\" required>
                <option value=\"\"></option>
                {% for p in PROJECTS_LIST %}
                  <option value=\"{{ p.id }}\"{% if PROJECT_ID|default(0) == p.id %} selected{% endif %}>
                    {{ p.projectName }} [{{ p.refCustomer.name }}]
                  </option>
                {% endfor %}
              </select>
              <label for=\"fl_project\">Sélectionner un projet</label>
            </div>
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mb-4\">
                  <input type=\"date\" class=\"form-control\" name=\"fl_sd\" id=\"fl_sd\" value=\"{{ SD }}\" required>
                  <label for=\"fl_sd\">Du</label>
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-floating mb-4\">
                  <input type=\"date\" class=\"form-control\" name=\"fl_ed\" id=\"fl_ed\" value=\"{{ ED }}\" required>
                  <label for=\"fl_ed\">Au</label>
                </div>
              </div>
            </div>
  
            <button type=\"submit\" class=\"btn btn-primary\">
              <i class=\"fa-solid fa-magnifying-glass-chart\"></i> Afficher
            </button>
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='{{ path(\"fl_report_index\") }}'\">
              <i class=\"fa-solid fa-arrow-left\"></i> Retour
            </button>
  
            {% if PROJECT_ENTRIES['data']|length %}
            <button type=\"button\" class=\"btn btn-secondary btn_pdf\">
              <i class=\"fa-regular fa-file-pdf\"></i> Générer le PDF
            </button>
            {% endif %}
          </form>
        </div>
      </div>
    </div>
  </div>
  
  {% if PROJECT_ENTRIES['data']|length %}
  <div class=\"row mt-4\">
    <div class=\"col\">
      <div class=\"card\">
        <div class=\"card-header\">
          <span class=\"font-weight-bold\">
            Il y a <strong>{{ PROJECT_ENTRIES['data']|length }}</strong> entrées entre <strong>{{ SD|format_date }}</strong> et <strong>{{ ED|format_date }}</strong> pour le projet <strong>{{ PROJECT_ENTRIES['totals']['PROJECT'] }}</strong>
          </span>
        </div>
        <div class=\"card-body\">
          <table class=\"table table-sm table-striped table-hover\">
            <thead>
              <tr>
                <th>Date</th>
                <th class=\"text-center\">Temps</th>
                <th class=\"text-end\">Revenu</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              {% for pe in PROJECT_ENTRIES['data'] %}
              <tr>
                <td>{{ pe['ymd']|format_date }}</td>
                <td class=\"text-center\">{{ pe['work_time_in_secs']|formatWorkTime }}</td>
                <td class=\"text-end{% if pe['no_reporting'] == true %} fst-italic{% endif %}\">
                  {{ pe['salary']|format_currency('EUR') }}
                </td>
                <td>
                  {% if pe['record_type'] == constant('App\\\\Entity\\\\FlProjectEntries::RT_TRAVEL_ALLOWANCE') %}
                    <span class=\"me-4\">Frais de déplacement</span>
                  {% endif %}
                  {{ pe['work_description'] }}
                </td>
              </tr>
              {% endfor %}
            </tbody>
            <tfoot>
              <tr>
                <td><b>Total :</b></td>
                <td><b>{{ PROJECT_ENTRIES['totals']['WORK_TIME']|formatWorkTime }}</b></td>
                <td class=\"text-end{% if PROJECT_ENTRIES['totals']['NO_REPORTING'] == true %} fst-italic{% endif %}\">
                  <b>{{ PROJECT_ENTRIES['totals']['SALARY']|format_currency('EUR') }}</b>
                </td>
                <td>
                  {% if PROJECT_ENTRIES['totals']['NO_REPORTING'] == false %}
                    &nbsp;
                  {% else %}
                    <div class=\"small ms-2\">
                      (<span class=\"fst-italic\">Italique</span> = Total non comptabilisé)
                    </div>
                  {% endif %}
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <form method=\"post\" action=\"{{ path(\"pdf_report_by_project\") }}\" id=\"frm_pdf_report\">
    <input type=\"hidden\" name=\"pid\" value=\"{{ PROJECT_ID }}\">
    <input type=\"hidden\" name=\"sd\" value=\"{{ SD }}\">
    <input type=\"hidden\" name=\"ed\" value=\"{{ ED }}\">
  </form>
  {% endif %}
  {% endblock %}
  
  {% block javascripts %}
  <script>
  \$(\".btn_pdf\").on('click', function() {
    \$(\"#frm_pdf_report\").submit();
  });
  </script>
  {% endblock %}
  ", "freelancermanager/reporting_by_project.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/freelancermanager/reporting_by_project.html.twig");
    }
}
