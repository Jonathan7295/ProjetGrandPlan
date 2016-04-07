<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_ed994e3366e68ebc566442a7ba24878ccd4921fad5b1968a1add9e2ca37223f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_d9a0a4125924b9dcea5410655072d0d4a908c36fb2edb0ee0d265936f4b401d6 = $this->env->getExtension("native_profiler");
        $__internal_d9a0a4125924b9dcea5410655072d0d4a908c36fb2edb0ee0d265936f4b401d6->enter($__internal_d9a0a4125924b9dcea5410655072d0d4a908c36fb2edb0ee0d265936f4b401d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9a0a4125924b9dcea5410655072d0d4a908c36fb2edb0ee0d265936f4b401d6->leave($__internal_d9a0a4125924b9dcea5410655072d0d4a908c36fb2edb0ee0d265936f4b401d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_561c1fdf7b0b5572018cecc1250172c168172e5c2d29f02dee8c25fdc3fd37ad = $this->env->getExtension("native_profiler");
        $__internal_561c1fdf7b0b5572018cecc1250172c168172e5c2d29f02dee8c25fdc3fd37ad->enter($__internal_561c1fdf7b0b5572018cecc1250172c168172e5c2d29f02dee8c25fdc3fd37ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_561c1fdf7b0b5572018cecc1250172c168172e5c2d29f02dee8c25fdc3fd37ad->leave($__internal_561c1fdf7b0b5572018cecc1250172c168172e5c2d29f02dee8c25fdc3fd37ad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
