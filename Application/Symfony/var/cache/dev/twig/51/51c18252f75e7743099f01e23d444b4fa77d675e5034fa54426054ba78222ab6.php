<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_81a4b035e24e08a4e634260dde1595312de14d2133cbea63f7ae4ff763c73b5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_505587dd956477342a216f635a5c5f56cdedbc3cfcbe28ffce6db0a51f67346f = $this->env->getExtension("native_profiler");
        $__internal_505587dd956477342a216f635a5c5f56cdedbc3cfcbe28ffce6db0a51f67346f->enter($__internal_505587dd956477342a216f635a5c5f56cdedbc3cfcbe28ffce6db0a51f67346f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_505587dd956477342a216f635a5c5f56cdedbc3cfcbe28ffce6db0a51f67346f->leave($__internal_505587dd956477342a216f635a5c5f56cdedbc3cfcbe28ffce6db0a51f67346f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a0944da191d89ef1de8534ae44a8ac86180e490d4db417f40cd2681e555c5df = $this->env->getExtension("native_profiler");
        $__internal_8a0944da191d89ef1de8534ae44a8ac86180e490d4db417f40cd2681e555c5df->enter($__internal_8a0944da191d89ef1de8534ae44a8ac86180e490d4db417f40cd2681e555c5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_8a0944da191d89ef1de8534ae44a8ac86180e490d4db417f40cd2681e555c5df->leave($__internal_8a0944da191d89ef1de8534ae44a8ac86180e490d4db417f40cd2681e555c5df_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
