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
        $__internal_044a19fe3788c6eefe362843d20040814f8e6b05eb825cbc8e474f8d16435684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044a19fe3788c6eefe362843d20040814f8e6b05eb825cbc8e474f8d16435684->enter($__internal_044a19fe3788c6eefe362843d20040814f8e6b05eb825cbc8e474f8d16435684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/create.html.twig"));

        $__internal_583b9f0940b176b1b63784446e6822bf63e96c2100342b07ad9c998f8bf0ea25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583b9f0940b176b1b63784446e6822bf63e96c2100342b07ad9c998f8bf0ea25->enter($__internal_583b9f0940b176b1b63784446e6822bf63e96c2100342b07ad9c998f8bf0ea25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_044a19fe3788c6eefe362843d20040814f8e6b05eb825cbc8e474f8d16435684->leave($__internal_044a19fe3788c6eefe362843d20040814f8e6b05eb825cbc8e474f8d16435684_prof);

        
        $__internal_583b9f0940b176b1b63784446e6822bf63e96c2100342b07ad9c998f8bf0ea25->leave($__internal_583b9f0940b176b1b63784446e6822bf63e96c2100342b07ad9c998f8bf0ea25_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ebea9effe50c34c60d6a70bcce67d887d38b6b502150f1a30a589077f04f92a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ebea9effe50c34c60d6a70bcce67d887d38b6b502150f1a30a589077f04f92a->enter($__internal_5ebea9effe50c34c60d6a70bcce67d887d38b6b502150f1a30a589077f04f92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91d2f998e3595707cf19c07a48e6525f34d8f172703c148b122167cc87c1de4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d2f998e3595707cf19c07a48e6525f34d8f172703c148b122167cc87c1de4b->enter($__internal_91d2f998e3595707cf19c07a48e6525f34d8f172703c148b122167cc87c1de4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("student/create.html.twig", "student/create.html.twig", 6, "1844763374")->display($context);
        
        $__internal_91d2f998e3595707cf19c07a48e6525f34d8f172703c148b122167cc87c1de4b->leave($__internal_91d2f998e3595707cf19c07a48e6525f34d8f172703c148b122167cc87c1de4b_prof);

        
        $__internal_5ebea9effe50c34c60d6a70bcce67d887d38b6b502150f1a30a589077f04f92a->leave($__internal_5ebea9effe50c34c60d6a70bcce67d887d38b6b502150f1a30a589077f04f92a_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bdb98483b3cffd756e2b98a10d2c80e0450a8e082fdd0f116133a949ab68b9ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb98483b3cffd756e2b98a10d2c80e0450a8e082fdd0f116133a949ab68b9ec->enter($__internal_bdb98483b3cffd756e2b98a10d2c80e0450a8e082fdd0f116133a949ab68b9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1b5a81a07b176b0c6afb0ecd5c26584b9c160b8822492d11628b08df8f3d5704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5a81a07b176b0c6afb0ecd5c26584b9c160b8822492d11628b08df8f3d5704->enter($__internal_1b5a81a07b176b0c6afb0ecd5c26584b9c160b8822492d11628b08df8f3d5704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#student_names\").focus();
    });    
  </script>
";
        
        $__internal_1b5a81a07b176b0c6afb0ecd5c26584b9c160b8822492d11628b08df8f3d5704->leave($__internal_1b5a81a07b176b0c6afb0ecd5c26584b9c160b8822492d11628b08df8f3d5704_prof);

        
        $__internal_bdb98483b3cffd756e2b98a10d2c80e0450a8e082fdd0f116133a949ab68b9ec->leave($__internal_bdb98483b3cffd756e2b98a10d2c80e0450a8e082fdd0f116133a949ab68b9ec_prof);

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
class __TwigTemplate_cedce29c4f7d3b28d94455ff9e62429ccc5dd4fb66d038613371d893a530bd3d_1844763374 extends Twig_Template
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
        $__internal_cca87201d18319a421cd7edf44374e2dc7300ba44ee93e84a12e3a385bdf7087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca87201d18319a421cd7edf44374e2dc7300ba44ee93e84a12e3a385bdf7087->enter($__internal_cca87201d18319a421cd7edf44374e2dc7300ba44ee93e84a12e3a385bdf7087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/create.html.twig"));

        $__internal_0467a8fd00da3b35c7a7a8dfbbb1d1b08a87095dbf461105fc6098b0e21ff33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0467a8fd00da3b35c7a7a8dfbbb1d1b08a87095dbf461105fc6098b0e21ff33c->enter($__internal_0467a8fd00da3b35c7a7a8dfbbb1d1b08a87095dbf461105fc6098b0e21ff33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cca87201d18319a421cd7edf44374e2dc7300ba44ee93e84a12e3a385bdf7087->leave($__internal_cca87201d18319a421cd7edf44374e2dc7300ba44ee93e84a12e3a385bdf7087_prof);

        
        $__internal_0467a8fd00da3b35c7a7a8dfbbb1d1b08a87095dbf461105fc6098b0e21ff33c->leave($__internal_0467a8fd00da3b35c7a7a8dfbbb1d1b08a87095dbf461105fc6098b0e21ff33c_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_19f1d00394dcda3bda2af0f61d8fc1c5e73c9162f4a1d6e8a3f1f881f7d9bf2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f1d00394dcda3bda2af0f61d8fc1c5e73c9162f4a1d6e8a3f1f881f7d9bf2f->enter($__internal_19f1d00394dcda3bda2af0f61d8fc1c5e73c9162f4a1d6e8a3f1f881f7d9bf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_df61d7cdfc44700ed17d4634a84c420fb10c725728405ff62b0eb7c7ca0583eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df61d7cdfc44700ed17d4634a84c420fb10c725728405ff62b0eb7c7ca0583eb->enter($__internal_df61d7cdfc44700ed17d4634a84c420fb10c725728405ff62b0eb7c7ca0583eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_df61d7cdfc44700ed17d4634a84c420fb10c725728405ff62b0eb7c7ca0583eb->leave($__internal_df61d7cdfc44700ed17d4634a84c420fb10c725728405ff62b0eb7c7ca0583eb_prof);

        
        $__internal_19f1d00394dcda3bda2af0f61d8fc1c5e73c9162f4a1d6e8a3f1f881f7d9bf2f->leave($__internal_19f1d00394dcda3bda2af0f61d8fc1c5e73c9162f4a1d6e8a3f1f881f7d9bf2f_prof);

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
