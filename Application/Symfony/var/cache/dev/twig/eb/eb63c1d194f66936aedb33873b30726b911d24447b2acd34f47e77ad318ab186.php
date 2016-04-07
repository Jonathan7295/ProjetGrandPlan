<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c176c0503cfb15a01e7c54947390d460ceda786e7ca7a9d6bd7e6317383ea2fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_7429faa3164a6329e7c0f18c5ff79fffbbdb7e991d42edb52f6aeb4b841828fd = $this->env->getExtension("native_profiler");
        $__internal_7429faa3164a6329e7c0f18c5ff79fffbbdb7e991d42edb52f6aeb4b841828fd->enter($__internal_7429faa3164a6329e7c0f18c5ff79fffbbdb7e991d42edb52f6aeb4b841828fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7429faa3164a6329e7c0f18c5ff79fffbbdb7e991d42edb52f6aeb4b841828fd->leave($__internal_7429faa3164a6329e7c0f18c5ff79fffbbdb7e991d42edb52f6aeb4b841828fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d7d7391fd96ced7f7bd13645e94ed187f59fe666150655d20d549cc75ee9d5c = $this->env->getExtension("native_profiler");
        $__internal_0d7d7391fd96ced7f7bd13645e94ed187f59fe666150655d20d549cc75ee9d5c->enter($__internal_0d7d7391fd96ced7f7bd13645e94ed187f59fe666150655d20d549cc75ee9d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_0d7d7391fd96ced7f7bd13645e94ed187f59fe666150655d20d549cc75ee9d5c->leave($__internal_0d7d7391fd96ced7f7bd13645e94ed187f59fe666150655d20d549cc75ee9d5c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
