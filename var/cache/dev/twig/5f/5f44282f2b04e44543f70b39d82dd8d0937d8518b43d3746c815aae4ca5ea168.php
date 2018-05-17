<?php

/* score/summary.html.twig */
class __TwigTemplate_0dd22dfa6af9af9a05ae889512ae1d160b3d3c4780a5745c5221108d0c7d78ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "score/summary.html.twig", 1);
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
        $__internal_ed296fb645a0d848e11cdc3dde07679dd2cf80a2050cd65cb17182cbd7011f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed296fb645a0d848e11cdc3dde07679dd2cf80a2050cd65cb17182cbd7011f5c->enter($__internal_ed296fb645a0d848e11cdc3dde07679dd2cf80a2050cd65cb17182cbd7011f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/summary.html.twig"));

        $__internal_51c04b387fb7afb01e4451b9d968fe2e67a00330081f1964dbdbe0ef713e578c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c04b387fb7afb01e4451b9d968fe2e67a00330081f1964dbdbe0ef713e578c->enter($__internal_51c04b387fb7afb01e4451b9d968fe2e67a00330081f1964dbdbe0ef713e578c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/summary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed296fb645a0d848e11cdc3dde07679dd2cf80a2050cd65cb17182cbd7011f5c->leave($__internal_ed296fb645a0d848e11cdc3dde07679dd2cf80a2050cd65cb17182cbd7011f5c_prof);

        
        $__internal_51c04b387fb7afb01e4451b9d968fe2e67a00330081f1964dbdbe0ef713e578c->leave($__internal_51c04b387fb7afb01e4451b9d968fe2e67a00330081f1964dbdbe0ef713e578c_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d03259f1f877528cb7d3649d85bbda2bc8597430425078f7e68e7a06a6fa97f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d03259f1f877528cb7d3649d85bbda2bc8597430425078f7e68e7a06a6fa97f->enter($__internal_8d03259f1f877528cb7d3649d85bbda2bc8597430425078f7e68e7a06a6fa97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_76d35165342f053daf37b31731f28b8eb6d64a26c84a9e105e626558d44f9caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d35165342f053daf37b31731f28b8eb6d64a26c84a9e105e626558d44f9caa->enter($__internal_76d35165342f053daf37b31731f28b8eb6d64a26c84a9e105e626558d44f9caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_76d35165342f053daf37b31731f28b8eb6d64a26c84a9e105e626558d44f9caa->leave($__internal_76d35165342f053daf37b31731f28b8eb6d64a26c84a9e105e626558d44f9caa_prof);

        
        $__internal_8d03259f1f877528cb7d3649d85bbda2bc8597430425078f7e68e7a06a6fa97f->leave($__internal_8d03259f1f877528cb7d3649d85bbda2bc8597430425078f7e68e7a06a6fa97f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3460093049bc3f2ee8dfb32d10d873ebb7258a05d76d2bdab0ee56d5c35eecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3460093049bc3f2ee8dfb32d10d873ebb7258a05d76d2bdab0ee56d5c35eecf->enter($__internal_b3460093049bc3f2ee8dfb32d10d873ebb7258a05d76d2bdab0ee56d5c35eecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06df1e2eeebde53295515259f6165b7f91010bf475d82a13f72dd99f21cf17b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06df1e2eeebde53295515259f6165b7f91010bf475d82a13f72dd99f21cf17b9->enter($__internal_06df1e2eeebde53295515259f6165b7f91010bf475d82a13f72dd99f21cf17b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<body>
";
        // line 6
        $context["info"] = "with_print_material";
        // line 7
        echo twig_include($this->env, $context, "templates/header.html.twig");
        echo "        \t\t
";
        // line 8
        echo twig_include($this->env, $context, "templates/aside.html.twig");
        echo "        \t\t
";
        // line 9
        $this->loadTemplate("score/summary.html.twig", "score/summary.html.twig", 9, "2143552867")->display($context);
        
        $__internal_06df1e2eeebde53295515259f6165b7f91010bf475d82a13f72dd99f21cf17b9->leave($__internal_06df1e2eeebde53295515259f6165b7f91010bf475d82a13f72dd99f21cf17b9_prof);

        
        $__internal_b3460093049bc3f2ee8dfb32d10d873ebb7258a05d76d2bdab0ee56d5c35eecf->leave($__internal_b3460093049bc3f2ee8dfb32d10d873ebb7258a05d76d2bdab0ee56d5c35eecf_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_59656fb3d560e04cb9806109cafee1b502a8c6d1819afaa80cfe08e0e5db6693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59656fb3d560e04cb9806109cafee1b502a8c6d1819afaa80cfe08e0e5db6693->enter($__internal_59656fb3d560e04cb9806109cafee1b502a8c6d1819afaa80cfe08e0e5db6693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f4fcaa4dc20554c34b57df67dffe1d5515ae1aa03499382412e1d9bea1fde2c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4fcaa4dc20554c34b57df67dffe1d5515ae1aa03499382412e1d9bea1fde2c1->enter($__internal_f4fcaa4dc20554c34b57df67dffe1d5515ae1aa03499382412e1d9bea1fde2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 132
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("printThis/printThis.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    \$(document).ready(function() {
      \$( \"#triggerPrint\" ).click(function(e) {    
        \$(\"#printDiv\").printThis({
          debug: false,               // show the iframe for debugging
          importCSS: true,            // import page CSS
          importStyle: false,         // import style tags
          printContainer: true,       // grab outer container as well as the contents of the selector
          pageTitle: \"";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "cTitle", array()), "html", null, true);
        echo " [Class ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "cTitle", array()), "html", null, true);
        echo "]\",              // add title to print page
          removeInline: false,        // remove all inline styles from print elements
          printDelay: 333,            // variable print delay; depending on complexity a higher value may be necessary
          header: null,               // prefix to html
          footer: null,               // postfix to html
          base: false ,               // preserve the BASE tag, or accept a string for the URL
          formValues: true,           // preserve input/form values
          canvas: false,              // copy canvas elements (experimental)
          doctypeString: \"...\",       // enter a different doctype for older markup
          removeScripts: false,       // remove script tags from print content
          copyTagClasses: false       // copy classes from the html & body tag
      });
      });
    });    
  </script>

";
        
        $__internal_f4fcaa4dc20554c34b57df67dffe1d5515ae1aa03499382412e1d9bea1fde2c1->leave($__internal_f4fcaa4dc20554c34b57df67dffe1d5515ae1aa03499382412e1d9bea1fde2c1_prof);

        
        $__internal_59656fb3d560e04cb9806109cafee1b502a8c6d1819afaa80cfe08e0e5db6693->leave($__internal_59656fb3d560e04cb9806109cafee1b502a8c6d1819afaa80cfe08e0e5db6693_prof);

    }

    public function getTemplateName()
    {
        return "score/summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 141,  100 => 132,  91 => 131,  81 => 9,  77 => 8,  73 => 7,  71 => 6,  68 => 5,  59 => 4,  42 => 2,  11 => 1,);
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
{% endblock %}
{% block body %}
<body>
{% set info = \"with_print_material\" %}
{{ include('templates/header.html.twig') }}        \t\t
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}
      {% if students is empty %}
        <div class=\"well\">
          <h3>There are no students for class {{class.cTitle}}. Please <a href=\"{{path('new_student')}}\">add students</a></h3>
        </div>
      {% elseif subjects is empty %}        
        <div class=\"well\">
          <h3>You don't have any subjects added yet! Please <a href=\"{{path('new_subject')}}\">add subjects</a></h3>
        </div>
      {% else %}        
\t\t\t<div class=\"col-lg-12\">
        <section class=\"panel\">
            <header class=\"panel-heading\">
              Exam Report Summary for {{exam.cTitle}} [{{class.cTitle}}]
              <div class=\"pull-right\">
              <a class=\"btn btn-sm btn-primary\" href=\"{{ path('download_exam', {'classId': class.id, 'companyId': exam.id}) }}\">Download PDF</a>
              <a class=\"btn btn-sm btn-primary\" href=\"{{ path('download_exam_img', {'classId': class.id, 'companyId': exam.id}) }}\">Download Image</a>
              <a href=\"{{path('report_forms', {'classId': exam.class.id, 'companyId': exam.id})}}\" class=\"btn btn-primary\">Report Forms</a>
              </div>
            </header>
            {% set parents = [] %}
              {% set span = childSubjects|length + subjects|length %}
            {% for childSubject in childSubjects %}
              {% if childSubject.subject.sTitle not in parents %}
                {% set parents = parents|merge([childSubject.subject.sTitle]) %}
              {% endif %}
            {% endfor %}
            <table id=\"printDiv\" class=\"table table-striped table-advance table-hover\">
             <tbody>
                <tr>
                  <td colspan=\"{{span}}\"> 
                    <img style=\"width:100%\" src=\"{{asset('img/logo.jpg')}}\" />
                  </td>
                </tr>
                <tr>
                  <th style=\"text-nowrap\" class=\"col-md-3\">Name</th>
                  {% for subject in subjects %}
                    {% if subject.sTitle in parents %}
                      {% for c_subject in subject.childSubjects %}
                      <th>{{c_subject.cSTitle|title}}</th>
                      {% endfor %}
                    {% endif %}
                    <th style=\"color:red\">{{subject.sTitle|title}}</th>
                  {% endfor %}
                  <th>Total</th>
                  <th>Position</th>
                </tr>
                {% for key, item in sum %}
                <tr>
                \t<td style=\"text-nowrap; white-space: nowrap; font-weight:bold; color:black;\">{{item[2].names|title}}</td>
                    {% for subject in subjects %}
                    {% if subject.childSubjects|length > 1 %}
                      {% for childSub in subject.childSubjects %}
                        {% set c_sub_key = item[2].id ~ \".\" ~ childSub.id ~ \".\" ~ \"c\" %}
                        {% if key_list_c[c_sub_key][c_sub_key] is defined %}
                          <td style=\"color:blue\">{{key_list_c[c_sub_key][c_sub_key].marks}}</td>
                        {% else %}
                          <td style=\"color:blue\">_</td>
                        {% endif %}
                      {% endfor %}
                    {% endif %}
                    {% set st_sub_key = item[2].id ~ \".\" ~ subject.id ~ \".\" ~ \"s\" %}
                      {% if key_list_s[st_sub_key][st_sub_key] is defined %}
                        <td style=\"color:red\">{{key_list_s[st_sub_key][st_sub_key].marks}}</td>
                      {% else %}
                        <td style=\"color:red\">_</td>
                      {% endif %}
                    {% endfor %}
                \t<td>{{item[0]}}</td>
                \t<td>{{item[1]}}</td>
                </tr>
                {% endfor %}
              <tr>
\t\t\t\t\t<td>Total Score</td>
\t\t\t\t\t{% set total_score  = 0 %}
\t\t\t\t\t{% for subject in subjects %}
\t\t\t\t\t\t{% set total_score = total_score + sum_sub[subject.id][0] %}
                \t\t{% if subject.sTitle in parents %}
                \t\t\t{% for child in subject.childSubjects %}
                \t\t\t\t<td>{{c_sum_sub[child.id][0]}}</td>
                \t\t\t{% endfor %}
                \t\t{% endif %}
\t\t\t\t\t\t<td style=\"color:black;\">{{sum_sub[subject.id][0]}}</td>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<td style=\"color:black;\">{{total_score}}</td>
              </tr>
              <tr>
\t\t\t\t\t<td>Mean Score</td>
\t\t\t\t\t{% set total_mean  = 0 %}
\t\t\t\t\t{% for subject in subjects %}
\t\t\t\t\t\t{% set mean = sum_sub[subject.id][0] / students|length %}
\t\t\t\t\t\t{% set total_mean = total_mean + mean %}
                \t\t{% if subject.sTitle in parents %}
                \t\t\t{% for child in subject.childSubjects %}
\t\t\t\t\t\t\t\t{% set mean_child = c_sum_sub[child.id][0] / students|length %}
                \t\t\t\t<td>{{mean_child|round(2)}}</td>
                \t\t\t{% endfor %}
                \t\t{% endif %}
\t\t\t\t\t\t<td style=\"color:black;\">{{mean|round(2)}}</td>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<td style=\"color:black;\">{{total_mean|round(2)}}</td>
              </tr>
              <tr>
\t\t\t\t\t<td>Position</td>
\t\t\t\t\t{% for subject in subjects %}
                \t\t{% if subject.sTitle in parents %}
                \t\t\t{% for child in subject.childSubjects %}
                \t\t\t\t<td></td>
                \t\t\t{% endfor %}
                \t\t{% endif %}
\t\t\t\t\t\t<td style=\"color:red;\">{{sum_sub[subject.id][1]}}</td>
\t\t\t\t\t{% endfor %}
              </tr>
             </tbody>
          </table>
        </section>
      </div>
  {% endif %}
{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}
    <script src=\"{{asset('printThis/printThis.js')}}\"></script>
    <script type=\"text/javascript\">
    \$(document).ready(function() {
      \$( \"#triggerPrint\" ).click(function(e) {    
        \$(\"#printDiv\").printThis({
          debug: false,               // show the iframe for debugging
          importCSS: true,            // import page CSS
          importStyle: false,         // import style tags
          printContainer: true,       // grab outer container as well as the contents of the selector
          pageTitle: \"{{exam.cTitle}} [Class {{class.cTitle}}]\",              // add title to print page
          removeInline: false,        // remove all inline styles from print elements
          printDelay: 333,            // variable print delay; depending on complexity a higher value may be necessary
          header: null,               // prefix to html
          footer: null,               // postfix to html
          base: false ,               // preserve the BASE tag, or accept a string for the URL
          formValues: true,           // preserve input/form values
          canvas: false,              // copy canvas elements (experimental)
          doctypeString: \"...\",       // enter a different doctype for older markup
          removeScripts: false,       // remove script tags from print content
          copyTagClasses: false       // copy classes from the html & body tag
      });
      });
    });    
  </script>

{% endblock %}", "score/summary.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/score/summary.html.twig");
    }
}


/* score/summary.html.twig */
class __TwigTemplate_0dd22dfa6af9af9a05ae889512ae1d160b3d3c4780a5745c5221108d0c7d78ac_2143552867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "score/summary.html.twig", 9);
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
        $__internal_12ac79e53ef9686130549344dae8dabb49dc8547a2e1fe16fa3292534e133c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ac79e53ef9686130549344dae8dabb49dc8547a2e1fe16fa3292534e133c3b->enter($__internal_12ac79e53ef9686130549344dae8dabb49dc8547a2e1fe16fa3292534e133c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/summary.html.twig"));

        $__internal_552f9552a512f18b6f9c39890882b89022b0dd1c1b7886a819c10df56bf8e373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552f9552a512f18b6f9c39890882b89022b0dd1c1b7886a819c10df56bf8e373->enter($__internal_552f9552a512f18b6f9c39890882b89022b0dd1c1b7886a819c10df56bf8e373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/summary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12ac79e53ef9686130549344dae8dabb49dc8547a2e1fe16fa3292534e133c3b->leave($__internal_12ac79e53ef9686130549344dae8dabb49dc8547a2e1fe16fa3292534e133c3b_prof);

        
        $__internal_552f9552a512f18b6f9c39890882b89022b0dd1c1b7886a819c10df56bf8e373->leave($__internal_552f9552a512f18b6f9c39890882b89022b0dd1c1b7886a819c10df56bf8e373_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_5fe201c9821d6457c1270d0ad3d2f369cdd1da4bfb9ff521e995874991104ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe201c9821d6457c1270d0ad3d2f369cdd1da4bfb9ff521e995874991104ff3->enter($__internal_5fe201c9821d6457c1270d0ad3d2f369cdd1da4bfb9ff521e995874991104ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5c8cca3840abcfba944372efeecd246431d49cbf0fca16eeaa86f4d9f08105e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8cca3840abcfba944372efeecd246431d49cbf0fca16eeaa86f4d9f08105e7->enter($__internal_5c8cca3840abcfba944372efeecd246431d49cbf0fca16eeaa86f4d9f08105e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "      ";
        if (twig_test_empty(($context["students"] ?? $this->getContext($context, "students")))) {
            // line 12
            echo "        <div class=\"well\">
          <h3>There are no students for class ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "cTitle", array()), "html", null, true);
            echo ". Please <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_student");
            echo "\">add students</a></h3>
        </div>
      ";
        } elseif (twig_test_empty(        // line 15
($context["subjects"] ?? $this->getContext($context, "subjects")))) {
            echo "        
        <div class=\"well\">
          <h3>You don't have any subjects added yet! Please <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_subject");
            echo "\">add subjects</a></h3>
        </div>
      ";
        } else {
            // line 19
            echo "        
\t\t\t<div class=\"col-lg-12\">
        <section class=\"panel\">
            <header class=\"panel-heading\">
              Exam Report Summary for ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "cTitle", array()), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "cTitle", array()), "html", null, true);
            echo "]
              <div class=\"pull-right\">
              <a class=\"btn btn-sm btn-primary\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("download_exam", array("classId" => $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "id", array()), "companyId" => $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "id", array()))), "html", null, true);
            echo "\">Download PDF</a>
              <a class=\"btn btn-sm btn-primary\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("download_exam_img", array("classId" => $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "id", array()), "companyId" => $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "id", array()))), "html", null, true);
            echo "\">Download Image</a>
              <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("report_forms", array("classId" => $this->getAttribute($this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "class", array()), "id", array()), "companyId" => $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Report Forms</a>
              </div>
            </header>
            ";
            // line 30
            $context["parents"] = array();
            // line 31
            echo "              ";
            $context["span"] = (twig_length_filter($this->env, ($context["childSubjects"] ?? $this->getContext($context, "childSubjects"))) + twig_length_filter($this->env, ($context["subjects"] ?? $this->getContext($context, "subjects"))));
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["childSubjects"] ?? $this->getContext($context, "childSubjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["childSubject"]) {
                // line 33
                echo "              ";
                if (!twig_in_filter($this->getAttribute($this->getAttribute($context["childSubject"], "subject", array()), "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                    // line 34
                    echo "                ";
                    $context["parents"] = twig_array_merge(($context["parents"] ?? $this->getContext($context, "parents")), array(0 => $this->getAttribute($this->getAttribute($context["childSubject"], "subject", array()), "sTitle", array())));
                    // line 35
                    echo "              ";
                }
                // line 36
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childSubject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            <table id=\"printDiv\" class=\"table table-striped table-advance table-hover\">
             <tbody>
                <tr>
                  <td colspan=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["span"] ?? $this->getContext($context, "span")), "html", null, true);
            echo "\"> 
                    <img style=\"width:100%\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.jpg"), "html", null, true);
            echo "\" />
                  </td>
                </tr>
                <tr>
                  <th style=\"text-nowrap\" class=\"col-md-3\">Name</th>
                  ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 47
                echo "                    ";
                if (twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                    // line 48
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["c_subject"]) {
                        // line 49
                        echo "                      <th>";
                        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["c_subject"], "cSTitle", array())), "html", null, true);
                        echo "</th>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_subject'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "                    ";
                }
                // line 52
                echo "                    <th style=\"color:red\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["subject"], "sTitle", array())), "html", null, true);
                echo "</th>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                  <th>Total</th>
                  <th>Position</th>
                </tr>
                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sum"] ?? $this->getContext($context, "sum")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 58
                echo "                <tr>
                \t<td style=\"text-nowrap; white-space: nowrap; font-weight:bold; color:black;\">";
                // line 59
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], 2, array(), "array"), "names", array())), "html", null, true);
                echo "</td>
                    ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
                foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                    // line 61
                    echo "                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["subject"], "childSubjects", array())) > 1)) {
                        // line 62
                        echo "                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["childSub"]) {
                            // line 63
                            echo "                        ";
                            $context["c_sub_key"] = (((($this->getAttribute($this->getAttribute($context["item"], 2, array(), "array"), "id", array()) . ".") . $this->getAttribute($context["childSub"], "id", array())) . ".") . "c");
                            // line 64
                            echo "                        ";
                            if ($this->getAttribute($this->getAttribute(($context["key_list_c"] ?? null), ($context["c_sub_key"] ?? $this->getContext($context, "c_sub_key")), array(), "array", false, true), ($context["c_sub_key"] ?? $this->getContext($context, "c_sub_key")), array(), "array", true, true)) {
                                // line 65
                                echo "                          <td style=\"color:blue\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["key_list_c"] ?? $this->getContext($context, "key_list_c")), ($context["c_sub_key"] ?? $this->getContext($context, "c_sub_key")), array(), "array"), ($context["c_sub_key"] ?? $this->getContext($context, "c_sub_key")), array(), "array"), "marks", array()), "html", null, true);
                                echo "</td>
                        ";
                            } else {
                                // line 67
                                echo "                          <td style=\"color:blue\">_</td>
                        ";
                            }
                            // line 69
                            echo "                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childSub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 70
                        echo "                    ";
                    }
                    // line 71
                    echo "                    ";
                    $context["st_sub_key"] = (((($this->getAttribute($this->getAttribute($context["item"], 2, array(), "array"), "id", array()) . ".") . $this->getAttribute($context["subject"], "id", array())) . ".") . "s");
                    // line 72
                    echo "                      ";
                    if ($this->getAttribute($this->getAttribute(($context["key_list_s"] ?? null), ($context["st_sub_key"] ?? $this->getContext($context, "st_sub_key")), array(), "array", false, true), ($context["st_sub_key"] ?? $this->getContext($context, "st_sub_key")), array(), "array", true, true)) {
                        // line 73
                        echo "                        <td style=\"color:red\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["key_list_s"] ?? $this->getContext($context, "key_list_s")), ($context["st_sub_key"] ?? $this->getContext($context, "st_sub_key")), array(), "array"), ($context["st_sub_key"] ?? $this->getContext($context, "st_sub_key")), array(), "array"), "marks", array()), "html", null, true);
                        echo "</td>
                      ";
                    } else {
                        // line 75
                        echo "                        <td style=\"color:red\">_</td>
                      ";
                    }
                    // line 77
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                \t<td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], 0, array(), "array"), "html", null, true);
                echo "</td>
                \t<td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], 1, array(), "array"), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "              <tr>
\t\t\t\t\t<td>Total Score</td>
\t\t\t\t\t";
            // line 84
            $context["total_score"] = 0;
            // line 85
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 86
                echo "\t\t\t\t\t\t";
                $context["total_score"] = (($context["total_score"] ?? $this->getContext($context, "total_score")) + $this->getAttribute($this->getAttribute(($context["sum_sub"] ?? $this->getContext($context, "sum_sub")), $this->getAttribute($context["subject"], "id", array()), array(), "array"), 0, array(), "array"));
                // line 87
                echo "                \t\t";
                if (twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                    // line 88
                    echo "                \t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 89
                        echo "                \t\t\t\t<td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["c_sum_sub"] ?? $this->getContext($context, "c_sum_sub")), $this->getAttribute($context["child"], "id", array()), array(), "array"), 0, array(), "array"), "html", null, true);
                        echo "</td>
                \t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "                \t\t";
                }
                // line 92
                echo "\t\t\t\t\t\t<td style=\"color:black;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sum_sub"] ?? $this->getContext($context, "sum_sub")), $this->getAttribute($context["subject"], "id", array()), array(), "array"), 0, array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "\t\t\t\t\t<td style=\"color:black;\">";
            echo twig_escape_filter($this->env, ($context["total_score"] ?? $this->getContext($context, "total_score")), "html", null, true);
            echo "</td>
              </tr>
              <tr>
\t\t\t\t\t<td>Mean Score</td>
\t\t\t\t\t";
            // line 98
            $context["total_mean"] = 0;
            // line 99
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 100
                echo "\t\t\t\t\t\t";
                $context["mean"] = ($this->getAttribute($this->getAttribute(($context["sum_sub"] ?? $this->getContext($context, "sum_sub")), $this->getAttribute($context["subject"], "id", array()), array(), "array"), 0, array(), "array") / twig_length_filter($this->env, ($context["students"] ?? $this->getContext($context, "students"))));
                // line 101
                echo "\t\t\t\t\t\t";
                $context["total_mean"] = (($context["total_mean"] ?? $this->getContext($context, "total_mean")) + ($context["mean"] ?? $this->getContext($context, "mean")));
                // line 102
                echo "                \t\t";
                if (twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                    // line 103
                    echo "                \t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 104
                        echo "\t\t\t\t\t\t\t\t";
                        $context["mean_child"] = ($this->getAttribute($this->getAttribute(($context["c_sum_sub"] ?? $this->getContext($context, "c_sum_sub")), $this->getAttribute($context["child"], "id", array()), array(), "array"), 0, array(), "array") / twig_length_filter($this->env, ($context["students"] ?? $this->getContext($context, "students"))));
                        // line 105
                        echo "                \t\t\t\t<td>";
                        echo twig_escape_filter($this->env, twig_round(($context["mean_child"] ?? $this->getContext($context, "mean_child")), 2), "html", null, true);
                        echo "</td>
                \t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 107
                    echo "                \t\t";
                }
                // line 108
                echo "\t\t\t\t\t\t<td style=\"color:black;\">";
                echo twig_escape_filter($this->env, twig_round(($context["mean"] ?? $this->getContext($context, "mean")), 2), "html", null, true);
                echo "</td>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "\t\t\t\t\t<td style=\"color:black;\">";
            echo twig_escape_filter($this->env, twig_round(($context["total_mean"] ?? $this->getContext($context, "total_mean")), 2), "html", null, true);
            echo "</td>
              </tr>
              <tr>
\t\t\t\t\t<td>Position</td>
\t\t\t\t\t";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 115
                echo "                \t\t";
                if (twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                    // line 116
                    echo "                \t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 117
                        echo "                \t\t\t\t<td></td>
                \t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 119
                    echo "                \t\t";
                }
                // line 120
                echo "\t\t\t\t\t\t<td style=\"color:red;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sum_sub"] ?? $this->getContext($context, "sum_sub")), $this->getAttribute($context["subject"], "id", array()), array(), "array"), 1, array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "              </tr>
             </tbody>
          </table>
        </section>
      </div>
  ";
        }
        
        $__internal_5c8cca3840abcfba944372efeecd246431d49cbf0fca16eeaa86f4d9f08105e7->leave($__internal_5c8cca3840abcfba944372efeecd246431d49cbf0fca16eeaa86f4d9f08105e7_prof);

        
        $__internal_5fe201c9821d6457c1270d0ad3d2f369cdd1da4bfb9ff521e995874991104ff3->leave($__internal_5fe201c9821d6457c1270d0ad3d2f369cdd1da4bfb9ff521e995874991104ff3_prof);

    }

    public function getTemplateName()
    {
        return "score/summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 122,  714 => 120,  711 => 119,  704 => 117,  699 => 116,  696 => 115,  692 => 114,  684 => 110,  675 => 108,  672 => 107,  663 => 105,  660 => 104,  655 => 103,  652 => 102,  649 => 101,  646 => 100,  641 => 99,  639 => 98,  631 => 94,  622 => 92,  619 => 91,  610 => 89,  605 => 88,  602 => 87,  599 => 86,  594 => 85,  592 => 84,  588 => 82,  579 => 79,  574 => 78,  568 => 77,  564 => 75,  558 => 73,  555 => 72,  552 => 71,  549 => 70,  543 => 69,  539 => 67,  533 => 65,  530 => 64,  527 => 63,  522 => 62,  519 => 61,  515 => 60,  511 => 59,  508 => 58,  504 => 57,  499 => 54,  490 => 52,  487 => 51,  478 => 49,  473 => 48,  470 => 47,  466 => 46,  458 => 41,  454 => 40,  449 => 37,  443 => 36,  440 => 35,  437 => 34,  434 => 33,  429 => 32,  426 => 31,  424 => 30,  418 => 27,  414 => 26,  410 => 25,  403 => 23,  397 => 19,  391 => 17,  386 => 15,  379 => 13,  376 => 12,  373 => 11,  364 => 10,  335 => 9,  113 => 141,  100 => 132,  91 => 131,  81 => 9,  77 => 8,  73 => 7,  71 => 6,  68 => 5,  59 => 4,  42 => 2,  11 => 1,);
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
{% endblock %}
{% block body %}
<body>
{% set info = \"with_print_material\" %}
{{ include('templates/header.html.twig') }}        \t\t
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}
      {% if students is empty %}
        <div class=\"well\">
          <h3>There are no students for class {{class.cTitle}}. Please <a href=\"{{path('new_student')}}\">add students</a></h3>
        </div>
      {% elseif subjects is empty %}        
        <div class=\"well\">
          <h3>You don't have any subjects added yet! Please <a href=\"{{path('new_subject')}}\">add subjects</a></h3>
        </div>
      {% else %}        
\t\t\t<div class=\"col-lg-12\">
        <section class=\"panel\">
            <header class=\"panel-heading\">
              Exam Report Summary for {{exam.cTitle}} [{{class.cTitle}}]
              <div class=\"pull-right\">
              <a class=\"btn btn-sm btn-primary\" href=\"{{ path('download_exam', {'classId': class.id, 'companyId': exam.id}) }}\">Download PDF</a>
              <a class=\"btn btn-sm btn-primary\" href=\"{{ path('download_exam_img', {'classId': class.id, 'companyId': exam.id}) }}\">Download Image</a>
              <a href=\"{{path('report_forms', {'classId': exam.class.id, 'companyId': exam.id})}}\" class=\"btn btn-primary\">Report Forms</a>
              </div>
            </header>
            {% set parents = [] %}
              {% set span = childSubjects|length + subjects|length %}
            {% for childSubject in childSubjects %}
              {% if childSubject.subject.sTitle not in parents %}
                {% set parents = parents|merge([childSubject.subject.sTitle]) %}
              {% endif %}
            {% endfor %}
            <table id=\"printDiv\" class=\"table table-striped table-advance table-hover\">
             <tbody>
                <tr>
                  <td colspan=\"{{span}}\"> 
                    <img style=\"width:100%\" src=\"{{asset('img/logo.jpg')}}\" />
                  </td>
                </tr>
                <tr>
                  <th style=\"text-nowrap\" class=\"col-md-3\">Name</th>
                  {% for subject in subjects %}
                    {% if subject.sTitle in parents %}
                      {% for c_subject in subject.childSubjects %}
                      <th>{{c_subject.cSTitle|title}}</th>
                      {% endfor %}
                    {% endif %}
                    <th style=\"color:red\">{{subject.sTitle|title}}</th>
                  {% endfor %}
                  <th>Total</th>
                  <th>Position</th>
                </tr>
                {% for key, item in sum %}
                <tr>
                \t<td style=\"text-nowrap; white-space: nowrap; font-weight:bold; color:black;\">{{item[2].names|title}}</td>
                    {% for subject in subjects %}
                    {% if subject.childSubjects|length > 1 %}
                      {% for childSub in subject.childSubjects %}
                        {% set c_sub_key = item[2].id ~ \".\" ~ childSub.id ~ \".\" ~ \"c\" %}
                        {% if key_list_c[c_sub_key][c_sub_key] is defined %}
                          <td style=\"color:blue\">{{key_list_c[c_sub_key][c_sub_key].marks}}</td>
                        {% else %}
                          <td style=\"color:blue\">_</td>
                        {% endif %}
                      {% endfor %}
                    {% endif %}
                    {% set st_sub_key = item[2].id ~ \".\" ~ subject.id ~ \".\" ~ \"s\" %}
                      {% if key_list_s[st_sub_key][st_sub_key] is defined %}
                        <td style=\"color:red\">{{key_list_s[st_sub_key][st_sub_key].marks}}</td>
                      {% else %}
                        <td style=\"color:red\">_</td>
                      {% endif %}
                    {% endfor %}
                \t<td>{{item[0]}}</td>
                \t<td>{{item[1]}}</td>
                </tr>
                {% endfor %}
              <tr>
\t\t\t\t\t<td>Total Score</td>
\t\t\t\t\t{% set total_score  = 0 %}
\t\t\t\t\t{% for subject in subjects %}
\t\t\t\t\t\t{% set total_score = total_score + sum_sub[subject.id][0] %}
                \t\t{% if subject.sTitle in parents %}
                \t\t\t{% for child in subject.childSubjects %}
                \t\t\t\t<td>{{c_sum_sub[child.id][0]}}</td>
                \t\t\t{% endfor %}
                \t\t{% endif %}
\t\t\t\t\t\t<td style=\"color:black;\">{{sum_sub[subject.id][0]}}</td>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<td style=\"color:black;\">{{total_score}}</td>
              </tr>
              <tr>
\t\t\t\t\t<td>Mean Score</td>
\t\t\t\t\t{% set total_mean  = 0 %}
\t\t\t\t\t{% for subject in subjects %}
\t\t\t\t\t\t{% set mean = sum_sub[subject.id][0] / students|length %}
\t\t\t\t\t\t{% set total_mean = total_mean + mean %}
                \t\t{% if subject.sTitle in parents %}
                \t\t\t{% for child in subject.childSubjects %}
\t\t\t\t\t\t\t\t{% set mean_child = c_sum_sub[child.id][0] / students|length %}
                \t\t\t\t<td>{{mean_child|round(2)}}</td>
                \t\t\t{% endfor %}
                \t\t{% endif %}
\t\t\t\t\t\t<td style=\"color:black;\">{{mean|round(2)}}</td>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<td style=\"color:black;\">{{total_mean|round(2)}}</td>
              </tr>
              <tr>
\t\t\t\t\t<td>Position</td>
\t\t\t\t\t{% for subject in subjects %}
                \t\t{% if subject.sTitle in parents %}
                \t\t\t{% for child in subject.childSubjects %}
                \t\t\t\t<td></td>
                \t\t\t{% endfor %}
                \t\t{% endif %}
\t\t\t\t\t\t<td style=\"color:red;\">{{sum_sub[subject.id][1]}}</td>
\t\t\t\t\t{% endfor %}
              </tr>
             </tbody>
          </table>
        </section>
      </div>
  {% endif %}
{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}
    <script src=\"{{asset('printThis/printThis.js')}}\"></script>
    <script type=\"text/javascript\">
    \$(document).ready(function() {
      \$( \"#triggerPrint\" ).click(function(e) {    
        \$(\"#printDiv\").printThis({
          debug: false,               // show the iframe for debugging
          importCSS: true,            // import page CSS
          importStyle: false,         // import style tags
          printContainer: true,       // grab outer container as well as the contents of the selector
          pageTitle: \"{{exam.cTitle}} [Class {{class.cTitle}}]\",              // add title to print page
          removeInline: false,        // remove all inline styles from print elements
          printDelay: 333,            // variable print delay; depending on complexity a higher value may be necessary
          header: null,               // prefix to html
          footer: null,               // postfix to html
          base: false ,               // preserve the BASE tag, or accept a string for the URL
          formValues: true,           // preserve input/form values
          canvas: false,              // copy canvas elements (experimental)
          doctypeString: \"...\",       // enter a different doctype for older markup
          removeScripts: false,       // remove script tags from print content
          copyTagClasses: false       // copy classes from the html & body tag
      });
      });
    });    
  </script>

{% endblock %}", "score/summary.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/score/summary.html.twig");
    }
}
