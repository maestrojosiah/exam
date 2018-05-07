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
        $__internal_8ecfbed43b8b0896eb0b1a6c8f870b149b43937d1e109d7cf135d36511c5fc70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ecfbed43b8b0896eb0b1a6c8f870b149b43937d1e109d7cf135d36511c5fc70->enter($__internal_8ecfbed43b8b0896eb0b1a6c8f870b149b43937d1e109d7cf135d36511c5fc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/choose.html.twig"));

        $__internal_4037d8e435900d672ca64a392a49fde7e18424cb7b7822736f83970c9b5126f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4037d8e435900d672ca64a392a49fde7e18424cb7b7822736f83970c9b5126f0->enter($__internal_4037d8e435900d672ca64a392a49fde7e18424cb7b7822736f83970c9b5126f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/choose.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ecfbed43b8b0896eb0b1a6c8f870b149b43937d1e109d7cf135d36511c5fc70->leave($__internal_8ecfbed43b8b0896eb0b1a6c8f870b149b43937d1e109d7cf135d36511c5fc70_prof);

        
        $__internal_4037d8e435900d672ca64a392a49fde7e18424cb7b7822736f83970c9b5126f0->leave($__internal_4037d8e435900d672ca64a392a49fde7e18424cb7b7822736f83970c9b5126f0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e147c7014f6ed396ef7bdc4c48d00d075fe8a1560d6fece64d822f0a557058dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e147c7014f6ed396ef7bdc4c48d00d075fe8a1560d6fece64d822f0a557058dc->enter($__internal_e147c7014f6ed396ef7bdc4c48d00d075fe8a1560d6fece64d822f0a557058dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_649dc00503fccbd1b54506b1f7d58fd3b52b5e6220fdda24a5f3527c4b51fb3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649dc00503fccbd1b54506b1f7d58fd3b52b5e6220fdda24a5f3527c4b51fb3a->enter($__internal_649dc00503fccbd1b54506b1f7d58fd3b52b5e6220fdda24a5f3527c4b51fb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("student/choose.html.twig", "student/choose.html.twig", 6, "1006723992")->display($context);
        
        $__internal_649dc00503fccbd1b54506b1f7d58fd3b52b5e6220fdda24a5f3527c4b51fb3a->leave($__internal_649dc00503fccbd1b54506b1f7d58fd3b52b5e6220fdda24a5f3527c4b51fb3a_prof);

        
        $__internal_e147c7014f6ed396ef7bdc4c48d00d075fe8a1560d6fece64d822f0a557058dc->leave($__internal_e147c7014f6ed396ef7bdc4c48d00d075fe8a1560d6fece64d822f0a557058dc_prof);

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
class __TwigTemplate_06a7ed6afe134dbf5329153bdfd24af3086237544762606b62bffd40aff74e8f_1006723992 extends Twig_Template
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
        $__internal_78523992262b568661b366598f8b9f3ff15ab51ad67299fb670c37bef5f97d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78523992262b568661b366598f8b9f3ff15ab51ad67299fb670c37bef5f97d68->enter($__internal_78523992262b568661b366598f8b9f3ff15ab51ad67299fb670c37bef5f97d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/choose.html.twig"));

        $__internal_057aa29f14d4cb10d3edcf33b18ad86f314048fa39e0ef0442cbd4a93632113c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057aa29f14d4cb10d3edcf33b18ad86f314048fa39e0ef0442cbd4a93632113c->enter($__internal_057aa29f14d4cb10d3edcf33b18ad86f314048fa39e0ef0442cbd4a93632113c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/choose.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78523992262b568661b366598f8b9f3ff15ab51ad67299fb670c37bef5f97d68->leave($__internal_78523992262b568661b366598f8b9f3ff15ab51ad67299fb670c37bef5f97d68_prof);

        
        $__internal_057aa29f14d4cb10d3edcf33b18ad86f314048fa39e0ef0442cbd4a93632113c->leave($__internal_057aa29f14d4cb10d3edcf33b18ad86f314048fa39e0ef0442cbd4a93632113c_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_551dbe6c863d1b23cdc3e25ea0de1a12675c3bf01024c88d92c9b1642971d7dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_551dbe6c863d1b23cdc3e25ea0de1a12675c3bf01024c88d92c9b1642971d7dc->enter($__internal_551dbe6c863d1b23cdc3e25ea0de1a12675c3bf01024c88d92c9b1642971d7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b373cb6c437a29611053c350d78e025ed3031e94489f52bf49db028068e792d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b373cb6c437a29611053c350d78e025ed3031e94489f52bf49db028068e792d1->enter($__internal_b373cb6c437a29611053c350d78e025ed3031e94489f52bf49db028068e792d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b373cb6c437a29611053c350d78e025ed3031e94489f52bf49db028068e792d1->leave($__internal_b373cb6c437a29611053c350d78e025ed3031e94489f52bf49db028068e792d1_prof);

        
        $__internal_551dbe6c863d1b23cdc3e25ea0de1a12675c3bf01024c88d92c9b1642971d7dc->leave($__internal_551dbe6c863d1b23cdc3e25ea0de1a12675c3bf01024c88d92c9b1642971d7dc_prof);

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
