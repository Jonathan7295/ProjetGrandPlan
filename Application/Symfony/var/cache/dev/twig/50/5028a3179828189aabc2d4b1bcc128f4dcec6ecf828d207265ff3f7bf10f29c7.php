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
        $__internal_5443344bf5ef471a5b53686205f124456ef1a4e43fda38209aca9f1a02604060 = $this->env->getExtension("native_profiler");
        $__internal_5443344bf5ef471a5b53686205f124456ef1a4e43fda38209aca9f1a02604060->enter($__internal_5443344bf5ef471a5b53686205f124456ef1a4e43fda38209aca9f1a02604060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5443344bf5ef471a5b53686205f124456ef1a4e43fda38209aca9f1a02604060->leave($__internal_5443344bf5ef471a5b53686205f124456ef1a4e43fda38209aca9f1a02604060_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf14e1581ec54a0359516bbaeb9c8312d3805fecf573de00239bc5834b089536 = $this->env->getExtension("native_profiler");
        $__internal_bf14e1581ec54a0359516bbaeb9c8312d3805fecf573de00239bc5834b089536->enter($__internal_bf14e1581ec54a0359516bbaeb9c8312d3805fecf573de00239bc5834b089536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_bf14e1581ec54a0359516bbaeb9c8312d3805fecf573de00239bc5834b089536->leave($__internal_bf14e1581ec54a0359516bbaeb9c8312d3805fecf573de00239bc5834b089536_prof);

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
