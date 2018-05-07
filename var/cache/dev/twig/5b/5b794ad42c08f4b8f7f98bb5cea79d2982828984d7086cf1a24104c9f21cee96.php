<?php

/* childSubject/list.html.twig */
class __TwigTemplate_c1e5d9f3c7e1647e7a20e740a5121cf02dfe8eaa68788007f06f225a01bd184c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "childSubject/list.html.twig", 1);
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
        $__internal_27d6a26cf80937dba6e67c44499c55a9e02becdcce6788d979ddc69c4d9124af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d6a26cf80937dba6e67c44499c55a9e02becdcce6788d979ddc69c4d9124af->enter($__internal_27d6a26cf80937dba6e67c44499c55a9e02becdcce6788d979ddc69c4d9124af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childSubject/list.html.twig"));

        $__internal_9608001a5047922b4d6738b8bee6b3a380699979208b39364a78e0e59c137d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9608001a5047922b4d6738b8bee6b3a380699979208b39364a78e0e59c137d61->enter($__internal_9608001a5047922b4d6738b8bee6b3a380699979208b39364a78e0e59c137d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childSubject/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27d6a26cf80937dba6e67c44499c55a9e02becdcce6788d979ddc69c4d9124af->leave($__internal_27d6a26cf80937dba6e67c44499c55a9e02becdcce6788d979ddc69c4d9124af_prof);

        
        $__internal_9608001a5047922b4d6738b8bee6b3a380699979208b39364a78e0e59c137d61->leave($__internal_9608001a5047922b4d6738b8bee6b3a380699979208b39364a78e0e59c137d61_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_80396567926abcd7a8ea8cfae9773472e7114bfa9f9a03da4e144a691ceec4c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80396567926abcd7a8ea8cfae9773472e7114bfa9f9a03da4e144a691ceec4c2->enter($__internal_80396567926abcd7a8ea8cfae9773472e7114bfa9f9a03da4e144a691ceec4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2e4d2a1f814761081c1594a274a7a89d218b94bf87de6640edbbe89973970c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4d2a1f814761081c1594a274a7a89d218b94bf87de6640edbbe89973970c81->enter($__internal_2e4d2a1f814761081c1594a274a7a89d218b94bf87de6640edbbe89973970c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2e4d2a1f814761081c1594a274a7a89d218b94bf87de6640edbbe89973970c81->leave($__internal_2e4d2a1f814761081c1594a274a7a89d218b94bf87de6640edbbe89973970c81_prof);

        
        $__internal_80396567926abcd7a8ea8cfae9773472e7114bfa9f9a03da4e144a691ceec4c2->leave($__internal_80396567926abcd7a8ea8cfae9773472e7114bfa9f9a03da4e144a691ceec4c2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6ffc9fd2dd57440166e73010c61b25d96c79cb1fe8734647fe181ca3ca841e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ffc9fd2dd57440166e73010c61b25d96c79cb1fe8734647fe181ca3ca841e4->enter($__internal_e6ffc9fd2dd57440166e73010c61b25d96c79cb1fe8734647fe181ca3ca841e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b334a8e95d8ce29ced7e0506202f84c60d19e2e35797da7813c7a404e4b0a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b334a8e95d8ce29ced7e0506202f84c60d19e2e35797da7813c7a404e4b0a86->enter($__internal_3b334a8e95d8ce29ced7e0506202f84c60d19e2e35797da7813c7a404e4b0a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("childSubject/list.html.twig", "childSubject/list.html.twig", 15, "1424612225")->display($context);
        
        $__internal_3b334a8e95d8ce29ced7e0506202f84c60d19e2e35797da7813c7a404e4b0a86->leave($__internal_3b334a8e95d8ce29ced7e0506202f84c60d19e2e35797da7813c7a404e4b0a86_prof);

        
        $__internal_e6ffc9fd2dd57440166e73010c61b25d96c79cb1fe8734647fe181ca3ca841e4->leave($__internal_e6ffc9fd2dd57440166e73010c61b25d96c79cb1fe8734647fe181ca3ca841e4_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c2ad302741ccbcc8f472143ca6a509f49b9d96f856277bf714481f38b563c1e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ad302741ccbcc8f472143ca6a509f49b9d96f856277bf714481f38b563c1e2->enter($__internal_c2ad302741ccbcc8f472143ca6a509f49b9d96f856277bf714481f38b563c1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e0f9306403a0001d7fbd8ad063df77258f81015311f1c8ea9d97c2f1fcca83cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f9306403a0001d7fbd8ad063df77258f81015311f1c8ea9d97c2f1fcca83cb->enter($__internal_e0f9306403a0001d7fbd8ad063df77258f81015311f1c8ea9d97c2f1fcca83cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-plugins/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-responsive/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>

    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true,
            \"pageLength\": ";
        // line 87
        echo twig_escape_filter($this->env, ($context["entriesPerPage"] ?? $this->getContext($context, "entriesPerPage")), "html", null, true);
        echo "
            
        });
    });
    </script>

";
        
        $__internal_e0f9306403a0001d7fbd8ad063df77258f81015311f1c8ea9d97c2f1fcca83cb->leave($__internal_e0f9306403a0001d7fbd8ad063df77258f81015311f1c8ea9d97c2f1fcca83cb_prof);

        
        $__internal_c2ad302741ccbcc8f472143ca6a509f49b9d96f856277bf714481f38b563c1e2->leave($__internal_c2ad302741ccbcc8f472143ca6a509f49b9d96f856277bf714481f38b563c1e2_prof);

    }

    public function getTemplateName()
    {
        return "childSubject/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 87,  124 => 81,  120 => 80,  116 => 79,  113 => 78,  104 => 77,  94 => 15,  90 => 14,  86 => 13,  83 => 12,  74 => 11,  61 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
\t\t          Child Subjects
\t\t      </header>
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Child Subject Title</th>
\t\t              <th>Marked Out Of:</th>
\t\t              <th>Parent Subject</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          {% for childSubject in childSubjects %}
\t\t          <tr>
\t\t              <td>{{childSubject.cSTitle}}</td>
\t\t              <td>{{childSubject.outOf}}</td>
\t\t              <td>{{childSubject.subject}}</td>
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add ChildSubject\" href=\"{{path('new_childSubject')}}\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit ChildSubject\" href=\"{{path('edit_childSubject', {'childSubjectId': childSubject.id})}}\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete ChildSubject\" href=\"#deleteModal{{childSubject.id}}\"><i class=\"icon_close_alt2\"></i></a>
\t\t                  </div>
\t\t              </td>  
\t\t          </tr>
\t\t      \t  {% endfor %}
\t\t          </tbody>
\t\t      </table>
\t\t  </section>
\t\t</div>
\t\t{% for childSubject in childSubjects %}
\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal{{childSubject.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete ChildSubject {{ childSubject.cSTitle }}</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"{{ path('delete_childSubject', { 'childSubjectId': childSubject.id } ) }}\" class=\"btn btn-danger\">Go Ahead</a>
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

{% endblock %}", "childSubject/list.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/childSubject/list.html.twig");
    }
}


/* childSubject/list.html.twig */
class __TwigTemplate_c1e5d9f3c7e1647e7a20e740a5121cf02dfe8eaa68788007f06f225a01bd184c_1424612225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "childSubject/list.html.twig", 15);
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
        $__internal_442c2d90012b4e0aa2ac710542b1319df2e2d6ca4ba63d11c589c41bc2d6bc55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442c2d90012b4e0aa2ac710542b1319df2e2d6ca4ba63d11c589c41bc2d6bc55->enter($__internal_442c2d90012b4e0aa2ac710542b1319df2e2d6ca4ba63d11c589c41bc2d6bc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childSubject/list.html.twig"));

        $__internal_d5800c692cc8f527e410eeeb87cecffcb851f69ef4c9c3fbfcb08ce288046431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5800c692cc8f527e410eeeb87cecffcb851f69ef4c9c3fbfcb08ce288046431->enter($__internal_d5800c692cc8f527e410eeeb87cecffcb851f69ef4c9c3fbfcb08ce288046431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childSubject/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_442c2d90012b4e0aa2ac710542b1319df2e2d6ca4ba63d11c589c41bc2d6bc55->leave($__internal_442c2d90012b4e0aa2ac710542b1319df2e2d6ca4ba63d11c589c41bc2d6bc55_prof);

        
        $__internal_d5800c692cc8f527e410eeeb87cecffcb851f69ef4c9c3fbfcb08ce288046431->leave($__internal_d5800c692cc8f527e410eeeb87cecffcb851f69ef4c9c3fbfcb08ce288046431_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_d84c634c853724573d9fec59cb43eefef9ca137da8f5ca8c08bdc3a0d484efe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84c634c853724573d9fec59cb43eefef9ca137da8f5ca8c08bdc3a0d484efe4->enter($__internal_d84c634c853724573d9fec59cb43eefef9ca137da8f5ca8c08bdc3a0d484efe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bd6ac27c45943cf2721e8c7aeb337c6dfd5371b7054b642102db1bf312fc1c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6ac27c45943cf2721e8c7aeb337c6dfd5371b7054b642102db1bf312fc1c90->enter($__internal_bd6ac27c45943cf2721e8c7aeb337c6dfd5371b7054b642102db1bf312fc1c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Child Subjects
\t\t      </header>
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Child Subject Title</th>
\t\t              <th>Marked Out Of:</th>
\t\t              <th>Parent Subject</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childSubjects"] ?? $this->getContext($context, "childSubjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["childSubject"]) {
            // line 34
            echo "\t\t          <tr>
\t\t              <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["childSubject"], "cSTitle", array()), "html", null, true);
            echo "</td>
\t\t              <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["childSubject"], "outOf", array()), "html", null, true);
            echo "</td>
\t\t              <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["childSubject"], "subject", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add ChildSubject\" href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_childSubject");
            echo "\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit ChildSubject\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_childSubject", array("childSubjectId" => $this->getAttribute($context["childSubject"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete ChildSubject\" href=\"#deleteModal";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["childSubject"], "id", array()), "html", null, true);
            echo "\"><i class=\"icon_close_alt2\"></i></a>
\t\t                  </div>
\t\t              </td>  
\t\t          </tr>
\t\t      \t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childSubject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t          </tbody>
\t\t      </table>
\t\t  </section>
\t\t</div>
\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childSubjects"] ?? $this->getContext($context, "childSubjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["childSubject"]) {
            // line 52
            echo "\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["childSubject"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete ChildSubject ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["childSubject"], "cSTitle", array()), "html", null, true);
            echo "</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_childSubject", array("childSubjectId" => $this->getAttribute($context["childSubject"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Go Ahead</a>
\t\t\t          </div>
\t\t\t      </div>
\t\t\t  </div>
\t\t\t</div>\t\t    
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childSubject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t";
        
        $__internal_bd6ac27c45943cf2721e8c7aeb337c6dfd5371b7054b642102db1bf312fc1c90->leave($__internal_bd6ac27c45943cf2721e8c7aeb337c6dfd5371b7054b642102db1bf312fc1c90_prof);

        
        $__internal_d84c634c853724573d9fec59cb43eefef9ca137da8f5ca8c08bdc3a0d484efe4->leave($__internal_d84c634c853724573d9fec59cb43eefef9ca137da8f5ca8c08bdc3a0d484efe4_prof);

    }

    public function getTemplateName()
    {
        return "childSubject/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 73,  408 => 67,  400 => 62,  388 => 53,  385 => 52,  381 => 51,  375 => 47,  364 => 42,  360 => 41,  356 => 40,  350 => 37,  346 => 36,  342 => 35,  339 => 34,  335 => 33,  317 => 17,  308 => 16,  279 => 15,  133 => 87,  124 => 81,  120 => 80,  116 => 79,  113 => 78,  104 => 77,  94 => 15,  90 => 14,  86 => 13,  83 => 12,  74 => 11,  61 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
\t\t          Child Subjects
\t\t      </header>
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Child Subject Title</th>
\t\t              <th>Marked Out Of:</th>
\t\t              <th>Parent Subject</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          {% for childSubject in childSubjects %}
\t\t          <tr>
\t\t              <td>{{childSubject.cSTitle}}</td>
\t\t              <td>{{childSubject.outOf}}</td>
\t\t              <td>{{childSubject.subject}}</td>
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add ChildSubject\" href=\"{{path('new_childSubject')}}\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit ChildSubject\" href=\"{{path('edit_childSubject', {'childSubjectId': childSubject.id})}}\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete ChildSubject\" href=\"#deleteModal{{childSubject.id}}\"><i class=\"icon_close_alt2\"></i></a>
\t\t                  </div>
\t\t              </td>  
\t\t          </tr>
\t\t      \t  {% endfor %}
\t\t          </tbody>
\t\t      </table>
\t\t  </section>
\t\t</div>
\t\t{% for childSubject in childSubjects %}
\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal{{childSubject.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete ChildSubject {{ childSubject.cSTitle }}</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"{{ path('delete_childSubject', { 'childSubjectId': childSubject.id } ) }}\" class=\"btn btn-danger\">Go Ahead</a>
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

{% endblock %}", "childSubject/list.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/childSubject/list.html.twig");
    }
}
