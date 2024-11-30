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
<h1 class=\"text text-primary\">Votre panier</h1>

    <h1>Votre Panier</h1>

    <p><b>Panier ID :</b> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
    <p><b>Utilisateur : </b>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "nom", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>
    <!-- Ajoutez d'autres informations du panier ici -->

<div class=\"container-fluid w-50\">
\t<div class=\"col-10\">
    <table class=\"table table-hover table-primary\">
        ";
        // line 21
        yield "            <tr class=\"text-center\">
                <th>id</th>
\t\t\t\t\t\t\t\t<th>Désignation</th>
\t\t\t\t\t\t\t\t<th>Prix unitaire</th>
\t\t\t\t\t\t\t\t<th>Qté</th>   
                <th>TVA</th>
\t\t\t\t\t\t\t\t<th>Sous-total TTC</th>
\t\t\t\t\t\t\t\t<th>Action</th>
            </tr>
        ";
        // line 31
        yield "        ";
        // line 32
        yield "        ";
        // line 33
        yield "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 33, $this->source); })()), "items", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            yield "\t\t\t\t\t\t";
            // line 35
            yield "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 37), "libelle", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 38), "prixht", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 40), "tva", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 41), "prixht", [], "any", false, false, false, 41) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 41)) * (1 + CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 41), "tva", [], "any", false, false, false, 41))), "html", null, true);
            yield " €</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "quantity" => 1]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-danger\"><b>Supprimer</b></a></td>
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
            // line 45
            yield "    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "\t\t\t\t";
        // line 47
        yield "\t\t\t";
        // line 48
        yield "   \t</table>
\t</div>
\t<div class=\"col-3 ms-1\">\t\t\t
\t\t<h4 class=\"text-center\">Total : ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 51, $this->source); })()), "items", [], "any", false, false, false, 51), function ($__total__, $__item__) use ($context, $macros) { $context["total"] = $__total__; $context["item"] = $__item__; return ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 51, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 51, $this->source); })()), "produit", [], "any", false, false, false, 51), "prixht", [], "any", false, false, false, 51) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 51, $this->source); })()), "quantity", [], "any", false, false, false, 51))); }, 0), "html", null, true);
        yield " €</h4>
\t\t<td><a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\" class=\"btn btn-sm btn-outline-success\"><b>Page d'accueil</b></a></td>\t
\t</div>\t\t\t\t\t\t
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
        return array (  198 => 52,  194 => 51,  189 => 48,  187 => 47,  185 => 46,  179 => 45,  174 => 42,  170 => 41,  166 => 40,  162 => 39,  158 => 38,  154 => 37,  150 => 36,  147 => 35,  145 => 34,  140 => 33,  138 => 32,  136 => 31,  125 => 21,  116 => 14,  112 => 13,  105 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier de commande{% endblock %}

{% block body %}

{% include ('_partials/_nav.html.twig')  %}

<h1 class=\"text text-primary\">Votre panier</h1>

    <h1>Votre Panier</h1>

    <p><b>Panier ID :</b> {{ cart.id }}</p>
    <p><b>Utilisateur : </b>{{ cart.user.nom }}</p>
    <!-- Ajoutez d'autres informations du panier ici -->

<div class=\"container-fluid w-50\">
\t<div class=\"col-10\">
    <table class=\"table table-hover table-primary\">
        {# <thead> #}
            <tr class=\"text-center\">
                <th>id</th>
\t\t\t\t\t\t\t\t<th>Désignation</th>
\t\t\t\t\t\t\t\t<th>Prix unitaire</th>
\t\t\t\t\t\t\t\t<th>Qté</th>   
                <th>TVA</th>
\t\t\t\t\t\t\t\t<th>Sous-total TTC</th>
\t\t\t\t\t\t\t\t<th>Action</th>
            </tr>
        {# </thead> #}
        {# <tbody> #}
        {# <div> #}
\t\t\t\t\t{% for item in cart.items %}
\t\t\t\t\t\t{# <div> #}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ item.produit.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ item.produit.libelle }}</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ item.produit.prixht }}</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ item.quantity }}</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ item.produit.tva }}</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ (item.produit.prixht * item.quantity) * (1 + item.produit.tva) }} €</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"{{ path('cart_remove', { id: item.produit.id, quantity: 1  }) }}\" class=\"btn btn-sm btn-outline-danger\"><b>Supprimer</b></a></td>
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t{# </div> #}
    \t\t\t{% endfor %}
\t\t\t\t{# </div> #}
\t\t\t{# </tbody> #}
   \t</table>
\t</div>
\t<div class=\"col-3 ms-1\">\t\t\t
\t\t<h4 class=\"text-center\">Total : {{ cart.items|reduce((total, item) => total + (item.produit.prixht * item.quantity), 0) }} €</h4>
\t\t<td><a href=\"{{ path('app_accueil') }}\" class=\"btn btn-sm btn-outline-success\"><b>Page d'accueil</b></a></td>\t
\t</div>\t\t\t\t\t\t
</div>\t

{% endblock %}\t\t\t\t\t\t




", "cart/index.html.twig", "/home/ramand/Bureau/greenVillage/templates/cart/index.html.twig");
    }
}
