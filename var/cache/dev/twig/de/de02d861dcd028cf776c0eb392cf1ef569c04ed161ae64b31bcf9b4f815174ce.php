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
        $__internal_faff19a57885433dc16dfc8094c65ea0ac9d7989823538f48080a4f9c91acd03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faff19a57885433dc16dfc8094c65ea0ac9d7989823538f48080a4f9c91acd03->enter($__internal_faff19a57885433dc16dfc8094c65ea0ac9d7989823538f48080a4f9c91acd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/content_draft.html.twig"));

        $__internal_873eb18a2f85fb59071565ebdebb425910862be69d12da96184f88707eff13ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873eb18a2f85fb59071565ebdebb425910862be69d12da96184f88707eff13ef->enter($__internal_873eb18a2f85fb59071565ebdebb425910862be69d12da96184f88707eff13ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/content_draft.html.twig"));

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
        
        $__internal_faff19a57885433dc16dfc8094c65ea0ac9d7989823538f48080a4f9c91acd03->leave($__internal_faff19a57885433dc16dfc8094c65ea0ac9d7989823538f48080a4f9c91acd03_prof);

        
        $__internal_873eb18a2f85fb59071565ebdebb425910862be69d12da96184f88707eff13ef->leave($__internal_873eb18a2f85fb59071565ebdebb425910862be69d12da96184f88707eff13ef_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_3710898502d64475f51077a5d8fef7a052a0d20b41dde9ebc9053317ff9e6abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3710898502d64475f51077a5d8fef7a052a0d20b41dde9ebc9053317ff9e6abc->enter($__internal_3710898502d64475f51077a5d8fef7a052a0d20b41dde9ebc9053317ff9e6abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_94ebfe510e16649e7f2b77420e4bc0be512e4fb61409c90e1906a94d60de1aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ebfe510e16649e7f2b77420e4bc0be512e4fb61409c90e1906a94d60de1aae->enter($__internal_94ebfe510e16649e7f2b77420e4bc0be512e4fb61409c90e1906a94d60de1aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "\t\t
\t";
        
        $__internal_94ebfe510e16649e7f2b77420e4bc0be512e4fb61409c90e1906a94d60de1aae->leave($__internal_94ebfe510e16649e7f2b77420e4bc0be512e4fb61409c90e1906a94d60de1aae_prof);

        
        $__internal_3710898502d64475f51077a5d8fef7a052a0d20b41dde9ebc9053317ff9e6abc->leave($__internal_3710898502d64475f51077a5d8fef7a052a0d20b41dde9ebc9053317ff9e6abc_prof);

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
