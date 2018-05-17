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
        $__internal_1f5403cdccee5455692933e80db6f20f909a9a45a3f8d35da0324b6399e4cd8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5403cdccee5455692933e80db6f20f909a9a45a3f8d35da0324b6399e4cd8e->enter($__internal_1f5403cdccee5455692933e80db6f20f909a9a45a3f8d35da0324b6399e4cd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ba08e7c8948ca31348514434c8a89ff40218a86b70922b71ee351ba1023bceb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba08e7c8948ca31348514434c8a89ff40218a86b70922b71ee351ba1023bceb9->enter($__internal_ba08e7c8948ca31348514434c8a89ff40218a86b70922b71ee351ba1023bceb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f5403cdccee5455692933e80db6f20f909a9a45a3f8d35da0324b6399e4cd8e->leave($__internal_1f5403cdccee5455692933e80db6f20f909a9a45a3f8d35da0324b6399e4cd8e_prof);

        
        $__internal_ba08e7c8948ca31348514434c8a89ff40218a86b70922b71ee351ba1023bceb9->leave($__internal_ba08e7c8948ca31348514434c8a89ff40218a86b70922b71ee351ba1023bceb9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f447deeb843e57717264a4812d9cfdb81052356fa756e8caeb2094cee60260e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f447deeb843e57717264a4812d9cfdb81052356fa756e8caeb2094cee60260e->enter($__internal_3f447deeb843e57717264a4812d9cfdb81052356fa756e8caeb2094cee60260e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_41b1dffef0e64d15cd8e3b700cbbc8853c4097407f7099b0c0ccb3fbbacd2796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b1dffef0e64d15cd8e3b700cbbc8853c4097407f7099b0c0ccb3fbbacd2796->enter($__internal_41b1dffef0e64d15cd8e3b700cbbc8853c4097407f7099b0c0ccb3fbbacd2796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_41b1dffef0e64d15cd8e3b700cbbc8853c4097407f7099b0c0ccb3fbbacd2796->leave($__internal_41b1dffef0e64d15cd8e3b700cbbc8853c4097407f7099b0c0ccb3fbbacd2796_prof);

        
        $__internal_3f447deeb843e57717264a4812d9cfdb81052356fa756e8caeb2094cee60260e->leave($__internal_3f447deeb843e57717264a4812d9cfdb81052356fa756e8caeb2094cee60260e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45d00f4110e5842625a7b6416c1d4068aaf6124820b39ba7676e51046bf46212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d00f4110e5842625a7b6416c1d4068aaf6124820b39ba7676e51046bf46212->enter($__internal_45d00f4110e5842625a7b6416c1d4068aaf6124820b39ba7676e51046bf46212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a5a4cb36e8c3cd84ba22654b7f33327f76be7e208c35ab14b0b69d245f0a8a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a4cb36e8c3cd84ba22654b7f33327f76be7e208c35ab14b0b69d245f0a8a5c->enter($__internal_a5a4cb36e8c3cd84ba22654b7f33327f76be7e208c35ab14b0b69d245f0a8a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a5a4cb36e8c3cd84ba22654b7f33327f76be7e208c35ab14b0b69d245f0a8a5c->leave($__internal_a5a4cb36e8c3cd84ba22654b7f33327f76be7e208c35ab14b0b69d245f0a8a5c_prof);

        
        $__internal_45d00f4110e5842625a7b6416c1d4068aaf6124820b39ba7676e51046bf46212->leave($__internal_45d00f4110e5842625a7b6416c1d4068aaf6124820b39ba7676e51046bf46212_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f230741e325ae879097ad4fd2eca068ab3cfe5782616673502890c8ac56086e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f230741e325ae879097ad4fd2eca068ab3cfe5782616673502890c8ac56086e->enter($__internal_6f230741e325ae879097ad4fd2eca068ab3cfe5782616673502890c8ac56086e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c99f3ffea2b9f9a74452bdd5fff46d8f71a66adec47c7ee61f39ef5b59c7251e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99f3ffea2b9f9a74452bdd5fff46d8f71a66adec47c7ee61f39ef5b59c7251e->enter($__internal_c99f3ffea2b9f9a74452bdd5fff46d8f71a66adec47c7ee61f39ef5b59c7251e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c99f3ffea2b9f9a74452bdd5fff46d8f71a66adec47c7ee61f39ef5b59c7251e->leave($__internal_c99f3ffea2b9f9a74452bdd5fff46d8f71a66adec47c7ee61f39ef5b59c7251e_prof);

        
        $__internal_6f230741e325ae879097ad4fd2eca068ab3cfe5782616673502890c8ac56086e->leave($__internal_6f230741e325ae879097ad4fd2eca068ab3cfe5782616673502890c8ac56086e_prof);

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
