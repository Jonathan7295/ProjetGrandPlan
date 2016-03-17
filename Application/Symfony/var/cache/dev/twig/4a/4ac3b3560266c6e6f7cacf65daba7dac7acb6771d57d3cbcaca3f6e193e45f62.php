<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_5327b402afcc84b4a668fa71ef1b5f3508350f4ea0c3aa51985554dd685e05d9 extends Twig_Template
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
        $__internal_68fc5de9143fe07e1dde358e777443086a84800fa5fb35c68001f960a5b0c20b = $this->env->getExtension("native_profiler");
        $__internal_68fc5de9143fe07e1dde358e777443086a84800fa5fb35c68001f960a5b0c20b->enter($__internal_68fc5de9143fe07e1dde358e777443086a84800fa5fb35c68001f960a5b0c20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68fc5de9143fe07e1dde358e777443086a84800fa5fb35c68001f960a5b0c20b->leave($__internal_68fc5de9143fe07e1dde358e777443086a84800fa5fb35c68001f960a5b0c20b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_84224002dccb153549c5a30b5c34b253c667296734aec51ad2870ae85c8fb408 = $this->env->getExtension("native_profiler");
        $__internal_84224002dccb153549c5a30b5c34b253c667296734aec51ad2870ae85c8fb408->enter($__internal_84224002dccb153549c5a30b5c34b253c667296734aec51ad2870ae85c8fb408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_84224002dccb153549c5a30b5c34b253c667296734aec51ad2870ae85c8fb408->leave($__internal_84224002dccb153549c5a30b5c34b253c667296734aec51ad2870ae85c8fb408_prof);

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
