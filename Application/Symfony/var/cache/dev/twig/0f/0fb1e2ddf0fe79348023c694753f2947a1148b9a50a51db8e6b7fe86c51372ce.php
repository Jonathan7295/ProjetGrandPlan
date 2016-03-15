<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_3cd7102caaf7a617eb0d14e9ec65c680f971141d718c0eefab6b96b4cb8b86fe extends Twig_Template
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
        $__internal_d2fae23337afbf7d8d26059760fcb63bec5389ac6d9e76e4d875c485289bee84 = $this->env->getExtension("native_profiler");
        $__internal_d2fae23337afbf7d8d26059760fcb63bec5389ac6d9e76e4d875c485289bee84->enter($__internal_d2fae23337afbf7d8d26059760fcb63bec5389ac6d9e76e4d875c485289bee84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2fae23337afbf7d8d26059760fcb63bec5389ac6d9e76e4d875c485289bee84->leave($__internal_d2fae23337afbf7d8d26059760fcb63bec5389ac6d9e76e4d875c485289bee84_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62ca340e00e410e84069736a4c891a483780d8cc900bcad85559206de0802a74 = $this->env->getExtension("native_profiler");
        $__internal_62ca340e00e410e84069736a4c891a483780d8cc900bcad85559206de0802a74->enter($__internal_62ca340e00e410e84069736a4c891a483780d8cc900bcad85559206de0802a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_62ca340e00e410e84069736a4c891a483780d8cc900bcad85559206de0802a74->leave($__internal_62ca340e00e410e84069736a4c891a483780d8cc900bcad85559206de0802a74_prof);

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
