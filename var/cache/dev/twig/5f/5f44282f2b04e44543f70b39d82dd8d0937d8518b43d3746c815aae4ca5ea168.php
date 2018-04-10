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
        $__internal_cef3f455f7e93c99512c5867746d77477a4796543520f2d32c344a92f3b26d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef3f455f7e93c99512c5867746d77477a4796543520f2d32c344a92f3b26d0c->enter($__internal_cef3f455f7e93c99512c5867746d77477a4796543520f2d32c344a92f3b26d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/summary.html.twig"));

        $__internal_2b668eadf6378a3793c00dad0beba19ff0f6b4d1e36c7278a976b93ed9eeeb21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b668eadf6378a3793c00dad0beba19ff0f6b4d1e36c7278a976b93ed9eeeb21->enter($__internal_2b668eadf6378a3793c00dad0beba19ff0f6b4d1e36c7278a976b93ed9eeeb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/summary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cef3f455f7e93c99512c5867746d77477a4796543520f2d32c344a92f3b26d0c->leave($__internal_cef3f455f7e93c99512c5867746d77477a4796543520f2d32c344a92f3b26d0c_prof);

        
        $__internal_2b668eadf6378a3793c00dad0beba19ff0f6b4d1e36c7278a976b93ed9eeeb21->leave($__internal_2b668eadf6378a3793c00dad0beba19ff0f6b4d1e36c7278a976b93ed9eeeb21_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f3cf9835ff1f52e39b0faaaf7e0c6e19c2ba227e27bd5173cee6bf78ea8a8eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f3cf9835ff1f52e39b0faaaf7e0c6e19c2ba227e27bd5173cee6bf78ea8a8eb->enter($__internal_2f3cf9835ff1f52e39b0faaaf7e0c6e19c2ba227e27bd5173cee6bf78ea8a8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_876426e75f924fc92c98866250a6599cc182a903c11958ed5f68f06c225fb4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876426e75f924fc92c98866250a6599cc182a903c11958ed5f68f06c225fb4a2->enter($__internal_876426e75f924fc92c98866250a6599cc182a903c11958ed5f68f06c225fb4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("score/summary.html.twig", "score/summary.html.twig", 6, "246231945")->display($context);
        
        $__internal_876426e75f924fc92c98866250a6599cc182a903c11958ed5f68f06c225fb4a2->leave($__internal_876426e75f924fc92c98866250a6599cc182a903c11958ed5f68f06c225fb4a2_prof);

        
        $__internal_2f3cf9835ff1f52e39b0faaaf7e0c6e19c2ba227e27bd5173cee6bf78ea8a8eb->leave($__internal_2f3cf9835ff1f52e39b0faaaf7e0c6e19c2ba227e27bd5173cee6bf78ea8a8eb_prof);

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
\t\t\t<div class=\"col-lg-12\">
        <section class=\"panel\">
            <header class=\"panel-heading\">
              Exam Report Summary for {{exam.cTitle}} [{{class.cTitle}}]
              <div class=\"pull-right\">
              <a class=\"btn btn-sm btn-primary\" href=\"{{ path('download_exam', {'classId': class.id, 'companyId': exam.id}) }}\">Download PDF</a>
              <a class=\"btn btn-sm btn-primary\" href=\"{{ path('download_exam_img', {'classId': class.id, 'companyId': exam.id}) }}\">Download Image</a>
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
                      <th>{{c_subject.cSTitle}}</th>
                      {% endfor %}
                    {% endif %}
                    <th style=\"color:red\">{{subject.sTitle}}</th>
                  {% endfor %}
                  <th>Total</th>
                  <th>Position</th>
                </tr>
                {% for key, item in sum %}
                <tr>
                \t<td style=\"text-nowrap; font-weight:bold; color:black;\">{{item[2].names}}</td>
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

{% endblock %}
{% endembed %}
{% endblock %}
", "score/summary.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/score/summary.html.twig");
    }
}


/* score/summary.html.twig */
class __TwigTemplate_0dd22dfa6af9af9a05ae889512ae1d160b3d3c4780a5745c5221108d0c7d78ac_246231945 extends Twig_Template
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
        $__internal_e82710582960b36d1f240d89d555896a74331174c49782ab24e97858ef94d115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82710582960b36d1f240d89d555896a74331174c49782ab24e97858ef94d115->enter($__internal_e82710582960b36d1f240d89d555896a74331174c49782ab24e97858ef94d115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/summary.html.twig"));

        $__internal_31073ae5850e4b8f982183cb54b4314cfe66fc35f1c297bfa10fa7189e1b5edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31073ae5850e4b8f982183cb54b4314cfe66fc35f1c297bfa10fa7189e1b5edd->enter($__internal_31073ae5850e4b8f982183cb54b4314cfe66fc35f1c297bfa10fa7189e1b5edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/summary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e82710582960b36d1f240d89d555896a74331174c49782ab24e97858ef94d115->leave($__internal_e82710582960b36d1f240d89d555896a74331174c49782ab24e97858ef94d115_prof);

        
        $__internal_31073ae5850e4b8f982183cb54b4314cfe66fc35f1c297bfa10fa7189e1b5edd->leave($__internal_31073ae5850e4b8f982183cb54b4314cfe66fc35f1c297bfa10fa7189e1b5edd_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_093d94423f192c77155d16137ae533637930686b85dcb206d2e14ca2a6c59fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093d94423f192c77155d16137ae533637930686b85dcb206d2e14ca2a6c59fcf->enter($__internal_093d94423f192c77155d16137ae533637930686b85dcb206d2e14ca2a6c59fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_458c5752e99f09be491787e299bc85b8abfcd5eb620671d3b39f402df7768930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458c5752e99f09be491787e299bc85b8abfcd5eb620671d3b39f402df7768930->enter($__internal_458c5752e99f09be491787e299bc85b8abfcd5eb620671d3b39f402df7768930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "\t\t\t<div class=\"col-lg-12\">
        <section class=\"panel\">
            <header class=\"panel-heading\">
              Exam Report Summary for ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "cTitle", array()), "html", null, true);
        echo " [";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "cTitle", array()), "html", null, true);
        echo "]
              <div class=\"pull-right\">
              <a class=\"btn btn-sm btn-primary\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("download_exam", array("classId" => $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "id", array()), "companyId" => $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "id", array()))), "html", null, true);
        echo "\">Download PDF</a>
              <a class=\"btn btn-sm btn-primary\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("download_exam_img", array("classId" => $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "id", array()), "companyId" => $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "id", array()))), "html", null, true);
        echo "\">Download Image</a>
              </div>
            </header>
            ";
        // line 17
        $context["parents"] = array();
        // line 18
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childSubjects"] ?? $this->getContext($context, "childSubjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["childSubject"]) {
            // line 19
            echo "              ";
            if (!twig_in_filter($this->getAttribute($this->getAttribute($context["childSubject"], "subject", array()), "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                // line 20
                echo "                ";
                $context["parents"] = twig_array_merge(($context["parents"] ?? $this->getContext($context, "parents")), array(0 => $this->getAttribute($this->getAttribute($context["childSubject"], "subject", array()), "sTitle", array())));
                // line 21
                echo "              ";
            }
            // line 22
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childSubject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            <table class=\"table table-striped table-advance table-hover\">
             <tbody>
                <tr>
                  <th style=\"text-nowrap\" class=\"col-md-3\">Name</th>
                  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 28
            echo "                    ";
            if (twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                // line 29
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["c_subject"]) {
                    // line 30
                    echo "                      <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c_subject"], "cSTitle", array()), "html", null, true);
                    echo "</th>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_subject'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "                    ";
            }
            // line 33
            echo "                    <th style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "sTitle", array()), "html", null, true);
            echo "</th>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                  <th>Total</th>
                  <th>Position</th>
                </tr>
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sum"] ?? $this->getContext($context, "sum")));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 39
            echo "                <tr>
                \t<td style=\"text-nowrap; font-weight:bold; color:black;\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], 2, array(), "array"), "names", array()), "html", null, true);
            echo "</td>
                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 42
                echo "                    ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["subject"], "childSubjects", array())) > 1)) {
                    // line 43
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["childSub"]) {
                        // line 44
                        echo "                        ";
                        $context["c_sub_key"] = (((($this->getAttribute($this->getAttribute($context["item"], 2, array(), "array"), "id", array()) . ".") . $this->getAttribute($context["childSub"], "id", array())) . ".") . "c");
                        // line 45
                        echo "                        ";
                        if ($this->getAttribute($this->getAttribute(($context["key_list_c"] ?? null), ($context["c_sub_key"] ?? $this->getContext($context, "c_sub_key")), array(), "array", false, true), ($context["c_sub_key"] ?? $this->getContext($context, "c_sub_key")), array(), "array", true, true)) {
                            // line 46
                            echo "                          <td style=\"color:blue\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["key_list_c"] ?? $this->getContext($context, "key_list_c")), ($context["c_sub_key"] ?? $this->getContext($context, "c_sub_key")), array(), "array"), ($context["c_sub_key"] ?? $this->getContext($context, "c_sub_key")), array(), "array"), "marks", array()), "html", null, true);
                            echo "</td>
                        ";
                        } else {
                            // line 48
                            echo "                          <td style=\"color:blue\">_</td>
                        ";
                        }
                        // line 50
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childSub'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "                    ";
                }
                // line 52
                echo "                    ";
                $context["st_sub_key"] = (((($this->getAttribute($this->getAttribute($context["item"], 2, array(), "array"), "id", array()) . ".") . $this->getAttribute($context["subject"], "id", array())) . ".") . "s");
                // line 53
                echo "                      ";
                if ($this->getAttribute($this->getAttribute(($context["key_list_s"] ?? null), ($context["st_sub_key"] ?? $this->getContext($context, "st_sub_key")), array(), "array", false, true), ($context["st_sub_key"] ?? $this->getContext($context, "st_sub_key")), array(), "array", true, true)) {
                    // line 54
                    echo "                        <td style=\"color:red\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["key_list_s"] ?? $this->getContext($context, "key_list_s")), ($context["st_sub_key"] ?? $this->getContext($context, "st_sub_key")), array(), "array"), ($context["st_sub_key"] ?? $this->getContext($context, "st_sub_key")), array(), "array"), "marks", array()), "html", null, true);
                    echo "</td>
                      ";
                } else {
                    // line 56
                    echo "                        <td style=\"color:red\">_</td>
                      ";
                }
                // line 58
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                \t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], 0, array(), "array"), "html", null, true);
            echo "</td>
                \t<td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], 1, array(), "array"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "              <tr>
\t\t\t\t\t<td>Total Score</td>
\t\t\t\t\t";
        // line 65
        $context["total_score"] = 0;
        // line 66
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 67
            echo "\t\t\t\t\t\t";
            $context["total_score"] = (($context["total_score"] ?? $this->getContext($context, "total_score")) + $this->getAttribute($this->getAttribute(($context["sum_sub"] ?? $this->getContext($context, "sum_sub")), $this->getAttribute($context["subject"], "id", array()), array(), "array"), 0, array(), "array"));
            // line 68
            echo "                \t\t";
            if (twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                // line 69
                echo "                \t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 70
                    echo "                \t\t\t\t<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["c_sum_sub"] ?? $this->getContext($context, "c_sum_sub")), $this->getAttribute($context["child"], "id", array()), array(), "array"), 0, array(), "array"), "html", null, true);
                    echo "</td>
                \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                \t\t";
            }
            // line 73
            echo "\t\t\t\t\t\t<td style=\"color:black;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sum_sub"] ?? $this->getContext($context, "sum_sub")), $this->getAttribute($context["subject"], "id", array()), array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t\t\t<td style=\"color:black;\">";
        echo twig_escape_filter($this->env, ($context["total_score"] ?? $this->getContext($context, "total_score")), "html", null, true);
        echo "</td>
              </tr>
              <tr>
\t\t\t\t\t<td>Mean Score</td>
\t\t\t\t\t";
        // line 79
        $context["total_mean"] = 0;
        // line 80
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 81
            echo "\t\t\t\t\t\t";
            $context["mean"] = ($this->getAttribute($this->getAttribute(($context["sum_sub"] ?? $this->getContext($context, "sum_sub")), $this->getAttribute($context["subject"], "id", array()), array(), "array"), 0, array(), "array") / twig_length_filter($this->env, ($context["students"] ?? $this->getContext($context, "students"))));
            // line 82
            echo "\t\t\t\t\t\t";
            $context["total_mean"] = (($context["total_mean"] ?? $this->getContext($context, "total_mean")) + ($context["mean"] ?? $this->getContext($context, "mean")));
            // line 83
            echo "                \t\t";
            if (twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                // line 84
                echo "                \t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t";
                    $context["mean_child"] = ($this->getAttribute($this->getAttribute(($context["c_sum_sub"] ?? $this->getContext($context, "c_sum_sub")), $this->getAttribute($context["child"], "id", array()), array(), "array"), 0, array(), "array") / twig_length_filter($this->env, ($context["students"] ?? $this->getContext($context, "students"))));
                    // line 86
                    echo "                \t\t\t\t<td>";
                    echo twig_escape_filter($this->env, twig_round(($context["mean_child"] ?? $this->getContext($context, "mean_child")), 2), "html", null, true);
                    echo "</td>
                \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "                \t\t";
            }
            // line 89
            echo "\t\t\t\t\t\t<td style=\"color:black;\">";
            echo twig_escape_filter($this->env, twig_round(($context["mean"] ?? $this->getContext($context, "mean")), 2), "html", null, true);
            echo "</td>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t\t\t\t<td style=\"color:black;\">";
        echo twig_escape_filter($this->env, twig_round(($context["total_mean"] ?? $this->getContext($context, "total_mean")), 2), "html", null, true);
        echo "</td>
              </tr>
              <tr>
\t\t\t\t\t<td>Position</td>
\t\t\t\t\t";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 96
            echo "                \t\t";
            if (twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                // line 97
                echo "                \t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 98
                    echo "                \t\t\t\t<td></td>
                \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "                \t\t";
            }
            // line 101
            echo "\t\t\t\t\t\t<td style=\"color:red;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sum_sub"] ?? $this->getContext($context, "sum_sub")), $this->getAttribute($context["subject"], "id", array()), array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "              </tr>
             </tbody>
          </table>
        </section>
      </div>

";
        
        $__internal_458c5752e99f09be491787e299bc85b8abfcd5eb620671d3b39f402df7768930->leave($__internal_458c5752e99f09be491787e299bc85b8abfcd5eb620671d3b39f402df7768930_prof);

        
        $__internal_093d94423f192c77155d16137ae533637930686b85dcb206d2e14ca2a6c59fcf->leave($__internal_093d94423f192c77155d16137ae533637930686b85dcb206d2e14ca2a6c59fcf_prof);

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
        return array (  562 => 103,  553 => 101,  550 => 100,  543 => 98,  538 => 97,  535 => 96,  531 => 95,  523 => 91,  514 => 89,  511 => 88,  502 => 86,  499 => 85,  494 => 84,  491 => 83,  488 => 82,  485 => 81,  480 => 80,  478 => 79,  470 => 75,  461 => 73,  458 => 72,  449 => 70,  444 => 69,  441 => 68,  438 => 67,  433 => 66,  431 => 65,  427 => 63,  418 => 60,  413 => 59,  407 => 58,  403 => 56,  397 => 54,  394 => 53,  391 => 52,  388 => 51,  382 => 50,  378 => 48,  372 => 46,  369 => 45,  366 => 44,  361 => 43,  358 => 42,  354 => 41,  350 => 40,  347 => 39,  343 => 38,  338 => 35,  329 => 33,  326 => 32,  317 => 30,  312 => 29,  309 => 28,  305 => 27,  299 => 23,  293 => 22,  290 => 21,  287 => 20,  284 => 19,  279 => 18,  277 => 17,  271 => 14,  267 => 13,  260 => 11,  255 => 8,  246 => 7,  60 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
\t\t\t<div class=\"col-lg-12\">
        <section class=\"panel\">
            <header class=\"panel-heading\">
              Exam Report Summary for {{exam.cTitle}} [{{class.cTitle}}]
              <div class=\"pull-right\">
              <a class=\"btn btn-sm btn-primary\" href=\"{{ path('download_exam', {'classId': class.id, 'companyId': exam.id}) }}\">Download PDF</a>
              <a class=\"btn btn-sm btn-primary\" href=\"{{ path('download_exam_img', {'classId': class.id, 'companyId': exam.id}) }}\">Download Image</a>
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
                      <th>{{c_subject.cSTitle}}</th>
                      {% endfor %}
                    {% endif %}
                    <th style=\"color:red\">{{subject.sTitle}}</th>
                  {% endfor %}
                  <th>Total</th>
                  <th>Position</th>
                </tr>
                {% for key, item in sum %}
                <tr>
                \t<td style=\"text-nowrap; font-weight:bold; color:black;\">{{item[2].names}}</td>
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

{% endblock %}
{% endembed %}
{% endblock %}
", "score/summary.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/score/summary.html.twig");
    }
}
