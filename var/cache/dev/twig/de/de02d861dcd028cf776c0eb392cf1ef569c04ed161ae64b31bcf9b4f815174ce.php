<?php

/* templates/content_draft.html.twig */
class __TwigTemplate_07cc85a8782a0f984a57f79f6e011e0e06cedb324604cb97f2b8ea4c459a16a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ada7826fda5aa17f5ba37249fa0466dd391bc9d9c6d10a2241eef08a5bb3c73b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada7826fda5aa17f5ba37249fa0466dd391bc9d9c6d10a2241eef08a5bb3c73b->enter($__internal_ada7826fda5aa17f5ba37249fa0466dd391bc9d9c6d10a2241eef08a5bb3c73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/content_draft.html.twig"));

        $__internal_caa274382fa70e619c9b97350f574b3a6456e12702bd6abf201732ee3200b14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa274382fa70e619c9b97350f574b3a6456e12702bd6abf201732ee3200b14f->enter($__internal_caa274382fa70e619c9b97350f574b3a6456e12702bd6abf201732ee3200b14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/content_draft.html.twig"));

        // line 1
        echo "<!--main content start-->
<section id=\"main-content\">
  <section class=\"wrapper\">            
\t";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "  </section>
</section>
<!--main content end-->

";
        
        $__internal_ada7826fda5aa17f5ba37249fa0466dd391bc9d9c6d10a2241eef08a5bb3c73b->leave($__internal_ada7826fda5aa17f5ba37249fa0466dd391bc9d9c6d10a2241eef08a5bb3c73b_prof);

        
        $__internal_caa274382fa70e619c9b97350f574b3a6456e12702bd6abf201732ee3200b14f->leave($__internal_caa274382fa70e619c9b97350f574b3a6456e12702bd6abf201732ee3200b14f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_3bca2908d7b908889eb61d7fced8041273f549bd0e64be77d003e11e904a1fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bca2908d7b908889eb61d7fced8041273f549bd0e64be77d003e11e904a1fea->enter($__internal_3bca2908d7b908889eb61d7fced8041273f549bd0e64be77d003e11e904a1fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_425b2b79f6808d2c547dec0b33f52dbea4888cc3389aa6e9fe89e34d2cdc3202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425b2b79f6808d2c547dec0b33f52dbea4888cc3389aa6e9fe89e34d2cdc3202->enter($__internal_425b2b79f6808d2c547dec0b33f52dbea4888cc3389aa6e9fe89e34d2cdc3202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "\t\t
\t";
        
        $__internal_425b2b79f6808d2c547dec0b33f52dbea4888cc3389aa6e9fe89e34d2cdc3202->leave($__internal_425b2b79f6808d2c547dec0b33f52dbea4888cc3389aa6e9fe89e34d2cdc3202_prof);

        
        $__internal_3bca2908d7b908889eb61d7fced8041273f549bd0e64be77d003e11e904a1fea->leave($__internal_3bca2908d7b908889eb61d7fced8041273f549bd0e64be77d003e11e904a1fea_prof);

    }

    public function getTemplateName()
    {
        return "templates/content_draft.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  47 => 4,  33 => 7,  31 => 4,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--main content start-->
<section id=\"main-content\">
  <section class=\"wrapper\">            
\t{% block content %}
\t\t
\t{% endblock %}
  </section>
</section>
<!--main content end-->

", "templates/content_draft.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/templates/content_draft.html.twig");
    }
}
