<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_7b59d0b99e9a30b5580ee558d5e32a628b43101ecd9d0c52680e56721705e3ae extends Twig_Template
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
        $__internal_dfcd24d2c37b78359cceee79f0004e50d9afd5acdf1cf2682bc59c42debc0358 = $this->env->getExtension("native_profiler");
        $__internal_dfcd24d2c37b78359cceee79f0004e50d9afd5acdf1cf2682bc59c42debc0358->enter($__internal_dfcd24d2c37b78359cceee79f0004e50d9afd5acdf1cf2682bc59c42debc0358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dfcd24d2c37b78359cceee79f0004e50d9afd5acdf1cf2682bc59c42debc0358->leave($__internal_dfcd24d2c37b78359cceee79f0004e50d9afd5acdf1cf2682bc59c42debc0358_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c660b06a88bdae7b5aaa06138fc21cfe7abcc9c37f42b2a35c30d9508b3b2fc7 = $this->env->getExtension("native_profiler");
        $__internal_c660b06a88bdae7b5aaa06138fc21cfe7abcc9c37f42b2a35c30d9508b3b2fc7->enter($__internal_c660b06a88bdae7b5aaa06138fc21cfe7abcc9c37f42b2a35c30d9508b3b2fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c660b06a88bdae7b5aaa06138fc21cfe7abcc9c37f42b2a35c30d9508b3b2fc7->leave($__internal_c660b06a88bdae7b5aaa06138fc21cfe7abcc9c37f42b2a35c30d9508b3b2fc7_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c1e43e60b4e0d611076b00522ab9ec7defab926e6ff053d4c70958c202ffe224 = $this->env->getExtension("native_profiler");
        $__internal_c1e43e60b4e0d611076b00522ab9ec7defab926e6ff053d4c70958c202ffe224->enter($__internal_c1e43e60b4e0d611076b00522ab9ec7defab926e6ff053d4c70958c202ffe224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c1e43e60b4e0d611076b00522ab9ec7defab926e6ff053d4c70958c202ffe224->leave($__internal_c1e43e60b4e0d611076b00522ab9ec7defab926e6ff053d4c70958c202ffe224_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d35ce3b5902c99c1485574022791374b599107520c32189db91e0953fb45ab75 = $this->env->getExtension("native_profiler");
        $__internal_d35ce3b5902c99c1485574022791374b599107520c32189db91e0953fb45ab75->enter($__internal_d35ce3b5902c99c1485574022791374b599107520c32189db91e0953fb45ab75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d35ce3b5902c99c1485574022791374b599107520c32189db91e0953fb45ab75->leave($__internal_d35ce3b5902c99c1485574022791374b599107520c32189db91e0953fb45ab75_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
