<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* cart/index.html.twig */
class __TwigTemplate_c69d1523e1a0e0d9e8e723f91ad39d1e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Panier de commande";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
";
        // line 7
        yield from         $this->loadTemplate("_partials/_nav.html.twig", "cart/index.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "
<h1 class=\"text-center text-success\">Votre panier</h1>
<div class=\"container w-50\">
\t<div class=\"col-12\">
    <table class=\"table table-sm table-hover table-primary\">
        <thead>
            <tr>
                ";
        // line 16
        yield "                <th>Désignation</th>
\t\t\t\t\t\t\t\t<th>Prix unitaire</th>
\t\t\t\t\t\t\t\t<th>Qté</th>   
                <th>TVA</th>
\t\t\t\t\t\t\t\t<th>Sous-total TTC</th>
\t\t\t\t\t\t\t\t<th>Action</th>
            </tr>
        </thead>
        <tbody>
        <div>
\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 26, $this->source); })()), "items", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            yield "\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t";
            // line 30
            yield "\t\t\t\t\t\t\t\t<td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 30), "libelle", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 31), "prixht", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 33), "tva", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-outline-danger\">Supprimer</a></td>\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 38), "prixht", [], "any", false, false, false, 38) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 38)), "html", null, true);
            yield " €</td>
\t\t\t\t\t\t</div>
    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "\t\t\t\t</div>
   \t</table>
\t</div>\t\t\t\t\t\t
</div>\t
<div class=\"col-2 ms-3\">\t\t\t
\t<h4 class=\"text-left\">Total : ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 46, $this->source); })()), "items", [], "any", false, false, false, 46), function ($__total__, $__item__) use ($context, $macros) { $context["total"] = $__total__; $context["item"] = $__item__; return ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 46, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "produit", [], "any", false, false, false, 46), "prixht", [], "any", false, false, false, 46) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "quantity", [], "any", false, false, false, 46))); }, 0), "html", null, true);
        yield " €</h4>
\t<td><a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\" class=\"btn btn-sm btn-outline-success\"><b>Page d'accueil</b></a></td>\t
</div>\t


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "cart/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  178 => 47,  174 => 46,  167 => 41,  158 => 38,  151 => 34,  147 => 33,  143 => 32,  139 => 31,  134 => 30,  130 => 27,  126 => 26,  114 => 16,  105 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier de commande{% endblock %}

{% block body %}

{% include ('_partials/_nav.html.twig')  %}

<h1 class=\"text-center text-success\">Votre panier</h1>
<div class=\"container w-50\">
\t<div class=\"col-12\">
    <table class=\"table table-sm table-hover table-primary\">
        <thead>
            <tr>
                {# <th>Réf.</th> #}
                <th>Désignation</th>
\t\t\t\t\t\t\t\t<th>Prix unitaire</th>
\t\t\t\t\t\t\t\t<th>Qté</th>   
                <th>TVA</th>
\t\t\t\t\t\t\t\t<th>Sous-total TTC</th>
\t\t\t\t\t\t\t\t<th>Action</th>
            </tr>
        </thead>
        <tbody>
        <div>
\t\t\t\t\t{% for item in cart.items %}
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t{# <td>{{ item.produit.id }}</td> #}
\t\t\t\t\t\t\t\t<td>{{ item.produit.libelle }}</td>
\t\t\t\t\t\t\t\t<td>{{ item.produit.prixht }}</td>
\t\t\t\t\t\t\t\t<td>{{ item.quantity }}</td>
\t\t\t\t\t\t\t\t<td>{{ item.produit.tva }}</td>
\t\t\t\t\t\t\t\t<td><a href=\"{{ path('cart_remove', { id: item.produit.id }) }}\" class=\"btn btn-outline-danger\">Supprimer</a></td>\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<td>{{ item.produit.prixht * item.quantity }} €</td>
\t\t\t\t\t\t</div>
    \t\t\t{% endfor %}
\t\t\t\t</div>
   \t</table>
\t</div>\t\t\t\t\t\t
</div>\t
<div class=\"col-2 ms-3\">\t\t\t
\t<h4 class=\"text-left\">Total : {{ cart.items|reduce((total, item) => total + (item.produit.prixht * item.quantity), 0) }} €</h4>
\t<td><a href=\"{{ path('app_accueil') }}\" class=\"btn btn-sm btn-outline-success\"><b>Page d'accueil</b></a></td>\t
</div>\t


{% endblock %}\t\t\t\t\t\t
\t\t\t\t\t\t\t{# <div>
\t\t\t\t\t\t\t\t{% for item in cart.items %}
        \t\t\t\t\t{# <div>
\t\t\t\t\t\t\t\t\t\t{# <img src=\"{{ item.produit.image }}\" alt=\"{{ item.produit.libelle }}\" width=\"100\"> #}
\t\t\t\t\t\t\t\t\t\t{# <h2>{{ item.produit.libelle }}</h2>
\t\t\t\t\t\t\t\t\t\t<p>Prix unitaire : {{ item.produit.prixht }} €</p>
\t\t\t\t\t\t\t\t\t\t<p>Quantité : {{ item.quantity }}</p>
\t\t\t\t\t\t\t\t\t\t{# <p>Sous-total : {{ item.produit.prixht * item.quantity }} €</p> #}
\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{ path('cart_remove', { id: item.produit.id }) }}\">Supprimer</a> #}
        \t\t\t\t\t{# </div> #}
    \t\t\t\t\t\t{# {% endfor %}
\t\t\t\t\t\t\t\t\t<td>{{ item.produit.prixht * item.quantity }}
            </tr> 
         #}
\t\t\t\t{# {% else %}
            <tr>
              <td colspan=\"4\">Aucune catégorie trouvée</td>
            </tr>
        {% endfor %}
        {# </tbody> #}
 

    {# <a href=\"{{ path('app_categories_new') }}\">Create new</a> #} 





{# 
{# <div>
    {% for item in cart.items %}
        <div>
            <img src=\"{{ item.produit.image }}\" alt=\"{{ item.produit.libelle }}\" width=\"100\">
            <h2>{{ item.produit.libelle }}</h2>
            <p>Prix unitaire : {{ item.produit.prixht }} €</p>
            <p>Quantité : {{ item.quantity }}</p>
            <p>Sous-total : {{ item.produit.prixht * item.quantity }} €</p>
            <a href=\"{{ path('cart_remove', { id: item.produit.id }) }}\">Supprimer</a>
        </div>
    {% endfor %} #}



", "cart/index.html.twig", "/home/ramand/Bureau/greenVillage/templates/cart/index.html.twig");
    }
}
