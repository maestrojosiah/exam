<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_ebbca5b59a2bc725212e9fb711aadb7659cfb4fa32554605ac5bd69ff7320175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebbca5b59a2bc725212e9fb711aadb7659cfb4fa32554605ac5bd69ff7320175->enter($__internal_ebbca5b59a2bc725212e9fb711aadb7659cfb4fa32554605ac5bd69ff7320175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_82b136c7ce15068238d62a5ae977505929211acdd9cdc2c1097a8222964f4f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b136c7ce15068238d62a5ae977505929211acdd9cdc2c1097a8222964f4f6b->enter($__internal_82b136c7ce15068238d62a5ae977505929211acdd9cdc2c1097a8222964f4f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebbca5b59a2bc725212e9fb711aadb7659cfb4fa32554605ac5bd69ff7320175->leave($__internal_ebbca5b59a2bc725212e9fb711aadb7659cfb4fa32554605ac5bd69ff7320175_prof);

        
        $__internal_82b136c7ce15068238d62a5ae977505929211acdd9cdc2c1097a8222964f4f6b->leave($__internal_82b136c7ce15068238d62a5ae977505929211acdd9cdc2c1097a8222964f4f6b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_63b4b6b519614fdf1eea64745456dba6effd680bcce282cccdf8626897efafb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b4b6b519614fdf1eea64745456dba6effd680bcce282cccdf8626897efafb8->enter($__internal_63b4b6b519614fdf1eea64745456dba6effd680bcce282cccdf8626897efafb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d6eab44fd56e85bca46b1d943d40fbfc3a5c759a96026527efe7e1952d5af4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6eab44fd56e85bca46b1d943d40fbfc3a5c759a96026527efe7e1952d5af4c4->enter($__internal_d6eab44fd56e85bca46b1d943d40fbfc3a5c759a96026527efe7e1952d5af4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d6eab44fd56e85bca46b1d943d40fbfc3a5c759a96026527efe7e1952d5af4c4->leave($__internal_d6eab44fd56e85bca46b1d943d40fbfc3a5c759a96026527efe7e1952d5af4c4_prof);

        
        $__internal_63b4b6b519614fdf1eea64745456dba6effd680bcce282cccdf8626897efafb8->leave($__internal_63b4b6b519614fdf1eea64745456dba6effd680bcce282cccdf8626897efafb8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_873994d32a0a09de2afd869a14903843ea878b7b383c9c9324e2defc0127d6eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_873994d32a0a09de2afd869a14903843ea878b7b383c9c9324e2defc0127d6eb->enter($__internal_873994d32a0a09de2afd869a14903843ea878b7b383c9c9324e2defc0127d6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_005d37ec8745bac9d206c92575c52a3a9fe749bb8a8dd6bf24516b717c628e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005d37ec8745bac9d206c92575c52a3a9fe749bb8a8dd6bf24516b717c628e78->enter($__internal_005d37ec8745bac9d206c92575c52a3a9fe749bb8a8dd6bf24516b717c628e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_005d37ec8745bac9d206c92575c52a3a9fe749bb8a8dd6bf24516b717c628e78->leave($__internal_005d37ec8745bac9d206c92575c52a3a9fe749bb8a8dd6bf24516b717c628e78_prof);

        
        $__internal_873994d32a0a09de2afd869a14903843ea878b7b383c9c9324e2defc0127d6eb->leave($__internal_873994d32a0a09de2afd869a14903843ea878b7b383c9c9324e2defc0127d6eb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b93a409ab1b1f83c34e2185e96360f547bc8582fbb3a3cbd7658efb4ed223749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93a409ab1b1f83c34e2185e96360f547bc8582fbb3a3cbd7658efb4ed223749->enter($__internal_b93a409ab1b1f83c34e2185e96360f547bc8582fbb3a3cbd7658efb4ed223749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_46b31fca9eff53e9bc76a31d0bb3bf8d03aa8bef7682c0c3139a719fb1ec38cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b31fca9eff53e9bc76a31d0bb3bf8d03aa8bef7682c0c3139a719fb1ec38cf->enter($__internal_46b31fca9eff53e9bc76a31d0bb3bf8d03aa8bef7682c0c3139a719fb1ec38cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_46b31fca9eff53e9bc76a31d0bb3bf8d03aa8bef7682c0c3139a719fb1ec38cf->leave($__internal_46b31fca9eff53e9bc76a31d0bb3bf8d03aa8bef7682c0c3139a719fb1ec38cf_prof);

        
        $__internal_b93a409ab1b1f83c34e2185e96360f547bc8582fbb3a3cbd7658efb4ed223749->leave($__internal_b93a409ab1b1f83c34e2185e96360f547bc8582fbb3a3cbd7658efb4ed223749_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/maestrojosiah/projects/exam/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
