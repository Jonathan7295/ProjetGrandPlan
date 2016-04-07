<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f8da6f8f8a5cc4496ab3aabe7e535e2731f39692b10a96f9327bdde9deefa0e4 extends Twig_Template
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
        $__internal_9df8245c23f9d1a74447e5e6c5611e5521a477df3eb4bc22e32140e8ae8581c3 = $this->env->getExtension("native_profiler");
        $__internal_9df8245c23f9d1a74447e5e6c5611e5521a477df3eb4bc22e32140e8ae8581c3->enter($__internal_9df8245c23f9d1a74447e5e6c5611e5521a477df3eb4bc22e32140e8ae8581c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9df8245c23f9d1a74447e5e6c5611e5521a477df3eb4bc22e32140e8ae8581c3->leave($__internal_9df8245c23f9d1a74447e5e6c5611e5521a477df3eb4bc22e32140e8ae8581c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71935fc946326b21b8ab96277cc6bf0fdc1fe1fdfdc96f7a637dab607a379725 = $this->env->getExtension("native_profiler");
        $__internal_71935fc946326b21b8ab96277cc6bf0fdc1fe1fdfdc96f7a637dab607a379725->enter($__internal_71935fc946326b21b8ab96277cc6bf0fdc1fe1fdfdc96f7a637dab607a379725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_71935fc946326b21b8ab96277cc6bf0fdc1fe1fdfdc96f7a637dab607a379725->leave($__internal_71935fc946326b21b8ab96277cc6bf0fdc1fe1fdfdc96f7a637dab607a379725_prof);

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
