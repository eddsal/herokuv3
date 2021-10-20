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

/* Front/panier/index.html.twig */
class __TwigTemplate_3bfa4d8671e6d8499357a0a1d46b4700832696541205d0b83eca131501f3b775 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/panier/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "Front/panier/index.html.twig", 1);
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

        echo "Panier";
        
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
<input type=\"hidden\" id=\"currentTotal\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "session", [], "any", false, false, false, 7), "get", [0 => "total"], "method", false, false, false, 7), "html", null, true);
        echo "\" />
<input type=\"hidden\" id=\"setTotal\" value=\"\" />
<input type=\"hidden\" id=\"setSelectedTrips\" value=\"\" />

<div class=\"container\">
    <div class=\"section\">
        ";
        // line 13
        if ( !twig_test_empty((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "            <div class=\"box\">
                <h1 class=\"has-text-centered\">
                    Mon panier
                </h1>
            </div>
            <div class=\"columns is-multiline\">
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
                // line 21
                echo "                ";
                $context["break"] = false;
                // line 22
                echo "                ";
                $context["firstTarif"] = null;
                // line 23
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["panier"], "tarif", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["tarif"]) {
                    // line 24
                    echo "                    ";
                    if (((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tarif"], "capacite", [], "any", false, false, false, 24), 0)) &&  !(isset($context["break"]) || array_key_exists("break", $context) ? $context["break"] : (function () { throw new RuntimeError('Variable "break" does not exist.', 24, $this->source); })()))) {
                        // line 25
                        echo "                        ";
                        $context["firstTarif"] = $context["tarif"];
                        // line 26
                        echo "                        ";
                        $context["break"] = true;
                        // line 27
                        echo "                    ";
                    }
                    // line 28
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarif'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "                <div class=\"column is-one-third\">
                    <div class=\"card is-shady\">
                        <div class=\"card-image\">
                            <a class=\"image is-16by9\" href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["panier"]), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "name", [], "any", false, false, false, 33), "html", null, true);
                echo "\" />
                            </a>
                        </div>
                        <div class=\"v-card-content\">
                            <p class=\"title is-6\" align=\"center\">";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "name", [], "any", false, false, false, 37), "html", null, true);
                echo "</p>
                            <p>";
                // line 38
                echo twig_escape_filter($this->env, (((1 === twig_compare(twig_length_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["panier"], "description", [], "any", false, false, false, 38))), 100))) ? ((twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["panier"], "description", [], "any", false, false, false, 38)), 0, 100) . "...")) : (strip_tags(twig_get_attribute($this->env, $this->source, $context["panier"], "description", [], "any", false, false, false, 38)))), "html", null, true);
                echo "</p>

                            <form method=\"post\" class=\"mt-5 mb-3\">
                                <label class=\"label\">Choisissez votre option de voyage:</label>
                                <div class=\"control has-icons-left\">
                                    <div class=\"select is-info\">
                                        <select name='chosen_tarif' onchange=\"updatePanier(event)\"> 
                                            ";
                // line 46
                echo "                                            
                                            ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["panier"], "tarif", [], "any", false, false, false, 47));
                foreach ($context['_seq'] as $context["_key"] => $context["tarif"]) {
                    // line 48
                    echo "                                                ";
                    if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tarif"], "capacite", [], "any", false, false, false, 48), 0))) {
                        // line 49
                        echo "                                                    <option name=\"selectedTrip\" value=\"\" data-idTarif=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "id", [], "any", false, false, false, 49), "html", null, true);
                        echo "\" data-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 49), "html", null, true);
                        echo "\" data-prix=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "prix", [], "any", false, false, false, 49), "html", null, true);
                        echo "\" data-capacite=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "capacite", [], "any", false, false, false, 49), "html", null, true);
                        echo "\">
                                                        ";
                        // line 50
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "depart", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "retour", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true);
                        echo ", prix: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "prix", [], "any", false, false, false, 50), "html", null, true);
                        echo " €
                                                    </options>
                                                ";
                    }
                    // line 53
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarif'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                                        </select>
                                    </div>
                                    <span class=\"icon is-small is-left\">
                                        <i class=\"bi bi-globe\"></i>
                                    </span>
                                </div>
                                <br>
                                <div class=\"control has-icons-left\">
                                    <div class=\"select is-primary\">
                                        <select name='options' id='chosen_person_nb";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 63), "html", null, true);
                echo "' onchange=\"updateNbPers(event)\"> 
                                            ";
                // line 65
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["firstTarif"]) || array_key_exists("firstTarif", $context) ? $context["firstTarif"] : (function () { throw new RuntimeError('Variable "firstTarif" does not exist.', 65, $this->source); })()), "capacite", [], "any", false, false, false, 65)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 66
                    echo "                                                <option value=\"\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 66), "html", null, true);
                    echo "\" data-prix=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firstTarif"]) || array_key_exists("firstTarif", $context) ? $context["firstTarif"] : (function () { throw new RuntimeError('Variable "firstTarif" does not exist.', 66, $this->source); })()), "prix", [], "any", false, false, false, 66), "html", null, true);
                    echo "\" data-nbpers=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">
                                                    ";
                    // line 67
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "
                                                </options>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                                        </select>
                                    </div>
                                    <span class=\"icon is-small is-left\">
                                        <i class=\"bi bi-person\"></i>
                                    </span>
                                </div>

                            </form>
                        </div>
                        <footer class=\"card-footer\">
                            <span class=\"card-footer-item\">
                                <a data-urlDelBtn='";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 81)]), "html", null, true);
                echo "' data-bs-toggle='modal' data-bs-target='#dangerModal' onclick=\"myFunction(this)\">
                                    <button class=\"button is-small is-danger\"><i class='bi bi-x'></i></button>
                                </a>
                            </span>
                            ";
                // line 86
                echo "                            <span class=\"card-footer-item\"><input name=\"input-prices\" data-idTrip=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 86), "html", null, true);
                echo "\" id=\"voyage-price";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 86), "html", null, true);
                echo "\" class=\"text-center\" style='width:100%;' value='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firstTarif"]) || array_key_exists("firstTarif", $context) ? $context["firstTarif"] : (function () { throw new RuntimeError('Variable "firstTarif" does not exist.', 86, $this->source); })()), "prix", [], "any", false, false, false, 86), "html", null, true);
                echo "' disabled>&nbsp;€</input></span>
                            <span class=\"card-footer-item\"><input name=\"input-nbPers\" data-idTrip=\"";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 87), "html", null, true);
                echo "\" id=\"voyage-id";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 87), "html", null, true);
                echo "\" class=\"text-center\" style='width:100%;' value='1' disabled>&nbsp;<i class='bi bi-person'></i></input></span>
                            <span class=\"card-footer-item\"><a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                echo "\"><button class=\"button is-small is-success\"><i class='bi bi-eye'></i></button></a></span>
                        </footer>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "            </div>

            ";
            // line 98
            echo "
            <div class=\"card\">
                <div class=\"v-card-content\">
                    <p><b>Total:</b> <label id=\"labelTotal\" value=''>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "session", [], "any", false, false, false, 101), "get", [0 => "total"], "method", false, false, false, 101), "html", null, true);
            echo "</label>€</p>
                </div>
                <footer class=\"card-footer\">
                    <span class=\"card-footer-item\"><span><button id=\"checkoutBtn\" class=\"button is-info\">Passer la commande</button></span></span>
                </footer>
            </div>

            <div class=\"modal fade\" id=\"dangerModal\" style='z-index:2000' tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Confirmez-vous la suppression</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                    <div class=\"modal-body\">
                        Êtes-vous sûr de vouloir supprimer définitivement l'élément sélectionné ?
                    </div>
                    <div class=\"modal-footer\">
                        <a><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button></a>
                        <a href=\"\" class='confirm'><button type=\"button\" class=\"btn btn-danger\">Confirmer</button></a>
                    </div>
                </div>
            </div>

            <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
            <script>
                function myFunction(e) {
                    urlDelBtn = \$(e).attr('data-urlDelBtn');
                    modalId = \$(e).attr(\"data-bs-target\")
                    modal = \$(modalId);
                    
                    \$(modalId+ ' .modal-footer a.confirm').attr(\"href\", urlDelBtn)
                };
            </script>
        ";
        } else {
            // line 136
            echo "            <div class=\"box\">
                <p class=\"has-text-centered has-text-danger-dark\">
                    Le panier est vide
                </p>
            </div>
        ";
        }
        // line 142
        echo "    </div>
</div>

<script>

    \$( document ).ready(function() {
    });

    function updatePanier(e) {
        id = event.target.options[event.target.selectedIndex].dataset.id;
        newPrice = event.target.options[event.target.selectedIndex].dataset.prix;
        capacite = event.target.options[event.target.selectedIndex].dataset.capacite;

        //\$newoptions = '<option value=\"\" data-id=\"'+id+'\" data-prix=\"'+newPrice+'\" data-nbpers=\"1\">Choisissez le nombre de voyageurs</options>';
        \$newoptions = '';

        for (var i = 1; i <= capacite; i++) {
            \$newoptions += '<option value=\"\" data-id=\"'+id+'\" data-prix=\"'+newPrice+'\" data-nbpers=\"'+i+'\">'+i+'</options>';
        }

        \$('select#chosen_person_nb'+id).html(\$newoptions);

        oldPrice = parseInt(document.getElementById(\"voyage-price\"+id).value);
        document.getElementById(\"voyage-price\"+id).value = newPrice;

        currentTotal = parseInt(\$(\"#currentTotal\").val());
        newTotal = currentTotal - oldPrice + parseInt(newPrice);

        //console.log(\"oldTotal => \", currentTotal);
        //console.log(\"newTotal => \", newTotal);
        
        session = \"{\"+\"{\" + \" app\" + \".session.set(\" + \"'total', \" + newTotal + \") }}\";
        \$(\"#currentTotal\").val(newTotal);
        \$(\"#setTotal\").val(session);
        \$(\"#labelTotal\").html(newTotal);
        \$(\"#labelTotal\").val(newTotal);
        //getAllTripPrices();

        \$.ajax({
            url: ";
        // line 181
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_index");
        echo ",
            type: \"POST\",
            data: {
                \"newTotal\": newTotal,
                //\"idVoyage\": id
            },
            success: function(data, textStatus, jqXHR) {
                
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Erreur AJAXs!');
            }
        });
    }

    function updateNbPers(e) {
        id = event.target.options[event.target.selectedIndex].dataset.id;
        price = event.target.options[event.target.selectedIndex].dataset.prix;
        newNbPers = event.target.options[event.target.selectedIndex].dataset.nbpers;
        
        newPrice = parseInt(price) * newNbPers;
        oldPrice = parseInt(\$(\"#voyage-price\"+id).val());
        \$(\"#voyage-price\"+id).val(newPrice);
        currentTotal = parseInt(\$(\"#currentTotal\").val());
        newTotal = currentTotal - oldPrice + parseInt(newPrice);
        session = \"{\"+\"{\" + \" app\" + \".session.set(\" + \"'total', \" + newTotal + \") }}\";
        \$(\"#currentTotal\").val(newTotal);
        \$(\"#setTotal\").val(session);
        \$(\"#labelTotal\").html(newTotal);
        \$(\"#labelTotal\").val(newTotal);

        \$(\"#voyage-id\"+id).val(newNbPers);

        \$.ajax({
            url: ";
        // line 215
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_index");
        echo ",
            type: \"POST\",
            data: {
                \"newTotal\": newTotal,
                //\"idVoyage\": id
            },
            success: function(data, textStatus, jqXHR) {
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Erreur AJAXs!');
            }
        });
    }

    function getAllSelectedPrices() {
        selects = \$('input[name=\"input-prices\"]');
        selectedPrices = {};

        selects.each(function() {
            tripId = \$(this).attr('data-idTrip');
            tripPrice = \$(this).val();
            selectedPrices[tripId] = tripPrice;

            //console.log(\"tripId = \"+tripId);
            //console.log(\"tripPrice = \"+tripPrice);
        });

        return selectedPrices;
    }

    function getAllSelectedNbPers() {
        selects = \$('input[name=\"input-nbPers\"]');
        selectedNbPers = {};

        selects.each(function() {
            tripId = \$(this).attr('data-idTrip');
            tripCapacite = \$(this).val();
            selectedNbPers[tripId] = tripCapacite;

            //console.log(\"tripId = \"+tripId);
            //console.log(\"tripCapacite = \"+tripCapacite);
        });

        return selectedNbPers;
    }

    function getAllSelectedTarifs() {
        selects = \$('select[name=\"chosen_tarif\"]').find(':selected');
        selectedTarifs = {};

        selects.each(function() {
            tripId = \$(this).attr('data-id');
            tarifId = \$(this).attr('data-idTarif');
            selectedTarifs[tripId] = tarifId;
        });

        return selectedTarifs;
    }

    \$('#checkoutBtn').on('click', function() {

        selectedPrices = getAllSelectedPrices();
        selectedNbPers = getAllSelectedNbPers();
        selectedTarifs = getAllSelectedTarifs();

        \$.ajax({
            url: \"";
        // line 281
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_validation");
        echo "\",
            type: \"POST\",
            data: {
                \"selectedPrices\": selectedPrices,
                \"selectedNbPers\": selectedNbPers,
                \"selectedTarifs\": selectedTarifs,
            },
            success: function(data, textStatus, jqXHR) {
                window.location = \"";
        // line 289
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_validation");
        echo "\";
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Erreur AJAXs!');
            }
        });
    })

</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  509 => 289,  498 => 281,  429 => 215,  392 => 181,  351 => 142,  343 => 136,  305 => 101,  300 => 98,  296 => 93,  285 => 88,  279 => 87,  270 => 86,  263 => 81,  250 => 70,  241 => 67,  232 => 66,  227 => 65,  223 => 63,  212 => 54,  206 => 53,  196 => 50,  185 => 49,  182 => 48,  178 => 47,  175 => 46,  165 => 38,  161 => 37,  152 => 33,  148 => 32,  143 => 29,  137 => 28,  134 => 27,  131 => 26,  128 => 25,  125 => 24,  120 => 23,  117 => 22,  114 => 21,  110 => 20,  102 => 14,  100 => 13,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Panier{% endblock %}

{% block body %}

<input type=\"hidden\" id=\"currentTotal\" value=\"{{ app.session.get('total') }}\" />
<input type=\"hidden\" id=\"setTotal\" value=\"\" />
<input type=\"hidden\" id=\"setSelectedTrips\" value=\"\" />

<div class=\"container\">
    <div class=\"section\">
        {% if paniers is not empty %}
            <div class=\"box\">
                <h1 class=\"has-text-centered\">
                    Mon panier
                </h1>
            </div>
            <div class=\"columns is-multiline\">
            {% for panier in paniers %}
                {% set break = false %}
                {% set firstTarif = null %}
                {% for tarif in panier.tarif %}
                    {% if tarif.capacite > 0 and not break %}
                        {% set firstTarif = tarif %}
                        {% set break = true %}
                    {% endif %}
                {% endfor %}
                <div class=\"column is-one-third\">
                    <div class=\"card is-shady\">
                        <div class=\"card-image\">
                            <a class=\"image is-16by9\" href=\"{{ path('voyage_show', {'id': panier.id}) }}\">
                                <img src=\"{{ vich_uploader_asset(panier) }}\" alt=\"{{ panier.name }}\" />
                            </a>
                        </div>
                        <div class=\"v-card-content\">
                            <p class=\"title is-6\" align=\"center\">{{ panier.name }}</p>
                            <p>{{ panier.description|striptags|length > 100 ? panier.description|striptags|slice(0, 100) ~ '...' : panier.description|striptags }}</p>

                            <form method=\"post\" class=\"mt-5 mb-3\">
                                <label class=\"label\">Choisissez votre option de voyage:</label>
                                <div class=\"control has-icons-left\">
                                    <div class=\"select is-info\">
                                        <select name='chosen_tarif' onchange=\"updatePanier(event)\"> 
                                            {# <option name=\"selectedTrip\" value=\"\" data-idTarif=\"{{ panier.tarif[0].id }}\" data-id=\"{{ panier.id }}\" data-prix=\"{{ panier.tarif[0].prix }}\" data-capacite=\"{{ panier.tarif[0].capacite }}\">Choisissez votre option de voyage</option> #}
                                            
                                            {% for tarif in panier.tarif %}
                                                {% if tarif.capacite > 0 %}
                                                    <option name=\"selectedTrip\" value=\"\" data-idTarif=\"{{ tarif.id }}\" data-id=\"{{ panier.id }}\" data-prix=\"{{ tarif.prix }}\" data-capacite=\"{{ tarif.capacite }}\">
                                                        {{ tarif.depart|date(\"d/m/Y\") }} - {{ tarif.retour|date(\"d/m/Y\") }}, prix: {{ tarif.prix }} €
                                                    </options>
                                                {% endif %}
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <span class=\"icon is-small is-left\">
                                        <i class=\"bi bi-globe\"></i>
                                    </span>
                                </div>
                                <br>
                                <div class=\"control has-icons-left\">
                                    <div class=\"select is-primary\">
                                        <select name='options' id='chosen_person_nb{{ panier.id }}' onchange=\"updateNbPers(event)\"> 
                                            {# <option value=\"\" data-id=\"{{ panier.id }}\" data-prix=\"{{ panier.tarif[0].prix }}\" data-nbpers=\"{{ 1 }}\">Choisissez le nombre de voyageurs</option> #}
                                            {% for i in 1..firstTarif.capacite %}
                                                <option value=\"\" data-id=\"{{ panier.id }}\" data-prix=\"{{ firstTarif.prix }}\" data-nbpers=\"{{ i }}\">
                                                    {{ i }}
                                                </options>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <span class=\"icon is-small is-left\">
                                        <i class=\"bi bi-person\"></i>
                                    </span>
                                </div>

                            </form>
                        </div>
                        <footer class=\"card-footer\">
                            <span class=\"card-footer-item\">
                                <a data-urlDelBtn='{{ path('panier_delete', {'id': panier.id})}}' data-bs-toggle='modal' data-bs-target='#dangerModal' onclick=\"myFunction(this)\">
                                    <button class=\"button is-small is-danger\"><i class='bi bi-x'></i></button>
                                </a>
                            </span>
                            {# <span class=\"card-footer-item\"><a href=\"{{ path('panier_delete', {'id': panier.id}) }}\"><button class=\"button is-small is-danger\">Supprimer</button></a></span> #}
                            <span class=\"card-footer-item\"><input name=\"input-prices\" data-idTrip=\"{{ panier.id }}\" id=\"voyage-price{{ panier.id }}\" class=\"text-center\" style='width:100%;' value='{{ firstTarif.prix }}' disabled>&nbsp;€</input></span>
                            <span class=\"card-footer-item\"><input name=\"input-nbPers\" data-idTrip=\"{{ panier.id }}\" id=\"voyage-id{{ panier.id }}\" class=\"text-center\" style='width:100%;' value='1' disabled>&nbsp;<i class='bi bi-person'></i></input></span>
                            <span class=\"card-footer-item\"><a href=\"{{ path('voyage_show', {'id': panier.id}) }}\"><button class=\"button is-small is-success\"><i class='bi bi-eye'></i></button></a></span>
                        </footer>
                    </div>
                </div>
            {% endfor %}
            </div>

            {# <div class=\"pagination justify-content-center\">
                {{ knp_pagination_render(paniers) }}
            </div> #}

            <div class=\"card\">
                <div class=\"v-card-content\">
                    <p><b>Total:</b> <label id=\"labelTotal\" value=''>{{ app.session.get('total')}}</label>€</p>
                </div>
                <footer class=\"card-footer\">
                    <span class=\"card-footer-item\"><span><button id=\"checkoutBtn\" class=\"button is-info\">Passer la commande</button></span></span>
                </footer>
            </div>

            <div class=\"modal fade\" id=\"dangerModal\" style='z-index:2000' tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Confirmez-vous la suppression</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                    <div class=\"modal-body\">
                        Êtes-vous sûr de vouloir supprimer définitivement l'élément sélectionné ?
                    </div>
                    <div class=\"modal-footer\">
                        <a><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button></a>
                        <a href=\"\" class='confirm'><button type=\"button\" class=\"btn btn-danger\">Confirmer</button></a>
                    </div>
                </div>
            </div>

            <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
            <script>
                function myFunction(e) {
                    urlDelBtn = \$(e).attr('data-urlDelBtn');
                    modalId = \$(e).attr(\"data-bs-target\")
                    modal = \$(modalId);
                    
                    \$(modalId+ ' .modal-footer a.confirm').attr(\"href\", urlDelBtn)
                };
            </script>
        {% else %}
            <div class=\"box\">
                <p class=\"has-text-centered has-text-danger-dark\">
                    Le panier est vide
                </p>
            </div>
        {% endif %}
    </div>
</div>

<script>

    \$( document ).ready(function() {
    });

    function updatePanier(e) {
        id = event.target.options[event.target.selectedIndex].dataset.id;
        newPrice = event.target.options[event.target.selectedIndex].dataset.prix;
        capacite = event.target.options[event.target.selectedIndex].dataset.capacite;

        //\$newoptions = '<option value=\"\" data-id=\"'+id+'\" data-prix=\"'+newPrice+'\" data-nbpers=\"1\">Choisissez le nombre de voyageurs</options>';
        \$newoptions = '';

        for (var i = 1; i <= capacite; i++) {
            \$newoptions += '<option value=\"\" data-id=\"'+id+'\" data-prix=\"'+newPrice+'\" data-nbpers=\"'+i+'\">'+i+'</options>';
        }

        \$('select#chosen_person_nb'+id).html(\$newoptions);

        oldPrice = parseInt(document.getElementById(\"voyage-price\"+id).value);
        document.getElementById(\"voyage-price\"+id).value = newPrice;

        currentTotal = parseInt(\$(\"#currentTotal\").val());
        newTotal = currentTotal - oldPrice + parseInt(newPrice);

        //console.log(\"oldTotal => \", currentTotal);
        //console.log(\"newTotal => \", newTotal);
        
        session = \"{\"+\"{\" + \" app\" + \".session.set(\" + \"'total', \" + newTotal + \") }}\";
        \$(\"#currentTotal\").val(newTotal);
        \$(\"#setTotal\").val(session);
        \$(\"#labelTotal\").html(newTotal);
        \$(\"#labelTotal\").val(newTotal);
        //getAllTripPrices();

        \$.ajax({
            url: {{ path('panier_index') }},
            type: \"POST\",
            data: {
                \"newTotal\": newTotal,
                //\"idVoyage\": id
            },
            success: function(data, textStatus, jqXHR) {
                
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Erreur AJAXs!');
            }
        });
    }

    function updateNbPers(e) {
        id = event.target.options[event.target.selectedIndex].dataset.id;
        price = event.target.options[event.target.selectedIndex].dataset.prix;
        newNbPers = event.target.options[event.target.selectedIndex].dataset.nbpers;
        
        newPrice = parseInt(price) * newNbPers;
        oldPrice = parseInt(\$(\"#voyage-price\"+id).val());
        \$(\"#voyage-price\"+id).val(newPrice);
        currentTotal = parseInt(\$(\"#currentTotal\").val());
        newTotal = currentTotal - oldPrice + parseInt(newPrice);
        session = \"{\"+\"{\" + \" app\" + \".session.set(\" + \"'total', \" + newTotal + \") }}\";
        \$(\"#currentTotal\").val(newTotal);
        \$(\"#setTotal\").val(session);
        \$(\"#labelTotal\").html(newTotal);
        \$(\"#labelTotal\").val(newTotal);

        \$(\"#voyage-id\"+id).val(newNbPers);

        \$.ajax({
            url: {{ path('panier_index') }},
            type: \"POST\",
            data: {
                \"newTotal\": newTotal,
                //\"idVoyage\": id
            },
            success: function(data, textStatus, jqXHR) {
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Erreur AJAXs!');
            }
        });
    }

    function getAllSelectedPrices() {
        selects = \$('input[name=\"input-prices\"]');
        selectedPrices = {};

        selects.each(function() {
            tripId = \$(this).attr('data-idTrip');
            tripPrice = \$(this).val();
            selectedPrices[tripId] = tripPrice;

            //console.log(\"tripId = \"+tripId);
            //console.log(\"tripPrice = \"+tripPrice);
        });

        return selectedPrices;
    }

    function getAllSelectedNbPers() {
        selects = \$('input[name=\"input-nbPers\"]');
        selectedNbPers = {};

        selects.each(function() {
            tripId = \$(this).attr('data-idTrip');
            tripCapacite = \$(this).val();
            selectedNbPers[tripId] = tripCapacite;

            //console.log(\"tripId = \"+tripId);
            //console.log(\"tripCapacite = \"+tripCapacite);
        });

        return selectedNbPers;
    }

    function getAllSelectedTarifs() {
        selects = \$('select[name=\"chosen_tarif\"]').find(':selected');
        selectedTarifs = {};

        selects.each(function() {
            tripId = \$(this).attr('data-id');
            tarifId = \$(this).attr('data-idTarif');
            selectedTarifs[tripId] = tarifId;
        });

        return selectedTarifs;
    }

    \$('#checkoutBtn').on('click', function() {

        selectedPrices = getAllSelectedPrices();
        selectedNbPers = getAllSelectedNbPers();
        selectedTarifs = getAllSelectedTarifs();

        \$.ajax({
            url: \"{{ path('panier_validation') }}\",
            type: \"POST\",
            data: {
                \"selectedPrices\": selectedPrices,
                \"selectedNbPers\": selectedNbPers,
                \"selectedTarifs\": selectedTarifs,
            },
            success: function(data, textStatus, jqXHR) {
                window.location = \"{{ path('panier_validation') }}\";
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Erreur AJAXs!');
            }
        });
    })

</script>

{% endblock %}
", "Front/panier/index.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/pro/tripeDream.github.io/templates/Front/panier/index.html.twig");
    }
}
