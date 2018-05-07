<?php

/* examCompany/list.html.twig */
class __TwigTemplate_463329241a9315c75ff5dc694b6eb38c9ba87c72669d373ce059031bbe7872c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "examCompany/list.html.twig", 1);
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
        $__internal_7871da78c1672728f82323cdcefc67a1c6799570193a80f151f0e5ddaf9fb12f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7871da78c1672728f82323cdcefc67a1c6799570193a80f151f0e5ddaf9fb12f->enter($__internal_7871da78c1672728f82323cdcefc67a1c6799570193a80f151f0e5ddaf9fb12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/list.html.twig"));

        $__internal_f4a5dd94b24a3314bdd38c59ad228caebe1bdf83eb2ea94161fb7d73e66056ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a5dd94b24a3314bdd38c59ad228caebe1bdf83eb2ea94161fb7d73e66056ea->enter($__internal_f4a5dd94b24a3314bdd38c59ad228caebe1bdf83eb2ea94161fb7d73e66056ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7871da78c1672728f82323cdcefc67a1c6799570193a80f151f0e5ddaf9fb12f->leave($__internal_7871da78c1672728f82323cdcefc67a1c6799570193a80f151f0e5ddaf9fb12f_prof);

        
        $__internal_f4a5dd94b24a3314bdd38c59ad228caebe1bdf83eb2ea94161fb7d73e66056ea->leave($__internal_f4a5dd94b24a3314bdd38c59ad228caebe1bdf83eb2ea94161fb7d73e66056ea_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0afb80a2860d9fa6aede7c565849104894ab4e499e17c14586bc46e4308aa0d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0afb80a2860d9fa6aede7c565849104894ab4e499e17c14586bc46e4308aa0d0->enter($__internal_0afb80a2860d9fa6aede7c565849104894ab4e499e17c14586bc46e4308aa0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6918c6f0dad0d3b2d0a8d20e32bd63209cb892f55dcde73201cf26be1780e3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6918c6f0dad0d3b2d0a8d20e32bd63209cb892f55dcde73201cf26be1780e3db->enter($__internal_6918c6f0dad0d3b2d0a8d20e32bd63209cb892f55dcde73201cf26be1780e3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6918c6f0dad0d3b2d0a8d20e32bd63209cb892f55dcde73201cf26be1780e3db->leave($__internal_6918c6f0dad0d3b2d0a8d20e32bd63209cb892f55dcde73201cf26be1780e3db_prof);

        
        $__internal_0afb80a2860d9fa6aede7c565849104894ab4e499e17c14586bc46e4308aa0d0->leave($__internal_0afb80a2860d9fa6aede7c565849104894ab4e499e17c14586bc46e4308aa0d0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4c4f7477eb733d78bd179f09f5565464d5c94969abf1e8805e4312edc7561ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4c4f7477eb733d78bd179f09f5565464d5c94969abf1e8805e4312edc7561ff->enter($__internal_a4c4f7477eb733d78bd179f09f5565464d5c94969abf1e8805e4312edc7561ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6cf9fb85b598f5c02873a9e9a708d6ca712b7130e12fe34bfa6c9af425c7619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6cf9fb85b598f5c02873a9e9a708d6ca712b7130e12fe34bfa6c9af425c7619->enter($__internal_f6cf9fb85b598f5c02873a9e9a708d6ca712b7130e12fe34bfa6c9af425c7619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<body>
";
        // line 13
        echo twig_include($this->env, $context, "templates/header.html.twig");
        echo "        \t\t
";
        // line 14
        echo twig_include($this->env, $context, "templates/aside.html.twig");
        echo "        \t\t
";
        // line 15
        $this->loadTemplate("examCompany/list.html.twig", "examCompany/list.html.twig", 15, "831974945")->display($context);
        
        $__internal_f6cf9fb85b598f5c02873a9e9a708d6ca712b7130e12fe34bfa6c9af425c7619->leave($__internal_f6cf9fb85b598f5c02873a9e9a708d6ca712b7130e12fe34bfa6c9af425c7619_prof);

        
        $__internal_a4c4f7477eb733d78bd179f09f5565464d5c94969abf1e8805e4312edc7561ff->leave($__internal_a4c4f7477eb733d78bd179f09f5565464d5c94969abf1e8805e4312edc7561ff_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e9e3ed1146186522428482907225251a9439d0fa86218ca734e95bce45f08b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e3ed1146186522428482907225251a9439d0fa86218ca734e95bce45f08b35->enter($__internal_e9e3ed1146186522428482907225251a9439d0fa86218ca734e95bce45f08b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_61623c9f9d16e3f238f7bca2adc1023fe2257de5703d6ac8bab58042bb6b44c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61623c9f9d16e3f238f7bca2adc1023fe2257de5703d6ac8bab58042bb6b44c0->enter($__internal_61623c9f9d16e3f238f7bca2adc1023fe2257de5703d6ac8bab58042bb6b44c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-plugins/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-responsive/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>

    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true,
            \"pageLength\": ";
        // line 86
        echo twig_escape_filter($this->env, ($context["entriesPerPage"] ?? $this->getContext($context, "entriesPerPage")), "html", null, true);
        echo "
            
        });
    });
    </script>

";
        
        $__internal_61623c9f9d16e3f238f7bca2adc1023fe2257de5703d6ac8bab58042bb6b44c0->leave($__internal_61623c9f9d16e3f238f7bca2adc1023fe2257de5703d6ac8bab58042bb6b44c0_prof);

        
        $__internal_e9e3ed1146186522428482907225251a9439d0fa86218ca734e95bce45f08b35->leave($__internal_e9e3ed1146186522428482907225251a9439d0fa86218ca734e95bce45f08b35_prof);

    }

    public function getTemplateName()
    {
        return "examCompany/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 86,  124 => 80,  120 => 79,  116 => 78,  113 => 77,  104 => 76,  94 => 15,  90 => 14,  86 => 13,  83 => 12,  74 => 11,  61 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
{{ include('templates/header.html.twig') }}        \t\t
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}

\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Exams
\t\t      </header>
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Exam Title</th>
\t\t              <th>Class</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          {% for examCompany in examCompanies %}
\t\t          <tr>
\t\t              <td><a href=\"{{path('record_scores', {'classId': examCompany.class.id, 'companyId': examCompany.id})}}\" >{{examCompany.cTitle}}</a></td>
\t\t              <td>{{examCompany.class}}</td>        
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Exam Company\" href=\"{{path('new_examCompany')}}\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Exam Company\" href=\"{{path('edit_examCompany', {'examCompanyId': examCompany.id})}}\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Company\" href=\"#deleteModal{{examCompany.id}}\"><i class=\"icon_close_alt2\"></i></a>
\t\t                      <a class=\"btn btn-info\" title=\"Edit Scores\" href=\"{{path('record_scores', {'classId': examCompany.class.id, 'companyId': examCompany.id})}}\"><i class=\"arrow_carrot-right_alt\"></i></a>
\t\t                  </div>
\t\t              </td>  
\t\t          </tr>
\t\t      \t  {% endfor %}
\t\t          </tbody>
\t\t      </table>
\t\t  </section>
\t\t</div>
\t\t{% for examCompany in examCompanies %}
\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal{{examCompany.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Exam {{ examCompany.cTitle }}</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"{{ path('delete_examCompany', { 'examCompanyId': examCompany.id } ) }}\" class=\"btn btn-danger\">Go Ahead</a>
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

{% endblock %}", "examCompany/list.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/examCompany/list.html.twig");
    }
}


/* examCompany/list.html.twig */
class __TwigTemplate_463329241a9315c75ff5dc694b6eb38c9ba87c72669d373ce059031bbe7872c6_831974945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "examCompany/list.html.twig", 15);
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
        $__internal_272343d32da911bcb6da6c6ea3cba7f623bc2ca1f90cf0c3b9b2eb0c067c294b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_272343d32da911bcb6da6c6ea3cba7f623bc2ca1f90cf0c3b9b2eb0c067c294b->enter($__internal_272343d32da911bcb6da6c6ea3cba7f623bc2ca1f90cf0c3b9b2eb0c067c294b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/list.html.twig"));

        $__internal_9f75ac872fa2cf210a97e2231c1e1ce861088aac039eb0e81c30a338bbbcf672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f75ac872fa2cf210a97e2231c1e1ce861088aac039eb0e81c30a338bbbcf672->enter($__internal_9f75ac872fa2cf210a97e2231c1e1ce861088aac039eb0e81c30a338bbbcf672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_272343d32da911bcb6da6c6ea3cba7f623bc2ca1f90cf0c3b9b2eb0c067c294b->leave($__internal_272343d32da911bcb6da6c6ea3cba7f623bc2ca1f90cf0c3b9b2eb0c067c294b_prof);

        
        $__internal_9f75ac872fa2cf210a97e2231c1e1ce861088aac039eb0e81c30a338bbbcf672->leave($__internal_9f75ac872fa2cf210a97e2231c1e1ce861088aac039eb0e81c30a338bbbcf672_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_d3d8acee0964594859ee2001cca385caacd7384c50ed9aa287dc28233c29a42d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d8acee0964594859ee2001cca385caacd7384c50ed9aa287dc28233c29a42d->enter($__internal_d3d8acee0964594859ee2001cca385caacd7384c50ed9aa287dc28233c29a42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9129f7e5345af6330dcb5b1487c0504adf5c39928444df4351902b86de7a95cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9129f7e5345af6330dcb5b1487c0504adf5c39928444df4351902b86de7a95cc->enter($__internal_9129f7e5345af6330dcb5b1487c0504adf5c39928444df4351902b86de7a95cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Exams
\t\t      </header>
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Exam Title</th>
\t\t              <th>Class</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["examCompanies"] ?? $this->getContext($context, "examCompanies")));
        foreach ($context['_seq'] as $context["_key"] => $context["examCompany"]) {
            // line 33
            echo "\t\t          <tr>
\t\t              <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("record_scores", array("classId" => $this->getAttribute($this->getAttribute($context["examCompany"], "class", array()), "id", array()), "companyId" => $this->getAttribute($context["examCompany"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["examCompany"], "cTitle", array()), "html", null, true);
            echo "</a></td>
\t\t              <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["examCompany"], "class", array()), "html", null, true);
            echo "</td>        
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Exam Company\" href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_examCompany");
            echo "\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Exam Company\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_examCompany", array("examCompanyId" => $this->getAttribute($context["examCompany"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Company\" href=\"#deleteModal";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["examCompany"], "id", array()), "html", null, true);
            echo "\"><i class=\"icon_close_alt2\"></i></a>
\t\t                      <a class=\"btn btn-info\" title=\"Edit Scores\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("record_scores", array("classId" => $this->getAttribute($this->getAttribute($context["examCompany"], "class", array()), "id", array()), "companyId" => $this->getAttribute($context["examCompany"], "id", array()))), "html", null, true);
            echo "\"><i class=\"arrow_carrot-right_alt\"></i></a>
\t\t                  </div>
\t\t              </td>  
\t\t          </tr>
\t\t      \t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['examCompany'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t          </tbody>
\t\t      </table>
\t\t  </section>
\t\t</div>
\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["examCompanies"] ?? $this->getContext($context, "examCompanies")));
        foreach ($context['_seq'] as $context["_key"] => $context["examCompany"]) {
            // line 51
            echo "\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["examCompany"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Exam ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["examCompany"], "cTitle", array()), "html", null, true);
            echo "</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_examCompany", array("examCompanyId" => $this->getAttribute($context["examCompany"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Go Ahead</a>
\t\t\t          </div>
\t\t\t      </div>
\t\t\t  </div>
\t\t\t</div>\t\t    
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['examCompany'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t";
        
        $__internal_9129f7e5345af6330dcb5b1487c0504adf5c39928444df4351902b86de7a95cc->leave($__internal_9129f7e5345af6330dcb5b1487c0504adf5c39928444df4351902b86de7a95cc_prof);

        
        $__internal_d3d8acee0964594859ee2001cca385caacd7384c50ed9aa287dc28233c29a42d->leave($__internal_d3d8acee0964594859ee2001cca385caacd7384c50ed9aa287dc28233c29a42d_prof);

    }

    public function getTemplateName()
    {
        return "examCompany/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 72,  408 => 66,  400 => 61,  388 => 52,  385 => 51,  381 => 50,  375 => 46,  364 => 41,  360 => 40,  356 => 39,  352 => 38,  346 => 35,  340 => 34,  337 => 33,  333 => 32,  316 => 17,  307 => 16,  278 => 15,  133 => 86,  124 => 80,  120 => 79,  116 => 78,  113 => 77,  104 => 76,  94 => 15,  90 => 14,  86 => 13,  83 => 12,  74 => 11,  61 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
{{ include('templates/header.html.twig') }}        \t\t
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}

\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Exams
\t\t      </header>
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Exam Title</th>
\t\t              <th>Class</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          {% for examCompany in examCompanies %}
\t\t          <tr>
\t\t              <td><a href=\"{{path('record_scores', {'classId': examCompany.class.id, 'companyId': examCompany.id})}}\" >{{examCompany.cTitle}}</a></td>
\t\t              <td>{{examCompany.class}}</td>        
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Exam Company\" href=\"{{path('new_examCompany')}}\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Exam Company\" href=\"{{path('edit_examCompany', {'examCompanyId': examCompany.id})}}\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Company\" href=\"#deleteModal{{examCompany.id}}\"><i class=\"icon_close_alt2\"></i></a>
\t\t                      <a class=\"btn btn-info\" title=\"Edit Scores\" href=\"{{path('record_scores', {'classId': examCompany.class.id, 'companyId': examCompany.id})}}\"><i class=\"arrow_carrot-right_alt\"></i></a>
\t\t                  </div>
\t\t              </td>  
\t\t          </tr>
\t\t      \t  {% endfor %}
\t\t          </tbody>
\t\t      </table>
\t\t  </section>
\t\t</div>
\t\t{% for examCompany in examCompanies %}
\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal{{examCompany.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Exam {{ examCompany.cTitle }}</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"{{ path('delete_examCompany', { 'examCompanyId': examCompany.id } ) }}\" class=\"btn btn-danger\">Go Ahead</a>
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

{% endblock %}", "examCompany/list.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/examCompany/list.html.twig");
    }
}
