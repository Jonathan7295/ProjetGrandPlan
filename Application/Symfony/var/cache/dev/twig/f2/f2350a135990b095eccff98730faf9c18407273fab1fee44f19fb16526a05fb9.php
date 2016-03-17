<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_b9f4a34966368503c5e49bfd03fd62cb8277924725a4be2685237eff9af23285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_323f399e264b9b6432f9a99311698364671868d555252a47e90d4d2f3e783308 = $this->env->getExtension("native_profiler");
        $__internal_323f399e264b9b6432f9a99311698364671868d555252a47e90d4d2f3e783308->enter($__internal_323f399e264b9b6432f9a99311698364671868d555252a47e90d4d2f3e783308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_323f399e264b9b6432f9a99311698364671868d555252a47e90d4d2f3e783308->leave($__internal_323f399e264b9b6432f9a99311698364671868d555252a47e90d4d2f3e783308_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c10818d6f40bb3179b55c83c5df9696ba6bdc39e537c98c3690adc9d261a2b6 = $this->env->getExtension("native_profiler");
        $__internal_5c10818d6f40bb3179b55c83c5df9696ba6bdc39e537c98c3690adc9d261a2b6->enter($__internal_5c10818d6f40bb3179b55c83c5df9696ba6bdc39e537c98c3690adc9d261a2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_5c10818d6f40bb3179b55c83c5df9696ba6bdc39e537c98c3690adc9d261a2b6->leave($__internal_5c10818d6f40bb3179b55c83c5df9696ba6bdc39e537c98c3690adc9d261a2b6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
