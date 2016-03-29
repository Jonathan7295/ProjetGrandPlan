<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_5fcbface004504eb0565671c639838718425982902cfd708d421bd1a9ca024a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_d8eca6b9ed339b496b56e757863eb0b956b86c7185622b9146cdef5b6d979149 = $this->env->getExtension("native_profiler");
        $__internal_d8eca6b9ed339b496b56e757863eb0b956b86c7185622b9146cdef5b6d979149->enter($__internal_d8eca6b9ed339b496b56e757863eb0b956b86c7185622b9146cdef5b6d979149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8eca6b9ed339b496b56e757863eb0b956b86c7185622b9146cdef5b6d979149->leave($__internal_d8eca6b9ed339b496b56e757863eb0b956b86c7185622b9146cdef5b6d979149_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac9ef512a30ba18af510f6f57223e77faa4b8d009f1c438b96df4d8639178306 = $this->env->getExtension("native_profiler");
        $__internal_ac9ef512a30ba18af510f6f57223e77faa4b8d009f1c438b96df4d8639178306->enter($__internal_ac9ef512a30ba18af510f6f57223e77faa4b8d009f1c438b96df4d8639178306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_ac9ef512a30ba18af510f6f57223e77faa4b8d009f1c438b96df4d8639178306->leave($__internal_ac9ef512a30ba18af510f6f57223e77faa4b8d009f1c438b96df4d8639178306_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
