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

/* categories/guitares/guitares.html.twig */
class __TwigTemplate_52e9b091a5c1b46cf08beea8184422ea extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/guitares/guitares.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/guitares/guitares.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categories/guitares/guitares.html.twig", 1);
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

        yield "Village Green - Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "
";
        // line 11
        yield from         $this->loadTemplate("_partials/_nav.html.twig", "categories/guitares/guitares.html.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "
<!-- En-tête du site avec Bootstrap Navbar -->
<header>
<section>
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-danger\">
    <div class=\"container-fluid\">  
\t\t  <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> 
        <span class=\"navbar-toggler-icon\"></span> 
      </button> 

      <div class=\"collapse navbar-collapse\" id=\"navbarNav\"> 
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t<li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"#\">Accueil</a>
          </li>    
          <li class=\"nav-item\">
          \t<a class=\"nav-link\" href=\"#\">Produits</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">Promotions</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">À propos</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contact</a>
          </li>                \t\t
        </ul>
        <form class=\"d-flex\" role=\"search\">
        \t<input class=\"form-control me-2\" type=\"search\" placeholder=\"Rechercher des produits...\" aria-label=\"Search\">
          <button class=\"btn btn-outline-light\" type=\"submit\">Rechercher</button>
        </form>
\t\t\t\t";
        // line 45
        yield "\t\t\t\t\t";
        // line 46
        yield "\t\t\t\t\t";
        // line 47
        yield "\t\t\t\t";
        // line 48
        yield "      </div>
    </div>
  </nav>
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <div class=\"container-fluid\">
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <div class=\"ms-3\">
          <a href=\"#\" class=\"btn btn-outline-light\">Guitares</a>
          <a href=\"#\" class=\"btn btn-outline-light\">Claviers</a>
          <a href=\"#\" class=\"btn btn-outline-light\">Batteries</a>
          <a href=\"#\" class=\"btn btn-outline-light\">Saxophone</a>
          <a href=\"#\" class=\"btn btn-outline-light\">Accessoires</a>
          <a href=\"#\" class=\"btn btn-outline-light\">Sonorisation</a>
          <a href=\"#\" class=\"btn btn-outline-light\">Librairie</a>
          <a href=\"#\" class=\"btn btn-outline-light\">Logiciels</a>
        </div>
      </div>
    </div>
  </nav>
</section>
</header>

<!-- Bannière principale -->

<section class=\"banner text-center position-relative\">
<!--
    <img src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banniere.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Promotion\">
-->
    ";
        // line 80
        yield "        <h1>Bienvenue sur le site de Village Green !</h1>
        <p>Découvrez nos meilleures offres du moment !</p>
        <a href=\"#\" class=\"btn btn-primary\">Voir les Offres</a>
    ";
        // line 84
        yield "</section>

<!-- Les différentes catégories ici -->

<section class=\"testimonials bg-light text-center py-5\">
    <h2>Nos catégories de produit</h2>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-3 mb-0\">
                <div class=\"card my-3\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/guitare.jpg"), "html", null, true);
        yield "\" alt=\"Guitare\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
<!--\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Card title</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Guitares</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
            </div>
            <div class=\"col-md-3 mb-0\">
                <div class=\"card my-3\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/clavier.jpg"), "html", null, true);
        yield "\" alt=\"Clavier\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Claviers</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
            </div>
            <div class=\"col-md-3 mb-0\">
                <div class=\"card my-3\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/saxophone.jpg"), "html", null, true);
        yield "\" alt=\"Saxophone\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
<!--\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Card title</h5>  -->\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Saxophones</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
            </div>
            <div class=\"col-md-3 mb-0\">
                <div class=\"card my-3\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fl-studio.webp"), "html", null, true);
        yield "\" alt=\"Logiciels\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Logiciels</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
            </div>
        </div>
    </div>
\t\t<div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-3 mb-2\">
                <div class=\"card my-3\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/batteries.png"), "html", null, true);
        yield "\" alt=\"Batteries\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">


\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Batteries</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 mb-2\">
                <div class=\"card my-3\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/accessoires.webp"), "html", null, true);
        yield "\" alt=\"Accessoires\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">

<!--\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Accessoires</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 mb-2\">
                <div class=\"card my-3\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sonorisation.jpg"), "html", null, true);
        yield "\" alt=\"Sonorisation\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Sonorisation</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t</div>
            <div class=\"col-md-3 mb-0\">
                <div class=\"card my-3\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/librairie.png"), "html", null, true);
        yield "\" alt=\"Librairie\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Librairie</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
            </div>                        \t\t\t\t\t\t\t
        </div>
    </div>
</section>






<!-- Section des produits phares -->

 <!-- Intégrer le carousel pour faire défiler les produits phares -->

";
        // line 182
        yield from         $this->loadTemplate("_partials/_carousel.html.twig", "categories/guitares/guitares.html.twig", 182)->unwrap()->yield($context);
        // line 183
        yield "
<!-- Section des témoignages / avis clients -->
<section class=\"testimonials bg-light text-center py-5\">
    <h2>Ce que disent nos clients</h2>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 mb-4\">
                <blockquote class=\"blockquote\">
                    <p>\"Produit de qualité et service rapide ! Je recommande vivement.\"</p>
                    <footer class=\"blockquote-footer\">Client satisfait</footer>
                </blockquote>
            </div>
            <div class=\"col-md-6 mb-4\">
                <blockquote class=\"blockquote\">
                    <p>\"Excellent rapport qualité-prix. Livraison rapide.\"</p>
                    <footer class=\"blockquote-footer\">Client fidèle</footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- Pied de page -->
<footer class=\"bg-dark text-white py-4\">
    <div class=\"container bg-dark text-white\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <h5>À propos</h5>
                <h6>Description rapide de votre site e-commerce.</h6> 
            </div>
            <div class=\"col-md-4\">
                <h5>Liens utiles</h5>
                <ul class=\"list-unstyled\">
                    <li><a href=\"#\" class=\"text-white\">Mentions légales</a></li>
                    <li><a href=\"#\" class=\"text-white\">Politique de confidentialité</a></li>
                    <li><a href=\"#\" class=\"text-white\">Conditions générales</a></li>
                </ul>
            </div>
            <div class=\"col-md-4\">
                <h5>Suivez-nous</h5>
                <a href=\"#\" class=\"text-white me-2\">Facebook</a>
                <a href=\"#\" class=\"text-white me-2\">Instagram</a>
                <a href=\"#\" class=\"text-white\">Twitter</a>
            </div>
        </div>
        <div class=\"text-red text-center mt-3\">
            &copy; 2024 Village Green. Tous droits réservés.
        </div>
    </div>
</footer>

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
        return "categories/guitares/guitares.html.twig";
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
        return array (  339 => 183,  337 => 182,  315 => 163,  304 => 155,  291 => 145,  278 => 135,  262 => 122,  250 => 113,  238 => 104,  225 => 94,  213 => 84,  208 => 80,  203 => 77,  172 => 48,  170 => 47,  168 => 46,  166 => 45,  156 => 37,  129 => 12,  127 => 11,  124 => 10,  111 => 9,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Village Green - Accueil{% endblock %}

{% block stylesheets %} {% endblock %}



{% block body %}

{% include \"_partials/_nav.html.twig\" %}

<!-- En-tête du site avec Bootstrap Navbar -->
<header>
<section>
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-danger\">
    <div class=\"container-fluid\">  
\t\t  <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> 
        <span class=\"navbar-toggler-icon\"></span> 
      </button> 

      <div class=\"collapse navbar-collapse\" id=\"navbarNav\"> 
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t<li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"#\">Accueil</a>
          </li>    
          <li class=\"nav-item\">
          \t<a class=\"nav-link\" href=\"#\">Produits</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">Promotions</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">À propos</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_contact') }}\">Contact</a>
          </li>                \t\t
        </ul>
        <form class=\"d-flex\" role=\"search\">
        \t<input class=\"form-control me-2\" type=\"search\" placeholder=\"Rechercher des produits...\" aria-label=\"Search\">
          <button class=\"btn btn-outline-light\" type=\"submit\">Rechercher</button>
        </form>
\t\t\t\t{# <div class=\"ms-3\"> #}
\t\t\t\t\t{# <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-light\">Mon Compte</a> #}
\t\t\t\t\t{# <a href=\"{{ path('app_register') }}\" class=\"btn btn-outline-light\">S'inscrire</a> #}
\t\t\t\t{# </div> #}
      </div>
    </div>
  </nav>
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <div class=\"container-fluid\">
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <div class=\"ms-3\">
          <a href=\"#\" class=\"btn btn-outline-light\">Guitares</a>
          <a href=\"#\" class=\"btn btn-outline-light\">Claviers</a>
          <a href=\"#\" class=\"btn btn-outline-light\">Batteries</a>
          <a href=\"#\" class=\"btn btn-outline-light\">Saxophone</a>
          <a href=\"#\" class=\"btn btn-outline-light\">Accessoires</a>
          <a href=\"#\" class=\"btn btn-outline-light\">Sonorisation</a>
          <a href=\"#\" class=\"btn btn-outline-light\">Librairie</a>
          <a href=\"#\" class=\"btn btn-outline-light\">Logiciels</a>
        </div>
      </div>
    </div>
  </nav>
</section>
</header>

<!-- Bannière principale -->

<section class=\"banner text-center position-relative\">
<!--
    <img src=\"{{ asset('images/banniere.jpg') }}\" class=\"img-fluid\" alt=\"Promotion\">
-->
    {# <div class=\"banner-text position-absolute top-50 start-50 translate-middle text-white\"> #}
        <h1>Bienvenue sur le site de Village Green !</h1>
        <p>Découvrez nos meilleures offres du moment !</p>
        <a href=\"#\" class=\"btn btn-primary\">Voir les Offres</a>
    {# </div> #}
</section>

<!-- Les différentes catégories ici -->

<section class=\"testimonials bg-light text-center py-5\">
    <h2>Nos catégories de produit</h2>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-3 mb-0\">
                <div class=\"card my-3\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/guitare.jpg') }}\" alt=\"Guitare\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
<!--\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Card title</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Guitares</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
            </div>
            <div class=\"col-md-3 mb-0\">
                <div class=\"card my-3\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/clavier.jpg') }}\" alt=\"Clavier\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Claviers</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
            </div>
            <div class=\"col-md-3 mb-0\">
                <div class=\"card my-3\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/saxophone.jpg') }}\" alt=\"Saxophone\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
<!--\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Card title</h5>  -->\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Saxophones</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
            </div>
            <div class=\"col-md-3 mb-0\">
                <div class=\"card my-3\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/fl-studio.webp') }}\" alt=\"Logiciels\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Logiciels</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
            </div>
        </div>
    </div>
\t\t<div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-3 mb-2\">
                <div class=\"card my-3\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/batteries.png') }}\" alt=\"Batteries\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">


\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Batteries</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 mb-2\">
                <div class=\"card my-3\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/accessoires.webp') }}\" alt=\"Accessoires\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">

<!--\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Accessoires</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 mb-2\">
                <div class=\"card my-3\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/sonorisation.jpg') }}\" alt=\"Sonorisation\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Sonorisation</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t</div>
            <div class=\"col-md-3 mb-0\">
                <div class=\"card my-3\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/librairie.png') }}\" alt=\"Librairie\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Librairie</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
            </div>                        \t\t\t\t\t\t\t
        </div>
    </div>
</section>






<!-- Section des produits phares -->

 <!-- Intégrer le carousel pour faire défiler les produits phares -->

{% include \"_partials/_carousel.html.twig\" %}

<!-- Section des témoignages / avis clients -->
<section class=\"testimonials bg-light text-center py-5\">
    <h2>Ce que disent nos clients</h2>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 mb-4\">
                <blockquote class=\"blockquote\">
                    <p>\"Produit de qualité et service rapide ! Je recommande vivement.\"</p>
                    <footer class=\"blockquote-footer\">Client satisfait</footer>
                </blockquote>
            </div>
            <div class=\"col-md-6 mb-4\">
                <blockquote class=\"blockquote\">
                    <p>\"Excellent rapport qualité-prix. Livraison rapide.\"</p>
                    <footer class=\"blockquote-footer\">Client fidèle</footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- Pied de page -->
<footer class=\"bg-dark text-white py-4\">
    <div class=\"container bg-dark text-white\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <h5>À propos</h5>
                <h6>Description rapide de votre site e-commerce.</h6> 
            </div>
            <div class=\"col-md-4\">
                <h5>Liens utiles</h5>
                <ul class=\"list-unstyled\">
                    <li><a href=\"#\" class=\"text-white\">Mentions légales</a></li>
                    <li><a href=\"#\" class=\"text-white\">Politique de confidentialité</a></li>
                    <li><a href=\"#\" class=\"text-white\">Conditions générales</a></li>
                </ul>
            </div>
            <div class=\"col-md-4\">
                <h5>Suivez-nous</h5>
                <a href=\"#\" class=\"text-white me-2\">Facebook</a>
                <a href=\"#\" class=\"text-white me-2\">Instagram</a>
                <a href=\"#\" class=\"text-white\">Twitter</a>
            </div>
        </div>
        <div class=\"text-red text-center mt-3\">
            &copy; 2024 Village Green. Tous droits réservés.
        </div>
    </div>
</footer>

{% endblock %}
", "categories/guitares/guitares.html.twig", "/home/ramand/Bureau/greenVillage 20442024 bis/templates/categories/guitares/guitares.html.twig");
    }
}
