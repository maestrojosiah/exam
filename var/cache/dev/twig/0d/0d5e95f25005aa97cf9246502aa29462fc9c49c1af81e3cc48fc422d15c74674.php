<?php

/* score/record.html.twig */
class __TwigTemplate_7eb5944d36de53125d41f490f8b1910684e015553ea618cbf6b91ced6db87c14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "score/record.html.twig", 1);
        $this->blocks = array(
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
        $__internal_24d5d818bed4e8f80282c57101fc96d1b5ed704ae89decfd864d4c69fc671fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d5d818bed4e8f80282c57101fc96d1b5ed704ae89decfd864d4c69fc671fbd->enter($__internal_24d5d818bed4e8f80282c57101fc96d1b5ed704ae89decfd864d4c69fc671fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/record.html.twig"));

        $__internal_a893743c1ce7b03a4aa1bbc9c7c829159cd759f897ef74dc87b0b88580f9d3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a893743c1ce7b03a4aa1bbc9c7c829159cd759f897ef74dc87b0b88580f9d3a7->enter($__internal_a893743c1ce7b03a4aa1bbc9c7c829159cd759f897ef74dc87b0b88580f9d3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/record.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24d5d818bed4e8f80282c57101fc96d1b5ed704ae89decfd864d4c69fc671fbd->leave($__internal_24d5d818bed4e8f80282c57101fc96d1b5ed704ae89decfd864d4c69fc671fbd_prof);

        
        $__internal_a893743c1ce7b03a4aa1bbc9c7c829159cd759f897ef74dc87b0b88580f9d3a7->leave($__internal_a893743c1ce7b03a4aa1bbc9c7c829159cd759f897ef74dc87b0b88580f9d3a7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_64de050cf4281ae06237e13da90aaa1c10bfd2b832ff7ef913818217a7244f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64de050cf4281ae06237e13da90aaa1c10bfd2b832ff7ef913818217a7244f4b->enter($__internal_64de050cf4281ae06237e13da90aaa1c10bfd2b832ff7ef913818217a7244f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c5d265aa999c8fa6edcae19d01288bcb0bb1801d936651dcb333e277997b784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5d265aa999c8fa6edcae19d01288bcb0bb1801d936651dcb333e277997b784->enter($__internal_7c5d265aa999c8fa6edcae19d01288bcb0bb1801d936651dcb333e277997b784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("score/record.html.twig", "score/record.html.twig", 6, "1199674634")->display($context);
        
        $__internal_7c5d265aa999c8fa6edcae19d01288bcb0bb1801d936651dcb333e277997b784->leave($__internal_7c5d265aa999c8fa6edcae19d01288bcb0bb1801d936651dcb333e277997b784_prof);

        
        $__internal_64de050cf4281ae06237e13da90aaa1c10bfd2b832ff7ef913818217a7244f4b->leave($__internal_64de050cf4281ae06237e13da90aaa1c10bfd2b832ff7ef913818217a7244f4b_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7cff275e214a5e0c22f211b32fd731b69ea034bda23d7981e8d2b054ebd015a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cff275e214a5e0c22f211b32fd731b69ea034bda23d7981e8d2b054ebd015a4->enter($__internal_7cff275e214a5e0c22f211b32fd731b69ea034bda23d7981e8d2b054ebd015a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0857b9698c4837355329b38e756759f9f142b916345dc36e9432664d82f1399f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0857b9698c4837355329b38e756759f9f142b916345dc36e9432664d82f1399f->enter($__internal_0857b9698c4837355329b38e756759f9f142b916345dc36e9432664d82f1399f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "
<script>
  \$(document).on('keyup', '[id^=\"subject|\"]', function(){

      var id = jQuery(this).attr(\"id\");
      var fields = id.split('_');
      var subject = fields[0].split('|')[1];
      var user = fields[1].split('|')[1];
      var student = fields[2].split('|')[1];
      var exam = fields[3].split('|')[1];
      var classs = fields[4].split('|')[1];
      var marks = \$(this).val();


      // console.log('subject_id: ' + subject_id + ' student_id: ' + student_id);

      \$.ajax({
          url:'";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("record_exam_ajax");
        echo "',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"subject_id\": subject,
              \"student_id\": student,
              \"marks\": marks,
              \"user\": user,
              \"exam\": exam,
              \"class\": classs,
          },
          async: true,
          success: function (data)
          {
            // \$('#alert').html(\"<strong><small> Student: </small></strong> \" + data.student + \"<strong><small> Subject: </small></strong> \"+ data.subject + \"<strong><small> Marks: </small></strong>\" + data.marks + \"<strong><small> Exam Company: </small></strong>\" + data.examCompany + \"<strong><small> Term </small></strong>\" + data.term + \"<strong><small> Class: </small></strong>\" + data.class );
            // \$('#alert').html(\"Test: \" + data.test );
          },
         error: function () {
            \$('#alert').removeClass('alert-info').addClass('alert-warning');
            \$('#alert').html(\"Something went wrong. Make sure you are typing only numbers and that the values are valid. Please call 0705285959 for assistance\");
        }
      });

  });
</script>
<script>
  \$(document).on('keyup', '[id^=\"cSubject|\"]', function(){

      var id = jQuery(this).attr(\"id\");
      var fields = id.split('_');
      var cSubject = fields[0].split('|')[1];
      var user = fields[1].split('|')[1];
      var student = fields[2].split('|')[1];
      var exam = fields[3].split('|')[1];
      var classs = fields[4].split('|')[1];
      var marks = \$(this).val();

      // console.log('subject_id: ' + subject_id + ' student_id: ' + student_id);

      \$.ajax({
          url:'";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("record_exam_ajax_child");
        echo "',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"c_subject_id\": cSubject,
              \"student_id\": student,
              \"marks\": marks,
              \"user\": user,
              \"exam\": exam,
              \"class\": classs,
          },
          async: true,
          success: function (data)
          {
            console.log(data.uniqueId)
            \$(data.uniqueId).text(data.percentage);
          },
         error: function () {
            \$('#alert').removeClass('alert-info').addClass('alert-warning');
            \$('#alert').html(\"Something went wrong. Make sure you are typing only numbers and that the values are valid. Please call 0705285959 for assistance\");
        }
      });

  });
</script>

";
        
        $__internal_0857b9698c4837355329b38e756759f9f142b916345dc36e9432664d82f1399f->leave($__internal_0857b9698c4837355329b38e756759f9f142b916345dc36e9432664d82f1399f_prof);

        
        $__internal_7cff275e214a5e0c22f211b32fd731b69ea034bda23d7981e8d2b054ebd015a4->leave($__internal_7cff275e214a5e0c22f211b32fd731b69ea034bda23d7981e8d2b054ebd015a4_prof);

    }

    public function getTemplateName()
    {
        return "score/record.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 122,  99 => 82,  80 => 65,  71 => 64,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
      {% if students is not empty %}
\t\t\t<div class=\"col-lg-12\">
        <section class=\"panel\">
            <header class=\"panel-heading\">
              Exam Records for {{exam.cTitle}} [{{class.cTitle}}]
              <a href=\"{{path('list_examCompanies', {'class': class.id})}}\" class=\"btn btn-primary pull-right\">List Exams</a>
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
                  <th class=\"col-md-3\">Name</th>
                  {% for subject in subjects %}
                    {% if subject.sTitle in parents %}
                      {% for c_subject in subject.childSubjects %}
                      <th>{{c_subject.cSTitle}}</th>
                      {% endfor %}
                    {% endif %}
                    <th style=\"color:red\">{{subject.sTitle}}</th>
                  {% endfor %}
                </tr>
                {% for key, student in students %}
                  {% set hush = key + 1 %}
                <tr>
                   <td class=\"col-md-3\">{{hush}}. {{student.names}}</td>
                    {% for subject in subjects %}
                      {% set key = student.id ~ '.' ~ subject.id ~ '.' ~ class.id %}
                      {% if subject.sTitle in parents %}                        
                        {% for c_subject in subject.childSubjects %}
                          {% set childKey = student.id ~ '.' ~ c_subject.id ~ '.' ~ class.id %}
                          <td><input value=\"{% if child_score_entries[childKey] is defined %}{{child_score_entries[childKey]}}{% endif %}\" id=\"cSubject|{{c_subject.id}}_user|{{user.id}}_student|{{student.id}}_exam|{{exam.id}}_class|{{class.id}}\" style=\"max-width:40px;\" type=\"text\" /></td>
                        {% endfor %}
                      {% endif %}
                      <td>{% if subject.sTitle not in parents %}<input value=\"{% if score_entries[key] is defined %}{{score_entries[key]}}{% endif %}\" id=\"subject|{{subject.id}}_user|{{user.id}}_student|{{student.id}}_exam|{{exam.id}}_class|{{class.id}}\" style=\"max-width:40px;\" type=\"text\" />{% else %}<span id=\"{{subject.id}}_{{user.id}}_{{student.id}}_{{exam.id}}_{{class.id}}\" style=\"min-width:40px; background-color:#007aff; color:white; padding:2px;\">{% if score_entries[key] is defined %}{{score_entries[key]}}{% endif %}</span> {% endif %}</td>
                    {% endfor %}
                </tr>
              {% endfor %}
             </tbody>
          </table>
        </section>
      </div>
      <a href=\"{{path('record_summary', {'classId': exam.class.id, 'companyId': exam.id})}}\" class=\"btn btn-primary btn-block\">Generate Exam Report Summary</a>
      {% else %}
        <div class=\"well\">
          <h3>There are no students for class {{class.cTitle}}. Please <a href=\"{{path('new_student')}}\">add students</a></h3>
        </div>
      {% endif %}

{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}

<script>
  \$(document).on('keyup', '[id^=\"subject|\"]', function(){

      var id = jQuery(this).attr(\"id\");
      var fields = id.split('_');
      var subject = fields[0].split('|')[1];
      var user = fields[1].split('|')[1];
      var student = fields[2].split('|')[1];
      var exam = fields[3].split('|')[1];
      var classs = fields[4].split('|')[1];
      var marks = \$(this).val();


      // console.log('subject_id: ' + subject_id + ' student_id: ' + student_id);

      \$.ajax({
          url:'{{ (path('record_exam_ajax')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"subject_id\": subject,
              \"student_id\": student,
              \"marks\": marks,
              \"user\": user,
              \"exam\": exam,
              \"class\": classs,
          },
          async: true,
          success: function (data)
          {
            // \$('#alert').html(\"<strong><small> Student: </small></strong> \" + data.student + \"<strong><small> Subject: </small></strong> \"+ data.subject + \"<strong><small> Marks: </small></strong>\" + data.marks + \"<strong><small> Exam Company: </small></strong>\" + data.examCompany + \"<strong><small> Term </small></strong>\" + data.term + \"<strong><small> Class: </small></strong>\" + data.class );
            // \$('#alert').html(\"Test: \" + data.test );
          },
         error: function () {
            \$('#alert').removeClass('alert-info').addClass('alert-warning');
            \$('#alert').html(\"Something went wrong. Make sure you are typing only numbers and that the values are valid. Please call 0705285959 for assistance\");
        }
      });

  });
</script>
<script>
  \$(document).on('keyup', '[id^=\"cSubject|\"]', function(){

      var id = jQuery(this).attr(\"id\");
      var fields = id.split('_');
      var cSubject = fields[0].split('|')[1];
      var user = fields[1].split('|')[1];
      var student = fields[2].split('|')[1];
      var exam = fields[3].split('|')[1];
      var classs = fields[4].split('|')[1];
      var marks = \$(this).val();

      // console.log('subject_id: ' + subject_id + ' student_id: ' + student_id);

      \$.ajax({
          url:'{{ (path('record_exam_ajax_child')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"c_subject_id\": cSubject,
              \"student_id\": student,
              \"marks\": marks,
              \"user\": user,
              \"exam\": exam,
              \"class\": classs,
          },
          async: true,
          success: function (data)
          {
            console.log(data.uniqueId)
            \$(data.uniqueId).text(data.percentage);
          },
         error: function () {
            \$('#alert').removeClass('alert-info').addClass('alert-warning');
            \$('#alert').html(\"Something went wrong. Make sure you are typing only numbers and that the values are valid. Please call 0705285959 for assistance\");
        }
      });

  });
</script>

{% endblock %}
", "score/record.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/score/record.html.twig");
    }
}


/* score/record.html.twig */
class __TwigTemplate_7eb5944d36de53125d41f490f8b1910684e015553ea618cbf6b91ced6db87c14_1199674634 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "score/record.html.twig", 6);
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
        $__internal_0e3708286e90ebed2bca08b98bf1d7100ec6de4a0dc836c6e5075305c3008fd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3708286e90ebed2bca08b98bf1d7100ec6de4a0dc836c6e5075305c3008fd2->enter($__internal_0e3708286e90ebed2bca08b98bf1d7100ec6de4a0dc836c6e5075305c3008fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/record.html.twig"));

        $__internal_3af40da50ad5f80ab30b5dbd3bf715d6a818651c25ddacce8a42e9eeb8912353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af40da50ad5f80ab30b5dbd3bf715d6a818651c25ddacce8a42e9eeb8912353->enter($__internal_3af40da50ad5f80ab30b5dbd3bf715d6a818651c25ddacce8a42e9eeb8912353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/record.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e3708286e90ebed2bca08b98bf1d7100ec6de4a0dc836c6e5075305c3008fd2->leave($__internal_0e3708286e90ebed2bca08b98bf1d7100ec6de4a0dc836c6e5075305c3008fd2_prof);

        
        $__internal_3af40da50ad5f80ab30b5dbd3bf715d6a818651c25ddacce8a42e9eeb8912353->leave($__internal_3af40da50ad5f80ab30b5dbd3bf715d6a818651c25ddacce8a42e9eeb8912353_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_0255671050461e94dd6485664707cd03d7ed4fdb00ff108f0142a97a5827ff7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0255671050461e94dd6485664707cd03d7ed4fdb00ff108f0142a97a5827ff7d->enter($__internal_0255671050461e94dd6485664707cd03d7ed4fdb00ff108f0142a97a5827ff7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5697fe2d471bbf319581c0ed87a260d9e22094c9927f21557531857eea86627e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5697fe2d471bbf319581c0ed87a260d9e22094c9927f21557531857eea86627e->enter($__internal_5697fe2d471bbf319581c0ed87a260d9e22094c9927f21557531857eea86627e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "      ";
        if ( !twig_test_empty(($context["students"] ?? $this->getContext($context, "students")))) {
            // line 9
            echo "\t\t\t<div class=\"col-lg-12\">
        <section class=\"panel\">
            <header class=\"panel-heading\">
              Exam Records for ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "cTitle", array()), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "cTitle", array()), "html", null, true);
            echo "]
              <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_examCompanies", array("class" => $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary pull-right\">List Exams</a>
            </header>
            ";
            // line 15
            $context["parents"] = array();
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["childSubjects"] ?? $this->getContext($context, "childSubjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["childSubject"]) {
                // line 17
                echo "              ";
                if (!twig_in_filter($this->getAttribute($this->getAttribute($context["childSubject"], "subject", array()), "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                    // line 18
                    echo "                ";
                    $context["parents"] = twig_array_merge(($context["parents"] ?? $this->getContext($context, "parents")), array(0 => $this->getAttribute($this->getAttribute($context["childSubject"], "subject", array()), "sTitle", array())));
                    // line 19
                    echo "              ";
                }
                // line 20
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childSubject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            <table class=\"table table-striped table-advance table-hover\">
             <tbody>
                <tr>
                  <th class=\"col-md-3\">Name</th>
                  ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 26
                echo "                    ";
                if (twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                    // line 27
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["c_subject"]) {
                        // line 28
                        echo "                      <th>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c_subject"], "cSTitle", array()), "html", null, true);
                        echo "</th>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_subject'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "                    ";
                }
                // line 31
                echo "                    <th style=\"color:red\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "sTitle", array()), "html", null, true);
                echo "</th>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                </tr>
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
            foreach ($context['_seq'] as $context["key"] => $context["student"]) {
                // line 35
                echo "                  ";
                $context["hush"] = ($context["key"] + 1);
                // line 36
                echo "                <tr>
                   <td class=\"col-md-3\">";
                // line 37
                echo twig_escape_filter($this->env, ($context["hush"] ?? $this->getContext($context, "hush")), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "names", array()), "html", null, true);
                echo "</td>
                    ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
                foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                    // line 39
                    echo "                      ";
                    $context["key"] = (((($this->getAttribute($context["student"], "id", array()) . ".") . $this->getAttribute($context["subject"], "id", array())) . ".") . $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "id", array()));
                    // line 40
                    echo "                      ";
                    if (twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                        echo "                        
                        ";
                        // line 41
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["c_subject"]) {
                            // line 42
                            echo "                          ";
                            $context["childKey"] = (((($this->getAttribute($context["student"], "id", array()) . ".") . $this->getAttribute($context["c_subject"], "id", array())) . ".") . $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "id", array()));
                            // line 43
                            echo "                          <td><input value=\"";
                            if ($this->getAttribute(($context["child_score_entries"] ?? null), ($context["childKey"] ?? $this->getContext($context, "childKey")), array(), "array", true, true)) {
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["child_score_entries"] ?? $this->getContext($context, "child_score_entries")), ($context["childKey"] ?? $this->getContext($context, "childKey")), array(), "array"), "html", null, true);
                            }
                            echo "\" id=\"cSubject|";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["c_subject"], "id", array()), "html", null, true);
                            echo "_user|";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
                            echo "_student|";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                            echo "_exam|";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "id", array()), "html", null, true);
                            echo "_class|";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "id", array()), "html", null, true);
                            echo "\" style=\"max-width:40px;\" type=\"text\" /></td>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_subject'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 45
                        echo "                      ";
                    }
                    // line 46
                    echo "                      <td>";
                    if (!twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                        echo "<input value=\"";
                        if ($this->getAttribute(($context["score_entries"] ?? null), $context["key"], array(), "array", true, true)) {
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["score_entries"] ?? $this->getContext($context, "score_entries")), $context["key"], array(), "array"), "html", null, true);
                        }
                        echo "\" id=\"subject|";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "id", array()), "html", null, true);
                        echo "_user|";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
                        echo "_student|";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                        echo "_exam|";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "id", array()), "html", null, true);
                        echo "_class|";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "id", array()), "html", null, true);
                        echo "\" style=\"max-width:40px;\" type=\"text\" />";
                    } else {
                        echo "<span id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "id", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "id", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "id", array()), "html", null, true);
                        echo "\" style=\"min-width:40px; background-color:#007aff; color:white; padding:2px;\">";
                        if ($this->getAttribute(($context["score_entries"] ?? null), $context["key"], array(), "array", true, true)) {
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["score_entries"] ?? $this->getContext($context, "score_entries")), $context["key"], array(), "array"), "html", null, true);
                        }
                        echo "</span> ";
                    }
                    echo "</td>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "             </tbody>
          </table>
        </section>
      </div>
      <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("record_summary", array("classId" => $this->getAttribute($this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "class", array()), "id", array()), "companyId" => $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-block\">Generate Exam Report Summary</a>
      ";
        } else {
            // line 56
            echo "        <div class=\"well\">
          <h3>There are no students for class ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "cTitle", array()), "html", null, true);
            echo ". Please <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_student");
            echo "\">add students</a></h3>
        </div>
      ";
        }
        // line 60
        echo "
";
        
        $__internal_5697fe2d471bbf319581c0ed87a260d9e22094c9927f21557531857eea86627e->leave($__internal_5697fe2d471bbf319581c0ed87a260d9e22094c9927f21557531857eea86627e_prof);

        
        $__internal_0255671050461e94dd6485664707cd03d7ed4fdb00ff108f0142a97a5827ff7d->leave($__internal_0255671050461e94dd6485664707cd03d7ed4fdb00ff108f0142a97a5827ff7d_prof);

    }

    public function getTemplateName()
    {
        return "score/record.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  614 => 60,  606 => 57,  603 => 56,  598 => 54,  592 => 50,  585 => 48,  544 => 46,  541 => 45,  520 => 43,  517 => 42,  513 => 41,  508 => 40,  505 => 39,  501 => 38,  495 => 37,  492 => 36,  489 => 35,  485 => 34,  482 => 33,  473 => 31,  470 => 30,  461 => 28,  456 => 27,  453 => 26,  449 => 25,  443 => 21,  437 => 20,  434 => 19,  431 => 18,  428 => 17,  423 => 16,  421 => 15,  416 => 13,  410 => 12,  405 => 9,  402 => 8,  393 => 7,  364 => 6,  142 => 122,  99 => 82,  80 => 65,  71 => 64,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
      {% if students is not empty %}
\t\t\t<div class=\"col-lg-12\">
        <section class=\"panel\">
            <header class=\"panel-heading\">
              Exam Records for {{exam.cTitle}} [{{class.cTitle}}]
              <a href=\"{{path('list_examCompanies', {'class': class.id})}}\" class=\"btn btn-primary pull-right\">List Exams</a>
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
                  <th class=\"col-md-3\">Name</th>
                  {% for subject in subjects %}
                    {% if subject.sTitle in parents %}
                      {% for c_subject in subject.childSubjects %}
                      <th>{{c_subject.cSTitle}}</th>
                      {% endfor %}
                    {% endif %}
                    <th style=\"color:red\">{{subject.sTitle}}</th>
                  {% endfor %}
                </tr>
                {% for key, student in students %}
                  {% set hush = key + 1 %}
                <tr>
                   <td class=\"col-md-3\">{{hush}}. {{student.names}}</td>
                    {% for subject in subjects %}
                      {% set key = student.id ~ '.' ~ subject.id ~ '.' ~ class.id %}
                      {% if subject.sTitle in parents %}                        
                        {% for c_subject in subject.childSubjects %}
                          {% set childKey = student.id ~ '.' ~ c_subject.id ~ '.' ~ class.id %}
                          <td><input value=\"{% if child_score_entries[childKey] is defined %}{{child_score_entries[childKey]}}{% endif %}\" id=\"cSubject|{{c_subject.id}}_user|{{user.id}}_student|{{student.id}}_exam|{{exam.id}}_class|{{class.id}}\" style=\"max-width:40px;\" type=\"text\" /></td>
                        {% endfor %}
                      {% endif %}
                      <td>{% if subject.sTitle not in parents %}<input value=\"{% if score_entries[key] is defined %}{{score_entries[key]}}{% endif %}\" id=\"subject|{{subject.id}}_user|{{user.id}}_student|{{student.id}}_exam|{{exam.id}}_class|{{class.id}}\" style=\"max-width:40px;\" type=\"text\" />{% else %}<span id=\"{{subject.id}}_{{user.id}}_{{student.id}}_{{exam.id}}_{{class.id}}\" style=\"min-width:40px; background-color:#007aff; color:white; padding:2px;\">{% if score_entries[key] is defined %}{{score_entries[key]}}{% endif %}</span> {% endif %}</td>
                    {% endfor %}
                </tr>
              {% endfor %}
             </tbody>
          </table>
        </section>
      </div>
      <a href=\"{{path('record_summary', {'classId': exam.class.id, 'companyId': exam.id})}}\" class=\"btn btn-primary btn-block\">Generate Exam Report Summary</a>
      {% else %}
        <div class=\"well\">
          <h3>There are no students for class {{class.cTitle}}. Please <a href=\"{{path('new_student')}}\">add students</a></h3>
        </div>
      {% endif %}

{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}

<script>
  \$(document).on('keyup', '[id^=\"subject|\"]', function(){

      var id = jQuery(this).attr(\"id\");
      var fields = id.split('_');
      var subject = fields[0].split('|')[1];
      var user = fields[1].split('|')[1];
      var student = fields[2].split('|')[1];
      var exam = fields[3].split('|')[1];
      var classs = fields[4].split('|')[1];
      var marks = \$(this).val();


      // console.log('subject_id: ' + subject_id + ' student_id: ' + student_id);

      \$.ajax({
          url:'{{ (path('record_exam_ajax')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"subject_id\": subject,
              \"student_id\": student,
              \"marks\": marks,
              \"user\": user,
              \"exam\": exam,
              \"class\": classs,
          },
          async: true,
          success: function (data)
          {
            // \$('#alert').html(\"<strong><small> Student: </small></strong> \" + data.student + \"<strong><small> Subject: </small></strong> \"+ data.subject + \"<strong><small> Marks: </small></strong>\" + data.marks + \"<strong><small> Exam Company: </small></strong>\" + data.examCompany + \"<strong><small> Term </small></strong>\" + data.term + \"<strong><small> Class: </small></strong>\" + data.class );
            // \$('#alert').html(\"Test: \" + data.test );
          },
         error: function () {
            \$('#alert').removeClass('alert-info').addClass('alert-warning');
            \$('#alert').html(\"Something went wrong. Make sure you are typing only numbers and that the values are valid. Please call 0705285959 for assistance\");
        }
      });

  });
</script>
<script>
  \$(document).on('keyup', '[id^=\"cSubject|\"]', function(){

      var id = jQuery(this).attr(\"id\");
      var fields = id.split('_');
      var cSubject = fields[0].split('|')[1];
      var user = fields[1].split('|')[1];
      var student = fields[2].split('|')[1];
      var exam = fields[3].split('|')[1];
      var classs = fields[4].split('|')[1];
      var marks = \$(this).val();

      // console.log('subject_id: ' + subject_id + ' student_id: ' + student_id);

      \$.ajax({
          url:'{{ (path('record_exam_ajax_child')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"c_subject_id\": cSubject,
              \"student_id\": student,
              \"marks\": marks,
              \"user\": user,
              \"exam\": exam,
              \"class\": classs,
          },
          async: true,
          success: function (data)
          {
            console.log(data.uniqueId)
            \$(data.uniqueId).text(data.percentage);
          },
         error: function () {
            \$('#alert').removeClass('alert-info').addClass('alert-warning');
            \$('#alert').html(\"Something went wrong. Make sure you are typing only numbers and that the values are valid. Please call 0705285959 for assistance\");
        }
      });

  });
</script>

{% endblock %}
", "score/record.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/score/record.html.twig");
    }
}
