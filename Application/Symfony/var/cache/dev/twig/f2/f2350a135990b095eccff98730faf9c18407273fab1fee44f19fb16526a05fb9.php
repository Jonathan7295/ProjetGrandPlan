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
        $__internal_5133c33283d63de9bf77715c970186574619664f94d8b5409b9555e4334cc164 = $this->env->getExtension("native_profiler");
        $__internal_5133c33283d63de9bf77715c970186574619664f94d8b5409b9555e4334cc164->enter($__internal_5133c33283d63de9bf77715c970186574619664f94d8b5409b9555e4334cc164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5133c33283d63de9bf77715c970186574619664f94d8b5409b9555e4334cc164->leave($__internal_5133c33283d63de9bf77715c970186574619664f94d8b5409b9555e4334cc164_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad2f6f45100ce111c3272add413b44baac95d5fe81258ee4191cad638a5da8a6 = $this->env->getExtension("native_profiler");
        $__internal_ad2f6f45100ce111c3272add413b44baac95d5fe81258ee4191cad638a5da8a6->enter($__internal_ad2f6f45100ce111c3272add413b44baac95d5fe81258ee4191cad638a5da8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_ad2f6f45100ce111c3272add413b44baac95d5fe81258ee4191cad638a5da8a6->leave($__internal_ad2f6f45100ce111c3272add413b44baac95d5fe81258ee4191cad638a5da8a6_prof);

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
