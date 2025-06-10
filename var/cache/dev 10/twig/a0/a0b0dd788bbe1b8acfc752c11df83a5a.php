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

/* freelancermanager/configuration.html.twig */
class __TwigTemplate_814f8068d6f3747334d619de2dd127c1 extends Template
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
        return "InoFreelancerManager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/configuration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/configuration.html.twig"));

        $this->parent = $this->loadTemplate("InoFreelancerManager.html.twig", "freelancermanager/configuration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"row\">
    <div class=\"col-12\">
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item active h3\" aria-current=\"page\"><i class=\"fa-solid fa-gear fa-fw\"></i> Paramètres</li>
        </ol>
      </nav>
    </div>
  </div>
  
  <form method=\"post\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_configuration_save");
        echo "\" id=\"frm_fl_config\" class=\"needs-validation\" novalidate enctype=\"multipart/form-data\">
    <div class=\"row mb-3\">
      <div class=\"col-12\">
        <div class=\"card\">
          <div class=\"card-header\">
            Votre entreprise
          </div>
          <div class=\"card-body\">
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"companyName\" name=\"companyName\" placeholder=\"Nom complet de l'entreprise\" required value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 23, $this->source); })()), "companyName", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
              <label for=\"companyName\">Nom complet de l'entreprise</label>
            </div>
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"companyOwner\" name=\"companyOwner\" placeholder=\"Nom du propriétaire\" required value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 30, $this->source); })()), "companyOwner", [], "any", false, false, false, 30), "html", null, true);
        echo "\">
                  <label for=\"companyOwner\">Nom du/des propriétaire(s)</label>
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"email\" class=\"form-control\" id=\"companyEmail\" name=\"companyEmail\" placeholder=\"Adresse e-mail\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 36, $this->source); })()), "companyEmail", [], "any", false, false, false, 36), "html", null, true);
        echo "\">
                  <label for=\"companyEmail\">Adresse e-mail</label>
                </div>
              </div>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"companyStreet\" name=\"companyStreet\" placeholder=\"Adresse : Rue\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 43, $this->source); })()), "companyStreet", [], "any", false, false, false, 43), "html", null, true);
        echo "\">
              <label for=\"companyStreet\">Rue</label>
            </div>
  
            <div class=\"row\">
              <div class=\"col-3\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"companyPostal\" name=\"companyPostal\" placeholder=\"Code postal\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 50, $this->source); })()), "companyPostal", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
                  <label for=\"companyPostal\">Code postal</label>
                </div>
              </div>
              <div class=\"col-5\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"companyCity\" name=\"companyCity\" placeholder=\"Ville\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 56, $this->source); })()), "companyCity", [], "any", false, false, false, 56), "html", null, true);
        echo "\">
                  <label for=\"companyCity\">Ville</label>
                </div>
              </div>
              <div class=\"col-4\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"companyCountry\" name=\"companyCountry\" placeholder=\"Pays\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 62, $this->source); })()), "companyCountry", [], "any", false, false, false, 62), "html", null, true);
        echo "\">
                  <label for=\"companyCountry\">Pays</label>
                </div>
              </div>
            </div>
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"companyTaxNumber\" name=\"companyTaxNumber\" placeholder=\"Numéro fiscal\" required value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 71, $this->source); })()), "companyTaxNumber", [], "any", false, false, false, 71), "html", null, true);
        echo "\">
                  <label for=\"companyTaxNumber\">Numéro fiscal / TVA</label>
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"companyPhone\" name=\"companyPhone\" placeholder=\"Numéro de téléphone\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 77, $this->source); })()), "companyPhone", [], "any", false, false, false, 77), "html", null, true);
        echo "\">
                  <label for=\"companyPhone\">Téléphone</label>
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"companyFax\" name=\"companyFax\" placeholder=\"Numéro de fax\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 83, $this->source); })()), "companyFax", [], "any", false, false, false, 83), "html", null, true);
        echo "\">
                  <label for=\"companyFax\">Fax</label>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </div>
  
    <div class=\"row\">
      <div class=\"col-xl-4 col-md-6 col-12\">
        <div class=\"card h-100\">
          <div class=\"card-header\">
            Compte bancaire
          </div>
          <div class=\"card-body\">
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"bankName\" name=\"bankName\" placeholder=\"Ex : BNP Paribas\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 102, $this->source); })()), "bankName", [], "any", false, false, false, 102), "html", null, true);
        echo "\">
              <label for=\"bankName\">Nom de la banque</label>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"bankAccount\" name=\"bankAccount\" placeholder=\"Titulaire du compte\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 107, $this->source); })()), "bankAccount", [], "any", false, false, false, 107), "html", null, true);
        echo "\">
              <label for=\"bankAccount\">Titulaire du compte</label>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"bankIban\" name=\"bankIban\" placeholder=\"Numéro IBAN\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 112, $this->source); })()), "bankIban", [], "any", false, false, false, 112), "html", null, true);
        echo "\">
              <label for=\"bankIban\">IBAN</label>
            </div>
  
            <div class=\"form-floating\">
              <input type=\"text\" class=\"form-control\" id=\"bankBic\" name=\"bankBic\" placeholder=\"BIC\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 117, $this->source); })()), "bankBic", [], "any", false, false, false, 117), "html", null, true);
        echo "\">
              <label for=\"bankBic\">BIC</label>
            </div>
          </div>
        </div>
      </div>
  
      <div class=\"col-xl-4 col-md-6 col-12\">
        <div class=\"card h-100\">
          <div class=\"card-header\">
            Logo de l'entreprise
          </div>
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label for=\"companyLogo\">&nbsp;</label>
              <input type=\"file\" class=\"form-control\" id=\"companyLogo\" name=\"companyLogo\" placeholder=\"Télécharger votre logo (JPEG/PNG)\" accept=\"image/jpeg,image/png\">
            </div>
  
            <div>
              ";
        // line 136
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 136, $this->source); })()), "companyLogo", [], "any", false, false, false, 136))) {
            // line 137
            echo "                <p>Logo existant :</p>
                <p>";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 138, $this->source); })()), "companyLogoName", [], "any", false, false, false, 138), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 138, $this->source); })()), "companyLogoSize", [], "any", false, false, false, 138)), "html", null, true);
            echo " octets) 
                  <a href=\"#\" title=\"Supprimer le logo\" id=\"btn_del_logo\">
                    <i class=\"fa-solid fa-trash text-danger\"></i>
                  </a>
                </p>
              ";
        } else {
            // line 144
            echo "                <span class=\"text-muted\">Aucun logo disponible.</span>
              ";
        }
        // line 146
        echo "            </div>
          </div>
        </div>
      </div>
  
      <div class=\"col-xl-4 col-md-6 col-12\">
        <div class=\"card h-100\">
          <div class=\"card-body text-center\">
            ";
        // line 154
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 154, $this->source); })()), "companyLogo", [], "any", false, false, false, 154))) {
            // line 155
            echo "              <img src=\"data:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 155, $this->source); })()), "companyLogoMimeType", [], "any", false, false, false, 155), "html", null, true);
            echo ";base64,";
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->Base64Encode(twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 155, $this->source); })()), "companyLogo", [], "any", false, false, false, 155)), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 155, $this->source); })()), "companyLogoName", [], "any", false, false, false, 155), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 155, $this->source); })()), "companyLogoName", [], "any", false, false, false, 155), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["CONFIG"]) || array_key_exists("CONFIG", $context) ? $context["CONFIG"] : (function () { throw new RuntimeError('Variable "CONFIG" does not exist.', 155, $this->source); })()), "companyLogoSize", [], "any", false, false, false, 155)), "html", null, true);
            echo " octets)\">
            ";
        }
        // line 157
        echo "          </div>
        </div>
      </div>
    </div>
  
    <div class=\"row\">
      <div class=\"mt-3 col-12\">
        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"far fa-save\"></i> Enregistrer les paramètres</button>
      </div>
    </div>
  </form>
  
  <form method=\"post\" action=\"";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_configuration_delete_logo");
        echo "\" id=\"frm_del\"></form>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 172
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 173
        echo "  <script>
  \$(\"#btn_del_logo\").click(function(e) {
    e.preventDefault();
    SwalConfirmSubmit(\"Voulez-vous vraiment supprimer le logo ?\", \"frm_del\");
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
        return "freelancermanager/configuration.html.twig";
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
        return array (  330 => 173,  320 => 172,  308 => 169,  294 => 157,  280 => 155,  278 => 154,  268 => 146,  264 => 144,  253 => 138,  250 => 137,  248 => 136,  226 => 117,  218 => 112,  210 => 107,  202 => 102,  180 => 83,  171 => 77,  162 => 71,  150 => 62,  141 => 56,  132 => 50,  122 => 43,  112 => 36,  103 => 30,  93 => 23,  81 => 14,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoFreelancerManager.html.twig' %}

  {% block body %}
  <div class=\"row\">
    <div class=\"col-12\">
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item active h3\" aria-current=\"page\"><i class=\"fa-solid fa-gear fa-fw\"></i> Paramètres</li>
        </ol>
      </nav>
    </div>
  </div>
  
  <form method=\"post\" action=\"{{ path(\"fl_configuration_save\") }}\" id=\"frm_fl_config\" class=\"needs-validation\" novalidate enctype=\"multipart/form-data\">
    <div class=\"row mb-3\">
      <div class=\"col-12\">
        <div class=\"card\">
          <div class=\"card-header\">
            Votre entreprise
          </div>
          <div class=\"card-body\">
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"companyName\" name=\"companyName\" placeholder=\"Nom complet de l'entreprise\" required value=\"{{ CONFIG.companyName }}\">
              <label for=\"companyName\">Nom complet de l'entreprise</label>
            </div>
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"companyOwner\" name=\"companyOwner\" placeholder=\"Nom du propriétaire\" required value=\"{{ CONFIG.companyOwner }}\">
                  <label for=\"companyOwner\">Nom du/des propriétaire(s)</label>
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"email\" class=\"form-control\" id=\"companyEmail\" name=\"companyEmail\" placeholder=\"Adresse e-mail\" value=\"{{ CONFIG.companyEmail }}\">
                  <label for=\"companyEmail\">Adresse e-mail</label>
                </div>
              </div>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"companyStreet\" name=\"companyStreet\" placeholder=\"Adresse : Rue\" value=\"{{ CONFIG.companyStreet }}\">
              <label for=\"companyStreet\">Rue</label>
            </div>
  
            <div class=\"row\">
              <div class=\"col-3\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"companyPostal\" name=\"companyPostal\" placeholder=\"Code postal\" value=\"{{ CONFIG.companyPostal }}\">
                  <label for=\"companyPostal\">Code postal</label>
                </div>
              </div>
              <div class=\"col-5\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"companyCity\" name=\"companyCity\" placeholder=\"Ville\" value=\"{{ CONFIG.companyCity }}\">
                  <label for=\"companyCity\">Ville</label>
                </div>
              </div>
              <div class=\"col-4\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"companyCountry\" name=\"companyCountry\" placeholder=\"Pays\" value=\"{{ CONFIG.companyCountry }}\">
                  <label for=\"companyCountry\">Pays</label>
                </div>
              </div>
            </div>
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"companyTaxNumber\" name=\"companyTaxNumber\" placeholder=\"Numéro fiscal\" required value=\"{{ CONFIG.companyTaxNumber }}\">
                  <label for=\"companyTaxNumber\">Numéro fiscal / TVA</label>
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"companyPhone\" name=\"companyPhone\" placeholder=\"Numéro de téléphone\" value=\"{{ CONFIG.companyPhone }}\">
                  <label for=\"companyPhone\">Téléphone</label>
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"companyFax\" name=\"companyFax\" placeholder=\"Numéro de fax\" value=\"{{ CONFIG.companyFax }}\">
                  <label for=\"companyFax\">Fax</label>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </div>
  
    <div class=\"row\">
      <div class=\"col-xl-4 col-md-6 col-12\">
        <div class=\"card h-100\">
          <div class=\"card-header\">
            Compte bancaire
          </div>
          <div class=\"card-body\">
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"bankName\" name=\"bankName\" placeholder=\"Ex : BNP Paribas\" value=\"{{ CONFIG.bankName }}\">
              <label for=\"bankName\">Nom de la banque</label>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"bankAccount\" name=\"bankAccount\" placeholder=\"Titulaire du compte\" value=\"{{ CONFIG.bankAccount }}\">
              <label for=\"bankAccount\">Titulaire du compte</label>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"bankIban\" name=\"bankIban\" placeholder=\"Numéro IBAN\" value=\"{{ CONFIG.bankIban }}\">
              <label for=\"bankIban\">IBAN</label>
            </div>
  
            <div class=\"form-floating\">
              <input type=\"text\" class=\"form-control\" id=\"bankBic\" name=\"bankBic\" placeholder=\"BIC\" value=\"{{ CONFIG.bankBic }}\">
              <label for=\"bankBic\">BIC</label>
            </div>
          </div>
        </div>
      </div>
  
      <div class=\"col-xl-4 col-md-6 col-12\">
        <div class=\"card h-100\">
          <div class=\"card-header\">
            Logo de l'entreprise
          </div>
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label for=\"companyLogo\">&nbsp;</label>
              <input type=\"file\" class=\"form-control\" id=\"companyLogo\" name=\"companyLogo\" placeholder=\"Télécharger votre logo (JPEG/PNG)\" accept=\"image/jpeg,image/png\">
            </div>
  
            <div>
              {% if CONFIG.companyLogo is not null %}
                <p>Logo existant :</p>
                <p>{{ CONFIG.companyLogoName }} ({{ CONFIG.companyLogoSize|format_number }} octets) 
                  <a href=\"#\" title=\"Supprimer le logo\" id=\"btn_del_logo\">
                    <i class=\"fa-solid fa-trash text-danger\"></i>
                  </a>
                </p>
              {% else %}
                <span class=\"text-muted\">Aucun logo disponible.</span>
              {% endif %}
            </div>
          </div>
        </div>
      </div>
  
      <div class=\"col-xl-4 col-md-6 col-12\">
        <div class=\"card h-100\">
          <div class=\"card-body text-center\">
            {% if CONFIG.companyLogo is not null %}
              <img src=\"data:{{ CONFIG.companyLogoMimeType }};base64,{{CONFIG.companyLogo|Base64Encode }}\" class=\"img-fluid\" alt=\"{{ CONFIG.companyLogoName }}\" title=\"{{ CONFIG.companyLogoName }} ({{ CONFIG.companyLogoSize|format_number }} octets)\">
            {% endif %}
          </div>
        </div>
      </div>
    </div>
  
    <div class=\"row\">
      <div class=\"mt-3 col-12\">
        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"far fa-save\"></i> Enregistrer les paramètres</button>
      </div>
    </div>
  </form>
  
  <form method=\"post\" action=\"{{ path(\"fl_configuration_delete_logo\") }}\" id=\"frm_del\"></form>
  {% endblock %}
  
  {% block javascripts %}
  <script>
  \$(\"#btn_del_logo\").click(function(e) {
    e.preventDefault();
    SwalConfirmSubmit(\"Voulez-vous vraiment supprimer le logo ?\", \"frm_del\");
  });
  </script>
  {% endblock %}
  ", "freelancermanager/configuration.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/freelancermanager/configuration.html.twig");
    }
}
