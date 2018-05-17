<?php

/* score/report.html.twig */
class __TwigTemplate_70e8e49ba970dc0e9e2903db9d8e516678fd899a3bf2407c21959c4669320fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "score/report.html.twig", 1);
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
        $__internal_2e34d3bc3abd2c222d870f35879a5ae8ee38438a3c60ec1bbf162fb9f28f06b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e34d3bc3abd2c222d870f35879a5ae8ee38438a3c60ec1bbf162fb9f28f06b4->enter($__internal_2e34d3bc3abd2c222d870f35879a5ae8ee38438a3c60ec1bbf162fb9f28f06b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/report.html.twig"));

        $__internal_00dc3d27ed46900dc7f06b6eb0d5ac5b9b3cbb9d305d08a0ba3a1d217d6be16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00dc3d27ed46900dc7f06b6eb0d5ac5b9b3cbb9d305d08a0ba3a1d217d6be16a->enter($__internal_00dc3d27ed46900dc7f06b6eb0d5ac5b9b3cbb9d305d08a0ba3a1d217d6be16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/report.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e34d3bc3abd2c222d870f35879a5ae8ee38438a3c60ec1bbf162fb9f28f06b4->leave($__internal_2e34d3bc3abd2c222d870f35879a5ae8ee38438a3c60ec1bbf162fb9f28f06b4_prof);

        
        $__internal_00dc3d27ed46900dc7f06b6eb0d5ac5b9b3cbb9d305d08a0ba3a1d217d6be16a->leave($__internal_00dc3d27ed46900dc7f06b6eb0d5ac5b9b3cbb9d305d08a0ba3a1d217d6be16a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b89bc0f67b75d8628a7a3d7c9e412096e2154c98f05da02c9fc177f736e8c3cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b89bc0f67b75d8628a7a3d7c9e412096e2154c98f05da02c9fc177f736e8c3cc->enter($__internal_b89bc0f67b75d8628a7a3d7c9e412096e2154c98f05da02c9fc177f736e8c3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c52a0129e099fff5868d19f25074c3303bc6dee34829bf1e544aaa0c661215c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c52a0129e099fff5868d19f25074c3303bc6dee34829bf1e544aaa0c661215c->enter($__internal_5c52a0129e099fff5868d19f25074c3303bc6dee34829bf1e544aaa0c661215c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("score/report.html.twig", "score/report.html.twig", 6, "1158675273")->display($context);
        
        $__internal_5c52a0129e099fff5868d19f25074c3303bc6dee34829bf1e544aaa0c661215c->leave($__internal_5c52a0129e099fff5868d19f25074c3303bc6dee34829bf1e544aaa0c661215c_prof);

        
        $__internal_b89bc0f67b75d8628a7a3d7c9e412096e2154c98f05da02c9fc177f736e8c3cc->leave($__internal_b89bc0f67b75d8628a7a3d7c9e412096e2154c98f05da02c9fc177f736e8c3cc_prof);

    }

    public function getTemplateName()
    {
        return "score/report.html.twig";
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
              <a class=\"btn btn-sm btn-primary\" href=\"{{ path('download_report', {'classId': class.id, 'companyId': exam.id}) }}\">Download PDF</a>
              </div>
            </header>
            {% set parents = [] %}
            {% for childSubject in childSubjects %}
              {% if childSubject.subject.sTitle not in parents %}
                {% set parents = parents|merge([childSubject.subject.sTitle]) %}
              {% endif %}
            {% endfor %}
            {% set total_possible = app.user.subjects|length * 100 %}
            {% for key, item in sum %}
            <div class=\"col-lg-6\" style=\"color:black;\">
            <div style=\" text-align:center;\">
              <h3>{{app.user.configs|first.schName|upper}}</h3>
              <p style=\"color:black; font-weight:bold\">
                {{app.user.configs|first.address|upper}}, Telephone: {{app.user.configs|first.telephone|upper}}
              </p>
            </div>
            <div>
              <p class=\"col-lg-8\">NAME: <span style=\"font-weight:bold;\">{{item[2].names|title}}</span></p>
              <p class=\"col-lg-4\">UPI NO: <span style=\"font-weight:bold;\">{{item[2].upiNumber}}</span></p>
            </div>
            <div>
              <p class=\"col-lg-8\">CLASS: <span style=\"font-weight:bold;\">{{item[2].class|title}}</span></p>
              <p class=\"col-lg-4\">DATE: <span style=\"font-weight:bold;\">{{\"now\"|date(\"d/m/Y\")}}</span></p>
            </div>
            <table class=\"table table-striped table-advance table-hover\">
              <thead>
                <tr>
                    <td>SUBJECTS</td>
                    <td>SCORES</td>
                    <td>GRADE</td>
                    <td>REMARKS</td>

                </tr>
              </thead>
             <tbody>
                    {% for subject in subjects %}
                    <tr>
                    {% set st_sub_key = item[2].id ~ \".\" ~ subject.id ~ \".\" ~ \"s\" %}
                      {% if key_list_s[st_sub_key][st_sub_key] is defined %}
                        <td>{{subject.sTitle|title}}</td>
                        <td>{{key_list_s[st_sub_key][st_sub_key].marks}}</td>
                        <td></td>
                        <td></td>
                      {% else %}
                        <td>{{subject.sTitle|title}}</td>
                        <td>_</td>
                        <td></td>
                        <td></td>
                      {% endif %}
                    </tr>
                    {% endfor %}
                <tr style=\"font-weight:bold\">
                  <td>TOTAL MARKS</td>
                \t<td>{{item[0]}}</td>
                  <td>OUT OF</td>
                  <td>{{total_possible}}</td>
                </tr>
                <tr style=\"font-weight:bold\">
                  <td>POSITION</td>
                \t<td>{{item[1]}}</td>
                  <td>OUT OF</td>
                  <td>{{item[2].class.students|length}}</td>
                </tr>
             </tbody>
          </table>
          <div class=\"row\">
            <p class=\"col-lg-6\">CLASS TEACHER: {{item[2].class.classTeacher|title}}</p>
            <p class=\"col-lg-12\">COMMENTS:..........................................................................................................................................
            .................................................................................................................................................................</p>
            <p class=\"col-lg-6\">PRESENT: <br /><span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-6\">ABSENT:<br /> <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-5\">OUTSTANDING FEES: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
            <p class=\"col-lg-3\"> DATE: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p> 
            <p class=\"col-lg-4\">SIGNATURE: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-4\">NEXT TERM FEES: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-4\">NEXT TERM DATE: <br /><span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-4\">REPORTING TIME: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-12\">HEAD TEACHER'S REMARKS:..........................................................................................................................................
            ..........................................................................................................................................</p>
            <p class=\"col-lg-6\"> DATE: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p> 
            <p class=\"col-lg-6\">SIGNATURE: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
          </div>
        </div>
        {% endfor %}
        </section>
      </div>
  {% endif %}
{% endblock %}
{% endembed %}
{% endblock %}
", "score/report.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/score/report.html.twig");
    }
}


/* score/report.html.twig */
class __TwigTemplate_70e8e49ba970dc0e9e2903db9d8e516678fd899a3bf2407c21959c4669320fb4_1158675273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "score/report.html.twig", 6);
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
        $__internal_02d4dae41c479c1213f414be59b0fb58adce617e8f8970554697d9b897751b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02d4dae41c479c1213f414be59b0fb58adce617e8f8970554697d9b897751b0a->enter($__internal_02d4dae41c479c1213f414be59b0fb58adce617e8f8970554697d9b897751b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/report.html.twig"));

        $__internal_52f7689668bfb40b02917f2335ddf04f19c59b0f5a76afcdced37c8b4a5b486e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f7689668bfb40b02917f2335ddf04f19c59b0f5a76afcdced37c8b4a5b486e->enter($__internal_52f7689668bfb40b02917f2335ddf04f19c59b0f5a76afcdced37c8b4a5b486e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/report.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02d4dae41c479c1213f414be59b0fb58adce617e8f8970554697d9b897751b0a->leave($__internal_02d4dae41c479c1213f414be59b0fb58adce617e8f8970554697d9b897751b0a_prof);

        
        $__internal_52f7689668bfb40b02917f2335ddf04f19c59b0f5a76afcdced37c8b4a5b486e->leave($__internal_52f7689668bfb40b02917f2335ddf04f19c59b0f5a76afcdced37c8b4a5b486e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_2f722a1d1ab2ff5b90757cfddf2988fa9b641959573fb84059170a2daea54889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f722a1d1ab2ff5b90757cfddf2988fa9b641959573fb84059170a2daea54889->enter($__internal_2f722a1d1ab2ff5b90757cfddf2988fa9b641959573fb84059170a2daea54889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e0af163458d35e3ed96aac506066dd715015f2b063e1281fe875403ec3b93975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0af163458d35e3ed96aac506066dd715015f2b063e1281fe875403ec3b93975->enter($__internal_e0af163458d35e3ed96aac506066dd715015f2b063e1281fe875403ec3b93975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("download_report", array("classId" => $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "id", array()), "companyId" => $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "id", array()))), "html", null, true);
            echo "\">Download PDF</a>
              </div>
            </header>
            ";
            // line 25
            $context["parents"] = array();
            // line 26
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["childSubjects"] ?? $this->getContext($context, "childSubjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["childSubject"]) {
                // line 27
                echo "              ";
                if (!twig_in_filter($this->getAttribute($this->getAttribute($context["childSubject"], "subject", array()), "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                    // line 28
                    echo "                ";
                    $context["parents"] = twig_array_merge(($context["parents"] ?? $this->getContext($context, "parents")), array(0 => $this->getAttribute($this->getAttribute($context["childSubject"], "subject", array()), "sTitle", array())));
                    // line 29
                    echo "              ";
                }
                // line 30
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childSubject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            ";
            $context["total_possible"] = (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array())) * 100);
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sum"] ?? $this->getContext($context, "sum")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 33
                echo "            <div class=\"col-lg-6\" style=\"color:black;\">
            <div style=\" text-align:center;\">
              <h3>";
                // line 35
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "configs", array())), "schName", array())), "html", null, true);
                echo "</h3>
              <p style=\"color:black; font-weight:bold\">
                ";
                // line 37
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "configs", array())), "address", array())), "html", null, true);
                echo ", Telephone: ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "configs", array())), "telephone", array())), "html", null, true);
                echo "
              </p>
            </div>
            <div>
              <p class=\"col-lg-8\">NAME: <span style=\"font-weight:bold;\">";
                // line 41
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], 2, array(), "array"), "names", array())), "html", null, true);
                echo "</span></p>
              <p class=\"col-lg-4\">UPI NO: <span style=\"font-weight:bold;\">";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], 2, array(), "array"), "upiNumber", array()), "html", null, true);
                echo "</span></p>
            </div>
            <div>
              <p class=\"col-lg-8\">CLASS: <span style=\"font-weight:bold;\">";
                // line 45
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], 2, array(), "array"), "class", array())), "html", null, true);
                echo "</span></p>
              <p class=\"col-lg-4\">DATE: <span style=\"font-weight:bold;\">";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
                echo "</span></p>
            </div>
            <table class=\"table table-striped table-advance table-hover\">
              <thead>
                <tr>
                    <td>SUBJECTS</td>
                    <td>SCORES</td>
                    <td>GRADE</td>
                    <td>REMARKS</td>

                </tr>
              </thead>
             <tbody>
                    ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
                foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                    // line 60
                    echo "                    <tr>
                    ";
                    // line 61
                    $context["st_sub_key"] = (((($this->getAttribute($this->getAttribute($context["item"], 2, array(), "array"), "id", array()) . ".") . $this->getAttribute($context["subject"], "id", array())) . ".") . "s");
                    // line 62
                    echo "                      ";
                    if ($this->getAttribute($this->getAttribute(($context["key_list_s"] ?? null), ($context["st_sub_key"] ?? $this->getContext($context, "st_sub_key")), array(), "array", false, true), ($context["st_sub_key"] ?? $this->getContext($context, "st_sub_key")), array(), "array", true, true)) {
                        // line 63
                        echo "                        <td>";
                        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["subject"], "sTitle", array())), "html", null, true);
                        echo "</td>
                        <td>";
                        // line 64
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["key_list_s"] ?? $this->getContext($context, "key_list_s")), ($context["st_sub_key"] ?? $this->getContext($context, "st_sub_key")), array(), "array"), ($context["st_sub_key"] ?? $this->getContext($context, "st_sub_key")), array(), "array"), "marks", array()), "html", null, true);
                        echo "</td>
                        <td></td>
                        <td></td>
                      ";
                    } else {
                        // line 68
                        echo "                        <td>";
                        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["subject"], "sTitle", array())), "html", null, true);
                        echo "</td>
                        <td>_</td>
                        <td></td>
                        <td></td>
                      ";
                    }
                    // line 73
                    echo "                    </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                <tr style=\"font-weight:bold\">
                  <td>TOTAL MARKS</td>
                \t<td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], 0, array(), "array"), "html", null, true);
                echo "</td>
                  <td>OUT OF</td>
                  <td>";
                // line 79
                echo twig_escape_filter($this->env, ($context["total_possible"] ?? $this->getContext($context, "total_possible")), "html", null, true);
                echo "</td>
                </tr>
                <tr style=\"font-weight:bold\">
                  <td>POSITION</td>
                \t<td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], 1, array(), "array"), "html", null, true);
                echo "</td>
                  <td>OUT OF</td>
                  <td>";
                // line 85
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], 2, array(), "array"), "class", array()), "students", array())), "html", null, true);
                echo "</td>
                </tr>
             </tbody>
          </table>
          <div class=\"row\">
            <p class=\"col-lg-6\">CLASS TEACHER: ";
                // line 90
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], 2, array(), "array"), "class", array()), "classTeacher", array())), "html", null, true);
                echo "</p>
            <p class=\"col-lg-12\">COMMENTS:..........................................................................................................................................
            .................................................................................................................................................................</p>
            <p class=\"col-lg-6\">PRESENT: <br /><span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-6\">ABSENT:<br /> <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-5\">OUTSTANDING FEES: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
            <p class=\"col-lg-3\"> DATE: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p> 
            <p class=\"col-lg-4\">SIGNATURE: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-4\">NEXT TERM FEES: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-4\">NEXT TERM DATE: <br /><span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-4\">REPORTING TIME: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-12\">HEAD TEACHER'S REMARKS:..........................................................................................................................................
            ..........................................................................................................................................</p>
            <p class=\"col-lg-6\"> DATE: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p> 
            <p class=\"col-lg-6\">SIGNATURE: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "        </section>
      </div>
  ";
        }
        
        $__internal_e0af163458d35e3ed96aac506066dd715015f2b063e1281fe875403ec3b93975->leave($__internal_e0af163458d35e3ed96aac506066dd715015f2b063e1281fe875403ec3b93975_prof);

        
        $__internal_2f722a1d1ab2ff5b90757cfddf2988fa9b641959573fb84059170a2daea54889->leave($__internal_2f722a1d1ab2ff5b90757cfddf2988fa9b641959573fb84059170a2daea54889_prof);

    }

    public function getTemplateName()
    {
        return "score/report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 108,  447 => 90,  439 => 85,  434 => 83,  427 => 79,  422 => 77,  418 => 75,  411 => 73,  402 => 68,  395 => 64,  390 => 63,  387 => 62,  385 => 61,  382 => 60,  378 => 59,  362 => 46,  358 => 45,  352 => 42,  348 => 41,  339 => 37,  334 => 35,  330 => 33,  325 => 32,  322 => 31,  316 => 30,  313 => 29,  310 => 28,  307 => 27,  302 => 26,  300 => 25,  294 => 22,  287 => 20,  281 => 16,  275 => 14,  270 => 12,  263 => 10,  260 => 9,  257 => 8,  248 => 7,  60 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
              <a class=\"btn btn-sm btn-primary\" href=\"{{ path('download_report', {'classId': class.id, 'companyId': exam.id}) }}\">Download PDF</a>
              </div>
            </header>
            {% set parents = [] %}
            {% for childSubject in childSubjects %}
              {% if childSubject.subject.sTitle not in parents %}
                {% set parents = parents|merge([childSubject.subject.sTitle]) %}
              {% endif %}
            {% endfor %}
            {% set total_possible = app.user.subjects|length * 100 %}
            {% for key, item in sum %}
            <div class=\"col-lg-6\" style=\"color:black;\">
            <div style=\" text-align:center;\">
              <h3>{{app.user.configs|first.schName|upper}}</h3>
              <p style=\"color:black; font-weight:bold\">
                {{app.user.configs|first.address|upper}}, Telephone: {{app.user.configs|first.telephone|upper}}
              </p>
            </div>
            <div>
              <p class=\"col-lg-8\">NAME: <span style=\"font-weight:bold;\">{{item[2].names|title}}</span></p>
              <p class=\"col-lg-4\">UPI NO: <span style=\"font-weight:bold;\">{{item[2].upiNumber}}</span></p>
            </div>
            <div>
              <p class=\"col-lg-8\">CLASS: <span style=\"font-weight:bold;\">{{item[2].class|title}}</span></p>
              <p class=\"col-lg-4\">DATE: <span style=\"font-weight:bold;\">{{\"now\"|date(\"d/m/Y\")}}</span></p>
            </div>
            <table class=\"table table-striped table-advance table-hover\">
              <thead>
                <tr>
                    <td>SUBJECTS</td>
                    <td>SCORES</td>
                    <td>GRADE</td>
                    <td>REMARKS</td>

                </tr>
              </thead>
             <tbody>
                    {% for subject in subjects %}
                    <tr>
                    {% set st_sub_key = item[2].id ~ \".\" ~ subject.id ~ \".\" ~ \"s\" %}
                      {% if key_list_s[st_sub_key][st_sub_key] is defined %}
                        <td>{{subject.sTitle|title}}</td>
                        <td>{{key_list_s[st_sub_key][st_sub_key].marks}}</td>
                        <td></td>
                        <td></td>
                      {% else %}
                        <td>{{subject.sTitle|title}}</td>
                        <td>_</td>
                        <td></td>
                        <td></td>
                      {% endif %}
                    </tr>
                    {% endfor %}
                <tr style=\"font-weight:bold\">
                  <td>TOTAL MARKS</td>
                \t<td>{{item[0]}}</td>
                  <td>OUT OF</td>
                  <td>{{total_possible}}</td>
                </tr>
                <tr style=\"font-weight:bold\">
                  <td>POSITION</td>
                \t<td>{{item[1]}}</td>
                  <td>OUT OF</td>
                  <td>{{item[2].class.students|length}}</td>
                </tr>
             </tbody>
          </table>
          <div class=\"row\">
            <p class=\"col-lg-6\">CLASS TEACHER: {{item[2].class.classTeacher|title}}</p>
            <p class=\"col-lg-12\">COMMENTS:..........................................................................................................................................
            .................................................................................................................................................................</p>
            <p class=\"col-lg-6\">PRESENT: <br /><span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-6\">ABSENT:<br /> <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-5\">OUTSTANDING FEES: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
            <p class=\"col-lg-3\"> DATE: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p> 
            <p class=\"col-lg-4\">SIGNATURE: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-4\">NEXT TERM FEES: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-4\">NEXT TERM DATE: <br /><span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-4\">REPORTING TIME: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
            <p class=\"col-lg-12\">HEAD TEACHER'S REMARKS:..........................................................................................................................................
            ..........................................................................................................................................</p>
            <p class=\"col-lg-6\"> DATE: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p> 
            <p class=\"col-lg-6\">SIGNATURE: <span style=\"width:100%; text-decoration:underline;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
          </div>
        </div>
        {% endfor %}
        </section>
      </div>
  {% endif %}
{% endblock %}
{% endembed %}
{% endblock %}
", "score/report.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/score/report.html.twig");
    }
}
