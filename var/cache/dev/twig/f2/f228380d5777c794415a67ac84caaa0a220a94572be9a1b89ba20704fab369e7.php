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
        $__internal_42ae0750fce39570d78866f59f7e33cbd8fff3045fd261a2cee03d22a2202443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ae0750fce39570d78866f59f7e33cbd8fff3045fd261a2cee03d22a2202443->enter($__internal_42ae0750fce39570d78866f59f7e33cbd8fff3045fd261a2cee03d22a2202443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_baa67e4cdb0e33c0ba2be25218e3f1fb80b65e24e41efb05611de0da212655c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa67e4cdb0e33c0ba2be25218e3f1fb80b65e24e41efb05611de0da212655c2->enter($__internal_baa67e4cdb0e33c0ba2be25218e3f1fb80b65e24e41efb05611de0da212655c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42ae0750fce39570d78866f59f7e33cbd8fff3045fd261a2cee03d22a2202443->leave($__internal_42ae0750fce39570d78866f59f7e33cbd8fff3045fd261a2cee03d22a2202443_prof);

        
        $__internal_baa67e4cdb0e33c0ba2be25218e3f1fb80b65e24e41efb05611de0da212655c2->leave($__internal_baa67e4cdb0e33c0ba2be25218e3f1fb80b65e24e41efb05611de0da212655c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_03156fc4087f027bd7fd7fb6560282f9d9d2be99932a6187f9f53f618855e2ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03156fc4087f027bd7fd7fb6560282f9d9d2be99932a6187f9f53f618855e2ad->enter($__internal_03156fc4087f027bd7fd7fb6560282f9d9d2be99932a6187f9f53f618855e2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f2eec9cc82ab45f7c45f3c854e92c3b651052d9a9b5265e736f4391bc1f30cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2eec9cc82ab45f7c45f3c854e92c3b651052d9a9b5265e736f4391bc1f30cbc->enter($__internal_f2eec9cc82ab45f7c45f3c854e92c3b651052d9a9b5265e736f4391bc1f30cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f2eec9cc82ab45f7c45f3c854e92c3b651052d9a9b5265e736f4391bc1f30cbc->leave($__internal_f2eec9cc82ab45f7c45f3c854e92c3b651052d9a9b5265e736f4391bc1f30cbc_prof);

        
        $__internal_03156fc4087f027bd7fd7fb6560282f9d9d2be99932a6187f9f53f618855e2ad->leave($__internal_03156fc4087f027bd7fd7fb6560282f9d9d2be99932a6187f9f53f618855e2ad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0181721dbf85e8360173579533d5c4fa600ca18729dfb5b0bd74bdef4224bac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0181721dbf85e8360173579533d5c4fa600ca18729dfb5b0bd74bdef4224bac8->enter($__internal_0181721dbf85e8360173579533d5c4fa600ca18729dfb5b0bd74bdef4224bac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9332268cf835be6a7c28d5a5400b52e1b8d9107027dc92f817b82869cbb2fd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9332268cf835be6a7c28d5a5400b52e1b8d9107027dc92f817b82869cbb2fd4c->enter($__internal_9332268cf835be6a7c28d5a5400b52e1b8d9107027dc92f817b82869cbb2fd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9332268cf835be6a7c28d5a5400b52e1b8d9107027dc92f817b82869cbb2fd4c->leave($__internal_9332268cf835be6a7c28d5a5400b52e1b8d9107027dc92f817b82869cbb2fd4c_prof);

        
        $__internal_0181721dbf85e8360173579533d5c4fa600ca18729dfb5b0bd74bdef4224bac8->leave($__internal_0181721dbf85e8360173579533d5c4fa600ca18729dfb5b0bd74bdef4224bac8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce7749f544a90d801776749ea461d114f82951e97b40deb0fa878cb53b719c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce7749f544a90d801776749ea461d114f82951e97b40deb0fa878cb53b719c96->enter($__internal_ce7749f544a90d801776749ea461d114f82951e97b40deb0fa878cb53b719c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ec5b9db472724d10f2fff617c451f01b7d4a65ace2900f97d1ad3491f6b0a96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5b9db472724d10f2fff617c451f01b7d4a65ace2900f97d1ad3491f6b0a96d->enter($__internal_ec5b9db472724d10f2fff617c451f01b7d4a65ace2900f97d1ad3491f6b0a96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ec5b9db472724d10f2fff617c451f01b7d4a65ace2900f97d1ad3491f6b0a96d->leave($__internal_ec5b9db472724d10f2fff617c451f01b7d4a65ace2900f97d1ad3491f6b0a96d_prof);

        
        $__internal_ce7749f544a90d801776749ea461d114f82951e97b40deb0fa878cb53b719c96->leave($__internal_ce7749f544a90d801776749ea461d114f82951e97b40deb0fa878cb53b719c96_prof);

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
