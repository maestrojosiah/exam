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
        $__internal_9b28ac45c7bccfedd3bbb3d84ddfb4a5aceedf5bb41e318c026a14e134577d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b28ac45c7bccfedd3bbb3d84ddfb4a5aceedf5bb41e318c026a14e134577d34->enter($__internal_9b28ac45c7bccfedd3bbb3d84ddfb4a5aceedf5bb41e318c026a14e134577d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/choose.html.twig"));

        $__internal_4e7c41067b4b3c058587cab078f1eb045410caa447e52528a17e019ae7f5dbe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7c41067b4b3c058587cab078f1eb045410caa447e52528a17e019ae7f5dbe0->enter($__internal_4e7c41067b4b3c058587cab078f1eb045410caa447e52528a17e019ae7f5dbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/choose.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b28ac45c7bccfedd3bbb3d84ddfb4a5aceedf5bb41e318c026a14e134577d34->leave($__internal_9b28ac45c7bccfedd3bbb3d84ddfb4a5aceedf5bb41e318c026a14e134577d34_prof);

        
        $__internal_4e7c41067b4b3c058587cab078f1eb045410caa447e52528a17e019ae7f5dbe0->leave($__internal_4e7c41067b4b3c058587cab078f1eb045410caa447e52528a17e019ae7f5dbe0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_42667ea2436e6b1a9ebe1d307b547255a36af77734504c30cf57e28453ec1daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42667ea2436e6b1a9ebe1d307b547255a36af77734504c30cf57e28453ec1daa->enter($__internal_42667ea2436e6b1a9ebe1d307b547255a36af77734504c30cf57e28453ec1daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319770787ed8cfebeb43c6b4a4d6b0fd6a34f3eecdb4eae353e6d14a77e0da6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319770787ed8cfebeb43c6b4a4d6b0fd6a34f3eecdb4eae353e6d14a77e0da6a->enter($__internal_319770787ed8cfebeb43c6b4a4d6b0fd6a34f3eecdb4eae353e6d14a77e0da6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("student/choose.html.twig", "student/choose.html.twig", 6, "1074919086")->display($context);
        
        $__internal_319770787ed8cfebeb43c6b4a4d6b0fd6a34f3eecdb4eae353e6d14a77e0da6a->leave($__internal_319770787ed8cfebeb43c6b4a4d6b0fd6a34f3eecdb4eae353e6d14a77e0da6a_prof);

        
        $__internal_42667ea2436e6b1a9ebe1d307b547255a36af77734504c30cf57e28453ec1daa->leave($__internal_42667ea2436e6b1a9ebe1d307b547255a36af77734504c30cf57e28453ec1daa_prof);

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
class __TwigTemplate_06a7ed6afe134dbf5329153bdfd24af3086237544762606b62bffd40aff74e8f_1074919086 extends Twig_Template
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
        $__internal_a9f2514d568e37d598d9839d3bd8fa3b0f58ab15c12b73104554ce6867e3275f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f2514d568e37d598d9839d3bd8fa3b0f58ab15c12b73104554ce6867e3275f->enter($__internal_a9f2514d568e37d598d9839d3bd8fa3b0f58ab15c12b73104554ce6867e3275f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/choose.html.twig"));

        $__internal_a7cfd839db5abb662e9316fbc662c6f6d1046657eda945950e7d714da6c67304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7cfd839db5abb662e9316fbc662c6f6d1046657eda945950e7d714da6c67304->enter($__internal_a7cfd839db5abb662e9316fbc662c6f6d1046657eda945950e7d714da6c67304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/choose.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9f2514d568e37d598d9839d3bd8fa3b0f58ab15c12b73104554ce6867e3275f->leave($__internal_a9f2514d568e37d598d9839d3bd8fa3b0f58ab15c12b73104554ce6867e3275f_prof);

        
        $__internal_a7cfd839db5abb662e9316fbc662c6f6d1046657eda945950e7d714da6c67304->leave($__internal_a7cfd839db5abb662e9316fbc662c6f6d1046657eda945950e7d714da6c67304_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_be1d6121bd109157ae640154db24e8a353e915eaff8bddb9ffbbf1ba2678738b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be1d6121bd109157ae640154db24e8a353e915eaff8bddb9ffbbf1ba2678738b->enter($__internal_be1d6121bd109157ae640154db24e8a353e915eaff8bddb9ffbbf1ba2678738b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b46fbd0bfadeeac2af759c137a4e81a0f6923f3d1071849fb49877de876b9892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46fbd0bfadeeac2af759c137a4e81a0f6923f3d1071849fb49877de876b9892->enter($__internal_b46fbd0bfadeeac2af759c137a4e81a0f6923f3d1071849fb49877de876b9892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b46fbd0bfadeeac2af759c137a4e81a0f6923f3d1071849fb49877de876b9892->leave($__internal_b46fbd0bfadeeac2af759c137a4e81a0f6923f3d1071849fb49877de876b9892_prof);

        
        $__internal_be1d6121bd109157ae640154db24e8a353e915eaff8bddb9ffbbf1ba2678738b->leave($__internal_be1d6121bd109157ae640154db24e8a353e915eaff8bddb9ffbbf1ba2678738b_prof);

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
