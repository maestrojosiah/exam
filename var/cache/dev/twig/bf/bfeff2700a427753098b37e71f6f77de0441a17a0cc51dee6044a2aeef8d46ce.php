<?php

/* registration/register.html.twig */
class __TwigTemplate_066966a67fafbc5173d8a184c351d41797ff1e453eb6d75bc7b7c7e1abbf041c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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
        $__internal_73d925caac644ba3f0fe7fbad80a99d41fa0bad6ee08b0302131f0ccd4fb1c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d925caac644ba3f0fe7fbad80a99d41fa0bad6ee08b0302131f0ccd4fb1c2c->enter($__internal_73d925caac644ba3f0fe7fbad80a99d41fa0bad6ee08b0302131f0ccd4fb1c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_d35ad1538899deed28f7bbba8ca9c83208f47202f3a7fea7f8105c1d2a7cef03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35ad1538899deed28f7bbba8ca9c83208f47202f3a7fea7f8105c1d2a7cef03->enter($__internal_d35ad1538899deed28f7bbba8ca9c83208f47202f3a7fea7f8105c1d2a7cef03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73d925caac644ba3f0fe7fbad80a99d41fa0bad6ee08b0302131f0ccd4fb1c2c->leave($__internal_73d925caac644ba3f0fe7fbad80a99d41fa0bad6ee08b0302131f0ccd4fb1c2c_prof);

        
        $__internal_d35ad1538899deed28f7bbba8ca9c83208f47202f3a7fea7f8105c1d2a7cef03->leave($__internal_d35ad1538899deed28f7bbba8ca9c83208f47202f3a7fea7f8105c1d2a7cef03_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cd56e92c59a4d170a4812532c0a89b44e2f4bfc778a502925530067dcd96af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd56e92c59a4d170a4812532c0a89b44e2f4bfc778a502925530067dcd96af9->enter($__internal_4cd56e92c59a4d170a4812532c0a89b44e2f4bfc778a502925530067dcd96af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8189d6a0867a09e6bfa33c8c422b172b4a782e79346652959975fadf8329ee33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8189d6a0867a09e6bfa33c8c422b172b4a782e79346652959975fadf8329ee33->enter($__internal_8189d6a0867a09e6bfa33c8c422b172b4a782e79346652959975fadf8329ee33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <body class=\"login-img3-body\">

    <div class=\"container\">

      ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "login-form")));
        echo "       
        <div class=\"login-wrap\">
            <p class=\"login-img\"><i class=\"arrow_carrot-right_alt \"></i></p>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_comment\"></i></span>
              ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "f_name", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "First Name", "id" => "firstname")));
        echo "
            </div>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_comment\"></i></span>
              ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "l_name", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Last Name", "id" => "lastname")));
        echo "
            </div>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_profile\"></i></span>
              ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Username", "id" => "username")));
        echo "
            </div>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_mail\"></i></span>
              ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Email", "id" => "email")));
        echo "
            </div>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"icon_key_alt\"></i></span>
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control", "id" => "password", "placeholder" => "Password")));
        echo "
            </div>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"icon_key_alt\"></i></span>
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control", "id" => "passwrdrepeat", "placeholder" => "Repeat Password")));
        echo "
            </div>
            <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Signup</button>
            <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\"btn btn-info btn-lg btn-block\" >Log In</a>
        </div>
      ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>



\t\t
";
        
        $__internal_8189d6a0867a09e6bfa33c8c422b172b4a782e79346652959975fadf8329ee33->leave($__internal_8189d6a0867a09e6bfa33c8c422b172b4a782e79346652959975fadf8329ee33_prof);

        
        $__internal_4cd56e92c59a4d170a4812532c0a89b44e2f4bfc778a502925530067dcd96af9->leave($__internal_4cd56e92c59a4d170a4812532c0a89b44e2f4bfc778a502925530067dcd96af9_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 37,  104 => 35,  98 => 32,  91 => 28,  84 => 24,  77 => 20,  70 => 16,  63 => 12,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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

      {{ form_start(form, {'attr': {'class': 'login-form'}}) }}       
        <div class=\"login-wrap\">
            <p class=\"login-img\"><i class=\"arrow_carrot-right_alt \"></i></p>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_comment\"></i></span>
              {{ form_row(form.f_name, {'attr': {'class': 'form-control', 'placeholder': 'First Name', 'id': 'firstname' }}) }}
            </div>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_comment\"></i></span>
              {{ form_row(form.l_name, {'attr': {'class': 'form-control', 'placeholder': 'Last Name', 'id': 'lastname' }}) }}
            </div>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_profile\"></i></span>
              {{ form_row(form.username, {'attr': {'class': 'form-control', 'placeholder': 'Username', 'id': 'username' }}) }}
            </div>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_mail\"></i></span>
              {{ form_row(form.email, {'attr': {'class': 'form-control', 'placeholder': 'Email', 'id': 'email' }}) }}
            </div>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"icon_key_alt\"></i></span>
                {{ form_row(form.plainPassword.first, {'attr': {'class': 'form-control', 'id': 'password', 'placeholder': 'Password' }}) }}
            </div>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"icon_key_alt\"></i></span>
                {{ form_row(form.plainPassword.second, {'attr': {'class': 'form-control', 'id': 'passwrdrepeat', 'placeholder': 'Repeat Password' }}) }}
            </div>
            <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Signup</button>
            <a href=\"{{path('login')}}\" class=\"btn btn-info btn-lg btn-block\" >Log In</a>
        </div>
      {{ form_end(form) }}

    </div>



\t\t
{% endblock %}", "registration/register.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/registration/register.html.twig");
    }
}
