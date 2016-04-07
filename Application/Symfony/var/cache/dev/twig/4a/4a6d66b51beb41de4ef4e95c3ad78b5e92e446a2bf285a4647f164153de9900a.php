<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_2dc2dcd76cbde6060a47919b8fbcbb791c88dfb3b8d21bdb6bde0f6e44f3d40f extends Twig_Template
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
        $__internal_a3c7a64c2447d2f8474931f42bc842885cd7e1f7b696216f8be5f626c5e0283c = $this->env->getExtension("native_profiler");
        $__internal_a3c7a64c2447d2f8474931f42bc842885cd7e1f7b696216f8be5f626c5e0283c->enter($__internal_a3c7a64c2447d2f8474931f42bc842885cd7e1f7b696216f8be5f626c5e0283c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3c7a64c2447d2f8474931f42bc842885cd7e1f7b696216f8be5f626c5e0283c->leave($__internal_a3c7a64c2447d2f8474931f42bc842885cd7e1f7b696216f8be5f626c5e0283c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c74bf64fd87a05e7a4e4305208b88ef7e196113ec9724715a03a7b6b4311ae1 = $this->env->getExtension("native_profiler");
        $__internal_7c74bf64fd87a05e7a4e4305208b88ef7e196113ec9724715a03a7b6b4311ae1->enter($__internal_7c74bf64fd87a05e7a4e4305208b88ef7e196113ec9724715a03a7b6b4311ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_7c74bf64fd87a05e7a4e4305208b88ef7e196113ec9724715a03a7b6b4311ae1->leave($__internal_7c74bf64fd87a05e7a4e4305208b88ef7e196113ec9724715a03a7b6b4311ae1_prof);

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
