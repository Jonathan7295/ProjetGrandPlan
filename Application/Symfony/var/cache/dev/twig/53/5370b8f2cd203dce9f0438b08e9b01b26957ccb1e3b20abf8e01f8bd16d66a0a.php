<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_717253ee85269bd2ea13abd6cb14ea7680015535d3bc0c647bf3587f1b038765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_21d6fa2097f8af8ddac020512c04786827c60bc5039ec007fdb61e7b4224a3c2 = $this->env->getExtension("native_profiler");
        $__internal_21d6fa2097f8af8ddac020512c04786827c60bc5039ec007fdb61e7b4224a3c2->enter($__internal_21d6fa2097f8af8ddac020512c04786827c60bc5039ec007fdb61e7b4224a3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d6fa2097f8af8ddac020512c04786827c60bc5039ec007fdb61e7b4224a3c2->leave($__internal_21d6fa2097f8af8ddac020512c04786827c60bc5039ec007fdb61e7b4224a3c2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2929e40864b81f6b1548f9d58cc295505a080ad67bbce0d44bd9857975295f38 = $this->env->getExtension("native_profiler");
        $__internal_2929e40864b81f6b1548f9d58cc295505a080ad67bbce0d44bd9857975295f38->enter($__internal_2929e40864b81f6b1548f9d58cc295505a080ad67bbce0d44bd9857975295f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_2929e40864b81f6b1548f9d58cc295505a080ad67bbce0d44bd9857975295f38->leave($__internal_2929e40864b81f6b1548f9d58cc295505a080ad67bbce0d44bd9857975295f38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
