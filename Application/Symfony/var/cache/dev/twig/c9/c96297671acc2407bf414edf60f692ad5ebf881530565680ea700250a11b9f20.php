<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_6306b9d0130032ad5306c0f3e936f1d376f54653941aaa10c0480b4984db4c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_589c4f3f7460455474c31810b29258e49148740b7b478230532be891e61f1ee2 = $this->env->getExtension("native_profiler");
        $__internal_589c4f3f7460455474c31810b29258e49148740b7b478230532be891e61f1ee2->enter($__internal_589c4f3f7460455474c31810b29258e49148740b7b478230532be891e61f1ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_589c4f3f7460455474c31810b29258e49148740b7b478230532be891e61f1ee2->leave($__internal_589c4f3f7460455474c31810b29258e49148740b7b478230532be891e61f1ee2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f877a8fd200bbe4bc81de35a06108391a40316f728c4ea86642b054a147e61d3 = $this->env->getExtension("native_profiler");
        $__internal_f877a8fd200bbe4bc81de35a06108391a40316f728c4ea86642b054a147e61d3->enter($__internal_f877a8fd200bbe4bc81de35a06108391a40316f728c4ea86642b054a147e61d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_f877a8fd200bbe4bc81de35a06108391a40316f728c4ea86642b054a147e61d3->leave($__internal_f877a8fd200bbe4bc81de35a06108391a40316f728c4ea86642b054a147e61d3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
