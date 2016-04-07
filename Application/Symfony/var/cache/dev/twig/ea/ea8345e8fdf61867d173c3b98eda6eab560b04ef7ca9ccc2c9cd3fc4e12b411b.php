<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_bf08ad16f4018ae9de66cddea77bda03ac3c993ea05fb891cb37902acc8151a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_c74d2f033a73601c7c7b9229ee98a74534552b237d1a66846874f52b12837ed6 = $this->env->getExtension("native_profiler");
        $__internal_c74d2f033a73601c7c7b9229ee98a74534552b237d1a66846874f52b12837ed6->enter($__internal_c74d2f033a73601c7c7b9229ee98a74534552b237d1a66846874f52b12837ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c74d2f033a73601c7c7b9229ee98a74534552b237d1a66846874f52b12837ed6->leave($__internal_c74d2f033a73601c7c7b9229ee98a74534552b237d1a66846874f52b12837ed6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8888218b95340489a479f7b5c32cf369768fd698cb202ca5371f2727ac81431 = $this->env->getExtension("native_profiler");
        $__internal_d8888218b95340489a479f7b5c32cf369768fd698cb202ca5371f2727ac81431->enter($__internal_d8888218b95340489a479f7b5c32cf369768fd698cb202ca5371f2727ac81431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_d8888218b95340489a479f7b5c32cf369768fd698cb202ca5371f2727ac81431->leave($__internal_d8888218b95340489a479f7b5c32cf369768fd698cb202ca5371f2727ac81431_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
