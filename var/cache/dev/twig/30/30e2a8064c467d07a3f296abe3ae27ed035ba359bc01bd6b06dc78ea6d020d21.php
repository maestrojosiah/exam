<?php

/* childSubject/create.html.twig */
class __TwigTemplate_6c6e1d5e856fd49fe4441518d3a3633a12522d8ea3a89cd7019cd03dcbe471e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "childSubject/create.html.twig", 1);
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
        $__internal_f9bf5b3dc5f31876be3d2b2c70feb5a975d51c47858f98f73a361818c14e4b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9bf5b3dc5f31876be3d2b2c70feb5a975d51c47858f98f73a361818c14e4b28->enter($__internal_f9bf5b3dc5f31876be3d2b2c70feb5a975d51c47858f98f73a361818c14e4b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childSubject/create.html.twig"));

        $__internal_8d6cbfa53d2d4908ac348beb377f9953f1798f4d39c5a958563b84e8ebc44712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6cbfa53d2d4908ac348beb377f9953f1798f4d39c5a958563b84e8ebc44712->enter($__internal_8d6cbfa53d2d4908ac348beb377f9953f1798f4d39c5a958563b84e8ebc44712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childSubject/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9bf5b3dc5f31876be3d2b2c70feb5a975d51c47858f98f73a361818c14e4b28->leave($__internal_f9bf5b3dc5f31876be3d2b2c70feb5a975d51c47858f98f73a361818c14e4b28_prof);

        
        $__internal_8d6cbfa53d2d4908ac348beb377f9953f1798f4d39c5a958563b84e8ebc44712->leave($__internal_8d6cbfa53d2d4908ac348beb377f9953f1798f4d39c5a958563b84e8ebc44712_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_abea567fb96c32c3066d67089384703cff3058511382b4a2e47056362fc5e17a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abea567fb96c32c3066d67089384703cff3058511382b4a2e47056362fc5e17a->enter($__internal_abea567fb96c32c3066d67089384703cff3058511382b4a2e47056362fc5e17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e184e790b386561d01b44159646daf236bd53b162c1b3f760e7888d55aec06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e184e790b386561d01b44159646daf236bd53b162c1b3f760e7888d55aec06e->enter($__internal_2e184e790b386561d01b44159646daf236bd53b162c1b3f760e7888d55aec06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("childSubject/create.html.twig", "childSubject/create.html.twig", 6, "461375362")->display($context);
        
        $__internal_2e184e790b386561d01b44159646daf236bd53b162c1b3f760e7888d55aec06e->leave($__internal_2e184e790b386561d01b44159646daf236bd53b162c1b3f760e7888d55aec06e_prof);

        
        $__internal_abea567fb96c32c3066d67089384703cff3058511382b4a2e47056362fc5e17a->leave($__internal_abea567fb96c32c3066d67089384703cff3058511382b4a2e47056362fc5e17a_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_034c17e25272ec50f21c51539b4d95608c0b82a02c3c30b5b04d875abdfd1f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034c17e25272ec50f21c51539b4d95608c0b82a02c3c30b5b04d875abdfd1f8e->enter($__internal_034c17e25272ec50f21c51539b4d95608c0b82a02c3c30b5b04d875abdfd1f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b4a0d15ad9348fdb3c517e28cb63ff45e5ab4f971b7fafb88f661672af6de7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a0d15ad9348fdb3c517e28cb63ff45e5ab4f971b7fafb88f661672af6de7bd->enter($__internal_b4a0d15ad9348fdb3c517e28cb63ff45e5ab4f971b7fafb88f661672af6de7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#child_subject_c_s_title\").focus();
    });    
  </script>
";
        
        $__internal_b4a0d15ad9348fdb3c517e28cb63ff45e5ab4f971b7fafb88f661672af6de7bd->leave($__internal_b4a0d15ad9348fdb3c517e28cb63ff45e5ab4f971b7fafb88f661672af6de7bd_prof);

        
        $__internal_034c17e25272ec50f21c51539b4d95608c0b82a02c3c30b5b04d875abdfd1f8e->leave($__internal_034c17e25272ec50f21c51539b4d95608c0b82a02c3c30b5b04d875abdfd1f8e_prof);

    }

    public function getTemplateName()
    {
        return "childSubject/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 64,  71 => 63,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
\t          Add Child Subject
\t\t\t\t{% if not form.vars.valid %}
\t              <div class=\"alert alert-warning\">
\t              <p>Please check your entries below</p>
\t              </div>\t\t\t\t
          \t\t{% endif %}\t          
\t      </header>
\t      <div class=\"panel-body\">
\t          {{ form_start(form, {'method': 'post'} ) }}
\t              <div class=\"form-group\">
\t                  <label for=\"child_subject_c_s_title\">Child Subject Title</label>
\t                  {{ form_row(form.c_s_title, {'attr': {'class': 'form-control', 'placeholder': 'Child Subject Title' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"child_subject_c_s_title\">Marked Out Of:</label>
\t                  {{ form_row(form.out_of, {'attr': {'class': 'form-control', 'placeholder': 'Marked Out Of' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"child_subject_subject\">Parent Subject Title</label>
\t                  {{ form_row(form.subject, {'attr': {'class': 'form-control', 'placeholder': 'Parent Subject Title' }}) }}
\t              </div>
\t              {{ form_widget(form.saveAndAdd, {'attr': {'class': 'btn btn-info pull-left', 'style': 'margin-right: 5px' }} ) }}
\t              {{ form_row(form.save, {'attr': {'class': 'btn btn-primary pull-left margin-md'}}) }}
\t              <a href=\"{{path('homepage')}}\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"{{path('list_childSubjects')}}\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          {{ form_end(form) }}

\t      </div>
\t  </section>
\t</div>
\t{% if app.user.childSubjects is not empty %}
\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Added Subjects
\t      </header>
\t      <div class=\"panel-body\">
\t\t\t<p>
\t\t\t\t<ol>
\t\t\t\t\t{% for childSubject in app.user.childSubjects %}
\t\t\t\t\t\t<li>{{childSubject.cSTitle}} [{{childSubject.subject.sTitle}}]</li>
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
      \$(\"#child_subject_c_s_title\").focus();
    });    
  </script>
{% endblock %}", "childSubject/create.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/childSubject/create.html.twig");
    }
}


/* childSubject/create.html.twig */
class __TwigTemplate_6c6e1d5e856fd49fe4441518d3a3633a12522d8ea3a89cd7019cd03dcbe471e1_461375362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "childSubject/create.html.twig", 6);
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
        $__internal_4457ec8c61188b3c6f5aa292f3c21f01062c7ad1c766722f287873d31b89e858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4457ec8c61188b3c6f5aa292f3c21f01062c7ad1c766722f287873d31b89e858->enter($__internal_4457ec8c61188b3c6f5aa292f3c21f01062c7ad1c766722f287873d31b89e858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childSubject/create.html.twig"));

        $__internal_939e852925cf27985ecdebb86521ee15b2e6e6d5505ec766156856a699d97856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939e852925cf27985ecdebb86521ee15b2e6e6d5505ec766156856a699d97856->enter($__internal_939e852925cf27985ecdebb86521ee15b2e6e6d5505ec766156856a699d97856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childSubject/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4457ec8c61188b3c6f5aa292f3c21f01062c7ad1c766722f287873d31b89e858->leave($__internal_4457ec8c61188b3c6f5aa292f3c21f01062c7ad1c766722f287873d31b89e858_prof);

        
        $__internal_939e852925cf27985ecdebb86521ee15b2e6e6d5505ec766156856a699d97856->leave($__internal_939e852925cf27985ecdebb86521ee15b2e6e6d5505ec766156856a699d97856_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_753fd1c61fdf87a8976376e0b3f8ee7d6d97ae1967469a5c75334dfac28abd49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753fd1c61fdf87a8976376e0b3f8ee7d6d97ae1967469a5c75334dfac28abd49->enter($__internal_753fd1c61fdf87a8976376e0b3f8ee7d6d97ae1967469a5c75334dfac28abd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_44547460d8e6c626ce22143f9e61f52fc35f14ad287f8ae0fcc6021a76690c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44547460d8e6c626ce22143f9e61f52fc35f14ad287f8ae0fcc6021a76690c2f->enter($__internal_44547460d8e6c626ce22143f9e61f52fc35f14ad287f8ae0fcc6021a76690c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Add Child Subject
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
\t                  <label for=\"child_subject_c_s_title\">Child Subject Title</label>
\t                  ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "c_s_title", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Child Subject Title")));
        echo "
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"child_subject_c_s_title\">Marked Out Of:</label>
\t                  ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "out_of", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Marked Out Of")));
        echo "
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"child_subject_subject\">Parent Subject Title</label>
\t                  ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Parent Subject Title")));
        echo "
\t              </div>
\t              ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "saveAndAdd", array()), 'widget', array("attr" => array("class" => "btn btn-info pull-left", "style" => "margin-right: 5px")));
        echo "
\t              ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("class" => "btn btn-primary pull-left margin-md")));
        echo "
\t              <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_childSubjects");
        echo "\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

\t      </div>
\t  </section>
\t</div>
\t";
        // line 42
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "childSubjects", array()))) {
            // line 43
            echo "\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Added Subjects
\t      </header>
\t      <div class=\"panel-body\">
\t\t\t<p>
\t\t\t\t<ol>
\t\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "childSubjects", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["childSubject"]) {
                // line 52
                echo "\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["childSubject"], "cSTitle", array()), "html", null, true);
                echo " [";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["childSubject"], "subject", array()), "sTitle", array()), "html", null, true);
                echo "]</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childSubject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t\t</ol>
\t\t\t</p>
\t      </div>
\t  </section>
\t</div>
\t";
        }
        
        $__internal_44547460d8e6c626ce22143f9e61f52fc35f14ad287f8ae0fcc6021a76690c2f->leave($__internal_44547460d8e6c626ce22143f9e61f52fc35f14ad287f8ae0fcc6021a76690c2f_prof);

        
        $__internal_753fd1c61fdf87a8976376e0b3f8ee7d6d97ae1967469a5c75334dfac28abd49->leave($__internal_753fd1c61fdf87a8976376e0b3f8ee7d6d97ae1967469a5c75334dfac28abd49_prof);

    }

    public function getTemplateName()
    {
        return "childSubject/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 54,  323 => 52,  319 => 51,  309 => 43,  307 => 42,  299 => 37,  294 => 35,  290 => 34,  286 => 33,  282 => 32,  277 => 30,  270 => 26,  263 => 22,  257 => 19,  252 => 16,  246 => 13,  244 => 12,  238 => 8,  229 => 7,  200 => 6,  80 => 64,  71 => 63,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
\t          Add Child Subject
\t\t\t\t{% if not form.vars.valid %}
\t              <div class=\"alert alert-warning\">
\t              <p>Please check your entries below</p>
\t              </div>\t\t\t\t
          \t\t{% endif %}\t          
\t      </header>
\t      <div class=\"panel-body\">
\t          {{ form_start(form, {'method': 'post'} ) }}
\t              <div class=\"form-group\">
\t                  <label for=\"child_subject_c_s_title\">Child Subject Title</label>
\t                  {{ form_row(form.c_s_title, {'attr': {'class': 'form-control', 'placeholder': 'Child Subject Title' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"child_subject_c_s_title\">Marked Out Of:</label>
\t                  {{ form_row(form.out_of, {'attr': {'class': 'form-control', 'placeholder': 'Marked Out Of' }}) }}
\t              </div>
\t              <div class=\"form-group\">
\t                  <label for=\"child_subject_subject\">Parent Subject Title</label>
\t                  {{ form_row(form.subject, {'attr': {'class': 'form-control', 'placeholder': 'Parent Subject Title' }}) }}
\t              </div>
\t              {{ form_widget(form.saveAndAdd, {'attr': {'class': 'btn btn-info pull-left', 'style': 'margin-right: 5px' }} ) }}
\t              {{ form_row(form.save, {'attr': {'class': 'btn btn-primary pull-left margin-md'}}) }}
\t              <a href=\"{{path('homepage')}}\" class=\"btn btn-danger pull-right\" style=\"margin-left: 5px;\">DONE</a>
\t              <a href=\"{{path('list_childSubjects')}}\" class=\"btn btn-danger pull-right\">List</a>
\t              
\t          {{ form_end(form) }}

\t      </div>
\t  </section>
\t</div>
\t{% if app.user.childSubjects is not empty %}
\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Added Subjects
\t      </header>
\t      <div class=\"panel-body\">
\t\t\t<p>
\t\t\t\t<ol>
\t\t\t\t\t{% for childSubject in app.user.childSubjects %}
\t\t\t\t\t\t<li>{{childSubject.cSTitle}} [{{childSubject.subject.sTitle}}]</li>
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
      \$(\"#child_subject_c_s_title\").focus();
    });    
  </script>
{% endblock %}", "childSubject/create.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/childSubject/create.html.twig");
    }
}
