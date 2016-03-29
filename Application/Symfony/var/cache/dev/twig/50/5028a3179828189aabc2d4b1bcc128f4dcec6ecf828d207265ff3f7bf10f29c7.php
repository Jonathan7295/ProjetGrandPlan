<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_7b47c994700230344d1b1bedca4cf82963cc4664981dd0abe2c4f0d7718bf4c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_fb9ad3d571165eb8ba769707ce02c0bc97bc3c92a9bb8ffa40e0b5d9ebcd52d5 = $this->env->getExtension("native_profiler");
        $__internal_fb9ad3d571165eb8ba769707ce02c0bc97bc3c92a9bb8ffa40e0b5d9ebcd52d5->enter($__internal_fb9ad3d571165eb8ba769707ce02c0bc97bc3c92a9bb8ffa40e0b5d9ebcd52d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb9ad3d571165eb8ba769707ce02c0bc97bc3c92a9bb8ffa40e0b5d9ebcd52d5->leave($__internal_fb9ad3d571165eb8ba769707ce02c0bc97bc3c92a9bb8ffa40e0b5d9ebcd52d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7da05265e9322a6b938f6c378d62d02fcfe645799b58e28ec8de37dc845f0a54 = $this->env->getExtension("native_profiler");
        $__internal_7da05265e9322a6b938f6c378d62d02fcfe645799b58e28ec8de37dc845f0a54->enter($__internal_7da05265e9322a6b938f6c378d62d02fcfe645799b58e28ec8de37dc845f0a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_7da05265e9322a6b938f6c378d62d02fcfe645799b58e28ec8de37dc845f0a54->leave($__internal_7da05265e9322a6b938f6c378d62d02fcfe645799b58e28ec8de37dc845f0a54_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
