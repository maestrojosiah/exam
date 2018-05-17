<?php

/* examCompany/create.html.twig */
class __TwigTemplate_c7253daff50689e25f0bbe9bc7af71698bb74b04b8e89c6d24fe6be72f038290 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "examCompany/create.html.twig", 1);
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
        $__internal_a264f9013823dc6735b08424af95c7fdeb8b876f78dda8ad7405c6cde48e5047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a264f9013823dc6735b08424af95c7fdeb8b876f78dda8ad7405c6cde48e5047->enter($__internal_a264f9013823dc6735b08424af95c7fdeb8b876f78dda8ad7405c6cde48e5047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/create.html.twig"));

        $__internal_5d62c1200445bacdd2780bfb3a5b1fde6b5c27b3d44012b72dac5bb0773dee2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d62c1200445bacdd2780bfb3a5b1fde6b5c27b3d44012b72dac5bb0773dee2a->enter($__internal_5d62c1200445bacdd2780bfb3a5b1fde6b5c27b3d44012b72dac5bb0773dee2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a264f9013823dc6735b08424af95c7fdeb8b876f78dda8ad7405c6cde48e5047->leave($__internal_a264f9013823dc6735b08424af95c7fdeb8b876f78dda8ad7405c6cde48e5047_prof);

        
        $__internal_5d62c1200445bacdd2780bfb3a5b1fde6b5c27b3d44012b72dac5bb0773dee2a->leave($__internal_5d62c1200445bacdd2780bfb3a5b1fde6b5c27b3d44012b72dac5bb0773dee2a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fd15422a2a53a721a1bcdd343e8c8fc313d09fffd4d88d71fdc07cfe0b68c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd15422a2a53a721a1bcdd343e8c8fc313d09fffd4d88d71fdc07cfe0b68c7d->enter($__internal_6fd15422a2a53a721a1bcdd343e8c8fc313d09fffd4d88d71fdc07cfe0b68c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7eac361cb2f0333117840eb5421c57a8674c3160a901d3fbd3e7cf5af188c311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eac361cb2f0333117840eb5421c57a8674c3160a901d3fbd3e7cf5af188c311->enter($__internal_7eac361cb2f0333117840eb5421c57a8674c3160a901d3fbd3e7cf5af188c311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("examCompany/create.html.twig", "examCompany/create.html.twig", 6, "503938471")->display($context);
        
        $__internal_7eac361cb2f0333117840eb5421c57a8674c3160a901d3fbd3e7cf5af188c311->leave($__internal_7eac361cb2f0333117840eb5421c57a8674c3160a901d3fbd3e7cf5af188c311_prof);

        
        $__internal_6fd15422a2a53a721a1bcdd343e8c8fc313d09fffd4d88d71fdc07cfe0b68c7d->leave($__internal_6fd15422a2a53a721a1bcdd343e8c8fc313d09fffd4d88d71fdc07cfe0b68c7d_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_37b61185e5ed3edcd146bc0893df61ffa537b559ee05568edb2428e96642b671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b61185e5ed3edcd146bc0893df61ffa537b559ee05568edb2428e96642b671->enter($__internal_37b61185e5ed3edcd146bc0893df61ffa537b559ee05568edb2428e96642b671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_786c4e62a2320c0bcfa8cde7345715205495061b19b8efa25e8c90e956f226ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786c4e62a2320c0bcfa8cde7345715205495061b19b8efa25e8c90e956f226ef->enter($__internal_786c4e62a2320c0bcfa8cde7345715205495061b19b8efa25e8c90e956f226ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#exam_company_c_title\").focus();
    });    
  </script>
";
        
        $__internal_786c4e62a2320c0bcfa8cde7345715205495061b19b8efa25e8c90e956f226ef->leave($__internal_786c4e62a2320c0bcfa8cde7345715205495061b19b8efa25e8c90e956f226ef_prof);

        
        $__internal_37b61185e5ed3edcd146bc0893df61ffa537b559ee05568edb2428e96642b671->leave($__internal_37b61185e5ed3edcd146bc0893df61ffa537b559ee05568edb2428e96642b671_prof);

    }

    public function getTemplateName()
    {
        return "examCompany/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 66,  71 => 65,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
\t          Add Exam
\t\t\t\t{% if not form.vars.valid %}
\t              <div class=\"alert alert-warning\">
\t              <p>Please check your entries below</p>
\t              </div>\t\t\t\t
          \t\t{% endif %}\t          
\t      </header>
\t      <div class=\"panel-body\">
\t      \t{% if app.user.classes is not empty %}
\t          {{ form_start(form, {'method': 'post'} ) }}
\t              <div class=\"form-group\">
\t                  <label for=\"exam_company_c_title\">Exam Company Title</label>
\t                  {{ form_row(form.c_title, {'attr': {'class': 'form-control', 'placeholder': 'Exam Title' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"exam_company_class\">Class</label>
\t                  {{ form_row(form.class, {'attr': {'class': 'form-control' }}) }}
\t              </div>
\t              {{ form_widget(form.saveAndAdd, {'attr': {'class': 'btn btn-info pull-left', 'style': 'margin-right: 5px' }} ) }}
\t              {{ form_row(form.save, {'attr': {'class': 'btn btn-primary pull-left margin-md'}}) }}
\t              <a href=\"{{path('homepage')}}\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"{{path('list_examCompanies')}}\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          {{ form_end(form) }}
\t\t\t{% else %}
\t            <div class=\"well\">
\t              <h4>You need to  <a href=\"{{path('new_class')}}\"> have at least one class </a> to add an exam </h4>
\t            </div>
            {% endif %}\t      
\t      </div>
\t  </section>
\t</div>
\t\t{% if app.user.examCompanies is not empty %}
\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Added Exams
\t      </header>
\t      <div class=\"panel-body\">
\t\t\t<p>
\t\t\t\t<ol>
\t\t\t\t\t{% for exam in app.user.examCompanies %}
\t\t\t\t\t\t<li>{{exam.cTitle}} [{{exam.class.cTitle}}]</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ol>
\t\t\t</p>
\t      </div>
\t  </section>
\t</div>
\t{% endif %}

{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}
  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#exam_company_c_title\").focus();
    });    
  </script>
{% endblock %}", "examCompany/create.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/examCompany/create.html.twig");
    }
}


/* examCompany/create.html.twig */
class __TwigTemplate_c7253daff50689e25f0bbe9bc7af71698bb74b04b8e89c6d24fe6be72f038290_503938471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "examCompany/create.html.twig", 6);
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
        $__internal_c54f91e82daebf47ec9f9ab32bdb0bd4a496a1e7ac5a5bc7d4064aa8e96910dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c54f91e82daebf47ec9f9ab32bdb0bd4a496a1e7ac5a5bc7d4064aa8e96910dc->enter($__internal_c54f91e82daebf47ec9f9ab32bdb0bd4a496a1e7ac5a5bc7d4064aa8e96910dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/create.html.twig"));

        $__internal_9f0ee01c90b682dd26e3b83f243d385a64f4cd173232c1d64a99acecba4f054e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0ee01c90b682dd26e3b83f243d385a64f4cd173232c1d64a99acecba4f054e->enter($__internal_9f0ee01c90b682dd26e3b83f243d385a64f4cd173232c1d64a99acecba4f054e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c54f91e82daebf47ec9f9ab32bdb0bd4a496a1e7ac5a5bc7d4064aa8e96910dc->leave($__internal_c54f91e82daebf47ec9f9ab32bdb0bd4a496a1e7ac5a5bc7d4064aa8e96910dc_prof);

        
        $__internal_9f0ee01c90b682dd26e3b83f243d385a64f4cd173232c1d64a99acecba4f054e->leave($__internal_9f0ee01c90b682dd26e3b83f243d385a64f4cd173232c1d64a99acecba4f054e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_652f37067adecc94954d83eec24c5644484e983b6f0f478fc8894986710312db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_652f37067adecc94954d83eec24c5644484e983b6f0f478fc8894986710312db->enter($__internal_652f37067adecc94954d83eec24c5644484e983b6f0f478fc8894986710312db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5cac3365fdeb26917beebecf6c8f35c1ab6dd06e30cc65113425f75d429d09fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cac3365fdeb26917beebecf6c8f35c1ab6dd06e30cc65113425f75d429d09fb->enter($__internal_5cac3365fdeb26917beebecf6c8f35c1ab6dd06e30cc65113425f75d429d09fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Add Exam
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
\t      \t";
        // line 19
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "classes", array()))) {
            // line 20
            echo "\t          ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post"));
            echo "
\t              <div class=\"form-group\">
\t                  <label for=\"exam_company_c_title\">Exam Company Title</label>
\t                  ";
            // line 23
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "c_title", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Exam Title")));
            echo "
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"exam_company_class\">Class</label>
\t                  ";
            // line 27
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "class", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t              </div>
\t              ";
            // line 29
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "saveAndAdd", array()), 'widget', array("attr" => array("class" => "btn btn-info pull-left", "style" => "margin-right: 5px")));
            echo "
\t              ";
            // line 30
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("class" => "btn btn-primary pull-left margin-md")));
            echo "
\t              <a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_examCompanies");
            echo "\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          ";
            // line 34
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
\t\t\t";
        } else {
            // line 36
            echo "\t            <div class=\"well\">
\t              <h4>You need to  <a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_class");
            echo "\"> have at least one class </a> to add an exam </h4>
\t            </div>
            ";
        }
        // line 39
        echo "\t      
\t      </div>
\t  </section>
\t</div>
\t\t";
        // line 43
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "examCompanies", array()))) {
            // line 44
            echo "\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Added Exams
\t      </header>
\t      <div class=\"panel-body\">
\t\t\t<p>
\t\t\t\t<ol>
\t\t\t\t\t";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "examCompanies", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
                // line 53
                echo "\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["exam"], "cTitle", array()), "html", null, true);
                echo " [";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["exam"], "class", array()), "cTitle", array()), "html", null, true);
                echo "]</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t\t</ol>
\t\t\t</p>
\t      </div>
\t  </section>
\t</div>
\t";
        }
        // line 61
        echo "
";
        
        $__internal_5cac3365fdeb26917beebecf6c8f35c1ab6dd06e30cc65113425f75d429d09fb->leave($__internal_5cac3365fdeb26917beebecf6c8f35c1ab6dd06e30cc65113425f75d429d09fb_prof);

        
        $__internal_652f37067adecc94954d83eec24c5644484e983b6f0f478fc8894986710312db->leave($__internal_652f37067adecc94954d83eec24c5644484e983b6f0f478fc8894986710312db_prof);

    }

    public function getTemplateName()
    {
        return "examCompany/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 61,  344 => 55,  333 => 53,  329 => 52,  319 => 44,  317 => 43,  311 => 39,  305 => 37,  302 => 36,  297 => 34,  292 => 32,  288 => 31,  284 => 30,  280 => 29,  275 => 27,  268 => 23,  261 => 20,  259 => 19,  254 => 16,  248 => 13,  246 => 12,  240 => 8,  231 => 7,  202 => 6,  80 => 66,  71 => 65,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
\t          Add Exam
\t\t\t\t{% if not form.vars.valid %}
\t              <div class=\"alert alert-warning\">
\t              <p>Please check your entries below</p>
\t              </div>\t\t\t\t
          \t\t{% endif %}\t          
\t      </header>
\t      <div class=\"panel-body\">
\t      \t{% if app.user.classes is not empty %}
\t          {{ form_start(form, {'method': 'post'} ) }}
\t              <div class=\"form-group\">
\t                  <label for=\"exam_company_c_title\">Exam Company Title</label>
\t                  {{ form_row(form.c_title, {'attr': {'class': 'form-control', 'placeholder': 'Exam Title' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"exam_company_class\">Class</label>
\t                  {{ form_row(form.class, {'attr': {'class': 'form-control' }}) }}
\t              </div>
\t              {{ form_widget(form.saveAndAdd, {'attr': {'class': 'btn btn-info pull-left', 'style': 'margin-right: 5px' }} ) }}
\t              {{ form_row(form.save, {'attr': {'class': 'btn btn-primary pull-left margin-md'}}) }}
\t              <a href=\"{{path('homepage')}}\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"{{path('list_examCompanies')}}\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          {{ form_end(form) }}
\t\t\t{% else %}
\t            <div class=\"well\">
\t              <h4>You need to  <a href=\"{{path('new_class')}}\"> have at least one class </a> to add an exam </h4>
\t            </div>
            {% endif %}\t      
\t      </div>
\t  </section>
\t</div>
\t\t{% if app.user.examCompanies is not empty %}
\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Added Exams
\t      </header>
\t      <div class=\"panel-body\">
\t\t\t<p>
\t\t\t\t<ol>
\t\t\t\t\t{% for exam in app.user.examCompanies %}
\t\t\t\t\t\t<li>{{exam.cTitle}} [{{exam.class.cTitle}}]</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ol>
\t\t\t</p>
\t      </div>
\t  </section>
\t</div>
\t{% endif %}

{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}
  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#exam_company_c_title\").focus();
    });    
  </script>
{% endblock %}", "examCompany/create.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/examCompany/create.html.twig");
    }
}
