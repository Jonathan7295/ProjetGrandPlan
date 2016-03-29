<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_f31f4ea473375f12fcce91e77397301ce145c25bc990f26e2ad7c13c3925282e extends Twig_Template
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
        $__internal_a1bd37600dc73d8045283a4f0204d8f743f396760a4824856ad401114cb67212 = $this->env->getExtension("native_profiler");
        $__internal_a1bd37600dc73d8045283a4f0204d8f743f396760a4824856ad401114cb67212->enter($__internal_a1bd37600dc73d8045283a4f0204d8f743f396760a4824856ad401114cb67212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a1bd37600dc73d8045283a4f0204d8f743f396760a4824856ad401114cb67212->leave($__internal_a1bd37600dc73d8045283a4f0204d8f743f396760a4824856ad401114cb67212_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_101e9b4f502e014b0a9f4966f095cb8c493be22d30af6bcdf47d299fbf450618 = $this->env->getExtension("native_profiler");
        $__internal_101e9b4f502e014b0a9f4966f095cb8c493be22d30af6bcdf47d299fbf450618->enter($__internal_101e9b4f502e014b0a9f4966f095cb8c493be22d30af6bcdf47d299fbf450618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_101e9b4f502e014b0a9f4966f095cb8c493be22d30af6bcdf47d299fbf450618->leave($__internal_101e9b4f502e014b0a9f4966f095cb8c493be22d30af6bcdf47d299fbf450618_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_39fecde04f1a99a5337fa791c174e6ceb7a142db954585ab8517370835a8dd96 = $this->env->getExtension("native_profiler");
        $__internal_39fecde04f1a99a5337fa791c174e6ceb7a142db954585ab8517370835a8dd96->enter($__internal_39fecde04f1a99a5337fa791c174e6ceb7a142db954585ab8517370835a8dd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_39fecde04f1a99a5337fa791c174e6ceb7a142db954585ab8517370835a8dd96->leave($__internal_39fecde04f1a99a5337fa791c174e6ceb7a142db954585ab8517370835a8dd96_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_15b93e638d11b6b740a17f4ed8c94e260131124497b4b0aa1b40e175f5e17219 = $this->env->getExtension("native_profiler");
        $__internal_15b93e638d11b6b740a17f4ed8c94e260131124497b4b0aa1b40e175f5e17219->enter($__internal_15b93e638d11b6b740a17f4ed8c94e260131124497b4b0aa1b40e175f5e17219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_15b93e638d11b6b740a17f4ed8c94e260131124497b4b0aa1b40e175f5e17219->leave($__internal_15b93e638d11b6b740a17f4ed8c94e260131124497b4b0aa1b40e175f5e17219_prof);

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
