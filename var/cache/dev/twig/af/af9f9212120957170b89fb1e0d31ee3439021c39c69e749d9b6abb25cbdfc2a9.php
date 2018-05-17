<?php

/* class/create.html.twig */
class __TwigTemplate_769880612f2d21f6e51bdc9def84d7e802fc7d5de070d3c9a162b4086040c054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "class/create.html.twig", 1);
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
        $__internal_85596553e667463f4d0abaa9e1b3e2fb40b73089b112d8e57357cebc9af048b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85596553e667463f4d0abaa9e1b3e2fb40b73089b112d8e57357cebc9af048b9->enter($__internal_85596553e667463f4d0abaa9e1b3e2fb40b73089b112d8e57357cebc9af048b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/create.html.twig"));

        $__internal_b0d7a9b0af6892fba68c567977e49ab612928c2fc9d44052477a43d482a34cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d7a9b0af6892fba68c567977e49ab612928c2fc9d44052477a43d482a34cc7->enter($__internal_b0d7a9b0af6892fba68c567977e49ab612928c2fc9d44052477a43d482a34cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85596553e667463f4d0abaa9e1b3e2fb40b73089b112d8e57357cebc9af048b9->leave($__internal_85596553e667463f4d0abaa9e1b3e2fb40b73089b112d8e57357cebc9af048b9_prof);

        
        $__internal_b0d7a9b0af6892fba68c567977e49ab612928c2fc9d44052477a43d482a34cc7->leave($__internal_b0d7a9b0af6892fba68c567977e49ab612928c2fc9d44052477a43d482a34cc7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_260587c1a9fa3c0779f115099eacb2332462ace4e7c927e7d9048178fb02939c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_260587c1a9fa3c0779f115099eacb2332462ace4e7c927e7d9048178fb02939c->enter($__internal_260587c1a9fa3c0779f115099eacb2332462ace4e7c927e7d9048178fb02939c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38425948bde5d3e12bd50d7f3a634de77884a469f1e3dfbdc95b59f6d8b4ac5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38425948bde5d3e12bd50d7f3a634de77884a469f1e3dfbdc95b59f6d8b4ac5f->enter($__internal_38425948bde5d3e12bd50d7f3a634de77884a469f1e3dfbdc95b59f6d8b4ac5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("class/create.html.twig", "class/create.html.twig", 6, "1444658890")->display($context);
        
        $__internal_38425948bde5d3e12bd50d7f3a634de77884a469f1e3dfbdc95b59f6d8b4ac5f->leave($__internal_38425948bde5d3e12bd50d7f3a634de77884a469f1e3dfbdc95b59f6d8b4ac5f_prof);

        
        $__internal_260587c1a9fa3c0779f115099eacb2332462ace4e7c927e7d9048178fb02939c->leave($__internal_260587c1a9fa3c0779f115099eacb2332462ace4e7c927e7d9048178fb02939c_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4568a552f03cf7833bec6874d7b15c9de3476e5890e4c3508bc172af5ae2e4d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4568a552f03cf7833bec6874d7b15c9de3476e5890e4c3508bc172af5ae2e4d7->enter($__internal_4568a552f03cf7833bec6874d7b15c9de3476e5890e4c3508bc172af5ae2e4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_402a90bcd0cfc267c3c88213087d8a9b1b6491a5ee5976480d8d8de1cc8e4c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402a90bcd0cfc267c3c88213087d8a9b1b6491a5ee5976480d8d8de1cc8e4c27->enter($__internal_402a90bcd0cfc267c3c88213087d8a9b1b6491a5ee5976480d8d8de1cc8e4c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#classs_c_title\").focus();
    });    
  </script>
";
        
        $__internal_402a90bcd0cfc267c3c88213087d8a9b1b6491a5ee5976480d8d8de1cc8e4c27->leave($__internal_402a90bcd0cfc267c3c88213087d8a9b1b6491a5ee5976480d8d8de1cc8e4c27_prof);

        
        $__internal_4568a552f03cf7833bec6874d7b15c9de3476e5890e4c3508bc172af5ae2e4d7->leave($__internal_4568a552f03cf7833bec6874d7b15c9de3476e5890e4c3508bc172af5ae2e4d7_prof);

    }

    public function getTemplateName()
    {
        return "class/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 61,  71 => 60,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
\t          Add Class
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
\t              {{ form_widget(form.saveAndAdd, {'attr': {'class': 'btn btn-info pull-left', 'style': 'margin-right: 5px' }} ) }}
\t              {{ form_row(form.save, {'attr': {'class': 'btn btn-primary pull-left margin-md'}}) }}
\t              <a href=\"{{path('homepage')}}\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"{{path('list_classes')}}\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          {{ form_end(form) }}

\t      </div>
\t  </section>
\t</div>
\t{% if app.user.classes is not empty %}
\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Added Classes
\t      </header>
\t      <div class=\"panel-body\">
\t\t\t<p>
\t\t\t\t<ol>
\t\t\t\t\t{% for class in app.user.classes %}
\t\t\t\t\t\t<li>{{class.cTitle}}</li>
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
      \$(\"#classs_c_title\").focus();
    });    
  </script>
{% endblock %}", "class/create.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/class/create.html.twig");
    }
}


/* class/create.html.twig */
class __TwigTemplate_769880612f2d21f6e51bdc9def84d7e802fc7d5de070d3c9a162b4086040c054_1444658890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "class/create.html.twig", 6);
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
        $__internal_4648205953b3be240399bb716cc96c004bf4760ba30639f12246a87f9539c348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4648205953b3be240399bb716cc96c004bf4760ba30639f12246a87f9539c348->enter($__internal_4648205953b3be240399bb716cc96c004bf4760ba30639f12246a87f9539c348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/create.html.twig"));

        $__internal_ae8ced12f5659f1efd6409b485b30bb6d990eed7ba5c7f599862d961268e7cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8ced12f5659f1efd6409b485b30bb6d990eed7ba5c7f599862d961268e7cad->enter($__internal_ae8ced12f5659f1efd6409b485b30bb6d990eed7ba5c7f599862d961268e7cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4648205953b3be240399bb716cc96c004bf4760ba30639f12246a87f9539c348->leave($__internal_4648205953b3be240399bb716cc96c004bf4760ba30639f12246a87f9539c348_prof);

        
        $__internal_ae8ced12f5659f1efd6409b485b30bb6d990eed7ba5c7f599862d961268e7cad->leave($__internal_ae8ced12f5659f1efd6409b485b30bb6d990eed7ba5c7f599862d961268e7cad_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_aee083ed44bbd9ea8894b909da0fef380a4ee5ea79751eb507d547b239898d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aee083ed44bbd9ea8894b909da0fef380a4ee5ea79751eb507d547b239898d8f->enter($__internal_aee083ed44bbd9ea8894b909da0fef380a4ee5ea79751eb507d547b239898d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_72f35e0b4f42a6bd2b19d3550b8f5345f1b1e28040ca7331ec4a3856db5314fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f35e0b4f42a6bd2b19d3550b8f5345f1b1e28040ca7331ec4a3856db5314fe->enter($__internal_72f35e0b4f42a6bd2b19d3550b8f5345f1b1e28040ca7331ec4a3856db5314fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Add Class
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "saveAndAdd", array()), 'widget', array("attr" => array("class" => "btn btn-info pull-left", "style" => "margin-right: 5px")));
        echo "
\t              ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("class" => "btn btn-primary pull-left margin-md")));
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
\t";
        // line 38
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "classes", array()))) {
            // line 39
            echo "\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Added Classes
\t      </header>
\t      <div class=\"panel-body\">
\t\t\t<p>
\t\t\t\t<ol>
\t\t\t\t\t";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "classes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                // line 48
                echo "\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "cTitle", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t\t\t\t</ol>
\t\t\t</p>
\t      </div>
\t  </section>
\t</div>
\t";
        }
        // line 56
        echo "
";
        
        $__internal_72f35e0b4f42a6bd2b19d3550b8f5345f1b1e28040ca7331ec4a3856db5314fe->leave($__internal_72f35e0b4f42a6bd2b19d3550b8f5345f1b1e28040ca7331ec4a3856db5314fe_prof);

        
        $__internal_aee083ed44bbd9ea8894b909da0fef380a4ee5ea79751eb507d547b239898d8f->leave($__internal_aee083ed44bbd9ea8894b909da0fef380a4ee5ea79751eb507d547b239898d8f_prof);

    }

    public function getTemplateName()
    {
        return "class/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 56,  322 => 50,  313 => 48,  309 => 47,  299 => 39,  297 => 38,  289 => 33,  284 => 31,  280 => 30,  276 => 29,  272 => 28,  267 => 26,  260 => 22,  254 => 19,  249 => 16,  243 => 13,  241 => 12,  235 => 8,  226 => 7,  197 => 6,  80 => 61,  71 => 60,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
\t          Add Class
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
\t              {{ form_widget(form.saveAndAdd, {'attr': {'class': 'btn btn-info pull-left', 'style': 'margin-right: 5px' }} ) }}
\t              {{ form_row(form.save, {'attr': {'class': 'btn btn-primary pull-left margin-md'}}) }}
\t              <a href=\"{{path('homepage')}}\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"{{path('list_classes')}}\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          {{ form_end(form) }}

\t      </div>
\t  </section>
\t</div>
\t{% if app.user.classes is not empty %}
\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Added Classes
\t      </header>
\t      <div class=\"panel-body\">
\t\t\t<p>
\t\t\t\t<ol>
\t\t\t\t\t{% for class in app.user.classes %}
\t\t\t\t\t\t<li>{{class.cTitle}}</li>
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
      \$(\"#classs_c_title\").focus();
    });    
  </script>
{% endblock %}", "class/create.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/class/create.html.twig");
    }
}
