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

/* recettes/home.html.twig */
class __TwigTemplate_32625625c61191edb557f533e4110476edef96332b2ab381a50affafe77f5868 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recettes/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h1>
\t\tDécouvrez une nouvelle recette !</h1>


\t<h2 style=\"padding:10px\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), "html", null, true);
        echo "</h2>

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 14, $this->source); })()), "images", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 15
            echo "
\t\t\t\t\t<img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 16))), "html", null, true);
            echo "\" alt=\"Image\" width=\"600\" height=\"400\">

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t<div class=\"row\" style=\"padding:20px\">
\t\t\t\t\t<div class=\"col col-md-3\">
\t\t\t\t\t\t<h2>Ingrédients</h2>
\t\t\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 22, $this->source); })()), "ingredients", [], "any", false, false, false, 22), "html", null, true);
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col col-md-9\">
\t\t\t\t\t\t<h2>Préparation</h2>
\t\t\t\t\t\t";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 27, $this->source); })()), "preparation", [], "any", false, false, false, 27), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recettes/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 27,  104 => 22,  99 => 19,  90 => 16,  87 => 15,  83 => 14,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<h1>
\t\tDécouvrez une nouvelle recette !</h1>


\t<h2 style=\"padding:10px\">{{ recette.nom }}</h2>

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t{% for image in recette.images %}

\t\t\t\t\t<img src=\"{{ asset('/uploads/'~image.nom) }}\" alt=\"Image\" width=\"600\" height=\"400\">

\t\t\t\t{% endfor %}
\t\t\t\t<div class=\"row\" style=\"padding:20px\">
\t\t\t\t\t<div class=\"col col-md-3\">
\t\t\t\t\t\t<h2>Ingrédients</h2>
\t\t\t\t\t\t{{ recette.ingredients }}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col col-md-9\">
\t\t\t\t\t\t<h2>Préparation</h2>
\t\t\t\t\t\t{{ recette.preparation }}
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t{% endblock %}
", "recettes/home.html.twig", "/media/DEV/AFPA/mission-8/marmiton2/templates/recettes/home.html.twig");
    }
}
