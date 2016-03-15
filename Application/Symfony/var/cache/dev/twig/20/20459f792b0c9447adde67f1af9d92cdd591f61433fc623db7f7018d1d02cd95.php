<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_90590d0b9253a6ab9aee3fef7e5a385a30e5264f508e1c0311900556b151971c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_fec7d1952f50154d6293f1c6625c4596423ebed3e358a04e0033571e1f382dc0 = $this->env->getExtension("native_profiler");
        $__internal_fec7d1952f50154d6293f1c6625c4596423ebed3e358a04e0033571e1f382dc0->enter($__internal_fec7d1952f50154d6293f1c6625c4596423ebed3e358a04e0033571e1f382dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fec7d1952f50154d6293f1c6625c4596423ebed3e358a04e0033571e1f382dc0->leave($__internal_fec7d1952f50154d6293f1c6625c4596423ebed3e358a04e0033571e1f382dc0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0ad10265b665ee7c5c09ffaadfed1a3a1a9ce7083c808d28ee549eb88fe82c9 = $this->env->getExtension("native_profiler");
        $__internal_e0ad10265b665ee7c5c09ffaadfed1a3a1a9ce7083c808d28ee549eb88fe82c9->enter($__internal_e0ad10265b665ee7c5c09ffaadfed1a3a1a9ce7083c808d28ee549eb88fe82c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e0ad10265b665ee7c5c09ffaadfed1a3a1a9ce7083c808d28ee549eb88fe82c9->leave($__internal_e0ad10265b665ee7c5c09ffaadfed1a3a1a9ce7083c808d28ee549eb88fe82c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
