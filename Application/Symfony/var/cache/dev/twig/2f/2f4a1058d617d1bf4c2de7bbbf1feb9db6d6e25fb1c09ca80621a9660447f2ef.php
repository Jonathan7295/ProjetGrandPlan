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
        $__internal_efcf4784c3c000c477913cf6307149954945e1680353d15f52cbc837cb3deb18 = $this->env->getExtension("native_profiler");
        $__internal_efcf4784c3c000c477913cf6307149954945e1680353d15f52cbc837cb3deb18->enter($__internal_efcf4784c3c000c477913cf6307149954945e1680353d15f52cbc837cb3deb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efcf4784c3c000c477913cf6307149954945e1680353d15f52cbc837cb3deb18->leave($__internal_efcf4784c3c000c477913cf6307149954945e1680353d15f52cbc837cb3deb18_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2750885b3762ac4686c141d49c8e1fb898a9c905a4784a9949e73670bc041f02 = $this->env->getExtension("native_profiler");
        $__internal_2750885b3762ac4686c141d49c8e1fb898a9c905a4784a9949e73670bc041f02->enter($__internal_2750885b3762ac4686c141d49c8e1fb898a9c905a4784a9949e73670bc041f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2750885b3762ac4686c141d49c8e1fb898a9c905a4784a9949e73670bc041f02->leave($__internal_2750885b3762ac4686c141d49c8e1fb898a9c905a4784a9949e73670bc041f02_prof);

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
