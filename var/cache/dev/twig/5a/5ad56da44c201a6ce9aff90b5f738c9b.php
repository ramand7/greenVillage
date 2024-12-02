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

/* _partials/_footer.html.twig */
class __TwigTemplate_4c613de6d9b58ca007284a659351aeea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_footer.html.twig"));

        // line 1
        yield "\t\t<footer class=\"container-fluid bg-dark text-white\">
\t\t\t<div class=\"row\">
\t\t\t\t<section class=\"col\">
\t\t\t\t\tColonne 1
\t\t\t\t</section>
\t\t\t\t<section class=\"col\">
\t\t\t\t\tColonne 2
\t\t\t\t</section>
\t\t\t\t<section class=\"col\">
\t\t\t\t\tColonne 3
\t\t\t\t</section>
\t\t\t</div>
\t\t
\t\t</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_partials/_footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("\t\t<footer class=\"container-fluid bg-dark text-white\">
\t\t\t<div class=\"row\">
\t\t\t\t<section class=\"col\">
\t\t\t\t\tColonne 1
\t\t\t\t</section>
\t\t\t\t<section class=\"col\">
\t\t\t\t\tColonne 2
\t\t\t\t</section>
\t\t\t\t<section class=\"col\">
\t\t\t\t\tColonne 3
\t\t\t\t</section>
\t\t\t</div>
\t\t
\t\t</footer>", "_partials/_footer.html.twig", "/home/ramand/Bureau/greenVillage/templates/_partials/_footer.html.twig");
    }
}
