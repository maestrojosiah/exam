<?php

/* config/configuration.html.twig */
class __TwigTemplate_639b1ac28aa89bd8323217a3199f42ff7834a503e2d71762674f8bdd69e528a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "config/configuration.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0480eacbe18c80f0d4f310aeca49282d66e5005e009964f9ce0f7e32d281ffbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0480eacbe18c80f0d4f310aeca49282d66e5005e009964f9ce0f7e32d281ffbc->enter($__internal_0480eacbe18c80f0d4f310aeca49282d66e5005e009964f9ce0f7e32d281ffbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "config/configuration.html.twig"));

        $__internal_beeac4f26de056d69db2a42351ac041e0cd6078a28895922c3846a43cd1740c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beeac4f26de056d69db2a42351ac041e0cd6078a28895922c3846a43cd1740c5->enter($__internal_beeac4f26de056d69db2a42351ac041e0cd6078a28895922c3846a43cd1740c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "config/configuration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0480eacbe18c80f0d4f310aeca49282d66e5005e009964f9ce0f7e32d281ffbc->leave($__internal_0480eacbe18c80f0d4f310aeca49282d66e5005e009964f9ce0f7e32d281ffbc_prof);

        
        $__internal_beeac4f26de056d69db2a42351ac041e0cd6078a28895922c3846a43cd1740c5->leave($__internal_beeac4f26de056d69db2a42351ac041e0cd6078a28895922c3846a43cd1740c5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_51692ec9dd82cf42d09a5ad1ae49bfec7ec9883a0e1dd636ccc522984f93d4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51692ec9dd82cf42d09a5ad1ae49bfec7ec9883a0e1dd636ccc522984f93d4e9->enter($__internal_51692ec9dd82cf42d09a5ad1ae49bfec7ec9883a0e1dd636ccc522984f93d4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62f3041e213cba88b766923e3f733058d63a74bb8a3e72167adeaa1af59a57ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f3041e213cba88b766923e3f733058d63a74bb8a3e72167adeaa1af59a57ee->enter($__internal_62f3041e213cba88b766923e3f733058d63a74bb8a3e72167adeaa1af59a57ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<body>
";
        // line 4
        echo twig_include($this->env, $context, "templates/header.html.twig");
        echo "           
";
        // line 5
        echo twig_include($this->env, $context, "templates/aside.html.twig");
        echo "            
";
        // line 6
        $this->loadTemplate("config/configuration.html.twig", "config/configuration.html.twig", 6, "451842948")->display($context);
        
        $__internal_62f3041e213cba88b766923e3f733058d63a74bb8a3e72167adeaa1af59a57ee->leave($__internal_62f3041e213cba88b766923e3f733058d63a74bb8a3e72167adeaa1af59a57ee_prof);

        
        $__internal_51692ec9dd82cf42d09a5ad1ae49bfec7ec9883a0e1dd636ccc522984f93d4e9->leave($__internal_51692ec9dd82cf42d09a5ad1ae49bfec7ec9883a0e1dd636ccc522984f93d4e9_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_193bbfefe696c404545184904052c09aeccf28dbbe2691db9a15e4c0ac44cc7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193bbfefe696c404545184904052c09aeccf28dbbe2691db9a15e4c0ac44cc7e->enter($__internal_193bbfefe696c404545184904052c09aeccf28dbbe2691db9a15e4c0ac44cc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fb82550cb3f44be42e5b3d976ac7c040af30f02a21063266bf255dd8ca01f847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb82550cb3f44be42e5b3d976ac7c040af30f02a21063266bf255dd8ca01f847->enter($__internal_fb82550cb3f44be42e5b3d976ac7c040af30f02a21063266bf255dd8ca01f847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#classs_c_title\").focus();
    });    
  </script>
";
        
        $__internal_fb82550cb3f44be42e5b3d976ac7c040af30f02a21063266bf255dd8ca01f847->leave($__internal_fb82550cb3f44be42e5b3d976ac7c040af30f02a21063266bf255dd8ca01f847_prof);

        
        $__internal_193bbfefe696c404545184904052c09aeccf28dbbe2691db9a15e4c0ac44cc7e->leave($__internal_193bbfefe696c404545184904052c09aeccf28dbbe2691db9a15e4c0ac44cc7e_prof);

    }

    public function getTemplateName()
    {
        return "config/configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 46,  71 => 45,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
{{ include('templates/header.html.twig') }}           
{{ include('templates/aside.html.twig') }}            
{% embed \"templates/content_draft.html.twig\" %}
  {% block content %}
  <div class=\"col-lg-6\">
    <section class=\"panel\">
        <header class=\"panel-heading\">
        Update Settings
        {% if not form.vars.valid %}
                <div class=\"alert alert-warning\">
                {{ form_errors(form) }}
                </div>        
              {% endif %}           
        </header>
        <div class=\"panel-body\">
          {{ form_start(form, {'method': 'post', 'action': path('update_config'), 'attr': {'class': '' }} ) }}
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Name</label>
                  {{ form_widget(form.sch_name, {'attr': {'class': 'form-control', 'placeholder': 'School name', 'id': 'school_name' }} ) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Address</label>
                  {{ form_widget(form.address, {'attr': {'class': 'form-control', 'placeholder': 'School Address', 'id': 'school_address' }} ) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Telephone</label>
                  {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder': 'school_telephone', 'id': 'school_name' }} ) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">Results Per Page</label>
                  {{ form_widget(form.results_per_page, {'attr': {'class': 'form-control', 'id': 'results_per_page' }} ) }}
                </div>
              {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary' }} ) }}
            <!-- /.col-lg-6 (nested) -->
          ` {{ form_end(form) }}
        </div>
    </section>
  </div>
{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}
  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#classs_c_title\").focus();
    });    
  </script>
{% endblock %}", "config/configuration.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/config/configuration.html.twig");
    }
}


/* config/configuration.html.twig */
class __TwigTemplate_639b1ac28aa89bd8323217a3199f42ff7834a503e2d71762674f8bdd69e528a5_451842948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "config/configuration.html.twig", 6);
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
        $__internal_15a2af9b9e84b4106e0772759a3c5034525851cc5b6f0339a3055e792923b29b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a2af9b9e84b4106e0772759a3c5034525851cc5b6f0339a3055e792923b29b->enter($__internal_15a2af9b9e84b4106e0772759a3c5034525851cc5b6f0339a3055e792923b29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "config/configuration.html.twig"));

        $__internal_a50450261e7379a4d833ae36cef834ad5aaee130e4713a20330ca803056ce271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50450261e7379a4d833ae36cef834ad5aaee130e4713a20330ca803056ce271->enter($__internal_a50450261e7379a4d833ae36cef834ad5aaee130e4713a20330ca803056ce271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "config/configuration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15a2af9b9e84b4106e0772759a3c5034525851cc5b6f0339a3055e792923b29b->leave($__internal_15a2af9b9e84b4106e0772759a3c5034525851cc5b6f0339a3055e792923b29b_prof);

        
        $__internal_a50450261e7379a4d833ae36cef834ad5aaee130e4713a20330ca803056ce271->leave($__internal_a50450261e7379a4d833ae36cef834ad5aaee130e4713a20330ca803056ce271_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_6add260a5fc1cd8dd66264e1ebfbbe6ef4d11fc532d2241d7b84ed4b32dafcd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6add260a5fc1cd8dd66264e1ebfbbe6ef4d11fc532d2241d7b84ed4b32dafcd8->enter($__internal_6add260a5fc1cd8dd66264e1ebfbbe6ef4d11fc532d2241d7b84ed4b32dafcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c6fa56094ff4d6670a26dfbeb7a53c4fb17002eeb354a1d0f167c34df128ebc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fa56094ff4d6670a26dfbeb7a53c4fb17002eeb354a1d0f167c34df128ebc9->enter($__internal_c6fa56094ff4d6670a26dfbeb7a53c4fb17002eeb354a1d0f167c34df128ebc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "  <div class=\"col-lg-6\">
    <section class=\"panel\">
        <header class=\"panel-heading\">
        Update Settings
        ";
        // line 12
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 13
            echo "                <div class=\"alert alert-warning\">
                ";
            // line 14
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                </div>        
              ";
        }
        // line 16
        echo "           
        </header>
        <div class=\"panel-body\">
          ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_config"), "attr" => array("class" => "")));
        echo "
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Name</label>
                  ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sch_name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "School name", "id" => "school_name")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Address</label>
                  ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "School Address", "id" => "school_address")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Telephone</label>
                  ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "school_telephone", "id" => "school_name")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">Results Per Page</label>
                  ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "results_per_page", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "results_per_page")));
        echo "
                </div>
              ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
            <!-- /.col-lg-6 (nested) -->
          ` ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </section>
  </div>
";
        
        $__internal_c6fa56094ff4d6670a26dfbeb7a53c4fb17002eeb354a1d0f167c34df128ebc9->leave($__internal_c6fa56094ff4d6670a26dfbeb7a53c4fb17002eeb354a1d0f167c34df128ebc9_prof);

        
        $__internal_6add260a5fc1cd8dd66264e1ebfbbe6ef4d11fc532d2241d7b84ed4b32dafcd8->leave($__internal_6add260a5fc1cd8dd66264e1ebfbbe6ef4d11fc532d2241d7b84ed4b32dafcd8_prof);

    }

    public function getTemplateName()
    {
        return "config/configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 38,  274 => 36,  269 => 34,  262 => 30,  255 => 26,  248 => 22,  242 => 19,  237 => 16,  231 => 14,  228 => 13,  226 => 12,  220 => 8,  211 => 7,  182 => 6,  80 => 46,  71 => 45,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
{{ include('templates/header.html.twig') }}           
{{ include('templates/aside.html.twig') }}            
{% embed \"templates/content_draft.html.twig\" %}
  {% block content %}
  <div class=\"col-lg-6\">
    <section class=\"panel\">
        <header class=\"panel-heading\">
        Update Settings
        {% if not form.vars.valid %}
                <div class=\"alert alert-warning\">
                {{ form_errors(form) }}
                </div>        
              {% endif %}           
        </header>
        <div class=\"panel-body\">
          {{ form_start(form, {'method': 'post', 'action': path('update_config'), 'attr': {'class': '' }} ) }}
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Name</label>
                  {{ form_widget(form.sch_name, {'attr': {'class': 'form-control', 'placeholder': 'School name', 'id': 'school_name' }} ) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Address</label>
                  {{ form_widget(form.address, {'attr': {'class': 'form-control', 'placeholder': 'School Address', 'id': 'school_address' }} ) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Telephone</label>
                  {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder': 'school_telephone', 'id': 'school_name' }} ) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">Results Per Page</label>
                  {{ form_widget(form.results_per_page, {'attr': {'class': 'form-control', 'id': 'results_per_page' }} ) }}
                </div>
              {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary' }} ) }}
            <!-- /.col-lg-6 (nested) -->
          ` {{ form_end(form) }}
        </div>
    </section>
  </div>
{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}
  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#classs_c_title\").focus();
    });    
  </script>
{% endblock %}", "config/configuration.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/config/configuration.html.twig");
    }
}
