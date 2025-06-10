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

/* freelancermanager/invoices_form.html.twig */
class __TwigTemplate_1ddfb9f888fdfde376c7942c558b5f91 extends Template
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
        return "InoFreelancerManager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/invoices_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/invoices_form.html.twig"));

        $this->parent = $this->loadTemplate("InoFreelancerManager.html.twig", "freelancermanager/invoices_form.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_invoices_list");
        echo "\">
              <i class=\"fa-solid fa-file-invoice-dollar fa-fw\"></i> Factures
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
  
  <form method=\"post\" action=\"#\" class=\"needs-validation\" novalidate id=\"frm_invoice\" data-blob=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_invoices_dl");
        echo "\" enctype=\"multipart/form-data\">
  <input type=\"hidden\" name=\"PID\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "id", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "id", [], "any", false, false, false, 20), 0)) : (0)), "html", null, true);
        echo "\">
  
  <div class=\"row\">
    <div class=\"col-xl-6 col-12\">
      <div class=\"card h-100\">
        <div class=\"card-header\">
          Informations client
          ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, (isset($context["INVOICE"]) || array_key_exists("INVOICE", $context) ? $context["INVOICE"] : (function () { throw new RuntimeError('Variable "INVOICE" does not exist.', 27, $this->source); })()), "createdOn", [], "any", false, false, false, 27) != "")) {
            // line 28
            echo "            <small class=\"text-muted\"> (Créé le ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["INVOICE"]) || array_key_exists("INVOICE", $context) ? $context["INVOICE"] : (function () { throw new RuntimeError('Variable "INVOICE" does not exist.', 28, $this->source); })()), "createdOn", [], "any", false, false, false, 28)), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["INVOICE"]) || array_key_exists("INVOICE", $context) ? $context["INVOICE"] : (function () { throw new RuntimeError('Variable "INVOICE" does not exist.', 28, $this->source); })()), "lastModifiedOn", [], "any", false, false, false, 28) != "")) {
                echo ", modifié le ";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["INVOICE"]) || array_key_exists("INVOICE", $context) ? $context["INVOICE"] : (function () { throw new RuntimeError('Variable "INVOICE" does not exist.', 28, $this->source); })()), "lastModifiedOn", [], "any", false, false, false, 28)), "html", null, true);
            }
            echo ")</small>
          ";
        }
        // line 30
        echo "        </div>
        <div class=\"card-body\">
  
          <div class=\"form-floating mb-3\">
            <select class=\"form-select\" id=\"RefCustomerId\" name=\"RefCustomerId\" aria-label=\"Liste des clients\" required>
              <option value=\"\">--- Veuillez choisir un client ---</option>
              ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["CUSTOMER_LIST"]) || array_key_exists("CUSTOMER_LIST", $context) ? $context["CUSTOMER_LIST"] : (function () { throw new RuntimeError('Variable "CUSTOMER_LIST" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 37
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 37) == ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "refCustomer", [], "any", false, true, false, 37), "id", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "refCustomer", [], "any", false, true, false, 37), "id", [], "any", false, false, false, 37), 0)) : (0)))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </select>
            <label for=\"RefCustomerId\">Client lié à la facture</label>
          </div>
  
          <div class=\"form-floating mb-3\">
            <input type=\"text\" class=\"form-control\" id=\"customerNumber\" name=\"customerNumber\" placeholder=\"Numéro client\" required value=\"";
        // line 44
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "refCustomer", [], "any", false, true, false, 44), "customerNumber", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "refCustomer", [], "any", false, true, false, 44), "customerNumber", [], "any", false, false, false, 44), "")) : ("")), "html", null, true);
        echo "\">
            <label for=\"customerNumber\">Numéro client</label>
          </div>
  
          <div class=\"form-floating mb-3\">
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Nom de l'entreprise\" required value=\"";
        // line 49
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "refCustomer", [], "any", false, true, false, 49), "name", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "refCustomer", [], "any", false, true, false, 49), "name", [], "any", false, false, false, 49), "")) : ("")), "html", null, true);
        echo "\">
            <label for=\"name\">Nom de l'entreprise</label>
          </div>
  
          <div class=\"form-floating mb-3\">
            <input type=\"text\" class=\"form-control\" id=\"street\" name=\"street\" placeholder=\"Rue\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "refCustomer", [], "any", false, true, false, 54), "street", [], "any", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "refCustomer", [], "any", false, true, false, 54), "street", [], "any", false, false, false, 54), "")) : ("")), "html", null, true);
        echo "\">
            <label for=\"street\">Rue</label>
          </div>
  
          <div class=\"row\">
            <div class=\"col-3\">
              <div class=\"form-floating mb-3\">
                <input type=\"text\" class=\"form-control\" id=\"postalCode\" name=\"postalCode\" placeholder=\"Code postal\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "refCustomer", [], "any", false, true, false, 61), "postalCode", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "refCustomer", [], "any", false, true, false, 61), "postalCode", [], "any", false, false, false, 61), "")) : ("")), "html", null, true);
        echo "\">
                <label for=\"postalCode\">Code postal</label>
              </div>
            </div>
            <div class=\"col-9\">
              <div class=\"form-floating mb-3\">
                <input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\" placeholder=\"Ville\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "refCustomer", [], "any", false, true, false, 67), "city", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "refCustomer", [], "any", false, true, false, 67), "city", [], "any", false, false, false, 67), "")) : ("")), "html", null, true);
        echo "\">
                <label for=\"city\">Ville</label>
              </div>
            </div>
          </div>
  
          <div class=\"form-floating mb-3\">
            <input type=\"text\" class=\"form-control\" id=\"country\" name=\"country\" placeholder=\"Pays\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "refCustomer", [], "any", false, true, false, 74), "country", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "refCustomer", [], "any", false, true, false, 74), "country", [], "any", false, false, false, 74), "")) : ("")), "html", null, true);
        echo "\">
            <label for=\"country\">Pays</label>
          </div>
  
        </div>
      </div>
    </div>
  
    <div class=\"col-xl-6 col-12\">
      <div class=\"card h-100\">
        <div class=\"card-header\">
          Informations facture
        </div>
        <div class=\"card-body\">
  
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-floating mb-3\">
                <input type=\"date\" class=\"form-control\" id=\"inv_date\" name=\"inv_date\" placeholder=\"Date de facture\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["INVOICE"]) || array_key_exists("INVOICE", $context) ? $context["INVOICE"] : (function () { throw new RuntimeError('Variable "INVOICE" does not exist.', 92, $this->source); })()), "invoiceDate", [], "any", false, false, false, 92), "html", null, true);
        echo "\" required>
                <label for=\"inv_date\">Date de facture</label>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"form-floating mb-3\">
                <input type=\"text\" class=\"form-control\" id=\"inv_nr\" name=\"inv_nr\" placeholder=\"Numéro de facture\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["INVOICE"]) || array_key_exists("INVOICE", $context) ? $context["INVOICE"] : (function () { throw new RuntimeError('Variable "INVOICE" does not exist.', 98, $this->source); })()), "invoiceNumber", [], "any", false, false, false, 98), "html", null, true);
        echo "\" required>
                <label for=\"inv_nr\">Numéro de facture</label>
              </div>
            </div>
          </div>
  
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-floating mb-3\">
                <select class=\"form-select\" id=\"inv_type\" name=\"inv_type\" aria-label=\"Type de facture\" required>
                  <option value=\"\">--- Veuillez choisir ---</option>
                  ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["INVOICE_TYPES"]) || array_key_exists("INVOICE_TYPES", $context) ? $context["INVOICE_TYPES"] : (function () { throw new RuntimeError('Variable "INVOICE_TYPES" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 110
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"";
            if (($context["id"] == ((twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "invoiceType", [], "any", true, true, false, 110)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "invoiceType", [], "any", false, false, false, 110), 0)) : (0)))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                </select>
                <label for=\"inv_type\">Type de facture</label>
              </div>
            </div>
            <div class=\"col pt-3\">
              <div class=\"form-check form-switch\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"ispaid\" name=\"ispaid\" ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, (isset($context["INVOICE"]) || array_key_exists("INVOICE", $context) ? $context["INVOICE"] : (function () { throw new RuntimeError('Variable "INVOICE" does not exist.', 118, $this->source); })()), "isPaid", [], "any", false, false, false, 118)) {
            echo " checked";
        }
        echo ">
                <label class=\"form-check-label\" for=\"ispaid\">Payée ?</label>
              </div>
            </div>
          </div>
  
          <div class=\"row\">
            <div class=\"col mb-3\">
              <div class=\"input-group has-validation\">
                <div class=\"form-floating\">
                  <input type=\"text\" class=\"form-control text-end\" id=\"inv_netto\" placeholder=\"Montant HT\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["INVOICE"]) || array_key_exists("INVOICE", $context) ? $context["INVOICE"] : (function () { throw new RuntimeError('Variable "INVOICE" does not exist.', 128, $this->source); })()), "sumNetto", [], "any", false, false, false, 128), "html", null, true);
        echo "\" required>
                  <label for=\"inv_netto\">Montant HT</label>
                </div>
                <span class=\"input-group-text\">&euro;</span>
                <div class=\"invalid-feedback\">Veuillez saisir un montant valide !</div>
              </div>
            </div>
  
            <div class=\"col mb-3\">
              <div class=\"input-group has-validation\">
                <div class=\"form-floating\">
                  <input type=\"text\" class=\"form-control text-end\" id=\"inv_brutto\" placeholder=\"Montant TTC\" value=\"";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["INVOICE"]) || array_key_exists("INVOICE", $context) ? $context["INVOICE"] : (function () { throw new RuntimeError('Variable "INVOICE" does not exist.', 139, $this->source); })()), "sumBrutto", [], "any", false, false, false, 139), "html", null, true);
        echo "\" required>
                  <label for=\"inv_brutto\">Montant TTC</label>
                </div>
                <span class=\"input-group-text\">&euro;</span>
                <div class=\"invalid-feedback\">Veuillez saisir un montant valide !</div>
              </div>
            </div>
  
            <div class=\"col mb-3\">
              <div class=\"input-group has-validation\">
                <div class=\"form-floating\">
                  <input type=\"text\" class=\"form-control text-end\" id=\"inv_tax\" placeholder=\"TVA\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "taxPct", [], "any", true, true, false, 150)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["INVOICE"] ?? null), "taxPct", [], "any", false, false, false, 150), "19")) : ("19")), "html", null, true);
        echo "\" required>
                  <label for=\"inv_tax\">TVA (%)</label>
                </div>
                <span class=\"input-group-text\">%</span>
                <div class=\"invalid-feedback\">Veuillez saisir un pourcentage valide !</div>
              </div>
            </div>
          </div>
  
          <div class=\"row mb-3\">
            <div class=\"col\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"inv_notax\" name=\"inv_notax\" value=\"1\" ";
        // line 162
        if ((twig_get_attribute($this->env, $this->source, (isset($context["INVOICE"]) || array_key_exists("INVOICE", $context) ? $context["INVOICE"] : (function () { throw new RuntimeError('Variable "INVOICE" does not exist.', 162, $this->source); })()), "noTax", [], "any", false, false, false, 162) == true)) {
            echo " checked";
        }
        echo ">
                <label class=\"form-check-label\" for=\"inv_notax\">
                  Sans TVA (Art. 293 B du CGI)
                </label>
              </div>
            </div>
          </div>
  
          <div class=\"row mb-3\">
            <div class=\"col\">
              <div class=\"form-floating\">
                <textarea class=\"form-control\" placeholder=\"Commentaire optionnel\" id=\"inv_comment\" style=\"height:80px\">";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["INVOICE"]) || array_key_exists("INVOICE", $context) ? $context["INVOICE"] : (function () { throw new RuntimeError('Variable "INVOICE" does not exist.', 173, $this->source); })()), "comment", [], "any", false, false, false, 173), "html", null, true);
        echo "</textarea>
                <label for=\"inv_comment\">Commentaire (optionnel)</label>
              </div>
            </div>
          </div>
  
          <div class=\"row\">
            <div class=\"col\">
              <label for=\"inv_pdf\" class=\"form-label\">Télécharger la facture (PDF)</label>
              <input class=\"form-control\" type=\"file\" id=\"inv_pdf\" accept=\"application/pdf\">
            </div>
  
            <div class=\"col d-flex align-items-end\">
              ";
        // line 186
        if ((twig_get_attribute($this->env, $this->source, (isset($context["INVOICE"]) || array_key_exists("INVOICE", $context) ? $context["INVOICE"] : (function () { throw new RuntimeError('Variable "INVOICE" does not exist.', 186, $this->source); })()), "pdfFilename", [], "any", false, false, false, 186) != "")) {
            // line 187
            echo "              <button type=\"button\" class=\"btn btn-secondary me-1\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["INVOICE"]) || array_key_exists("INVOICE", $context) ? $context["INVOICE"] : (function () { throw new RuntimeError('Variable "INVOICE" does not exist.', 187, $this->source); })()), "pdfFilename", [], "any", false, false, false, 187), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, (isset($context["INVOICE"]) || array_key_exists("INVOICE", $context) ? $context["INVOICE"] : (function () { throw new RuntimeError('Variable "INVOICE" does not exist.', 187, $this->source); })()), "pdfFilesize", [], "any", false, false, false, 187)), "html", null, true);
            echo " octets)\">
                <i class=\"fa-solid fa-download\"></i> Télécharger
              </button>
              <button type=\"button\" class=\"btn btn-danger\">
                <i class=\"fa-solid fa-trash\"></i> Supprimer
              </button>
              ";
        } else {
            // line 194
            echo "                <input type=\"text\" readonly class=\"form-control-plaintext text-muted\" id=\"inv_nofile\" value=\"Aucun fichier de facture disponible\">
              ";
        }
        // line 196
        echo "            </div>
          </div>
  
        </div>
      </div>
    </div>
  </div>
  
  <div class=\"row mt-3\">
    <div class=\"col\">
      <button type=\"submit\" class=\"btn btn-primary\">
        <i class=\"far fa-save\"></i> Enregistrer la facture
      </button>
      <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='";
        // line 209
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_invoices_list");
        echo "'\">
        <i class=\"fa-solid fa-arrow-left\"></i> Retour à la liste
      </button>
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
        return "freelancermanager/invoices_form.html.twig";
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
        return array (  391 => 209,  376 => 196,  372 => 194,  359 => 187,  357 => 186,  341 => 173,  325 => 162,  310 => 150,  296 => 139,  282 => 128,  267 => 118,  259 => 112,  244 => 110,  240 => 109,  226 => 98,  217 => 92,  196 => 74,  186 => 67,  177 => 61,  167 => 54,  159 => 49,  151 => 44,  144 => 39,  129 => 37,  125 => 36,  117 => 30,  107 => 28,  105 => 27,  95 => 20,  91 => 19,  82 => 13,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
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
            <a href=\"{{ path(\"fl_invoices_list\") }}\">
              <i class=\"fa-solid fa-file-invoice-dollar fa-fw\"></i> Factures
            </a>
          </li>
          <li class=\"breadcrumb-item active h3\" aria-current=\"page\">{{ PAGE_TITLE }}</li>
        </ol>
      </nav>
    </div>
  </div>
  
  <form method=\"post\" action=\"#\" class=\"needs-validation\" novalidate id=\"frm_invoice\" data-blob=\"{{ path(\"fl_invoices_dl\") }}\" enctype=\"multipart/form-data\">
  <input type=\"hidden\" name=\"PID\" value=\"{{ INVOICE.id|default(0) }}\">
  
  <div class=\"row\">
    <div class=\"col-xl-6 col-12\">
      <div class=\"card h-100\">
        <div class=\"card-header\">
          Informations client
          {% if INVOICE.createdOn != \"\" %}
            <small class=\"text-muted\"> (Créé le {{ INVOICE.createdOn|format_datetime }}{% if INVOICE.lastModifiedOn != \"\" %}, modifié le {{ INVOICE.lastModifiedOn|format_datetime }}{% endif %})</small>
          {% endif %}
        </div>
        <div class=\"card-body\">
  
          <div class=\"form-floating mb-3\">
            <select class=\"form-select\" id=\"RefCustomerId\" name=\"RefCustomerId\" aria-label=\"Liste des clients\" required>
              <option value=\"\">--- Veuillez choisir un client ---</option>
              {% for c in CUSTOMER_LIST %}
                <option value=\"{{ c.id }}\"{% if c.id == INVOICE.refCustomer.id|default(0) %} selected{% endif %}>{{ c.name }}</option>
              {% endfor %}
            </select>
            <label for=\"RefCustomerId\">Client lié à la facture</label>
          </div>
  
          <div class=\"form-floating mb-3\">
            <input type=\"text\" class=\"form-control\" id=\"customerNumber\" name=\"customerNumber\" placeholder=\"Numéro client\" required value=\"{{ INVOICE.refCustomer.customerNumber|default(\"\") }}\">
            <label for=\"customerNumber\">Numéro client</label>
          </div>
  
          <div class=\"form-floating mb-3\">
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Nom de l'entreprise\" required value=\"{{ INVOICE.refCustomer.name|default('') }}\">
            <label for=\"name\">Nom de l'entreprise</label>
          </div>
  
          <div class=\"form-floating mb-3\">
            <input type=\"text\" class=\"form-control\" id=\"street\" name=\"street\" placeholder=\"Rue\" value=\"{{ INVOICE.refCustomer.street|default('') }}\">
            <label for=\"street\">Rue</label>
          </div>
  
          <div class=\"row\">
            <div class=\"col-3\">
              <div class=\"form-floating mb-3\">
                <input type=\"text\" class=\"form-control\" id=\"postalCode\" name=\"postalCode\" placeholder=\"Code postal\" value=\"{{ INVOICE.refCustomer.postalCode|default('') }}\">
                <label for=\"postalCode\">Code postal</label>
              </div>
            </div>
            <div class=\"col-9\">
              <div class=\"form-floating mb-3\">
                <input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\" placeholder=\"Ville\" value=\"{{ INVOICE.refCustomer.city|default('') }}\">
                <label for=\"city\">Ville</label>
              </div>
            </div>
          </div>
  
          <div class=\"form-floating mb-3\">
            <input type=\"text\" class=\"form-control\" id=\"country\" name=\"country\" placeholder=\"Pays\" value=\"{{ INVOICE.refCustomer.country|default('') }}\">
            <label for=\"country\">Pays</label>
          </div>
  
        </div>
      </div>
    </div>
  
    <div class=\"col-xl-6 col-12\">
      <div class=\"card h-100\">
        <div class=\"card-header\">
          Informations facture
        </div>
        <div class=\"card-body\">
  
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-floating mb-3\">
                <input type=\"date\" class=\"form-control\" id=\"inv_date\" name=\"inv_date\" placeholder=\"Date de facture\" value=\"{{ INVOICE.invoiceDate }}\" required>
                <label for=\"inv_date\">Date de facture</label>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"form-floating mb-3\">
                <input type=\"text\" class=\"form-control\" id=\"inv_nr\" name=\"inv_nr\" placeholder=\"Numéro de facture\" value=\"{{ INVOICE.invoiceNumber }}\" required>
                <label for=\"inv_nr\">Numéro de facture</label>
              </div>
            </div>
          </div>
  
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-floating mb-3\">
                <select class=\"form-select\" id=\"inv_type\" name=\"inv_type\" aria-label=\"Type de facture\" required>
                  <option value=\"\">--- Veuillez choisir ---</option>
                  {% for id, name in INVOICE_TYPES %}
                    <option value=\"{{ id }}\"{% if id == INVOICE.invoiceType|default(0) %} selected{% endif %}>{{ name }}</option>
                  {% endfor %}
                </select>
                <label for=\"inv_type\">Type de facture</label>
              </div>
            </div>
            <div class=\"col pt-3\">
              <div class=\"form-check form-switch\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"ispaid\" name=\"ispaid\" {% if INVOICE.isPaid %} checked{% endif %}>
                <label class=\"form-check-label\" for=\"ispaid\">Payée ?</label>
              </div>
            </div>
          </div>
  
          <div class=\"row\">
            <div class=\"col mb-3\">
              <div class=\"input-group has-validation\">
                <div class=\"form-floating\">
                  <input type=\"text\" class=\"form-control text-end\" id=\"inv_netto\" placeholder=\"Montant HT\" value=\"{{ INVOICE.sumNetto }}\" required>
                  <label for=\"inv_netto\">Montant HT</label>
                </div>
                <span class=\"input-group-text\">&euro;</span>
                <div class=\"invalid-feedback\">Veuillez saisir un montant valide !</div>
              </div>
            </div>
  
            <div class=\"col mb-3\">
              <div class=\"input-group has-validation\">
                <div class=\"form-floating\">
                  <input type=\"text\" class=\"form-control text-end\" id=\"inv_brutto\" placeholder=\"Montant TTC\" value=\"{{ INVOICE.sumBrutto }}\" required>
                  <label for=\"inv_brutto\">Montant TTC</label>
                </div>
                <span class=\"input-group-text\">&euro;</span>
                <div class=\"invalid-feedback\">Veuillez saisir un montant valide !</div>
              </div>
            </div>
  
            <div class=\"col mb-3\">
              <div class=\"input-group has-validation\">
                <div class=\"form-floating\">
                  <input type=\"text\" class=\"form-control text-end\" id=\"inv_tax\" placeholder=\"TVA\" value=\"{{ INVOICE.taxPct|default(\"19\") }}\" required>
                  <label for=\"inv_tax\">TVA (%)</label>
                </div>
                <span class=\"input-group-text\">%</span>
                <div class=\"invalid-feedback\">Veuillez saisir un pourcentage valide !</div>
              </div>
            </div>
          </div>
  
          <div class=\"row mb-3\">
            <div class=\"col\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"inv_notax\" name=\"inv_notax\" value=\"1\" {% if INVOICE.noTax == true %} checked{% endif %}>
                <label class=\"form-check-label\" for=\"inv_notax\">
                  Sans TVA (Art. 293 B du CGI)
                </label>
              </div>
            </div>
          </div>
  
          <div class=\"row mb-3\">
            <div class=\"col\">
              <div class=\"form-floating\">
                <textarea class=\"form-control\" placeholder=\"Commentaire optionnel\" id=\"inv_comment\" style=\"height:80px\">{{ INVOICE.comment }}</textarea>
                <label for=\"inv_comment\">Commentaire (optionnel)</label>
              </div>
            </div>
          </div>
  
          <div class=\"row\">
            <div class=\"col\">
              <label for=\"inv_pdf\" class=\"form-label\">Télécharger la facture (PDF)</label>
              <input class=\"form-control\" type=\"file\" id=\"inv_pdf\" accept=\"application/pdf\">
            </div>
  
            <div class=\"col d-flex align-items-end\">
              {% if INVOICE.pdfFilename != \"\" %}
              <button type=\"button\" class=\"btn btn-secondary me-1\" title=\"{{ INVOICE.pdfFilename }} ({{ INVOICE.pdfFilesize|format_number }} octets)\">
                <i class=\"fa-solid fa-download\"></i> Télécharger
              </button>
              <button type=\"button\" class=\"btn btn-danger\">
                <i class=\"fa-solid fa-trash\"></i> Supprimer
              </button>
              {% else %}
                <input type=\"text\" readonly class=\"form-control-plaintext text-muted\" id=\"inv_nofile\" value=\"Aucun fichier de facture disponible\">
              {% endif %}
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </div>
  
  <div class=\"row mt-3\">
    <div class=\"col\">
      <button type=\"submit\" class=\"btn btn-primary\">
        <i class=\"far fa-save\"></i> Enregistrer la facture
      </button>
      <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='{{ path(\"fl_invoices_list\") }}'\">
        <i class=\"fa-solid fa-arrow-left\"></i> Retour à la liste
      </button>
    </div>
  </div>
  </form>
  {% endblock %}
  ", "freelancermanager/invoices_form.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/freelancermanager/invoices_form.html.twig");
    }
}
