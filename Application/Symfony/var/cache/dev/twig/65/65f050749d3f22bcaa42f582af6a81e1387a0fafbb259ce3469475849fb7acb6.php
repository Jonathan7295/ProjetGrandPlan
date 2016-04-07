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
        $__internal_f84a3be31999557313687ac262aab69fa1895b46839019836337af277498224b = $this->env->getExtension("native_profiler");
        $__internal_f84a3be31999557313687ac262aab69fa1895b46839019836337af277498224b->enter($__internal_f84a3be31999557313687ac262aab69fa1895b46839019836337af277498224b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/password_resetting.email.twig"));

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
        
        $__internal_f84a3be31999557313687ac262aab69fa1895b46839019836337af277498224b->leave($__internal_f84a3be31999557313687ac262aab69fa1895b46839019836337af277498224b_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8d16aaf10d65bd220ada1d142b0c7591b453b8be1c78f4164e2a5a04bd74855f = $this->env->getExtension("native_profiler");
        $__internal_8d16aaf10d65bd220ada1d142b0c7591b453b8be1c78f4164e2a5a04bd74855f->enter($__internal_8d16aaf10d65bd220ada1d142b0c7591b453b8be1c78f4164e2a5a04bd74855f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        echo "Resetting your password";
        
        $__internal_8d16aaf10d65bd220ada1d142b0c7591b453b8be1c78f4164e2a5a04bd74855f->leave($__internal_8d16aaf10d65bd220ada1d142b0c7591b453b8be1c78f4164e2a5a04bd74855f_prof);

    }

    // line 5
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e1d2ba9bcb5f8ecb0759f87ddc82cc9caa24714198680d14fc6c78bc4d4199d8 = $this->env->getExtension("native_profiler");
        $__internal_e1d2ba9bcb5f8ecb0759f87ddc82cc9caa24714198680d14fc6c78bc4d4199d8->enter($__internal_e1d2ba9bcb5f8ecb0759f87ddc82cc9caa24714198680d14fc6c78bc4d4199d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

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
        
        $__internal_e1d2ba9bcb5f8ecb0759f87ddc82cc9caa24714198680d14fc6c78bc4d4199d8->leave($__internal_e1d2ba9bcb5f8ecb0759f87ddc82cc9caa24714198680d14fc6c78bc4d4199d8_prof);

    }

    // line 16
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f0f78da1c22b339b4ace43dead06a3d515148ab066ee6e1b7ead4f5651ee703c = $this->env->getExtension("native_profiler");
        $__internal_f0f78da1c22b339b4ace43dead06a3d515148ab066ee6e1b7ead4f5651ee703c->enter($__internal_f0f78da1c22b339b4ace43dead06a3d515148ab066ee6e1b7ead4f5651ee703c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        // line 22
        $this->loadTemplate("emailpassword_resetting.html.twig", "email/password_resetting.email.twig", 22)->display($context);
        
        $__internal_f0f78da1c22b339b4ace43dead06a3d515148ab066ee6e1b7ead4f5651ee703c->leave($__internal_f0f78da1c22b339b4ace43dead06a3d515148ab066ee6e1b7ead4f5651ee703c_prof);

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
