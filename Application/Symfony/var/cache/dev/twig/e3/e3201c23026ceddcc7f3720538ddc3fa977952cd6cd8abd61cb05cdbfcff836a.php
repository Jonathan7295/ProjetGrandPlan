<?php

/* :email:password_resetting.email.twig */
class __TwigTemplate_1755c3fb853b5e2e80298f3f0b04a9883b0dd3acdd8b034af9e04427e1a3f358 extends Twig_Template
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
        $__internal_df73c7cbe6edfa62fa2083ce11d7472c38ec54e1c8f5f89e270b39be9bb62537 = $this->env->getExtension("native_profiler");
        $__internal_df73c7cbe6edfa62fa2083ce11d7472c38ec54e1c8f5f89e270b39be9bb62537->enter($__internal_df73c7cbe6edfa62fa2083ce11d7472c38ec54e1c8f5f89e270b39be9bb62537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:password_resetting.email.twig"));

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
        
        $__internal_df73c7cbe6edfa62fa2083ce11d7472c38ec54e1c8f5f89e270b39be9bb62537->leave($__internal_df73c7cbe6edfa62fa2083ce11d7472c38ec54e1c8f5f89e270b39be9bb62537_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cf744d7c80303de250b96229032807ecef4e44c440f9b49d2ef7747751acc589 = $this->env->getExtension("native_profiler");
        $__internal_cf744d7c80303de250b96229032807ecef4e44c440f9b49d2ef7747751acc589->enter($__internal_cf744d7c80303de250b96229032807ecef4e44c440f9b49d2ef7747751acc589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        echo "Resetting your password";
        
        $__internal_cf744d7c80303de250b96229032807ecef4e44c440f9b49d2ef7747751acc589->leave($__internal_cf744d7c80303de250b96229032807ecef4e44c440f9b49d2ef7747751acc589_prof);

    }

    // line 5
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_50995dfb158e76d937d6d16c1d61769e56727ffa54d57b6dcc8c968d8f8f27ea = $this->env->getExtension("native_profiler");
        $__internal_50995dfb158e76d937d6d16c1d61769e56727ffa54d57b6dcc8c968d8f8f27ea->enter($__internal_50995dfb158e76d937d6d16c1d61769e56727ffa54d57b6dcc8c968d8f8f27ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

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
        
        $__internal_50995dfb158e76d937d6d16c1d61769e56727ffa54d57b6dcc8c968d8f8f27ea->leave($__internal_50995dfb158e76d937d6d16c1d61769e56727ffa54d57b6dcc8c968d8f8f27ea_prof);

    }

    // line 16
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f90f04279010275c450f87184d6480605982960da441cb07bfe372c80b384c07 = $this->env->getExtension("native_profiler");
        $__internal_f90f04279010275c450f87184d6480605982960da441cb07bfe372c80b384c07->enter($__internal_f90f04279010275c450f87184d6480605982960da441cb07bfe372c80b384c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        // line 22
        $this->loadTemplate("emailpassword_resetting.html.twig", ":email:password_resetting.email.twig", 22)->display($context);
        
        $__internal_f90f04279010275c450f87184d6480605982960da441cb07bfe372c80b384c07->leave($__internal_f90f04279010275c450f87184d6480605982960da441cb07bfe372c80b384c07_prof);

    }

    public function getTemplateName()
    {
        return ":email:password_resetting.email.twig";
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
