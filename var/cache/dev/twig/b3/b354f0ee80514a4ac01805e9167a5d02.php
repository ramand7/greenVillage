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

/* _partials/_carousel.html.twig */
class __TwigTemplate_339aa785c8a48afa82e0ce12fe34cddc extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_carousel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_carousel.html.twig"));

        // line 1
        yield "<!-- Section des produits phares avec Carrousel Bootstrap -->
<section class=\"featured-products text-center my-5\">
    <h2>Produits phares</h2>
    <div id=\"produitsCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\" data-bs-interval=\"4000\">
        <div class=\"carousel-inner\">
            ";
        // line 18
        yield "        </div>
        
        <!-- Contrôles de navigation du carrousel -->
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#produitsCarousel\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Précédent</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#produitsCarousel\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Suivant</span>
        </button>
    </div>
</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_partials/_carousel.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  55 => 18,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Section des produits phares avec Carrousel Bootstrap -->
<section class=\"featured-products text-center my-5\">
    <h2>Produits phares</h2>
    <div id=\"produitsCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\" data-bs-interval=\"4000\">
        <div class=\"carousel-inner\">
            {# {% for produit in produits %}
                <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                    <div class=\"card mx-auto\" style=\"width: 30rem;\">
                        <img src=\"{{ asset('images/' ~ produit.image) }}\" class=\"card-img-top\" alt=\"{{ produit.nom }}\">
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">{{ produit.nom }}</h3>
                            <p class=\"card-text\">Prix : {{ produit.prix }}€</p>
                            <a href=\"#\" class=\"btn btn-primary\">Acheter</a>
                        </div>
                    </div>
                </div>
            {% endfor %} #}
        </div>
        
        <!-- Contrôles de navigation du carrousel -->
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#produitsCarousel\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Précédent</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#produitsCarousel\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Suivant</span>
        </button>
    </div>
</section>", "_partials/_carousel.html.twig", "/home/ramand/Bureau/Copie de greenVillage/greenVillage/templates/_partials/_carousel.html.twig");
    }
}
