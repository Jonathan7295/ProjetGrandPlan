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
        $__internal_c85c2a6d77e69ee7bdb91ab31c05591fff59f4c9c96ed539d53d8e6638ea3bde = $this->env->getExtension("native_profiler");
        $__internal_c85c2a6d77e69ee7bdb91ab31c05591fff59f4c9c96ed539d53d8e6638ea3bde->enter($__internal_c85c2a6d77e69ee7bdb91ab31c05591fff59f4c9c96ed539d53d8e6638ea3bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c85c2a6d77e69ee7bdb91ab31c05591fff59f4c9c96ed539d53d8e6638ea3bde->leave($__internal_c85c2a6d77e69ee7bdb91ab31c05591fff59f4c9c96ed539d53d8e6638ea3bde_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2c18e8f1b4232c99867a9e71dbcc589873fc51204b62193ca6cc5b00f6c0175c = $this->env->getExtension("native_profiler");
        $__internal_2c18e8f1b4232c99867a9e71dbcc589873fc51204b62193ca6cc5b00f6c0175c->enter($__internal_2c18e8f1b4232c99867a9e71dbcc589873fc51204b62193ca6cc5b00f6c0175c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2c18e8f1b4232c99867a9e71dbcc589873fc51204b62193ca6cc5b00f6c0175c->leave($__internal_2c18e8f1b4232c99867a9e71dbcc589873fc51204b62193ca6cc5b00f6c0175c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_887641ddb4e125c8cf3ff847c534643f2ed9b3e15cfb666a4b882ef2dbb33fbd = $this->env->getExtension("native_profiler");
        $__internal_887641ddb4e125c8cf3ff847c534643f2ed9b3e15cfb666a4b882ef2dbb33fbd->enter($__internal_887641ddb4e125c8cf3ff847c534643f2ed9b3e15cfb666a4b882ef2dbb33fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_887641ddb4e125c8cf3ff847c534643f2ed9b3e15cfb666a4b882ef2dbb33fbd->leave($__internal_887641ddb4e125c8cf3ff847c534643f2ed9b3e15cfb666a4b882ef2dbb33fbd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ae461c3dbf0f1152a540baf7e3efaf10776abf9b2222a1ca12b44cbd6ba51976 = $this->env->getExtension("native_profiler");
        $__internal_ae461c3dbf0f1152a540baf7e3efaf10776abf9b2222a1ca12b44cbd6ba51976->enter($__internal_ae461c3dbf0f1152a540baf7e3efaf10776abf9b2222a1ca12b44cbd6ba51976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ae461c3dbf0f1152a540baf7e3efaf10776abf9b2222a1ca12b44cbd6ba51976->leave($__internal_ae461c3dbf0f1152a540baf7e3efaf10776abf9b2222a1ca12b44cbd6ba51976_prof);

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
