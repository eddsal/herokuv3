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

/* Front/payement/checkout.html.twig */
class __TwigTemplate_79b0603f5809586387cda516a1da43b2c78b17883f0d2b9a67e909bb9116a561 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/payement/checkout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/payement/checkout.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "Front/payement/checkout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Récapitulatif de commande";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
    <div class=\"section\">
        ";
        // line 9
        if ( !twig_test_empty((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "            <div class=\"columns is-multiline\">
                <div class=\"column is-8\">
                    <div class=\"card is-shady\" style=\"width: 100%;\">
                        <div class=\"card-header\">
                            <p class=\"title is-6\">Récapitulatif de commande</p>
                        </div>
                        <div class=\"v-card-content\">
                            <table class=\"table table is-striped is-narrow is-hoverable is-fullwidth\">
                                <thead>
                                    <tr>
                                        <th>Aperçu</th>
                                        <th>Dénomination</th>
                                        <th>Prix</th>
                                        <th>N° voyageurs</th>
                                        <th>Opérations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
                // line 29
                echo "                                    <tr>
                                        <td>
                                            <a class=\"image is-16by9\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">
                                                <img src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["panier"]), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "name", [], "any", false, false, false, 32), "html", null, true);
                echo "\" />
                                            </a>
                                        </td>
                                        <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "name", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                                        ";
                // line 37
                echo "                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedPrices"]) || array_key_exists("selectedPrices", $context) ? $context["selectedPrices"] : (function () { throw new RuntimeError('Variable "selectedPrices" does not exist.', 37, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 37), [], "array", false, false, false, 37), "html", null, true);
                echo " €</td>
                                        <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedNbPers"]) || array_key_exists("selectedNbPers", $context) ? $context["selectedNbPers"] : (function () { throw new RuntimeError('Variable "selectedNbPers" does not exist.', 38, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 38), [], "array", false, false, false, 38), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\"><button class=\"button is-small is-success\"><i class=\"bi bi-eye\"></i></button></a>
                                            ";
                // line 42
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                                </tbody>
                            </table>
                            <a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_index");
            echo "\"><span><button class=\"button is-danger\">Annuler</button></span></a>
                        </div>
                    </div>
                </div>
                <div class=\"column is-4\">
                    <div class=\"card is-shady\">
                        <div class=\"card-header\">
                            <p class=\"title is-6\">Total et validation</p>
                        </div>
                        <div class=\"v-card-content mt-5\">
                            <b>Prix d'origine</b>
                            <p>";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 58, $this->source); })()), "html", null, true);
            echo " €</p>
                            <hr>
                            <b>Crédit appliqué</b>
                            <p>0 €</p>
                            <hr>
                            <b>Total à payer</b>
                            <p>";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 64, $this->source); })()), "html", null, true);
            echo " €</p>
                            <hr>
                            <p>Comme exigé par la loi, Tripdream prélève les taxes sur les transactions applicables aux achats réalisés dans certaines juridictions fiscales.</p>
                        </div>
                        <footer class=\"card-footer\">
                            <span class=\"card-footer-item\"><button data-total=\"";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 69, $this->source); })()), "html", null, true);
            echo "\"  class=\"button is-info is-fullwidth\" id=\"checkout-button\">Payer</button></span>
                        </footer>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 75
            echo "            <div class=\"box\">
                <p class=\"has-text-centered has-text-danger-dark\">
                    Le panier est vide
                </p>
            </div>
        ";
        }
        // line 81
        echo "    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "<script type=\"text/javascript\">
";
        // line 91
        echo "
var stripe = Stripe(
\t'pk_test_51IrUFOIPqsC3XcMt1SFLXLTFuKXY9X3VvpLU0XIvcOPUVc36FpvWt2u7cwbk8JiM6sq8CpYAX9bLaMYxliOoLhUU00DhG9vQtY'
);
var checkoutButton = document.getElementById('checkout-button');

checkoutButton.addEventListener('click', function() {
\tfetch(`/panier/validation/create-checkout-session`, {
\t\tmethod: 'POST'
\t})
\t.then(function(response) {
\t\treturn response.json();
\t})
\t.then(function(session) {
\t\treturn stripe.redirectToCheckout({ sessionId: session.id });
\t})
\t.then(function(result) {
\t\t// If redirectToCheckout fails due to a browser or network
\t\t// error, you should display the localized error message to your
\t\t// customer using error.message.
\t\tif (result.error) {
\t\t\talert(result.error.message);
\t\t}
\t})
\t.catch(function(error) {
\t\tconsole.error('Error:', error.message);
\t});
});
 
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/payement/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 91,  237 => 88,  227 => 87,  214 => 81,  206 => 75,  197 => 69,  189 => 64,  180 => 58,  166 => 47,  162 => 45,  154 => 42,  150 => 40,  145 => 38,  140 => 37,  136 => 35,  128 => 32,  124 => 31,  120 => 29,  116 => 28,  96 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Récapitulatif de commande{% endblock %}

{% block body %}

<div class=\"container\">
    <div class=\"section\">
        {% if paniers is not empty %}
            <div class=\"columns is-multiline\">
                <div class=\"column is-8\">
                    <div class=\"card is-shady\" style=\"width: 100%;\">
                        <div class=\"card-header\">
                            <p class=\"title is-6\">Récapitulatif de commande</p>
                        </div>
                        <div class=\"v-card-content\">
                            <table class=\"table table is-striped is-narrow is-hoverable is-fullwidth\">
                                <thead>
                                    <tr>
                                        <th>Aperçu</th>
                                        <th>Dénomination</th>
                                        <th>Prix</th>
                                        <th>N° voyageurs</th>
                                        <th>Opérations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for panier in paniers %}
                                    <tr>
                                        <td>
                                            <a class=\"image is-16by9\" href=\"{{ path('voyage_show', {'id': panier.id}) }}\">
                                                <img src=\"{{ vich_uploader_asset(panier) }}\" alt=\"{{ panier.name }}\" />
                                            </a>
                                        </td>
                                        <td>{{ panier.name }}</td>
                                        {# <td>{{ panier.tarif|first.prix }} €</td> #}
                                        <td>{{ selectedPrices[panier.id] }} €</td>
                                        <td>{{ selectedNbPers[panier.id] }}</td>
                                        <td>
                                            <a href=\"{{ path('voyage_show', {'id': panier.id}) }}\"><button class=\"button is-small is-success\"><i class=\"bi bi-eye\"></i></button></a>
                                            {# <a href=\"{{ path('panier_delete', {'id': panier.id, 'total': total}) }}\"><button class=\"button is-small is-danger\"><i class=\"bi bi-trash\"></i></button></a> #}
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                            <a href=\"{{ path('panier_index')}}\"><span><button class=\"button is-danger\">Annuler</button></span></a>
                        </div>
                    </div>
                </div>
                <div class=\"column is-4\">
                    <div class=\"card is-shady\">
                        <div class=\"card-header\">
                            <p class=\"title is-6\">Total et validation</p>
                        </div>
                        <div class=\"v-card-content mt-5\">
                            <b>Prix d'origine</b>
                            <p>{{ total }} €</p>
                            <hr>
                            <b>Crédit appliqué</b>
                            <p>0 €</p>
                            <hr>
                            <b>Total à payer</b>
                            <p>{{ total }} €</p>
                            <hr>
                            <p>Comme exigé par la loi, Tripdream prélève les taxes sur les transactions applicables aux achats réalisés dans certaines juridictions fiscales.</p>
                        </div>
                        <footer class=\"card-footer\">
                            <span class=\"card-footer-item\"><button data-total=\"{{ total }}\"  class=\"button is-info is-fullwidth\" id=\"checkout-button\">Payer</button></span>
                        </footer>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"box\">
                <p class=\"has-text-centered has-text-danger-dark\">
                    Le panier est vide
                </p>
            </div>
        {% endif %}
    </div>
</div>

{% endblock %}


{% block javascripts %}
<script type=\"text/javascript\">
{# import \$ from 'jquery';
const total = \$('#checkout-button').data('total') * 100; #}

var stripe = Stripe(
\t'pk_test_51IrUFOIPqsC3XcMt1SFLXLTFuKXY9X3VvpLU0XIvcOPUVc36FpvWt2u7cwbk8JiM6sq8CpYAX9bLaMYxliOoLhUU00DhG9vQtY'
);
var checkoutButton = document.getElementById('checkout-button');

checkoutButton.addEventListener('click', function() {
\tfetch(`/panier/validation/create-checkout-session`, {
\t\tmethod: 'POST'
\t})
\t.then(function(response) {
\t\treturn response.json();
\t})
\t.then(function(session) {
\t\treturn stripe.redirectToCheckout({ sessionId: session.id });
\t})
\t.then(function(result) {
\t\t// If redirectToCheckout fails due to a browser or network
\t\t// error, you should display the localized error message to your
\t\t// customer using error.message.
\t\tif (result.error) {
\t\t\talert(result.error.message);
\t\t}
\t})
\t.catch(function(error) {
\t\tconsole.error('Error:', error.message);
\t});
});
 
    </script>
{% endblock %}", "Front/payement/checkout.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/pro/tripeDream.github.io/templates/Front/payement/checkout.html.twig");
    }
}
