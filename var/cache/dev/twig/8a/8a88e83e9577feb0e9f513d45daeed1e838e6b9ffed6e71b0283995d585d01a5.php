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

/* recettes/index.html.twig */
class __TwigTemplate_c8daebfcbae798de7bd8af987e9143173921836a867618fa71e7db4e5948d63b extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recettes/index.html.twig", 1);
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

        echo "Recettes index
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"container-fluid\">
\t\t<div style=\"padding-top:10px\">
\t\t\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form');
        echo "
\t\t\t</div>
\t\t\t<div class=\" row\" style=\" padding:10px; font-weight:bold; text-align:center\">
\t\t\t\t<div class=\"col col-md-9\">
\t\t\t\t\t<h1>
\t\t\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 14, $this->source); })())), "html", null, true);
        echo "
\t\t\t\t\t\trecettes affichées sur cette page
\t\t\t\t\t</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<article>
\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 21
            echo "
\t\t\t\t\t<h2 style=\"padding:10px\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</h2>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["recette"], "images", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 27
                echo "
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 28))), "html", null, true);
                echo "\" alt=\"Image\" width=\"600\" height=\"400\">

\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col\">

\t\t\t\t\t\t\t\t<p>Note :
\t\t\t\t\t\t\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "note", [], "any", false, false, false, 35), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>Catégorie :
\t\t\t\t\t\t\t\t\t";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "categorie", [], "any", false, false, false, 38), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<div style:\"height:150px; width:50px\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "ingredients", [], "any", false, false, false, 39), "html", null, true);
            echo "</div>


\t\t\t\t\t\t\t\t<div style=\"padding-top:30px\">
\t\t\t\t\t\t\t\t\t<button class=\"btn-primary\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recettes_show", ["id" => twig_get_attribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" style=\"color:white\">Voir</a>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t";
            // line 46
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) {
                // line 47
                echo "\t\t\t\t\t\t\t\t\t\t<button class=\"btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recettes_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" style=\"color:white\">Modifier</a>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "
\t\t\t\t\t<p>
\t\t\t\t\t\tno records found</p>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recettes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 61,  190 => 56,  181 => 51,  175 => 48,  172 => 47,  170 => 46,  165 => 44,  157 => 39,  153 => 38,  147 => 35,  141 => 31,  132 => 28,  129 => 27,  125 => 26,  118 => 22,  115 => 21,  110 => 20,  101 => 14,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recettes index
{% endblock %}

{% block body %}
\t<div class=\"container-fluid\">
\t\t<div style=\"padding-top:10px\">
\t\t\t{{ form(form)}}
\t\t\t</div>
\t\t\t<div class=\" row\" style=\" padding:10px; font-weight:bold; text-align:center\">
\t\t\t\t<div class=\"col col-md-9\">
\t\t\t\t\t<h1>
\t\t\t\t\t\t{{ recettes | length}}
\t\t\t\t\t\trecettes affichées sur cette page
\t\t\t\t\t</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<article>
\t\t\t\t{% for recette in recettes %}

\t\t\t\t\t<h2 style=\"padding:10px\">{{ recette.nom }}</h2>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t{% for image in recette.images %}

\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('/uploads/'~image.nom) }}\" alt=\"Image\" width=\"600\" height=\"400\">

\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col\">

\t\t\t\t\t\t\t\t<p>Note :
\t\t\t\t\t\t\t\t\t{{ recette.note }}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>Catégorie :
\t\t\t\t\t\t\t\t\t{{ recette.categorie }}</p>
\t\t\t\t\t\t\t\t<div style:\"height:150px; width:50px\">{{ recette.ingredients }}</div>


\t\t\t\t\t\t\t\t<div style=\"padding-top:30px\">
\t\t\t\t\t\t\t\t\t<button class=\"btn-primary\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('recettes_show', {'id': recette.id}) }}\" style=\"color:white\">Voir</a>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t<button class=\"btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('recettes_edit', {'id': recette.id}) }}\" style=\"color:white\">Modifier</a>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% else %}

\t\t\t\t\t<p>
\t\t\t\t\t\tno records found</p>

\t\t\t\t{% endfor %}
\t\t\t{% endblock %}
", "recettes/index.html.twig", "/media/DEV/AFPA/mission-8/marmiton2/templates/recettes/index.html.twig");
    }
}
