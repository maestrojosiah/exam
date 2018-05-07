<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a4f60f692f449f4e4f63c020daca0b03dbad51c4dda5adadf64f0597e9f276a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a4f60f692f449f4e4f63c020daca0b03dbad51c4dda5adadf64f0597e9f276a->enter($__internal_8a4f60f692f449f4e4f63c020daca0b03dbad51c4dda5adadf64f0597e9f276a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dfbf151953cb1b31f962110d1e1900135878b0c81dc3378c9818fbfef44075c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfbf151953cb1b31f962110d1e1900135878b0c81dc3378c9818fbfef44075c7->enter($__internal_dfbf151953cb1b31f962110d1e1900135878b0c81dc3378c9818fbfef44075c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a4f60f692f449f4e4f63c020daca0b03dbad51c4dda5adadf64f0597e9f276a->leave($__internal_8a4f60f692f449f4e4f63c020daca0b03dbad51c4dda5adadf64f0597e9f276a_prof);

        
        $__internal_dfbf151953cb1b31f962110d1e1900135878b0c81dc3378c9818fbfef44075c7->leave($__internal_dfbf151953cb1b31f962110d1e1900135878b0c81dc3378c9818fbfef44075c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_462acf3a4cf384ac22448de0a51ae0e8675388ca36dd78cbf22815fcde50a289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462acf3a4cf384ac22448de0a51ae0e8675388ca36dd78cbf22815fcde50a289->enter($__internal_462acf3a4cf384ac22448de0a51ae0e8675388ca36dd78cbf22815fcde50a289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_492d72abb4490ce571ea7bb6a7975642d6e852118b04358f015a83287560c792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492d72abb4490ce571ea7bb6a7975642d6e852118b04358f015a83287560c792->enter($__internal_492d72abb4490ce571ea7bb6a7975642d6e852118b04358f015a83287560c792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_492d72abb4490ce571ea7bb6a7975642d6e852118b04358f015a83287560c792->leave($__internal_492d72abb4490ce571ea7bb6a7975642d6e852118b04358f015a83287560c792_prof);

        
        $__internal_462acf3a4cf384ac22448de0a51ae0e8675388ca36dd78cbf22815fcde50a289->leave($__internal_462acf3a4cf384ac22448de0a51ae0e8675388ca36dd78cbf22815fcde50a289_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ca697e46945d0a2eb8835fd8793655a31f965b19b2568abab731eb6ba84409f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca697e46945d0a2eb8835fd8793655a31f965b19b2568abab731eb6ba84409f->enter($__internal_6ca697e46945d0a2eb8835fd8793655a31f965b19b2568abab731eb6ba84409f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_85ba1c8f21c3e9bf5c756e090c1aa819f846a91469915cc6aa718088a3e40cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ba1c8f21c3e9bf5c756e090c1aa819f846a91469915cc6aa718088a3e40cd5->enter($__internal_85ba1c8f21c3e9bf5c756e090c1aa819f846a91469915cc6aa718088a3e40cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_85ba1c8f21c3e9bf5c756e090c1aa819f846a91469915cc6aa718088a3e40cd5->leave($__internal_85ba1c8f21c3e9bf5c756e090c1aa819f846a91469915cc6aa718088a3e40cd5_prof);

        
        $__internal_6ca697e46945d0a2eb8835fd8793655a31f965b19b2568abab731eb6ba84409f->leave($__internal_6ca697e46945d0a2eb8835fd8793655a31f965b19b2568abab731eb6ba84409f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0c963e23942a8b6be89f61085543de5751cc70579d3e1bc3ddf75c87aa6ad95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c963e23942a8b6be89f61085543de5751cc70579d3e1bc3ddf75c87aa6ad95->enter($__internal_b0c963e23942a8b6be89f61085543de5751cc70579d3e1bc3ddf75c87aa6ad95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9bc8d6cac1a7d147de04a2905ef9ed830bde9cd9851d144b199f26a8362d61bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc8d6cac1a7d147de04a2905ef9ed830bde9cd9851d144b199f26a8362d61bf->enter($__internal_9bc8d6cac1a7d147de04a2905ef9ed830bde9cd9851d144b199f26a8362d61bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9bc8d6cac1a7d147de04a2905ef9ed830bde9cd9851d144b199f26a8362d61bf->leave($__internal_9bc8d6cac1a7d147de04a2905ef9ed830bde9cd9851d144b199f26a8362d61bf_prof);

        
        $__internal_b0c963e23942a8b6be89f61085543de5751cc70579d3e1bc3ddf75c87aa6ad95->leave($__internal_b0c963e23942a8b6be89f61085543de5751cc70579d3e1bc3ddf75c87aa6ad95_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/maestrojosiah/projects/exam/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
