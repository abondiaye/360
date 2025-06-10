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

/* kontomanager/importfilter_form.html.twig */
class __TwigTemplate_ee1382bad5207aa5f2cc6df18bd1dfa6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/importfilter_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/importfilter_form.html.twig"));

        $this->parent = $this->loadTemplate("InoKontoManager.html.twig", "kontomanager/importfilter_form.html.twig", 1);
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
        echo "  <div class=\"row\">
    <div class=\"col\">
      <div class=\"card-title h3\">";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)) {
            echo "Importfilter #";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
            echo " bearbeiten";
        } else {
            echo "Neuen Importfilter anlegen";
        }
        echo "</div>
    </div>
  </div>
  <form method=\"post\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_importfilter_save");
        echo "\" id=\"frm_importfilter\" class=\"needs-validation\" novalidate>
    <input type=\"hidden\" name=\"ID\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "id", [], "any", false, false, false, 9), 0)) : (0)), "html", null, true);
        echo "\">
    <div class=\"row\">
      <div class=\"col-xl-5 col-md-7 col-12\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label class=\"form-label\" for=\"ifname\">Name</label>
              <input type=\"text\" name=\"ifname\" id=\"ifname\" class=\"form-control\" placeholder=\"Name des Filters\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "\" required autofocus>
            </div>
            <div class=\"mb-3\">
              <label class=\"form-label\" for=\"ifdef\">Filter Definition</label>
              <input type=\"text\" name=\"ifdef\" id=\"ifdef\" class=\"form-control\" placeholder=\"Filter Definition\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 20, $this->source); })()), "definition", [], "any", false, false, false, 20), "html", null, true);
        echo "\" required>
            </div>
            <div class=\"mb-3\">
              <label for=\"catid\" class=\"form-label\">Kategorie (wird bei Übereinstimmung zugewiesen)</label>
              <select class=\"form-select\" aria-label=\"Kategorie\" name=\"catid\" id=\"catid\" required=\"required\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["CATLIST"]) || array_key_exists("CATLIST", $context) ? $context["CATLIST"] : (function () { throw new RuntimeError('Variable "CATLIST" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 26
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "array", false, false, false, 26), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ENTRY"] ?? null), "refCategory", [], "any", false, true, false, 26), "id", [], "any", true, true, false, 26) && (twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "array", false, false, false, 26) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 26, $this->source); })()), "refCategory", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "array", false, false, false, 26), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "              </select>
            </div>
            <div class=\"form-check form-switch\">
              <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"is_active\" name=\"is_active\" value=\"1\"";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 31, $this->source); })()), "isActive", [], "any", false, false, false, 31)) {
            echo " checked";
        }
        echo ">
              <label class=\"form-check-label\" for=\"is_active\">Aktiv?</label>
            </div>
            <div class=\"mt-3\">
              <button type=\"submit\" class=\"btn btn-primary\"><i class=\"far fa-save\"></i> Speichern</button>
              ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)) {
            // line 37
            echo "                <button type=\"button\" class=\"btn btn-danger btn_del_if\"><i class=\"fa fa-trash\"></i> Löschen</button>
              ";
        }
        // line 39
        echo "              <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_importfilter");
        echo "'\"><i class=\"fa-solid fa-arrow-left\"></i> Zurück</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  <form method=\"post\" action=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_importfilter_del");
        echo "\" id=\"frm_del\">
    <input type=\"hidden\" name=\"ID\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTRY"]) || array_key_exists("ENTRY", $context) ? $context["ENTRY"] : (function () { throw new RuntimeError('Variable "ENTRY" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47), "html", null, true);
        echo "\">
  </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "  <script>
    \$(\".btn_del_if\").on('click', function() {
      SwalConfirmSubmit(\"Diesen Eintrag wirklich löschen?\",\"frm_del\");
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
        return "kontomanager/importfilter_form.html.twig";
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
        return array (  192 => 51,  182 => 50,  169 => 47,  165 => 46,  154 => 39,  150 => 37,  148 => 36,  138 => 31,  133 => 28,  118 => 26,  114 => 25,  106 => 20,  99 => 16,  89 => 9,  85 => 8,  73 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoKontoManager.html.twig' %}
{% block body %}
  <div class=\"row\">
    <div class=\"col\">
      <div class=\"card-title h3\">{% if ENTRY.id %}Importfilter #{{ ENTRY.id }} bearbeiten{% else %}Neuen Importfilter anlegen{% endif %}</div>
    </div>
  </div>
  <form method=\"post\" action=\"{{ path(\"km_importfilter_save\") }}\" id=\"frm_importfilter\" class=\"needs-validation\" novalidate>
    <input type=\"hidden\" name=\"ID\" value=\"{{ ENTRY.id|default(0) }}\">
    <div class=\"row\">
      <div class=\"col-xl-5 col-md-7 col-12\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label class=\"form-label\" for=\"ifname\">Name</label>
              <input type=\"text\" name=\"ifname\" id=\"ifname\" class=\"form-control\" placeholder=\"Name des Filters\" value=\"{{ ENTRY.name }}\" required autofocus>
            </div>
            <div class=\"mb-3\">
              <label class=\"form-label\" for=\"ifdef\">Filter Definition</label>
              <input type=\"text\" name=\"ifdef\" id=\"ifdef\" class=\"form-control\" placeholder=\"Filter Definition\" value=\"{{ ENTRY.definition }}\" required>
            </div>
            <div class=\"mb-3\">
              <label for=\"catid\" class=\"form-label\">Kategorie (wird bei Übereinstimmung zugewiesen)</label>
              <select class=\"form-select\" aria-label=\"Kategorie\" name=\"catid\" id=\"catid\" required=\"required\">
                {% for c in CATLIST %}
                  <option value=\"{{ c['id'] }}\"{% if ENTRY.refCategory.id is defined and c['id'] == ENTRY.refCategory.id %} selected{% endif %}>{{ c['name'] }}</option>
                {% endfor %}
              </select>
            </div>
            <div class=\"form-check form-switch\">
              <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"is_active\" name=\"is_active\" value=\"1\"{% if ENTRY.isActive %} checked{% endif %}>
              <label class=\"form-check-label\" for=\"is_active\">Aktiv?</label>
            </div>
            <div class=\"mt-3\">
              <button type=\"submit\" class=\"btn btn-primary\"><i class=\"far fa-save\"></i> Speichern</button>
              {% if ENTRY.id %}
                <button type=\"button\" class=\"btn btn-danger btn_del_if\"><i class=\"fa fa-trash\"></i> Löschen</button>
              {% endif %}
              <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='{{ path('km_importfilter') }}'\"><i class=\"fa-solid fa-arrow-left\"></i> Zurück</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  <form method=\"post\" action=\"{{ path(\"km_importfilter_del\") }}\" id=\"frm_del\">
    <input type=\"hidden\" name=\"ID\" value=\"{{ ENTRY.id }}\">
  </form>
{% endblock %}
{% block javascripts %}
  <script>
    \$(\".btn_del_if\").on('click', function() {
      SwalConfirmSubmit(\"Diesen Eintrag wirklich löschen?\",\"frm_del\");
    });
  </script>
{% endblock %}
", "kontomanager/importfilter_form.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/kontomanager/importfilter_form.html.twig");
    }
}
