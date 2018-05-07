<?php

/* class/profile.html.twig */
class __TwigTemplate_cb8ce806a0ee0a2015875919b6ad35fd37bf4178b377319b8b2e8e88f4632e14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "class/profile.html.twig", 1);
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
        $__internal_aed5e631fd6d8d84e85f1c86f2644e0ddb91a807c2d9df7746517a3fadc950b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed5e631fd6d8d84e85f1c86f2644e0ddb91a807c2d9df7746517a3fadc950b3->enter($__internal_aed5e631fd6d8d84e85f1c86f2644e0ddb91a807c2d9df7746517a3fadc950b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/profile.html.twig"));

        $__internal_b28e4af80dca5388af175732d200500224e723772e6e593727a2b676324c7281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28e4af80dca5388af175732d200500224e723772e6e593727a2b676324c7281->enter($__internal_b28e4af80dca5388af175732d200500224e723772e6e593727a2b676324c7281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aed5e631fd6d8d84e85f1c86f2644e0ddb91a807c2d9df7746517a3fadc950b3->leave($__internal_aed5e631fd6d8d84e85f1c86f2644e0ddb91a807c2d9df7746517a3fadc950b3_prof);

        
        $__internal_b28e4af80dca5388af175732d200500224e723772e6e593727a2b676324c7281->leave($__internal_b28e4af80dca5388af175732d200500224e723772e6e593727a2b676324c7281_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a160fe2bb8cbef194f7103105c5a89786c51a82dda4d727bd7b0737887ea678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a160fe2bb8cbef194f7103105c5a89786c51a82dda4d727bd7b0737887ea678->enter($__internal_7a160fe2bb8cbef194f7103105c5a89786c51a82dda4d727bd7b0737887ea678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_99a6bdb234db4dfe647d81bdfe012990cb37dde12145e77a6b666dc97ca42620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a6bdb234db4dfe647d81bdfe012990cb37dde12145e77a6b666dc97ca42620->enter($__internal_99a6bdb234db4dfe647d81bdfe012990cb37dde12145e77a6b666dc97ca42620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <!-- Morris Charts CSS -->
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/morrisjs/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_99a6bdb234db4dfe647d81bdfe012990cb37dde12145e77a6b666dc97ca42620->leave($__internal_99a6bdb234db4dfe647d81bdfe012990cb37dde12145e77a6b666dc97ca42620_prof);

        
        $__internal_7a160fe2bb8cbef194f7103105c5a89786c51a82dda4d727bd7b0737887ea678->leave($__internal_7a160fe2bb8cbef194f7103105c5a89786c51a82dda4d727bd7b0737887ea678_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_79ba5393370937d9fa56f8133965a1a062e1b3d646e22b70d418fc7ae8ca325a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ba5393370937d9fa56f8133965a1a062e1b3d646e22b70d418fc7ae8ca325a->enter($__internal_79ba5393370937d9fa56f8133965a1a062e1b3d646e22b70d418fc7ae8ca325a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_526ded39a5c949a8e563661fe331a20df7c7dd9f293973a038c8a809f11c3f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526ded39a5c949a8e563661fe331a20df7c7dd9f293973a038c8a809f11c3f8e->enter($__internal_526ded39a5c949a8e563661fe331a20df7c7dd9f293973a038c8a809f11c3f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("class/profile.html.twig", "class/profile.html.twig", 10, "1191365492")->display($context);
        
        $__internal_526ded39a5c949a8e563661fe331a20df7c7dd9f293973a038c8a809f11c3f8e->leave($__internal_526ded39a5c949a8e563661fe331a20df7c7dd9f293973a038c8a809f11c3f8e_prof);

        
        $__internal_79ba5393370937d9fa56f8133965a1a062e1b3d646e22b70d418fc7ae8ca325a->leave($__internal_79ba5393370937d9fa56f8133965a1a062e1b3d646e22b70d418fc7ae8ca325a_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d3aff33c7eb10e627eb7b256d8d41e3d6e7e4267c4204694a228fb7450dded9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3aff33c7eb10e627eb7b256d8d41e3d6e7e4267c4204694a228fb7450dded9->enter($__internal_3d3aff33c7eb10e627eb7b256d8d41e3d6e7e4267c4204694a228fb7450dded9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cf442f25e5d67fd632f02fdca15f1b64c755423079f2f77705bd497d8a3ab8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf442f25e5d67fd632f02fdca15f1b64c755423079f2f77705bd497d8a3ab8ff->enter($__internal_cf442f25e5d67fd632f02fdca15f1b64c755423079f2f77705bd497d8a3ab8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        $context['_seq'] = twig_ensure_traversable(($context["subject_list"] ?? $this->getContext($context, "subject_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
            // line 60
            echo "\t        {
\t            y: \"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $context["exam"]), "company", array(), "array"), 0, array(), "array"), "html", null, true);
            echo "\",
\t            ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["exam"]);
            foreach ($context['_seq'] as $context["key"] => $context["entry"]) {
                // line 63
                echo "\t             ";
                echo twig_escape_filter($this->env, twig_replace_filter($context["key"], array("/" => "_", " " => "_")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "sum", array(), "array"), "html", null, true);
                echo ",
\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['entry'], $context['_parent'], $context['loop']);
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
            echo "\t        ";
            $context["mean"] = 0;
            // line 89
            echo "\t        {
\t            y: '";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["exam"], 0, array(), "array"), "examCompany", array()), "cTitle", array()), "html", null, true);
            echo "',
\t            ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["exam"]);
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 92
                echo "\t            \t";
                $context["total"] = (($context["total"] ?? $this->getContext($context, "total")) + $this->getAttribute($context["entry"], "marks", array()));
                // line 93
                echo "\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "\t            ";
            $context["mean"] = (($context["total"] ?? $this->getContext($context, "total")) / twig_length_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "students", array())));
            // line 95
            echo "\t            a: ";
            echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
            echo ",
\t            b: ";
            // line 96
            echo twig_escape_filter($this->env, twig_round(($context["mean"] ?? $this->getContext($context, "mean")), 2), "html", null, true);
            echo "
\t        },
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t        ],
\t        xkey: 'y',
\t        ykeys: ['a', 'b'],
\t        labels: ['Total Score', 'Mean Score'],
\t        hideHover: 'auto',
\t        resize: true
\t    });
   
    });        \t
    </script>
";
        
        $__internal_cf442f25e5d67fd632f02fdca15f1b64c755423079f2f77705bd497d8a3ab8ff->leave($__internal_cf442f25e5d67fd632f02fdca15f1b64c755423079f2f77705bd497d8a3ab8ff_prof);

        
        $__internal_3d3aff33c7eb10e627eb7b256d8d41e3d6e7e4267c4204694a228fb7450dded9->leave($__internal_3d3aff33c7eb10e627eb7b256d8d41e3d6e7e4267c4204694a228fb7450dded9_prof);

    }

    public function getTemplateName()
    {
        return "class/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 99,  242 => 96,  237 => 95,  234 => 94,  228 => 93,  225 => 92,  221 => 91,  217 => 90,  214 => 89,  211 => 88,  208 => 87,  204 => 86,  194 => 78,  185 => 76,  181 => 75,  177 => 73,  168 => 71,  164 => 70,  159 => 67,  152 => 65,  141 => 63,  137 => 62,  133 => 61,  130 => 60,  126 => 59,  116 => 52,  112 => 51,  108 => 50,  105 => 49,  96 => 48,  86 => 10,  82 => 9,  78 => 8,  75 => 7,  66 => 6,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
\t{% if subject_list is not empty %}
\t<div class=\"col-lg-12\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          {{class.cTitle}} - Progress Graph for at most Last 5 Exams
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
\t\t\t<h4>You will find the class' graphs for previous exams here, after you have recorded some exam entries.</h4>
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
\t        {% for exam in subject_list %}
\t        {
\t            y: \"{{exam|first['company'][0]}}\",
\t            {% for key, entry in exam %}
\t             {{key|replace({'/':'_', ' ':'_'})}}: {{entry['sum']}},
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
\t        {% set mean = 0 %}
\t        {
\t            y: '{{exam[0].examCompany.cTitle}}',
\t            {% for entry in exam %}
\t            \t{% set total = total + entry.marks %}
\t            {% endfor %}
\t            {% set mean = total / class.students|length %}
\t            a: {{total}},
\t            b: {{mean|round(2)}}
\t        },
\t        {% endfor %}
\t        ],
\t        xkey: 'y',
\t        ykeys: ['a', 'b'],
\t        labels: ['Total Score', 'Mean Score'],
\t        hideHover: 'auto',
\t        resize: true
\t    });
   
    });        \t
    </script>
{% endblock %}", "class/profile.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/class/profile.html.twig");
    }
}


/* class/profile.html.twig */
class __TwigTemplate_cb8ce806a0ee0a2015875919b6ad35fd37bf4178b377319b8b2e8e88f4632e14_1191365492 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "class/profile.html.twig", 10);
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
        $__internal_e46ec889f165c18ce93bb95e1cda9849e509d1b9e7d49d62a8b849344acc5872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46ec889f165c18ce93bb95e1cda9849e509d1b9e7d49d62a8b849344acc5872->enter($__internal_e46ec889f165c18ce93bb95e1cda9849e509d1b9e7d49d62a8b849344acc5872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/profile.html.twig"));

        $__internal_47ad1d35932a7556eb2d2ac53fc4245bb2a62ad68de4d77422c060184d309318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ad1d35932a7556eb2d2ac53fc4245bb2a62ad68de4d77422c060184d309318->enter($__internal_47ad1d35932a7556eb2d2ac53fc4245bb2a62ad68de4d77422c060184d309318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e46ec889f165c18ce93bb95e1cda9849e509d1b9e7d49d62a8b849344acc5872->leave($__internal_e46ec889f165c18ce93bb95e1cda9849e509d1b9e7d49d62a8b849344acc5872_prof);

        
        $__internal_47ad1d35932a7556eb2d2ac53fc4245bb2a62ad68de4d77422c060184d309318->leave($__internal_47ad1d35932a7556eb2d2ac53fc4245bb2a62ad68de4d77422c060184d309318_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_e20d108b721918aa70b9a463da2dc321c51aa22847e9903f46b22fd057e8c554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20d108b721918aa70b9a463da2dc321c51aa22847e9903f46b22fd057e8c554->enter($__internal_e20d108b721918aa70b9a463da2dc321c51aa22847e9903f46b22fd057e8c554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_400db0dbaaa7fab8004dae0cd427a95772a5e89a35807689d95c7bac9eccff97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400db0dbaaa7fab8004dae0cd427a95772a5e89a35807689d95c7bac9eccff97->enter($__internal_400db0dbaaa7fab8004dae0cd427a95772a5e89a35807689d95c7bac9eccff97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "\t";
        if ( !twig_test_empty(($context["subject_list"] ?? $this->getContext($context, "subject_list")))) {
            // line 13
            echo "\t<div class=\"col-lg-12\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "cTitle", array()), "html", null, true);
            echo " - Progress Graph for at most Last 5 Exams
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
\t\t\t<h4>You will find the class' graphs for previous exams here, after you have recorded some exam entries.</h4>
\t\t</div>
\t";
        }
        
        $__internal_400db0dbaaa7fab8004dae0cd427a95772a5e89a35807689d95c7bac9eccff97->leave($__internal_400db0dbaaa7fab8004dae0cd427a95772a5e89a35807689d95c7bac9eccff97_prof);

        
        $__internal_e20d108b721918aa70b9a463da2dc321c51aa22847e9903f46b22fd057e8c554->leave($__internal_e20d108b721918aa70b9a463da2dc321c51aa22847e9903f46b22fd057e8c554_prof);

    }

    public function getTemplateName()
    {
        return "class/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 41,  483 => 30,  481 => 29,  470 => 20,  468 => 19,  462 => 16,  457 => 13,  454 => 12,  445 => 11,  416 => 10,  251 => 99,  242 => 96,  237 => 95,  234 => 94,  228 => 93,  225 => 92,  221 => 91,  217 => 90,  214 => 89,  211 => 88,  208 => 87,  204 => 86,  194 => 78,  185 => 76,  181 => 75,  177 => 73,  168 => 71,  164 => 70,  159 => 67,  152 => 65,  141 => 63,  137 => 62,  133 => 61,  130 => 60,  126 => 59,  116 => 52,  112 => 51,  108 => 50,  105 => 49,  96 => 48,  86 => 10,  82 => 9,  78 => 8,  75 => 7,  66 => 6,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
\t{% if subject_list is not empty %}
\t<div class=\"col-lg-12\">
\t  <section class=\"panel\">
\t      <header class=\"panel-heading\">
\t          {{class.cTitle}} - Progress Graph for at most Last 5 Exams
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
\t\t\t<h4>You will find the class' graphs for previous exams here, after you have recorded some exam entries.</h4>
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
\t        {% for exam in subject_list %}
\t        {
\t            y: \"{{exam|first['company'][0]}}\",
\t            {% for key, entry in exam %}
\t             {{key|replace({'/':'_', ' ':'_'})}}: {{entry['sum']}},
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
\t        {% set mean = 0 %}
\t        {
\t            y: '{{exam[0].examCompany.cTitle}}',
\t            {% for entry in exam %}
\t            \t{% set total = total + entry.marks %}
\t            {% endfor %}
\t            {% set mean = total / class.students|length %}
\t            a: {{total}},
\t            b: {{mean|round(2)}}
\t        },
\t        {% endfor %}
\t        ],
\t        xkey: 'y',
\t        ykeys: ['a', 'b'],
\t        labels: ['Total Score', 'Mean Score'],
\t        hideHover: 'auto',
\t        resize: true
\t    });
   
    });        \t
    </script>
{% endblock %}", "class/profile.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/class/profile.html.twig");
    }
}
