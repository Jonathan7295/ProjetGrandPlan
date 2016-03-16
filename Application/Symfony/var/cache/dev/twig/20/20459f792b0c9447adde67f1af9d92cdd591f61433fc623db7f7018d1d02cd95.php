<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_90590d0b9253a6ab9aee3fef7e5a385a30e5264f508e1c0311900556b151971c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_55e470bdb5f25b02965a5c7fc2af0753795e30ed2e0b27e5749a4fc9cc831435 = $this->env->getExtension("native_profiler");
        $__internal_55e470bdb5f25b02965a5c7fc2af0753795e30ed2e0b27e5749a4fc9cc831435->enter($__internal_55e470bdb5f25b02965a5c7fc2af0753795e30ed2e0b27e5749a4fc9cc831435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55e470bdb5f25b02965a5c7fc2af0753795e30ed2e0b27e5749a4fc9cc831435->leave($__internal_55e470bdb5f25b02965a5c7fc2af0753795e30ed2e0b27e5749a4fc9cc831435_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e6f1d5221ae38e07d73f834c86cd219fc772e6175b993a05e504ee2e0a2abb2 = $this->env->getExtension("native_profiler");
        $__internal_6e6f1d5221ae38e07d73f834c86cd219fc772e6175b993a05e504ee2e0a2abb2->enter($__internal_6e6f1d5221ae38e07d73f834c86cd219fc772e6175b993a05e504ee2e0a2abb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_6e6f1d5221ae38e07d73f834c86cd219fc772e6175b993a05e504ee2e0a2abb2->leave($__internal_6e6f1d5221ae38e07d73f834c86cd219fc772e6175b993a05e504ee2e0a2abb2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
