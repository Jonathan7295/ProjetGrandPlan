<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_06459803bb1f26bf9a9f3fd61c37803b6559c8158373767288efd012d739bb2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_3be506c7a991f7c5850cb1f03541f585c5ffb153c566af855ad434799986f3a1 = $this->env->getExtension("native_profiler");
        $__internal_3be506c7a991f7c5850cb1f03541f585c5ffb153c566af855ad434799986f3a1->enter($__internal_3be506c7a991f7c5850cb1f03541f585c5ffb153c566af855ad434799986f3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3be506c7a991f7c5850cb1f03541f585c5ffb153c566af855ad434799986f3a1->leave($__internal_3be506c7a991f7c5850cb1f03541f585c5ffb153c566af855ad434799986f3a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82d27021c82fbf6831821ba273bdaee4dde08bde3a44dad88238b4332599e3df = $this->env->getExtension("native_profiler");
        $__internal_82d27021c82fbf6831821ba273bdaee4dde08bde3a44dad88238b4332599e3df->enter($__internal_82d27021c82fbf6831821ba273bdaee4dde08bde3a44dad88238b4332599e3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_82d27021c82fbf6831821ba273bdaee4dde08bde3a44dad88238b4332599e3df->leave($__internal_82d27021c82fbf6831821ba273bdaee4dde08bde3a44dad88238b4332599e3df_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
