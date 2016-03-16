<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_0b6ac8234c201b352eca54490845e433d082f3dce35e422b992e75d8be32c3c8 extends Twig_Template
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
        $__internal_fb6e7280636b55d3cf5aba7516063bb46d2832d2634add2c6cbc6fbcd2a6ebd6 = $this->env->getExtension("native_profiler");
        $__internal_fb6e7280636b55d3cf5aba7516063bb46d2832d2634add2c6cbc6fbcd2a6ebd6->enter($__internal_fb6e7280636b55d3cf5aba7516063bb46d2832d2634add2c6cbc6fbcd2a6ebd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fb6e7280636b55d3cf5aba7516063bb46d2832d2634add2c6cbc6fbcd2a6ebd6->leave($__internal_fb6e7280636b55d3cf5aba7516063bb46d2832d2634add2c6cbc6fbcd2a6ebd6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b7ad854299ef64c889e4b35709a562a8d4e847efacd2d368c2746edf4c0a2477 = $this->env->getExtension("native_profiler");
        $__internal_b7ad854299ef64c889e4b35709a562a8d4e847efacd2d368c2746edf4c0a2477->enter($__internal_b7ad854299ef64c889e4b35709a562a8d4e847efacd2d368c2746edf4c0a2477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b7ad854299ef64c889e4b35709a562a8d4e847efacd2d368c2746edf4c0a2477->leave($__internal_b7ad854299ef64c889e4b35709a562a8d4e847efacd2d368c2746edf4c0a2477_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_58646e851fca862e9f573cc0919d95d31c47725770fad5f708ad1ac6b020a80e = $this->env->getExtension("native_profiler");
        $__internal_58646e851fca862e9f573cc0919d95d31c47725770fad5f708ad1ac6b020a80e->enter($__internal_58646e851fca862e9f573cc0919d95d31c47725770fad5f708ad1ac6b020a80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_58646e851fca862e9f573cc0919d95d31c47725770fad5f708ad1ac6b020a80e->leave($__internal_58646e851fca862e9f573cc0919d95d31c47725770fad5f708ad1ac6b020a80e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bbbd7159cb52a1949547adc343ddd79147aa165e776c79d8477abf5ea1cd26eb = $this->env->getExtension("native_profiler");
        $__internal_bbbd7159cb52a1949547adc343ddd79147aa165e776c79d8477abf5ea1cd26eb->enter($__internal_bbbd7159cb52a1949547adc343ddd79147aa165e776c79d8477abf5ea1cd26eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bbbd7159cb52a1949547adc343ddd79147aa165e776c79d8477abf5ea1cd26eb->leave($__internal_bbbd7159cb52a1949547adc343ddd79147aa165e776c79d8477abf5ea1cd26eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
