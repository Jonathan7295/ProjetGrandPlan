<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_d71a1e530134c30a913af1048d0a00bcfe3c65ffc3183f81447173adad2aad48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_349e9f34f43efa12728d1b7b7a05ff9d7574c9338b97ce5e407a46bc4ee32ae6 = $this->env->getExtension("native_profiler");
        $__internal_349e9f34f43efa12728d1b7b7a05ff9d7574c9338b97ce5e407a46bc4ee32ae6->enter($__internal_349e9f34f43efa12728d1b7b7a05ff9d7574c9338b97ce5e407a46bc4ee32ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_349e9f34f43efa12728d1b7b7a05ff9d7574c9338b97ce5e407a46bc4ee32ae6->leave($__internal_349e9f34f43efa12728d1b7b7a05ff9d7574c9338b97ce5e407a46bc4ee32ae6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5266834289eef88b396d5821bb0c2015f617816fdf7bfa5510a43ebb0138bdd = $this->env->getExtension("native_profiler");
        $__internal_a5266834289eef88b396d5821bb0c2015f617816fdf7bfa5510a43ebb0138bdd->enter($__internal_a5266834289eef88b396d5821bb0c2015f617816fdf7bfa5510a43ebb0138bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_a5266834289eef88b396d5821bb0c2015f617816fdf7bfa5510a43ebb0138bdd->leave($__internal_a5266834289eef88b396d5821bb0c2015f617816fdf7bfa5510a43ebb0138bdd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
