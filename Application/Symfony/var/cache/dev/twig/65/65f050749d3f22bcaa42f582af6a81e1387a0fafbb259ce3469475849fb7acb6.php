<?php

/* email/password_resetting.email.twig */
class __TwigTemplate_f00f136a1dbec9917c4ad9472e6977e43b5a831873f7a0afe04022b8393b3e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01e34d183d0436513952c04f75927f7678285bb8bfdce82e336c1d5724e3a101 = $this->env->getExtension("native_profiler");
        $__internal_01e34d183d0436513952c04f75927f7678285bb8bfdce82e336c1d5724e3a101->enter($__internal_01e34d183d0436513952c04f75927f7678285bb8bfdce82e336c1d5724e3a101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/password_resetting.email.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body_text', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_01e34d183d0436513952c04f75927f7678285bb8bfdce82e336c1d5724e3a101->leave($__internal_01e34d183d0436513952c04f75927f7678285bb8bfdce82e336c1d5724e3a101_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_78986dd9cba70de38a8e4aa13ae58bab28d7c569bddd7db8f9042f7d434f7258 = $this->env->getExtension("native_profiler");
        $__internal_78986dd9cba70de38a8e4aa13ae58bab28d7c569bddd7db8f9042f7d434f7258->enter($__internal_78986dd9cba70de38a8e4aa13ae58bab28d7c569bddd7db8f9042f7d434f7258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        echo "Resetting your password";
        
        $__internal_78986dd9cba70de38a8e4aa13ae58bab28d7c569bddd7db8f9042f7d434f7258->leave($__internal_78986dd9cba70de38a8e4aa13ae58bab28d7c569bddd7db8f9042f7d434f7258_prof);

    }

    // line 5
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cb8fdc1ee4a8f15c26479d0e3742e1f10fffa3819e73506c282b666e6d019db1 = $this->env->getExtension("native_profiler");
        $__internal_cb8fdc1ee4a8f15c26479d0e3742e1f10fffa3819e73506c282b666e6d019db1->enter($__internal_cb8fdc1ee4a8f15c26479d0e3742e1f10fffa3819e73506c282b666e6d019db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 7
        echo "Hello ";
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array());
        echo " !

You can reset your password by accessing ";
        // line 9
        echo (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"));
        echo "

Greetings,
the App team
";
        
        $__internal_cb8fdc1ee4a8f15c26479d0e3742e1f10fffa3819e73506c282b666e6d019db1->leave($__internal_cb8fdc1ee4a8f15c26479d0e3742e1f10fffa3819e73506c282b666e6d019db1_prof);

    }

    // line 16
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e89461ada07818110b4337609d8fbec0c2fa75f45857e7f63fa00e856aa16f22 = $this->env->getExtension("native_profiler");
        $__internal_e89461ada07818110b4337609d8fbec0c2fa75f45857e7f63fa00e856aa16f22->enter($__internal_e89461ada07818110b4337609d8fbec0c2fa75f45857e7f63fa00e856aa16f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        // line 22
        $this->loadTemplate("emailpassword_resetting.html.twig", "email/password_resetting.email.twig", 22)->display($context);
        
        $__internal_e89461ada07818110b4337609d8fbec0c2fa75f45857e7f63fa00e856aa16f22->leave($__internal_e89461ada07818110b4337609d8fbec0c2fa75f45857e7f63fa00e856aa16f22_prof);

    }

    public function getTemplateName()
    {
        return "email/password_resetting.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  81 => 16,  69 => 9,  63 => 7,  57 => 5,  45 => 3,  38 => 16,  35 => 15,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }
}
/* {# app/Resources/views/email/password_resetting.email.twig #}*/
/* */
/* {% block subject %}Resetting your password{% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* Hello {{ user.username }} !*/
/* */
/* You can reset your password by accessing {{ confirmationUrl }}*/
/* */
/* Greetings,*/
/* the App team*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_html %}*/
/* {#*/
/*     You can of course render the html directly here.*/
/*     Including a template as done here allows keeping things DRY by using*/
/*     the template inheritance in it*/
/* #}*/
/* {% include 'email\password_resetting.html.twig' %}*/
/* {% endblock %}*/
