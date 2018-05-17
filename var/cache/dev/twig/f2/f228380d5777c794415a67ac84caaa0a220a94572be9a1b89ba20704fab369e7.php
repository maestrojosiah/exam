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
        $__internal_abb9ec55829deaea2bdbd9f5edc94398b2bcd44673bd8492b516783a962e8599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb9ec55829deaea2bdbd9f5edc94398b2bcd44673bd8492b516783a962e8599->enter($__internal_abb9ec55829deaea2bdbd9f5edc94398b2bcd44673bd8492b516783a962e8599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_17565e7eda207cb2d50ea1d3a3d93d0d983a6446c0a2d4421d03b6dbfb4a8253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17565e7eda207cb2d50ea1d3a3d93d0d983a6446c0a2d4421d03b6dbfb4a8253->enter($__internal_17565e7eda207cb2d50ea1d3a3d93d0d983a6446c0a2d4421d03b6dbfb4a8253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abb9ec55829deaea2bdbd9f5edc94398b2bcd44673bd8492b516783a962e8599->leave($__internal_abb9ec55829deaea2bdbd9f5edc94398b2bcd44673bd8492b516783a962e8599_prof);

        
        $__internal_17565e7eda207cb2d50ea1d3a3d93d0d983a6446c0a2d4421d03b6dbfb4a8253->leave($__internal_17565e7eda207cb2d50ea1d3a3d93d0d983a6446c0a2d4421d03b6dbfb4a8253_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b970e63e599bb1ed85492e4349be0eb2d55f0b2d1cdb5503c563f7b64929a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b970e63e599bb1ed85492e4349be0eb2d55f0b2d1cdb5503c563f7b64929a8a->enter($__internal_1b970e63e599bb1ed85492e4349be0eb2d55f0b2d1cdb5503c563f7b64929a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_975da3a94298df9fbd1e01332d954b517a9f29380c01f1658f087f051e6d8527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975da3a94298df9fbd1e01332d954b517a9f29380c01f1658f087f051e6d8527->enter($__internal_975da3a94298df9fbd1e01332d954b517a9f29380c01f1658f087f051e6d8527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_975da3a94298df9fbd1e01332d954b517a9f29380c01f1658f087f051e6d8527->leave($__internal_975da3a94298df9fbd1e01332d954b517a9f29380c01f1658f087f051e6d8527_prof);

        
        $__internal_1b970e63e599bb1ed85492e4349be0eb2d55f0b2d1cdb5503c563f7b64929a8a->leave($__internal_1b970e63e599bb1ed85492e4349be0eb2d55f0b2d1cdb5503c563f7b64929a8a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7fe569c1c09b60f657820d72e088d02920db65ddd3276533a3db0990ed3eb07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7fe569c1c09b60f657820d72e088d02920db65ddd3276533a3db0990ed3eb07->enter($__internal_b7fe569c1c09b60f657820d72e088d02920db65ddd3276533a3db0990ed3eb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2ef27a4ebb38b0f561addc536550740225d5e6a3c42bf2903862c8d69e2df775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef27a4ebb38b0f561addc536550740225d5e6a3c42bf2903862c8d69e2df775->enter($__internal_2ef27a4ebb38b0f561addc536550740225d5e6a3c42bf2903862c8d69e2df775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2ef27a4ebb38b0f561addc536550740225d5e6a3c42bf2903862c8d69e2df775->leave($__internal_2ef27a4ebb38b0f561addc536550740225d5e6a3c42bf2903862c8d69e2df775_prof);

        
        $__internal_b7fe569c1c09b60f657820d72e088d02920db65ddd3276533a3db0990ed3eb07->leave($__internal_b7fe569c1c09b60f657820d72e088d02920db65ddd3276533a3db0990ed3eb07_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5bf422669ed95640cc3ae3e7a7db9a054c4018bcaa281ff9dbac65663bd6f0b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf422669ed95640cc3ae3e7a7db9a054c4018bcaa281ff9dbac65663bd6f0b6->enter($__internal_5bf422669ed95640cc3ae3e7a7db9a054c4018bcaa281ff9dbac65663bd6f0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_091534debadb5635d046753c3ea59d71ddd2dbb544a46243e16e29dfd00e51f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091534debadb5635d046753c3ea59d71ddd2dbb544a46243e16e29dfd00e51f0->enter($__internal_091534debadb5635d046753c3ea59d71ddd2dbb544a46243e16e29dfd00e51f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_091534debadb5635d046753c3ea59d71ddd2dbb544a46243e16e29dfd00e51f0->leave($__internal_091534debadb5635d046753c3ea59d71ddd2dbb544a46243e16e29dfd00e51f0_prof);

        
        $__internal_5bf422669ed95640cc3ae3e7a7db9a054c4018bcaa281ff9dbac65663bd6f0b6->leave($__internal_5bf422669ed95640cc3ae3e7a7db9a054c4018bcaa281ff9dbac65663bd6f0b6_prof);

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
