<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_6df495b8224ad3caf1ae557058188c19ff43b1127003c5520a075f8714cbeeae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_18aa0230ede8a01f519f005ce4d3cdf40e508188cb9c3393aa933fa70a415b55 = $this->env->getExtension("native_profiler");
        $__internal_18aa0230ede8a01f519f005ce4d3cdf40e508188cb9c3393aa933fa70a415b55->enter($__internal_18aa0230ede8a01f519f005ce4d3cdf40e508188cb9c3393aa933fa70a415b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18aa0230ede8a01f519f005ce4d3cdf40e508188cb9c3393aa933fa70a415b55->leave($__internal_18aa0230ede8a01f519f005ce4d3cdf40e508188cb9c3393aa933fa70a415b55_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea0927dea7598285707820f3e130c3812a65d76d44be349e44ba99029ea1cdf8 = $this->env->getExtension("native_profiler");
        $__internal_ea0927dea7598285707820f3e130c3812a65d76d44be349e44ba99029ea1cdf8->enter($__internal_ea0927dea7598285707820f3e130c3812a65d76d44be349e44ba99029ea1cdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_ea0927dea7598285707820f3e130c3812a65d76d44be349e44ba99029ea1cdf8->leave($__internal_ea0927dea7598285707820f3e130c3812a65d76d44be349e44ba99029ea1cdf8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
