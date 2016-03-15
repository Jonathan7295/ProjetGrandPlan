<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_6306b9d0130032ad5306c0f3e936f1d376f54653941aaa10c0480b4984db4c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_50dc731464e9416bea1a3a13ddbee6cb3b57517f75b580ad091ef712dc26d95e = $this->env->getExtension("native_profiler");
        $__internal_50dc731464e9416bea1a3a13ddbee6cb3b57517f75b580ad091ef712dc26d95e->enter($__internal_50dc731464e9416bea1a3a13ddbee6cb3b57517f75b580ad091ef712dc26d95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50dc731464e9416bea1a3a13ddbee6cb3b57517f75b580ad091ef712dc26d95e->leave($__internal_50dc731464e9416bea1a3a13ddbee6cb3b57517f75b580ad091ef712dc26d95e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b788c61b5d177623552f83251a579238185fe86fa8cf9d34ad60152178414f0 = $this->env->getExtension("native_profiler");
        $__internal_3b788c61b5d177623552f83251a579238185fe86fa8cf9d34ad60152178414f0->enter($__internal_3b788c61b5d177623552f83251a579238185fe86fa8cf9d34ad60152178414f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_3b788c61b5d177623552f83251a579238185fe86fa8cf9d34ad60152178414f0->leave($__internal_3b788c61b5d177623552f83251a579238185fe86fa8cf9d34ad60152178414f0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
