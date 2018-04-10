<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bf78ca270961bbc553f0e145789e60abd28ab4142363c14241e6e43a396241a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf78ca270961bbc553f0e145789e60abd28ab4142363c14241e6e43a396241a->enter($__internal_1bf78ca270961bbc553f0e145789e60abd28ab4142363c14241e6e43a396241a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_35746aff5ec4be63c493b6408735a04c2c70fb6135419f1505ea2181cd7a599b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35746aff5ec4be63c493b6408735a04c2c70fb6135419f1505ea2181cd7a599b->enter($__internal_35746aff5ec4be63c493b6408735a04c2c70fb6135419f1505ea2181cd7a599b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
\t    <meta charset=\"utf-8\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t    <meta name=\"description\" content=\"Karmanta - Bootstrap 3 Responsive Admin Template\">
\t    <meta name=\"author\" content=\"GeeksLabs\">
\t    <meta name=\"keyword\" content=\"Exam Pro System\">
\t    ";
        // line 10
        echo "
\t    <title>Exam Pro</title>

\t    <!-- Bootstrap CSS -->    
\t    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t    <!-- bootstrap theme -->
\t    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t    <!--external css-->
\t    <!-- font icon -->
\t    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/elegant-icons-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />    
\t    <!-- full calendar css-->
\t    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t    <!-- easy pie chart-->
\t    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
\t    <!-- owl carousel -->
\t    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\" type=\"text/css\">
\t    <!-- notiny CSS -->
\t    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("notiny/notiny.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t    <!-- Custom styles -->
\t    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

\t    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
\t    <!--[if lt IE 9]>
\t      <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/html5shiv.js"), "html", null, true);
        echo "\"></script>
\t      <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "\"></script>
\t      <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lte-ie7.js"), "html", null, true);
        echo "\"></script>
\t    <![endif]-->    \t
\t    ";
        // line 39
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 40
        echo "    </head>
\t";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "configs", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "configs", array())))) {
            // line 43
            echo "    \t";
            $context["entriesPerPage"] = $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "configs", array())), "resultsPerPage", array());
            // line 44
            echo "    ";
        } else {
            // line 45
            echo "    \t";
            $context["entriesPerPage"] = 10;
            // line 46
            echo "    ";
        }
        // line 47
        echo "    <!-- javascripts -->
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap -->
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- nice scroll -->
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- charts scripts -->
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jquery-knob/js/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sparkline.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.js"), "html", null, true);
        echo "\" ></script>
    <!-- jQuery full calendar -->
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fullcalendar/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <!--script for this page only-->
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/calendar-custom.js"), "html", null, true);
        echo "\"></script>
    <!-- custom select -->
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>
    <!--custome script for all page-->
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    <!-- custom script for this page-->
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sparkline-chart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easy-pie-chart.js"), "html", null, true);
        echo "\"></script>
    <!-- Notification javascript - notiny -->
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("notiny/notiny.min.js"), "html", null, true);
        echo "\"></script>
\t  <script>

\t      //knob
\t      \$(function() {
\t        \$(\".knob\").knob({
\t          'draw' : function () { 
\t            \$(this.i).val(this.cv + '%')
\t          }
\t        })
\t      });

\t      //carousel
\t      \$(document).ready(function() {
\t          \$(\"#owl-slider\").owlCarousel({
\t              navigation : true,
\t              slideSpeed : 300,
\t              paginationSpeed : 400,
\t              singleItem : true

\t          });
\t      });

\t      //custom select box

\t      \$(function(){
\t          \$('select.styled').customSelect();
\t      });

\t  </script>
\t  
    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 105
            echo "        <script type=\"text/javascript\">
            \$.notiny({ text: '";
            // line 106
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "',  position: 'left-top' });
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 111
            echo "        <script type=\"text/javascript\">
            \$.notiny({ text: '";
            // line 112
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "',  position: 'left-top' });
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "
  </body>
</html>
";
        
        $__internal_1bf78ca270961bbc553f0e145789e60abd28ab4142363c14241e6e43a396241a->leave($__internal_1bf78ca270961bbc553f0e145789e60abd28ab4142363c14241e6e43a396241a_prof);

        
        $__internal_35746aff5ec4be63c493b6408735a04c2c70fb6135419f1505ea2181cd7a599b->leave($__internal_35746aff5ec4be63c493b6408735a04c2c70fb6135419f1505ea2181cd7a599b_prof);

    }

    // line 39
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4778c75140308c11ff997d18a7657ba56cf310a8edba84d006c245ed6dd7f692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4778c75140308c11ff997d18a7657ba56cf310a8edba84d006c245ed6dd7f692->enter($__internal_4778c75140308c11ff997d18a7657ba56cf310a8edba84d006c245ed6dd7f692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0eab1d5d087a4651e12b935e9f054c3dc363d1c782e38a19af4ae4dbefd09ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eab1d5d087a4651e12b935e9f054c3dc363d1c782e38a19af4ae4dbefd09ee0->enter($__internal_0eab1d5d087a4651e12b935e9f054c3dc363d1c782e38a19af4ae4dbefd09ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0eab1d5d087a4651e12b935e9f054c3dc363d1c782e38a19af4ae4dbefd09ee0->leave($__internal_0eab1d5d087a4651e12b935e9f054c3dc363d1c782e38a19af4ae4dbefd09ee0_prof);

        
        $__internal_4778c75140308c11ff997d18a7657ba56cf310a8edba84d006c245ed6dd7f692->leave($__internal_4778c75140308c11ff997d18a7657ba56cf310a8edba84d006c245ed6dd7f692_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9ff3fe810fdf7e67d0f0fa74f11b7bfc316fe3fc3b6591f3e1b738fd20d0c66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ff3fe810fdf7e67d0f0fa74f11b7bfc316fe3fc3b6591f3e1b738fd20d0c66->enter($__internal_c9ff3fe810fdf7e67d0f0fa74f11b7bfc316fe3fc3b6591f3e1b738fd20d0c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01035642ebdb5189f413ae5924c1fc5457e00e5c690f9861e7d9d0260ac37de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01035642ebdb5189f413ae5924c1fc5457e00e5c690f9861e7d9d0260ac37de9->enter($__internal_01035642ebdb5189f413ae5924c1fc5457e00e5c690f9861e7d9d0260ac37de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_01035642ebdb5189f413ae5924c1fc5457e00e5c690f9861e7d9d0260ac37de9->leave($__internal_01035642ebdb5189f413ae5924c1fc5457e00e5c690f9861e7d9d0260ac37de9_prof);

        
        $__internal_c9ff3fe810fdf7e67d0f0fa74f11b7bfc316fe3fc3b6591f3e1b738fd20d0c66->leave($__internal_c9ff3fe810fdf7e67d0f0fa74f11b7bfc316fe3fc3b6591f3e1b738fd20d0c66_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6fd424c6b04d8f406e74cd8aaadd8318c36279de138783da3e9144876694769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fd424c6b04d8f406e74cd8aaadd8318c36279de138783da3e9144876694769->enter($__internal_a6fd424c6b04d8f406e74cd8aaadd8318c36279de138783da3e9144876694769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2bd51fcb472fd2f346b856b0a468a67c3b129183c62cf90d5d2b7ceaa3538896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd51fcb472fd2f346b856b0a468a67c3b129183c62cf90d5d2b7ceaa3538896->enter($__internal_2bd51fcb472fd2f346b856b0a468a67c3b129183c62cf90d5d2b7ceaa3538896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2bd51fcb472fd2f346b856b0a468a67c3b129183c62cf90d5d2b7ceaa3538896->leave($__internal_2bd51fcb472fd2f346b856b0a468a67c3b129183c62cf90d5d2b7ceaa3538896_prof);

        
        $__internal_a6fd424c6b04d8f406e74cd8aaadd8318c36279de138783da3e9144876694769->leave($__internal_a6fd424c6b04d8f406e74cd8aaadd8318c36279de138783da3e9144876694769_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 115,  308 => 41,  291 => 39,  278 => 116,  275 => 115,  266 => 112,  263 => 111,  259 => 110,  256 => 109,  247 => 106,  244 => 105,  240 => 104,  206 => 73,  201 => 71,  197 => 70,  192 => 68,  187 => 66,  182 => 64,  177 => 62,  172 => 60,  168 => 59,  164 => 58,  160 => 57,  155 => 55,  151 => 54,  146 => 52,  141 => 50,  137 => 49,  133 => 48,  130 => 47,  127 => 46,  124 => 45,  121 => 44,  118 => 43,  115 => 42,  113 => 41,  110 => 40,  108 => 39,  103 => 37,  99 => 36,  95 => 35,  88 => 31,  84 => 30,  79 => 28,  74 => 26,  69 => 24,  64 => 22,  59 => 20,  55 => 19,  49 => 16,  44 => 14,  38 => 10,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
\t    <meta charset=\"utf-8\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t    <meta name=\"description\" content=\"Karmanta - Bootstrap 3 Responsive Admin Template\">
\t    <meta name=\"author\" content=\"GeeksLabs\">
\t    <meta name=\"keyword\" content=\"Exam Pro System\">
\t    {# <link rel=\"shortcut icon\" href=\"{{asset('img/favicon.png\"> #}

\t    <title>Exam Pro</title>

\t    <!-- Bootstrap CSS -->    
\t    <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">
\t    <!-- bootstrap theme -->
\t    <link href=\"{{asset('css/bootstrap-theme.css')}}\" rel=\"stylesheet\">
\t    <!--external css-->
\t    <!-- font icon -->
\t    <link href=\"{{asset('css/elegant-icons-style.css')}}\" rel=\"stylesheet\" />
\t    <link href=\"{{asset('assets/font-awesome/css/font-awesome.css')}}\" rel=\"stylesheet\" />    
\t    <!-- full calendar css-->
\t    <link href=\"{{asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}\" rel=\"stylesheet\" />
\t    <!-- easy pie chart-->
\t    <link href=\"{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
\t    <!-- owl carousel -->
\t    <link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.css')}}\" type=\"text/css\">
\t    <!-- notiny CSS -->
\t    <link href=\"{{ asset('notiny/notiny.min.css') }}\" rel=\"stylesheet\">
\t    <!-- Custom styles -->
\t    <link href=\"{{asset('css/style.css')}}\" rel=\"stylesheet\">
\t    <link href=\"{{asset('css/style-responsive.css')}}\" rel=\"stylesheet\" />

\t    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
\t    <!--[if lt IE 9]>
\t      <script src=\"{{asset('js/html5shiv.js')}}\"></script>
\t      <script src=\"{{asset('js/respond.min.js')}}\"></script>
\t      <script src=\"{{asset('js/lte-ie7.js')}}\"></script>
\t    <![endif]-->    \t
\t    {% block stylesheets %}{% endblock %}
    </head>
\t{% block body %}{% endblock %}
\t{% if app.user.configs is defined and app.user.configs is not empty %}
    \t{% set entriesPerPage = app.user.configs|first.resultsPerPage %}
    {% else %}
    \t{% set entriesPerPage = 10 %}
    {% endif %}
    <!-- javascripts -->
    <script src=\"{{asset('js/jquery.js')}}\"></script>
    <script src=\"{{asset('js/jquery-1.8.3.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/jquery-ui-1.9.2.custom.min.js')}}\"></script>
    <!-- bootstrap -->
    <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
    <!-- nice scroll -->
    <script src=\"{{asset('js/jquery.scrollTo.min.js')}}\"></script>
    <script src=\"{{asset('js/jquery.nicescroll.js')}}\" type=\"text/javascript\"></script>
    <!-- charts scripts -->
    <script src=\"{{asset('assets/jquery-knob/js/jquery.knob.js')}}\"></script>
    <script src=\"{{asset('js/jquery.sparkline.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}\"></script>
    <script src=\"{{asset('js/owl.carousel.js')}}\" ></script>
    <!-- jQuery full calendar -->
    <script src=\"{{asset('assets/fullcalendar/fullcalendar/fullcalendar.min.js')}}\"></script>
    <!--script for this page only-->
    <script src=\"{{asset('js/calendar-custom.js')}}\"></script>
    <!-- custom select -->
    <script src=\"{{asset('js/jquery.customSelect.min.js')}}\" ></script>
    <!--custome script for all page-->
    <script src=\"{{asset('js/scripts.js')}}\"></script>
    <!-- custom script for this page-->
    <script src=\"{{asset('js/sparkline-chart.js')}}\"></script>
    <script src=\"{{asset('js/easy-pie-chart.js')}}\"></script>
    <!-- Notification javascript - notiny -->
    <script src=\"{{ asset('notiny/notiny.min.js') }}\"></script>
\t  <script>

\t      //knob
\t      \$(function() {
\t        \$(\".knob\").knob({
\t          'draw' : function () { 
\t            \$(this.i).val(this.cv + '%')
\t          }
\t        })
\t      });

\t      //carousel
\t      \$(document).ready(function() {
\t          \$(\"#owl-slider\").owlCarousel({
\t              navigation : true,
\t              slideSpeed : 300,
\t              paginationSpeed : 400,
\t              singleItem : true

\t          });
\t      });

\t      //custom select box

\t      \$(function(){
\t          \$('select.styled').customSelect();
\t      });

\t  </script>
\t  
    {% for message in app.flashes('success') %}
        <script type=\"text/javascript\">
            \$.notiny({ text: '{{ message }}',  position: 'left-top' });
        </script>
    {% endfor %}

    {% for message in app.flashes('error') %}
        <script type=\"text/javascript\">
            \$.notiny({ text: '{{ message }}',  position: 'left-top' });
        </script>
    {% endfor %}
\t{% block javascripts %}{% endblock %}

  </body>
</html>
", "base.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/base.html.twig");
    }
}
