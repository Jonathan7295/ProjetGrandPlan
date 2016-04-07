<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e5f716490e8ce2591f5f2d3acbc802b27e003a0a7f1c5277b4d8a527207df4d1 extends Twig_Template
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
        $__internal_7c79b83c8efd556d7f36845183efcda667acb4fd4290e5b79c6b385f9fa9e70a = $this->env->getExtension("native_profiler");
        $__internal_7c79b83c8efd556d7f36845183efcda667acb4fd4290e5b79c6b385f9fa9e70a->enter($__internal_7c79b83c8efd556d7f36845183efcda667acb4fd4290e5b79c6b385f9fa9e70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c79b83c8efd556d7f36845183efcda667acb4fd4290e5b79c6b385f9fa9e70a->leave($__internal_7c79b83c8efd556d7f36845183efcda667acb4fd4290e5b79c6b385f9fa9e70a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e4d6f0a24fc2b6320e336e564dacecfa2a5642ae8fe710d5a1d4e1696059955 = $this->env->getExtension("native_profiler");
        $__internal_9e4d6f0a24fc2b6320e336e564dacecfa2a5642ae8fe710d5a1d4e1696059955->enter($__internal_9e4d6f0a24fc2b6320e336e564dacecfa2a5642ae8fe710d5a1d4e1696059955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9e4d6f0a24fc2b6320e336e564dacecfa2a5642ae8fe710d5a1d4e1696059955->leave($__internal_9e4d6f0a24fc2b6320e336e564dacecfa2a5642ae8fe710d5a1d4e1696059955_prof);

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
