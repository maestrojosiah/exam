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
        $__internal_2fd4b432c95113f11da5c89a39e9508dcbc2737de5b4f3d9e1ca2cd948b2d3ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd4b432c95113f11da5c89a39e9508dcbc2737de5b4f3d9e1ca2cd948b2d3ff->enter($__internal_2fd4b432c95113f11da5c89a39e9508dcbc2737de5b4f3d9e1ca2cd948b2d3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/content_draft.html.twig"));

        $__internal_75b1ca63ff9675ecc06abe424d3c367f055c198a640aa1d9d0a1e78cad70bc7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b1ca63ff9675ecc06abe424d3c367f055c198a640aa1d9d0a1e78cad70bc7d->enter($__internal_75b1ca63ff9675ecc06abe424d3c367f055c198a640aa1d9d0a1e78cad70bc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/content_draft.html.twig"));

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
        
        $__internal_2fd4b432c95113f11da5c89a39e9508dcbc2737de5b4f3d9e1ca2cd948b2d3ff->leave($__internal_2fd4b432c95113f11da5c89a39e9508dcbc2737de5b4f3d9e1ca2cd948b2d3ff_prof);

        
        $__internal_75b1ca63ff9675ecc06abe424d3c367f055c198a640aa1d9d0a1e78cad70bc7d->leave($__internal_75b1ca63ff9675ecc06abe424d3c367f055c198a640aa1d9d0a1e78cad70bc7d_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_9ff7ec5ae208e33e05d375ecf5d4451c38f6e0c9c35adefe0bbe357aa47cd1dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff7ec5ae208e33e05d375ecf5d4451c38f6e0c9c35adefe0bbe357aa47cd1dd->enter($__internal_9ff7ec5ae208e33e05d375ecf5d4451c38f6e0c9c35adefe0bbe357aa47cd1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_17ec2b195b39a5c45cfad5915634b0940500cef20c2af1bfc99f7a6bacdf912c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ec2b195b39a5c45cfad5915634b0940500cef20c2af1bfc99f7a6bacdf912c->enter($__internal_17ec2b195b39a5c45cfad5915634b0940500cef20c2af1bfc99f7a6bacdf912c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "\t\t
\t";
        
        $__internal_17ec2b195b39a5c45cfad5915634b0940500cef20c2af1bfc99f7a6bacdf912c->leave($__internal_17ec2b195b39a5c45cfad5915634b0940500cef20c2af1bfc99f7a6bacdf912c_prof);

        
        $__internal_9ff7ec5ae208e33e05d375ecf5d4451c38f6e0c9c35adefe0bbe357aa47cd1dd->leave($__internal_9ff7ec5ae208e33e05d375ecf5d4451c38f6e0c9c35adefe0bbe357aa47cd1dd_prof);

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
