<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_119e8a974fd495a34443193205e747a8dee7afa024333af0c2744dcb997a76dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_04290f6345192b0dc31a0d11038835dce1154e20c394b7e65b52ba5e67ee2cce = $this->env->getExtension("native_profiler");
        $__internal_04290f6345192b0dc31a0d11038835dce1154e20c394b7e65b52ba5e67ee2cce->enter($__internal_04290f6345192b0dc31a0d11038835dce1154e20c394b7e65b52ba5e67ee2cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04290f6345192b0dc31a0d11038835dce1154e20c394b7e65b52ba5e67ee2cce->leave($__internal_04290f6345192b0dc31a0d11038835dce1154e20c394b7e65b52ba5e67ee2cce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e182fc67e619f6957f9ec98616bac93be8a5616fa1b721bdc43d6e88004e8607 = $this->env->getExtension("native_profiler");
        $__internal_e182fc67e619f6957f9ec98616bac93be8a5616fa1b721bdc43d6e88004e8607->enter($__internal_e182fc67e619f6957f9ec98616bac93be8a5616fa1b721bdc43d6e88004e8607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_e182fc67e619f6957f9ec98616bac93be8a5616fa1b721bdc43d6e88004e8607->leave($__internal_e182fc67e619f6957f9ec98616bac93be8a5616fa1b721bdc43d6e88004e8607_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
