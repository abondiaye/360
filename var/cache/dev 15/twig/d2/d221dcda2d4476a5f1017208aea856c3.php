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

/* freelancermanager/timetracking_form.html.twig */
class __TwigTemplate_8f50c496b7733b4b580ca8f5e71f3c62 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/timetracking_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/timetracking_form.html.twig"));

        $this->parent = $this->loadTemplate("InoFreelancerManager.html.twig", "freelancermanager/timetracking_form.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_time_form");
        echo "\"><i class=\"fa-solid fa-clock fa-fw\"></i> Saisie du temps</a>
          </li>
        </ol>
      </nav>
    </div>
  </div>
  
  <div class=\"row\">
    <div class=\"col\">
      <div class=\"card\">
        <div class=\"card-header\">
          <div class=\"row\">
            <div class=\"col d-flex align-items-center fw-bold\">
              ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, (isset($context["CURRENT_DATE"]) || array_key_exists("CURRENT_DATE", $context) ? $context["CURRENT_DATE"] : (function () { throw new RuntimeError('Variable "CURRENT_DATE" does not exist.', 22, $this->source); })()), "full", "none"), "html", null, true);
        echo "
            </div>
            <div class=\"col text-end\">
              <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_time_form");
        echo "\" class=\"btn btn-outline-secondary\" title=\"Revenir à aujourd'hui\">
                <i class=\"fa-solid fa-calendar-xmark\"></i>
              </a>
            </div>
          </div>
        </div>
  
        <div class=\"card-body\">
          <form method=\"post\" action=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_time_save");
        echo "\" id=\"frm_timecollect\">
            <input type=\"hidden\" name=\"entryid\" id=\"entryid\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", false, false, false, 34), 0)) : (0)), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"cdate\" id=\"cdate\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["CURRENT_DATE"]) || array_key_exists("CURRENT_DATE", $context) ? $context["CURRENT_DATE"] : (function () { throw new RuntimeError('Variable "CURRENT_DATE" does not exist.', 35, $this->source); })()), "Y-m-d"), "html", null, true);
        echo "\">
  
            <div class=\"form-floating\">
              <select class=\"form-select\" id=\"RefProjectId\" name=\"RefProjectId\" required=\"required\">
                <option value=\"\">--- Veuillez choisir ---</option>
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["PROJECTS_LIST"]) || array_key_exists("PROJECTS_LIST", $context) ? $context["PROJECTS_LIST"] : (function () { throw new RuntimeError('Variable "PROJECTS_LIST" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 41
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "refProject", [], "any", false, true, false, 41), "id", [], "any", true, true, false, 41) && (twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 41) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 41, $this->source); })()), "refProject", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)))) {
                echo " selected";
            }
            echo ">
                    ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "projectName", [], "any", false, false, false, 42), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "refCustomer", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
            echo ")
                  </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "              </select>
              <label for=\"RefProjectId\">Projet</label>
            </div>
  
            <div class=\"row mt-3\">
              <div class=\"col-xxl-3 col-md-6 col-12\">
                <div class=\"input-group\">
                  <span class=\"input-group-text\">Durée :</span>
                  <input type=\"text\" class=\"form-control text-end\" placeholder=\"Heures\" name=\"HH\" id=\"hh\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["DURATION_HH"]) || array_key_exists("DURATION_HH", $context) ? $context["DURATION_HH"] : (function () { throw new RuntimeError('Variable "DURATION_HH" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "\">
                  <span class=\"input-group-text\">:</span>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Minutes\" name=\"MM\" id=\"mm\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["DURATION_MM"]) || array_key_exists("DURATION_MM", $context) ? $context["DURATION_MM"] : (function () { throw new RuntimeError('Variable "DURATION_MM" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "\">
                </div>
              </div>
  
              <div class=\"col-auto d-flex align-items-center text-muted\">ou :</div>
  
              <div class=\"col-auto\">
                <label for=\"st\" class=\"col-form-label\">Heure de début :</label>
              </div>
              <div class=\"col-auto\">
                <input type=\"time\" class=\"form-control\" name=\"ST\" id=\"st\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["START_TIME"]) || array_key_exists("START_TIME", $context) ? $context["START_TIME"] : (function () { throw new RuntimeError('Variable "START_TIME" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "\">
              </div>
              <div class=\"col-auto\">
                <label for=\"et\" class=\"col-form-label\">Heure de fin :</label>
              </div>
              <div class=\"col-auto\">
                <input type=\"time\" class=\"form-control\" name=\"ET\" id=\"et\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["END_TIME"]) || array_key_exists("END_TIME", $context) ? $context["END_TIME"] : (function () { throw new RuntimeError('Variable "END_TIME" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "\">
              </div>
            </div>
  
            <div class=\"row mt-3\">
              <div class=\"col\">
                <div class=\"form-floating\">
                  <textarea class=\"form-control\" name=\"wdesc\" id=\"description\" style=\"height: 100px;\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 78, $this->source); })()), "workDescription", [], "any", false, false, false, 78), "html", null, true);
        echo "</textarea>
                  <label for=\"description\">Description de l’activité</label>
                </div>
              </div>
            </div>
  
            <div class=\"row mt-3\">
              <div class=\"col\">
                <button type=\"button\" class=\"btn btn-primary btn_time_save\">
                  <i class=\"far fa-save\"></i> Enregistrer
                </button>
  
                ";
        // line 90
        if (((twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", true, true, false, 90)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", false, false, false, 90), 0)) : (0))) {
            // line 91
            echo "                  <button type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_time_form", ["date" => twig_date_format_filter($this->env, (isset($context["CURRENT_DATE"]) || array_key_exists("CURRENT_DATE", $context) ? $context["CURRENT_DATE"] : (function () { throw new RuntimeError('Variable "CURRENT_DATE" does not exist.', 91, $this->source); })()), "Y-m-d")]), "html", null, true);
            echo "'\">
                    <i class=\"far fa-plus\"></i> Nouvel enregistrement
                  </button>
                  <button type=\"button\" class=\"btn btn-danger btn_time_del\">
                    <i class=\"fas fa-trash\"></i> Supprimer
                  </button>
                ";
        }
        // line 98
        echo "              </div>
            </div>
          </form>
        </div>
      </div>
  
      ";
        // line 104
        if (twig_length_filter($this->env, (isset($context["TODAY_ENTRIES"]) || array_key_exists("TODAY_ENTRIES", $context) ? $context["TODAY_ENTRIES"] : (function () { throw new RuntimeError('Variable "TODAY_ENTRIES" does not exist.', 104, $this->source); })()))) {
            // line 105
            echo "      <div class=\"card mt-3\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">
            ";
            // line 108
            if ((twig_length_filter($this->env, (isset($context["TODAY_ENTRIES"]) || array_key_exists("TODAY_ENTRIES", $context) ? $context["TODAY_ENTRIES"] : (function () { throw new RuntimeError('Variable "TODAY_ENTRIES" does not exist.', 108, $this->source); })())) == 1)) {
                // line 109
                echo "              1 enregistrement aujourd'hui
            ";
            } else {
                // line 111
                echo "              ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["TODAY_ENTRIES"]) || array_key_exists("TODAY_ENTRIES", $context) ? $context["TODAY_ENTRIES"] : (function () { throw new RuntimeError('Variable "TODAY_ENTRIES" does not exist.', 111, $this->source); })())), "html", null, true);
                echo " enregistrements aujourd'hui
            ";
            }
            // line 113
            echo "          </h5>
  
          <table class=\"table table-sm table-bordered table-striped\">
            <thead>
            <tr>
              <th>Client</th>
              <th>Projet</th>
              <th class=\"text-center\">Durée</th>
              <th class=\"text-end\">Gains</th>
              <th>Description</th>
            </tr>
            </thead>
  
            <tbody>
            ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["TODAY_ENTRIES"]) || array_key_exists("TODAY_ENTRIES", $context) ? $context["TODAY_ENTRIES"] : (function () { throw new RuntimeError('Variable "TODAY_ENTRIES" does not exist.', 127, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 128
                echo "            <tr>
              <td><a href=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_time_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 129)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "customer_name", [], "any", false, false, false, 129), "html", null, true);
                echo "</a></td>
              <td><a href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_time_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 130)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "project_name", [], "any", false, false, false, 130), "html", null, true);
                echo "</a></td>
              <td class=\"text-center\">
                <a href=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_time_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 132)]), "html", null, true);
                echo "\">
                  ";
                // line 133
                if ((twig_get_attribute($this->env, $this->source, $context["t"], "record_type", [], "any", false, false, false, 133) == twig_constant("App\\Entity\\FlProjectEntries::RT_PROJECT_ENTRY"))) {
                    // line 134
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->formatWorkTime(twig_get_attribute($this->env, $this->source, $context["t"], "work_time_in_secs", [], "any", false, false, false, 134)), "html", null, true);
                    echo "
                  ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 135
$context["t"], "record_type", [], "any", false, false, false, 135) == twig_constant("App\\Entity\\FlProjectEntries::RT_TRAVEL_ALLOWANCE"))) {
                    // line 136
                    echo "                    <small>Frais de déplacement</small>
                  ";
                }
                // line 138
                echo "                </a>
              </td>
              <td class=\"text-end\">";
                // line 140
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["t"], "salary", [], "any", false, false, false, 140), "EUR"), "html", null, true);
                echo "</td>
              <td><a href=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_time_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 141)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "work_description", [], "any", false, false, false, 141), "html", null, true);
                echo "</a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "            </tbody>
  
            <tfoot>
            <tr>
              <td colspan=\"2\" class=\"text-end fw-bold\">Total :</td>
              <td class=\"text-center fw-bold\">";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->formatWorkTime((isset($context["TODAY_TIME"]) || array_key_exists("TODAY_TIME", $context) ? $context["TODAY_TIME"] : (function () { throw new RuntimeError('Variable "TODAY_TIME" does not exist.', 149, $this->source); })())), "html", null, true);
            echo "</td>
              <td class=\"text-end fw-bold\">";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((isset($context["TODAY_SUM"]) || array_key_exists("TODAY_SUM", $context) ? $context["TODAY_SUM"] : (function () { throw new RuntimeError('Variable "TODAY_SUM" does not exist.', 150, $this->source); })()), "EUR"), "html", null, true);
            echo "</td>
            </tr>
            </tfoot>
  
          </table>
        </div>
      </div>
      ";
        }
        // line 158
        echo "    </div>
  
    <div class=\"col-3\">
      ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["CALENDAR"]) || array_key_exists("CALENDAR", $context) ? $context["CALENDAR"] : (function () { throw new RuntimeError('Variable "CALENDAR" does not exist.', 161, $this->source); })()));
        foreach ($context['_seq'] as $context["year"] => $context["m"]) {
            // line 162
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["m"]);
            foreach ($context['_seq'] as $context["mon"] => $context["cal"]) {
                // line 163
                echo "        <table class=\"table table-sm table-bordered\">
          <caption>";
                // line 164
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_sprintf("%04d-%02d-01", $context["year"], $context["mon"]), "medium", "MMMM Y"), "html", null, true);
                echo "</caption>
          <thead>
          <tr>
            <th>Sem</th><th>Lun</th><th>Mar</th><th>Mer</th><th>Jeu</th><th>Ven</th><th>Sam</th><th>Dim</th>
          </tr>
          </thead>
  
          <tbody>
          ";
                // line 172
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["cal"]);
                foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                    // line 173
                    echo "            <tr>
            ";
                    // line 174
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["r"]);
                    foreach ($context['_seq'] as $context["i"] => $context["d"]) {
                        // line 175
                        echo "              ";
                        if (($context["i"] > 0)) {
                            // line 176
                            echo "                ";
                            $context["day"] = $this->env->getRuntime('App\Twig\AppRuntime')->calcClasses($context["d"], $context["year"], $context["mon"], (isset($context["EVENTS"]) || array_key_exists("EVENTS", $context) ? $context["EVENTS"] : (function () { throw new RuntimeError('Variable "EVENTS" does not exist.', 176, $this->source); })()));
                            // line 177
                            echo "              ";
                        } else {
                            // line 178
                            echo "                ";
                            $context["day"] = ["CSS_CLASSES" => "", "DAY" => ""];
                            // line 179
                            echo "              ";
                        }
                        // line 180
                        echo "              <td class=\"text-center";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 180, $this->source); })()), "CSS_CLASSES", [], "array", false, false, false, 180), "html", null, true);
                        echo "\">
                ";
                        // line 181
                        if (($context["i"] > 0)) {
                            // line 182
                            echo "                  <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_time_form", ["date" => twig_get_attribute($this->env, $this->source, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 182, $this->source); })()), "DAY", [], "array", false, false, false, 182)]), "html", null, true);
                            echo "\" class=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 182, $this->source); })()), "CSS_CLASSES", [], "array", false, false, false, 182), "html", null, true);
                            echo "\" title=\"Aller au ";
                            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 182, $this->source); })()), "DAY", [], "array", false, false, false, 182)), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["d"], "html", null, true);
                            echo "</a>
                ";
                        } else {
                            // line 184
                            echo "                  ";
                            echo twig_escape_filter($this->env, $context["d"], "html", null, true);
                            echo "
                ";
                        }
                        // line 186
                        echo "              </td>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['i'], $context['d'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    echo "            </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                echo "          </tbody>
  
        </table>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['mon'], $context['cal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['year'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "    </div>
  </div>
  
  <form method=\"post\" action=\"";
        // line 198
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_time_delete");
        echo "\" id=\"frm_time_del\">
    <input type=\"hidden\" name=\"ENTRYID\" value=\"";
        // line 199
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", true, true, false, 199)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", false, false, false, 199), 0)) : (0)), "html", null, true);
        echo "\">
  </form>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 203
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 204
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/fl_time_tracking.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "freelancermanager/timetracking_form.html.twig";
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
        return array (  485 => 204,  475 => 203,  462 => 199,  458 => 198,  453 => 195,  447 => 194,  438 => 190,  431 => 188,  424 => 186,  418 => 184,  406 => 182,  404 => 181,  399 => 180,  396 => 179,  393 => 178,  390 => 177,  387 => 176,  384 => 175,  380 => 174,  377 => 173,  373 => 172,  362 => 164,  359 => 163,  354 => 162,  350 => 161,  345 => 158,  334 => 150,  330 => 149,  323 => 144,  312 => 141,  308 => 140,  304 => 138,  300 => 136,  298 => 135,  293 => 134,  291 => 133,  287 => 132,  280 => 130,  274 => 129,  271 => 128,  267 => 127,  251 => 113,  245 => 111,  241 => 109,  239 => 108,  234 => 105,  232 => 104,  224 => 98,  213 => 91,  211 => 90,  196 => 78,  186 => 71,  177 => 65,  164 => 55,  159 => 53,  149 => 45,  138 => 42,  129 => 41,  125 => 40,  117 => 35,  113 => 34,  109 => 33,  98 => 25,  92 => 22,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
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
            <a href=\"{{ path(\"fl_time_form\") }}\"><i class=\"fa-solid fa-clock fa-fw\"></i> Saisie du temps</a>
          </li>
        </ol>
      </nav>
    </div>
  </div>
  
  <div class=\"row\">
    <div class=\"col\">
      <div class=\"card\">
        <div class=\"card-header\">
          <div class=\"row\">
            <div class=\"col d-flex align-items-center fw-bold\">
              {{ CURRENT_DATE|format_datetime('full','none') }}
            </div>
            <div class=\"col text-end\">
              <a href=\"{{ path(\"fl_time_form\") }}\" class=\"btn btn-outline-secondary\" title=\"Revenir à aujourd'hui\">
                <i class=\"fa-solid fa-calendar-xmark\"></i>
              </a>
            </div>
          </div>
        </div>
  
        <div class=\"card-body\">
          <form method=\"post\" action=\"{{ path(\"fl_time_save\") }}\" id=\"frm_timecollect\">
            <input type=\"hidden\" name=\"entryid\" id=\"entryid\" value=\"{{ ENTRY.id|default(0) }}\">
            <input type=\"hidden\" name=\"cdate\" id=\"cdate\" value=\"{{ CURRENT_DATE|date('Y-m-d') }}\">
  
            <div class=\"form-floating\">
              <select class=\"form-select\" id=\"RefProjectId\" name=\"RefProjectId\" required=\"required\">
                <option value=\"\">--- Veuillez choisir ---</option>
                {% for p in PROJECTS_LIST %}
                  <option value=\"{{ p.id }}\"{% if ENTRY.refProject.id is defined and p.id == ENTRY.refProject.id %} selected{% endif %}>
                    {{ p.projectName }} ({{ p.refCustomer.name }})
                  </option>
                {% endfor %}
              </select>
              <label for=\"RefProjectId\">Projet</label>
            </div>
  
            <div class=\"row mt-3\">
              <div class=\"col-xxl-3 col-md-6 col-12\">
                <div class=\"input-group\">
                  <span class=\"input-group-text\">Durée :</span>
                  <input type=\"text\" class=\"form-control text-end\" placeholder=\"Heures\" name=\"HH\" id=\"hh\" value=\"{{ DURATION_HH }}\">
                  <span class=\"input-group-text\">:</span>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Minutes\" name=\"MM\" id=\"mm\" value=\"{{ DURATION_MM }}\">
                </div>
              </div>
  
              <div class=\"col-auto d-flex align-items-center text-muted\">ou :</div>
  
              <div class=\"col-auto\">
                <label for=\"st\" class=\"col-form-label\">Heure de début :</label>
              </div>
              <div class=\"col-auto\">
                <input type=\"time\" class=\"form-control\" name=\"ST\" id=\"st\" value=\"{{ START_TIME }}\">
              </div>
              <div class=\"col-auto\">
                <label for=\"et\" class=\"col-form-label\">Heure de fin :</label>
              </div>
              <div class=\"col-auto\">
                <input type=\"time\" class=\"form-control\" name=\"ET\" id=\"et\" value=\"{{ END_TIME }}\">
              </div>
            </div>
  
            <div class=\"row mt-3\">
              <div class=\"col\">
                <div class=\"form-floating\">
                  <textarea class=\"form-control\" name=\"wdesc\" id=\"description\" style=\"height: 100px;\">{{ ENTRY.workDescription }}</textarea>
                  <label for=\"description\">Description de l’activité</label>
                </div>
              </div>
            </div>
  
            <div class=\"row mt-3\">
              <div class=\"col\">
                <button type=\"button\" class=\"btn btn-primary btn_time_save\">
                  <i class=\"far fa-save\"></i> Enregistrer
                </button>
  
                {% if ENTRY.id|default(0) %}
                  <button type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href='{{ path(\"fl_time_form\",{'date':CURRENT_DATE|date('Y-m-d')}) }}'\">
                    <i class=\"far fa-plus\"></i> Nouvel enregistrement
                  </button>
                  <button type=\"button\" class=\"btn btn-danger btn_time_del\">
                    <i class=\"fas fa-trash\"></i> Supprimer
                  </button>
                {% endif %}
              </div>
            </div>
          </form>
        </div>
      </div>
  
      {% if TODAY_ENTRIES|length %}
      <div class=\"card mt-3\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">
            {% if TODAY_ENTRIES|length == 1 %}
              1 enregistrement aujourd'hui
            {% else %}
              {{ TODAY_ENTRIES|length }} enregistrements aujourd'hui
            {% endif %}
          </h5>
  
          <table class=\"table table-sm table-bordered table-striped\">
            <thead>
            <tr>
              <th>Client</th>
              <th>Projet</th>
              <th class=\"text-center\">Durée</th>
              <th class=\"text-end\">Gains</th>
              <th>Description</th>
            </tr>
            </thead>
  
            <tbody>
            {% for t in TODAY_ENTRIES %}
            <tr>
              <td><a href=\"{{ path(\"fl_time_edit\",{'id':t.id}) }}\">{{ t.customer_name }}</a></td>
              <td><a href=\"{{ path(\"fl_time_edit\",{'id':t.id}) }}\">{{ t.project_name }}</a></td>
              <td class=\"text-center\">
                <a href=\"{{ path(\"fl_time_edit\",{'id':t.id}) }}\">
                  {% if t.record_type == constant('App\\\\Entity\\\\FlProjectEntries::RT_PROJECT_ENTRY') %}
                    {{ t.work_time_in_secs|formatWorkTime }}
                  {% elseif t.record_type == constant('App\\\\Entity\\\\FlProjectEntries::RT_TRAVEL_ALLOWANCE') %}
                    <small>Frais de déplacement</small>
                  {% endif %}
                </a>
              </td>
              <td class=\"text-end\">{{ t.salary|format_currency('EUR') }}</td>
              <td><a href=\"{{ path(\"fl_time_edit\",{'id':t.id}) }}\">{{ t.work_description }}</a></td>
            </tr>
            {% endfor %}
            </tbody>
  
            <tfoot>
            <tr>
              <td colspan=\"2\" class=\"text-end fw-bold\">Total :</td>
              <td class=\"text-center fw-bold\">{{ TODAY_TIME|formatWorkTime }}</td>
              <td class=\"text-end fw-bold\">{{ TODAY_SUM|format_currency('EUR') }}</td>
            </tr>
            </tfoot>
  
          </table>
        </div>
      </div>
      {% endif %}
    </div>
  
    <div class=\"col-3\">
      {% for year,m in CALENDAR %}
        {% for mon,cal in m %}
        <table class=\"table table-sm table-bordered\">
          <caption>{{ \"%04d-%02d-01\"|format(year,mon)|format_date(pattern='MMMM Y') }}</caption>
          <thead>
          <tr>
            <th>Sem</th><th>Lun</th><th>Mar</th><th>Mer</th><th>Jeu</th><th>Ven</th><th>Sam</th><th>Dim</th>
          </tr>
          </thead>
  
          <tbody>
          {% for r in cal %}
            <tr>
            {% for i,d in r %}
              {% if i > 0 %}
                {% set day = d|calcClasses(year,mon,EVENTS) %}
              {% else %}
                {% set day = {\"CSS_CLASSES\":\"\",\"DAY\":\"\"} %}
              {% endif %}
              <td class=\"text-center{{ day['CSS_CLASSES'] }}\">
                {% if i > 0 %}
                  <a href=\"{{ path(\"fl_time_form\",{'date':day['DAY']}) }}\" class=\"{{ day['CSS_CLASSES'] }}\" title=\"Aller au {{ day['DAY']|format_date }}\">{{ d }}</a>
                {% else %}
                  {{ d }}
                {% endif %}
              </td>
            {% endfor %}
            </tr>
          {% endfor %}
          </tbody>
  
        </table>
        {% endfor %}
      {% endfor %}
    </div>
  </div>
  
  <form method=\"post\" action=\"{{ path(\"fl_time_delete\") }}\" id=\"frm_time_del\">
    <input type=\"hidden\" name=\"ENTRYID\" value=\"{{ ENTRY.id|default(0) }}\">
  </form>
  {% endblock %}
  
  {% block javascripts %}
  <script src=\"{{ asset(\"js/fl_time_tracking.js\") }}\"></script>
  {% endblock %}
  ", "freelancermanager/timetracking_form.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/freelancermanager/timetracking_form.html.twig");
    }
}
