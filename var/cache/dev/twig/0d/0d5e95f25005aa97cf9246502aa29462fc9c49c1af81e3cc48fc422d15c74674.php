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
        $__internal_d0e427710c1d154d01cd1548b3015bd0b4d421d951758706f4afaf89297b631f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e427710c1d154d01cd1548b3015bd0b4d421d951758706f4afaf89297b631f->enter($__internal_d0e427710c1d154d01cd1548b3015bd0b4d421d951758706f4afaf89297b631f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/record.html.twig"));

        $__internal_b6ec6b758d2d79060431dfb6542e26eae40cee2795d3eaf8ac14ff2c03750d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ec6b758d2d79060431dfb6542e26eae40cee2795d3eaf8ac14ff2c03750d8a->enter($__internal_b6ec6b758d2d79060431dfb6542e26eae40cee2795d3eaf8ac14ff2c03750d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/record.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0e427710c1d154d01cd1548b3015bd0b4d421d951758706f4afaf89297b631f->leave($__internal_d0e427710c1d154d01cd1548b3015bd0b4d421d951758706f4afaf89297b631f_prof);

        
        $__internal_b6ec6b758d2d79060431dfb6542e26eae40cee2795d3eaf8ac14ff2c03750d8a->leave($__internal_b6ec6b758d2d79060431dfb6542e26eae40cee2795d3eaf8ac14ff2c03750d8a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_62ec49ab01197de9cd9f7111ea71349f73879b07c72eda994ff685fe931b5a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62ec49ab01197de9cd9f7111ea71349f73879b07c72eda994ff685fe931b5a55->enter($__internal_62ec49ab01197de9cd9f7111ea71349f73879b07c72eda994ff685fe931b5a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6eb6bc0c8bbe59e2624df4f4c2530f5acb0e59517931704bcd8879cb7abcb836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb6bc0c8bbe59e2624df4f4c2530f5acb0e59517931704bcd8879cb7abcb836->enter($__internal_6eb6bc0c8bbe59e2624df4f4c2530f5acb0e59517931704bcd8879cb7abcb836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("score/record.html.twig", "score/record.html.twig", 6, "1102629197")->display($context);
        
        $__internal_6eb6bc0c8bbe59e2624df4f4c2530f5acb0e59517931704bcd8879cb7abcb836->leave($__internal_6eb6bc0c8bbe59e2624df4f4c2530f5acb0e59517931704bcd8879cb7abcb836_prof);

        
        $__internal_62ec49ab01197de9cd9f7111ea71349f73879b07c72eda994ff685fe931b5a55->leave($__internal_62ec49ab01197de9cd9f7111ea71349f73879b07c72eda994ff685fe931b5a55_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_47a1264044bad1423a66e8ff685b8ad2f5a8bec20aa5592d3eb817b0484f4e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47a1264044bad1423a66e8ff685b8ad2f5a8bec20aa5592d3eb817b0484f4e37->enter($__internal_47a1264044bad1423a66e8ff685b8ad2f5a8bec20aa5592d3eb817b0484f4e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dca52a44eb06fe79bfaf9b7249ef414ac168b96f9452486a837f877e9bce1f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca52a44eb06fe79bfaf9b7249ef414ac168b96f9452486a837f877e9bce1f48->enter($__internal_dca52a44eb06fe79bfaf9b7249ef414ac168b96f9452486a837f877e9bce1f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
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
        // line 88
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
        // line 128
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

<script>
\$(document).on('keyup', '[id^=\"subject|\"]',function (e){
    var id = jQuery(this).attr(\"id\");

    if(e.keyCode == 38){
        \$.ajax({
          url:'";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("move_cursor");
        echo "',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'up'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".s_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
    }
    if(e.keyCode == 40){
        \$.ajax({
          url:'";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("move_cursor");
        echo "',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'down'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".s_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
    }
    if(e.keyCode == 37){
        \$.ajax({
          url:'";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("move_cursor");
        echo "',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'left'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".s_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
      }
    if(e.keyCode == 39){
        \$.ajax({
          url:'";
        // line 220
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("move_cursor");
        echo "',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'right'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".s_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
      }
})
</script>

<script>
\$(document).on('keyup', '[id^=\"cSubject|\"]',function (e){
    var id = jQuery(this).attr(\"id\");

    if(e.keyCode == 38){
        \$.ajax({
          url:'";
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("move_cursor_child");
        echo "',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'up'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".c_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
    }
    if(e.keyCode == 40){
        \$.ajax({
          url:'";
        // line 267
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("move_cursor_child");
        echo "',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'down'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".c_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
    }
    if(e.keyCode == 37){
        \$.ajax({
          url:'";
        // line 287
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("move_cursor_child");
        echo "',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'left'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".c_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
      }
    if(e.keyCode == 39){
        \$.ajax({
          url:'";
        // line 307
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("move_cursor_child");
        echo "',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'right'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".c_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
      }
})
</script>

";
        
        $__internal_dca52a44eb06fe79bfaf9b7249ef414ac168b96f9452486a837f877e9bce1f48->leave($__internal_dca52a44eb06fe79bfaf9b7249ef414ac168b96f9452486a837f877e9bce1f48_prof);

        
        $__internal_47a1264044bad1423a66e8ff685b8ad2f5a8bec20aa5592d3eb817b0484f4e37->leave($__internal_47a1264044bad1423a66e8ff685b8ad2f5a8bec20aa5592d3eb817b0484f4e37_prof);

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
        return array (  345 => 307,  322 => 287,  299 => 267,  276 => 247,  246 => 220,  223 => 200,  200 => 180,  177 => 160,  142 => 128,  99 => 88,  80 => 71,  71 => 70,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
              Exam Records for {{exam.cTitle}} [{{class.cTitle}}]
              <a href=\"{{path('list_examCompanies', {'class': class.id})}}\" class=\"btn btn-primary pull-right\">List Exams</a>
              <a href=\"{{path('record_summary', {'classId': exam.class.id, 'companyId': exam.id})}}\" class=\"btn btn-primary\">Class Report Summary</a>
              <a href=\"{{path('report_forms', {'classId': exam.class.id, 'companyId': exam.id})}}\" class=\"btn btn-primary\">Report Forms</a>
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
                      <th>{{c_subject.cSTitle|title}}</th>
                      {% endfor %}
                    {% endif %}
                    <th style=\"color:red\">{{subject.sTitle|title}}</th>
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
                          <td><input value=\"{% if child_score_entries[childKey] is defined %}{{child_score_entries[childKey]}}{% endif %}\" id=\"cSubject|{{c_subject.id}}_user|{{user.id}}_student|{{student.id}}_exam|{{exam.id}}_class|{{class.id}}\" style=\"max-width:40px;\" class=\"c_{{student.id}}_{{c_subject.id}}\" type=\"text\" /></td>
                        {% endfor %}
                      {% endif %}
                      <td>{% if subject.sTitle not in parents %}<input value=\"{% if score_entries[key] is defined %}{{score_entries[key]}}{% endif %}\" id=\"subject|{{subject.id}}_user|{{user.id}}_student|{{student.id}}_exam|{{exam.id}}_class|{{class.id}}\" style=\"max-width:40px;\" class=\"s_{{student.id}}_{{subject.id}}\" type=\"text\" />{% else %}<span id=\"{{subject.id}}_{{user.id}}_{{student.id}}_{{exam.id}}_{{class.id}}\"  class=\"s_{{student.id}}_{{subject.id}}\" style=\"min-width:40px; background-color:#007aff; color:white; padding:2px;\">{% if score_entries[key] is defined %}{{score_entries[key]}}{% endif %}</span> {% endif %}</td>
                    {% endfor %}
                </tr>
              {% endfor %}
             </tbody>
          </table>
        </section>
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

<script>
\$(document).on('keyup', '[id^=\"subject|\"]',function (e){
    var id = jQuery(this).attr(\"id\");

    if(e.keyCode == 38){
        \$.ajax({
          url:'{{ (path('move_cursor')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'up'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".s_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
    }
    if(e.keyCode == 40){
        \$.ajax({
          url:'{{ (path('move_cursor')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'down'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".s_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
    }
    if(e.keyCode == 37){
        \$.ajax({
          url:'{{ (path('move_cursor')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'left'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".s_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
      }
    if(e.keyCode == 39){
        \$.ajax({
          url:'{{ (path('move_cursor')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'right'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".s_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
      }
})
</script>

<script>
\$(document).on('keyup', '[id^=\"cSubject|\"]',function (e){
    var id = jQuery(this).attr(\"id\");

    if(e.keyCode == 38){
        \$.ajax({
          url:'{{ (path('move_cursor_child')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'up'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".c_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
    }
    if(e.keyCode == 40){
        \$.ajax({
          url:'{{ (path('move_cursor_child')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'down'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".c_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
    }
    if(e.keyCode == 37){
        \$.ajax({
          url:'{{ (path('move_cursor_child')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'left'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".c_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
      }
    if(e.keyCode == 39){
        \$.ajax({
          url:'{{ (path('move_cursor_child')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'right'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".c_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
      }
})
</script>

{% endblock %}
", "score/record.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/score/record.html.twig");
    }
}


/* score/record.html.twig */
class __TwigTemplate_7eb5944d36de53125d41f490f8b1910684e015553ea618cbf6b91ced6db87c14_1102629197 extends Twig_Template
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
        $__internal_5ad30c3212ba6501bd3d8623de7c05178fc53e5e10d6c5a7f2654650de47288f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad30c3212ba6501bd3d8623de7c05178fc53e5e10d6c5a7f2654650de47288f->enter($__internal_5ad30c3212ba6501bd3d8623de7c05178fc53e5e10d6c5a7f2654650de47288f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/record.html.twig"));

        $__internal_4d7d730efe832920e8c74ba61fd8c01179082ef68bcef0122bb500e345f9ade5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7d730efe832920e8c74ba61fd8c01179082ef68bcef0122bb500e345f9ade5->enter($__internal_4d7d730efe832920e8c74ba61fd8c01179082ef68bcef0122bb500e345f9ade5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "score/record.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ad30c3212ba6501bd3d8623de7c05178fc53e5e10d6c5a7f2654650de47288f->leave($__internal_5ad30c3212ba6501bd3d8623de7c05178fc53e5e10d6c5a7f2654650de47288f_prof);

        
        $__internal_4d7d730efe832920e8c74ba61fd8c01179082ef68bcef0122bb500e345f9ade5->leave($__internal_4d7d730efe832920e8c74ba61fd8c01179082ef68bcef0122bb500e345f9ade5_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_cdf5e20eae74750a7795266a8300b3793f6f111b9497e9213d8cc45b3df330e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf5e20eae74750a7795266a8300b3793f6f111b9497e9213d8cc45b3df330e0->enter($__internal_cdf5e20eae74750a7795266a8300b3793f6f111b9497e9213d8cc45b3df330e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8afa7db58991e10e857a6bc87ad9dcfd86b7387972638c857ce8652aff6c1ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afa7db58991e10e857a6bc87ad9dcfd86b7387972638c857ce8652aff6c1ebb->enter($__internal_8afa7db58991e10e857a6bc87ad9dcfd86b7387972638c857ce8652aff6c1ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
              Exam Records for ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "cTitle", array()), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "cTitle", array()), "html", null, true);
            echo "]
              <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_examCompanies", array("class" => $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary pull-right\">List Exams</a>
              <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("record_summary", array("classId" => $this->getAttribute($this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "class", array()), "id", array()), "companyId" => $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Class Report Summary</a>
              <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("report_forms", array("classId" => $this->getAttribute($this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "class", array()), "id", array()), "companyId" => $this->getAttribute(($context["exam"] ?? $this->getContext($context, "exam")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Report Forms</a>
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
            echo "            <table class=\"table table-striped table-advance table-hover\">
             <tbody>
                <tr>
                  <th class=\"col-md-3\">Name</th>
                  ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 36
                echo "                    ";
                if (twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                    // line 37
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["c_subject"]) {
                        // line 38
                        echo "                      <th>";
                        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["c_subject"], "cSTitle", array())), "html", null, true);
                        echo "</th>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_subject'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "                    ";
                }
                // line 41
                echo "                    <th style=\"color:red\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["subject"], "sTitle", array())), "html", null, true);
                echo "</th>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                </tr>
                ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
            foreach ($context['_seq'] as $context["key"] => $context["student"]) {
                // line 45
                echo "                  ";
                $context["hush"] = ($context["key"] + 1);
                // line 46
                echo "                <tr>
                   <td class=\"col-md-3\">";
                // line 47
                echo twig_escape_filter($this->env, ($context["hush"] ?? $this->getContext($context, "hush")), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "names", array()), "html", null, true);
                echo "</td>
                    ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
                foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                    // line 49
                    echo "                      ";
                    $context["key"] = (((($this->getAttribute($context["student"], "id", array()) . ".") . $this->getAttribute($context["subject"], "id", array())) . ".") . $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "id", array()));
                    // line 50
                    echo "                      ";
                    if (twig_in_filter($this->getAttribute($context["subject"], "sTitle", array()), ($context["parents"] ?? $this->getContext($context, "parents")))) {
                        echo "                        
                        ";
                        // line 51
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["c_subject"]) {
                            // line 52
                            echo "                          ";
                            $context["childKey"] = (((($this->getAttribute($context["student"], "id", array()) . ".") . $this->getAttribute($context["c_subject"], "id", array())) . ".") . $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "id", array()));
                            // line 53
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
                            echo "\" style=\"max-width:40px;\" class=\"c_";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["c_subject"], "id", array()), "html", null, true);
                            echo "\" type=\"text\" /></td>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_subject'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 55
                        echo "                      ";
                    }
                    // line 56
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
                        echo "\" style=\"max-width:40px;\" class=\"s_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "id", array()), "html", null, true);
                        echo "\" type=\"text\" />";
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
                        echo "\"  class=\"s_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "id", array()), "html", null, true);
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
                // line 58
                echo "                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "             </tbody>
          </table>
        </section>
      </div>
      
      ";
        }
        // line 66
        echo "
";
        
        $__internal_8afa7db58991e10e857a6bc87ad9dcfd86b7387972638c857ce8652aff6c1ebb->leave($__internal_8afa7db58991e10e857a6bc87ad9dcfd86b7387972638c857ce8652aff6c1ebb_prof);

        
        $__internal_cdf5e20eae74750a7795266a8300b3793f6f111b9497e9213d8cc45b3df330e0->leave($__internal_cdf5e20eae74750a7795266a8300b3793f6f111b9497e9213d8cc45b3df330e0_prof);

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
        return array (  1020 => 66,  1012 => 60,  1005 => 58,  956 => 56,  953 => 55,  928 => 53,  925 => 52,  921 => 51,  916 => 50,  913 => 49,  909 => 48,  903 => 47,  900 => 46,  897 => 45,  893 => 44,  890 => 43,  881 => 41,  878 => 40,  869 => 38,  864 => 37,  861 => 36,  857 => 35,  851 => 31,  845 => 30,  842 => 29,  839 => 28,  836 => 27,  831 => 26,  829 => 25,  824 => 23,  820 => 22,  816 => 21,  810 => 20,  804 => 16,  798 => 14,  793 => 12,  786 => 10,  783 => 9,  780 => 8,  771 => 7,  742 => 6,  345 => 307,  322 => 287,  299 => 267,  276 => 247,  246 => 220,  223 => 200,  200 => 180,  177 => 160,  142 => 128,  99 => 88,  80 => 71,  71 => 70,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
              Exam Records for {{exam.cTitle}} [{{class.cTitle}}]
              <a href=\"{{path('list_examCompanies', {'class': class.id})}}\" class=\"btn btn-primary pull-right\">List Exams</a>
              <a href=\"{{path('record_summary', {'classId': exam.class.id, 'companyId': exam.id})}}\" class=\"btn btn-primary\">Class Report Summary</a>
              <a href=\"{{path('report_forms', {'classId': exam.class.id, 'companyId': exam.id})}}\" class=\"btn btn-primary\">Report Forms</a>
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
                      <th>{{c_subject.cSTitle|title}}</th>
                      {% endfor %}
                    {% endif %}
                    <th style=\"color:red\">{{subject.sTitle|title}}</th>
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
                          <td><input value=\"{% if child_score_entries[childKey] is defined %}{{child_score_entries[childKey]}}{% endif %}\" id=\"cSubject|{{c_subject.id}}_user|{{user.id}}_student|{{student.id}}_exam|{{exam.id}}_class|{{class.id}}\" style=\"max-width:40px;\" class=\"c_{{student.id}}_{{c_subject.id}}\" type=\"text\" /></td>
                        {% endfor %}
                      {% endif %}
                      <td>{% if subject.sTitle not in parents %}<input value=\"{% if score_entries[key] is defined %}{{score_entries[key]}}{% endif %}\" id=\"subject|{{subject.id}}_user|{{user.id}}_student|{{student.id}}_exam|{{exam.id}}_class|{{class.id}}\" style=\"max-width:40px;\" class=\"s_{{student.id}}_{{subject.id}}\" type=\"text\" />{% else %}<span id=\"{{subject.id}}_{{user.id}}_{{student.id}}_{{exam.id}}_{{class.id}}\"  class=\"s_{{student.id}}_{{subject.id}}\" style=\"min-width:40px; background-color:#007aff; color:white; padding:2px;\">{% if score_entries[key] is defined %}{{score_entries[key]}}{% endif %}</span> {% endif %}</td>
                    {% endfor %}
                </tr>
              {% endfor %}
             </tbody>
          </table>
        </section>
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

<script>
\$(document).on('keyup', '[id^=\"subject|\"]',function (e){
    var id = jQuery(this).attr(\"id\");

    if(e.keyCode == 38){
        \$.ajax({
          url:'{{ (path('move_cursor')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'up'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".s_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
    }
    if(e.keyCode == 40){
        \$.ajax({
          url:'{{ (path('move_cursor')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'down'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".s_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
    }
    if(e.keyCode == 37){
        \$.ajax({
          url:'{{ (path('move_cursor')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'left'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".s_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
      }
    if(e.keyCode == 39){
        \$.ajax({
          url:'{{ (path('move_cursor')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'right'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".s_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
      }
})
</script>

<script>
\$(document).on('keyup', '[id^=\"cSubject|\"]',function (e){
    var id = jQuery(this).attr(\"id\");

    if(e.keyCode == 38){
        \$.ajax({
          url:'{{ (path('move_cursor_child')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'up'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".c_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
    }
    if(e.keyCode == 40){
        \$.ajax({
          url:'{{ (path('move_cursor_child')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'down'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".c_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
    }
    if(e.keyCode == 37){
        \$.ajax({
          url:'{{ (path('move_cursor_child')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'left'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".c_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
      }
    if(e.keyCode == 39){
        \$.ajax({
          url:'{{ (path('move_cursor_child')) }}',
          type: \"POST\",
          dataType: \"json\",
          data: {
              \"id\": id,
              \"direction\": 'right'
          },
          async: true,
          success: function (data)
          {
            console.log(data)
            \$(\".c_\"+data).focus();
          },
         error: function () {
          console.log(\"something's wrong\")
        }
      });
      }
})
</script>

{% endblock %}
", "score/record.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/score/record.html.twig");
    }
}
