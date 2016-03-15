<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_936f021ec0f75b2cf6aa498a7d54badb8502123369c0e6f6a6936f4cebcb9b34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_f2b999780d2cff143a356150cf932ce5e97003ab763dc0a1e1bbc89fe81367d2 = $this->env->getExtension("native_profiler");
        $__internal_f2b999780d2cff143a356150cf932ce5e97003ab763dc0a1e1bbc89fe81367d2->enter($__internal_f2b999780d2cff143a356150cf932ce5e97003ab763dc0a1e1bbc89fe81367d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2b999780d2cff143a356150cf932ce5e97003ab763dc0a1e1bbc89fe81367d2->leave($__internal_f2b999780d2cff143a356150cf932ce5e97003ab763dc0a1e1bbc89fe81367d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d78045414851eb41e0f04fccf9fefc1410247f10d03e72e6d42a45f375619ff = $this->env->getExtension("native_profiler");
        $__internal_4d78045414851eb41e0f04fccf9fefc1410247f10d03e72e6d42a45f375619ff->enter($__internal_4d78045414851eb41e0f04fccf9fefc1410247f10d03e72e6d42a45f375619ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_4d78045414851eb41e0f04fccf9fefc1410247f10d03e72e6d42a45f375619ff->leave($__internal_4d78045414851eb41e0f04fccf9fefc1410247f10d03e72e6d42a45f375619ff_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
