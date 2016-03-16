<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_5d575ab8cc9d67fc3a9c48f01d1b7b719f128d2db437ff9727334ddb9dfaf8d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_2650b82520e73834dcf9246d0d2b0a40598a13eacaa91a931b6c094136c71896 = $this->env->getExtension("native_profiler");
        $__internal_2650b82520e73834dcf9246d0d2b0a40598a13eacaa91a931b6c094136c71896->enter($__internal_2650b82520e73834dcf9246d0d2b0a40598a13eacaa91a931b6c094136c71896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2650b82520e73834dcf9246d0d2b0a40598a13eacaa91a931b6c094136c71896->leave($__internal_2650b82520e73834dcf9246d0d2b0a40598a13eacaa91a931b6c094136c71896_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7060159798d2d0b2b2417a435d5ae1575425ee4ed4bfca1245a77b647ac9244d = $this->env->getExtension("native_profiler");
        $__internal_7060159798d2d0b2b2417a435d5ae1575425ee4ed4bfca1245a77b647ac9244d->enter($__internal_7060159798d2d0b2b2417a435d5ae1575425ee4ed4bfca1245a77b647ac9244d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_7060159798d2d0b2b2417a435d5ae1575425ee4ed4bfca1245a77b647ac9244d->leave($__internal_7060159798d2d0b2b2417a435d5ae1575425ee4ed4bfca1245a77b647ac9244d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
