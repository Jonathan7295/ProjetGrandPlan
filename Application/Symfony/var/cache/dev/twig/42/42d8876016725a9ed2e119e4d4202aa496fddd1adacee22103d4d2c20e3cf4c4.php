<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_08eb38bfdd0801f588b715ca5505a917678e7d19a19161cfce3ec910f845a8d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_829990f5aa6845191d4c9270daeba796d6a3224593ad4acbb0f5aed443b0cfd0 = $this->env->getExtension("native_profiler");
        $__internal_829990f5aa6845191d4c9270daeba796d6a3224593ad4acbb0f5aed443b0cfd0->enter($__internal_829990f5aa6845191d4c9270daeba796d6a3224593ad4acbb0f5aed443b0cfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_829990f5aa6845191d4c9270daeba796d6a3224593ad4acbb0f5aed443b0cfd0->leave($__internal_829990f5aa6845191d4c9270daeba796d6a3224593ad4acbb0f5aed443b0cfd0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21abf2b9b1b8f266e204de472817fb0ea893d11ee01e4f786c67edc3d645f7ba = $this->env->getExtension("native_profiler");
        $__internal_21abf2b9b1b8f266e204de472817fb0ea893d11ee01e4f786c67edc3d645f7ba->enter($__internal_21abf2b9b1b8f266e204de472817fb0ea893d11ee01e4f786c67edc3d645f7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_21abf2b9b1b8f266e204de472817fb0ea893d11ee01e4f786c67edc3d645f7ba->leave($__internal_21abf2b9b1b8f266e204de472817fb0ea893d11ee01e4f786c67edc3d645f7ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
