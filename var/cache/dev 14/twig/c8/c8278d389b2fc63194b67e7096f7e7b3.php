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

/* freelancermanager/_services_travel_allowance.html.twig */
class __TwigTemplate_5c3fd1d7b98fc997d023f5ae3c7128dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/_services_travel_allowance.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/_services_travel_allowance.html.twig"));

        // line 1
        echo "<div class=\"card\">
  <div class=\"card-header\">
    <span>Configuration des frais de déplacement</span>
  </div>
  <div class=\"card-body\">
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"form-floating mb-3\">
          <input type=\"date\" class=\"form-control\" name=\"fl_ta_date\" id=\"fl_ta_date\" value=\"\" required=\"required\">
          <label for=\"fl_sd\">Date</label>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"input-group mb-3\">
          <div class=\"form-floating\">
            <input type=\"text\" class=\"form-control\" id=\"fl_ta_sum\" name=\"fl_ta_sum\" placeholder=\"Frais de déplacement à facturer en EUR\" required=\"required\">
            <label for=\"fl_ta_sum\">Frais de déplacement</label>
          </div>
          <span class=\"input-group-text\">&euro;</span>
        </div>
      </div>
    </div>
    <div class=\"form-floating\">
      <textarea class=\"form-control\" name=\"wdesc\" placeholder=\"Informations supplémentaires\" id=\"description\" style=\"height:100px;\"></textarea>
      <label for=\"description\">Informations supplémentaires (optionnel)</label>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "freelancermanager/_services_travel_allowance.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
  <div class=\"card-header\">
    <span>Configuration des frais de déplacement</span>
  </div>
  <div class=\"card-body\">
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"form-floating mb-3\">
          <input type=\"date\" class=\"form-control\" name=\"fl_ta_date\" id=\"fl_ta_date\" value=\"\" required=\"required\">
          <label for=\"fl_sd\">Date</label>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"input-group mb-3\">
          <div class=\"form-floating\">
            <input type=\"text\" class=\"form-control\" id=\"fl_ta_sum\" name=\"fl_ta_sum\" placeholder=\"Frais de déplacement à facturer en EUR\" required=\"required\">
            <label for=\"fl_ta_sum\">Frais de déplacement</label>
          </div>
          <span class=\"input-group-text\">&euro;</span>
        </div>
      </div>
    </div>
    <div class=\"form-floating\">
      <textarea class=\"form-control\" name=\"wdesc\" placeholder=\"Informations supplémentaires\" id=\"description\" style=\"height:100px;\"></textarea>
      <label for=\"description\">Informations supplémentaires (optionnel)</label>
    </div>
  </div>
</div>
", "freelancermanager/_services_travel_allowance.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/freelancermanager/_services_travel_allowance.html.twig");
    }
}
