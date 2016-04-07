<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_44c0a2b26587148361a65f65b7ac04ca27dd226c9c3a33d20f2c985b4ef0923b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_8a09a1b8f16cd8c92a60876a1dd4775f0f33150828dda5a5d6d586ce42b939ea = $this->env->getExtension("native_profiler");
        $__internal_8a09a1b8f16cd8c92a60876a1dd4775f0f33150828dda5a5d6d586ce42b939ea->enter($__internal_8a09a1b8f16cd8c92a60876a1dd4775f0f33150828dda5a5d6d586ce42b939ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a09a1b8f16cd8c92a60876a1dd4775f0f33150828dda5a5d6d586ce42b939ea->leave($__internal_8a09a1b8f16cd8c92a60876a1dd4775f0f33150828dda5a5d6d586ce42b939ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ca907f864fe95c05dbc113e0147d763b7bb55a256bb318e959d28645bc98b87 = $this->env->getExtension("native_profiler");
        $__internal_7ca907f864fe95c05dbc113e0147d763b7bb55a256bb318e959d28645bc98b87->enter($__internal_7ca907f864fe95c05dbc113e0147d763b7bb55a256bb318e959d28645bc98b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_7ca907f864fe95c05dbc113e0147d763b7bb55a256bb318e959d28645bc98b87->leave($__internal_7ca907f864fe95c05dbc113e0147d763b7bb55a256bb318e959d28645bc98b87_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
