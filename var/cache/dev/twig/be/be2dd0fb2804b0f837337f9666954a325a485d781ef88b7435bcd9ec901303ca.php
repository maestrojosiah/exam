<?php

/* class/list.html.twig */
class __TwigTemplate_e2262c059dddb67389ed2417080509db6858852b0c8f6d30e47e3fc10ccd5eba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "class/list.html.twig", 1);
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
        $__internal_9121ec7e13b05617f96c0564082299be787d4077c97cfabf46c5c0c177f22ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9121ec7e13b05617f96c0564082299be787d4077c97cfabf46c5c0c177f22ba9->enter($__internal_9121ec7e13b05617f96c0564082299be787d4077c97cfabf46c5c0c177f22ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/list.html.twig"));

        $__internal_038832a13cc510bbd44a0c0a3e5bb214ccd91892216998fb2f623de589768751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038832a13cc510bbd44a0c0a3e5bb214ccd91892216998fb2f623de589768751->enter($__internal_038832a13cc510bbd44a0c0a3e5bb214ccd91892216998fb2f623de589768751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9121ec7e13b05617f96c0564082299be787d4077c97cfabf46c5c0c177f22ba9->leave($__internal_9121ec7e13b05617f96c0564082299be787d4077c97cfabf46c5c0c177f22ba9_prof);

        
        $__internal_038832a13cc510bbd44a0c0a3e5bb214ccd91892216998fb2f623de589768751->leave($__internal_038832a13cc510bbd44a0c0a3e5bb214ccd91892216998fb2f623de589768751_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef85c7d009b8cc5b8be0f681aeeee559ecf9cb660c7da485ad31c53d1b04bfcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef85c7d009b8cc5b8be0f681aeeee559ecf9cb660c7da485ad31c53d1b04bfcc->enter($__internal_ef85c7d009b8cc5b8be0f681aeeee559ecf9cb660c7da485ad31c53d1b04bfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3202ba9a20f5e57e1fed67cccaef040593d0167ce84dec10b5e71dfa0b2bcae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3202ba9a20f5e57e1fed67cccaef040593d0167ce84dec10b5e71dfa0b2bcae0->enter($__internal_3202ba9a20f5e57e1fed67cccaef040593d0167ce84dec10b5e71dfa0b2bcae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3202ba9a20f5e57e1fed67cccaef040593d0167ce84dec10b5e71dfa0b2bcae0->leave($__internal_3202ba9a20f5e57e1fed67cccaef040593d0167ce84dec10b5e71dfa0b2bcae0_prof);

        
        $__internal_ef85c7d009b8cc5b8be0f681aeeee559ecf9cb660c7da485ad31c53d1b04bfcc->leave($__internal_ef85c7d009b8cc5b8be0f681aeeee559ecf9cb660c7da485ad31c53d1b04bfcc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_34e4c906d0514482f7fc018e6507c322b7645580993cee3b9fb14822ff32cfa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e4c906d0514482f7fc018e6507c322b7645580993cee3b9fb14822ff32cfa5->enter($__internal_34e4c906d0514482f7fc018e6507c322b7645580993cee3b9fb14822ff32cfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae29eff18a236443c57df647fc7be5be95034999151f1450775e55944f973264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae29eff18a236443c57df647fc7be5be95034999151f1450775e55944f973264->enter($__internal_ae29eff18a236443c57df647fc7be5be95034999151f1450775e55944f973264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<body>
";
        // line 13
        echo twig_include($this->env, $context, "templates/header.html.twig");
        echo "
";
        // line 14
        echo twig_include($this->env, $context, "templates/aside.html.twig");
        echo "        \t\t
";
        // line 15
        $this->loadTemplate("class/list.html.twig", "class/list.html.twig", 15, "1753873071")->display($context);
        
        $__internal_ae29eff18a236443c57df647fc7be5be95034999151f1450775e55944f973264->leave($__internal_ae29eff18a236443c57df647fc7be5be95034999151f1450775e55944f973264_prof);

        
        $__internal_34e4c906d0514482f7fc018e6507c322b7645580993cee3b9fb14822ff32cfa5->leave($__internal_34e4c906d0514482f7fc018e6507c322b7645580993cee3b9fb14822ff32cfa5_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e3c93a1231f8622202b7299ccd68ca7fcb9536b5f4f385d8e09b266c0631854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3c93a1231f8622202b7299ccd68ca7fcb9536b5f4f385d8e09b266c0631854->enter($__internal_9e3c93a1231f8622202b7299ccd68ca7fcb9536b5f4f385d8e09b266c0631854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8661f207dba636484f8844cd4e4a5d67b44499e1eff2faa7b9045400e62bfee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8661f207dba636484f8844cd4e4a5d67b44499e1eff2faa7b9045400e62bfee8->enter($__internal_8661f207dba636484f8844cd4e4a5d67b44499e1eff2faa7b9045400e62bfee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-plugins/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-responsive/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>

    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true,
            \"pageLength\": ";
        // line 103
        echo twig_escape_filter($this->env, ($context["entriesPerPage"] ?? $this->getContext($context, "entriesPerPage")), "html", null, true);
        echo "
            
        });
    });
    </script>

";
        
        $__internal_8661f207dba636484f8844cd4e4a5d67b44499e1eff2faa7b9045400e62bfee8->leave($__internal_8661f207dba636484f8844cd4e4a5d67b44499e1eff2faa7b9045400e62bfee8_prof);

        
        $__internal_9e3c93a1231f8622202b7299ccd68ca7fcb9536b5f4f385d8e09b266c0631854->leave($__internal_9e3c93a1231f8622202b7299ccd68ca7fcb9536b5f4f385d8e09b266c0631854_prof);

    }

    public function getTemplateName()
    {
        return "class/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 103,  124 => 97,  120 => 96,  116 => 95,  113 => 94,  104 => 93,  94 => 15,  90 => 14,  86 => 13,  83 => 12,  74 => 11,  61 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}

\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Classes
\t\t      </header>
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Class Title</th>
\t\t              <th>Class Teacher</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          {% for class in classes %}
\t\t          <tr>
\t\t              <td><a href=\"{{path('class_profile', {'classId': class.id})}}\">{{class.cTitle}}</a></td>
\t\t              <td>{{class.classTeacher}}</td>
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Class\" href=\"{{path('new_class')}}\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Class\" href=\"{{path('edit_class', {'classId': class.id})}}\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Class\" href=\"#deleteModal{{class.id}}\"><i class=\"icon_close_alt2\"></i></a>
\t\t                      <a class=\"btn btn-info\" title=\"View Progress\" href=\"{{path('class_profile', {'classId': class.id})}}\"><i class=\"arrow_carrot-right_alt\"></i></a>
\t\t                  </div>
\t\t              </td>          
\t\t          </tr>
\t\t      \t  {% endfor %}
\t\t          </tbody>
\t\t      </table>
\t\t  </section>
\t\t</div>
\t\t{% for class in classes %}
\t\t    <!-- Modal -->
\t\t    <div class=\"modal fade\" id=\"\" role=\"dialog\">
\t\t        <div class=\"modal-dialog modal-sm\">
\t\t          <div class=\"modal-content\">
\t\t            <div class=\"modal-header\">
\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t            </div>
\t\t            <div class=\"modal-body\">
\t\t              
\t\t            </div>
\t\t            <div class=\"modal-footer\">
\t\t              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t              
\t\t            </div>
\t\t          </div>
\t\t        </div>
\t\t    </div>
\t\t\t<div class=\"modal fade\" id=\"deleteModal{{class.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Class {{ class.cTitle }}[{{class.classTeacher}}].</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"{{ path('delete_class', { 'classId': class.id } ) }}\" class=\"btn btn-danger\">Go Ahead</a>
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

{% endblock %}", "class/list.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/class/list.html.twig");
    }
}


/* class/list.html.twig */
class __TwigTemplate_e2262c059dddb67389ed2417080509db6858852b0c8f6d30e47e3fc10ccd5eba_1753873071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "class/list.html.twig", 15);
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
        $__internal_d9b09021cbc87bc70778ae506e12913002db9aaaf66be5180323fffa7e798c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b09021cbc87bc70778ae506e12913002db9aaaf66be5180323fffa7e798c67->enter($__internal_d9b09021cbc87bc70778ae506e12913002db9aaaf66be5180323fffa7e798c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/list.html.twig"));

        $__internal_3f0f533f9951c589e9b5142b6aa13d9103023bac1e2ff8a1d29895ee8efe227f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0f533f9951c589e9b5142b6aa13d9103023bac1e2ff8a1d29895ee8efe227f->enter($__internal_3f0f533f9951c589e9b5142b6aa13d9103023bac1e2ff8a1d29895ee8efe227f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "class/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9b09021cbc87bc70778ae506e12913002db9aaaf66be5180323fffa7e798c67->leave($__internal_d9b09021cbc87bc70778ae506e12913002db9aaaf66be5180323fffa7e798c67_prof);

        
        $__internal_3f0f533f9951c589e9b5142b6aa13d9103023bac1e2ff8a1d29895ee8efe227f->leave($__internal_3f0f533f9951c589e9b5142b6aa13d9103023bac1e2ff8a1d29895ee8efe227f_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_4ba411bff89ee7779972f2fc97a0e38766e4f8d094fb167bc84e25bd31894e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba411bff89ee7779972f2fc97a0e38766e4f8d094fb167bc84e25bd31894e48->enter($__internal_4ba411bff89ee7779972f2fc97a0e38766e4f8d094fb167bc84e25bd31894e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_caf17a3b880928a18e0e6df91cca5ed942de56375ca8763e088ab555e5288b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf17a3b880928a18e0e6df91cca5ed942de56375ca8763e088ab555e5288b75->enter($__internal_caf17a3b880928a18e0e6df91cca5ed942de56375ca8763e088ab555e5288b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Classes
\t\t      </header>
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Class Title</th>
\t\t              <th>Class Teacher</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classes"] ?? $this->getContext($context, "classes")));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 33
            echo "\t\t          <tr>
\t\t              <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_profile", array("classId" => $this->getAttribute($context["class"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "cTitle", array()), "html", null, true);
            echo "</a></td>
\t\t              <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "classTeacher", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Class\" href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_class");
            echo "\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Class\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_class", array("classId" => $this->getAttribute($context["class"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Class\" href=\"#deleteModal";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "id", array()), "html", null, true);
            echo "\"><i class=\"icon_close_alt2\"></i></a>
\t\t                      <a class=\"btn btn-info\" title=\"View Progress\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_profile", array("classId" => $this->getAttribute($context["class"], "id", array()))), "html", null, true);
            echo "\"><i class=\"arrow_carrot-right_alt\"></i></a>
\t\t                  </div>
\t\t              </td>          
\t\t          </tr>
\t\t      \t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t          </tbody>
\t\t      </table>
\t\t  </section>
\t\t</div>
\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classes"] ?? $this->getContext($context, "classes")));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 51
            echo "\t\t    <!-- Modal -->
\t\t    <div class=\"modal fade\" id=\"\" role=\"dialog\">
\t\t        <div class=\"modal-dialog modal-sm\">
\t\t          <div class=\"modal-content\">
\t\t            <div class=\"modal-header\">
\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t            </div>
\t\t            <div class=\"modal-body\">
\t\t              
\t\t            </div>
\t\t            <div class=\"modal-footer\">
\t\t              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t              
\t\t            </div>
\t\t          </div>
\t\t        </div>
\t\t    </div>
\t\t\t<div class=\"modal fade\" id=\"deleteModal";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Class ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "cTitle", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "classTeacher", array()), "html", null, true);
            echo "].</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_class", array("classId" => $this->getAttribute($context["class"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Go Ahead</a>
\t\t\t          </div>
\t\t\t      </div>
\t\t\t  </div>
\t\t\t</div>\t\t    
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "\t";
        
        $__internal_caf17a3b880928a18e0e6df91cca5ed942de56375ca8763e088ab555e5288b75->leave($__internal_caf17a3b880928a18e0e6df91cca5ed942de56375ca8763e088ab555e5288b75_prof);

        
        $__internal_4ba411bff89ee7779972f2fc97a0e38766e4f8d094fb167bc84e25bd31894e48->leave($__internal_4ba411bff89ee7779972f2fc97a0e38766e4f8d094fb167bc84e25bd31894e48_prof);

    }

    public function getTemplateName()
    {
        return "class/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 89,  444 => 83,  434 => 78,  422 => 69,  402 => 51,  398 => 50,  392 => 46,  381 => 41,  377 => 40,  373 => 39,  369 => 38,  363 => 35,  357 => 34,  354 => 33,  350 => 32,  333 => 17,  324 => 16,  295 => 15,  133 => 103,  124 => 97,  120 => 96,  116 => 95,  113 => 94,  104 => 93,  94 => 15,  90 => 14,  86 => 13,  83 => 12,  74 => 11,  61 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}

\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Classes
\t\t      </header>
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Class Title</th>
\t\t              <th>Class Teacher</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          {% for class in classes %}
\t\t          <tr>
\t\t              <td><a href=\"{{path('class_profile', {'classId': class.id})}}\">{{class.cTitle}}</a></td>
\t\t              <td>{{class.classTeacher}}</td>
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Class\" href=\"{{path('new_class')}}\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Class\" href=\"{{path('edit_class', {'classId': class.id})}}\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Class\" href=\"#deleteModal{{class.id}}\"><i class=\"icon_close_alt2\"></i></a>
\t\t                      <a class=\"btn btn-info\" title=\"View Progress\" href=\"{{path('class_profile', {'classId': class.id})}}\"><i class=\"arrow_carrot-right_alt\"></i></a>
\t\t                  </div>
\t\t              </td>          
\t\t          </tr>
\t\t      \t  {% endfor %}
\t\t          </tbody>
\t\t      </table>
\t\t  </section>
\t\t</div>
\t\t{% for class in classes %}
\t\t    <!-- Modal -->
\t\t    <div class=\"modal fade\" id=\"\" role=\"dialog\">
\t\t        <div class=\"modal-dialog modal-sm\">
\t\t          <div class=\"modal-content\">
\t\t            <div class=\"modal-header\">
\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t            </div>
\t\t            <div class=\"modal-body\">
\t\t              
\t\t            </div>
\t\t            <div class=\"modal-footer\">
\t\t              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t              
\t\t            </div>
\t\t          </div>
\t\t        </div>
\t\t    </div>
\t\t\t<div class=\"modal fade\" id=\"deleteModal{{class.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Class {{ class.cTitle }}[{{class.classTeacher}}].</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"{{ path('delete_class', { 'classId': class.id } ) }}\" class=\"btn btn-danger\">Go Ahead</a>
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

{% endblock %}", "class/list.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/class/list.html.twig");
    }
}
