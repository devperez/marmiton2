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

/* recettes/show.html.twig */
class __TwigTemplate_aedd3b811828f6868c85b8da4667471382681f351fe30d7ec84f06361cb8e0da extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recettes/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Recettes
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<h1 style=\"padding:15px\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
\t<div class=\"metadata\">Catégorie :
\t\t";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 10, $this->source); })()), "categorie", [], "any", false, false, false, 10), "html", null, true);
        echo "
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col col-md-12\">
\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 14, $this->source); })()), "images", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 15
            echo "
\t\t\t\t\t\t<img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 16))), "html", null, true);
            echo "\" alt=\"Image\" width=\"1100\" height=\"500\">

\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\" style=\"padding:20px\">
\t\t\t\t<div class=\"col col-md-3\">
\t\t\t\t\t<h2>Ingrédients</h2>
\t\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 25, $this->source); })()), "ingredients", [], "any", false, false, false, 25), "html", null, true);
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col col-md-9\">
\t\t\t\t\t<h2>Préparation</h2>
\t\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 30, $this->source); })()), "preparation", [], "any", false, false, false, 30), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col col-md-6\">
\t\t\t\t\t<button class=\"btn-primary\">
\t\t\t\t\t\t<a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recettes_index");
        echo "\" style=\"color:white\">Retourner à la liste</a>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)) {
            // line 43
            echo "\t\t\t\t\t<div class=\"col col-md-6\">
\t\t\t\t\t\t<button class=\"btn-primary\">
\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recettes_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" style=\"color:white\">Modifier</a>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t";
            // line 47
            echo twig_include($this->env, $context, "recettes/_delete_form.html.twig");
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 50
        echo "
\t\t\t</div>
\t\t</div>
\t\t<section id=\"commentaires\">
\t\t\t<h1>
\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 55, $this->source); })()), "comments", [], "any", false, false, false, 55)), "html", null, true);
        echo "
\t\t\t\tcommentaires :
\t\t\t</h1>
\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 58, $this->source); })()), "comments", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 59
            echo "\t\t\t\t<div class=\"comment\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 62), "html", null, true);
            echo "
\t\t\t\t\t\t\t(<small>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 63), "d/m/Y à H:i"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</small>)
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 67);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72)) {
            // line 73
            echo "
\t\t\t\t";
            // line 74
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 74, $this->source); })()), 'form_start');
            echo "
\t\t\t\t";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 75, $this->source); })()), "author", [], "any", false, false, false, 75), 'row', ["label" => "Votre nom"]);
            echo "
\t\t\t\t";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 76, $this->source); })()), "content", [], "any", false, false, false, 76), 'row', ["label" => "Votre commentaire"]);
            echo "

\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Commenter !</button>
\t\t\t\t";
            // line 79
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 79, $this->source); })()), 'form_end');
            echo "

\t\t\t";
        } else {
            // line 82
            echo "\t\t\t\t<h2>Veuillez vous connecter pour laisser un commentaire</h2>
\t\t\t\t<a href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-primary\">Connexion</a>
\t\t\t";
        }
        // line 85
        echo "\t\t</section>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recettes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 85,  242 => 83,  239 => 82,  233 => 79,  227 => 76,  223 => 75,  219 => 74,  216 => 73,  213 => 72,  202 => 67,  195 => 63,  191 => 62,  186 => 59,  182 => 58,  176 => 55,  169 => 50,  163 => 47,  158 => 45,  154 => 43,  152 => 42,  146 => 39,  134 => 30,  126 => 25,  118 => 19,  109 => 16,  106 => 15,  102 => 14,  95 => 10,  89 => 8,  79 => 7,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Recettes
{% endblock %}

{% block body %}
\t<h1 style=\"padding:15px\">{{ recette.nom }}</h1>
\t<div class=\"metadata\">Catégorie :
\t\t{{recette.categorie }}
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col col-md-12\">
\t\t\t\t\t{% for image in recette.images %}

\t\t\t\t\t\t<img src=\"{{ asset('/uploads/'~image.nom) }}\" alt=\"Image\" width=\"1100\" height=\"500\">

\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\" style=\"padding:20px\">
\t\t\t\t<div class=\"col col-md-3\">
\t\t\t\t\t<h2>Ingrédients</h2>
\t\t\t\t\t{{ recette.ingredients }}
\t\t\t\t</div>

\t\t\t\t<div class=\"col col-md-9\">
\t\t\t\t\t<h2>Préparation</h2>
\t\t\t\t\t{{ recette.preparation }}
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col col-md-6\">
\t\t\t\t\t<button class=\"btn-primary\">
\t\t\t\t\t\t<a href=\"{{ path('recettes_index') }}\" style=\"color:white\">Retourner à la liste</a>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t{% if app.user %}
\t\t\t\t\t<div class=\"col col-md-6\">
\t\t\t\t\t\t<button class=\"btn-primary\">
\t\t\t\t\t\t\t<a href=\"{{ path('recettes_edit', {'id': recette.id}) }}\" style=\"color:white\">Modifier</a>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t{{ include('recettes/_delete_form.html.twig') }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t</div>
\t\t</div>
\t\t<section id=\"commentaires\">
\t\t\t<h1>
\t\t\t\t{{ recette.comments | length }}
\t\t\t\tcommentaires :
\t\t\t</h1>
\t\t\t{% for comment in recette.comments %}
\t\t\t\t<div class=\"comment\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t{{ comment.author}}
\t\t\t\t\t\t\t(<small>{{comment.createdAt | date('d/m/Y à H:i') }}
\t\t\t\t\t\t\t</small>)
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t{{comment.content | raw }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t{% if app.user %}

\t\t\t\t{{ form_start(commentForm) }}
\t\t\t\t{{form_row(commentForm.author,{'label':'Votre nom'}, {'attr': {'placeholder': \"Votre nom\"}})}}
\t\t\t\t{{form_row(commentForm.content,{'label':'Votre commentaire'}, {'attr': {'placeholder': \"Votre commentaire\"}})}}

\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Commenter !</button>
\t\t\t\t{{ form_end(commentForm) }}

\t\t\t{% else %}
\t\t\t\t<h2>Veuillez vous connecter pour laisser un commentaire</h2>
\t\t\t\t<a href=\"{{path('security_login')}}\" class=\"btn btn-primary\">Connexion</a>
\t\t\t{% endif %}
\t\t</section>
\t{% endblock %}
", "recettes/show.html.twig", "/media/DEV/AFPA/mission-8/marmiton2/marmiton2/templates/recettes/show.html.twig");
    }
}
