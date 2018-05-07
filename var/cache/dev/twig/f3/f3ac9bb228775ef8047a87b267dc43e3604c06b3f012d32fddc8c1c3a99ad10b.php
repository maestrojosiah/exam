<?php

/* class/edit.html.twig */
class __TwigTemplate_28c252b6a942e392d4a16b3c2375d49b880bbe6f68375f52e629a0ad7d0b4cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "class/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d45dea369f3dd9626ff7f69af86187a09666994595bdd3b099003a776393273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d45dea369f3dd9626ff7f69af86187a09666994595bdd3b099003a776393273->enter($__internal_2d45dea369f3dd9626ff7f69af86187a09666994595bdd3b099003a776393273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/edit.html.twig"));

        $__internal_576a8ab65f92bdd5d2a55dddb6357af2db02e773212e316354c682da6298cd7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576a8ab65f92bdd5d2a55dddb6357af2db02e773212e316354c682da6298cd7c->enter($__internal_576a8ab65f92bdd5d2a55dddb6357af2db02e773212e316354c682da6298cd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d45dea369f3dd9626ff7f69af86187a09666994595bdd3b099003a776393273->leave($__internal_2d45dea369f3dd9626ff7f69af86187a09666994595bdd3b099003a776393273_prof);

        
        $__internal_576a8ab65f92bdd5d2a55dddb6357af2db02e773212e316354c682da6298cd7c->leave($__internal_576a8ab65f92bdd5d2a55dddb6357af2db02e773212e316354c682da6298cd7c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b063013767895cff786fcb8b943faffc0ef38ea3c1dabe2f6cdf59901cb3cb26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b063013767895cff786fcb8b943faffc0ef38ea3c1dabe2f6cdf59901cb3cb26->enter($__internal_b063013767895cff786fcb8b943faffc0ef38ea3c1dabe2f6cdf59901cb3cb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8df9e4c97b5c909d144a59a95d764bca61fe12f9d4f38e95ac5ee30ee4c29e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df9e4c97b5c909d144a59a95d764bca61fe12f9d4f38e95ac5ee30ee4c29e59->enter($__internal_8df9e4c97b5c909d144a59a95d764bca61fe12f9d4f38e95ac5ee30ee4c29e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<body>
";
        // line 4
        echo twig_include($this->env, $context, "templates/header.html.twig");
        echo "        \t\t
";
        // line 5
        echo twig_include($this->env, $context, "templates/aside.html.twig");
        echo "        \t\t
";
        // line 6
        $this->loadTemplate("class/edit.html.twig", "class/edit.html.twig", 6, "1956888030")->display($context);
        
        $__internal_8df9e4c97b5c909d144a59a95d764bca61fe12f9d4f38e95ac5ee30ee4c29e59->leave($__internal_8df9e4c97b5c909d144a59a95d764bca61fe12f9d4f38e95ac5ee30ee4c29e59_prof);

        
        $__internal_b063013767895cff786fcb8b943faffc0ef38ea3c1dabe2f6cdf59901cb3cb26->leave($__internal_b063013767895cff786fcb8b943faffc0ef38ea3c1dabe2f6cdf59901cb3cb26_prof);

    }

    public function getTemplateName()
    {
        return "class/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<body>
{{ include('templates/header.html.twig') }}        \t\t
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}
\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Edit Class
\t\t\t\t{% if not form.vars.valid %}
\t              <div class=\"alert alert-warning\">
\t              <p>Please check your entries below</p>
\t              </div>\t\t\t\t
          \t\t{% endif %}\t          
\t      </header>
\t      <div class=\"panel-body\">
\t          {{ form_start(form, {'method': 'post'} ) }}
\t              <div class=\"form-group\">
\t                  <label for=\"classs_c_title\">Class Title</label>
\t                  {{ form_row(form.c_title, {'attr': {'class': 'form-control', 'placeholder': 'Class Title' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"classs_class_teacher\">Class Teacher</label>
\t                  {{ form_row(form.class_teacher, {'attr': {'class': 'form-control', 'placeholder': 'Class Teacher' }}) }}
\t              </div>
\t              {{ form_row(form.save, {'attr': {'class': 'btn btn-primary pull-left margin-md', 'style': 'margin-right: 5px'}}) }}
\t              {{ form_widget(form.saveAndAdd, {'attr': {'class': 'btn btn-info pull-left' }} ) }}
\t              <a href=\"{{path('homepage')}}\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"{{path('list_classes')}}\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          {{ form_end(form) }}

\t      </div>
\t  </section>
\t</div>
{% endblock %}
{% endembed %}
{% endblock %}", "class/edit.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/class/edit.html.twig");
    }
}


/* class/edit.html.twig */
class __TwigTemplate_28c252b6a942e392d4a16b3c2375d49b880bbe6f68375f52e629a0ad7d0b4cc2_1956888030 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "class/edit.html.twig", 6);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/content_draft.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5b68bc08d8995c12fd714d0804b7de18ecf3e91c85be6f11a2c968a5176ec39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b68bc08d8995c12fd714d0804b7de18ecf3e91c85be6f11a2c968a5176ec39->enter($__internal_f5b68bc08d8995c12fd714d0804b7de18ecf3e91c85be6f11a2c968a5176ec39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/edit.html.twig"));

        $__internal_27d1c30fe1eb9971890ad6311bfe2848136f3db1e746b2b144821ab5061b0b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d1c30fe1eb9971890ad6311bfe2848136f3db1e746b2b144821ab5061b0b6b->enter($__internal_27d1c30fe1eb9971890ad6311bfe2848136f3db1e746b2b144821ab5061b0b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5b68bc08d8995c12fd714d0804b7de18ecf3e91c85be6f11a2c968a5176ec39->leave($__internal_f5b68bc08d8995c12fd714d0804b7de18ecf3e91c85be6f11a2c968a5176ec39_prof);

        
        $__internal_27d1c30fe1eb9971890ad6311bfe2848136f3db1e746b2b144821ab5061b0b6b->leave($__internal_27d1c30fe1eb9971890ad6311bfe2848136f3db1e746b2b144821ab5061b0b6b_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_6408769ec65f4b7d17d006d2844a56f30e6ccff744fc55dd1da09b4104ea333a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6408769ec65f4b7d17d006d2844a56f30e6ccff744fc55dd1da09b4104ea333a->enter($__internal_6408769ec65f4b7d17d006d2844a56f30e6ccff744fc55dd1da09b4104ea333a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_99e68fa5037c13498e55b5af795079dee110fffeeb2e08c00b6ab077c964e3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e68fa5037c13498e55b5af795079dee110fffeeb2e08c00b6ab077c964e3a3->enter($__internal_99e68fa5037c13498e55b5af795079dee110fffeeb2e08c00b6ab077c964e3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Edit Class
\t\t\t\t";
        // line 12
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 13
            echo "\t              <div class=\"alert alert-warning\">
\t              <p>Please check your entries below</p>
\t              </div>\t\t\t\t
          \t\t";
        }
        // line 16
        echo "\t          
\t      </header>
\t      <div class=\"panel-body\">
\t          ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post"));
        echo "
\t              <div class=\"form-group\">
\t                  <label for=\"classs_c_title\">Class Title</label>
\t                  ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "c_title", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Class Title")));
        echo "
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"classs_class_teacher\">Class Teacher</label>
\t                  ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "class_teacher", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Class Teacher")));
        echo "
\t              </div>
\t              ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("class" => "btn btn-primary pull-left margin-md", "style" => "margin-right: 5px")));
        echo "
\t              ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "saveAndAdd", array()), 'widget', array("attr" => array("class" => "btn btn-info pull-left")));
        echo "
\t              <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_classes");
        echo "\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

\t      </div>
\t  </section>
\t</div>
";
        
        $__internal_99e68fa5037c13498e55b5af795079dee110fffeeb2e08c00b6ab077c964e3a3->leave($__internal_99e68fa5037c13498e55b5af795079dee110fffeeb2e08c00b6ab077c964e3a3_prof);

        
        $__internal_6408769ec65f4b7d17d006d2844a56f30e6ccff744fc55dd1da09b4104ea333a->leave($__internal_6408769ec65f4b7d17d006d2844a56f30e6ccff744fc55dd1da09b4104ea333a_prof);

    }

    public function getTemplateName()
    {
        return "class/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 33,  232 => 31,  228 => 30,  224 => 29,  220 => 28,  215 => 26,  208 => 22,  202 => 19,  197 => 16,  191 => 13,  189 => 12,  183 => 8,  174 => 7,  60 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<body>
{{ include('templates/header.html.twig') }}        \t\t
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}
\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Edit Class
\t\t\t\t{% if not form.vars.valid %}
\t              <div class=\"alert alert-warning\">
\t              <p>Please check your entries below</p>
\t              </div>\t\t\t\t
          \t\t{% endif %}\t          
\t      </header>
\t      <div class=\"panel-body\">
\t          {{ form_start(form, {'method': 'post'} ) }}
\t              <div class=\"form-group\">
\t                  <label for=\"classs_c_title\">Class Title</label>
\t                  {{ form_row(form.c_title, {'attr': {'class': 'form-control', 'placeholder': 'Class Title' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"classs_class_teacher\">Class Teacher</label>
\t                  {{ form_row(form.class_teacher, {'attr': {'class': 'form-control', 'placeholder': 'Class Teacher' }}) }}
\t              </div>
\t              {{ form_row(form.save, {'attr': {'class': 'btn btn-primary pull-left margin-md', 'style': 'margin-right: 5px'}}) }}
\t              {{ form_widget(form.saveAndAdd, {'attr': {'class': 'btn btn-info pull-left' }} ) }}
\t              <a href=\"{{path('homepage')}}\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"{{path('list_classes')}}\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          {{ form_end(form) }}

\t      </div>
\t  </section>
\t</div>
{% endblock %}
{% endembed %}
{% endblock %}", "class/edit.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/class/edit.html.twig");
    }
}
