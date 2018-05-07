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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09aa8bee15a286b5512be14ba2ca233bed15d1db3e41849ef6f980ba77844e9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09aa8bee15a286b5512be14ba2ca233bed15d1db3e41849ef6f980ba77844e9c->enter($__internal_09aa8bee15a286b5512be14ba2ca233bed15d1db3e41849ef6f980ba77844e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/summary.html.twig"));

        $__internal_e39ff981f5a18db4f12d00f912b60f8c82392cbee6bf9061b6cee8bff8d3e091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39ff981f5a18db4f12d00f912b60f8c82392cbee6bf9061b6cee8bff8d3e091->enter($__internal_e39ff981f5a18db4f12d00f912b60f8c82392cbee6bf9061b6cee8bff8d3e091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/summary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09aa8bee15a286b5512be14ba2ca233bed15d1db3e41849ef6f980ba77844e9c->leave($__internal_09aa8bee15a286b5512be14ba2ca233bed15d1db3e41849ef6f980ba77844e9c_prof);

        
        $__internal_e39ff981f5a18db4f12d00f912b60f8c82392cbee6bf9061b6cee8bff8d3e091->leave($__internal_e39ff981f5a18db4f12d00f912b60f8c82392cbee6bf9061b6cee8bff8d3e091_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_21e354e6f6d1367853aaa7a3ab8f386613d82573a72651aee93cbeb604a5674f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e354e6f6d1367853aaa7a3ab8f386613d82573a72651aee93cbeb604a5674f->enter($__internal_21e354e6f6d1367853aaa7a3ab8f386613d82573a72651aee93cbeb604a5674f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54e04a52a8dacc52efc66a32d652dbdcd9abb39296a0cc39bd7b657ce29c8b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e04a52a8dacc52efc66a32d652dbdcd9abb39296a0cc39bd7b657ce29c8b0d->enter($__internal_54e04a52a8dacc52efc66a32d652dbdcd9abb39296a0cc39bd7b657ce29c8b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("score/summary.html.twig", "score/summary.html.twig", 6, "636965738")->display($context);
        
        $__internal_54e04a52a8dacc52efc66a32d652dbdcd9abb39296a0cc39bd7b657ce29c8b0d->leave($__internal_54e04a52a8dacc52efc66a32d652dbdcd9abb39296a0cc39bd7b657ce29c8b0d_prof);

        
        $__internal_21e354e6f6d1367853aaa7a3ab8f386613d82573a72651aee93cbeb604a5674f->leave($__internal_21e354e6f6d1367853aaa7a3ab8f386613d82573a72651aee93cbeb604a5674f_prof);

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
            {% for childSubject in childSubjects %}
              {% if childSubject.subject.sTitle not in parents %}
                {% set parents = parents|merge([childSubject.subject.sTitle]) %}
              {% endif %}
            {% endfor %}
            <table class=\"table table-striped table-advance table-hover\">
             <tbody>
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
", "score/summary.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/score/summary.html.twig");
    }
}


/* score/summary.html.twig */
class __TwigTemplate_0dd22dfa6af9af9a05ae889512ae1d160b3d3c4780a5745c5221108d0c7d78ac_636965738 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "score/summary.html.twig", 6);
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
        $__internal_73d2f8639393bc0212029114d51b5ef7c185abbbf38c5314a53f716063f6240e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d2f8639393bc0212029114d51b5ef7c185abbbf38c5314a53f716063f6240e->enter($__internal_73d2f8639393bc0212029114d51b5ef7c185abbbf38c5314a53f716063f6240e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/summary.html.twig"));

        $__internal_85ff5e056acd6967425142ec9c1095321683bf6e71b516ea36fe57a30e085fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ff5e056acd6967425142ec9c1095321683bf6e71b516ea36fe57a30e085fad->enter($__internal_85ff5e056acd6967425142ec9c1095321683bf6e71b516ea36fe57a30e085fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/summary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73d2f8639393bc0212029114d51b5ef7c185abbbf38c5314a53f716063f6240e->leave($__internal_73d2f8639393bc0212029114d51b5ef7c185abbbf38c5314a53f716063f6240e_prof);

        
        $__internal_85ff5e056acd6967425142ec9c1095321683bf6e71b516ea36fe57a30e085fad->leave($__internal_85ff5e056acd6967425142ec9c1095321683bf6e71b516ea36fe57a30e085fad_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_c818577d7d373ec3f99443ff387ed9aaf31b42b2c36064f432cf330e4ed2db0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c818577d7d373ec3f99443ff387ed9aaf31b42b2c36064f432cf330e4ed2db0b->enter($__internal_c818577d7d373ec3f99443ff387ed9aaf31b42b2c36064f432cf330e4ed2db0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_29c7285aa8f71bb8c7685713cd60ed26d356259776d776d0e1a530bf0ec944ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c7285aa8f71bb8c7685713cd60ed26d356259776d776d0e1a530bf0ec944ca->enter($__internal_29c7285aa8f71bb8c7685713cd60ed26d356259776d776d0e1a530bf0ec944ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "      ";
        if (twig_test_empty(($context["students"] ?? $this->getContext($context, "students")))) {
            // line 9
            echo "        <div class=\"well\">
          <h3>There are no students for class ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "cTitle", array()), "html", null, true);
            echo ". Please <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_student");
            echo "\">add students</a></h3>
        </div>
      ";
        } elseif (twig_test_empty(        // line 12
($context["subjects"] ?? $this->getContext($context, "subjects")))) {
            echo "        
        <div class=\"well\">
          <h3>You don't have any subjects added yet! Please <a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_subject");
            echo "\">add subjects</a></h3>
        </div>
      ";
        } else {
            // line 16
            echo "        
\t\t\t<div class=\"col-lg-12\">
        <section class=\"panel\">
            <header class=\"panel-heading\">
              Exam Report Summary for ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "cTitle", array()), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "cTitle", array()), "html", null, true);
            echo "]
              <div class=\"pull-right\">
              <a class=\"btn btn-sm btn-primary\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("download_exam", array("classId" => $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "id", array()), "companyId" => $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "id", array()))), "html", null, true);
            echo "\">Download PDF</a>
              <a class=\"btn btn-sm btn-primary\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("download_exam_img", array("classId" => $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "id", array()), "companyId" => $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "id", array()))), "html", null, true);
            echo "\">Download Image</a>
              <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("report_forms", array("classId" => $this->getAttribute($this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "class", array()), "id", array()), "companyId" => $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Report Forms</a>
              </div>
            </header>
            ";
            // line 27
            $context["parents"] = array();
            // line 28
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["childSubjects"] ?? $this->getContext($context, "childSubjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["childSubject"]) {
                // line 29
                echo "              ";
                if (!twig_in_filter($this->getAttribute($this->getAttribute($context["childSubject"], "subject", array()), "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                    // line 30
                    echo "                ";
                    $context["parents"] = twig_array_merge(($context["parents"] ?? $this->getContext($context, "parents")), array(0 => $this->getAttribute($this->getAttribute($context["childSubject"], "subject", array()), "sTitle", array())));
                    // line 31
                    echo "              ";
                }
                // line 32
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childSubject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            <table class=\"table table-striped table-advance table-hover\">
             <tbody>
                <tr>
                  <th style=\"text-nowrap\" class=\"col-md-3\">Name</th>
                  ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 38
                echo "                    ";
                if (twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                    // line 39
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["c_subject"]) {
                        // line 40
                        echo "                      <th>";
                        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["c_subject"], "cSTitle", array())), "html", null, true);
                        echo "</th>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_subject'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "                    ";
                }
                // line 43
                echo "                    <th style=\"color:red\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["subject"], "sTitle", array())), "html", null, true);
                echo "</th>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                  <th>Total</th>
                  <th>Position</th>
                </tr>
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sum"] ?? $this->getContext($context, "sum")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 49
                echo "                <tr>
                \t<td style=\"text-nowrap; white-space: nowrap; font-weight:bold; color:black;\">";
                // line 50
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], 2, array(), "array"), "names", array())), "html", null, true);
                echo "</td>
                    ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
                foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                    // line 52
                    echo "                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["subject"], "childSubjects", array())) > 1)) {
                        // line 53
                        echo "                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["childSub"]) {
                            // line 54
                            echo "                        ";
                            $context["c_sub_key"] = (((($this->getAttribute($this->getAttribute($context["item"], 2, array(), "array"), "id", array()) . ".") . $this->getAttribute($context["childSub"], "id", array())) . ".") . "c");
                            // line 55
                            echo "                        ";
                            if ($this->getAttribute($this->getAttribute(($context["key_list_c"] ?? null), ($context["c_sub_key"] ?? $this->getContext($context, "c_sub_key")), array(), "array", false, true), ($context["c_sub_key"] ?? $this->getContext($context, "c_sub_key")), array(), "array", true, true)) {
                                // line 56
                                echo "                          <td style=\"color:blue\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["key_list_c"] ?? $this->getContext($context, "key_list_c")), ($context["c_sub_key"] ?? $this->getContext($context, "c_sub_key")), array(), "array"), ($context["c_sub_key"] ?? $this->getContext($context, "c_sub_key")), array(), "array"), "marks", array()), "html", null, true);
                                echo "</td>
                        ";
                            } else {
                                // line 58
                                echo "                          <td style=\"color:blue\">_</td>
                        ";
                            }
                            // line 60
                            echo "                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childSub'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 61
                        echo "                    ";
                    }
                    // line 62
                    echo "                    ";
                    $context["st_sub_key"] = (((($this->getAttribute($this->getAttribute($context["item"], 2, array(), "array"), "id", array()) . ".") . $this->getAttribute($context["subject"], "id", array())) . ".") . "s");
                    // line 63
                    echo "                      ";
                    if ($this->getAttribute($this->getAttribute(($context["key_list_s"] ?? null), ($context["st_sub_key"] ?? $this->getContext($context, "st_sub_key")), array(), "array", false, true), ($context["st_sub_key"] ?? $this->getContext($context, "st_sub_key")), array(), "array", true, true)) {
                        // line 64
                        echo "                        <td style=\"color:red\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["key_list_s"] ?? $this->getContext($context, "key_list_s")), ($context["st_sub_key"] ?? $this->getContext($context, "st_sub_key")), array(), "array"), ($context["st_sub_key"] ?? $this->getContext($context, "st_sub_key")), array(), "array"), "marks", array()), "html", null, true);
                        echo "</td>
                      ";
                    } else {
                        // line 66
                        echo "                        <td style=\"color:red\">_</td>
                      ";
                    }
                    // line 68
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                \t<td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], 0, array(), "array"), "html", null, true);
                echo "</td>
                \t<td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], 1, array(), "array"), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "              <tr>
\t\t\t\t\t<td>Total Score</td>
\t\t\t\t\t";
            // line 75
            $context["total_score"] = 0;
            // line 76
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 77
                echo "\t\t\t\t\t\t";
                $context["total_score"] = (($context["total_score"] ?? $this->getContext($context, "total_score")) + $this->getAttribute($this->getAttribute(($context["sum_sub"] ?? $this->getContext($context, "sum_sub")), $this->getAttribute($context["subject"], "id", array()), array(), "array"), 0, array(), "array"));
                // line 78
                echo "                \t\t";
                if (twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                    // line 79
                    echo "                \t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 80
                        echo "                \t\t\t\t<td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["c_sum_sub"] ?? $this->getContext($context, "c_sum_sub")), $this->getAttribute($context["child"], "id", array()), array(), "array"), 0, array(), "array"), "html", null, true);
                        echo "</td>
                \t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 82
                    echo "                \t\t";
                }
                // line 83
                echo "\t\t\t\t\t\t<td style=\"color:black;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sum_sub"] ?? $this->getContext($context, "sum_sub")), $this->getAttribute($context["subject"], "id", array()), array(), "array"), 0, array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "\t\t\t\t\t<td style=\"color:black;\">";
            echo twig_escape_filter($this->env, ($context["total_score"] ?? $this->getContext($context, "total_score")), "html", null, true);
            echo "</td>
              </tr>
              <tr>
\t\t\t\t\t<td>Mean Score</td>
\t\t\t\t\t";
            // line 89
            $context["total_mean"] = 0;
            // line 90
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 91
                echo "\t\t\t\t\t\t";
                $context["mean"] = ($this->getAttribute($this->getAttribute(($context["sum_sub"] ?? $this->getContext($context, "sum_sub")), $this->getAttribute($context["subject"], "id", array()), array(), "array"), 0, array(), "array") / twig_length_filter($this->env, ($context["students"] ?? $this->getContext($context, "students"))));
                // line 92
                echo "\t\t\t\t\t\t";
                $context["total_mean"] = (($context["total_mean"] ?? $this->getContext($context, "total_mean")) + ($context["mean"] ?? $this->getContext($context, "mean")));
                // line 93
                echo "                \t\t";
                if (twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                    // line 94
                    echo "                \t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 95
                        echo "\t\t\t\t\t\t\t\t";
                        $context["mean_child"] = ($this->getAttribute($this->getAttribute(($context["c_sum_sub"] ?? $this->getContext($context, "c_sum_sub")), $this->getAttribute($context["child"], "id", array()), array(), "array"), 0, array(), "array") / twig_length_filter($this->env, ($context["students"] ?? $this->getContext($context, "students"))));
                        // line 96
                        echo "                \t\t\t\t<td>";
                        echo twig_escape_filter($this->env, twig_round(($context["mean_child"] ?? $this->getContext($context, "mean_child")), 2), "html", null, true);
                        echo "</td>
                \t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 98
                    echo "                \t\t";
                }
                // line 99
                echo "\t\t\t\t\t\t<td style=\"color:black;\">";
                echo twig_escape_filter($this->env, twig_round(($context["mean"] ?? $this->getContext($context, "mean")), 2), "html", null, true);
                echo "</td>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "\t\t\t\t\t<td style=\"color:black;\">";
            echo twig_escape_filter($this->env, twig_round(($context["total_mean"] ?? $this->getContext($context, "total_mean")), 2), "html", null, true);
            echo "</td>
              </tr>
              <tr>
\t\t\t\t\t<td>Position</td>
\t\t\t\t\t";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 106
                echo "                \t\t";
                if (twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                    // line 107
                    echo "                \t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 108
                        echo "                \t\t\t\t<td></td>
                \t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "                \t\t";
                }
                // line 111
                echo "\t\t\t\t\t\t<td style=\"color:red;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sum_sub"] ?? $this->getContext($context, "sum_sub")), $this->getAttribute($context["subject"], "id", array()), array(), "array"), 1, array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "              </tr>
             </tbody>
          </table>
        </section>
      </div>
  ";
        }
        
        $__internal_29c7285aa8f71bb8c7685713cd60ed26d356259776d776d0e1a530bf0ec944ca->leave($__internal_29c7285aa8f71bb8c7685713cd60ed26d356259776d776d0e1a530bf0ec944ca_prof);

        
        $__internal_c818577d7d373ec3f99443ff387ed9aaf31b42b2c36064f432cf330e4ed2db0b->leave($__internal_c818577d7d373ec3f99443ff387ed9aaf31b42b2c36064f432cf330e4ed2db0b_prof);

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
        return array (  601 => 113,  592 => 111,  589 => 110,  582 => 108,  577 => 107,  574 => 106,  570 => 105,  562 => 101,  553 => 99,  550 => 98,  541 => 96,  538 => 95,  533 => 94,  530 => 93,  527 => 92,  524 => 91,  519 => 90,  517 => 89,  509 => 85,  500 => 83,  497 => 82,  488 => 80,  483 => 79,  480 => 78,  477 => 77,  472 => 76,  470 => 75,  466 => 73,  457 => 70,  452 => 69,  446 => 68,  442 => 66,  436 => 64,  433 => 63,  430 => 62,  427 => 61,  421 => 60,  417 => 58,  411 => 56,  408 => 55,  405 => 54,  400 => 53,  397 => 52,  393 => 51,  389 => 50,  386 => 49,  382 => 48,  377 => 45,  368 => 43,  365 => 42,  356 => 40,  351 => 39,  348 => 38,  344 => 37,  338 => 33,  332 => 32,  329 => 31,  326 => 30,  323 => 29,  318 => 28,  316 => 27,  310 => 24,  306 => 23,  302 => 22,  295 => 20,  289 => 16,  283 => 14,  278 => 12,  271 => 10,  268 => 9,  265 => 8,  256 => 7,  60 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
            {% for childSubject in childSubjects %}
              {% if childSubject.subject.sTitle not in parents %}
                {% set parents = parents|merge([childSubject.subject.sTitle]) %}
              {% endif %}
            {% endfor %}
            <table class=\"table table-striped table-advance table-hover\">
             <tbody>
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
", "score/summary.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/score/summary.html.twig");
    }
}
