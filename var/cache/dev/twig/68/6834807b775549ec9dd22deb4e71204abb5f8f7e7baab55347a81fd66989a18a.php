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

/* agence/voyage/show.html.twig */
class __TwigTemplate_9797e748fd6c8f430e1904792bb226b316d94dc9dad1f3a47dd8e2b4deb250c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'core' => [$this, 'block_core'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "agence/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/voyage/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/voyage/show.html.twig"));

        $this->parent = $this->loadTemplate("agence/index.html.twig", "agence/voyage/show.html.twig", 1);
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

        echo "Détails voyage";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_core($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "core"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "core"));

        // line 6
        echo "
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
\$(document).ready(function() {
    \$('#tabs li').on('click', function() {
    var tab = \$(this).data('tab');

    \$('#tabs li').removeClass('is-active');
    \$(this).addClass('is-active');

    \$('#tab-content #cont').removeClass('is-active');
    \$('#cont[data-content=\"' + tab + '\"]').addClass('is-active');
    });

    \$(\"#leave-comm-btn\").click(function() {
        \$(\"#modal-card\").addClass(\"is-active\"); 
    });
 
    \$(\".modal-close\").click(function() {
        \$(\"#modal-card\").removeClass(\"is-active\");
    });
});
</script>

<div class=\"container\">
    <br>
    <div class=\"columns box mt-5\">
        <div class=\"column\">
            <div class=\"columns\">
                <div class=\"column is-5-desktop is-5-tablet is-12-mobile\">
                    <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 36, $this->source); })())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "\">
                </div>
                <div class=\"column is-7-desktop is-5-tablet is-12-mobile content-detail\">
                    <div class=\"columns\">
                        <div class=\"column is-8\">
                            <dt style=\"font-size:1.7em;\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "</dt>
                            <dt style=\"\">Agencier: ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "username", [], "any", false, false, false, 42), "html", null, true);
        echo "</dt>
                            <hr>
                            <div class=\"price\">
                                <label for=\"price\">Prix: </label>
                                <span>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 46, $this->source); })()), "tarif", [], "any", false, false, false, 46)), "prix", [], "any", false, false, false, 46), "html", null, true);
        echo " €</span>
                                <br><br>
                            </div>
                            <dt>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 49, $this->source); })()), "infoPratique", [], "any", false, false, false, 49), "duree", [], "any", false, false, false, 49), "html", null, true);
        echo " jours</dt>
                            <dt>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 50, $this->source); })()), "infoPratique", [], "any", false, false, false, 50), "depart", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true);
        echo "</dt>
                            <hr>
                            <p style=\"\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"column is-1\">
                            <div align=\"\">
                                ";
        // line 56
        if ((0 === twig_compare((isset($context["isfavorie"]) || array_key_exists("isfavorie", $context) ? $context["isfavorie"] : (function () { throw new RuntimeError('Variable "isfavorie" does not exist.', 56, $this->source); })()), true))) {
            // line 57
            echo "                                    <div>
                                        <a id=\"favorie_lien\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favorie_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">
                                            <i class=\"bi bi-suit-heart-fill\"></i>
                                        </a>
                                    </div>
                                ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 63
            echo "                                    <div>
                                        <a id=\"favorie_lien\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favorie_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">
                                            <i class=\"bi bi-suit-heart\"></i>
                                        </a>
                                    </div>
                                ";
        }
        // line 69
        echo "                            </div>
                        </div>
                        ";
        // line 79
        echo "                            </div>
                        </div> #}
                    </div>
                </div>
            </div>

            <div class=\"tabs is-toggle is-fullwidth mt-5\" id=\"tabs\">
                <ul>
                    <li class=\"is-active\" data-tab=\"1\">
                        <a>
                            <i class=\"bi bi-calendar-week\"></i>
                            <span class=\"ml-2\">Programme</span>
                        </a>
                    </li>
                    <li data-tab=\"2\">
                        <a>
                            <i class=\"bi bi-info-circle\"></i>
                            <span class=\"ml-2\">Informations pratiques</span>
                        </a>
                    </li>
                    <li data-tab=\"3\">
                        <a>
                            <i class=\"bi bi-currency-exchange\"></i>
                            <span class=\"ml-2\">Tarifs</span>
                        </a>
                    </li>
                    <li data-tab=\"4\">
                        <a>
                            <i class=\"bi bi-chat-text\"></i>
                            <span class=\"ml-2\">Avis</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div id=\"tab-content\">
                <div id=\"cont\" class=\"is-active\" data-content=\"1\">
                    ";
        // line 115
        $this->loadTemplate("Front/voyage/programme.html.twig", "agence/voyage/show.html.twig", 115)->display($context);
        // line 116
        echo "                </div>
                <div id=\"cont\" data-content=\"2\">
                    ";
        // line 118
        $this->loadTemplate("Front/voyage/infos_pratiques.html.twig", "agence/voyage/show.html.twig", 118)->display($context);
        // line 119
        echo "                </div>
                <div id=\"cont\" data-content=\"3\">
                    ";
        // line 121
        $this->loadTemplate("Front/voyage/tarif.html.twig", "agence/voyage/show.html.twig", 121)->display($context);
        // line 122
        echo "                </div>
                <div id=\"cont\" data-content=\"4\">
                    ";
        // line 124
        $this->loadTemplate("Front/voyage/avis.html.twig", "agence/voyage/show.html.twig", 124)->display($context);
        // line 125
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "agence/voyage/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 125,  247 => 124,  243 => 122,  241 => 121,  237 => 119,  235 => 118,  231 => 116,  229 => 115,  191 => 79,  187 => 69,  179 => 64,  176 => 63,  168 => 58,  165 => 57,  163 => 56,  156 => 52,  151 => 50,  147 => 49,  141 => 46,  134 => 42,  130 => 41,  120 => 36,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'agence/index.html.twig' %}

{% block title %}Détails voyage{% endblock %}

{% block core %}

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
\$(document).ready(function() {
    \$('#tabs li').on('click', function() {
    var tab = \$(this).data('tab');

    \$('#tabs li').removeClass('is-active');
    \$(this).addClass('is-active');

    \$('#tab-content #cont').removeClass('is-active');
    \$('#cont[data-content=\"' + tab + '\"]').addClass('is-active');
    });

    \$(\"#leave-comm-btn\").click(function() {
        \$(\"#modal-card\").addClass(\"is-active\"); 
    });
 
    \$(\".modal-close\").click(function() {
        \$(\"#modal-card\").removeClass(\"is-active\");
    });
});
</script>

<div class=\"container\">
    <br>
    <div class=\"columns box mt-5\">
        <div class=\"column\">
            <div class=\"columns\">
                <div class=\"column is-5-desktop is-5-tablet is-12-mobile\">
                    <img src=\"{{ vich_uploader_asset(voyage) }}\" alt=\"{{ voyage.name }}\">
                </div>
                <div class=\"column is-7-desktop is-5-tablet is-12-mobile content-detail\">
                    <div class=\"columns\">
                        <div class=\"column is-8\">
                            <dt style=\"font-size:1.7em;\">{{voyage.name}}</dt>
                            <dt style=\"\">Agencier: {{ voyage.user.username }}</dt>
                            <hr>
                            <div class=\"price\">
                                <label for=\"price\">Prix: </label>
                                <span>{{ (voyage.tarif|first).prix }} €</span>
                                <br><br>
                            </div>
                            <dt>{{ voyage.infoPratique.duree }} jours</dt>
                            <dt>{{ voyage.infoPratique.depart|date(\"d/m/Y\") }}</dt>
                            <hr>
                            <p style=\"\">{{voyage.description}}</p>
                        </div>
                        <div class=\"column is-1\">
                            <div align=\"\">
                                {% if isfavorie == true %}
                                    <div>
                                        <a id=\"favorie_lien\" href=\"{{path('favorie_delete',{'id': voyage.id})}}\">
                                            <i class=\"bi bi-suit-heart-fill\"></i>
                                        </a>
                                    </div>
                                {% elseif is_granted(\"ROLE_USER\") %}
                                    <div>
                                        <a id=\"favorie_lien\" href=\"{{path('favorie_new',{'id': voyage.id})}}\">
                                            <i class=\"bi bi-suit-heart\"></i>
                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                        {# <div class=\"column is-3\">
                            <div align=\"\">
                                {% if isPanier == true %}
                                    <a class=\"text-white\" href=\"{{path('panier_new',{'id': voyage.id})}}\"><button class=\"button is-primary\" disabled>Ajouté au panier</button></a>
                                {% elseif is_granted(\"ROLE_USER\") %}
                                    <a class=\"text-white\" href=\"{{path('panier_new',{'id': voyage.id})}}\"><button class=\"button is-warning\">Ajouter au panier</button></a>
                                {% endif %}
                                {# <button class=\"button is-small is-primary\">Acheter maintenant</button> #}
                            </div>
                        </div> #}
                    </div>
                </div>
            </div>

            <div class=\"tabs is-toggle is-fullwidth mt-5\" id=\"tabs\">
                <ul>
                    <li class=\"is-active\" data-tab=\"1\">
                        <a>
                            <i class=\"bi bi-calendar-week\"></i>
                            <span class=\"ml-2\">Programme</span>
                        </a>
                    </li>
                    <li data-tab=\"2\">
                        <a>
                            <i class=\"bi bi-info-circle\"></i>
                            <span class=\"ml-2\">Informations pratiques</span>
                        </a>
                    </li>
                    <li data-tab=\"3\">
                        <a>
                            <i class=\"bi bi-currency-exchange\"></i>
                            <span class=\"ml-2\">Tarifs</span>
                        </a>
                    </li>
                    <li data-tab=\"4\">
                        <a>
                            <i class=\"bi bi-chat-text\"></i>
                            <span class=\"ml-2\">Avis</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div id=\"tab-content\">
                <div id=\"cont\" class=\"is-active\" data-content=\"1\">
                    {% include 'Front/voyage/programme.html.twig' %}
                </div>
                <div id=\"cont\" data-content=\"2\">
                    {% include 'Front/voyage/infos_pratiques.html.twig' %}
                </div>
                <div id=\"cont\" data-content=\"3\">
                    {% include 'Front/voyage/tarif.html.twig' %}
                </div>
                <div id=\"cont\" data-content=\"4\">
                    {% include 'Front/voyage/avis.html.twig' %}
                </div>
            </div>
        </div>
    </div>
</div>
{# 
<div class=\"mt-5\" style=\"min-height: 100vh;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6  \">
                <img width=\"570\" height=\"500\" class=\"mr-3\" src=\"{{ vich_uploader_asset(voyage) }}\"
                    alt=\"{{ voyage.name }}\" />
            </div>
            <div style=\"background-color:#040E27;\" class=\"col-6 \">
                <div class=\"d-flex justify-content-between mt-2\">
                    <div style=\"background:#ff7e00;font-size:18px;padding:8px 20px;text-transform:uppercase\"
                        class=\"text-white\">{{voyage.name}}
                    </div>

                    {% if isfavorie == true %}
                    <div> <a id=\"favorie_lien\" href=\"{{path('favorie_delete',{'id': voyage.id})}}\"><i
                                class=\"far fa fa-heart\"></i></a>
                    </div>
                    {% elseif is_granted(\"ROLE_USER\") %}
                    <div> <a id=\"favorie_lien\" href=\"{{path('favorie_new',{'id': voyage.id})}}\"><i
                                class=\"far fa fa-heart-o\"></i></a>
                    </div>

                    {% endif %}


                </div>
                <hr>
                <div style=\"background:#fff;border-radius:2px;padding:10px;\" class=\"d-flex justify-content-between\">
                    {% for programe in voyage.programme %}
                    {% set jours = jours|merge([programe.jour]) %}
                    {% endfor %}
                    <div class=\"text-dark\"> {{max(jours )}} jours</div>
                    {% for tarif in voyage.tarif %}
                    {% set prices = prices|merge([tarif.prix]) %}
                    {% endfor %}
                    <div class=\"text-dark\">a partir de: <span style=\"color:#ff7e00\"> {{min(prices)}} €</span></div>
                </div>
                {% if isPanier == true %}
                <div class=\"mt-5 text-center w-100\" style=\"color:#fff;background:#2ecc71;font-size:22px;padding:10px;\">
                    <a class=\"text-white\" href=\"{{path('panier_new',{'id': voyage.id})}}\">Ajouté dans le panier</a>
                </div>
                {% elseif is_granted(\"ROLE_USER\") %}
                <div class=\"mt-5 text-center w-50\" style=\"color:#fff;background:#ff7e00;font-size:22px;padding:10px;\">
                    <a class=\"text-white\" href=\"{{path('panier_new',{'id': voyage.id})}}\">Ajouter au panier</a>
                </div>
                 {% endif %}

                <div style=\"background:#fff;border-radius:2px;padding:10px;\"
                    class=\"d-flex mt-5 justify-content-between\">
                    <div class=\"text-dark\">Agence</div>
                    <div class=\"text-dark\">{{ voyage.user.username }}</div>
                </div>
            </div>
        </div>

    </div>
    <div style=\"min-height: 5vh;\"></div>
    <div class=\"container\">
        {% include 'Front/voyage/info.html.twig' %}
    </div>
    <div class=\"container\">
        {% include 'Front/voyage/info_buttom.html.twig' %}
    </div>


</div> #}
{% endblock %}", "agence/voyage/show.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/pro/tripeDream.github.io/templates/agence/voyage/show.html.twig");
    }
}
