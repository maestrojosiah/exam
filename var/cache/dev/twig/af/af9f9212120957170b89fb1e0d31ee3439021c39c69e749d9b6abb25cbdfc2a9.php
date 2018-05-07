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
        $__internal_5eb89f4bd94c0b549058c6330d28712cccd4ec00db28d6df6cc9e17063e66d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb89f4bd94c0b549058c6330d28712cccd4ec00db28d6df6cc9e17063e66d8e->enter($__internal_5eb89f4bd94c0b549058c6330d28712cccd4ec00db28d6df6cc9e17063e66d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/create.html.twig"));

        $__internal_c8f54c3e14bf7663857a137f9d2d30d05578490a41d5ad1b3b71d1bd7246660e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f54c3e14bf7663857a137f9d2d30d05578490a41d5ad1b3b71d1bd7246660e->enter($__internal_c8f54c3e14bf7663857a137f9d2d30d05578490a41d5ad1b3b71d1bd7246660e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eb89f4bd94c0b549058c6330d28712cccd4ec00db28d6df6cc9e17063e66d8e->leave($__internal_5eb89f4bd94c0b549058c6330d28712cccd4ec00db28d6df6cc9e17063e66d8e_prof);

        
        $__internal_c8f54c3e14bf7663857a137f9d2d30d05578490a41d5ad1b3b71d1bd7246660e->leave($__internal_c8f54c3e14bf7663857a137f9d2d30d05578490a41d5ad1b3b71d1bd7246660e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0b685c3e53e9db82c343da0d2af2d0b459766feef6f3a45c320f2e5fd12a8ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b685c3e53e9db82c343da0d2af2d0b459766feef6f3a45c320f2e5fd12a8ce->enter($__internal_d0b685c3e53e9db82c343da0d2af2d0b459766feef6f3a45c320f2e5fd12a8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb7fa6698ab7750503b02bc126e2948721397cb962f0f8f1807fb1ec369696ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7fa6698ab7750503b02bc126e2948721397cb962f0f8f1807fb1ec369696ae->enter($__internal_fb7fa6698ab7750503b02bc126e2948721397cb962f0f8f1807fb1ec369696ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("class/create.html.twig", "class/create.html.twig", 6, "1503921260")->display($context);
        
        $__internal_fb7fa6698ab7750503b02bc126e2948721397cb962f0f8f1807fb1ec369696ae->leave($__internal_fb7fa6698ab7750503b02bc126e2948721397cb962f0f8f1807fb1ec369696ae_prof);

        
        $__internal_d0b685c3e53e9db82c343da0d2af2d0b459766feef6f3a45c320f2e5fd12a8ce->leave($__internal_d0b685c3e53e9db82c343da0d2af2d0b459766feef6f3a45c320f2e5fd12a8ce_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0715217355b09955fbb61ac12f7cb185c52409281d70227191adf779eafa9082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0715217355b09955fbb61ac12f7cb185c52409281d70227191adf779eafa9082->enter($__internal_0715217355b09955fbb61ac12f7cb185c52409281d70227191adf779eafa9082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b5f4b42af4197673b561db3552866e2942bfd71e369fbea704e3ea5f418d6de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f4b42af4197673b561db3552866e2942bfd71e369fbea704e3ea5f418d6de5->enter($__internal_b5f4b42af4197673b561db3552866e2942bfd71e369fbea704e3ea5f418d6de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#classs_c_title\").focus();
    });    
  </script>
";
        
        $__internal_b5f4b42af4197673b561db3552866e2942bfd71e369fbea704e3ea5f418d6de5->leave($__internal_b5f4b42af4197673b561db3552866e2942bfd71e369fbea704e3ea5f418d6de5_prof);

        
        $__internal_0715217355b09955fbb61ac12f7cb185c52409281d70227191adf779eafa9082->leave($__internal_0715217355b09955fbb61ac12f7cb185c52409281d70227191adf779eafa9082_prof);

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
class __TwigTemplate_769880612f2d21f6e51bdc9def84d7e802fc7d5de070d3c9a162b4086040c054_1503921260 extends Twig_Template
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
        $__internal_07b229d62e25c9fad45c945ec1ea4b80ee5aa4cb84714c038934bdd110243839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07b229d62e25c9fad45c945ec1ea4b80ee5aa4cb84714c038934bdd110243839->enter($__internal_07b229d62e25c9fad45c945ec1ea4b80ee5aa4cb84714c038934bdd110243839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/create.html.twig"));

        $__internal_eea7cf155e847673c30548b13d029ee84cf9df75ef09bdf3552667e80720a9fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea7cf155e847673c30548b13d029ee84cf9df75ef09bdf3552667e80720a9fa->enter($__internal_eea7cf155e847673c30548b13d029ee84cf9df75ef09bdf3552667e80720a9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07b229d62e25c9fad45c945ec1ea4b80ee5aa4cb84714c038934bdd110243839->leave($__internal_07b229d62e25c9fad45c945ec1ea4b80ee5aa4cb84714c038934bdd110243839_prof);

        
        $__internal_eea7cf155e847673c30548b13d029ee84cf9df75ef09bdf3552667e80720a9fa->leave($__internal_eea7cf155e847673c30548b13d029ee84cf9df75ef09bdf3552667e80720a9fa_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_28f305049bd5f97239537d7e40fb1ae8f93c51be8cbc0eea69ab761d7f322eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f305049bd5f97239537d7e40fb1ae8f93c51be8cbc0eea69ab761d7f322eef->enter($__internal_28f305049bd5f97239537d7e40fb1ae8f93c51be8cbc0eea69ab761d7f322eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b60018145f9e258ad0feeea58898fdb5e993fce3ee9d58f047edd51be79421ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60018145f9e258ad0feeea58898fdb5e993fce3ee9d58f047edd51be79421ec->enter($__internal_b60018145f9e258ad0feeea58898fdb5e993fce3ee9d58f047edd51be79421ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b60018145f9e258ad0feeea58898fdb5e993fce3ee9d58f047edd51be79421ec->leave($__internal_b60018145f9e258ad0feeea58898fdb5e993fce3ee9d58f047edd51be79421ec_prof);

        
        $__internal_28f305049bd5f97239537d7e40fb1ae8f93c51be8cbc0eea69ab761d7f322eef->leave($__internal_28f305049bd5f97239537d7e40fb1ae8f93c51be8cbc0eea69ab761d7f322eef_prof);

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
