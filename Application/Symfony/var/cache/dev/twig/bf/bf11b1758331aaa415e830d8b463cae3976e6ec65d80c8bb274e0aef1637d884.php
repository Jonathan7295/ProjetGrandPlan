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
        $__internal_31dd2e6f606a3672b1513f274db4dbe53a84c6f71308081243ecce128faee2ba = $this->env->getExtension("native_profiler");
        $__internal_31dd2e6f606a3672b1513f274db4dbe53a84c6f71308081243ecce128faee2ba->enter($__internal_31dd2e6f606a3672b1513f274db4dbe53a84c6f71308081243ecce128faee2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_31dd2e6f606a3672b1513f274db4dbe53a84c6f71308081243ecce128faee2ba->leave($__internal_31dd2e6f606a3672b1513f274db4dbe53a84c6f71308081243ecce128faee2ba_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_81ac8c629a1da32a5c1008b6eaca577fa35cf3a0ed47b93cec7e8509fe78e3d4 = $this->env->getExtension("native_profiler");
        $__internal_81ac8c629a1da32a5c1008b6eaca577fa35cf3a0ed47b93cec7e8509fe78e3d4->enter($__internal_81ac8c629a1da32a5c1008b6eaca577fa35cf3a0ed47b93cec7e8509fe78e3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_81ac8c629a1da32a5c1008b6eaca577fa35cf3a0ed47b93cec7e8509fe78e3d4->leave($__internal_81ac8c629a1da32a5c1008b6eaca577fa35cf3a0ed47b93cec7e8509fe78e3d4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5074a56e7f9741bb8a2488671731b00414ccb55f029f9c5030d1666c4d767366 = $this->env->getExtension("native_profiler");
        $__internal_5074a56e7f9741bb8a2488671731b00414ccb55f029f9c5030d1666c4d767366->enter($__internal_5074a56e7f9741bb8a2488671731b00414ccb55f029f9c5030d1666c4d767366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5074a56e7f9741bb8a2488671731b00414ccb55f029f9c5030d1666c4d767366->leave($__internal_5074a56e7f9741bb8a2488671731b00414ccb55f029f9c5030d1666c4d767366_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8d1d9d873d1d0303fbdd922ab39dca247d48c834607bbd32b49bacc9c0c16993 = $this->env->getExtension("native_profiler");
        $__internal_8d1d9d873d1d0303fbdd922ab39dca247d48c834607bbd32b49bacc9c0c16993->enter($__internal_8d1d9d873d1d0303fbdd922ab39dca247d48c834607bbd32b49bacc9c0c16993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8d1d9d873d1d0303fbdd922ab39dca247d48c834607bbd32b49bacc9c0c16993->leave($__internal_8d1d9d873d1d0303fbdd922ab39dca247d48c834607bbd32b49bacc9c0c16993_prof);

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
