<?php

/* student/choose.html.twig */
class __TwigTemplate_06a7ed6afe134dbf5329153bdfd24af3086237544762606b62bffd40aff74e8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/choose.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf42be246a253fa01f4c9cd307ebef331c1e47d6ce9942ea987ca3729e53dbdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf42be246a253fa01f4c9cd307ebef331c1e47d6ce9942ea987ca3729e53dbdb->enter($__internal_cf42be246a253fa01f4c9cd307ebef331c1e47d6ce9942ea987ca3729e53dbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/choose.html.twig"));

        $__internal_3a8acc3b125bcf146f1b0b196dc948981241b88a00e013deae4e22ffccffdd10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8acc3b125bcf146f1b0b196dc948981241b88a00e013deae4e22ffccffdd10->enter($__internal_3a8acc3b125bcf146f1b0b196dc948981241b88a00e013deae4e22ffccffdd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/choose.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf42be246a253fa01f4c9cd307ebef331c1e47d6ce9942ea987ca3729e53dbdb->leave($__internal_cf42be246a253fa01f4c9cd307ebef331c1e47d6ce9942ea987ca3729e53dbdb_prof);

        
        $__internal_3a8acc3b125bcf146f1b0b196dc948981241b88a00e013deae4e22ffccffdd10->leave($__internal_3a8acc3b125bcf146f1b0b196dc948981241b88a00e013deae4e22ffccffdd10_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_941234f9aacfbc26d0e9940a5f4925a960661dd6a3e7d0a7d95ba8d5eaa10c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941234f9aacfbc26d0e9940a5f4925a960661dd6a3e7d0a7d95ba8d5eaa10c06->enter($__internal_941234f9aacfbc26d0e9940a5f4925a960661dd6a3e7d0a7d95ba8d5eaa10c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67a834de2d39a4535b65692e73bcdc27b7db9b31fe84c0ac18a78d9fa74242b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a834de2d39a4535b65692e73bcdc27b7db9b31fe84c0ac18a78d9fa74242b6->enter($__internal_67a834de2d39a4535b65692e73bcdc27b7db9b31fe84c0ac18a78d9fa74242b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("student/choose.html.twig", "student/choose.html.twig", 6, "736648363")->display($context);
        
        $__internal_67a834de2d39a4535b65692e73bcdc27b7db9b31fe84c0ac18a78d9fa74242b6->leave($__internal_67a834de2d39a4535b65692e73bcdc27b7db9b31fe84c0ac18a78d9fa74242b6_prof);

        
        $__internal_941234f9aacfbc26d0e9940a5f4925a960661dd6a3e7d0a7d95ba8d5eaa10c06->leave($__internal_941234f9aacfbc26d0e9940a5f4925a960661dd6a3e7d0a7d95ba8d5eaa10c06_prof);

    }

    public function getTemplateName()
    {
        return "student/choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
\t          Choose a Class
\t      </header>
\t      <div class=\"panel-body\">
\t      {% if classes is not empty %}
\t\t\t<div class=\"list-group\">
\t\t\t{% for class in classes %}
\t\t\t  <a href=\"{{path('list_students', {'classId':class.id})}}\" class=\"list-group-item\">{{class}}</a>
\t\t\t{% endfor %}
\t\t\t</div>\t\t\t
          {% else %}
            <div class=\"well\">
              <h4>Its lonely here! You should  <a href=\"{{path('new_class')}}\"> add a class </a> then add students to it </h4>
            </div>
          {% endif %}

\t      </div>
\t  </section>
\t</div>
{% endblock %}
{% endembed %}
{% endblock %}
", "student/choose.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/student/choose.html.twig");
    }
}


/* student/choose.html.twig */
class __TwigTemplate_06a7ed6afe134dbf5329153bdfd24af3086237544762606b62bffd40aff74e8f_736648363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "student/choose.html.twig", 6);
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
        $__internal_48d16baa297f8b31e7b3768ad37cc0330470059fb196391a2fc4249c24e4a1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d16baa297f8b31e7b3768ad37cc0330470059fb196391a2fc4249c24e4a1c9->enter($__internal_48d16baa297f8b31e7b3768ad37cc0330470059fb196391a2fc4249c24e4a1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/choose.html.twig"));

        $__internal_1ce8d9ecdf571bba75909bb8845d7b3decb586a8ef09a98af704ccd354ab1356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce8d9ecdf571bba75909bb8845d7b3decb586a8ef09a98af704ccd354ab1356->enter($__internal_1ce8d9ecdf571bba75909bb8845d7b3decb586a8ef09a98af704ccd354ab1356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/choose.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48d16baa297f8b31e7b3768ad37cc0330470059fb196391a2fc4249c24e4a1c9->leave($__internal_48d16baa297f8b31e7b3768ad37cc0330470059fb196391a2fc4249c24e4a1c9_prof);

        
        $__internal_1ce8d9ecdf571bba75909bb8845d7b3decb586a8ef09a98af704ccd354ab1356->leave($__internal_1ce8d9ecdf571bba75909bb8845d7b3decb586a8ef09a98af704ccd354ab1356_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_c514a06844e6e812cea2e84beaebdb717dee60becc73051280c1373f58b2763b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c514a06844e6e812cea2e84beaebdb717dee60becc73051280c1373f58b2763b->enter($__internal_c514a06844e6e812cea2e84beaebdb717dee60becc73051280c1373f58b2763b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_267a3765e6fffd0441687ec1dabade08429da0f727350eb50bd130a7c11386c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267a3765e6fffd0441687ec1dabade08429da0f727350eb50bd130a7c11386c6->enter($__internal_267a3765e6fffd0441687ec1dabade08429da0f727350eb50bd130a7c11386c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "\t<div class=\"col-lg-6\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          Choose a Class
\t      </header>
\t      <div class=\"panel-body\">
\t      ";
        // line 14
        if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
            // line 15
            echo "\t\t\t<div class=\"list-group\">
\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["classes"] ?? $this->getContext($context, "classes")));
            foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                // line 17
                echo "\t\t\t  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_students", array("classId" => $this->getAttribute($context["class"], "id", array()))), "html", null, true);
                echo "\" class=\"list-group-item\">";
                echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                echo "</a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t</div>\t\t\t
          ";
        } else {
            // line 21
            echo "            <div class=\"well\">
              <h4>Its lonely here! You should  <a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_class");
            echo "\"> add a class </a> then add students to it </h4>
            </div>
          ";
        }
        // line 25
        echo "
\t      </div>
\t  </section>
\t</div>
";
        
        $__internal_267a3765e6fffd0441687ec1dabade08429da0f727350eb50bd130a7c11386c6->leave($__internal_267a3765e6fffd0441687ec1dabade08429da0f727350eb50bd130a7c11386c6_prof);

        
        $__internal_c514a06844e6e812cea2e84beaebdb717dee60becc73051280c1373f58b2763b->leave($__internal_c514a06844e6e812cea2e84beaebdb717dee60becc73051280c1373f58b2763b_prof);

    }

    public function getTemplateName()
    {
        return "student/choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 25,  210 => 22,  207 => 21,  203 => 19,  192 => 17,  188 => 16,  185 => 15,  183 => 14,  175 => 8,  166 => 7,  60 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
\t          Choose a Class
\t      </header>
\t      <div class=\"panel-body\">
\t      {% if classes is not empty %}
\t\t\t<div class=\"list-group\">
\t\t\t{% for class in classes %}
\t\t\t  <a href=\"{{path('list_students', {'classId':class.id})}}\" class=\"list-group-item\">{{class}}</a>
\t\t\t{% endfor %}
\t\t\t</div>\t\t\t
          {% else %}
            <div class=\"well\">
              <h4>Its lonely here! You should  <a href=\"{{path('new_class')}}\"> add a class </a> then add students to it </h4>
            </div>
          {% endif %}

\t      </div>
\t  </section>
\t</div>
{% endblock %}
{% endembed %}
{% endblock %}
", "student/choose.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/student/choose.html.twig");
    }
}
