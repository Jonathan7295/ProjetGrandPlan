<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_dca60e7fc176b56a237878e80782b83600435fbb87af0855a0b190d9623e60ce extends Twig_Template
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
        $__internal_bb831055dbc5fe3d6096ddd981a3f0db4f247e26bfeee5270d4654df8289afec = $this->env->getExtension("native_profiler");
        $__internal_bb831055dbc5fe3d6096ddd981a3f0db4f247e26bfeee5270d4654df8289afec->enter($__internal_bb831055dbc5fe3d6096ddd981a3f0db4f247e26bfeee5270d4654df8289afec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb831055dbc5fe3d6096ddd981a3f0db4f247e26bfeee5270d4654df8289afec->leave($__internal_bb831055dbc5fe3d6096ddd981a3f0db4f247e26bfeee5270d4654df8289afec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e4ec24a84b47f3fe0a1167d2d7dee6a6fbe8373b89dccc181478ac5652ec82e = $this->env->getExtension("native_profiler");
        $__internal_4e4ec24a84b47f3fe0a1167d2d7dee6a6fbe8373b89dccc181478ac5652ec82e->enter($__internal_4e4ec24a84b47f3fe0a1167d2d7dee6a6fbe8373b89dccc181478ac5652ec82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4e4ec24a84b47f3fe0a1167d2d7dee6a6fbe8373b89dccc181478ac5652ec82e->leave($__internal_4e4ec24a84b47f3fe0a1167d2d7dee6a6fbe8373b89dccc181478ac5652ec82e_prof);

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
