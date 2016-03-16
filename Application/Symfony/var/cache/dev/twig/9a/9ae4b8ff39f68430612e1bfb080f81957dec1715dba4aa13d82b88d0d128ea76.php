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
        $__internal_6321a19f5ade58ee1e42adfe58ec523078e1a4a521590bf1d4c83f9f2ecd840f = $this->env->getExtension("native_profiler");
        $__internal_6321a19f5ade58ee1e42adfe58ec523078e1a4a521590bf1d4c83f9f2ecd840f->enter($__internal_6321a19f5ade58ee1e42adfe58ec523078e1a4a521590bf1d4c83f9f2ecd840f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6321a19f5ade58ee1e42adfe58ec523078e1a4a521590bf1d4c83f9f2ecd840f->leave($__internal_6321a19f5ade58ee1e42adfe58ec523078e1a4a521590bf1d4c83f9f2ecd840f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03fbcd186b16041271823695665ac69fcf3d1c6d8a5f6b3f1c419ac4c54879cb = $this->env->getExtension("native_profiler");
        $__internal_03fbcd186b16041271823695665ac69fcf3d1c6d8a5f6b3f1c419ac4c54879cb->enter($__internal_03fbcd186b16041271823695665ac69fcf3d1c6d8a5f6b3f1c419ac4c54879cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_03fbcd186b16041271823695665ac69fcf3d1c6d8a5f6b3f1c419ac4c54879cb->leave($__internal_03fbcd186b16041271823695665ac69fcf3d1c6d8a5f6b3f1c419ac4c54879cb_prof);

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
