<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_bba0786ff7af5c69aba6f908ef08368bb872528c133a9d0d8ec70726fc017a36 extends Twig_Template
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
        $__internal_30405a0b0d005fdee40d04f3fedf230092a106810fccd87b8c7619a3a12a114e = $this->env->getExtension("native_profiler");
        $__internal_30405a0b0d005fdee40d04f3fedf230092a106810fccd87b8c7619a3a12a114e->enter($__internal_30405a0b0d005fdee40d04f3fedf230092a106810fccd87b8c7619a3a12a114e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_30405a0b0d005fdee40d04f3fedf230092a106810fccd87b8c7619a3a12a114e->leave($__internal_30405a0b0d005fdee40d04f3fedf230092a106810fccd87b8c7619a3a12a114e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ed5a5af27bdf94241fa8e6ed56c8840691a893eafa791dff2cf8a57d64176193 = $this->env->getExtension("native_profiler");
        $__internal_ed5a5af27bdf94241fa8e6ed56c8840691a893eafa791dff2cf8a57d64176193->enter($__internal_ed5a5af27bdf94241fa8e6ed56c8840691a893eafa791dff2cf8a57d64176193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_ed5a5af27bdf94241fa8e6ed56c8840691a893eafa791dff2cf8a57d64176193->leave($__internal_ed5a5af27bdf94241fa8e6ed56c8840691a893eafa791dff2cf8a57d64176193_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e5cd58498adc6c63209e8929bd995d17d30ac9243656d5521903b8703a6f3d8d = $this->env->getExtension("native_profiler");
        $__internal_e5cd58498adc6c63209e8929bd995d17d30ac9243656d5521903b8703a6f3d8d->enter($__internal_e5cd58498adc6c63209e8929bd995d17d30ac9243656d5521903b8703a6f3d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e5cd58498adc6c63209e8929bd995d17d30ac9243656d5521903b8703a6f3d8d->leave($__internal_e5cd58498adc6c63209e8929bd995d17d30ac9243656d5521903b8703a6f3d8d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_857b21d860ee04e91104df140c702d148739d9e3b06c9e4e07f175be84feac1f = $this->env->getExtension("native_profiler");
        $__internal_857b21d860ee04e91104df140c702d148739d9e3b06c9e4e07f175be84feac1f->enter($__internal_857b21d860ee04e91104df140c702d148739d9e3b06c9e4e07f175be84feac1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_857b21d860ee04e91104df140c702d148739d9e3b06c9e4e07f175be84feac1f->leave($__internal_857b21d860ee04e91104df140c702d148739d9e3b06c9e4e07f175be84feac1f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
