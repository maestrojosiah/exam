<?php

/* security/login.html.twig */
class __TwigTemplate_383eb61239205fa570e69e2ae2b9e6285f59c20d8f9fb62c1c5fad76d197d069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_efbdd277a338aece88d0932492e0dd03ca6982ee06c9e3118d78b2acd18fee93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efbdd277a338aece88d0932492e0dd03ca6982ee06c9e3118d78b2acd18fee93->enter($__internal_efbdd277a338aece88d0932492e0dd03ca6982ee06c9e3118d78b2acd18fee93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_326217a57e7223495d74c994ce7f11e61e81b93da7947e607bfd3cd2ef64fca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326217a57e7223495d74c994ce7f11e61e81b93da7947e607bfd3cd2ef64fca5->enter($__internal_326217a57e7223495d74c994ce7f11e61e81b93da7947e607bfd3cd2ef64fca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efbdd277a338aece88d0932492e0dd03ca6982ee06c9e3118d78b2acd18fee93->leave($__internal_efbdd277a338aece88d0932492e0dd03ca6982ee06c9e3118d78b2acd18fee93_prof);

        
        $__internal_326217a57e7223495d74c994ce7f11e61e81b93da7947e607bfd3cd2ef64fca5->leave($__internal_326217a57e7223495d74c994ce7f11e61e81b93da7947e607bfd3cd2ef64fca5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c9402dbef10be4eb167b379eb40ec6d4095fbc5a8baa95e3da94946c0a0caaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9402dbef10be4eb167b379eb40ec6d4095fbc5a8baa95e3da94946c0a0caaf->enter($__internal_2c9402dbef10be4eb167b379eb40ec6d4095fbc5a8baa95e3da94946c0a0caaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_552c0e7cba014c7f009ae32dbaa9f381fd1993fc9e63a51fe244cf5048bc91a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552c0e7cba014c7f009ae32dbaa9f381fd1993fc9e63a51fe244cf5048bc91a0->enter($__internal_552c0e7cba014c7f009ae32dbaa9f381fd1993fc9e63a51fe244cf5048bc91a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <body class=\"login-img3-body\">

    <div class=\"container\">

      <form class=\"login-form\" method=\"post\" action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">        
        ";
        // line 8
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 9
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
        ";
        }
        // line 11
        echo "        <div class=\"login-wrap\">
            <p class=\"login-img\"><i class=\"icon_lock_alt\"></i></p>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_profile\"></i></span>
              <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"Username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" >
            </div>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"icon_key_alt\"></i></span>
                <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\">
            </div>
            <label class=\"checkbox\">
                <input type=\"checkbox\" name=\"_remember_me\" value=\"remember-me\"> Remember me
                <span class=\"pull-right\"> <a href=\"#\"> Forgot Password?</a></span>
            </label>
            <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Login</button>
            <a class=\"btn btn-info btn-lg btn-block\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
        echo "\">Signup</a>
        </div>
      </form>

    </div>


  </body>

";
        
        $__internal_552c0e7cba014c7f009ae32dbaa9f381fd1993fc9e63a51fe244cf5048bc91a0->leave($__internal_552c0e7cba014c7f009ae32dbaa9f381fd1993fc9e63a51fe244cf5048bc91a0_prof);

        
        $__internal_2c9402dbef10be4eb167b379eb40ec6d4095fbc5a8baa95e3da94946c0a0caaf->leave($__internal_2c9402dbef10be4eb167b379eb40ec6d4095fbc5a8baa95e3da94946c0a0caaf_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  73 => 15,  67 => 11,  61 => 9,  59 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
  <body class=\"login-img3-body\">

    <div class=\"container\">

      <form class=\"login-form\" method=\"post\" action=\"{{ path('login') }}\">        
        {% if error %}
          {{ error.messageKey|trans(error.messageData, 'security') }}
        {% endif %}
        <div class=\"login-wrap\">
            <p class=\"login-img\"><i class=\"icon_lock_alt\"></i></p>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_profile\"></i></span>
              <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"Username\" value=\"{{ last_username }}\" >
            </div>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"icon_key_alt\"></i></span>
                <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\">
            </div>
            <label class=\"checkbox\">
                <input type=\"checkbox\" name=\"_remember_me\" value=\"remember-me\"> Remember me
                <span class=\"pull-right\"> <a href=\"#\"> Forgot Password?</a></span>
            </label>
            <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Login</button>
            <a class=\"btn btn-info btn-lg btn-block\" href=\"{{ path('user_registration') }}\">Signup</a>
        </div>
      </form>

    </div>


  </body>

{% endblock %}
", "security/login.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/security/login.html.twig");
    }
}
