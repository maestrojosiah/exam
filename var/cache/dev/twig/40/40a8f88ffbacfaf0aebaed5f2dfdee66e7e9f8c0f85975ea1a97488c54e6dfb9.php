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
        $__internal_6a0b5e7558795d0d9b7d6a2f51a8f9fcb5ca8fec54008cbeec568308b93b3c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a0b5e7558795d0d9b7d6a2f51a8f9fcb5ca8fec54008cbeec568308b93b3c59->enter($__internal_6a0b5e7558795d0d9b7d6a2f51a8f9fcb5ca8fec54008cbeec568308b93b3c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e50204d214fe3aa02e89de5aa5a5a828755b8479f6587b0c32983d10989a597a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50204d214fe3aa02e89de5aa5a5a828755b8479f6587b0c32983d10989a597a->enter($__internal_e50204d214fe3aa02e89de5aa5a5a828755b8479f6587b0c32983d10989a597a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a0b5e7558795d0d9b7d6a2f51a8f9fcb5ca8fec54008cbeec568308b93b3c59->leave($__internal_6a0b5e7558795d0d9b7d6a2f51a8f9fcb5ca8fec54008cbeec568308b93b3c59_prof);

        
        $__internal_e50204d214fe3aa02e89de5aa5a5a828755b8479f6587b0c32983d10989a597a->leave($__internal_e50204d214fe3aa02e89de5aa5a5a828755b8479f6587b0c32983d10989a597a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06bd63d65fb9beeee124cd896afb56e1b4c1176603fe3efda9dd358f45b8c6be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06bd63d65fb9beeee124cd896afb56e1b4c1176603fe3efda9dd358f45b8c6be->enter($__internal_06bd63d65fb9beeee124cd896afb56e1b4c1176603fe3efda9dd358f45b8c6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc31f3ca43b3067654e66447b88075c87990a16afa2cb2f6a5b32bdf48b6f858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc31f3ca43b3067654e66447b88075c87990a16afa2cb2f6a5b32bdf48b6f858->enter($__internal_bc31f3ca43b3067654e66447b88075c87990a16afa2cb2f6a5b32bdf48b6f858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bc31f3ca43b3067654e66447b88075c87990a16afa2cb2f6a5b32bdf48b6f858->leave($__internal_bc31f3ca43b3067654e66447b88075c87990a16afa2cb2f6a5b32bdf48b6f858_prof);

        
        $__internal_06bd63d65fb9beeee124cd896afb56e1b4c1176603fe3efda9dd358f45b8c6be->leave($__internal_06bd63d65fb9beeee124cd896afb56e1b4c1176603fe3efda9dd358f45b8c6be_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ed0ea3da4872060be16a7e62195f8df21c6ef35a2927d8aff7bdadaf98b7e9d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0ea3da4872060be16a7e62195f8df21c6ef35a2927d8aff7bdadaf98b7e9d1->enter($__internal_ed0ea3da4872060be16a7e62195f8df21c6ef35a2927d8aff7bdadaf98b7e9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_691a0cc8c0d11ea332843b383eb159f09fb1791384b847287d84c95c140ccb28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691a0cc8c0d11ea332843b383eb159f09fb1791384b847287d84c95c140ccb28->enter($__internal_691a0cc8c0d11ea332843b383eb159f09fb1791384b847287d84c95c140ccb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_691a0cc8c0d11ea332843b383eb159f09fb1791384b847287d84c95c140ccb28->leave($__internal_691a0cc8c0d11ea332843b383eb159f09fb1791384b847287d84c95c140ccb28_prof);

        
        $__internal_ed0ea3da4872060be16a7e62195f8df21c6ef35a2927d8aff7bdadaf98b7e9d1->leave($__internal_ed0ea3da4872060be16a7e62195f8df21c6ef35a2927d8aff7bdadaf98b7e9d1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a045735a1a858fee305fa788737eae31dde6c84ad2cc17fc40294000db6f7aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a045735a1a858fee305fa788737eae31dde6c84ad2cc17fc40294000db6f7aeb->enter($__internal_a045735a1a858fee305fa788737eae31dde6c84ad2cc17fc40294000db6f7aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f74bbdbf95bbc952179473a623c3b0f253e729e773d0afdfcf25945d10e30de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74bbdbf95bbc952179473a623c3b0f253e729e773d0afdfcf25945d10e30de6->enter($__internal_f74bbdbf95bbc952179473a623c3b0f253e729e773d0afdfcf25945d10e30de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f74bbdbf95bbc952179473a623c3b0f253e729e773d0afdfcf25945d10e30de6->leave($__internal_f74bbdbf95bbc952179473a623c3b0f253e729e773d0afdfcf25945d10e30de6_prof);

        
        $__internal_a045735a1a858fee305fa788737eae31dde6c84ad2cc17fc40294000db6f7aeb->leave($__internal_a045735a1a858fee305fa788737eae31dde6c84ad2cc17fc40294000db6f7aeb_prof);

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
