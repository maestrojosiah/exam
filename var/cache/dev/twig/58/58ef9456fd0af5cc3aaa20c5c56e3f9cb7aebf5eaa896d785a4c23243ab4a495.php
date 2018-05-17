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
        $__internal_2858652cf59bbcb66e8bb21392886da8da98bb68a3f663da390cbffd6e1f01bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2858652cf59bbcb66e8bb21392886da8da98bb68a3f663da390cbffd6e1f01bc->enter($__internal_2858652cf59bbcb66e8bb21392886da8da98bb68a3f663da390cbffd6e1f01bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/profile.html.twig"));

        $__internal_1f7b55f5ab41c6dc7bd410911c4176f0378a9bceb0efeb7e3bf6afdb4a2fc692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7b55f5ab41c6dc7bd410911c4176f0378a9bceb0efeb7e3bf6afdb4a2fc692->enter($__internal_1f7b55f5ab41c6dc7bd410911c4176f0378a9bceb0efeb7e3bf6afdb4a2fc692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2858652cf59bbcb66e8bb21392886da8da98bb68a3f663da390cbffd6e1f01bc->leave($__internal_2858652cf59bbcb66e8bb21392886da8da98bb68a3f663da390cbffd6e1f01bc_prof);

        
        $__internal_1f7b55f5ab41c6dc7bd410911c4176f0378a9bceb0efeb7e3bf6afdb4a2fc692->leave($__internal_1f7b55f5ab41c6dc7bd410911c4176f0378a9bceb0efeb7e3bf6afdb4a2fc692_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0dbce6ccfdcc40280e089668b3e076fd702fa365796b259e1da8bd64ca6b5713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbce6ccfdcc40280e089668b3e076fd702fa365796b259e1da8bd64ca6b5713->enter($__internal_0dbce6ccfdcc40280e089668b3e076fd702fa365796b259e1da8bd64ca6b5713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_075d7688d48e54b0dd0da2506f90d3bc5957aa6fe853196432100e342f76900e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075d7688d48e54b0dd0da2506f90d3bc5957aa6fe853196432100e342f76900e->enter($__internal_075d7688d48e54b0dd0da2506f90d3bc5957aa6fe853196432100e342f76900e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <!-- Morris Charts CSS -->
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/morrisjs/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style type=\"text/css\">
\t#morris-bar-chart { height:350px; padding-bottom:55px;} 
\tsvg { height:500px;}
\t#morris-bar-chart2 { height:350px; padding-bottom:55px;}
    </style>
";
        
        $__internal_075d7688d48e54b0dd0da2506f90d3bc5957aa6fe853196432100e342f76900e->leave($__internal_075d7688d48e54b0dd0da2506f90d3bc5957aa6fe853196432100e342f76900e_prof);

        
        $__internal_0dbce6ccfdcc40280e089668b3e076fd702fa365796b259e1da8bd64ca6b5713->leave($__internal_0dbce6ccfdcc40280e089668b3e076fd702fa365796b259e1da8bd64ca6b5713_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f02370006761465dd2e7c59c260787ab45a93ba5a54ff1899487c748499ddbf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02370006761465dd2e7c59c260787ab45a93ba5a54ff1899487c748499ddbf9->enter($__internal_f02370006761465dd2e7c59c260787ab45a93ba5a54ff1899487c748499ddbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0859c914932f594d9f339a57ed9d518414c849c0761e398dbb1eed75ffc72e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0859c914932f594d9f339a57ed9d518414c849c0761e398dbb1eed75ffc72e62->enter($__internal_0859c914932f594d9f339a57ed9d518414c849c0761e398dbb1eed75ffc72e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<body>
";
        // line 13
        $context["info"] = "with_print_material";
        // line 14
        echo twig_include($this->env, $context, "templates/header.html.twig");
        echo "        \t\t
";
        // line 15
        echo twig_include($this->env, $context, "templates/aside.html.twig");
        echo "        \t\t
";
        // line 16
        $this->loadTemplate("student/profile.html.twig", "student/profile.html.twig", 16, "410968638")->display($context);
        
        $__internal_0859c914932f594d9f339a57ed9d518414c849c0761e398dbb1eed75ffc72e62->leave($__internal_0859c914932f594d9f339a57ed9d518414c849c0761e398dbb1eed75ffc72e62_prof);

        
        $__internal_f02370006761465dd2e7c59c260787ab45a93ba5a54ff1899487c748499ddbf9->leave($__internal_f02370006761465dd2e7c59c260787ab45a93ba5a54ff1899487c748499ddbf9_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d5db921a50a3dec4e038b4464232dac0f64097e9cd95c7edfbfcd00aacfd653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5db921a50a3dec4e038b4464232dac0f64097e9cd95c7edfbfcd00aacfd653->enter($__internal_6d5db921a50a3dec4e038b4464232dac0f64097e9cd95c7edfbfcd00aacfd653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_524b96008f098e9b1aad8d4928abca7b9aeb2ee0dccfc49290f286cacba2157d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524b96008f098e9b1aad8d4928abca7b9aeb2ee0dccfc49290f286cacba2157d->enter($__internal_524b96008f098e9b1aad8d4928abca7b9aeb2ee0dccfc49290f286cacba2157d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "    <!-- Morris Charts JavaScript -->
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/morrisjs/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("data/morris-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("printThis/printThis.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
\t  \$(document).ready(function() {
\t    \$( \"#triggerPrint\" ).click(function(e) {\t\t
\t    \t\$(\"#printDiv\").printThis({
\t\t\t    debug: false,               // show the iframe for debugging
\t\t\t    importCSS: true,            // import page CSS
\t\t\t    importStyle: false,         // import style tags
\t\t\t    printContainer: true,       // grab outer container as well as the contents of the selector
\t\t\t    pageTitle: \"Performance History for ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "names", array()), "html", null, true);
        echo "\",              // add title to print page
\t\t\t    removeInline: false,        // remove all inline styles from print elements
\t\t\t    printDelay: 333,            // variable print delay; depending on complexity a higher value may be necessary
\t\t\t    header: null,               // prefix to html
\t\t\t    footer: null,               // postfix to html
\t\t\t    base: false ,               // preserve the BASE tag, or accept a string for the URL
\t\t\t    formValues: true,           // preserve input/form values
\t\t\t    canvas: false,              // copy canvas elements (experimental)
\t\t\t    doctypeString: \"...\",       // enter a different doctype for older markup
\t\t\t    removeScripts: false,       // remove script tags from print content
\t\t\t    copyTagClasses: false       // copy classes from the html & body tag
\t\t\t});
\t    });
\t  });    
\t</script>
    <script type=\"text/javascript\">
    \$(function() {

\t    Morris.Bar({
\t        element: 'morris-bar-chart',
\t        data: [
\t        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["score_lst"] ?? $this->getContext($context, "score_lst")));
        foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
            // line 94
            echo "\t        {
\t            y: '";
            // line 95
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["exam"], 0, array(), "array"), "examCompany", array()), "cTitle", array()), 0, 20), "html", null, true);
            echo "',
\t            ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["exam"]);
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 97
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
            // line 99
            echo "\t        },
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t        ],
\t        xkey: 'y',
\t        ykeys: [
\t            ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 105
            echo "\t            '";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["subject"], "sTitle", array()), array("/" => "_", " " => "_")), "html", null, true);
            echo "',
\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "\t        ],
\t        labels: [
\t            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 110
            echo "\t            '";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["subject"], "sTitle", array()), array("/" => "_", " " => "_")), "html", null, true);
            echo "',
\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "\t        ],
\t        hideHover: 'auto',
\t        resize: true,
\t        xLabelAngle: 60,
\t    });

\t\tvar items = \$(\"#morris-bar-chart\").find( \"svg\" ).find(\"rect\");
\t\t\$.each(items,function(index,v){
\t\t    var value = ";
        // line 120
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["list"] ?? $this->getContext($context, "list"))), "html", null, true);
        echo "[index]//theJson[index].count;
\t\t    var newY = parseFloat( \$(this).attr('y') - 20 );
\t\t    var halfWidth = parseFloat( \$(this).attr('width') / 2 );
\t\t    var newX = parseFloat( \$(this).attr('x') ) +  halfWidth;
\t\t    var output = '<text style=\"text-anchor: middle; font: 12px sans-serif;\" x=\"'+newX+'\" y=\"'+newY+'\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#000000\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,6.875)\"><tspan dy=\"3.75\">'+value+'</tspan></text>';
\t\t    \$(\"#morris-bar-chart\").find( \"svg\" ).append(parseSVG(output));
\t\t});

\t    Morris.Bar({
\t        element: 'morris-bar-chart2',
\t        data: [
\t        ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["score_lst"] ?? $this->getContext($context, "score_lst")));
        foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
            // line 132
            echo "\t        ";
            $context["total"] = 0;
            // line 133
            echo "\t        {
\t            y: '";
            // line 134
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["exam"], 0, array(), "array"), "examCompany", array()), "cTitle", array()), 0, 20), "html", null, true);
            echo "',
\t            ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["exam"]);
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 136
                echo "\t            \t";
                $context["total"] = (($context["total"] ?? $this->getContext($context, "total")) + $this->getAttribute($context["entry"], "marks", array()));
                // line 137
                echo "\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "\t            a: ";
            echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
            echo "
\t        },
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "\t        ],
\t        xkey: 'y',
\t        ykeys: ['a'],
\t        labels: ['Total Score'],
\t        hideHover: 'auto',
\t        resize: true,
\t        xLabelAngle: 60,
\t    });
   
\t\tvar items2 = \$(\"#morris-bar-chart2\").find( \"svg\" ).find(\"rect\");
\t\t\$.each(items2,function(index,v){
\t\t    var value = ";
        // line 152
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["totalScore"] ?? $this->getContext($context, "totalScore"))), "html", null, true);
        echo "[index]//theJson[index].count;
\t\t    var newY = parseFloat( \$(this).attr('y') - 20 );
\t\t    var halfWidth = parseFloat( \$(this).attr('width') / 2 );
\t\t    var newX = parseFloat( \$(this).attr('x') ) +  halfWidth;
\t\t    var output = '<text style=\"text-anchor: middle; font: 12px sans-serif;\" x=\"'+newX+'\" y=\"'+newY+'\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#000000\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,6.875)\"><tspan dy=\"3.75\">'+value+'</tspan></text>';
\t\t    \$(\"#morris-bar-chart2\").find( \"svg\" ).append(parseSVG(output));
\t\t});

    });    

    function parseSVG(s) {
        var div= document.createElementNS('http://www.w3.org/1999/xhtml', 'div');
        div.innerHTML= '<svg xmlns=\"http://www.w3.org/2000/svg\">'+s+'</svg>';
        var frag= document.createDocumentFragment();
        while (div.firstChild.firstChild)
            frag.appendChild(div.firstChild.firstChild);
        return frag;
    }    
    \t
    </script>
";
        
        $__internal_524b96008f098e9b1aad8d4928abca7b9aeb2ee0dccfc49290f286cacba2157d->leave($__internal_524b96008f098e9b1aad8d4928abca7b9aeb2ee0dccfc49290f286cacba2157d_prof);

        
        $__internal_6d5db921a50a3dec4e038b4464232dac0f64097e9cd95c7edfbfcd00aacfd653->leave($__internal_6d5db921a50a3dec4e038b4464232dac0f64097e9cd95c7edfbfcd00aacfd653_prof);

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
        return array (  305 => 152,  292 => 141,  282 => 138,  276 => 137,  273 => 136,  269 => 135,  265 => 134,  262 => 133,  259 => 132,  255 => 131,  241 => 120,  231 => 112,  222 => 110,  218 => 109,  214 => 107,  205 => 105,  201 => 104,  196 => 101,  189 => 99,  178 => 97,  174 => 96,  170 => 95,  167 => 94,  163 => 93,  139 => 72,  127 => 63,  123 => 62,  119 => 61,  115 => 60,  112 => 59,  103 => 58,  93 => 16,  89 => 15,  85 => 14,  83 => 13,  80 => 12,  71 => 11,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
    <style type=\"text/css\">
\t#morris-bar-chart { height:350px; padding-bottom:55px;} 
\tsvg { height:500px;}
\t#morris-bar-chart2 { height:350px; padding-bottom:55px;}
    </style>
{% endblock %}
{% block body %}
<body>
{% set info = \"with_print_material\" %}
{{ include('templates/header.html.twig') }}        \t\t
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}
\t{% if score_lst is not empty %}
\t<div class=\"col-lg-12\">
\t  <section class=\"panel\" id=\"printDiv\">
\t      <header class=\"panel-heading\">
\t          {{student.names}} [{{student.class.cTitle}}] - Progress Graph for at most Last 5 Exams
          \t\t [ Order of subjects
\t            {% for subject in app.user.subjects %}
\t             <span style=\"margin:20px\">{{subject.sTitle}}</span>
\t            {% endfor %} ]
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
    <script src=\"{{asset('printThis/printThis.js')}}\"></script>
    <script type=\"text/javascript\">
\t  \$(document).ready(function() {
\t    \$( \"#triggerPrint\" ).click(function(e) {\t\t
\t    \t\$(\"#printDiv\").printThis({
\t\t\t    debug: false,               // show the iframe for debugging
\t\t\t    importCSS: true,            // import page CSS
\t\t\t    importStyle: false,         // import style tags
\t\t\t    printContainer: true,       // grab outer container as well as the contents of the selector
\t\t\t    pageTitle: \"Performance History for {{student.names}}\",              // add title to print page
\t\t\t    removeInline: false,        // remove all inline styles from print elements
\t\t\t    printDelay: 333,            // variable print delay; depending on complexity a higher value may be necessary
\t\t\t    header: null,               // prefix to html
\t\t\t    footer: null,               // postfix to html
\t\t\t    base: false ,               // preserve the BASE tag, or accept a string for the URL
\t\t\t    formValues: true,           // preserve input/form values
\t\t\t    canvas: false,              // copy canvas elements (experimental)
\t\t\t    doctypeString: \"...\",       // enter a different doctype for older markup
\t\t\t    removeScripts: false,       // remove script tags from print content
\t\t\t    copyTagClasses: false       // copy classes from the html & body tag
\t\t\t});
\t    });
\t  });    
\t</script>
    <script type=\"text/javascript\">
    \$(function() {

\t    Morris.Bar({
\t        element: 'morris-bar-chart',
\t        data: [
\t        {% for exam in score_lst %}
\t        {
\t            y: '{{exam[0].examCompany.cTitle|slice(0,20)}}',
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
\t        resize: true,
\t        xLabelAngle: 60,
\t    });

\t\tvar items = \$(\"#morris-bar-chart\").find( \"svg\" ).find(\"rect\");
\t\t\$.each(items,function(index,v){
\t\t    var value = {{list|json_encode()}}[index]//theJson[index].count;
\t\t    var newY = parseFloat( \$(this).attr('y') - 20 );
\t\t    var halfWidth = parseFloat( \$(this).attr('width') / 2 );
\t\t    var newX = parseFloat( \$(this).attr('x') ) +  halfWidth;
\t\t    var output = '<text style=\"text-anchor: middle; font: 12px sans-serif;\" x=\"'+newX+'\" y=\"'+newY+'\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#000000\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,6.875)\"><tspan dy=\"3.75\">'+value+'</tspan></text>';
\t\t    \$(\"#morris-bar-chart\").find( \"svg\" ).append(parseSVG(output));
\t\t});

\t    Morris.Bar({
\t        element: 'morris-bar-chart2',
\t        data: [
\t        {% for exam in score_lst %}
\t        {% set total = 0 %}
\t        {
\t            y: '{{exam[0].examCompany.cTitle|slice(0,20)}}',
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
\t        resize: true,
\t        xLabelAngle: 60,
\t    });
   
\t\tvar items2 = \$(\"#morris-bar-chart2\").find( \"svg\" ).find(\"rect\");
\t\t\$.each(items2,function(index,v){
\t\t    var value = {{totalScore|json_encode()}}[index]//theJson[index].count;
\t\t    var newY = parseFloat( \$(this).attr('y') - 20 );
\t\t    var halfWidth = parseFloat( \$(this).attr('width') / 2 );
\t\t    var newX = parseFloat( \$(this).attr('x') ) +  halfWidth;
\t\t    var output = '<text style=\"text-anchor: middle; font: 12px sans-serif;\" x=\"'+newX+'\" y=\"'+newY+'\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#000000\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,6.875)\"><tspan dy=\"3.75\">'+value+'</tspan></text>';
\t\t    \$(\"#morris-bar-chart2\").find( \"svg\" ).append(parseSVG(output));
\t\t});

    });    

    function parseSVG(s) {
        var div= document.createElementNS('http://www.w3.org/1999/xhtml', 'div');
        div.innerHTML= '<svg xmlns=\"http://www.w3.org/2000/svg\">'+s+'</svg>';
        var frag= document.createDocumentFragment();
        while (div.firstChild.firstChild)
            frag.appendChild(div.firstChild.firstChild);
        return frag;
    }    
    \t
    </script>
{% endblock %}", "student/profile.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/student/profile.html.twig");
    }
}


/* student/profile.html.twig */
class __TwigTemplate_a235699314efcb3e806d187359928760d3a7782f31bbb9ab0e65618716f64fba_410968638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "student/profile.html.twig", 16);
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
        $__internal_5181af07b76450bf203c085d8b20d2c704c522b0403c1f2124c0ebf0730ad880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5181af07b76450bf203c085d8b20d2c704c522b0403c1f2124c0ebf0730ad880->enter($__internal_5181af07b76450bf203c085d8b20d2c704c522b0403c1f2124c0ebf0730ad880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/profile.html.twig"));

        $__internal_b32cd36dda71ae7959f515543cb57446cebdf6fa1c04981306f03f1d7ce45530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32cd36dda71ae7959f515543cb57446cebdf6fa1c04981306f03f1d7ce45530->enter($__internal_b32cd36dda71ae7959f515543cb57446cebdf6fa1c04981306f03f1d7ce45530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5181af07b76450bf203c085d8b20d2c704c522b0403c1f2124c0ebf0730ad880->leave($__internal_5181af07b76450bf203c085d8b20d2c704c522b0403c1f2124c0ebf0730ad880_prof);

        
        $__internal_b32cd36dda71ae7959f515543cb57446cebdf6fa1c04981306f03f1d7ce45530->leave($__internal_b32cd36dda71ae7959f515543cb57446cebdf6fa1c04981306f03f1d7ce45530_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_ab5555a8911c3409f7930dd4fb9d3752e5ca7f9e9558f122f41908d977e79367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab5555a8911c3409f7930dd4fb9d3752e5ca7f9e9558f122f41908d977e79367->enter($__internal_ab5555a8911c3409f7930dd4fb9d3752e5ca7f9e9558f122f41908d977e79367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2357ccb65b8d2cf0bf0e1c2385c70279901a4ee2e5e6669c059477c685e2c921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2357ccb65b8d2cf0bf0e1c2385c70279901a4ee2e5e6669c059477c685e2c921->enter($__internal_2357ccb65b8d2cf0bf0e1c2385c70279901a4ee2e5e6669c059477c685e2c921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t";
        if ( !twig_test_empty(($context["score_lst"] ?? $this->getContext($context, "score_lst")))) {
            // line 19
            echo "\t<div class=\"col-lg-12\">
\t  <section class=\"panel\" id=\"printDiv\">
\t      <header class=\"panel-heading\">
\t          ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "names", array()), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "class", array()), "cTitle", array()), "html", null, true);
            echo "] - Progress Graph for at most Last 5 Exams
          \t\t [ Order of subjects
\t            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 25
                echo "\t             <span style=\"margin:20px\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "sTitle", array()), "html", null, true);
                echo "</span>
\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo " ]
\t      </header>
\t      <div class=\"panel-body\" id=\"chartjs\">
\t      \t";
            // line 29
            $context["width"] = (twig_length_filter($this->env, ($context["exams"] ?? $this->getContext($context, "exams"))) * 250);
            // line 30
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
            // line 39
            $context["width"] = (twig_length_filter($this->env, ($context["exams"] ?? $this->getContext($context, "exams"))) * 250);
            // line 40
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
            // line 51
            echo "\t\t<div class=\"well\">
\t\t\t<h4>You will find the student's graphs for previous exams here, after you have recorded some exam entries.</h4>
\t\t</div>
\t";
        }
        
        $__internal_2357ccb65b8d2cf0bf0e1c2385c70279901a4ee2e5e6669c059477c685e2c921->leave($__internal_2357ccb65b8d2cf0bf0e1c2385c70279901a4ee2e5e6669c059477c685e2c921_prof);

        
        $__internal_ab5555a8911c3409f7930dd4fb9d3752e5ca7f9e9558f122f41908d977e79367->leave($__internal_ab5555a8911c3409f7930dd4fb9d3752e5ca7f9e9558f122f41908d977e79367_prof);

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
        return array (  643 => 51,  630 => 40,  628 => 39,  617 => 30,  615 => 29,  610 => 26,  601 => 25,  597 => 24,  590 => 22,  585 => 19,  582 => 18,  573 => 17,  544 => 16,  305 => 152,  292 => 141,  282 => 138,  276 => 137,  273 => 136,  269 => 135,  265 => 134,  262 => 133,  259 => 132,  255 => 131,  241 => 120,  231 => 112,  222 => 110,  218 => 109,  214 => 107,  205 => 105,  201 => 104,  196 => 101,  189 => 99,  178 => 97,  174 => 96,  170 => 95,  167 => 94,  163 => 93,  139 => 72,  127 => 63,  123 => 62,  119 => 61,  115 => 60,  112 => 59,  103 => 58,  93 => 16,  89 => 15,  85 => 14,  83 => 13,  80 => 12,  71 => 11,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
    <style type=\"text/css\">
\t#morris-bar-chart { height:350px; padding-bottom:55px;} 
\tsvg { height:500px;}
\t#morris-bar-chart2 { height:350px; padding-bottom:55px;}
    </style>
{% endblock %}
{% block body %}
<body>
{% set info = \"with_print_material\" %}
{{ include('templates/header.html.twig') }}        \t\t
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}
\t{% if score_lst is not empty %}
\t<div class=\"col-lg-12\">
\t  <section class=\"panel\" id=\"printDiv\">
\t      <header class=\"panel-heading\">
\t          {{student.names}} [{{student.class.cTitle}}] - Progress Graph for at most Last 5 Exams
          \t\t [ Order of subjects
\t            {% for subject in app.user.subjects %}
\t             <span style=\"margin:20px\">{{subject.sTitle}}</span>
\t            {% endfor %} ]
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
    <script src=\"{{asset('printThis/printThis.js')}}\"></script>
    <script type=\"text/javascript\">
\t  \$(document).ready(function() {
\t    \$( \"#triggerPrint\" ).click(function(e) {\t\t
\t    \t\$(\"#printDiv\").printThis({
\t\t\t    debug: false,               // show the iframe for debugging
\t\t\t    importCSS: true,            // import page CSS
\t\t\t    importStyle: false,         // import style tags
\t\t\t    printContainer: true,       // grab outer container as well as the contents of the selector
\t\t\t    pageTitle: \"Performance History for {{student.names}}\",              // add title to print page
\t\t\t    removeInline: false,        // remove all inline styles from print elements
\t\t\t    printDelay: 333,            // variable print delay; depending on complexity a higher value may be necessary
\t\t\t    header: null,               // prefix to html
\t\t\t    footer: null,               // postfix to html
\t\t\t    base: false ,               // preserve the BASE tag, or accept a string for the URL
\t\t\t    formValues: true,           // preserve input/form values
\t\t\t    canvas: false,              // copy canvas elements (experimental)
\t\t\t    doctypeString: \"...\",       // enter a different doctype for older markup
\t\t\t    removeScripts: false,       // remove script tags from print content
\t\t\t    copyTagClasses: false       // copy classes from the html & body tag
\t\t\t});
\t    });
\t  });    
\t</script>
    <script type=\"text/javascript\">
    \$(function() {

\t    Morris.Bar({
\t        element: 'morris-bar-chart',
\t        data: [
\t        {% for exam in score_lst %}
\t        {
\t            y: '{{exam[0].examCompany.cTitle|slice(0,20)}}',
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
\t        resize: true,
\t        xLabelAngle: 60,
\t    });

\t\tvar items = \$(\"#morris-bar-chart\").find( \"svg\" ).find(\"rect\");
\t\t\$.each(items,function(index,v){
\t\t    var value = {{list|json_encode()}}[index]//theJson[index].count;
\t\t    var newY = parseFloat( \$(this).attr('y') - 20 );
\t\t    var halfWidth = parseFloat( \$(this).attr('width') / 2 );
\t\t    var newX = parseFloat( \$(this).attr('x') ) +  halfWidth;
\t\t    var output = '<text style=\"text-anchor: middle; font: 12px sans-serif;\" x=\"'+newX+'\" y=\"'+newY+'\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#000000\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,6.875)\"><tspan dy=\"3.75\">'+value+'</tspan></text>';
\t\t    \$(\"#morris-bar-chart\").find( \"svg\" ).append(parseSVG(output));
\t\t});

\t    Morris.Bar({
\t        element: 'morris-bar-chart2',
\t        data: [
\t        {% for exam in score_lst %}
\t        {% set total = 0 %}
\t        {
\t            y: '{{exam[0].examCompany.cTitle|slice(0,20)}}',
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
\t        resize: true,
\t        xLabelAngle: 60,
\t    });
   
\t\tvar items2 = \$(\"#morris-bar-chart2\").find( \"svg\" ).find(\"rect\");
\t\t\$.each(items2,function(index,v){
\t\t    var value = {{totalScore|json_encode()}}[index]//theJson[index].count;
\t\t    var newY = parseFloat( \$(this).attr('y') - 20 );
\t\t    var halfWidth = parseFloat( \$(this).attr('width') / 2 );
\t\t    var newX = parseFloat( \$(this).attr('x') ) +  halfWidth;
\t\t    var output = '<text style=\"text-anchor: middle; font: 12px sans-serif;\" x=\"'+newX+'\" y=\"'+newY+'\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#000000\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,6.875)\"><tspan dy=\"3.75\">'+value+'</tspan></text>';
\t\t    \$(\"#morris-bar-chart2\").find( \"svg\" ).append(parseSVG(output));
\t\t});

    });    

    function parseSVG(s) {
        var div= document.createElementNS('http://www.w3.org/1999/xhtml', 'div');
        div.innerHTML= '<svg xmlns=\"http://www.w3.org/2000/svg\">'+s+'</svg>';
        var frag= document.createDocumentFragment();
        while (div.firstChild.firstChild)
            frag.appendChild(div.firstChild.firstChild);
        return frag;
    }    
    \t
    </script>
{% endblock %}", "student/profile.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/student/profile.html.twig");
    }
}
