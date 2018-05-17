<?php

/* student/edit.html.twig */
class __TwigTemplate_46ff4b2b94269f236998464783fa177d5b14186f1a9f4f50b98c1f4e7f20bc60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/edit.html.twig", 1);
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
        $__internal_4cb705d5c505bc18871e1ad59a5bfe40cc39b0bd5df105e2ddc1d9f4402bce6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb705d5c505bc18871e1ad59a5bfe40cc39b0bd5df105e2ddc1d9f4402bce6c->enter($__internal_4cb705d5c505bc18871e1ad59a5bfe40cc39b0bd5df105e2ddc1d9f4402bce6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/edit.html.twig"));

        $__internal_f7acc8904e379563f7fb37cbef7e4181e3303c003fb4223b92270da319a28ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7acc8904e379563f7fb37cbef7e4181e3303c003fb4223b92270da319a28ce9->enter($__internal_f7acc8904e379563f7fb37cbef7e4181e3303c003fb4223b92270da319a28ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cb705d5c505bc18871e1ad59a5bfe40cc39b0bd5df105e2ddc1d9f4402bce6c->leave($__internal_4cb705d5c505bc18871e1ad59a5bfe40cc39b0bd5df105e2ddc1d9f4402bce6c_prof);

        
        $__internal_f7acc8904e379563f7fb37cbef7e4181e3303c003fb4223b92270da319a28ce9->leave($__internal_f7acc8904e379563f7fb37cbef7e4181e3303c003fb4223b92270da319a28ce9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ccb407b1e43e6bad23b8a167e36a6e2599d98128981a6d2ee038203132544bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ccb407b1e43e6bad23b8a167e36a6e2599d98128981a6d2ee038203132544bc->enter($__internal_6ccb407b1e43e6bad23b8a167e36a6e2599d98128981a6d2ee038203132544bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1cda4041dbfa881b89be18e872af126ef768756cc15dc54228f22fdc9a23773f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cda4041dbfa881b89be18e872af126ef768756cc15dc54228f22fdc9a23773f->enter($__internal_1cda4041dbfa881b89be18e872af126ef768756cc15dc54228f22fdc9a23773f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("student/edit.html.twig", "student/edit.html.twig", 6, "836417201")->display($context);
        
        $__internal_1cda4041dbfa881b89be18e872af126ef768756cc15dc54228f22fdc9a23773f->leave($__internal_1cda4041dbfa881b89be18e872af126ef768756cc15dc54228f22fdc9a23773f_prof);

        
        $__internal_6ccb407b1e43e6bad23b8a167e36a6e2599d98128981a6d2ee038203132544bc->leave($__internal_6ccb407b1e43e6bad23b8a167e36a6e2599d98128981a6d2ee038203132544bc_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_079d2f673f65c64a576d38e879ff96b4329752c966f8605563b4e658e6f40d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079d2f673f65c64a576d38e879ff96b4329752c966f8605563b4e658e6f40d5d->enter($__internal_079d2f673f65c64a576d38e879ff96b4329752c966f8605563b4e658e6f40d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9a588a013b47d9cbef86b86be068ce54b2e4069dd89d522e27b105e68003f649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a588a013b47d9cbef86b86be068ce54b2e4069dd89d522e27b105e68003f649->enter($__internal_9a588a013b47d9cbef86b86be068ce54b2e4069dd89d522e27b105e68003f649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#student_names\").focus();
    });    
  </script>
";
        
        $__internal_9a588a013b47d9cbef86b86be068ce54b2e4069dd89d522e27b105e68003f649->leave($__internal_9a588a013b47d9cbef86b86be068ce54b2e4069dd89d522e27b105e68003f649_prof);

        
        $__internal_079d2f673f65c64a576d38e879ff96b4329752c966f8605563b4e658e6f40d5d->leave($__internal_079d2f673f65c64a576d38e879ff96b4329752c966f8605563b4e658e6f40d5d_prof);

    }

    public function getTemplateName()
    {
        return "student/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 50,  71 => 49,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
\t          Edit Student Details
\t\t\t\t{% if not form.vars.valid %}
\t              <div class=\"alert alert-warning\">
\t              <p>Please check your entries below</p>
\t              </div>\t\t\t\t
          \t\t{% endif %}\t          
\t      </header>
\t      <div class=\"panel-body\">
\t          {{ form_start(form, {'method': 'post'} ) }}
\t              <div class=\"form-group\">
\t                  <label for=\"student_names\">Name</label>
\t                  {{ form_row(form.names, {'attr': {'class': 'form-control', 'placeholder': 'Full Name' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_gender\">Gender</label>
\t                  {{ form_row(form.gender, {'attr': {'class': 'form-control' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_class\">Class</label>
\t                  {{ form_row(form.class, {'attr': {'class': 'form-control' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_names\">UPI Number</label>
\t                  {{ form_row(form.upi_number, {'attr': {'class': 'form-control', 'placeholder': 'UPI Number' }}) }}
\t              </div>
\t              {{ form_row(form.save, {'attr': {'class': 'btn btn-primary pull-left margin-md', 'style': 'margin-right: 5px'}}) }}
\t              {{ form_widget(form.saveAndAdd, {'attr': {'class': 'btn btn-info pull-left' }} ) }}
\t              <a href=\"{{path('homepage')}}\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"{{path('choose_class')}}\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          {{ form_end(form) }}

\t      </div>
\t  </section>
\t</div>
{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}
  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#student_names\").focus();
    });    
  </script>
{% endblock %}", "student/edit.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/student/edit.html.twig");
    }
}


/* student/edit.html.twig */
class __TwigTemplate_46ff4b2b94269f236998464783fa177d5b14186f1a9f4f50b98c1f4e7f20bc60_836417201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "student/edit.html.twig", 6);
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
        $__internal_def1aeeab015f99238df465fe016f9ec2b4d44e2b1e9987d0f0da70938053002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def1aeeab015f99238df465fe016f9ec2b4d44e2b1e9987d0f0da70938053002->enter($__internal_def1aeeab015f99238df465fe016f9ec2b4d44e2b1e9987d0f0da70938053002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/edit.html.twig"));

        $__internal_c215860bee03a7b42e84081cc2b349b0dcbfa5fb8d51e679f0b55b05c9fd4d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c215860bee03a7b42e84081cc2b349b0dcbfa5fb8d51e679f0b55b05c9fd4d06->enter($__internal_c215860bee03a7b42e84081cc2b349b0dcbfa5fb8d51e679f0b55b05c9fd4d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_def1aeeab015f99238df465fe016f9ec2b4d44e2b1e9987d0f0da70938053002->leave($__internal_def1aeeab015f99238df465fe016f9ec2b4d44e2b1e9987d0f0da70938053002_prof);

        
        $__internal_c215860bee03a7b42e84081cc2b349b0dcbfa5fb8d51e679f0b55b05c9fd4d06->leave($__internal_c215860bee03a7b42e84081cc2b349b0dcbfa5fb8d51e679f0b55b05c9fd4d06_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_55583e4cd86434770b4af2266df148e63712620b9deccf6ee4d99ba69b88e1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55583e4cd86434770b4af2266df148e63712620b9deccf6ee4d99ba69b88e1c9->enter($__internal_55583e4cd86434770b4af2266df148e63712620b9deccf6ee4d99ba69b88e1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9b09fa075c0580f55ca74abe899d3556cf2f7af69b5b9f41ef1a555b7e6d75fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b09fa075c0580f55ca74abe899d3556cf2f7af69b5b9f41ef1a555b7e6d75fa->enter($__internal_9b09fa075c0580f55ca74abe899d3556cf2f7af69b5b9f41ef1a555b7e6d75fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Edit Student Details
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
\t                  <label for=\"student_names\">Name</label>
\t                  ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "names", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Full Name")));
        echo "
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_gender\">Gender</label>
\t                  ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gender", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_class\">Class</label>
\t                  ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "class", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_names\">UPI Number</label>
\t                  ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "upi_number", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "UPI Number")));
        echo "
\t              </div>
\t              ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("class" => "btn btn-primary pull-left margin-md", "style" => "margin-right: 5px")));
        echo "
\t              ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "saveAndAdd", array()), 'widget', array("attr" => array("class" => "btn btn-info pull-left")));
        echo "
\t              <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("choose_class");
        echo "\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

\t      </div>
\t  </section>
\t</div>
";
        
        $__internal_9b09fa075c0580f55ca74abe899d3556cf2f7af69b5b9f41ef1a555b7e6d75fa->leave($__internal_9b09fa075c0580f55ca74abe899d3556cf2f7af69b5b9f41ef1a555b7e6d75fa_prof);

        
        $__internal_55583e4cd86434770b4af2266df148e63712620b9deccf6ee4d99ba69b88e1c9->leave($__internal_55583e4cd86434770b4af2266df148e63712620b9deccf6ee4d99ba69b88e1c9_prof);

    }

    public function getTemplateName()
    {
        return "student/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 41,  287 => 39,  283 => 38,  279 => 37,  275 => 36,  270 => 34,  263 => 30,  256 => 26,  249 => 22,  243 => 19,  238 => 16,  232 => 13,  230 => 12,  224 => 8,  215 => 7,  186 => 6,  80 => 50,  71 => 49,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
\t          Edit Student Details
\t\t\t\t{% if not form.vars.valid %}
\t              <div class=\"alert alert-warning\">
\t              <p>Please check your entries below</p>
\t              </div>\t\t\t\t
          \t\t{% endif %}\t          
\t      </header>
\t      <div class=\"panel-body\">
\t          {{ form_start(form, {'method': 'post'} ) }}
\t              <div class=\"form-group\">
\t                  <label for=\"student_names\">Name</label>
\t                  {{ form_row(form.names, {'attr': {'class': 'form-control', 'placeholder': 'Full Name' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_gender\">Gender</label>
\t                  {{ form_row(form.gender, {'attr': {'class': 'form-control' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_class\">Class</label>
\t                  {{ form_row(form.class, {'attr': {'class': 'form-control' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"student_names\">UPI Number</label>
\t                  {{ form_row(form.upi_number, {'attr': {'class': 'form-control', 'placeholder': 'UPI Number' }}) }}
\t              </div>
\t              {{ form_row(form.save, {'attr': {'class': 'btn btn-primary pull-left margin-md', 'style': 'margin-right: 5px'}}) }}
\t              {{ form_widget(form.saveAndAdd, {'attr': {'class': 'btn btn-info pull-left' }} ) }}
\t              <a href=\"{{path('homepage')}}\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"{{path('choose_class')}}\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          {{ form_end(form) }}

\t      </div>
\t  </section>
\t</div>
{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}
  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#student_names\").focus();
    });    
  </script>
{% endblock %}", "student/edit.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/student/edit.html.twig");
    }
}
