<?php

/* student/list.html.twig */
class __TwigTemplate_d924bbff480ee562b8e518fd967427fdda08f92ebea3597d2c338dd986368c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/list.html.twig", 1);
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
        $__internal_e1f367a41476045a4aa8824a6407a5487bbe90ab5d0cf23b79f77dfd59609612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f367a41476045a4aa8824a6407a5487bbe90ab5d0cf23b79f77dfd59609612->enter($__internal_e1f367a41476045a4aa8824a6407a5487bbe90ab5d0cf23b79f77dfd59609612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/list.html.twig"));

        $__internal_ca86891ea879741bd92d71d573b79579d85afacacd714d4816e47bbaa71fd24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca86891ea879741bd92d71d573b79579d85afacacd714d4816e47bbaa71fd24b->enter($__internal_ca86891ea879741bd92d71d573b79579d85afacacd714d4816e47bbaa71fd24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1f367a41476045a4aa8824a6407a5487bbe90ab5d0cf23b79f77dfd59609612->leave($__internal_e1f367a41476045a4aa8824a6407a5487bbe90ab5d0cf23b79f77dfd59609612_prof);

        
        $__internal_ca86891ea879741bd92d71d573b79579d85afacacd714d4816e47bbaa71fd24b->leave($__internal_ca86891ea879741bd92d71d573b79579d85afacacd714d4816e47bbaa71fd24b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a6e185f00863a8f647872538b22d5772992f65ac8d7ef90e62e6d9141e0385d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e185f00863a8f647872538b22d5772992f65ac8d7ef90e62e6d9141e0385d2->enter($__internal_a6e185f00863a8f647872538b22d5772992f65ac8d7ef90e62e6d9141e0385d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1f1b61204ca7d2a08b3ac11e9a8d6b502697bbd849f1eaba6c04f23efdfb6127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1b61204ca7d2a08b3ac11e9a8d6b502697bbd849f1eaba6c04f23efdfb6127->enter($__internal_1f1b61204ca7d2a08b3ac11e9a8d6b502697bbd849f1eaba6c04f23efdfb6127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
    <!-- DataTables CSS -->
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-plugins/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- DataTables Responsive CSS -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-responsive/dataTables.responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_1f1b61204ca7d2a08b3ac11e9a8d6b502697bbd849f1eaba6c04f23efdfb6127->leave($__internal_1f1b61204ca7d2a08b3ac11e9a8d6b502697bbd849f1eaba6c04f23efdfb6127_prof);

        
        $__internal_a6e185f00863a8f647872538b22d5772992f65ac8d7ef90e62e6d9141e0385d2->leave($__internal_a6e185f00863a8f647872538b22d5772992f65ac8d7ef90e62e6d9141e0385d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_85aa289809d361b73cacd6e6c2508e940750cf5fb933950c5b9f1dc80d266077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85aa289809d361b73cacd6e6c2508e940750cf5fb933950c5b9f1dc80d266077->enter($__internal_85aa289809d361b73cacd6e6c2508e940750cf5fb933950c5b9f1dc80d266077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_100d24b2a3f8d2c8c527813f41e2324e267cec5d15a6d0dc02e7005cf4bdefa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100d24b2a3f8d2c8c527813f41e2324e267cec5d15a6d0dc02e7005cf4bdefa3->enter($__internal_100d24b2a3f8d2c8c527813f41e2324e267cec5d15a6d0dc02e7005cf4bdefa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<body>
";
        // line 13
        echo twig_include($this->env, $context, "templates/header.html.twig");
        echo "
";
        // line 14
        echo twig_include($this->env, $context, "templates/aside.html.twig");
        echo "
";
        // line 15
        $this->loadTemplate("student/list.html.twig", "student/list.html.twig", 15, "694762393")->display($context);
        
        $__internal_100d24b2a3f8d2c8c527813f41e2324e267cec5d15a6d0dc02e7005cf4bdefa3->leave($__internal_100d24b2a3f8d2c8c527813f41e2324e267cec5d15a6d0dc02e7005cf4bdefa3_prof);

        
        $__internal_85aa289809d361b73cacd6e6c2508e940750cf5fb933950c5b9f1dc80d266077->leave($__internal_85aa289809d361b73cacd6e6c2508e940750cf5fb933950c5b9f1dc80d266077_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_483ac370c03e7d565d6f56cc1b91983a800abfe0c8a5e6a6f48ba70c9726dcbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483ac370c03e7d565d6f56cc1b91983a800abfe0c8a5e6a6f48ba70c9726dcbe->enter($__internal_483ac370c03e7d565d6f56cc1b91983a800abfe0c8a5e6a6f48ba70c9726dcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_186afd301fd97e42acb0787ca3b1017533361e79613187a49a62bf68ec402db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186afd301fd97e42acb0787ca3b1017533361e79613187a49a62bf68ec402db7->enter($__internal_186afd301fd97e42acb0787ca3b1017533361e79613187a49a62bf68ec402db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-plugins/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-responsive/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>

    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true,
            \"pageLength\": ";
        // line 94
        echo twig_escape_filter($this->env, ($context["entriesPerPage"] ?? $this->getContext($context, "entriesPerPage")), "html", null, true);
        echo "
            
        });
    });
    </script>

";
        
        $__internal_186afd301fd97e42acb0787ca3b1017533361e79613187a49a62bf68ec402db7->leave($__internal_186afd301fd97e42acb0787ca3b1017533361e79613187a49a62bf68ec402db7_prof);

        
        $__internal_483ac370c03e7d565d6f56cc1b91983a800abfe0c8a5e6a6f48ba70c9726dcbe->leave($__internal_483ac370c03e7d565d6f56cc1b91983a800abfe0c8a5e6a6f48ba70c9726dcbe_prof);

    }

    public function getTemplateName()
    {
        return "student/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 94,  124 => 88,  120 => 87,  116 => 86,  113 => 85,  104 => 84,  94 => 15,  90 => 14,  86 => 13,  83 => 12,  74 => 11,  61 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
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

    <!-- DataTables CSS -->
    <link href=\"{{ asset('vendor/datatables-plugins/dataTables.bootstrap.css') }}\" rel=\"stylesheet\">

    <!-- DataTables Responsive CSS -->
    <link href=\"{{ asset('vendor/datatables-responsive/dataTables.responsive.css') }}\" rel=\"stylesheet\">

{% endblock %}
{% block body %}
<body>
{{ include('templates/header.html.twig') }}
{{ include('templates/aside.html.twig') }}
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}

\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Students List - Class {{class}}
\t\t      </header>
\t\t      {% if students is not empty %}
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Full Name</th>
\t\t              <th>Gender</th>
\t\t              <th>UPI Number</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          {% for student in students %}
\t\t          <tr>
\t\t              <td><a href=\"{{path('student_profile', {'studentId': student.id})}}\">{{student.names}}</a></td>
\t\t              <td>{{student.gender|capitalize}}</td>
\t\t              <td>{{student.upiNumber}}</td>        
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Student\" href=\"{{path('new_student')}}\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Student\" href=\"{{path('edit_student', {'studentId': student.id})}}\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Student\" href=\"#deleteModal{{student.id}}\"><i class=\"icon_close_alt2\"></i></a>
\t\t                      <a class=\"btn btn-info\" title=\"View Progress\" href=\"{{path('student_profile', {'studentId': student.id})}}\"><i class=\"arrow_carrot-right_alt\"></i></a>
\t\t                  </div>
\t\t              </td>  
\t\t          </tr>
\t\t      \t  {% endfor %}
\t\t          </tbody>
\t\t      </table>
              {% else %}
                <div class=\"well\">
                  <h4>Hmm! You need to  <a href=\"{{path('new_student')}}\"> add some students </a> for class {{class.cTitle}}</h4>
                </div>
              {% endif %}
\t  </section>
\t\t</div>
\t\t{% for student in students %}
\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal{{student.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Student {{ student.names }}</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"{{ path('delete_student', { 'studentId': student.id } ) }}\" class=\"btn btn-danger\">Go Ahead</a>
\t\t\t          </div>
\t\t\t      </div>
\t\t\t  </div>
\t\t\t</div>\t\t    
\t\t{% endfor %}
\t{% endblock %}
{% endembed %}
{% endblock %}

{% block javascripts %}
    <!-- DataTables JavaScript -->
    <script src=\"{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/datatables-plugins/dataTables.bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/datatables-responsive/dataTables.responsive.js') }}\"></script>

    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true,
            \"pageLength\": {{entriesPerPage}}
            
        });
    });
    </script>

{% endblock %}", "student/list.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/student/list.html.twig");
    }
}


/* student/list.html.twig */
class __TwigTemplate_d924bbff480ee562b8e518fd967427fdda08f92ebea3597d2c338dd986368c9d_694762393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "student/list.html.twig", 15);
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
        $__internal_829f473865d45337ce185e9c7a1f110f448c977eca14d6735c200571da7eeaf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829f473865d45337ce185e9c7a1f110f448c977eca14d6735c200571da7eeaf2->enter($__internal_829f473865d45337ce185e9c7a1f110f448c977eca14d6735c200571da7eeaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/list.html.twig"));

        $__internal_864595ad0738f58f441109a2012e9cb44942e62e13b9d4cdefce801588986961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864595ad0738f58f441109a2012e9cb44942e62e13b9d4cdefce801588986961->enter($__internal_864595ad0738f58f441109a2012e9cb44942e62e13b9d4cdefce801588986961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_829f473865d45337ce185e9c7a1f110f448c977eca14d6735c200571da7eeaf2->leave($__internal_829f473865d45337ce185e9c7a1f110f448c977eca14d6735c200571da7eeaf2_prof);

        
        $__internal_864595ad0738f58f441109a2012e9cb44942e62e13b9d4cdefce801588986961->leave($__internal_864595ad0738f58f441109a2012e9cb44942e62e13b9d4cdefce801588986961_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_044d6439cec280ebfd1282f64986d9ec8d596b3d58dbf18400569dbede46f365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044d6439cec280ebfd1282f64986d9ec8d596b3d58dbf18400569dbede46f365->enter($__internal_044d6439cec280ebfd1282f64986d9ec8d596b3d58dbf18400569dbede46f365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_59853cb3be8de73d85523572dc010a7c9d54e7d6c95c3e88c02ec1577831d643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59853cb3be8de73d85523572dc010a7c9d54e7d6c95c3e88c02ec1577831d643->enter($__internal_59853cb3be8de73d85523572dc010a7c9d54e7d6c95c3e88c02ec1577831d643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Students List - Class ";
        // line 21
        echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
        echo "
\t\t      </header>
\t\t      ";
        // line 23
        if ( !twig_test_empty(($context["students"] ?? $this->getContext($context, "students")))) {
            // line 24
            echo "\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Full Name</th>
\t\t              <th>Gender</th>
\t\t              <th>UPI Number</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 35
                echo "\t\t          <tr>
\t\t              <td><a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_profile", array("studentId" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "names", array()), "html", null, true);
                echo "</a></td>
\t\t              <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["student"], "gender", array())), "html", null, true);
                echo "</td>
\t\t              <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "upiNumber", array()), "html", null, true);
                echo "</td>        
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Student\" href=\"";
                // line 41
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_student");
                echo "\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Student\" href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_student", array("studentId" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Student\" href=\"#deleteModal";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                echo "\"><i class=\"icon_close_alt2\"></i></a>
\t\t                      <a class=\"btn btn-info\" title=\"View Progress\" href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_profile", array("studentId" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
                echo "\"><i class=\"arrow_carrot-right_alt\"></i></a>
\t\t                  </div>
\t\t              </td>  
\t\t          </tr>
\t\t      \t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t          </tbody>
\t\t      </table>
              ";
        } else {
            // line 52
            echo "                <div class=\"well\">
                  <h4>Hmm! You need to  <a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_student");
            echo "\"> add some students </a> for class ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "cTitle", array()), "html", null, true);
            echo "</h4>
                </div>
              ";
        }
        // line 56
        echo "\t  </section>
\t\t</div>
\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 59
            echo "\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Student ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "names", array()), "html", null, true);
            echo "</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_student", array("studentId" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Go Ahead</a>
\t\t\t          </div>
\t\t\t      </div>
\t\t\t  </div>
\t\t\t</div>\t\t    
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t";
        
        $__internal_59853cb3be8de73d85523572dc010a7c9d54e7d6c95c3e88c02ec1577831d643->leave($__internal_59853cb3be8de73d85523572dc010a7c9d54e7d6c95c3e88c02ec1577831d643_prof);

        
        $__internal_044d6439cec280ebfd1282f64986d9ec8d596b3d58dbf18400569dbede46f365->leave($__internal_044d6439cec280ebfd1282f64986d9ec8d596b3d58dbf18400569dbede46f365_prof);

    }

    public function getTemplateName()
    {
        return "student/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 80,  442 => 74,  434 => 69,  422 => 60,  419 => 59,  415 => 58,  411 => 56,  403 => 53,  400 => 52,  395 => 49,  384 => 44,  380 => 43,  376 => 42,  372 => 41,  366 => 38,  362 => 37,  356 => 36,  353 => 35,  349 => 34,  337 => 24,  335 => 23,  330 => 21,  324 => 17,  315 => 16,  286 => 15,  133 => 94,  124 => 88,  120 => 87,  116 => 86,  113 => 85,  104 => 84,  94 => 15,  90 => 14,  86 => 13,  83 => 12,  74 => 11,  61 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
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

    <!-- DataTables CSS -->
    <link href=\"{{ asset('vendor/datatables-plugins/dataTables.bootstrap.css') }}\" rel=\"stylesheet\">

    <!-- DataTables Responsive CSS -->
    <link href=\"{{ asset('vendor/datatables-responsive/dataTables.responsive.css') }}\" rel=\"stylesheet\">

{% endblock %}
{% block body %}
<body>
{{ include('templates/header.html.twig') }}
{{ include('templates/aside.html.twig') }}
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}

\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Students List - Class {{class}}
\t\t      </header>
\t\t      {% if students is not empty %}
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Full Name</th>
\t\t              <th>Gender</th>
\t\t              <th>UPI Number</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          {% for student in students %}
\t\t          <tr>
\t\t              <td><a href=\"{{path('student_profile', {'studentId': student.id})}}\">{{student.names}}</a></td>
\t\t              <td>{{student.gender|capitalize}}</td>
\t\t              <td>{{student.upiNumber}}</td>        
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Student\" href=\"{{path('new_student')}}\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Student\" href=\"{{path('edit_student', {'studentId': student.id})}}\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Student\" href=\"#deleteModal{{student.id}}\"><i class=\"icon_close_alt2\"></i></a>
\t\t                      <a class=\"btn btn-info\" title=\"View Progress\" href=\"{{path('student_profile', {'studentId': student.id})}}\"><i class=\"arrow_carrot-right_alt\"></i></a>
\t\t                  </div>
\t\t              </td>  
\t\t          </tr>
\t\t      \t  {% endfor %}
\t\t          </tbody>
\t\t      </table>
              {% else %}
                <div class=\"well\">
                  <h4>Hmm! You need to  <a href=\"{{path('new_student')}}\"> add some students </a> for class {{class.cTitle}}</h4>
                </div>
              {% endif %}
\t  </section>
\t\t</div>
\t\t{% for student in students %}
\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal{{student.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Student {{ student.names }}</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"{{ path('delete_student', { 'studentId': student.id } ) }}\" class=\"btn btn-danger\">Go Ahead</a>
\t\t\t          </div>
\t\t\t      </div>
\t\t\t  </div>
\t\t\t</div>\t\t    
\t\t{% endfor %}
\t{% endblock %}
{% endembed %}
{% endblock %}

{% block javascripts %}
    <!-- DataTables JavaScript -->
    <script src=\"{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/datatables-plugins/dataTables.bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/datatables-responsive/dataTables.responsive.js') }}\"></script>

    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true,
            \"pageLength\": {{entriesPerPage}}
            
        });
    });
    </script>

{% endblock %}", "student/list.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/student/list.html.twig");
    }
}
