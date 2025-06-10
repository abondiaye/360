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

/* kontomanager/bank_list.html.twig */
class __TwigTemplate_7a1be432af5bfa3487f6b3828bf86408 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/bank_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/bank_list.html.twig"));

        $this->parent = $this->loadTemplate("InoKontoManager.html.twig", "kontomanager/bank_list.html.twig", 1);
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
    <div class=\"card-title h3\">Bankkonten verwalten</div>
    <button type=\"button\" class=\"btn btn-outline-primary mb-1\" onclick=\"window.location.href='";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_bank_form");
        echo "'\">Neues Konto</button>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xl-8 col-12\">
    <table class=\"table table-striped table-hover\">
    <thead>
    <tr>
      <th>ID</th>
      <th>Name der Bank</th>
      <th>Kürzel</th>
      <th>IBAN</th>
      <th>Logo</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["BANKACCOUNTS"]) || array_key_exists("BANKACCOUNTS", $context) ? $context["BANKACCOUNTS"] : (function () { throw new RuntimeError('Variable "BANKACCOUNTS" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 23
            echo "    <tr data-url=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_bank_form", ["id" => twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">
      <td class=\"mp_click\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
      <td class=\"mp_click\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "bankName", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
      <td class=\"mp_click\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "bankShortcut", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
      <td class=\"mp_click\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "iban", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
      <td>
        ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["b"], "logoName", [], "any", false, false, false, 29) == "")) {
                // line 30
                echo "        -/-
        ";
            } else {
                // line 32
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/") . twig_get_attribute($this->env, $this->source, $context["b"], "logoName", [], "any", false, false, false, 32)), "html", null, true);
                echo "\">
        ";
            }
            // line 34
            echo "      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </tbody>
    </table>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "<script>
\$(document).ready(function(){
  \$(\".mp_click\").on('click', function() {
    window.location.href=\$(this).parent().data('url');
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
        return "kontomanager/bank_list.html.twig";
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
        return array (  163 => 43,  153 => 42,  139 => 37,  131 => 34,  125 => 32,  121 => 30,  119 => 29,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  97 => 23,  93 => 22,  74 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoKontoManager.html.twig' %}
{% block body %}
<div class=\"row\">
  <div class=\"col\">
    <div class=\"card-title h3\">Bankkonten verwalten</div>
    <button type=\"button\" class=\"btn btn-outline-primary mb-1\" onclick=\"window.location.href='{{ path('km_bank_form') }}'\">Neues Konto</button>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xl-8 col-12\">
    <table class=\"table table-striped table-hover\">
    <thead>
    <tr>
      <th>ID</th>
      <th>Name der Bank</th>
      <th>Kürzel</th>
      <th>IBAN</th>
      <th>Logo</th>
    </tr>
    </thead>
    <tbody>
    {% for b in BANKACCOUNTS %}
    <tr data-url=\"{{ path(\"km_bank_form\",{'id':b.id}) }}\">
      <td class=\"mp_click\">{{ b.id }}</td>
      <td class=\"mp_click\">{{ b.bankName }}</td>
      <td class=\"mp_click\">{{ b.bankShortcut }}</td>
      <td class=\"mp_click\">{{ b.iban }}</td>
      <td>
        {% if b.logoName == \"\" %}
        -/-
        {% else %}
        <img src=\"{{ asset(\"images/\") ~ b.logoName }}\">
        {% endif %}
      </td>
    </tr>
    {% endfor %}
    </tbody>
    </table>
  </div>
</div>
{% endblock %}
{% block javascripts %}
<script>
\$(document).ready(function(){
  \$(\".mp_click\").on('click', function() {
    window.location.href=\$(this).parent().data('url');
  });
});
</script>
{% endblock %}
", "kontomanager/bank_list.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/kontomanager/bank_list.html.twig");
    }
}
