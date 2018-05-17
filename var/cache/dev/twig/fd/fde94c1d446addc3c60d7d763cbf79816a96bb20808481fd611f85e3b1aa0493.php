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
        $__internal_16abe216244ea4dcb16f84aa1e74f0796a95b1ced5ff57525741355e7740b722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16abe216244ea4dcb16f84aa1e74f0796a95b1ced5ff57525741355e7740b722->enter($__internal_16abe216244ea4dcb16f84aa1e74f0796a95b1ced5ff57525741355e7740b722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/create.html.twig"));

        $__internal_d118c8af66681d1e12fdc4a25ef371d38d4ef860aa79b8e080f0a7450d8d1fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d118c8af66681d1e12fdc4a25ef371d38d4ef860aa79b8e080f0a7450d8d1fe1->enter($__internal_d118c8af66681d1e12fdc4a25ef371d38d4ef860aa79b8e080f0a7450d8d1fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16abe216244ea4dcb16f84aa1e74f0796a95b1ced5ff57525741355e7740b722->leave($__internal_16abe216244ea4dcb16f84aa1e74f0796a95b1ced5ff57525741355e7740b722_prof);

        
        $__internal_d118c8af66681d1e12fdc4a25ef371d38d4ef860aa79b8e080f0a7450d8d1fe1->leave($__internal_d118c8af66681d1e12fdc4a25ef371d38d4ef860aa79b8e080f0a7450d8d1fe1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2eaa4c50b82c0bf48b6c1fa9ae1b82d0721952b03387baf3534c24e16c0a615a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eaa4c50b82c0bf48b6c1fa9ae1b82d0721952b03387baf3534c24e16c0a615a->enter($__internal_2eaa4c50b82c0bf48b6c1fa9ae1b82d0721952b03387baf3534c24e16c0a615a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45d5e631b262b95e9a2f0e6fc140318188bc85fb9417ea0b7521decd566fb45c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d5e631b262b95e9a2f0e6fc140318188bc85fb9417ea0b7521decd566fb45c->enter($__internal_45d5e631b262b95e9a2f0e6fc140318188bc85fb9417ea0b7521decd566fb45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("student/create.html.twig", "student/create.html.twig", 6, "1025351474")->display($context);
        
        $__internal_45d5e631b262b95e9a2f0e6fc140318188bc85fb9417ea0b7521decd566fb45c->leave($__internal_45d5e631b262b95e9a2f0e6fc140318188bc85fb9417ea0b7521decd566fb45c_prof);

        
        $__internal_2eaa4c50b82c0bf48b6c1fa9ae1b82d0721952b03387baf3534c24e16c0a615a->leave($__internal_2eaa4c50b82c0bf48b6c1fa9ae1b82d0721952b03387baf3534c24e16c0a615a_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65390eb0c285be98fef8551060bc1adc0e4c20f41e8336c552ec913b7a85f01d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65390eb0c285be98fef8551060bc1adc0e4c20f41e8336c552ec913b7a85f01d->enter($__internal_65390eb0c285be98fef8551060bc1adc0e4c20f41e8336c552ec913b7a85f01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9fc54ad2108e90bf4120881838ea19f77129994ef521a3a6c9a5c0a0b14795ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc54ad2108e90bf4120881838ea19f77129994ef521a3a6c9a5c0a0b14795ce->enter($__internal_9fc54ad2108e90bf4120881838ea19f77129994ef521a3a6c9a5c0a0b14795ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#student_names\").focus();
    });    
  </script>
";
        
        $__internal_9fc54ad2108e90bf4120881838ea19f77129994ef521a3a6c9a5c0a0b14795ce->leave($__internal_9fc54ad2108e90bf4120881838ea19f77129994ef521a3a6c9a5c0a0b14795ce_prof);

        
        $__internal_65390eb0c285be98fef8551060bc1adc0e4c20f41e8336c552ec913b7a85f01d->leave($__internal_65390eb0c285be98fef8551060bc1adc0e4c20f41e8336c552ec913b7a85f01d_prof);

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
class __TwigTemplate_cedce29c4f7d3b28d94455ff9e62429ccc5dd4fb66d038613371d893a530bd3d_1025351474 extends Twig_Template
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
        $__internal_d7abc4ca9a847a9b3fe04a33a24981f3e27f0926c7002f75b1d43f0b4e07d220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7abc4ca9a847a9b3fe04a33a24981f3e27f0926c7002f75b1d43f0b4e07d220->enter($__internal_d7abc4ca9a847a9b3fe04a33a24981f3e27f0926c7002f75b1d43f0b4e07d220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/create.html.twig"));

        $__internal_9fc6ed358416adcdc0ebf09d5974eab43338076ab99b9613c1b3dd2bf0b788eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc6ed358416adcdc0ebf09d5974eab43338076ab99b9613c1b3dd2bf0b788eb->enter($__internal_9fc6ed358416adcdc0ebf09d5974eab43338076ab99b9613c1b3dd2bf0b788eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7abc4ca9a847a9b3fe04a33a24981f3e27f0926c7002f75b1d43f0b4e07d220->leave($__internal_d7abc4ca9a847a9b3fe04a33a24981f3e27f0926c7002f75b1d43f0b4e07d220_prof);

        
        $__internal_9fc6ed358416adcdc0ebf09d5974eab43338076ab99b9613c1b3dd2bf0b788eb->leave($__internal_9fc6ed358416adcdc0ebf09d5974eab43338076ab99b9613c1b3dd2bf0b788eb_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_3301373c2cecaaa2e115c720daaefc761f0c7b3aab454ed5b3077664f50d9937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3301373c2cecaaa2e115c720daaefc761f0c7b3aab454ed5b3077664f50d9937->enter($__internal_3301373c2cecaaa2e115c720daaefc761f0c7b3aab454ed5b3077664f50d9937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_888761d4eba70a213756d52a600b23aee794bcb57d49899dd2f20bb8621aad46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888761d4eba70a213756d52a600b23aee794bcb57d49899dd2f20bb8621aad46->enter($__internal_888761d4eba70a213756d52a600b23aee794bcb57d49899dd2f20bb8621aad46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_888761d4eba70a213756d52a600b23aee794bcb57d49899dd2f20bb8621aad46->leave($__internal_888761d4eba70a213756d52a600b23aee794bcb57d49899dd2f20bb8621aad46_prof);

        
        $__internal_3301373c2cecaaa2e115c720daaefc761f0c7b3aab454ed5b3077664f50d9937->leave($__internal_3301373c2cecaaa2e115c720daaefc761f0c7b3aab454ed5b3077664f50d9937_prof);

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
