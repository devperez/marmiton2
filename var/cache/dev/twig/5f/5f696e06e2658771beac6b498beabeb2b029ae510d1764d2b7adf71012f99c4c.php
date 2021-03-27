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
class __TwigTemplate_368af86748f2756d176689b52777d1d5a154c10f9aee79c46c44563ad06f617d extends Template
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
\t\t\t\t\t\trecettes affichées
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
            echo "\t\t\t\t\t<h2 style=\"padding:10px\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "nom", [], "any", false, false, false, 21), "html", null, true);
            echo "</h2>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["recette"], "images", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 26
                echo "
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 27))), "html", null, true);
                echo "\" alt=\"Image\" width=\"600\" height=\"400\">

\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col\">

\t\t\t\t\t\t\t\t<p>Note :
\t\t\t\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "note", [], "any", false, false, false, 34), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>Catégorie :
\t\t\t\t\t\t\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "categorie", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<div style:\"height:150px; width:50px\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "ingredients", [], "any", false, false, false, 38), "html", null, true);
            echo "</div>


\t\t\t\t\t\t\t\t<div style=\"padding-top:30px\">
\t\t\t\t\t\t\t\t\t<button class=\"btn-primary\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recettes_show", ["id" => twig_get_attribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" style=\"color:white\">Voir</a>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t";
            // line 45
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) {
                // line 46
                echo "\t\t\t\t\t\t\t\t\t\t<button class=\"btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recettes_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" style=\"color:white\">Modifier</a>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "
\t\t\t\t\t<p>
\t\t\t\t\t\tno records found</p>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        return array (  198 => 60,  188 => 55,  179 => 50,  173 => 47,  170 => 46,  168 => 45,  163 => 43,  155 => 38,  151 => 37,  145 => 34,  139 => 30,  130 => 27,  127 => 26,  123 => 25,  115 => 21,  110 => 20,  101 => 14,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
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
\t\t\t\t\t\trecettes affichées
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
