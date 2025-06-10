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

/* kontomanager/list.html.twig */
class __TwigTemplate_463fadc522d78129feb16d3c1c663e92 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/list.html.twig"));

        $this->parent = $this->loadTemplate("InoKontoManager.html.twig", "kontomanager/list.html.twig", 1);
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
  <div class=\"col-12\">
    <div class=\"card-title h3\">Kontoübersicht</div>
  </div>
</div>
<form method=\"post\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_list");
        echo "\" id=\"frm_acc_list_filter\" class=\"row gx-1\">
<div class=\"row g-1\">
  <div class=\"col-xxl-2 col-3\">
    <select name=\"f_cat\" id=\"f_cat\" class=\"form-select ino-select2\" data-minimum-results-for-search=\"Infinity\">
      <option value=\"-1\">Alle Kategorien</option>
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["CATEGORYLIST"]) || array_key_exists("CATEGORYLIST", $context) ? $context["CATEGORYLIST"] : (function () { throw new RuntimeError('Variable "CATEGORYLIST" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["cid"] => $context["cn"]) {
            // line 14
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cn"], "id", [], "array", false, false, false, 14), "html", null, true);
            echo "\"";
            if (((isset($context["F_CATEGORY"]) || array_key_exists("F_CATEGORY", $context) ? $context["F_CATEGORY"] : (function () { throw new RuntimeError('Variable "F_CATEGORY" does not exist.', 14, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["cn"], "id", [], "array", false, false, false, 14))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cn"], "name", [], "array", false, false, false, 14), "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cid'], $context['cn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </select>
  </div>
  <div class=\"col-xxl-2 col-2\">
    <select name=\"f_month\" id=\"f_month\" class=\"form-select ino-select2\" data-minimum-results-for-search=\"Infinity\">
      <option value=\"-1\">Alle Monate</option>
      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["MONTHLIST"]) || array_key_exists("MONTHLIST", $context) ? $context["MONTHLIST"] : (function () { throw new RuntimeError('Variable "MONTHLIST" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["mid"] => $context["mon"]) {
            // line 22
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["mid"], "html", null, true);
            echo "\"";
            if (((isset($context["F_MONTH"]) || array_key_exists("F_MONTH", $context) ? $context["F_MONTH"] : (function () { throw new RuntimeError('Variable "F_MONTH" does not exist.', 22, $this->source); })()) == $context["mid"])) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["mon"], "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['mid'], $context['mon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </select>
  </div>
  <div class=\"col-xxl-2 col-2\">
    <select name=\"f_year\" id=\"f_year\" class=\"form-select ino-select2\" data-minimum-results-for-search=\"Infinity\">
      <option value=\"-1\">Alle Jahre</option>
      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["YEARLIST"]) || array_key_exists("YEARLIST", $context) ? $context["YEARLIST"] : (function () { throw new RuntimeError('Variable "YEARLIST" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["y"]) {
            // line 30
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["y"], "html", null, true);
            echo "\"";
            if (((isset($context["F_YEAR"]) || array_key_exists("F_YEAR", $context) ? $context["F_YEAR"] : (function () { throw new RuntimeError('Variable "F_YEAR" does not exist.', 30, $this->source); })()) == $context["y"])) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["y"], "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['y'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </select>
  </div>
  <div class=\"col-xxl-2 col-2\">
    <input type=\"text\" name=\"f_srch\" id=\"f_srch\" class=\"form-control\" value=\"\" placeholder=\"Suchen nach...\">
  </div>
  <div class=\"col-xxl-2 col-3\">
    <button type=\"submit\" name=\"btn_filter\" id=\"btn_filter\" class=\"btn btn-outline-secondary g-0\"><i class=\"fa fa-filter\"></i></button>
    <button type=\"button\" name=\"btn_pdf\" id=\"btn_pdf\" class=\"btn btn-outline-secondary g-0\"><i class=\"fa-solid fa-print\"></i></button>
    <button type=\"button\" name=\"btn_delete\" id=\"btn_delete\" class=\"btn btn-outline-danger g-0\" disabled><i class=\"fa fa-trash\"></i></button>
  </div>
</div>
</form>
<form method=\"post\" action=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_print");
        echo "\" id=\"frm_pdf\">
  <input type=\"hidden\" name=\"f_cat\" id=\"pdf_cat\" value=\"\">
  <input type=\"hidden\" name=\"f_month\" id=\"pdf_month\" value=\"\">
  <input type=\"hidden\" name=\"f_year\" id=\"pdf_year\" value=\"\">
  <input type=\"hidden\" name=\"f_search\" id=\"pdf_search\" value=\"\">
</form>
<form method=\"post\" action=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_accListDel");
        echo "\" id=\"frm_acc_list_table\">
  <div class=\"row mt-3\">
    <div class=\"col-xxl-10 col-12\">
      <p>Zeige ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber((isset($context["DATA_COUNT"]) || array_key_exists("DATA_COUNT", $context) ? $context["DATA_COUNT"] : (function () { throw new RuntimeError('Variable "DATA_COUNT" does not exist.', 53, $this->source); })())), "html", null, true);
        echo " von ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber((isset($context["TOTAL_COUNT"]) || array_key_exists("TOTAL_COUNT", $context) ? $context["TOTAL_COUNT"] : (function () { throw new RuntimeError('Variable "TOTAL_COUNT" does not exist.', 53, $this->source); })())), "html", null, true);
        echo " Einträge(n) | Einnahmen: <span class=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 53, $this->source); })()), "INCOME", [], "array", false, false, false, 53)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 53, $this->source); })()), "INCOME", [], "array", false, false, false, 53), "EUR"), "html", null, true);
        echo "</span> | Ausgaben: <span class=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 53, $this->source); })()), "OUTCOME", [], "array", false, false, false, 53)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 53, $this->source); })()), "OUTCOME", [], "array", false, false, false, 53), "EUR"), "html", null, true);
        echo "</span> | Diff.: <span class=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 53, $this->source); })()), "DIFF", [], "array", false, false, false, 53)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 53, $this->source); })()), "DIFF", [], "array", false, false, false, 53), "EUR"), "html", null, true);
        echo "</span></p>
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\" id=\"tbl_account_data\">
        <thead>
        <tr>
          <th>&nbsp;</th>
          <th>Datum</th>
          <th>Kategorie</th>
          <th>Buchungstext</th>
          <th class=\"text-end\">Summe</th>
          <th class=\"text-end\">Bank</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["DATA"]) || array_key_exists("DATA", $context) ? $context["DATA"] : (function () { throw new RuntimeError('Variable "DATA" does not exist.', 67, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 68
            echo "        <tr id=\"R";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "id", [], "array", false, false, false, 68), "html", null, true);
            echo "\">
          <td><div><input class=\"form-check-input chk_delete\" type=\"checkbox\" id=\"chk_";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "id", [], "array", false, false, false, 69), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "id", [], "array", false, false, false, 69), "html", null, true);
            echo "\" aria-label=\"Eintrag löschen\" name=\"ACC_REMOVAL[]\"></div></td>
          <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "dt", [], "array", false, false, false, 70), "html", null, true);
            echo "</td>
          <td class=\"catchanger mp_click\" data-id=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "id", [], "array", false, false, false, 71), "html", null, true);
            echo "\" data-catid=\"";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "catid", [], "array", false, false, false, 71)), "html", null, true);
            echo "\">";
            if (twig_get_attribute($this->env, $this->source, $context["d"], "catid", [], "array", false, false, false, 71)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "category_name", [], "array", false, false, false, 71), "html", null, true);
            } else {
                echo "<span class=\"fst-italic\">Keine Kategorie</span>";
            }
            echo "</td>
          <td class=\"details mp_click\" data-url=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_accForm", ["id" => twig_get_attribute($this->env, $this->source, $context["d"], "id", [], "array", false, false, false, 72)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "description", [], "array", false, false, false, 72), "html", null, true);
            echo "</td>
          <td class=\"text-end ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, $context["d"], "amount", [], "array", false, false, false, 73)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["d"], "amount", [], "array", false, false, false, 73), "EUR", array(), "de"), "html", null, true);
            echo "</td>
          <td class=\"text-end\">";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, $context["d"], "logo_name", [], "array", false, false, false, 74) == "")) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "bank_shortcut", [], "array", false, false, false, 74), "html", null, true);
            } else {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "logo_name", [], "array", false, false, false, 74), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "bank_shortcut", [], "array", false, false, false, 74), "html", null, true);
                echo "\">";
            }
            echo "</td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            echo "        <tr>
          <td colspan=\"6\" class=\"text-center fst-italic fw-bold\">Keine Daten gefunden!</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </tbody>
        </table>
        <p>Zeige ";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber((isset($context["DATA_COUNT"]) || array_key_exists("DATA_COUNT", $context) ? $context["DATA_COUNT"] : (function () { throw new RuntimeError('Variable "DATA_COUNT" does not exist.', 83, $this->source); })())), "html", null, true);
        echo " von ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber((isset($context["TOTAL_COUNT"]) || array_key_exists("TOTAL_COUNT", $context) ? $context["TOTAL_COUNT"] : (function () { throw new RuntimeError('Variable "TOTAL_COUNT" does not exist.', 83, $this->source); })())), "html", null, true);
        echo " Einträge(n) | Einnahmen: <span class=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 83, $this->source); })()), "INCOME", [], "array", false, false, false, 83)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 83, $this->source); })()), "INCOME", [], "array", false, false, false, 83), "EUR"), "html", null, true);
        echo "</span> | Ausgaben: <span class=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 83, $this->source); })()), "OUTCOME", [], "array", false, false, false, 83)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 83, $this->source); })()), "OUTCOME", [], "array", false, false, false, 83), "EUR"), "html", null, true);
        echo "</span> | Diff.: <span class=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->MoneyColor(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 83, $this->source); })()), "DIFF", [], "array", false, false, false, 83)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["REVENUE"]) || array_key_exists("REVENUE", $context) ? $context["REVENUE"] : (function () { throw new RuntimeError('Variable "REVENUE" does not exist.', 83, $this->source); })()), "DIFF", [], "array", false, false, false, 83), "EUR", array(), "de"), "html", null, true);
        echo "</span></p>
      </div>
    </div>
  </div>
</form>
<div class=\"modal fade\" tabindex=\"-1\" id=\"modal_catchange\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Kategorie ändern</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
        <form method=\"post\" action=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_catSaver");
        echo "\" id=\"frm_catchange\">
          <input type=\"hidden\" name=\"accid\" id=\"accid\" value=\"\">
          <div>
            <select class=\"form-select\" aria-label=\"Kategorie anpassen\" name=\"newcat\" id=\"newcat\">
            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["CATEGORYLIST"]) || array_key_exists("CATEGORYLIST", $context) ? $context["CATEGORYLIST"] : (function () { throw new RuntimeError('Variable "CATEGORYLIST" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["cid"] => $context["cn"]) {
            // line 101
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cn"], "id", [], "array", false, false, false, 101), "html", null, true);
            echo "\"";
            if (((isset($context["F_CATEGORY"]) || array_key_exists("F_CATEGORY", $context) ? $context["F_CATEGORY"] : (function () { throw new RuntimeError('Variable "F_CATEGORY" does not exist.', 101, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["cn"], "id", [], "array", false, false, false, 101))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cn"], "name", [], "array", false, false, false, 101), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cid'], $context['cn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "            </select>
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-primary\" form=\"frm_catchange\"><i class=\"fa-solid fa-floppy-disk\"></i> Speichern</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\"><i class=\"fa-solid fa-xmark\"></i> Abbruch</button>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/km_list.js"), "html", null, true);
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
        return "kontomanager/list.html.twig";
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
        return array (  377 => 116,  367 => 115,  346 => 103,  331 => 101,  327 => 100,  320 => 96,  290 => 83,  286 => 81,  277 => 77,  259 => 74,  253 => 73,  247 => 72,  235 => 71,  231 => 70,  225 => 69,  220 => 68,  215 => 67,  184 => 53,  178 => 50,  169 => 44,  155 => 32,  140 => 30,  136 => 29,  129 => 24,  114 => 22,  110 => 21,  103 => 16,  88 => 14,  84 => 13,  76 => 8,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoKontoManager.html.twig' %}
{% block body %}
<div class=\"row\">
  <div class=\"col-12\">
    <div class=\"card-title h3\">Kontoübersicht</div>
  </div>
</div>
<form method=\"post\" action=\"{{ path('km_list') }}\" id=\"frm_acc_list_filter\" class=\"row gx-1\">
<div class=\"row g-1\">
  <div class=\"col-xxl-2 col-3\">
    <select name=\"f_cat\" id=\"f_cat\" class=\"form-select ino-select2\" data-minimum-results-for-search=\"Infinity\">
      <option value=\"-1\">Alle Kategorien</option>
      {% for cid,cn in CATEGORYLIST %}
        <option value=\"{{ cn['id'] }}\"{% if F_CATEGORY == cn['id'] %} selected{% endif %}>{{ cn['name'] }}</option>
      {% endfor %}
    </select>
  </div>
  <div class=\"col-xxl-2 col-2\">
    <select name=\"f_month\" id=\"f_month\" class=\"form-select ino-select2\" data-minimum-results-for-search=\"Infinity\">
      <option value=\"-1\">Alle Monate</option>
      {% for mid,mon in MONTHLIST %}
        <option value=\"{{ mid }}\"{% if F_MONTH == mid %} selected{% endif %}>{{ mon }}</option>
      {% endfor %}
    </select>
  </div>
  <div class=\"col-xxl-2 col-2\">
    <select name=\"f_year\" id=\"f_year\" class=\"form-select ino-select2\" data-minimum-results-for-search=\"Infinity\">
      <option value=\"-1\">Alle Jahre</option>
      {% for y in YEARLIST %}
        <option value=\"{{ y }}\"{% if F_YEAR == y %} selected{% endif %}>{{ y }}</option>
      {% endfor %}
    </select>
  </div>
  <div class=\"col-xxl-2 col-2\">
    <input type=\"text\" name=\"f_srch\" id=\"f_srch\" class=\"form-control\" value=\"\" placeholder=\"Suchen nach...\">
  </div>
  <div class=\"col-xxl-2 col-3\">
    <button type=\"submit\" name=\"btn_filter\" id=\"btn_filter\" class=\"btn btn-outline-secondary g-0\"><i class=\"fa fa-filter\"></i></button>
    <button type=\"button\" name=\"btn_pdf\" id=\"btn_pdf\" class=\"btn btn-outline-secondary g-0\"><i class=\"fa-solid fa-print\"></i></button>
    <button type=\"button\" name=\"btn_delete\" id=\"btn_delete\" class=\"btn btn-outline-danger g-0\" disabled><i class=\"fa fa-trash\"></i></button>
  </div>
</div>
</form>
<form method=\"post\" action=\"{{ path(\"km_print\") }}\" id=\"frm_pdf\">
  <input type=\"hidden\" name=\"f_cat\" id=\"pdf_cat\" value=\"\">
  <input type=\"hidden\" name=\"f_month\" id=\"pdf_month\" value=\"\">
  <input type=\"hidden\" name=\"f_year\" id=\"pdf_year\" value=\"\">
  <input type=\"hidden\" name=\"f_search\" id=\"pdf_search\" value=\"\">
</form>
<form method=\"post\" action=\"{{ path(\"km_accListDel\") }}\" id=\"frm_acc_list_table\">
  <div class=\"row mt-3\">
    <div class=\"col-xxl-10 col-12\">
      <p>Zeige {{ DATA_COUNT|format_number }} von {{ TOTAL_COUNT|format_number }} Einträge(n) | Einnahmen: <span class=\"{{ REVENUE['INCOME']|MoneyColor }}\">{{ REVENUE['INCOME']|format_currency('EUR')}}</span> | Ausgaben: <span class=\"{{ REVENUE['OUTCOME']|MoneyColor }}\">{{ REVENUE['OUTCOME']|format_currency('EUR') }}</span> | Diff.: <span class=\"{{ REVENUE['DIFF']|MoneyColor }}\">{{ REVENUE['DIFF']|format_currency('EUR') }}</span></p>
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\" id=\"tbl_account_data\">
        <thead>
        <tr>
          <th>&nbsp;</th>
          <th>Datum</th>
          <th>Kategorie</th>
          <th>Buchungstext</th>
          <th class=\"text-end\">Summe</th>
          <th class=\"text-end\">Bank</th>
        </tr>
        </thead>
        <tbody>
        {% for d in DATA %}
        <tr id=\"R{{ d['id'] }}\">
          <td><div><input class=\"form-check-input chk_delete\" type=\"checkbox\" id=\"chk_{{ d['id'] }}\" value=\"{{ d['id'] }}\" aria-label=\"Eintrag löschen\" name=\"ACC_REMOVAL[]\"></div></td>
          <td>{{ d['dt'] }}</td>
          <td class=\"catchanger mp_click\" data-id=\"{{ d['id'] }}\" data-catid=\"{{ d['catid']|number_format }}\">{% if d['catid'] %}{{ d['category_name'] }}{% else %}<span class=\"fst-italic\">Keine Kategorie</span>{% endif %}</td>
          <td class=\"details mp_click\" data-url=\"{{ path('km_accForm',{'id':d['id']}) }}\">{{ d['description'] }}</td>
          <td class=\"text-end {{ d['amount']|MoneyColor }}\">{{ d['amount']|format_currency('EUR',locale='de') }}</td>
          <td class=\"text-end\">{% if d['logo_name'] == \"\" %}{{ d['bank_shortcut'] }}{% else %}<img src=\"{{ asset('images') }}/{{ d['logo_name'] }}\" title=\"{{ d['bank_shortcut'] }}\">{% endif %}</td>
        </tr>
        {% else %}
        <tr>
          <td colspan=\"6\" class=\"text-center fst-italic fw-bold\">Keine Daten gefunden!</td>
        </tr>
        {% endfor %}
        </tbody>
        </table>
        <p>Zeige {{ DATA_COUNT|format_number }} von {{ TOTAL_COUNT|format_number }} Einträge(n) | Einnahmen: <span class=\"{{ REVENUE['INCOME']|MoneyColor }}\">{{ REVENUE['INCOME']|format_currency('EUR')}}</span> | Ausgaben: <span class=\"{{ REVENUE['OUTCOME']|MoneyColor }}\">{{ REVENUE['OUTCOME']|format_currency('EUR') }}</span> | Diff.: <span class=\"{{ REVENUE['DIFF']|MoneyColor }}\">{{ REVENUE['DIFF']|format_currency('EUR',locale='de') }}</span></p>
      </div>
    </div>
  </div>
</form>
<div class=\"modal fade\" tabindex=\"-1\" id=\"modal_catchange\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Kategorie ändern</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
        <form method=\"post\" action=\"{{ path('km_catSaver') }}\" id=\"frm_catchange\">
          <input type=\"hidden\" name=\"accid\" id=\"accid\" value=\"\">
          <div>
            <select class=\"form-select\" aria-label=\"Kategorie anpassen\" name=\"newcat\" id=\"newcat\">
            {% for cid,cn in CATEGORYLIST %}
              <option value=\"{{ cn['id'] }}\"{% if F_CATEGORY == cn['id'] %} selected{% endif %}>{{ cn['name'] }}</option>
            {% endfor %}
            </select>
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-primary\" form=\"frm_catchange\"><i class=\"fa-solid fa-floppy-disk\"></i> Speichern</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\"><i class=\"fa-solid fa-xmark\"></i> Abbruch</button>
      </div>
    </div>
  </div>
</div>
{% endblock %}
{% block javascripts %}
<script src=\"{{ asset(\"js/km_list.js\") }}\"></script>
{% endblock %}
", "kontomanager/list.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/kontomanager/list.html.twig");
    }
}
