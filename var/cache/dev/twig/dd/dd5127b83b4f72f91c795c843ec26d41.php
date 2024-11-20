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

/* @WebProfiler/Collector/messenger.html.twig */
class __TwigTemplate_186a59a80265a637314abcf2d1d1d8fe extends Template
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
            'head' => [$this, 'block_head'],
            'panel' => [$this, 'block_panel'],
        ];
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/messenger.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        // line 6
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "messages", [], "any", false, false, false, 6)) > 0)) {
            // line 7
            yield "        ";
            $context["status_color"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 7)) ? ("red") : (""));
            // line 8
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 9
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/messenger.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "messages", [], "any", false, false, false, 10)), "html", null, true);
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            yield "
        ";
            // line 13
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 14
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "buses", [], "any", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                    // line 15
                    yield "                ";
                    $context["exceptionsCount"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "exceptionsCount", [$context["bus"]], "method", false, false, false, 15);
                    // line 16
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                    // line 17
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bus"], "html", null, true);
                    yield "</b>
                    <span
                        title=\"";
                    // line 19
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 19, $this->source); })()), "html", null, true);
                    yield " message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-";
                    // line 20
                    yield (((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 20, $this->source); })())) ? ("red") : (""));
                    yield "\"
                    >
                        ";
                    // line 22
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 22, $this->source); })()), "messages", [$context["bus"]], "method", false, false, false, 22)), "html", null, true);
                    yield "
                    </span>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['bus'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 27
            yield "
        ";
            // line 28
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => "messenger", "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 28, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 32
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

        // line 33
        yield "    <span class=\"label";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 33)) ? (" label-status-error") : (""));
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "messages", [], "any", false, false, false, 33))) ? (" disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 34
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/messenger.svg");
        yield "</span>
        <strong>Messages</strong>
        ";
        // line 36
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 36, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 36) > 0)) {
            // line 37
            yield "            <span class=\"count\">
                <span>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 38), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 41
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 45
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <style>
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 170px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none }
        .message-item .icon svg { height: 24px; width: 24px; }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
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

        // line 64
        yield "    ";
        $macros["helper"] = $this;
        // line 65
        yield "
    <h2>Messages</h2>

    ";
        // line 68
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "messages", [], "any", false, false, false, 68))) {
            // line 69
            yield "        <div class=\"empty empty-panel\">
            <p>No messages have been collected.</p>
        </div>
    ";
        } elseif ((1 == Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 72
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 72, $this->source); })()), "buses", [], "any", false, false, false, 72)))) {
            // line 73
            yield "        <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
        ";
            // line 74
            yield CoreExtension::callMacro($macros["helper"], "macro_render_bus_messages", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "messages", [], "any", false, false, false, 74), true], 74, $context, $this->getSourceContext());
            yield "
    ";
        } else {
            // line 76
            yield "        <div class=\"sf-tabs message-bus\">
            <div class=\"tab\">
                ";
            // line 78
            $context["messages"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 78, $this->source); })()), "messages", [], "any", false, false, false, 78);
            // line 79
            yield "                ";
            $context["exceptionsCount"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 79, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 79);
            // line 80
            yield "                <h3 class=\"tab-title\">All<span class=\"badge ";
            yield (((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 80, $this->source); })())) ? (((((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 80, $this->source); })()) == Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 80, $this->source); })())))) ? ("status-error") : ("status-some-errors"))) : (""));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 80, $this->source); })())), "html", null, true);
            yield "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                    ";
            // line 84
            yield CoreExtension::callMacro($macros["helper"], "macro_render_bus_messages", [(isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 84, $this->source); })()), true], 84, $context, $this->getSourceContext());
            yield "
                </div>
            </div>

            ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 88, $this->source); })()), "buses", [], "any", false, false, false, 88));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 89
                yield "                <div class=\"tab message-bus\">
                    ";
                // line 90
                $context["messages"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 90, $this->source); })()), "messages", [$context["bus"]], "method", false, false, false, 90);
                // line 91
                yield "                    ";
                $context["exceptionsCount"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 91, $this->source); })()), "exceptionsCount", [$context["bus"]], "method", false, false, false, 91);
                // line 92
                yield "                    <h3 class=\"tab-title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bus"], "html", null, true);
                yield "<span class=\"badge ";
                yield (((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 92, $this->source); })())) ? (((((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 92, $this->source); })()) == Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 92, $this->source); })())))) ? ("status-error") : ("status-some-errors"))) : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 92, $this->source); })())), "html", null, true);
                yield "</span></h3>

                    <div class=\"tab-content\">
                        <p class=\"text-muted\">Ordered list of messages dispatched on the <code>";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bus"], "html", null, true);
                yield "</code> bus</p>
                        ";
                // line 96
                yield CoreExtension::callMacro($macros["helper"], "macro_render_bus_messages", [(isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 96, $this->source); })())], 96, $context, $this->getSourceContext());
                yield "
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['bus'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield "        </div>
    ";
        }
        // line 102
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 105
    public function macro_render_bus_messages($__messages__ = null, $__showBus__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "messages" => $__messages__,
            "showBus" => $__showBus__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_bus_messages"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_bus_messages"));

            // line 106
            yield "    ";
            $context["discr"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 107
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 107, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["dispatchCall"]) {
                // line 108
                yield "    <table class=\"message-item\">
        <thead>
            <tr>
                <th colspan=\"2\" class=\"sf-toggle\"
                    data-toggle-selector=\"#message-item-";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new RuntimeError('Variable "discr" does not exist.', 112, $this->source); })()), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 112), "html", null, true);
                yield "-details\"
                    data-toggle-initial=\"";
                // line 113
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 113)) ? ("display") : (""));
                yield "\"
                >
                    <span class=\"dump-inline\">";
                // line 115
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "message", [], "any", false, false, false, 115), "type", [], "any", false, false, false, 115));
                yield "</span>
                    ";
                // line 116
                if (CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true, false, 116)) {
                    // line 117
                    yield "                        <span class=\"label status-error\">exception</span>
                    ";
                }
                // line 119
                yield "                    <a class=\"toggle-button\">
                        <span class=\"icon icon-close\">";
                // line 120
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/images/icon-minus-square.svg");
                yield "</span>
                        <span class=\"icon icon-open\">";
                // line 121
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/images/icon-plus-square.svg");
                yield "</span>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody id=\"message-item-";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new RuntimeError('Variable "discr" does not exist.', 126, $this->source); })()), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 126), "html", null, true);
                yield "-details\" class=\"sf-toggle-content\">
            <tr>
                <th scope=\"row\" class=\"font-normal\">Caller</th>
                <td class=\"message-bus-dispatch-caller\">
                    In
                    ";
                // line 131
                $context["caller"] = CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "caller", [], "any", false, false, false, 131);
                // line 132
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 132, $this->source); })()), "line", [], "any", false, false, false, 132)) {
                    // line 133
                    yield "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 133, $this->source); })()), "file", [], "any", false, false, false, 133), CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 133, $this->source); })()), "line", [], "any", false, false, false, 133));
                    // line 134
                    yield "                        ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 134, $this->source); })())) {
                        // line 135
                        yield "                            <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 135, $this->source); })()), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 135, $this->source); })()), "file", [], "any", false, false, false, 135), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 135, $this->source); })()), "name", [], "any", false, false, false, 135), "html", null, true);
                        yield "</a>
                        ";
                    } else {
                        // line 137
                        yield "                            <abbr title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 137, $this->source); })()), "file", [], "any", false, false, false, 137), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 137, $this->source); })()), "name", [], "any", false, false, false, 137), "html", null, true);
                        yield "</abbr>
                        ";
                    }
                    // line 139
                    yield "                    ";
                } else {
                    // line 140
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 140, $this->source); })()), "name", [], "any", false, false, false, 140), "html", null, true);
                    yield "
                    ";
                }
                // line 142
                yield "                    line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new RuntimeError('Variable "discr" does not exist.', 142, $this->source); })()), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 142), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 142, $this->source); })()), "line", [], "any", false, false, false, 142), "html", null, true);
                yield "</a>

                    <div class=\"hidden\" id=\"sf-trace-";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new RuntimeError('Variable "discr" does not exist.', 144, $this->source); })()), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 144), "html", null, true);
                yield "\">
                        <div class=\"trace\">
                            ";
                // line 146
                yield Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 146, $this->source); })()), "file", [], "any", false, false, false, 146), CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 146, $this->source); })()), "line", [], "any", false, false, false, 146)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                // line 151
                yield "
                        </div>
                    </div>
                </td>
            </tr>
            ";
                // line 156
                if ((isset($context["showBus"]) || array_key_exists("showBus", $context) ? $context["showBus"] : (function () { throw new RuntimeError('Variable "showBus" does not exist.', 156, $this->source); })())) {
                    // line 157
                    yield "                <tr>
                    <th scope=\"row\" class=\"font-normal\">Bus</th>
                    <td>";
                    // line 159
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "bus", [], "any", false, false, false, 159), "html", null, true);
                    yield "</td>
                </tr>
            ";
                }
                // line 162
                yield "            <tr>
                <th scope=\"row\" class=\"font-normal\">Message</th>
                <td>";
                // line 164
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "message", [], "any", false, false, false, 164), "value", [], "any", false, false, false, 164), 2);
                yield "</td>
            </tr>
            <tr>
                <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">when dispatching</span></th>
                <td>
                    ";
                // line 169
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "stamps", [], "any", false, false, false, 169));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 170
                    yield "                        ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                    yield "
                    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 172
                    yield "                        <span class=\"text-muted font-normal\">No items</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 174
                yield "                </td>
            </tr>
            ";
                // line 176
                if (CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "stamps_after_dispatch", [], "any", true, true, false, 176)) {
                    // line 177
                    yield "                <tr>
                    <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">after dispatch</span></th>
                    <td>
                        ";
                    // line 180
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "stamps_after_dispatch", [], "any", false, false, false, 180));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 181
                        yield "                            ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                        yield "
                        ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 183
                        yield "                            <span class=\"text-muted\">No items</span>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 185
                    yield "                    </td>
                </tr>
            ";
                }
                // line 188
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true, false, 188)) {
                    // line 189
                    yield "                <tr>
                    <td class=\"text-bold\">Exception</td>
                    <td>
                        ";
                    // line 192
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", false, false, false, 192), "value", [], "any", false, false, false, 192), 1);
                    yield "
                    </td>
                </tr>
            ";
                }
                // line 196
                yield "        </tbody>
    </table>
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
            unset($context['_seq'], $context['_key'], $context['dispatchCall'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
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
        return "@WebProfiler/Collector/messenger.html.twig";
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
        return array (  620 => 196,  613 => 192,  608 => 189,  605 => 188,  600 => 185,  593 => 183,  585 => 181,  580 => 180,  575 => 177,  573 => 176,  569 => 174,  562 => 172,  554 => 170,  549 => 169,  541 => 164,  537 => 162,  531 => 159,  527 => 157,  525 => 156,  518 => 151,  516 => 146,  509 => 144,  499 => 142,  493 => 140,  490 => 139,  482 => 137,  472 => 135,  469 => 134,  466 => 133,  463 => 132,  461 => 131,  451 => 126,  443 => 121,  439 => 120,  436 => 119,  432 => 117,  430 => 116,  426 => 115,  421 => 113,  415 => 112,  409 => 108,  391 => 107,  388 => 106,  369 => 105,  357 => 102,  353 => 100,  343 => 96,  339 => 95,  328 => 92,  325 => 91,  323 => 90,  320 => 89,  316 => 88,  309 => 84,  299 => 80,  296 => 79,  294 => 78,  290 => 76,  285 => 74,  282 => 73,  280 => 72,  275 => 69,  273 => 68,  268 => 65,  265 => 64,  252 => 63,  223 => 45,  210 => 44,  198 => 41,  192 => 38,  189 => 37,  187 => 36,  182 => 34,  176 => 33,  163 => 32,  149 => 28,  146 => 27,  142 => 26,  132 => 22,  127 => 20,  123 => 19,  118 => 17,  115 => 16,  112 => 15,  107 => 14,  105 => 13,  102 => 12,  96 => 10,  91 => 9,  88 => 8,  85 => 7,  82 => 6,  69 => 5,  58 => 1,  56 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.messages|length > 0 %}
        {% set status_color = collector.exceptionsCount ? 'red' %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/messenger.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.messages|length }}</span>
        {% endset %}

        {% set text %}
            {% for bus in collector.buses %}
                {% set exceptionsCount = collector.exceptionsCount(bus) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ bus }}</b>
                    <span
                        title=\"{{ exceptionsCount }} message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-{{ exceptionsCount ? 'red' }}\"
                    >
                        {{ collector.messages(bus)|length }}
                    </span>
                </div>
            {% endfor %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: 'messenger', status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label{{ collector.exceptionsCount ? ' label-status-error' }}{{ collector.messages is empty ? ' disabled' }}\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/messenger.svg') }}</span>
        <strong>Messages</strong>
        {% if collector.exceptionsCount > 0 %}
            <span class=\"count\">
                <span>{{ collector.exceptionsCount }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block head %}
    {{ parent() }}
    <style>
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 170px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none }
        .message-item .icon svg { height: 24px; width: 24px; }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }
    </style>
{% endblock %}

{% block panel %}
    {% import _self as helper %}

    <h2>Messages</h2>

    {% if collector.messages is empty %}
        <div class=\"empty empty-panel\">
            <p>No messages have been collected.</p>
        </div>
    {% elseif 1 == collector.buses|length %}
        <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
        {{ helper.render_bus_messages(collector.messages, true) }}
    {% else %}
        <div class=\"sf-tabs message-bus\">
            <div class=\"tab\">
                {% set messages = collector.messages %}
                {% set exceptionsCount = collector.exceptionsCount %}
                <h3 class=\"tab-title\">All<span class=\"badge {{ exceptionsCount ? exceptionsCount == messages|length ? 'status-error' : 'status-some-errors' }}\">{{ messages|length }}</span></h3>

                <div class=\"tab-content\">
                    <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                    {{ helper.render_bus_messages(messages, true) }}
                </div>
            </div>

            {% for bus in collector.buses %}
                <div class=\"tab message-bus\">
                    {% set messages = collector.messages(bus) %}
                    {% set exceptionsCount = collector.exceptionsCount(bus) %}
                    <h3 class=\"tab-title\">{{ bus }}<span class=\"badge {{ exceptionsCount ? exceptionsCount == messages|length ? 'status-error' : 'status-some-errors' }}\">{{ messages|length }}</span></h3>

                    <div class=\"tab-content\">
                        <p class=\"text-muted\">Ordered list of messages dispatched on the <code>{{ bus }}</code> bus</p>
                        {{ helper.render_bus_messages(messages) }}
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

{% endblock %}

{% macro render_bus_messages(messages, showBus = false) %}
    {% set discr = random() %}
    {% for dispatchCall in messages %}
    <table class=\"message-item\">
        <thead>
            <tr>
                <th colspan=\"2\" class=\"sf-toggle\"
                    data-toggle-selector=\"#message-item-{{ discr }}-{{ loop.index0 }}-details\"
                    data-toggle-initial=\"{{ loop.first ? 'display' }}\"
                >
                    <span class=\"dump-inline\">{{ profiler_dump(dispatchCall.message.type) }}</span>
                    {% if dispatchCall.exception is defined %}
                        <span class=\"label status-error\">exception</span>
                    {% endif %}
                    <a class=\"toggle-button\">
                        <span class=\"icon icon-close\">{{ source('@WebProfiler/images/icon-minus-square.svg') }}</span>
                        <span class=\"icon icon-open\">{{ source('@WebProfiler/images/icon-plus-square.svg') }}</span>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody id=\"message-item-{{ discr }}-{{ loop.index0 }}-details\" class=\"sf-toggle-content\">
            <tr>
                <th scope=\"row\" class=\"font-normal\">Caller</th>
                <td class=\"message-bus-dispatch-caller\">
                    In
                    {% set caller = dispatchCall.caller %}
                    {% if caller.line %}
                        {% set link = caller.file|file_link(caller.line) %}
                        {% if link %}
                            <a href=\"{{ link }}\" title=\"{{ caller.file }}\">{{ caller.name }}</a>
                        {% else %}
                            <abbr title=\"{{ caller.file }}\">{{ caller.name }}</abbr>
                        {% endif %}
                    {% else %}
                        {{ caller.name }}
                    {% endif %}
                    line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ discr }}-{{ loop.index0 }}\">{{ caller.line }}</a>

                    <div class=\"hidden\" id=\"sf-trace-{{ discr }}-{{ loop.index0 }}\">
                        <div class=\"trace\">
                            {{ caller.file|file_excerpt(caller.line)|replace({
                                '#DD0000': 'var(--highlight-string)',
                                '#007700': 'var(--highlight-keyword)',
                                '#0000BB': 'var(--highlight-default)',
                                '#FF8000': 'var(--highlight-comment)'
                            })|raw }}
                        </div>
                    </div>
                </td>
            </tr>
            {% if showBus %}
                <tr>
                    <th scope=\"row\" class=\"font-normal\">Bus</th>
                    <td>{{ dispatchCall.bus }}</td>
                </tr>
            {% endif %}
            <tr>
                <th scope=\"row\" class=\"font-normal\">Message</th>
                <td>{{ profiler_dump(dispatchCall.message.value, maxDepth=2) }}</td>
            </tr>
            <tr>
                <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">when dispatching</span></th>
                <td>
                    {% for item in dispatchCall.stamps %}
                        {{ profiler_dump(item) }}
                    {% else %}
                        <span class=\"text-muted font-normal\">No items</span>
                    {% endfor %}
                </td>
            </tr>
            {% if dispatchCall.stamps_after_dispatch is defined %}
                <tr>
                    <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">after dispatch</span></th>
                    <td>
                        {% for item in dispatchCall.stamps_after_dispatch %}
                            {{ profiler_dump(item) }}
                        {% else %}
                            <span class=\"text-muted\">No items</span>
                        {% endfor %}
                    </td>
                </tr>
            {% endif %}
            {% if dispatchCall.exception is defined %}
                <tr>
                    <td class=\"text-bold\">Exception</td>
                    <td>
                        {{ profiler_dump(dispatchCall.exception.value, maxDepth=1) }}
                    </td>
                </tr>
            {% endif %}
        </tbody>
    </table>
    {% endfor %}
{% endmacro %}
", "@WebProfiler/Collector/messenger.html.twig", "/home/ramand/Bureau/greenVillage20112024/vendor/symfony/web-profiler-bundle/Resources/views/Collector/messenger.html.twig");
    }
}
