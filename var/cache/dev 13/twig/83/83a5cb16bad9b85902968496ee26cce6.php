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

/* kontomanager/importfilter_list.html.twig */
class __TwigTemplate_643c0f1f90e3bd9e73efa67403503614 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/importfilter_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/importfilter_list.html.twig"));

        $this->parent = $this->loadTemplate("InoKontoManager.html.twig", "kontomanager/importfilter_list.html.twig", 1);
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
    <div class=\"card-title h3\">Importfilter bearbeiten</div>
    <button type=\"button\" class=\"btn btn-outline-primary mb-1\" onclick=\"window.location.href='";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_importfilter_form");
        echo "'\">Neuer Filter</button>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xl-8 col-12 mt-4\">
    <table class=\"table table-sm table-striped table-hover\" id=\"tbl_iflist\">
    <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Kategorie</th>
      <th>Aktiv</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["IFLIST"]) || array_key_exists("IFLIST", $context) ? $context["IFLIST"] : (function () { throw new RuntimeError('Variable "IFLIST" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 22
            echo "    <tr data-url=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_importfilter_form", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">
      <td class=\"mp_click ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "isActive", [], "any", false, false, false, 23) == 0)) {
                echo "text-decoration-line-through";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
      <td class=\"mp_click ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "isActive", [], "any", false, false, false, 24) == 0)) {
                echo "text-decoration-line-through";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
      <td class=\"mp_click ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "isActive", [], "any", false, false, false, 25) == 0)) {
                echo "text-decoration-line-through";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "refCategory", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
      <td class=\"mp_click text-center\">";
            // line 26
            echo $this->env->getRuntime('App\Twig\AppRuntime')->FormatCheckbox(twig_get_attribute($this->env, $this->source, $context["i"], "isActive", [], "any", false, false, false, 26));
            echo "</td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "    <tr>
      <td colspan=\"4\">Keine Filter vorhanden.</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </tbody>
    </table>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "  <script>
    /** Handle click on importfilter entry */
    \$(\".mp_click\").on('click', function() {
      window.location.href=\$(this).parent().data('url');
    });
    var table = \$(\"#tbl_iflist\").dataTable();
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
        return "kontomanager/importfilter_list.html.twig";
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
        return array (  167 => 39,  157 => 38,  143 => 33,  134 => 29,  126 => 26,  118 => 25,  110 => 24,  102 => 23,  97 => 22,  92 => 21,  74 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoKontoManager.html.twig' %}
{% block body %}
<div class=\"row\">
  <div class=\"col\">
    <div class=\"card-title h3\">Importfilter bearbeiten</div>
    <button type=\"button\" class=\"btn btn-outline-primary mb-1\" onclick=\"window.location.href='{{ path('km_importfilter_form') }}'\">Neuer Filter</button>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xl-8 col-12 mt-4\">
    <table class=\"table table-sm table-striped table-hover\" id=\"tbl_iflist\">
    <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Kategorie</th>
      <th>Aktiv</th>
    </tr>
    </thead>
    <tbody>
    {% for i in IFLIST %}
    <tr data-url=\"{{ path(\"km_importfilter_form\",{'id':i.id}) }}\">
      <td class=\"mp_click {% if i.isActive == 0 %}text-decoration-line-through{% endif %}\">{{ i.id }}</td>
      <td class=\"mp_click {% if i.isActive == 0 %}text-decoration-line-through{% endif %}\">{{ i.name }}</td>
      <td class=\"mp_click {% if i.isActive == 0 %}text-decoration-line-through{% endif %}\">{{ i.refCategory.name }}</td>
      <td class=\"mp_click text-center\">{{ i.isActive|FormatCheckbox|raw  }}</td>
    </tr>
    {% else %}
    <tr>
      <td colspan=\"4\">Keine Filter vorhanden.</td>
    </tr>
    {% endfor %}
    </tbody>
    </table>
  </div>
</div>
{% endblock %}
{% block javascripts %}
  <script>
    /** Handle click on importfilter entry */
    \$(\".mp_click\").on('click', function() {
      window.location.href=\$(this).parent().data('url');
    });
    var table = \$(\"#tbl_iflist\").dataTable();
  </script>
{% endblock %}
", "kontomanager/importfilter_list.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/kontomanager/importfilter_list.html.twig");
    }
}
