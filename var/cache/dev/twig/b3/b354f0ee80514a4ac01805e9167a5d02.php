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
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 6, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 7
            yield "                <div class=\"carousel-item ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 7)) {
                yield "active";
            }
            yield "\">
                    <div class=\"card mx-auto\" style=\"width: 30rem;\">
                        <img src=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 9))), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 9), "html", null, true);
            yield "\">
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 11), "html", null, true);
            yield "</h3>
                            <p class=\"card-text\">Prix : ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 12), "html", null, true);
            yield "€</p>
                            <a href=\"#\" class=\"btn btn-primary\">Acheter</a>
                        </div>
                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  111 => 18,  91 => 12,  87 => 11,  80 => 9,  72 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Section des produits phares avec Carrousel Bootstrap -->
<section class=\"featured-products text-center my-5\">
    <h2>Produits phares</h2>
    <div id=\"produitsCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\" data-bs-interval=\"4000\">
        <div class=\"carousel-inner\">
            {% for produit in produits %}
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
            {% endfor %}
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
</section>", "_partials/_carousel.html.twig", "/home/ramand/Bureau/greenVillage21112024/templates/_partials/_carousel.html.twig");
    }
}
