<?php

/* default/index.html.twig */
class __TwigTemplate_eb06cea6897fcd0190b5b480f9660ee60e7cc875ac6347494ee121194322dc60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_702894404793b36d6b2039b5ccdae9b4d1a49769c928b022d30a7f445db433ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702894404793b36d6b2039b5ccdae9b4d1a49769c928b022d30a7f445db433ad->enter($__internal_702894404793b36d6b2039b5ccdae9b4d1a49769c928b022d30a7f445db433ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_d49273635ca9eb4724832f2e8cc548ef8bc77e14f47263c9f8d2a51b8d98a64d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49273635ca9eb4724832f2e8cc548ef8bc77e14f47263c9f8d2a51b8d98a64d->enter($__internal_d49273635ca9eb4724832f2e8cc548ef8bc77e14f47263c9f8d2a51b8d98a64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_702894404793b36d6b2039b5ccdae9b4d1a49769c928b022d30a7f445db433ad->leave($__internal_702894404793b36d6b2039b5ccdae9b4d1a49769c928b022d30a7f445db433ad_prof);

        
        $__internal_d49273635ca9eb4724832f2e8cc548ef8bc77e14f47263c9f8d2a51b8d98a64d->leave($__internal_d49273635ca9eb4724832f2e8cc548ef8bc77e14f47263c9f8d2a51b8d98a64d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d75b6a202a42fe39047239bba2c53a7652cba9bcff0d6926a9f32f8150c3283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d75b6a202a42fe39047239bba2c53a7652cba9bcff0d6926a9f32f8150c3283->enter($__internal_6d75b6a202a42fe39047239bba2c53a7652cba9bcff0d6926a9f32f8150c3283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fd194d57e2c3f402007bff54e01c1612be262b9d747f5028512f1bb76753bc97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd194d57e2c3f402007bff54e01c1612be262b9d747f5028512f1bb76753bc97->enter($__internal_fd194d57e2c3f402007bff54e01c1612be262b9d747f5028512f1bb76753bc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FlipClock/compiled/flipclock.css"), "html", null, true);
        echo "\">
";
        
        $__internal_fd194d57e2c3f402007bff54e01c1612be262b9d747f5028512f1bb76753bc97->leave($__internal_fd194d57e2c3f402007bff54e01c1612be262b9d747f5028512f1bb76753bc97_prof);

        
        $__internal_6d75b6a202a42fe39047239bba2c53a7652cba9bcff0d6926a9f32f8150c3283->leave($__internal_6d75b6a202a42fe39047239bba2c53a7652cba9bcff0d6926a9f32f8150c3283_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2805cd27857048a571dc2edf0735ce90fd6cc526aae05028de6627264cae6ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2805cd27857048a571dc2edf0735ce90fd6cc526aae05028de6627264cae6ad5->enter($__internal_2805cd27857048a571dc2edf0735ce90fd6cc526aae05028de6627264cae6ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d67d65ac3c5aff6fb4d4889b3c115436e45aa463d9d3b67d2fd9b63b262ba836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67d65ac3c5aff6fb4d4889b3c115436e45aa463d9d3b67d2fd9b63b262ba836->enter($__internal_d67d65ac3c5aff6fb4d4889b3c115436e45aa463d9d3b67d2fd9b63b262ba836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<body>
";
        // line 7
        echo twig_include($this->env, $context, "templates/header.html.twig");
        echo "        \t\t
";
        // line 8
        echo twig_include($this->env, $context, "templates/aside.html.twig");
        echo "        \t\t
";
        // line 9
        $this->loadTemplate("default/index.html.twig", "default/index.html.twig", 9, "2057095379")->display($context);
        
        $__internal_d67d65ac3c5aff6fb4d4889b3c115436e45aa463d9d3b67d2fd9b63b262ba836->leave($__internal_d67d65ac3c5aff6fb4d4889b3c115436e45aa463d9d3b67d2fd9b63b262ba836_prof);

        
        $__internal_2805cd27857048a571dc2edf0735ce90fd6cc526aae05028de6627264cae6ad5->leave($__internal_2805cd27857048a571dc2edf0735ce90fd6cc526aae05028de6627264cae6ad5_prof);

    }

    // line 244
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e6cf69ac52416281b97f325f9309fa0a63f4d738ab6994fb80e4be076c40037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6cf69ac52416281b97f325f9309fa0a63f4d738ab6994fb80e4be076c40037->enter($__internal_3e6cf69ac52416281b97f325f9309fa0a63f4d738ab6994fb80e4be076c40037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_51da2e6d05a413ce4aaf47c550055a754442f0399d1fdd3902c4105af611fb95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51da2e6d05a413ce4aaf47c550055a754442f0399d1fdd3902c4105af611fb95->enter($__internal_51da2e6d05a413ce4aaf47c550055a754442f0399d1fdd3902c4105af611fb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 245
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FlipClock/compiled/flipclock.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
      var clock;
      
      \$(document).ready(function() {
        clock = \$('.clock').FlipClock({
          clockFace: 'TwelveHourClock',
          showSeconds: false        
        });
      });
    </script>    <script>
      \$( \"#class_box\" ).click(function() {
        \$(\"#class_menu\").click();
      });
    </script>
    <script>
      \$( \"#exam_box\" ).click(function() {
        \$(\"#exam_menu\").click();
      });
    </script>
    <script>
      \$( \"#subject_box\" ).click(function() {
        \$(\"#subject_menu\").click();
      });
    </script>
    <script>
      \$( \"#student_box\" ).click(function() {
        \$(\"#student_menu\").click();
      });
    </script>
";
        
        $__internal_51da2e6d05a413ce4aaf47c550055a754442f0399d1fdd3902c4105af611fb95->leave($__internal_51da2e6d05a413ce4aaf47c550055a754442f0399d1fdd3902c4105af611fb95_prof);

        
        $__internal_3e6cf69ac52416281b97f325f9309fa0a63f4d738ab6994fb80e4be076c40037->leave($__internal_3e6cf69ac52416281b97f325f9309fa0a63f4d738ab6994fb80e4be076c40037_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 245,  94 => 244,  84 => 9,  80 => 8,  76 => 7,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
  <link rel=\"stylesheet\" href=\"{{asset('FlipClock/compiled/flipclock.css')}}\">
{% endblock %}
{% block body %}
<body>
{{ include('templates/header.html.twig') }}        \t\t
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}
        <!--overview start-->
        <div class=\"row state-overview\">
            <div class=\"col-lg-4\">
            <!--user profile info start-->
            <section class=\"panel\">
                <div class=\"profile-widget profile-widget-info\">
                    <div class=\"panel-body\">
                      <div class=\"col-lg-4 col-sm-4 profile-widget-name\">
                                      
                        <div style=\"margin-top:20px;\" class=\"follow-ava\">
                            <img src=\"img/mps.png\" alt=\"\">
                        </div>
                        <h6>milepostsolutions.co.ke</h6>
                      </div>
                      <div class=\"col-lg-8 col-sm-8 follow-info\">
                          <h4>Mile-Post Solutions</h4> 
                          <p>Welcome back {{app.user.fName}}, Let's make work easier and save time.</p>
                      </div>
                      <div class=\"weather-category twt-category\">
                                <ul>
                                    <li class=\"active\">
                                        <h4>{{ \"now\"|date(\"d\") }}</h4>
                                        <i class=\"icon_calendar\"></i> Day
                                    </li>
                                    <li>
                                        <h4>{{ \"now\"|date(\"m\") }}</h4>
                                        <i class=\"icon_calendar\"></i> Month
                                    </li>
                                    <li>
                                        <h4>{{ \"now\"|date(\"Y\") }}</h4>
                                        <i class=\"icon_calendar\"></i> Year
                                    </li>
                                </ul>
                            </div>
                    </div>
                    <footer class=\"profile-widget-foot\">
                      <div id=\"clock\">
                        <p class=\"unit\" id=\"hours\"></p>
                        <p class=\"unit\" id=\"minutes\"></p>
                        <p class=\"unit\" id=\"seconds\"></p>
                        <p class=\"unit\" id=\"ampm\"></p>
                      </div>
                    </footer>
                </div>
            </section>
            <!--user profile info end-->
          </div>
          <!-- statics start -->
          <div class=\"state col-lg-8\">
              <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\" id=\"exam_box\">
                    <section class=\"panel\">
                        <div class=\"symbol\">
                            <i class=\"icon_document_alt\"></i>
                        </div>
                        <div class=\"value\">
                            <h1>{{countExams[0][1]}}</h1>
                            <p> Exams</p>
                        </div>
                    </section>
                </div>
                <div class=\"col-lg-3 col-sm-6\" id=\"class_box\">
                    <section class=\"panel\">
                        <div class=\"symbol\">
                            <i class=\"icon_lightbulb_alt\"></i>
                        </div>
                        <div class=\"value\">
                            <h1>{{countClasses}}</h1>
                            <p> Classes</p>
                        </div>
                    </section>
                </div>
                <div class=\"col-lg-3 col-sm-6\" id=\"subject_box\">
                    <section class=\"panel\">
                        <div class=\"symbol\">
                            <i class=\"icon_documents_alt\"></i>
                        </div>
                        <div class=\"value\">
                            <h1>{{countSubjects}}</h1>
                            <p> Subjects</p>
                        </div>
                    </section>
                </div>
                <div class=\"col-lg-3 col-sm-6\" id=\"student_box\">
                    <section class=\"panel\">
                        <div class=\"symbol\">
                            <i class=\"icon_group\"></i>
                        </div>
                        <div class=\"value\">
                            <h1>{{countStudents}}</h1>
                            <p> Students</p>
                        </div>
                    </section>
                </div>
              </div>
              <div class=\"row knob-charts\">
                  <div class=\"col-lg-12\">
                      <div class=\"panel\">
                          <div class=\"panel-body\">
                                <ul class=\"summary-list\">
                                {% if score_list is defined and score_list is not empty %}
                                  {% for list_item in score_list %}
                                    {% if list_item[0][1] is defined and list_item[0][1] is not empty %}
                                      {% set no_of_students = list_item[0][1].students|length %}
                                      {% set no_of_subjects = app.user.subjects|length %}
                                        {% set no_of_items = 0 %}
                                        {% for item in list_item %}
                                          {% if item[0].marks is defined and item[0].marks > 0 %}
                                            {% set no_of_items = no_of_items + 1 %}
                                            {% endif %}
                                        {% endfor %}
                                        {% if list_item[0][1].students|length > 0 %}
                                          {% set percentage = (no_of_items / (no_of_students * no_of_subjects)) * 100 %}
                                        {% else %}
                                          {% set percentage = 0 %}
                                        {% endif %}
                                        <li>
                                            <a href=\"{{path('record_scores', {'classId': list_item[0][1].id, 'companyId':list_item[0][2].id})}}\">
                                                <input class=\"knob\" data-readonly=\"true\" data-width=\"80\" data-height=\"80\" data-displayPrevious=true  data-thickness=\".1\" value=\"{{percentage|round}}\" data-fgColor=\"#007AFF\" data-bgColor=\"#F7F7F7\">
                                                <p>{{list_item[0][2].cTitle}}<br />[{{list_item[0][2].class.cTitle}}]</p>
                                            </a>
                                        </li>
                                    {% else %} 
                                        <li>
                                            <a href=\"{{path('record_scores', {'classId': examCompanies|first.class.id, 'companyId': examCompanies|first.id})}}\">
                                                <input class=\"knob\" data-readonly=\"true\" data-width=\"80\" data-height=\"80\" data-displayPrevious=true  data-thickness=\".1\" value=\"0\" data-fgColor=\"#007AFF\" data-bgColor=\"#F7F7F7\">
                                                <p>{{examCompanies|first.cTitle}}</p>
                                            </a>
                                        </li>
                                    {% endif %} 
                                  {% endfor %} 
                                {% else %}
                                  <div class=\"well\">
                                    <h4>Its lonely here! You can add some exams after you're done with adding <a href=\"{{path('new_class')}}\">classes</a>, <a href=\"{{path('new_subject')}}\">subjects</a> and <a href=\"{{path('new_student')}}\"> students </a>.</h4>
                                  </div>
                                {% endif %}
                                {% if score_list|length < 5 %} 
                                  <li>
                                    <a href=\"{{path('new_examCompany')}}\" class=\"btn btn-default \" style=\"padding:10px!important; margin-bottom:10px; color:black;\"> Add New Exam </a>
                                  </li>   
                                {% endif %}                            
                                </ul>
                            </div>                                
                      </div>
                  </div>                        
              </div>
          </div>    
          <!-- statics end -->
        </div>
        <!--overview end-->

        <!-- project team & activity start -->
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <!--project team start-->
                <section class=\"panel\">
                  <div class=\"panel-body project-team\">
                      <div class=\"task-progress\">
                            <h1>Subjects</h1>  
                      </div>
                  </div>
                  {% if app.user.subjects is not empty %}
                  <table class=\"table table-hover personal-task\">
                        <tbody>
                        {% for subject in app.user.subjects %}
                        <tr>
                            <td>
                                <p class=\"profile-name\">{{subject.sTitle}}</p>
                            </td>
                            <td>
                              {% if subject.childSubjects|length > 1 %}
                                {% for child in subject.childSubjects %}
                                  <span class=\"badge bg-important\">{{child.cSTitle}}</span>
                                {% endfor %}
                              {% endif %}
                            </td>
                        </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                  {% else %}
                    <div class=\"well\">
                      <h4>Its lonely here! You can  <a href=\"{{path('new_subject')}}\"> add some subjects </a> after you're done with adding classes and students.</h4>
                    </div>
                  {% endif %}
                </section>
                <!--Project Team end-->
            </div>

            <div class=\"col-lg-8\">
                <!--Project Activity start-->
                <section class=\"panel\">
                    <div class=\"panel-body progress-panel\">
                      <div class=\"row\">
                        <div class=\"col-lg-12 task-progress pull-left\">
                            <h1>Classes</h1>                                  
                        </div>
                      </div>
                    </div>
                    {% if app.user.classes is not empty %}
                    <table class=\"table table-hover personal-task\">
                        <tbody>
                        {% for class in classes %}
                          <tr>
                              <td>{{class.cTitle}}</td>
                              <td>
                                  {{class.classTeacher}}.
                              </td>
                              <td>
                                  <span class=\"badge bg-important\">{{class.students|length}} Students</span>
                              </td>
                              <td>
                                <span class=\"profile-ava\">
                                    <a href=\"{{path('list_students', {'classId': class.id})}}\" class=\"btn btn-info btn-xs\">View Students</a>
                                </span>
                              </td>
                          </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                    {% else %}
                      <div class=\"well\">
                        <h4>Its lonely here! You can <a href=\"{{path('new_class')}}\"> add some classes </a> now. If you have already added some classes, you can now <a href=\"{{path('new_student')}}\"> add some students to your class </a></h4>
                      </div>
                    {% endif %}
                </section>
                <!--Project Activity end-->
            </div>
        </div>
        <!-- project team & activity end -->
{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}
    <script src=\"{{asset('FlipClock/compiled/flipclock.js')}}\"></script>
    <script type=\"text/javascript\">
      var clock;
      
      \$(document).ready(function() {
        clock = \$('.clock').FlipClock({
          clockFace: 'TwelveHourClock',
          showSeconds: false        
        });
      });
    </script>    <script>
      \$( \"#class_box\" ).click(function() {
        \$(\"#class_menu\").click();
      });
    </script>
    <script>
      \$( \"#exam_box\" ).click(function() {
        \$(\"#exam_menu\").click();
      });
    </script>
    <script>
      \$( \"#subject_box\" ).click(function() {
        \$(\"#subject_menu\").click();
      });
    </script>
    <script>
      \$( \"#student_box\" ).click(function() {
        \$(\"#student_menu\").click();
      });
    </script>
{% endblock %}", "default/index.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/default/index.html.twig");
    }
}


/* default/index.html.twig */
class __TwigTemplate_eb06cea6897fcd0190b5b480f9660ee60e7cc875ac6347494ee121194322dc60_2057095379 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "default/index.html.twig", 9);
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
        $__internal_abdd245d78c764022c977ec9f1653bccad0dc6458721f6d95e75fffeb9203b84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abdd245d78c764022c977ec9f1653bccad0dc6458721f6d95e75fffeb9203b84->enter($__internal_abdd245d78c764022c977ec9f1653bccad0dc6458721f6d95e75fffeb9203b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_275e2e1a5b1b8aeeb446737c59cb01a916af9a7063c8236c1f80d9cbf60e2aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275e2e1a5b1b8aeeb446737c59cb01a916af9a7063c8236c1f80d9cbf60e2aed->enter($__internal_275e2e1a5b1b8aeeb446737c59cb01a916af9a7063c8236c1f80d9cbf60e2aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abdd245d78c764022c977ec9f1653bccad0dc6458721f6d95e75fffeb9203b84->leave($__internal_abdd245d78c764022c977ec9f1653bccad0dc6458721f6d95e75fffeb9203b84_prof);

        
        $__internal_275e2e1a5b1b8aeeb446737c59cb01a916af9a7063c8236c1f80d9cbf60e2aed->leave($__internal_275e2e1a5b1b8aeeb446737c59cb01a916af9a7063c8236c1f80d9cbf60e2aed_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_e4eaba4dd5bddf65b84f0d33721e42b0d649fbf5248a38cdf7b2da9b871073b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4eaba4dd5bddf65b84f0d33721e42b0d649fbf5248a38cdf7b2da9b871073b9->enter($__internal_e4eaba4dd5bddf65b84f0d33721e42b0d649fbf5248a38cdf7b2da9b871073b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b223ff87bcefe434b08d20b2ca64f1f2e2618188a0f448b764232cd6ce36e25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b223ff87bcefe434b08d20b2ca64f1f2e2618188a0f448b764232cd6ce36e25f->enter($__internal_b223ff87bcefe434b08d20b2ca64f1f2e2618188a0f448b764232cd6ce36e25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "        <!--overview start-->
        <div class=\"row state-overview\">
            <div class=\"col-lg-4\">
            <!--user profile info start-->
            <section class=\"panel\">
                <div class=\"profile-widget profile-widget-info\">
                    <div class=\"panel-body\">
                      <div class=\"col-lg-4 col-sm-4 profile-widget-name\">
                                      
                        <div style=\"margin-top:20px;\" class=\"follow-ava\">
                            <img src=\"img/mps.png\" alt=\"\">
                        </div>
                        <h6>milepostsolutions.co.ke</h6>
                      </div>
                      <div class=\"col-lg-8 col-sm-8 follow-info\">
                          <h4>Mile-Post Solutions</h4> 
                          <p>Welcome back ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "fName", array()), "html", null, true);
        echo ", Let's make work easier and save time.</p>
                      </div>
                      <div class=\"weather-category twt-category\">
                                <ul>
                                    <li class=\"active\">
                                        <h4>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d"), "html", null, true);
        echo "</h4>
                                        <i class=\"icon_calendar\"></i> Day
                                    </li>
                                    <li>
                                        <h4>";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m"), "html", null, true);
        echo "</h4>
                                        <i class=\"icon_calendar\"></i> Month
                                    </li>
                                    <li>
                                        <h4>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</h4>
                                        <i class=\"icon_calendar\"></i> Year
                                    </li>
                                </ul>
                            </div>
                    </div>
                    <footer class=\"profile-widget-foot\">
                      <div id=\"clock\">
                        <p class=\"unit\" id=\"hours\"></p>
                        <p class=\"unit\" id=\"minutes\"></p>
                        <p class=\"unit\" id=\"seconds\"></p>
                        <p class=\"unit\" id=\"ampm\"></p>
                      </div>
                    </footer>
                </div>
            </section>
            <!--user profile info end-->
          </div>
          <!-- statics start -->
          <div class=\"state col-lg-8\">
              <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\" id=\"exam_box\">
                    <section class=\"panel\">
                        <div class=\"symbol\">
                            <i class=\"icon_document_alt\"></i>
                        </div>
                        <div class=\"value\">
                            <h1>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["countExams"] ?? $this->getContext($context, "countExams")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
        echo "</h1>
                            <p> Exams</p>
                        </div>
                    </section>
                </div>
                <div class=\"col-lg-3 col-sm-6\" id=\"class_box\">
                    <section class=\"panel\">
                        <div class=\"symbol\">
                            <i class=\"icon_lightbulb_alt\"></i>
                        </div>
                        <div class=\"value\">
                            <h1>";
        // line 78
        echo twig_escape_filter($this->env, ($context["countClasses"] ?? $this->getContext($context, "countClasses")), "html", null, true);
        echo "</h1>
                            <p> Classes</p>
                        </div>
                    </section>
                </div>
                <div class=\"col-lg-3 col-sm-6\" id=\"subject_box\">
                    <section class=\"panel\">
                        <div class=\"symbol\">
                            <i class=\"icon_documents_alt\"></i>
                        </div>
                        <div class=\"value\">
                            <h1>";
        // line 89
        echo twig_escape_filter($this->env, ($context["countSubjects"] ?? $this->getContext($context, "countSubjects")), "html", null, true);
        echo "</h1>
                            <p> Subjects</p>
                        </div>
                    </section>
                </div>
                <div class=\"col-lg-3 col-sm-6\" id=\"student_box\">
                    <section class=\"panel\">
                        <div class=\"symbol\">
                            <i class=\"icon_group\"></i>
                        </div>
                        <div class=\"value\">
                            <h1>";
        // line 100
        echo twig_escape_filter($this->env, ($context["countStudents"] ?? $this->getContext($context, "countStudents")), "html", null, true);
        echo "</h1>
                            <p> Students</p>
                        </div>
                    </section>
                </div>
              </div>
              <div class=\"row knob-charts\">
                  <div class=\"col-lg-12\">
                      <div class=\"panel\">
                          <div class=\"panel-body\">
                                <ul class=\"summary-list\">
                                ";
        // line 111
        if ((array_key_exists("score_list", $context) &&  !twig_test_empty(($context["score_list"] ?? $this->getContext($context, "score_list"))))) {
            // line 112
            echo "                                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["score_list"] ?? $this->getContext($context, "score_list")));
            foreach ($context['_seq'] as $context["_key"] => $context["list_item"]) {
                // line 113
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array", false, true), 1, array(), "array", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 1, array(), "array")))) {
                    // line 114
                    echo "                                      ";
                    $context["no_of_students"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 1, array(), "array"), "students", array()));
                    // line 115
                    echo "                                      ";
                    $context["no_of_subjects"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array()));
                    // line 116
                    echo "                                        ";
                    $context["no_of_items"] = 0;
                    // line 117
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["list_item"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 118
                        echo "                                          ";
                        if (($this->getAttribute($this->getAttribute($context["item"], 0, array(), "array", false, true), "marks", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["item"], 0, array(), "array"), "marks", array()) > 0))) {
                            // line 119
                            echo "                                            ";
                            $context["no_of_items"] = (($context["no_of_items"] ?? $this->getContext($context, "no_of_items")) + 1);
                            // line 120
                            echo "                                            ";
                        }
                        // line 121
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 122
                    echo "                                        ";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 1, array(), "array"), "students", array())) > 0)) {
                        // line 123
                        echo "                                          ";
                        $context["percentage"] = ((($context["no_of_items"] ?? $this->getContext($context, "no_of_items")) / (($context["no_of_students"] ?? $this->getContext($context, "no_of_students")) * ($context["no_of_subjects"] ?? $this->getContext($context, "no_of_subjects")))) * 100);
                        // line 124
                        echo "                                        ";
                    } else {
                        // line 125
                        echo "                                          ";
                        $context["percentage"] = 0;
                        // line 126
                        echo "                                        ";
                    }
                    // line 127
                    echo "                                        <li>
                                            <a href=\"";
                    // line 128
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("record_scores", array("classId" => $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 1, array(), "array"), "id", array()), "companyId" => $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 2, array(), "array"), "id", array()))), "html", null, true);
                    echo "\">
                                                <input class=\"knob\" data-readonly=\"true\" data-width=\"80\" data-height=\"80\" data-displayPrevious=true  data-thickness=\".1\" value=\"";
                    // line 129
                    echo twig_escape_filter($this->env, twig_round(($context["percentage"] ?? $this->getContext($context, "percentage"))), "html", null, true);
                    echo "\" data-fgColor=\"#007AFF\" data-bgColor=\"#F7F7F7\">
                                                <p>";
                    // line 130
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 2, array(), "array"), "cTitle", array()), "html", null, true);
                    echo "<br />[";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 2, array(), "array"), "class", array()), "cTitle", array()), "html", null, true);
                    echo "]</p>
                                            </a>
                                        </li>
                                    ";
                } else {
                    // line 133
                    echo " 
                                        <li>
                                            <a href=\"";
                    // line 135
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("record_scores", array("classId" => $this->getAttribute($this->getAttribute(twig_first($this->env, ($context["examCompanies"] ?? $this->getContext($context, "examCompanies"))), "class", array()), "id", array()), "companyId" => $this->getAttribute(twig_first($this->env, ($context["examCompanies"] ?? $this->getContext($context, "examCompanies"))), "id", array()))), "html", null, true);
                    echo "\">
                                                <input class=\"knob\" data-readonly=\"true\" data-width=\"80\" data-height=\"80\" data-displayPrevious=true  data-thickness=\".1\" value=\"0\" data-fgColor=\"#007AFF\" data-bgColor=\"#F7F7F7\">
                                                <p>";
                    // line 137
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, ($context["examCompanies"] ?? $this->getContext($context, "examCompanies"))), "cTitle", array()), "html", null, true);
                    echo "</p>
                                            </a>
                                        </li>
                                    ";
                }
                // line 140
                echo " 
                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo " 
                                ";
        } else {
            // line 143
            echo "                                  <div class=\"well\">
                                    <h4>Its lonely here! You can add some exams after you're done with adding <a href=\"";
            // line 144
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_class");
            echo "\">classes</a>, <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_subject");
            echo "\">subjects</a> and <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_student");
            echo "\"> students </a>.</h4>
                                  </div>
                                ";
        }
        // line 147
        echo "                                ";
        if ((twig_length_filter($this->env, ($context["score_list"] ?? $this->getContext($context, "score_list"))) < 5)) {
            echo " 
                                  <li>
                                    <a href=\"";
            // line 149
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_examCompany");
            echo "\" class=\"btn btn-default \" style=\"padding:10px!important; margin-bottom:10px; color:black;\"> Add New Exam </a>
                                  </li>   
                                ";
        }
        // line 151
        echo "                            
                                </ul>
                            </div>                                
                      </div>
                  </div>                        
              </div>
          </div>    
          <!-- statics end -->
        </div>
        <!--overview end-->

        <!-- project team & activity start -->
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <!--project team start-->
                <section class=\"panel\">
                  <div class=\"panel-body project-team\">
                      <div class=\"task-progress\">
                            <h1>Subjects</h1>  
                      </div>
                  </div>
                  ";
        // line 172
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array()))) {
            // line 173
            echo "                  <table class=\"table table-hover personal-task\">
                        <tbody>
                        ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 176
                echo "                        <tr>
                            <td>
                                <p class=\"profile-name\">";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "sTitle", array()), "html", null, true);
                echo "</p>
                            </td>
                            <td>
                              ";
                // line 181
                if ((twig_length_filter($this->env, $this->getAttribute($context["subject"], "childSubjects", array())) > 1)) {
                    // line 182
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subject"], "childSubjects", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 183
                        echo "                                  <span class=\"badge bg-important\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "cSTitle", array()), "html", null, true);
                        echo "</span>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 185
                    echo "                              ";
                }
                // line 186
                echo "                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                        </tbody>
                    </table>
                  ";
        } else {
            // line 192
            echo "                    <div class=\"well\">
                      <h4>Its lonely here! You can  <a href=\"";
            // line 193
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_subject");
            echo "\"> add some subjects </a> after you're done with adding classes and students.</h4>
                    </div>
                  ";
        }
        // line 196
        echo "                </section>
                <!--Project Team end-->
            </div>

            <div class=\"col-lg-8\">
                <!--Project Activity start-->
                <section class=\"panel\">
                    <div class=\"panel-body progress-panel\">
                      <div class=\"row\">
                        <div class=\"col-lg-12 task-progress pull-left\">
                            <h1>Classes</h1>                                  
                        </div>
                      </div>
                    </div>
                    ";
        // line 210
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "classes", array()))) {
            // line 211
            echo "                    <table class=\"table table-hover personal-task\">
                        <tbody>
                        ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["classes"] ?? $this->getContext($context, "classes")));
            foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                // line 214
                echo "                          <tr>
                              <td>";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "cTitle", array()), "html", null, true);
                echo "</td>
                              <td>
                                  ";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "classTeacher", array()), "html", null, true);
                echo ".
                              </td>
                              <td>
                                  <span class=\"badge bg-important\">";
                // line 220
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["class"], "students", array())), "html", null, true);
                echo " Students</span>
                              </td>
                              <td>
                                <span class=\"profile-ava\">
                                    <a href=\"";
                // line 224
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_students", array("classId" => $this->getAttribute($context["class"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\">View Students</a>
                                </span>
                              </td>
                          </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "                        </tbody>
                    </table>
                    ";
        } else {
            // line 232
            echo "                      <div class=\"well\">
                        <h4>Its lonely here! You can <a href=\"";
            // line 233
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_class");
            echo "\"> add some classes </a> now. If you have already added some classes, you can now <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_student");
            echo "\"> add some students to your class </a></h4>
                      </div>
                    ";
        }
        // line 236
        echo "                </section>
                <!--Project Activity end-->
            </div>
        </div>
        <!-- project team & activity end -->
";
        
        $__internal_b223ff87bcefe434b08d20b2ca64f1f2e2618188a0f448b764232cd6ce36e25f->leave($__internal_b223ff87bcefe434b08d20b2ca64f1f2e2618188a0f448b764232cd6ce36e25f_prof);

        
        $__internal_e4eaba4dd5bddf65b84f0d33721e42b0d649fbf5248a38cdf7b2da9b871073b9->leave($__internal_e4eaba4dd5bddf65b84f0d33721e42b0d649fbf5248a38cdf7b2da9b871073b9_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  904 => 236,  896 => 233,  893 => 232,  888 => 229,  877 => 224,  870 => 220,  864 => 217,  859 => 215,  856 => 214,  852 => 213,  848 => 211,  846 => 210,  830 => 196,  824 => 193,  821 => 192,  816 => 189,  808 => 186,  805 => 185,  796 => 183,  791 => 182,  789 => 181,  783 => 178,  779 => 176,  775 => 175,  771 => 173,  769 => 172,  746 => 151,  740 => 149,  734 => 147,  724 => 144,  721 => 143,  717 => 141,  710 => 140,  703 => 137,  698 => 135,  694 => 133,  685 => 130,  681 => 129,  677 => 128,  674 => 127,  671 => 126,  668 => 125,  665 => 124,  662 => 123,  659 => 122,  653 => 121,  650 => 120,  647 => 119,  644 => 118,  639 => 117,  636 => 116,  633 => 115,  630 => 114,  627 => 113,  622 => 112,  620 => 111,  606 => 100,  592 => 89,  578 => 78,  564 => 67,  534 => 40,  527 => 36,  520 => 32,  512 => 27,  494 => 11,  485 => 10,  456 => 9,  103 => 245,  94 => 244,  84 => 9,  80 => 8,  76 => 7,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
  <link rel=\"stylesheet\" href=\"{{asset('FlipClock/compiled/flipclock.css')}}\">
{% endblock %}
{% block body %}
<body>
{{ include('templates/header.html.twig') }}        \t\t
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}
        <!--overview start-->
        <div class=\"row state-overview\">
            <div class=\"col-lg-4\">
            <!--user profile info start-->
            <section class=\"panel\">
                <div class=\"profile-widget profile-widget-info\">
                    <div class=\"panel-body\">
                      <div class=\"col-lg-4 col-sm-4 profile-widget-name\">
                                      
                        <div style=\"margin-top:20px;\" class=\"follow-ava\">
                            <img src=\"img/mps.png\" alt=\"\">
                        </div>
                        <h6>milepostsolutions.co.ke</h6>
                      </div>
                      <div class=\"col-lg-8 col-sm-8 follow-info\">
                          <h4>Mile-Post Solutions</h4> 
                          <p>Welcome back {{app.user.fName}}, Let's make work easier and save time.</p>
                      </div>
                      <div class=\"weather-category twt-category\">
                                <ul>
                                    <li class=\"active\">
                                        <h4>{{ \"now\"|date(\"d\") }}</h4>
                                        <i class=\"icon_calendar\"></i> Day
                                    </li>
                                    <li>
                                        <h4>{{ \"now\"|date(\"m\") }}</h4>
                                        <i class=\"icon_calendar\"></i> Month
                                    </li>
                                    <li>
                                        <h4>{{ \"now\"|date(\"Y\") }}</h4>
                                        <i class=\"icon_calendar\"></i> Year
                                    </li>
                                </ul>
                            </div>
                    </div>
                    <footer class=\"profile-widget-foot\">
                      <div id=\"clock\">
                        <p class=\"unit\" id=\"hours\"></p>
                        <p class=\"unit\" id=\"minutes\"></p>
                        <p class=\"unit\" id=\"seconds\"></p>
                        <p class=\"unit\" id=\"ampm\"></p>
                      </div>
                    </footer>
                </div>
            </section>
            <!--user profile info end-->
          </div>
          <!-- statics start -->
          <div class=\"state col-lg-8\">
              <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\" id=\"exam_box\">
                    <section class=\"panel\">
                        <div class=\"symbol\">
                            <i class=\"icon_document_alt\"></i>
                        </div>
                        <div class=\"value\">
                            <h1>{{countExams[0][1]}}</h1>
                            <p> Exams</p>
                        </div>
                    </section>
                </div>
                <div class=\"col-lg-3 col-sm-6\" id=\"class_box\">
                    <section class=\"panel\">
                        <div class=\"symbol\">
                            <i class=\"icon_lightbulb_alt\"></i>
                        </div>
                        <div class=\"value\">
                            <h1>{{countClasses}}</h1>
                            <p> Classes</p>
                        </div>
                    </section>
                </div>
                <div class=\"col-lg-3 col-sm-6\" id=\"subject_box\">
                    <section class=\"panel\">
                        <div class=\"symbol\">
                            <i class=\"icon_documents_alt\"></i>
                        </div>
                        <div class=\"value\">
                            <h1>{{countSubjects}}</h1>
                            <p> Subjects</p>
                        </div>
                    </section>
                </div>
                <div class=\"col-lg-3 col-sm-6\" id=\"student_box\">
                    <section class=\"panel\">
                        <div class=\"symbol\">
                            <i class=\"icon_group\"></i>
                        </div>
                        <div class=\"value\">
                            <h1>{{countStudents}}</h1>
                            <p> Students</p>
                        </div>
                    </section>
                </div>
              </div>
              <div class=\"row knob-charts\">
                  <div class=\"col-lg-12\">
                      <div class=\"panel\">
                          <div class=\"panel-body\">
                                <ul class=\"summary-list\">
                                {% if score_list is defined and score_list is not empty %}
                                  {% for list_item in score_list %}
                                    {% if list_item[0][1] is defined and list_item[0][1] is not empty %}
                                      {% set no_of_students = list_item[0][1].students|length %}
                                      {% set no_of_subjects = app.user.subjects|length %}
                                        {% set no_of_items = 0 %}
                                        {% for item in list_item %}
                                          {% if item[0].marks is defined and item[0].marks > 0 %}
                                            {% set no_of_items = no_of_items + 1 %}
                                            {% endif %}
                                        {% endfor %}
                                        {% if list_item[0][1].students|length > 0 %}
                                          {% set percentage = (no_of_items / (no_of_students * no_of_subjects)) * 100 %}
                                        {% else %}
                                          {% set percentage = 0 %}
                                        {% endif %}
                                        <li>
                                            <a href=\"{{path('record_scores', {'classId': list_item[0][1].id, 'companyId':list_item[0][2].id})}}\">
                                                <input class=\"knob\" data-readonly=\"true\" data-width=\"80\" data-height=\"80\" data-displayPrevious=true  data-thickness=\".1\" value=\"{{percentage|round}}\" data-fgColor=\"#007AFF\" data-bgColor=\"#F7F7F7\">
                                                <p>{{list_item[0][2].cTitle}}<br />[{{list_item[0][2].class.cTitle}}]</p>
                                            </a>
                                        </li>
                                    {% else %} 
                                        <li>
                                            <a href=\"{{path('record_scores', {'classId': examCompanies|first.class.id, 'companyId': examCompanies|first.id})}}\">
                                                <input class=\"knob\" data-readonly=\"true\" data-width=\"80\" data-height=\"80\" data-displayPrevious=true  data-thickness=\".1\" value=\"0\" data-fgColor=\"#007AFF\" data-bgColor=\"#F7F7F7\">
                                                <p>{{examCompanies|first.cTitle}}</p>
                                            </a>
                                        </li>
                                    {% endif %} 
                                  {% endfor %} 
                                {% else %}
                                  <div class=\"well\">
                                    <h4>Its lonely here! You can add some exams after you're done with adding <a href=\"{{path('new_class')}}\">classes</a>, <a href=\"{{path('new_subject')}}\">subjects</a> and <a href=\"{{path('new_student')}}\"> students </a>.</h4>
                                  </div>
                                {% endif %}
                                {% if score_list|length < 5 %} 
                                  <li>
                                    <a href=\"{{path('new_examCompany')}}\" class=\"btn btn-default \" style=\"padding:10px!important; margin-bottom:10px; color:black;\"> Add New Exam </a>
                                  </li>   
                                {% endif %}                            
                                </ul>
                            </div>                                
                      </div>
                  </div>                        
              </div>
          </div>    
          <!-- statics end -->
        </div>
        <!--overview end-->

        <!-- project team & activity start -->
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <!--project team start-->
                <section class=\"panel\">
                  <div class=\"panel-body project-team\">
                      <div class=\"task-progress\">
                            <h1>Subjects</h1>  
                      </div>
                  </div>
                  {% if app.user.subjects is not empty %}
                  <table class=\"table table-hover personal-task\">
                        <tbody>
                        {% for subject in app.user.subjects %}
                        <tr>
                            <td>
                                <p class=\"profile-name\">{{subject.sTitle}}</p>
                            </td>
                            <td>
                              {% if subject.childSubjects|length > 1 %}
                                {% for child in subject.childSubjects %}
                                  <span class=\"badge bg-important\">{{child.cSTitle}}</span>
                                {% endfor %}
                              {% endif %}
                            </td>
                        </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                  {% else %}
                    <div class=\"well\">
                      <h4>Its lonely here! You can  <a href=\"{{path('new_subject')}}\"> add some subjects </a> after you're done with adding classes and students.</h4>
                    </div>
                  {% endif %}
                </section>
                <!--Project Team end-->
            </div>

            <div class=\"col-lg-8\">
                <!--Project Activity start-->
                <section class=\"panel\">
                    <div class=\"panel-body progress-panel\">
                      <div class=\"row\">
                        <div class=\"col-lg-12 task-progress pull-left\">
                            <h1>Classes</h1>                                  
                        </div>
                      </div>
                    </div>
                    {% if app.user.classes is not empty %}
                    <table class=\"table table-hover personal-task\">
                        <tbody>
                        {% for class in classes %}
                          <tr>
                              <td>{{class.cTitle}}</td>
                              <td>
                                  {{class.classTeacher}}.
                              </td>
                              <td>
                                  <span class=\"badge bg-important\">{{class.students|length}} Students</span>
                              </td>
                              <td>
                                <span class=\"profile-ava\">
                                    <a href=\"{{path('list_students', {'classId': class.id})}}\" class=\"btn btn-info btn-xs\">View Students</a>
                                </span>
                              </td>
                          </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                    {% else %}
                      <div class=\"well\">
                        <h4>Its lonely here! You can <a href=\"{{path('new_class')}}\"> add some classes </a> now. If you have already added some classes, you can now <a href=\"{{path('new_student')}}\"> add some students to your class </a></h4>
                      </div>
                    {% endif %}
                </section>
                <!--Project Activity end-->
            </div>
        </div>
        <!-- project team & activity end -->
{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}
    <script src=\"{{asset('FlipClock/compiled/flipclock.js')}}\"></script>
    <script type=\"text/javascript\">
      var clock;
      
      \$(document).ready(function() {
        clock = \$('.clock').FlipClock({
          clockFace: 'TwelveHourClock',
          showSeconds: false        
        });
      });
    </script>    <script>
      \$( \"#class_box\" ).click(function() {
        \$(\"#class_menu\").click();
      });
    </script>
    <script>
      \$( \"#exam_box\" ).click(function() {
        \$(\"#exam_menu\").click();
      });
    </script>
    <script>
      \$( \"#subject_box\" ).click(function() {
        \$(\"#subject_menu\").click();
      });
    </script>
    <script>
      \$( \"#student_box\" ).click(function() {
        \$(\"#student_menu\").click();
      });
    </script>
{% endblock %}", "default/index.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/default/index.html.twig");
    }
}
