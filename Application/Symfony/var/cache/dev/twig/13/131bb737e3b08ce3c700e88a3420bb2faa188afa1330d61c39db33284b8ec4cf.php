<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_043c772ab1045bf6b651915739ab8a2b34c278c409b9925ad33c71e5e662fe1d extends Twig_Template
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
        $__internal_fd81a061b7180797be0f9cdccdcc201655f5c5bff3a2570483b4e759f941b620 = $this->env->getExtension("native_profiler");
        $__internal_fd81a061b7180797be0f9cdccdcc201655f5c5bff3a2570483b4e759f941b620->enter($__internal_fd81a061b7180797be0f9cdccdcc201655f5c5bff3a2570483b4e759f941b620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd81a061b7180797be0f9cdccdcc201655f5c5bff3a2570483b4e759f941b620->leave($__internal_fd81a061b7180797be0f9cdccdcc201655f5c5bff3a2570483b4e759f941b620_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f3c939678ba6dd0d4124e0454db231055a596ddf21f201856a66c12ce2129ee = $this->env->getExtension("native_profiler");
        $__internal_4f3c939678ba6dd0d4124e0454db231055a596ddf21f201856a66c12ce2129ee->enter($__internal_4f3c939678ba6dd0d4124e0454db231055a596ddf21f201856a66c12ce2129ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4f3c939678ba6dd0d4124e0454db231055a596ddf21f201856a66c12ce2129ee->leave($__internal_4f3c939678ba6dd0d4124e0454db231055a596ddf21f201856a66c12ce2129ee_prof);

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
