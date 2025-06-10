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

/* kontomanager/bank_form.html.twig */
class __TwigTemplate_b8bcccfd33c9aa571ab29af41cca1001 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/bank_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/bank_form.html.twig"));

        $this->parent = $this->loadTemplate("InoKontoManager.html.twig", "kontomanager/bank_form.html.twig", 1);
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
    <div class=\"card-title h3\">";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)) {
            echo "Bankkonto &quot;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 5, $this->source); })()), "iban", [], "any", false, false, false, 5), "html", null, true);
            echo "&quot; bearbeiten";
        } else {
            echo "Neues Bankkonto anlegen";
        }
        echo "</div>
  </div>
</div>
<form method=\"post\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_bank_save");
        echo "\" id=\"frm_bank\" class=\"needs-validation\" novalidate>
  <input type=\"hidden\" name=\"BANKID\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", false, false, false, 9), 0)) : (0)), "html", null, true);
        echo "\">
  <div class=\"row\">
    <div class=\"col-xl-4 col-lg-6 col-md-8 col-12\">
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-8\">
              <div class=\"mb-2\">
                <label class=\"form-check-label\" for=\"bankname\">Bank</label>
                <input type=\"text\" name=\"bankname\" id=\"bankname\" class=\"form-control\" placeholder=\"Name der Bank\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 18, $this->source); })()), "bankName", [], "any", false, false, false, 18), "html", null, true);
        echo "\" required autofocus>
              </div>
            </div>
            <div class=\"col-4\">
              <div class=\"mb-2\">
                <label class=\"form-check-label\" for=\"shortcut\">Kürzel</label>
                <input type=\"text\" name=\"shortcut\" id=\"shortcut\" class=\"form-control\" placeholder=\"Kürzel der Bank\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 24, $this->source); })()), "bankShortcut", [], "any", false, false, false, 24), "html", null, true);
        echo "\" required>
              </div>
            </div>
          </div>
          <div class=\"mb-2\">
            <label class=\"form-check-label\" for=\"iban\">IBAN / Kontonummer</label>
            <input type=\"text\" name=\"iban\" id=\"iban\" class=\"form-control\" placeholder=\"IBAN\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 30, $this->source); })()), "iban", [], "any", false, false, false, 30), "html", null, true);
        echo "\" required>
          </div>
          <div class=\"mb-2 col-6\">
            <label class=\"form-check-label\" for=\"logoname\">Logo (max. 30x30px!)</label>
            <input type=\"text\" name=\"logoname\" id=\"logoname\" class=\"form-control\" placeholder=\"Name des Logos\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 34, $this->source); })()), "logoName", [], "any", false, false, false, 34), "html", null, true);
        echo "\" title=\"Das Logo muss im Verzeichnis images/ abgelegt sein!\">
          </div>
          <div class=\"mt-3\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"far fa-save\"></i> Speichern</button>
            ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)) {
            // line 39
            echo "              <button type=\"button\" class=\"btn btn-danger btn_del_account\"><i class=\"fa fa-trash\"></i> Löschen</button>
            ";
        }
        // line 41
        echo "            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_bank");
        echo "'\"><i class=\"fa-solid fa-arrow-left\"></i> Zurück</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<form method=\"post\" action=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_bank_del", ["id" => ((twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", false, false, false, 48), 0)) : (0))]), "html", null, true);
        echo "\" id=\"frm_del\">
  <input type=\"hidden\" name=\"BANKID\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", false, false, false, 49), 0)) : (0)), "html", null, true);
        echo "\">
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "  <script>
    \$(\".btn_del_account\").on('click', function() {
      SwalConfirmSubmit(\"Dieses Konto wirklich löschen?<br><br>Alle zugewiesenen Einträge werden ebenfalls gelöscht!\",\"frm_del\");
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
        return "kontomanager/bank_form.html.twig";
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
        return array (  177 => 53,  167 => 52,  154 => 49,  150 => 48,  139 => 41,  135 => 39,  133 => 38,  126 => 34,  119 => 30,  110 => 24,  101 => 18,  89 => 9,  85 => 8,  73 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoKontoManager.html.twig' %}
{% block body %}
<div class=\"row\">
  <div class=\"col\">
    <div class=\"card-title h3\">{% if ENTRY.id %}Bankkonto &quot;{{ ENTRY.iban }}&quot; bearbeiten{% else %}Neues Bankkonto anlegen{% endif %}</div>
  </div>
</div>
<form method=\"post\" action=\"{{ path(\"km_bank_save\") }}\" id=\"frm_bank\" class=\"needs-validation\" novalidate>
  <input type=\"hidden\" name=\"BANKID\" value=\"{{ ENTRY.id|default(0) }}\">
  <div class=\"row\">
    <div class=\"col-xl-4 col-lg-6 col-md-8 col-12\">
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-8\">
              <div class=\"mb-2\">
                <label class=\"form-check-label\" for=\"bankname\">Bank</label>
                <input type=\"text\" name=\"bankname\" id=\"bankname\" class=\"form-control\" placeholder=\"Name der Bank\" value=\"{{ ENTRY.bankName }}\" required autofocus>
              </div>
            </div>
            <div class=\"col-4\">
              <div class=\"mb-2\">
                <label class=\"form-check-label\" for=\"shortcut\">Kürzel</label>
                <input type=\"text\" name=\"shortcut\" id=\"shortcut\" class=\"form-control\" placeholder=\"Kürzel der Bank\" value=\"{{ ENTRY.bankShortcut }}\" required>
              </div>
            </div>
          </div>
          <div class=\"mb-2\">
            <label class=\"form-check-label\" for=\"iban\">IBAN / Kontonummer</label>
            <input type=\"text\" name=\"iban\" id=\"iban\" class=\"form-control\" placeholder=\"IBAN\" value=\"{{ ENTRY.iban }}\" required>
          </div>
          <div class=\"mb-2 col-6\">
            <label class=\"form-check-label\" for=\"logoname\">Logo (max. 30x30px!)</label>
            <input type=\"text\" name=\"logoname\" id=\"logoname\" class=\"form-control\" placeholder=\"Name des Logos\" value=\"{{ ENTRY.logoName }}\" title=\"Das Logo muss im Verzeichnis images/ abgelegt sein!\">
          </div>
          <div class=\"mt-3\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"far fa-save\"></i> Speichern</button>
            {% if ENTRY.id %}
              <button type=\"button\" class=\"btn btn-danger btn_del_account\"><i class=\"fa fa-trash\"></i> Löschen</button>
            {% endif %}
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='{{ path('km_bank') }}'\"><i class=\"fa-solid fa-arrow-left\"></i> Zurück</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<form method=\"post\" action=\"{{ path(\"km_bank_del\",{'id':ENTRY.id|default(0)}) }}\" id=\"frm_del\">
  <input type=\"hidden\" name=\"BANKID\" value=\"{{ ENTRY.id|default(0) }}\">
</form>
{% endblock %}
{% block javascripts %}
  <script>
    \$(\".btn_del_account\").on('click', function() {
      SwalConfirmSubmit(\"Dieses Konto wirklich löschen?<br><br>Alle zugewiesenen Einträge werden ebenfalls gelöscht!\",\"frm_del\");
    });
  </script>
{% endblock %}
", "kontomanager/bank_form.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/kontomanager/bank_form.html.twig");
    }
}
