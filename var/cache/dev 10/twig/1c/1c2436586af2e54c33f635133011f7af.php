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

/* kontomanager/account_data_form.html.twig */
class __TwigTemplate_07afb1fe95cf5005ae1bbf694b05451e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/account_data_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/account_data_form.html.twig"));

        $this->parent = $this->loadTemplate("InoKontoManager.html.twig", "kontomanager/account_data_form.html.twig", 1);
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
    <div class=\"card-title h3\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["TITLE"]) || array_key_exists("TITLE", $context) ? $context["TITLE"] : (function () { throw new RuntimeError('Variable "TITLE" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</div>
  </div>
</div>
<form method=\"post\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_accFormSave");
        echo "\" id=\"frm_accData\" class=\"needs-validation\" novalidate>
  <input type=\"hidden\" name=\"accid\" id=\"accid\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", false, false, false, 9), 0)) : (0)), "html", null, true);
        echo "\">
  <div class=\"row\">
    <div class=\"col-xl-5 col-md-8 col-12\">
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"mb-3 col\">
              <label for=\"booking_date\" class=\"form-label\">Buchungsdatum</label>
              <input type=\"date\" name=\"booking_date\" id=\"booking_date\" class=\"form-control\" required=\"required\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 17, $this->source); })()), "bookingDate", [], "any", false, false, false, 17), "Y-m-d"), "html", null, true);
        echo "\">
            </div>
            <div class=\"mb-3 col\">
              <label for=\"account_number\" class=\"form-label\">Bankkonto</label>
              <select class=\"form-select\" aria-label=\"Bankkonto\" name=\"account_number\" id=\"account_number\" required=\"required\">
              ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["BANKLIST"]) || array_key_exists("BANKLIST", $context) ? $context["BANKLIST"] : (function () { throw new RuntimeError('Variable "BANKLIST" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 23
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "iban", [], "any", false, false, false, 23), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["b"], "iban", [], "any", false, false, false, 23) == twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 23, $this->source); })()), "accountingNumber", [], "any", false, false, false, 23))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "bankName", [], "any", false, false, false, 23), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "              </select>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"mb-3 col-6\">
              <label for=\"catid\" class=\"form-label\">Kategorie</label>
              <select class=\"form-select\" aria-label=\"Kategorie\" name=\"catid\" id=\"catid\" required=\"required\">
              ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["CATLIST"]) || array_key_exists("CATLIST", $context) ? $context["CATLIST"] : (function () { throw new RuntimeError('Variable "CATLIST" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 33
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "array", false, false, false, 33), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "refCategory", [], "any", false, true, false, 33), "id", [], "any", true, true, false, 33) && (twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "array", false, false, false, 33) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 33, $this->source); })()), "refCategory", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "array", false, false, false, 33), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "              </select>
            </div>
            <div class=\"mb-3 col-3\">
              <label for=\"amount\" class=\"form-label\">Summe</label>
              <input type=\"text\" name=\"amount\" id=\"amount\" class=\"form-control text-end\" required=\"required\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 39, $this->source); })()), "amount", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
            </div>
            <div class=\"mb-3 col-3\">
              <label for=\"currency\" class=\"form-label\">Währung</label>
              <input type=\"text\" name=\"currency\" id=\"currency\" class=\"form-control\" required=\"required\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 43, $this->source); })()), "currency", [], "any", false, false, false, 43), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col mb-3\">
              <label for=\"recipient_account\" class=\"form-label\">IBAN / Konto</label>
              <input type=\"text\" name=\"recipient_account\" id=\"recipient_account\" class=\"form-control\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 49, $this->source); })()), "recipientAccount", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-12\">
              <label for=\"description\" class=\"form-label\">Buchungstext</label>
              <textarea class=\"form-control\" rows=\"5\" name=\"description\" id=\"description\" required=\"required\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 55, $this->source); })()), "description", [], "any", false, false, false, 55), "html", null, true);
        echo "</textarea>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"mt-3 col-12\">
              <button type=\"submit\" class=\"btn btn-primary\"><i class=\"far fa-save\"></i> Speichern</button>
              ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)) {
            // line 62
            echo "              <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_list");
            echo "'\"><i class=\"fas fa-times\"></i> Abbruch</button>
              ";
        }
        // line 64
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "kontomanager/account_data_form.html.twig";
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
        return array (  196 => 64,  190 => 62,  188 => 61,  179 => 55,  170 => 49,  161 => 43,  154 => 39,  148 => 35,  133 => 33,  129 => 32,  120 => 25,  105 => 23,  101 => 22,  93 => 17,  82 => 9,  78 => 8,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoKontoManager.html.twig' %}
{% block body %}
<div class=\"row\">
  <div class=\"col-12\">
    <div class=\"card-title h3\">{{ TITLE }}</div>
  </div>
</div>
<form method=\"post\" action=\"{{ path(\"km_accFormSave\") }}\" id=\"frm_accData\" class=\"needs-validation\" novalidate>
  <input type=\"hidden\" name=\"accid\" id=\"accid\" value=\"{{ ENTRY.id|default(0) }}\">
  <div class=\"row\">
    <div class=\"col-xl-5 col-md-8 col-12\">
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"mb-3 col\">
              <label for=\"booking_date\" class=\"form-label\">Buchungsdatum</label>
              <input type=\"date\" name=\"booking_date\" id=\"booking_date\" class=\"form-control\" required=\"required\" value=\"{{ ENTRY.bookingDate|date('Y-m-d') }}\">
            </div>
            <div class=\"mb-3 col\">
              <label for=\"account_number\" class=\"form-label\">Bankkonto</label>
              <select class=\"form-select\" aria-label=\"Bankkonto\" name=\"account_number\" id=\"account_number\" required=\"required\">
              {% for b in BANKLIST %}
              <option value=\"{{ b.iban }}\"{% if b.iban == ENTRY.accountingNumber %} selected{% endif %}>{{ b.bankName }}</option>
              {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"mb-3 col-6\">
              <label for=\"catid\" class=\"form-label\">Kategorie</label>
              <select class=\"form-select\" aria-label=\"Kategorie\" name=\"catid\" id=\"catid\" required=\"required\">
              {% for c in CATLIST %}
              <option value=\"{{ c['id'] }}\"{% if ENTRY.refCategory.id is defined and c['id'] == ENTRY.refCategory.id %} selected{% endif %}>{{ c['name'] }}</option>
              {% endfor %}
              </select>
            </div>
            <div class=\"mb-3 col-3\">
              <label for=\"amount\" class=\"form-label\">Summe</label>
              <input type=\"text\" name=\"amount\" id=\"amount\" class=\"form-control text-end\" required=\"required\" value=\"{{ ENTRY.amount }}\">
            </div>
            <div class=\"mb-3 col-3\">
              <label for=\"currency\" class=\"form-label\">Währung</label>
              <input type=\"text\" name=\"currency\" id=\"currency\" class=\"form-control\" required=\"required\" value=\"{{ ENTRY.currency }}\">
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col mb-3\">
              <label for=\"recipient_account\" class=\"form-label\">IBAN / Konto</label>
              <input type=\"text\" name=\"recipient_account\" id=\"recipient_account\" class=\"form-control\" value=\"{{ ENTRY.recipientAccount }}\">
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-12\">
              <label for=\"description\" class=\"form-label\">Buchungstext</label>
              <textarea class=\"form-control\" rows=\"5\" name=\"description\" id=\"description\" required=\"required\">{{ ENTRY.description }}</textarea>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"mt-3 col-12\">
              <button type=\"submit\" class=\"btn btn-primary\"><i class=\"far fa-save\"></i> Speichern</button>
              {% if ENTRY.id %}
              <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='{{ path(\"km_list\") }}'\"><i class=\"fas fa-times\"></i> Abbruch</button>
              {% endif %}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
{% endblock %}
", "kontomanager/account_data_form.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/kontomanager/account_data_form.html.twig");
    }
}
