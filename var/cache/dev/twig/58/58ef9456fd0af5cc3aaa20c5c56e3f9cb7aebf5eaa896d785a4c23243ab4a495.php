<?php

/* student/profile.html.twig */
class __TwigTemplate_a235699314efcb3e806d187359928760d3a7782f31bbb9ab0e65618716f64fba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/profile.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_9f5126346f9d4624772bdd679f3f9ef65037707c2e5b999c65fe4e5e69c8503c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5126346f9d4624772bdd679f3f9ef65037707c2e5b999c65fe4e5e69c8503c->enter($__internal_9f5126346f9d4624772bdd679f3f9ef65037707c2e5b999c65fe4e5e69c8503c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/profile.html.twig"));

        $__internal_176793b1a19ad91db6fea8a7a80beda99ee53b49116abc9d15dd753ddcd0a66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176793b1a19ad91db6fea8a7a80beda99ee53b49116abc9d15dd753ddcd0a66f->enter($__internal_176793b1a19ad91db6fea8a7a80beda99ee53b49116abc9d15dd753ddcd0a66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f5126346f9d4624772bdd679f3f9ef65037707c2e5b999c65fe4e5e69c8503c->leave($__internal_9f5126346f9d4624772bdd679f3f9ef65037707c2e5b999c65fe4e5e69c8503c_prof);

        
        $__internal_176793b1a19ad91db6fea8a7a80beda99ee53b49116abc9d15dd753ddcd0a66f->leave($__internal_176793b1a19ad91db6fea8a7a80beda99ee53b49116abc9d15dd753ddcd0a66f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b9c144712d84086044b8144e26151dd98928d157230f7f94c4477914c386fa80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c144712d84086044b8144e26151dd98928d157230f7f94c4477914c386fa80->enter($__internal_b9c144712d84086044b8144e26151dd98928d157230f7f94c4477914c386fa80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ce939e8223515d792a8af02eb0793ea352e16347d719f77d1a6dd19f435ed1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce939e8223515d792a8af02eb0793ea352e16347d719f77d1a6dd19f435ed1d1->enter($__internal_ce939e8223515d792a8af02eb0793ea352e16347d719f77d1a6dd19f435ed1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <!-- Morris Charts CSS -->
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/morrisjs/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_ce939e8223515d792a8af02eb0793ea352e16347d719f77d1a6dd19f435ed1d1->leave($__internal_ce939e8223515d792a8af02eb0793ea352e16347d719f77d1a6dd19f435ed1d1_prof);

        
        $__internal_b9c144712d84086044b8144e26151dd98928d157230f7f94c4477914c386fa80->leave($__internal_b9c144712d84086044b8144e26151dd98928d157230f7f94c4477914c386fa80_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_467929e107f9972737ebec7437ff972b1bf38b0ad28a6b02e5377214dc317693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_467929e107f9972737ebec7437ff972b1bf38b0ad28a6b02e5377214dc317693->enter($__internal_467929e107f9972737ebec7437ff972b1bf38b0ad28a6b02e5377214dc317693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc4c889237041df0af5149172749fe3001d6ae4ababfb1a360759d2c7fe1154a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4c889237041df0af5149172749fe3001d6ae4ababfb1a360759d2c7fe1154a->enter($__internal_cc4c889237041df0af5149172749fe3001d6ae4ababfb1a360759d2c7fe1154a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<body>
";
        // line 8
        echo twig_include($this->env, $context, "templates/header.html.twig");
        echo "        \t\t
";
        // line 9
        echo twig_include($this->env, $context, "templates/aside.html.twig");
        echo "        \t\t
";
        // line 10
        $this->loadTemplate("student/profile.html.twig", "student/profile.html.twig", 10, "1112423632")->display($context);
        
        $__internal_cc4c889237041df0af5149172749fe3001d6ae4ababfb1a360759d2c7fe1154a->leave($__internal_cc4c889237041df0af5149172749fe3001d6ae4ababfb1a360759d2c7fe1154a_prof);

        
        $__internal_467929e107f9972737ebec7437ff972b1bf38b0ad28a6b02e5377214dc317693->leave($__internal_467929e107f9972737ebec7437ff972b1bf38b0ad28a6b02e5377214dc317693_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22d72292885d879825bad1937fb78ce4fccc6f6c1183d70d8dafbdbeee2d7f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d72292885d879825bad1937fb78ce4fccc6f6c1183d70d8dafbdbeee2d7f80->enter($__internal_22d72292885d879825bad1937fb78ce4fccc6f6c1183d70d8dafbdbeee2d7f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7a86db85c3732dca1ecd62b5c2c47fee2bdcc34d886433662c879405d9841a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a86db85c3732dca1ecd62b5c2c47fee2bdcc34d886433662c879405d9841a59->enter($__internal_7a86db85c3732dca1ecd62b5c2c47fee2bdcc34d886433662c879405d9841a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "    <!-- Morris Charts JavaScript -->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/morrisjs/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("data/morris-data.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    \$(function() {

\t    Morris.Bar({
\t        element: 'morris-bar-chart',
\t        data: [
\t        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["score_lst"] ?? $this->getContext($context, "score_lst")));
        foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
            // line 60
            echo "\t        {
\t            y: '";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["exam"], 0, array(), "array"), "examCompany", array()), "cTitle", array()), "html", null, true);
            echo "',
\t            ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["exam"]);
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 63
                echo "\t             ";
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($context["entry"], "subject", array()), "sTitle", array()), array("/" => "_", " " => "_")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "marks", array()), "html", null, true);
                echo ",
\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t        },
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t        ],
\t        xkey: 'y',
\t        ykeys: [
\t            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 71
            echo "\t            '";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["subject"], "sTitle", array()), array("/" => "_", " " => "_")), "html", null, true);
            echo "',
\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t        ],
\t        labels: [
\t            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 76
            echo "\t            '";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["subject"], "sTitle", array()), array("/" => "_", " " => "_")), "html", null, true);
            echo "',
\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t        ],
\t        hideHover: 'auto',
\t        resize: true
\t    });

\t    Morris.Bar({
\t        element: 'morris-bar-chart2',
\t        data: [
\t        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["score_lst"] ?? $this->getContext($context, "score_lst")));
        foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
            // line 87
            echo "\t        ";
            $context["total"] = 0;
            // line 88
            echo "\t        {
\t            y: '";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["exam"], 0, array(), "array"), "examCompany", array()), "cTitle", array()), "html", null, true);
            echo "',
\t            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["exam"]);
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 91
                echo "\t            \t";
                $context["total"] = (($context["total"] ?? $this->getContext($context, "total")) + $this->getAttribute($context["entry"], "marks", array()));
                // line 92
                echo "\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t            a: ";
            echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
            echo "
\t        },
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t        ],
\t        xkey: 'y',
\t        ykeys: ['a'],
\t        labels: ['Total Score'],
\t        hideHover: 'auto',
\t        resize: true
\t    });
   
    });        \t
    </script>
";
        
        $__internal_7a86db85c3732dca1ecd62b5c2c47fee2bdcc34d886433662c879405d9841a59->leave($__internal_7a86db85c3732dca1ecd62b5c2c47fee2bdcc34d886433662c879405d9841a59_prof);

        
        $__internal_22d72292885d879825bad1937fb78ce4fccc6f6c1183d70d8dafbdbeee2d7f80->leave($__internal_22d72292885d879825bad1937fb78ce4fccc6f6c1183d70d8dafbdbeee2d7f80_prof);

    }

    public function getTemplateName()
    {
        return "student/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 96,  231 => 93,  225 => 92,  222 => 91,  218 => 90,  214 => 89,  211 => 88,  208 => 87,  204 => 86,  194 => 78,  185 => 76,  181 => 75,  177 => 73,  168 => 71,  164 => 70,  159 => 67,  152 => 65,  141 => 63,  137 => 62,  133 => 61,  130 => 60,  126 => 59,  116 => 52,  112 => 51,  108 => 50,  105 => 49,  96 => 48,  86 => 10,  82 => 9,  78 => 8,  75 => 7,  66 => 6,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
{% block stylesheets %}
    <!-- Morris Charts CSS -->
    <link href=\"{{asset('vendor/morrisjs/morris.css')}}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
<body>
{{ include('templates/header.html.twig') }}        \t\t
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}
\t{% if score_lst is not empty %}
\t<div class=\"col-lg-12\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          {{student.names}} [{{student.class.cTitle}}] - Progress Graph for at most Last 5 Exams
\t      </header>
\t      <div class=\"panel-body\" id=\"chartjs\">
\t      \t{% set width = exams|length * 250 %}
              <div class=\"col-lg-12\">
                  <section class=\"panel\">
                        <div class=\"panel-body\">
                            <div id=\"morris-bar-chart\"></div>
                        </div>
                  </section>
              </div>   \t      
          </div>
\t      <div class=\"panel-body\" id=\"chartjs\">
\t      \t{% set width = exams|length * 250 %}
              <div class=\"col-lg-6\">
                  <section class=\"panel\">
                        <div class=\"panel-body\">
                            <div id=\"morris-bar-chart2\"></div>
                        </div>
                  </section>
              </div>   \t      
          </div>
\t  </section>
\t</div>
\t{% else %}
\t\t<div class=\"well\">
\t\t\t<h4>You will find the student's graphs for previous exams here, after you have recorded some exam entries.</h4>
\t\t</div>
\t{% endif %}
{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}
    <!-- Morris Charts JavaScript -->
    <script src=\"{{asset('vendor/raphael/raphael.min.js')}}\"></script>
    <script src=\"{{asset('vendor/morrisjs/morris.min.js')}}\"></script>
    <script src=\"{{asset('data/morris-data.js')}}\"></script>
    <script type=\"text/javascript\">
    \$(function() {

\t    Morris.Bar({
\t        element: 'morris-bar-chart',
\t        data: [
\t        {% for exam in score_lst %}
\t        {
\t            y: '{{exam[0].examCompany.cTitle}}',
\t            {% for entry in exam %}
\t             {{entry.subject.sTitle|replace({'/':'_', ' ':'_'})}}: {{entry.marks}},
\t            {% endfor %}
\t        },
\t        {% endfor %}
\t        ],
\t        xkey: 'y',
\t        ykeys: [
\t            {% for subject in app.user.subjects %}
\t            '{{subject.sTitle|replace({'/':'_', ' ':'_'})}}',
\t            {% endfor %}
\t        ],
\t        labels: [
\t            {% for subject in app.user.subjects %}
\t            '{{subject.sTitle|replace({'/':'_', ' ':'_'})}}',
\t            {% endfor %}
\t        ],
\t        hideHover: 'auto',
\t        resize: true
\t    });

\t    Morris.Bar({
\t        element: 'morris-bar-chart2',
\t        data: [
\t        {% for exam in score_lst %}
\t        {% set total = 0 %}
\t        {
\t            y: '{{exam[0].examCompany.cTitle}}',
\t            {% for entry in exam %}
\t            \t{% set total = total + entry.marks %}
\t            {% endfor %}
\t            a: {{total}}
\t        },
\t        {% endfor %}
\t        ],
\t        xkey: 'y',
\t        ykeys: ['a'],
\t        labels: ['Total Score'],
\t        hideHover: 'auto',
\t        resize: true
\t    });
   
    });        \t
    </script>
{% endblock %}", "student/profile.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/student/profile.html.twig");
    }
}


/* student/profile.html.twig */
class __TwigTemplate_a235699314efcb3e806d187359928760d3a7782f31bbb9ab0e65618716f64fba_1112423632 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "student/profile.html.twig", 10);
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
        $__internal_6939ae77e5d0b515c4a1ba59dafb1d341258b6e3ce369bf263dcc7cfab16ca49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6939ae77e5d0b515c4a1ba59dafb1d341258b6e3ce369bf263dcc7cfab16ca49->enter($__internal_6939ae77e5d0b515c4a1ba59dafb1d341258b6e3ce369bf263dcc7cfab16ca49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/profile.html.twig"));

        $__internal_d0df179468f9787b7fe3b7132b595b9818ec78c9e569943330249124c1827dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0df179468f9787b7fe3b7132b595b9818ec78c9e569943330249124c1827dac->enter($__internal_d0df179468f9787b7fe3b7132b595b9818ec78c9e569943330249124c1827dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6939ae77e5d0b515c4a1ba59dafb1d341258b6e3ce369bf263dcc7cfab16ca49->leave($__internal_6939ae77e5d0b515c4a1ba59dafb1d341258b6e3ce369bf263dcc7cfab16ca49_prof);

        
        $__internal_d0df179468f9787b7fe3b7132b595b9818ec78c9e569943330249124c1827dac->leave($__internal_d0df179468f9787b7fe3b7132b595b9818ec78c9e569943330249124c1827dac_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6f7301317bac9dd14e0a19036c74d951ef2632c08549b10dfc2b382638825a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f7301317bac9dd14e0a19036c74d951ef2632c08549b10dfc2b382638825a05->enter($__internal_6f7301317bac9dd14e0a19036c74d951ef2632c08549b10dfc2b382638825a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_429ec1bdd926ef1ca580f5cc3df125f6c7b48c6f711a45d57922a8c41655cd13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429ec1bdd926ef1ca580f5cc3df125f6c7b48c6f711a45d57922a8c41655cd13->enter($__internal_429ec1bdd926ef1ca580f5cc3df125f6c7b48c6f711a45d57922a8c41655cd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "\t";
        if ( !twig_test_empty(($context["score_lst"] ?? $this->getContext($context, "score_lst")))) {
            // line 13
            echo "\t<div class=\"col-lg-12\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "names", array()), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "class", array()), "cTitle", array()), "html", null, true);
            echo "] - Progress Graph for at most Last 5 Exams
\t      </header>
\t      <div class=\"panel-body\" id=\"chartjs\">
\t      \t";
            // line 19
            $context["width"] = (twig_length_filter($this->env, ($context["exams"] ?? $this->getContext($context, "exams"))) * 250);
            // line 20
            echo "              <div class=\"col-lg-12\">
                  <section class=\"panel\">
                        <div class=\"panel-body\">
                            <div id=\"morris-bar-chart\"></div>
                        </div>
                  </section>
              </div>   \t      
          </div>
\t      <div class=\"panel-body\" id=\"chartjs\">
\t      \t";
            // line 29
            $context["width"] = (twig_length_filter($this->env, ($context["exams"] ?? $this->getContext($context, "exams"))) * 250);
            // line 30
            echo "              <div class=\"col-lg-6\">
                  <section class=\"panel\">
                        <div class=\"panel-body\">
                            <div id=\"morris-bar-chart2\"></div>
                        </div>
                  </section>
              </div>   \t      
          </div>
\t  </section>
\t</div>
\t";
        } else {
            // line 41
            echo "\t\t<div class=\"well\">
\t\t\t<h4>You will find the student's graphs for previous exams here, after you have recorded some exam entries.</h4>
\t\t</div>
\t";
        }
        
        $__internal_429ec1bdd926ef1ca580f5cc3df125f6c7b48c6f711a45d57922a8c41655cd13->leave($__internal_429ec1bdd926ef1ca580f5cc3df125f6c7b48c6f711a45d57922a8c41655cd13_prof);

        
        $__internal_6f7301317bac9dd14e0a19036c74d951ef2632c08549b10dfc2b382638825a05->leave($__internal_6f7301317bac9dd14e0a19036c74d951ef2632c08549b10dfc2b382638825a05_prof);

    }

    public function getTemplateName()
    {
        return "student/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 41,  472 => 30,  470 => 29,  459 => 20,  457 => 19,  449 => 16,  444 => 13,  441 => 12,  432 => 11,  403 => 10,  241 => 96,  231 => 93,  225 => 92,  222 => 91,  218 => 90,  214 => 89,  211 => 88,  208 => 87,  204 => 86,  194 => 78,  185 => 76,  181 => 75,  177 => 73,  168 => 71,  164 => 70,  159 => 67,  152 => 65,  141 => 63,  137 => 62,  133 => 61,  130 => 60,  126 => 59,  116 => 52,  112 => 51,  108 => 50,  105 => 49,  96 => 48,  86 => 10,  82 => 9,  78 => 8,  75 => 7,  66 => 6,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
{% block stylesheets %}
    <!-- Morris Charts CSS -->
    <link href=\"{{asset('vendor/morrisjs/morris.css')}}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
<body>
{{ include('templates/header.html.twig') }}        \t\t
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}
\t{% if score_lst is not empty %}
\t<div class=\"col-lg-12\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          {{student.names}} [{{student.class.cTitle}}] - Progress Graph for at most Last 5 Exams
\t      </header>
\t      <div class=\"panel-body\" id=\"chartjs\">
\t      \t{% set width = exams|length * 250 %}
              <div class=\"col-lg-12\">
                  <section class=\"panel\">
                        <div class=\"panel-body\">
                            <div id=\"morris-bar-chart\"></div>
                        </div>
                  </section>
              </div>   \t      
          </div>
\t      <div class=\"panel-body\" id=\"chartjs\">
\t      \t{% set width = exams|length * 250 %}
              <div class=\"col-lg-6\">
                  <section class=\"panel\">
                        <div class=\"panel-body\">
                            <div id=\"morris-bar-chart2\"></div>
                        </div>
                  </section>
              </div>   \t      
          </div>
\t  </section>
\t</div>
\t{% else %}
\t\t<div class=\"well\">
\t\t\t<h4>You will find the student's graphs for previous exams here, after you have recorded some exam entries.</h4>
\t\t</div>
\t{% endif %}
{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}
    <!-- Morris Charts JavaScript -->
    <script src=\"{{asset('vendor/raphael/raphael.min.js')}}\"></script>
    <script src=\"{{asset('vendor/morrisjs/morris.min.js')}}\"></script>
    <script src=\"{{asset('data/morris-data.js')}}\"></script>
    <script type=\"text/javascript\">
    \$(function() {

\t    Morris.Bar({
\t        element: 'morris-bar-chart',
\t        data: [
\t        {% for exam in score_lst %}
\t        {
\t            y: '{{exam[0].examCompany.cTitle}}',
\t            {% for entry in exam %}
\t             {{entry.subject.sTitle|replace({'/':'_', ' ':'_'})}}: {{entry.marks}},
\t            {% endfor %}
\t        },
\t        {% endfor %}
\t        ],
\t        xkey: 'y',
\t        ykeys: [
\t            {% for subject in app.user.subjects %}
\t            '{{subject.sTitle|replace({'/':'_', ' ':'_'})}}',
\t            {% endfor %}
\t        ],
\t        labels: [
\t            {% for subject in app.user.subjects %}
\t            '{{subject.sTitle|replace({'/':'_', ' ':'_'})}}',
\t            {% endfor %}
\t        ],
\t        hideHover: 'auto',
\t        resize: true
\t    });

\t    Morris.Bar({
\t        element: 'morris-bar-chart2',
\t        data: [
\t        {% for exam in score_lst %}
\t        {% set total = 0 %}
\t        {
\t            y: '{{exam[0].examCompany.cTitle}}',
\t            {% for entry in exam %}
\t            \t{% set total = total + entry.marks %}
\t            {% endfor %}
\t            a: {{total}}
\t        },
\t        {% endfor %}
\t        ],
\t        xkey: 'y',
\t        ykeys: ['a'],
\t        labels: ['Total Score'],
\t        hideHover: 'auto',
\t        resize: true
\t    });
   
    });        \t
    </script>
{% endblock %}", "student/profile.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/student/profile.html.twig");
    }
}
