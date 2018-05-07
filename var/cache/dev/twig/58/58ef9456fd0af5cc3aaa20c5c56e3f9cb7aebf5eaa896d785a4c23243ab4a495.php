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
        $__internal_1acf1398cea593d0b7939295c58674bd65f01a1dc7e30904921c51f25413caa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1acf1398cea593d0b7939295c58674bd65f01a1dc7e30904921c51f25413caa0->enter($__internal_1acf1398cea593d0b7939295c58674bd65f01a1dc7e30904921c51f25413caa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/profile.html.twig"));

        $__internal_283dc24fdeb5556274f865bfc671d59462e77341cc28b25c16b4e3a3ac420f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283dc24fdeb5556274f865bfc671d59462e77341cc28b25c16b4e3a3ac420f60->enter($__internal_283dc24fdeb5556274f865bfc671d59462e77341cc28b25c16b4e3a3ac420f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1acf1398cea593d0b7939295c58674bd65f01a1dc7e30904921c51f25413caa0->leave($__internal_1acf1398cea593d0b7939295c58674bd65f01a1dc7e30904921c51f25413caa0_prof);

        
        $__internal_283dc24fdeb5556274f865bfc671d59462e77341cc28b25c16b4e3a3ac420f60->leave($__internal_283dc24fdeb5556274f865bfc671d59462e77341cc28b25c16b4e3a3ac420f60_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef74a0e230c9263a7ab74ee4a041a574558e954c0e66530bf84d629828234dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef74a0e230c9263a7ab74ee4a041a574558e954c0e66530bf84d629828234dda->enter($__internal_ef74a0e230c9263a7ab74ee4a041a574558e954c0e66530bf84d629828234dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a4d7aea1b0a2514184e02655bd1ede9d429537c09661429356998d2f4b16a2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d7aea1b0a2514184e02655bd1ede9d429537c09661429356998d2f4b16a2df->enter($__internal_a4d7aea1b0a2514184e02655bd1ede9d429537c09661429356998d2f4b16a2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <!-- Morris Charts CSS -->
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/morrisjs/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_a4d7aea1b0a2514184e02655bd1ede9d429537c09661429356998d2f4b16a2df->leave($__internal_a4d7aea1b0a2514184e02655bd1ede9d429537c09661429356998d2f4b16a2df_prof);

        
        $__internal_ef74a0e230c9263a7ab74ee4a041a574558e954c0e66530bf84d629828234dda->leave($__internal_ef74a0e230c9263a7ab74ee4a041a574558e954c0e66530bf84d629828234dda_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d4af31d7b029ea2c09f217ab2aa8e2e5743e8e3187041ea2bee15e30f7ae1c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d4af31d7b029ea2c09f217ab2aa8e2e5743e8e3187041ea2bee15e30f7ae1c1->enter($__internal_4d4af31d7b029ea2c09f217ab2aa8e2e5743e8e3187041ea2bee15e30f7ae1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b38240ddf39c26c19bdd18357d0520eea25696d8b1291720a73cdf47fedf71e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38240ddf39c26c19bdd18357d0520eea25696d8b1291720a73cdf47fedf71e0->enter($__internal_b38240ddf39c26c19bdd18357d0520eea25696d8b1291720a73cdf47fedf71e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("student/profile.html.twig", "student/profile.html.twig", 10, "1555329153")->display($context);
        
        $__internal_b38240ddf39c26c19bdd18357d0520eea25696d8b1291720a73cdf47fedf71e0->leave($__internal_b38240ddf39c26c19bdd18357d0520eea25696d8b1291720a73cdf47fedf71e0_prof);

        
        $__internal_4d4af31d7b029ea2c09f217ab2aa8e2e5743e8e3187041ea2bee15e30f7ae1c1->leave($__internal_4d4af31d7b029ea2c09f217ab2aa8e2e5743e8e3187041ea2bee15e30f7ae1c1_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c40daea56870dcfae9d96750b59b8cc526d05c07eeae695e2c64cad934b42483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40daea56870dcfae9d96750b59b8cc526d05c07eeae695e2c64cad934b42483->enter($__internal_c40daea56870dcfae9d96750b59b8cc526d05c07eeae695e2c64cad934b42483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_88082afabfcec8cd9bbfbf824428879b48dbe8e2157272f0c5bdc669e850879e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88082afabfcec8cd9bbfbf824428879b48dbe8e2157272f0c5bdc669e850879e->enter($__internal_88082afabfcec8cd9bbfbf824428879b48dbe8e2157272f0c5bdc669e850879e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_88082afabfcec8cd9bbfbf824428879b48dbe8e2157272f0c5bdc669e850879e->leave($__internal_88082afabfcec8cd9bbfbf824428879b48dbe8e2157272f0c5bdc669e850879e_prof);

        
        $__internal_c40daea56870dcfae9d96750b59b8cc526d05c07eeae695e2c64cad934b42483->leave($__internal_c40daea56870dcfae9d96750b59b8cc526d05c07eeae695e2c64cad934b42483_prof);

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
class __TwigTemplate_a235699314efcb3e806d187359928760d3a7782f31bbb9ab0e65618716f64fba_1555329153 extends Twig_Template
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
        $__internal_a33b234404f92cb207364985a08133b1db6ce901642d97fab7e43883f8490a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33b234404f92cb207364985a08133b1db6ce901642d97fab7e43883f8490a72->enter($__internal_a33b234404f92cb207364985a08133b1db6ce901642d97fab7e43883f8490a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/profile.html.twig"));

        $__internal_1343a2ae5963ca9b51676c21ffba07101ef4386aaa5d53c0677ee3627a44ab99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1343a2ae5963ca9b51676c21ffba07101ef4386aaa5d53c0677ee3627a44ab99->enter($__internal_1343a2ae5963ca9b51676c21ffba07101ef4386aaa5d53c0677ee3627a44ab99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a33b234404f92cb207364985a08133b1db6ce901642d97fab7e43883f8490a72->leave($__internal_a33b234404f92cb207364985a08133b1db6ce901642d97fab7e43883f8490a72_prof);

        
        $__internal_1343a2ae5963ca9b51676c21ffba07101ef4386aaa5d53c0677ee3627a44ab99->leave($__internal_1343a2ae5963ca9b51676c21ffba07101ef4386aaa5d53c0677ee3627a44ab99_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_84b5815afd11c8d098d126a746d21a3dd9022e0147150e7beaab4f7b7edc04d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b5815afd11c8d098d126a746d21a3dd9022e0147150e7beaab4f7b7edc04d5->enter($__internal_84b5815afd11c8d098d126a746d21a3dd9022e0147150e7beaab4f7b7edc04d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_812f3fb02f5da679fe6ba00d7ba9259e2acb3e3dcfc8ef1459af606b866f3e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812f3fb02f5da679fe6ba00d7ba9259e2acb3e3dcfc8ef1459af606b866f3e67->enter($__internal_812f3fb02f5da679fe6ba00d7ba9259e2acb3e3dcfc8ef1459af606b866f3e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_812f3fb02f5da679fe6ba00d7ba9259e2acb3e3dcfc8ef1459af606b866f3e67->leave($__internal_812f3fb02f5da679fe6ba00d7ba9259e2acb3e3dcfc8ef1459af606b866f3e67_prof);

        
        $__internal_84b5815afd11c8d098d126a746d21a3dd9022e0147150e7beaab4f7b7edc04d5->leave($__internal_84b5815afd11c8d098d126a746d21a3dd9022e0147150e7beaab4f7b7edc04d5_prof);

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
