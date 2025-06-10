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

/* kontomanager/csv_importer_form.html.twig */
class __TwigTemplate_251a89ffb05d839653cde658bc2a28ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/csv_importer_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontomanager/csv_importer_form.html.twig"));

        $this->parent = $this->loadTemplate("InoKontoManager.html.twig", "kontomanager/csv_importer_form.html.twig", 1);
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
    <div class=\"card-title h3\">CSV Daten importieren</div>
  </div>
  <div class=\"col-xl-6 col-md-8 col-12\">
    <p>Hiermit kann eine CSV Datei, die von der Targo Bank bzw. Deutsche Bank Website erstellt wurde, in die Datenbank übernommen werden.</p>
    <p>
      Dazu bitte die gewünschte CSV-Datei auswählen und hochladen, die Einträge werden dann automatisch in die Datenbank übernommen.<br>
      Doppelt vorhandene Einträge werden dabei übersprungen und am Ende wird eine Übersicht angezeigt, welche Daten importiert bzw. übersprungen worden sind.
    </p>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xxl-4 col-xl-6 col-7\">
    <div class=\"card\">
      <div class=\"card-body\">
        <form method=\"post\" action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_importCsv");
        echo "\" enctype=\"multipart/form-data\" id=\"form_csv\" class=\"needs-validation\" novalidate>
          <div>
            <input class=\"form-check-input\" type=\"radio\" name=\"CSVFORMAT\" checked value=\"DB\" id=\"db\">
            <label class=\"form-check-label\" for=\"db\">
              Deutsche Bank
            </label>
          </div>
          <div>
            <input class=\"form-check-input\" type=\"radio\" name=\"CSVFORMAT\" id=\"to\" value=\"TargoBank\">
            <label class=\"form-check-label\" for=\"to\">
              Targo Bank (Excel '97)
            </label>
          </div>
          <div class=\"mt-3\">
            <label for=\"csvdata\" class=\"form-label\">Bitte Datei auswählen</label>
            <input class=\"form-control\" type=\"file\" id=\"csvdata\" name=\"CSVDATA\" placeholder=\"CSV Datei...\" required=\"required\">
          </div>
          <div class=\"mt-4\">
            <button type=\"submit\" class=\"btn btn-primary\">Hochladen</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "kontomanager/csv_importer_form.html.twig";
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
        return array (  86 => 19,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoKontoManager.html.twig' %}
{% block body %}
<div class=\"row\">
  <div class=\"col-12\">
    <div class=\"card-title h3\">CSV Daten importieren</div>
  </div>
  <div class=\"col-xl-6 col-md-8 col-12\">
    <p>Hiermit kann eine CSV Datei, die von der Targo Bank bzw. Deutsche Bank Website erstellt wurde, in die Datenbank übernommen werden.</p>
    <p>
      Dazu bitte die gewünschte CSV-Datei auswählen und hochladen, die Einträge werden dann automatisch in die Datenbank übernommen.<br>
      Doppelt vorhandene Einträge werden dabei übersprungen und am Ende wird eine Übersicht angezeigt, welche Daten importiert bzw. übersprungen worden sind.
    </p>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xxl-4 col-xl-6 col-7\">
    <div class=\"card\">
      <div class=\"card-body\">
        <form method=\"post\" action=\"{{ path(\"km_importCsv\") }}\" enctype=\"multipart/form-data\" id=\"form_csv\" class=\"needs-validation\" novalidate>
          <div>
            <input class=\"form-check-input\" type=\"radio\" name=\"CSVFORMAT\" checked value=\"DB\" id=\"db\">
            <label class=\"form-check-label\" for=\"db\">
              Deutsche Bank
            </label>
          </div>
          <div>
            <input class=\"form-check-input\" type=\"radio\" name=\"CSVFORMAT\" id=\"to\" value=\"TargoBank\">
            <label class=\"form-check-label\" for=\"to\">
              Targo Bank (Excel '97)
            </label>
          </div>
          <div class=\"mt-3\">
            <label for=\"csvdata\" class=\"form-label\">Bitte Datei auswählen</label>
            <input class=\"form-control\" type=\"file\" id=\"csvdata\" name=\"CSVDATA\" placeholder=\"CSV Datei...\" required=\"required\">
          </div>
          <div class=\"mt-4\">
            <button type=\"submit\" class=\"btn btn-primary\">Hochladen</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "kontomanager/csv_importer_form.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/kontomanager/csv_importer_form.html.twig");
    }
}
