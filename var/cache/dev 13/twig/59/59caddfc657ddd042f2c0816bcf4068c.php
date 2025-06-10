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

/* kontomanager/report_costs_month.html.twig */
class __TwigTemplate_2b391c75e671ee80db828b6fed47e822 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/report_costs_month.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/report_costs_month.html.twig"));

        $this->parent = $this->loadTemplate("InoKontoManager.html.twig", "kontomanager/report_costs_month.html.twig", 1);
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
    <div class=\"card-title h3 mb-1\">Kosten Pro Monat und Kategorie <span class=\"sp_year\"></span></div>
  </div>
</div>
<div class=\"row align-items-center\">
  <div class=\"col-xl-3 col-12\">
    <form method=\"get\" action=\"#\" id=\"frm_report_filter\">
      <div class=\"form-floating\">
        <select name=\"year\" id=\"year\" class=\"form-select\">
          ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["YEARLIST"]) || array_key_exists("YEARLIST", $context) ? $context["YEARLIST"] : (function () { throw new RuntimeError('Variable "YEARLIST" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 14
            echo "            <option value=\"";
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
  <div class=\"col-auto\">
    <div class=\"form-floating\">
      <button class=\"btn btn-primary btn_back\" data-url=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_report_overview");
        echo "\"><i class=\"fa-solid fa-arrow-left\"></i> Zurück</button>
    </div>
  </div>
</div>
<div class=\"row mt-4\">
  <div class=\"col\" id=\"html_injector\">
  
  </div>
</div>
<form method=\"post\" action=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_report_listcat_save");
        echo "\" id=\"frm_catchange\">
  <div class=\"modal fade\" tabindex=\"-1\" id=\"modal_list\" data-ajax=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_report_listCatMonAjax");
        echo "\">
    <div class=\"modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"modal_list_head\"></h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
            <div id=\"frm_body\">
            </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> Speichern</button>
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\"><i class=\"fa-solid fa-xmark\"></i> Abbruch</button>
        </div>
      </div>
    </div>
  </div>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "<script>
function loadData()
  {
    var year = \$(\"#year\").val();
    \$(\".sp_year\").html(\"für das Jahr \"+year);
    var url = \"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_report_costsMonthAjax");
        echo "/\" + year;
    \$.ajax(url, {
      'dataType': 'json',
    }).done(function (json)
    {
      \$(\"#html_injector\").html(json['HTML'])
    }).fail(function(jqXHR, textStatus, errorThrown) {
      ajaxError(textStatus, errorThrown);
    });
  }
\$(document).ready(function() {

  // Handle year selector
  \$(\"#year\").on('change', function() {
    loadData();
  })
  
  // Handle back button
  \$(\".btn_back\").on('click', function() {
    var u = \$(this).data('url') + \"/\"+\$(\"#year\").val();
    window.location.href=u;
  });
  
  // Handle click on a sum of category/month to show all entries
  \$(\"body\").on('click', '.mp_click', function() {
    var c = \$(this).data('catid');
    var m = \$(this).data('month');
    \$.ajax(\$(\"#modal_list\").data('ajax'), {
      'dataType': 'json',
      'method':'post',
      'data': {'catid':c,'month':m,'year':\$(\"#year\").val(),}
    }).done(function (json)
    {
      console.log(json);
      \$(\"#frm_body\").html(json['HTML'])
    }).fail(function(jqXHR, textStatus, errorThrown) {
      ajaxError(textStatus, errorThrown);
    });

    \$(\"#modal_list_head\").html(\"Zeige Einträge für \\\"\"+\$(\"#C_\"+c).html()+\"\\\" in \"+m.padZero()+\"/\"+\$(\"#year\").val());
    let myModal = new bootstrap.Modal(document.getElementById('modal_list'));
    myModal.show();

  });
  loadData();
})
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
        return "kontomanager/report_costs_month.html.twig";
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
        return array (  172 => 59,  165 => 54,  155 => 53,  125 => 33,  121 => 32,  109 => 23,  100 => 16,  85 => 14,  81 => 13,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoKontoManager.html.twig' %}
{% block body %}
<div class=\"row\">
  <div class=\"col\">
    <div class=\"card-title h3 mb-1\">Kosten Pro Monat und Kategorie <span class=\"sp_year\"></span></div>
  </div>
</div>
<div class=\"row align-items-center\">
  <div class=\"col-xl-3 col-12\">
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
  <div class=\"col-auto\">
    <div class=\"form-floating\">
      <button class=\"btn btn-primary btn_back\" data-url=\"{{ path(\"km_report_overview\") }}\"><i class=\"fa-solid fa-arrow-left\"></i> Zurück</button>
    </div>
  </div>
</div>
<div class=\"row mt-4\">
  <div class=\"col\" id=\"html_injector\">
  
  </div>
</div>
<form method=\"post\" action=\"{{ path(\"km_report_listcat_save\") }}\" id=\"frm_catchange\">
  <div class=\"modal fade\" tabindex=\"-1\" id=\"modal_list\" data-ajax=\"{{ path(\"km_report_listCatMonAjax\") }}\">
    <div class=\"modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"modal_list_head\"></h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
            <div id=\"frm_body\">
            </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> Speichern</button>
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\"><i class=\"fa-solid fa-xmark\"></i> Abbruch</button>
        </div>
      </div>
    </div>
  </div>
</form>
{% endblock %}
{% block javascripts %}
<script>
function loadData()
  {
    var year = \$(\"#year\").val();
    \$(\".sp_year\").html(\"für das Jahr \"+year);
    var url = \"{{ path(\"km_report_costsMonthAjax\") }}/\" + year;
    \$.ajax(url, {
      'dataType': 'json',
    }).done(function (json)
    {
      \$(\"#html_injector\").html(json['HTML'])
    }).fail(function(jqXHR, textStatus, errorThrown) {
      ajaxError(textStatus, errorThrown);
    });
  }
\$(document).ready(function() {

  // Handle year selector
  \$(\"#year\").on('change', function() {
    loadData();
  })
  
  // Handle back button
  \$(\".btn_back\").on('click', function() {
    var u = \$(this).data('url') + \"/\"+\$(\"#year\").val();
    window.location.href=u;
  });
  
  // Handle click on a sum of category/month to show all entries
  \$(\"body\").on('click', '.mp_click', function() {
    var c = \$(this).data('catid');
    var m = \$(this).data('month');
    \$.ajax(\$(\"#modal_list\").data('ajax'), {
      'dataType': 'json',
      'method':'post',
      'data': {'catid':c,'month':m,'year':\$(\"#year\").val(),}
    }).done(function (json)
    {
      console.log(json);
      \$(\"#frm_body\").html(json['HTML'])
    }).fail(function(jqXHR, textStatus, errorThrown) {
      ajaxError(textStatus, errorThrown);
    });

    \$(\"#modal_list_head\").html(\"Zeige Einträge für \\\"\"+\$(\"#C_\"+c).html()+\"\\\" in \"+m.padZero()+\"/\"+\$(\"#year\").val());
    let myModal = new bootstrap.Modal(document.getElementById('modal_list'));
    myModal.show();

  });
  loadData();
})
</script>
{% endblock %}
", "kontomanager/report_costs_month.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/kontomanager/report_costs_month.html.twig");
    }
}
