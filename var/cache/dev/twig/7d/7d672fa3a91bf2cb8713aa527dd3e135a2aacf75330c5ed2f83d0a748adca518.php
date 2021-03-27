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
class __TwigTemplate_a546e66fce587f76fb616fdad212c47727b50f47027d862e6f9dea8424983a2d extends Template
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
        echo "<div class=\"container-fluid\">
<div class=\"row\" style=\"padding:10px; font-weight:bold; text-align:center\">
\t<div class=\"col col-md-9\">
<h1 >Nos Recettes</h1> 
</div>
</div>
\t<article>
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 15
            echo "\t\t
\t\t\t\t<h2 style=\"padding:10px\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "nom", [], "any", false, false, false, 16), "html", null, true);
            echo "</h2>\t
<div class=\"container\">
<div class=\"row\">
<div class=\"col\">
\t\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["recette"], "images", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 21
                echo "        
            <img  src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 22))), "html", null, true);
                echo "\" alt=\"Image\" width=\"600\" height=\"400\">
        
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t</div>
<div class=\"col\">
\t\t\t\t
\t\t\t\t<p>Note : ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "note", [], "any", false, false, false, 28), "html", null, true);
            echo " </p>\t
\t\t\t\t<div style:\"height:150px; width:50px\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "ingredients", [], "any", false, false, false, 29), "html", null, true);
            echo "</div>

\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t<div style=\"padding-top:30px\">
\t\t\t\t\t\t<button class=\"btn-primary\"><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recettes_show", ["id" => twig_get_attribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" style=\"color:white\">Voir</a></button>
\t\t\t\t\t\t<button class=\"btn-primary\"><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recettes_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\"  style=\"color:white\">Modifier</a></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "\t\t\t\t
\t\t\t\t<p>\tno records found</p>
\t\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t
\t\t
\t\t<article>

\t

";
        
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
        return array (  170 => 45,  161 => 41,  150 => 35,  146 => 34,  138 => 29,  134 => 28,  129 => 25,  120 => 22,  117 => 21,  113 => 20,  106 => 16,  103 => 15,  98 => 14,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recettes index
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
<div class=\"row\" style=\"padding:10px; font-weight:bold; text-align:center\">
\t<div class=\"col col-md-9\">
<h1 >Nos Recettes</h1> 
</div>
</div>
\t<article>
\t\t\t{% for recette in recettes %}
\t\t
\t\t\t\t<h2 style=\"padding:10px\">{{ recette.nom }}</h2>\t
<div class=\"container\">
<div class=\"row\">
<div class=\"col\">
\t\t\t\t{% for image in recette.images %}
        
            <img  src=\"{{ asset('/uploads/'~image.nom) }}\" alt=\"Image\" width=\"600\" height=\"400\">
        
    {% endfor %}
\t</div>
<div class=\"col\">
\t\t\t\t
\t\t\t\t<p>Note : {{ recette.note }} </p>\t
\t\t\t\t<div style:\"height:150px; width:50px\">{{ recette.ingredients }}</div>

\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t<div style=\"padding-top:30px\">
\t\t\t\t\t\t<button class=\"btn-primary\"><a href=\"{{ path('recettes_show', {'id': recette.id}) }}\" style=\"color:white\">Voir</a></button>
\t\t\t\t\t\t<button class=\"btn-primary\"><a href=\"{{ path('recettes_edit', {'id': recette.id}) }}\"  style=\"color:white\">Modifier</a></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t
\t\t\t\t<p>\tno records found</p>
\t\t\t\t
\t\t\t{% endfor %}
\t\t
\t\t
\t\t<article>

\t

{% endblock %}
", "recettes/index.html.twig", "C:\\MAMP\\htdocs\\symfony5\\marmiton2\\templates\\recettes\\index.html.twig");
    }
}
