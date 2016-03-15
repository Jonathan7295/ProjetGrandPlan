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
        $__internal_f6d89f55546d93a9847362675f378a88d55ba22cd3188b117b6a8aa7d07ff688 = $this->env->getExtension("native_profiler");
        $__internal_f6d89f55546d93a9847362675f378a88d55ba22cd3188b117b6a8aa7d07ff688->enter($__internal_f6d89f55546d93a9847362675f378a88d55ba22cd3188b117b6a8aa7d07ff688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6d89f55546d93a9847362675f378a88d55ba22cd3188b117b6a8aa7d07ff688->leave($__internal_f6d89f55546d93a9847362675f378a88d55ba22cd3188b117b6a8aa7d07ff688_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0da04a41594507c3afea193f1ea35f76a7f77c4d0c47afd07cba65f1977421e2 = $this->env->getExtension("native_profiler");
        $__internal_0da04a41594507c3afea193f1ea35f76a7f77c4d0c47afd07cba65f1977421e2->enter($__internal_0da04a41594507c3afea193f1ea35f76a7f77c4d0c47afd07cba65f1977421e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_0da04a41594507c3afea193f1ea35f76a7f77c4d0c47afd07cba65f1977421e2->leave($__internal_0da04a41594507c3afea193f1ea35f76a7f77c4d0c47afd07cba65f1977421e2_prof);

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
