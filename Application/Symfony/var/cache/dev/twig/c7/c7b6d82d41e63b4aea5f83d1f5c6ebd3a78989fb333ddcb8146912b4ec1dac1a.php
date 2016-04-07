<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_44983ebba8aca330dcd7cc49d84227e13e16d39848ccbd732aed44c4dcc17c32 extends Twig_Template
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
        $__internal_14499b34102f5f8c28bea9852b4d2a0fedfce297c99b5aa0215175bf3032f9d4 = $this->env->getExtension("native_profiler");
        $__internal_14499b34102f5f8c28bea9852b4d2a0fedfce297c99b5aa0215175bf3032f9d4->enter($__internal_14499b34102f5f8c28bea9852b4d2a0fedfce297c99b5aa0215175bf3032f9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14499b34102f5f8c28bea9852b4d2a0fedfce297c99b5aa0215175bf3032f9d4->leave($__internal_14499b34102f5f8c28bea9852b4d2a0fedfce297c99b5aa0215175bf3032f9d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2dca1739eb0e8d622cc38bbc77b2148537d4586d2d06812f8ed11e0b7edc8799 = $this->env->getExtension("native_profiler");
        $__internal_2dca1739eb0e8d622cc38bbc77b2148537d4586d2d06812f8ed11e0b7edc8799->enter($__internal_2dca1739eb0e8d622cc38bbc77b2148537d4586d2d06812f8ed11e0b7edc8799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_2dca1739eb0e8d622cc38bbc77b2148537d4586d2d06812f8ed11e0b7edc8799->leave($__internal_2dca1739eb0e8d622cc38bbc77b2148537d4586d2d06812f8ed11e0b7edc8799_prof);

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
