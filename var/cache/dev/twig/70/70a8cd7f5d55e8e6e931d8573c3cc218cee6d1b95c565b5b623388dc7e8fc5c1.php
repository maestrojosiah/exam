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
        $__internal_dfe6d83c8605cb143653b84f11eceaeb068d65c1269646b8ff27e7ab53d3001c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe6d83c8605cb143653b84f11eceaeb068d65c1269646b8ff27e7ab53d3001c->enter($__internal_dfe6d83c8605cb143653b84f11eceaeb068d65c1269646b8ff27e7ab53d3001c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/create.html.twig"));

        $__internal_f4d2e98391d9d3462e0ec85543f74099e1dc8adaaa33526a6bc9631494adbc7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d2e98391d9d3462e0ec85543f74099e1dc8adaaa33526a6bc9631494adbc7f->enter($__internal_f4d2e98391d9d3462e0ec85543f74099e1dc8adaaa33526a6bc9631494adbc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfe6d83c8605cb143653b84f11eceaeb068d65c1269646b8ff27e7ab53d3001c->leave($__internal_dfe6d83c8605cb143653b84f11eceaeb068d65c1269646b8ff27e7ab53d3001c_prof);

        
        $__internal_f4d2e98391d9d3462e0ec85543f74099e1dc8adaaa33526a6bc9631494adbc7f->leave($__internal_f4d2e98391d9d3462e0ec85543f74099e1dc8adaaa33526a6bc9631494adbc7f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_33c35758fe6c95b0ff9abf512f8a32a1f00a5c873102f32efc4733309ca9da44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c35758fe6c95b0ff9abf512f8a32a1f00a5c873102f32efc4733309ca9da44->enter($__internal_33c35758fe6c95b0ff9abf512f8a32a1f00a5c873102f32efc4733309ca9da44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79a47454f0dc50c66611a5e46c4f2691b9d18f75601ae7e18077312593d403b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a47454f0dc50c66611a5e46c4f2691b9d18f75601ae7e18077312593d403b6->enter($__internal_79a47454f0dc50c66611a5e46c4f2691b9d18f75601ae7e18077312593d403b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("examCompany/create.html.twig", "examCompany/create.html.twig", 6, "78683005")->display($context);
        
        $__internal_79a47454f0dc50c66611a5e46c4f2691b9d18f75601ae7e18077312593d403b6->leave($__internal_79a47454f0dc50c66611a5e46c4f2691b9d18f75601ae7e18077312593d403b6_prof);

        
        $__internal_33c35758fe6c95b0ff9abf512f8a32a1f00a5c873102f32efc4733309ca9da44->leave($__internal_33c35758fe6c95b0ff9abf512f8a32a1f00a5c873102f32efc4733309ca9da44_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bfaa3e15912621584862a1a08c7609b0bc1c7ac81b2eae27e828d9aade21eecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfaa3e15912621584862a1a08c7609b0bc1c7ac81b2eae27e828d9aade21eecc->enter($__internal_bfaa3e15912621584862a1a08c7609b0bc1c7ac81b2eae27e828d9aade21eecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b90df0725b888a8e95f4bb72a7a3348750beaec70e895d28ce39d7398c90bbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90df0725b888a8e95f4bb72a7a3348750beaec70e895d28ce39d7398c90bbdb->enter($__internal_b90df0725b888a8e95f4bb72a7a3348750beaec70e895d28ce39d7398c90bbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#exam_company_c_title\").focus();
    });    
  </script>
";
        
        $__internal_b90df0725b888a8e95f4bb72a7a3348750beaec70e895d28ce39d7398c90bbdb->leave($__internal_b90df0725b888a8e95f4bb72a7a3348750beaec70e895d28ce39d7398c90bbdb_prof);

        
        $__internal_bfaa3e15912621584862a1a08c7609b0bc1c7ac81b2eae27e828d9aade21eecc->leave($__internal_bfaa3e15912621584862a1a08c7609b0bc1c7ac81b2eae27e828d9aade21eecc_prof);

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
class __TwigTemplate_c7253daff50689e25f0bbe9bc7af71698bb74b04b8e89c6d24fe6be72f038290_78683005 extends Twig_Template
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
        $__internal_dbbcb585604f07ad7c3641bcc6158261d71c8bbca2742cefa3b27bcc832221d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbbcb585604f07ad7c3641bcc6158261d71c8bbca2742cefa3b27bcc832221d2->enter($__internal_dbbcb585604f07ad7c3641bcc6158261d71c8bbca2742cefa3b27bcc832221d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/create.html.twig"));

        $__internal_fa6307fdebba2069219479991976e0133a4db7092a8eb8f1bfca8c7a2679e35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6307fdebba2069219479991976e0133a4db7092a8eb8f1bfca8c7a2679e35f->enter($__internal_fa6307fdebba2069219479991976e0133a4db7092a8eb8f1bfca8c7a2679e35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbbcb585604f07ad7c3641bcc6158261d71c8bbca2742cefa3b27bcc832221d2->leave($__internal_dbbcb585604f07ad7c3641bcc6158261d71c8bbca2742cefa3b27bcc832221d2_prof);

        
        $__internal_fa6307fdebba2069219479991976e0133a4db7092a8eb8f1bfca8c7a2679e35f->leave($__internal_fa6307fdebba2069219479991976e0133a4db7092a8eb8f1bfca8c7a2679e35f_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_3552abfed53c344d7f8821fe884fc020241db6af2e43f57a112f36fa5f63cc2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3552abfed53c344d7f8821fe884fc020241db6af2e43f57a112f36fa5f63cc2e->enter($__internal_3552abfed53c344d7f8821fe884fc020241db6af2e43f57a112f36fa5f63cc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_574fa3c9ac318292adf9aa3e07458e7f6321fce79c9ae8ef7295bdbf7013408d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574fa3c9ac318292adf9aa3e07458e7f6321fce79c9ae8ef7295bdbf7013408d->enter($__internal_574fa3c9ac318292adf9aa3e07458e7f6321fce79c9ae8ef7295bdbf7013408d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_574fa3c9ac318292adf9aa3e07458e7f6321fce79c9ae8ef7295bdbf7013408d->leave($__internal_574fa3c9ac318292adf9aa3e07458e7f6321fce79c9ae8ef7295bdbf7013408d_prof);

        
        $__internal_3552abfed53c344d7f8821fe884fc020241db6af2e43f57a112f36fa5f63cc2e->leave($__internal_3552abfed53c344d7f8821fe884fc020241db6af2e43f57a112f36fa5f63cc2e_prof);

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
