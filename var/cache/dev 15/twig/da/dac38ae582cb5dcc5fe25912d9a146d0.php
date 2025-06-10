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

/* kontomanager/categories_list.html.twig */
class __TwigTemplate_0f682fd8f6fad7d8d0d164976d93ddf3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/categories_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/categories_list.html.twig"));

        $this->parent = $this->loadTemplate("InoKontoManager.html.twig", "kontomanager/categories_list.html.twig", 1);
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
      <div class=\"card-title h3\">Modifier les catégories</div>
      <button type=\"button\" class=\"btn btn-outline-primary mb-1\" onclick=\"window.location.href='";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_category_form");
        echo "'\">Nouvelle catégorie</button>
      <p>Catégories définies : <strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_length_filter($this->env, (isset($context["CATEGORY_LIST"]) || array_key_exists("CATEGORY_LIST", $context) ? $context["CATEGORY_LIST"] : (function () { throw new RuntimeError('Variable "CATEGORY_LIST" does not exist.', 7, $this->source); })()))), "html", null, true);
        echo "</strong> | Entrées sans catégorie : <strong>";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber((isset($context["NO_CAT_COUNT"]) || array_key_exists("NO_CAT_COUNT", $context) ? $context["NO_CAT_COUNT"] : (function () { throw new RuntimeError('Variable "NO_CAT_COUNT" does not exist.', 7, $this->source); })())), "html", null, true);
        echo "</strong></p>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-xl-7 col-12 mt-2\">
      <table class=\"table table-sm table-striped table-hover\" id=\"tbl_km_categories\">
      <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th class=\"text-end\">Entrées</th>
        <th class=\"text-center\"><abbr title=\"Coût fixe\">Fixe ?</abbr></th>
        <th class=\"text-center\"><abbr title=\"Catégorie active ?\">Actif ?</abbr></th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["CATEGORY_LIST"]) || array_key_exists("CATEGORY_LIST", $context) ? $context["CATEGORY_LIST"] : (function () { throw new RuntimeError('Variable "CATEGORY_LIST" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 24
            echo "      <tr data-url=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_category_form", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">
        <td class=\"mp_click\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
        <td class=\"mp_click ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "is_active", [], "any", false, false, false, 26) == 0)) {
                echo "text-decoration-line-through";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
        <td class=\"mp_click text-end\">";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, $context["c"], "data_count", [], "any", false, false, false, 27)), "html", null, true);
            echo "</td>
        <td class=\"mp_click text-center\">";
            // line 28
            echo $this->env->getRuntime('App\Twig\AppRuntime')->FormatCheckbox(twig_get_attribute($this->env, $this->source, $context["c"], "is_fixed", [], "any", false, false, false, 28));
            echo "</td>
        <td class=\"mp_click text-center\">";
            // line 29
            echo $this->env->getRuntime('App\Twig\AppRuntime')->FormatCheckbox(twig_get_attribute($this->env, $this->source, $context["c"], "is_active", [], "any", false, false, false, 29));
            echo "</td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "      </tbody>
      </table>
    </div>
  </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "  <script>
  /** Gérer le clic sur une catégorie */
  \$(\".mp_click\").on('click', function() {
    window.location.href=\$(this).parent().data('url');
  });
  var table = \$(\"#tbl_km_categories\").dataTable();
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
        return "kontomanager/categories_list.html.twig";
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
        return array (  161 => 38,  151 => 37,  137 => 32,  128 => 29,  124 => 28,  120 => 27,  112 => 26,  108 => 25,  103 => 24,  99 => 23,  78 => 7,  74 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoKontoManager.html.twig' %}
  {% block body %}
  <div class=\"row\">
    <div class=\"col\">
      <div class=\"card-title h3\">Modifier les catégories</div>
      <button type=\"button\" class=\"btn btn-outline-primary mb-1\" onclick=\"window.location.href='{{ path('km_category_form') }}'\">Nouvelle catégorie</button>
      <p>Catégories définies : <strong>{{ CATEGORY_LIST|length|format_number }}</strong> | Entrées sans catégorie : <strong>{{ NO_CAT_COUNT|format_number }}</strong></p>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-xl-7 col-12 mt-2\">
      <table class=\"table table-sm table-striped table-hover\" id=\"tbl_km_categories\">
      <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th class=\"text-end\">Entrées</th>
        <th class=\"text-center\"><abbr title=\"Coût fixe\">Fixe ?</abbr></th>
        <th class=\"text-center\"><abbr title=\"Catégorie active ?\">Actif ?</abbr></th>
      </tr>
      </thead>
      <tbody>
      {% for c in CATEGORY_LIST %}
      <tr data-url=\"{{ path(\"km_category_form\",{'id':c.id}) }}\">
        <td class=\"mp_click\">{{ c.id }}</td>
        <td class=\"mp_click {% if c.is_active == 0 %}text-decoration-line-through{% endif %}\">{{ c.name }}</td>
        <td class=\"mp_click text-end\">{{ c.data_count|format_number }}</td>
        <td class=\"mp_click text-center\">{{ c.is_fixed|FormatCheckbox|raw }}</td>
        <td class=\"mp_click text-center\">{{ c.is_active|FormatCheckbox|raw }}</td>
      </tr>
      {% endfor %}
      </tbody>
      </table>
    </div>
  </div>
  {% endblock %}
  {% block javascripts %}
  <script>
  /** Gérer le clic sur une catégorie */
  \$(\".mp_click\").on('click', function() {
    window.location.href=\$(this).parent().data('url');
  });
  var table = \$(\"#tbl_km_categories\").dataTable();
  </script>
  {% endblock %}
  ", "kontomanager/categories_list.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/kontomanager/categories_list.html.twig");
    }
}
