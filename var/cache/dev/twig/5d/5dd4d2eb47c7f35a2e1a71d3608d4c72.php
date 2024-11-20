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

/* @WebProfiler/Collector/mailer.html.twig */
class __TwigTemplate_8aae9414f45625abd8f5b7f61b999c72 extends Template
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
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/mailer.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "events", [], "any", false, false, false, 4);
        // line 5
        yield "
    ";
        // line 6
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 6, $this->source); })()), "messages", [], "any", false, false, false, 6))) {
            // line 7
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 8
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/mailer.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 9, $this->source); })()), "messages", [], "any", false, false, false, 9)), "html", null, true);
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 11
            yield "
        ";
            // line 12
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 13
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Queued messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 15, $this->source); })()), "events", [], "any", false, false, false, 15), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 15, $this->source); })()), "isQueued", [], "method", false, false, false, 15); })), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 19, $this->source); })()), "events", [], "any", false, false, false, 19), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 19, $this->source); })()), "isQueued", [], "method", false, false, false, 19); })), "html", null, true);
                yield "</span>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 22
            yield "
        ";
            // line 23
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 23, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 28
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 28, $this->source); })()), "events", [], "any", false, false, false, 28);
        // line 29
        yield "
    <span class=\"label ";
        // line 30
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 30, $this->source); })()), "messages", [], "any", false, false, false, 30))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 31
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/mailer.svg");
        yield "</span>

        <strong>E-mails</strong>
        ";
        // line 34
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 34, $this->source); })()), "messages", [], "any", false, false, false, 34)) > 0)) {
            // line 35
            yield "            <span class=\"count\">
                <span>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 36, $this->source); })()), "messages", [], "any", false, false, false, 36)), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 39
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 43
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "events", [], "any", false, false, false, 43);
        // line 44
        yield "    <h2>Emails</h2>

    ";
        // line 46
        if ( !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 46, $this->source); })()), "messages", [], "any", false, false, false, 46))) {
            // line 47
            yield "        <div class=\"empty empty-panel\">
            <p>No emails were sent.</p>
        </div>
    ";
        } else {
            // line 51
            yield "        <div class=\"metrics\">
            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 54, $this->source); })()), "events", [], "any", false, false, false, 54), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 54, $this->source); })()), "isQueued", [], "method", false, false, false, 54); })), "html", null, true);
            yield "</span>
                    <span class=\"label\">Queued</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 59, $this->source); })()), "events", [], "any", false, false, false, 59), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 59, $this->source); })()), "isQueued", [], "method", false, false, false, 59); })), "html", null, true);
            yield "</span>
                    <span class=\"label\">Sent</span>
                </div>
            </div>
        </div>
    ";
        }
        // line 65
        yield "
    ";
        // line 66
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 66, $this->source); })()), "transports", [], "any", false, false, false, 66)) > 1)) {
            // line 67
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 67, $this->source); })()), "transports", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                // line 68
                yield "            <h2><code>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["transport"], "html", null, true);
                yield "</code> transport</h2>
            ";
                // line 69
                yield CoreExtension::callMacro($macros["_self"], "macro_render_transport_details", [(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 69, $this->source); })()), $context["transport"]], 69, $context, $this->getSourceContext());
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['transport'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "    ";
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 71, $this->source); })()), "transports", [], "any", false, false, false, 71))) {
            // line 72
            yield "        ";
            yield CoreExtension::callMacro($macros["_self"], "macro_render_transport_details", [(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 72, $this->source); })()), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 72, $this->source); })()), "transports", [], "any", false, false, false, 72)), true], 72, $context, $this->getSourceContext());
            yield "
    ";
        }
        // line 74
        yield "
    ";
        // line 115
        yield "
    ";
        // line 252
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 75
    public function macro_render_transport_details($__collector__ = null, $__transport__ = null, $__show_transport_name__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "collector" => $__collector__,
            "transport" => $__transport__,
            "show_transport_name" => $__show_transport_name__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_transport_details"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_transport_details"));

            // line 76
            yield "        <div class=\"card\">
            ";
            // line 77
            $context["num_emails"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 77, $this->source); })()), "events", [], "any", false, false, false, 77), "events", [(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 77, $this->source); })())], "method", false, false, false, 77));
            // line 78
            yield "            ";
            if (((isset($context["num_emails"]) || array_key_exists("num_emails", $context) ? $context["num_emails"] : (function () { throw new RuntimeError('Variable "num_emails" does not exist.', 78, $this->source); })()) > 1)) {
                // line 79
                yield "                <div class=\"mailer-email-summary-table-wrapper\">
                    <table class=\"mailer-email-summary-table\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject</th>
                                <th>To</th>
                                <th class=\"visually-hidden\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 90, $this->source); })()), "events", [], "any", false, false, false, 90), "events", [(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 90, $this->source); })())], "method", false, false, false, 90));
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
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 91
                    yield "                                <tr class=\"mailer-email-summary-table-row ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 91)) ? ("active") : (""));
                    yield "\" data-target=\"#email-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 91), "html", null, true);
                    yield "\">
                                    <td>";
                    // line 92
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 92), "html", null, true);
                    yield "</td>
                                    <td>";
                    // line 93
                    (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 93), "getSubject", [], "method", true, true, false, 93) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 93), "getSubject", [], "method", false, false, false, 93)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 93), "getSubject", [], "method", false, false, false, 93), "html", null, true)) : (yield "(No subject)"));
                    yield "</td>
                                    <td>";
                    // line 94
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 94), "getTo", [], "method", false, false, false, 94), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["addr"]) || array_key_exists("addr", $context) ? $context["addr"] : (function () { throw new RuntimeError('Variable "addr" does not exist.', 94, $this->source); })()), "toString", [], "method", false, false, false, 94); }), ", "), "(empty)"), "html", null, true);
                    yield "</td>
                                    <td class=\"visually-hidden\"><button class=\"mailer-email-summary-table-row-button\" data-target=\"#email-";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 95), "html", null, true);
                    yield "\">View email details</button></td>
                                </tr>
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
                unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                yield "                        </tbody>
                    </table>
                </div>

                ";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 102, $this->source); })()), "events", [], "any", false, false, false, 102), "events", [(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 102, $this->source); })())], "method", false, false, false, 102));
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
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 103
                    yield "                    <div class=\"mailer-email-details ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 103)) ? ("active") : (""));
                    yield "\" id=\"email-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 103), "html", null, true);
                    yield "\">
                        ";
                    // line 104
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_email_details", [(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 104, $this->source); })()), (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 104, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 104), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "isQueued", [], "any", false, false, false, 104), (isset($context["show_transport_name"]) || array_key_exists("show_transport_name", $context) ? $context["show_transport_name"] : (function () { throw new RuntimeError('Variable "show_transport_name" does not exist.', 104, $this->source); })())], 104, $context, $this->getSourceContext());
                    yield "
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
                unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                yield "
                <script>Sfjs.initializeMailerTable();</script>
            ";
            } else {
                // line 110
                yield "                ";
                $context["event"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 110, $this->source); })()), "events", [], "any", false, false, false, 110), "events", [(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 110, $this->source); })())], "method", false, false, false, 110));
                // line 111
                yield "                ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_email_details", [(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 111, $this->source); })()), (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 111, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 111, $this->source); })()), "message", [], "any", false, false, false, 111), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 111, $this->source); })()), "isQueued", [], "any", false, false, false, 111), (isset($context["show_transport_name"]) || array_key_exists("show_transport_name", $context) ? $context["show_transport_name"] : (function () { throw new RuntimeError('Variable "show_transport_name" does not exist.', 111, $this->source); })())], 111, $context, $this->getSourceContext());
                yield "
            ";
            }
            // line 113
            yield "        </div>
    ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 116
    public function macro_render_email_details($__collector__ = null, $__transport__ = null, $__message__ = null, $__message_is_queued__ = null, $__show_transport_name__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "collector" => $__collector__,
            "transport" => $__transport__,
            "message" => $__message__,
            "message_is_queued" => $__message_is_queued__,
            "show_transport_name" => $__show_transport_name__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_email_details"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_email_details"));

            // line 117
            yield "        ";
            if ((isset($context["show_transport_name"]) || array_key_exists("show_transport_name", $context) ? $context["show_transport_name"] : (function () { throw new RuntimeError('Variable "show_transport_name" does not exist.', 117, $this->source); })())) {
                // line 118
                yield "            <p class=\"mailer-transport-information\">
                <strong>Status:</strong> <span class=\"badge badge-";
                // line 119
                yield (((isset($context["message_is_queued"]) || array_key_exists("message_is_queued", $context) ? $context["message_is_queued"] : (function () { throw new RuntimeError('Variable "message_is_queued" does not exist.', 119, $this->source); })())) ? ("warning") : ("success"));
                yield "\">";
                yield (((isset($context["message_is_queued"]) || array_key_exists("message_is_queued", $context) ? $context["message_is_queued"] : (function () { throw new RuntimeError('Variable "message_is_queued" does not exist.', 119, $this->source); })())) ? ("Queued") : ("Sent"));
                yield "</span>
                &bull;
                <strong>Transport:</strong> <code>";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 121, $this->source); })()), "html", null, true);
                yield "</code>
            </p>
        ";
            }
            // line 124
            yield "
        ";
            // line 125
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", true, true, false, 125)) {
                // line 126
                yield "            ";
                // line 127
                yield "            <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 127, $this->source); })()), "base64Encode", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 127, $this->source); })()), "toString", [], "method", false, false, false, 127)], "method", false, false, false, 127), "html", null, true);
                yield "\" download=\"email.eml\">
                ";
                // line 128
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/download.svg");
                yield "
                Download as EML file
            </a>

            <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 132, $this->source); })()), "toString", [], "method", false, false, false, 132), "html", null, true);
                yield "</pre>
        ";
            } else {
                // line 134
                yield "            <div class=\"sf-tabs\">
                <div class=\"tab\">
                    <h3 class=\"tab-title\">Email contents</h3>
                    <div class=\"tab-content\">
                        <div class=\"card-block\">
                            <p class=\"mailer-message-subject\">
                                ";
                // line 140
                (((CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", true, true, false, 140) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, false, 140)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, false, 140), "html", null, true)) : (yield "(No subject)"));
                yield "
                            </p>
                            <div class=\"mailer-message-headers\">
                                <p><strong>From:</strong> ";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 143, $this->source); })()), "getFrom", [], "method", false, false, false, 143), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["addr"]) || array_key_exists("addr", $context) ? $context["addr"] : (function () { throw new RuntimeError('Variable "addr" does not exist.', 143, $this->source); })()), "toString", [], "method", false, false, false, 143); }), ", "), "(empty)"), "html", null, true);
                yield "</p>
                                <p><strong>To:</strong> ";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 144, $this->source); })()), "getTo", [], "method", false, false, false, 144), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["addr"]) || array_key_exists("addr", $context) ? $context["addr"] : (function () { throw new RuntimeError('Variable "addr" does not exist.', 144, $this->source); })()), "toString", [], "method", false, false, false, 144); }), ", "), "(empty)"), "html", null, true);
                yield "</p>
                                ";
                // line 145
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 145, $this->source); })()), "headers", [], "any", false, false, false, 145), "all", [], "any", false, false, false, 145), function ($__header__) use ($context, $macros) { $context["header"] = $__header__; return !CoreExtension::inFilter(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", true, true, false, 145) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 145)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 145)) : (""))), ["subject", "from", "to"]); }));
                foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                    // line 146
                    yield "                                    <p class=\"mailer-message-header-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "toString", [], "any", false, false, false, 146), "html", null, true);
                    yield "</p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['header'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                yield "                            </div>
                        </div>

                        ";
                // line 151
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 151, $this->source); })()), "attachments", [], "any", false, false, false, 151)) {
                    // line 152
                    yield "                            <div class=\"card-block\">
                                ";
                    // line 153
                    $context["num_of_attachments"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 153, $this->source); })()), "attachments", [], "any", false, false, false, 153));
                    // line 154
                    yield "                                ";
                    $context["total_attachments_size_in_bytes"] = Twig\Extension\CoreExtension::reduce($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 154, $this->source); })()), "attachments", [], "any", false, false, false, 154), function ($__total_size__, $__attachment__) use ($context, $macros) { $context["total_size"] = $__total_size__; $context["attachment"] = $__attachment__; return ((isset($context["total_size"]) || array_key_exists("total_size", $context) ? $context["total_size"] : (function () { throw new RuntimeError('Variable "total_size" does not exist.', 154, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 154, $this->source); })()), "body", [], "any", false, false, false, 154))); });
                    // line 155
                    yield "                                <p class=\"mailer-message-attachments-title\">
                                    ";
                    // line 156
                    yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/attachment.svg");
                    yield "
                                    Attachments <span>(";
                    // line 157
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["num_of_attachments"]) || array_key_exists("num_of_attachments", $context) ? $context["num_of_attachments"] : (function () { throw new RuntimeError('Variable "num_of_attachments" does not exist.', 157, $this->source); })()), "html", null, true);
                    yield " file";
                    yield ((((isset($context["num_of_attachments"]) || array_key_exists("num_of_attachments", $context) ? $context["num_of_attachments"] : (function () { throw new RuntimeError('Variable "num_of_attachments" does not exist.', 157, $this->source); })()) > 1)) ? ("s") : (""));
                    yield " / ";
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_file_size_humanized", [(isset($context["total_attachments_size_in_bytes"]) || array_key_exists("total_attachments_size_in_bytes", $context) ? $context["total_attachments_size_in_bytes"] : (function () { throw new RuntimeError('Variable "total_attachments_size_in_bytes" does not exist.', 157, $this->source); })())], 157, $context, $this->getSourceContext());
                    yield ")</span>
                                </p>

                                <ul class=\"mailer-message-attachments-list\">
                                    ";
                    // line 161
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 161, $this->source); })()), "attachments", [], "any", false, false, false, 161));
                    foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                        // line 162
                        yield "                                        <li>
                                            ";
                        // line 163
                        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/file.svg");
                        yield "

                                            ";
                        // line 165
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 165)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 165))) : (""))) {
                            // line 166
                            yield "                                                ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 166), "html", null, true);
                            yield "
                                            ";
                        } else {
                            // line 168
                            yield "                                                <em>(no filename)</em>
                                            ";
                        }
                        // line 170
                        yield "
                                            (";
                        // line 171
                        yield CoreExtension::callMacro($macros["_self"], "macro_render_file_size_humanized", [Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "body", [], "any", false, false, false, 171))], 171, $context, $this->getSourceContext());
                        yield ")

                                            <a href=\"data:";
                        // line 173
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", true, true, false, 173)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", false, false, false, 173), "application/octet-stream")) : ("application/octet-stream")), "html", null, true);
                        yield ";base64,";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 173, $this->source); })()), "base64Encode", [CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "body", [], "any", false, false, false, 173)], "method", false, false, false, 173), "html", null, true);
                        yield "\" download=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 173)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 173), "attachment")) : ("attachment")), "html", null, true);
                        yield "\">Download</a>
                                        </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['attachment'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    yield "                                </ul>
                            </div>
                        ";
                }
                // line 179
                yield "
                        ";
                // line 180
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 180, $this->source); })()), "htmlBody", [], "any", false, false, false, 180) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 180, $this->source); })()), "textBody", [], "any", false, false, false, 180))) {
                    // line 181
                    yield "                            <div class=\"card-block\">
                                <div class=\"sf-tabs sf-tabs-sm\">
                                    ";
                    // line 183
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 183, $this->source); })()), "htmlBody", [], "any", false, false, false, 183)) {
                        // line 184
                        yield "                                        ";
                        $context["htmlBody"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 184, $this->source); })()), "htmlBody", [], "method", false, false, false, 184);
                        // line 185
                        yield "                                        <div class=\"tab\">
                                            <h3 class=\"tab-title\">HTML preview</h3>
                                            <div class=\"tab-content\">
                                                <iframe
                                                    src=\"data:text/html;charset=utf-8;base64,";
                        // line 189
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 189, $this->source); })()), "base64Encode", [(isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 189, $this->source); })())], "method", false, false, false, 189), "html", null, true);
                        yield "\"
                                                    style=\"height: 80vh;width: 100%;max-height: 600px;\"
                                                >
                                                </iframe>
                                            </div>
                                        </div>

                                        <div class=\"tab\">
                                            <h3 class=\"tab-title\">HTML content</h3>
                                            <div class=\"tab-content\">
                                                <pre class=\"prewrap\" style=\"max-height: 600px\">";
                        // line 200
                        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 200, $this->source); })()), "htmlCharset", [], "method", false, false, false, 200)) {
                            // line 201
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::convertEncoding((isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 201, $this->source); })()), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 201, $this->source); })()), "htmlCharset", [], "method", false, false, false, 201)), "html", null, true);
                        } else {
                            // line 203
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 203, $this->source); })()), "html", null, true);
                        }
                        // line 205
                        yield "</pre>
                                            </div>
                                        </div>
                                    ";
                    }
                    // line 209
                    yield "
                                    ";
                    // line 210
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 210, $this->source); })()), "textBody", [], "any", false, false, false, 210)) {
                        // line 211
                        yield "                                        ";
                        $context["textBody"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 211, $this->source); })()), "textBody", [], "method", false, false, false, 211);
                        // line 212
                        yield "                                        <div class=\"tab\">
                                            <h3 class=\"tab-title\">Text content</h3>
                                            <div class=\"tab-content\">
                                                <pre class=\"prewrap\" style=\"max-height: 600px\">";
                        // line 216
                        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 216, $this->source); })()), "textCharset", [], "method", false, false, false, 216)) {
                            // line 217
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::convertEncoding((isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 217, $this->source); })()), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 217, $this->source); })()), "textCharset", [], "method", false, false, false, 217)), "html", null, true);
                        } else {
                            // line 219
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 219, $this->source); })()), "html", null, true);
                        }
                        // line 221
                        yield "</pre>
                                            </div>
                                        </div>
                                    ";
                    }
                    // line 225
                    yield "                                </div>
                            </div>
                        ";
                }
                // line 228
                yield "                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">MIME parts</h3>
                    <div class=\"tab-content\">
                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 234
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 234, $this->source); })()), "body", [], "method", false, false, false, 234), "asDebugString", [], "method", false, false, false, 234), "html", null, true);
                yield "</pre>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">Raw Message</h3>
                    <div class=\"tab-content\">
                        <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                // line 241
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 241, $this->source); })()), "base64Encode", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 241, $this->source); })()), "toString", [], "method", false, false, false, 241)], "method", false, false, false, 241), "html", null, true);
                yield "\" download=\"email.eml\">
                            ";
                // line 242
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/download.svg");
                yield "
                            Download as EML file
                        </a>

                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 246
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 246, $this->source); })()), "toString", [], "method", false, false, false, 246), "html", null, true);
                yield "</pre>
                    </div>
                </div>
            </div>
        ";
            }
            // line 251
            yield "    ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 253
    public function macro_render_file_size_humanized($__bytes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_file_size_humanized"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_file_size_humanized"));

            // line 254
            if (((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 254, $this->source); })()) < 1000)) {
                // line 255
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 255, $this->source); })()) . " bytes"), "html", null, true);
            } elseif ((            // line 256
(isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 256, $this->source); })()) < (1000 ** 2))) {
                // line 257
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 257, $this->source); })()) / 1000), 2) . " kB"), "html", null, true);
            } else {
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 259, $this->source); })()) / (1000 ** 2)), 2) . " MB"), "html", null, true);
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/mailer.html.twig";
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
        return array (  799 => 259,  796 => 257,  794 => 256,  792 => 255,  790 => 254,  772 => 253,  760 => 251,  752 => 246,  745 => 242,  741 => 241,  731 => 234,  723 => 228,  718 => 225,  712 => 221,  709 => 219,  706 => 217,  704 => 216,  699 => 212,  696 => 211,  694 => 210,  691 => 209,  685 => 205,  682 => 203,  679 => 201,  677 => 200,  664 => 189,  658 => 185,  655 => 184,  653 => 183,  649 => 181,  647 => 180,  644 => 179,  639 => 176,  626 => 173,  621 => 171,  618 => 170,  614 => 168,  608 => 166,  606 => 165,  601 => 163,  598 => 162,  594 => 161,  583 => 157,  579 => 156,  576 => 155,  573 => 154,  571 => 153,  568 => 152,  566 => 151,  561 => 148,  552 => 146,  548 => 145,  544 => 144,  540 => 143,  534 => 140,  526 => 134,  521 => 132,  514 => 128,  509 => 127,  507 => 126,  505 => 125,  502 => 124,  496 => 121,  489 => 119,  486 => 118,  483 => 117,  461 => 116,  448 => 113,  442 => 111,  439 => 110,  434 => 107,  417 => 104,  410 => 103,  393 => 102,  387 => 98,  370 => 95,  366 => 94,  362 => 93,  358 => 92,  351 => 91,  334 => 90,  321 => 79,  318 => 78,  316 => 77,  313 => 76,  293 => 75,  281 => 252,  278 => 115,  275 => 74,  269 => 72,  266 => 71,  258 => 69,  253 => 68,  248 => 67,  246 => 66,  243 => 65,  234 => 59,  226 => 54,  221 => 51,  215 => 47,  213 => 46,  209 => 44,  206 => 43,  193 => 42,  181 => 39,  175 => 36,  172 => 35,  170 => 34,  164 => 31,  160 => 30,  157 => 29,  154 => 28,  141 => 27,  127 => 23,  124 => 22,  117 => 19,  110 => 15,  106 => 13,  104 => 12,  101 => 11,  95 => 9,  90 => 8,  87 => 7,  85 => 6,  82 => 5,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set events = collector.events %}

    {% if events.messages|length %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/mailer.svg') }}
            <span class=\"sf-toolbar-value\">{{ events.messages|length }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Queued messages</b>
                <span class=\"sf-toolbar-status\">{{ events.events|filter(e => e.isQueued())|length }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">{{ events.events|filter(e => not e.isQueued())|length }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': profiler_url }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    {% set events = collector.events %}

    <span class=\"label {{ events.messages is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/mailer.svg') }}</span>

        <strong>E-mails</strong>
        {% if events.messages|length > 0 %}
            <span class=\"count\">
                <span>{{ events.messages|length }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% set events = collector.events %}
    <h2>Emails</h2>

    {% if not events.messages|length %}
        <div class=\"empty empty-panel\">
            <p>No emails were sent.</p>
        </div>
    {% else %}
        <div class=\"metrics\">
            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">{{ events.events|filter(e => e.isQueued())|length }}</span>
                    <span class=\"label\">Queued</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ events.events|filter(e => not e.isQueued())|length }}</span>
                    <span class=\"label\">Sent</span>
                </div>
            </div>
        </div>
    {% endif %}

    {% if events.transports|length > 1 %}
        {% for transport in events.transports %}
            <h2><code>{{ transport }}</code> transport</h2>
            {{ _self.render_transport_details(collector, transport) }}
        {% endfor %}
    {% elseif events.transports is not empty %}
        {{ _self.render_transport_details(collector, events.transports|first, true) }}
    {% endif %}

    {% macro render_transport_details(collector, transport, show_transport_name = false) %}
        <div class=\"card\">
            {% set num_emails = collector.events.events(transport)|length %}
            {% if num_emails > 1 %}
                <div class=\"mailer-email-summary-table-wrapper\">
                    <table class=\"mailer-email-summary-table\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject</th>
                                <th>To</th>
                                <th class=\"visually-hidden\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for event in collector.events.events(transport) %}
                                <tr class=\"mailer-email-summary-table-row {{ loop.first ? 'active' }}\" data-target=\"#email-{{ loop.index }}\">
                                    <td>{{ loop.index }}</td>
                                    <td>{{ event.message.getSubject() ?? '(No subject)' }}</td>
                                    <td>{{ event.message.getTo()|map(addr => addr.toString())|join(', ')|default('(empty)') }}</td>
                                    <td class=\"visually-hidden\"><button class=\"mailer-email-summary-table-row-button\" data-target=\"#email-{{ loop.index }}\">View email details</button></td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>

                {% for event in collector.events.events(transport) %}
                    <div class=\"mailer-email-details {{ loop.first ? 'active' }}\" id=\"email-{{ loop.index }}\">
                        {{ _self.render_email_details(collector, transport, event.message, event.isQueued, show_transport_name) }}
                    </div>
                {% endfor %}

                <script>Sfjs.initializeMailerTable();</script>
            {% else %}
                {% set event = (collector.events.events(transport)|first) %}
                {{ _self.render_email_details(collector, transport, event.message, event.isQueued, show_transport_name) }}
            {% endif %}
        </div>
    {% endmacro %}

    {% macro render_email_details(collector, transport, message, message_is_queued, show_transport_name = false) %}
        {% if show_transport_name %}
            <p class=\"mailer-transport-information\">
                <strong>Status:</strong> <span class=\"badge badge-{{ message_is_queued ? 'warning' : 'success' }}\">{{ message_is_queued ? 'Queued' : 'Sent' }}</span>
                &bull;
                <strong>Transport:</strong> <code>{{ transport }}</code>
            </p>
        {% endif %}

        {% if message.headers is not defined %}
            {# render the raw message contents #}
            <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,{{ collector.base64Encode(message.toString()) }}\" download=\"email.eml\">
                {{ source('@WebProfiler/Icon/download.svg') }}
                Download as EML file
            </a>

            <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">{{ message.toString() }}</pre>
        {% else %}
            <div class=\"sf-tabs\">
                <div class=\"tab\">
                    <h3 class=\"tab-title\">Email contents</h3>
                    <div class=\"tab-content\">
                        <div class=\"card-block\">
                            <p class=\"mailer-message-subject\">
                                {{ message.getSubject() ?? '(No subject)' }}
                            </p>
                            <div class=\"mailer-message-headers\">
                                <p><strong>From:</strong> {{ message.getFrom()|map(addr => addr.toString())|join(', ')|default('(empty)') }}</p>
                                <p><strong>To:</strong> {{ message.getTo()|map(addr => addr.toString())|join(', ')|default('(empty)') }}</p>
                                {% for header in message.headers.all|filter(header => (header.name ?? '')|lower not in ['subject', 'from', 'to']) %}
                                    <p class=\"mailer-message-header-secondary\">{{ header.toString }}</p>
                                {% endfor %}
                            </div>
                        </div>

                        {% if message.attachments %}
                            <div class=\"card-block\">
                                {% set num_of_attachments = message.attachments|length %}
                                {% set total_attachments_size_in_bytes = message.attachments|reduce((total_size, attachment) => total_size + attachment.body|length) %}
                                <p class=\"mailer-message-attachments-title\">
                                    {{ source('@WebProfiler/Icon/attachment.svg') }}
                                    Attachments <span>({{ num_of_attachments }} file{{ num_of_attachments > 1 ? 's' }} / {{ _self.render_file_size_humanized(total_attachments_size_in_bytes) }})</span>
                                </p>

                                <ul class=\"mailer-message-attachments-list\">
                                    {% for attachment in message.attachments %}
                                        <li>
                                            {{ source('@WebProfiler/Icon/file.svg') }}

                                            {% if attachment.filename|default %}
                                                {{ attachment.filename }}
                                            {% else %}
                                                <em>(no filename)</em>
                                            {% endif %}

                                            ({{ _self.render_file_size_humanized(attachment.body|length) }})

                                            <a href=\"data:{{ attachment.contentType|default('application/octet-stream') }};base64,{{ collector.base64Encode(attachment.body) }}\" download=\"{{ attachment.filename|default('attachment') }}\">Download</a>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        {% endif %}

                        {% if message.htmlBody or message.textBody %}
                            <div class=\"card-block\">
                                <div class=\"sf-tabs sf-tabs-sm\">
                                    {% if message.htmlBody %}
                                        {% set htmlBody = message.htmlBody() %}
                                        <div class=\"tab\">
                                            <h3 class=\"tab-title\">HTML preview</h3>
                                            <div class=\"tab-content\">
                                                <iframe
                                                    src=\"data:text/html;charset=utf-8;base64,{{ collector.base64Encode(htmlBody) }}\"
                                                    style=\"height: 80vh;width: 100%;max-height: 600px;\"
                                                >
                                                </iframe>
                                            </div>
                                        </div>

                                        <div class=\"tab\">
                                            <h3 class=\"tab-title\">HTML content</h3>
                                            <div class=\"tab-content\">
                                                <pre class=\"prewrap\" style=\"max-height: 600px\">
                                                    {%- if message.htmlCharset() %}
                                                        {{- htmlBody|convert_encoding('UTF-8', message.htmlCharset()) }}
                                                    {%- else %}
                                                        {{- htmlBody }}
                                                    {%- endif -%}
                                                </pre>
                                            </div>
                                        </div>
                                    {% endif %}

                                    {% if message.textBody %}
                                        {% set textBody = message.textBody() %}
                                        <div class=\"tab\">
                                            <h3 class=\"tab-title\">Text content</h3>
                                            <div class=\"tab-content\">
                                                <pre class=\"prewrap\" style=\"max-height: 600px\">
                                                    {%- if message.textCharset() %}
                                                        {{- textBody|convert_encoding('UTF-8', message.textCharset()) }}
                                                    {%- else %}
                                                        {{- textBody }}
                                                    {%- endif -%}
                                                </pre>
                                            </div>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        {% endif %}
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">MIME parts</h3>
                    <div class=\"tab-content\">
                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">{{ message.body().asDebugString() }}</pre>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">Raw Message</h3>
                    <div class=\"tab-content\">
                        <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,{{ collector.base64Encode(message.toString()) }}\" download=\"email.eml\">
                            {{ source('@WebProfiler/Icon/download.svg') }}
                            Download as EML file
                        </a>

                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">{{ message.toString() }}</pre>
                    </div>
                </div>
            </div>
        {% endif %}
    {% endmacro %}

    {% macro render_file_size_humanized(bytes) %}
        {%- if bytes < 1000 -%}
            {{- bytes ~ ' bytes' -}}
        {%- elseif bytes < 1000 ** 2 -%}
            {{- (bytes / 1000)|number_format(2) ~ ' kB' -}}
        {%- else -%}
            {{- (bytes / 1000 ** 2)|number_format(2) ~ ' MB' -}}
        {%- endif -%}
    {% endmacro %}
{% endblock %}
", "@WebProfiler/Collector/mailer.html.twig", "/home/ramand/Bureau/greenVillage20112024/vendor/symfony/web-profiler-bundle/Resources/views/Collector/mailer.html.twig");
    }
}
