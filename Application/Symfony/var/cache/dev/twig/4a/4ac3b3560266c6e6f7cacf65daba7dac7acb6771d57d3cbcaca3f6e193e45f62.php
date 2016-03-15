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
        $__internal_1bf4b7d01b1f60b4b1c9ac618a1e3a018c6031fbc6c0456226dc328a6b169b2e = $this->env->getExtension("native_profiler");
        $__internal_1bf4b7d01b1f60b4b1c9ac618a1e3a018c6031fbc6c0456226dc328a6b169b2e->enter($__internal_1bf4b7d01b1f60b4b1c9ac618a1e3a018c6031fbc6c0456226dc328a6b169b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bf4b7d01b1f60b4b1c9ac618a1e3a018c6031fbc6c0456226dc328a6b169b2e->leave($__internal_1bf4b7d01b1f60b4b1c9ac618a1e3a018c6031fbc6c0456226dc328a6b169b2e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e021135833701fb49e14bb06e22c6ce7240cd4d134bf00560bf7618d69b5e97 = $this->env->getExtension("native_profiler");
        $__internal_7e021135833701fb49e14bb06e22c6ce7240cd4d134bf00560bf7618d69b5e97->enter($__internal_7e021135833701fb49e14bb06e22c6ce7240cd4d134bf00560bf7618d69b5e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_7e021135833701fb49e14bb06e22c6ce7240cd4d134bf00560bf7618d69b5e97->leave($__internal_7e021135833701fb49e14bb06e22c6ce7240cd4d134bf00560bf7618d69b5e97_prof);

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
