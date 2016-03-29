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
        $__internal_2416a2666f9d6129f5bd3254ae9c96fc6f9007c7a3f69e8109cc2b3f3ac5ca6e = $this->env->getExtension("native_profiler");
        $__internal_2416a2666f9d6129f5bd3254ae9c96fc6f9007c7a3f69e8109cc2b3f3ac5ca6e->enter($__internal_2416a2666f9d6129f5bd3254ae9c96fc6f9007c7a3f69e8109cc2b3f3ac5ca6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2416a2666f9d6129f5bd3254ae9c96fc6f9007c7a3f69e8109cc2b3f3ac5ca6e->leave($__internal_2416a2666f9d6129f5bd3254ae9c96fc6f9007c7a3f69e8109cc2b3f3ac5ca6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9464f7e3c67daa1a7b7f3e8e705ebf2f1abbec7dd7e31c6618cf7217f7f6795 = $this->env->getExtension("native_profiler");
        $__internal_b9464f7e3c67daa1a7b7f3e8e705ebf2f1abbec7dd7e31c6618cf7217f7f6795->enter($__internal_b9464f7e3c67daa1a7b7f3e8e705ebf2f1abbec7dd7e31c6618cf7217f7f6795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b9464f7e3c67daa1a7b7f3e8e705ebf2f1abbec7dd7e31c6618cf7217f7f6795->leave($__internal_b9464f7e3c67daa1a7b7f3e8e705ebf2f1abbec7dd7e31c6618cf7217f7f6795_prof);

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
