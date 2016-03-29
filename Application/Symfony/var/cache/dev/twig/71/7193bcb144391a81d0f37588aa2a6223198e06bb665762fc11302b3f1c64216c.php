<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d871f0952c14fd8e27e377562c490edf2c77741471c413326283da0af3be3242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_3e939442c0d6a1ac59207f53452be71b06ff93f45ebdd5cbfffc108bb0261a26 = $this->env->getExtension("native_profiler");
        $__internal_3e939442c0d6a1ac59207f53452be71b06ff93f45ebdd5cbfffc108bb0261a26->enter($__internal_3e939442c0d6a1ac59207f53452be71b06ff93f45ebdd5cbfffc108bb0261a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e939442c0d6a1ac59207f53452be71b06ff93f45ebdd5cbfffc108bb0261a26->leave($__internal_3e939442c0d6a1ac59207f53452be71b06ff93f45ebdd5cbfffc108bb0261a26_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f460cdfd3f8165dd3a6ac4de501b090d8730c8e784160d07751de8240911f72 = $this->env->getExtension("native_profiler");
        $__internal_9f460cdfd3f8165dd3a6ac4de501b090d8730c8e784160d07751de8240911f72->enter($__internal_9f460cdfd3f8165dd3a6ac4de501b090d8730c8e784160d07751de8240911f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9f460cdfd3f8165dd3a6ac4de501b090d8730c8e784160d07751de8240911f72->leave($__internal_9f460cdfd3f8165dd3a6ac4de501b090d8730c8e784160d07751de8240911f72_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
