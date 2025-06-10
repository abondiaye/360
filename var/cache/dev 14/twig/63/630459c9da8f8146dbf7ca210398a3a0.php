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

/* freelancermanager/customer_form.html.twig */
class __TwigTemplate_c25b16dc9daf75ae26495c6e01343f9c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/customer_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/customer_form.html.twig"));

        $this->parent = $this->loadTemplate("InoFreelancerManager.html.twig", "freelancermanager/customer_form.html.twig", 1);
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
          <li class=\"breadcrumb-item h3\" aria-current=\"page\">
            <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_customer_list");
        echo "\">
              <i class=\"fa-solid fa-user-group fa-fw\"></i> Clients
            </a>
          </li>
          <li class=\"breadcrumb-item active h3\" aria-current=\"page\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["PAGE_TITLE"]) || array_key_exists("PAGE_TITLE", $context) ? $context["PAGE_TITLE"] : (function () { throw new RuntimeError('Variable "PAGE_TITLE" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</li>
        </ol>
      </nav>
    </div>
  </div>
  
  <form method=\"post\" action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_customer_save");
        echo "\" class=\"needs-validation\" novalidate>
    <input type=\"hidden\" name=\"CUSTID\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["CUSTOMER"] ?? null), "id", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["CUSTOMER"] ?? null), "id", [], "any", false, false, false, 20), 0)) : (0)), "html", null, true);
        echo "\">
  
    <div class=\"row\">
      <div class=\"col-xxl-6 col-md-12 mb-3\">
        <div class=\"card\">
          <div class=\"card-header\">
            <span>Données client</span>
            ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 27, $this->source); })()), "createdOn", [], "any", false, false, false, 27) != "")) {
            // line 28
            echo "              <small class=\"text-muted\">
                (Créé le ";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 29, $this->source); })()), "createdOn", [], "any", false, false, false, 29)), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 29, $this->source); })()), "lastModifiedOn", [], "any", false, false, false, 29) != "")) {
                echo ", dernière modification le ";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 29, $this->source); })()), "lastModifiedOn", [], "any", false, false, false, 29)), "html", null, true);
            }
            echo ")
              </small>
            ";
        }
        // line 32
        echo "          </div>
          <div class=\"card-body\">
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"customerNumber\" name=\"customerNumber\" placeholder=\"Numéro client\" required value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 38, $this->source); })()), "customerNumber", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
                  <label for=\"customerNumber\">Numéro client</label>
                </div>
              </div>
              <div class=\"col pt-3\">
                <div class=\"form-check form-switch\">
                  <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"active\" name=\"active\" value=\"1\" ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 44, $this->source); })()), "active", [], "any", false, false, false, 44) == true)) {
            echo " checked";
        }
        echo ">
                  <label class=\"form-check-label\" for=\"active\">Client actif ?</label>
                </div>
              </div>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Nom de l'entreprise\" required value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), "html", null, true);
        echo "\">
              <label for=\"name\">Nom de l'entreprise</label>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"street\" name=\"street\" placeholder=\"Rue\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 56, $this->source); })()), "street", [], "any", false, false, false, 56), "html", null, true);
        echo "\">
              <label for=\"street\">Rue</label>
            </div>
  
            <div class=\"row\">
              <div class=\"col-3\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"postalCode\" name=\"postalCode\" placeholder=\"Code postal\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 63, $this->source); })()), "postalCode", [], "any", false, false, false, 63), "html", null, true);
        echo "\">
                  <label for=\"postalCode\">Code postal</label>
                </div>
              </div>
              <div class=\"col-9\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\" placeholder=\"Ville\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 69, $this->source); })()), "city", [], "any", false, false, false, 69), "html", null, true);
        echo "\">
                  <label for=\"city\">Ville</label>
                </div>
              </div>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"country\" name=\"country\" placeholder=\"Pays\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 76, $this->source); })()), "country", [], "any", false, false, false, 76), "html", null, true);
        echo "\">
              <label for=\"country\">Pays</label>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"url\" class=\"form-control\" id=\"customerUrl\" name=\"customerUrl\" placeholder=\"Site web\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 81, $this->source); })()), "customerUrl", [], "any", false, false, false, 81), "html", null, true);
        echo "\">
              <label for=\"customerUrl\">Site web</label>
            </div>
  
          </div>
        </div>
      </div>
  
      <div class=\"col\">
        <div class=\"card mb-3\">
          <div class=\"card-header\">
            Contact
          </div>
          <div class=\"card-body\">
  
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"contactName\" name=\"contactName\" placeholder=\"Nom du contact\" required value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 97, $this->source); })()), "contactName", [], "any", false, false, false, 97), "html", null, true);
        echo "\">
              <label for=\"contactName\">Nom du contact</label>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"email\" class=\"form-control\" id=\"contactEmail\" name=\"contactEmail\" placeholder=\"Adresse e-mail\" required value=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 102, $this->source); })()), "contactEmail", [], "any", false, false, false, 102), "html", null, true);
        echo "\">
              <label for=\"contactEmail\">Adresse e-mail</label>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"contactPosition\" name=\"contactPosition\" placeholder=\"Poste\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 107, $this->source); })()), "contactPosition", [], "any", false, false, false, 107), "html", null, true);
        echo "\">
              <label for=\"contactPosition\">Poste</label>
            </div>
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"tel\" class=\"form-control\" id=\"phoneBusiness\" name=\"phoneBusiness\" placeholder=\"Téléphone professionnel\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 114, $this->source); })()), "phoneBusiness", [], "any", false, false, false, 114), "html", null, true);
        echo "\">
                  <label for=\"phoneBusiness\">Téléphone professionnel</label>
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"tel\" class=\"form-control\" id=\"phoneFax\" name=\"phoneFax\" placeholder=\"Fax\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 120, $this->source); })()), "phoneFax", [], "any", false, false, false, 120), "html", null, true);
        echo "\">
                  <label for=\"phoneFax\">Fax</label>
                </div>
              </div>
            </div>
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"tel\" class=\"form-control\" id=\"phoneMobile\" name=\"phoneMobile\" placeholder=\"Mobile\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 129, $this->source); })()), "phoneMobile", [], "any", false, false, false, 129), "html", null, true);
        echo "\">
                  <label for=\"phoneMobile\">Mobile</label>
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"tel\" class=\"form-control\" id=\"phonePrivate\" name=\"phonePrivate\" placeholder=\"Téléphone privé\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 135, $this->source); })()), "phonePrivate", [], "any", false, false, false, 135), "html", null, true);
        echo "\">
                  <label for=\"phonePrivate\">Téléphone privé</label>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </div>
  
    </div>
  
    <div class=\"row\">
      <div class=\"col\">
        <button type=\"submit\" class=\"btn btn-primary\">
          <i class=\"far fa-save\"></i> Enregistrer
        </button>
        ";
        // line 152
        if (((twig_get_attribute($this->env, $this->source, ($context["CUSTOMER"] ?? null), "id", [], "any", true, true, false, 152)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["CUSTOMER"] ?? null), "id", [], "any", false, false, false, 152), 0)) : (0))) {
            // line 153
            echo "        <button type=\"button\" class=\"btn btn-danger\" id=\"btn_cust_delete\">
          <i class=\"fa-solid fa-trash\"></i> Supprimer
        </button>
        ";
        }
        // line 157
        echo "        <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_customer_list");
        echo "'\">
          <i class=\"fa-solid fa-arrow-left\"></i> Retour
        </button>
      </div>
    </div>
  </form>
  
  <form method=\"post\" action=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_customer_delete");
        echo "\" id=\"frm_cust_delete\">
    <input type=\"hidden\" name=\"CUSTID\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CUSTOMER"]) || array_key_exists("CUSTOMER", $context) ? $context["CUSTOMER"] : (function () { throw new RuntimeError('Variable "CUSTOMER" does not exist.', 165, $this->source); })()), "id", [], "any", false, false, false, 165), "html", null, true);
        echo "\">
  </form>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 169
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 170
        echo "  <script>
  \$(\"#btn_cust_delete\").on('click', function() {
    SwalConfirmSubmit(\"Voulez-vous vraiment supprimer ce client ?<br>Toutes les données associées à ce client seront également supprimées !\", 'frm_cust_delete');
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
        return "freelancermanager/customer_form.html.twig";
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
        return array (  336 => 170,  326 => 169,  313 => 165,  309 => 164,  298 => 157,  292 => 153,  290 => 152,  270 => 135,  261 => 129,  249 => 120,  240 => 114,  230 => 107,  222 => 102,  214 => 97,  195 => 81,  187 => 76,  177 => 69,  168 => 63,  158 => 56,  150 => 51,  138 => 44,  129 => 38,  121 => 32,  111 => 29,  108 => 28,  106 => 27,  96 => 20,  92 => 19,  83 => 13,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoFreelancerManager.html.twig' %}

  {% block body %}
  <div class=\"row\">
    <div class=\"col-12\">
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item h3\" aria-current=\"page\">
            <a href=\"{{ path(\"fl_customer_list\") }}\">
              <i class=\"fa-solid fa-user-group fa-fw\"></i> Clients
            </a>
          </li>
          <li class=\"breadcrumb-item active h3\" aria-current=\"page\">{{ PAGE_TITLE }}</li>
        </ol>
      </nav>
    </div>
  </div>
  
  <form method=\"post\" action=\"{{ path(\"fl_customer_save\") }}\" class=\"needs-validation\" novalidate>
    <input type=\"hidden\" name=\"CUSTID\" value=\"{{ CUSTOMER.id|default(0) }}\">
  
    <div class=\"row\">
      <div class=\"col-xxl-6 col-md-12 mb-3\">
        <div class=\"card\">
          <div class=\"card-header\">
            <span>Données client</span>
            {% if CUSTOMER.createdOn != \"\" %}
              <small class=\"text-muted\">
                (Créé le {{ CUSTOMER.createdOn|format_datetime }}{% if CUSTOMER.lastModifiedOn != \"\" %}, dernière modification le {{ CUSTOMER.lastModifiedOn|format_datetime }}{% endif %})
              </small>
            {% endif %}
          </div>
          <div class=\"card-body\">
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"customerNumber\" name=\"customerNumber\" placeholder=\"Numéro client\" required value=\"{{ CUSTOMER.customerNumber }}\">
                  <label for=\"customerNumber\">Numéro client</label>
                </div>
              </div>
              <div class=\"col pt-3\">
                <div class=\"form-check form-switch\">
                  <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"active\" name=\"active\" value=\"1\" {% if CUSTOMER.active == true %} checked{% endif %}>
                  <label class=\"form-check-label\" for=\"active\">Client actif ?</label>
                </div>
              </div>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Nom de l'entreprise\" required value=\"{{ CUSTOMER.name }}\">
              <label for=\"name\">Nom de l'entreprise</label>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"street\" name=\"street\" placeholder=\"Rue\" value=\"{{ CUSTOMER.street }}\">
              <label for=\"street\">Rue</label>
            </div>
  
            <div class=\"row\">
              <div class=\"col-3\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"postalCode\" name=\"postalCode\" placeholder=\"Code postal\" value=\"{{ CUSTOMER.postalCode }}\">
                  <label for=\"postalCode\">Code postal</label>
                </div>
              </div>
              <div class=\"col-9\">
                <div class=\"form-floating mb-3\">
                  <input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\" placeholder=\"Ville\" value=\"{{ CUSTOMER.city }}\">
                  <label for=\"city\">Ville</label>
                </div>
              </div>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"country\" name=\"country\" placeholder=\"Pays\" value=\"{{ CUSTOMER.country }}\">
              <label for=\"country\">Pays</label>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"url\" class=\"form-control\" id=\"customerUrl\" name=\"customerUrl\" placeholder=\"Site web\" value=\"{{ CUSTOMER.customerUrl }}\">
              <label for=\"customerUrl\">Site web</label>
            </div>
  
          </div>
        </div>
      </div>
  
      <div class=\"col\">
        <div class=\"card mb-3\">
          <div class=\"card-header\">
            Contact
          </div>
          <div class=\"card-body\">
  
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"contactName\" name=\"contactName\" placeholder=\"Nom du contact\" required value=\"{{ CUSTOMER.contactName }}\">
              <label for=\"contactName\">Nom du contact</label>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"email\" class=\"form-control\" id=\"contactEmail\" name=\"contactEmail\" placeholder=\"Adresse e-mail\" required value=\"{{ CUSTOMER.contactEmail }}\">
              <label for=\"contactEmail\">Adresse e-mail</label>
            </div>
  
            <div class=\"form-floating mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"contactPosition\" name=\"contactPosition\" placeholder=\"Poste\" value=\"{{ CUSTOMER.contactPosition }}\">
              <label for=\"contactPosition\">Poste</label>
            </div>
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"tel\" class=\"form-control\" id=\"phoneBusiness\" name=\"phoneBusiness\" placeholder=\"Téléphone professionnel\" value=\"{{ CUSTOMER.phoneBusiness }}\">
                  <label for=\"phoneBusiness\">Téléphone professionnel</label>
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"tel\" class=\"form-control\" id=\"phoneFax\" name=\"phoneFax\" placeholder=\"Fax\" value=\"{{ CUSTOMER.phoneFax }}\">
                  <label for=\"phoneFax\">Fax</label>
                </div>
              </div>
            </div>
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"tel\" class=\"form-control\" id=\"phoneMobile\" name=\"phoneMobile\" placeholder=\"Mobile\" value=\"{{ CUSTOMER.phoneMobile }}\">
                  <label for=\"phoneMobile\">Mobile</label>
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-floating mb-3\">
                  <input type=\"tel\" class=\"form-control\" id=\"phonePrivate\" name=\"phonePrivate\" placeholder=\"Téléphone privé\" value=\"{{ CUSTOMER.phonePrivate }}\">
                  <label for=\"phonePrivate\">Téléphone privé</label>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </div>
  
    </div>
  
    <div class=\"row\">
      <div class=\"col\">
        <button type=\"submit\" class=\"btn btn-primary\">
          <i class=\"far fa-save\"></i> Enregistrer
        </button>
        {% if CUSTOMER.id|default(0) %}
        <button type=\"button\" class=\"btn btn-danger\" id=\"btn_cust_delete\">
          <i class=\"fa-solid fa-trash\"></i> Supprimer
        </button>
        {% endif %}
        <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='{{ path(\"fl_customer_list\") }}'\">
          <i class=\"fa-solid fa-arrow-left\"></i> Retour
        </button>
      </div>
    </div>
  </form>
  
  <form method=\"post\" action=\"{{ path(\"fl_customer_delete\") }}\" id=\"frm_cust_delete\">
    <input type=\"hidden\" name=\"CUSTID\" value=\"{{ CUSTOMER.id }}\">
  </form>
  {% endblock %}
  
  {% block javascripts %}
  <script>
  \$(\"#btn_cust_delete\").on('click', function() {
    SwalConfirmSubmit(\"Voulez-vous vraiment supprimer ce client ?<br>Toutes les données associées à ce client seront également supprimées !\", 'frm_cust_delete');
  });
  </script>
  {% endblock %}
  ", "freelancermanager/customer_form.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/freelancermanager/customer_form.html.twig");
    }
}
