<?php

/* subject/create.html.twig */
class __TwigTemplate_2cd7bba2453bb1562444fdb910bab49fb5adc4ff3122021a3e521d780a0b8712 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "subject/create.html.twig", 1);
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
        $__internal_b14a936a4d28b55efe7b808d8070ca06cfe993228e7b2f070cd90d215b9d685e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b14a936a4d28b55efe7b808d8070ca06cfe993228e7b2f070cd90d215b9d685e->enter($__internal_b14a936a4d28b55efe7b808d8070ca06cfe993228e7b2f070cd90d215b9d685e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "subject/create.html.twig"));

        $__internal_f287ac41606a4c4de8112b55341eac1757447224559ce52ad604c4ce8d03beb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f287ac41606a4c4de8112b55341eac1757447224559ce52ad604c4ce8d03beb7->enter($__internal_f287ac41606a4c4de8112b55341eac1757447224559ce52ad604c4ce8d03beb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "subject/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b14a936a4d28b55efe7b808d8070ca06cfe993228e7b2f070cd90d215b9d685e->leave($__internal_b14a936a4d28b55efe7b808d8070ca06cfe993228e7b2f070cd90d215b9d685e_prof);

        
        $__internal_f287ac41606a4c4de8112b55341eac1757447224559ce52ad604c4ce8d03beb7->leave($__internal_f287ac41606a4c4de8112b55341eac1757447224559ce52ad604c4ce8d03beb7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bf65e2ac362964f19ff1b93dc304d33a77aab1792c9ac704fc28fc7bda5f383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf65e2ac362964f19ff1b93dc304d33a77aab1792c9ac704fc28fc7bda5f383->enter($__internal_2bf65e2ac362964f19ff1b93dc304d33a77aab1792c9ac704fc28fc7bda5f383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cbeb484cbd33f944b109fca4c3d59d1cd5a27db1397413ae5fc229338dc3e055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbeb484cbd33f944b109fca4c3d59d1cd5a27db1397413ae5fc229338dc3e055->enter($__internal_cbeb484cbd33f944b109fca4c3d59d1cd5a27db1397413ae5fc229338dc3e055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("subject/create.html.twig", "subject/create.html.twig", 6, "257934497")->display($context);
        
        $__internal_cbeb484cbd33f944b109fca4c3d59d1cd5a27db1397413ae5fc229338dc3e055->leave($__internal_cbeb484cbd33f944b109fca4c3d59d1cd5a27db1397413ae5fc229338dc3e055_prof);

        
        $__internal_2bf65e2ac362964f19ff1b93dc304d33a77aab1792c9ac704fc28fc7bda5f383->leave($__internal_2bf65e2ac362964f19ff1b93dc304d33a77aab1792c9ac704fc28fc7bda5f383_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ecb61e921ad63826a058758c93d6b80b824b6cf952710686f2df9921412c031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecb61e921ad63826a058758c93d6b80b824b6cf952710686f2df9921412c031->enter($__internal_6ecb61e921ad63826a058758c93d6b80b824b6cf952710686f2df9921412c031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_309e540fc979de9611e73beadaff3764667e7a4e9ccc5e4b0b45b3d3c086f1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309e540fc979de9611e73beadaff3764667e7a4e9ccc5e4b0b45b3d3c086f1ae->enter($__internal_309e540fc979de9611e73beadaff3764667e7a4e9ccc5e4b0b45b3d3c086f1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#subject_s_title\").focus();
    });    
  </script>
";
        
        $__internal_309e540fc979de9611e73beadaff3764667e7a4e9ccc5e4b0b45b3d3c086f1ae->leave($__internal_309e540fc979de9611e73beadaff3764667e7a4e9ccc5e4b0b45b3d3c086f1ae_prof);

        
        $__internal_6ecb61e921ad63826a058758c93d6b80b824b6cf952710686f2df9921412c031->leave($__internal_6ecb61e921ad63826a058758c93d6b80b824b6cf952710686f2df9921412c031_prof);

    }

    public function getTemplateName()
    {
        return "subject/create.html.twig";
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
\t          Add Subject
\t\t\t\t{% if not form.vars.valid %}
\t              <div class=\"alert alert-warning\">
\t              <p>Please check your entries below</p>
\t              </div>\t\t\t\t
          \t\t{% endif %}\t          
\t      </header>
\t      <div class=\"panel-body\">
\t          {{ form_start(form, {'method': 'post'} ) }}
\t              <div class=\"form-group\">
\t                  <label for=\"subject_s_title\">Subject Title</label>
\t                  {{ form_row(form.s_title, {'attr': {'class': 'form-control', 'placeholder': 'Subject Title' }}) }}
\t              </div>
\t              {{ form_widget(form.saveAndAdd, {'attr': {'class': 'btn btn-info pull-left', 'style': 'margin-right: 5px' }} ) }}
\t              {{ form_row(form.save, {'attr': {'class': 'btn btn-primary pull-left margin-md'}}) }}
\t              <a href=\"{{path('homepage')}}\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"{{path('list_subjects')}}\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          {{ form_end(form) }}

\t      </div>
\t  </section>
\t</div>
\t{% if app.user.subjects is not empty %}
\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Added Subjects
\t      </header>
\t      <div class=\"panel-body\">
\t\t\t<p>
\t\t\t\t<ol>
\t\t\t\t\t{% for subject in app.user.subjects %}
\t\t\t\t\t\t<li>{{subject.sTitle}}</li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{% for child in subject.childSubjects %}
\t\t\t\t\t\t\t\t<li>{{child.cSTitle}}</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
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
      \$(\"#subject_s_title\").focus();
    });    
  </script>
{% endblock %}", "subject/create.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/subject/create.html.twig");
    }
}


/* subject/create.html.twig */
class __TwigTemplate_2cd7bba2453bb1562444fdb910bab49fb5adc4ff3122021a3e521d780a0b8712_257934497 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "subject/create.html.twig", 6);
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
        $__internal_9905e5e839e91bfd196df66321559a82ac0aab8c37962a8d0a3778297259e47a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9905e5e839e91bfd196df66321559a82ac0aab8c37962a8d0a3778297259e47a->enter($__internal_9905e5e839e91bfd196df66321559a82ac0aab8c37962a8d0a3778297259e47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "subject/create.html.twig"));

        $__internal_3c0cab135d566703b6c7324dccf946cce9352e6508b23651f83b905ce34ae440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0cab135d566703b6c7324dccf946cce9352e6508b23651f83b905ce34ae440->enter($__internal_3c0cab135d566703b6c7324dccf946cce9352e6508b23651f83b905ce34ae440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "subject/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9905e5e839e91bfd196df66321559a82ac0aab8c37962a8d0a3778297259e47a->leave($__internal_9905e5e839e91bfd196df66321559a82ac0aab8c37962a8d0a3778297259e47a_prof);

        
        $__internal_3c0cab135d566703b6c7324dccf946cce9352e6508b23651f83b905ce34ae440->leave($__internal_3c0cab135d566703b6c7324dccf946cce9352e6508b23651f83b905ce34ae440_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_4ace4e11f0a98f551a475fc80e9371fc926058d9f744af421e2e795b544a99d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ace4e11f0a98f551a475fc80e9371fc926058d9f744af421e2e795b544a99d2->enter($__internal_4ace4e11f0a98f551a475fc80e9371fc926058d9f744af421e2e795b544a99d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e2aff1ae92669de4c3fe6a65d59b4c34c464fa55ba9ecab92f2eeb59c49e79e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2aff1ae92669de4c3fe6a65d59b4c34c464fa55ba9ecab92f2eeb59c49e79e6->enter($__internal_e2aff1ae92669de4c3fe6a65d59b4c34c464fa55ba9ecab92f2eeb59c49e79e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Add Subject
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
\t                  <label for=\"subject_s_title\">Subject Title</label>
\t                  ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "s_title", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Subject Title")));
        echo "
\t              </div>
\t              ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "saveAndAdd", array()), 'widget', array("attr" => array("class" => "btn btn-info pull-left", "style" => "margin-right: 5px")));
        echo "
\t              ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("class" => "btn btn-primary pull-left margin-md")));
        echo "
\t              <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_subjects");
        echo "\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

\t      </div>
\t  </section>
\t</div>
\t";
        // line 34
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array()))) {
            // line 35
            echo "\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Added Subjects
\t      </header>
\t      <div class=\"panel-body\">
\t\t\t<p>
\t\t\t\t<ol>
\t\t\t\t\t";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 44
                echo "\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "sTitle", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t<li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "cSTitle", array()), "html", null, true);
                    echo "</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t\t</ol>
\t\t\t</p>
\t      </div>
\t  </section>
\t</div>
\t";
        }
        
        $__internal_e2aff1ae92669de4c3fe6a65d59b4c34c464fa55ba9ecab92f2eeb59c49e79e6->leave($__internal_e2aff1ae92669de4c3fe6a65d59b4c34c464fa55ba9ecab92f2eeb59c49e79e6_prof);

        
        $__internal_4ace4e11f0a98f551a475fc80e9371fc926058d9f744af421e2e795b544a99d2->leave($__internal_4ace4e11f0a98f551a475fc80e9371fc926058d9f744af421e2e795b544a99d2_prof);

    }

    public function getTemplateName()
    {
        return "subject/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 51,  325 => 49,  316 => 47,  312 => 46,  306 => 44,  302 => 43,  292 => 35,  290 => 34,  282 => 29,  277 => 27,  273 => 26,  269 => 25,  265 => 24,  260 => 22,  254 => 19,  249 => 16,  243 => 13,  241 => 12,  235 => 8,  226 => 7,  197 => 6,  80 => 61,  71 => 60,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
\t          Add Subject
\t\t\t\t{% if not form.vars.valid %}
\t              <div class=\"alert alert-warning\">
\t              <p>Please check your entries below</p>
\t              </div>\t\t\t\t
          \t\t{% endif %}\t          
\t      </header>
\t      <div class=\"panel-body\">
\t          {{ form_start(form, {'method': 'post'} ) }}
\t              <div class=\"form-group\">
\t                  <label for=\"subject_s_title\">Subject Title</label>
\t                  {{ form_row(form.s_title, {'attr': {'class': 'form-control', 'placeholder': 'Subject Title' }}) }}
\t              </div>
\t              {{ form_widget(form.saveAndAdd, {'attr': {'class': 'btn btn-info pull-left', 'style': 'margin-right: 5px' }} ) }}
\t              {{ form_row(form.save, {'attr': {'class': 'btn btn-primary pull-left margin-md'}}) }}
\t              <a href=\"{{path('homepage')}}\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"{{path('list_subjects')}}\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          {{ form_end(form) }}

\t      </div>
\t  </section>
\t</div>
\t{% if app.user.subjects is not empty %}
\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Added Subjects
\t      </header>
\t      <div class=\"panel-body\">
\t\t\t<p>
\t\t\t\t<ol>
\t\t\t\t\t{% for subject in app.user.subjects %}
\t\t\t\t\t\t<li>{{subject.sTitle}}</li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{% for child in subject.childSubjects %}
\t\t\t\t\t\t\t\t<li>{{child.cSTitle}}</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
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
      \$(\"#subject_s_title\").focus();
    });    
  </script>
{% endblock %}", "subject/create.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/subject/create.html.twig");
    }
}
