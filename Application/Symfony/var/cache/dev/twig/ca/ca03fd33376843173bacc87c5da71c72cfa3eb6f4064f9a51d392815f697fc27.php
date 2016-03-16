<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_db02f47f0eeadc04b12758b7990feb23c0d65cf845b57d0b56bb21c401f71263 extends Twig_Template
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
        $__internal_63f6945b9ca330b2cbb71b5540b7becad47650904c46211173ad2b81efc2ba9f = $this->env->getExtension("native_profiler");
        $__internal_63f6945b9ca330b2cbb71b5540b7becad47650904c46211173ad2b81efc2ba9f->enter($__internal_63f6945b9ca330b2cbb71b5540b7becad47650904c46211173ad2b81efc2ba9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63f6945b9ca330b2cbb71b5540b7becad47650904c46211173ad2b81efc2ba9f->leave($__internal_63f6945b9ca330b2cbb71b5540b7becad47650904c46211173ad2b81efc2ba9f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6fa5034a1480d05225e2eedd207d1bb3fbe99f450638616e78cc3be2e6c1981 = $this->env->getExtension("native_profiler");
        $__internal_a6fa5034a1480d05225e2eedd207d1bb3fbe99f450638616e78cc3be2e6c1981->enter($__internal_a6fa5034a1480d05225e2eedd207d1bb3fbe99f450638616e78cc3be2e6c1981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_a6fa5034a1480d05225e2eedd207d1bb3fbe99f450638616e78cc3be2e6c1981->leave($__internal_a6fa5034a1480d05225e2eedd207d1bb3fbe99f450638616e78cc3be2e6c1981_prof);

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
