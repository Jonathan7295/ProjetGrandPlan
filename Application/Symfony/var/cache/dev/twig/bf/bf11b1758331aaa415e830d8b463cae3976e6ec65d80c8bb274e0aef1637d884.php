<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_3effa3c0138ca70a7ab2f02b73fefd764eac04a7f99bfa320bfd74504423f05d extends Twig_Template
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
        $__internal_45cb32ff89f6648baa70f23deeadfcf4e3fda6bdcb36e26a95050bb792ac5d5c = $this->env->getExtension("native_profiler");
        $__internal_45cb32ff89f6648baa70f23deeadfcf4e3fda6bdcb36e26a95050bb792ac5d5c->enter($__internal_45cb32ff89f6648baa70f23deeadfcf4e3fda6bdcb36e26a95050bb792ac5d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_45cb32ff89f6648baa70f23deeadfcf4e3fda6bdcb36e26a95050bb792ac5d5c->leave($__internal_45cb32ff89f6648baa70f23deeadfcf4e3fda6bdcb36e26a95050bb792ac5d5c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a7db7df9f1b4be68304ef11595d90feaca1f3b3e31b1d4bee59df254d059c510 = $this->env->getExtension("native_profiler");
        $__internal_a7db7df9f1b4be68304ef11595d90feaca1f3b3e31b1d4bee59df254d059c510->enter($__internal_a7db7df9f1b4be68304ef11595d90feaca1f3b3e31b1d4bee59df254d059c510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a7db7df9f1b4be68304ef11595d90feaca1f3b3e31b1d4bee59df254d059c510->leave($__internal_a7db7df9f1b4be68304ef11595d90feaca1f3b3e31b1d4bee59df254d059c510_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0251c0dae3d5f8c12925f5ba434e427a066cda5d5248e6aa5baadee63bde50b9 = $this->env->getExtension("native_profiler");
        $__internal_0251c0dae3d5f8c12925f5ba434e427a066cda5d5248e6aa5baadee63bde50b9->enter($__internal_0251c0dae3d5f8c12925f5ba434e427a066cda5d5248e6aa5baadee63bde50b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0251c0dae3d5f8c12925f5ba434e427a066cda5d5248e6aa5baadee63bde50b9->leave($__internal_0251c0dae3d5f8c12925f5ba434e427a066cda5d5248e6aa5baadee63bde50b9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_73fdfe3fd36e63f0e7c57b419fab8270286756fc8224e875f2cfdc9e24472c2a = $this->env->getExtension("native_profiler");
        $__internal_73fdfe3fd36e63f0e7c57b419fab8270286756fc8224e875f2cfdc9e24472c2a->enter($__internal_73fdfe3fd36e63f0e7c57b419fab8270286756fc8224e875f2cfdc9e24472c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_73fdfe3fd36e63f0e7c57b419fab8270286756fc8224e875f2cfdc9e24472c2a->leave($__internal_73fdfe3fd36e63f0e7c57b419fab8270286756fc8224e875f2cfdc9e24472c2a_prof);

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
