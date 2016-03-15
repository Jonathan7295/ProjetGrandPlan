<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_d492f1102ce700f802b9da1f04b36561a9960ca15fd85ec1b2db0fa271f8ac84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_71fdd5e2f34b5bca956a8de037f402c36dfb227394e67724d712cc5d8a0bf4f8 = $this->env->getExtension("native_profiler");
        $__internal_71fdd5e2f34b5bca956a8de037f402c36dfb227394e67724d712cc5d8a0bf4f8->enter($__internal_71fdd5e2f34b5bca956a8de037f402c36dfb227394e67724d712cc5d8a0bf4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71fdd5e2f34b5bca956a8de037f402c36dfb227394e67724d712cc5d8a0bf4f8->leave($__internal_71fdd5e2f34b5bca956a8de037f402c36dfb227394e67724d712cc5d8a0bf4f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65a409fd81d505fac4f85488119b28f3bca050d58be399065f460f102db2c84d = $this->env->getExtension("native_profiler");
        $__internal_65a409fd81d505fac4f85488119b28f3bca050d58be399065f460f102db2c84d->enter($__internal_65a409fd81d505fac4f85488119b28f3bca050d58be399065f460f102db2c84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_65a409fd81d505fac4f85488119b28f3bca050d58be399065f460f102db2c84d->leave($__internal_65a409fd81d505fac4f85488119b28f3bca050d58be399065f460f102db2c84d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
