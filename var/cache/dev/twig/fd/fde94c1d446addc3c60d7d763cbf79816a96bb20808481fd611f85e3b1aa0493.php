<?php

/* student/create.html.twig */
class __TwigTemplate_cedce29c4f7d3b28d94455ff9e62429ccc5dd4fb66d038613371d893a530bd3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/create.html.twig", 1);
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
        $__internal_5ace932a52cecc0369ec62470a68955325495b34e36b2167c6de9370f5ce78b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ace932a52cecc0369ec62470a68955325495b34e36b2167c6de9370f5ce78b5->enter($__internal_5ace932a52cecc0369ec62470a68955325495b34e36b2167c6de9370f5ce78b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/create.html.twig"));

        $__internal_b3ba2d207dd6b8412d0dd831e72f0e07826a336501c06ebd5c2b14b3ebaa205f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ba2d207dd6b8412d0dd831e72f0e07826a336501c06ebd5c2b14b3ebaa205f->enter($__internal_b3ba2d207dd6b8412d0dd831e72f0e07826a336501c06ebd5c2b14b3ebaa205f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ace932a52cecc0369ec62470a68955325495b34e36b2167c6de9370f5ce78b5->leave($__internal_5ace932a52cecc0369ec62470a68955325495b34e36b2167c6de9370f5ce78b5_prof);

        
        $__internal_b3ba2d207dd6b8412d0dd831e72f0e07826a336501c06ebd5c2b14b3ebaa205f->leave($__internal_b3ba2d207dd6b8412d0dd831e72f0e07826a336501c06ebd5c2b14b3ebaa205f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b021d9b50d6509c8a24bd92aed9d39c80d68a8edee0bce8ce602af8f27faa1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b021d9b50d6509c8a24bd92aed9d39c80d68a8edee0bce8ce602af8f27faa1f6->enter($__internal_b021d9b50d6509c8a24bd92aed9d39c80d68a8edee0bce8ce602af8f27faa1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f63b6f6a5872c1e0dfe69c036f76ff26b9dadf13a7aa96340b1536328c58da50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63b6f6a5872c1e0dfe69c036f76ff26b9dadf13a7aa96340b1536328c58da50->enter($__internal_f63b6f6a5872c1e0dfe69c036f76ff26b9dadf13a7aa96340b1536328c58da50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("student/create.html.twig", "student/create.html.twig", 6, "2080222872")->display($context);
        
        $__internal_f63b6f6a5872c1e0dfe69c036f76ff26b9dadf13a7aa96340b1536328c58da50->leave($__internal_f63b6f6a5872c1e0dfe69c036f76ff26b9dadf13a7aa96340b1536328c58da50_prof);

        
        $__internal_b021d9b50d6509c8a24bd92aed9d39c80d68a8edee0bce8ce602af8f27faa1f6->leave($__internal_b021d9b50d6509c8a24bd92aed9d39c80d68a8edee0bce8ce602af8f27faa1f6_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb939f1004ea9512ad93aa0d896524198fd78187894293a962c3b34b87354a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb939f1004ea9512ad93aa0d896524198fd78187894293a962c3b34b87354a5d->enter($__internal_eb939f1004ea9512ad93aa0d896524198fd78187894293a962c3b34b87354a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9532b2b310efc95df2cc5f6246a7e2a3183cfc742663ea4c28f742e8a2474f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9532b2b310efc95df2cc5f6246a7e2a3183cfc742663ea4c28f742e8a2474f17->enter($__internal_9532b2b310efc95df2cc5f6246a7e2a3183cfc742663ea4c28f742e8a2474f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#student_names\").focus();
    });    
  </script>
";
        
        $__internal_9532b2b310efc95df2cc5f6246a7e2a3183cfc742663ea4c28f742e8a2474f17->leave($__internal_9532b2b310efc95df2cc5f6246a7e2a3183cfc742663ea4c28f742e8a2474f17_prof);

        
        $__internal_eb939f1004ea9512ad93aa0d896524198fd78187894293a962c3b34b87354a5d->leave($__internal_eb939f1004ea9512ad93aa0d896524198fd78187894293a962c3b34b87354a5d_prof);

    }

    public function getTemplateName()
    {
        return "student/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 55,  71 => 54,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
\t          Add Student
\t\t\t\t{% if not form.vars.valid %}
\t              <div class=\"alert alert-dangers\">
\t              <p>Please check your entries below</p>
\t              </div>\t\t\t\t
          \t\t{% endif %}\t          
\t      </header>
\t      <div class=\"panel-body\">
\t      \t{% if app.user.classes is not empty %}
\t          {{ form_start(form, {'method': 'post'} ) }}
\t              <div class=\"form-group\">
\t                  <label for=\"student_names\">Full Name</label>
\t                  {{ form_row(form.names, {'attr': {'class': 'form-control', 'placeholder': 'Full Name' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_gender\">Gender</label>
\t                  {{ form_row(form.gender, {'attr': {'class': 'form-control', 'placeholder': 'Gender' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_class\">Class</label>
\t                  {{ form_row(form.class, {'attr': {'class': 'form-control', 'placeholder': 'Class' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_names\">UPI Number</label>
\t                  {{ form_row(form.upi_number, {'attr': {'class': 'form-control', 'placeholder': 'UPI Number' }}) }}
\t              </div>
\t              {{ form_widget(form.saveAndAdd, {'attr': {'class': 'btn btn-info pull-left', 'style': 'margin-right: 5px' }} ) }}
\t              {{ form_row(form.save, {'attr': {'class': 'btn btn-primary pull-left margin-md'}}) }}
\t              <a href=\"{{path('homepage')}}\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"{{path('choose_class')}}\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          {{ form_end(form) }}
\t\t\t{% else %}
\t            <div class=\"well\">
\t              <h4>You need to  <a href=\"{{path('new_class')}}\"> have at least one class </a> to add students </h4>
\t            </div>
            {% endif %}\t      </div>
\t  </section>
\t</div>
\t
{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}
  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#student_names\").focus();
    });    
  </script>
{% endblock %}", "student/create.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/student/create.html.twig");
    }
}


/* student/create.html.twig */
class __TwigTemplate_cedce29c4f7d3b28d94455ff9e62429ccc5dd4fb66d038613371d893a530bd3d_2080222872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "student/create.html.twig", 6);
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
        $__internal_e54c6d02867f947f7a9fe86ca63c7020b039aecf912d13e51dcd1609c6b80f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54c6d02867f947f7a9fe86ca63c7020b039aecf912d13e51dcd1609c6b80f91->enter($__internal_e54c6d02867f947f7a9fe86ca63c7020b039aecf912d13e51dcd1609c6b80f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/create.html.twig"));

        $__internal_44505936e0d4864c06459b740ce0fe42e7c08e09e258fef630f436d381399308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44505936e0d4864c06459b740ce0fe42e7c08e09e258fef630f436d381399308->enter($__internal_44505936e0d4864c06459b740ce0fe42e7c08e09e258fef630f436d381399308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e54c6d02867f947f7a9fe86ca63c7020b039aecf912d13e51dcd1609c6b80f91->leave($__internal_e54c6d02867f947f7a9fe86ca63c7020b039aecf912d13e51dcd1609c6b80f91_prof);

        
        $__internal_44505936e0d4864c06459b740ce0fe42e7c08e09e258fef630f436d381399308->leave($__internal_44505936e0d4864c06459b740ce0fe42e7c08e09e258fef630f436d381399308_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_b6117c0bca30399078f7617924426280f9b8f1f83d107d9e5818beea3026b70f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6117c0bca30399078f7617924426280f9b8f1f83d107d9e5818beea3026b70f->enter($__internal_b6117c0bca30399078f7617924426280f9b8f1f83d107d9e5818beea3026b70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fbf1aa4f1ea68510470a53ba809bc9ab59a061655ba5c6dfcd6c5174c45e3178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf1aa4f1ea68510470a53ba809bc9ab59a061655ba5c6dfcd6c5174c45e3178->enter($__internal_fbf1aa4f1ea68510470a53ba809bc9ab59a061655ba5c6dfcd6c5174c45e3178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Add Student
\t\t\t\t";
        // line 12
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 13
            echo "\t              <div class=\"alert alert-dangers\">
\t              <p>Please check your entries below</p>
\t              </div>\t\t\t\t
          \t\t";
        }
        // line 16
        echo "\t          
\t      </header>
\t      <div class=\"panel-body\">
\t      \t";
        // line 19
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "classes", array()))) {
            // line 20
            echo "\t          ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post"));
            echo "
\t              <div class=\"form-group\">
\t                  <label for=\"student_names\">Full Name</label>
\t                  ";
            // line 23
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "names", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Full Name")));
            echo "
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_gender\">Gender</label>
\t                  ";
            // line 27
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Gender")));
            echo "
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_class\">Class</label>
\t                  ";
            // line 31
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "class", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Class")));
            echo "
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_names\">UPI Number</label>
\t                  ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "upi_number", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "UPI Number")));
            echo "
\t              </div>
\t              ";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "saveAndAdd", array()), 'widget', array("attr" => array("class" => "btn btn-info pull-left", "style" => "margin-right: 5px")));
            echo "
\t              ";
            // line 38
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("class" => "btn btn-primary pull-left margin-md")));
            echo "
\t              <a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("choose_class");
            echo "\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          ";
            // line 42
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
\t\t\t";
        } else {
            // line 44
            echo "\t            <div class=\"well\">
\t              <h4>You need to  <a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_class");
            echo "\"> have at least one class </a> to add students </h4>
\t            </div>
            ";
        }
        // line 47
        echo "\t      </div>
\t  </section>
\t</div>
\t
";
        
        $__internal_fbf1aa4f1ea68510470a53ba809bc9ab59a061655ba5c6dfcd6c5174c45e3178->leave($__internal_fbf1aa4f1ea68510470a53ba809bc9ab59a061655ba5c6dfcd6c5174c45e3178_prof);

        
        $__internal_b6117c0bca30399078f7617924426280f9b8f1f83d107d9e5818beea3026b70f->leave($__internal_b6117c0bca30399078f7617924426280f9b8f1f83d107d9e5818beea3026b70f_prof);

    }

    public function getTemplateName()
    {
        return "student/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 47,  308 => 45,  305 => 44,  300 => 42,  295 => 40,  291 => 39,  287 => 38,  283 => 37,  278 => 35,  271 => 31,  264 => 27,  257 => 23,  250 => 20,  248 => 19,  243 => 16,  237 => 13,  235 => 12,  229 => 8,  220 => 7,  191 => 6,  80 => 55,  71 => 54,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
\t          Add Student
\t\t\t\t{% if not form.vars.valid %}
\t              <div class=\"alert alert-dangers\">
\t              <p>Please check your entries below</p>
\t              </div>\t\t\t\t
          \t\t{% endif %}\t          
\t      </header>
\t      <div class=\"panel-body\">
\t      \t{% if app.user.classes is not empty %}
\t          {{ form_start(form, {'method': 'post'} ) }}
\t              <div class=\"form-group\">
\t                  <label for=\"student_names\">Full Name</label>
\t                  {{ form_row(form.names, {'attr': {'class': 'form-control', 'placeholder': 'Full Name' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_gender\">Gender</label>
\t                  {{ form_row(form.gender, {'attr': {'class': 'form-control', 'placeholder': 'Gender' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_class\">Class</label>
\t                  {{ form_row(form.class, {'attr': {'class': 'form-control', 'placeholder': 'Class' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_names\">UPI Number</label>
\t                  {{ form_row(form.upi_number, {'attr': {'class': 'form-control', 'placeholder': 'UPI Number' }}) }}
\t              </div>
\t              {{ form_widget(form.saveAndAdd, {'attr': {'class': 'btn btn-info pull-left', 'style': 'margin-right: 5px' }} ) }}
\t              {{ form_row(form.save, {'attr': {'class': 'btn btn-primary pull-left margin-md'}}) }}
\t              <a href=\"{{path('homepage')}}\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"{{path('choose_class')}}\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          {{ form_end(form) }}
\t\t\t{% else %}
\t            <div class=\"well\">
\t              <h4>You need to  <a href=\"{{path('new_class')}}\"> have at least one class </a> to add students </h4>
\t            </div>
            {% endif %}\t      </div>
\t  </section>
\t</div>
\t
{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}
  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#student_names\").focus();
    });    
  </script>
{% endblock %}", "student/create.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/student/create.html.twig");
    }
}
