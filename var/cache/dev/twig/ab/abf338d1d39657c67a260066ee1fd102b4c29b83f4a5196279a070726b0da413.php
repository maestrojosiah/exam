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
        $__internal_d1355b622469efab8c8b93673eda75302e8e7680ff58b9efb74e3470c783f4be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1355b622469efab8c8b93673eda75302e8e7680ff58b9efb74e3470c783f4be->enter($__internal_d1355b622469efab8c8b93673eda75302e8e7680ff58b9efb74e3470c783f4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/profile.html.twig"));

        $__internal_3dd81bdb42c6d737de12003977e8ec0d7c74b7a1db1daa32d4113c0a59ead8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd81bdb42c6d737de12003977e8ec0d7c74b7a1db1daa32d4113c0a59ead8db->enter($__internal_3dd81bdb42c6d737de12003977e8ec0d7c74b7a1db1daa32d4113c0a59ead8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1355b622469efab8c8b93673eda75302e8e7680ff58b9efb74e3470c783f4be->leave($__internal_d1355b622469efab8c8b93673eda75302e8e7680ff58b9efb74e3470c783f4be_prof);

        
        $__internal_3dd81bdb42c6d737de12003977e8ec0d7c74b7a1db1daa32d4113c0a59ead8db->leave($__internal_3dd81bdb42c6d737de12003977e8ec0d7c74b7a1db1daa32d4113c0a59ead8db_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38ee01690e5fbb64cdc064a0105e56df7b0e905491c7d9b24727ab8ff75f9c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38ee01690e5fbb64cdc064a0105e56df7b0e905491c7d9b24727ab8ff75f9c5b->enter($__internal_38ee01690e5fbb64cdc064a0105e56df7b0e905491c7d9b24727ab8ff75f9c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a21d1f1e63f2be97db3570dca872befe85788b82782a64da3283327d2c71b53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21d1f1e63f2be97db3570dca872befe85788b82782a64da3283327d2c71b53d->enter($__internal_a21d1f1e63f2be97db3570dca872befe85788b82782a64da3283327d2c71b53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <!-- Morris Charts CSS -->
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/morrisjs/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_a21d1f1e63f2be97db3570dca872befe85788b82782a64da3283327d2c71b53d->leave($__internal_a21d1f1e63f2be97db3570dca872befe85788b82782a64da3283327d2c71b53d_prof);

        
        $__internal_38ee01690e5fbb64cdc064a0105e56df7b0e905491c7d9b24727ab8ff75f9c5b->leave($__internal_38ee01690e5fbb64cdc064a0105e56df7b0e905491c7d9b24727ab8ff75f9c5b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_47940e16634f9a080d28da2d73314d2d7c0d4621f6ca75b6a1e9b67107e7482c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47940e16634f9a080d28da2d73314d2d7c0d4621f6ca75b6a1e9b67107e7482c->enter($__internal_47940e16634f9a080d28da2d73314d2d7c0d4621f6ca75b6a1e9b67107e7482c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89d08c9f0006df47a6ac31e171257bd35791305022bad0449120284b7bac65f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d08c9f0006df47a6ac31e171257bd35791305022bad0449120284b7bac65f8->enter($__internal_89d08c9f0006df47a6ac31e171257bd35791305022bad0449120284b7bac65f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<body>
";
        // line 8
        $context["info"] = "with_print_material";
        // line 9
        echo twig_include($this->env, $context, "templates/header.html.twig");
        echo "        \t\t
";
        // line 10
        echo twig_include($this->env, $context, "templates/aside.html.twig");
        echo "        \t\t
";
        // line 11
        $this->loadTemplate("class/profile.html.twig", "class/profile.html.twig", 11, "1934650026")->display($context);
        
        $__internal_89d08c9f0006df47a6ac31e171257bd35791305022bad0449120284b7bac65f8->leave($__internal_89d08c9f0006df47a6ac31e171257bd35791305022bad0449120284b7bac65f8_prof);

        
        $__internal_47940e16634f9a080d28da2d73314d2d7c0d4621f6ca75b6a1e9b67107e7482c->leave($__internal_47940e16634f9a080d28da2d73314d2d7c0d4621f6ca75b6a1e9b67107e7482c_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e228872ac6eb9b391085723e6fda8cb24bcb11bf018f48251174b25add5d8df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e228872ac6eb9b391085723e6fda8cb24bcb11bf018f48251174b25add5d8df->enter($__internal_7e228872ac6eb9b391085723e6fda8cb24bcb11bf018f48251174b25add5d8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9e22307e0f40c9b06e677cd91981ff173aa608c45513be72a937d543ba4fb6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e22307e0f40c9b06e677cd91981ff173aa608c45513be72a937d543ba4fb6ba->enter($__internal_9e22307e0f40c9b06e677cd91981ff173aa608c45513be72a937d543ba4fb6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    <!-- Morris Charts JavaScript -->
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/morrisjs/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("data/morris-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
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
\t\t\t    pageTitle: \"Performance History for class ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "cTitle", array()), "html", null, true);
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
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subject_list"] ?? $this->getContext($context, "subject_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
            // line 89
            echo "\t        {
\t            y: \"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $context["exam"]), "company", array(), "array"), 0, array(), "array"), "html", null, true);
            echo "\",
\t            ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["exam"]);
            foreach ($context['_seq'] as $context["key"] => $context["entry"]) {
                // line 92
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
            // line 94
            echo "\t        },
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t        ],
\t        xkey: 'y',
\t        ykeys: [
\t            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 100
            echo "\t            '";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["subject"], "sTitle", array()), array("/" => "_", " " => "_")), "html", null, true);
            echo "',
\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "\t        ],
\t        labels: [
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
\t        hideHover: 'auto',
\t        resize: true
\t    });

\t\tvar items = \$(\"#morris-bar-chart\").find( \"svg\" ).find(\"rect\");
\t\t\$.each(items,function(index,v){
\t\t    var value = ";
        // line 114
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["list"] ?? $this->getContext($context, "list"))), "html", null, true);
        echo "[index]//theJson[index].count;
\t\t    var newY = parseFloat( \$(this).attr('y') - 20 );
\t\t    var halfWidth = parseFloat( \$(this).attr('width') / 2 );
\t\t    var newX = parseFloat( \$(this).attr('x') ) +  halfWidth;
\t\t    var output = '<text style=\"text-anchor: middle; font: 12px sans-serif;\" x=\"'+newX+'\" y=\"'+newY+'\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#000000\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,6.875)\"><tspan dy=\"3.75\">'+value+'</tspan></text>';
\t\t    \$(\"#morris-bar-chart\").find( \"svg\" ).append(parseSVG(output));
\t\t});

   
    });        \t
\tfunction parseSVG(s) {
        var div= document.createElementNS('http://www.w3.org/1999/xhtml', 'div');
        div.innerHTML= '<svg xmlns=\"http://www.w3.org/2000/svg\">'+s+'</svg>';
        var frag= document.createDocumentFragment();
        while (div.firstChild.firstChild)
            frag.appendChild(div.firstChild.firstChild);
        return frag;
    }    
    </script>

    <script type=\"text/javascript\">

\t    Morris.Bar({
\t        element: 'morris-bar-chart2',
\t        data: [
\t        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["score_lst"] ?? $this->getContext($context, "score_lst")));
        foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
            // line 140
            echo "\t        ";
            $context["total"] = 0;
            // line 141
            echo "\t        ";
            $context["mean"] = 0;
            // line 142
            echo "\t        {
\t            y: '";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["exam"], 0, array(), "array"), "examCompany", array()), "cTitle", array()), "html", null, true);
            echo "',
\t            ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["exam"]);
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 145
                echo "\t            \t";
                $context["total"] = (($context["total"] ?? $this->getContext($context, "total")) + $this->getAttribute($context["entry"], "marks", array()));
                // line 146
                echo "\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "\t            ";
            $context["mean"] = (($context["total"] ?? $this->getContext($context, "total")) / twig_length_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "students", array())));
            // line 148
            echo "\t            a: ";
            echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
            echo ",
\t            b: ";
            // line 149
            echo twig_escape_filter($this->env, twig_round(($context["mean"] ?? $this->getContext($context, "mean")), 2), "html", null, true);
            echo "
\t        },
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "\t        ],
\t        xkey: 'y',
\t        ykeys: ['a', 'b'],
\t        labels: ['Total Score', 'Mean Score'],
\t        hideHover: 'auto',
\t        resize: true
\t    });

\t\tvar items2 = \$(\"#morris-bar-chart2\").find( \"svg\" ).find(\"rect\");
\t\t\$.each(items2,function(index,v){
\t\t    var value = ";
        // line 162
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["merged"] ?? $this->getContext($context, "merged"))), "html", null, true);
        echo "[index]
\t\t    var newY = parseFloat( \$(this).attr('y') - 20 );
\t\t    var halfWidth = parseFloat( \$(this).attr('width') / 2 );
\t\t    var newX = parseFloat( \$(this).attr('x') ) +  halfWidth;
\t\t    var output = '<text style=\"text-anchor: middle; font: 12px sans-serif;\" x=\"'+newX+'\" y=\"'+newY+'\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#000000\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,6.875)\"><tspan dy=\"3.75\">'+value+'</tspan></text>';
\t\t    \$(\"#morris-bar-chart2\").find( \"svg\" ).append(parseSVG(output));
\t\tconsole.log(value);
\t\t});

    </script>
";
        
        $__internal_9e22307e0f40c9b06e677cd91981ff173aa608c45513be72a937d543ba4fb6ba->leave($__internal_9e22307e0f40c9b06e677cd91981ff173aa608c45513be72a937d543ba4fb6ba_prof);

        
        $__internal_7e228872ac6eb9b391085723e6fda8cb24bcb11bf018f48251174b25add5d8df->leave($__internal_7e228872ac6eb9b391085723e6fda8cb24bcb11bf018f48251174b25add5d8df_prof);

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
        return array (  322 => 162,  310 => 152,  301 => 149,  296 => 148,  293 => 147,  287 => 146,  284 => 145,  280 => 144,  276 => 143,  273 => 142,  270 => 141,  267 => 140,  263 => 139,  235 => 114,  226 => 107,  217 => 105,  213 => 104,  209 => 102,  200 => 100,  196 => 99,  191 => 96,  184 => 94,  173 => 92,  169 => 91,  165 => 90,  162 => 89,  158 => 88,  134 => 67,  122 => 58,  118 => 57,  114 => 56,  110 => 55,  107 => 54,  98 => 53,  88 => 11,  84 => 10,  80 => 9,  78 => 8,  75 => 7,  66 => 6,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
{% set info = \"with_print_material\" %}
{{ include('templates/header.html.twig') }}        \t\t
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}
\t{% if subject_list is not empty %}
\t<div class=\"col-lg-12\">
\t  <section id=\"printDiv\" class=\"panel\">
\t      <header class=\"panel-heading\">
\t          {{class.cTitle}} - Progress Graph for at most Last 5 Exams
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
    <script src=\"{{asset('printThis/printThis.js')}}\"></script>
    <script type=\"text/javascript\">
\t  \$(document).ready(function() {
\t    \$( \"#triggerPrint\" ).click(function(e) {\t\t
\t    \t\$(\"#printDiv\").printThis({
\t\t\t    debug: false,               // show the iframe for debugging
\t\t\t    importCSS: true,            // import page CSS
\t\t\t    importStyle: false,         // import style tags
\t\t\t    printContainer: true,       // grab outer container as well as the contents of the selector
\t\t\t    pageTitle: \"Performance History for class {{class.cTitle}}\",              // add title to print page
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

\t\tvar items = \$(\"#morris-bar-chart\").find( \"svg\" ).find(\"rect\");
\t\t\$.each(items,function(index,v){
\t\t    var value = {{list|json_encode()}}[index]//theJson[index].count;
\t\t    var newY = parseFloat( \$(this).attr('y') - 20 );
\t\t    var halfWidth = parseFloat( \$(this).attr('width') / 2 );
\t\t    var newX = parseFloat( \$(this).attr('x') ) +  halfWidth;
\t\t    var output = '<text style=\"text-anchor: middle; font: 12px sans-serif;\" x=\"'+newX+'\" y=\"'+newY+'\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#000000\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,6.875)\"><tspan dy=\"3.75\">'+value+'</tspan></text>';
\t\t    \$(\"#morris-bar-chart\").find( \"svg\" ).append(parseSVG(output));
\t\t});

   
    });        \t
\tfunction parseSVG(s) {
        var div= document.createElementNS('http://www.w3.org/1999/xhtml', 'div');
        div.innerHTML= '<svg xmlns=\"http://www.w3.org/2000/svg\">'+s+'</svg>';
        var frag= document.createDocumentFragment();
        while (div.firstChild.firstChild)
            frag.appendChild(div.firstChild.firstChild);
        return frag;
    }    
    </script>

    <script type=\"text/javascript\">

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

\t\tvar items2 = \$(\"#morris-bar-chart2\").find( \"svg\" ).find(\"rect\");
\t\t\$.each(items2,function(index,v){
\t\t    var value = {{merged|json_encode()}}[index]
\t\t    var newY = parseFloat( \$(this).attr('y') - 20 );
\t\t    var halfWidth = parseFloat( \$(this).attr('width') / 2 );
\t\t    var newX = parseFloat( \$(this).attr('x') ) +  halfWidth;
\t\t    var output = '<text style=\"text-anchor: middle; font: 12px sans-serif;\" x=\"'+newX+'\" y=\"'+newY+'\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#000000\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,6.875)\"><tspan dy=\"3.75\">'+value+'</tspan></text>';
\t\t    \$(\"#morris-bar-chart2\").find( \"svg\" ).append(parseSVG(output));
\t\tconsole.log(value);
\t\t});

    </script>
{% endblock %}", "class/profile.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/class/profile.html.twig");
    }
}


/* class/profile.html.twig */
class __TwigTemplate_cb8ce806a0ee0a2015875919b6ad35fd37bf4178b377319b8b2e8e88f4632e14_1934650026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "class/profile.html.twig", 11);
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
        $__internal_17940b67393a7660ffa53cd464ffe25996901ca8929c7da61dec4577b61a8185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17940b67393a7660ffa53cd464ffe25996901ca8929c7da61dec4577b61a8185->enter($__internal_17940b67393a7660ffa53cd464ffe25996901ca8929c7da61dec4577b61a8185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/profile.html.twig"));

        $__internal_33c078e267268c47a78f42b5981281189be5ba6e08751c8e87f133ae18945c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c078e267268c47a78f42b5981281189be5ba6e08751c8e87f133ae18945c68->enter($__internal_33c078e267268c47a78f42b5981281189be5ba6e08751c8e87f133ae18945c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17940b67393a7660ffa53cd464ffe25996901ca8929c7da61dec4577b61a8185->leave($__internal_17940b67393a7660ffa53cd464ffe25996901ca8929c7da61dec4577b61a8185_prof);

        
        $__internal_33c078e267268c47a78f42b5981281189be5ba6e08751c8e87f133ae18945c68->leave($__internal_33c078e267268c47a78f42b5981281189be5ba6e08751c8e87f133ae18945c68_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_3cbf95b509ac8db19dd487d5996b9914cb292f980c2d5796de4b4263078d7e18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cbf95b509ac8db19dd487d5996b9914cb292f980c2d5796de4b4263078d7e18->enter($__internal_3cbf95b509ac8db19dd487d5996b9914cb292f980c2d5796de4b4263078d7e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_68000330baa5be0017d829a2463de80ae683ad48ad425dbf4addc1dd39be1c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68000330baa5be0017d829a2463de80ae683ad48ad425dbf4addc1dd39be1c27->enter($__internal_68000330baa5be0017d829a2463de80ae683ad48ad425dbf4addc1dd39be1c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "\t";
        if ( !twig_test_empty(($context["subject_list"] ?? $this->getContext($context, "subject_list")))) {
            // line 14
            echo "\t<div class=\"col-lg-12\">
\t  <section id=\"printDiv\" class=\"panel\">
\t      <header class=\"panel-heading\">
\t          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "cTitle", array()), "html", null, true);
            echo " - Progress Graph for at most Last 5 Exams
          \t\t [ Order of subjects
\t            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 20
                echo "\t             <span style=\"margin:20px\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "sTitle", array()), "html", null, true);
                echo "</span>
\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo " ]
\t      </header>
\t      <div class=\"panel-body\" id=\"chartjs\">
\t      \t";
            // line 24
            $context["width"] = (twig_length_filter($this->env, ($context["exams"] ?? $this->getContext($context, "exams"))) * 250);
            // line 25
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
            // line 34
            $context["width"] = (twig_length_filter($this->env, ($context["exams"] ?? $this->getContext($context, "exams"))) * 250);
            // line 35
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
            // line 46
            echo "\t\t<div class=\"well\">
\t\t\t<h4>You will find the class' graphs for previous exams here, after you have recorded some exam entries.</h4>
\t\t</div>
\t";
        }
        
        $__internal_68000330baa5be0017d829a2463de80ae683ad48ad425dbf4addc1dd39be1c27->leave($__internal_68000330baa5be0017d829a2463de80ae683ad48ad425dbf4addc1dd39be1c27_prof);

        
        $__internal_3cbf95b509ac8db19dd487d5996b9914cb292f980c2d5796de4b4263078d7e18->leave($__internal_3cbf95b509ac8db19dd487d5996b9914cb292f980c2d5796de4b4263078d7e18_prof);

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
        return array (  648 => 46,  635 => 35,  633 => 34,  622 => 25,  620 => 24,  615 => 21,  606 => 20,  602 => 19,  597 => 17,  592 => 14,  589 => 13,  580 => 12,  551 => 11,  322 => 162,  310 => 152,  301 => 149,  296 => 148,  293 => 147,  287 => 146,  284 => 145,  280 => 144,  276 => 143,  273 => 142,  270 => 141,  267 => 140,  263 => 139,  235 => 114,  226 => 107,  217 => 105,  213 => 104,  209 => 102,  200 => 100,  196 => 99,  191 => 96,  184 => 94,  173 => 92,  169 => 91,  165 => 90,  162 => 89,  158 => 88,  134 => 67,  122 => 58,  118 => 57,  114 => 56,  110 => 55,  107 => 54,  98 => 53,  88 => 11,  84 => 10,  80 => 9,  78 => 8,  75 => 7,  66 => 6,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
{% set info = \"with_print_material\" %}
{{ include('templates/header.html.twig') }}        \t\t
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}
\t{% if subject_list is not empty %}
\t<div class=\"col-lg-12\">
\t  <section id=\"printDiv\" class=\"panel\">
\t      <header class=\"panel-heading\">
\t          {{class.cTitle}} - Progress Graph for at most Last 5 Exams
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
    <script src=\"{{asset('printThis/printThis.js')}}\"></script>
    <script type=\"text/javascript\">
\t  \$(document).ready(function() {
\t    \$( \"#triggerPrint\" ).click(function(e) {\t\t
\t    \t\$(\"#printDiv\").printThis({
\t\t\t    debug: false,               // show the iframe for debugging
\t\t\t    importCSS: true,            // import page CSS
\t\t\t    importStyle: false,         // import style tags
\t\t\t    printContainer: true,       // grab outer container as well as the contents of the selector
\t\t\t    pageTitle: \"Performance History for class {{class.cTitle}}\",              // add title to print page
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

\t\tvar items = \$(\"#morris-bar-chart\").find( \"svg\" ).find(\"rect\");
\t\t\$.each(items,function(index,v){
\t\t    var value = {{list|json_encode()}}[index]//theJson[index].count;
\t\t    var newY = parseFloat( \$(this).attr('y') - 20 );
\t\t    var halfWidth = parseFloat( \$(this).attr('width') / 2 );
\t\t    var newX = parseFloat( \$(this).attr('x') ) +  halfWidth;
\t\t    var output = '<text style=\"text-anchor: middle; font: 12px sans-serif;\" x=\"'+newX+'\" y=\"'+newY+'\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#000000\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,6.875)\"><tspan dy=\"3.75\">'+value+'</tspan></text>';
\t\t    \$(\"#morris-bar-chart\").find( \"svg\" ).append(parseSVG(output));
\t\t});

   
    });        \t
\tfunction parseSVG(s) {
        var div= document.createElementNS('http://www.w3.org/1999/xhtml', 'div');
        div.innerHTML= '<svg xmlns=\"http://www.w3.org/2000/svg\">'+s+'</svg>';
        var frag= document.createDocumentFragment();
        while (div.firstChild.firstChild)
            frag.appendChild(div.firstChild.firstChild);
        return frag;
    }    
    </script>

    <script type=\"text/javascript\">

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

\t\tvar items2 = \$(\"#morris-bar-chart2\").find( \"svg\" ).find(\"rect\");
\t\t\$.each(items2,function(index,v){
\t\t    var value = {{merged|json_encode()}}[index]
\t\t    var newY = parseFloat( \$(this).attr('y') - 20 );
\t\t    var halfWidth = parseFloat( \$(this).attr('width') / 2 );
\t\t    var newX = parseFloat( \$(this).attr('x') ) +  halfWidth;
\t\t    var output = '<text style=\"text-anchor: middle; font: 12px sans-serif;\" x=\"'+newX+'\" y=\"'+newY+'\" text-anchor=\"middle\" font=\"10px &quot;Arial&quot;\" stroke=\"none\" fill=\"#000000\" font-size=\"12px\" font-family=\"sans-serif\" font-weight=\"normal\" transform=\"matrix(1,0,0,1,0,6.875)\"><tspan dy=\"3.75\">'+value+'</tspan></text>';
\t\t    \$(\"#morris-bar-chart2\").find( \"svg\" ).append(parseSVG(output));
\t\tconsole.log(value);
\t\t});

    </script>
{% endblock %}", "class/profile.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/class/profile.html.twig");
    }
}
